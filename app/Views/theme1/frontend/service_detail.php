<?= $this->extend("theme1/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection(); ?>
<?= $this->section("contentTheme1");
//bb_print_r($sliders);
?>
<div class="services-page overflow-hidden">
    <section>
        <div class="row mx-auto">
            <div class="col-md-12 p-0" data-aos="fade-up" data-aos-duration="1000">
                  <?php
                    $bannerimg = !empty($service['banner']) ? base_url()."/public/uploads/service_banners/" . $service['banner'] : "";
                ?>  
                <div class="heroContent" style = "padding: 70px !important;background-size: cover;background-repeat: no-repeat;background-position: center;background-image: linear-gradient(to bottom, rgb(0 0 0 / 52%), rgb(0 0 0 / 73%)),url(<?= $bannerimg ?>);height: 235px;width: 1520px;">
                    <h1 class="fw-bold text-color"><?= $service['service'] ?></h1>
                    <div>
                        <p class="text-white">
                            <a class="text-decoration-none fw-bold text-light " href="<?= base_url(); ?>/">
                                Home-> services->
                            </a>
                            <?= $slug ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services2 section-padding">
            <div class="row">
                <div class="col-md-8" data-aos="fade-down" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            $img = !empty($service['image']) ? base_url() . "/public/uploads/service_images/" . $service['image'] : base_url() . "/public/assets/img/services-one.jpg";
                            ?>
                            <img src="<?= $img; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="bg-dark p-2">
                                <h4 class="text-color fw-bold text-center pt-1"><?= $service['service']; ?></h4>
                            </div>
                            <!-- Add border to content -->
                            <div class="content p-3 text-alignment border border-dark">
                                <?= $service['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-4 pb-3" data-aos="fade-left" data-aos-duration="1000" style = "max-height: 800px;overflow-y: auto;"> 
                    <div class="card card-custom bg-white border-white border-0 p-3">
                        <div class="input-group justify-content-center my-4 d-none">
                            <form action="<?= base_url() . '/service/search'; ?>" method="post">
                                <div class="form-outline d-flex">
                                    <input type="text" id="form1" name="form1" class="form-control w-100 rounded-0" style="padding: 8px 27px;" required />
                                    <button type="submit" class="btn search-btn">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>

                            </form>
                        </div>
                        <div class="text-center mb-3">
                            <h5 class="section-title text-center text-primary text-uppercase fw-bold">All Services</h5>
                        </div>
                        <div class="card-body text-alignment border border-1 p-0 fw-bold">
                            <?php
                            foreach ($all_services as $all) {
                                $link = $all['menu_id']."/".$all['id'];
                                $url = base_url().'/'.'services/'.$all['menu_link'];
                                ?>
                                <div class="p-3 hover-bg">
                                    <a href="<?= $url; ?>" class="text-decoration-none text-dark anchor-hover">
                                        <p class="m-0">
                                            <?= $all['service']; ?>
                                        </p>
                                    </a>
                                </div>
                                <hr class="w-100 m-0">
                                <?php
                            }
                            foreach ($custom_services as $cust_ser) {
                                $link = $cust_ser['menu_id']."/".$cust_ser['id'];
                                $url = base_url().'/'.'custom/'.$cust_ser['sub_menu_link'];
                                ?>
                                <div class="p-3 hover-bg">
                                    <a href="<?= $url; ?>" class="text-decoration-none text-dark anchor-hover">
                                        <p class="m-0">
                                            <?= $cust_ser['sub_menu']; ?>
                                        </p>
                                    </a>
                                </div>
                                <hr class="w-100 m-0">
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ----- Our Services------- -->

        
   
     <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2> <span class="text-color text-uppercase fw-bold">Our Services</span></h2>
            </div>
                <?php
                if (!empty($all_services)) {
                   
                    echo '<div class="container">';
                    echo '<div class="row ms-auto">';
                    for ($i = 0; $i < count($all_services); $i++) {
                        if (!empty($all_services[$i]['image'])) {
                            $img = base_url() . "/public/uploads/service_images/" . $all_services[$i]['image'];
                        } else {
                            $img = base_url() . "/public/assets/img/services-img.jpg";
                        }
                        ?>
            
                        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                            <div class="image-flip mt-4">
                                <div class="mainflip flip-0 ">
                                    <div class="frontside shadow">
                                        <img class="img-transparent rounded" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                                    </div>
                                    
                                      <div class="transparent-text bg-primary w-100 p-1 rounded-bottom">
                                        <h6 class="custom-text-color fw-bold text-center" style=" display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;">
                                            <?= $all_services[$i]['service']; ?>                                      </h6>
                                    </div>
                        
                        
                                    <!--<div class="transparent-text  w-100 p-2 rounded-bottom" style="background: rgba(0, 0, 0, 0.7);">-->
                                    <!--    <h4 class="text-color fw-bold text-center">-->
                                    <!--        <?= $all_services[$i]['service']; ?>-->
                                    <!--    </h4>-->
                                    <!--</div>-->
                                    <div class="backside position-absolute w-100">
                                        <div class="card bg-dark">
                                            <div class="card-body text-center mt-4">
                                                <div class="div-width">
                                                    <?php
                                                    $link = $all_services[$i]['menu_id']."/".$all_services[$i]['id'];
                                                    $url = base_url().'/'.'services/'.$all_services[$i]['menu_link'];
                                                    ?>  
                                                    <a href="<?= $url;?>">
                                                        <button class="btn btn-color fs-5 text-white py-3 px-4 rounded-pill align-center">
                                                            Know More
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                    <?php 
                    }
                    if (!empty($custom_services)) {
                        foreach($custom_services as $cust){
                            if (!empty($cust['image'])) {
                                $img = base_url() . "/public/uploads/custom_pages_image/" . $cust['image'];
                            } else {
                                $img = base_url() . "/public/assets/img/services-img.jpg";
                            }
                        ?>
                
                            <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                                <div class="image-flip mt-4">
                                    <div class="mainflip flip-0 ">
                                        <div class="frontside shadow">
                                            <img class="img-transparent rounded" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                                            <div class="transparent-text position-absolute w-100 p-4 rounded-bottom">
                                                <h4 class="text-color fw-bold text-center">
                                                    <?= $cust['sub_menu']; ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="backside position-absolute w-100">
                                            <div class="card bg-dark">
                                                <div class="card-body text-center mt-4">
                                                    <div class="div-width">
                                                        <?php
                                                        $link = $cust['menu_id'].'/'.$cust['id'];
                                                        $url = base_url().'/'."custom/".$cust['sub_menu_link'];
                                                        ?>  
                                                        <a href="<?= $url;?>">
                                                            <button class="btn btn-color fs-5 text-white py-3 px-4 rounded-pill align-center">
                                                                Know More
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                    <?php }
                    }
            
                    echo "</div>";
                    echo "</div>";
                }
            
                // foreach ($sort_order as $myurl) {
                //     $file_url = 'layout/' . $myurl['url_val'] . ".php";
                //     include($file_url);
                // }
                ?>
           </div>
        </section>

    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                <h2> <span class="text-color text-uppercase fw-bold">Contact us the Get Started</span></h2>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <!--<iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px; height:320px;"></iframe>-->
                         <?php if($user_details['company_map']!="" ){
                           echo $user_details['company_map'];}
                         ?>
                    </div>
                </div>
                <div class="col-md-6 " data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="top-border responsive-form">
                        <?= $this->include('theme1/frontend/layout/message'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?= $this->endSection() ?>
<?= $this->section("customScripts") ?>
<script>
    $(function() {
        AOS.init();
    });
</script>
<?= $this->endSection() ?>