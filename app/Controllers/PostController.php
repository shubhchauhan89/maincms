<?php

namespace App\Controllers;

use App\Models\PostsModel;
use App\Models\Users_model;
use App\Models\MetaKeywordModel;
use App\Models\Enquiry_model;
use App\Models\PostSectionModel;

use CodeIgniter\API\ResponseTrait;

class PostController extends AppController
{
    use ResponseTrait;
    public function __construct()
    {
        parent::__construct();
    }



    public function getMetaData($url = null)
    {
        // $metaurl = getenv('PARENT_URL') . '/user/payment-status';
        // $post = [
        //     //'base_url' => 'demo.sartiaglobal.com',
        //     'base_url' => base_url(),
        // ];
        // $options = array(
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_HEADER         => false,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_AUTOREFERER    => true,
        //     CURLOPT_POST           => true,
        //     CURLOPT_POSTFIELDS     => $post,
        // );
        // $ch = curl_init($metaurl);
        // curl_setopt_array($ch, $options);
        // $payment_status  = curl_exec($ch);
        // curl_close($ch);
      
        $current_url = base64_decode($url);
        $user_model     = new Users_model();
        $update_model   = new PostsModel();

        $user_data = $user_model->getUserData();
        $user_id        = $user_data['id'];
        
        // print_r($user_data);
        // exit;
        
        $this->meta_keywords = new MetaKeywordModel();
        $this->meta_keywords->select(['keyword', 'page_url']);
        $this->meta_keywords->where(['page_url'=> $current_url, 'status' => '1', 'created_by' => $user_id]);
        $this->meta_keywords->orderBy('id', 'asc');
        $meta_keywords =  $this->meta_keywords->findAll();

        $update_data = $update_model->orderBy('id', 'desc')->findAll(10);
        $title = "";
        if (!isset($meta_keywords) && !empty($meta_keywords)) {
            $title = $user_data['business_name'] . ' | ' . $user_data['company_phone_no'];
            foreach ($meta_keywords as $keyword) {
                $title .= ", ".$keyword['keyword'];
            }
        } else {
            $title = $user_data['business_name'] . ' | ' . $user_data['company_phone_no'];
        }

       
        $pluginsupdates = "";
        if (!empty($update_data) && count($update_data) > 0) {
            foreach ($update_data as $newdata) {
                $pluginsupdates .= '<div class="plugin-card my-2">
                          <div class="plugin-card-body">
                            <p>
                              ' . $newdata['description'] . '
                            </p>
                            <a href="'.base_url().'/updates'.'/'.$newdata['slug'] . '" >
                            <button class="read-more-button" type="button">
                              Read More
                            </button> 
                            </a>
                          </div>
                        </div>';
            }
        }
        
        // end plugins

        //////////////////////////////////////
        //$siteurl        ='https://plugins.thewingshield.com/';
        // $condition      = ['keywordUrl' => $siteurl];
        // $keyword_model->select('keywords');
        // $keywords_data = $keyword_model->where($condition)->findAll();
        
        $final = "";
        // foreach ($keywords_data as $keyword) {
        //     $final .= $keyword['keywords'] . ", ";
        // }
        // if ($final == "") {
        //     $final = "welcome";
        // } else {
        //     $final = rtrim($final, ', ');
        // }
        
        $headData = '<title>'. $title . '</title>
              <link rel="canonical" href="https://www.' . $user_data['website_URL'] . '/" />
              <meta name="document-type" content="Public" />
              <meta name="document-rating" content="Safe for Kids" />
              <meta name="robots" content="ALL, INDEX, FOLLOW" />
              <meta name="googlebot" content="index, follow" />
              <meta name="Expires" content="never" />
              <meta name="coverage" content="Worldwide" />
              <meta name="distribution" content="Global" />
              <meta name="rating" content="General" />
              <meta name="target" content="all" />
              <meta name="HandheldFriendly" content="True" />
              <meta http-equiv="content-language" content="en" />
              <meta name="YahooSeeker" content="Index,Follow" />
              <meta property="og:locale" content="en_US" />
              <meta content="Yes" name="allow-search" />
              <meta name="Content-Language" content="EN" />
              <meta name="geo.region" content="IN" />
              <meta content="global" name="distribution" />
              <meta name="Copyright" content="© 2022 ' . $user_data['company_name'] . '" />
              <meta
                name="classification"
                content="' . $final . '"
              />
              <meta name="address" content="' . $user_data['company_name'] . '" />
              <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "LocalBusiness",
                  "paymentAccepted": "Cash, Credit Card",
                  "priceRange": "14999",
                  "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "' . $user_data['company_name'] . '",
                    "addressLocality": "",
                    "addressRegion": "",
                    "postalCode": "",
                    "addressCountry": "India",
                    "areaServed": ["", "", "0"]
                  },
                  "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4",
                    "reviewCount": "167639"
                  },
                  "name": "' . $user_data['company_name'] . '",
                  "image": [
                    "' . base_url() . '/public/uploads/img/business_logo/' . $user_data['business_logo'] . '"
                  ],
                  "telephone": "+91-' . $user_data['company_phone_no'] . '",
                  "url": "https://www.' . $user_data['website_URL'] . '"
                }
              </script>
              <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "WebSite",
                  "@id": "#website",
                  "url": "https://www.' . $user_data['website_URL'] . '/",
                  "name": "' . $user_data['company_name'] . '",
                  "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://www.' . $user_data['website_URL'] . '//?s={search_term_string}",
                    "query-input": "required name=search_term_string"
                  }
                }
              </script>
                    
              <meta property="og:type" content="' . $user_data['company_name'] . '" />
              <meta property="og:title" content="' . $user_data['company_name'] . '" />
              <meta
                property="og:image"
                content="' . base_url() . '/public/uploads/img/business_logo/' . $user_data['business_logo'] . '"
              />
              <meta
                property="og:description"
                content="' . $user_data['company_profile'] . '"
              />
              <meta property="og:url" content="https://www.' . $user_data['website_URL'] . '/" />
              <meta name="twitter:card" content="summary" />
              <meta
                name="twitter:description"
                content="' . $user_data['company_profile'] . '"
              />
              <meta name="twitter:title" content="' . $user_data['company_name'] . '" />
              <meta
                property="twitter:image"
                content="' . base_url() . '/public/uploads/img/business_logo/' . $user_data['business_logo'] . '"
              />
              <meta name="twitter:site" content="@' . $user_data['company_name'] . '" />
              <meta name="twitter:domain" content="' . $user_data['company_name'] . '" />
              <meta
                name="keywords"
                content="' . $final . '"
              />
              <meta 
                name="description"
                content="' . $user_data['company_profile'] . '"
              />
              <link
                rel="shortcut icon"
                href="' . base_url() . '/public/uploads/img/business_icon/' . $user_data['business_icon'] . '"
              />
              <meta charset="utf-8" />
              <meta
                name="viewport"
                content="width=device-width, initial-scale=1, shrink-to-fit=no"
              />
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
            
                  .plugin-box {
                    position: fixed;
                    bottom: 10px;
                    z-index: 99999; 
                  }
                  .plugin-box.right {
                    right: 10px;
                  }
                  .plugin-box.left {
                    left: 10px;
                  }
                  .plugin-box .plugin__open-btn {
                    width: 50px;
                    height: 50px;
                    border: 0;
                    border-radius: 50%;
                    font-size: 30px;
                    overflow:hidden;
                    background: transparent;
                  }
                  .plugin-box .plugin__open-btn .plugin__chat-icon {
                    width: 100%;
                    height: 100%;
                    transition-duration: 0.3s;
                    border-radius: 50%;
                    // background:transparent;
                  }
                  .plugin-box .plugin__open-btn .plugin__chat-icon:hover {
                    transform: rotate(360deg);
                  }
                  .plugin-box .plugins {
                    transition-duration: 0.3;
                    transform: scale(0);
                    position: absolute;
                    top: -217%;
                    left: 0px;
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    gap: 5px;
                  }
                  .plugin-box .plugins .icons {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    position: relative;
                  }
                  .plugin-box .plugins .icons img {
                  border-radius: 50%;
                    width: 100%;
                    height: 100%;
                  }
                  .plugin-box .plugins .icons span {
                    position: absolute;
                    display: inline-block;
                    right: -220%;
                    width: 100px;
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                    padding: 5px 10px;
                    border-radius: 10px;
                    opacity: 0;
                    transform: scale(0);
                    transition-duration: 0.3s;
                  }
                  .plugin-box.right .plugins .icons span {
                    left: -220%;
                    width: 100px;
                  }
                  .plugin-box .plugins .icons:hover span {
                    opacity: 1;
                    transform: scale(1);
                  }
                  .plugin-box .plugins.active {
                    transform: scale(1);
                  }
                  .plugin__modal {
    				display: none; 
    				position: fixed; 
    				z-index: 99999; 
    				padding-top: 100px; 
    				left: 0;
    				top: 0;
    				width: 100%; 
    				height: 100%; 
    				overflow: auto; 
    				background-color: rgb(0, 0, 0); 
    				background-color: rgba(0, 0, 0, 0.4); 
        			}
        			.plugin__modal.active {
        				display: block;
        			}
    			    .singin > form > div > input{
                          background: #edf2f6 none repeat scroll 0 0;
                            border: medium none;
                            font-size: 13px;
                            margin-bottom: 5px;
                            padding: 10px 20px;
                            width: 100%;
                      }
    
        			.plugin__modal-content {
        				background-color: #fefefe;
        				margin: auto;
        				padding: 20px;
        				border: 1px solid #888;
        				width: 100%;
        				max-width: 500px;
        				    border-radius: 10px;
        			}
        			.plugin__modal-header {
        				display: flex;
        				justify-content: space-between;
        				align-items: center;
        			}
        			.plugin__modal-header .plugin__close {
        				width: 30px;
        				height: 30px;
        				border: 1px solid #fefefe;
        				color: #fefefe;
        				font-weight: bolder;
        				border-radius: 10px;
        				position: relative;
        				background-color: red;
        				cursor: pointer;
        			}
        			.plugin__modal-header .plugin__close::after {
        				content: "X";
        			}
        			.plugin__modal-header h5 {
        				font-weight: bolder;
        				font-size: 24px;
        			}
        			.my-2 {
        				margin-top: 10px;
        				margin-bottom: 10px;
        			}
        			.form-input{
        			    text-align: left;
        			}
        			.form-input input {
        				width: 100%;
        				height: 40px;
        				border: 1px solid #333;
        				border-radius: 5px;
        				padding: 0 10px;
        				font-size: 16px;
        				color: #333;
        				background-color: #fefefe;
        			}
        			.submit-button {
        				width: 100%;
        				height: 40px;
        				border: 1px solid #333;
        				border-radius: 5px;
        				padding: 0 10px;
        				font-size: 16px;
        				color: #333;
        				background-color: #fefefe;
        				cursor: pointer;
        			}
        			.submit-button:hover {
        				background-color: #333;
        				color: #fefefe;
        			}
        			input.is-invalid {
        				border-color: red;
        			}
        			label.is-invalid,
        			span.is-invalid {
        				color: red;
        			}
        			.plugin-card {
        				position: relative;
        				display: flex;
        				flex-direction: column;
        				min-width: 0;
        				word-wrap: break-word;
        				background-color: #fff;
        				background-clip: border-box;
        				border: 1px solid rgba(0, 0, 0, 0.125);
        				border-radius: 0.25rem rem;
        			}
        			.plugin-card-body {
        				padding: 10px;
        			}
        			.read-more-button {
        				margin-top: 10px;
        				height: 30px;
        				border: 1px solid rgb(87, 124, 234);
        				border-radius: 5px;
        				padding: 0 10px;
        				font-size: 16px;
        				color: #333;
        				background-color: #fefefe;
        				cursor: pointer;
        			}
        			.read-more-button:hover {
        				background-color: rgb(87, 124, 234);
        				color: #fefefe;
        			}
        			.text-danger{
        			    color:red;
        			}
                </style>
                                <script async>
                                $(document).on("click", ".plugin__open-btn", function() {
                                    $(".plugins").toggleClass("active");
                                    if ($(".plugins").hasClass("active")) {
                                        $(this)
                                            .children("img")
                                            .attr(
                                                "src",
                                                "' . base_url() . '/public/uploads/plugins.io/close-button.png"
                                            );
                                    } else {
                                        $(this)
                                            .children("img")
                                            .attr(
                                                "src",
                                                "http://plugins.autoseoplugin.com/public/uploads/plugins.io/cms-plugin.jpg"
                                            );
                                    }
                                });
                                $(document).on("click", ".plugin-modal-open", function () {
                    					const target = $(this).attr("href" || "data-target");
                    					$(target).toggleClass("active");
                    				});
                    				';

        $PluginAddonData = '
            <div class="plugin-box left">
              <button type="button" class="plugin__open-btn">
                <img
                  src="http://plugins.autoseoplugin.com/public/uploads/plugins.io/cms-plugin.jpg"
                  alt=""
                  class="plugin__chat-icon"
                />
              </button>
              <div class="plugins">
                <a href="https://wa.me/' . $user_data["company_phone_no"].'?text=hello%20.." target="_blank" class="icons">
                  <img
                    src="'.base_url().'/public/uploads/plugins.io/whataapp.png"
                    alt=""
                  />
                  <span>Whatsapp</span>
                </a>
                <a href="tel:' . $user_data["company_phone_no"] . '" class="icons">
                  <img
                    src="'.base_url().'/public/uploads/plugins.io/callicon.png"
                    alt=""
                  />
                  <span>Call</span>
                </a>
                
              </div>
            </div>';
            
        // $payment_status_data = json_decode($payment_status, true);
        //   if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID'){
        //     exit;
        //   }
          
        echo $headData . "||||||||||" . $PluginAddonData;
        //echo $headData;
        exit;
    }

    public function postEnquiry(){
      $name    = $this->request->getPost('name');
      $phone   = $this->request->getPost('phone');
      $email   = $this->request->getPost('email');
      $message = $this->request->getPost('message');
      $data = [
        'name'     => $name,
        'email'    => $email,
        'phone'    => $phone,
        'message'  => $message
      ];

      $post_enquiry = new Enquiry_model();

      $res = $post_enquiry->insert($data);
      if($res){
          $data = [
              'status' => true,
              'error'  => false,
              'msg'    => 'Your enquiry is submitted. We will contact you soon.'
          ];
      } else {
          $data = [
              'status' => false,
              'error'  => true,
              'msg'    => 'No user found'
          ];
      }
      return $this->respond($data, 200);

    }
    
    public function getAllPosts()
    {
        $user_model         =       new Users_model();
        $update_model       =       new PostsModel();
        $update_sec_model   =       new PostSectionModel();
        $user               =       $user_model->getUserData();
        $update             =       $update_sec_model->select('post_id')->orderBy('id', 'desc')->findAll();
        $cust_post_id       =       "";
        if(!empty($update)){
          foreach($update as $data)
          {
              $one            = str_replace("[","",$data['post_id']);
              $two            = str_replace('"',"",$one);
              $three          = str_replace('"',"",$two);
              $four           = str_replace(']',"",$three);
              $cust_post_id  .= $four.",";
          }
        }
        
        $cust_post_id       = rtrim($cust_post_id,",");
        $cust_post_id       = explode(",",$cust_post_id);
        $cust_post_id       = array_unique($cust_post_id);
        $cust_post_id       = implode(",",$cust_post_id);
        if($cust_post_id!=''){
          $post               = $update_model->query("select * from seo_posts where id in ($cust_post_id)");
        }else{
          $post               = [];
        }
        
       
        $new_post = "";
        if($post != null)
        {
          $post = $post->getResult();
          foreach($post as $posts)
          {
            $new_post .= '<div class="central-meta item">
                      <div class="user-post">
                        <div class="friend-info">
                          <div class="d-align">
                            <div class="d-align">
                              <img width="50" height="50"
                                src="'.base_url().'/public/uploads/img/business_logo/'.$user['business_logo'].'"
                                alt="">
                              <span class="ms-3">
                                <p class="mb-0 text-danger"><a class="text-danger" href="'.base_url().'"
                                title="">'.$user['user_name'].'</a></p>
                                <span class="small">'.$posts->created_at.'<i class="fa fa-calendar"></i></span>
                              </span>
                            </div>
                            <h6 class="w-75 text-truncate text-end fw-bold">'.$posts->title.'
                            </h6>
                          </div>
                          <div class="post-meta mt-4">
                            <figure>
                              <img
                                src="'.base_url().'/public/uploads/post_updates_images/'.$posts->image.'"
                                class="img-responsive rounded img-shadow p-2" alt="'.$posts->title.'"
                                title="'.$posts->title.'">
                            </figure>
                            <div class="description">
                              <a href="'.base_url().'/updates/'.$posts->slug.'"
                                class="border border-3 text-white px-3 learnmore d-none" target="_blank" data-ripple="">Know More</a>
                              <p>'.$posts->description.'</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
          }
        }
        else
        {
          $new_post .= '<div class="central-meta item">
          <div class="user-post">
            <div class="friend-info">
              <div class="d-align">
                <div class="d-align">
                  <img width="50" height="50"
                    src="'.base_url().'/public/uploads/img/business_logo/'.$user['business_logo'].'"
                    alt="">
                  <span class="ms-3">
                    <p class="mb-0 text-danger"><a class="text-danger" href="'.base_url().'"
                      >'.$user['user_name'].'</a></p>
                    <span class="small">2022-12-14 <i class="fa fa-calendar"></i></span>
                  </span>
                </div>
                <h6 class="w-75 text-truncate text-end fw-bold">
                </h6>
              </div>
              <div class="post-meta mt-4">
                <figure>
                  <img
                    src="'.base_url().'/public/uploads/post_updates_images/no_post.jpg"
                    class="img-responsive rounded img-shadow p-2" alt=""
                    title="">
                </figure>
                <div class="description">
                  <a href="'.base_url().'/updates/"
                    class="border border-3 text-white px-3 learnmore d-none" target="_blank" data-ripple="">Know More</a>
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>';
        }
        $html_post = '<head>
  <style>
    :root {
      --my-bg: #E9E9F0;
    }
    a {
      text-decoration: none !important;
    }
    .user-profile img
    {
        border-radius: 10px;
        margin-top: 10px;
    }
    .new-my-bg
    {
        box-shadow: 12px 12px 15px #67676A, -12px -12px 15px #FFFFFF;
        border-width: thin;
        border-top-style: solid;
        border-top-color: #c3c3c1bd;
        border-radius: 10px;
    }
    .central-meta .d-align img
    {
        border-radius: 10px;
        background: linear-gradient(145deg, #F9F9FF, #D2D2D8);
        box-shadow: 2px 2px 10px #67676A, -2px -2px 10px #FFFFFF;
    }
     .central-meta
    {
        box-shadow: 2px 2px 10px #67676A, -2px -2px 10px #FFFFFF;
    }
    .post-meta img{
        box-shadow: inset 12px 12px 15px #67676A, inset -12px -12px 15px #FFFFFF;
    }
    .user-profile{
        border-radius: 10px;
    background: #E9E9F0;
    box-shadow: 12px 12px 15px #67676A, -12px -12px 15px #FFFFFF;
    }
    .text-shadow-1 {
      text-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 25%);
    }
    .profile-author {
      margin-top: -110px !important;
    }
    .user-profile figure img {
      max-height: 300px !important;
      object-fit: cover;
    }
    .author-content {
      margin-top: 10px !important;
    }
    .img-shadow {
      box-shadow: -2px -2px 4px #FFFFFF, 2px 2px 5px rgba(0, 0, 0, 0.25);
    }
    .my-bg {
      background: var(--my-bg) !important;
    }
    .central-meta {
      background: var(--my-bg) !important;
    }
    .gray-bg {
          background:  var(--my-bg) !important;
    }
    .plugin-card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem rem;
    }
    .sidebar .widget-title {
      color: #F44336 !important;
      font-size: 18px !important;
    }
    .plugin-card-body {
      padding: 10px;
    }
    .read-more-button:hover {
      background-color: rgb(87, 124, 234);
      color: #FEFEFE;
    }
    p {
      color: #4A4C65 !important;
    }
    button.read-more-button {
      margin-top: 10px;
      height: 30px;
      border: 1px solid rgb(87, 124, 234);
      border-radius: 5px;
      padding: 0 10px;
      font-size: 16px;
      color: #333;
      background-color: #FEFEFE;
      cursor: pointer;
    }
    .d-align {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .sidebar .widget-title {
    border-bottom: 1px solid #E6ECF5;
    color: #515365;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 20px;
    padding: 15px 20px;
    position: relative;
    text-transform: capitalize;
    width: 100%;
}
.sidebar .widget-title {
    color: #F44336 !important;
    font-size: 18px !important;
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="'.base_url().'/public/uploads/img/business_logo/'.$user['business_logo'].'">
  <link rel="stylesheet" href="'.base_url().'/public/assets/update.html/main.min.css">
  <link rel="stylesheet" href="'.base_url().'/public/assets/update.html/style.css">
  <link rel="stylesheet" href="'.base_url().'/public/assets/update.html/color.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
  <section>
    <div id="fb-root" class=" fb_reset">
      <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
        <div></div>
      </div>
    </div>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row g-4">
              <div class="user-profile mb-auto">
                <figure>
                  <img
                    src="'.base_url().'/public/assets/update.html/'.$user['update_page_image'].'"
                    alt="">
                  <input type="hidden" name="unknownId" id="unknownId" value="MjA4">
                </figure>
                <div class="profile-section my-bg"
                  style="border-width: thin; border-top-style: solid; border-top-color: #c3c3c1bd;">
                  <div class="row">
                    <div class="col-lg-4 p-0 p-md-auto">
                      <div class="profile-author">
                        <div class="profile-author-thumb1">
                          <img alt="author"
                            src="'.base_url().'/public/uploads/img/business_logo/'.$user['business_logo'].'"
                            style="height: 120px; width: 120px; background-color: white; border-radius: 100px; border: 5px solid #F44336;">
                        </div>
                        <div class="author-content text-shadow-1">
                          <a class="h4 author-name" href="'.base_url().'">'.$user['business_name'].'</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-5 p-0 p-md-auto">
                      <ul class="nav nav-tabs links-tab">
                        <li class="nav-item"><a class="active" href="'.base_url().'">Home</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <aside class="row g-4 sidebar w-auto">
                  <div class="col-md-6 col-lg-12">
                  <div class="widget my-bg new-my-bg h-100">
                    <h4 class="widget-title">E-Contact</h4>
                    <ul class="contact-widget">
                      <li class="contact-box img-shadow">
                        '.$user['company_map'].'
                      </li>
                      <li class="contact-box">
                        <span class="text-danger">Address</span>
                        <p>'.$user['business_address'].'</p>
                      </li>
                      <li class="contact-box">
                        <p><i class="fa fa-phone"></i>+91'.$user['company_phone_no'].'</p>
                        <a href="'.base_url().'"></a>
                        <p><a href="'.base_url().'"><i class="fa fa-globe"></i>'.base_url().'</a>
                        </p>
                      </li>
                    </ul>
                  </div>
                  </div>
                  <div class="col-md-6 col-lg-12">
                  <div class="widget my-bg new-my-bg h-100">
                    <h4 class="widget-title">Facebook</h4>
                    <ul class="social">
                      <iframe src="https://www.facebook.com/plugins/page.php?href='.$user['facebook_page'].'&amp;tabs=timeline&amp;width=400&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </ul>
                  </div>
                  </div>
                </aside>
              </div>
              <div class="col-lg-8">
                <div class="loadMore">
               '.$new_post.'
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>';
        print_r($html_post);exit;
    }

}
