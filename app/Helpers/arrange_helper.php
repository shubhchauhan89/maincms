<?php

use App\Models\SliderModel;
use App\Models\SliderSectionModel;
use App\Models\CustomSectionModel;
use App\Models\ArrangeSection;
use App\Models\ArrangeCustomSection;
use App\Models\ServiceSectionModel;
use App\Models\ProductsSectionModel;
use App\Models\GallerySection;
use App\Models\VideoGallerySection;
use App\Models\TestimonialSection;
use App\Models\LogoSliderSection;
use App\Models\FaqSectionModel;
use App\Models\PostSectionModel;
use App\Models\BusinessQuery;

/**
 * Get all slider 
 */
if (!function_exists('getPageSlider')) {
    function getPageSlider($menu_id = 0, $sub_menu = 0){
        $slider_model  = new SliderSectionModel();
        $slider_model->select(['id', 'page_id', 'slider', 'section_name']);
        $slider_details = $slider_model->findAll();
        $final_slider = [];

        if (!empty($slider_details)) {
            foreach ($slider_details as $slider_detail) {
                $slider_page = json_decode($slider_detail['page_id']);
                foreach ($slider_page as $sp) {
                    $temp = [];
                    if ($sp->menu == $menu_id && $sp->sub_menu == $sub_menu) {
                        $temp['title'] = $slider_detail['section_name'];
                        $temp['section_id'] = $slider_detail['id'];
                        $temp['menu_id'] = $menu_id;
                        $temp['submenu_id'] = $sub_menu;
                        $temp['section_title'] = 'Slider Section';
                        $final_slider[] = $temp;
                    }
                }
            }
        }
        return $final_slider;
    }
}


/**
 * Get all custom section 
 */
if (!function_exists('getPageCustomSection')) {
    function getPageCustomSection($menu_id = 0, $sub_menu = 0)
    {

        $custom_section_model  = new CustomSectionModel();
        $custom_section = $custom_section_model->where('status', 1)->findAll();
        //bb_print_r($custom_section);
        $final_custom_section = [];
        if (!empty($custom_section)) {
            foreach ($custom_section as $value) {
                $custom_page = json_decode($value['page_id']);
                $temp = [];
                if ($custom_page[0]->menu == $menu_id && $custom_page[0]->sub_menu == $sub_menu) {
                    $temp['title'] = $value['heading'];
                    $temp['section_id'] = $value['id'];
                    $temp['menu_id'] = $menu_id;
                    $temp['submenu_id'] = $sub_menu;
                    $temp['section_title'] = 'Custom Section';
                    $final_custom_section[] = $temp;
                }
            }
        }
        return $final_custom_section;
    }
}


/**
 * Get all services section 
 */
