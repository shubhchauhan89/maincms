<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<style>
    .card.border-0.position-relative {
        width: 100%;
        height: 250px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('contentTheme2'); ?>
<div class="position-relative pb-50 pt-100">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
           
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Our Updates</h1>
    </div>
</div>
<div class="pb-130">
    <div class="container">
        <div class="row mb-20 mt-10">
            <div class="col-md-12">
                <?php
                $img = empty($post['image']) ? base_url() . '/public/assets/img/update.jpg' : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                ?>
                <img src="<?= $img; ?>" width="100%" height="" alt="">

                <div class="bg-dark p-2 my-4 ">
                    <h4 class="text-color mt-40 pt-1 fw-bold text-center"><?= $post['title']; ?></h4>
                </div>
                <div class="text-alignment">
                    <span class="text-gray">By : Admin Date : <?= date("d-M-Y", strtotime($post['created_at'])); ?></span>
                    <div class="">
                        <?= $post['description']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
foreach ($sort_order as $myurl) {
    if ($myurl['url_val'] != "contact") {
        include('layout/' . $myurl['url_val'] . '.php');
    }
}
?>
<?= $this->endSection() ?>
<?= $this->section('customScripts') ?>
<?= $this->endSection() ?>