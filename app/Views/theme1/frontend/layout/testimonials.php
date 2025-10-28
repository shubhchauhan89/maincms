<style>
    .my-class{
        width: 1100px;
        }

    @media screen and (max-width: 768px) {
        .my-class{
        width: 280px;
        }

        #testimonial-section .slick-next{
            right: -50px;
        }

    }
</style>

<?php   

if (!empty($testimonials)) {
    foreach ($testimonials as $testi) {
        if ($testi['section_id'] == $myurl['section_id']) {
            if (isset($testi['section_id'])) {
                unset($testi['section_id']);
            }
               if (isset($testi['sub_menu_name'])) {
                $datasubmenu = $testi['sub_menu_name'];
                unset($testi['sub_menu_name']);
            }
            else
            {
                $datasubmenu = "";
            }
?>
            <!-- custom-text-color -->
            <section id="testimonial-section" class="bg-primary ">
                <div class="container pb-5 bg-primary" id="main-container">
                    <div class="text-center m-auto pt-4">
                        <h1 class="pb-3 fw-bold custom-text-color"><?= $datasubmenu ?></h1>
                        <hr class="m-auto bg-success" style="width: 80px; height: 5px">
                        <p class="pt-2">
                        </p>
                    </div>

                    <div class="row gy-6 mt-5 my-class m-auto">
                        <?php

                        foreach ($testi as $testimonial) {
                            $img = !empty($testimonial['image']) ?
                                base_url() . '/public/uploads/testimonial_images/' . $testimonial['image'] :
                                base_url() . '/public/assets/img/empty.png';
                        ?>
                            <div class="col-md-3 me-4 card p-2" style="width: 16rem; border-radius: 10px">
                                <div class="card-body">
                                    <span><i class="fa-solid fa-quote-left fs-1 pb-3 text-success"></i></span>
                                    <p class="card-text pb-3">
                                        <?= $testimonial['description']; ?>
                                    </p>
                                    <a class="moreless-button " href="javascript:void(0)" onclick="testimonialModal('<?php echo base64_encode($testimonial['description']); ?>')" style="font-size: 12px">Read more</a>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="rounded-circle" src="<?= $img; ?>" width="50px" />
                                        </div>
                                        <div class="col-md-9 custom-text-color">
                                            <div class="ps-2">
                                                <h6 class="fw-bold mb-0 custom-text-color text-truncate"><?= $testimonial['name']; ?></h6>
                                                <span class="custom-text-color" style="font-size: 12px"><?= date('d-M-Y h:i A', strtotime($testimonial['created_at'])); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
<?php
        }
    }
}
?>