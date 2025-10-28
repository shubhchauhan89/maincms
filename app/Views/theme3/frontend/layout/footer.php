<footer id="footer">
    <div class="footer-top footer-text footer-background py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-6">
                    <div class="footer-info shadow text-center" style="border-radius: 16px;border: 4px solid var(--bs-orange-100);padding:15px;">
                        <h3 class="custom-text-color text-center fw-bold">Get In Touch</h3>
                         <div class= "row">
                            
                            <div class="col-md-6">
                                <p class="pb-3 m-0 footer-text">
                                    <em>
                                        <?= $user_details['business_address']; ?>
                                    </em>
                                </p>
                                <strong>Phone:</strong> <?= $user_details['company_phone_no']; ?>, <br> <strong>Email:</strong> <?= $user_details['email_id']; ?><br>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="pb-3 m-0 footer-text">
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
                
                <div class="col-md-3 newsletter">
                    <h3 class="fw-bold custom-text-color">Our Newsletter</h3>
                    <div id="business_description">
                        
                    <p class="footer-text" style="line-height: unset"><?= $user_details['business_description'];?></p>
                    </div>
                    <form action="" method="post">
                        <input type="email" name="email" class="py-1 border-0 searchbar_color" style="width: 67%">
                        <input type="submit" class="btn-color footer-text border-0 py-1 px-3 rounded" value="Subscribe">
                    </form>
                </div>

                <div class="col-md-3">
                                    <div style="height: 280px">
                    <div class="social-links text-center footer-center">
                        <a target="_blank" href="<?= !empty($user_details['twitter_page'])?$user_details['twitter_page']:"https://twitter.com";?>" class="twitter footer-text me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-twitter-square"></i>
                        </a>
                        <a target="_blank" href="<?= !empty($user_details['facebook_page'])?$user_details['facebook_page']:"https://www.facebook.com";?>" class="facebook footer-text me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="<?= !empty($user_details['instagram_page'])?$user_details['instagram_page']:"https://www.instagram.com";?>" class="instagram footer-text me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-instagram-square"></i>
                        </a>
                        <a target="_blank" href="https://www.skype.com" class="google-plus footer-text me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                        <a target="_blank" href="<?= !empty($user_details['linkedin_page'])?$user_details['linkedin_page']:"https://www.linkedin.com";?>" class="linkedin footer-text me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                    <iframe  style="margin: auto; display: flex;width: 94% !important ;height: 73% !important ;" src="https://www.facebook.com/plugins/page.php?href=<?= !empty($user_details['facebook_page']) ? $user_details['facebook_page'] : 'https://www.facebook.com'; ?>&tabs=timeline&width=270&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="270" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
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