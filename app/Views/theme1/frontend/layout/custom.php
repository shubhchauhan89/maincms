<style>
    @keyframes slideInLeft {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<?php
if (!empty($custom_section)) {
    // echo "<pre>";
    // print_r($custom_section);
    // die;
    foreach ($custom_section as $custom) {
        if ($custom['id'] == $myurl['section_id']) {
            $img = !empty($custom['upload_image']) ? base_url().'/public/uploads/custom_images/' . $custom['upload_image'] : base_url().'/public/assets/img/bg-empty.jpg';
            $headingAnimation = $custom['position'] == 'left' || $custom['position'] == 'stretch-left' ? 'slideInRight' : 'slideInLeft';
            $imageAnimation = $custom['position'] == 'left' || $custom['position'] == 'stretch-left' ? 'slideInLeft' : 'slideInRight';
?>
            <section style="margin-block:<?= $custom['position'] == "left" || $custom['position'] == "right" ? '30px' : '0' ?>">
                <div class="container-fluid px-0 mx-0">
                    <div class="row mx-0 <?= $custom['position'] == "left" || $custom['position'] == "stretch-left" ? 'flex-row-reverse' : '';  ?> aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <div class="d-flex justify-content-center flex-column 
                    <?= $custom['image_option'] == "no" 
                        ? 'col-md-12 bg-white text-center' 
                        : ($custom['position'] == "left" || $custom['position'] == "right" 
                            ? 'col-md-8 bg-white' 
                            : 'col-md-6 bg-primary') 
                    ?>">
                    <div class="inside-div p-4" style="animation: <?= $headingAnimation ?> 1s ease;">
                        <h2 class="pb-3 fw-bolder custom-text-color"><?= $custom['heading']; ?></h2>
                        <div class="text-div text-alignment <?= $custom['image_option'] == "no" 
                        ? 'text-center' 
                        : ''
                    ?>">
                            <?= $custom['description']; ?>
                        </div>
                    </div>
                </div>

                        <?php if ($custom['image_option'] == "yes"): ?>
                        <div class="<?= $custom['position'] == "left" || $custom['position'] == "right" ? 'col-md-4' : 'col-md-6' ?> px-0">
                            <div class="side-img <?= $custom['position'] == "stretch-left" || $custom['position'] == "stretch-right" ? 'h-100' : ''; ?>" style="animation: <?= $imageAnimation ?> 1s ease;">
                                <img src="<?= $img; ?>" class="<?= $custom['position'] == "stretch-left" || $custom['position'] == "stretch-right" ? 'h-100' : ''; ?>" alt="" width="100%">
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </section>
<?php
        }
    }
}
?>
