<?php   
if (!empty($testimonials)) {
    foreach ($testimonials as $testi) {
        if ($testi['section_id'] == $myurl['section_id']) {
            if (isset($testi['section_id'])) {
                unset($testi['section_id']);
            }
            if (isset($testi['sub_menu_name'])) {
                $datasubmenu = $testi['sub_menu_name'];
                unset($testi['sub_menu_name']);
            } else {
                $datasubmenu = "Patient Testimonials";
            }
?>

<style>
    /* ===== REVOLUTIONARY MEDICAL TESTIMONIALS SECTION ===== */
    
    .medical-testimonials-revolutionary-wrapper {
        position: relative;
        padding: 150px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated gradient circles background */
    .medical-testimonials-bg-circles {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0.08;
        pointer-events: none;
        overflow: hidden;
    }

    .medical-testimonials-circle {
        position: absolute;
        border-radius: 50%;
        mix-blend-mode: multiply;
        filter: blur(40px);
    }

    .medical-testimonials-circle-1 {
        width: 300px;
        height: 300px;
        background: var(--medical-blue, #003d7a);
        top: -100px;
        left: -100px;
        animation: float-circle 15s ease-in-out infinite;
    }

    .medical-testimonials-circle-2 {
        width: 250px;
        height: 250px;
        background: var(--medical-teal, #008080);
        bottom: -50px;
        right: 10%;
        animation: float-circle 20s ease-in-out infinite reverse;
    }

    .medical-testimonials-circle-3 {
        width: 200px;
        height: 200px;
        background: var(--medical-blue, #003d7a);
        bottom: 20%;
        right: -80px;
        animation: float-circle 18s ease-in-out infinite;
    }

    @keyframes float-circle {
        0%, 100% { transform: translate(0, 0); }
        25% { transform: translate(20px, -30px); }
        50% { transform: translate(-20px, 30px); }
        75% { transform: translate(30px, 20px); }
    }

    /* Section Header */
    .medical-testimonials-header {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-bottom: 80px;
    }

    .medical-testimonials-title {
        font-size: 56px;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -2px;
        color: var(--text-dark);
    }

    .medical-testimonials-title span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .medical-testimonials-divider {
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    .medical-testimonials-subtitle {
        font-size: 16px;
        color: #6c757d;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Testimonials Grid */
    .medical-testimonials-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    /* ===== UNIQUE TESTIMONIAL CARD ===== */
    .medical-testimonial-card {
        position: relative;
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(0, 128, 128, 0.1);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        cursor: pointer;
        overflow: hidden;
    }

    .medical-testimonial-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        transform: scaleX(0);
        transition: transform 0.6s ease;
        transform-origin: left;
    }

    .medical-testimonial-card:hover::before {
        transform: scaleX(1);
    }

    .medical-testimonial-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 30px 70px rgba(0, 128, 128, 0.15);
        border-color: rgba(0, 128, 128, 0.2);
    }

    /* Star Rating */
    .medical-testimonial-stars {
        display: flex;
        gap: 4px;
        margin-bottom: 20px;
    }

    .medical-testimonial-star {
        color: var(--medical-teal, #008080);
        font-size: 16px;
    }

    /* Quote Icon */
    .medical-testimonial-quote {
        font-size: 48px;
        color: var(--medical-teal, #008080);
        opacity: 0.3;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .medical-testimonial-card:hover .medical-testimonial-quote {
        opacity: 0.5;
        transform: scale(1.1);
    }

    /* Testimonial Text */
    .medical-testimonial-text {
        font-size: 15px;
        line-height: 1.8;
        color: #6c757d;
        margin-bottom: 25px;
        min-height: 80px;
        transition: color 0.3s ease;
    }

    .medical-testimonial-card:hover .medical-testimonial-text {
        color: var(--text-dark);
    }

    /* Author Section */
    .medical-testimonial-author {
        display: flex;
        align-items: center;
        gap: 15px;
        position: relative;
        z-index: 2;
    }

    .medical-testimonial-avatar {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        object-fit: cover;
        border: 3px solid var(--medical-teal, #008080);
        transition: all 0.3s ease;
    }

    .medical-testimonial-card:hover .medical-testimonial-avatar {
        transform: scale(1.1);
        border-color: var(--medical-blue, #003d7a);
    }

    .medical-testimonial-author-info h5 {
        font-size: 16px;
        font-weight: 800;
        color: var(--text-dark);
        margin: 0 0 4px 0;
    }

    .medical-testimonial-author-info span {
        font-size: 12px;
        color: #adb5bd;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Read More Button */
    .medical-testimonial-read-more {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 700;
        color: var(--medical-teal, #008080);
        text-decoration: none;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .medical-testimonial-read-more:hover {
        gap: 10px;
        color: var(--medical-blue, #003d7a);
    }

    /* Testimonial Modal */
    .medical-testimonial-modal-header {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080)) !important;
        color: white !important;
        border: none !important;
        padding: 30px !important;
    }

    .medical-testimonial-modal-title {
        color: white !important;
        font-weight: 700 !important;
    }

    .medical-testimonial-modal-body {
        padding: 40px !important;
        font-size: 16px !important;
        line-height: 1.8 !important;
        color: #6c757d !important;
    }

    .medical-testimonial-modal-quote {
        font-size: 48px;
        color: var(--medical-teal, #008080);
        opacity: 0.2;
        margin-bottom: 20px;
    }

    .medical-testimonial-modal-name {
        text-align: right;
        margin-top: 30px;
        color: var(--medical-teal, #008080);
        font-weight: 600;
    }

    /* Animations */
    .medical-testimonial-card-animate {
        opacity: 0;
        animation: testimonial-fadeInUp 0.6s ease-out forwards;
    }

    @keyframes testimonial-fadeInUp {
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
        .medical-testimonials-title {
            font-size: 48px;
        }
        .medical-testimonials-grid {
            gap: 35px;
        }
    }

    @media (max-width: 991px) {
        .medical-testimonials-revolutionary-wrapper {
            padding: 100px 0;
        }
        .medical-testimonials-title {
            font-size: 40px;
        }
        .medical-testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .medical-testimonials-revolutionary-wrapper {
            padding: 80px 0;
        }
        .medical-testimonials-title {
            font-size: 32px;
        }
        .medical-testimonials-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }
        .medical-testimonial-card {
            padding: 30px;
        }
    }

    @media (max-width: 576px) {
        .medical-testimonials-title {
            font-size: 28px;
        }
        .medical-testimonial-card {
            padding: 24px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-testimonial-card {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL TESTIMONIALS SECTION ===== -->
<section class="medical-testimonials-revolutionary-wrapper">
    <!-- Animated Background Circles -->
    <div class="medical-testimonials-bg-circles">
        <div class="medical-testimonials-circle medical-testimonials-circle-1"></div>
        <div class="medical-testimonials-circle medical-testimonials-circle-2"></div>
        <div class="medical-testimonials-circle medical-testimonials-circle-3"></div>
    </div>

    <div class="container">
        <!-- Header -->
        <div class="medical-testimonials-header" data-aos="fade-down" data-aos-duration="900">
            <h2 class="medical-testimonials-title">
                What Our <span>Patients Say</span>
            </h2>
            <div class="medical-testimonials-divider"></div>
            <p class="medical-testimonials-subtitle">
                Real stories from real patients who experienced exceptional care and life-changing results
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="medical-testimonials-grid">
            <?php
            $testimonialIndex = 0;
            foreach ($testi as $testimonial) {
                $img = !empty($testimonial['image']) 
                    ? base_url() . '/public/uploads/testimonial_images/' . $testimonial['image'] 
                    : base_url() . '/public/assets/img/default-avatar.png';
                
                $preview_text = strlen($testimonial['description']) > 150 
                    ? substr($testimonial['description'], 0, 150) . '...' 
                    : $testimonial['description'];
                
                $animationDelay = $testimonialIndex * 100;
                $testimonialIndex++;
            ?>
                <div class="medical-testimonial-card medical-testimonial-card-animate" 
                     data-aos="fade-up" 
                     data-aos-delay="<?= $animationDelay; ?>"
                     style="animation-delay: <?= $animationDelay; ?>ms;">

                    <!-- Star Rating -->
                    <div class="medical-testimonial-stars">
                        <i class="fas fa-star medical-testimonial-star"></i>
                        <i class="fas fa-star medical-testimonial-star"></i>
                        <i class="fas fa-star medical-testimonial-star"></i>
                        <i class="fas fa-star medical-testimonial-star"></i>
                        <i class="fas fa-star medical-testimonial-star"></i>
                    </div>

                    <!-- Quote Icon -->
                    <i class="fas fa-quote-left medical-testimonial-quote"></i>

                    <!-- Testimonial Text -->
                    <p class="medical-testimonial-text">
                        <?= htmlspecialchars($preview_text); ?>
                    </p>

                    <!-- Read More Button -->
                    <?php if (strlen($testimonial['description']) > 150) { ?>
                        <a class="medical-testimonial-read-more" 
                           href="javascript:void(0)" 
                           onclick="medicalTestimonialModal('<?php echo base64_encode($testimonial['description']); ?>', '<?= htmlspecialchars($testimonial['name']); ?>')">
                            Read full review
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    <?php } ?>

                    <!-- Author Info -->
                    <div class="medical-testimonial-author">
                        <img src="<?= $img; ?>" 
                             alt="<?= htmlspecialchars($testimonial['name']); ?>" 
                             class="medical-testimonial-avatar">
                        <div class="medical-testimonial-author-info">
                            <h5><?= htmlspecialchars($testimonial['name']); ?></h5>
                            <span><?= date('d M Y', strtotime($testimonial['created_at'])); ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }

        // Add staggered animation delays
        const testimonials = document.querySelectorAll('.medical-testimonial-card-animate');
        testimonials.forEach((card, index) => {
            card.style.animationDelay = (index * 100) + 'ms';
        });
    });

    // Testimonial Modal
    function medicalTestimonialModal(description, name = '') {
        const decodedDescription = atob(description);
        const modalHTML = `
            <div class="modal fade" id="medicalTestimonialModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content" style="border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 128, 128, 0.2);">
                        <div class="modal-header medical-testimonial-modal-header">
                            <h5 class="modal-title medical-testimonial-modal-title">
                                <i class="fas fa-quote-left me-2"></i>Patient Review
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body medical-testimonial-modal-body">
                            <i class="fas fa-quote-left medical-testimonial-modal-quote"></i>
                            <p>${escapeHtml(decodedDescription)}</p>
                            ${name ? '<p class="medical-testimonial-modal-name">— ' + escapeHtml(name) + '</p>' : ''}
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Remove existing modal if present
        const existingModal = document.getElementById('medicalTestimonialModal');
        if (existingModal) existingModal.remove();

        // Insert and show modal
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        const modal = new bootstrap.Modal(document.getElementById('medicalTestimonialModal'));
        modal.show();

        // Remove modal after hide
        document.getElementById('medicalTestimonialModal').addEventListener('hidden.bs.modal', function() {
            this.remove();
        });
    }

    // Helper function to escape HTML
    function escapeHtml(text) {
        const map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, m => map[m]);
    }
</script>

<?php
        }
    }
}
?>
