<?= $this->extend("theme7/frontend/layout/master") ?>
<?= $this->section("customCss") ?>

    <style>
        /* Index Page Specific Styles */
        
        /* Remove default link decoration */
        a {
            text-decoration: none !important;
        }

        /* Payment Popup Overlay */
        #paymentPopup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(8px);
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            background-color: var(--bg-secondary);
            padding: 40px;
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            text-align: center;
            max-width: 500px;
            animation: slideUp 0.4s ease;
        }

        .modal-content p {
            color: var(--text-primary);
            font-size: 16px;
            margin-bottom: 20px;
        }

        .modal-content .btn {
            padding: 12px 30px;
            border-radius: 8px;
        }

        /* Appointment Button */
        #appo-button {
            position: fixed;
            bottom: 50%;
            right: -500%;
            transform: translateY(50%);
            z-index: 1000;
            padding: 12px 24px;
            border-radius: 50px;
            background: var(--primary-color);
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 600;
            box-shadow: var(--shadow-md);
            transition: right 0.4s ease, box-shadow 0.3s ease;
            font-size: 14px;
        }

        #appo-button:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(50%) scale(1.05);
        }

        #appo-button.button-open {
            right: 20px !important;
        }

        /* Appointment Booking Form Container */
        #appointment-booking {
            position: fixed;
            bottom: 50%;
            right: -500%;
            z-index: 999;
            transform: translateY(50%) scale(0.9);
            opacity: 0;
            transition: right 0.4s ease, transform 0.4s ease, opacity 0.4s ease;
            max-height: 90vh;
            overflow-y: auto;
            width: 90%;
            max-width: 450px;
        }

        #appointment-booking.booking-open {
            right: 20px !important;
            transform: translateY(50%) scale(1) !important;
            opacity: 1;
        }

        /* Booking Form Styling */
        .contact-form {
            background: var(--bg-secondary);
            border-radius: 12px;
            border: 1px solid var(--card-border);
            padding: 28px !important;
            margin: 0 !important;
            box-shadow: var(--shadow-md);
            animation: slideUp 0.5s ease;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form label {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 14px;
            margin-bottom: 8px;
        }

        .contact-form .form-control,
        .contact-form .form-select {
            border: 1px solid var(--card-border);
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 14px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background: var(--bg-primary);
            color: var(--text-primary);
        }

        .contact-form .form-control:focus,
        .contact-form .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(33, 128, 161, 0.1);
            background: var(--bg-secondary);
        }

        .contact-form textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .contact-form .btn-color {
            background: var(--primary-color);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .contact-form .btn-color:hover {
            background: var(--primary-text-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .contact-form .btn-danger {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 36px;
            height: 36px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #E74C3C;
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .contact-form .btn-danger:hover {
            background: #C0392B;
            transform: scale(1.1);
        }

        .contact-form .alert {
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .error-text-font {
            font-size: 12px !important;
            color: var(--danger-color);
            margin-top: 4px;
        }

        /* Contact Section */
        .contact {
            background: var(--section-background);
            border-radius: 12px;
            padding: 48px 24px;
        }

        .contact h1 {
            font-size: 32px;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 12px;
        }

        .contact .text-color {
            color: var(--primary-color);
        }

        .contact .top-border {
            border-top: 4px solid var(--primary-color);
            border-radius: 12px;
            overflow: hidden;
        }

        .iframe iframe {
            width: 100%;
            border-radius: 12px;
            height: 320px;
        }

        .responsive-form {
            background: var(--bg-secondary);
            padding: 28px;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
        }

        /* Dynamic Content Sections */
        .home-page {
            min-height: calc(100vh - 140px);
        }

        /* Close button position */
        #appo-button-close {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 10;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #appointment-booking {
                width: 95%;
                max-width: 400px;
            }

            #appo-button {
                padding: 10px 20px;
                font-size: 13px;
                bottom: calc(50% - 20px);
            }

            .contact {
                padding: 32px 16px;
            }

            .contact h1 {
                font-size: 24px;
            }

            .contact .row {
                flex-direction: column;
            }

            .contact .col-md-6 {
                width: 100%;
                margin-bottom: 24px;
            }

            .iframe iframe {
                height: 250px;
            }
        }

        @media (max-width: 640px) {
            #appointment-booking {
                width: 100%;
                max-width: 90vw;
                right: 5% !important;
            }

            #appo-button {
                padding: 10px 16px;
                font-size: 12px;
                right: 10px !important;
            }

            .contact-form {
                padding: 20px !important;
            }

            .contact {
                padding: 24px 12px;
            }

            .contact h1 {
                font-size: 20px;
            }

            .iframe iframe {
                height: 200px;
            }
        }

        /* Animation Classes */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Form validation feedback */
        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #E74C3C;
            background-image: none;
        }

        .invalid-feedback {
            color: #E74C3C;
            font-size: 12px;
            margin-top: 4px;
        }
    </style>

 <?= $this->endSection() ?>

 <?= $this->section("contentTheme7"); ?>

