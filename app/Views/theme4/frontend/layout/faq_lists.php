<style>
    /* Ultra Modern FAQ Section */
    
    /* FAQ Wrapper */
    .faq-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background */
    .faq-bg-pattern {
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

    /* Section Title */
    .faq-section-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 20px;
        letter-spacing: -1px;
        position: relative;
        z-index: 1;
    }

    .faq-subtitle {
        font-size: 16px;
        color: #6c757d;
        text-align: center;
        margin-bottom: 60px;
        position: relative;
        z-index: 1;
    }

    /* Accordion Container */
    .faq-accordion-container {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }

    /* Accordion */
    .faq-accordion {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    /* Accordion Item */
    .faq-accordion-item {
        background: var(--theme_surface_color);
        border: 2px solid #e9ecef;
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        overflow: hidden;
        animation: slideInUp 0.6s ease-out forwards;
    }

    .faq-accordion-item:nth-child(1) { animation-delay: 0.05s; }
    .faq-accordion-item:nth-child(2) { animation-delay: 0.1s; }
    .faq-accordion-item:nth-child(3) { animation-delay: 0.15s; }
    .faq-accordion-item:nth-child(4) { animation-delay: 0.2s; }
    .faq-accordion-item:nth-child(5) { animation-delay: 0.25s; }
    .faq-accordion-item:nth-child(n+6) { animation-delay: 0.3s; }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .faq-accordion-item:hover {
        border-color: var(--primary-color);
        box-shadow: 0 8px 25px rgba(var(--bs-primary-rgb), 0.15);
    }

    /* Accordion Header */
    .faq-accordion-header {
        padding: 0;
        margin: 0;
    }

    .faq-accordion-button {
        background: transparent;
        border: none;
        padding: 20px 25px;
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        text-align: left;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        position: relative;
    }

    .faq-accordion-button:hover {
        color: var(--primary-color);
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
    }

    /* Icon */
    .faq-accordion-icon {
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), rgba(var(--bs-primary-rgb), 0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 14px;
        transition: all 0.3s ease;
        flex-shrink: 0;
        margin-left: 15px;
    }

    .faq-accordion-button:hover .faq-accordion-icon {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        transform: scale(1.1);
    }

    .faq-accordion-button[aria-expanded="true"] .faq-accordion-icon {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        transform: rotate(180deg);
    }

    /* Question Text */
    .faq-question-text {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .faq-question-icon {
        font-size: 18px;
        color: var(--primary-color);
    }

    /* Accordion Body */
    .faq-accordion-collapse {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
    }

    .faq-accordion-collapse.show {
        max-height: 2000px;
    }

    .faq-accordion-body {
        padding: 0 25px 20px 25px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.02), rgba(var(--bs-primary-rgb), 0.01));
        border-top: 1px solid #e9ecef;
        animation: fadeIn 0.4s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .faq-accordion-body {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
    }

    .faq-accordion-body p {
        margin-bottom: 12px;
    }

    .faq-accordion-body p:last-child {
        margin-bottom: 0;
    }

    .faq-accordion-body strong {
        color: var(--text-dark);
        font-weight: 700;
    }

    .faq-accordion-body ul,
    .faq-accordion-body ol {
        margin-left: 20px;
        margin-bottom: 12px;
    }

    .faq-accordion-body li {
        margin-bottom: 8px;
    }

    .faq-accordion-body a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }

    .faq-accordion-body a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    /* Search Box (Optional) */
    .faq-search-wrapper {
        position: relative;
        z-index: 1;
        margin-bottom: 40px;
    }

    .faq-search-container {
        max-width: 500px;
        margin: 0 auto;
    }

    .faq-search-input {
        width: 100%;
        padding: 14px 20px;
        border: 2px solid #e9ecef;
        border-radius: 50px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: var(--theme_surface_color);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .faq-search-input:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 8px 25px rgba(var(--bs-primary-rgb), 0.15);
    }

    .faq-search-input::placeholder {
        color: #adb5bd;
    }

    /* Empty State */
    .faq-empty-state {
        text-align: center;
        padding: 40px;
        color: #6c757d;
    }

    .faq-empty-state i {
        font-size: 48px;
        color: #e9ecef;
        margin-bottom: 15px;
        display: block;
    }

    /* CTA Section */
    .faq-cta-section {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 50px 40px;
        border-radius: 20px;
        text-align: center;
        margin-top: 60px;
        position: relative;
        overflow: hidden;
    }

    .faq-cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(0,0,0,0.1) 0%, transparent 50%);
        pointer-events: none;
    }

    .faq-cta-content {
        position: relative;
        z-index: 1;
    }

    .faq-cta-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .faq-cta-text {
        font-size: 16px;
        margin-bottom: 20px;
        opacity: 0.95;
    }

    .faq-cta-button {
        display: inline-block;
        padding: 12px 35px;
        background: var(--theme_surface_color);
        color: var(--primary-color);
        text-decoration: none;
        border-radius: 25px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .faq-cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .faq-section-title {
            font-size: 42px;
        }
    }

    @media (max-width: 991px) {
        .faq-wrapper {
            padding: 80px 0;
        }

        .faq-section-title {
            font-size: 36px;
        }

        .faq-accordion-container {
            max-width: 800px;
        }

        .faq-accordion-button {
            padding: 18px 20px;
            font-size: 15px;
        }

        .faq-accordion-body {
            padding: 0 20px 18px 20px;
        }
    }

    @media (max-width: 768px) {
        .faq-wrapper {
            padding: 60px 0;
        }

        .faq-section-title {
            font-size: 32px;
        }

        .faq-subtitle {
            font-size: 15px;
            margin-bottom: 40px;
        }

        .faq-accordion-item {
            gap: 10px;
        }

        .faq-accordion-button {
            padding: 16px 16px;
            font-size: 14px;
        }

        .faq-accordion-body {
            padding: 0 16px 16px 16px;
            font-size: 14px;
        }

        .faq-accordion-icon {
            width: 28px;
            height: 28px;
            margin-left: 10px;
        }

        .faq-search-input {
            padding: 12px 16px;
        }

        .faq-cta-section {
            padding: 35px 25px;
        }

        .faq-cta-title {
            font-size: 20px;
        }
    }

    @media (max-width: 576px) {
        .faq-section-title {
            font-size: 28px;
        }

        .faq-accordion-button {
            padding: 14px 12px;
            font-size: 13px;
        }

        .faq-accordion-body {
            padding: 0 12px 14px 12px;
            font-size: 13px;
        }

        .faq-question-icon {
            display: none;
        }

        .faq-cta-title {
            font-size: 18px;
        }

        .faq-cta-text {
            font-size: 14px;
        }
    }
