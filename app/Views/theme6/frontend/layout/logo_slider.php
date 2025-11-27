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

<style>
    /* ============================================= */
    /* INDUSTRIAL AMENITIES SECTION - DYNAMIC COLORS */
    /* ============================================= */

    /* Amenities Wrapper */
    .amenities-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--bg-primary);
        overflow: hidden;
    }

    /* Animated Background Pattern */
    .amenities-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.04;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--secondary-color) 0%, transparent 50%);
        animation: amenities-pattern-float 20s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes amenities-pattern-float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, 30px); }
    }

    /* Amenities Content Container */
    .amenities-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Section Title */
    .amenities-section-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 60px;
        letter-spacing: -1px;
        position: relative;
        z-index: 1;
        text-transform: uppercase;
    }

    /* Amenities Grid */
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 32px;
        position: relative;
        z-index: 1;
    }

    /* Amenity Item */
    .amenity-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        padding: 32px 24px;
        background: var(--bg-surface);
        border: 2px solid var(--border-color-light);
        border-radius: 16px;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        position: relative;
        overflow: hidden;
        min-height: 280px;
        animation: amenity-slide-in 0.6s ease-out forwards;
    }

    @keyframes amenity-slide-in {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hover State */
    .amenity-item:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 32px rgba(var(--primary-rgb), 0.15);
        transform: translateY(-8px);
    }

    .amenity-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, 
            rgba(var(--primary-rgb), 0.03) 0%, 
            rgba(var(--secondary-rgb), 0.03) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .amenity-item:hover::before {
        opacity: 1;
    }

    /* Icon Wrapper */
    .amenity-icon-wrapper {
        width: 120px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        position: relative;
        z-index: 2;
    }

    /* Icon Container with Background */
    .amenity-icon {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, 
            rgba(var(--primary-rgb), 0.1) 0%, 
            rgba(var(--secondary-rgb), 0.05) 100%);
        border-radius: 50%;
        border: 2px solid var(--border-color-light);
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .amenity-icon::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .amenity-item:hover .amenity-icon {
        border-color: var(--primary-color);
        box-shadow: 0 0 24px rgba(var(--primary-rgb), 0.2);
        transform: scale(1.1) rotate(5deg);
    }

    .amenity-item:hover .amenity-icon::before {
        opacity: 0.1;
    }

    .amenity-icon img {
        width: 70%;
        height: 70%;
        object-fit: contain;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        transition: filter 0.3s ease;
    }

    .amenity-item:hover .amenity-icon img {
        filter: drop-shadow(0 4px 12px rgba(var(--primary-rgb), 0.25));
    }

    /* Amenity Name */
    .amenity-name {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
        text-align: center;
        margin: 0;
        position: relative;
        z-index: 2;
        line-height: 1.4;
        transition: color 0.3s ease;
        letter-spacing: -0.5px;
    }

    .amenity-item:hover .amenity-name {
        color: var(--primary-color);
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .amenities-section-title {
            font-size: 42px;
        }

        .amenities-grid {
            gap: 28px;
        }

        .amenity-item {
            padding: 28px 20px;
            min-height: 260px;
        }

        .amenity-icon-wrapper {
            width: 100px;
            height: 100px;
        }

        .amenity-name {
            font-size: 16px;
        }
    }

    @media (max-width: 991px) {
        .amenities-wrapper {
            padding: 80px 0;
        }

        .amenities-section-title {
            font-size: 36px;
            margin-bottom: 50px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 24px;
        }

        .amenity-item {
            padding: 24px 16px;
            min-height: 240px;
        }
    }

    @media (max-width: 768px) {
        .amenities-wrapper {
            padding: 60px 0;
        }

        .amenities-section-title {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 20px;
        }

        .amenity-item {
            padding: 20px 12px;
            min-height: 220px;
        }

        .amenity-icon-wrapper {
            width: 90px;
            height: 90px;
            margin-bottom: 16px;
        }

        .amenity-name {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .amenities-wrapper {
            padding: 50px 0;
        }

        .amenities-section-title {
            font-size: 28px;
            margin-bottom: 32px;
        }

        .amenities-grid {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 16px;
        }

        .amenity-item {
            padding: 16px 8px;
            min-height: 200px;
        }

        .amenity-icon-wrapper {
            width: 80px;
            height: 80px;
            margin-bottom: 12px;
        }

        .amenity-name {
            font-size: 12px;
        }

        .amenities-section-title {
            letter-spacing: 0;
        }
    }

    @media (max-width: 400px) {
        .amenities-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .amenity-item {
            padding: 12px 6px;
            border-radius: 12px;
        }

        .amenity-icon-wrapper {
            width: 70px;
            height: 70px;
        }

        .amenity-name {
            font-size: 11px;
        }
    }

    /* Accessibility */
    .amenity-item:focus-visible {
        outline: var(--focus-outline);
        outline-offset: 2px;
    }

    /* Animation Delays */
    .amenity-item[data-aos-delay="0"] { animation-delay: 0s; }
    .amenity-item[data-aos-delay="100"] { animation-delay: 0.1s; }
    .amenity-item[data-aos-delay="200"] { animation-delay: 0.2s; }
    .amenity-item[data-aos-delay="300"] { animation-delay: 0.3s; }
</style>

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

            // Add keyboard support
            item.setAttribute('tabindex', '0');
            item.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    });
</script>
