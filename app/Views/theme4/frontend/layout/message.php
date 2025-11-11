<?php
if(isset($myurl['soroting_order'])){
    $id = $myurl['soroting_order'];
}else{
    $id = "111";
}
?>

<style>
    /* Ultra Modern Business Query Section */
    .business-query-wrapper {
        position: relative;
        padding: 80px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated Background Pattern */
    .query-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        background-image: 
            radial-gradient(circle at 20% 50%, var(--primary-color) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, var(--accent-color) 0%, transparent 50%);
        animation: pattern-float 20s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes pattern-float {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(20px, 20px); }
    }

    /* Section Title */
    .query-title-wrapper {
        text-align: center;
        margin-bottom: 60px;
        position: relative;
        z-index: 1;
    }

    .query-main-title {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
        letter-spacing: -1px;
    }

    .query-subtitle {
        font-size: 18px;
        color: #6c757d;
        font-weight: 500;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Form Container */
    .query-form-container {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }

    .query-form-card {
        background: var(--theme_surface_color);
        border-radius: 25px;
        padding: 50px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        animation: slideInUp 0.6s ease-out;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .query-form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    }

    /* Alert Styling */
    .query-alert {
        border: none;
        border-radius: 15px;
        padding: 18px 25px;
        margin-bottom: 30px;
        animation: fadeInDown 0.5s ease-out;
        border-left: 5px solid;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .query-alert.alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
        border-left-color: #28a745;
        color: #155724;
    }

    .query-alert.alert-danger {
        background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
        border-left-color: #dc3545;
        color: #721c24;
    }

    .query-alert .close {
        background: none;
        border: none;
        font-size: 24px;
        font-weight: 700;
        opacity: 0.5;
        cursor: pointer;
        transition: opacity 0.3s;
    }

    .query-alert .close:hover {
        opacity: 1;
    }

    /* Form Groups */
    .query-form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .query-form-label {
        font-weight: 600;
        font-size: 15px;
        color: var(--text-dark);
        margin-bottom: 10px;
        display: block;
        transition: all 0.3s ease;
    }

    .query-form-control {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: var(--theme_surface_color);
    }

    .query-form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        background: white;
        box-shadow: 0 0 0 4px rgba(var(--bs-primary-rgb), 0.1);
        transform: translateY(-2px);
    }

    .query-form-control::placeholder {
        color: #adb5bd;
    }

    /* Input Icons */
    .input-icon-wrapper {
        position: relative;
    }

    .input-icon {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary-color);
        font-size: 18px;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .input-icon-wrapper .query-form-control {
        padding-left: 50px;
    }

    .input-icon-wrapper .query-form-control:focus ~ .input-icon {
        color: var(--accent-color);
        transform: translateY(-50%) scale(1.1);
    }

    /* Textarea */
    textarea.query-form-control {
        resize: vertical;
        min-height: 140px;
    }

    /* Submit Button */
    .query-submit-wrapper {
        text-align: center;
        margin-top: 40px;
    }

    .query-submit-btn {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border: none;
        padding: 16px 50px;
        border-radius: 50px;
        color: white;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
        min-width: 200px;
    }

    .query-submit-btn::before {
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

    .query-submit-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .query-submit-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
    }

    .query-submit-btn:active {
        transform: translateY(0) scale(0.98);
    }

    .query-submit-btn i {
        margin-left: 10px;
        transition: transform 0.3s ease;
    }

    .query-submit-btn:hover i {
        transform: translateX(5px);
    }

    /* Loading State */
    .query-submit-btn.loading {
        pointer-events: none;
        opacity: 0.7;
    }

    .query-submit-btn.loading::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        top: 50%;
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-top-color: white;
        border-radius: 50%;
        animation: spinner 0.8s linear infinite;
    }

    @keyframes spinner {
        to { transform: rotate(360deg); }
    }

    /* Contact Info Section */
    .query-contact-info {
        margin-top: 50px;
        padding-top: 50px;
        border-top: 2px solid #e9ecef;
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .query-contact-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 15px 25px;
        background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), rgba(var(--bs-primary-rgb), 0.02));
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .query-contact-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .query-contact-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 22px;
    }

    .query-contact-text h5 {
        font-size: 14px;
        color: #6c757d;
        margin: 0;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .query-contact-text p {
        font-size: 16px;
        color: var(--text-dark);
        margin: 5px 0 0 0;
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .business-query-wrapper {
            padding: 60px 0;
        }

        .query-form-card {
            padding: 40px 30px;
        }

        .query-main-title {
            font-size: 38px;
        }
    }

    @media (max-width: 768px) {
        .business-query-wrapper {
            padding: 50px 0;
        }

        .query-form-card {
            padding: 30px 20px;
        }

        .query-main-title {
            font-size: 32px;
        }

        .query-subtitle {
            font-size: 16px;
        }

        .query-submit-btn {
            width: 100%;
        }

        .query-contact-info {
            gap: 20px;
        }

        .query-contact-item {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .query-main-title {
            font-size: 28px;
        }

        .query-form-control {
            padding: 12px 15px;
            font-size: 14px;
        }

        .input-icon-wrapper .query-form-control {
            padding-left: 45px;
        }
    }
</style>

<section class="business-query-wrapper" id="businessQueryId<?= $id; ?>">
    <!-- Animated Background -->
    <div class="query-bg-pattern"></div>

    <div class="container">
        <!-- Section Title -->
        <div class="query-title-wrapper">
            <h2 class="query-main-title">GET IN TOUCH</h2>
            <p class="query-subtitle">Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>

        <!-- Form Container -->
        <div class="query-form-container">
            <div class="query-form-card">
                <form class="contact-form">
                    <?php 
                    $validation = \Config\Services::validation();
                    $session = \Config\Services::session();
                    if ($session->getFlashdata('message') !== NULL) : ?>
                        <div class="alert query-alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-check-circle me-2"></i>Success!</strong>
                            <?php echo session()->getFlashdata('message'); ?>
                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($session->getFlashdata('error') !== NULL) : ?>
                        <div class="alert query-alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-exclamation-circle me-2"></i>Error!</strong>
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($session->getFlashdata('sec-id') !== NULL){
                        echo '<script>document.getElementById("'.$session->getFlashdata('sec-id').'").scrollIntoView({behavior: "smooth", block: "start"});</script>';
                    } ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="query-form-group">
                                <label class="query-form-label" for="userName<?= $id; ?>">Your Name <span class="text-danger">*</span></label>
                                <div class="input-icon-wrapper">
                                    <input 
                                        type="text" 
                                        class="query-form-control" 
                                        id="userName<?= $id; ?>" 
                                        name="name" 
                                        placeholder="Enter your full name"
                                        required>
                                    <i class="fas fa-user input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="query-form-group">
                                <label class="query-form-label" for="userPhone<?= $id; ?>">Mobile Number <span class="text-danger">*</span></label>
                                <div class="input-icon-wrapper">
                                    <input 
                                        type="tel" 
                                        class="query-form-control" 
                                        id="userPhone<?= $id; ?>" 
                                        name="number" 
                                        maxlength="10" 
                                        placeholder="Enter your mobile number"
                                        required>
                                    <i class="fas fa-phone input-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="query-form-group">
                        <label class="query-form-label" for="userEmail<?= $id; ?>">Email Address <span class="text-danger">*</span></label>
                        <div class="input-icon-wrapper">
                            <input 
                                type="email" 
                                class="query-form-control" 
                                id="userEmail<?= $id; ?>" 
                                name="email" 
                                placeholder="Enter your email address"
                                required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                    </div>

                    <div class="query-form-group">
                        <label class="query-form-label" for="userMessage<?= $id; ?>">Your Message <span class="text-danger">*</span></label>
                        <div class="input-icon-wrapper">
                            <textarea 
                                class="query-form-control" 
                                id="userMessage<?= $id; ?>" 
                                name="message" 
                                rows="5" 
                                placeholder="Tell us about your requirements..."
                                required></textarea>
                            <i class="fas fa-comment-alt input-icon" style="top: 25px;"></i>
                        </div>
                    </div>

                    <div class="query-submit-wrapper">
                        <button 
                            type="button" 
                            class="query-submit-btn sendMessage" 
                            id="sendMessage<?= $id; ?>" 
                            onclick="sendMessage(<?= $id; ?>)">
                            Send Message
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>

               
            </div>
        </div>
    </div>
</section>

<script>

function showAlert(message, type, id) {
    const alertHTML = `
        <div class="alert query-alert alert-${type} alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-${type === 'success' ? 'check' : 'exclamation'}-circle me-2"></i>${type === 'success' ? 'Success!' : 'Error!'}</strong>
            ${message}
            <button type="button" class="close" data-bs-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    `;
    
    const form = document.querySelector('#businessQueryId' + id + ' form');
    form.insertAdjacentHTML('afterbegin', alertHTML);
    
    setTimeout(() => {
        document.querySelector('.query-alert').remove();
    }, 5000);
}
</script>
