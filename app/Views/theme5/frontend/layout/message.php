<?php
if(isset($myurl['soroting_order'])){
    $id = $myurl['soroting_order'];
}else{
    $id = "111";
}
?>

<style>
    /* ===== REVOLUTIONARY MEDICAL INQUIRY FORM SECTION ===== */
    
    .medical-inquiry-revolutionary-wrapper {
        position: relative;
        padding: 150px 0;
        background: var(--theme_mode_color);
        overflow: hidden;
    }

    /* Animated gradient mesh background */
    .medical-inquiry-mesh-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.1;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(135deg, var(--medical-teal, #008080) 0%, transparent 50%),
            linear-gradient(225deg, var(--medical-blue, #003d7a) 0%, transparent 50%),
            linear-gradient(315deg, var(--medical-teal, #008080) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: mesh-shift 25s ease infinite;
    }

    @keyframes mesh-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Section Header */
    .medical-inquiry-header {
        position: relative;
        z-index: 1;
        text-align: center;
        margin-bottom: 80px;
    }

    .medical-inquiry-header::before {
        content: '';
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 100px;
        background: radial-gradient(circle, var(--medical-teal, #008080), transparent);
        border-radius: 50%;
        opacity: 0.2;
        filter: blur(40px);
    }

    .medical-inquiry-title {
        font-size: 56px;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -2px;
        color: var(--text-dark);
        position: relative;
        z-index: 2;
    }

    .medical-inquiry-title span {
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .medical-inquiry-subtitle {
        font-size: 16px;
        color: #6c757d;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.8;
        position: relative;
        z-index: 2;
    }

    /* Form Container */
    .medical-inquiry-form-wrapper {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }

    .medical-inquiry-form-card {
        background: var(--theme_surface_color);
        border-radius: 25px;
        padding: 50px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 2px solid rgba(0, 128, 128, 0.1);
        position: relative;
        overflow: hidden;
    }

    .medical-inquiry-form-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--medical-blue, #003d7a), var(--medical-teal, #008080));
    }

    /* Form Group */
    .medical-inquiry-form-group {
        margin-bottom: 25px;
        position: relative;
    }

    .medical-inquiry-form-label {
        display: block;
        font-size: 14px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .medical-inquiry-form-label span {
        color: #dc3545;
        margin-left: 3px;
    }

    /* Input Wrapper */
    .medical-inquiry-input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
    }

    .medical-inquiry-form-control {
        width: 100%;
        padding: 14px 18px 14px 45px;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 500;
        background: #f8f9fa;
        transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        color: var(--text-dark);
    }

    .medical-inquiry-form-control:focus {
        outline: none;
        border-color: var(--medical-teal, #008080);
        background: var(--theme_surface_color);
        box-shadow: 0 0 0 4px rgba(0, 128, 128, 0.1);
        transform: translateY(-2px);
    }

    .medical-inquiry-form-control::placeholder {
        color: #adb5bd;
    }

    /* Input Icon */
    .medical-inquiry-input-icon {
        position: absolute;
        left: 14px;
        color: var(--medical-teal, #008080);
        font-size: 16px;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .medical-inquiry-form-control:focus ~ .medical-inquiry-input-icon {
        color: var(--medical-blue, #003d7a);
        transform: scale(1.2);
    }

    /* Textarea */
    textarea.medical-inquiry-form-control {
        resize: vertical;
        min-height: 140px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding-top: 14px;
    }

    /* Form Row */
    .medical-inquiry-form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    /* Submit Button */
    .medical-inquiry-submit-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 40px;
        gap: 15px;
    }

    .medical-inquiry-submit-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 50px;
        background: linear-gradient(135deg, var(--medical-blue, #003d7a) 0%, var(--medical-teal, #008080) 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
        overflow: hidden;
    }

    .medical-inquiry-submit-btn::before {
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

    .medical-inquiry-submit-btn:hover::before {
        width: 300px;
        height: 300px;
    }

    .medical-inquiry-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 128, 128, 0.3);
    }

    .medical-inquiry-submit-btn:active {
        transform: translateY(-1px);
    }

    /* Alert Messages */
    .medical-inquiry-alert {
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 14px;
        font-weight: 600;
        animation: alert-slideIn 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .medical-inquiry-alert-success {
        background: rgba(40, 167, 69, 0.1);
        color: #28a745;
        border: 2px solid #28a745;
    }

    .medical-inquiry-alert-danger {
        background: rgba(220, 53, 69, 0.1);
        color: #dc3545;
        border: 2px solid #dc3545;
    }

    .medical-inquiry-alert i {
        font-size: 18px;
    }

    @keyframes alert-slideIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Loading State */
    .medical-inquiry-submit-btn.loading {
        pointer-events: none;
        opacity: 0.7;
    }

    .medical-inquiry-submit-btn.loading span {
        display: inline-block;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .medical-inquiry-title {
            font-size: 48px;
        }
        .medical-inquiry-form-card {
            padding: 40px;
        }
    }

    @media (max-width: 991px) {
        .medical-inquiry-revolutionary-wrapper {
            padding: 100px 0;
        }
        .medical-inquiry-title {
            font-size: 40px;
        }
    }

    @media (max-width: 768px) {
        .medical-inquiry-revolutionary-wrapper {
            padding: 80px 0;
        }
        .medical-inquiry-title {
            font-size: 32px;
        }
        .medical-inquiry-form-card {
            padding: 30px;
            border-radius: 20px;
        }
        .medical-inquiry-form-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .medical-inquiry-title {
            font-size: 28px;
        }
        .medical-inquiry-form-card {
            padding: 24px;
        }
        .medical-inquiry-submit-btn {
            width: 100%;
            padding: 14px 30px;
        }
    }

    /* Dark Mode */
    body.theme-dark .medical-inquiry-form-card {
        background: #1a1f2e;
        border-color: rgba(0, 128, 128, 0.15);
    }

    body.theme-dark .medical-inquiry-form-control {
        background: #2a2f3e;
        border-color: #3a3f4e;
        color: #e0e0e0;
    }

    body.theme-dark .medical-inquiry-form-control:focus {
        background: #1a1f2e;
    }
</style>

<!-- ===== REVOLUTIONARY MEDICAL INQUIRY FORM SECTION ===== -->
<section class="medical-inquiry-revolutionary-wrapper" id="businessQueryId<?= $id; ?>">
    <!-- Animated Mesh Background -->
    <div class="medical-inquiry-mesh-bg"></div>

    <div class="container">
        <!-- Header -->
        <div class="medical-inquiry-header" data-aos="fade-down" data-aos-duration="900">
            <h2 class="medical-inquiry-title">
                Get <span>In Touch</span>
            </h2>
            <p class="medical-inquiry-subtitle">
                Have questions about our services? Our team is here to help. Send us a message and we'll respond promptly.
            </p>
        </div>

        <!-- Form Container -->
        <div class="medical-inquiry-form-wrapper">
            <div class="medical-inquiry-form-card" data-aos="fade-up" data-aos-duration="900">
                <form class="contact-form" id="inquiryForm<?= $id; ?>">
                    <?php 
                    $validation = \Config\Services::validation();
                    $session = \Config\Services::session();
                    if ($session->getFlashdata('message') !== NULL) : ?>
                        <div class="medical-inquiry-alert medical-inquiry-alert-success">
                            <i class="fas fa-check-circle"></i>
                            <span><?php echo session()->getFlashdata('message'); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($session->getFlashdata('error') !== NULL) : ?>
                        <div class="medical-inquiry-alert medical-inquiry-alert-danger">
                            <i class="fas fa-exclamation-circle"></i>
                            <span><?php echo session()->getFlashdata('error'); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($session->getFlashdata('sec-id') !== NULL){
                        echo '<script>document.getElementById("'.$session->getFlashdata('sec-id').'").scrollIntoView({behavior: "smooth", block: "start"});</script>';
                    } ?>

                    <!-- Two Column Row -->
                    <div class="medical-inquiry-form-row">
                        <div class="medical-inquiry-form-group">
                            <label class="medical-inquiry-form-label" for="userName<?= $id; ?>">
                                Full Name <span>*</span>
                            </label>
                            <div class="medical-inquiry-input-wrapper">
                                <input 
                                    type="text" 
                                    class="medical-inquiry-form-control" 
                                    id="userName<?= $id; ?>" 
                                    name="name" 
                                    placeholder="Enter your full name"
                                    required>
                                <i class="fas fa-user medical-inquiry-input-icon"></i>
                            </div>
                        </div>

                        <div class="medical-inquiry-form-group">
                            <label class="medical-inquiry-form-label" for="userPhone<?= $id; ?>">
                                Phone Number <span>*</span>
                            </label>
                            <div class="medical-inquiry-input-wrapper">
                                <input 
                                    type="tel" 
                                    class="medical-inquiry-form-control" 
                                    id="userPhone<?= $id; ?>" 
                                    name="number" 
                                    maxlength="10" 
                                    placeholder="Enter 10-digit phone number"
                                    required>
                                <i class="fas fa-phone medical-inquiry-input-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="medical-inquiry-form-group">
                        <label class="medical-inquiry-form-label" for="userEmail<?= $id; ?>">
                            Email Address <span>*</span>
                        </label>
                        <div class="medical-inquiry-input-wrapper">
                            <input 
                                type="email" 
                                class="medical-inquiry-form-control" 
                                id="userEmail<?= $id; ?>" 
                                name="email" 
                                placeholder="Enter your email address"
                                required>
                            <i class="fas fa-envelope medical-inquiry-input-icon"></i>
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div class="medical-inquiry-form-group">
                        <label class="medical-inquiry-form-label" for="userMessage<?= $id; ?>">
                            Your Message <span>*</span>
                        </label>
                        <div class="medical-inquiry-input-wrapper">
                            <textarea 
                                class="medical-inquiry-form-control" 
                                id="userMessage<?= $id; ?>" 
                                name="message" 
                                placeholder="Tell us about your health concerns or service requirements..."
                                required></textarea>
                            <i class="fas fa-comment-alt medical-inquiry-input-icon" style="top: 25px;"></i>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="medical-inquiry-submit-wrapper">
                        <button 
                            type="button" 
                            class="medical-inquiry-submit-btn sendMessage" 
                            id="sendMessage<?= $id; ?>" 
                            onclick="sendMedicalMessage(<?= $id; ?>)">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Show Alert Function
    function showMedicalAlert(message, type, id) {
        const alertHTML = `
            <div class="medical-inquiry-alert medical-inquiry-alert-${type}">
                <i class="fas fa-${type === 'success' ? 'check' : 'exclamation'}-circle"></i>
                <span>${message}</span>
            </div>
        `;
        
        const form = document.querySelector('#inquiryForm' + id);
        const existingAlert = form.querySelector('.medical-inquiry-alert');
        
        if (existingAlert) {
            existingAlert.remove();
        }
        
        form.insertAdjacentHTML('afterbegin', alertHTML);
        
        setTimeout(() => {
            const alert = form.querySelector('.medical-inquiry-alert');
            if (alert) {
                alert.style.animation = 'alert-slideOut 0.4s ease';
                setTimeout(() => alert.remove(), 400);
            }
        }, 5000);
    }

    // Send Message Function
    function sendMedicalMessage(id) {
        const form = document.querySelector('#inquiryForm' + id);
        const name = form.querySelector('input[name="name"]').value;
        const phone = form.querySelector('input[name="number"]').value;
        const email = form.querySelector('input[name="email"]').value;
        const message = form.querySelector('textarea[name="message"]').value;
        
        // Validate fields
        if (!name || !phone || !email || !message) {
            showMedicalAlert('Please fill in all required fields', 'danger', id);
            return;
        }
        
        // Validate phone
        if (!/^\d{10}$/.test(phone)) {
            showMedicalAlert('Please enter a valid 10-digit phone number', 'danger', id);
            return;
        }
        
        // Validate email
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showMedicalAlert('Please enter a valid email address', 'danger', id);
            return;
        }
        
        // Set loading state
        const btn = document.getElementById('sendMessage' + id);
        btn.classList.add('loading');
        btn.disabled = true;
        
        // Send data (you can modify this endpoint)
        fetch(base_url + 'send-inquiry', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: name,
                phone: phone,
                email: email,
                message: message
            })
        })
        .then(response => response.json())
        .then(data => {
            btn.classList.remove('loading');
            btn.disabled = false;
            
            if (data.success) {
                showMedicalAlert('Message sent successfully! We\'ll be in touch soon.', 'success', id);
                form.reset();
            } else {
                showMedicalAlert(data.message || 'Error sending message. Please try again.', 'danger', id);
            }
        })
        .catch(error => {
            btn.classList.remove('loading');
            btn.disabled = false;
            showMedicalAlert('Error sending message. Please try again later.', 'danger', id);
        });
    }

    // Add CSS animation for alert slide out
    if (!document.querySelector('#alertStyles')) {
        const style = document.createElement('style');
        style.id = 'alertStyles';
        style.textContent = `
            @keyframes alert-slideOut {
                to {
                    opacity: 0;
                    transform: translateY(-10px);
                }
            }
        `;
        document.head.appendChild(style);
    }
</script>

<?php
?>
