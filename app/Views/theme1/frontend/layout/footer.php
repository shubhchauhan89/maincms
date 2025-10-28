<style>
    .fb-box{
        height: 350px;
        width:360px;
    }
    .mybox {
        margin:40px !important;
    }
    @media only screen and (max-width: 767px) {
        #facebook-iframe {
            width: 100% !important;
            height: 500px !important; /* Adjust height as needed for portrait mode */
        }
        .fb-box{
        height: 600px;
        width:360px;
        }
         .mybox {
        margin:0px !important;
        }
    }
</style>
<footer id="footer">
    <div class="footer-top footer-background text-light py-5">
          <div class="container mybox">
            <div class="row g-5 justify-content-center">
                <div class="col-md-6">
                    <div class="footer-info shadow text-center">
                        <h3 class="text-center custom-text-color fw-bold">Get In Touch</h3>
                        <div class= "row">
                            
                            <div class="col-md-12">
                                <p class="pb-3 m-0">
                                    <em>
                                        <?= $user_details['business_address']; ?>
                                    </em>
                                </p>
                                <strong>Phone:</strong> <?= $user_details['company_phone_no']; ?>, <br> <strong>Email:</strong> <?= $user_details['email_id']; ?><br>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p class="pb-3 m-0">
                                    <em>
                                        <?= $user_details['alternate_address']; ?>
                                    </em>
                                </p>
                                
                                 <?php 
                                    if($user_details['alternate_mobile']){ ?>
                                        <strong>Alternate Number: </strong> <?=     $user_details['alternate_mobile']; ?><br>
                                 <?php    } 
                                 if($user_details['alternate_email_id']){ ?>
                                    <strong>Alternate Email: </strong> <?= $user_details['alternate_email_id']; ?><br>
                                <?php    } ?>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <!-- <div class="col-md-3 newsletter">
                    <h3 class="fw-bold custom-text-color">Our Newsletter</h3>
                    <div id="business_description">
                        
                    <p><?php // $user_details['business_description'];?></p>
                    </div>
                    <form action="" method="post">
                        <input type="email" name="email" class="py-1 border-0 searchbar_color">
                        <input type="submit" class="btn-color custom-text-color border-0 py-1 rounded" value="Subscribe">
                    </form>
                </div> -->

                <div class="col-md-3 quick-links text-center">
                    <h3 class="fw-bold custom-text-color">Quick Links</h3>
                    <div>
                        <ul class="list-unstyled" style="padding-left: 0pt;">
                            <?php
                            $users_info = new App\Libraries\User_details();
                            $final_menu = $users_info->menuLists_new();

                            foreach ($final_menu as $menu) {
                                echo '<li style="text-decoration: underline; padding-bottom:20px; font-size:18px;">';
                                
                                // Check if there are submenus
                                if (!empty($menu['sub_menu']) && $menu['menu_name'] !== "Updates") {
                                    echo '<div class="dropdown">';
                                    echo '<a class="custom-text-color dropdown-toggle" href="#" role="button" id="dropdownMenuLink' . $menu['id'] . '" data-bs-toggle="dropdown" aria-expanded="false">';
                                    echo $menu['menu_name'];
                                    echo '</a>';
                                    echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink' . $menu['id'] . '">';
                                    
                                    // Iterate over submenus
                                    foreach ($menu['sub_menu'] as $sub_menu) {
                                        echo '<li><a class="dropdown-item" href="' . $sub_menu['menu_link'] . '">' . $sub_menu['menu_name'] . '</a></li>';
                                    }
                                    
                                    echo '</ul>';
                                    echo '</div>';
                                } else {
                                    // If no submenus, display as a regular link
                                    echo '<a class="custom-text-color" href="' . $menu['menu_link'] . '">' . $menu['menu_name'] . '</a>';
                                }
                                
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>





                            <div class="col-md-3">
                                <div class="fb-box mx-auto" style="background-color: #f8f9fa; padding: 10px; border-radius: 5px; height:auto; margin-bottom:5px;">
                                    <div class="social-links text-center footer-center">
                                        <a target="_blank" href="<?= !empty($user_details['twitter_page']) ? $user_details['twitter_page'] : 'https://twitter.com'; ?>" class="twitter text-light me-1 rounded text-center fs-6" style="color: #1DA1F2 !important; font-size: 24px;">
                                            <i class="fa-brands fa-twitter-square"></i>
                                        </a>
                                        <a target="_blank" href="<?= !empty($user_details['facebook_page']) ? $user_details['facebook_page'] : 'https://www.facebook.com'; ?>" class="facebook text-light me-1 rounded text-center fs-6" style="color: #1877F2!important; font-size: 24px;">
                                            <i class="fa-brands fa-facebook-square"></i>
                                        </a>
                                        <a target="_blank" href="<?= !empty($user_details['instagram_page']) ? $user_details['instagram_page'] : 'https://www.instagram.com'; ?>" class="instagram text-light me-1 rounded text-center fs-6" style="color: #C13584 !important; font-size: 24px;">
                                            <i class="fa-brands fa-instagram-square"></i>
                                        </a>
                                        <a target="_blank" href="<?= !empty($user_details['youtube_page']) ? $user_details['youtube_page'] : 'https://www.youtube.com'; ?>" class="google-plus text-light me-1 rounded text-center fs-6" style="color: #FF0000 !important; font-size: 24px;">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                        <a target="_blank" href="<?= !empty($user_details['linkedin_page']) ? $user_details['linkedin_page'] : 'https://www.linkedin.com'; ?>" class="linkedin text-light me-1 rounded text-center fs-6" style="color: #0077B5 !important; font-size: 24px;">
                                            <i class="fa-brands fa-linkedin ml-2"></i>
                                        </a>
                                    </div>
                                         <iframe id="facebook-iframe" style="margin: auto; display: flex; margin-bottom:10px:width: 100%;height:100%;" src="https://www.facebook.com/plugins/page.php?href=<?= !empty($user_details['facebook_page']) ? $user_details['facebook_page'] : 'https://www.facebook.com'; ?>&tabs=timeline&width=345&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="270" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                  </div>
                                  <section class="newsletter-section text-center py-3">
                                <h3 class="fw-bold custom-text-color w-100">Our Newsletter</h3>
                                <hr class="m-auto bg-danger mb-3" style="width: 80px; height: 5px">
                                    <marquee behavior="scroll" direction="left" style="width:400px;">
                                        <!-- Newsletter content here -->
                                        <?= $user_details['business_description'];?>
                                    </marquee>
                                </section>
                                  
                             </div>
            </div>
        </div>
        
    </div>
</footer>



<section class="copyright-background">
    <div class="row">
        <div class="col-md-12 text-center copyright-text">
        © <?= date("Y");?> <?= $colors['copyright_text'];?>
        </div>
    </div>
</section>

<?php
    echo $custom_insert['foot'];
?>


<!-- <a id="button" class="scroll-to-top scroll-to-target  position-fixed text-light fs-6 text-center rounded-circle border-0" data-target="html">
    <span class="fa fa-arrow-up">
    </span>
</a> -->