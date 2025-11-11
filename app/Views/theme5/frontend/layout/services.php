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
    /* ===== REVOLUTIONARY MEDICAL SERVICES SECTION ===== */
    
    .medical-services-revolutionary-wrapper {
        position: relative;
        padding: 140px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated mesh gradient background */
    .medical-services-mesh-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.12;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(135deg, var(--medical-teal, #008080) 0%, transparent 50%),
            linear-gradient(225deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(315deg, var(--medical-teal, #008080) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: mesh-shift 20s ease infinite;
    }

    @keyframes mesh-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Section Header */
    .medical-services-header {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-bottom: 100px;
    }

    .medical-services-header::before {
        content: '';
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 80px;
        background: radial-gradient(circle, var(--medical-teal, #008080), transparent);
        border-radius: 50%;
        opacity: 0.3;
        filter: blur(30px);
    }

    .medical-services-header::after {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--medical-teal, #008080), transparent);
    }

    .medical-services-title {
        font-size: 58px;
        font-weight: 900;
        margin-bottom: 25px;
        letter-spacing: -2px;
        color: var(--text-dark);
        position: relative;
        z-index: 2;
    }

    .medical-services-title span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .medical-services-subtitle {
        font-size: 16px;
        color: #6c757d;
        max-width: 650px;
        margin: 0 auto;
        line-height: 1.8;
        position: relative;
        z-index: 2;
    }

    /* ===== INNOVATIVE SERVICES GRID ===== */
    .medical-services-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    /* ===== UNIQUE SERVICE CARD DESIGN ===== */
    .medical-service-card {
        position: relative;
        height: 500px;
        cursor: pointer;
        perspective: 1000px;
    }

    .medical-service-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transform-style: preserve-3d;
    }

    .medical-service-card:hover .medical-service-card-inner {
        transform: rotateY(180deg);
    }

    /* Front Face */
    .medical-service-card-front,
    .medical-service-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 25px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
    }

    .medical-service-card-front {
        background: linear-gradient(135deg, var(--theme_surface_color) 0%, rgba(0, 128, 128, 0.05) 100%);
        border: 2px solid rgba(0, 128, 128, 0.15);
        padding: 40px;
        position: relative;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
    }

    .medical-service-card-front::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.6s ease;
        transform-origin: left;
    }

    .medical-service-card:hover .medical-service-card-front::before {
        transform: scaleX(1);
    }

    /* Service Icon - Large Front */
    .medical-service-icon-large {
        width: 90px;
        height: 90px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.15), rgba(0, 61, 122, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 45px;
        color: var(--medical-teal, #008080);
        margin-bottom: 25px;
        transition: all 0.5s ease;
    }

    .medical-service-card:hover .medical-service-icon-large {
        transform: scale(1.1) rotate(-5deg);
        background: linear-gradient(135deg, var(--medical-teal, #008080), var(--medical-blue, #003d7a));
        color: white;
    }

    /* Front Content */
    .medical-service-front-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .medical-service-title-front {
        font-size: 24px;
        font-weight: 900;
        color: var(--text-dark);
        margin-bottom: 15px;
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .medical-service-card:hover .medical-service-title-front {
        color: var(--medical-teal, #008080);
    }

    .medical-service-description-front {
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .medical-service-cta-front {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 700;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--medical-teal, #008080);
        transition: all 0.3s ease;
    }

    .medical-service-card:hover .medical-service-cta-front {
        transform: translateX(5px);
    }

    .medical-service-cta-front i {
        transition: transform 0.3s ease;
    }

    .medical-service-card:hover .medical-service-cta-front i {
        transform: rotateY(180deg);
    }

    /* Back Face - Flip Card */
    .medical-service-card-back {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        transform: rotateY(180deg);
        box-shadow: 0 20px 60px rgba(0, 128, 128, 0.2);
        position: relative;
    }

    .medical-service-card-back::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        opacity: 0;
        animation: float-bubble 6s ease-in-out infinite;
    }

    @keyframes float-bubble {
        0%, 100% { transform: translate(0, 0); opacity: 0; }
        50% { opacity: 0.3; }
    }

    .medical-service-back-content {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .medical-service-icon-small {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        margin-bottom: 20px;
        backdrop-filter: blur(10px);
    }

    .medical-service-title-back {
        font-size: 22px;
        font-weight: 900;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .medical-service-features {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 25px;
        flex: 1;
    }

    .medical-service-feature {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 13px;
        line-height: 1.5;
        opacity: 0.95;
    }

    .medical-service-feature i {
        color: var(--trust-green, #28a745);
        font-weight: 700;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .medical-service-cta-back {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 24px;
        background: white;
        color: var(--medical-teal, #008080);
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.3s ease;
        width: fit-content;
    }

    .medical-service-cta-back:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 255, 255, 0.2);
    }

    /* Animations */
    .medical-service-card-animate {
        opacity: 0;
        animation: service-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes service-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-services-title {
            font-size: 48px;
        }
        .medical-services-grid {
            gap: 35px;
        }
        .medical-service-card {
            height: 480px;
        }
    }

    @media (max-width: 991px) {
        .medical-services-revolutionary-wrapper {
            padding: 100px 0;
        }
        .medical-services-title {
            font-size: 40px;
        }
        .medical-services-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        .medical-service-card {
            height: 450px;
        }
    }

    @media (max-width: 768px) {
        .medical-services-revolutionary-wrapper {
            padding: 80px 0;
        }
        .medical-services-title {
            font-size: 32px;
        }
        .medical-services-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
        .medical-service-card {
            height: 400px;
        }
        .medical-service-card-front,
        .medical-service-card-back {
            padding: 30px;
        }
        .medical-service-icon-large {
            width: 70px;
            height: 70px;
            font-size: 35px;
        }
    }

    @media (max-width: 576px) {
        .medical-services-title {
            font-size: 28px;
        }
        .medical-services-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .medical-service-card {
            height: 380px;
        }
        .medical-service-title-front {
            font-size: 20px;
        }
        .medical-service-card-front,
        .medical-service-card-back {
            padding: 25px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-service-card-front {
        background: linear-gradient(135deg, #1a1f2e 0%, rgba(0, 128, 128, 0.08) 100%);
        border-color: rgba(0, 128, 128, 0.2);
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL SERVICES SECTION ===== -->
<section class="medical-services-revolutionary-wrapper">
    <!-- Mesh Gradient Background -->
    <div class="medical-services-mesh-bg"></div>

    <div class="container">
        <!-- Header -->
        <div class="medical-services-header" data-aos="fade-down" data-aos-duration="900">
            <h2 class="medical-services-title">
                Our <span><?= htmlspecialchars($heading); ?></span>
            </h2>
            <p class="medical-services-subtitle">
                Comprehensive healthcare solutions with cutting-edge technology and compassionate care designed for your well-being.
            </p>
        </div>

        <!-- Services Grid with 3D Flip Cards -->
        <div class="medical-services-grid">
            <?php
            $cardIndex = 0;
            foreach ($service as $s) {
                $serviceTitle = htmlspecialchars($s['service'] ?? 'Service');
                $description = htmlspecialchars(substr($s['description'] ?? '', 0, 80));
                $url = base_url() . '/services/' . ($s['menu_link'] ?? '#');
                $animationDelay = $cardIndex * 100;
                $cardIndex++;
                
                // Array of feature points for back of card
                $features = [
                    '✓ Expert Healthcare Professionals',
                    '✓ Advanced Medical Technology',
                    '✓ Patient-Centric Care'
                ];
            ?>
                <div class="medical-service-card medical-service-card-animate" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;">

                    <!-- Card Inner (for 3D flip) -->
                    <div class="medical-service-card-inner">
                        
                        <!-- Front Face -->
                        <div class="medical-service-card-front">
                            <div class="medical-service-front-content">
                                <!-- Icon -->
                                <div class="medical-service-icon-large">
                                    <i class="fas fa-stethoscope"></i>
                                </div>

                                <!-- Title -->
                                <h3 class="medical-service-title-front">
                                    <?= $serviceTitle; ?>
                                </h3>

                                <!-- Description -->
                                <?php if (!empty($s['description'])): ?>
                                    <p class="medical-service-description-front">
                                        <?= $description; ?>...
                                    </p>
                                <?php endif; ?>
                            </div>

                            <!-- CTA -->
                            <div class="medical-service-cta-front">
                                <span>Hover to Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>

                        <!-- Back Face (Flip Side) -->
                        <div class="medical-service-card-back">
                            <div class="medical-service-back-content">
                                <!-- Small Icon -->
                                <div class="medical-service-icon-small">
                                    <i class="fas fa-heartbeat"></i>
                                </div>

                                <!-- Title -->
                                <h3 class="medical-service-title-back">
                                    <?= $serviceTitle; ?>
                                </h3>

                                <!-- Features -->
                                <div class="medical-service-features">
                                    <?php foreach ($features as $feature): ?>
                                        <div class="medical-service-feature">
                                            <i class="fas fa-check-circle"></i>
                                            <span><?= $feature; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- CTA Button -->
                                <a href="<?= $url; ?>" style="text-decoration: none;">
                                    <button class="medical-service-cta-back">
                                        <i class="fas fa-arrow-right"></i>Learn More
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }

        // Add staggered animation delays
        const cards = document.querySelectorAll('.medical-service-card-animate');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 100) + 'ms';
        });

        // 3D Flip functionality
        const flipCards = document.querySelectorAll('.medical-service-card-inner');
        flipCards.forEach(card => {
            card.style.transformStyle = 'preserve-3d';
        });
    });
</script>

<?php 
        }    
    }
}
?>
