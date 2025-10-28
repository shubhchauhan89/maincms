<?= $this->extend("theme1/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    .card-big-shadow:before {
        background-image: url("<?= base_url();?>/public/assets/img/shadow.png");
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        bottom: -12%;
        content: "";
        display: block;
        left: -12%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section("contentTheme1") ?>
<div class="product-page overflow-hidden">


    <section>
        <div class="row mx-auto">
            <div class="col-md-12 p-0" data-aos="fade-down" data-aos-duration="1000">
                <div class="heroContent " style="left: 36%;">
                    <h1 class="fw-bold text-color"><?= $product['product_name']; ?></h1>
                    <div>
                        <p class="text-white">
                            <a class="text-decoration-none fw-bold text-light " href="<?= base_url(); ?>/">
                                Home-> products->
                            </a>
                            <?= $slugs ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
    <div class="row content ">
        <div class="col-md-4 pr-0 mt-5" data-aos="fade-right" data-aos-duration="1000" style="height: auto;">
            <?php
            $img = !empty($product['main_image']) ? base_url()."/public/uploads/product_images/" . $product['main_image'] : base_url()."/public/assets/img/product1.jpg";
            ?>
            <img src="<?= $img; ?>" width="100%" height="auto" alt="">
        </div>
        <div class="col-md-8" data-aos="fade-left" data-aos-duration="1000">
            <div class="p-4">
                <div class="bg-dark p-2 my-4 ">
                    <h4 class="pt-1 fw-bold text-center text-color"><?= $product['product_name']; ?></h4>
                </div>
                <div class="text-alignment">
                    <?= $product['short_description']; ?>
                </div>
                <div class="text-alignment">
                    <?= $product['long_description']; ?>
                </div>
                <div class="text-alignment">
                    <?= $product['specification']; ?>
                </div>
                <div class="text-center">
                    <button class="btn search-btn rounded-pill ms-2 responsive-btn" data-bs-target="#inquiryModal" data-bs-toggle="modal" type="submit">
                        Enquiry Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>



<!-- ----------Our Products------ -->
        <section>
            <div class="products section-padding" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h2><span class="text-color text-uppercase fw-bold">Our Products</span></h2>
                </div>

                <div class="row mx-auto">
                    <?php
                    if(count($all_products) > 0){
                        foreach ($all_products as $all) {
                                                        $img = !empty($all['main_image']) ? base_url()."/public/uploads/product_images/" . $all['main_image'] : base_url()."/public/assets/img/product1.jpg";
                        ?>
                        <div class="col-md-3 col-sm-6 content-card" data-aos="fade-right" data-aos-duration="1000">
                            <div class="card-big-shadow position-relative mb-5">
                                <div class="card product-card card-just-text text-dark position-relative mb-3" data-background="color" data-color="blue" data-radius="none">
                                    <div class="content pb-4 text-center">
                                    <?php
                                    $link = $all['menu_id']."/".$all['id'];
                                    $url = base_url().'/'.'products/'.$all['menu_link'];
                                ?>
                                                    <a href="<?= $url; ?>"> <img src="<?= $img; ?>" width="100%" height="220px" alt=""></a>
                                        <h6 class="category text-truncate fw-bold pt-3 text-hover"><?= $all['product_name']; ?></h6>
                                        <button class="btn search-btn rounded-pill ms-2 responsive-btn" data-bs-target="#inquiryModal" data-bs-toggle="modal" type="submit">
                                                Enquiry Now
                                            </button>
                                                </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                        <?php 
                        } 
                    } 
                    ?>
                </div>
            </div>
        </section>
    <?php
   
     foreach ($sort_order as $myurl) {
        $file_url = 'layout/' . $myurl['url_val'] . ".php";
        include($file_url);
    }

    ?>
    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                <h2><span class="text-color text-uppercase fw-bold">Contact us the Get Started</span></h2>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <?php echo $user_details['company_map']; ?>
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