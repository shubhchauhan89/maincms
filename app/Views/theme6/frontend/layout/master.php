<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1'>
    <title>
        <?php
        if (isset($meta_keywords) && !empty($meta_keywords)) {
            $i = 0;
            $total = count($meta_keywords) - 1;
            $comm = ", ";
            if ($i == $total) {
                $comm = "";
            }
            foreach ($meta_keywords as $keyword) {
                if ($i == $total) {
                    $comm = "";
                }
                $keyword['keyword'] . $comm;
                $i++;
            }
            echo $title;
        } else {
            echo $title;
        }
        ?>
    </title>
    <?php
    if (isset($meta_keywords) && !empty($meta_keywords)) {
        $i = 0;
        $total = count($meta_keywords) - 1;
        $final_data = "";
        $comm = "";
        $comm = ", ";
        if ($i == $total) {
            $comm = "";
        }
        foreach ($meta_keywords as $keyword) {
            if ($i == $total) {
                $comm = "";
            }
            $final_data .= $keyword['keyword'] . $comm;
            $i++;
        }
        '<meta name="keywords" content="' . $final_data . '">';
    } else {
        echo '<meta name="keywords" content="' . $keywords . '" >';
    }
    ?>

    <meta name='description' content='<?= $description ?>'>
    <?= $this->include('theme6/frontend/layout/cssLinks') ?>
    <?= $this->renderSection('customCss'); ?>

    <style>
        :root {
            /* ============================================= */
            /* INDUSTRIAL EDGE PRO - DYNAMIC COLOR SYSTEM   */
            /* Dark Theme Only - Database Driven Colors     */
            /* ============================================= */
            
            /* === PRIMARY COLORS (Database Driven) === */
            --primary-color: <?= $colors['inquiry_button_color'] ?? '#ff6b35'; ?>;
            --primary-text: <?= $colors['inquiry_button_text'] ?? '#ffffff'; ?>;
            --secondary-color: <?= $colors['secondary_accent_color'] ?? '#00aaff'; ?>;
            --success-color: <?= $colors['success_color'] ?? '#00ff88'; ?>;
            --alert-color: <?= $colors['alert_color'] ?? '#ff6b35'; ?>;
            
            /* === BACKGROUND & SURFACE === */
            --bg-primary: <?= $colors['header_background'] ?? '#1a1a1a'; ?>;
            --bg-surface: <?= $colors['navbar_background'] ?? '#282828'; ?>;
            --bg-gradient-start: <?= $colors['gradient_start_color'] ?? '#1a1a1a'; ?>;
            --bg-gradient-end: <?= $colors['gradient_end_color'] ?? '#0f1419'; ?>;
            
            /* === TEXT COLORS === */
            --text-primary: <?= $colors['header_text'] ?? '#ffffff'; ?>;
            --text-secondary: <?= $colors['text_secondary_color'] ?? '#a0a0a0'; ?>;
            --text-muted: #6c757d;
            
            /* === BORDERS & DIVIDERS === */
            --border-color: <?= $colors['border_color'] ?? '#c0c0c0'; ?>;
            --border-color-light: rgba(192, 192, 192, 0.3);
            --border-color-dark: rgba(192, 192, 192, 0.6);
            
            /* === NAVBAR === */
            --navbar-bg: <?= $colors['navbar_background'] ?? '#1a1a1a'; ?>;
            --navbar-text: <?= $colors['navbar_text'] ?? '#ffffff'; ?>;
            
            /* === FOOTER === */
            --footer-bg: <?= $colors['copyright_background'] ?? '#1a1a1a'; ?>;
            --footer-text: <?= $colors['copyright_text_color'] ?? '#ffffff'; ?>;
            
            /* === CUSTOM USER COLOR (with fallback) === */
            <?php 
            $customColor = $user_details['custom_text_color'] ?? '#1a1a1a';
               
            ?>
            --user-custom-color: <?= $customColor; ?>;
            --user-custom-text: <?= $user_details['custom_text_color'] ?? ($colors['header_text'] ?? '#ffffff'); ?>;
            
            /* === INDUSTRIAL THEME SPECIFIC === */
            --industrial-orange: var(--primary-color);
            --industrial-blue: var(--secondary-color);
            --industrial-green: var(--success-color);
            --industrial-silver: var(--border-color);
            --industrial-black: var(--bg-primary);
            --industrial-surface: var(--bg-surface);
            --industrial-text: var(--text-primary);
            --industrial-text-secondary: var(--text-secondary);
            --industrial-grid: <?= $colors['grid_color'] ?? '#333333'; ?>;
            
            /* === SEMANTIC COLORS === */
            --color-primary: var(--user-custom-color);
            --color-primary-hover: color-mix(in srgb, var(--user-custom-color) 85%, black);
            --color-primary-active: color-mix(in srgb, var(--user-custom-color) 70%, black);
            --color-secondary: rgba(192, 192, 192, 0.15);
            --color-secondary-hover: rgba(192, 192, 192, 0.25);
            --color-secondary-active: rgba(192, 192, 192, 0.3);
            --color-error: #ff5459;
            --color-success: var(--success-color);
            --color-warning: var(--alert-color);
            --color-info: var(--secondary-color);
            
            /* === COMPONENT SPECIFIC === */
            --color-background: var(--bg-primary);
            --color-surface: var(--bg-surface);
            --color-text: var(--text-primary);
            --color-text-secondary: var(--text-secondary);
            --color-border: <?= $colors['inquiry_button_color'] ?? '#ffffff'; ?>;
            --color-card-border: var(--border-color-light);
            --color-card-border-inner: var(--border-color-light);
            --color-btn-primary-text: var(--primary-text);
            --color-focus-ring: rgba(255, 107, 53, 0.4);
            --color-select-caret: rgba(255, 255, 255, 0.8);
            
            /* === RGB VALUES (for opacity control) === */
            <?php
            // Extract RGB from hex colors for dynamic opacity
            function hexToRgb($hex) {
                $hex = ltrim($hex, '#');
                if (strlen($hex) == 3) {
                    $hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
                }
                return implode(', ', [
                    hexdec(substr($hex, 0, 2)),
                    hexdec(substr($hex, 2, 2)),
                    hexdec(substr($hex, 4, 2))
                ]);
            }
            
            $primaryRgb = hexToRgb($colors['inquiry_button_color'] ?? '#ff6b35');
            $secondaryRgb = hexToRgb($colors['secondary_accent_color'] ?? '#00aaff');
            $successRgb = hexToRgb($colors['success_color'] ?? '#00ff88');
            ?>
            --primary-rgb: <?= $primaryRgb; ?>;
            --secondary-rgb: <?= $secondaryRgb; ?>;
            --success-rgb: <?= $successRgb; ?>;
            --bs-primary-rgb: <?= $user_details['rbg_custom_color'] ?? $primaryRgb; ?>;
            
            /* === TYPOGRAPHY === */
            --font-family-base: "FKGroteskNeue", "Geist", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            --font-family-mono: "Berkeley Mono", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            --font-size-xs: 11px;
            --font-size-sm: 12px;
            --font-size-base: 14px;
            --font-size-md: 14px;
            --font-size-lg: 16px;
            --font-size-xl: 18px;
            --font-size-2xl: 20px;
            --font-size-3xl: 24px;
            --font-size-4xl: 30px;
            --font-weight-normal: 400;
            --font-weight-medium: 500;
            --font-weight-semibold: 550;
            --font-weight-bold: 600;
            --line-height-tight: 1.2;
            --line-height-normal: 1.5;
            --letter-spacing-tight: -0.01em;
            
            /* === SPACING === */
            --space-0: 0;
            --space-1: 1px;
            --space-2: 2px;
            --space-4: 4px;
            --space-6: 6px;
            --space-8: 8px;
            --space-10: 10px;
            --space-12: 12px;
            --space-16: 16px;
            --space-20: 20px;
            --space-24: 24px;
            --space-32: 32px;
            
            /* === BORDER RADIUS === */
            --radius-sm: 6px;
            --radius-base: 8px;
            --radius-md: 10px;
            --radius-lg: 12px;
            --radius-full: 9999px;
            
            /* === SHADOWS (Dark Theme Optimized) === */
            --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.3);
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.4), 0 1px 2px rgba(0, 0, 0, 0.3);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.5), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.6), 0 4px 6px -2px rgba(0, 0, 0, 0.4);
            --shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.1), inset 0 -1px 0 rgba(0, 0, 0, 0.15);
            
            /* === ANIMATION === */
            --duration-fast: 150ms;
            --duration-normal: 250ms;
            --ease-standard: cubic-bezier(0.16, 1, 0.3, 1);
            
            /* === LAYOUT === */
            --container-sm: 640px;
            --container-md: 768px;
            --container-lg: 1024px;
            --container-xl: 1280px;
            
            /* === COLORFUL BACKGROUNDS (Dark Theme) === */
            --color-bg-1: rgba(29, 78, 216, 0.15);
            --color-bg-2: rgba(180, 83, 9, 0.15);
            --color-bg-3: rgba(21, 128, 61, 0.15);
            --color-bg-4: rgba(185, 28, 28, 0.15);
            --color-bg-5: rgba(107, 33, 168, 0.15);
            --color-bg-6: rgba(194, 65, 12, 0.15);
            --color-bg-7: rgba(190, 24, 93, 0.15);
            --color-bg-8: rgba(8, 145, 178, 0.15);
            
            /* === UTILITY === */
            --focus-ring: 0 0 0 3px var(--color-focus-ring);
            --focus-outline: 2px solid var(--color-primary);
            --status-bg-opacity: 0.15;
            --status-border-opacity: 0.25;
            --select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        }
        
        /* === BASE STYLES === */
        * {
            box-sizing: border-box;
        }
        
        html {
            font-size: var(--font-size-base);
            font-family: var(--font-family-base);
            line-height: var(--line-height-normal);
            -webkit-font-smoothing: antialiased;
        }
        
        body {
            margin: 0;
            padding: 0;
            background-color: var(--bg-primary) !important;
            color: var(--text-primary);
            font-family: var(--font-family-base);
        }
        
        body.theme-custom {
            --bs-orange-100: <?= $user_details['custom_color'] ?? 'var(--primary-color)'; ?>;
        }
        
        /* === TYPOGRAPHY === */
        h1, h2, h3, h4, h5, h6 {
            margin: 0;
            font-weight: var(--font-weight-semibold);
            line-height: var(--line-height-tight);
            color: var(--text-primary);
            letter-spacing: var(--letter-spacing-tight);
        }
        
        h1 { font-size: var(--font-size-4xl); }
        h2 { font-size: var(--font-size-3xl); }
        h3 { font-size: var(--font-size-2xl); }
        h4 { font-size: var(--font-size-xl); }
        h5 { font-size: var(--font-size-lg); }
        h6 { font-size: var(--font-size-md); }
        
        p {
            margin: 0 0 var(--space-16) 0;
            color: var(--text-primary);
        }
        
        .custom-text-color p,
        .custom-text-color {
            color: <?= $user_details['custom_text_color'] ?? 'var(--text-primary)'; ?> !important;
        }
        
        /* === LINKS === */
        a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color var(--duration-fast) var(--ease-standard);
        }
        
        a:hover {
            color: var(--primary-color);
        }
        
        /* === BUTTONS === */
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
        }
        
        .btn-primary,
        .btn-cta {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--primary-text);
        }
        
        .btn-primary:hover,
        .btn-cta:hover {
            background-color: var(--color-primary-hover);
            border-color: var(--color-primary-hover);
            transform: translateY(-2px);
            opacity: 0.95;
        }
        
        .btn-primary:active,
        .btn-cta:active {
            background-color: var(--color-primary-active);
            transform: translateY(0);
        }
        
        .btn-secondary {
            background-color: var(--color-secondary);
            color: var(--text-primary);
            border: 1px solid var(--border-color);
        }
        
        .btn-secondary:hover {
            background-color: var(--color-secondary-hover);
        }
        
        .btn:focus-visible {
            outline: none;
            box-shadow: var(--focus-ring);
        }
        
        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        /* === FORM CONTROLS === */
        input.form-control,
        textarea.form-control,
        select.form-control {
            background-color: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-base);
            color: var(--text-primary);
            padding: var(--space-8) var(--space-12);
            font-size: var(--font-size-base);
            transition: border-color var(--duration-fast) var(--ease-standard),
                        box-shadow var(--duration-fast) var(--ease-standard);
        }
        
        input.form-control:focus,
        textarea.form-control:focus,
        select.form-control:focus {
            background-color: var(--bg-surface);
            border-color: var(--primary-color);
            outline: var(--focus-outline);
            box-shadow: 0 0 0 3px rgba(var(--primary-rgb), 0.15);
        }
        
        input.form-control::placeholder,
        textarea.form-control::placeholder {
            color: var(--text-secondary);
        }
        
        textarea.form-control {
            font-family: var(--font-family-base);
            resize: vertical;
        }
        
        select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: var(--select-caret-dark);
            background-repeat: no-repeat;
            background-position: right var(--space-12) center;
            background-size: 16px;
            padding-right: var(--space-32);
        }
        
        .form-label {
            display: block;
            margin-bottom: var(--space-8);
            font-weight: var(--font-weight-medium);
            font-size: var(--font-size-sm);
            color: var(--text-primary);
        }
        
        .form-group {
            margin-bottom: var(--space-16);
        }
        
        /* === CARDS === */
        .card {
            background-color: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            color: var(--text-primary);
            overflow: hidden;
            transition: box-shadow var(--duration-normal) var(--ease-standard);
        }
        
        .card:hover {
            box-shadow: var(--shadow-md);
        }
        
        .card-body {
            padding: var(--space-16);
        }
        
        .card-header,
        .card-footer {
            padding: var(--space-16);
            border-color: var(--border-color);
            background-color: var(--bg-surface);
        }
        
       
        
        /* === TABLES === */
        table {
            width: 100%;
            color: var(--text-primary);
            border-collapse: collapse;
        }
        
        table thead {
            background-color: var(--bg-surface);
            color: var(--text-primary);
        }
        
        table th,
        table td {
            padding: var(--space-12);
            border: 1px solid var(--border-color);
        }
        
        table tbody tr {
            transition: background-color var(--duration-fast);
        }
        
        table tbody tr:hover {
            background-color: var(--bg-surface);
        }
        
        /* === ALERTS === */
        .alert {
            padding: var(--space-12) var(--space-16);
            border-radius: var(--radius-base);
            border: 1px solid transparent;
            margin-bottom: var(--space-16);
        }
        
        .alert-success {
            background-color: rgba(var(--success-rgb), 0.1);
            border-color: var(--success-color);
            color: var(--success-color);
        }
        
        .alert-danger {
            background-color: rgba(var(--primary-rgb), 0.1);
            border-color: var(--alert-color);
            color: var(--alert-color);
        }
        
        .alert-warning {
            background-color: rgba(255, 193, 7, 0.1);
            border-color: #ffc107;
            color: #ffc107;
        }
        
        .alert-info {
            background-color: rgba(var(--secondary-rgb), 0.1);
            border-color: var(--secondary-color);
            color: var(--secondary-color);
        }
        
        /* === STATUS INDICATORS === */
        .status {
            display: inline-flex;
            align-items: center;
            padding: var(--space-6) var(--space-12);
            border-radius: var(--radius-full);
            font-weight: var(--font-weight-medium);
            font-size: var(--font-size-sm);
        }
        
        .status--success {
            background-color: rgba(var(--success-rgb), var(--status-bg-opacity));
            color: var(--success-color);
            border: 1px solid rgba(var(--success-rgb), var(--status-border-opacity));
        }
        
        .status--error {
            background-color: rgba(255, 84, 89, var(--status-bg-opacity));
            color: #ff5459;
            border: 1px solid rgba(255, 84, 89, var(--status-border-opacity));
        }
        
        .status--warning {
            background-color: rgba(var(--primary-rgb), var(--status-bg-opacity));
            color: var(--alert-color);
            border: 1px solid rgba(var(--primary-rgb), var(--status-border-opacity));
        }
        
        .status--info {
            background-color: rgba(var(--secondary-rgb), var(--status-bg-opacity));
            color: var(--secondary-color);
            border: 1px solid rgba(var(--secondary-rgb), var(--status-border-opacity));
        }
        
        /* === UTILITY CLASSES === */
        .text-primary { color: var(--primary-color) !important; }
        .text-secondary { color: var(--text-secondary) !important; }
        .text-success { color: var(--success-color) !important; }
        .text-danger { color: var(--alert-color) !important; }
        .text-warning { color: #ffc107 !important; }
        .text-info { color: var(--secondary-color) !important; }
        .text-muted { color: var(--text-muted) !important; }
        
        .bg-primary { background-color: var(--primary-color) !important; }
        .bg-secondary { background-color: var(--bg-surface) !important; }
        .bg-surface { background-color: var(--bg-surface) !important; }
        .bg-dark { background-color: var(--bg-primary) !important; }
        
        .border { border: 1px solid var(--border-color) !important; }
        .border-top { border-top: 1px solid var(--border-color) !important; }
        .border-bottom { border-bottom: 1px solid var(--border-color) !important; }
        .border-left { border-left: 1px solid var(--border-color) !important; }
        .border-right { border-right: 1px solid var(--border-color) !important; }
        
        /* === CONTAINER === */
        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: var(--space-16);
            padding-left: var(--space-16);
        }
        
        @media (min-width: 640px) { .container { max-width: var(--container-sm); } }
        @media (min-width: 768px) { .container { max-width: var(--container-md); } }
        @media (min-width: 1024px) { .container { max-width: var(--container-lg); } }
        @media (min-width: 1280px) { .container { max-width: var(--container-xl); } }
        
        /* === FLEX UTILITIES === */
        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .items-center { align-items: center; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .gap-4 { gap: var(--space-4); }
        .gap-8 { gap: var(--space-8); }
        .gap-16 { gap: var(--space-16); }
        
        /* === SPACING UTILITIES === */
        .m-0 { margin: 0; }
        .mt-8 { margin-top: var(--space-8); }
        .mb-8 { margin-bottom: var(--space-8); }
        .mx-8 { margin-left: var(--space-8); margin-right: var(--space-8); }
        .my-8 { margin-top: var(--space-8); margin-bottom: var(--space-8); }
        .p-0 { padding: 0; }
        .py-8 { padding-top: var(--space-8); padding-bottom: var(--space-8); }
        .px-8 { padding-left: var(--space-8); padding-right: var(--space-8); }
        .py-16 { padding-top: var(--space-16); padding-bottom: var(--space-16); }
        .px-16 { padding-left: var(--space-16); padding-right: var(--space-16); }
        
        /* === DISPLAY UTILITIES === */
        .block { display: block; }
        .hidden { display: none; }
        
        /* === ACCESSIBILITY === */
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
        
        /* === SCROLLBAR STYLING === */
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
        
        /* === CODE BLOCKS === */
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
            border: 1px solid var(--border-color);
        }
        
        pre code {
            background: none;
            padding: 0;
        }
        
        .industrial-modal-content {
            background: var(--bg-primary);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
        }

        .industrial-modal-header {
            background: linear-gradient(135deg, var(--color-surface) 0%, var(--bg-primary) 100%);
            border-bottom: 1px solid var(--color-border);
            padding: var(--space-20);
            border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        }

        .industrial-modal-title {
            color: var(--color-primary);
            font-weight: var(--font-weight-bold);
            font-size: var(--font-size-2xl);
            display: flex;
            align-items: center;
            gap: var(--space-10);
        }

        .industrial-btn-close {
            filter: invert(1) brightness(2);
            opacity: 0.7;
            transition: opacity var(--duration-normal) var(--ease-standard);
        }

        .industrial-btn-close:hover {
            opacity: 1;
        }

        .industrial-btn-close:focus-visible {
            outline: var(--focus-outline);
            outline-offset: 2px;
        }

        .industrial-modal-body {
            padding: var(--space-32);
        }

        /* Benefits Section */
        .industrial-rfq-benefits {
            padding: var(--space-20);
            background: var(--color-surface);
            border-left: 3px solid var(--color-primary);
            border-radius: var(--radius-base);
        }

        .benefits-title {
            color: var(--color-primary);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--space-16);
            font-size: var(--font-size-lg);
            display: flex;
            align-items: center;
            gap: var(--space-8);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: var(--space-12);
            margin-bottom: var(--space-12);
            color: var(--color-text-secondary);
            font-size: var(--font-size-base);
        }

        .benefit-item i {
            color: var(--color-success);
            font-size: var(--font-size-sm);
            flex-shrink: 0;
        }

        .certification-preview {
            margin-top: var(--space-20);
            padding-top: var(--space-20);
            border-top: 1px solid var(--color-border);
        }

        .cert-label {
            color: var(--color-text-secondary);
            font-size: var(--font-size-xs);
            text-transform: uppercase;
            margin-bottom: var(--space-8);
            letter-spacing: 1px;
            font-weight: var(--font-weight-semibold);
        }

        .cert-badge {
            display: inline-block;
            background: var(--color-charcoal-800);
            border: 1px solid var(--color-info);
            color: var(--color-info);
            padding: var(--space-6) var(--space-10);
            border-radius: var(--radius-base);
            font-size: var(--font-size-xs);
            margin-right: var(--space-8);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-4);
        }

        /* Form Sections */
        .form-section {
            margin-bottom: var(--space-24);
            padding-bottom: var(--space-20);
            border-bottom: 1px solid var(--color-border);
        }

        .form-section:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .section-title {
            color: var(--color-primary);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--space-16);
            font-size: var(--font-size-base);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-left:100px;
        }

        .industrial-form-group {
            margin-bottom: var(--space-16);
        }

        .industrial-form-label {
            color: var(--color-text);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-8);
            font-size: var(--font-size-base);
            display: block;
            text-transform: capitalize;
        }

        .required {
            color: var(--color-primary);
        }

        .industrial-form-control {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            color: var(--color-text);
            padding: var(--space-10) var(--space-12);
            border-radius: var(--radius-base);
            font-size: var(--font-size-base);
            font-family: var(--font-family-base);
            transition: all var(--duration-normal) var(--ease-standard);
            width: 100%;
        }

        .industrial-form-control:focus {
            background: var(--color-charcoal-800);
            border-color: var(--color-primary);
            outline: none;
            box-shadow: var(--focus-ring);
            color: var(--color-text);
        }

        .industrial-form-control::placeholder {
            color: var(--color-text-secondary);
        }

        /* CAD Upload */
        .cad-upload-area {
            border: 2px dashed var(--color-border);
            border-radius: var(--radius-base);
            padding: var(--space-32);
            text-align: center;
            cursor: pointer;
            transition: all var(--duration-normal) var(--ease-standard);
            background: var(--color-surface);
            position: relative;
        }

        .cad-upload-area:hover {
            border-color: var(--color-primary);
            background: rgba(var(--color-primary-rgb), 0.05);
            transform: translateY(-2px);
        }

        .cad-upload-area:focus-visible {
            outline: var(--focus-outline);
            outline-offset: 2px;
        }

        .cad-upload-area i {
            font-size: var(--font-size-4xl);
            color: var(--color-info);
            display: block;
            margin-bottom: var(--space-10);
            transition: transform var(--duration-normal) var(--ease-standard);
        }

        .cad-upload-area:hover i {
            transform: scale(1.1);
        }

        .cad-upload-area p {
            color: var(--color-text);
            margin-bottom: var(--space-4);
            font-weight: var(--font-weight-semibold);
        }

        .cad-upload-area small {
            color: var(--color-text-secondary);
            font-size: var(--font-size-sm);
            display: block;
        }

        .file-item {
            padding: var(--space-10) var(--space-12);
            background: var(--color-surface);
            border-radius: var(--radius-base);
            margin-bottom: var(--space-8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--color-text);
            border-left: 3px solid var(--color-info);
        }

        /* Checkboxes */
        .industrial-checkbox {
            display: flex;
            align-items: center;
            gap: var(--space-10);
            margin-bottom: var(--space-12);
            cursor: pointer;
        }

        .industrial-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--color-primary);
            border-radius: var(--radius-sm);
        }

        .industrial-checkbox input[type="checkbox"]:focus-visible {
            outline: var(--focus-outline);
            outline-offset: 2px;
        }

        .industrial-checkbox label {
            color: var(--color-text-secondary);
            cursor: pointer;
            margin: 0;
            font-size: var(--font-size-base);
            user-select: none;
        }

        /* Modal Footer */
        .industrial-modal-footer {
            border-top: 1px solid var(--color-border);
            padding: var(--space-20);
            background: var(--color-surface);
            display: flex;
            gap: var(--space-10);
            justify-content: flex-end;
            border-radius: 0 0 var(--radius-lg) var(--radius-lg);
        }

        .industrial-btn-secondary,
        .industrial-btn-primary {
            padding: var(--space-10) var(--space-20);
            border-radius: var(--radius-base);
            font-weight: var(--font-weight-semibold);
            font-family: var(--font-family-base);
            transition: all var(--duration-normal) var(--ease-standard);
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: var(--font-size-sm);
            display: flex;
            align-items: center;
            gap: var(--space-6);
        }

        .industrial-btn-secondary {
            background: transparent;
            color: var(--color-text-secondary);
            border: 1px solid var(--color-border);
        }

        .industrial-btn-secondary:hover {
            background: var(--color-charcoal-800);
            border-color: var(--color-text-secondary);
            color: var(--color-text);
            transform: translateY(-2px);
        }

        .industrial-btn-secondary:focus-visible {
            outline: none;
            box-shadow: var(--focus-ring);
        }

        .industrial-btn-primary {
            background: var(--primary-color);
            color: var(--color-btn-primary-text);
        }

        .industrial-btn-primary:hover {
            background: var(--color-primary-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .industrial-btn-primary:focus-visible {
            outline: none;
            box-shadow: var(--focus-ring);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .industrial-metrics-ticker {
                gap: var(--space-20);
            }
            
            .ticker-metric {
                padding: 0 var(--space-10);
            }
        }

        @media (max-width: 991px) {
            .industrial-metrics-ticker {
                display: none;
            }
            
            .industrial-search-wrapper {
                flex: 1 !important;
                margin: var(--space-16) 0 !important;
                margin-left: 0 !important;
            }
            
            .industrial-navbar-nav {
                margin: var(--space-16) 0;
            }
            
            .industrial-portal-login {
                margin-left: 0;
                padding-left: 0;
                border-left: none;
                margin-top: var(--space-16);
            }
        }

        @media (max-width: 768px) {
            .industrial-quote-btn span,
            .industrial-hotline span {
                display: none;
            }
            
            .industrial-logo {
                max-height: 40px;
            }
            
            .industrial-nav-link {
                padding: var(--space-10) var(--space-12) !important;
                font-size: var(--font-size-base);
            }
            
            .industrial-modal-body {
                padding: var(--space-16);
            }
            
            .industrial-rfq-benefits {
                margin-bottom: var(--space-20);
            }
        }

        @media (max-width: 576px) {
            .industrial-command-bar {
                padding: var(--space-6) 0;
                font-size: var(--font-size-xs);
            }
            
            .industrial-company-name {
                display: none;
            }
            
            .industrial-modal-body {
                padding: var(--space-16);
            }
            
            .industrial-rfq-benefits {
                margin-bottom: var(--space-20);
            }
        }

        /* Mobile portrait breakpoint at 480px */
        @media (max-width: 480px) {
            .industrial-command-bar {
                padding: var(--space-4) 0;
                font-size: var(--font-size-xs);
            }
            
            .industrial-logo-text {
                font-size: var(--font-size-lg);
            }
            
            .industrial-actions {
                gap: var(--space-8);
            }
            
            .industrial-quote-btn,
            .industrial-login-link {
                padding: var(--space-6) var(--space-12);
                font-size: var(--font-size-xs);
            }
            
            .industrial-main-navbar {
                padding: var(--space-8) 0;
            }
            
            .industrial-nav-link {
                padding: var(--space-8) var(--space-10) !important;
                font-size: var(--font-size-sm);
            }
            
            .industrial-search-wrapper {
                margin: var(--space-12) 0 !important;
            }
            
            .industrial-search-input {
                padding: var(--space-6) var(--space-24) var(--space-6) 30px;
                font-size: var(--font-size-sm);
            }
            
            .industrial-modal-content {
                border-radius: var(--radius-base);
                margin: var(--space-8);
            }
            
            .industrial-modal-header,
            .industrial-modal-footer {
                padding: var(--space-16);
            }
            
            .industrial-modal-body {
                padding: var(--space-12);
            }
            
            .industrial-modal-title {
                font-size: var(--font-size-xl);
            }
            
            .industrial-rfq-benefits {
                padding: var(--space-16);
                margin-bottom: var(--space-16);
            }
            
            .cad-upload-area {
                padding: var(--space-24);
            }
            
            .cad-upload-area i {
                font-size: var(--font-size-3xl);
            }
            
            .industrial-btn-secondary,
            .industrial-btn-primary {
                padding: var(--space-8) var(--space-16);
                font-size: var(--font-size-xs);
                flex: 1;
                justify-content: center;
            }
            
            .industrial-modal-footer {
                flex-direction: column;
                gap: var(--space-8);
            }
        }

        /* === FONT FACE === */
        @font-face {
            font-family: 'FKGroteskNeue';
            src: url('https://r2cdn.perplexity.ai/fonts/FKGroteskNeue.woff2') format('woff2');
        }
    </style>
</head>

<body class="theme-<?= $user_details['theme_color'] ?? 'default'; ?>">

    <div class="modal fade" id="rfqModal" tabindex="-1" aria-labelledby="rfqModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered industrial-modal">
            <div class="modal-content industrial-modal-content">
                <!-- Modal Header -->
                <div class="modal-header industrial-modal-header">
                    <h5 class="modal-title industrial-modal-title" id="rfqModalLabel">
                        <i class="fas fa-file-contract"></i> Request for Quote (RFQ)
                    </h5>
                    <button type="button" class="btn-close industrial-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body industrial-modal-body">
                    <div class="row">
                        <!-- Benefits Section -->
                        <div class="col-lg-5">
                            <div class="industrial-rfq-benefits">
                                <h6 class="benefits-title">
                                    <i class="fas fa-star"></i> Why Request a Quote?
                                </h6>
                                
                                <div class="benefit-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Instant pricing on custom parts</span>
                                </div>
                                
                                <div class="benefit-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Expert manufacturing recommendations</span>
                                </div>
                                
                                <div class="benefit-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Volume discount eligible</span>
                                </div>
                                
                                <div class="benefit-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Priority queue for urgent orders</span>
                                </div>

                                
                            </div>
                        </div>
                        
                        <!-- Technical Form Section -->
                        <div class="col-lg-6">
                            <form class="contact-form industrial-inquiry-form" id="inquiryModalForm">
                                <div class="industrial-inquiry-form-group">
                                    <!-- Name -->
                                    <div class="industrial-inquiry-form-group">
                                        <label for="name" class="industrial-inquiry-form-label">
                                            Your Name <span class="required">*</span>
                                        </label>
                                        <div class="industrial-inquiry-input-wrapper">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                class="form-control industrial-inquiry-form-control"
                                                id="name" 
                                                placeholder="Your Name" 
                                                required
                                            >
                                            <i class="fas fa-user industrial-inquiry-input-icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="industrial-inquiry-form-group mt-3">
                                    <label for="number" class="industrial-inquiry-form-label">
                                        Mobile Number <span class="required">*</span>
                                    </label>
                                    <div class="industrial-inquiry-input-wrapper">
                                        <input 
                                            type="text" 
                                            class="form-control industrial-inquiry-form-control" 
                                            maxlength="10" 
                                            name="number" 
                                            id="number" 
                                            placeholder="Mobile number" 
                                            required
                                        >
                                        <i class="fas fa-phone industrial-inquiry-input-icon"></i>
                                    </div>
                                </div>

                                <!-- Email (NOTE: name=enqEmail) -->
                                <div class="industrial-inquiry-form-group mt-3">
                                    <label for="enqEmail" class="industrial-inquiry-form-label">
                                        Email <span class="required">*</span>
                                    </label>
                                    <div class="industrial-inquiry-input-wrapper">
                                        <input 
                                            type="email" 
                                            class="form-control industrial-inquiry-form-control" 
                                            name="enqEmail" 
                                            id="enqEmail" 
                                            placeholder="Email address" 
                                            required
                                        >
                                        <i class="fas fa-envelope industrial-inquiry-input-icon"></i>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="industrial-inquiry-form-group mt-3">
                                    <label for="message" class="industrial-inquiry-form-label">
                                        Your Message <span class="required">*</span>
                                    </label>
                                    <div class="industrial-inquiry-input-wrapper">
                                        <textarea 
                                            class="form-control industrial-inquiry-form-control" 
                                            name="message" 
                                            id="message" 
                                            rows="3" 
                                            placeholder="Share your requirements or questions..."
                                            required
                                        ></textarea>
                                        <i class="fas fa-pen-fancy industrial-inquiry-input-icon" style="top: 24px;"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Footer -->
                
                <div class="modal-footer industrial-modal-footer">
                    <button type="button" class="btn industrial-btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>Cancel
                    </button>
                    <button type="button" id="sendMsg" class="btn industrial-btn-primary">
                        <i class="fas fa-check-circle"></i>Submit RFQ
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('theme6/frontend/layout/header') ?>
    <?= $this->renderSection('contenttheme6'); ?>
    <?= $this->include('theme6/frontend/layout/footer') ?>

    <?= $this->include('theme6/frontend/layout/jsLinks') ?>
    <?= $this->renderSection('customScripts'); ?>
    
    <?php 
    $url = getenv('PARENT_URL') . '/user/payment-status';
    $post = [
        'base_url' => base_url(),
    ];
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $post,
    );
    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $payment_status  = curl_exec($ch);
    curl_close($ch);
    $payment_status_data = json_decode($payment_status, true);
    if (isset($payment_status_data['payment_status']) && strtoupper($payment_status_data['payment_status']) == 'UNPAID') {
        $disable_script = true;
    } else {
        $disable_script = false;
    }
    ?>
       
    <?php if (!$disable_script) : ?>
        <script defer>
            $(function() {
                var eppathurl = window.location.origin + window.location.pathname;
                var eptagmanage = new XMLHttpRequest();
                var getDataUrl = "<?= base_url(); ?>" + '/posts/getAllData/';
                var currentUrl = "<?= site_url(uri_string()); ?>";
                getDataUrl = btoa(getDataUrl);
                eptagmanage.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.response !== 0) {
                            var temp = new Array();
                            var mystr = this.response;
                            temp = mystr.split("||||||||||");
                            $("head").find("title").remove();
                            $('head').append(temp[0]);
                            $("body").append(temp[1]);
                        }
                    }
                };
                eptagmanage.open("POST", atob(getDataUrl) + btoa(currentUrl));
                eptagmanage.send();
            })
            
            document.addEventListener('DOMContentLoaded', function() {
                var keywords = <?= json_encode($meta_keywords) ?>;
                if (keywords && keywords.length > 0) {
                    var keywordString = keywords.map(function(keyword) {
                        return keyword.keyword;
                    }).join(', ');
    
                    var metaKeywordsTag = document.createElement('meta');
                    metaKeywordsTag.name = 'keywords';
                    metaKeywordsTag.content = keywordString;
                    document.head.appendChild(metaKeywordsTag);
                }
            });
            
            // Navbar scroll effect for Industrial theme
            document.addEventListener('DOMContentLoaded', function() {
                const navbar = document.querySelector('.industrial-main-navbar');
                
                if(navbar) {
                    window.addEventListener('scroll', function() {
                        if (window.scrollY > 100) {
                            navbar.classList.add('scrolled');
                        } else {
                            navbar.classList.remove('scrolled');
                        }
                    });
                }
                
                // Close mobile menu when clicking on a link
                const navLinks = document.querySelectorAll('.industrial-navbar-nav .nav-link');
                const navbarCollapse = document.querySelector('.navbar-collapse');
                
                if(navbarCollapse) {
                    navLinks.forEach(link => {
                        link.addEventListener('click', () => {
                            if (window.innerWidth < 992) {
                                navbarCollapse.classList.remove('show');
                            }
                        });
                    });
                }
            });
        </script>
    <?php endif; ?>
</body>

</html>
