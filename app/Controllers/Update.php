<?php

namespace App\Controllers;
use App\Libraries\User_details;
use App\Models\PostsModel;
use App\Models\CustomSubMenu;
use App\Libraries\Meta_keywords;
use App\Libraries\Arranges_data;
use App\Models\MenuModel;

class Update extends UiController { 
    
    protected $arranges_data;
    public function __construct(){
        parent::__construct();
        $this->menu_model = new MenuModel();
        $this->arranges_data = new Arranges_data();
        $this->user_slider = new User_details();
        $meta_lib = new Meta_keywords();
        $this->meta_lib_data = $meta_lib->getMetaKeywords($this->user['id']);
    } 
  
    public function update_details(){   
        $update = $this->request->uri->getSegment(2);
        $slider = $this->user_slider->getSlider('Updates');
        /**
         * Make gallery images array
         */
        $images = $this->user_slider->galleryImages('Updates');
        
         /**
         * Make video gallery array
         */
        $video =  $this->user_slider->getVideoLists('Updates');

        /**
         * Make custom section array data
         */
        $custom =  $this->user_slider->getCustomSectionData('Updates');
        
        /**
         * Make testimonial data section array data
         */
        $testimonial =  $this->user_slider->getTestimonialData('About Us');

                /**
         * Make faq list section array data
        */
        $fq_lists =  $this->user_slider->getFaqLists('Updates');

        /** 
         * Make faq list section array data
        */
        $services =  $this->user_slider->getServiesLists('Updates');

        /**
         * Make products list section array data
        */
        $products =  $this->user_slider->getProductsLists('Updates');

    
        /**
         * Make products list section array data
        */
        $post_updates =  $this->user_slider->getUpdateLists('Updates');
        
        $is_active_os =  0;    
        $active_os_data = $this->menu_model->select('is_active_os')->where('menu_name','Updates')->find();
        
        if(!empty($active_os_data)){
           $is_active_os = $active_os_data[0]['is_active_os'];
        }        
        
        $slugs = ""; 
        $menu_sub_menu_id = "";
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
            $slugs = $this->request->uri->getSegment(2);
            $menu_sub_menu_id = $this->request->uri->getSegment(3);
        }
        
        $final_slider = [];
        $business_query = [];
        $sort_order = [];
       
        
        if(!empty($menu_sub_menu_id)){
            $menu_sub_menu_id = base64_decode($menu_sub_menu_id);
            $arr = explode("/", $menu_sub_menu_id);
            $menu_id  = $arr[0];
            $sub_menu = $arr[1];
            
            //Get sorting oder of arrange section
            $sort_order   =  $this->user_slider->getSortOrder('', $menu_id, $sub_menu);
            $final_slider = $this->arranges_data->getCustomArrangeSlider($menu_id, $sub_menu);
            $custom       = $this->arranges_data->getCustomSectionData($menu_id, $sub_menu);
            $services =  $this->user_slider->getNewServiesLists($menu_id, $sub_menu);
            $products     =  $this->user_slider->getNewProductsLists($menu_id, $sub_menu);
            $images       =  $this->user_slider->newGalleryImages($menu_id, $sub_menu);
            $video        =  $this->user_slider->newVideoGallery($menu_id, $sub_menu);
            $testimonial  =  $this->user_slider->newTestimonials($menu_id, $sub_menu);
            $fq_lists     =  $this->user_slider->newFaqsSection($menu_id, $sub_menu);
            $post_updates =  $this->user_slider->newPostUpdates($menu_id, $sub_menu);
            $business_query=  $this->user_slider->getNewBusinessQuery($menu_id, $sub_menu);
        }
            
            
        if(!empty($slugs)){
            $this->post = new PostsModel();
            $post = $this->post->where('slug', $update)->first();
            $all_posts = $this->post->where('status', 'published')->findAll();
            
            $update_id = getMenuId('Updates');
            $custom_submenu = new CustomSubMenu();
            $custom_submenu->select(['seo_custom_sub_menu.id', 'seo_custom_sub_menu.sub_menu', 'seo_custom_sub_menu.sub_menu_link', 'seo_custom_sub_menu.menu_id', 'seo_custom_sub_menu.created_at', 'seo_custom_pages_data.image']);
            $custom_submenu->join('seo_custom_pages_data', 'seo_custom_pages_data.custom_sub_menu_id=seo_custom_sub_menu.id');
            $custom_updates = $custom_submenu->where('menu_id', $update_id)->findAll();

            $pageData = [
                'title' => 'Updates | '.$update,
                'description' => 'This is the Product Detail page',
                'keywords' => 'Healthcare',
                'slugs' => empty($update)?"Products Section":$update,
                'user_details'  => $this->user,
                'menu_lists'    => $this->final_menu,
                'cart'          => cart_history(),
                'colors'        => $this->colors,
                'post'          => $post,
                'all_post'      => $all_posts,
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
                "custom_updates"=> $custom_updates,
                "custom_insert" => $this->user_head_foot,
                "is_active_os"  => $is_active_os
            ];
                
            return view($this->user['theme_name'].'/'.'frontend/update_detail', $pageData);
        }

        $this->post = new PostsModel();
        $all_posts = $this->post->findAll();
        $pageData = [
            'title' => 'Update details',
            'description' => 'This is the Update Detail page',
            'keywords' => 'Healthcare',
            'update' => !empty($update)?$update:"Update section",
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
            'all_post'      => $all_posts,
            'meta_keywords' => $this->meta_lib_data,
            'sliders'       => $slider,
            'services'      => $services,
            'products'      => $products,
            'posts'         => $post_updates,
            'videoes'       => $video,
            'gallery_images'=> $images,
            'custom_section'=> $custom,
            'testimonials'  => $testimonial,
            'fq_lists'      => $fq_lists,
            'sort_order'    => $sort_order,
            "custom_insert" => $this->user_head_foot,
            "is_active_os"  => $is_active_os
        ];
            
          
        return view($this->user['theme_name'].'/'.'frontend/update_details', $pageData);
    }

    public function search(){
        return redirect()->to(base_url());
    }
}


