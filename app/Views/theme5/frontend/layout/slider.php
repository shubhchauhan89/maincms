<style>
    
/* ===== MEDICAL THEME - BANNER SECTION STYLES ===== */

/* ===== MEDICAL BANNER WRAPPER ===== */
.medical-banner-section-wrapper {
    width: 100%;
    overflow: hidden;
}

/* ===== VIDEO BANNER CONTAINER ===== */
.medical-video-banner-container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.slick-dotted.slick-slider{
    margin-bottom: 0px !important;
}

.medical-video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

/* Medical Video Overlay - Gradient Blend */
.medical-video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        rgba(0, 61, 122, 0.6) 0%, 
        rgba(0, 128, 128, 0.4) 50%, 
        rgba(0, 0, 0, 0.5) 100%);
    z-index: 2;
    mix-blend-mode: multiply;
}

/* ===== BANNER CONTENT WRAPPER ===== */
.medical-banner-content-wrapper {
    position: relative;
    z-index: 3;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: var(--patient-white, #ffffff);
    text-align: center;
    padding: 40px 20px;
}

.medical-banner-content-box {
    animation: fadeInScale 1s ease-out forwards;
}

@keyframes fadeInScale {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

/* ===== BANNER BADGE ===== */
.medical-banner-badge {
    display: inline-block;
    background: rgba(0, 128, 128, 0.9);
    color: var(--patient-white, #ffffff);
    padding: 10px 20px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 128, 128, 0.3);
    box-shadow: 0 4px 12px rgba(0, 128, 128, 0.3);
}

.medical-banner-badge i {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.6; }
}

/* ===== BANNER TITLE ===== */
.medical-banner-title {
    font-size: 64px;
    font-weight: 800;
    line-height: 1.2;
    margin: 20px 0 20px 0;
    color: var(--patient-white, #ffffff);
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
    letter-spacing: -1px;
}

.medical-banner-slide-title {
    font-size: 52px;
    font-weight: 800;
    line-height: 1.3;
    margin: 20px 0 20px 0;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

/* ===== BANNER DESCRIPTION ===== */
.medical-banner-description {
    font-size: 18px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.95);
    margin: 0 0 30px 0;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
}

.medical-banner-slide-description {
    font-size: 16px;
    line-height: 1.6;
    margin: 15px 0 20px 0;
}

/* ===== BANNER BUTTONS ===== */
.medical-banner-buttons,
.medical-banner-slide-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin: 30px 0;
}

.medical-btn {
    display: inline-flex;
    align-items: center;
    padding: 14px 32px;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    text-align: center;
}

.medical-btn-primary {
    background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
    color: var(--patient-white, #ffffff);
    box-shadow: 0 6px 20px rgba(0, 128, 128, 0.4);
}

.medical-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 28px rgba(0, 128, 128, 0.5);
    background: linear-gradient(135deg, #006666 0%, var(--medical-teal, #008080) 100%);
}

.medical-btn-primary:active {
    transform: translateY(-1px);
}

.medical-btn-secondary {
    background: rgba(255, 255, 255, 0.15);
    color: var(--patient-white, #ffffff);
    border: 2px solid var(--patient-white, #ffffff);
    backdrop-filter: blur(10px);
}

.medical-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.25);
    border-color: var(--medical-teal, #008080);
    color: var(--medical-teal, #008080);
    transform: translateY(-3px);
}

/* ===== FEATURE PILLS ===== */
.medical-banner-features {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px;
}

.medical-feature-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    background: rgba(40, 167, 69, 0.2);
    color: var(--patient-white, #ffffff);
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    border: 1px solid rgba(40, 167, 69, 0.4);
}

.medical-feature-pill i {
    color: var(--trust-green, #28a745);
}

/* ===== BANNER STATISTICS ===== */
.medical-banner-stats {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(10px);
    padding: 30px 0;
    z-index: 4;
    border-top: 1px solid rgba(0, 128, 128, 0.3);
}

.stat-item {
    text-align: center;
    color: var(--patient-white, #ffffff);
    padding: 15px;
}

.stat-number {
    font-size: 32px;
    font-weight: 700;
    color: var(--medical-teal, #008080);
}

.stat-label {
    font-size: 13px;
    margin-top: 5px;
    opacity: 0.9;
}

/* ===== VIDEO CAPTION ===== */
.medical-video-caption {
    position: absolute;
    bottom: 120px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 128, 128, 0.9);
    color: var(--patient-white, #ffffff);
    padding: 12px 24px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    z-index: 5;
    backdrop-filter: blur(10px);
    max-width: 90%;
    text-align: center;
}

/* ===== SCROLL INDICATOR ===== */
.medical-scroll-indicator {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    cursor: pointer;
    animation: bounce 2s infinite;
    text-align: center;
    color: rgba(255, 255, 255, 0.7);
    font-size: 12px;
}

.medical-scroll-indicator i {
    display: block;
    font-size: 20px;
    margin-top: 5px;
}

@keyframes bounce {
    0%, 100% { transform: translateX(-50%) translateY(0); }
    50% { transform: translateX(-50%) translateY(10px); }
}

/* ===== IMAGE SLIDER WRAPPER ===== */
.medical-banner-carousel-wrapper {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.medical-banner-slider-container {
    position: relative;
}

/* ===== BANNER SLIDE ===== */
.medical-banner-slide {
    position: relative;
}

.medical-banner-height {
    position: relative;
    min-height: 600px;
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: center !important;
    background-repeat: no-repeat;
}

/* Blur Effect */
.medical-blur-overlay {
    backdrop-filter: blur(2px) !important;
}

/* Gradient Overlay */
.medical-banner-gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, 
        rgba(0, 61, 122, 0.7) 0%, 
        rgba(0, 128, 128, 0.3) 50%, 
        rgba(0, 0, 0, 0.4) 100%);
    z-index: 1;
}

/* ===== BANNER CONTENT POSITIONING ===== */
.medical-banner-content {
    position: relative;
    z-index: 2;
    padding: 40px;
}

.medical-banner-content.left {
    padding-left: 60px;
}

.medical-banner-content.right {
    padding-right: 60px;
}

.medical-banner-content.center {
    text-align: center;
}

/* ===== CATEGORY BADGE ===== */
.medical-banner-category {
    display: inline-block;
    background: rgba(0, 128, 128, 0.8);
    color: var(--patient-white, #ffffff);
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* ===== DETAIL BOX ===== */
.medical-detail-box {
    background: rgba(0, 61, 122, 0.3);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-left: 4px solid var(--medical-teal, #008080);
    border-radius: 6px;
    margin: 15px 0;
}

/* ===== ANIMATIONS ===== */
.animate-fadeInDown,
.animate-fadeInUp {
    opacity: 0;
}

.animate-fadeInDown.animated {
    animation: fadeInDown 0.8s ease-out forwards;
}

.animate-fadeInUp.animated {
    animation: fadeInUp 0.8s ease-out forwards;
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

/* ===== SLICK SLIDER CUSTOMIZATION ===== */
.slick-dots {
    bottom: 30px !important;
}

.slick-dots li button:before {
    color: var(--patient-white, #ffffff) !important;
    opacity: 0.5 !important;
}

.slick-dots li.slick-active button:before {
    color: var(--medical-teal, #008080) !important;
    opacity: 1 !important;
}

.medical-banner-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background: rgba(0, 128, 128, 0.7) !important;
    color: var(--patient-white, #ffffff) !important;
    width: 50px !important;
    height: 50px !important;
    border-radius: 6px !important;
    border: none !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 20px !important;
    transition: all 0.3s ease !important;
}

.medical-banner-arrow:hover {
    background: var(--medical-teal, #008080) !important;
    box-shadow: 0 4px 12px rgba(0, 128, 128, 0.4) !important;
}

.slick-prev {
    left: 30px !important;
}

.slick-next {
    right: 30px !important;
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 1024px) {
    .medical-banner-title {
        font-size: 48px;
    }

    .medical-banner-slide-title {
        font-size: 36px;
    }

    .medical-banner-description {
        font-size: 16px;
    }

    .medical-banner-content {
        padding: 30px;
    }

    .medical-banner-content.left {
        padding-left: 30px;
    }

    .medical-banner-content.right {
        padding-right: 30px;
    }

    .medical-banner-height {
        min-height: 500px;
    }
}

@media (max-width: 768px) {
    .medical-video-banner-container {
        height: 70vh;
    }

    .medical-banner-title {
        font-size: 36px;
        margin: 15px 0;
    }

    .medical-banner-slide-title {
        font-size: 28px;
    }

    .medical-banner-description {
        font-size: 14px;
        max-width: 100%;
    }

    .medical-banner-buttons,
    .medical-banner-slide-buttons {
        flex-direction: column;
        gap: 10px;
    }

    .medical-btn {
        width: 100%;
        padding: 12px 24px;
        font-size: 14px;
    }

    .medical-banner-features {
        gap: 10px;
    }

    .medical-feature-pill {
        font-size: 12px;
        padding: 6px 12px;
    }

    .medical-banner-content {
        padding: 20px;
    }

    .medical-banner-height {
        min-height: 400px;
    }

    .slick-prev {
        left: 10px !important;
    }

    .slick-next {
        right: 10px !important;
    }

    .medical-banner-arrow {
        width: 40px !important;
        height: 40px !important;
        font-size: 16px !important;
    }

    .medical-banner-stats {
        padding: 20px 0;
    }

    .stat-number {
        font-size: 24px;
    }

    .stat-label {
        font-size: 12px;
    }
}

@media (max-width: 576px) {
    .medical-video-banner-container {
        height: 50vh;
    }

    .medical-banner-title {
        font-size: 28px;
        margin: 10px 0;
    }

    .medical-banner-slide-title {
        font-size: 22px;
    }

    .medical-banner-description {
        font-size: 13px;
    }

    .medical-banner-content-box {
        max-width: 100%;
    }

    .medical-banner-badge {
        font-size: 12px;
        padding: 8px 16px;
        margin-bottom: 15px;
    }

    .medical-banner-buttons,
    .medical-banner-slide-buttons {
        flex-direction: column;
        gap: 8px;
        margin: 20px 0;
    }

    .medical-btn {
        width: 100%;
        padding: 10px 20px;
        font-size: 13px;
    }

    .medical-banner-content {
        padding: 15px;
    }

    .medical-banner-height {
        min-height: 300px;
    }

    .slick-prev,
    .slick-next {
        display: none !important;
    }

    .medical-banner-category {
        font-size: 11px;
        padding: 6px 12px;
    }

    .medical-detail-box {
        padding: 15px;
        margin: 10px 0;
    }

    .stat-item {
        padding: 10px 5px;
    }

    .stat-number {
        font-size: 20px;
    }

    .stat-label {
        font-size: 11px;
    }

    .medical-scroll-indicator {
        bottom: 20px;
        font-size: 11px;
    }

    .medical-video-caption {
        bottom: 80px;
        font-size: 12px;
        padding: 10px 16px;
    }
}

/* ===== DARK MODE SUPPORT ===== */
body.theme-dark .medical-banner-gradient-overlay {
    background: linear-gradient(90deg, 
        rgba(0, 20, 40, 0.8) 0%, 
        rgba(0, 80, 100, 0.4) 50%, 
        rgba(0, 0, 0, 0.6) 100%);
}

body.theme-dark .medical-detail-box {
    background: rgba(0, 128, 128, 0.1);
}

body.theme-dark .medical-banner-stats {
    background: rgba(0, 0, 0, 0.6);
    border-top-color: rgba(0, 128, 128, 0.2);
}
</style>

<!-- ===== MEDICAL THEME - PROFESSIONAL BANNER SECTION ===== -->

<section class="medical-banner-section-wrapper">
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
                
                // VIDEO BANNER - Full Screen with Medical Overlay
                if ($has_video && $video_slider) {
                    ?>
                    <div class="medical-video-banner-container">
                        <!-- Medical Background Video -->
                        <video class="medical-video-background" autoplay muted loop playsinline>
                            <source src="<?= base_url(); ?>/public/uploads/client_videos/<?= $video_slider['video']; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <!-- Medical Gradient Overlay -->
                        <div class="medical-video-overlay"></div>
                        
                        <!-- Medical Banner Content -->
                        <div class="medical-banner-content-wrapper">
                            <div class="container h-100">
                                <div class="row h-100 align-items-center justify-content-center">
                                    <div class="col-lg-10 col-md-12 medical-banner-content-box">
                                        <!-- Medical Accent Badge -->
                                        <div class="medical-banner-badge animate-fadeInDown">
                                            <i class="fas fa-heart-pulse me-2"></i>
                                            <span><?= !empty($video_slider['badge_text']) ? $video_slider['badge_text'] : 'Professional Healthcare'; ?></span>
                                        </div>

                                        <!-- Main Banner Title -->
                                        <?php if (!empty($video_slider['title'])): ?>
                                            <h1 class="medical-banner-title animate-fadeInUp" 
                                                style="font-family: <?= $video_slider['title_style'] ?? 'inherit'; ?>;">
                                                <?= $video_slider['title']; ?>
                                            </h1>
                                        <?php endif; ?>
                                        
                                        <!-- Banner Description -->
                                        <?php if (!empty($video_slider['desc'])): ?>
                                            <p class="medical-banner-description animate-fadeInUp" 
                                               style="font-family: <?= $video_slider['desc_style'] ?? 'inherit'; ?>;
                                                      animation-delay: 0.2s;">
                                                <?= $video_slider['desc']; ?>
                                            </p>
                                        <?php endif; ?>

                                        <!-- CTA Buttons -->
                                        <div class="medical-banner-buttons animate-fadeInUp" style="animation-delay: 0.4s;">
                                            <button class="medical-btn medical-btn-primary" data-bs-target="#appointmentModal" data-bs-toggle="modal">
                                                <i class="fas fa-calendar-check me-2"></i>Book Appointment
                                            </button>
                                            <a href="<?= base_url('services'); ?>" class="medical-btn medical-btn-secondary">
                                                <i class="fas fa-stethoscope me-2"></i>Our Services
                                            </a>
                                        </div>

                                        <!-- Medical Features Pills -->
                                        <?php if (!empty($video_slider['features'])): ?>
                                        <div class="medical-banner-features animate-fadeInUp" style="animation-delay: 0.6s;">
                                            <?php 
                                            $features = explode(',', $video_slider['features']);
                                            foreach ($features as $feature):
                                                $feature = trim($feature);
                                            ?>
                                            <span class="medical-feature-pill">
                                                <i class="fas fa-check-circle"></i> <?= $feature; ?>
                                            </span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Medical Banner Statistics (Optional) -->
                        <?php if (!empty($video_slider['show_stats']) && $video_slider['show_stats'] == 'yes'): ?>
                        <div class="medical-banner-stats">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 stat-item">
                                        <div class="stat-number">5000+</div>
                                        <div class="stat-label">Patients Treated</div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 stat-item">
                                        <div class="stat-number">15+</div>
                                        <div class="stat-label">Specialists</div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 stat-item">
                                        <div class="stat-number">20+</div>
                                        <div class="stat-label">Years Experience</div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 stat-item">
                                        <div class="stat-number">24/7</div>
                                        <div class="stat-label">Emergency Care</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Video Caption -->
                        <?php if (!empty($video_slider['video_caption'])): ?>
                            <div class="medical-video-caption">
                                <i class="fas fa-info-circle me-2"></i><?= $video_slider['video_caption']; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Scroll Indicator -->
                        <div class="medical-scroll-indicator">
                            <span>Scroll to explore</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <?php
                } else {
                    // IMAGE SLIDER - Medical Professional Carousel
                    ?>
                    <div class="medical-banner-carousel-wrapper">
                        <div class="medical-banner-slider-container one-time">
                    
                        <?php
                        if (isset($slider['section_id'])) {
                            unset($slider['section_id']);
                        }
                        
                        foreach ($slider as $key => $sldr) {
                        ?>
                            <div class="medical-banner-slide">
                                <!-- Banner Background Image -->
                                <div class="medical-banner-height position-relative" 
                                     style="background-image: url(<?= base_url(); ?>/public/uploads/slider_images/<?= $sldr['image']; ?>); 
                                             background-attachment: fixed;">
                                    
                                    <!-- Image Blur Effect -->
                                    <?php if ($sldr['image_blur'] == 'yes'): ?>
                                        <div class="medical-blur-overlay position-absolute top-0 start-0 w-100 h-100" 
                                             style="backdrop-filter: blur(3px);"></div>
                                    <?php endif; ?>

                                    <!-- Medical Gradient Overlay -->
                                    <div class="medical-banner-gradient-overlay"></div>
                                    
                                    <!-- Banner Content Row -->
                                    <div class="row align-items-center justify-content-<?php 
                                        echo ($sldr['content_position'] == 'left') ? 'start' : 
                                             (($sldr['content_position'] == 'center') ? 'center' : 'end'); 
                                    ?> h-100 px-4">
                                        <div class="col-lg-12 col-md-10 medical-banner-content <?= $sldr['content_position']; ?>">
                                            
                                            <!-- Medical Category Badge -->
                                            <div class="medical-banner-category animate-fadeInDown">
                                                <i class="fas fa-heart-pulse me-2"></i>
                                                <span><?= !empty($sldr['category']) ? $sldr['category'] : 'Healthcare Excellence'; ?></span>
                                            </div>

                                            <!-- Banner Title -->
                                            <h2 class="medical-banner-slide-title animate-fadeInUp" 
                                                style="color: <?= $sldr['heading_color']; ?>;
                                                        font-family: <?= $sldr['title_style']; ?> !important;
                                                        font-size: <?= $sldr['title_font_size']; ?>px;
                                                        text-align: <?= ($sldr['content_position'] == 'left') ? 'left' : 
                                                                     (($sldr['content_position'] == 'right') ? 'right' : 'center'); ?>;">
                                                <?= $sldr['title']; ?>
                                            </h2>

                                            <!-- Banner Description with Optional Blur Box -->
                                            <?php if ($sldr['blur'] == 'yes'): ?>
                                                <div class="medical-detail-box">
                                            <?php endif; ?>
                                            
                                            <?php if (!empty($sldr['desc'])): ?>
                                                <p class="medical-banner-slide-description animate-fadeInUp" 
                                                   style="color: <?= $sldr['text_color']; ?>;
                                                           font-family: <?= $sldr['desc_style']; ?>;
                                                           font-size: <?= $sldr['description_font_size']; ?>px;
                                                           text-align: <?= ($sldr['content_position'] == 'left') ? 'left' : 
                                                                        (($sldr['content_position'] == 'right') ? 'right' : 'center'); ?>;">
                                                    <?= $sldr['desc']; ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if ($sldr['blur'] == 'yes'): ?>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Banner Call-to-Action Buttons -->
                                            <div class="medical-banner-slide-buttons animate-fadeInUp" style="animation-delay: 0.2s;">
                                                <button class="medical-btn medical-btn-primary" 
                                                        data-bs-target="#appointmentModal" 
                                                        data-bs-toggle="modal">
                                                    <i class="fas fa-calendar-check me-2"></i>Schedule Appointment
                                                </button>
                                                <?php if (!empty($sldr['secondary_button_text'])): ?>
                                                    <a href="<?= !empty($sldr['secondary_button_link']) ? $sldr['secondary_button_link'] : 'javascript:void(0)'; ?>" 
                                                       class="medical-btn medical-btn-secondary">
                                                        <i class="fas fa-arrow-right me-2"></i><?= $sldr['secondary_button_text']; ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }
    unset($slider);
    ?>
</section>

<!-- Medical Banner Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // Initialize Medical Banner Slider (Slick)
    if (document.querySelector('.medical-banner-slider-container.one-time')) {
        $('.medical-banner-slider-container.one-time').slick({
            dots: true,
            infinite: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            fade: true,
            cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
            pauseOnHover: true,
            arrows: true,
            adaptiveHeight: false,
            prevArrow: '<button class="slick-prev medical-banner-arrow"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button class="slick-next medical-banner-arrow"><i class="fas fa-chevron-right"></i></button>'
        });
    }

    // Trigger animations when slider changes
    if (document.querySelector('.medical-banner-slider-container.one-time')) {
        $('.medical-banner-slider-container.one-time').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            const $slides = $('.medical-banner-slide');
            $slides.find('.animate-fadeInDown, .animate-fadeInUp').removeClass('animated');
        });

        $('.medical-banner-slider-container.one-time').on('afterChange', function(event, slick, currentSlide) {
            const $currentSlide = $('.medical-banner-slide').eq(currentSlide);
            $currentSlide.find('.animate-fadeInDown, .animate-fadeInUp').addClass('animated');
        });

        // Animate first slide
        setTimeout(function() {
            const $firstSlide = $('.medical-banner-slide').first();
            $firstSlide.find('.animate-fadeInDown, .animate-fadeInUp').addClass('animated');
        }, 500);
    }

    // Ensure video plays on mobile
    const videoElements = document.querySelectorAll('.medical-video-background');
    videoElements.forEach(video => {
        video.play().catch(error => {
            console.log('Video autoplay prevented:', error);
        });
    });

    // Smooth scroll indicator functionality
    const scrollIndicator = document.querySelector('.medical-scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', function() {
            window.scrollBy({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        });
    }

    // Parallax effect on scroll
    window.addEventListener('scroll', function() {
        const bannerBgs = document.querySelectorAll('.medical-banner-height');
        bannerBgs.forEach(bg => {
            const scrollPosition = window.pageYOffset;
            if (bg.style.backgroundAttachment === 'fixed') {
                bg.style.backgroundPosition = `center ${scrollPosition * 0.5}px`;
            }
        });
    });
});

// Intersection Observer for animation trigger
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.querySelectorAll('.animate-fadeInDown, .animate-fadeInUp').forEach(el => {
                    el.classList.add('animated');
                });
            }
        });
    }, observerOptions);

    document.querySelectorAll('.medical-banner-content-wrapper').forEach(el => {
        observer.observe(el);
    });
});
</script>
