<?php

namespace App\Controllers;
use App\Libraries\User_details;
use App\Libraries\Arranges_data;
use App\Libraries\Meta_keywords;
use App\Models\CustomSubMenu;
use App\Models\CustomPageData;
use App\Models\MenuModel;

class Custom extends UiController { 
    public function __construct(){
        parent::__construct();
        $this->user_slider = new User_details();
        $this->arranges_data = new Arranges_data();
        $meta_lib = new Meta_keywords();
        $this->meta_lib_data = $meta_lib->getMetaKeywords($this->user['id']);
        $this->custom_page_data = new CustomPageData();
        $this->sub_menu_model = new CustomSubMenu();
        $this->menu_model = new MenuModel();
    } 
  
    public function custom(){   
        
        $seg_ment = $this->request->uri->getSegment(2);
        
        $custom_data = $this->custom_page_data->select(['heading', 'image', 'content'])->where('menu_link', $seg_ment)->first();        
        
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
        $custom_section =  $this->user_slider->getCustomSectionData('Updates');
        
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

        $custom = [];

        /**
         * Make products list section array data
        */
        $post_updates =  $this->user_slider->getUpdateLists('Updates');

        $menu_sub_menu_id = "";
        if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
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

            $final_slider = $this->arranges_data->getCustomArrangeSlider($menu_id, $sub_menu);

            $custom       = $this->arranges_data->getCustomSectionData($menu_id, $sub_menu);
            
            $services =  $this->user_slider->getNewServiesLists($menu_id, $sub_menu);
            
            $products     =  $this->user_slider->getNewProductsLists($menu_id, $sub_menu);

            $images       =  $this->user_slider->newGalleryImages($menu_id, $sub_menu);
            
            $video        =  $this->user_slider->newVideoGallery($menu_id, $sub_menu);

            $testimonial  =  $this->user_slider->newTestimonials($menu_id, $sub_menu);

            $logo_slider  =  $this->user_slider->newLogoSlider($menu_id, $sub_menu);

            $fq_lists     =  $this->user_slider->newFaqsSection($menu_id, $sub_menu);

            $post_updates =  $this->user_slider->newPostUpdates($menu_id, $sub_menu);
            
            $business_query=  $this->user_slider->getNewBusinessQuery($menu_id, $sub_menu);
        }
              
        $pageData = [
            'title' => $seg_ment,
            'description' => 'This is the '.$seg_ment.' page',
            'keywords' => 'Healthcare',
            'slug' => empty($seg_ment)?"Page Section":$seg_ment,

            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'cart'          => cart_history(),
            'colors'        => $this->colors,

            'meta_keywords' => $this->meta_lib_data,
            'custom_data'   => $custom_data,
            
            'sliders'       => $final_slider,
            'services'      => $services,
            'products'      => $products,
            'posts'         => $post_updates,
            'videoes'       => $video,
            'gallery_images'=> $images,
            'custom_section'=> $custom,
            'testimonials'  => $testimonial,            
            'logo_slider'  => $logo_slider,

            'fq_lists'      => $fq_lists,
            'business_query'=> $business_query,
            'sort_order'    => $sort_order,
            "custom_insert" => $this->user_head_foot,
        ];
        
