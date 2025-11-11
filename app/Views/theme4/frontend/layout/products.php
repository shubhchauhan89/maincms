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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $heading; ?> - Properties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Ultra Modern Products Section */
        .products-section-wrapper {
            position: relative;
            padding: 100px 0;
            background: var(--theme_mode_color);
            overflow: hidden;
        }

        /* Animated Background Pattern */
        .products-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05;
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
        .products-section-title {
            font-size: 52px;
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

        /* Property Card */
        .property-card {
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

        .property-card::before {
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

        .property-card:hover::before {
            transform: scaleX(1);
        }

        .property-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
        }

        /* Image Container */
        .property-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 280px;
            background: #f0f0f0;
        }

        .property-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .property-card:hover .property-image {
            transform: scale(1.12) rotate(2deg);
        }

        /* Image Overlay */
        .property-image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, transparent 0%, rgba(0,0,0,0.4) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .property-card:hover .property-image-overlay {
            opacity: 1;
        }

        /* Status Badge */
        .property-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: white;
            padding: 10px 18px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            z-index: 2;
            animation: badge-float 2s ease-in-out infinite;
        }

        @keyframes badge-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        /* Content Section */
        .property-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .property-title {
            font-size: 20px;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 12px;
            line-height: 1.3;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .property-title:hover {
            color: var(--primary-color);
        }

        /* Location */
        .property-location {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #6c757d;
            margin-bottom: 18px;
            font-size: 14px;
            font-weight: 500;
        }

        .property-location i {
            color: var(--primary-color);
            font-size: 16px;
        }

        /* Features */
        .property-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .feature-badge {
            background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
            color: var(--primary-color);
            padding: 8px 14px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid rgba(var(--bs-primary-rgb), 0.2);
            transition: all 0.3s ease;
        }

        .feature-badge:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        .feature-badge i {
            margin-right: 6px;
        }

        /* Price Section */
        .property-price-section {
            margin-bottom: 20px;
            padding: 15px;
            background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
            border-radius: 12px;
            border-left: 4px solid var(--primary-color);
        }

        .property-price-label {
            font-size: 12px;
            color: #6c757d;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .property-price {
            font-size: 16px;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Inquiry Button */
        .property-inquiry-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border: none;
            color: white;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .property-inquiry-btn::before {
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

        .property-inquiry-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .property-inquiry-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
        }

        .property-inquiry-btn i {
            margin-right: 8px;
        }

        /* Modal Styles */
        .inquiry-modal-content {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .inquiry-modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border: none;
            padding: 30px;
        }

        .inquiry-modal-title {
            color: white;
            font-weight: 700;
            font-size: 24px;
        }

        .inquiry-form-group {
            margin-bottom: 20px;
        }

        .inquiry-form-group label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 10px;
            display: block;
        }

        .inquiry-form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 16px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .inquiry-form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            background: var(--theme_surface_color);
            box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.1);
        }

        /* Animations */
        .property-card-animate {
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
            .products-section-title {
                font-size: 42px;
            }

            .property-image-wrapper {
                height: 250px;
            }
        }

        @media (max-width: 991px) {
            .products-section-wrapper {
                padding: 80px 0;
            }

            .products-section-title {
                font-size: 36px;
            }

            .property-content {
                padding: 25px;
            }
        }

        @media (max-width: 768px) {
            .products-section-wrapper {
                padding: 60px 0;
            }

            .products-section-title {
                font-size: 28px;
                margin-bottom: 50px;
            }

            .property-image-wrapper {
                height: 220px;
            }

            .property-content {
                padding: 20px;
            }

            .property-title {
                font-size: 18px;
            }

            .property-price {
                font-size: 24px;
            }
        }

        @media (max-width: 576px) {
            .products-section-title {
                font-size: 24px;
            }

            .property-image-wrapper {
                height: 200px;
            }

            .property-badge {
                top: 10px;
                right: 10px;
                padding: 8px 12px;
                font-size: 10px;
            }

            .property-features {
                gap: 8px;
            }

            .feature-badge {
                padding: 6px 10px;
                font-size: 11px;
            }
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-color);
        }
    </style>
