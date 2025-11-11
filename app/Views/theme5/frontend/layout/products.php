<?php
$heading = "";
if (!empty($products)) {    
    foreach ($products as $product) {
        $heading = $product['sub_menu_name'];
        unset($product['sub_menu_name']);
        if ($product['section_id'] == $myurl['section_id']) {
            if (isset($product['section_id'])) {
                unset($product['section_id']);
            }
?>

<style>
    /* ===== INNOVATIVE MEDICAL SERVICES SECTION ===== */
    
    .medical-services-innovative-wrapper {
        position: relative;
        padding: 120px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Blob Background */
    .medical-services-blob-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0.15;
        pointer-events: none;
        background: 
            radial-gradient(ellipse 1000px 400px at 20% 30%, var(--medical-teal, #008080), transparent 50%),
            radial-gradient(ellipse 1000px 400px at 80% 70%, var(--medical-blue, #003d7a), transparent 50%),
            radial-gradient(ellipse 800px 300px at 50% 0%, rgba(0, 128, 128, 0.3), transparent 60%);
        animation: blob-morph 15s ease-in-out infinite;
    }

    @keyframes blob-morph {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        33% {
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 30px) scale(0.9);
        }
    }

    /* Section Header */
    .medical-services-header {
        position: relative;
        z-index: 1;
        margin-bottom: 80px;
        text-align: center;
    }

    .medical-services-title {
        font-size: 52px;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -2px;
    }

    .medical-services-title span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .medical-services-description {
        font-size: 16px;
        color: #6c757d;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Services Grid - Masonry Style */
    .medical-services-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        grid-auto-rows: minmax(420px, auto);
    }

    .medical-services-grid .service-item:nth-child(3n+1) {
        grid-column: span 1;
        grid-row: span 2;
    }

    .medical-services-grid .service-item:nth-child(3n) {
        grid-column: span 1;
        grid-row: span 1;
    }

    /* ===== UNIQUE SERVICE CARD DESIGNS ===== */

    /* Type 1: Large Featured Card */
    .service-item.featured {
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        color: white;
        border-radius: 20px;
        padding: 40px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 128, 128, 0.2);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        cursor: pointer;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .service-item.featured::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        opacity: 0;
        transition: all 0.6s ease;
    }

    .service-item.featured:hover {
        transform: translateY(-20px);
        box-shadow: 0 40px 80px rgba(0, 128, 128, 0.3);
    }

    .service-item.featured:hover::before {
        top: -20%;
        right: -20%;
        opacity: 1;
    }

    /* Type 2: Modern Gradient Card */
    .service-item.modern {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 30px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border: 2px solid rgba(0, 128, 128, 0.1);
        transition: all 0.4s ease;
        display: flex;
        flex-direction: column;
    }

    .service-item.modern::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.5s ease;
        transform-origin: left;
    }

    .service-item.modern:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 30px 70px rgba(0, 128, 128, 0.15);
        border-color: rgba(0, 128, 128, 0.2);
    }

    .service-item.modern:hover::before {
        transform: scaleX(1);
    }

    /* Service Icon Container */
    .service-icon-container {
        width: 70px;
        height: 70px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        font-size: 32px;
        position: relative;
        z-index: 2;
    }

    .service-item.featured .service-icon-container {
        background: rgba(255, 255, 255, 0.25);
        color: white;
    }

    .service-item.modern .service-icon-container {
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 61, 122, 0.1));
        color: var(--medical-teal, #008080);
    }

    /* Service Title */
    .service-title {
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 12px;
        line-height: 1.4;
        transition: color 0.3s ease;
        text-decoration: none;
        display: block;
    }

    .service-item.featured .service-title {
        color: white;
        font-size: 24px;
    }

    .service-item.modern .service-title {
        color: var(--text-dark);
    }

    .service-item.modern:hover .service-title {
        color: var(--medical-teal, #008080);
    }

    /* Service Description */
    .service-description {
        font-size: 13px;
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .service-item.featured .service-description {
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
    }

    .service-item.modern .service-description {
        color: #6c757d;
    }

    /* Service Meta Info */
    .service-meta {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        flex-wrap: wrap;
    }

    .service-meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .service-item.featured .service-meta-item {
        color: rgba(255, 255, 255, 0.8);
    }

    .service-item.modern .service-meta-item {
        color: var(--medical-teal, #008080);
    }

    .service-meta-item i {
        font-size: 13px;
    }

    /* Service Features */
    .service-features-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 15px;
    }

    .service-feature-item {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: 12px;
    }

    .service-item.featured .service-feature-item {
        color: rgba(255, 255, 255, 0.85);
    }

    .service-item.modern .service-feature-item {
        color: #6c757d;
    }

    .service-feature-item i {
        color: var(--trust-green, #28a745);
        margin-top: 2px;
        flex-shrink: 0;
    }

    /* Service Price Badge */
    .service-price-badge {
        display: inline-block;
        padding: 8px 14px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .service-item.featured .service-price-badge {
        background: rgba(255, 255, 255, 0.2);
        color: white;
    }

    .service-item.modern .service-price-badge {
        background: linear-gradient(135deg, rgba(0, 128, 128, 0.1), rgba(0, 128, 128, 0.05));
        color: var(--medical-teal, #008080);
    }

    /* CTA Button */
    .service-cta-button {
        width: 100%;
        padding: 14px 20px;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .service-item.featured .service-cta-button {
        background: white;
        color: var(--medical-teal, #008080);
    }

    .service-item.featured .service-cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .service-item.modern .service-cta-button {
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        color: white;
    }

    .service-item.modern .service-cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 128, 128, 0.3);
    }

    .service-cta-button i {
        margin-right: 6px;
    }

    /* Responsive Grid */
    @media (max-width: 1200px) {
        .medical-services-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-auto-rows: minmax(400px, auto);
            gap: 25px;
        }

        .medical-services-grid .service-item:nth-child(3n+1) {
            grid-row: span 1;
        }

        .medical-services-title {
            font-size: 42px;
        }
    }

    @media (max-width: 991px) {
        .medical-services-innovative-wrapper {
            padding: 80px 0;
        }

        .medical-services-header {
            margin-bottom: 60px;
        }

        .medical-services-grid {
            grid-template-columns: repeat(2, 1fr);
            grid-auto-rows: minmax(380px, auto);
            gap: 20px;
        }

        .medical-services-title {
            font-size: 36px;
        }
    }

    @media (max-width: 768px) {
        .medical-services-innovative-wrapper {
            padding: 60px 0;
        }

        .medical-services-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .service-item {
            grid-row: span 1 !important;
        }

        .medical-services-title {
            font-size: 32px;
        }

        .service-icon-container {
            width: 60px;
            height: 60px;
            font-size: 28px;
        }
    }

    @media (max-width: 576px) {
        .medical-services-title {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .medical-services-description {
            font-size: 14px;
        }

        .service-item.featured {
            padding: 30px 20px;
        }

        .service-item.modern {
            padding: 20px;
        }
    }

    /* Dark Mode Support */
    body.theme-dark .service-item.modern {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .service-item.featured {
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, var(--medical-blue, #003d7a) 100%);
    }

    /* Animations */
    .service-item {
        opacity: 0;
        animation: service-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes service-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- ===== INNOVATIVE MEDICAL SERVICES SECTION ===== -->
<section class="medical-services-innovative-wrapper">
    <!-- Animated Blob Background -->
    <div class="medical-services-blob-background"></div>

    <div class="container">
        <!-- Section Header -->
        <div class="medical-services-header" data-aos="fade-down" data-aos-duration="800">
            <h2 class="medical-services-title">
                Our <span><?= $heading; ?></span>
            </h2>
            <p class="medical-services-description">
                Comprehensive healthcare solutions designed with your wellness in mind. Explore our specialized services and find the perfect care for you.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="medical-services-grid">
            <?php
            $cardIndex = 0;
            $isFeatured = false;
            
            foreach ($product as $p) {
                $serviceImage = !empty($p['main_image']) 
                    ? base_url() . "/public/uploads/product_images/" . $p['main_image'] 
                    : base_url() . "/public/assets/img/medical-service-default.jpg";

                $serviceUrl = base_url() . "/products/" . $p['menu_link'];
                $serviceName = htmlspecialchars($p['product_name']);
                $animationDelay = $cardIndex * 100;
                
                // Alternate between featured and modern cards
                $cardType = ($cardIndex % 3 === 0) ? 'featured' : 'modern';
                $cardIndex++;
            ?>
                <div class="service-item <?= $cardType; ?>" 
                     data-aos="fade-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;"
                     onclick="window.location.href='<?= $serviceUrl; ?>'">

                    <!-- Icon Container -->
                    <div class="service-icon-container">
                        <i class="fas fa-heartbeat"></i>
                    </div>

                    <!-- Service Title -->
                    <h3 class="service-title">
                        <?= $serviceName; ?>
                    </h3>

                    <!-- Service Description -->
                    <p class="service-description">
                        Premium healthcare services crafted to deliver exceptional results and patient satisfaction.
                    </p>

                    <!-- Meta Info -->
                    <div class="service-meta">
                        <?php if (!empty($p['specifications'])): ?>
                            <span class="service-meta-item">
                                <i class="fas fa-stethoscope"></i>
                                <?= htmlspecialchars(substr($p['specifications'], 0, 20)); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Features List -->
                    <?php if (!empty($p['key_point'])): ?>
                        <div class="service-features-list">
                            <div class="service-feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span><?= htmlspecialchars($p['key_point']); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Price Badge -->
                    <?php if (!empty($p['price_info'])): ?>
                        <div class="service-price-badge">
                            <i class="fas fa-tag me-1"></i>₹ <?= htmlspecialchars($p['price_info']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- CTA Button -->
                    <button class="service-cta-button" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        <i class="fas fa-calendar-check"></i>Book Now
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ===== APPOINTMENT MODAL ===== -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div style="background: var(--theme_surface_color); border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);">
            <div style="background: linear-gradient(135deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080)); color: white; padding: 25px 30px; border-radius: 20px 20px 0 0;">
                <h5 style="font-size: 22px; font-weight: 800; margin: 0;">
                    <i class="fas fa-calendar-check me-2"></i>Book Your Appointment
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <form id="appointmentForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; font-size: 13px; color: var(--text-dark); margin-bottom: 8px;">Full Name <span style="color: #dc3545;">*</span></label>
                                <input type="text" style="width: 100%; padding: 12px 15px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; background: #f8f9fa;" name="name" placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; font-size: 13px; color: var(--text-dark); margin-bottom: 8px;">Phone Number <span style="color: #dc3545;">*</span></label>
                                <input type="tel" style="width: 100%; padding: 12px 15px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; background: #f8f9fa;" name="phone" placeholder="Your phone number" required>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; color: var(--text-dark); margin-bottom: 8px;">Email Address <span style="color: #dc3545;">*</span></label>
                        <input type="email" style="width: 100%; padding: 12px 15px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; background: #f8f9fa;" name="email" placeholder="Your email address" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; font-size: 13px; color: var(--text-dark); margin-bottom: 8px;">Preferred Date <span style="color: #dc3545;">*</span></label>
                                <input type="date" style="width: 100%; padding: 12px 15px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; background: #f8f9fa;" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; font-size: 13px; color: var(--text-dark); margin-bottom: 8px;">Preferred Time</label>
                                <input type="time" style="width: 100%; padding: 12px 15px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; background: #f8f9fa;" name="time">
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; color: var(--text-dark); margin-bottom: 8px;">Additional Notes</label>
                        <textarea style="width: 100%; padding: 12px 15px; border: 2px solid #e9ecef; border-radius: 10px; font-size: 14px; background: #f8f9fa; resize: vertical; min-height: 100px;" name="message" placeholder="Tell us about your health concerns..."></textarea>
                    </div>
                </form>
            </div>
            <div style="padding: 20px 30px; background: #f8f9fa; border-radius: 0 0 20px 20px; display: flex; gap: 10px; justify-content: flex-end;">
                <button type="button" style="padding: 12px 30px; border: none; border-radius: 50px; background: #e9ecef; color: var(--text-dark); font-weight: 700; cursor: pointer;" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Cancel
                </button>
                <button type="submit" style="padding: 12px 30px; border: none; border-radius: 50px; background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%); color: white; font-weight: 700; cursor: pointer;" onclick="document.getElementById('appointmentForm').dispatchEvent(new Event('submit'));">
                    <i class="fas fa-paper-plane me-2"></i>Submit
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Initialize AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }

    // Form submission
    const appointmentForm = document.getElementById('appointmentForm');
    if (appointmentForm) {
        appointmentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your appointment request has been submitted. We will contact you soon.');
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
            if (modal) {
                modal.hide();
            }
            
            this.reset();
        });
    }

    // Staggered animation
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.service-item');
        items.forEach((item, index) => {
            item.style.animationDelay = (index * 100) + 'ms';
        });
    });
</script>

<?php
        }
    }
}
?>
