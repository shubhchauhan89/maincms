<?= $this->extend("theme4/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    a {
        text-decoration: none !important;
    }

    /* Appointment Popup Overlay */
    #paymentPopup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
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

    .modal-content {
        background: var(--theme_surface_color);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        /* max-width: 500px; */
        animation: slideUp 0.4s ease-out;
        border: 1px solid rgba(0, 0, 0, 0.05);
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

    /* Floating Appointment Button */
    #appo-button {
        position: fixed;
        bottom: 50%;
        right: -150px;
        transform: translateY(50%);
        z-index: 9990;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        padding: 16px 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 700;
        font-size: 14px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
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
        content: '📅';
        font-size: 18px;
    }

    body{
        background: var(--theme_mode_color) !important;
    }

    #appo-button:hover {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
        transform: translateY(50%) scale(1.05);
    }

    #appo-button.button-open {
        right: 10px !important;
    }

    /* Appointment Booking Form */
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
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        width: 400px;
        max-height: 85vh;
        overflow-y: auto;
        border-top: 5px solid var(--primary-color);
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

    #appo-button-close {
        background: #ff6b6b;
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
        background: #ff5252;
        transform: rotate(90deg);
    }

    /* Form Elements */
    .booking-form-group {
        margin-bottom: 18px;
    }

    .booking-form-group label {
        display: block;
        font-weight: 600;
        font-size: 14px;
        color: var(--text-dark);
        margin-bottom: 8px;
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
        border-color: var(--primary-color);
        background: var(--theme_surface_color);
        box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.1);
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

    /* Submit Button */
    .booking-submit-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
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
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    /* Alert Messages */
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
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        border-left-color: #28a745;
        color: #155724;
    }

    .booking-alert.alert-danger {
        background: linear-gradient(135deg, #f8d7da, #f5c6cb);
        border-left-color: #dc3545;
        color: #721c24;
    }

    /* Contact Section Styles */
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
        opacity: 0.05;
        background-image: 
            radial-gradient(circle at 20% 80%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, var(--accent-color) 0%, transparent 50%);
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
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 10px;
    }

    .contact-subtitle {
        font-size: 18px;
        color: #6c757d;
        font-weight: 500;
    }

    /* Contact Content Layout */
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
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
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
    }

    /* Responsive */
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
    }

    /* Scrollbar Styling */
    .booking-form-card::-webkit-scrollbar {
        width: 6px;
    }

    .booking-form-card::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .booking-form-card::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 10px;
    }

    .booking-form-card::-webkit-scrollbar-thumb:hover {
        background: var(--accent-color);
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contenttheme4");
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
            <h4 style="margin-bottom: 15px; color: var(--text-dark);">
                <i class="fas fa-exclamation-circle me-2" style="color: #ff6b6b;"></i>Payment Required
            </h4>
            <p style="color: #6c757d; margin-bottom: 20px;">
                To continue accessing services, please reach out to the Admin for assistance. Thank you for your cooperation.
            </p>
            <button onclick="document.getElementById('paymentPopup').style.display='none'" class="btn btn-primary">
                Got it
            </button>
        </div>
    </div>
<?php endif; ?>

<div class="home-page overflow-hidden">

    <!-- Floating Appointment Button -->
    <button id="appo-button" class="<?= $cls; ?>" type="button">
        Book an Appointment
    </button>

    <!-- Appointment Booking Form -->
    <div id="appointment-booking" class="<?= $cls; ?>">
        <div class="booking-form-card">
            <div class="booking-form-header">
                <h4>
                    <i class="fas fa-calendar-check me-2"></i>Book Appointment
                </h4>
                <button type="button" id="appo-button-close" title="Close"></button>
            </div>

            <form method="post" action="<?= base_url(); ?>/submit-query">
                <?php 
                $validation = \Config\Services::validation();
                $session = \Config\Services::session();

                if ($session->getFlashdata('message') !== NULL) : ?>
                    <div class="alert booking-alert alert-success" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <?php echo session()->getFlashdata('message'); ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($session->getFlashdata('error') !== NULL) : ?>
                    <div class="alert booking-alert alert-danger" role="alert">
                        <i class="fas fa-times-circle me-2"></i>
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <!-- Name -->
                <div class="booking-form-group">
                    <label for="bookingName">
                        <i class="fas fa-user me-1"></i>Your Name <span class="text-danger">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="bookingName" 
                        name="bookingName" 
                        value="<?= old('bookingName') ?>" 
                        placeholder="Enter your full name"
                        required>
                    <span class="error-text-font"><?= $validation->getError('bookingName') ?></span>
                </div>

                <!-- Email and Phone -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="booking-form-group">
                        <label for="bookingEmail">
                            <i class="fas fa-envelope me-1"></i>Email <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="bookingEmail" 
                            name="bookingEmail" 
                            value="<?= old('bookingEmail') ?>" 
                            placeholder="Your email"
                            required>
                        <span class="error-text-font"><?= $validation->getError('bookingEmail') ?></span>
                    </div>

                    <div class="booking-form-group">
                        <label for="bookingPhone">
                            <i class="fas fa-phone me-1"></i>Phone <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="bookingPhone" 
                            name="bookingPhone" 
                            value="<?= old('bookingPhone') ?>" 
                            maxlength="10" 
                            placeholder="10-digit number"
                            required>
                        <span class="error-text-font"><?= $validation->getError('bookingPhone') ?></span>
                    </div>
                </div>

                <!-- Date and Time -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div class="booking-form-group">
                        <label for="bookingDate">
                            <i class="fas fa-calendar me-1"></i>Booking Date <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="date" 
                            id="bookingDate" 
                            name="bookingDate" 
                            value="<?= old('bookingDate') ?>"
                            required>
                        <span class="error-text-font"><?= $validation->getError('bookingDate') ?></span>
                    </div>

                    <div class="booking-form-group">
                        <label for="bookingTime">
                            <i class="fas fa-clock me-1"></i>Time <span class="text-danger">*</span>
                        </label>
                        <select name="bookingTime" id="bookingTime" required>
                            <option value="">Select Time</option>
                            <?php for ($i = 0; $i < 24; $i++) : ?>
                                <?php if ($i % 12) : ?>
                                    <option value="<?= $i; ?>" <?= old('bookingTime') == $i ? "selected" : '' ?>>
                                        <?= $i % 12 ?>:00 <?= $i >= 12 ? 'PM' : 'AM' ?>
                                    </option>
                                    <option value="<?= $i; ?>:30" <?= old('bookingTime') == $i . ":30" ? "selected" : '' ?>>
                                        <?= $i % 12 ?>:30 <?= $i >= 12 ? 'PM' : 'AM' ?>
                                    </option>
                                <?php else : ?>
                                    <option value="<?= $i; ?>" <?= old('bookingTime') == $i ? "selected" : '' ?>>
                                        12:00 <?= $i >= 12 ? 'PM' : 'AM' ?>
                                    </option>
                                    <option value="<?= $i; ?>:30" <?= old('bookingTime') == $i . ":30" ? "selected" : '' ?>>
                                        12:30 <?= $i >= 12 ? 'PM' : 'AM' ?>
                                    </option>
                                <?php endif; ?>
                            <?php endfor ?>
                        </select>
                        <span class="error-text-font"><?= $validation->getError('bookingTime') ?></span>
                    </div>
                </div>

                <!-- Query -->
                <div class="booking-form-group">
                    <label for="bookingQuery">
                        <i class="fas fa-comment-alt me-1"></i>Your Query <span class="text-danger">*</span>
                    </label>
                    <textarea 
                        name="bookingQuery" 
                        id="bookingQuery"
                        placeholder="Tell us about your requirements..."
                        required><?= old('bookingQuery') ?></textarea>
                    <span class="error-text-font"><?= $validation->getError('bookingQuery') ?></span>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="booking-submit-btn">
                    <i class="fas fa-paper-plane me-2"></i>Submit Query
                </button>
            </form>
        </div>
    </div>

    <!-- Page Content -->
    <?php foreach($sort_order as $myurl){ 
        $url = 'layout/'.$myurl['url_val'].'.php';
        include($url);
    } ?>

    <!-- Contact Section -->
    <section class="contact-section-wrapper">
        <div class="contact-bg-pattern"></div>

        <div class="container contact-content-wrapper">
            <!-- Section Title -->
            <div class="contact-title-wrapper">
                <h1 class="contact-main-title">
                    <i class="fas fa-headset me-2"></i>Contact Us
                </h1>
                <p class="contact-subtitle">Get In Touch - We're Here to Help</p>
            </div>

            <!-- Contact Content -->
            <div class="row g-4">
                <!-- Map -->
                <div class="col-lg-6">
                    <div class="contact-map-container">
                        <?php if($user_details['company_map']!="") { 
                            echo $user_details['company_map'];
                        } else { ?>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.822434945!2d77!3d28!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDAwJzAwLjAiTiA3N8KwMDAnMDAuMCJF!5e0!3m2!1sen!2sin!4v" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php } ?>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <?= $this->include('theme4/frontend/layout/message'); ?>
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
        AOS.init();

        // Appointment Form Toggle
        const appoButton = document.getElementById('appo-button');
        const appointmentBooking = document.getElementById('appointment-booking');
        const closeButton = document.getElementById('appo-button-close');

        appoButton.addEventListener('click', function() {
            appointmentBooking.classList.add('booking-open');
            appoButton.classList.remove('button-open');
        });

        closeButton.addEventListener('click', function() {
            appointmentBooking.classList.remove('booking-open');
            appoButton.classList.add('button-open');
        });

        // Close on outside click
        document.addEventListener('click', function(event) {
            if (!appointmentBooking.contains(event.target) && !appoButton.contains(event.target)) {
                if (appointmentBooking.classList.contains('booking-open')) {
                    appointmentBooking.classList.remove('booking-open');
                    appoButton.classList.add('button-open');
                }
            }
        });

        // Payment Status Popup
        <?php if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) === 'UNPAID'): ?>
            // document.getElementById('paymentPopup').style.display = 'flex';
        <?php endif; ?>
    });
</script>
<?= $this->endSection() ?>
