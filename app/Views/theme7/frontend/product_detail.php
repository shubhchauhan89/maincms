<?= $this->extend("theme7/frontend/layout/master") ?>

<?= $this->section("customCss") ?>
<style>
    /* ============================================
       PRODUCT DETAIL PAGE - CUSTOM STYLES
       ============================================ */

    .product-page-wrapper {
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
        position: relative;
        overflow: hidden;
    }

    .product-page-wrapper::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(33, 128, 161, 0.08), transparent);
        border-radius: 50%;
        top: 100px;
        right: 5%;
        animation: float 8s ease-in-out infinite;
        z-index: 0;
    }

    .product-page-wrapper::after {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(230, 126, 34, 0.08), transparent);
        border-radius: 50%;
        bottom: 200px;
        left: 10%;
        animation: float 10s ease-in-out infinite;
        animation-delay: 1s;
        z-index: 0;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(40px); }
    }

    /* Hero Banner */
    .product-hero {
        position: relative;
        height: 300px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 0 60px;
        overflow: hidden;
    }

    .product-hero::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -100px;
        right: -100px;
        animation: float 8s ease-in-out infinite;
    }

    .product-hero-content {
        position: relative;
        z-index: 1;
        color: white;
    }

    .product-hero h1 {
        font-size: 48px;
        font-weight: 900;
        margin: 0 0 20px 0;
        line-height: 1.1;
    }

    .product-hero-breadcrumb {
        font-size: 14px;
        opacity: 0.95;
        display: flex;
        gap: 8px;
        align-items: center;
    }

    .product-hero-breadcrumb a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all var(--transition-normal) var(--ease-standard);
    }

    .product-hero-breadcrumb a:hover {
        color: white;
        text-decoration: underline;
    }

    .product-hero-breadcrumb span {
        color: rgba(255, 255, 255, 0.6);
    }

    /* Product Details Section */
    .product-details-wrapper {
        position: relative;
        z-index: 1;
        padding: 80px 0;
    }

    .product-details-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: start;
    }

    .product-image-section {
        position: relative;
    }

    .product-image-wrapper {
        position: relative;
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        background: var(--card-background);
        padding: 20px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .product-image-wrapper:hover {
        box-shadow: 0 20px 40px rgba(33, 128, 161, 0.2);
        transform: translateY(-4px);
    }

    .product-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: var(--border-radius);
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .product-image-wrapper:hover img {
        transform: scale(1.05);
    }

    .product-info-section {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .product-title-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 24px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .product-title-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .product-title-card h2 {
        font-size: 32px;
        font-weight: 800;
        color: var(--text-primary);
        margin: 0;
        line-height: 1.2;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .product-description-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        padding: 30px;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .product-description-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.1);
    }

    .product-description-card h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 2px solid var(--primary-color);
        padding-bottom: 12px;
    }

    .product-description-card p,
    .product-description-card ul,
    .product-description-card ol {
        font-size: 15px;
        color: rgba(var(--text-primary), 0.8);
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .product-description-card ul li,
    .product-description-card ol li {
        margin-bottom: 8px;
    }

    .product-cta-section {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .product-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 32px;
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: var(--border-radius);
        border: none;
        cursor: pointer;
        transition: all var(--transition-normal) var(--ease-standard));
        flex: 1;
        min-width: 200px;
        justify-content: center;
    }

    .product-btn-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .product-btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(33, 128, 161, 0.3);
    }

    .product-btn-secondary {
        background: var(--card-background);
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
    }

    .product-btn-secondary:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    /* Related Products Section */
    .related-products-section {
        position: relative;
        z-index: 1;
        padding: 80px 0;
        background: linear-gradient(135deg, var(--section-background) 0%, rgba(33, 128, 161, 0.03) 100%);
    }

    .related-products-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .related-products-header h2 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 10px;
        color: var(--text-primary);
    }

    .related-products-header h2 span {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .related-products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .product-card {
        background: var(--card-background);
        border: 2px solid var(--card-border);
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        transition: all var(--transition-normal) var(--ease-standard));
    }

    .product-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(33, 128, 161, 0.15);
    }

    .product-card-image {
        position: relative;
        width: 100%;
        height: 220px;
        background: var(--section-background);
        overflow: hidden;
    }

    .product-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .product-card:hover .product-card-image img {
        transform: scale(1.1);
    }

    .product-card-content {
        padding: 24px;
    }

    .product-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 16px;
        line-height: 1.4;
        max-height: 40px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-card-btn {
        display: flex;
        gap: 10px;
    }

    .product-card-btn a,
    .product-card-btn button {
        flex: 1;
        padding: 10px 16px;
        font-size: 12px;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        border-radius: var(--border-radius);
        border: none;
        cursor: pointer;
        transition: all var(--transition-normal) var(--ease-standard));
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .product-card-btn a {
        background: var(--section-background);
        color: var(--primary-color);
    }

    .product-card-btn a:hover {
        background: var(--primary-color);
        color: white;
    }

    .product-card-btn button {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
    }

    .product-card-btn button:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(33, 128, 161, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .product-details-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .product-hero {
            padding: 0 40px;
        }

        .product-hero h1 {
            font-size: 36px;
        }

        .product-title-card h2 {
            font-size: 24px;
        }

        .related-products-header h2 {
            font-size: 32px;
        }

        .related-products-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }
    }

    @media (max-width: 768px) {
        .product-hero {
            height: 250px;
            padding: 0 30px;
        }

        .product-hero h1 {
            font-size: 28px;
        }

        .product-details-wrapper {
            padding: 60px 0;
        }

        .product-details-grid {
            gap: 30px;
        }

        .product-cta-section {
            flex-direction: column;
        }

        .product-btn {
            flex: none;
            width: 100%;
        }

        .related-products-section {
            padding: 60px 0;
        }

        .related-products-header h2 {
            font-size: 28px;
        }

        .related-products-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .product-hero {
            height: 200px;
            padding: 0 20px;
        }

        .product-hero h1 {
            font-size: 20px;
        }

        .product-hero-breadcrumb {
            font-size: 12px;
            flex-wrap: wrap;
        }

        .product-title-card h2 {
            font-size: 20px;
        }

        .product-description-card {
            padding: 20px 16px;
        }

        .product-description-card h3 {
            font-size: 16px;
        }

        .product-description-card p {
            font-size: 14px;
        }

        .product-btn {
            padding: 12px 20px;
            font-size: 12px;
            min-width: auto;
        }

        .related-products-header h2 {
            font-size: 20px;
        }

        .related-products-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .product-card-image {
            height: 180px;
        }
    }

    /* Animation Helpers */
    .fade-down {
        animation: fadeDown 0.8s ease-out;
    }

    @keyframes fadeDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme7") ?>
