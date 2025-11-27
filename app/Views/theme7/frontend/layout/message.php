
<section class="contact-form-section" 
         style="padding: 80px 0; 
                 background: linear-gradient(135deg, rgba(33, 128, 161, 0.03) 0%, var(--section-background) 100%); 
                 position: relative; 
                 overflow: hidden;">
    
    <!-- Animated Background Elements -->
    <div class="form-background-decoration" 
         style="position: absolute; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                z-index: 0; 
                overflow: hidden;">
        
        <div style="position: absolute; 
                   width: 250px; 
                   height: 250px; 
                   background: radial-gradient(circle, rgba(33, 128, 161, 0.1), transparent); 
                   border-radius: 50%; 
                   top: -50px; 
                   right: -50px; 
                   animation: float 8s ease-in-out infinite;"></div>
        
        <div style="position: absolute; 
                   width: 180px; 
                   height: 180px; 
                   background: radial-gradient(circle, rgba(230, 126, 34, 0.1), transparent); 
                   border-radius: 50%; 
                   bottom: 50px; 
                   left: -50px; 
                   animation: float 10s ease-in-out infinite; 
                   animation-delay: 1s;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 1;">
        
        <?php
        if (isset($myurl['sorting_order'])) {
            $id = $myurl['sorting_order'];
        } else {
            $id = "111";
        }
        
        $validation = \Config\Services::validation();
        $session = \Config\Services::session();
        ?>

        <!-- Section Header -->
        <div class="section-header text-center mb-5" style="animation: slideDownFade 0.8s ease-out;">
            
            <h2 class="form-section-title fw-bold" 
                style="font-size: 40px; 
                       color: var(--text-primary); 
                       margin-bottom: 15px; 
                       text-transform: uppercase; 
                       letter-spacing: 2px;">
                <span style="background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                           -webkit-background-clip: text; 
                           -webkit-text-fill-color: transparent; 
                           background-clip: text;">
                    Get In Touch
                </span>
            </h2>
            
            <!-- Animated divider -->
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
                      max-width: 600px; 
                      margin-left: auto; 
                      margin-right: auto; 
                      animation: fadeIn 0.8s ease-out; 
                      animation-delay: 0.3s;">
                Have a question or want to send us a message? Fill out the form below and we'll get back to you shortly.
            </p>
        </div>

        <!-- Form Container -->
        <div class="form-container" 
             style="max-width: 600px; 
                    margin: 0 auto; 
                    animation: slideUpFade 0.8s ease-out; 
                    animation-delay: 0.4s;">
            
            <!-- Form Card -->
            <div class="form-card" 
                 style="background: var(--card-background); 
                        border: 1px solid var(--card-border); 
                        border-radius: var(--border-radius-lg); 
                        padding: 40px; 
                        box-shadow: var(--shadow-sm); 
                        transition: all var(--transition-normal) var(--ease-standard);">
                
                <form class="contact-form" id="contactForm<?= $id; ?>" method="POST" action="<?= base_url('contact-submit') ?>">
                    
                    <!-- Success Alert -->
                    <?php if ($session->getFlashdata('message') !== NULL) { ?>
                    <div class="alert alert-success alert-dismissible fade show" 
                         role="alert" 
                         style="background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(34, 197, 94, 0.1)); 
                                border: 1px solid var(--primary-color); 
                                color: var(--primary-color); 
                                animation: slideDownFade 0.5s ease-out; 
                                margin-bottom: 20px;">
                        <i class="fa-solid fa-check-circle me-2"></i>
                        <?= esc($session->getFlashdata('message'), 'html') ?>
                        <button type="button" 
                                class="btn-close" 
                                data-bs-dismiss="alert" 
                                aria-label="Close" 
                                style="filter: invert(0.8);"></button>
                    </div>
                    <?php } ?>

                    <!-- Error Alert -->
                    <?php if ($session->getFlashdata('error') !== NULL) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" 
                         role="alert" 
                         style="background: linear-gradient(135deg, rgba(192, 21, 47, 0.1), rgba(255, 84, 89, 0.1)); 
                                border: 1px solid var(--accent-color); 
                                color: var(--accent-color); 
                                animation: slideDownFade 0.5s ease-out; 
                                margin-bottom: 20px;">
                        <i class="fa-solid fa-exclamation-circle me-2"></i>
                        <?= esc($session->getFlashdata('error'), 'html') ?>
                        <button type="button" 
                                class="btn-close" 
                                data-bs-dismiss="alert" 
                                aria-label="Close" 
                                style="filter: invert(0.8);"></button>
                    </div>
                    <?php } ?>

                    <!-- Name Field -->
                    <div class="form-group mb-4" style="animation: slideInLeft 0.6s ease-out; animation-delay: 0.1s; animation-fill-mode: both;">
                        <label for="userName<?= $id; ?>" 
                               style="font-weight: 600; 
                                      color: var(--text-primary); 
                                      font-size: 13px; 
                                      margin-bottom: 8px; 
                                      display: block; 
                                      text-transform: uppercase; 
                                      letter-spacing: 0.5px;">
                            Your Name <span style="color: var(--accent-color);">*</span>
                        </label>
                        <input type="text" 
                               id="userName<?= $id; ?>" 
                               name="name" 
                               class="form-control form-input" 
                               placeholder="Enter your full name" 
                               required
                               style="border: 1px solid var(--card-border); 
                                      border-radius: var(--border-radius); 
                                      padding: 12px 16px; 
                                      font-size: 14px; 
                                      transition: all var(--transition-normal) var(--ease-standard); 
                                      background: var(--section-background);"
                               onfocus="this.style.borderColor='var(--primary-color)'; this.style.boxShadow='0 0 0 3px rgba(33, 128, 161, 0.1)'; this.style.background='var(--card-background)'"
                               onblur="this.style.borderColor='var(--card-border)'; this.style.boxShadow='none'; this.style.background='var(--section-background)'" />
                    </div>

                    <!-- Two Column Row: Phone & Email -->
                    <div class="row">
                        <!-- Phone Field -->
                        <div class="col-md-6 mb-4" style="animation: slideInLeft 0.6s ease-out; animation-delay: 0.15s; animation-fill-mode: both;">
                            <label for="userPhone<?= $id; ?>" 
                                   style="font-weight: 600; 
                                          color: var(--text-primary); 
                                          font-size: 13px; 
                                          margin-bottom: 8px; 
                                          display: block; 
                                          text-transform: uppercase; 
                                          letter-spacing: 0.5px;">
                                Mobile Number <span style="color: var(--accent-color);">*</span>
                            </label>
                            <input type="tel" 
                                   id="userPhone<?= $id; ?>" 
                                   name="number" 
                                   class="form-control form-input" 
                                   placeholder="10-digit mobile number" 
                                   maxlength="10" 
                                   pattern="[0-9]{10}" 
                                   required
                                   style="border: 1px solid var(--card-border); 
                                          border-radius: var(--border-radius); 
                                          padding: 12px 16px; 
                                          font-size: 14px; 
                                          transition: all var(--transition-normal) var(--ease-standard); 
                                          background: var(--section-background);"
                                   onfocus="this.style.borderColor='var(--primary-color)'; this.style.boxShadow='0 0 0 3px rgba(33, 128, 161, 0.1)'; this.style.background='var(--card-background)'"
                                   onblur="this.style.borderColor='var(--card-border)'; this.style.boxShadow='none'; this.style.background='var(--section-background)'" />
                        </div>

                        <!-- Email Field -->
                        <div class="col-md-6 mb-4" style="animation: slideInRight 0.6s ease-out; animation-delay: 0.15s; animation-fill-mode: both;">
                            <label for="userEmail<?= $id; ?>" 
                                   style="font-weight: 600; 
                                          color: var(--text-primary); 
                                          font-size: 13px; 
                                          margin-bottom: 8px; 
                                          display: block; 
                                          text-transform: uppercase; 
                                          letter-spacing: 0.5px;">
                                Email Address <span style="color: var(--accent-color);">*</span>
                            </label>
                            <input type="email" 
                                   id="userEmail<?= $id; ?>" 
                                   name="email" 
                                   class="form-control form-input" 
                                   placeholder="your.email@example.com" 
                                   required
                                   style="border: 1px solid var(--card-border); 
                                          border-radius: var(--border-radius); 
                                          padding: 12px 16px; 
                                          font-size: 14px; 
                                          transition: all var(--transition-normal) var(--ease-standard); 
                                          background: var(--section-background);"
                                   onfocus="this.style.borderColor='var(--primary-color)'; this.style.boxShadow='0 0 0 3px rgba(33, 128, 161, 0.1)'; this.style.background='var(--card-background)'"
                                   onblur="this.style.borderColor='var(--card-border)'; this.style.boxShadow='none'; this.style.background='var(--section-background)'" />
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="form-group mb-4" style="animation: slideInLeft 0.6s ease-out; animation-delay: 0.2s; animation-fill-mode: both;">
                        <label for="userMessage<?= $id; ?>" 
                               style="font-weight: 600; 
                                      color: var(--text-primary); 
                                      font-size: 13px; 
                                      margin-bottom: 8px; 
                                      display: block; 
                                      text-transform: uppercase; 
                                      letter-spacing: 0.5px;">
                            Your Message <span style="color: var(--accent-color);">*</span>
                        </label>
                        <textarea class="form-control form-input" 
                                  id="userMessage<?= $id; ?>" 
                                  name="message" 
                                  rows="5" 
                                  placeholder="Please share your query or message..." 
                                  required
                                  style="border: 1px solid var(--card-border); 
                                         border-radius: var(--border-radius); 
                                         padding: 12px 16px; 
                                         font-size: 14px; 
                                         transition: all var(--transition-normal) var(--ease-standard); 
                                         background: var(--section-background); 
                                         resize: vertical; 
                                         font-family: inherit;"
                                  onfocus="this.style.borderColor='var(--primary-color)'; this.style.boxShadow='0 0 0 3px rgba(33, 128, 161, 0.1)'; this.style.background='var(--card-background)'"
                                  onblur="this.style.borderColor='var(--card-border)'; this.style.boxShadow='none'; this.style.background='var(--section-background)'"></textarea>
                        <small style="color: rgba(var(--text-primary), 0.6); display: block; margin-top: 6px;">
                            <i class="fa-solid fa-info-circle me-1"></i>
                            Maximum 500 characters
                        </small>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center mt-5" style="animation: slideUpFade 0.6s ease-out; animation-delay: 0.25s; animation-fill-mode: both;">
                        <button type="submit" 
                                class="btn-submit" 
                                id="sendMessage<?= $id; ?>"
                                style="width: 100%; 
                                       padding: 14px 32px; 
                                       background: linear-gradient(135deg, var(--primary-color), var(--accent-color)); 
                                       color: white; 
                                       border: none; 
                                       border-radius: var(--border-radius); 
                                       font-size: 15px; 
                                       font-weight: 600; 
                                       text-transform: uppercase; 
                                       letter-spacing: 1px; 
                                       cursor: pointer; 
                                       transition: all var(--transition-normal) var(--ease-standard); 
                                       box-shadow: 0 4px 15px rgba(33, 128, 161, 0.3); 
                                       position: relative; 
                                       overflow: hidden;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(33, 128, 161, 0.4)'"
                                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(33, 128, 161, 0.3)'"
                                onmousedown="this.style.transform='translateY(0)'"
                                onmouseup="this.style.transform='translateY(-2px)'">
                            <i class="fa-solid fa-paper-plane me-2"></i>
                            Send Message
                        </button>
                    </div>

                    <!-- Privacy Notice -->
                    <div style="text-align: center; margin-top: 20px; animation: fadeIn 0.8s ease-out; animation-delay: 0.3s;">
                        <small style="color: rgba(var(--text-primary), 0.6); line-height: 1.6;">
                            <i class="fa-solid fa-lock me-1" style="color: var(--primary-color);"></i>
                            Your information is secure and will only be used to respond to your inquiry.
                        </small>
                    </div>
                </form>
            </div>
        </div>

        <!-- Additional Info Cards (Optional) -->
        <div class="contact-info-cards" 
             style="margin-top: 60px; 
                    display: grid; 
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
                    gap: 30px; 
                    animation: fadeIn 0.8s ease-out; 
                    animation-delay: 0.5s;">
            
            <!-- Info Card 1: Response Time -->
            <div class="info-card" 
                 style="background: var(--card-background); 
                        border: 1px solid var(--card-border); 
                        border-radius: var(--border-radius-lg); 
                        padding: 24px; 
                        text-align: center; 
                        transition: all var(--transition-normal) var(--ease-standard);"
                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='var(--shadow-lg)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-sm)'">
                
                <div style="width: 60px; 
                           height: 60px; 
                           background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                           border-radius: var(--border-radius-lg); 
                           display: flex; 
                           align-items: center; 
                           justify-content: center; 
                           margin: 0 auto 15px; 
                           font-size: 28px; 
                           color: var(--primary-color);">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-primary); margin-bottom: 8px;">
                    Quick Response
                </h4>
                <p style="font-size: 13px; color: rgba(var(--text-primary), 0.7); margin: 0;">
                    We respond within 24 hours
                </p>
            </div>

            <!-- Info Card 2: Support -->
            <div class="info-card" 
                 style="background: var(--card-background); 
                        border: 1px solid var(--card-border); 
                        border-radius: var(--border-radius-lg); 
                        padding: 24px; 
                        text-align: center; 
                        transition: all var(--transition-normal) var(--ease-standard);"
                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='var(--shadow-lg)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-sm)'">
                
                <div style="width: 60px; 
                           height: 60px; 
                           background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                           border-radius: var(--border-radius-lg); 
                           display: flex; 
                           align-items: center; 
                           justify-content: center; 
                           margin: 0 auto 15px; 
                           font-size: 28px; 
                           color: var(--primary-color);">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-primary); margin-bottom: 8px;">
                    Expert Support
                </h4>
                <p style="font-size: 13px; color: rgba(var(--text-primary), 0.7); margin: 0;">
                    Dedicated support team ready to help
                </p>
            </div>

            <!-- Info Card 3: Secure -->
            <div class="info-card" 
                 style="background: var(--card-background); 
                        border: 1px solid var(--card-border); 
                        border-radius: var(--border-radius-lg); 
                        padding: 24px; 
                        text-align: center; 
                        transition: all var(--transition-normal) var(--ease-standard);"
                 onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='var(--shadow-lg)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-sm)'">
                
                <div style="width: 60px; 
                           height: 60px; 
                           background: linear-gradient(135deg, rgba(33, 128, 161, 0.1), rgba(230, 126, 34, 0.1)); 
                           border-radius: var(--border-radius-lg); 
                           display: flex; 
                           align-items: center; 
                           justify-content: center; 
                           margin: 0 auto 15px; 
                           font-size: 28px; 
                           color: var(--primary-color);">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <h4 style="font-size: 16px; font-weight: 700; color: var(--text-primary); margin-bottom: 8px;">
                    100% Secure
                </h4>
                <p style="font-size: 13px; color: rgba(var(--text-primary), 0.7); margin: 0;">
                    Your data is encrypted and safe
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Scroll to Form on Success -->
<?php if ($session->getFlashdata('sec-id') !== NULL) { ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var element = document.getElementById('<?= esc($session->getFlashdata('sec-id'), 'js') ?>');
        if (element) {
            setTimeout(function() {
                element.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }, 300);
        }
    });
