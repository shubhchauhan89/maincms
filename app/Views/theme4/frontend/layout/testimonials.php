<style>
    /* Ultra Modern Testimonials Section */
    .testimonials-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .testimonials-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.04;
        background-image: 
            radial-gradient(circle at 20% 80%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, var(--accent-color) 0%, transparent 50%);
        animation: float-animation 15s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes float-animation {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, 30px); }
    }

    /* Section Title */
    .testimonials-title-wrapper {
        text-align: center;
        margin-bottom: 70px;
        position: relative;
        z-index: 1;
    }

    .testimonials-main-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .testimonials-divider {
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 0 auto 20px;
        border-radius: 10px;
        animation: width-pulse 2s ease-in-out infinite;
    }

    @keyframes width-pulse {
        0%, 100% { width: 100px; }
        50% { width: 150px; }
    }

    .testimonials-subtitle {
        font-size: 16px;
        color: #6c757d;
        font-weight: 500;
    }

    /* Testimonials Container */
    .testimonials-container {
        position: relative;
        z-index: 1;
    }

    /* Testimonial Card */
    .testimonial-card {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .testimonial-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.4s ease;
        transform-origin: left;
    }

    .testimonial-card:hover::before {
        transform: scaleX(1);
    }

    .testimonial-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    }

    .testimonial-card:hover {
        background: linear-gradient(135deg, #ffffff 0%, #f0f8ff 100%);
    }

    /* Quote Icon */
    .testimonial-quote-icon {
        font-size: 48px;
        color: var(--accent-color);
        margin-bottom: 15px;
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover .testimonial-quote-icon {
        opacity: 1;
        transform: scale(1.2) rotate(10deg);
    }

    /* Testimonial Text */
    .testimonial-text {
        color: #6c757d;
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 20px;
        flex-grow: 1;
        position: relative;
    }

    .testimonial-text::first-letter {
        font-weight: 600;
        color: var(--text-dark);
    }

    /* Read More Button */
    .testimonial-read-more {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        font-size: 13px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
    }

    .testimonial-read-more:hover {
        color: var(--accent-color);
        gap: 12px;
    }

    .testimonial-read-more i {
        transition: transform 0.3s ease;
    }

    .testimonial-read-more:hover i {
        transform: translateX(3px);
    }

    /* Author Section */
    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-top: 20px;
        border-top: 1px solid #e9ecef;
    }

    .testimonial-author-image {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .testimonial-card:hover .testimonial-author-image {
        transform: scale(1.1);
        box-shadow: 0 8px 25px rgba(var(--bs-primary-rgb), 0.2);
    }

    .testimonial-author-info h6 {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .testimonial-author-info span {
        font-size: 13px;
        color: #adb5bd;
        display: block;
    }

    /* Slick Slider Customization */
    .testimonials-slider {
        position: relative;
    }

    .testimonials-slider .slick-slide {
        padding: 0 15px;
    }

    .testimonials-slider .slick-prev,
    .testimonials-slider .slick-next {
        width: 50px;
        height: 50px;
        z-index: 10;
        background: var(--theme_surface_color);
        border-radius: 50%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .testimonials-slider .slick-prev:hover,
    .testimonials-slider .slick-next:hover {
        background: var(--primary-color);
        transform: scale(1.1);
    }

    .testimonials-slider .slick-prev:before,
    .testimonials-slider .slick-next:before {
        font-size: 20px;
        color: var(--primary-color);
    }

    .testimonials-slider .slick-prev:hover:before,
    .testimonials-slider .slick-next:hover:before {
        color: white;
    }

    .testimonials-slider .slick-prev {
        left: -70px;
    }

    .testimonials-slider .slick-next {
        right: -70px;
    }

    /* Slick Dots */
    .testimonials-slider .slick-dots {
        bottom: -50px;
    }

    .testimonials-slider .slick-dots li button:before {
        font-size: 12px;
        color: #d9d9d9;
        transition: all 0.3s ease;
    }

    .testimonials-slider .slick-dots li.slick-active button:before {
        color: var(--accent-color);
        font-size: 14px;
    }

    /* Responsive Design */
    @media screen and (max-width: 1200px) {
        .testimonials-slider .slick-prev {
            left: 0;
        }

        .testimonials-slider .slick-next {
            right: 0;
        }
    }

    @media screen and (max-width: 991px) {
        .testimonials-wrapper {
            padding: 80px 0;
        }

        .testimonials-main-title {
            font-size: 38px;
        }

        .testimonial-card {
            padding: 25px;
        }

        .testimonials-slider .slick-prev {
            left: -40px;
        }

        .testimonials-slider .slick-next {
            right: -40px;
        }
    }

    @media screen and (max-width: 768px) {
        .testimonials-wrapper {
            padding: 60px 0;
        }

        .testimonials-main-title {
            font-size: 32px;
        }

        .testimonials-title-wrapper {
            margin-bottom: 50px;
        }

        .testimonial-card {
            padding: 20px;
        }

        .testimonial-text {
            font-size: 14px;
        }

        .testimonials-slider .slick-prev {
            left: -30px;
        }

        .testimonials-slider .slick-next {
            right: -30px;
        }

        .testimonials-slider .slick-prev,
        .testimonials-slider .slick-next {
            width: 40px;
            height: 40px;
        }
    }

    @media screen and (max-width: 576px) {
        .testimonials-main-title {
            font-size: 28px;
        }

        .testimonial-card {
            padding: 18px;
        }

        .testimonial-quote-icon {
            font-size: 36px;
        }

        .testimonial-author-image {
            width: 50px;
            height: 50px;
        }

        .testimonials-slider .slick-prev,
        .testimonials-slider .slick-next {
            width: 35px;
            height: 35px;
        }

        .testimonials-slider .slick-prev:before,
        .testimonials-slider .slick-next:before {
            font-size: 16px;
        }
    }
</style>

<?php   
if (!empty($testimonials)) {
    foreach ($testimonials as $testi) {
        if ($testi['section_id'] == $myurl['section_id']) {
            if (isset($testi['section_id'])) {
                unset($testi['section_id']);
            }
            if (isset($testi['sub_menu_name'])) {
                $datasubmenu = $testi['sub_menu_name'];
                unset($testi['sub_menu_name']);
            } else {
                $datasubmenu = "What Our Clients Say";
            }
?>
<section class="testimonials-wrapper" id="testimonial-section">
    <!-- Animated Background -->
    <div class="testimonials-bg-pattern"></div>

    <div class="container">
        <!-- Section Title -->
        <div class="testimonials-title-wrapper">
            <h2 class="testimonials-main-title"><?= $datasubmenu ?></h2>
            <div class="testimonials-divider"></div>
            <p class="testimonials-subtitle">Read what our satisfied clients have to say about our services</p>
        </div>

        <!-- Testimonials Slider -->
        <div class="testimonials-slider">
            <div class="testimonials-container">
                <?php foreach ($testi as $testimonial) {
                    $img = !empty($testimonial['image']) 
                        ? base_url() . '/public/uploads/testimonial_images/' . $testimonial['image'] 
                        : base_url() . '/public/assets/img/empty.png';
                    
                    // Truncate text for preview
                    $preview_text = strlen($testimonial['description']) > 150 
                        ? substr($testimonial['description'], 0, 150) . '...' 
                        : $testimonial['description'];
                ?>
                    <div class="testimonial-card">
                        <!-- Quote Icon -->
                        <i class="fas fa-quote-left testimonial-quote-icon"></i>

                        <!-- Testimonial Text -->
                        <p class="testimonial-text">
                            <?= $preview_text; ?>
                        </p>

                        <!-- Read More Button -->
                        <?php if (strlen($testimonial['description']) > 150) { ?>
                            <a class="testimonial-read-more" href="javascript:void(0)" 
                               onclick="testimonialModal('<?php echo base64_encode($testimonial['description']); ?>', '<?= $testimonial['name']; ?>')">
                                Read full review
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php } ?>

                        <!-- Author Info -->
                        <div class="testimonial-author">
                            <img src="<?= $img; ?>" alt="<?= $testimonial['name']; ?>" class="testimonial-author-image">
                            <div class="testimonial-author-info">
                                <h6><?= $testimonial['name']; ?></h6>
                                <span><?= date('d M Y', strtotime($testimonial['created_at'])); ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<script>
    // Initialize Slick Slider
    document.addEventListener('DOMContentLoaded', function() {
        if (document.querySelector('.testimonials-slider')) {
            $('.testimonials-slider .testimonials-container').slick({
                dots: true,
                infinite: true,
                speed: 800,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: true,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: true,
                            dots: true
                        }
                    }
                ]
            });
        }
    });

    // Testimonial Modal
    function testimonialModal(description, name = '') {
        const decodedDescription = atob(description);
        const modalHTML = `
            <div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content" style="border: none; border-radius: 20px;">
                        <div class="modal-header" style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); border: none; padding: 30px;">
                            <h5 class="modal-title" style="color: white; font-weight: 700;">
                                <i class="fas fa-quote-left me-2"></i>Client Review
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" style="padding: 40px; font-size: 16px; line-height: 1.8; color: #6c757d;">
                            <i class="fas fa-quote-left" style="font-size: 48px; color: var(--accent-color); opacity: 0.2; margin-bottom: 20px;"></i>
                            <p>${decodedDescription}</p>
                            ${name ? '<p style="text-align: right; margin-top: 30px; color: var(--primary-color); font-weight: 600;">— ' + name + '</p>' : ''}
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Remove existing modal if present
        const existingModal = document.getElementById('testimonialModal');
        if (existingModal) existingModal.remove();

        // Insert and show modal
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        const modal = new bootstrap.Modal(document.getElementById('testimonialModal'));
        modal.show();

        // Remove modal after hide
        document.getElementById('testimonialModal').addEventListener('hidden.bs.modal', function() {
            this.remove();
        });
    }
</script>

<?php
        }
    }
}
?>