<div class="product-page-wrapper">
    
    <!-- Product Hero Banner -->
    <div class="product-hero" data-aos="fade-down" data-aos-duration="800">
        <div class="product-hero-content">
            <h1><?= htmlspecialchars($product['product_name'] ?? 'Product') ?></h1>
            <div class="product-hero-breadcrumb">
                <a href="<?= base_url('/') ?>">Home</a>
                <span>/</span>
                <a href="<?= base_url('/products') ?>">Products</a>
                <span>/</span>
                <span><?= htmlspecialchars($product['product_name'] ?? 'Product') ?></span>
            </div>
        </div>
    </div>

    <!-- Product Details Section -->
    <div class="container product-details-wrapper">
        <div class="product-details-grid">
            
            <!-- Image Section (Left) -->
            <div class="product-image-section" data-aos="fade-right" data-aos-duration="800">
                <div class="product-image-wrapper">
                    <?php
                    $img = !empty($product['main_image']) 
                        ? base_url()."/public/uploads/product_images/" . $product['main_image'] 
                        : base_url()."/public/assets/img/no-image.png";
                    ?>
                    <img src="<?= htmlspecialchars($img) ?>" 
                         alt="<?= htmlspecialchars($product['product_name'] ?? 'Product') ?>" 
                         loading="lazy">
                </div>
            </div>

            <!-- Info Section (Right) -->
            <div class="product-info-section" data-aos="fade-left" data-aos-duration="800">
                
                <!-- Title Card -->
                <div class="product-title-card">
                    <h2><?= htmlspecialchars($product['product_name'] ?? 'Product Name') ?></h2>
                </div>

                <!-- Short Description -->
                <?php if (!empty($product['short_description'])): ?>
                <div class="product-description-card">
                    <h3>Overview</h3>
                    <div class="product-description-text">
                        <?= $product['short_description'] ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Long Description -->
                <?php if (!empty($product['long_description'])): ?>
                <div class="product-description-card">
                    <h3>Description</h3>
                    <div class="product-description-text">
                        <?= $product['long_description'] ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Specifications -->
                <?php if (!empty($product['specification'])): ?>
                <div class="product-description-card">
                    <h3>Specifications</h3>
                    <div class="product-description-text">
                        <?= $product['specification'] ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- CTA Section -->
                <div class="product-cta-section">
                    <button class="product-btn product-btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#inquiryModal"
                            type="button">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Enquiry Now</span>
                    </button>
                    <a href="<?= base_url('/products') ?>" class="product-btn product-btn-secondary">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Back to Products</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    <?php if (!empty($all_products) && count($all_products) > 0): ?>
    <div class="related-products-section">
        <div class="container">
            <div class="related-products-header" data-aos="fade-up" data-aos-duration="800">
                <h2>
                    <span>Related Products</span>
                </h2>
                <p style="font-size: 16px; color: rgba(var(--text-primary), 0.7); margin-top: 12px;">
                    Explore more from our collection
                </p>
            </div>

            <div class="related-products-grid">
                <?php foreach ($all_products as $related_product): ?>
                    <?php
                    $related_img = !empty($related_product['main_image']) 
                        ? base_url()."/public/uploads/product_images/" . $related_product['main_image'] 
                        : base_url()."/public/assets/img/no-image.png";
                    $related_url = base_url().'/products/' . $related_product['menu_link'];
                    ?>
                    <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-card-image">
                            <a href="<?= $related_url ?>">
                                <img src="<?= htmlspecialchars($related_img) ?>" 
                                     alt="<?= htmlspecialchars($related_product['product_name']) ?>"
                                     loading="lazy">
                            </a>
                        </div>
                        <div class="product-card-content">
                            <h3 class="product-card-title">
                                <?= htmlspecialchars($related_product['product_name']) ?>
                            </h3>
                            <div class="product-card-btn">
                                <a href="<?= $related_url ?>">
                                    <i class="fa-solid fa-eye"></i> View
                                </a>
                                <button class="product-card-btn-enquiry"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#inquiryModal"
                                        type="button"
                                        style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); color: white; flex: 1; padding: 10px 16px; font-size: 12px; font-weight: 700; text-align: center; border-radius: var(--border-radius); border: none; cursor: pointer; transition: all var(--transition-normal) var(--ease-standard)); text-transform: uppercase; letter-spacing: 0.5px;">
                                    <i class="fa-solid fa-envelope"></i> Enquiry
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Contact CTA Section -->
    <section class="mb-4" style="position: relative; z-index: 1; padding: 80px 0;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 2px; color: var(--primary-color); font-weight: 700; margin-bottom: 15px; display: inline-block; padding: 8px 16px; background: rgba(33, 128, 161, 0.1); border-radius: 9999px;">
                    Get In Touch
                </div>
                <h2 style="font-size: 42px; font-weight: 800; margin-bottom: 20px; color: var(--text-primary);">
                    <span style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        Ready to Discuss Your Requirements?
                    </span>
                </h2>
            </div>
            
            <div class="row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
                <!-- Map -->
                <div data-aos="fade-right" data-aos-duration="800">
                    <div style="position: relative; border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); min-height: 400px;">
                        <?php if (!empty($user_details['company_map'])): ?>
                            <?= $user_details['company_map'] ?>
                        <?php else: ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.3191804340063!2d77.59!3d12.97!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzEyLjAiTiA3N8KwMzUnMjQuMCJF!5e0!3m2!1sen!2sin!4v1234567890" 
                                    width="100%" 
                                    height="400" 
                                    style="border: none; border-radius: 12px;"
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Contact Form -->
                <div data-aos="fade-left" data-aos-duration="800">
                    <div style="background: var(--card-background); border: 2px solid var(--card-border); border-radius: var(--border-radius-lg); padding: 40px; transition: all var(--transition-normal) var(--ease-standard));">
                        <?= $this->include('theme7/frontend/layout/message') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Sections from sort_order -->
    <?php
    if (!empty($sort_order)) {
        foreach ($sort_order as $section) {
            $file_path = 'layout/' . $section['url_val'] . '.php';
            if (file_exists(APPPATH . 'Views/theme7/frontend/' . $file_path)) {
                include(APPPATH . 'Views/theme7/frontend/' . $file_path);
            }
        }
    }
    ?>
</div>
<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
                offset: 120
            });
        }

        // Analytics tracking for enquiry button
        const enquiryButtons = document.querySelectorAll('[data-bs-target="#inquiryModal"]');
        enquiryButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    const productName = document.querySelector('.product-title-card h2')?.textContent || 'Unknown Product';
                    gtag('event', 'product_enquiry', {
                        'event_category': 'engagement',
                        'event_label': productName
                    });
                }
            });
        });

        // Smooth scroll for back button
        const backButton = document.querySelector('a[href*="/products"]');
        if (backButton) {
            backButton.addEventListener('click', function(e) {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    });
</script>
<?= $this->endSection() ?>
