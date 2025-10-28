<style>
    @keyframes slideInLeft {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }

 

    .content-wrapper {
        position: absolute;
    }

    @media screen and (max-width: 768px) {
        .slider-height {
            height: 200px; /* Adjust the height as needed for mobile */
            background-size: cover;
        }

        /* Adjust padding and alignment for smaller screens */
        .flex-column {
            align-items: center;
            padding: 10px;
            text-align: center;
        }

        /* Adjust font sizes for mobile */
        .title {
            font-size: 18px !important; /* Adjust the font size as needed for mobile */
        }

        .description {
            font-size: 10px !important; /* Adjust the font size as needed for mobile */
        }
    }
</style>

<section>
    <?php
    if (!empty($sliders)) {
        foreach ($sliders as $slider) {
            $animated = 'no';
            if ($slider['section_id'] == $myurl['section_id']) {
                echo '<div class="one-time">';
                if (isset($slider['section_id'])) {
                    unset($slider['section_id']);
                }
                foreach ($slider as $key => $sldr) {
                    ?>
                    <div class="position-relative">
                        <div class="slider-height position-relative" style="background-image: url(<?= base_url(); ?>/public/uploads/slider_images/<?= $sldr['image']; ?>);">
                            <?php if ($sldr['image_blur'] == 'yes'): ?>
                                <div class="blur-overlay position-absolute top-0 start-0 w-100 h-100" style="backdrop-filter: blur(2px);"></div>
                            <?php endif; ?>
                            
                            <div class="row align-items-<?php echo ($sldr['content_position'] == 'left') ? 'start' : (($sldr['content_position'] == 'center') ? 'center' : 'end'); ?> flex-column justify-content-center h-100 <?php echo ($animated == 'yes') ? 'animated' : ''; ?>" <?php echo ($sldr['content_position'] == 'right') ? 'style="padding-right: 20px;"' : (($sldr['content_position'] == 'left') ? 'style="padding-left: 20px;"' : ''); ?>>
                            <div class="content-wrapper row align-items-<?php echo ($sldr['content_position'] == 'left') ? 'start' : (($sldr['content_position'] == 'center') ? 'center' : 'end'); ?> flex-column justify-content-center h-100 <?php echo ($animated == 'yes') ? 'animated' : ''; ?>" <?php echo ($sldr['content_position'] == 'right') ? 'style="padding-right: 20px;"' : (($sldr['content_position'] == 'left') ? 'style="padding-left: 20px;"' : ''); ?>">
                                <?php if ($sldr['blur'] == 'yes'): ?>
                                    <div class='detail-box' style="width: fit-content;">
                                <?php endif; ?>
                                <h2 class="title <?= $animated == 'yes' ? 'already-animated' : ''; ?>" style="color: <?= $sldr['heading_color']; ?>;
                                    font-family: <?= $sldr['title_style']; ?> !important;
                                    font-size: <?= $sldr['title_font_size']; ?>px;
                                    text-align: <?= ($sldr['content_position'] == 'left') ? 'left' : (($sldr['content_position'] == 'right') ? 'right' : 'center'); ?>;
                                    <?php
                                    if ($sldr['content_position'] != 'center' && $animated != 'yes') {
                                        echo 'animation: ' . (($sldr['content_position'] == 'left') ? 'slideInLeft' : 'slideInRight') . ' 1s ease;';
                                    } else {
                                        echo ($animated != 'yes') ? 'animation: zoomIn 1s ease;' : '';
                                    }
                                    ?>
                                    animation-fill-mode: forwards;">
                                    <?= $sldr['title']; ?>
                                </h2>
                                <?php if (!empty($sldr['desc'])): ?>
                                    <p class="description <?= $animated == 'yes' ? 'already-animated' : ''; ?>" style="color: <?= $sldr['text_color']; ?>;
                                        font-family: <?= $sldr['desc_style']; ?>;
                                        font-size: <?= $sldr['description_font_size']; ?>px;
                                        text-align: <?= ($sldr['content_position'] == 'left') ? 'left' : (($sldr['content_position'] == 'right') ? 'right' : 'center'); ?>;
                                        <?php
                                        if ($sldr['content_position'] != 'center' && $animated != 'yes') {
                                            echo 'animation: ' . (($sldr['content_position'] == 'left') ? 'slideInLeft' : 'slideInRight') . ' 1s ease;';
                                        } else {
                                            echo ($animated != 'yes') ? 'animation: zoomIn 1s ease;' : '';
                                        }
                                        ?>
                                        animation-fill-mode: forwards;">
                                        <?= $sldr['desc']; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if ($sldr['blur'] == 'yes'): ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            </div>
                        </div>

                    </div>
                    <?php
                    // Add the animated class to mark the slider as animated
                    $animated = 'yes';
                }
                echo '</div>';
            }
        }
    }
    unset($slider);
    ?>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Delay animation after page load
        setTimeout(function() {
            let animatedElements = document.querySelectorAll(".one-time .h-100");
            animatedElements.forEach(function (element) {
                if (!element.classList.contains("already-animated")) {
                    element.classList.add("already-animated");
                }
            });
        }, 500); // Adjust the delay time as needed

        // Check for redundant slider reloads and initialization code
        // Ensure the slider initialization code is executed only once
    });
</script>