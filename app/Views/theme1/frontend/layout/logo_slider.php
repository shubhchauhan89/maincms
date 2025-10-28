<style>
    .marquee-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
       
        border-bottom: 2px solid #ccc; /* Add a bottom border */
    }

    .container-fluid {
      
      padding : 10 !important;
    }

    .marquee-content {
        display: inline-block;
        animation: marquee-slide 30s linear infinite;
        padding: 10px; /* Add padding for space between border and images */
    }

    .marquee-content img {
        margin-right: 20px; /* Add spacing between images */
    }

    @keyframes marquee-slide {
        0% { transform: translateX(0%); }
        100% { transform: translateX(-100%); }
    }
    .logoSliderHeading {
        border-top: 2px solid #ccc; /* Add a top border */
    }

    .image-container {
    position: relative;
    display: inline-block;
    }

    .image-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: not-allowed; /* Show disabled cursor */
        
    }
</style>
<?php
// Search for the logo_slider section in the array
$logo_slider_title = 'Our Clients';

foreach ($sort_order as $item) {
    if ($item['url_val'] === 'logo_slider' && !empty($item['title'])) {
        $logo_slider_title = $item['title'];
        break; 
    }
}
?>

<?php if (!empty($logo_slider_title)) { ?>
    <section>
        <div class="container-fluid logoSliderHeading">
            <div class="text-center m-auto pt-4">
                <h1 class="pb-3 fw-bold custom-text-color"><?= $logo_slider_title ?></h1>
                <hr class="m-auto bg-success" style="width: 80px; height: 5px">
                <p class="pt-2"></p>
            </div>
            <div class="row">
                <!-- Add your content here -->
            </div>
        </div>
    </section>
<?php } ?>
<?php
if (!empty($logo_slider)) {
    ?>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="marquee-container">
                        <div class="marquee-content">
                            <!-- Add your logo images here -->
                            <?php
                            // Repeat the images infinitely
                            $num_images = count($logo_slider[0]);
                            $num_repeats = ceil(250 / $num_images); // Adjust 16 to the desired number of images per loop
                            for ($i = 0; $i < $num_repeats; $i++) {
                                foreach ($logo_slider[0] as $key => $value) {
                                    if (is_array($value)) {
                                        foreach ($value as $image) {
                                            $img = !empty($image) ?
                                                base_url() . '/public/uploads/logo_slider_images/' . $image :
                                                base_url() . '/public/assets/img/empty.png';
                                            ?>
                                             <div class="image-container">
                                            <img src="<?php echo $img; ?>" width="150px" height="150px" alt="Logo" class="img-fluid">
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>

<script>
    document.addEventListener('contextmenu', function(e) {
    e.preventDefault(); // Prevent right-click menu from appearing
});
</script>
<!-- <script>
    document.querySelector('.image-container:last-child img').addEventListener('contextmenu', function(e) {
        e.preventDefault(); // Prevent right-click menu from appearing
    });
</script> -->