<?php 
// Get class based on appointment booking visibility
$cls = "";
if ($user_details['appointment_booking'] == "Hide") {
    $cls = "d-none";
}

// Get payment status data
$payment_status_data = true;
?>

<!-- PAYMENT POPUP (if unpaid) -->
<?php if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID'): ?>
    <div id="paymentPopup" class="modal">
        <div class="modal-content">
            <h3 style="color: var(--header-text); margin-bottom: 16px;">Payment Required</h3>
            <p>To continue accessing services, please reach out to the Admin for assistance. Thank you for your cooperation.</p>
            <button type="button" class="btn btn-primary" onclick="document.getElementById('paymentPopup').style.display='none';">
                Close
            </button>
        </div>
    </div>
<?php endif; ?>

<!-- MAIN HOME PAGE CONTAINER -->
<div class="home-page overflow-hidden">

    <!-- DYNAMIC SECTIONS (loaded from sort_order) -->
    <?php
        foreach($sort_order as $myurl){
            $url = 'layout/'.$myurl['url_val'].'.php';
            include($url);
        }
    ?>

    <!-- CONTACT SECTION -->
    <section class="mb-5">
        <div class="contact section-padding">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h1>Get in <span class="text-color">Touch</span></h1>
                <p style="color: var(--text-secondary); font-size: 16px; margin-top: 12px;">
                    Have questions? We'd love to hear from you. Send us a message!
                </p>
            </div>

            <!-- Contact Content -->
            <div class="row py-4 gx-5">
                <!-- Map Section -->
                <div class="col-md-6 d-flex mb-4 mb-md-0">
                    <div class="w-100 top-border iframe">
                        <?php 
                        if($user_details['company_map'] != ""){
                            echo $user_details['company_map'];
                        } else {
                            echo '<div style="width:100%; height:320px; background: var(--section-background); border-radius:12px; display:flex; align-items:center; justify-content:center; color: var(--text-secondary);">
                                <i class="fas fa-map-marker-alt" style="font-size: 48px; opacity: 0.3;"></i>
                            </div>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="col-md-6">
                    <div class="top-border responsive-form">
                        <?= $this->include('theme7/frontend/layout/message'); ?>
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
        // Initialize AOS (Animate On Scroll)
        if (typeof AOS !== 'undefined') {
            AOS.init();
        }

        // Appointment Form Toggle
        const appoButton = document.getElementById('appo-button');
        const bookingForm = document.getElementById('appointment-booking');
        const closeButton = document.getElementById('appo-button-close');

        if (appoButton && bookingForm) {
            appoButton.addEventListener('click', function() {
                bookingForm.classList.add('booking-open');
                appoButton.classList.remove('button-open');
            });

            closeButton.addEventListener('click', function() {
                bookingForm.classList.remove('booking-open');
                appoButton.classList.add('button-open');
            });

            // Close when clicking outside
            document.addEventListener('click', function(event) {
                if (!bookingForm.contains(event.target) && 
                    !appoButton.contains(event.target) && 
                    bookingForm.classList.contains('booking-open')) {
                    // Optional: only close if clicking on main content area
                    // bookingForm.classList.remove('booking-open');
                    // appoButton.classList.add('button-open');
                }
            });
        }

        // Show/Hide Payment Popup
        <?php if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) === 'UNPAID'): ?>
            const paymentPopup = document.getElementById('paymentPopup');
            if (paymentPopup) {
                paymentPopup.style.display = 'flex';
            }
        <?php endif; ?>

        // Form validation visual feedback
        const inputs = document.querySelectorAll('.contact-form .form-control, .contact-form .form-select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() === '' && this.hasAttribute('required')) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });

            input.addEventListener('input', function() {
                if (this.value.trim() !== '') {
                    this.classList.remove('is-invalid');
                }
            });
        });

        // Phone number formatting (optional)
        const phoneInput = document.getElementById('bookingPhone');
        if (phoneInput) {
            phoneInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10);
            });
        }
    });
</script>

<?= $this->endSection() ?>

