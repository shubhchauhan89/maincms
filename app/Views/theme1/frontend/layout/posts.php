<style>
::-webkit-scrollbar {
  width: 5px;
  height: 4px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius: 1rem;
}

::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.update_list{
    width: 100%;
    height: 100px;
    object-fit: cover;
}
</style>
<?php
if (!empty($posts)) {
    // echo "<pre>";
    // print_r($posts);
    // exit;
    foreach ($posts as $p) {
        if ($p['section_id'] == $myurl['section_id']) {
            if(isset($p['section_id'])){
                unset($p['section_id']);
            }
            if (isset($p['sub_menu_name'])) {
                $datasubmenu = $p['sub_menu_name'];
                unset($p['sub_menu_name']);
            }
            else
            {
                $datasubmenu = "";
            }
        ?>

    <section class="mb-4">
        <div class="services2 section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                 <h2 class="text-color text-uppercase fw-bold"><?= $datasubmenu ?></h2>
                <!--<h2><span class="text-color text-uppercase fw-bold">Our Updates</span></h2>-->
            </div>
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="row m-auto">
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="row update">
                                    <?php
                                    foreach ($p as $post) {
                                        $img = empty($post['image']) ? base_url() . '/public/assets/img/services3-img.png' : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                                ?>
                                        <div class="col-md-4">
                                            <div class="card shadow-lg border-0 me-2">
                                                    <img src="<?= $img ?>" class="card-img-top" alt="Avatar" style="height:350px; object-fit: cover;" />
                                                <div class="card-body my-3">
                                                    <h6 class="card-title text-color fw-bold"><?= date('d-M-Y', strtotime($post['created_at'])); ?></h6>
                                                    <p class="card-text text-uppercase fw-bold h6 py-2"><?= $post['title']; ?></p>
                                                </div>
                                                <div class="card-footer">
                                                    <?php
                                                        $link = getMenuId('Updates').'/'.$post['id'];
                                                        $url = base_url().'/'.'updates/'.$post['slug'];
                                                    ?>
                                                    <a href="<?= $url;?>">
                                                        <button class="btn btn-color rounded-pill ">
                                                            Read More
                                                        </button>
                                                    </a>
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
                    <div class="row" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
                        <?php if($all_posts): foreach($all_posts as $post): 
                              $link = getMenuId('Updates').'/'.$post['id'];
                              $url = base_url().'/'.'updates/'.$post['slug']; ?>
                            <a href="<?= $url;?>" class="hstack gap-3">
                                <div class="col-md-4">
                                    <img src="<?php echo base_url('/public/uploads/post_updates_images/'.$post['image']); ?>" class="img-fluid update_list">
                                </div>
                                <div class="col-md-8">
                                    <p class="text-color"><?php echo date('d-M-Y', strtotime($post['created_at'])); ?></p>
                                    <h6><?php echo $post['title']; ?></h6>
                                </div>
                            </a>
                        <?php endforeach; endif; ?>
                    </div>
                     <div class="p-3 text-end">
                        <a href ="<?= base_url()."/update.html"?>"   class="btn search-btn rounded-pill ms-2 responsive-btn" target="_blank">
                            See More
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<?php }
}

}
?>