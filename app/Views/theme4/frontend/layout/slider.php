<style>
    /* Slider Section Base */
    .slider-section-wrapper {
        position: relative;
        overflow: hidden;
    }

    /* Image Slider Styles */
    .image-slider-container {
        position: relative;
        width: 100%;
        height: 600px;
    }

    .slider-height {
        width: 100% !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        position: relative !important;
    }

    .blur-overlay {
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
    }

    .content-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
    }

    /* .detail-box {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    } */

    /* Video Background Styles */
    .video-background-container {
        position: relative;
        width: 100%;
        height: 600px;
        overflow: hidden;
    }

    .video-background {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translate(-50%, -50%);
        z-index: 0;
        object-fit: cover;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    .video-content-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-content-box {
        text-align: center;
        padding: 40px;
        max-width: 900px;
        animation: fadeInUp 1s ease-out;
    }

    .video-title {
        font-size: 56px;
        font-weight: 800;
        color: white;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        margin-bottom: 20px;
        animation: fadeInDown 1s ease-out;
    }

    .video-description {
        font-size: 20px;
        color: white;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        line-height: 1.6;
        animation: fadeInUp 1s ease-out 0.3s both;
    }

    .video-caption {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 16px;
        font-weight: 600;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        z-index: 3;
    }

    /* Animations */
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
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Slick Slider Arrows */
    .slick-prev,
    .slick-next {
        width: 50px;
        height: 50px;
        z-index: 100;
        /* background: rgba(255, 255, 255, 0.9); */
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .slick-prev:hover,
    .slick-next:hover {
        /* background: white; */
        transform: scale(1.1);
    }

    .slick-prev:before,
    .slick-next:before {
        font-size: 30px;
        color: #000000;
    }

    .slick-prev {
        left: 30px;
    }

    .slick-next {
        right: 30px;
    }

    /* Slick Dots */
    .slick-dots {
        bottom: 30px;
    }

    .slick-dots li button:before {
        font-size: 12px;
        color: white;
        opacity: 0.5;
    }

    .slick-dots li.slick-active button:before {
        opacity: 1;
        color: var(--accent-color);
    }

    /* Responsive */
    @media screen and (max-width: 991px) {
        .image-slider-container,
        .video-background-container {
            height: 500px;
        }

        .video-title {
            font-size: 42px;
        }

        .video-description {
            font-size: 18px;
        }
    }

    @media screen and (max-width: 768px) {
        .image-slider-container,
        .video-background-container {
            height: 400px;
        }

        .slider-height {
            background-size: cover;
        }

        .flex-column {
            align-items: center;
            padding: 10px;
            text-align: center;
        }

        .title {
            font-size: 24px !important;
        }

        .description {
            font-size: 14px !important;
        }

        .detail-box {
            padding: 20px;
        }

        .video-title {
            font-size: 32px;
        }

        .video-description {
            font-size: 16px;
        }

        .video-content-box {
            padding: 20px;
        }

        .slick-prev,
        .slick-next {
            width: 40px;
            height: 40px;
        }

        .slick-prev {
            left: 10px;
        }

        .slick-next {
            right: 10px;
        }
    }

    @media screen and (max-width: 576px) {
        .image-slider-container,
        .video-background-container {
            height: 300px;
        }

        .title {
            font-size: 20px !important;
        }

        .description {
            font-size: 12px !important;
        }

        .video-title {
            font-size: 28px;
        }

        .video-description {
            font-size: 14px;
        }
    }
</style>

<section class="slider-section-wrapper">
    <?php

    if (!empty($sliders)) {
        foreach ($sliders as $slider) {
            if ($slider['section_id'] == $myurl['section_id']) {
                
                // Check if this section has a video
                $has_video = false;
                $video_slider = null;
                
                foreach ($slider as $key => $sldr) {
                    if ($key !== 'section_id' && isset($sldr['media_type']) && $sldr['media_type'] === 'video' && !empty($sldr['video'])) {
                        $has_video = true;
                        $video_slider = $sldr;
                        break;
                    }
                }
                
                // If video exists, show only video
                if ($has_video && $video_slider) {
                    ?>
                    <div class="video-background-container">
                        <!-- Background Video -->
                        <video class="video-background" autoplay muted loop playsinline>
                            <source src="<?= base_url(); ?>/public/uploads/client_videos/<?= $video_slider['video']; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <!-- Dark Overlay -->
                        <div class="video-overlay"></div>
                        
                        <!-- Content -->
                        <div class="video-content-wrapper">
                            <div class="video-content-box">
                                <?php if (!empty($video_slider['title'])): ?>
                                    <h1 class="video-title" style="font-family: <?= $video_slider['title_style'] ?? 'inherit'; ?>;">
                                        <?= $video_slider['title']; ?>
                                    </h1>
                                <?php endif; ?>
                                
                                <?php if (!empty($video_slider['desc'])): ?>
                                    <p class="video-description" style="font-family: <?= $video_slider['desc_style'] ?? 'inherit'; ?>;">
                                        <?= $video_slider['desc']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php if (!empty($video_slider['video_caption'])): ?>
                            <div class="video-caption">
                                <?= $video_slider['video_caption']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php
                } else {
                    // Show image slider
                    $animated = 'no';
                    echo '<div class="image-slider-container one-time">';
                    
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
                                <?php if ($sldr['blur'] == 'yes'): ?>
                                    <div class='detail-box' style="width: fit-content;">
                                <?php endif; ?>
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
                                <?php if ($sldr['blur'] == 'yes'): ?>
                                    </div>
                                <?php endif; ?>
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
    }
    unset($slider);
    ?>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Slick Slider for images
        if (document.querySelector('.one-time')) {
            $('.one-time').slick({
                dots: true,
                infinite: true,
                speed: 800,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                fade: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                pauseOnHover: true,
                arrows: true,
                adaptiveHeight: false
            });
        }

        // Delay animation after page load
        setTimeout(function() {
            let animatedElements = document.querySelectorAll(".one-time .h-100");
            animatedElements.forEach(function (element) {
                if (!element.classList.contains("already-animated")) {
                    element.classList.add("already-animated");
                }
            });
        }, 500);

        // Ensure video plays on mobile
        const videoElements = document.querySelectorAll('.video-background');
        videoElements.forEach(video => {
            video.play().catch(error => {
                console.log('Video autoplay prevented:', error);
            });
        });
    });
</script>
