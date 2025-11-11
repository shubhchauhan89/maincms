<?php
// Layout configuration
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;
$hasImage = $hasImage ?? 'yes';

// Parse features data
$features = [];
if (!empty($custom['features_data'])) {
    $features = is_array($custom['features_data']) 
        ? $custom['features_data'] 
        : json_decode($custom['features_data'], true);
}

// Determine layout class
$layoutClass = 'layout-full';
if ($hasImage === "yes") {
    if ($isStretch) {
        $layoutClass = $imageOnLeft ? 'layout-stretch-left' : 'layout-stretch-right';
    } else {
        $layoutClass = $imageOnLeft ? 'layout-normal-left' : 'layout-normal-right';
    }
}
?>

<style>
    /* ===== REVOLUTIONARY MEDICAL FEATURES SHOWCASE ===== */
    
    .medical-features-showcase-wrapper {
        position: relative;
        padding: 150px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated gradient background */
    .medical-features-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.08;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(135deg, var(--medical-teal, #008080) 0%, transparent 50%),
            linear-gradient(225deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(315deg, var(--medical-teal, #008080) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: features-bg-shift 25s ease infinite;
    }

    @keyframes features-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Main Container */
    .medical-features-container {
        position: relative;
        z-index: 1;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Grid Layouts */
    .medical-features-grid {
        display: grid;
        align-items: center;
        gap: 80px;
    }

    .medical-features-grid.layout-full {
        grid-template-columns: 1fr;
    }

    .medical-features-grid.layout-normal-left {
        grid-template-columns: 380px 1fr;
    }

    .medical-features-grid.layout-normal-right {
        grid-template-columns: 1fr 380px;
    }

    .medical-features-grid.layout-stretch-left {
        grid-template-columns: 1fr 1fr;
        height: 700px;
    }

    .medical-features-grid.layout-stretch-right {
        grid-template-columns: 1fr 1fr;
        height: 700px;
    }

    .medical-features-grid.layout-normal-left .medical-features-image-section,
    .medical-features-grid.layout-stretch-left .medical-features-image-section {
        order: -1;
    }

    /* Features Section */
    .medical-features-section {
        position: relative;
        z-index: 2;
    }

    .medical-features-inner {
        position: relative;
    }

    /* Heading */
    .medical-features-heading {
        font-size: 52px;
        font-weight: 900;
        margin-bottom: 50px;
        letter-spacing: -1px;
        color: var(--text-dark);
        line-height: 1.2;
    }

    .medical-features-heading span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Features Grid */
    .medical-features-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    /* Feature Card */
    .medical-feature-item {
        position: relative;
        padding: 30px;
        background: var(--theme_surface_color);
        border-radius: 20px;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        overflow: hidden;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .medical-feature-item::before {
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

    .medical-feature-item:hover::before {
        transform: scaleX(1);
    }

    .medical-feature-item:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 70px rgba(0, 128, 128, 0.15);
        border-color: rgba(0, 128, 128, 0.2);
        background: linear-gradient(135deg, var(--theme_surface_color) 0%, rgba(0, 128, 128, 0.03) 100%);
    }

    /* Feature Icon Container */
    .medical-feature-icon-wrapper {
        position: relative;
        flex-shrink: 0;
    }

    .medical-feature-icon {
        width: 70px;
        height: 70px;
        border-radius: 15px;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.15), rgba(0, 61, 122, 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        color: var(--medical-teal, #008080);
        transition: all 0.4s ease;
    }

    .medical-feature-item:hover .medical-feature-icon {
        background: linear-gradient(135deg, var(--medical-teal, #008080), var(--medical-blue, #003d7a));
        color: white;
        transform: scale(1.15) rotate(-10deg);
        box-shadow: 0 10px 30px rgba(0, 128, 128, 0.3);
    }

    /* Feature Content */
    .medical-feature-content {
        flex: 1;
    }

    .medical-feature-title {
        font-size: 18px;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 8px;
        transition: color 0.3s ease;
    }

    .medical-feature-item:hover .medical-feature-title {
        color: var(--medical-teal, #008080);
    }

    .medical-feature-description {
        font-size: 13px;
        color: #6c757d;
        line-height: 1.6;
        display: none;
    }

    .medical-feature-item:hover .medical-feature-description {
        display: block;
    }

    /* Counter Badge */
    .medical-feature-counter {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--medical-teal, #008080), #006666);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        font-size: 20px;
        box-shadow: 0 5px 20px rgba(0, 128, 128, 0.3);
        opacity: 0;
        transform: scale(0);
        transition: all 0.4s ease;
    }

    .medical-feature-item:hover .medical-feature-counter {
        opacity: 1;
        transform: scale(1);
    }

    /* Image Section */
    .medical-features-image-section {
        position: relative;
        height: 100%;
    }

    .medical-features-image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
    }

    .layout-normal-left .medical-features-image-wrapper,
    .layout-normal-right .medical-features-image-wrapper {
        height: 400px;
    }

    .medical-features-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-features-image-wrapper:hover .medical-features-image {
        transform: scale(1.12) rotate(-2deg);
    }

    .medical-features-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 61, 122, 0.25), transparent);
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .medical-features-image-wrapper:hover .medical-features-image-overlay {
        opacity: 1;
    }

    /* Floating Elements */
    .medical-features-float-element {
        position: absolute;
        border-radius: 50%;
        opacity: 0.1;
        pointer-events: none;
    }

    .medical-features-float-1 {
        width: 200px;
        height: 200px;
        background: var(--medical-teal, #008080);
        top: -50px;
        left: -100px;
        animation: float-element 8s ease-in-out infinite;
    }

    .medical-features-float-2 {
        width: 150px;
        height: 150px;
        background: var(--medical-blue, #003d7a);
        bottom: 50px;
        right: -80px;
        animation: float-element 10s ease-in-out infinite reverse;
    }

    @keyframes float-element {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, -40px); }
    }

    /* Animations */
    .medical-feature-item-animate {
        opacity: 0;
        animation: feature-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes feature-fadeInUp {
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
        .medical-features-heading {
            font-size: 44px;
        }
        .medical-features-grid {
            gap: 60px;
        }
        .medical-features-list {
            gap: 25px;
        }
    }

    @media (max-width: 991px) {
        .medical-features-showcase-wrapper {
            padding: 100px 0;
        }
        .medical-features-heading {
            font-size: 38px;
        }
        .medical-features-grid.layout-normal-left,
        .medical-features-grid.layout-normal-right,
        .medical-features-grid.layout-stretch-left,
        .medical-features-grid.layout-stretch-right {
            grid-template-columns: 1fr;
            height: auto;
        }
        .medical-features-grid.layout-normal-left .medical-features-image-section,
        .medical-features-grid.layout-stretch-left .medical-features-image-section {
            order: 0;
        }
        .medical-features-image-wrapper {
            height: 300px;
        }
        .medical-features-list {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .medical-features-showcase-wrapper {
            padding: 80px 0;
        }
        .medical-features-heading {
            font-size: 32px;
            margin-bottom: 35px;
        }
        .medical-feature-item {
            padding: 24px;
            gap: 15px;
        }
        .medical-feature-icon {
            width: 60px;
            height: 60px;
            font-size: 28px;
        }
        .medical-feature-title {
            font-size: 16px;
        }
    }

    @media (max-width: 576px) {
        .medical-features-heading {
            font-size: 28px;
        }
        .medical-feature-item {
            padding: 20px;
        }
        .medical-features-image-wrapper {
            height: 250px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-feature-item {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-feature-item:hover {
        background: linear-gradient(135deg, #1a1f2e 0%, rgba(0, 128, 128, 0.08) 100%);
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL FEATURES SHOWCASE ===== -->
<section class="medical-features-showcase-wrapper">
    <!-- Animated Background -->
    <div class="medical-features-bg"></div>

    <!-- Floating Elements -->
    <div class="medical-features-float-element medical-features-float-1"></div>
    <div class="medical-features-float-element medical-features-float-2"></div>

    <div class="medical-features-container">
        <div class="medical-features-grid <?= $layoutClass; ?>">
            
            <!-- Features Section -->
            <div class="medical-features-section"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="medical-features-inner">
                    <!-- Heading -->
                    <h2 class="medical-features-heading">
                        <?= htmlspecialchars($custom['heading'] ?? 'Our Features'); ?>
                        <?php if (strpos($custom['heading'] ?? '', 'Features') !== false): ?>
                            <span></span>
                        <?php endif; ?>
                    </h2>

                    <!-- Features Grid -->
                    <div class="medical-features-list">
                        <?php 
                        $featureCount = 1;
                        if (!empty($features)): 
                            foreach ($features as $index => $feature): 
                        ?>
                            <div class="medical-feature-item medical-feature-item-animate" 
                                 style="animation-delay: <?= ($index * 100); ?>ms;"
                                 data-aos="fade-in-up" 
                                 data-aos-delay="<?= ($index % 4) * 80; ?>">
                                
                                <div class="medical-feature-icon-wrapper">
                                    <div class="medical-feature-icon">
                                        <i class="fas <?= htmlspecialchars($feature['icon'] ?? 'fa-star'); ?>"></i>
                                    </div>
                                    <div class="medical-feature-counter">
                                        <?= $featureCount; ?>
                                    </div>
                                </div>

                                <div class="medical-feature-content">
                                    <h4 class="medical-feature-title">
                                        <?= htmlspecialchars($feature['title'] ?? 'Feature'); ?>
                                    </h4>
                                    <p class="medical-feature-description">
                                        <?= htmlspecialchars($feature['description'] ?? 'Professional healthcare feature'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php 
                            $featureCount++;
                            endforeach; 
                        else: 
                        ?>
                            <!-- Fallback Features -->
                            <div class="medical-feature-item medical-feature-item-animate" style="animation-delay: 0ms;">
                                <div class="medical-feature-icon-wrapper">
                                    <div class="medical-feature-icon">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <div class="medical-feature-counter">1</div>
                                </div>
                                <div class="medical-feature-content">
                                    <h4 class="medical-feature-title">Expert Care</h4>
                                    <p class="medical-feature-description">Professional healthcare team</p>
                                </div>
                            </div>

                            <div class="medical-feature-item medical-feature-item-animate" style="animation-delay: 100ms;">
                                <div class="medical-feature-icon-wrapper">
                                    <div class="medical-feature-icon">
                                        <i class="fas fa-heartbeat"></i>
                                    </div>
                                    <div class="medical-feature-counter">2</div>
                                </div>
                                <div class="medical-feature-content">
                                    <h4 class="medical-feature-title">Patient Focus</h4>
                                    <p class="medical-feature-description">Your health is our priority</p>
                                </div>
                            </div>

                            <div class="medical-feature-item medical-feature-item-animate" style="animation-delay: 200ms;">
                                <div class="medical-feature-icon-wrapper">
                                    <div class="medical-feature-icon">
                                        <i class="fas fa-hospital-alt"></i>
                                    </div>
                                    <div class="medical-feature-counter">3</div>
                                </div>
                                <div class="medical-feature-content">
                                    <h4 class="medical-feature-title">Modern Facility</h4>
                                    <p class="medical-feature-description">State-of-the-art equipment</p>
                                </div>
                            </div>

                            <div class="medical-feature-item medical-feature-item-animate" style="animation-delay: 300ms;">
                                <div class="medical-feature-icon-wrapper">
                                    <div class="medical-feature-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="medical-feature-counter">4</div>
                                </div>
                                <div class="medical-feature-content">
                                    <h4 class="medical-feature-title">24/7 Support</h4>
                                    <p class="medical-feature-description">Always available for you</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="medical-features-image-section"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="medical-features-image-wrapper">
                    <img src="<?= $img ?? base_url() . '/public/assets/img/default-section.jpg'; ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Features'); ?>" 
                         class="medical-features-image"
                         loading="lazy">
                    <div class="medical-features-image-overlay"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }
    });
</script>

<?php
?>
