<?php

namespace App\Controllers;

use App\Models\Users_model;

class Signin extends AppController
{

    private $signin_validation_errors;
    protected $user_model;
    function __construct()
    {
        parent::__construct();
        $this->signin_validation_errors = array();
        helper('email','url');
        $this->user_model = new Users_model();
    }

    function index()
    {
        if ($this->Users_model->login_user_id()) {
            app_redirect('dashboard');
        } else {
            $view_data["redirect"] = "";
            if (isset($_REQUEST["redirect"])) {
                $view_data["redirect"] = $_REQUEST["redirect"];
            }
            return view('login');
        }
    }

    private function has_recaptcha_error()
    {
        $recaptcha_post_data = $this->request->getPost("g-recaptcha-response");
        $response = $this->is_valid_recaptcha($recaptcha_post_data);
        if ($response === true) {
            return true;
        } else {
            array_push($this->signin_validation_errors, app_lang("re_captcha_error-" . $response));
            return false;
        }
    }

    private function is_valid_recaptcha($recaptcha_post_data)
    {
        //load recaptcha lib
        require_once(APPPATH . "ThirdParty/recaptcha/autoload.php");
        $recaptcha = new \ReCaptcha\ReCaptcha(get_setting("re_captcha_secret_key"));
        $resp = $recaptcha->verify($recaptcha_post_data, $_SERVER['REMOTE_ADDR']);

        if ($resp->isSuccess()) {
            return true;
        } else {

            $error = "";
            foreach ($resp->getErrorCodes() as $code) {
                $error = $code;
            }
            return $error;
        }
    }

    // check authentication
    function authenticate()
    {

        helper('form');
        $validation = $this->validate_submitted_data(array(
            "email" => "required|valid_email",
            "password" => "required"
        ), true);


        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");

        if (!$email) {
            //app_redirect('signin');
            $this->session->setFlashdata("login_error", 'Please enter your email.');
            return redirect()->back()->withInput();
        }

        if (!$password) {
            $this->session->setFlashdata("login_error", 'Please enter your password.');
            return redirect()->back()->withInput();
        }

        //check if there reCaptcha is enabled
        //if reCaptcha is enabled, check the validation
        if (get_setting("re_captcha_secret_key")) {
            //in this function, if any error found in recaptcha, that will be added
            $this->has_recaptcha_error();
        }

        //don't check password if there is any error
        if ($this->signin_validation_errors) {
            $this->session->setFlashdata("signin_validation_errors", $this->signin_validation_errors);
        }

        if ($this->user_model->authenticate($email, $password) === "notEmail") {

            $this->session->setFlashdata("login_error", 'Email id is not registered. Please register!');
            return redirect()->back()->withInput();
        }

        if ($this->user_model->authenticate($email, $password) === "inactive") {
            $this->session->setFlashdata("login_error", 'Your account is Deactive. Please contact to admin!');
            return redirect()->back()->withInput();
        }

        if (!$this->user_model->authenticate($email, $password)) {
            $this->session->setFlashdata("login_error", 'Wrong password!');
            return redirect()->back()->withInput();
        } else {

            return redirect()->to('manage/dashboard');
        }
    }

    public function sign_out()
    {
        unset($_SESSION['login_user']);
        return redirect()->to(base_url() . "/manage");
    }

