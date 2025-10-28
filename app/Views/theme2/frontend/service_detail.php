<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection() ?>

<?= $this->section('contentTheme2') ?>
<div class="position-relative pb-50 pt-100 ">
      <div class="background">
         <?php
            $bannerimg = !empty($service['banner']) ? base_url()."/public/uploads/service_banners/" . $service['banner'] : "";
        ?> 
        <div class="background-image jarallax" data-jarallax data-speed="0.8" style = "padding: 70px !important;background-size: cover;background-repeat: no-repeat;background-position: center;background-image: linear-gradient(to bottom, rgb(0 0 0 / 52%), rgb(0 0 0 / 73%)),url(<?= $bannerimg ?>);height: 235px;width: 1520px;">
        </div>
        
        
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Our Services</h1>
    </div>
</div>
<div class="container-fluid pb-60 bg-gray-light">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <?php
                $img = !empty($service['image']) ? base_url() . "/public/uploads/service_images/" . $service['image'] : base_url() . "/public/assets/img/services-one.jpg";
            ?>
            <img src="<?= $img; ?>" class="mt-10" width="100%" alt="">
            <div class="bg-dark p-2 my-2">
                <h4 class="text-color my-20 fw-bold text-center pt-1"><?= $service['service']; ?></h4>
            </div>
            <div class="content p-3 text-alignment">
                <?= $service['content']; ?>
            </div>
        </div>
    </div>
</div>
<?php
foreach($sort_order as $myurl){
    if($myurl['url_val'] != "contact"){
      include('layout/'.$myurl['url_val'].'.php');
    }
}
?>
    

    <?= $this->endSection() ?>
    <?= $this->section('customScripts') ?>
    <!-- <script>
        //write all your custom script here
    </script> -->
    <?= $this->endSection() ?>