        return view($this->user['theme_name'].'/'.'frontend/custom_page', $pageData);
    }

    public function saveSubMenuData(){
        
        $sub_id = $this->request->getPost('sub_id');
        $page_id = $this->request->getPost('page_id');
        $heading = $this->request->getPost('heading');
        $image   = $this->request->getFile('image');
        $content = $this->request->getPost('content');

        $this->session = \Config\Services::session();
        
        if ($this->session->has('login_user')) {
            $user_data = $this->session->get('login_user');
        }

        $page_data = $this->sub_menu_model->where('id', $sub_id)->first();
        $file_name = NULL;

        if(isset($page_data['sub_menu_link']) || !empty($page_id)){
            
            if(empty($page_id)){
                if(!empty($image) && $image->isValid()){
                    $file_name = $image->getRandomName();
                    $image->move('public/uploads/custom_pages_image/', $file_name);
                }
    
                $data = [
                    'custom_sub_menu_id' => $sub_id,
                    'menu_link'          => $page_data['sub_menu_link'],
                    'created_by'         => $user_data['user_id'],
                    'heading'            => $heading,
                    'image'              => $file_name,
                    'content'            => $content,
                ];
    
                $res = $this->custom_page_data->insert($data);
                if ($res) {
                    echo json_encode(['status' => true, 'message' => 'Page content created successfully.']);
                } else {
                    echo json_encode(['status' => false, 'message' => 'Page content create unsuccessfully.']);
                }
                exit;
            }else{
                
                $result = $this->custom_page_data->select('image')->find($page_id);
                if(!empty($image) && $image->isValid()){
                    if(!empty($result['image'])){
                        $path  = "public/uploads/custom_pages_image/".$result['image'];
                        if(file_exists($path)){
                            unlink($path);
                        }
                    }
                    $file_name = $image->getRandomName();
                    $image->move('public/uploads/custom_pages_image/', $file_name);
                }
    
                $data = [
                    'heading'            => $heading,
                    'image'              => $file_name,
                    'content'            => $content,
                ];

                $data = array_filter($data);
                $res = $this->custom_page_data->update($page_id, $data);
                if ($res) {
                    echo json_encode(['status' => true, 'message' => 'Page content updated successfully.']);
                } else {
                    echo json_encode(['status' => false, 'message' => 'Page content create unsuccessfully.']);
                }
                exit;
            }
        }
    }

    public function getSubMenuData($id= null){
        $res = $this->custom_page_data->where('custom_sub_menu_id', $id)->first();
        if ($res) {
            echo json_encode(['status' => true, 'data' => $res ]);
        } else {
            echo json_encode(['status' => false]);
        }
        //echo json_encode($res);
        exit;
    }

    public function deleteSubmenu($id){
        $result = $this->custom_page_data->select(['id','image'])->where('custom_sub_menu_id', $id)->findAll();
        if(!empty($result)){
            foreach($result as $res){
                $path  = "public/uploads/custom_pages_image/".$res['image'];
                if(file_exists($path)){
                    unlink($path);
                }
                $this->custom_page_data->delete($res['id']);
            }
            $this->sub_menu_model->delete($id);
            echo json_encode(['status' => true, 'message' => 'Sub menu deleted successfully.' ]);
        }else{
            $this->sub_menu_model->delete($id);
            echo json_encode(['status' => true, 'message' => 'No sub menu unsuccessfully.' ]);
        }
    }

    public function search(){
        return redirect()->to(base_url());
    }
    
    
    /**
     * custom Main Menu
     *
     * @return void
     */
    public function custom_Main_Menu($slug=null){

        if($slug==null){
            $seg_ment = $this->request->uri->getSegment(1);
        }else{
            $seg_ment = $slug;       
        }
        
       
        $menuData = $this->menu_model->select('id, menu_name')->where('menu_link',$seg_ment)->first();
        $menuName = $menuData['menu_name'];
        $menu_id = $menuData['id'];
        $sub_menu =0;
        $custom_data = $this->custom_page_data->select(['heading', 'image', 'content'])->where('menu_link', $seg_ment)->first();        
        
        $slider = $this->user_slider->getSlider($menuName);
      
        /**
         * Make gallery images array
         */
        $images = $this->user_slider->galleryImages($menuName);
        
         /**
         * Make video gallery array
         */
        $video =  $this->user_slider->getVideoLists($menuName);

        /**
         * Make custom section array data
         */
        $custom_section =  $this->user_slider->getCustomSectionData($menuName);
        
        /**
         * Make testimonial data section array data
         */
        $testimonial =  $this->user_slider->getTestimonialData($menuName);

                /**
         * Make faq list section array data
        */
        $fq_lists =  $this->user_slider->getFaqLists($menuName);

        /** 
         * Make faq list section array data
        */
        $services =  $this->user_slider->getServiesLists($menuName);

        /**
         * Make products list section array data
        */
        $products =  $this->user_slider->getProductsLists($menuName);

        $custom = [];

        /**
         * Make products list section array data
        */
        $post_updates =  $this->user_slider->getUpdateLists($menuName);

        // $menu_sub_menu_id = "";
        // if ($this->request->uri->getTotalSegments() >= 2 && $this->request->uri->getSegment(2)){
        //     $menu_sub_menu_id = $this->request->uri->getSegment(3);
        // }
       
        
        $final_slider = [];
        $business_query = [];
        $sort_order = [];

        if(!empty($menu_id)){
            // $menu_sub_menu_id = base64_decode($menu_sub_menu_id);
            // $arr = explode("/", $menu_sub_menu_id);
            // $menu_id  = $arr[0];
            // $sub_menu = $arr[1];
            
            //Get sorting oder of arrange section
            $sort_order   = $this->user_slider->getMainMenuSortOrder('', $menu_id);

            $final_slider = $this->arranges_data->getCustomMainArrangeSlider($menu_id);
          
            $custom       = $this->arranges_data->getCustomMainSectionData($menu_id);

            $services =  $this->user_slider->getCustomMainServiesLists($menu_id);         
            
            $products     =  $this->user_slider->getCustomMainProductsLists($menu_id);
           
            $images       =  $this->user_slider->getCustomMainGalleryImages($menu_id);          

            $video        =  $this->user_slider->getCustomMainVideoGallery($menu_id);          

            $testimonial  =  $this->user_slider->getCustomMainTestimonials($menu_id);  

            $logo_slider  =  $this->user_slider->getCustomMainLogoSlider($menu_id, $sub_menu);       

            $fq_lists     =  $this->user_slider->getCustomMainFaqsSection($menu_id);           

            $post_updates =  $this->user_slider->getCustomMainPostUpdates($menu_id);            

            $business_query=  $this->user_slider->getCustomMainBusinessQuery($menu_id, $sub_menu);
        }
              
        $pageData = [
            'title' => $seg_ment,
            'description' => 'This is the '.$seg_ment.' page',
            'keywords' => 'Healthcare',
            'slug' => empty($seg_ment)?"Page Section":$seg_ment,
            'user_details'  => $this->user,
            'menu_lists'    => $this->final_menu,
            'cart'          => cart_history(),
            'colors'        => $this->colors,
            'meta_keywords' => $this->meta_lib_data,
            'custom_data'   => $custom_data,            
            'sliders'       => $final_slider,
            'services'      => $services,
            'products'      => $products,
            'posts'         => $post_updates,
            'videoes'       => $video,
            'gallery_images'=> $images,
            'custom_section'=> $custom,
            'testimonials'  => $testimonial,            
            'logo_slider'  => $logo_slider,

            'fq_lists'      => $fq_lists,
            'business_query'=> $business_query,
            'sort_order'    => $sort_order,
            "custom_insert" => $this->user_head_foot,
        ];        
      
        return view($this->user['theme_name'].'/'.'frontend/custom_page', $pageData);
    }

}