</head>
<body>
    <section class="products-section-wrapper">
        <!-- Animated Background -->
        <div class="products-bg-pattern"></div>

        <div class="container" data-aos="fade-up">
            <!-- Section Title -->
            <h2 class="products-section-title">
                <?= $heading; ?>
            </h2>

            <!-- Properties Grid -->
            <div class="row g-4">
                <?php
                $cardIndex = 0;
                foreach ($product as $p) {
                    $propertyImage = !empty($p['main_image']) 
                        ? base_url() . "/public/uploads/product_images/" . $p['main_image'] 
                        : base_url() . "/public/assets/img/product1.jpg";

                    $propertyUrl = base_url() . "/products/" . $p['menu_link'];
                    $propertyName = htmlspecialchars($p['product_name']);
                    $animationDelay = $cardIndex * 100;
                    $cardIndex++;
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-12" 
                         data-aos="zoom-in-up" 
                         data-aos-duration="800" 
                         data-aos-delay="<?= $animationDelay; ?>">

                        <div class="property-card property-card-animate">
                            <!-- Image Container -->
                            <div class="property-image-wrapper">
                                <a href="<?= $propertyUrl; ?>" title="View Property">
                                    <img src="<?= $propertyImage; ?>" 
                                         alt="<?= $propertyName; ?>" 
                                         class="property-image"
                                         loading="lazy">
                                </a>
                                <div class="property-image-overlay"></div>

                                <!-- Status Badge -->
                                <?php if (!empty($p['text_on_image'])): ?>
                                    <div class="property-badge">
                                        <i class="fas fa-star me-1"></i>
                                        <?= htmlspecialchars($p['text_on_image']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Content -->
                            <div class="property-content">
                                <!-- Title -->
                                <a href="<?= $propertyUrl; ?>" class="property-title">
                                    <?= $propertyName; ?>
                                </a>

                                <!-- Location -->
                                <?php if (!empty($p['specifications'])): ?>
                                    <div class="property-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span><?= htmlspecialchars($p['specifications']); ?></span>
                                    </div>
                                <?php endif; ?>

                                <!-- Features -->
                                <?php if (!empty($p['key_point'])): ?>
                                    <div class="property-features">
                                        <span class="feature-badge">
                                            <i class="fas fa-check"></i>
                                            <?= htmlspecialchars($p['key_point']); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                                <!-- Price -->
                                <?php if (!empty($p['price_info'])): ?>
                                    <div class="property-price-section">
                                        <div class="property-price-label">Starting Price</div>
                                        <div class="property-price">
                                            ₹ <?= htmlspecialchars($p['price_info']); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Inquiry Button -->
                                <button class="property-inquiry-btn" 
                                        data-bs-target="#inquiryModal" 
                                        data-bs-toggle="modal" 
                                        type="button">
                                    <i class="fas fa-phone"></i>
                                    Enquire Now
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Inquiry Modal -->
    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="inquiry-modal-content">
                <div class="inquiry-modal-header">
                    <h5 class="inquiry-modal-title">
                        <i class="fas fa-envelope me-2"></i>Request Property Information
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="inquiryForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inquiry-form-group">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="inquiry-form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inquiry-form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="inquiry-form-control" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="inquiry-form-group">
                            <label>Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="inquiry-form-control" name="email" required>
                        </div>

                        <div class="inquiry-form-group">
                            <label>Message</label>
                            <textarea class="inquiry-form-control" name="message" rows="4" placeholder="Tell us about your requirements..."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-4 bg-light">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Close
                    </button>
                    <button type="button" class="property-inquiry-btn" style="width: auto; padding: 12px 40px;">
                        <i class="fas fa-paper-plane me-2"></i>Send Inquiry
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Add staggered animation delays
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.property-card-animate');
            cards.forEach((card, index) => {
                card.style.animationDelay = (index * 100) + 'ms';
            });
        });

        // Form submission
        document.getElementById('inquiryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your inquiry! We will contact you soon.');
            bootstrap.Modal.getInstance(document.getElementById('inquiryModal')).hide();
        });
    </script>
</body>
</html>
<?php
        }
    }
}
?>
