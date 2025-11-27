<section class="products-section" 
         style="padding: 80px 0; 
                 background-color: var(--section-background); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="background-elements" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: 0;">
        <div class="shape shape-1" style="position: absolute; width: 300px; height: 300px; background: radial-gradient(circle, rgba(33, 128, 161, 0.1), transparent); border-radius: 50%; top: -50px; left: -50px; animation: float 6s ease-in-out infinite;"></div>
        <div class="shape shape-2" style="position: absolute; width: 200px; height: 200px; background: radial-gradient(circle, rgba(230, 126, 34, 0.1), transparent); border-radius: 50%; bottom: -30px; right: -30px; animation: float 8s ease-in-out infinite; animation-delay: 1s;"></div>
    </div>

    <div class="container px-4" style="position: relative; z-index: 1;">
        
        <?php
        $heading = "";
        if (!empty($products)) {    
            foreach ($products as $product) {
                $heading = $product['sub_menu_name'] ?? 'Our Products';
                unset($product['sub_menu_name']);
                
                if (isset($product['section_id']) && $product['section_id'] == ($myurl['section_id'] ?? null)) {
                    if (isset($product['section_id'])) {
                        unset($product['section_id']);
                    }
                    ?>
                    
                    <!-- Section Header with Animation -->
                    <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
                        <h2 class="section-title fw-bold" 
                            style="font-size: 40px; 
                                   color: var(--text-primary); 
                                   margin-bottom: 15px; 
                                   text-transform: uppercase; 
                                   letter-spacing: 2px; 
                                   position: relative; 
                                   display: inline-block;">
                            <span style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                        -webkit-background-clip: text; 
                                        -webkit-text-fill-color: transparent; 
                                        background-clip: text;">
                                <?= esc($heading, 'html') ?>
                            </span>
                        </h2>
                        
                        <!-- Animated Divider -->
                        <div style="width: 100px; 
                                   height: 4px; 
                                   background: linear-gradient(90deg, var(--primary-color), var(--accent-color)); 
                                   margin: 20px auto; 
                                   border-radius: 2px; 
                                   animation: expandWidth 0.8s ease-out; 
                                   animation-delay: 0.2s; 
                                   animation-fill-mode: both;"></div>
                        
                        <p class="section-subtitle" 
                           style="font-size: 15px; 
                                  color: rgba(var(--text-primary), 0.7); 
                                  margin-top: 15px; 
                                  animation: fadeIn 0.8s ease-out; 
                                  animation-delay: 0.3s;">
                            Explore our comprehensive collection of premium products
                        </p>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid row g-4" style="animation: fadeIn 0.8s ease-out; animation-delay: 0.4s;">
                        <?php
                        $product_count = 0;
                        if (!empty($product)) {
                            foreach ($product as $p) {
                                $product_count++;
                                
                                // Image handling
                                $img = !empty($p['main_image']) 
                                    ? base_url() . "/public/uploads/product_images/" . esc($p['main_image'], 'attr') 
                                    : base_url() . "/public/assets/img/no-product.png";
                                
                                // URL handling
                                $product_url = base_url() . "/products/" . esc($p['menu_link'] ?? '', 'url');
                                $product_name = esc($p['product_name'] ?? 'Product', 'html');
                                
                                // Stagger delay
                                $stagger_delay = ($product_count * 0.1);
                                ?>
                                
                                <!-- Product Card -->
                                <div class="col-lg-12 col-md-6 product-card-wrapper" 
                                     style="animation: zoomInScale 0.8s ease-out; 
                                            animation-delay: <?= $stagger_delay ?>s; 
                                            animation-fill-mode: both;">
                                    
                                    <div class="product-card" 
                                         style="position: relative; 
                                                background: var(--card-background); 
                                                border: 1px solid var(--card-border); 
                                                border-radius: var(--border-radius-lg); 
                                                overflow: hidden; 
                                                box-shadow: var(--shadow-sm); 
                                                transition: all var(--transition-normal) var(--ease-standard); 
                                                cursor: pointer; 
                                                height: 100%;"
                                         onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='var(--shadow-lg)'; this.style.borderColor='var(--primary-color)'"
                                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-sm)'; this.style.borderColor='var(--card-border)'">
                                        
                                        <!-- Product Image Container -->
                                        <div class="product-image-wrapper" 
                                             style="position: relative; 
                                                    overflow: hidden; 
                                                    height: 250px; 
                                                    background: linear-gradient(135deg, var(--section-background), var(--card-background)); 
                                                    display: flex; 
                                                    align-items: center; 
                                                    justify-content: center;">
                                            
                                            <!-- Image -->
                                            <a href="<?= $product_url ?>" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                                                <img src="<?= $img ?>" 
                                                     alt="<?= $product_name ?>" 
                                                     class="product-image" 
                                                     style="width: 100%; 
                                                            height: 100%; 
                                                            object-fit: cover; 
                                                            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); 
                                                            transform-origin: center;"
                                                     onmouseover="this.style.transform='scale(1.1) rotate(2deg)'"
                                                     onmouseout="this.style.transform='scale(1) rotate(0deg)'">
                                            </a>
                                            
                                            <!-- Gradient Overlay -->
                                            <div class="product-overlay" 
                                                 style="position: absolute; 
                                                        top: 0; 
                                                        left: 0; 
                                                        width: 100%; 
                                                        height: 100%; 
                                                        background: linear-gradient(135deg, rgba(33, 128, 161, 0.3), rgba(230, 126, 34, 0.2)); 
                                                        opacity: 0; 
                                                        transition: opacity var(--transition-normal) var(--ease-standard); 
                                                        z-index: 2;"
                                                 onmouseover="this.style.opacity='1'"
                                                 onmouseout="this.style.opacity='0'"></div>
                                            
                                            <!-- Quick View Icon -->
                                            <div class="quick-view-icon" 
                                                 style="position: absolute; 
                                                        top: 50%; 
                                                        left: 50%; 
                                                        transform: translate(-50%, -50%); 
                                                        width: 50px; 
                                                        height: 50px; 
                                                        background: var(--primary-color); 
                                                        border-radius: 50%; 
                                                        display: flex; 
                                                        align-items: center; 
                                                        justify-content: center; 
                                                        color: white; 
                                                        font-size: 24px; 
                                                        opacity: 0; 
                                                        transform: translate(-50%, -50%) scale(0); 
                                                        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1); 
                                                        z-index: 3;"
                                                 onmouseover="this.style.opacity='1'; this.style.transform='translate(-50%, -50%) scale(1)'"
                                                 onmouseout="this.style.opacity='0'; this.style.transform='translate(-50%, -50%) scale(0)'">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </div>
                                        </div>

                                        <!-- Product Content -->
                                        <div class="product-content" 
                                             style="padding: 24px; 
                                                    text-align: center;">
                                            
                                            <!-- Product Name -->
                                            <h4 class="product-name" 
                                                style="font-size: 16px; 
                                                       font-weight: 700; 
                                                       color: var(--text-primary); 
                                                       margin: 0 0 15px 0; 
                                                       line-height: 1.4; 
                                                       min-height: 45px; 
                                                       display: flex; 
                                                       align-items: center; 
                                                       justify-content: center; 
                                                       transition: color var(--transition-normal) var(--ease-standard);"
                                                onmouseover="this.style.color='var(--primary-color)'"
                                                onmouseout="this.style.color='var(--text-primary)'">
                                                <?= strlen($product_name) > 35 ? substr($product_name, 0, 35) . '...' : $product_name ?>
                                            </h4>

                                            <!-- Product Category Badge -->
                                            <div class="product-category" 
                                                 style="display: inline-block; 
                                                        background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                                                        color: var(--primary-color); 
                                                        padding: 4px 12px; 
                                                        border-radius: 20px; 
                                                        font-size: 11px; 
                                                        font-weight: 600; 
                                                        margin-bottom: 15px; 
                                                        text-transform: uppercase; 
                                                        letter-spacing: 0.5px;">
                                                Product
                                            </div>

                                            <!-- Enquiry Button -->
                                            <button class="btn-enquiry" 
                                                    type="button" 
                                                    data-bs-target="#inquiryModal" 
                                                    data-bs-toggle="modal" 
                                                    style="width: 100%; 
                                                           padding: 12px 20px; 
                                                           background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                                           color: white; 
                                                           border: none; 
                                                           border-radius: var(--border-radius); 
                                                           font-size: 14px; 
                                                           font-weight: 600; 
                                                           cursor: pointer; 
                                                           transition: all var(--transition-normal) var(--ease-standard); 
                                                           box-shadow: 0 4px 12px rgba(33, 128, 161, 0.3); 
                                                           position: relative; 
                                                           overflow: hidden;"
                                                    onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(33, 128, 161, 0.4)'"
                                                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(33, 128, 161, 0.3)'">
                                                <i class="fa-solid fa-envelope me-2"></i>Enquiry Now
                                            </button>

                                            <!-- View Details Link -->
                                            <a href="<?= $product_url ?>" 
                                               class="view-details-link" 
                                               style="display: inline-block; 
                                                      margin-top: 12px; 
                                                      color: var(--primary-color); 
                                                      text-decoration: none; 
                                                      font-size: 13px; 
                                                      font-weight: 600; 
                                                      transition: all var(--transition-normal) var(--ease-standard);"
                                               onmouseover="this.style.color='var(--accent-color)'; this.style.transform='translateX(3px)'"
                                               onmouseout="this.style.color='var(--primary-color)'; this.style.transform='translateX(0)'">
                                                View Details <i class="fa-solid fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            }
                        } else {
                            ?>
                            <div class="col-12 text-center py-5">
                                <i class="fa-solid fa-box" style="font-size: 48px; color: rgba(var(--text-primary), 0.3); margin-bottom: 15px; display: block;"></i>
                                <p style="color: rgba(var(--text-primary), 0.6); font-size: 16px;">No products available</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    
                    <?php
                }
            }
        } else {
            ?>
            <div class="empty-state text-center py-5">
                <i class="fa-solid fa-inbox" style="font-size: 48px; color: rgba(var(--text-primary), 0.3); margin-bottom: 20px; display: block;"></i>
                <h3 style="color: var(--text-primary); font-size: 20px; margin-bottom: 10px;">No Products Found</h3>
                <p style="color: rgba(var(--text-primary), 0.6);">Please check back soon for our latest products</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>


<!-- ============================================
     PRODUCTS SECTION STYLES
     ============================================ -->
<style>
    /* ============================================
       ANIMATIONS
       ============================================ */

    /* Floating Background Shapes */
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(30px);
        }
    }

    /* Slide Down Fade */
    @keyframes slideDownFade {
        from {
            transform: translateY(-30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Expand Width */
    @keyframes expandWidth {
        from {
            width: 0;
            opacity: 0;
        }
        to {
            width: 100px;
            opacity: 1;
        }
    }

    /* Fade In */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Zoom In Scale */
    @keyframes zoomInScale {
        from {
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Product Card Styles */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .product-card-wrapper {
        animation-name: zoomInScale;
        animation-duration: 0.8s;
        animation-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    /* Tablet */
    @media (max-width: 992px) {
        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }

        .section-title {
            font-size: 32px !important;
        }

        .product-image-wrapper {
            height: 220px !important;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .products-section {
            padding: 50px 0 !important;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .section-title {
            font-size: 24px !important;
        }

        .product-image-wrapper {
            height: 180px !important;
        }

        .product-name {
            font-size: 14px !important;
            min-height: 40px !important;
        }

        .btn-enquiry {
            font-size: 12px !important;
            padding: 10px 16px !important;
        }

        .background-elements {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .products-grid {
            grid-template-columns: 1fr;
            gap: 0.75rem;
        }

        .product-card {
            margin-bottom: 15px;
        }
    }

    /* Accessibility */
    .btn-enquiry:focus-visible,
    .view-details-link:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .products-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     PRODUCTS SECTION JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Intersection Observer for scroll animations
        // ============================================
        if ('IntersectionObserver' in window) {
            var productCards = document.querySelectorAll('.product-card-wrapper');
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = entry.target.style.animation;
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            productCards.forEach(function(card) {
                observer.observe(card);
            });
        }

        // ============================================
        // Analytics tracking for button clicks
        // ============================================
        document.querySelectorAll('.btn-enquiry, .view-details-link').forEach(function(button) {
            button.addEventListener('click', function() {
                if (typeof gtag !== 'undefined') {
                    var productName = this.closest('.product-card').querySelector('.product-name').textContent.trim();
                    gtag('event', 'product_interaction', {
                        'product_name': productName,
                        'action': this.classList.contains('btn-enquiry') ? 'enquiry' : 'view_details'
                    });
                }
            });
        });

        // ============================================
        // Stagger animation delays
        // ============================================
        var productWrappers = document.querySelectorAll('.product-card-wrapper');
        productWrappers.forEach(function(wrapper, index) {
            var delay = (index * 0.1);
            wrapper.style.setProperty('animation-delay', delay + 's');
        });

        // ============================================
        // Parallax effect on scroll
        // ============================================
        var shapes = document.querySelectorAll('.shape');
        window.addEventListener('scroll', function() {
            var scrolled = window.pageYOffset;
            shapes.forEach(function(shape, index) {
                shape.style.transform = 'translateY(' + (scrolled * 0.1 * (index + 1)) + 'px)';
            });
        });
    });
</script>
