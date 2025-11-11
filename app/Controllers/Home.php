<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Libraries\User_details;
use App\Models\CartHistoryModel;
use App\Libraries\Meta_keywords;

class Home extends UiController
{
    protected $slider_model;
    protected $slider_images;
    protected $cart_history;
    protected $meta_lib_data;

    public function __construct()
    {
        parent::__construct();
        $this->user_slider = new User_details();
        $this->cart_history = new CartHistoryModel();
        $meta_lib = new Meta_keywords();
        $this->meta_lib_data = $meta_lib->getMetaKeywords($this->user['id']);
    }

    public function index()
    {
        
         $userController = new UserController();
        $userController->cronFunction();

        $url = getenv('PARENT_URL') . '/user/payment-status';
        $post = [
            //'base_url' => 'demo.sartiaglobal.com',
            'base_url' => base_url(),
        ];
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_AUTOREFERER    => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $post,
        );
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $payment_status  = curl_exec($ch);
        curl_close($ch);
        
        
        
        $userController = new UserController();
        $userController->cronFunction();

        $this->session      = session();

        /**
         * Make Slider images array
         */
        $slider = $this->user_slider->getSlider('Home');


        /**
         * Make gallery images array
         */
        $images = $this->user_slider->galleryImages('Home');

        /**
         * Make video gallery array
         */
        $video =  $this->user_slider->getVideoLists('Home');
      
            
         /**
         * Make custom section array data
         */
        $custom =  $this->user_slider->getCustomSectionData('1', '0', '');

        /**
         * Make testimonial data section array data
         */
        $testimonial =  $this->user_slider->getTestimonialData('Home');

        $logo_slider =  $this->user_slider->getLogoSliderData('Home');
           
        /**
         * Make faq list section array data
         */
        $fq_lists =  $this->user_slider->getFaqLists('Home');

        /** 
         * Make faq list section array data
         */
        $services =  $this->user_slider->getServiesLists('Home');

        /**
         * Make products list section array data
         */
        $products =  $this->user_slider->getProductsLists('Home');

        /**
         * Make products list section array data
         */
        $post_updates = $this->user_slider->getUpdateLists('Home');
        
        $latest_post = [];
        if (!empty($post_updates) && isset($post_updates[0]['posts'])) {
            $posts_array = $post_updates[0]['posts'];
            $recent_posts = array_slice($posts_array, -6);
            
            $latest_post[] = [
                'posts'         => $recent_posts,
                'section_id'    => $post_updates[0]['section_id'],
                'sub_menu_name' => $post_updates[0]['sub_menu_name']
            ];
        }
                
        
        /**
         * Make Updates and Post list section array data
        */
        $all_post_updates =  $this->user_slider->getAllUpdateLists();
        
          $all_ten_post_updates = array_slice($all_post_updates,-10);
        
        $final_all_post_updates = array_slice($all_ten_post_updates, 0, 5, true);

        /**
         * Make products list section array data
         */
        $sort_order =  $this->user_slider->getSortOrder('Home');

        $pageData = [
            'payment_status'  => $payment_status,
            'title'         => 'Home',
            'description'   => 'This is the index page',
            'keywords'      => 'Healthcare',
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'colors'        => $this->colors,
            'cart'          => cart_history(),
            'meta_keywords' => $this->meta_lib_data,
            'sliders'       => $slider,
            'services'      => $services,
            'products'      => $products,
            'posts'         => $latest_post,
            'all_posts'     => $final_all_post_updates,
            'videoes'       => $video,
            'gallery_images' => $images,
            'custom_section' => $custom,
            'testimonials'  => $testimonial,
            'fq_lists'      => $fq_lists,
            'sort_order'    => $sort_order,
            'logo_slider'    => $logo_slider,
            "custom_insert" => $this->user_head_foot,
        ];
        return view($this->user['theme_name'] . '/' . 'frontend/index', $pageData);
    }

    public function searchLink()
    {
        $menu_model = new MenuModel();
        $search = $this->request->getVar("search");

        $menu_model->select('menu_link');
        $menu_model->like('menu_name', $search);
        $url = $menu_model->findAll(1);
        if (count($url) > 0) {
            return redirect()->to($url[0]['menu_link']);
        }
        return redirect()->to(base_url());
    }
}
