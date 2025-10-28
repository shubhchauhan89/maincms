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

use App\Models\FaqModel;
use App\Models\FaqSectionModel;

use App\Models\ArrangeSection;
use App\Models\ArrangeCustomSection;



class Arranges_data
{

    protected $slider_section;
    protected $slider_images;
    function __construct()
    {
        $this->slider_section = new SliderSectionModel();
        $this->slider_images  = new SliderModel();
    }

    function getCustomArrangeSlider($menu_id = 0, $sub_menu_id = 0){
        $custom_arrange_slider = new ArrangeCustomSection();
        $custom_slider = $custom_arrange_slider
            ->select('section_id')
            ->where(['section_title' => 'Slider Section', 'menu_id' => $menu_id, 'submenu_id' => $sub_menu_id])->orderBy('soroting_order')->findAll();

        $final_slider = [];
        foreach ($custom_slider as $cs) {
            $slider = $this->slider_section->select(['id', 'slider'])->where('id', $cs['section_id'])->first();
            $slider_id = $slider['id'];
            $slider = $slider['slider'];
            $slider = json_decode($slider);
            $slider_image_list = [];
            foreach ($slider as $s) {
                $this->slider_images->select(['title_font_family', 'desc_font_family', 'slider_image', 'title', 'description', 'text_color', 'heading_color']);
                $image = $this->slider_images->find($s);
                $img   = $image['slider_image'];
                $title = $image['title'];
                $desc  = $image['description'];
                $text  = $image['text_color'];
                $head  = $image['heading_color'];
                $title_style  = $image['title_font_family'];
                $desc_style   = $image['desc_font_family'];
                $arr = ['title_style' => $title_style, 'desc_style' => $desc_style, "image" => $img, "title" => $title, "desc" => $desc, "text_color" => $text, 'heading_color' => $head];
                $slider_image_list[] = $arr;
            }
            $slider_image_list['section_id'] = $slider_id;
            $final_slider[] = $slider_image_list;
        }
        return $final_slider;
    }

    function getCustomSectionData($menu_id = 0, $sub_menu_id = 0){
        $custom_section_model  = new CustomSectionModel();
        $custom_section = $custom_section_model->where('status', 1)->findAll();
        $custom = [];
        if (!empty($custom_section)) {
            foreach ($custom_section as $value) {
                $custom_page = json_decode($value['page_id']);
                $temp = [];
                if ($custom_page[0]->menu == $menu_id && $custom_page[0]->sub_menu == $sub_menu_id) {
                    $temp['id'] = $value['id'];
                    $temp['upload_image'] = $value['upload_image'];
                    $temp['position'] = $value['position'];
                    $temp['heading'] = $value['heading'];
                    $temp['description'] = $value['description'];
                    $custom[] = $temp;
                }
            }
        }
        return $custom;
    }
    
    
    /**
     * get Custom Main Arrange Slider for custom main menu
     *
     * @param integer $menu_id
     * @return void
     */
    function getCustomMainArrangeSlider($menu_id = 0){
        $custom_arrange_slider = new ArrangeCustomSection();
        $custom_slider = $custom_arrange_slider
            ->select('section_id')
            ->where(['section_title' => 'Slider Section', 'menu_id' => $menu_id])->orderBy('soroting_order')->findAll();

        $final_slider = [];
        foreach ($custom_slider as $cs) {
            $slider = $this->slider_section->select(['id', 'slider'])->where('id', $cs['section_id'])->first();
            $slider_id = $slider['id'];
            $slider = $slider['slider'];
            $slider = json_decode($slider);
            $slider_image_list = [];
            foreach ($slider as $s) {
                $this->slider_images->select(['title_font_family', 'desc_font_family', 'slider_image', 'title', 'description', 'text_color', 'heading_color']);
                $image = $this->slider_images->find($s);
                $img   = $image['slider_image'];
                $title = $image['title'];
                $desc  = $image['description'];
                $text  = $image['text_color'];
                $head  = $image['heading_color'];
                $title_style  = $image['title_font_family'];
                $desc_style   = $image['desc_font_family'];
                $arr = ['title_style' => $title_style, 'desc_style' => $desc_style, "image" => $img, "title" => $title, "desc" => $desc, "text_color" => $text, 'heading_color' => $head];
                $slider_image_list[] = $arr;
            }
            $slider_image_list['section_id'] = $slider_id;
            $final_slider[] = $slider_image_list;
        }
        return $final_slider;
    }

    /**
     * get Custom Main Section Data for custom main menu
     *
     * @param integer $menu_id
     * @param integer $sub_menu_id
     * @return void
     */
    function getCustomMainSectionData($menu_id = 0){
        $custom_section_model  = new CustomSectionModel();
        $custom_section = $custom_section_model->where('status', 1)->findAll();
        $custom = [];
        if (!empty($custom_section)) {
            foreach ($custom_section as $value) {
                $custom_page = json_decode($value['page_id']);
                $temp = [];
                if ($custom_page[0]->menu == $menu_id) {
                    $temp['id'] = $value['id'];
                    $temp['upload_image'] = $value['upload_image'];
                    $temp['position'] = $value['position'];
                    $temp['heading'] = $value['heading'];
                    $temp['description'] = $value['description'];
                    $custom[] = $temp;
                }
            }
        }
        return $custom;
    }
}
