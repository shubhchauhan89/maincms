<?php

namespace App\Libraries;

use App\Models\Users_model;
use App\Models\Appearance_model;

use App\Models\MenuModel;
use App\Models\CustomSubMenu;


use App\Models\SliderModel;
use App\Models\SliderSectionModel;

use App\Models\CustomSectionModel;

use App\Models\ServicesModel;
use App\Models\ServiceSectionModel;

use App\Models\ProductsModel;
use App\Models\ProductsSectionModel;

use App\Models\PostsModel;
use App\Models\PostSectionModel;

use App\Models\GallerySection;
use App\Models\ImagesGallary;

use App\Models\VideoModel;
use App\Models\VideoGallerySection;

use App\Models\Testimonial;
use App\Models\TestimonialSection;

use App\Models\LogoSlider;
use App\Models\LogoSliderSection;

use App\Models\FaqModel;
use App\Models\FaqSectionModel;

use App\Models\ArrangeSection;
use App\Models\ArrangeCustomSection;

use App\Models\BusinessQuery;



class User_details
{

    /**
     * Making menu list
     *
     * @return void
     */
    public function menuLists(){

        //Get all menu list  
        $this->menu = new MenuModel();
        $this->menu->select(['id', 'menu_name', 'menu_link','is_active_os','default_menu','custom_default_menu']);
        $this->menu->where(['sub_menu' => '0', 'footer_menu' => '0']);
        $this->menu->orderBy('sorting_order', 'asc');
        $menus =  $this->menu->findAll();

        //Make final menu array for view page
        $final_menu = [];
        foreach ($menus as $menu) {
            $sub = [];

            if ($menu['menu_name'] == "Services") {
                $this->services = new ServicesModel();
                $this->services->select(['id', 'menu_link', 'service']);
                $services = $this->services->where('menu_id', $menu['id']);
                $services = $this->services->where('nav_view', 1)->findAll();
                if (!empty($services)) {
                    foreach ($services as $service) {
                        $sub[] = [
                            'menu_name' => $service['service'], "menu_link" => 'services/' . $service['menu_link'],
                            "sub_menu" => $service['id']
                        ];
                    }
                }

                //Check custom menu exit or not
                $this->custom = new CustomSubMenu();
                $custom_submenus = $this->custom->select(['id', 'sub_menu', 'sub_menu_link'])
                    ->where('menu_id', $menu['id'])
                    ->orderBy('id', 'desc')
                    ->findAll();

                if (!empty($custom_submenus)) {
                    foreach ($custom_submenus as $custom_submenu) {
                        $sub[] = [
                            'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'services/' . $custom_submenu['sub_menu_link'],
                            "sub_menu" => $custom_submenu['id']
                        ];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            } else if ($menu['menu_name'] == "Products") {
                $this->product = new ProductsModel();
                $this->product->select(['id', 'product_name', 'menu_link']);
                $product = $this->product->where('menu_id', $menu['id']);
                $product = $this->product->where('nav_view', 1)->findAll();
                if (!empty($product)) {
                    foreach ($product as $prod) {
                        $sub[] = [
                            'menu_name' => $prod['product_name'], "menu_link" => 'products/' . $prod['menu_link'],
                            "sub_menu" => $prod['id']
                        ];
                    }
                }

                //Check custom menu exit or not
                $this->custom = new CustomSubMenu();
                $custom_submenus = $this->custom->select(['id', 'sub_menu', 'sub_menu_link'])
                    ->where('menu_id', $menu['id'])
                    ->orderBy('id', 'desc')
                    ->findAll();

                if (!empty($custom_submenus)) {
                    foreach ($custom_submenus as $custom_submenu) {
                        $sub[] = [
                            'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'products/' . $custom_submenu['sub_menu_link'],
                            "sub_menu" => $custom_submenu['id']
                        ];
                    }
                }

                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            } else if ($menu['menu_name'] == "Updates") {
                $user = $this->getUserDetails();
                $this->post = new PostsModel();
                $this->post->select(['id', 'title', 'slug']);
                $posts = $this->post
                    ->where(['created_by' => $user['id'], 'status' => 'published'])
                    ->orderBy('id', 'desc')
                    ->findAll(5);

                if (!empty($posts)) {
                    foreach ($posts as $post) {
                        $sub[] = [
                            'menu_name' => $post['title'], "menu_link" => 'updates/' . $post['slug'],
                            "sub_menu" => $post['id']
                        ];
                    }
                }

                //Check custom menu exit or not
                $this->custom = new CustomSubMenu();
                $custom_submenus = $this->custom->select(['id', 'sub_menu', 'sub_menu_link'])
                    ->where('menu_id', $menu['id'])
                    ->orderBy('id', 'desc')
                    ->findAll();

                if (!empty($custom_submenus)) {
                    foreach ($custom_submenus as $custom_submenu) {
                        $sub[] = [
                            'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'updates/' . $custom_submenu['sub_menu_link'],
                            "sub_menu" => $custom_submenu['id']
                        ];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            } else {
                //Check custom menu exit or not
                $user = $this->getUserDetails();
                $this->custom = new CustomSubMenu();
                $custom_submenus = $this->custom->select(['id', 'sub_menu', 'sub_menu_link'])
                    ->where([
                        'created_by' => $user['id'],
                        'menu_id' => $menu['id']
                    ])
                    ->orderBy('id', 'desc')
                    ->findAll();

                if (!empty($custom_submenus)) {
                    foreach ($custom_submenus as $custom_submenu) {
                        $sub[] = [
                            'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'custom/' . $custom_submenu['sub_menu_link'],
                            "sub_menu" => $custom_submenu['id']
                        ];
                    }
                }else{
                    if($menu['custom_default_menu']==1){
                        $menu['menu_link'] = $menu['menu_link'];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
            }
        }
        //$menu = $this->getPagesSlider($final_menu);
        return $final_menu;
    }
    
    
    /**
     * Making menu list new
     *
     * @return void
     */
    public function menuLists_new(){

        //Get all menu list  
        $this->menu = new MenuModel();
      //  $this->menu->select(['id', 'menu_name', 'menu_link','created_at']);
        $this->menu->select('id, menu_name, menu_link,default_menu, custom_default_menu, is_active_os, DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at');   
        $this->menu->where(['sub_menu' => '0', 'footer_menu' => '0']);
        $this->menu->orderBy('sorting_order', 'asc');
        $menus =  $this->menu->findAll();

        //Make final menu array for view page
        $final_menu = [];
        foreach ($menus as $menu) {
            $sub = [];
            if($menu['is_active_os']=='1'){
                if ($menu['menu_name'] == "Services") {
                $this->services = new ServicesModel();
                // $this->services->select(['id', 'menu_link', 'service', 'created_at']);
                $this->services->select(['id,menu_link, service, DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at']);
                $services = $this->services->where('menu_id', $menu['id'])->findAll();
                if (!empty($services)) {
                    foreach ($services as $service) {
                        $sub[] = [
                            'menu_name' => $service['service'], "menu_link" => 'services/' . $service['menu_link'],
                            "sub_menu" => $service['id'],
                            "created_at" => $service['created_at']
                        ];
                    }
                }

                //Check custom menu exit or not
                $this->custom = new CustomSubMenu();
                $custom_submenus = $this->custom->select('id, sub_menu, sub_menu_link,DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at')    
                    ->where('menu_id', $menu['id'])
                    ->orderBy('id', 'desc')
                    ->findAll();

                if (!empty($custom_submenus)) {
                    foreach ($custom_submenus as $custom_submenu) {
                        $sub[] = [
                            'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'services/' . $custom_submenu['sub_menu_link'],
                            "sub_menu" => $custom_submenu['id'],
                            "created_at" => $custom_submenu['created_at']
                        ];
                    }
                }
                $menu['sub_menu'] = $sub;
                $final_menu[] = $menu;
                } else if ($menu['menu_name'] == "Products") {
                    $this->product = new ProductsModel();
                    // $this->product->select(['id', 'product_name', 'menu_link', 'created_at']);
                    $this->product->select('id, product_name, menu_link, DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at');
                    $product = $this->product->where('menu_id', $menu['id'])->findAll();
                    if (!empty($product)) {
                        foreach ($product as $prod) {
                            $sub[] = [
                                'menu_name' => $prod['product_name'], "menu_link" => 'products/' . $prod['menu_link'],
                                "sub_menu" => $prod['id'],
                                "created_at" => $prod['created_at']
                            ];
                        }
                    }
    
                    //Check custom menu exit or not
                    $this->custom = new CustomSubMenu();
                    $custom_submenus = $this->custom->select('id, sub_menu, sub_menu_link,DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at')
                        ->where('menu_id', $menu['id'])
                        ->orderBy('id', 'desc')
                        ->findAll();
    
                    if (!empty($custom_submenus)) {
                        foreach ($custom_submenus as $custom_submenu) {
                            $sub[] = [
                                'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'products/' . $custom_submenu['sub_menu_link'],
                                "sub_menu" => $custom_submenu['id'],
                                "created_at" => $custom_submenu['created_at']
                            ];
                        }
                    }
    
                    $menu['sub_menu'] = $sub;
                    $final_menu[] = $menu;
                } else if ($menu['menu_name'] == "Updates") {
                    $user = $this->getUserDetails();
                    $this->post = new PostsModel();
                    $this->post->select('id, title, slug, DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at');
                    $posts = $this->post
                        ->where(['created_by' => $user['id'], 'status' => 'published'])
                        ->orderBy('id', 'desc')
                        ->findAll(5);
    
                    if (!empty($posts)) {
                        foreach ($posts as $post) {
                            $sub[] = [
                                'menu_name' => $post['title'], "menu_link" => 'updates/' . $post['slug'],
                                "sub_menu" => $post['id'],
                                "created_at" => $post['created_at']
                            ];
                        }
                    }
    
                    //Check custom menu exit or not
                    $this->custom = new CustomSubMenu();
                    $custom_submenus = $this->custom->select('id, sub_menu, sub_menu_link,DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at')
                        ->where('menu_id', $menu['id'])
                        ->orderBy('id', 'desc')
                        ->findAll();
    
                    if (!empty($custom_submenus)) {
                        foreach ($custom_submenus as $custom_submenu) {
                            $sub[] = [
                                'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'updates/' . $custom_submenu['sub_menu_link'],
                                "sub_menu" => $custom_submenu['id'],
                                "created_at" => $custom_submenu['created_at']
                            ];
                        }
                    }
                    $menu['sub_menu'] = $sub;
                    $final_menu[] = $menu;
                } else {
                   if($menu['custom_default_menu'] ==1){
                        //Check custom menu exit or not
                        $user = $this->getUserDetails();
                        $this->custom = new CustomSubMenu();
                        $custom_submenus = $this->custom->select('id, sub_menu, sub_menu_link,DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at')
                            ->where([
                                'created_by' => $user['id'],
                                'menu_id' => $menu['id']
                            ])
                            ->orderBy('id', 'desc')
                            ->findAll();
        
                        if (!empty($custom_submenus)) {
                            foreach ($custom_submenus as $custom_submenu) {
                                $sub[] = [
                                    'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'custom/' . $custom_submenu['sub_menu_link'],
                                    "sub_menu" => $custom_submenu['id']
                                ];
                            }
                        }else{
                            $menu['menu_link'] = $menu['menu_link']; 
                        }
                        $menu['sub_menu'] = $sub;
                        $final_menu[] = $menu;
                   }else{
                        //Check custom menu exit or not
                        $user = $this->getUserDetails();
                        $this->custom = new CustomSubMenu();
                        $custom_submenus = $this->custom->select('id, sub_menu, sub_menu_link,DATE_FORMAT(created_at, "%Y-%m-%dT%TZ") as created_at')
                            ->where([
                                'created_by' => $user['id'],
                                'menu_id' => $menu['id']
                            ])
                            ->orderBy('id', 'desc')
                            ->findAll();
        
                        if (!empty($custom_submenus)) {
                            foreach ($custom_submenus as $custom_submenu) {
                                $sub[] = [
                                    'menu_name' => $custom_submenu['sub_menu'], "menu_link" => 'custom/' . $custom_submenu['sub_menu_link'],
                                    "sub_menu" => $custom_submenu['id']
                                ];
                            }
                        }
                        $menu['sub_menu'] = $sub;
                        $final_menu[] = $menu;
                   }
                }
            }
           
        }
        //$menu = $this->getPagesSlider($final_menu);
        return $final_menu;
    }

    /**
     * Get user all infomation
     *
     * @return void
     */
    public function getUserDetails(){
        $this->user = new Users_model();
        $user  = $this->user->getUserDetails();
        return $user;
    }

    /**
     * Get page slider
     *
     * @param [type] $data
     * @return void
     */
    public function getPagesSlider($data){

        $this->slider_model  = new SliderSectionModel();
        $this->slider_images = new SliderModel();

        $this->slider_model->select(['page_id', 'slider']);
        $slider_details = $this->slider_model->findAll();
        $slider_page = json_decode($slider_details[0]['page_id']);
        // echo "<pre>";
        // print_r($slider_page);
        $slider = json_decode($slider_details[0]['slider']);
        $slider_image_list = [];
        foreach ($slider as $v) {
            $this->slider_images->select(['slider_image', 'title', 'description', 'text_color', 'heading_color']);
            $image = $this->slider_images->find($v);
            if(!empty($image)){
                $img   = $image['slider_image'];
                $title = $image['title'];
                $desc  = $image['description'];
                $text  = $image['text_color'];
                $head  = $image['heading_color'];
                $arr = ["image" => $img, "title" => $title, "desc" => $desc, "text_color" => $text, 'heading_color' => $head];
                $slider_image_list[] = $arr;
            }
        }

        $slider_page = json_decode(json_encode($slider_page), true);
        $final_slider = [];
        foreach ($slider_page as $sp) {
            $sp['slider_image'] = $slider_image_list;
            $final_slider[] = $sp;
        }

        $final_menu_slider = [];
        foreach ($data as $key => $d) {
            $final_s_img = $this->setSliderInMenu($slider_page, $d['id'], $final_slider);
            $d['slider_images'] = (is_array($final_s_img) && !empty($final_s_img)) ? $final_s_img : [];
            $final_menu_slider[] = $d;
        }
        return $final_menu_slider;
    }

    /**
     * Make submenu list
     *
     * @param array $slider_page
     * @param integer $menu_id
     * @param array $slider_images
     * @return void
     */
    private function setSliderInMenu($slider_page = [], $menu_id = 0, $slider_images = []){
        foreach ($slider_page as $k => $sp) {
            if ($sp['menu'] === $menu_id) {
                return $slider_images[$k]['slider_image'];
            }
        }
    }

    /**
     * Fetch data from custom section 
     *
     * @return void
     */
    public function getCustomSectionData($menu_id = 0, $sub_menu = 0, $data = null){

        $custom_section_model  = new CustomSectionModel();
        $custom_section = $custom_section_model->where('status', 1)->findAll();

        $custom = [];
        if (!empty($custom_section)) {
            foreach ($custom_section as $value) {
                $custom_page = json_decode($value['page_id']);
                $temp = [];
                if ($custom_page[0]->menu == $menu_id && $custom_page[0]->sub_menu == $sub_menu) {
                    $temp['id'] = $value['id'];
                    $temp['upload_image'] = $value['upload_image'];
                    $temp['position'] = $value['position'];
                    $temp['heading'] = $value['heading'];
                    $temp['description'] = $value['description'];
                    $temp['image_option'] = $value['image_option'];
                    $temp['features_data'] = $value['features_data'];
                    $temp['statistics_data'] = $value['statistics_data'];
                    $temp['design_option'] = $value['design_option'];
                    $custom[] = $temp;
                }
            }
        }
        return $custom;
    }

    /**
     * Get services data and all details
     *
     * @return void
     */
    public function getServicesData(){
        $this->services = new ServicesModel();
        $services = $this->services->where('status', '1')->findAll();
        return $services;
    }

    /**
     * Get all product list and return 
     *
     * @return void
     */
    public function getAllProductsList(){
        $this->product = new ProductsModel();
        $all_products = $this->product->findAll();
        return $all_products;
    }

    /**
     * Get Video lists
     *
     * @return void
     */
    public function getVideoLists($data = null){

        $this->video_link    = new VideoModel();
        $this->video_section = new VideoGallerySection();
        $video_sections = $this->video_section->select(['id','heading' ,'videos', 'pages'])->findAll();
            
        $final_video_lists = [];

        foreach($video_sections as $video_section){
          
            $videos = json_decode($video_section['videos']);
            $video_section_pages = json_decode($video_section['pages']);
            $video_lists = [];
            $video_lists['heading'] = $video_section['heading'];
            foreach ($videos as $v) {
                $this->video_link->select(['url', 'title', 'thumbnail_images']);
                $video = $this->video_link->find($v);
                if(!empty($video)){
                    $url   = $video['url'];
                    $title = $video['title'];
                    $arr = ["url" => $url, "title" => $title, 'thumbnail_images' => $video['thumbnail_images']];
                    $video_lists[] = $arr;
                }
            }
            $video_lists['section_id'] = $video_section['id'];
            $video_lists['sub_menu_name'] = $video_section['heading'];
            foreach ($video_section_pages as $v) {
                if ($v->sub_menu_title == $data) {
                    $final_video_lists[] = $video_lists;
                }
            }
        }
        return $final_video_lists;
    }

    public function getAllPostLists(){
        $this->posts = new PostsModel();
        $all_posts = $this->posts->findAll();
        return $all_posts;
    }

    /**
     * get Page sider for single page;
     *
     * @param [type] $data
     * @return void
     */
    public function getSlider($data = null){
        $this->slider_model  = new SliderSectionModel();
        $this->slider_images = new SliderModel();

        $this->slider_model->select(['id', 'page_id', 'slider']);
        $slider_details = $this->slider_model->findAll();
        $final_slider = [];
        if (!empty($slider_details)) {
            foreach ($slider_details as $slider_detail) {

                $slider_page = json_decode($slider_detail['page_id']);
                $slider = json_decode($slider_detail['slider']);

                $slider_image_list = [];
                foreach ($slider as $v) {

                    $this->slider_images->select(['title_font_family', 'desc_font_family', 'slider_image','video','media_type', 'blur_on_description', 'title_font_size', 'description_font_size', 'image_blur','content_position', 'title', 'description', 'text_color', 'heading_color']);
                    $image = $this->slider_images->find($v);
                    if(!empty($image)){
                        $img   = $image['slider_image'];
                        $video   = $image['video'];
                        $media_type   = $image['media_type'];
                        $title = $image['title'];
                        $desc  = $image['description'];
                        $text  = $image['text_color'];
                        $head  = $image['heading_color'];
                        $blur  = $image['blur_on_description'];
                        $title_font_size  = $image['title_font_size'];
                        $description_font_size  = $image['description_font_size'];
                        $image_blur  = $image['image_blur'];
                        $content_position  = $image['content_position'];
                        $title_style  = $image['title_font_family'];
                        $desc_style   = $image['desc_font_family'];
                        $arr = ['title_style' => $title_style, 'desc_style' => $desc_style, "image" => $img,  "media_type" => $media_type, "video" => $video, "title" => $title, "desc" => $desc, "text_color" => $text, 'heading_color' => $head, 'blur' => $blur, 'image_blur' => $image_blur, 'title_font_size' => $title_font_size, 'description_font_size' => $description_font_size, 'content_position' => $content_position];
                        $slider_image_list[] = $arr;
                    }
                }

                $slider_page = json_decode(json_encode($slider_page), true);
                foreach ($slider_page as $sp) {
                    if ($sp['sub_menu_title'] == $data) {
                        $slider_image_list['section_id'] = $slider_detail['id'];
                        $final_slider[] = $slider_image_list;
                    }
                }
            }
        }
        return $final_slider;
    }

    /**
     * Find all color 
     *
     * @return void
     */
    public function getColors(){
        $appearance = new Appearance_model();
        return $appearance->findAllData();
    }

    /**
     * Make gallery images add data
     *
     * @param [type] $data
     * @return void
     */
    public function galleryImages($data){

        $this->gallery_section  = new GallerySection();
        $this->gallery_images   = new ImagesGallary();

        $this->gallery_section->select(['id','pages', 'images','heading']);
        $gallery_section_details = $this->gallery_section->findAll();
        $final_images_list = [];
        foreach($gallery_section_details as $gallery_section_detail){
            $gallery_section_pages = json_decode($gallery_section_detail['pages']);
            $images = json_decode($gallery_section_detail['images']);
            $images_list = [];
            foreach ($images as $v) {
                $this->gallery_images->select(['image', 'title']);
                $image = $this->gallery_images->find($v);
                if(!empty($image)){
                    $img   = $image['image'];
                    $title = $image['title'];
                    $arr = ["image" => $img, "title" => $title];
                    $images_list[] = $arr;
                }
            }
            $images_list['section_id'] = $gallery_section_detail['id'];
            $images_list['sub_menu_name'] = $gallery_section_detail['heading'];
            foreach ($gallery_section_pages as $gi) {
                if ($gi->sub_menu_title == $data) {
                    $final_images_list[] = $images_list;
                }
            }
        }
        return $final_images_list;
    }

    /**
     * Make Testimonial data
     *
     * @param [type] $data
     * @return void
     */
    public function getTestimonialData($data = null){
        $this->testimonial    = new Testimonial();
        $this->test_section = new TestimonialSection();
        $test_sections = $this->test_section->select(['id', 'testimonials', 'pages_ids','heading'])->findAll();
        $final_testimonials = [];
        foreach($test_sections as $test_section){
            $testimonial = json_decode($test_section['testimonials']);
            $test_section_pages = json_decode($test_section['pages_ids']);
            $testimonial_lists = [];
            foreach ($testimonial as $v) {
                $this->testimonial->select('seo_testimonial.name, seo_testimonial.image, seo_testimonial.description, seo_testimonial.created_at,seo_users.user_name, seo_users.business_logo');
                $this->testimonial->join('seo_users', 'seo_users.id=seo_testimonial.created_by');
                $testimo = $this->testimonial->find($v);
                if(!empty($testimo)){
                    $arr = [
                        "name" => $testimo['name'],
                        "image" => $testimo['image'],
                        'description' => $testimo['description'],
                        'created_at' => $testimo['created_at'],
                        'user_name' => $testimo['user_name'],
                        'business_logo' => $testimo['business_logo']
                    ];
                    $testimonial_lists[] = $arr;
                }
            }
            $testimonial_lists['section_id'] = $test_section['id'];
            $testimonial_lists['sub_menu_name'] = $test_section['heading'];
            
            foreach ($test_section_pages as $v) {
                if ($v->sub_menu_title == $data) {
                    $final_testimonials[] = $testimonial_lists;
                }
            }
        }
        return $final_testimonials;
    }

    public function getLogoSliderData($data = null){
        $this->logo_slider    = new LogoSlider();
        $this->test_section = new LogoSliderSection();
        $test_sections = $this->test_section->select(['id', 'logo_slider', 'pages_ids','heading'])->findAll();
        $final_logo_slider = [];
        foreach($test_sections as $test_section){
            $logo_slider = json_decode($test_section['logo_slider']);
            $test_section_pages = json_decode($test_section['pages_ids']);
            $logo_slider_lists = [];
            foreach ($logo_slider as $v) {
                $testimo = $this->logo_slider->find($v);
                if(!empty($testimo)){
                    $arr = [
                        "image" => $testimo['image'],
                        "name" => $testimo['name'],
                    ];
                    $logo_slider_lists[] = $arr;
                }
            }
            $logo_slider_lists['section_id'] = $test_section['id'];
            $logo_slider_lists['sub_menu_name'] = $test_section['heading'];
            
            foreach ($test_section_pages as $v) {
                if ($v->sub_menu_title == $data) {
                    $final_logo_slider[] = $logo_slider_lists;
                }
            }
        }
        return $final_logo_slider;
    }

    /**
     * Faq list
     *
     * @param [type] $data
     * @return void
     */
    public function getFaqLists($data = null){
        $this->faq_model  = new FaqModel();
        $this->faq_section_model = new FaqSectionModel();

        $this->faq_section_model->select(['id', 'pages_id', 'faqs_ids','heading']);
        $faq_section_details = $this->faq_section_model->findAll();
        $final_faqs = [];
        if (!empty($faq_section_details)) {
            foreach ($faq_section_details as $faq_section_detail) {

                $faq_pages = json_decode($faq_section_detail['pages_id']);
                $faqs      = json_decode($faq_section_detail['faqs_ids']);

                $faqs_list = [];
                foreach ($faqs as $v) {
                    $this->faq_model->select(['id', 'title', 'content', 'created_at', 'updated_at']);
                    $faq = $this->faq_model->find($v);
                    if (!empty($faq)) {
                        $arr = ['id' => $faq['id'], 'title' => $faq['title'], 'content' => $faq['content'], "created_at" => $faq['created_at'], "updated_at" => $faq['updated_at']];
                        $faqs_list[] = $arr;
                    }
                }
                $faqs_list['section_id'] = $faq_section_detail['id'];
                $faqs_list['sub_menu_name'] = $faq_section_detail['heading'];

                foreach ($faq_pages as $sp) {
                    if ($sp->sub_menu_title == $data) {
                        $final_faqs[] = $faqs_list;
                    }
                }
            }
        }
        return $final_faqs;
    }

    /**
     * Faq list
     *
     * @param [type] $data
     * @return void
     */
    public function getServiesLists($data = null){
        $this->services        = new ServicesModel();
        $this->service_section = new ServiceSectionModel();

        $this->service_section->select(['id', 'services', 'pages','heading']);
        $service_details = $this->service_section->findAll();

        $final_services = [];
        if (!empty($service_details)) {
            foreach ($service_details as $service_detail) {
                $service_pages = json_decode($service_detail['pages']);
                $services    = json_decode($service_detail['services']);

                $service_list = [];
                foreach ($services as $v) {
                    $this->services->select('*');
                    $faq = $this->services->find($v);
                    if(!empty($faq)){
                        $arr = [
                            'menu_id'          => $faq['menu_id'],
                            'sub_menu_id'      => $faq['id'],
                            'service'          => $faq['service'],
                            'menu_link'        => $faq['menu_link'],
                            "slug"             => $faq['slug'],
                            "image"            => $faq['image'],
                            'banner'           => $faq['banner'],
                            "content"          => $faq['content'],
                            "short_description" => $faq['short_description']
                        ];
                        $service_list[] = $arr;
                    }
                }
                $service_list['section_id'] = $service_detail['id'];
                $service_list['sub_menu_name'] = $service_detail['heading'];
                $service_pages = json_decode(json_encode($service_pages), true);
                foreach ($service_pages as $sp) {
                    if ($sp['sub_menu_title'] == $data) {
                        $final_services[] = $service_list;
                    }
                }
            }
        }
        return $final_services;
    }



    /**
     * Get all product list and return 
     *
     * @return void
     */
    public function getProductsLists($data = null)
    {
        $this->product = new ProductsModel();
        $this->product_section = new ProductsSectionModel();

        $this->product_section->select(['id', 'products', 'pages','heading']);
        $product_details = $this->product_section->findAll();
        $final_products = [];
        if (!empty($product_details)) {
            foreach ($product_details as $product_detail) {
                $product_pages = json_decode($product_detail['pages']);
                $products      = json_decode($product_detail['products']);
                $product_list = [];
                foreach ($products as $v) {
                    $this->product->select('*');
                    $prod = $this->product->find($v);
                    if(!empty($prod)){
                        $arr = [
                            'menu_id'          => $prod['menu_id'],
                            'sub_menu_id'      => $prod['id'],
                            'product_name'     => $prod['product_name'],
                            'id'               => $v,
                            'menu_link'        => $prod['menu_link'],
                            "total_inventry"   => $prod['total_inventry'],
                            "mrp"              => $prod['mrp'],
                            "text_on_image"              => $prod['text_on_image'],
                            "key_point"              => $prod['key_point'],
                            "price_info"              => $prod['price_info'],
                            "specifications"              => $prod['specifications'],
                            'discount'         => $prod['discount'],
                            "extra_charge"     => $prod['extra_charge'],
                            "main_image"       => $prod['main_image'],
                            "related_product"  => $prod['related_product'],
                            'short_description' => $prod['short_description'],
                            "long_description" => $prod['long_description'],
                            "specification"    => $prod['specification']
                        ];
                        $product_list[] = $arr;
                    }
                }
                $product_list['section_id'] = $product_detail['id'];
                $product_list['sub_menu_name'] = $product_detail['heading'];
                $product_pages = json_decode(json_encode($product_pages), true);
                foreach ($product_pages as $sp) {
                    if ($sp['sub_menu_title'] == $data) {
                        $final_products[] = $product_list;
                    }
                }
            }
        }
        return $final_products;
    }

    /**
     * Get all product list and return 
     *
     * @return void
     */
    public function getUpdateLists($data = null){
        $this->posts = new PostsModel();
        $this->posts_section = new PostSectionModel();

        $this->posts_section->select(['id', 'post_id', 'pages_id', 'heading']);
        $posts_details = $this->posts_section->findAll();
        
        $final_posts = [];
        if (!empty($posts_details)) {
            foreach ($posts_details as $posts_detail) {
                $post_pages = json_decode($posts_detail['pages_id']);
                $posts      = json_decode($posts_detail['post_id']);
                $product_list = [];
                
                foreach ($posts as $v) {
                    $this->posts->select('*');
                    $update = $this->posts->where('status', 'published')->find($v);
                    if(!empty($update)){
                        $arr = [
                            'id'             => $update['id'],
                            'title'          => $update['title'],
                            'slug'           => $update['slug'],
                            'image'          => $update['image'],
                            'description'    => $update['description'],
                            'text_on_image'  => $update['text_on_image'],
                            'specifications' => $update['specifications'],
                            'price_info'     => $update['price_info'],
                            'key_point'      => $update['key_point'],
                            'created_at'     => $update['created_at']
                        ];
                        $product_list[] = $arr;
                    }
                }
                
                // ✅ CORRECT: Create proper structure
                $final_posts_item = [
                    'posts'         => $product_list,
                    'section_id'    => $posts_detail['id'],
                    'sub_menu_name' => $posts_detail['heading']
                ];

                foreach ($post_pages as $sp) {
                    if ($sp->sub_menu_title == $data) {
                        $final_posts[] = $final_posts_item;
                    }
                }
            }
        }
        return $final_posts;
    }


    public function getSortOrder($data = null, $menu_id = 0, $submenu_id = 0){

        $this->arrange_section = new ArrangeSection();

        if ($data == "Home") {
            $menu_id = 1;
            $custom = $this->arrange_section->select(['title','section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        } else if ($data == "About Us") {
            $menu_id = 2;
            $custom = $this->arrange_section->select(['title','section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        } else if ($data == "Contact") {
            $menu_id = getMenuId($data);

            $custom = $this->arrange_section->select(['title','section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        } else if ($menu_id != 0 && $submenu_id != 0) {
            $arrange_custom_model = new ArrangeCustomSection();
            $custom = $arrange_custom_model->select(['title','section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'submenu_id' => $submenu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        }
    }

    public function getNewServiesLists($menu_id = 0, $sub_menu_id = 0){

        $this->services        = new ServicesModel();
        $this->service_section = new ServiceSectionModel();

        $this->service_section->select(['id', 'services', 'pages','heading']);
        $service_details = $this->service_section->findAll();

        $final_services = [];
        if (!empty($service_details)) {
            foreach ($service_details as $service_detail) {

                $service_pages = json_decode($service_detail['pages']);
                $services    = json_decode($service_detail['services']);

                $service_list = [];
                foreach ($services as $v) {
                    $this->services->select('*');
                    $faq = $this->services->find($v);
                    if(!empty($faq)){
                        $arr = [
                            'menu_id'          => $faq['menu_id'],
                            'sub_menu_id'      => $faq['id'],
                            'service'          => $faq['service'],
                            'menu_link'        => $faq['menu_link'],
                            "slug"             => $faq['slug'],
                            "image"            => $faq['image'],
                            'banner'           => $faq['banner'],
                            "content"          => $faq['content'],
                            "short_description" => $faq['short_description']
                        ];
                        $service_list[] = $arr;
                    }
                }
                $service_list['section_id'] = $service_detail['id'];
                $service_list['sub_menu_name'] = $service_detail['heading'];

                $service_pages = json_decode(json_encode($service_pages), true);
                foreach ($service_pages as $sp) {
                    if ($sp['menu'] == $menu_id && $sp['sub_menu'] == $sub_menu_id) {
                        $final_services[] = $service_list;
                    }
                }
            }
        }
        return $final_services;
    }

    public function getNewProductsLists($menu_id = 0, $sub_menu_id = 0){

        $this->products        = new ProductsModel();
        $this->product_section = new ProductsSectionModel();

        $this->product_section->select(['id', 'products', 'pages','heading']);
        $product_section = $this->product_section->findAll();

        $final_products = [];
        if (!empty($product_section)) {
            foreach ($product_section as $product_s) {

                $product_pages = json_decode($product_s['pages']);
                $products    = json_decode($product_s['products']);

                $product_list = [];
                foreach ($products as $v) {
                    $this->products->select('*');
                    $prod = $this->product->find($v);
                    if($prod){
                        $arr = [
                            'menu_id'          => $prod['menu_id'],
                            'sub_menu_id'      => $prod['id'],
                            'product_name'     => $prod['product_name'],
                            'menu_link'        => $prod['menu_link'],
                            "total_inventry"   => $prod['total_inventry'],
                            "text_on_image"              => $prod['text_on_image'],
                            "key_point"              => $prod['key_point'],
                            "price_info"              => $prod['price_info'],
                            "specifications"              => $prod['specifications'],
                            "mrp"              => $prod['mrp'],
                            'discount'         => $prod['discount'],
                            "extra_charge"     => $prod['extra_charge'],
                            "main_image"       => $prod['main_image'],
                            "related_product"  => $prod['related_product'],
                            'short_description' => $prod['short_description'],
                            "long_description" => $prod['long_description'],
                            "specification"    => $prod['specification']
                        ];
                        $product_list[] = $arr;
                    }
                }
                $product_list['section_id'] = $product_s['id'];
                $product_list['sub_menu_name'] = $product_s['heading'];
                $service_pages = json_decode(json_encode($product_pages), true);
                foreach ($service_pages as $sp) {
                    if ($sp['menu'] == $menu_id && $sp['sub_menu'] == $sub_menu_id) {
                        $final_products[] = $product_list;
                    }
                }
            }
        }
        return $final_products;
    }

    public function newGalleryImages($menu_id = 0, $sub_menu_id = 0){
        $this->gallery_section  = new GallerySection();
        $this->gallery_images   = new ImagesGallary();

        $this->gallery_section->select(['id', 'pages', 'images','heading']);
        $gallery_section_details = $this->gallery_section->findAll();
        $final_images = [];
        if (!empty($gallery_section_details)) {
            foreach ($gallery_section_details as $gallery_sections) {
                $gallery_section_pages = json_decode($gallery_sections['pages']);
                $images = json_decode($gallery_sections['images']);
                foreach ($images as $v) {
                    $this->gallery_images->select(['image', 'title']);
                    $image = $this->gallery_images->find($v);
                    if(!empty($image)){
                        $img   = $image['image'];
                        $title = $image['title'];
                        $arr = ["image" => $img, "title" => $title];
                        $images_list[] = $arr;
                    }
                }
                $images_list['section_id'] = $gallery_sections['id'];
                $images_list['sub_menu_name'] = $gallery_sections['heading'];
                foreach ($gallery_section_pages as $gi) {
                    if ($gi->menu == $menu_id && $gi->sub_menu == $sub_menu_id) {
                        $final_images[] = $images_list;
                    }
                }
            }
        }
        return $final_images;
    }

    public function newVideoGallery($menu_id = 0, $sub_menu_id = 0){
        $this->video_link    = new VideoModel();
        $this->video_section = new VideoGallerySection();

        $video_section = $this->video_section->select(['id','heading', 'videos', 'pages'])->findAll();

        $final_video = [];
        if (!empty($video_section)) {
            foreach ($video_section as $video_sec) {
                $video_pages = json_decode($video_sec['pages']);
                $videos = json_decode($video_sec['videos']);
                $video_lists = [];
                $video_lists['heading'] = $video_sec['heading'];
                foreach ($videos as $v) {
                    $this->video_link->select(['url', 'title', 'thumbnail_images']);
                    $vid = $this->video_link->find($v);
                    if(!empty($vid)){
                        $url   = $vid['url'];
                        $title = $vid['title'];
                        $arr = ["url" => $url, "title" => $title, 'thumbnail_images' => $vid['thumbnail_images']];
                        $video_lists[] = $arr;
                        $arr = [];
                    }
                }
                $video_lists['section_id'] = $video_sec['id'];

                foreach ($video_pages as $vi) {
                    if ($vi->menu == $menu_id && $vi->sub_menu == $sub_menu_id) {
                        $final_video[] = $video_lists;
                    }
                }
            }
        }
        return $final_video;
    }

    public function newTestimonials($menu_id = 0, $sub_menu_id = 0){

        $this->testimonial    = new Testimonial();
        $this->test_section   = new TestimonialSection();

        $testimonial_section = $this->test_section->select(['id', 'testimonials', 'pages_ids','heading'])->findAll();

        $final_testimonials = [];
        if (!empty($testimonial_section)) {
            foreach ($testimonial_section as $testimonial_sec) {

                $pages = json_decode($testimonial_sec['pages_ids']);
                $value  = json_decode($testimonial_sec['testimonials']);
                $testi_lists = [];
                foreach ($value as $v) {
                    $this->testimonial->select('seo_testimonial.name, seo_testimonial.image, seo_testimonial.description, seo_testimonial.created_at,seo_users.user_name, seo_users.business_logo');
                    $this->testimonial->join('seo_users', 'seo_users.id=seo_testimonial.created_by');
                    $testimo = $this->testimonial->find($v);
                    if(!empty($testimo)){
                        $arr = [
                            "name" => $testimo['name'],
                            "image" => $testimo['image'],
                            'description' => $testimo['description'],
                            'created_at' => $testimo['created_at'],
                            'user_name' => $testimo['user_name'],
                            'business_logo' => $testimo['business_logo']
                        ];
                        $testi_lists[] = $arr;
                    }
                }
                $testi_lists['section_id'] = $testimonial_sec['id'];
                $testi_lists['sub_menu_name'] = $testimonial_sec['heading'];
                foreach ($pages as $vi) {
                    if ($vi->menu == $menu_id && $vi->sub_menu == $sub_menu_id) {
                        $final_testimonials[] = $testi_lists;
                    }
                }
            }
        }
        return $final_testimonials;
    }

    public function newLogoSlider($menu_id = 0, $sub_menu_id = 0){

        $this->testimonial    = new LogoSlider();
        $this->test_section   = new LogoSliderSection();

        $logo_slider_section = $this->test_section->select(['id', 'logo_slider', 'pages_ids','heading'])->findAll();

        $final_testimonials = [];
        if (!empty($logo_slider_section)) {
            foreach ($logo_slider_section as $testimonial_sec) {

                $pages = json_decode($testimonial_sec['pages_ids']);
                $value  = json_decode($testimonial_sec['logo_slider']);
                $testi_lists = [];
                foreach ($value as $v) {
                    $this->testimonial->select(' seo_logo_slider.image, seo_logo_slider.created_at,seo_users.user_name');
                    $this->testimonial->join('seo_users', 'seo_users.id=seo_logo_slider.created_by');
                    $testimo = $this->testimonial->find($v);
                    if(!empty($testimo)){
                        $arr = [
                            "image" => $testimo['image'],
                            'created_at' => $testimo['created_at'],
                            'user_name' => $testimo['user_name'],
                        ];
                        $testi_lists[] = $arr;
                    }
                }
                $testi_lists['section_id'] = $testimonial_sec['id'];
                $testi_lists['sub_menu_name'] = $testimonial_sec['heading'];
                foreach ($pages as $vi) {
                    if ($vi->menu == $menu_id && $vi->sub_menu == $sub_menu_id) {
                        $final_testimonials[] = $testi_lists;
                    }
                }
            }
        }
        return $final_testimonials;
    }

    public function newFaqsSection($menu_id = 0, $sub_menu_id = 0){

        $this->faq_model  = new FaqModel();
        $this->faq_section_model = new FaqSectionModel();

        $this->faq_section_model->select(['id', 'pages_id', 'faqs_ids','heading']);
        $faq_section_details = $this->faq_section_model->findAll();
        $final_faqs = [];
        if (!empty($faq_section_details)) {
            foreach ($faq_section_details as $faq_section_detail) {

                $faq_pages = json_decode($faq_section_detail['pages_id']);
                $faqs      = json_decode($faq_section_detail['faqs_ids']);

                $faqs_list = [];
                foreach ($faqs as $v) {
                    $this->faq_model->select(['id', 'title', 'content', 'created_at', 'updated_at']);
                    $faq = $this->faq_model->find($v);
                    if (!empty($faq)) {
                        $arr = ['id' => $faq['id'], 'title' => $faq['title'], 'content' => $faq['content'], "created_at" => $faq['created_at'], "updated_at" => $faq['updated_at']];
                        $faqs_list[] = $arr;
                    }
                }
                $faqs_list['section_id'] = $faq_section_detail['id'];
                $faqs_list['sub_menu_name'] = $faq_section_detail['heading'];
                foreach ($faq_pages as $sp) {
                    if ($sp->menu == $menu_id && $sp->sub_menu == $sub_menu_id) {
                        $final_faqs[] = $faqs_list;
                    }
                }
            }
        }
        return $final_faqs;
    }

    public function newPostUpdates($menu_id = 0, $sub_menu_id = 0){

        $this->posts = new PostsModel();
        $this->posts_section = new PostSectionModel();

        $this->posts_section->select(['id', 'post_id', 'pages_id','heading']);
        $posts_details = $this->posts_section->findAll();

        $final_posts = [];
        if (!empty($posts_details)) {
            foreach ($posts_details as $posts_detail) {

                $post_pages = json_decode($posts_detail['pages_id']);
                $posts      = json_decode($posts_detail['post_id']);
                $product_list = [];
                foreach ($posts as $v) {
                    $this->posts->select('*');
                    $update = $this->posts->where('status', 'published')->find($v);
                    if(!empty($update)){
                        $arr = [
                            'menu_id'    => $menu_id,
                            'id'         => $update['id'],
                            'title'      => $update['title'],
                            'slug'       => $update['slug'],
                            "image"      => $update['image'],
                            "description" => $update['description'],
                            'created_at' => $update['created_at']
                        ];
                        $product_list[] = $arr;
                    }
                }
                $product_list['section_id'] = $posts_detail['id'];
                $product_list['sub_menu_name'] = $posts_detail['heading'];
                foreach ($post_pages as $sp) {
                    if ($sp->menu == $menu_id && $sp->sub_menu == $sub_menu_id) {
                        $final_posts[] = $product_list;
                    }
                }
            }
        }
        return $final_posts;
    }


    public function getNewBusinessQuery($menu_id = 0, $sub_menu_id = 0){
        $this->business_query = new BusinessQuery();

        $this->business_query->select(['id', 'heading', 'pages_id']);
        $business_query_result = $this->business_query->findAll();

        $final_results = [];
        if (!empty($business_query_result)) {
            foreach ($business_query_result as $business_que) {
                $pages = json_decode($business_que['pages_id']);
                foreach ($pages as $sp) {
                    if ($sp->menu == $menu_id && $sp->sub_menu == $sub_menu_id) {
                        $product_list['section_id'] = $business_que['id'];
                        $final_results[] = $product_list;
                    }
                }
            }
        }
        return $final_results;
    }
    
    /**
     * Get custom insert head and foot data
     *
     * @return void
     */
    public function getUserCustomHeadAndFoot(){
        $db      = \Config\Database::connect();
        $builder = $db->table('seo_custom_insert');
        $res =  $builder->get();
        if($res->getRow()){
            $res = $res->getRow();
            $data['head'] = $res->head; 
            $data['foot'] = $res->foot; 
            return $data;
        }
        $data['head'] = ""; 
        $data['foot'] = ""; 
        return $data;
    }
    
     /**
     * Get all Update and Post List 
     *
     * @return void
     */
    public function getAllUpdateLists(){
        $this->posts = new PostsModel();
        $this->posts->select('*');
        $product_list = $this->posts->where('status', 'published')->orderBy('id','desc')->findAll();
        return $product_list;
    }
    
    
    /**
     * get Custom Main Servies Lists for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    public function getCustomMainServiesLists($menu_id=0){
        $this->services        = new ServicesModel();
        $this->service_section = new ServiceSectionModel();

        $this->service_section->select(['id', 'services', 'pages','heading']);
        $service_details = $this->service_section->findAll();

        $final_services = [];
        if (!empty($service_details)) {
            foreach ($service_details as $service_detail) {

                $service_pages = json_decode($service_detail['pages']);
                $services    = json_decode($service_detail['services']);

                $service_list = [];
                foreach ($services as $v) {
                    $this->services->select('*');
                    $faq = $this->services->find($v);
                    if(!empty($faq)){
                        $arr = [
                            'menu_id'          => $faq['menu_id'],
                            'sub_menu_id'      => $faq['id'],
                            'service'          => $faq['service'],
                            'menu_link'        => $faq['menu_link'],
                            "slug"             => $faq['slug'],
                            "image"            => $faq['image'],
                            'banner'           => $faq['banner'],
                            "content"          => $faq['content'],
                            "short_description" => $faq['short_description']
                        ];
                        $service_list[] = $arr;
                    }
                }
                $service_list['section_id'] = $service_detail['id'];
                $service_list['sub_menu_name'] = $service_detail['heading'];
                $service_pages = json_decode(json_encode($service_pages), true);
                foreach ($service_pages as $sp) {
                    if ($sp['menu'] == $menu_id) {
                        $final_services[] = $service_list;
                    }
                }
            }
        }
        return $final_services;
    }

    /**
     * get Custom Main Products Lists for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    public function getCustomMainProductsLists($menu_id = 0){

        $this->products        = new ProductsModel();
        $this->product_section = new ProductsSectionModel();

        $this->product_section->select(['id', 'products', 'pages','heading']);
        $product_section = $this->product_section->findAll();

        $final_products = [];
        if (!empty($product_section)) {
            foreach ($product_section as $product_s) {

                $product_pages = json_decode($product_s['pages']);
                $products    = json_decode($product_s['products']);

                $product_list = [];
                foreach ($products as $v) {
                    $this->products->select('*');
                    $prod = $this->product->find($v);
                    if($prod){
                        $arr = [
                            'menu_id'          => $prod['menu_id'],
                            'sub_menu_id'      => $prod['id'],
                            'product_name'     => $prod['product_name'],
                            'menu_link'        => $prod['menu_link'],
                            "total_inventry"   => $prod['total_inventry'],
                            "mrp"              => $prod['mrp'],
                            'discount'         => $prod['discount'],
                            "extra_charge"     => $prod['extra_charge'],
                            "main_image"       => $prod['main_image'],
                            "related_product"  => $prod['related_product'],
                            'short_description' => $prod['short_description'],
                            "long_description" => $prod['long_description'],
                            "specification"    => $prod['specification']
                        ];
                        $product_list[] = $arr;
                    }
                }
                $product_list['section_id'] = $product_s['id'];
                $product_list['sub_menu_name'] = $product_s['heading'];
                $service_pages = json_decode(json_encode($product_pages), true);
                foreach ($service_pages as $sp) {
                    if ($sp['menu'] == $menu_id) {
                        $final_products[] = $product_list;
                    }
                }
            }
        }
        return $final_products;
    }

    /**
     * get Custom Main Gallery Images for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    public function getCustomMainGalleryImages($menu_id = 0){
        $this->gallery_section  = new GallerySection();
        $this->gallery_images   = new ImagesGallary();

        $this->gallery_section->select(['id', 'pages', 'images','heading']);
             $gallery_section_details = $this->gallery_section->where('JSON_EXTRACT(pages, "$[0].menu")', $menu_id)->findAll();
        $final_images = [];
        if (!empty($gallery_section_details)) {
            foreach ($gallery_section_details as $gallery_sections) {
                $gallery_section_pages = json_decode($gallery_sections['pages']);
                $images = json_decode($gallery_sections['images']);
                foreach ($images as $v) {
                    $this->gallery_images->select(['image', 'title']);
                    $image = $this->gallery_images->find($v);
                    if(!empty($image)){
                        $img   = $image['image'];
                        $title = $image['title'];
                        $arr = ["image" => $img, "title" => $title];
                        $images_list[] = $arr;
                    }
                }
                $images_list['section_id'] = $gallery_sections['id'];
                $images_list['sub_menu_name'] = $gallery_sections['heading'];
                foreach ($gallery_section_pages as $gi) {
                    if ($gi->menu == $menu_id) {
                        $final_images[] = $images_list;
                    }
                }
            }
        }
        return $final_images;
    }

    /**
     * get Custom Main Video Gallery for custom main menu
     *
     * @param integer $menu_id
     * @param integer $sub_menu_id
     * @return void
     */
    public function getCustomMainVideoGallery($menu_id = 0){
        $this->video_link    = new VideoModel();
        $this->video_section = new VideoGallerySection();

        $video_section = $this->video_section->select(['id','heading', 'videos', 'pages'])->findAll();

        $final_video = [];
        if (!empty($video_section)) {
            foreach ($video_section as $video_sec) {
                $video_pages = json_decode($video_sec['pages']);
                $videos = json_decode($video_sec['videos']);
                $video_lists = [];
                $video_lists['heading'] = $video_sec['heading'];
                foreach ($videos as $v) {
                    $this->video_link->select(['url', 'title', 'thumbnail_images']);
                    $vid = $this->video_link->find($v);
                    if(!empty($vid)){
                        $url   = $vid['url'];
                        $title = $vid['title'];
                        $arr = ["url" => $url, "title" => $title, 'thumbnail_images' => $vid['thumbnail_images']];
                        $video_lists[] = $arr;
                        $arr = [];
                    }
                }
                $video_lists['section_id'] = $video_sec['id'];
                $video_lists['sub_menu_name'] = $video_sec['heading'];
                foreach ($video_pages as $vi) {
                    if ($vi->menu == $menu_id) {
                        $final_video[] = $video_lists;
                    }
                }
            }
        }
        return $final_video;
    }

    /**
     * get Custom Main Testimonials for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    public function getCustomMainTestimonials($menu_id = 0){

        $this->testimonial    = new Testimonial();
        $this->test_section   = new TestimonialSection();

        $testimonial_section = $this->test_section->select(['id', 'testimonials', 'pages_ids','heading'])->findAll();

        $final_testimonials = [];
        if (!empty($testimonial_section)) {
            foreach ($testimonial_section as $testimonial_sec) {

                $pages = json_decode($testimonial_sec['pages_ids']);
                $value  = json_decode($testimonial_sec['testimonials']);
                $testi_lists = [];
                foreach ($value as $v) {
                    $this->testimonial->select('seo_testimonial.name, seo_testimonial.image, seo_testimonial.description, seo_testimonial.created_at,seo_users.user_name, seo_users.business_logo');
                    $this->testimonial->join('seo_users', 'seo_users.id=seo_testimonial.created_by');
                    $testimo = $this->testimonial->find($v);
                    if(!empty($testimo)){
                        $arr = [
                            "name" => $testimo['name'],
                            "image" => $testimo['image'],
                            'description' => $testimo['description'],
                            'created_at' => $testimo['created_at'],
                            'user_name' => $testimo['user_name'],
                            'business_logo' => $testimo['business_logo']
                        ];
                        $testi_lists[] = $arr;
                    }
                }
                $testi_lists['section_id'] = $testimonial_sec['id'];
                $testi_lists['sub_menu_name'] = $testimonial_sec['heading'];
                foreach ($pages as $vi) {
                    if ($vi->menu == $menu_id) {
                        $final_testimonials[] = $testi_lists;
                    }
                }
            }
        }
        return $final_testimonials;
    }

    public function getCustomMainLogoSlider($menu_id = 0){

        $this->testimonial    = new LogoSlider();
        $this->test_section   = new LogoSliderSection();

        $testimonial_section = $this->test_section->select(['id', 'logo_slider', 'pages_ids','heading'])->findAll();

        $final_testimonials = [];
        if (!empty($testimonial_section)) {
            foreach ($testimonial_section as $testimonial_sec) {

                $pages = json_decode($testimonial_sec['pages_ids']);
                $value  = json_decode($testimonial_sec['logo_slider']);
                $testi_lists = [];
                foreach ($value as $v) {
                    $this->testimonial->select(' seo_logo_slider.image,seo_logo_slider.created_at,seo_users.user_name');
                    $this->testimonial->join('seo_users', 'seo_users.id=seo_logo_slider.created_by');
                    $testimo = $this->testimonial->find($v);
                    if(!empty($testimo)){
                        $arr = [
                            "image" => $testimo['image'],
                         
                        ];
                        $testi_lists[] = $arr;
                    }
                }
                $testi_lists['section_id'] = $testimonial_sec['id'];
                $testi_lists['sub_menu_name'] = $testimonial_sec['heading'];
                foreach ($pages as $vi) {
                    if ($vi->menu == $menu_id) {
                        $final_testimonials[] = $testi_lists;
                    }
                }
            }
        }
        return $final_testimonials;
    }
    
    /**
     * get Custom Main Faqs Section for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    public function getCustomMainFaqsSection($menu_id = 0){

        $this->faq_model  = new FaqModel();
        $this->faq_section_model = new FaqSectionModel();

        $this->faq_section_model->select(['id', 'pages_id', 'faqs_ids','heading']);
        $faq_section_details = $this->faq_section_model->findAll();
        $final_faqs = [];
        if (!empty($faq_section_details)) {
            foreach ($faq_section_details as $faq_section_detail) {

                $faq_pages = json_decode($faq_section_detail['pages_id']);
                $faqs      = json_decode($faq_section_detail['faqs_ids']);

                $faqs_list = [];
                foreach ($faqs as $v) {
                    $this->faq_model->select(['id', 'title', 'content', 'created_at', 'updated_at']);
                    $faq = $this->faq_model->find($v);
                    if (!empty($faq)) {
                        $arr = ['id' => $faq['id'], 'title' => $faq['title'], 'content' => $faq['content'], "created_at" => $faq['created_at'], "updated_at" => $faq['updated_at']];
                        $faqs_list[] = $arr;
                    }
                }
                $faqs_list['section_id'] = $faq_section_detail['id'];
                $faqs_list['sub_menu_name'] = $faq_section_detail['heading'];
                foreach ($faq_pages as $sp) {
                    if ($sp->menu == $menu_id) {
                        $final_faqs[] = $faqs_list;
                    }
                }
            }
        }
        return $final_faqs;
    }

    /**
     * get Custom Main Post Updates for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    public function getCustomMainPostUpdates($menu_id = 0){

        $this->posts = new PostsModel();
        $this->posts_section = new PostSectionModel();

        $this->posts_section->select(['id', 'post_id', 'pages_id','heading']);
        $posts_details = $this->posts_section->findAll();

        $final_posts = [];
        if (!empty($posts_details)) {
            foreach ($posts_details as $posts_detail) {

                $post_pages = json_decode($posts_detail['pages_id']);
                $posts      = json_decode($posts_detail['post_id']);
                $product_list = [];
                foreach ($posts as $v) {
                    $this->posts->select('*');
                    $update = $this->posts->where('status', 'published')->find($v);
                    if(!empty($update)){
                        $arr = [
                            'menu_id'    => $menu_id,
                            'id'         => $update['id'],
                            'title'      => $update['title'],
                            'slug'       => $update['slug'],
                            "image"      => $update['image'],
                            "description" => $update['description'],
                            'created_at' => $update['created_at']
                        ];
                        $product_list[] = $arr;
                    }
                }
                $product_list['section_id'] = $posts_detail['id'];
                $product_list['sub_menu_name'] = $posts_detail['heading'];
                foreach ($post_pages as $sp) {
                    if ($sp->menu == $menu_id) {
                        $final_posts[] = $product_list;
                    }
                }
            }
        }
        return $final_posts;
    }

    /**
     * get Custom Main Business Query for custom main menu
     *
     * @param integer $menu_id
     * @param integer $sub_menu_id
     * @return void
     */
    public function getCustomMainBusinessQuery($menu_id = 0){
        $this->business_query = new BusinessQuery();

        $this->business_query->select(['id', 'heading', 'pages_id']);
        $business_query_result = $this->business_query->findAll();

        $final_results = [];
        if (!empty($business_query_result)) {
            foreach ($business_query_result as $business_que) {
                $pages = json_decode($business_que['pages_id']);
                foreach ($pages as $sp) {
                    if ($sp->menu == $menu_id) {
                        $product_list['section_id'] = $business_que['id'];
                        $final_results[] = $product_list;
                    }
                }
            }
        }
        return $final_results;
    }

    /**
     * get Main Menu Sort Order for custom main menu
     *
     * @param [type] $data
     * @param integer $menu_id
     * @param integer $submenu_id
     * @return void
     */
    public function getMainMenuSortOrder($data = null, $menu_id = 0){

        $this->arrange_section = new ArrangeSection();

        if ($data == "Home") {
            $menu_id = 1;
            $custom = $this->arrange_section->select(['section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        } else if ($data == "About Us") {
            $menu_id = 2;
            $custom = $this->arrange_section->select(['section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        } else if ($data == "Contact") {
            $menu_id = getMenuId($data);

            $custom = $this->arrange_section->select(['section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        } else if ($menu_id != 0 ) {
            $arrange_custom_model = new ArrangeCustomSection();
            $custom = $arrange_custom_model->select(['section_title', 'menu_id', 'section_id', 'soroting_order', 'url_val'])->where(['menu_id' => $menu_id, 'status' => 1])->orderby('soroting_order')->findAll();
            return $custom;
        }
    }
    
}