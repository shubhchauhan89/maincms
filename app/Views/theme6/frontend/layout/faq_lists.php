<style>
    /* ============================================= */
    /* INDUSTRIAL FAQ SECTION - COMPLETE REDESIGN   */
    /* ============================================= */
    
    /* FAQ Wrapper */
    .industrial-faq-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--industrial-black);
        overflow: hidden;
    }


    /* Animated Background */
    .industrial-faq-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.04;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--industrial-orange) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--industrial-blue) 0%, transparent 50%);
        animation: pattern-float 20s ease-in-out infinite;
        pointer-events: none;
    }


    @keyframes pattern-float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(30px, 30px); }
    }


    /* Section Title */
    .industrial-faq-section-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--industrial-orange), var(--industrial-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-align: center;
        margin-bottom: 20px;
        letter-spacing: -1px;
        position: relative;
        z-index: 1;
        text-transform: uppercase;
    }


    .industrial-faq-subtitle {
        font-size: 16px;
        color: var(--industrial-text-secondary);
        text-align: center;
        margin-bottom: 60px;
        position: relative;
        z-index: 1;
    }


    /* Accordion Container */
    .industrial-faq-accordion-container {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }


    /* Accordion */
    .industrial-faq-accordion {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }


    /* Accordion Item */
    .industrial-faq-accordion-item {
        background: var(--industrial-surface);
        border: 2px solid var(--industrial-silver);
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        overflow: hidden;
        animation: slideInUp 0.6s ease-out forwards;
    }


    .industrial-faq-accordion-item:nth-child(1) { animation-delay: 0.05s; }
    .industrial-faq-accordion-item:nth-child(2) { animation-delay: 0.1s; }
    .industrial-faq-accordion-item:nth-child(3) { animation-delay: 0.15s; }
    .industrial-faq-accordion-item:nth-child(4) { animation-delay: 0.2s; }
    .industrial-faq-accordion-item:nth-child(5) { animation-delay: 0.25s; }
    .industrial-faq-accordion-item:nth-child(n+6) { animation-delay: 0.3s; }


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


    .industrial-faq-accordion-item:hover {
        border-color: var(--industrial-orange);
        box-shadow: 0 8px 25px rgba(255, 107, 53, 0.15);
    }


    /* Accordion Header */
    .industrial-faq-accordion-header {
        padding: 0;
        margin: 0;
    }


    .industrial-faq-accordion-button {
        background: transparent;
        border: none;
        padding: 20px 25px;
        font-size: 16px;
        font-weight: 700;
        color: var(--industrial-text);
        text-align: left;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        position: relative;
    }


    .industrial-faq-accordion-button:hover {
        color: var(--industrial-orange);
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.05), rgba(255, 107, 53, 0.02));
    }


    /* Icon */
    .industrial-faq-accordion-icon {
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 107, 53, 0.05));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--industrial-orange);
        font-size: 14px;
        transition: all 0.3s ease;
        flex-shrink: 0;
        margin-left: 15px;
    }


    .industrial-faq-accordion-button:hover .industrial-faq-accordion-icon {
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        color: white;
        transform: scale(1.1);
    }


    .industrial-faq-accordion-button[aria-expanded="true"] .industrial-faq-accordion-icon {
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        color: white;
        transform: rotate(180deg);
    }


    /* Question Text */
    .industrial-faq-question-text {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 12px;
    }


    .industrial-faq-question-icon {
        font-size: 18px;
        color: var(--industrial-orange);
    }


    /* Accordion Body */
    .industrial-faq-accordion-collapse {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease;
    }


    .industrial-faq-accordion-collapse.show {
        max-height: 2000px;
    }


    .industrial-faq-accordion-body {
        padding: 0 25px 20px 25px;
        background: linear-gradient(135deg, rgba(255, 107, 53, 0.02), rgba(255, 107, 53, 0.01));
        border-top: 1px solid var(--industrial-silver);
        animation: fadeIn 0.4s ease-out;
    }


    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }


    .industrial-faq-accordion-body {
        font-size: 15px;
        line-height: 1.8;
        color: var(--industrial-text-secondary);
    }


    .industrial-faq-accordion-body p {
        margin-bottom: 12px;
    }


    .industrial-faq-accordion-body p:last-child {
        margin-bottom: 0;
    }


    .industrial-faq-accordion-body strong {
        color: var(--industrial-text);
        font-weight: 700;
    }


    .industrial-faq-accordion-body ul,
    .industrial-faq-accordion-body ol {
        margin-left: 20px;
        margin-bottom: 12px;
    }


    .industrial-faq-accordion-body li {
        margin-bottom: 8px;
    }


    .industrial-faq-accordion-body a {
        color: var(--industrial-orange);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }


    .industrial-faq-accordion-body a:hover {
        color: var(--primary-color);
        text-decoration: underline;
    }


    /* Search Box */
    .industrial-faq-search-wrapper {
        position: relative;
        z-index: 1;
        margin-bottom: 40px;
    }


    .industrial-faq-search-container {
        max-width: 500px;
        margin: 0 auto;
    }


    .industrial-faq-search-input {
        width: 100%;
        padding: 14px 20px;
        border: 2px solid var(--industrial-silver);
        border-radius: 50px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: var(--industrial-surface);
        color: var(--industrial-text);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }


    .industrial-faq-search-input:focus {
        outline: none;
        border-color: var(--industrial-orange);
        box-shadow: 0 8px 25px rgba(255, 107, 53, 0.15);
    }


    .industrial-faq-search-input::placeholder {
        color: #6c757d;
    }


    /* Empty State */
    .industrial-faq-empty-state {
        text-align: center;
        padding: 40px;
        color: var(--industrial-text-secondary);
    }


    .industrial-faq-empty-state i {
        font-size: 48px;
        color: var(--industrial-silver);
        margin-bottom: 15px;
        display: block;
    }


    /* CTA Section */
    .industrial-faq-cta-section {
        background: linear-gradient(135deg, var(--industrial-orange), var(--primary-color));
        color: white;
        padding: 50px 40px;
        border-radius: 20px;
        text-align: center;
        margin-top: 60px;
        position: relative;
        overflow: hidden;
    }


    .industrial-faq-cta-section::before {
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


    .industrial-faq-cta-content {
        position: relative;
        z-index: 1;
    }


    .industrial-faq-cta-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 12px;
    }


    .industrial-faq-cta-text {
        font-size: 16px;
        margin-bottom: 20px;
        opacity: 0.95;
    }


    .industrial-faq-cta-button {
        display: inline-block;
        padding: 12px 35px;
        background: var(--industrial-black);
        color: var(--industrial-orange);
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


    .industrial-faq-cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        background: var(--industrial-surface);
    }


    /* Responsive */
    @media (max-width: 1200px) {
        .industrial-faq-section-title {
            font-size: 42px;
        }
    }


    @media (max-width: 991px) {
        .industrial-faq-wrapper {
            padding: 80px 0;
        }


        .industrial-faq-section-title {
            font-size: 36px;
        }


        .industrial-faq-accordion-container {
            max-width: 800px;
        }


        .industrial-faq-accordion-button {
            padding: 18px 20px;
            font-size: 15px;
        }


        .industrial-faq-accordion-body {
            padding: 0 20px 18px 20px;
        }
    }


    @media (max-width: 768px) {
        .industrial-faq-wrapper {
            padding: 60px 0;
        }


        .industrial-faq-section-title {
            font-size: 32px;
        }


        .industrial-faq-subtitle {
            font-size: 15px;
            margin-bottom: 40px;
        }


        .industrial-faq-accordion-item {
            gap: 10px;
        }


        .industrial-faq-accordion-button {
            padding: 16px 16px;
            font-size: 14px;
        }


        .industrial-faq-accordion-body {
            padding: 0 16px 16px 16px;
            font-size: 14px;
        }


        .industrial-faq-accordion-icon {
            width: 28px;
            height: 28px;
            margin-left: 10px;
        }


        .industrial-faq-search-input {
            padding: 12px 16px;
        }


        .industrial-faq-cta-section {
            padding: 35px 25px;
        }


        .industrial-faq-cta-title {
            font-size: 20px;
        }
    }


    @media (max-width: 576px) {
        .industrial-faq-section-title {
            font-size: 28px;
        }


        .industrial-faq-accordion-button {
            padding: 14px 12px;
            font-size: 13px;
        }


        .industrial-faq-accordion-body {
            padding: 0 12px 14px 12px;
            font-size: 13px;
        }


        .industrial-faq-question-icon {
            display: none;
        }


        .industrial-faq-cta-title {
            font-size: 18px;
        }


        .industrial-faq-cta-text {
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


<section class="industrial-faq-wrapper" data-aos="fade-up" data-aos-duration="1000">
    <!-- Animated Background -->
    <div class="industrial-faq-bg-pattern"></div>


    <div class="container">
        <!-- Section Title -->
        <h2 class="industrial-faq-section-title"><?= htmlspecialchars($datasubmenu); ?></h2>
        <p class="industrial-faq-subtitle">Find answers to common questions about our manufacturing solutions</p>


        <!-- Search Box -->
        <div class="industrial-faq-search-wrapper">
            <div class="industrial-faq-search-container">
                <input type="text" 
                       class="industrial-faq-search-input" 
                       id="faqSearch" 
                       placeholder="Search FAQs...">
            </div>
        </div>


        <!-- FAQ Accordion -->
        <div class="industrial-faq-accordion-container">
            <div class="industrial-faq-accordion" id="faqAccordion">
                <?php
                $faqIndex = 0;
                foreach ($fq_list as $faq) {
                    $faqIndex++;
                    $isActive = ($faqIndex === 1) ? 'show' : '';
                    $ariaExpanded = ($faqIndex === 1) ? 'true' : 'false';
                ?>
                    <div class="industrial-faq-accordion-item" data-faq-id="<?= htmlspecialchars($faq['id']); ?>">
                        <div class="industrial-faq-accordion-header">
                            <button class="industrial-faq-accordion-button" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse<?= htmlspecialchars($faq['id']); ?>" 
                                    aria-expanded="<?= $ariaExpanded; ?>" 
                                    aria-controls="collapse<?= htmlspecialchars($faq['id']); ?>">
                                <span class="industrial-faq-question-text">
                                    <i class="fas fa-question-circle industrial-faq-question-icon"></i>
                                    <span><?= htmlspecialchars($faq['title']); ?></span>
                                </span>
                                <span class="industrial-faq-accordion-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </button>
                        </div>
                        <div id="collapse<?= htmlspecialchars($faq['id']); ?>" 
                             class="industrial-faq-accordion-collapse <?= $isActive; ?>" 
                             data-bs-parent="#faqAccordion">
                            <div class="industrial-faq-accordion-body">
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
        <div class="industrial-faq-cta-section" data-aos="zoom-in" data-aos-delay="300">
            <div class="industrial-faq-cta-content">
                <h3 class="industrial-faq-cta-title">Still have questions?</h3>
                <p class="industrial-faq-cta-text">Can't find the answer you're looking for? Contact our team.</p>
                <button class="industrial-faq-cta-button" data-bs-toggle="modal" data-bs-target="#rfqModal">
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
                const faqItems = document.querySelectorAll('.industrial-faq-accordion-item');


                faqItems.forEach(item => {
                    const question = item.querySelector('.industrial-faq-accordion-button').textContent.toLowerCase();
                    const content = item.querySelector('.industrial-faq-accordion-body').textContent.toLowerCase();


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
        const accordionButtons = document.querySelectorAll('.industrial-faq-accordion-button');
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                setTimeout(() => {
                    this.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 100);
            });
        });
    });
</script>
