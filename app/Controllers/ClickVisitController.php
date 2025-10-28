<?php

namespace App\Controllers;
use App\Models\ClickVisitModel;


class ClickVisitController extends UiController { 
    
    protected $validation; 
    protected $clickvisit_model; 

    public function __construct(){
        parent::__construct();
        $this->validation    = \Config\Services::validation();
        $this->clickvisit_model = new ClickVisitModel();
        date_default_timezone_set("Asia/Calcutta");  
        helper('form');
    }


    //Save inquiry modal data
    public function getHitClicks(){
        
        $siteurl = $_GET['current_path'];
        if (!empty($siteurl)) {
            $siteurl = strtolower($siteurl);
        }
        
        $final_url = "https://";
        if (!empty($siteurl)) {
            $res = substr($siteurl, 0, 7) == "http://" ? "http" : "https";
            if ($res == "http") {
                $web = substr($siteurl, 7, 3);
                if ($web == "www") {
                    $final_url = $final_url . substr($siteurl, 11);
                } else {
                    $final_url = $final_url . substr($siteurl, 7);
                }
            } else {
                $web = substr($siteurl, 8, 3);
                if ($web == "www") {
                    $final_url = $final_url . substr($siteurl, 12);
                } else {
                    $final_url = $final_url . substr($siteurl, 8);
                }
            }
            if (ord(substr($final_url, -1)) == 47) {
                $final_url = substr_replace($final_url, "", -1);
            }
            $siteurl = $final_url;
        }
        
        
        $res = $this->clickvisit_model->findAll();
        $today = date('Y-m-d');
        $old_Data = $this->clickvisit_model->where(['url'=>$siteurl,'date(created_at)'=>$today])->find();
        
        if(!empty($old_Data)){
              $old_Data_id =$old_Data[0]['id'];
              $clicks =$old_Data[0]['clicks'] +1;
             $this->clickvisit_model->set('clicks',$clicks)->where('id',$old_Data_id)->update();
        }else{
            $data = ['url'=>$siteurl];
            $this->clickvisit_model->insert($data);
        }
        exit;
    }
    
    
    public function getVistorCount($year=null){
        
        if(!empty($year)){
           
            $final_count  = [];
            $final_month  = []; 

            for($i=1; $i<= 12; $i++){
                
                $k = '-';
                if($i<10){
                    $k = '-0'; 
                }
                $res = $this->clickvisit_model->selectSum('clicks')
                        ->like('created_at', $year.$k.$i)
                        ->findAll();
                        
                
                $month_str = date("M", strtotime($year.$k.$i));
                if(empty($res[0]['clicks'])){
                    $count = '0';
                }else{
                    $count = $res[0]['clicks'];
                }
                $final_count[] = $count;
                $final_month[] = $month_str.' '.$year;
            }
            $data['status'] = true;
            $data['count'] = $final_count;
            $data['month'] = $final_month;
            echo json_encode($data);
            exit; 
        }else{
            $data['status'] = false;
            $data['count'] = [0, 0];
            $data['month'] = ['Jan', 'Feb'];
            echo json_encode($data);
            exit; 
        }
    }

   


}


