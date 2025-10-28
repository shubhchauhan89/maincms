 <style>
.slick-slide{
    height: 350px;
}
.slick-slide .card{
    height: 350px;
    background-size: cover;
}
                
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
.update .card-body{
        background-color: #edc4b640;
    backdrop-filter: blur(3px);
}

.update a{
    text-decoration:none;
}
.update_list{
    width: 100%;
    height: 100px;
    object-fit: cover;
}
</style>   
            <?php
            if (!empty($posts)) { 
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
                    <div class="services2 section-padding container">
                        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                            <!--<h2><span class="text-color text-uppercase fw-bold">Our Updates</span></h2>-->
                              <h2 class="text-color text-uppercase fw-bold"><?= $datasubmenu ?></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-5">
                                <div class="update">
                                    <?php
                                        foreach ($p as $post) {
                                            $img = empty($post['image']) ? base_url() . '/public/assets/img/services3-img.png' : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                                    ?>
                                            <div>
                                                <div class="card border-0 position-relative mx-20" style="background-image: url(<?= $img; ?>">
                                                    <div class="card-body p-3 d-flex align-items-center justify-content-center flex-column" style="min-height:200px;">
                                                        <h6 class="card-title fw-bold text-center"><?= date('d-M-Y', strtotime($post['created_at'])); ?></h6>
                                                        <p class="text-center text-uppercase fw-bold"><?= $post['title']; ?></p>
                                                        <div class="text-center mb-3">
                                                        <?php
                                                            $link = getMenuId('Updates').'/'.$post['id'];
                                                            $url = base_url().'/'.'updates/'.$post['slug'];
                                                        ?>
                                                            <a href="<?= $url; ?>">
                                                                <button class="btn btn-color text-danger rounded-pill  ">
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
                            
                            <div class="col-md-4 mb-5">
                                <div class="row gap-4" style="height: 330px; overflow-y: auto; overflow-x: hidden;">
                                <div class="h-100">
                                   <?php if($all_posts): foreach($all_posts as $post): 
                                      $link = getMenuId('Updates').'/'.$post['id'];
                                      $url = base_url().'/'.'updates/'.$post['slug']; ?>
                                      <a href="<?= $url;?>" class="pb-3 text-decoration-none">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="<?php echo base_url('/public/uploads/post_updates_images/'.$post['image']); ?>" class="img-fluid update_list">
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="text-color"><?php echo date('d-M-Y', strtotime($post['created_at'])); ?></p>
                                                    <h6><?php echo $post['title']; ?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; endif; ?>
                                </div>
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