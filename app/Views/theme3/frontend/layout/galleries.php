<?php
$heading = "";
if(!empty($gallery_images)){
    foreach($gallery_images as $gallery_img){
        $heading = $gallery_img['sub_menu_name'];
        unset($gallery_img['sub_menu_name']);
        if ($gallery_img['section_id'] == $myurl['section_id']) {
            if(isset($gallery_img['section_id'])){
                unset($gallery_img['section_id']);
            }
        ?>
<section class="bg-gray-light py-2 py-4">
    <div class="container mb-5 pt-3">
            <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="pb-3 fw-bold text-color"><?= $heading; ?></h2>
            </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($gallery_img as $gi) :
                $img = !empty($gi['image']) ? base_url().'/public/uploads/gallery_images/' . $gi['image'] : 'https://image.freepik.com/free-photo/colorful-springtime_385-19321241.jpg';
            ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="inner-column m-2 card">
                        <div class="position-relative card-body px-0 pt-0 w-100">
                            <a class="popup-images" href="<?= $img ?>">
                                <img class="card-img-top img-fluid img-gallery" title="<?= $gi['title']; ?>" src="<?= $img; ?>" />
                                <br />
                                <h4 class="text-center text-truncate"><?= $gi['title']; ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<?php } 
}
}
?>