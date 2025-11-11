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

<style>
    /* Ultra Modern Services Section */
    .services-wrapper {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        overflow: hidden;
    }

    /* Animated Background */
    .services-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.04;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--accent-color) 0%, transparent 50%);
        animation: pattern-float 20s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes pattern-float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, 30px); }
    }

    /* Section Title */
    .services-section-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 70px;
        letter-spacing: -1px;
        position: relative;
        z-index: 1;
    }

    /* Services Grid */
    .services-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    /* Service Card */
    .service-card {
        background: var(--theme_surface_color);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        transform: scaleX(0);
        transition: transform 0.5s ease;
        transform-origin: left;
        z-index: 10;
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    /* Image Container */
    .service-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 280px;
        background: var(--theme_mode_color);
    }

    .service-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .service-card:hover .service-image {
        transform: scale(1.15) rotate(3deg);
    }

    /* Image Overlay */
    .service-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.6) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding: 30px;
        z-index: 2;
    }

    .service-card:hover .service-image-overlay {
        opacity: 1;
    }

    .service-overlay-button {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border: none;
        padding: 12px 32px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .service-overlay-button::before {
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

    .service-overlay-button:hover::before {
        width: 300px;
        height: 300px;
    }

    .service-overlay-button:hover {
        transform: scale(1.08);
    }

    /* Content Section */
    .service-content {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .service-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 0;
        line-height: 1.3;
        transition: color 0.3s ease;
        text-truncate;
    }

    .service-card:hover .service-title {
        color: var(--primary-color);
    }

    /* Service Description (optional) */
    .service-description {
        font-size: 14px;
        color: #6c757d;
        margin-top: 12px;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Icon Badge */
    .service-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 24px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .service-card:hover .service-icon {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        transform: scale(1.1) rotate(10deg);
    }

    /* Animation */
    .service-card-animate {
        opacity: 0;
        animation: slideInUp 0.6s ease-out forwards;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .services-section-title {
            font-size: 42px;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }
    }

    @media (max-width: 991px) {
        .services-wrapper {
            padding: 80px 0;
        }

        .services-section-title {
            font-size: 36px;
            margin-bottom: 50px;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .service-image-wrapper {
            height: 250px;
        }
    }

    @media (max-width: 768px) {
        .services-wrapper {
            padding: 60px 0;
        }

        .services-section-title {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
        }

        .service-image-wrapper {
            height: 220px;
        }

        .service-content {
            padding: 22px;
        }

        .service-title {
            font-size: 16px;
        }
    }

    @media (max-width: 576px) {
        .services-section-title {
            font-size: 28px;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }

        .service-image-wrapper {
            height: 250px;
        }

        .service-card {
            max-height: none;
        }
    }

    /* Legacy flip effect as fallback */
    .image-flip {
        position: relative;
    }

    .flip-0 {
        perspective: 1000px;
    }
</style>

<section class="services-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="services-bg-pattern"></div>

    <div class="container">
        <!-- Section Title -->
        <h2 class="services-section-title">
            <?= htmlspecialchars($heading); ?>
        </h2>

        <!-- Services Grid -->
        <div class="services-grid">
            <?php
            $cardIndex = 0;
            foreach ($service as $s) {
                $img = !empty($s['image']) 
                    ? base_url() . "/public/uploads/service_images/" . $s['image']
                    : base_url() . "/public/assets/img/services-img.jpg";
                
                $url = base_url() . '/services/' . $s['menu_link'];
                $serviceTitle = htmlspecialchars($s['service']);
                $animationDelay = $cardIndex * 100;
                $cardIndex++;
            ?>
                <div class="service-card service-card-animate" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;">

                    <!-- Image Container -->
                    <div class="service-image-wrapper">
                        <img src="<?= $img; ?>" 
                             alt="<?= $serviceTitle; ?>" 
                             class="service-image"
                             loading="lazy">
                        
                        <!-- Image Overlay with Button -->
                        <div class="service-image-overlay">
                            <a href="<?= $url; ?>" style="text-decoration: none;">
                                <button class="service-overlay-button" type="button">
                                    <i class="fas fa-arrow-right me-2"></i>Know More
                                </button>
                            </a>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="service-content">
                        <div>
                            <!-- Icon -->
                            <div class="service-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>

                            <!-- Title -->
                            <h5 class="service-title">
                                <?= $serviceTitle; ?>
                            </h5>

                            <!-- Optional Description -->
                            <?php if (!empty($s['description'])): ?>
                                <p class="service-description">
                                    <?= htmlspecialchars(substr($s['description'], 0, 100)); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php 
        }    
    }
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Add staggered animation delays
        const cards = document.querySelectorAll('.service-card-animate');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 100) + 'ms';
        });
    });
</script>
