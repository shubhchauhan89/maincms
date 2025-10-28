<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users_model;
use App\Models\PostsModel;
use CodeIgniter\API\ResponseTrait;
use mysqli;

class UserController extends BaseController
{
    protected $user;
    use ResponseTrait;
    public function __construct(){
        $this->user = new Users_model();
        $this->post = new PostsModel();
    }

    public function index(){
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL,'http://localhost:8080/user/all');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Length: ' . strlen($fields)));
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     'email: user.varification@gmail.com',
        //     'password: $2y$10$2VeStUYwYZsGy06ibDGHp.JaZroqVuak2O/KBkeBNelOYLYU5bvsi'
        // ));
        // $response = curl_exec($ch);
        // curl_close($ch); // Close the connection
        // echo $response;
        // exit;
        $user = $this->user->getUsers();
        if($user){
            $data = [
                'status' => true,
                'error'  => false,
                'data'   => $user
            ];
            return $this->respond($data);
        }else{
            $data = [
                'data'   => "No record found."
            ];
            return $this->fail($data);
        }
    }

    public function all(){
        $user = $this->user->getUsers();
        if($user){
            $data = [
                'status' => true,
                'error'  => false,
                'data'   => $user
            ];
            return $this->respond($data);
        }else{
            $data = [
                'data'   => "No record found."
            ];
            return $this->fail($data);
        }
    }

    public function update(){
        $password = $this->request->getVar('password');
        $email = '';
        if(!$password){
            $data = [
                'data'   => "No password found, please insert your password."
            ];
            return $this->fail($data);
        }

        $user = $this->user->updateUserPassword($email, $password);
        if($user){
            $data = [
                'status' => true,
                'error'  => false,
                'data'   => 'Password updated successfully.'
            ];
            return $this->respond($data);
        }else{
            $data = [
                'data'   => 'No record found.'
            ];
            return $this->fail($data);
        }
    }


    public function changeStatus(){
        
        $db = db_connect();

        $sql = "UPDATE `seo_users` SET `user_status`= case when user_status = 1 then 0 else 1 end";
        $result = $db->query($sql);
        if($result){
            $sql = "SELECT `user_status` FROM `seo_users` WHERE `id` =1 ";
            $result = $db->query($sql);
            $status = $result->getRowArray();
            $val = "Deactivated";
            if($status['user_status']==1){
                $val ="Activated";
            }

            $data = [
                'status' => true,
                'error'  => false,
                'data'   => "User ".$val." successfully."
            ];
            return $this->respond($data);
        }else{
            $data = [
                'status' => false,
                'error'  => true,
                'data'   => 'Status update unsuccessfully.'
            ];
            return $this->fail($data);
        }
    }
    
    public function updateInfo(){
        $data = [
            "user_name"  => $this->request->getPost('user_name'),
            "user_email" => $this->request->getPost('user_email'),
            "user_phone" => $this->request->getPost('user_phone'),
        ];
        
        if($this->user->updateInfo($data)){
            $res = [
                'status' => true,
                'message'   => "Client information updated successfully."
            ];
        }else{
            $res = [
                'status' => false,
                'message'   => "Client information update unsuccessfully."
            ];
        }
        return $this->respond($res);
    }
    
    public function updatePassword(){
        
        $data = [
            "user_password"  => base64_encode($this->request->getPost('password')),
        ];
        
        if($this->user->updatePassword($data)){
            $res = [
                'status' => true,
                'message'   => "Client password updated successfully."
            ];
        }else{
            $res = [
                'status' => false,
                'message'   => "Client password update unsuccessfully."
            ];
        }
        return $this->respond($res);
    }
    
    
    public function websiteInfo(){
        
        
        $file_name = NULL;
        $file = $this->request->getFile('image');
        if (!empty($_FILES['image']['name']) && $file->isValid()) {
            $file_name = $file->getRandomName();
            $file->move('public/uploads/img/business_logo/', $file_name);
        }
            
        $data = [
            "company_logo"  => $file_name,
            "company_name"  => $this->request->getPost('businessName'),
            "company_profile"  => $this->request->getPost('businessDescription'),
            "company_address"  => $this->request->getPost('businessAddress'),
            "domain_url"  => $this->request->getPost('domainName'),
        ];
        
        if(empty($data['company_logo'])){
            unset($data['company_logo']);
        }
        
        
        if($this->user->updatePassword($data)){
            $res = [
                'status' => true,
                'message'   => "Website info updated successfully."
            ];
        }else{
            $res = [
                'status' => false,
                'message'   => "Website info update unsuccessfully."
            ];
        }
        return $this->respond($res);
    }
    
    public function updateStatus(){
        echo "sss";
        exit;
    }

    public function cronFunction() {
        $posts = $this->post
            ->select('id, schedule_time') 
            ->where('status', 'scheduled')
            ->findAll();
    
        foreach ($posts as $post) {
          
            $scheduledTime = $post['schedule_time'];
    
           $this->updatePostsStatus($post['id'], $scheduledTime);
        }
    }

    function updatePostsStatus($id, $scheduledTime){
        $model = new PostsModel();
        $userPost = $model->find($id);
        
        if(!empty($userPost)){
            $currentDateTime = date('Y-m-d H:i:s');
            $scheduledDateTime = date('Y-m-d H:i:s', strtotime($scheduledTime));

            if($currentDateTime = $scheduledDateTime || $currentDateTime > $scheduledDateTime){
                
                $post_model = new PostsModel();
                $data = [
                    'status' => 'published',
                ];
                $post_model->update($id, $data);
            }else{
                log_message('debug', 'Scheduled time has not passed yet.');
            }
        } else {
            // Debugging statement
            log_message('debug', 'Post with ID ' . $id . ' not found.');
        }
    }
    
}
