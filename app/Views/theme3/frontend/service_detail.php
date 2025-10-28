<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection(); ?>
<?= $this->section("contentTheme3");
?>
<div class="services-page overflow-hidden">
    <section>
        <div class="content-wrap">
            <?php
                    $bannerimg = !empty($service['banner']) ? base_url()."/public/uploads/service_banners/" . $service['banner'] : "";
                ?> 
            <div class="position-relative"  style = "padding: 70px !important;background-size: cover;background-repeat: no-repeat;background-position: center;background-image: linear-gradient(to bottom, rgb(0 0 0 / 52%), rgb(0 0 0 / 73%)),url(<?= $bannerimg ?>);height: 235px;width: 1520px;">
                <nav class="crumb" aria-label="breadcrumb">
                    <ol class="breadcrumb  justify-content-center">
                        <div class="skew chng">
                            <p class="text-dark">
                                <a class="text-decoration-none text-primary fw-bold" href="<?= base_url(); ?>/">
                                    Home-> services->
                                </a>
                                <?= $slug ?>
                            </p>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="services2 section-padding">
                <div class="row mt-3">
                    <div class="col-md-8" data-aos="fade-down" data-aos-duration="1000">
                        <?php
                        $img = !empty($service['image']) ? base_url()."/public/uploads/service_images/" . $service['image'] : base_url()."/public/assets/img/service1.jpg";
                        ?>
                        <img src="<?= $img; ?>" width="100%" alt="">
                        <div class="bg-dark p-2 my-2">
                            <h4 class="text-white fw-bold text-center pt-1"><?= $service['service']; ?></h4>
                        </div>
                        <div class="content p-3 text-alignment">
                            <?= $service['content']; ?>
                        </div>
                    </div>


                    <div class="col-md-4 pb-3" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card card-custom bg-white border-white border-0 p-3">
                            <div class="input-group justify-content-center my-4 ">
                                <!-- <form action="<?= base_url() . '/service/search'; ?>" method="post">
                                    <div class="form-outline d-flex">
                                        <input type="text" id="form1" name="form1" class="searchbar_color form-control w-100 rounded-0" style="padding: 8px 27px;" required />
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>

                                </form> -->
                            </div>
                            <div class="text-center mb-3">
                                <h5 class="section-title text-center text-primary text-uppercase fw-bold">All Services</h5>
                            </div>
                            <div class="card-body text-alignment border border-1 p-0 fw-bold">
                                <?php
                                foreach ($all_services as $all) {
                                    $link = $all['menu_id']."/".$all['id'];
                                    $url = base_url().'/'.'services/'.$all['menu_link'] ;
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
                                    $url = base_url().'/'.'custom/'.$cust_ser['sub_menu_link'] ;
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
        </div>
    </section>

    <!-- <section class="mb-4">
        <h1 class="pb-3 fw-bold text-center">All Services</h1>
        <div class="container">
            <?php
            if (!empty($all_services)) {
                echo '<div class="row ms-auto">';

                for ($i = 0; $i < count($all_services); $i++) {
                    if (!empty($all_services[$i]['image'])) {
                        $img = base_url()."/public/uploads/service_images/" . $all_services[$i]['image'];
                    } else {
                        $img = base_url()."/public/assets/img/services-img.jpg";
                    }
            ?>

                    <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-header">
                                <img class="img-transparent rounded" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                            </div>
                            <div class="card-body">
                                <h4 class="text-color fw-bold text-center text-truncate">
                                    <?= $all_services[$i]['service']; ?>
                                </h4>
                                <a href="<?= base_url() . '/' . 'services/' . $all_services[$i]['menu_link']; ?>">
                                    <button class="btn btn-primary w-100 m-0 view_more-link">
                                        Know More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

            <?php }
                echo "</div>";
            }
            ?>
        </div>
    </section> -->
    <?php
    foreach ($sort_order as $myurl) {
        if ($myurl['url_val'] != "contact") {
            include('layout/' . $myurl['url_val'] . '.php');
        }
    }
    ?>

    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="pb-3 fw-bold">Contact Us </h1>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                         <?php if($user_details['company_map']!="" ){
                           echo $user_details['company_map'];}
                         ?>
                        <!--<iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px; height:350px;"></iframe>-->
                    </div>
                </div>
                <div class="col-md-6 " data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="top-border responsive-form">
                        <?= $this->include('theme3/frontend/layout/message'); ?>
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