</script>
<?php } ?>


<!-- ============================================
     CONTACT FORM STYLES
     ============================================ -->
<style>
    /* ============================================
       ANIMATIONS
       ============================================ */

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(40px);
        }
    }

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

    @keyframes slideUpFade {
        from {
            transform: translateY(30px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-20px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(20px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

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

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Form Input Styles */
    .form-input {
        transition: all var(--transition-normal) var(--ease-standard) !important;
    }

    .form-input:focus {
        border-color: var(--primary-color) !important;
        box-shadow: 0 0 0 3px rgba(33, 128, 161, 0.1) !important;
        background: var(--card-background) !important;
    }

    /* Submit Button Pulse */
    @keyframes buttonPulse {
        0%, 100% {
            box-shadow: 0 4px 15px rgba(33, 128, 161, 0.3);
        }
        50% {
            box-shadow: 0 6px 25px rgba(33, 128, 161, 0.5);
        }
    }

    .btn-submit:active {
        animation: buttonPulse 0.6s ease-out;
    }

    /* ============================================
       RESPONSIVE DESIGN
       ============================================ */

    @media (max-width: 768px) {
        .contact-form-section {
            padding: 50px 0 !important;
        }

        .form-section-title {
            font-size: 28px !important;
        }

        .form-card {
            padding: 25px !important;
        }

        .contact-info-cards {
            grid-template-columns: 1fr !important;
        }

        .form-background-decoration {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .form-card {
            padding: 20px !important;
        }

        .btn-submit {
            padding: 12px 16px !important;
            font-size: 13px !important;
        }
    }

    /* Accessibility */
    .form-input:focus-visible,
    .btn-submit:focus-visible {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Print Styles */
    @media print {
        .contact-form-section {
            display: none;
        }
    }
</style>

<!-- ============================================
     CONTACT FORM JAVASCRIPT
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ============================================
        // Form field validation on blur
        // ============================================
        var formInputs = document.querySelectorAll('.form-input');
        
        formInputs.forEach(function(input) {
            input.addEventListener('blur', function() {
                // Validate input
                var value = this.value.trim();
                var isValid = true;
                
                if (this.name === 'number') {
                    isValid = /^[0-9]{10}$/.test(value) || value === '';
                } else if (this.name === 'email') {
                    isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) || value === '';
                } else if (this.name === 'name') {
                    isValid = value.length >= 2 || value === '';
                }
                
                if (!isValid) {
                    this.style.borderColor = 'var(--accent-color)';
                    this.style.boxShadow = '0 0 0 3px rgba(192, 21, 47, 0.1)';
                } else {
                    this.style.borderColor = 'var(--card-border)';
                    this.style.boxShadow = 'none';
                }
            });
        });

        // ============================================
        // Form submission handler
        // ============================================
        var submitButton = document.querySelector('.btn-submit');
        if (submitButton) {
            submitButton.addEventListener('click', function(e) {
                var form = this.closest('form');
                
                // Add loading state
                var originalText = this.innerHTML;
                this.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Sending...';
                this.disabled = true;
                
                // Restore after 2 seconds
                setTimeout(function() {
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                }, 2000);
            });
        }

        // ============================================
        // Dismiss alerts on button click
        // ============================================
        document.querySelectorAll('.alert .btn-close').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var alert = this.closest('.alert');
                alert.style.animation = 'slideUpFade 0.3s ease-out reverse';
                setTimeout(function() {
                    alert.remove();
                }, 300);
            });
        });

        // ============================================
        // Auto-dismiss alerts after 5 seconds
        // ============================================
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            setTimeout(function() {
                if (alert.parentNode) {
                    alert.style.animation = 'slideUpFade 0.3s ease-out reverse';
                    setTimeout(function() {
                        if (alert.parentNode) {
                            alert.remove();
                        }
                    }, 300);
                }
            }, 5000);
        });

        // ============================================
        // Keyboard accessibility
        // ============================================
        document.querySelectorAll('.form-input').forEach(function(input, index) {
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Tab') {
                    // Tab navigation already handled by browser
                }
            });
        });
    });
</script>
