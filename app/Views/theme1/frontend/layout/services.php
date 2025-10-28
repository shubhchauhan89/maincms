<?php
$heading = "";
if (!empty($services)) {
    foreach ($services as $service) {
        $heading = $service['sub_menu_name'];
        unset($service['sub_menu_name']);
        if ($service['section_id'] == $myurl['section_id']) {
            if(isset($service['section_id'])){
                unset($service['section_id']);
            }
    ?>
        <section>
            <div class="services section-padding">
                <div class="text-center mb-5">
                    <h2><span class="text-color text-uppercase fw-bold"><?= $heading; ?></span></h2>
                </div>
                <div class="row ms-auto">
                    <?php
                    foreach ($service as $s) {
                        if (!empty($s['image'])) {
                            $img = base_url() . "/public/uploads/service_images/" . $s['image'];
                        } else {
                            $img = base_url() . "/public/assets/img/services-img.jpg";
                        }
                        ?>
                        <div class="col-md-3" data-aos="fade-left" data-aos-duration="1000">
                            <div class="image-flip mt-4">
                                <div class="mainflip flip-0 ">
                                    <div class="frontside shadow">
                                        <img class="img-transparent rounded-top" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                                       
                                    </div>
                                    <div class="backside position-absolute w-100">
                                        <div class="card bg-dark rounded-top rounded-0" style="height:250px">
                                            <div class="card-body text-center mt-4">
                                                <div class="div-width">
                                                    <?php
                                                    $link = $s['menu_id']."/".$s['sub_menu_id'];
                                                    $url = base_url().'/'.'services/'.$s['menu_link'] ;
                                                    ?>
                                                    <a href="<?= $url;?>">
                                                        <button class="btn btn-color fs-5 py-3 px-4 rounded-pill align-center">
                                                            Know More
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                     <div class="transparent-text bg-primary w-100 p-1 rounded-bottom">
                                            <h6 class="custom-text-color fw-bold text-center  text-truncate">
                                                <?= $s['service']; ?>
                                            </h6>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    
                ?>
                </div>
            </div>
        <section>
        <?php 
        }    
    }
}
?>