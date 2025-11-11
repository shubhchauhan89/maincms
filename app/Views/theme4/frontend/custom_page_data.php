<style>
    /* Ultra Modern Slider Section */
    
    /* Slider Container */
    .modern-slider-wrapper {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
    }

    .slider-carousel {
        position: relative;
    }

    /* Slider Slide */
    .slider-slide {
        position: relative;
        width: 100%;
        height: 600px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        overflow: hidden;
    }

    /* Slide Overlay */
    .slider-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 50%, transparent 100%);
        z-index: 1;
    }

    /* Slide Content Container */
    .slider-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 60px;
        max-width: 600px;
        animation: slideInLeft 0.8s ease-out;
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Content Box */
    .slider-content-box {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(15px);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        border-left: 5px solid var(--primary-color);
        animation: slideInLeft 0.8s ease-out 0.2s backwards;
    }

    /* Slide Title */
    .slider-title {
        font-size: 42px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        letter-spacing: -1px;
        animation: slideInLeft 0.8s ease-out 0.3s backwards;
        word-break: break-word;
    }

    /* Slide Description */
    .slider-description {
        font-size: 16px;
        line-height: 1.8;
        color: #6c757d;
        margin-bottom: 25px;
        animation: slideInLeft 0.8s ease-out 0.4s backwards;
    }

    /* Slider Button */
    .slider-button {
        display: inline-block;
        padding: 14px 40px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        text-decoration: none;
        border: none;
        border-radius: 25px;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        animation: slideInLeft 0.8s ease-out 0.5s backwards;
    }

    .slider-button::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s, height 0.6s;
    }

    .slider-button:hover::before {
        width: 300px;
        height: 300px;
    }

    .slider-button:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
    }

    .slider-button i {
        margin-right: 8px;
    }

    /* Slick Slider Customization */
    .modern-slider-wrapper .slick-slide {
        outline: none;
    }

    .modern-slider-wrapper .slick-prev,
    .modern-slider-wrapper .slick-next {
        width: 50px;
        height: 50px;
        z-index: 10;
        background: white;
        border-radius: 50%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: none;
    }

    .modern-slider-wrapper .slick-prev:hover,
    .modern-slider-wrapper .slick-next:hover {
        background: var(--primary-color);
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .modern-slider-wrapper .slick-prev:before,
    .modern-slider-wrapper .slick-next:before {
        font-size: 22px;
        color: var(--primary-color);
        transition: color 0.3s ease;
    }

    .modern-slider-wrapper .slick-prev:hover:before,
    .modern-slider-wrapper .slick-next:hover:before {
        color: white;
    }

    .modern-slider-wrapper .slick-prev {
        left: 30px;
    }

    .modern-slider-wrapper .slick-next {
        right: 30px;
    }

    /* Slick Dots */
    .modern-slider-wrapper .slick-dots {
        bottom: 30px;
        z-index: 10;
    }

    .modern-slider-wrapper .slick-dots li button:before {
        font-size: 12px;
        color: white;
        opacity: 0.6;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .modern-slider-wrapper .slick-dots li.slick-active button:before {
        opacity: 1;
        color: var(--accent-color);
        font-size: 14px;
        box-shadow: 0 0 15px rgba(var(--bs-primary-rgb), 0.4);
    }

    /* Badge */
    .slider-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        animation: slideInLeft 0.8s ease-out 0.1s backwards;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .slider-slide {
            height: 500px;
        }

        .slider-content-wrapper {
            padding: 50px;
            max-width: 500px;
        }

        .slider-title {
            font-size: 36px;
        }

        .slider-content-box {
            padding: 35px;
        }
    }

    @media (max-width: 991px) {
        .slider-slide {
            height: 400px;
        }

        .slider-content-wrapper {
            padding: 40px 30px;
            max-width: 450px;
        }

        .slider-title {
            font-size: 28px;
        }

        .slider-description {
            font-size: 14px;
        }

        .slider-content-box {
            padding: 25px;
        }

        .modern-slider-wrapper .slick-prev {
            left: 15px;
        }

        .modern-slider-wrapper .slick-next {
            right: 15px;
        }
    }

    @media (max-width: 768px) {
        .slider-slide {
            height: 350px;
        }

        .slider-content-wrapper {
            padding: 30px 20px;
            max-width: 100%;
        }

        .slider-slide::before {
            background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.2) 100%);
        }

        .slider-title {
            font-size: 24px;
        }

        .slider-description {
            font-size: 13px;
            margin-bottom: 15px;
        }

        .slider-content-box {
            padding: 20px;
        }

        .modern-slider-wrapper .slick-prev,
        .modern-slider-wrapper .slick-next {
            width: 40px;
            height: 40px;
        }

        .modern-slider-wrapper .slick-prev:before,
        .modern-slider-wrapper .slick-next:before {
            font-size: 18px;
        }

        .modern-slider-wrapper .slick-prev {
            left: 10px;
        }

        .modern-slider-wrapper .slick-next {
            right: 10px;
        }
    }

    @media (max-width: 576px) {
        .slider-slide {
            height: 280px;
        }

        .slider-content-wrapper {
            padding: 25px 15px;
        }

        .slider-title {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .slider-description {
            font-size: 12px;
            margin-bottom: 12px;
        }

        .slider-content-box {
            padding: 18px;
        }

        .slider-button {
            padding: 12px 30px;
            font-size: 12px;
        }

        .modern-slider-wrapper .slick-dots {
            bottom: 15px;
        }
    }

    /* Loading Animation */
    .slider-slide {
        animation: fadeIn 0.5s ease-out;
    }
</style>

<section class="modern-slider-wrapper">
    <?php
    if (!empty($sliders)) {
        foreach ($sliders as $slider) {
            echo '<div class="slider-carousel">';
            
            foreach ($slider as $key => $sldr) {
                // Determine animation based on position
                $isFirstSlide = ($key === 0 || $key === array_key_first($slider));
            ?>
                <div class="slider-slide" 
                     style="background-image: linear-gradient(90deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 50%, transparent 100%), url(<?= base_url(); ?>/public/uploads/slider_images/<?= htmlspecialchars($sldr['image']); ?>);">
                    
                    <div class="slider-content-wrapper">
                        <div class="slider-content-box">
                            <!-- Badge -->
                            <?php if (!empty($sldr['text_on_image'])): ?>
                                <div class="slider-badge">
                                    <i class="fas fa-star me-1"></i>
                                    <?= htmlspecialchars($sldr['text_on_image']); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Title -->
                            <h2 class="slider-title" 
                                style="color: <?= $sldr['heading_color']; ?>; 
                                        font-family: <?= $sldr['title_style']; ?> !important;">
                                <?= htmlspecialchars($sldr['title']); ?>
                            </h2>

                            <!-- Description -->
                            <?php if (!empty($sldr['desc'])): ?>
                                <p class="slider-description" 
                                   style="color: <?= $sldr['text_color']; ?>; 
                                           font-family: <?= $sldr['desc_style']; ?>;">
                                    <?= htmlspecialchars($sldr['desc']); ?>
                                </p>
                            <?php endif; ?>

                            <!-- Button -->
                            <button class="slider-button" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                                <i class="fas fa-arrow-right"></i>Learn More
                            </button>
                        </div>
                    </div>
                </div>
            <?php
            }
            
            echo '</div>';
        }
    }
    ?>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Slick Slider
        if (document.querySelector('.slider-carousel')) {
            $('.slider-carousel').slick({
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
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            arrows: true
                        }
                    }
                ]
            });
        }
    });
</script>