</style>

<?php
if (!empty($fq_lists)) {
    foreach ($fq_lists as $fq_list) {
        if ($fq_list['section_id'] == $myurl['section_id']) {
            if(isset($fq_list['section_id'])){
                unset($fq_list['section_id']);
            }
            if (isset($fq_list['sub_menu_name'])) {
                $datasubmenu = $fq_list['sub_menu_name'];
                unset($fq_list['sub_menu_name']);
            } else {
                $datasubmenu = "Frequently Asked Questions";
            }
?>

<section class="faq-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="faq-bg-pattern"></div>

    <div class="container">
        <!-- Section Title -->
        <h2 class="faq-section-title"><?= htmlspecialchars($datasubmenu); ?></h2>
        <p class="faq-subtitle">Find answers to common questions about our services</p>

        <!-- Search Box (Optional) -->
        <div class="faq-search-wrapper">
            <div class="faq-search-container">
                <input type="text" 
                       class="faq-search-input" 
                       id="faqSearch" 
                       placeholder="Search FAQs...">
            </div>
        </div>

        <!-- FAQ Accordion -->
        <div class="faq-accordion-container">
            <div class="faq-accordion" id="faqAccordion">
                <?php
                $faqIndex = 0;
                foreach ($fq_list as $faq) {
                    $faqIndex++;
                    $isActive = ($faqIndex === 1) ? 'show' : '';
                    $ariaExpanded = ($faqIndex === 1) ? 'true' : 'false';
                ?>
                    <div class="faq-accordion-item" data-faq-id="<?= $faq['id']; ?>">
                        <div class="faq-accordion-header">
                            <button class="faq-accordion-button" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse<?= $faq['id']; ?>" 
                                    aria-expanded="<?= $ariaExpanded; ?>" 
                                    aria-controls="collapse<?= $faq['id']; ?>">
                                <span class="faq-question-text">
                                    <i class="fas fa-question-circle faq-question-icon"></i>
                                    <span><?= htmlspecialchars($faq['title']); ?></span>
                                </span>
                                <span class="faq-accordion-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </button>
                        </div>
                        <div id="collapse<?= $faq['id']; ?>" 
                             class="faq-accordion-collapse <?= $isActive; ?>" 
                             data-bs-parent="#faqAccordion">
                            <div class="faq-accordion-body">
                                <?= $faq['content']; ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="faq-cta-section" data-aos="zoom-in" data-aos-delay="300">
            <div class="faq-cta-content">
                <h3 class="faq-cta-title">Still have questions?</h3>
                <p class="faq-cta-text">Can't find the answer you're looking for? Contact our support team.</p>
                <button class="faq-cta-button" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                    <i class="fas fa-envelope me-2"></i>Contact Us
                </button>
            </div>
        </div>
    </div>
</section>

<?php
        }
    }
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // FAQ Search Functionality
        const searchInput = document.getElementById('faqSearch');
        if (searchInput) {
            searchInput.addEventListener('keyup', function() {
                const searchTerm = this.value.toLowerCase();
                const faqItems = document.querySelectorAll('.faq-accordion-item');

                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-accordion-button').textContent.toLowerCase();
                    const content = item.querySelector('.faq-accordion-body').textContent.toLowerCase();

                    if (question.includes(searchTerm) || content.includes(searchTerm) || searchTerm === '') {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Show empty state if no results
                const visibleItems = Array.from(faqItems).filter(item => item.style.display !== 'none');
                if (visibleItems.length === 0 && searchTerm !== '') {
                    // Optionally add empty state message
                }
            });
        }

        // Smooth scroll to active accordion
        const accordionButtons = document.querySelectorAll('.faq-accordion-button');
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                setTimeout(() => {
                    this.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            });
        });
    });
</script>
