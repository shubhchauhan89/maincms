<?php
// Layout configuration
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;
$hasImage = $hasImage ?? 'yes';

// Parse statistics data
$statistics = [];
if (!empty($custom['statistics_data'])) {
    $statistics = is_array($custom['statistics_data']) 
        ? $custom['statistics_data'] 
        : json_decode($custom['statistics_data'], true);
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
    /* ===== REVOLUTIONARY MEDICAL STATISTICS SHOWCASE ===== */
    
    .medical-statistics-showcase-wrapper {
        position: relative;
        padding: 150px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated gradient background */
    .medical-statistics-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.1;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(135deg, var(--medical-teal, #008080) 0%, transparent 50%),
            linear-gradient(225deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(315deg, var(--medical-teal, #008080) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: stats-bg-shift 30s ease infinite;
    }

    @keyframes stats-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Main Container */
    .medical-statistics-container {
        position: relative;
        z-index: 1;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Grid Layouts */
    .medical-statistics-grid {
        display: grid;
        align-items: center;
        gap: 80px;
    }

    .medical-statistics-grid.layout-full {
        grid-template-columns: 1fr;
    }

    .medical-statistics-grid.layout-normal-left {
        grid-template-columns: 380px 1fr;
    }

    .medical-statistics-grid.layout-normal-right {
        grid-template-columns: 1fr 380px;
    }

    .medical-statistics-grid.layout-stretch-left {
        grid-template-columns: 1fr 1fr;
        height: 700px;
    }

    .medical-statistics-grid.layout-stretch-right {
        grid-template-columns: 1fr 1fr;
        height: 700px;
    }

    .medical-statistics-grid.layout-normal-left .medical-statistics-image-section,
    .medical-statistics-grid.layout-stretch-left .medical-statistics-image-section {
        order: -1;
    }

    /* Statistics Section */
    .medical-statistics-section {
        position: relative;
        z-index: 2;
    }

    .medical-statistics-inner {
        position: relative;
    }

    /* Heading */
    .medical-statistics-heading {
        font-size: 52px;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -1px;
        color: var(--text-dark);
        line-height: 1.2;
    }

    .medical-statistics-heading span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Description */
    .medical-statistics-description {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
        margin-bottom: 50px;
        max-width: 600px;
    }

    /* Statistics Grid */
    .medical-statistics-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
    }

    /* Statistic Card */
    .medical-stat-item {
        position: relative;
        text-align: center;
        padding: 35px 25px;
        background: var(--theme_surface_color);
        border-radius: 20px;
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        overflow: hidden;
    }

    .medical-stat-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.05), rgba(0, 61, 122, 0.05));
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .medical-stat-item::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.6s ease;
        transform-origin: left;
    }

    .medical-stat-item:hover::after {
        transform: scaleX(1);
    }

    .medical-stat-item:hover::before {
        opacity: 1;
    }

    .medical-stat-item:hover {
        transform: translateY(-20px);
        box-shadow: 0 40px 100px rgba(0, 128, 128, 0.2);
        border-color: rgba(0, 128, 128, 0.2);
        background: linear-gradient(135deg, var(--theme_surface_color) 0%, rgba(0, 128, 128, 0.05) 100%);
    }

    /* Stat Number */
    .medical-stat-number {
        position: relative;
        z-index: 2;
        font-size: 52px;
        font-weight: 900;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 12px;
        transition: all 0.4s ease;
        line-height: 1;
    }

    .medical-stat-item:hover .medical-stat-number {
        font-size: 64px;
        transform: scale(1.1);
    }

    /* Stat Label */
    .medical-stat-label {
        position: relative;
        z-index: 2;
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
        transition: color 0.3s ease;
        line-height: 1.4;
    }

    .medical-stat-item:hover .medical-stat-label {
        color: var(--medical-teal, #008080);
    }

    /* Counter Animation */
    .medical-stat-counter {
        display: inline-block;
        width: 100%;
    }

    /* Floating Background Elements */
    .medical-statistics-accent-1 {
        position: absolute;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background: var(--medical-teal, #008080);
        opacity: 0.08;
        top: -80px;
        left: -100px;
        animation: float-stat-accent 12s ease-in-out infinite;
    }

    .medical-statistics-accent-2 {
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: var(--medical-blue, #003d7a);
        opacity: 0.08;
        bottom: -50px;
        right: -80px;
        animation: float-stat-accent 15s ease-in-out infinite reverse;
    }

    @keyframes float-stat-accent {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(40px, -50px); }
    }

    /* Image Section */
    .medical-statistics-image-section {
        position: relative;
        height: 100%;
    }

    .medical-statistics-image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
    }

    .layout-normal-left .medical-statistics-image-wrapper,
    .layout-normal-right .medical-statistics-image-wrapper {
        height: 400px;
    }

    .medical-statistics-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-statistics-image-wrapper:hover .medical-statistics-image {
        transform: scale(1.12) rotate(-2deg);
    }

    .medical-statistics-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 61, 122, 0.25), transparent);
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .medical-statistics-image-wrapper:hover .medical-statistics-image-overlay {
        opacity: 1;
    }

    /* Animations */
    .medical-stat-item-animate {
        opacity: 0;
        animation: stat-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes stat-fadeInUp {
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
        .medical-statistics-heading {
            font-size: 44px;
        }
        .medical-statistics-list {
            gap: 30px;
        }
        .medical-stat-number {
            font-size: 48px;
        }
    }

    @media (max-width: 991px) {
        .medical-statistics-showcase-wrapper {
            padding: 100px 0;
        }
        .medical-statistics-heading {
            font-size: 38px;
        }
        .medical-statistics-grid.layout-normal-left,
        .medical-statistics-grid.layout-normal-right,
        .medical-statistics-grid.layout-stretch-left,
        .medical-statistics-grid.layout-stretch-right {
            grid-template-columns: 1fr;
            height: auto;
        }
        .medical-statistics-grid.layout-normal-left .medical-statistics-image-section,
        .medical-statistics-grid.layout-stretch-left .medical-statistics-image-section {
            order: 0;
        }
        .medical-statistics-image-wrapper {
            height: 300px;
        }
        .medical-statistics-list {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .medical-statistics-showcase-wrapper {
            padding: 80px 0;
        }
        .medical-statistics-heading {
            font-size: 32px;
        }
        .medical-statistics-description {
            font-size: 14px;
            margin-bottom: 35px;
        }
        .medical-stat-item {
            padding: 28px 20px;
        }
        .medical-stat-number {
            font-size: 40px;
        }
        .medical-stat-label {
            font-size: 14px;
        }
        .medical-statistics-list {
            gap: 20px;
        }
    }

    @media (max-width: 576px) {
        .medical-statistics-heading {
            font-size: 28px;
        }
        .medical-statistics-list {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        .medical-stat-item {
            padding: 24px 16px;
        }
        .medical-stat-number {
            font-size: 36px;
        }
        .medical-statistics-image-wrapper {
            height: 250px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-stat-item {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-stat-item:hover {
        background: linear-gradient(135deg, #1a1f2e 0%, rgba(0, 128, 128, 0.08) 100%);
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL STATISTICS SHOWCASE ===== -->
<section class="medical-statistics-showcase-wrapper">
    <!-- Animated Background -->
    <div class="medical-statistics-bg"></div>

    <!-- Floating Accents -->
    <div class="medical-statistics-accent-1"></div>
    <div class="medical-statistics-accent-2"></div>

    <div class="medical-statistics-container">
        <div class="medical-statistics-grid <?= $layoutClass; ?>">
            
            <!-- Statistics Section -->
            <div class="medical-statistics-section"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="medical-statistics-inner">
                    <!-- Heading -->
                    <h2 class="medical-statistics-heading">
                        <?= htmlspecialchars($custom['heading'] ?? 'Our Impact'); ?>
                    </h2>

                    <!-- Description -->
                    <?php if (!empty($custom['description'])): ?>
                    <div class="medical-statistics-description">
                        <?= $custom['description']; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Statistics List -->
                    <div class="medical-statistics-list">
                        <?php 
                        if (!empty($statistics)): 
                            foreach ($statistics as $index => $stat): 
                        ?>
                            <div class="medical-stat-item medical-stat-item-animate" 
                                 style="animation-delay: <?= ($index * 100); ?>ms;"
                                 data-aos="zoom-in-up" 
                                 data-aos-delay="<?= ($index % 4) * 80; ?>">
                                
                                <div class="medical-stat-number">
                                    <?= htmlspecialchars($stat['number'] ?? '0'); ?>
                                </div>
                                <h4 class="medical-stat-label">
                                    <?= htmlspecialchars($stat['label'] ?? 'Statistic'); ?>
                                </h4>
                            </div>
                        <?php 
                            endforeach; 
                        else: 
                        ?>
                            <!-- Fallback Statistics -->
                            <div class="medical-stat-item medical-stat-item-animate" style="animation-delay: 0ms;">
                                <div class="medical-stat-number">500+</div>
                                <h4 class="medical-stat-label">Happy Patients</h4>
                            </div>

                            <div class="medical-stat-item medical-stat-item-animate" style="animation-delay: 100ms;">
                                <div class="medical-stat-number">25+</div>
                                <h4 class="medical-stat-label">Years Experience</h4>
                            </div>

                            <div class="medical-stat-item medical-stat-item-animate" style="animation-delay: 200ms;">
                                <div class="medical-stat-number">100%</div>
                                <h4 class="medical-stat-label">Satisfaction Rate</h4>
                            </div>

                            <div class="medical-stat-item medical-stat-item-animate" style="animation-delay: 300ms;">
                                <div class="medical-stat-number">24/7</div>
                                <h4 class="medical-stat-label">Support Available</h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="medical-statistics-image-section"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="medical-statistics-image-wrapper">
                    <img src="<?= $img ?? base_url() . '/public/assets/img/default-section.jpg'; ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Statistics'); ?>" 
                         class="medical-statistics-image"
                         loading="lazy">
                    <div class="medical-statistics-image-overlay"></div>
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
