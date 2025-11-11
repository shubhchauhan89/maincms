<?php

namespace App\Controllers;
use App\Models\ProductsModel;
use App\Models\PostsModel;
use App\Libraries\User_details;
use App\Libraries\Arranges_data;
use App\Models\CartHistoryModel;
use App\Models\SeoProductImages;
use App\Libraries\Meta_keywords;
use App\Controllers\Custom;

class Products extends UiController { 
    

    public function __construct(){
        parent::__construct();
        $this->custom_controller = new Custom();
        $this->user_slider = new User_details();
        $this->arranges_data = new Arranges_data();
        $this->cart_history = new CartHistoryModel();
        $this->product_images = new SeoProductImages();
        $meta_lib = new Meta_keywords();
        $this->meta_lib_data = $meta_lib->getMetaKeywords($this->user['id']);
    } 
    
    
    public function product_details(){


        $slug = $this->request->uri->getSegment(2);         

        if(empty($slug)){
            $slug = $this->request->uri->getSegment(1);                 
            return $this->custom_controller->custom_Main_Menu($slug);
        }

        $slider = $this->user_slider->getSlider('Products -');
        /**
         * Make gallery images array
         */
        $images = $this->user_slider->galleryImages('Products -');
        
         /**
         * Make video gallery array
         */
        $video =  $this->user_slider->getVideoLists('Products -');

        /**
         * Make custom section array data
         */
        $custom =  $this->user_slider->getCustomSectionData('Products');

        /**
         * Make testimonial data section array data
         */
        $testimonial =  $this->user_slider->getTestimonialData('Products -');

        /**
         * Make faq list section array data
        */
        $fq_lists =  $this->user_slider->getFaqLists('Products -');

        /** 
         * Make faq list section array data
        */
        $services =  $this->user_slider->getServiesLists('Products -');

        /**
         * Make products list section array data
        */
        $products =  $this->user_slider->getProductsLists('Products -');

        $logo_slider =  $this->user_slider->getLogoSliderData('Products -');

        /**
         * Make products list section array data
        */
        $post_updates =  $this->user_slider->getUpdateLists('Products -'); 

        $slug = ""; 
        $menu_sub_menu_id = "";
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
            $slug = $this->request->uri->getSegment(2);
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
            $sort_order   = $this->user_slider->getSortOrder('', $menu_id, $sub_menu);

            $logo_slider =  $this->user_slider->newLogoSlider($menu_id, $sub_menu);

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
        
        if(!empty($slug)){
               $this->product = new ProductsModel();
               $this->posts = new PostsModel();
            $product = $this->product->where('menu_link', $slug)->first();
          
            $product_images = $this->product_images->where('product_id', $product['id'])->orderBY('id', 'desc')->findAll();
            
            if (!empty($product['related_product'])) {
                $related_product_ids = json_decode($product['related_product'], true); 
                if ($related_product_ids !== null) {
                    $related_products = [];
                    foreach ($related_product_ids as $related_id) {
                        $related_products[] = $this->product->find($related_id);
                    }
                    $all_products = $related_products;
                } else {
                    $all_products = [];
                }
            } else {
                $all_products = [];
            }
            if (!empty($product['related_blogposts'])) {
                $related_blogposts_ids = json_decode($product['related_blogposts'], true); 
                if ($related_blogposts_ids !== null) {
                    $related_blogs = [];
                    foreach ($related_blogposts_ids as $related_blog_id) {
                        $related_blogs[] = $this->posts->find($related_blog_id);
                    }
                    $all_blogs = $related_blogs;
                } else {
                    $all_blogs = [];
                }
            } else {
                $all_blogs = [];
            }
            $pageData = [
                'title' => 'Product | '.$slug,
                'description' => 'This is the Product Detail page',
                'keywords' => 'Healthcare',
                'slugs' => empty($slug)?"Products Section":$slug,
                'user_details'  => $this->user,
                'menu_lists'    => $this->final_menu,

                'product'       => $product,
                'all_products'  => $all_products,
                'all_blogs'  => $all_blogs,

                'cart'          => cart_history(),
                'colors'        => $this->colors,
                'meta_keywords' => $this->meta_lib_data,

                'product_images'=> $product_images,
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
                "sort_order"    => $sort_order,
                "logo_slider"    => $logo_slider,
                "custom_insert" => $this->user_head_foot,
            ];         
            return view($this->user['theme_name'].'/'.'frontend/product_detail', $pageData);
        }
        $this->product = new ProductsModel();
        $all_products = $this->product->findAll();
        $pageData = [
            'title' => 'Product details',
            'description' => 'This is the Product Detail page',
            'keywords' => 'Healthcare',
            'slugs' => empty($slug)?"Products Section":$slug,
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'all_products'  => $all_products,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
            'meta_keywords' => $this->meta_lib_data,
            'services'      => $services,
            'products'      => $products,
            'posts'         => $post_updates,
            'videoes'       => $video,
            'gallery_images'=> $images,
            'custom_section'=> $custom,
            'testimonials'  => $testimonial,
            'fq_lists'      => $fq_lists,
            'sort_order'    => $sort_order,
            "logo_slider"    => $logo_slider,
            "custom_insert" => $this->user_head_foot,
        ];
      
        return view($this->user['theme_name'].'/'.'frontend/product_details', $pageData);
    }

    public function search(){
        return redirect()->to(base_url());
    }
}


