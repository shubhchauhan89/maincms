<?= $this->extend("theme7/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<?= $this->endSection() ?>
<?= $this->section("contentTheme7") ?>
<div class="about-us-page">
<?php

    foreach($sort_order as $myurl){
        if($myurl['url_val'] != "contact"){
            include('layout/'.$myurl['url_val'].'.php');
        }
        else
        { 
            $this->include('theme7/frontend/layout/message');
        }    
    }
    ?>
</div>

<?= $this->endSection() ?>
<?= $this->section("customScripts") ?>
<script>
    $(function() {
        AOS.init();
    });
    
</script>
<?= $this->endSection() ?>