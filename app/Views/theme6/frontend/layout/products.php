<style>
      

  body {
    margin: 0;
    padding: 0;
  }

  *,
  *::before,
  *::after {
    box-sizing: inherit;
  }

  /* Typography */
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    margin: 0;
    font-weight: var(--font-weight-semibold);
    line-height: var(--line-height-tight);
    color: var(--color-text);
    letter-spacing: var(--letter-spacing-tight);
  }

  h1 {
    font-size: var(--font-size-4xl);
  }
  h2 {
    font-size: var(--font-size-3xl);
  }
  h3 {
    font-size: var(--font-size-2xl);
  }
  h4 {
    font-size: var(--font-size-xl);
  }
  h5 {
    font-size: var(--font-size-lg);
  }
  h6 {
    font-size: var(--font-size-md);
  }

  p {
    margin: 0 0 var(--space-16) 0;
  }

  a {
    color: var(--color-primary);
    text-decoration: none;
    transition: color var(--duration-fast) var(--ease-standard);
  }

  a:hover {
    color: var(--color-primary-hover);
  }

  code,
  pre {
    font-family: var(--font-family-mono);
    font-size: calc(var(--font-size-base) * 0.95);
    background-color: var(--color-secondary);
    border-radius: var(--radius-sm);
  }

  code {
    padding: var(--space-1) var(--space-4);
  }

  pre {
    padding: var(--space-16);
    margin: var(--space-16) 0;
    overflow: auto;
    border: 1px solid var(--color-border);
  }

  pre code {
    background: none;
    padding: 0;
  }

  /* Buttons */
  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: var(--space-8) var(--space-16);
    border-radius: var(--radius-base);
    font-size: var(--font-size-base);
    font-weight: 500;
    line-height: 1.5;
    cursor: pointer;
    transition: all var(--duration-normal) var(--ease-standard);
    border: none;
    text-decoration: none;
    position: relative;
  }

  .btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
  }

  .btn--primary {
    background: var(--color-primary);
    color: var(--color-btn-primary-text);
  }

  .btn--primary:hover {
    background: var(--color-primary-hover);
  }

  .btn--primary:active {
    background: var(--color-primary-active);
  }

  .btn--secondary {
    background: var(--color-secondary);
    color: var(--color-text);
  }

  .btn--secondary:hover {
    background: var(--color-secondary-hover);
  }

  .btn--secondary:active {
    background: var(--color-secondary-active);
  }

  .btn--outline {
    background: transparent;
    border: 1px solid var(--color-border);
    color: var(--color-text);
  }

  .btn--outline:hover {
    background: var(--color-secondary);
  }

  .btn--sm {
    padding: var(--space-4) var(--space-12);
    font-size: var(--font-size-sm);
    border-radius: var(--radius-sm);
  }

  .btn--lg {
    padding: var(--space-10) var(--space-20);
    font-size: var(--font-size-lg);
    border-radius: var(--radius-md);
  }

  .btn--full-width {
    width: 100%;
  }

  .btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
  }

  /* Form elements */
  .form-control {
    display: block;
    width: 100%;
    padding: var(--space-8) var(--space-12);
    font-size: var(--font-size-md);
    line-height: 1.5;
    color: var(--color-text);
    background-color: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-base);
    transition: border-color var(--duration-fast) var(--ease-standard),
      box-shadow var(--duration-fast) var(--ease-standard);
  }

  textarea.form-control {
    font-family: var(--font-family-base);
    font-size: var(--font-size-base);
  }

  select.form-control {
    padding: var(--space-8) var(--space-12);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: var(--select-caret-light);
    background-repeat: no-repeat;
    background-position: right var(--space-12) center;
    background-size: 16px;
    padding-right: var(--space-32);
  }

  /* Add a dark mode specific caret */
  @media (prefers-color-scheme: dark) {
    select.form-control {
      background-image: var(--select-caret-dark);
    }
  }

  /* Also handle data-color-scheme */
  [data-color-scheme="dark"] select.form-control {
    background-image: var(--select-caret-dark);
  }

  [data-color-scheme="light"] select.form-control {
    background-image: var(--select-caret-light);
  }

  .form-control:focus {
    border-color: var(--color-primary);
    outline: var(--focus-outline);
  }

  .form-label {
    display: block;
    margin-bottom: var(--space-8);
    font-weight: var(--font-weight-medium);
    font-size: var(--font-size-sm);
  }

  .form-group {
    margin-bottom: var(--space-16);
  }

  /* Card component */
  .card {
    background-color: var(--color-surface);
    border-radius: var(--radius-lg);
    border: 1px solid var(--color-card-border);
    box-shadow: var(--shadow-sm);
    overflow: hidden;
    transition: box-shadow var(--duration-normal) var(--ease-standard);
  }

  .card:hover {
    box-shadow: var(--shadow-md);
  }

  .card__body {
    padding: var(--space-16);
  }

  .card__header,
  .card__footer {
    padding: var(--space-16);
    border-bottom: 1px solid var(--color-card-border-inner);
  }

  /* Status indicators - simplified with CSS variables */
  .status {
    display: inline-flex;
    align-items: center;
    padding: var(--space-6) var(--space-12);
    border-radius: var(--radius-full);
    font-weight: var(--font-weight-medium);
    font-size: var(--font-size-sm);
  }

  .status--success {
    background-color: rgba(
      var(--color-success-rgb, 33, 128, 141),
      var(--status-bg-opacity)
    );
    color: var(--color-success);
    border: 1px solid
      rgba(var(--color-success-rgb, 33, 128, 141), var(--status-border-opacity));
  }

  .status--error {
    background-color: rgba(
      var(--color-error-rgb, 192, 21, 47),
      var(--status-bg-opacity)
    );
    color: var(--color-error);
    border: 1px solid
      rgba(var(--color-error-rgb, 192, 21, 47), var(--status-border-opacity));
  }

  .status--warning {
    background-color: rgba(
      var(--color-warning-rgb, 168, 75, 47),
      var(--status-bg-opacity)
    );
    color: var(--color-warning);
    border: 1px solid
      rgba(var(--color-warning-rgb, 168, 75, 47), var(--status-border-opacity));
  }

  .status--info {
    background-color: rgba(
      var(--color-info-rgb, 98, 108, 113),
      var(--status-bg-opacity)
    );
    color: var(--color-info);
    border: 1px solid
      rgba(var(--color-info-rgb, 98, 108, 113), var(--status-border-opacity));
  }

  /* Container layout */
  .container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: var(--space-16);
    padding-left: var(--space-16);
  }

  @media (min-width: 640px) {
    .container {
      max-width: var(--container-sm);
    }
  }
  @media (min-width: 768px) {
    .container {
      max-width: var(--container-md);
    }
  }
  @media (min-width: 1024px) {
    .container {
      max-width: var(--container-lg);
    }
  }
  @media (min-width: 1280px) {
    .container {
      max-width: var(--container-xl);
    }
  }

  /* Utility classes */
  .flex {
    display: flex;
  }
  .flex-col {
    flex-direction: column;
  }
  .items-center {
    align-items: center;
  }
  .justify-center {
    justify-content: center;
  }
  .justify-between {
    justify-content: space-between;
  }
  .gap-4 {
    gap: var(--space-4);
  }
  .gap-8 {
    gap: var(--space-8);
  }
  .gap-16 {
    gap: var(--space-16);
  }

  .m-0 {
    margin: 0;
  }
  .mt-8 {
    margin-top: var(--space-8);
  }
  .mb-8 {
    margin-bottom: var(--space-8);
  }
  .mx-8 {
    margin-left: var(--space-8);
    margin-right: var(--space-8);
  }
  .my-8 {
    margin-top: var(--space-8);
    margin-bottom: var(--space-8);
  }

  .p-0 {
    padding: 0;
  }
  .py-8 {
    padding-top: var(--space-8);
    padding-bottom: var(--space-8);
  }
  .px-8 {
    padding-left: var(--space-8);
    padding-right: var(--space-8);
  }
  .py-16 {
    padding-top: var(--space-16);
    padding-bottom: var(--space-16);
  }
  .px-16 {
    padding-left: var(--space-16);
    padding-right: var(--space-16);
  }

  .block {
    display: block;
  }
  .hidden {
    display: none;
  }

  /* Accessibility */
  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }

  :focus-visible {
    outline: var(--focus-outline);
    outline-offset: 2px;
  }

  /* Dark mode specifics */
  [data-color-scheme="dark"] .btn--outline {
    border: 1px solid var(--color-border-secondary);
  }

  @font-face {
    font-family: 'FKGroteskNeue';
    src: url('https://r2cdn.perplexity.ai/fonts/FKGroteskNeue.woff2')
      format('woff2');
  }

  /* END PERPLEXITY DESIGN SYSTEM */
  ```css
  /* ===== INDUSTRIAL EDGE PRO - PRODUCTS CATALOG STYLES ===== */
  /* Manufacturing products showcase with image and details */

  /* ===== WRAPPER ===== */
  .industrial-products-innovative-wrapper {
      position: relative;
      padding: var(--space-24) 0;
      background: var(--color-background);
      overflow: hidden;
  }

  .industrial-products-blob-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.05;
      pointer-events: none;
      background: 
          radial-gradient(circle at 20% 50%, var(--primary-color)),
          radial-gradient(circle at 80% 80%, var(--color-teal-500));
      animation: blob-animation 15s ease infinite;
  }

  @keyframes blob-animation {
      0%, 100% { background-size: 100% 100%; }
      50% { background-size: 120% 120%; }
  }

  /* ===== HEADER ===== */
  .industrial-products-header {
      text-align: center;
      margin-bottom: var(--space-24);
      position: relative;
      z-index: 1;
  }

  .industrial-products-title {
      font-size: var(--font-size-4xl);
      font-weight: var(--font-weight-bold);
      margin-bottom: var(--space-16);
      text-transform: uppercase;
      letter-spacing: var(--letter-spacing-tight);
      color: var(--color-text);
      font-family: var(--font-family-base);
      line-height: var(--line-height-tight);
  }

  .industrial-products-accent {
      color: var(--primary-color);
      display: block;
  }

  .industrial-products-description {
      color: var(--color-text-secondary);
      font-size: var(--font-size-xl);
      max-width: var(--container-md);
      margin: 0 auto;
      line-height: var(--line-height-normal);
      font-family: var(--font-family-base);
  }

  /* ===== PRODUCTS GRID ===== */
  .industrial-products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: var(--space-24);
      position: relative;
      z-index: 1;
  }

  /* ===== PRODUCT ITEM ===== */
  .product-item {
      position: relative;
      background: var(--color-surface);
      border: 1px solid var(--color-card-border);
      border-radius: var(--radius-lg);
      overflow: hidden;
      transition: all var(--duration-normal) var(--ease-standard);
      cursor: pointer;
      display: flex;
      flex-direction: column;
      height: 100%;
      animation: fadeInUp 0.6s ease-out forwards;
      opacity: 0;
      box-shadow: var(--shadow-sm);
  }

  @keyframes fadeInUp {
      from {
          opacity: 0;
          transform: translateY(var(--space-24));
      }
      to {
          opacity: 1;
          transform: translateY(0);
      }
  }

  .product-item:hover {
      border-color: var(--primary-color);
      transform: translateY(-var(--space-12));
      box-shadow: var(--shadow-lg), 0 var(--space-20) var(--space-32) rgba(var(--primary-color), 0.2);
  }

  /* ===== PRODUCT IMAGE ===== */
  .product-image-container {
      position: relative;
      width: 100%;
      height: 250px;
      overflow: hidden;
      background: var(--color-background);
  }

  .product-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform var(--duration-normal) var(--ease-standard);
  }

  .product-item:hover .product-image {
      transform: scale(1.1) rotate(2deg);
  }

  .product-image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(var(--primary-color), 0.1), transparent);
      opacity: 0;
      transition: opacity var(--duration-normal) ease;
  }

  .product-item:hover .product-image-overlay {
      opacity: 1;
  }

  /* ===== PRODUCT ICON ===== */
  .product-icon-container {
      position: absolute;
      top: var(--space-16);
      right: var(--space-16);
      width: var(--space-32);
      height: var(--space-32);
      background: linear-gradient(135deg, var(--primary-color), var(--color-orange-400));
      border-radius: var(--radius-full);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: var(--font-size-xl);
      color: var(--color-text);
      box-shadow: var(--shadow-md);
      z-index: 2;
  }

  /* ===== PRODUCT CONTENT ===== */
  .product-title {
      font-size: var(--font-size-xl);
      font-weight: var(--font-weight-bold);
      color: var(--color-text);
      margin: var(--space-20) var(--space-20) var(--space-10);
      padding: 0;
      text-transform: uppercase;
      letter-spacing: var(--letter-spacing-tight);
      transition: color var(--duration-fast) ease;
      font-family: var(--font-family-base);
      line-height: var(--line-height-tight);
  }

  .product-item:hover .product-title {
      color: var(--primary-color);
  }

  .product-description {
      color: var(--color-text-secondary);
      font-size: var(--font-size-base);
      margin: 0 var(--space-20) var(--space-16);
      line-height: var(--line-height-normal);
      flex-grow: 1;
      font-family: var(--font-family-base);
  }

  /* ===== PRODUCT META ===== */
  .product-meta {
      padding: 0 var(--space-20);
      margin-bottom: var(--space-16);
      display: flex;
      gap: var(--space-10);
      flex-wrap: wrap;
  }

  .product-meta-item {
      display: inline-flex;
      align-items: center;
      gap: var(--space-6);
      background: rgba(var(--primary-color), 0.15);
      color: var(--color-primary);
      padding: var(--space-6) var(--space-12);
      border-radius: var(--radius-full);
      font-size: var(--font-size-sm);
      font-weight: var(--font-weight-semibold);
      font-family: var(--font-family-base);
  }

  /* ===== PRODUCT FEATURES ===== */
  .product-features-list {
      padding: 0 var(--space-20);
      margin-bottom: var(--space-16);
      display: flex;
      flex-direction: column;
      gap: var(--space-8);
  }

  .product-feature-item {
      display: flex;
      align-items: center;
      gap: var(--space-8);
      color: var(--color-text-secondary);
      font-size: var(--font-size-base);
      font-family: var(--font-family-base);
  }

  .product-feature-item i {
      color: var(--color-success);
      font-size: var(--font-size-base);
  }

  /* ===== PRODUCT PRICE ===== */
  .product-price-badge {
      padding: 0 var(--space-20);
      margin-bottom: var(--space-16);
      display: inline-flex;
      align-items: center;
      background: rgba(var(--primary-color), 0.15);
      color: var(--color-primary);
      padding: var(--space-8) var(--space-16);
      border-radius: var(--radius-base);
      font-weight: var(--font-weight-bold);
      font-size: var(--font-size-base);
      font-family: var(--font-family-base);
  }

  /* ===== CTA BUTTON ===== */
  .product-cta-button {
      margin: 0 var(--space-20) var(--space-20);
      padding: var(--space-12) var(--space-20);
      background: var(--primary-color);
      color: var(--color-primary);
      border: none;
      border-radius: var(--radius-base);
      font-weight: var(--font-weight-bold);
      text-transform: uppercase;
      letter-spacing: var(--letter-spacing-tight);
      font-size: var(--font-size-base);
      cursor: pointer;
      transition: all var(--duration-fast) var(--ease-standard);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: var(--space-8);
      font-family: var(--font-family-base);
  }

  .product-cta-button:hover {
      background: var(--primary-color);
      transform: translateY(-var(--space-2));
      box-shadow: var(--shadow-md);
  }

  .product-cta-button:focus-visible {
      outline: none;
      box-shadow: var(--focus-ring);
  }

  /* ===== FEATURED CARD ===== */
  .product-item.featured {
      grid-column: span 1;
      transform: scale(1.02);
  }

  @media (min-width: 1200px) {
      .product-item.featured {
          grid-column: span 1;
      }
  }

  /* ===== MODAL STYLING ===== */
  .modal-body {
      color: var(--color-text);
  }

  .modal-body input,
  .modal-body textarea {
      transition: all var(--duration-fast) ease;
  }

  .modal-body input:focus,
  .modal-body textarea:focus {
      border-color: var(--primary-color) !important;
      box-shadow: var(--focus-ring) !important;
      outline: none;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 1200px) {
      .industrial-products-title {
          font-size: var(--font-size-3xl);
      }

      .industrial-products-grid {
          grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
          gap: var(--space-20);
      }
  }

  @media (max-width: 768px) {
      .industrial-products-innovative-wrapper {
          padding: var(--space-20) 0;
      }

      .industrial-products-header {
          margin-bottom: var(--space-20);
      }

      .industrial-products-title {
          font-size: var(--font-size-2xl);
      }

      .industrial-products-description {
          font-size: var(--font-size-lg);
      }

      .industrial-products-grid {
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: var(--space-16);
      }

      .product-image-container {
          height: 200px;
      }

      .product-title {
          font-size: var(--font-size-lg);
          margin: var(--space-16) var(--space-16) var(--space-8);
      }

      .product-description {
          font-size: var(--font-size-sm);
          margin: 0 var(--space-16) var(--space-12);
      }

      .product-meta,
      .product-features-list,
      .product-price-badge,
      .product-cta-button {
          margin-left: var(--space-16);
          margin-right: var(--space-16);
      }
  }

  @media (max-width: 576px) {
      .industrial-products-title {
          font-size: var(--font-size-xl);
      }

      .industrial-products-grid {
          grid-template-columns: 1fr;
          gap: var(--space-16);
      }

      .product-image-container {
          height: 180px;
      }

      .product-cta-button {
          font-size: var(--font-size-sm);
          padding: var(--space-10) var(--space-16);
      }
  }

  /* Mobile portrait breakpoint at 480px */
  @media (max-width: 480px) {
      .industrial-products-innovative-wrapper {
          padding: var(--space-16) 0;
      }

      .industrial-products-header {
          margin-bottom: var(--space-16);
      }

      .industrial-products-title {
          font-size: var(--font-size-lg);
          margin-bottom: var(--space-12);
      }

      .industrial-products-description {
          font-size: var(--font-size-base);
          padding: 0 var(--space-16);
      }

      .industrial-products-grid {
          gap: var(--space-12);
          padding: 0 var(--space-16);
      }

      .product-image-container {
          height: 160px;
      }

      .product-icon-container {
          width: var(--space-24);
          height: var(--space-24);
          font-size: var(--font-size-lg);
          top: var(--space-12);
          right: var(--space-12);
      }

      .product-title {
          font-size: var(--font-size-base);
          margin: var(--space-12) var(--space-12) var(--space-6);
      }

      .product-description {
          font-size: var(--font-size-xs);
          margin: 0 var(--space-12) var(--space-8);
      }

      .product-meta,
      .product-features-list,
      .product-price-badge,
      .product-cta-button {
          margin-left: var(--space-12);
          margin-right: var(--space-12);
      }

      .product-meta-item {
          padding: var(--space-4) var(--space-8);
          font-size: var(--font-size-xs);
      }

      .product-feature-item {
          font-size: var(--font-size-xs);
      }

      .product-price-badge {
          padding: var(--space-6) var(--space-12);
          font-size: var(--font-size-sm);
      }

      .product-cta-button {
          font-size: var(--font-size-xs);
          padding: var(--space-8) var(--space-12);
          margin-bottom: var(--space-12);
      }
  }
</style>

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

<!-- ===== INDUSTRIAL EDGE PRO - MANUFACTURING PRODUCTS CATALOG ===== -->
<section class="industrial-products-innovative-wrapper">
    <!-- Animated Blob Background -->
    <div class="industrial-products-blob-background"></div>

    <div class="container">
        <!-- Section Header -->
        <div class="industrial-products-header" data-aos="fade-down" data-aos-duration="800">
            <h2 class="industrial-products-title">
                Our <span class="industrial-products-accent"><?= htmlspecialchars($heading); ?></span>
            </h2>
            <p class="industrial-products-description">
                Precision manufacturing products designed for excellence. Explore our specialized catalog and find the perfect solution for your production needs.
            </p>
        </div>

        <!-- Products Grid -->
        <div class="industrial-products-grid">
            <?php
            $cardIndex = 0;
            
            foreach ($product as $p) {
                $productImage = !empty($p['main_image']) 
                    ? base_url() . "/public/uploads/product_images/" . htmlspecialchars($p['main_image']) 
                    : base_url() . "/public/assets/img/industrial-product-default.jpg";

                $productUrl = base_url() . "/products/" . htmlspecialchars($p['menu_link']);
                $productName = htmlspecialchars($p['product_name']);
                $animationDelay = $cardIndex * 100;
                
                // Alternate between featured and modern cards
                $cardType = ($cardIndex % 3 === 0) ? 'featured' : 'modern';
                $cardIndex++;
            ?>
                <div class="product-item <?= $cardType; ?>" 
                     data-aos="fade-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;"
                     onclick="window.location.href='<?= $productUrl; ?>'">

                    <!-- Product Image -->
                    <div class="product-image-container">
                        <img src="<?= $productImage; ?>" 
                             alt="<?= $productName; ?>" 
                             class="product-image"
                             loading="lazy">
                        <div class="product-image-overlay"></div>
                    </div>

                    <!-- Icon Container -->
                    <div class="product-icon-container">
                        <i class="fas fa-cogs"></i>
                    </div>

                    <!-- Product Title -->
                    <h3 class="product-title">
                        <?= $productName; ?>
                    </h3>

                    <!-- Product Description -->
                    <p class="product-description">
                        Premium manufacturing products crafted for precision and durability in industrial applications.
                    </p>

                    <!-- Meta Info -->
                    <div class="product-meta">
                        <?php if (!empty($p['specifications'])): ?>
                            <span class="product-meta-item">
                                <i class="fas fa-wrench"></i>
                                <?= htmlspecialchars(substr($p['specifications'], 0, 25)); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Features List -->
                    <?php if (!empty($p['key_point'])): ?>
                        <div class="product-features-list">
                            <div class="product-feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span><?= htmlspecialchars($p['key_point']); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Price Badge -->
                    <?php if (!empty($p['price_info'])): ?>
                        <div class="product-price-badge">
                            <i class="fas fa-tag me-1"></i>₹ <?= htmlspecialchars($p['price_info']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- CTA Button -->
                    <button class="product-cta-button" data-bs-toggle="modal" data-bs-target="#rfqModal">
                        <i class="fas fa-file-contract"></i>Request Quote
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ===== RFQ MODAL ===== -->
<div class="modal fade" id="rfqModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div style="background: var(--industrial-surface); border-radius: 12px; border: 1px solid var(--industrial-silver); box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);">
            <div style="background: linear-gradient(135deg, var(--industrial-orange) 0%, #ff8c5a 100%); color: #1a1a1a; padding: 25px 30px; border-radius: 12px 12px 0 0;">
                <h5 style="font-size: 22px; font-weight: 800; margin: 0;">
                    <i class="fas fa-file-contract me-2"></i>Request Quote
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" style="filter: brightness(0.2);"></button>
            </div>
            <div class="modal-body p-4">
                <form id="rfqForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; font-size: 13px; color: var(--industrial-text); margin-bottom: 8px;">Full Name <span style="color: var(--industrial-orange);">*</span></label>
                                <input type="text" style="width: 100%; padding: 12px 15px; border: 1px solid var(--industrial-silver); border-radius: 4px; font-size: 14px; background: var(--industrial-black); color: var(--industrial-text);" name="name" placeholder="Enter your full name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; font-size: 13px; color: var(--industrial-text); margin-bottom: 8px;">Phone Number <span style="color: var(--industrial-orange);">*</span></label>
                                <input type="tel" style="width: 100%; padding: 12px 15px; border: 1px solid var(--industrial-silver); border-radius: 4px; font-size: 14px; background: var(--industrial-black); color: var(--industrial-text);" name="phone" placeholder="Your phone number" required>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; color: var(--industrial-text); margin-bottom: 8px;">Email Address <span style="color: var(--industrial-orange);">*</span></label>
                        <input type="email" style="width: 100%; padding: 12px 15px; border: 1px solid var(--industrial-silver); border-radius: 4px; font-size: 14px; background: var(--industrial-black); color: var(--industrial-text);" name="email" placeholder="Your email address" required>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; color: var(--industrial-text); margin-bottom: 8px;">Product Quantity <span style="color: var(--industrial-orange);">*</span></label>
                        <input type="number" style="width: 100%; padding: 12px 15px; border: 1px solid var(--industrial-silver); border-radius: 4px; font-size: 14px; background: var(--industrial-black); color: var(--industrial-text);" name="quantity" placeholder="Required quantity" required>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 600; font-size: 13px; color: var(--industrial-text); margin-bottom: 8px;">Project Details</label>
                        <textarea style="width: 100%; padding: 12px 15px; border: 1px solid var(--industrial-silver); border-radius: 4px; font-size: 14px; background: var(--industrial-black); color: var(--industrial-text); resize: vertical; min-height: 100px;" name="message" placeholder="Tell us about your manufacturing requirements..."></textarea>
                    </div>
                </form>
            </div>
            <div style="padding: 20px 30px; background: var(--industrial-black); border-radius: 0 0 12px 12px; display: flex; gap: 10px; justify-content: flex-end; border-top: 1px solid var(--industrial-silver);">
                <button type="button" style="padding: 12px 30px; border: 1px solid var(--industrial-silver); border-radius: 4px; background: transparent; color: var(--industrial-text); font-weight: 700; cursor: pointer;" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Cancel
                </button>
                <button type="submit" style="padding: 12px 30px; border: none; border-radius: 4px; background: linear-gradient(135deg, var(--industrial-orange) 0%, #ff8c5a 100%); color: #1a1a1a; font-weight: 700; cursor: pointer;" onclick="document.getElementById('rfqForm').dispatchEvent(new Event('submit'));">
                    <i class="fas fa-paper-plane me-2"></i>Submit Quote Request
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
    const rfqForm = document.getElementById('rfqForm');
    if (rfqForm) {
        rfqForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you! Your quote request has been submitted. Our sales team will contact you shortly.');
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('rfqModal'));
            if (modal) {
                modal.hide();
            }
            
            this.reset();
        });
    }

    // Staggered animation
    document.addEventListener('DOMContentLoaded', function() {
        const items = document.querySelectorAll('.product-item');
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