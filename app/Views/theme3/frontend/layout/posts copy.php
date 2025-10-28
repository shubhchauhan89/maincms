
       
            <?php
            if (count($posts) > 0) {
                foreach ($posts as $p) {
                    
                    if ($p['section_id'] == $myurl['section_id']) {
                        if(isset($p['section_id'])){
                            unset($p['section_id']);
                        }
            ?>
            <section class="">
                <div class="services2 section-padding container mb-5 pt-3">
                <div class="row">
                <h2 class="text-center text-color fw-bold mb-4">Our Updates
                <div class="col-md-8">
                    <div class="row m-auto">
                        <div class="col-md-12 pb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="update">
                                <?php
                                    foreach ($p as $post) {
                                       // bb_print_r($post);
                                        $img = empty($post['image']) ? base_url() . '/public/assets/img/services3-img.png' : base_url() . '/public/uploads/post_updates_images/' . $post['image'];
                                ?>
                                        <div>
                                            <div class="card me-3 mb-2 card-custom bg-white border-white border-0">
                                                <div class="card-custom-img">
                                                    <img src="<?= $img ?>" width="100%" height="200px" alt="Avatar" />
                                                </div>
                                                <div class="card-body my-3">
                                                    <h6 class="card-title text-color fw-bold"><?= date('d-M-Y', strtotime($post['created_at'])); ?></h6>
                                                    <p class="text-uppercase fw-bold p-0 mb-0"><?= $post['title']; ?></p>
                                                    <a href="<?= base_url() . '/' . 'updates/' . $post['slug']; ?>">
                                                        <button class="btn btn-color rounded-pill pl-0">
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
                    <div class="row">
                        <div class="col-md-12 pb-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="card card-custom bg-white border-white border-0">
                                <div class="card-body text-alignment border border-1 p-0 fw-bold">
                                    <?php
                                    if (!empty($posts)) {
                                        foreach ($posts as $p1) {
                                            foreach ($p1 as $post1) {
                                                
                                            ?>
                                            <div class="p-3 hover-bg">
                                                <a href="<?= base_url().'/'.'updates/'.$post1['slug'];?>">
                                                    <p class="mb-0"><?= $post1['title']; ?></p>
                                                    <p class="mb-0"><?= date("d-M-Y", strtotime($post1['created_at'])); ?></p>
                                                </a>
                                            </div>
                                            <hr class="w-100 m-0">
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
        
                </div>
            </section>
<?php

} 
                                    }
                                }
?>