if (!function_exists('getServicesSection')) {
    function getServicesSection($menu_id = 0, $sub_menu = 0){
        $service_section_model  = new ServiceSectionModel();
        $service_section = $service_section_model->where('status', 1)->findAll();

        $final_service_section = [];
        if (!empty($service_section)) {
            foreach ($service_section as $value) {
                $custom_page = json_decode($value['pages']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Our Services';
                            $final_service_section[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_service_section;
    }
}


/**
 * Get all product section 
 */
if (!function_exists('getProductsSection')) {
    function getProductsSection($menu_id = 0, $sub_menu = 0){
        $product_section_modal  = new ProductsSectionModel();
        $products_sections = $product_section_modal->where('status', 1)->findAll();
        
        $final_products_Section = [];
        if (!empty($products_sections)) {
            foreach ($products_sections as $value) {
                $custom_page = json_decode($value['pages']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Our Products';
                            $final_products_Section[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_products_Section;
    }
}


/**
 * Get all images gallery section
 */
if (!function_exists('getImageGallerySection')) {
    function getImageGallerySection($menu_id = 0, $sub_menu = 0){
        $gallery_section_model  = new GallerySection();
        $gallery_section = $gallery_section_model->where('status', 1)->findAll();
        
        $final_gallery = [];
        if (!empty($gallery_section)) {
            foreach ($gallery_section as $value) {
                $custom_page = json_decode($value['pages']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Gallery Image';
                            $final_gallery[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_gallery;
    }
}


/**
 * Get all images video section
 */
if (!function_exists('getVideoSection')) {
    function getVideoSection($menu_id = 0, $sub_menu = 0){
        $video_section_model  = new VideoGallerySection();
        $video_section = $video_section_model->where('status', 1)->findAll();
        
        $final_video = [];
        if (!empty($video_section)) {
            foreach ($video_section as $value) {
                $custom_page = json_decode($value['pages']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Our Video';
                            $final_video[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_video;
    }
}


if (!function_exists('getTestimonialSection')) {
    function getTestimonialSection($menu_id = 0, $sub_menu = 0){
        $section_model  = new TestimonialSection();
        $section_details = $section_model->where('status', 1)->findAll();
        
        $final_results = [];
        if (!empty($section_details)) {
            foreach ($section_details as $value) {
                $custom_page = json_decode($value['pages_ids']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Testimonials';
                            $final_results[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_results;
    }
}


if (!function_exists('getLogoSliderSection')) {
    function getLogoSliderSection($menu_id = 0, $sub_menu = 0){
        $section_model  = new LogoSliderSection();
        $section_details = $section_model->where('status', 1)->findAll();
        
        $final_results = [];
        if (!empty($section_details)) {
            foreach ($section_details as $value) {
                $custom_page = json_decode($value['pages_ids']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Logo Slider';
                            $final_results[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_results;
    }
}


if (!function_exists('getFaqsSection')) {
    function getFaqsSection($menu_id = 0, $sub_menu = 0){
        $section_model  = new FaqSectionModel();
        $section_details = $section_model->where('status', 1)->findAll();
        
        $final_results = [];
        if (!empty($section_details)) {
            foreach ($section_details as $value) {
                $custom_page = json_decode($value['pages_id']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Our Faqs';
                            $final_results[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_results;
    }
}


if (!function_exists('getPostUpdateSection')) {
    function getPostUpdateSection($menu_id = 0, $sub_menu = 0){
        $section_model  = new PostSectionModel();
        $section_details = $section_model->where('status', 1)->findAll();
        
        $final_results = [];
        if (!empty($section_details)) {
            foreach ($section_details as $value) {
                $custom_page = json_decode($value['pages_id']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Our Updates';
                            $final_results[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_results;
    }
}

if (!function_exists('getBusinessQuery')) {
    function getBusinessQuery($menu_id = 0, $sub_menu = 0){
        $section_model  = new BusinessQuery();
        $section_details = $section_model->where('status', 1)->findAll();
        
        $final_results = [];
        if (!empty($section_details)) {
            foreach ($section_details as $value) {
                $custom_page = json_decode($value['pages_id']);
                $temp = [];
                if(count($custom_page)>0){
                    foreach($custom_page as $cp){
                        if ($cp->menu == $menu_id && $cp->sub_menu == " ".$sub_menu) {
                            $temp['title'] = $value['heading'];
                            $temp['section_id'] = $value['id'];
                            $temp['menu_id'] = $menu_id;
                            $temp['submenu_id'] = $sub_menu;
                            $temp['section_title'] = 'Business Query';
                            $final_results[] = $temp;
                        }
                    }
                }
            }
        }
        return $final_results;
    }
}





/**
 * Get all post and section 
 */
// if (!function_exists('getPagePostUpdates')) {
//     function getPagePostUpdates($menu_id = 0, $sub_menu = 0){

//         $custom_section_model  = new CustomSectionModel();
//         $custom_section = $custom_section_model->where('status', 1)->findAll();
//         //bb_print_r($custom_section);
//         $final_custom_section = [];
//         if (!empty($custom_section)) {
//             foreach ($custom_section as $value) {
//                 $custom_page = json_decode($value['page_id']);
//                 $temp = [];
//                 if ($custom_page[0]->menu == $menu_id && $custom_page[0]->sub_menu == $sub_menu) {
//                     $temp['title'] = $value['heading'];
//                     $temp['section_id'] = $value['id'];
//                     $temp['menu_id'] = $menu_id;
//                     $temp['submenu_id'] = $sub_menu;
//                     $temp['section_title'] = 'Custom Section';
//                     $final_custom_section[] = $temp;
//                 }
//             }
//         }
//         return $final_custom_section;
//     }
// }


/**
 * data in arrange section data
 */
if (!function_exists('saveArrangeSectionData')) {
    function saveArrangeSectionData($arr = [], $section_title, $last_id, $title, $url, $user_id)
    {
        $arrange_section_model = new ArrangeSection();
        foreach ($arr as $a) {
            if ($a['menu'] == 1 || $a['menu'] == 2 ||  $a['sub_menu_title'] == "Contact") {
                $result = $arrange_section_model->select('max(soroting_order) as sorting_order')->first();
                $sorting_order = $result['sorting_order'];

                //Make arrage section data
                $arrange_section_data = [
                    'section_title' => $section_title,
                    'section_id'    => $last_id,
                    'menu_id'       => $a['menu'],
                    'submenu_id'    => $a['sub_menu'],
                    'title'         => $title,
                    'url_val'       => $url,
                    'soroting_order' => $sorting_order + 1,
                    'created_by' => $user_id
                ];
                //Save arrage section in arrange section table for shorting
                $arrange_section_model->insert($arrange_section_data);
            }
        }
    }
}


/**
 * Delete arrange section table data
 */
if (!function_exists('deleteArrangeSectionData')) {
    function deleteArrangeSectionData($id, $url){
        $arrange_section_model = new ArrangeSection();
        $arrange_section_id = $arrange_section_model->select('id')->where(['section_id' => $id, 'url_val' => $url])->findAll();
        if (!empty($arrange_section_id)) {
            foreach ($arrange_section_id as $i) {
                $arrange_section_model->delete($i['id']);
            }
        }


        $custom_arrange_section_model = new ArrangeCustomSection();
        $custom_arrange_section_id = $custom_arrange_section_model->select('id')->where(['section_id' => $id, 'url_val' => $url])->findAll();
        if (!empty($custom_arrange_section_id)) {
            foreach ($custom_arrange_section_id as $i) {
                $custom_arrange_section_model->delete($i['id']);
            }
        }

        
    }
}


/**
 * Delete arrange section table data
 */
if (!function_exists('deleteCustomArrangeSectionData')) {
    function deleteCustomArrangeSectionData($id, $url){
        $arrange_section_model = new ArrangeSection();
        $arrange_section_id = $arrange_section_model->select('id')->where(['section_id' => $id, 'url_val' => $url])->findAll();
        if (!empty($arrange_section_id)) {
            foreach ($arrange_section_id as $i) {
                $arrange_section_model->delete($i['id']);
            }
        }
    }
}