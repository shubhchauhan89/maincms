<?php
if (count($posts) > 0) {
    foreach ($posts as $p) {
        if ($p['section_id'] == $myurl['section_id']) {
            if (isset($p['section_id'])) {
                unset($p['section_id']);
            }
            if (isset($p['sub_menu_name'])) {
                $datasubmenu = $p['sub_menu_name'];
                unset($p['sub_menu_name']);
            } else {
                $datasubmenu = "";
            }
            ?>
<style>
    .update_list{
        width: 100%;
        height: 100px;
        object-fit: cover;
    }
    .card-footer{
        padding: 0px;
        background-color: rgb(0 0 0 / 0%);
        border-top: 1px solid rgba(0, 0, 0, 0.125);
    }
</style>
            <section class="">
                <div class="services2 section-padding container mb-5 pt-3">
                    <div class="row">
                          <h2 class="text-center text-color fw-bold mb-4"><?=$datasubmenu?></h2>
                        <!--<h2 class="text-center text-color fw-bold mb-4">Our Updates</h2>-->
                            <div class="col-md-8">
                                <div class="row m-auto">
                                    <div class="col-md-12 pb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                        <div class="update">
                                            <?php
foreach ($p as $post) {
                $img = empty($post['image']) ? base_url() . '/public/assets/img/services3-img.png' : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                ?>
                                                <div class="col-md-12">
                                                    <div class="card shadow-lg border-0 me-2">
                                                        <div class="card-custom-img">
                                                            <img src="<?=$img?>" class="card-img-top" alt="Avatar" style="height: 20vw; object-fit: cover;" />
                                                        </div>
                                                        <div class="card-body my-3">
                                                            <h6 class="card-title text-color fw-bold"><?=date('d-M-Y', strtotime($post['created_at']));?></h6>
                                                            <p class="text-uppercase fw-bold p-0 mb-0 text-truncate"><?=$post['title'];?></p>
                                                            <div class="card-footer" >
                                                                <?php
$link = getMenuId('Updates') . '/' . $post['id'];
                $url = base_url() . '/' . 'updates/' . $post['slug'] . '/' . base64_encode($link);
                ?>
                                                                <a href="<?=$url?>">
                                                                    <button class="btn btn-color rounded-pill pl-0">
                                                                        Read More
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php }
            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="" style="height: 400px; overflow-x: hidden;">
                                    <?php if ($all_posts): foreach ($all_posts as $post):
                    $link = getMenuId('Updates') . '/' . $post['id'];
                    $url = base_url() . '/' . 'updates/' . $post['slug'] . '/' . base64_encode($link);?>
		                                      <a href="<?=$url;?>">
		                                            <div class="row mb-3">
		                                                <div class="col-md-4">
		                                                    <img src="<?php echo base_url('/public/uploads/post_updates_images/' . $post['image']); ?>" class="img-fluid update_list">
		                                                </div>
		                                                <div class="col-md-8">
		                                                    <p class="text-color"><?php echo date('d-M-Y', strtotime($post['created_at'])); ?></p>
		                                                    <h6><?php echo $post['title']; ?></h6>
		                                                </div>
		                                            </div>
		                                        </a>
		                                    <?php endforeach;endif;?>
                                </div>
                                 <div class="p-3 text-end">
                                    <a href ="<?=base_url() . "/update.html"?>"   class="btn search-btn rounded-pill ms-2 responsive-btn" target="_blank">
                                        See More
                                    </a>
                                </div>
                            </div>

                    </div>
            </section>
<?php

        }
    }
}
?>