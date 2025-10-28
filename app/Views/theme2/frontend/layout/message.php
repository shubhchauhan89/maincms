<?php
if(isset($myurl['soroting_order'])){
    $id = $myurl['soroting_order'];
}else{
    $id = "111";
}
?>
<section style="background: white; border: solid black 2px; padding-block: 30px;" id="businessQueryId<?= $id; ?>">
    <div class="text-center mb-5">
        <h2><span class="text-color text-uppercase fw-bold">Business Query</span></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="contact-form">
                <?php 
                    $validation = \Config\Services::validation();
                    $session = \Config\Services::session();
                    if ($session->getFlashdata('message') !== NULL) : ?>
                        <div class="alert alert-success alert-dismissible fade show error-text-font" role="alert">
                            <?php echo session()->getFlashdata('message'); ?>
                            <button type="button" class="close px-1 rounded" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"> &times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if ($session->getFlashdata('error') !== NULL) : ?>
                        <div class="alert alert-danger alert-dismissible fade show error-text-font" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="close px-1 rounded" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"> &times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if ($session->getFlashdata('sec-id') !== NULL){
                            echo '<script>document.getElementById("'.$session->getFlashdata('sec-id').'").scrollIntoView(false);</script>';
                        } 
                    ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" value="" name="name" class="form-control userName" id="userName<?= $id; ?>" placeholder="Your Name" />
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" id="userPhone<?= $id; ?>"  class="form-control" value="" name="number" maxlength="10" placeholder="Mobile Number" />
                        </div>
                    </div>
                    <div class="form-group mt-30">
                        <input type="text" value=""class="form-control userName" id="userEmail<?= $id; ?>" name="email" placeholder="Your Email" />
                    </div>
                    <div class="form-group mt-30">
                        <textarea class="form-control userName" name="message" id="userMessage<?= $id; ?>" rows="3" placeholder="Message Here.."></textarea>
                    </div>

                    <div class="text-center mt-30">
                        <button type="button" onclick="sendMessage(<?= $id; ?>)" class="btn btn-primary text-white rounded-pill sendMessage" id="sendMessage<?= $id; ?>">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>