    //send an email to users mail with reset password OTP
    function send_reset_password_mail()
    {   
        $url = current_url();
        $parsed_url = parse_url($url);       
        $result = '';
        $post['domain']= 'shreetrilokinath.in';
        $res = true;
        if (isset($parsed_url['host'])) {
           // $post['domain'] = $parsed_url['host'];       
            if($post['domain']!="localhost"){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,PLUGIN_CMS_PARTNER_URL.'/get-email');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'email:'.FILTER_EMIAL,
                    'password:'.FILTER_PASSWORD
                ));
                $result = curl_exec($ch);
                curl_close($ch); 
            }
        }   
        if($post['domain']!="localhost"){
            $response = json_decode($result);
            $super_admin = $response->super_admin;
            $partner = $response->partner;
            $partner_id = $response->partner_id;
            $super_admin_id = $response->super_admin_id;
        }   
       

        $this->validate_submitted_data(array(
            "email" => "required|valid_email"
        ));

        $email = $this->request->getPost("email");        
        $saved_id =  isset($_POST['saved_id']) ? $this->request->getPost("saved_id") : false;
        $userData = $this->user_model->getUserInfo($email);
        $existing_user = $this->Users_model->is_email_exists($email);  
        if ($existing_user) {     

            $verification_data = array(
                "type" => "reset_password",
                "code" => make_random_string(),
                "otp" => make_random_otp(),
                "params" => serialize(array(
                    "email" => $existing_user->user_email,
                    "expire_time" => time() + (24 * 60 * 60)
                ))
            );
            if ($saved_id != false) {
                $this->Verification_model->delete_permanently($saved_id);
            }
            $save_id = $this->Verification_model->ci_save($verification_data);
            $verification_info = $this->Verification_model->get_one($save_id);

            if($post['domain']!="localhost"){
                $currentURL = str_replace("/send-otp", "", current_url());       
                $subject = "Forgot Password OTP";           
                $message = forgotPasswordOTPEmailTemplate($verification_info->otp, $currentURL, $userData->user_name);
                $user_name = $super_admin->company_name;
                $mail = $super_admin->v_email;
                $password = $super_admin->v_password;
                $port = $super_admin->v_port;
                $host = $super_admin->v_host;
        
                if($partner_id>0){
                    $user_name = $partner->company_name;
                    $mail = $partner->v_email;
                    $password = $partner->v_password;
                    $port = $partner->v_port;
                    $host = $partner->v_host;        
                    $res = email_send($email, $subject, $message, $user_name, $mail, base64_decode($password), $port, $host);
                    if($res!='1'){

                        $user_name = $super_admin->company_name;
                        $mail = $super_admin->v_email;
                        $password = $super_admin->v_password;
                        $port = $super_admin->v_port;
                        $host = $super_admin->v_host;

                        $res = email_send($email, $subject, $message, $user_name, $mail, base64_decode($password), $port, $host);
                    }
                }else{
                    $res = email_send($email, $subject, $message, $user_name, $mail, base64_decode($password), $port, $host);
                }
            }

            if ($res) {
                echo json_encode(array('success' => true, 'message' => "Otp Send to your registered Email.", 'saved_id' => $save_id));
            } else {
                echo json_encode(array('success' => false, 'message' => app_lang('error_occurred')));
            }
            exit;
        } else {
            echo json_encode(array("success" => false, 'message' => app_lang("no_acount_found_with_this_email")));
            return false;
        }
    }

    //send an OTP to users mobile with reset password OTP 
    function send_reset_password_mobile_otp()
    {
        $user_data =  $this->Users_model->getUserInfo($_POST['email']);
        $mobile = $user_data->user_phone;

        // $saved_id =  isset($_POST['saved_id']) ? $this->request->getPost("saved_id") : false;
        // if ($saved_id != false) {
        //     $this->Verification_model->delete_permanently($saved_id);
        // }

        $existing_user = $this->Users_model->is_mobile_exists($mobile);
        //send reset password email if found account with this email
        if ($existing_user) {


            $verification_data = array(
                "type" => "reset_password",
                "code" => make_random_string(),
                "otp" => make_random_otp(),
                "params" => serialize(array(
                    "email" => $existing_user->user_email,
                    "expire_time" => time() + (24 * 60 * 60)
                ))
            );
            $save_id = $this->Verification_model->ci_save($verification_data);
            $verification_info = $this->Verification_model->get_one($save_id);
            $fields = array(
                "variables_values" => $verification_info->otp,
                "route" => "otp",
                "numbers" => "$mobile",
            );
            $res =  sendOtpOnMobile($fields);
            $res = json_decode($res);
            $res->saved_id = $save_id;
            echo json_encode($res);
        } else {
            echo json_encode(array("success" => false, 'message' => app_lang("no_acount_found_with_this_mobile")));
        }
    }


    public function validateOtp()
    {

        $this->validate_submitted_data(array(
            "otp" => "required|min_length[6]|max_length[6]"
        ));

        $otp = $this->request->getPost("otp");
        $email = $this->is_valid_reset_password_otp($otp);
        if ($email) {
            echo json_encode(array('success' => true, 'message' => app_lang("otp_verified"), 'data' => $email));
        } else {
            echo json_encode(array('success' => false, 'message' => app_lang('invalid_otp')));
        }
    }

    //when user clicks to reset password link from his/her email, redirect to this url
    function new_password($key)
    {
        $valid_key = $this->is_valid_reset_password_key($key);

        if ($valid_key) {
            $email = get_array_value($valid_key, "email");

            if ($this->Users_model->is_email_exists($email)) {
                $view_data["key"] = clean_data($key);
                $view_data["form_type"] = "new_password";
                return $this->template->view('signin/index', $view_data);
                return false;
            }
        }

        //else show error
        $view_data["heading"] = "Invalid Request";
        $view_data["message"] = "The key has expaired or something went wrong!";
        return $this->template->view("errors/html/error_general", $view_data);
    }

    //finally reset the old password and save the new password
    function do_reset_password()
    {

        $this->validate_submitted_data(array(
            "password" => "required",
            "confirmPassword" => "required|matches[password]"
        ));

        $key = $this->request->getPost("user_email");
        $password = $this->request->getPost("password");
        $valid_key = $this->is_valid_reset_password_email($key);

        if ($valid_key) {
            $email = get_array_value($valid_key, "email");
            $user = $this->Users_model->is_email_exists($email);
            $user_data = array("user_password" => base64_encode($password));

            if ($user->id && $this->Users_model->updatePassword($user_data, $user->id)) {
                //user can't reset password two times with the same code
                $options = array("email" => $key, "type" => "reset_password");
                $verification_info = $this->Verification_model->get_details($options)->getRow();
                if ($verification_info->id) {
                    $this->Verification_model->delete_permanently($verification_info->id);
                }

                echo json_encode(array("success" => true, 'message' => app_lang("password_reset_successfully") . " " . anchor("signin", app_lang("signin"))));
                return true;
            }
        }
        echo json_encode(array("success" => false, 'message' => app_lang("error_occurred")));
    }

    //check valid key
    private function is_valid_reset_password_key($verification_code = "")
    {

        if ($verification_code) {
            $options = array("code" => $verification_code, "type" => "reset_password");
            $verification_info = $this->Verification_model->get_details($options)->getRow();

            if ($verification_info && $verification_info->id) {
                $reset_password_info = unserialize($verification_info->params);

                $email = get_array_value($reset_password_info, "email");
                $expire_time = get_array_value($reset_password_info, "expire_time");

                if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) && $expire_time && $expire_time > time()) {
                    return array("email" => $email);
                }
            }
        }
    }

    //check valid key
    private function is_valid_reset_password_email($verification_code = "")
    {


        if ($verification_code) {
            $options = array("email" => $verification_code, "type" => "reset_password");
            $verification_info = $this->Verification_model->get_details($options)->getRow();

            if ($verification_info && $verification_info->id) {
                $reset_password_info = unserialize($verification_info->params);

                $email = get_array_value($reset_password_info, "email");
                $expire_time = get_array_value($reset_password_info, "expire_time");

                if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) && $expire_time && $expire_time > time()) {
                    return array("email" => $email);
                }
            }
        }
    }

    //check valid key
    private function is_valid_reset_password_otp($verification_code = "")
    {
        if ($verification_code) {
            $options = array("otp" => $verification_code, "type" => "reset_password");
            $verification_info = $this->Verification_model->get_details($options)->getRow();
            if ($verification_info && $verification_info->id) {
                $reset_password_info = unserialize($verification_info->params);

                $email = get_array_value($reset_password_info, "email");
                $expire_time = get_array_value($reset_password_info, "expire_time");

                if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) && $expire_time && $expire_time > time()) {
                    return array("email" => $email);
                }
            }
        }
    }
}
