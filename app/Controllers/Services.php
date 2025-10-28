<?php

namespace App\Controllers;
use App\Models\ServicesModel;
use App\Libraries\User_details;
use App\Libraries\Meta_keywords;
use App\Libraries\Arranges_data;
use App\Models\ArrangeCustomSection;
use App\Models\CustomSubMenu;
use App\Models\MenuModel;

class Services extends UiController { 
    protected $arranges_data;
    public function __construct(){
        parent::__construct();
        $this->menu_model = new MenuModel();
        $this->arranges_data = new Arranges_data();
        $this->custom_arrange = new ArrangeCustomSection();
        $this->user_slider = new User_details();
        $meta_lib = new Meta_keywords();
        $this->meta_lib_data = $meta_lib->getMetaKeywords($this->user['id']);
    } 

    public function services_details(){
        $slider = $this->user_slider->getSlider('Service -');
    
        /**
         * Make gallery images array
         */
        $images = $this->user_slider->galleryImages('Service -');
        
         /**
         * Make video gallery array
         */
        $video =  $this->user_slider->getVideoLists('Service -');
        
        /**
         * Make custom section array data
         */
        $custom =  $this->user_slider->getCustomSectionData('Services');

        /**
         * Make testimonial data section array data
         */
        $testimonial =  $this->user_slider->getTestimonialData('Service -');

        /**
         * Make faq list section array data
        */
        $fq_lists =  $this->user_slider->getFaqLists('Service -');

        /** 
         * Make faq list section array data
        */
        $services =  $this->user_slider->getServiesLists('Service -');

        /**
         * Make products list section array data
        */
        $products =  $this->user_slider->getProductsLists('Service -');


        /**
         * Make products list section array data
        */
        $post_updates =  $this->user_slider->getUpdateLists('Service -');     
            
        $is_active_os =  0;    
        $active_os_data = $this->menu_model->select('is_active_os')->where('menu_name','Services')->find();
        
        if(!empty($active_os_data)){
           $is_active_os = $active_os_data[0]['is_active_os'];
        }
        
        $business_query =[];

        $slugs = ""; 
        $menu_sub_menu_id = "";
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
            $slugs = $this->request->uri->getSegment(2);
            $menu_sub_menu_id = $this->request->uri->getSegment(3);
        }
        $final_slider = [];
        $business_query = [];
        $sort_order = [];
        $custom_services = [];
        
