<style>
    /* Ultra Modern Amenities Section */
    
    /* Amenities Wrapper */
    .amenities-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .amenities-bg-pattern {
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

    /* Content Container */
    .amenities-content {
        position: relative;
        z-index: 1;
    }

    /* Section Title */
    .amenities-section-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .amenities-subtitle {
        font-size: 16px;
        color: #6c757d;
        text-align: center;
        margin-bottom: 60px;
    }

    /* Amenities Grid */
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        /* margin-bottom: 40px; */
    }

    /* Amenity Item */
    .amenity-item {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
        animation: slideInUp 0.6s ease-out forwards;
    }

    .amenity-item:nth-child(1) { animation-delay: 0.05s; }
    .amenity-item:nth-child(2) { animation-delay: 0.1s; }
    .amenity-item:nth-child(3) { animation-delay: 0.15s; }
    .amenity-item:nth-child(4) { animation-delay: 0.2s; }
    .amenity-item:nth-child(5) { animation-delay: 0.25s; }
    .amenity-item:nth-child(n+6) { animation-delay: 0.3s; }

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

    /* Top Border Animation */
    .amenity-item::before {
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
        z-index: 10;
    }

    .amenity-item:hover::before {
        transform: scaleX(1);
    }

    /* Hover Effects */
    .amenity-item:hover {
        transform: translateY(-12px) scale(1.05);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
    }

    /* Icon Container */
    .amenity-icon-wrapper {
        margin-bottom: 18px;
    }

    .amenity-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .amenity-item:hover .amenity-icon {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        transform: scale(1.15) rotate(10deg);
    }

    .amenity-icon img {
        width: 50px;
        height: 50px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .amenity-item:hover .amenity-icon img {
        transform: scale(1.1);
        /* filter: brightness(0) invert(1); */
    }

    /* Amenity Name */
    .amenity-name {
        font-size: 15px;
        font-weight: 700;
        color: var(--text-dark);
        margin: 0;
        line-height: 1.4;
        transition: color 0.3s ease;
    }

    .amenity-item:hover .amenity-name {
        color: var(--primary-color);
    }

    /* Amenity Description (Optional) */
    .amenity-description {
        font-size: 12px;
        color: #adb5bd;
        margin-top: 8px;
        display: none;
    }

    .amenity-item:hover .amenity-description {
        display: block;
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Background Accent */
    .amenity-item::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .amenity-item:hover::after {
        bottom: -30px;
        right: -30px;
    }

    /* Category Tabs (Optional) */
    .amenities-tabs {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .amenities-tab {
        padding: 10px 24px;
        background: white;
        border: 2px solid #e9ecef;
        color: var(--text-dark);
        border-radius: 25px;
        font-weight: 600;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .amenities-tab:hover,
    .amenities-tab.active {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Stats Section */
    .amenities-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 60px;
        padding-top: 60px;
        border-top: 2px solid #e9ecef;
    }

    .amenity-stat {
        text-align: center;
    }

    .amenity-stat-number {
        font-size: 36px;
        font-weight: 800;
        color: var(--primary-color);
        margin-bottom: 8px;
    }

    .amenity-stat-label {
        font-size: 14px;
        color: #6c757d;
        font-weight: 600;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .amenities-section-title {
            font-size: 42px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        }
    }

    @media (max-width: 991px) {
        .amenities-wrapper {
            padding: 80px 0;
        }

        .amenities-section-title {
            font-size: 36px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 20px;
        }

        .amenity-item {
            padding: 25px 15px;
        }

        .amenity-icon {
            width: 70px;
            height: 70px;
        }

        .amenity-icon img {
            width: 45px;
            height: 45px;
        }

        .amenity-name {
            font-size: 14px;
        }
    }

    @media (max-width: 768px) {
        .amenities-wrapper {
            padding: 60px 0;
        }

        .amenities-section-title {
            font-size: 32px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
        }

        .amenity-item {
            padding: 20px 12px;
        }

        .amenity-icon {
            width: 60px;
            height: 60px;
        }

        .amenity-icon img {
            width: 40px;
            height: 40px;
        }

        .amenity-name {
            font-size: 13px;
        }

        .amenities-tabs {
            gap: 8px;
        }

        .amenities-tab {
            padding: 8px 16px;
            font-size: 12px;
        }

        .amenities-stats {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .amenities-section-title {
            font-size: 28px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        }

        .amenity-item {
            padding: 18px 10px;
        }

        .amenity-icon {
            width: 55px;
            height: 55px;
        }

        .amenity-icon img {
            width: 35px;
            height: 35px;
        }

        .amenity-name {
            font-size: 12px;
        }

        .amenities-stats {
            grid-template-columns: 1fr;
        }

        .amenity-stat-number {
            font-size: 28px;
        }
    }

    /* No Right-Click Protection */
    .amenity-item {
        user-select: none;
    }
</style>

<?php
// Get amenities title
$amenities_title = 'Our Amenities';

if (!empty($logo_slider) && is_array($logo_slider) && !empty($logo_slider[0])) {
    // Check if sub_menu_name exists in the first item
    if (isset($logo_slider[0]['sub_menu_name'])) {
        $amenities_title = $logo_slider[0]['sub_menu_name'];
    }
}

// Also check sort_order
foreach ($sort_order as $item) {
    if ($item['url_val'] === 'logo_slider' && !empty($item['title'])) {
        $amenities_title = $item['title'];
        break;
    }
}
?>

<section class="amenities-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="amenities-bg-pattern"></div>

    <div class="container amenities-content">
        <!-- Section Title -->
        <h2 class="amenities-section-title"><?= htmlspecialchars($amenities_title); ?></h2>

        <!-- Amenities Grid -->
        <div class="amenities-grid">
            <?php
            if (!empty($logo_slider) && is_array($logo_slider)) {
                $amenityIndex = 0;
                
                // Extract amenities from the first level of array
                $amenities = $logo_slider[0];
                
                foreach ($amenities as $key => $amenity) {
                    // Skip non-array items and section_id, sub_menu_name
                    if (!is_array($amenity) || $key === 'section_id' || $key === 'sub_menu_name') {
                        continue;
                    }

                    if (isset($amenity['image']) && isset($amenity['name'])) {
                        $img = !empty($amenity['image']) 
                            ? base_url() . '/public/uploads/logo_slider_images/' . $amenity['image']
                            : base_url() . '/public/assets/img/empty.png';
                        
                        $name = htmlspecialchars($amenity['name']);
                        $amenityIndex++;
            ?>
                        <div class="amenity-item" 
                             data-aos="zoom-in-up" 
                             data-aos-delay="<?= ($amenityIndex % 4) * 100; ?>">
                            
                            <!-- Icon Container -->
                            <div class="amenity-icon-wrapper">
                                <div class="amenity-icon">
                                    <img src="<?= $img; ?>" 
                                         alt="<?= $name; ?>" 
                                         loading="lazy"
                                         title="<?= $name; ?>">
                                </div>
                            </div>

                            <!-- Amenity Name -->
                            <h4 class="amenity-name"><?= $name; ?></h4>

                            
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Prevent right-click on amenity items
        document.querySelectorAll('.amenity-item').forEach(item => {
            item.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });
        });
    });
</script>
