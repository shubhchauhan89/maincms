<?= $this->extend("theme1/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    .card-body {
        padding: 0px !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme1") ?>
<div class="update-page">    
    <section>
        <div class="row mx-auto">
            <div class="col-md-12 p-0" data-aos="fade-up" data-aos-duration="1000">
                <div class="heroContent">
                    <h1 class="fw-bold text-color"><?= $update ?></h1>
                    <div>
                        <p class="text-white">
                            <a class="text-decoration-none fw-bold text-light " href="<?= base_url(); ?>/">
                                Home >
                            </a>
                            <?= $update ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

foreach ($sort_order as $myurl) {
    $file_url = 'layout/' . $myurl['url_val'] . ".php";
    include($file_url);
}
?>

<?= $this->endSection() ?>


<?= $this->section("customScripts") ?>
<script type="text/javascript" src="<?= base_url().'/public/theme1/assets/js/pages/common.js' ?>"></script>

<script>
    $(function() {
        AOS.init();
    });
</script>
<?= $this->endSection() ?>