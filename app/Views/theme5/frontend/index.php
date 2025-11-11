
<?= $this->extend("theme5/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    /* ===== MEDICAL THEME - HOME PAGE STYLES ===== */

    a {
        text-decoration: none !important;
    }

    body {
        background: var(--theme_mode_color) !important;
    }

    /* ===== FLOATING APPOINTMENT BUTTON ===== */
    #appo-button {
        position: fixed;
        bottom: 50%;
        right: -150px;
        transform: translateY(50%);
        z-index: 9990;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        padding: 16px 24px;
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 700;
        font-size: 14px;
        box-shadow: 0 8px 25px rgba(0, 128, 128, 0.3);
        cursor: pointer;
        white-space: nowrap;
        display: flex;
        align-items: center;
        gap: 10px;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(50%); }
        50% { transform: translateY(calc(50% - 10px)); }
    }

    #appo-button::before {
        content: '📋';
        font-size: 18px;
    }

    #appo-button:hover {
        box-shadow: 0 12px 35px rgba(0, 128, 128, 0.4);
        transform: translateY(50%) scale(1.05);
    }

    #appo-button.button-open {
        right: 10px !important;
    }

    /* ===== APPOINTMENT BOOKING FORM ===== */
    #appointment-booking {
        position: fixed;
        bottom: 50%;
        right: -100%;
        z-index: 9991;
        transform: translateY(50%) scale(0.9);
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        opacity: 0;
        pointer-events: none;
    }

    #appointment-booking.booking-open {
        right: 20px !important;
        transform: translateY(50%) scale(1) !important;
        opacity: 1;
        pointer-events: all;
    }

    .booking-form-card {
        background: var(--theme_surface_color);
        border-radius: 15px;
        padding: 35px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        width: 400px;
        max-height: 85vh;
        overflow-y: auto;
        border-top: 5px solid var(--medical-teal, #008080);
    }

    .booking-form-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e9ecef;
    }

    .booking-form-header h4 {
        margin: 0;
        font-size: 22px;
        font-weight: 700;
        color: var(--text-dark);
    }

    .booking-form-header i {
        color: var(--medical-teal, #008080);
        font-size: 24px;
    }

    #appo-button-close {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    #appo-button-close:hover {
        transform: rotate(90deg) scale(1.1);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
    }

    /* ===== FORM ELEMENTS ===== */
    .booking-form-group {
        margin-bottom: 18px;
    }

    .booking-form-group label {
        display: block;
        font-weight: 600;
        font-size: 14px;
        color: var(--text-dark);
        margin-bottom: 8px;
        text-transform: capitalize;
    }

    .booking-form-group input,
    .booking-form-group select,
    .booking-form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .booking-form-group input:focus,
    .booking-form-group select:focus,
    .booking-form-group textarea:focus {
        outline: none;
        border-color: var(--medical-teal, #008080);
        background: var(--theme_surface_color);
        box-shadow: 0 0 0 4px rgba(0, 128, 128, 0.1);
    }

    .booking-form-group textarea {
        resize: vertical;
        min-height: 100px;
    }

    .error-text-font {
        font-size: 12px;
        color: #dc3545;
        margin-top: 4px;
        display: block;
    }

    /* ===== SUBMIT BUTTON ===== */
    .booking-submit-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, var(--medical-teal, #008080) 0%, #006666 100%);
        border: none;
        border-radius: 10px;
        color: white;
        font-weight: 700;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
        position: relative;
        overflow: hidden;
    }

    .booking-submit-btn::before {
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

    .booking-submit-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .booking-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 128, 128, 0.3);
    }

    /* ===== ALERT MESSAGES ===== */
    .booking-alert {
        border-radius: 12px;
        border: none;
        padding: 14px 16px;
        margin-bottom: 20px;
        animation: slideInDown 0.4s ease-out;
        border-left: 4px solid;
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .booking-alert.alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        border-left-color: var(--trust-green, #28a745);
        color: #155724;
    }

    .booking-alert.alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        border-left-color: #dc3545;
        color: #721c24;
    }

    /* ===== PAYMENT POPUP ===== */
    #paymentPopup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 61, 122, 0.6), rgba(0, 128, 128, 0.4));
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(10px);
        animation: fadeIn 0.3s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    #paymentPopup .modal-content {
        background: var(--theme_surface_color);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        animation: slideUp 0.4s ease-out;
        border: 1px solid rgba(0, 128, 128, 0.1);
        max-width: 500px;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #paymentPopup .modal-content h4 {
        color: var(--text-dark);
        font-weight: 700;
        margin-bottom: 15px;
    }

    #paymentPopup .modal-content p {
        color: #6c757d;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    /* ===== CONTACT SECTION ===== */
    .contact-section-wrapper {
        position: relative;
        padding: 100px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    .contact-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.03;
        background-image: 
            radial-gradient(circle at 20% 80%, var(--medical-blue, #003d7a) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, var(--medical-teal, #008080) 0%, transparent 50%);
        pointer-events: none;
    }

    .contact-title-wrapper {
        text-align: center;
        margin-bottom: 70px;
        position: relative;
        z-index: 1;
    }

    .contact-main-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
    }

    .contact-main-title i {
        color: var(--medical-teal, #008080);
    }

    .contact-subtitle {
        font-size: 18px;
        color: #6c757d;
        font-weight: 500;
    }

    /* ===== CONTACT CONTENT ===== */
    .contact-content-wrapper {
        position: relative;
        z-index: 1;
    }

    .contact-map-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
    }

    .contact-map-container:hover {
        box-shadow: 0 20px 60px rgba(0, 128, 128, 0.2);
        transform: translateY(-5px);
    }

    .contact-map-container iframe {
        width: 100%;
        height: 1056px!important;
        border-radius: 20px;
        border: none;
    }

    .contact-form-wrapper {
        background: var(--theme_surface_color);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        border-top: 4px solid var(--medical-teal, #008080);
    }

    /* ===== HOME PAGE WRAPPER ===== */
    .home-page {
        width: 100%;
        overflow: hidden;
    }

    /* ===== SCROLLBAR STYLING ===== */
    .booking-form-card::-webkit-scrollbar {
        width: 6px;
    }

    .booking-form-card::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .booking-form-card::-webkit-scrollbar-thumb {
        background: var(--medical-teal, #008080);
        border-radius: 10px;
    }

    .booking-form-card::-webkit-scrollbar-thumb:hover {
        background: var(--medical-blue, #003d7a);
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 1200px) {
        .booking-form-card {
            width: 350px;
            padding: 30px;
        }
    }

    @media (max-width: 991px) {
        .contact-section-wrapper {
            padding: 80px 0;
        }

        .contact-main-title {
            font-size: 38px;
        }

        .booking-form-card {
            width: 320px;
        }
    }

    @media (max-width: 768px) {
        #appo-button {
            bottom: 20px;
            right: 10px !important;
            padding: 12px 16px;
            font-size: 12px;
            border-radius: 50px;
        }

        #appointment-booking.booking-open {
            right: 10px !important;
        }

        .booking-form-card {
            width: calc(100% - 20px);
            max-width: 100%;
            max-height: 80vh;
        }

        .contact-map-container iframe {
            height: 300px;
        }

        .contact-main-title {
            font-size: 32px;
        }

        .contact-form-wrapper {
            padding: 25px;
        }
    }

    @media (max-width: 576px) {
        .booking-form-card {
            width: calc(100% - 10px);
            padding: 20px;
        }

        .contact-main-title {
            font-size: 28px;
        }

        .booking-form-header {
            margin-bottom: 20px;
            padding-bottom: 15px;
        }

        .booking-form-header h4 {
            font-size: 18px;
        }
    }

    /* ===== DARK MODE SUPPORT ===== */
    body.theme-dark .booking-form-card {
        background: #1a1f2e;
        border-top-color: var(--medical-teal, #008080);
    }

    body.theme-dark .contact-form-wrapper {
        background: #1a1f2e;
        border-top-color: var(--medical-teal, #008080);
    }

    body.theme-dark .booking-form-group input,
    body.theme-dark .booking-form-group select,
    body.theme-dark .booking-form-group textarea {
        background: #2a2f3e;
        border-color: #3a3f4e;
        color: #e0e0e0;
    }

    body.theme-dark .booking-form-group input:focus,
    body.theme-dark .booking-form-group select:focus,
    body.theme-dark .booking-form-group textarea:focus {
        background: #1a1f2e;
        border-color: var(--medical-teal, #008080);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme5");
$cls = "";

if ($user_details['appointment_booking'] == "Hide") {
    $cls = "d-none";
}
?>

<?php
$payment_status_data = json_decode($payment_status, true);
if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID'): ?>
    <div id="paymentPopup" style="display: none;">
        <div class="modal-content">
            <h4 style="margin-bottom: 15px;">
                <i class="fas fa-lock me-2" style="color: #dc3545;"></i>Subscription Required
            </h4>
            <p style="color: #6c757d; margin-bottom: 20px;">
                Your subscription has expired. To continue accessing our healthcare services, please contact our administration team for assistance.
            </p>
            <button onclick="document.getElementById('paymentPopup').style.display='none'" class="btn btn-primary">
                <i class="fas fa-check me-2"></i>Understood
            </button>
        </div>
    </div>
<?php endif; ?>

<!-- ===== MEDICAL THEME HOME PAGE ===== -->
<div class="home-page overflow-hidden">

    <!-- ===== DYNAMIC PAGE SECTIONS ===== -->
    <?php foreach($sort_order as $myurl){ 
        $url = 'layout/'.$myurl['url_val'].'.php';
        include($url);
    } ?>

    <!-- ===== MEDICAL CONTACT SECTION ===== -->
    <section class="contact-section-wrapper">
        <div class="contact-bg-pattern"></div>

        <div class="container contact-content-wrapper">
            <!-- Contact Section Title -->
            <div class="contact-title-wrapper">
                <h1 class="contact-main-title">
                    <i class="fas fa-phone-volume me-2"></i>Contact Us
                </h1>
                <p class="contact-subtitle">Reach Out - Our Healthcare Team Is Ready to Assist</p>
            </div>

            <!-- Contact Content Grid -->
            <div class="row g-4">
                <!-- Map Container -->
                <div class="col-lg-6">
                    <div class="contact-map-container">
                        <?php if($user_details['company_map']!="") { 
                            echo $user_details['company_map'];
                        } else { ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } ?>
                    </div>
                </div>

                <!-- Contact Form Container -->
                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <?= $this->include('theme5/frontend/layout/message'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>

<?= $this->section("customScripts") ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    }

    // ===== APPOINTMENT BOOKING FORM TOGGLE =====
    const appoButton = document.getElementById('appo-button');
    const appointmentBooking = document.getElementById('appointment-booking');
    const closeButton = document.getElementById('appo-button-close');

    // Open appointment form
    if (appoButton) {
        appoButton.addEventListener('click', function(e) {
            e.stopPropagation();
            appointmentBooking.classList.add('booking-open');
            appoButton.classList.remove('button-open');
        });
    }

    // Close appointment form
    if (closeButton) {
        closeButton.addEventListener('click', function(e) {
            e.stopPropagation();
            appointmentBooking.classList.remove('booking-open');
            appoButton.classList.add('button-open');
        });
    }

    // Close on outside click
    document.addEventListener('click', function(event) {
        if (appointmentBooking && !appointmentBooking.contains(event.target) && !appoButton.contains(event.target)) {
            if (appointmentBooking.classList.contains('booking-open')) {
                appointmentBooking.classList.remove('booking-open');
                appoButton.classList.add('button-open');
            }
        }
    });

    // ===== PAYMENT STATUS POPUP =====
    <?php if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) === 'UNPAID'): ?>
        // Uncomment to show payment popup
        // document.getElementById('paymentPopup').style.display = 'flex';
    <?php endif; ?>

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// ===== FORM VALIDATION =====
function validateMedicalForm(formData) {
    const errors = [];

    if (!formData.name || formData.name.trim().length < 3) {
        errors.push('Please enter your full name');
    }

    if (!formData.phone || formData.phone.trim().length < 10) {
        errors.push('Please enter a valid phone number');
    }

    if (!formData.email || !validateEmail(formData.email)) {
        errors.push('Please enter a valid email address');
    }

    return errors;
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// ===== RESPONSIVE ADJUSTMENT =====
window.addEventListener('resize', function() {
    const appointmentBooking = document.getElementById('appointment-booking');
    const bookingFormCard = document.querySelector('.booking-form-card');
    
    if (window.innerWidth < 768 && appointmentBooking) {
        appointmentBooking.style.transform = 'translateY(50%) scale(1)';
    }
});
</script>
<?= $this->endSection() ?>
