<?= $this->extend("theme2/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    .card-body {
        padding: 0px !important;
    }

    a {
        text-decoration: none !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme2") ?>
<div class="position-relative pb-50 pt-100 ">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">
            <?php
                $title = str_replace("_", " ",$title);
                echo ucwords($title); 
            ?>
        </h1>
    </div>
</div>

<?php
if(!empty($custom_data)){
    $img = !empty($custom_data['image'])?base_url()."/public/uploads/custom_pages_image/".$custom_data['image']:"";
    ?>
    <section>
        <div class="services2 section-padding">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(!empty($custom_data['image'])){
                            ?>
                                <img src="<?= $img;?>" alt="" class="w-100" style="max-height: 500px; object-fit:cover;">
                            <?php    
                    }
                    ?>
                   
                    <div class="bg-dark p-2 my-2">
                        <h4 class="text-color fw-bold text-center pt-1"><?= $custom_data['heading']; ?></h4>
                    </div>
                    <div class="content p-3 text-alignment">
                        <?= $custom_data['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
<?php
foreach ($sort_order as $myurl) {
    if ($myurl['url_val'] != "contact") {
        include('layout/' . $myurl['url_val'] . '.php');
    }
}
?>
<?= $this->endSection() ?>
<?= $this->section("customScripts") ?>
<script>
    $(function() {
        AOS.init();
    });
</script>
<?= $this->endSection() ?>