        if(!empty($menu_sub_menu_id)){
            $menu_sub_menu_id = base64_decode($menu_sub_menu_id);
            $arr = explode("/", $menu_sub_menu_id);
            $menu_id  = $arr[0];
            $sub_menu = $arr[1];
            
            //Get sorting oder of arrange section
            $sort_order   =  $this->user_slider->getSortOrder('', $menu_id, $sub_menu);

            $final_slider = $this->arranges_data->getCustomArrangeSlider($menu_id, $sub_menu);

            $custom       = $this->arranges_data->getCustomSectionData($menu_id, $sub_menu);

            $services     =  $this->user_slider->getNewServiesLists($menu_id, $sub_menu);

            $products     =  $this->user_slider->getNewProductsLists($menu_id, $sub_menu);

            $images       =  $this->user_slider->newGalleryImages($menu_id, $sub_menu);

            $video        =  $this->user_slider->newVideoGallery($menu_id, $sub_menu);

            
            $testimonial  =  $this->user_slider->newTestimonials($menu_id, $sub_menu);

            $fq_lists     =  $this->user_slider->newFaqsSection($menu_id, $sub_menu);

            $post_updates =  $this->user_slider->newPostUpdates($menu_id, $sub_menu);
            
            $business_query=  $this->user_slider->getNewBusinessQuery($menu_id, $sub_menu);
            
        }
        
       
        if (!empty($slugs)) {
            $this->services = new ServicesModel();
            $service = $this->services->where('slug', $slugs)->first();
            if (!empty($service)) { // Check if the service exists with the given slug
                if (!empty($service['related_services'])) {
                    $related_service_ids = json_decode($service['related_services'], true); 
                    if ($related_service_ids !== null) {
                        $related_services = [];
                        foreach ($related_service_ids as $related_id) {
                            $related_service = $this->services->find($related_id);
                            if (!empty($related_service)) { // Check if the related service exists
                                $related_services[] = $related_service;
                            }
                        }
                        $all_services = $related_services;
                    } else {
                        $all_services = $this->services->findAll();
                    }
                } else {
                    $all_services = $this->services->findAll();
                }
        
                //Get services custom pages and pages data(Image)
                $service_id = getMenuId('Services');
                $custom_submenu = new CustomSubMenu();
                $custom_submenu->select(['seo_custom_sub_menu.id', 'seo_custom_sub_menu.sub_menu', 'seo_custom_sub_menu.sub_menu_link', 'seo_custom_sub_menu.menu_id', 'seo_custom_pages_data.image']);
                $custom_submenu->join('seo_custom_pages_data', 'seo_custom_pages_data.custom_sub_menu_id=seo_custom_sub_menu.id');
                $custom_services = $custom_submenu->where('menu_id', $service_id)->findAll();
               
                $pageData = [
                    'title' => 'Services | '.$slugs,
                    'description' => 'This is the Services Detail page',
                    'keywords' => 'Healthcare',
                    'slug' => $slugs,
                    'user_details'  => $this->user,
                    'menu_lists'    => $this->final_menu,
                    'service'       => $service,
                    'all_services'  => $all_services,
        
                    'cart'          => cart_history(),
                    'colors'        => $this->colors,
                    'meta_keywords' => $this->meta_lib_data,
        
                    'sliders'       => $final_slider,
                    'services'      => $services,
                    'products'      => $products,
                    'posts'         => $post_updates,
                    'videoes'       => $video,
                    'gallery_images'=> $images,
                    'custom_section'=> $custom,
                    'testimonials'  => $testimonial,
                    'fq_lists'      => $fq_lists,
                    'business_query'=> $business_query,
                    'sort_order'    => $sort_order,
                    'custom_services'=> $custom_services,
                    "custom_insert" => $this->user_head_foot,
                    "is_active_os"  => $is_active_os
                ];
              
                return view($this->user['theme_name'].'/'.'frontend/service_detail', $pageData);
            } else {
                // Handle the case when no service is found with the given slug
                // For example, redirect to an error page or show a message
            }
        } else {
            
            $this->services = new ServicesModel();
            $all_services = $this->services->findAll();

            $pageData = [
                'title' => 'Services details',
                'description' => 'This is the Services Detail page',
                'keywords' => 'Healthcare',
                'slug' => empty($slugs)?"Services Section":$slugs,
                'user_details'  => $this->user,
                'menu_lists'    => $this->final_menu,
                'all_services'  => $all_services,
                'cart'          => cart_history(),
                'colors'        => $this->colors,
                'meta_keywords' => $this->meta_lib_data,
                
                'sliders'       => $slider,
                'products'      => $products,
                'services'      => $services,
                'posts'         => $post_updates,
                'videoes'       => $video,
                'gallery_images'=> $images,
                'custom_section'=> $custom,
                'testimonials'  => $testimonial,
                'fq_lists'      => $fq_lists,
                'custom_services'=> $custom_services,
                'sort_order'    => $sort_order,
                "custom_insert" => $this->user_head_foot,
                "is_active_os"  => $is_active_os
            ];
                    
            
            return view($this->user['theme_name'].'/'.'frontend/services_details', $pageData);
         // Handle the case when the $slugs variable is empty
        }
    }

    public function search(){
        return redirect()->to(base_url());
    }

    /**
     * Services filter function
     *
     * @return void
     */
    public function serviceSearch(){
        $slugs = "";
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
            $slugs = $this->request->uri->getSegment(2);
        }

        $this->services = new ServicesModel();
        $val = $this->request->getPost("form1");
        $service = $this->services->like('service', $val)->first();

        // $this->services->select(['slug', 'service', 'menu_link']);
        // $all_services = $this->services->findAll();
        if(!empty($service)){
            return redirect()->to(base_url().'/'.'services/'.$service['slug']);
        }
        return redirect()->to(base_url());
    }
}


