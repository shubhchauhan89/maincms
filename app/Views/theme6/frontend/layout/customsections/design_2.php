<style>
    :root {
  /* Primitive Color Tokens */
  --color-white: rgba(255, 255, 255, 1);
  --color-black: rgba(0, 0, 0, 1);
  --color-cream-50: rgba(252, 252, 249, 1);
  --color-cream-100: rgba(255, 255, 253, 1);
  --color-gray-200: rgba(245, 245, 245, 1);
  --color-gray-300: rgba(167, 169, 169, 1);
  --color-gray-400: rgba(119, 124, 124, 1);
  --color-slate-500: rgba(98, 108, 113, 1);
  --color-brown-600: rgba(94, 82, 64, 1);
  --color-charcoal-700: rgba(31, 33, 33, 1);
  --color-charcoal-800: rgba(38, 40, 40, 1);
  --color-slate-900: rgba(19, 52, 59, 1);
  --color-teal-300: rgba(50, 184, 198, 1);
  --color-teal-400: rgba(45, 166, 178, 1);
  --color-teal-500: rgba(33, 128, 141, 1);
  --color-teal-600: rgba(29, 116, 128, 1);
  --color-teal-700: rgba(26, 104, 115, 1);
  --color-teal-800: rgba(41, 150, 161, 1);
  --color-red-400: rgba(255, 84, 89, 1);
  --color-red-500: rgba(192, 21, 47, 1);
  --color-orange-400: rgba(230, 129, 97, 1);
  --color-orange-500: rgba(168, 75, 47, 1);

  /* RGB versions for opacity control */
  --color-brown-600-rgb: 94, 82, 64;
  --color-teal-500-rgb: 33, 128, 141;
  --color-slate-900-rgb: 19, 52, 59;
  --color-slate-500-rgb: 98, 108, 113;
  --color-red-500-rgb: 192, 21, 47;
  --color-red-400-rgb: 255, 84, 89;
  --color-orange-500-rgb: 168, 75, 47;
  --color-orange-400-rgb: 230, 129, 97;

  /* Background color tokens (Light Mode) */
  --color-bg-1: rgba(59, 130, 246, 0.08); /* Light blue */
  --color-bg-2: rgba(245, 158, 11, 0.08); /* Light yellow */
  --color-bg-3: rgba(34, 197, 94, 0.08); /* Light green */
  --color-bg-4: rgba(239, 68, 68, 0.08); /* Light red */
  --color-bg-5: rgba(147, 51, 234, 0.08); /* Light purple */
  --color-bg-6: rgba(249, 115, 22, 0.08); /* Light orange */
  --color-bg-7: rgba(236, 72, 153, 0.08); /* Light pink */
  --color-bg-8: rgba(6, 182, 212, 0.08); /* Light cyan */

  /* Semantic Color Tokens (Light Mode) */
  --color-background: var(--color-cream-50);
  --color-surface: var(--color-cream-100);
  --color-text: var(--color-slate-900);
  --color-text-secondary: var(--color-slate-500);
  --color-primary: var(--color-teal-500);
  --color-primary-hover: var(--color-teal-600);
  --color-primary-active: var(--color-teal-700);
  --color-secondary: rgba(var(--color-brown-600-rgb), 0.12);
  --color-secondary-hover: rgba(var(--color-brown-600-rgb), 0.2);
  --color-secondary-active: rgba(var(--color-brown-600-rgb), 0.25);
  --color-border: rgba(var(--color-brown-600-rgb), 0.2);
  --color-btn-primary-text: var(--color-cream-50);
  --color-card-border: rgba(var(--color-brown-600-rgb), 0.12);
  --color-card-border-inner: rgba(var(--color-brown-600-rgb), 0.12);
  --color-error: var(--color-red-500);
  --color-success: var(--color-teal-500);
  --color-warning: var(--color-orange-500);
  --color-info: var(--color-slate-500);
  --color-focus-ring: rgba(var(--color-teal-500-rgb), 0.4);
  --color-select-caret: rgba(var(--color-slate-900-rgb), 0.8);

  /* Common style patterns */
  --focus-ring: 0 0 0 3px var(--color-focus-ring);
  --focus-outline: 2px solid var(--color-primary);
  --status-bg-opacity: 0.15;
  --status-border-opacity: 0.25;
  --select-caret-light: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23134252' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
  --select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");

  /* RGB versions for opacity control */
  --color-success-rgb: 33, 128, 141;
  --color-error-rgb: 192, 21, 47;
  --color-warning-rgb: 168, 75, 47;
  --color-info-rgb: 98, 108, 113;

  /* Typography */
  --font-family-base: "FKGroteskNeue", "Geist", "Inter", -apple-system,
    BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  --font-family-mono: "Berkeley Mono", ui-monospace, SFMono-Regular, Menlo,
    Monaco, Consolas, monospace;
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

  /* Spacing */
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

  /* Border Radius */
  --radius-sm: 6px;
  --radius-base: 8px;
  --radius-md: 10px;
  --radius-lg: 12px;
  --radius-full: 9999px;

  /* Shadows */
  --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.02);
  --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.04), 0 1px 2px rgba(0, 0, 0, 0.02);
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.04),
    0 2px 4px -1px rgba(0, 0, 0, 0.02);
  --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.04),
    0 4px 6px -2px rgba(0, 0, 0, 0.02);
  --shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.15),
    inset 0 -1px 0 rgba(0, 0, 0, 0.03);

  /* Animation */
  --duration-fast: 150ms;
  --duration-normal: 250ms;
  --ease-standard: cubic-bezier(0.16, 1, 0.3, 1);

  /* Layout */
  --container-sm: 640px;
  --container-md: 768px;
  --container-lg: 1024px;
  --container-xl: 1280px;
    }

    /* Dark mode colors */
    @media (prefers-color-scheme: dark) {
    :root {
        /* RGB versions for opacity control (Dark Mode) */
        --color-gray-400-rgb: 119, 124, 124;
        --color-teal-300-rgb: 50, 184, 198;
        --color-gray-300-rgb: 167, 169, 169;
        --color-gray-200-rgb: 245, 245, 245;

        /* Background color tokens (Dark Mode) */
        --color-bg-1: rgba(29, 78, 216, 0.15); /* Dark blue */
        --color-bg-2: rgba(180, 83, 9, 0.15); /* Dark yellow */
        --color-bg-3: rgba(21, 128, 61, 0.15); /* Dark green */
        --color-bg-4: rgba(185, 28, 28, 0.15); /* Dark red */
        --color-bg-5: rgba(107, 33, 168, 0.15); /* Dark purple */
        --color-bg-6: rgba(194, 65, 12, 0.15); /* Dark orange */
        --color-bg-7: rgba(190, 24, 93, 0.15); /* Dark pink */
        --color-bg-8: rgba(8, 145, 178, 0.15); /* Dark cyan */

        /* Semantic Color Tokens (Dark Mode) */
        --color-background: var(--color-charcoal-700);
        --color-surface: var(--color-charcoal-800);
        --color-text: var(--color-gray-200);
        --color-text-secondary: rgba(var(--color-gray-300-rgb), 0.7);
        --color-primary: var(--color-teal-300);
        --color-primary-hover: var(--color-teal-400);
        --color-primary-active: var(--color-teal-800);
        --color-secondary: rgba(var(--color-gray-400-rgb), 0.15);
        --color-secondary-hover: rgba(var(--color-gray-400-rgb), 0.25);
        --color-secondary-active: rgba(var(--color-gray-400-rgb), 0.3);
        --color-border: rgba(var(--color-gray-400-rgb), 0.3);
        --color-error: var(--color-red-400);
        --color-success: var(--color-teal-300);
        --color-warning: var(--color-orange-400);
        --color-info: var(--color-gray-300);
        --color-focus-ring: rgba(var(--color-teal-300-rgb), 0.4);
        --color-btn-primary-text: var(--color-slate-900);
        --color-card-border: rgba(var(--color-gray-400-rgb), 0.2);
        --color-card-border-inner: rgba(var(--color-gray-400-rgb), 0.15);
        --shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.1),
        inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        --button-border-secondary: rgba(var(--color-gray-400-rgb), 0.2);
        --color-border-secondary: rgba(var(--color-gray-400-rgb), 0.2);
        --color-select-caret: rgba(var(--color-gray-200-rgb), 0.8);

        /* Common style patterns - updated for dark mode */
        --focus-ring: 0 0 0 3px var(--color-focus-ring);
        --focus-outline: 2px solid var(--color-primary);
        --status-bg-opacity: 0.15;
        --status-border-opacity: 0.25;
        --select-caret-light: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23134252' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        --select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");

        /* RGB versions for dark mode */
        --color-success-rgb: var(--color-teal-300-rgb);
        --color-error-rgb: var(--color-red-400-rgb);
        --color-warning-rgb: var(--color-orange-400-rgb);
        --color-info-rgb: var(--color-gray-300-rgb);
    }
    }

    /* Data attribute for manual theme switching */
    [data-color-scheme="dark"] {
    /* RGB versions for opacity control (dark mode) */
    --color-gray-400-rgb: 119, 124, 124;
    --color-teal-300-rgb: 50, 184, 198;
    --color-gray-300-rgb: 167, 169, 169;
    --color-gray-200-rgb: 245, 245, 245;

    /* Colorful background palette - Dark Mode */
    --color-bg-1: rgba(29, 78, 216, 0.15); /* Dark blue */
    --color-bg-2: rgba(180, 83, 9, 0.15); /* Dark yellow */
    --color-bg-3: rgba(21, 128, 61, 0.15); /* Dark green */
    --color-bg-4: rgba(185, 28, 28, 0.15); /* Dark red */
    --color-bg-5: rgba(107, 33, 168, 0.15); /* Dark purple */
    --color-bg-6: rgba(194, 65, 12, 0.15); /* Dark orange */
    --color-bg-7: rgba(190, 24, 93, 0.15); /* Dark pink */
    --color-bg-8: rgba(8, 145, 178, 0.15); /* Dark cyan */

    /* Semantic Color Tokens (Dark Mode) */
    --color-background: var(--color-charcoal-700);
    --color-surface: var(--color-charcoal-800);
    --color-text: var(--color-gray-200);
    --color-text-secondary: rgba(var(--color-gray-300-rgb), 0.7);
    --color-primary: var(--color-teal-300);
    --color-primary-hover: var(--color-teal-400);
    --color-primary-active: var(--color-teal-800);
    --color-secondary: rgba(var(--color-gray-400-rgb), 0.15);
    --color-secondary-hover: rgba(var(--color-gray-400-rgb), 0.25);
    --color-secondary-active: rgba(var(--color-gray-400-rgb), 0.3);
    --color-border: rgba(var(--color-gray-400-rgb), 0.3);
    --color-error: var(--color-red-400);
    --color-success: var(--color-teal-300);
    --color-warning: var(--color-orange-400);
    --color-info: var(--color-gray-300);
    --color-focus-ring: rgba(var(--color-teal-300-rgb), 0.4);
    --color-btn-primary-text: var(--color-slate-900);
    --color-card-border: rgba(var(--color-gray-400-rgb), 0.15);
    --color-card-border-inner: rgba(var(--color-gray-400-rgb), 0.15);
    --shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.1),
        inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    --color-border-secondary: rgba(var(--color-gray-400-rgb), 0.2);
    --color-select-caret: rgba(var(--color-gray-200-rgb), 0.8);

    /* Common style patterns - updated for dark mode */
    --focus-ring: 0 0 0 3px var(--color-focus-ring);
    --focus-outline: 2px solid var(--color-primary);
    --status-bg-opacity: 0.15;
    --status-border-opacity: 0.25;
    --select-caret-light: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23134252' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    --select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");

    /* RGB versions for dark mode */
    --color-success-rgb: var(--color-teal-300-rgb);
    --color-error-rgb: var(--color-red-400-rgb);
    --color-warning-rgb: var(--color-orange-400-rgb);
    --color-info-rgb: var(--color-gray-300-rgb);
    }

    [data-color-scheme="light"] {
    /* RGB versions for opacity control (light mode) */
    --color-brown-600-rgb: 94, 82, 64;
    --color-teal-500-rgb: 33, 128, 141;
    --color-slate-900-rgb: 19, 52, 59;

    /* Semantic Color Tokens (Light Mode) */
    --color-background: var(--color-cream-50);
    --color-surface: var(--color-cream-100);
    --color-text: var(--color-slate-900);
    --color-text-secondary: var(--color-slate-500);
    --color-primary: var(--color-teal-500);
    --color-primary-hover: var(--color-teal-600);
    --color-primary-active: var(--color-teal-700);
    --color-secondary: rgba(var(--color-brown-600-rgb), 0.12);
    --color-secondary-hover: rgba(var(--color-brown-600-rgb), 0.2);
    --color-secondary-active: rgba(var(--color-brown-600-rgb), 0.25);
    --color-border: rgba(var(--color-brown-600-rgb), 0.2);
    --color-btn-primary-text: var(--color-cream-50);
    --color-card-border: rgba(var(--color-brown-600-rgb), 0.12);
    --color-card-border-inner: rgba(var(--color-brown-600-rgb), 0.12);
    --color-error: var(--color-red-500);
    --color-success: var(--color-teal-500);
    --color-warning: var(--color-orange-500);
    --color-info: var(--color-slate-500);
    --color-focus-ring: rgba(var(--color-teal-500-rgb), 0.4);

    /* RGB versions for light mode */
    --color-success-rgb: var(--color-teal-500-rgb);
    --color-error-rgb: var(--color-red-500-rgb);
    --color-warning-rgb: var(--color-orange-500-rgb);
    --color-info-rgb: var(--color-slate-500-rgb);
    }

    /* Base styles */
    html {
    font-size: var(--font-size-base);
    font-family: var(--font-family-base);
    line-height: var(--line-height-normal);
    color: var(--color-text);
    background-color: var(--color-background);
    -webkit-font-smoothing: antialiased;
    box-sizing: border-box;
    }

    body {
    margin: 0;
    padding: 0;
    }

    *,
    *::before,
    *::after {
    box-sizing: inherit;
    }

    /* Typography */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    margin: 0;
    font-weight: var(--font-weight-semibold);
    line-height: var(--line-height-tight);
    color: var(--color-text);
    letter-spacing: var(--letter-spacing-tight);
    }

    h1 {
    font-size: var(--font-size-4xl);
    }
    h2 {
    font-size: var(--font-size-3xl);
    }
    h3 {
    font-size: var(--font-size-2xl);
    }
    h4 {
    font-size: var(--font-size-xl);
    }
    h5 {
    font-size: var(--font-size-lg);
    }
    h6 {
    font-size: var(--font-size-md);
    }

    p {
    margin: 0 0 var(--space-16) 0;
    }

    a {
    color: var(--color-primary);
    text-decoration: none;
    transition: color var(--duration-fast) var(--ease-standard);
    }

    a:hover {
    color: var(--color-primary-hover);
    }

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
    border: 1px solid var(--color-border);
    }

    pre code {
    background: none;
    padding: 0;
    }

    /* Buttons */
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
    position: relative;
    }

    .btn:focus-visible {
    outline: none;
    box-shadow: var(--focus-ring);
    }

    .btn--primary {
    background: var(--color-primary);
    color: var(--color-btn-primary-text);
    }

    .btn--primary:hover {
    background: var(--color-primary-hover);
    }

    .btn--primary:active {
    background: var(--color-primary-active);
    }

    .btn--secondary {
    background: var(--color-secondary);
    color: var(--color-text);
    }

    .btn--secondary:hover {
    background: var(--color-secondary-hover);
    }

    .btn--secondary:active {
    background: var(--color-secondary-active);
    }

    .btn--outline {
    background: transparent;
    border: 1px solid var(--color-border);
    color: var(--color-text);
    }

    .btn--outline:hover {
    background: var(--color-secondary);
    }

    .btn--sm {
    padding: var(--space-4) var(--space-12);
    font-size: var(--font-size-sm);
    border-radius: var(--radius-sm);
    }

    .btn--lg {
    padding: var(--space-10) var(--space-20);
    font-size: var(--font-size-lg);
    border-radius: var(--radius-md);
    }

    .btn--full-width {
    width: 100%;
    }

    .btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    }

    /* Form elements */
    .form-control {
    display: block;
    width: 100%;
    padding: var(--space-8) var(--space-12);
    font-size: var(--font-size-md);
    line-height: 1.5;
    color: var(--color-text);
    background-color: var(--color-surface);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-base);
    transition: border-color var(--duration-fast) var(--ease-standard),
        box-shadow var(--duration-fast) var(--ease-standard);
    }

    textarea.form-control {
    font-family: var(--font-family-base);
    font-size: var(--font-size-base);
    }

    select.form-control {
    padding: var(--space-8) var(--space-12);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: var(--select-caret-light);
    background-repeat: no-repeat;
    background-position: right var(--space-12) center;
    background-size: 16px;
    padding-right: var(--space-32);
    }

    /* Add a dark mode specific caret */
    @media (prefers-color-scheme: dark) {
    select.form-control {
        background-image: var(--select-caret-dark);
    }
    }

    /* Also handle data-color-scheme */
    [data-color-scheme="dark"] select.form-control {
    background-image: var(--select-caret-dark);
    }

    [data-color-scheme="light"] select.form-control {
    background-image: var(--select-caret-light);
    }

    .form-control:focus {
    border-color: var(--color-primary);
    outline: var(--focus-outline);
    }

    .form-label {
    display: block;
    margin-bottom: var(--space-8);
    font-weight: var(--font-weight-medium);
    font-size: var(--font-size-sm);
    }

    .form-group {
    margin-bottom: var(--space-16);
    }

    /* Card component */
    .card {
    background-color: var(--color-surface);
    border-radius: var(--radius-lg);
    border: 1px solid var(--color-card-border);
    box-shadow: var(--shadow-sm);
    overflow: hidden;
    transition: box-shadow var(--duration-normal) var(--ease-standard);
    }

    .card:hover {
    box-shadow: var(--shadow-md);
    }

    .card__body {
    padding: var(--space-16);
    }

    .card__header,
    .card__footer {
    padding: var(--space-16);
    border-bottom: 1px solid var(--color-card-border-inner);
    }

    /* Status indicators - simplified with CSS variables */
    .status {
    display: inline-flex;
    align-items: center;
    padding: var(--space-6) var(--space-12);
    border-radius: var(--radius-full);
    font-weight: var(--font-weight-medium);
    font-size: var(--font-size-sm);
    }

    .status--success {
    background-color: rgba(
        var(--color-success-rgb, 33, 128, 141),
        var(--status-bg-opacity)
    );
    color: var(--color-success);
    border: 1px solid
        rgba(var(--color-success-rgb, 33, 128, 141), var(--status-border-opacity));
    }

    .status--error {
    background-color: rgba(
        var(--color-error-rgb, 192, 21, 47),
        var(--status-bg-opacity)
    );
    color: var(--color-error);
    border: 1px solid
        rgba(var(--color-error-rgb, 192, 21, 47), var(--status-border-opacity));
    }

    .status--warning {
    background-color: rgba(
        var(--color-warning-rgb, 168, 75, 47),
        var(--status-bg-opacity)
    );
    color: var(--color-warning);
    border: 1px solid
        rgba(var(--color-warning-rgb, 168, 75, 47), var(--status-border-opacity));
    }

    .status--info {
    background-color: rgba(
        var(--color-info-rgb, 98, 108, 113),
        var(--status-bg-opacity)
    );
    color: var(--color-info);
    border: 1px solid
        rgba(var(--color-info-rgb, 98, 108, 113), var(--status-border-opacity));
    }

    /* Container layout */
    .container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: var(--space-16);
    padding-left: var(--space-16);
    }

    @media (min-width: 640px) {
    .container {
        max-width: var(--container-sm);
    }
    }
    @media (min-width: 768px) {
    .container {
        max-width: var(--container-md);
    }
    }
    @media (min-width: 1024px) {
    .container {
        max-width: var(--container-lg);
    }
    }
    @media (min-width: 1280px) {
    .container {
        max-width: var(--container-xl);
    }
    }

    /* Utility classes */
    .flex {
    display: flex;
    }
    .flex-col {
    flex-direction: column;
    }
    .items-center {
    align-items: center;
    }
    .justify-center {
    justify-content: center;
    }
    .justify-between {
    justify-content: space-between;
    }
    .gap-4 {
    gap: var(--space-4);
    }
    .gap-8 {
    gap: var(--space-8);
    }
    .gap-16 {
    gap: var(--space-16);
    }

    .m-0 {
    margin: 0;
    }
    .mt-8 {
    margin-top: var(--space-8);
    }
    .mb-8 {
    margin-bottom: var(--space-8);
    }
    .mx-8 {
    margin-left: var(--space-8);
    margin-right: var(--space-8);
    }
    .my-8 {
    margin-top: var(--space-8);
    margin-bottom: var(--space-8);
    }

    .p-0 {
    padding: 0;
    }
    .py-8 {
    padding-top: var(--space-8);
    padding-bottom: var(--space-8);
    }
    .px-8 {
    padding-left: var(--space-8);
    padding-right: var(--space-8);
    }
    .py-16 {
    padding-top: var(--space-16);
    padding-bottom: var(--space-16);
    }
    .px-16 {
    padding-left: var(--space-16);
    padding-right: var(--space-16);
    }

    .block {
    display: block;
    }
    .hidden {
    display: none;
    }

    /* Accessibility */
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

    /* Dark mode specifics */
    [data-color-scheme="dark"] .btn--outline {
    border: 1px solid var(--color-border-secondary);
    }

    @font-face {
    font-family: 'FKGroteskNeue';
    src: url('https://r2cdn.perplexity.ai/fonts/FKGroteskNeue.woff2')
        format('woff2');
    }

    /* END PERPLEXITY DESIGN SYSTEM */
    ```css
    /* ===== INDUSTRIAL EDGE PRO - FEATURES SHOWCASE STYLES ===== */
    /* Manufacturing capabilities showcase with feature cards */

    /* ===== WRAPPER ===== */
    .industrial-features-showcase-wrapper {
        position: relative;
        padding: var(--space-32) 0;
        background: var(--color-background);
        overflow: hidden;
    }

    /* Animated gradient background */
    .industrial-features-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.05;
        pointer-events: none;
        background: 
            linear-gradient(45deg, var(--color-primary) 0%, transparent 50%),
            linear-gradient(135deg, var(--color-teal-700) 0%, transparent 50%),
            linear-gradient(225deg, var(--color-primary) 0%, transparent 50%),
            linear-gradient(315deg, var(--color-teal-700) 0%, transparent 50%);
        background-size: 400% 400%;
        animation: features-bg-shift 25s var(--ease-standard) infinite;
    }

    @keyframes features-bg-shift {
        0% { background-position: 0% 0%; }
        50% { background-position: 100% 100%; }
        100% { background-position: 0% 0%; }
    }

    /* Main Container */
    .industrial-features-container {
        position: relative;
        z-index: 1;
        max-width: var(--container-xl);
        margin: 0 auto;
        padding: 50px var(--space-20);
    }

    /* Grid Layouts */
    .industrial-features-grid {
        display: grid;
        align-items: center;
        gap: var(--space-32);
    }

    .industrial-features-grid.layout-full {
        grid-template-columns: 1fr;
    }

    .industrial-features-grid.layout-normal-left {
        grid-template-columns: 380px 1fr;
    }

    .industrial-features-grid.layout-normal-right {
        grid-template-columns: 1fr 380px;
    }

    .industrial-features-grid.layout-stretch-left {
        grid-template-columns: 1fr 1fr;
        height: 700px;
    }

    .industrial-features-grid.layout-stretch-right {
        grid-template-columns: 1fr 1fr;
        height: 700px;
    }

    .industrial-features-grid.layout-normal-left .industrial-features-image-section,
    .industrial-features-grid.layout-stretch-left .industrial-features-image-section {
        order: -1;
    }

    /* Features Section */
    .industrial-features-section {
        position: relative;
        z-index: 2;
    }

    .industrial-features-inner {
        position: relative;
    }

    /* Heading */
    .industrial-features-heading {
        font-size: var(--font-size-4xl);
        font-weight: var(--font-weight-bold);
        margin-bottom: var(--space-32);
        letter-spacing: var(--letter-spacing-tight);
        color: var(--color-text);
        line-height: var(--line-height-tight);
        text-transform: uppercase;
    }

    .industrial-features-heading span {
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-teal-700) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .industrial-features-accent {
        display: block;
        color: var(--color-primary);
    }

    /* Features Grid */
    .industrial-features-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-24);
    }

    /* Feature Card */
    .industrial-feature-item {
        position: relative;
        padding: var(--space-24);
        background: var(--color-surface);
        border-radius: var(--radius-lg);
        border: 1px solid var(--color-card-border);
        transition: all var(--duration-normal) var(--ease-standard);
        cursor: pointer;
        overflow: hidden;
        display: flex;
        gap: var(--space-20);
        align-items: flex-start;
        box-shadow: var(--shadow-sm);
    }

    .industrial-feature-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: var(--space-4);
        background: linear-gradient(90deg, var(--color-primary), var(--color-teal-700));
        transform: scaleX(0);
        transition: transform var(--duration-normal) var(--ease-standard);
        transform-origin: left;
    }

    .industrial-feature-item:hover::before {
        transform: scaleX(1);
    }

    .industrial-feature-item:hover {
        transform: translateY(calc(-1 * var(--space-12)));
        box-shadow: var(--shadow-lg);
        border-color: var(--color-primary);
        background: linear-gradient(135deg, var(--color-surface) 0%, rgba(var(--color-teal-500-rgb), 0.03) 100%);
    }

    /* Feature Icon Container */
    .industrial-feature-icon-wrapper {
        position: relative;
        flex-shrink: 0;
    }

    .industrial-feature-icon {
        width: 70px;
        height: 70px;
        border-radius: var(--radius-base);
        background: linear-gradient(135deg, rgba(var(--color-teal-500-rgb), 0.15), rgba(var(--color-teal-700-rgb, 26, 104, 115), 0.15));
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: var(--font-size-3xl);
        color: var(--color-primary);
        transition: all var(--duration-normal) var(--ease-standard);
    }

    .industrial-feature-item:hover .industrial-feature-icon {
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-hover));
        color: var(--color-btn-primary-text);
        transform: scale(1.15) rotate(-10deg);
        box-shadow: 0 var(--space-10) var(--space-24) rgba(var(--color-teal-500-rgb), 0.3);
    }

    /* Feature Content */
    .industrial-feature-content {
        flex: 1;
    }

    .industrial-feature-title {
        font-size: var(--font-size-lg);
        font-weight: var(--font-weight-bold);
        color: var(--color-text);
        margin-bottom: var(--space-8);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: color var(--duration-fast) var(--ease-standard);
    }

    .industrial-feature-item:hover .industrial-feature-title {
        color: var(--color-primary);
    }

    .industrial-feature-description {
        font-size: var(--font-size-sm);
        color: var(--color-text);
        line-height: var(--line-height-normal);
    }



    /* Counter Badge */
    .industrial-feature-counter {
        position: absolute;
        top: calc(-1 * var(--space-10));
        right: calc(-1 * var(--space-10));
        width: var(--space-32);
        height: var(--space-32);
        border-radius: var(--radius-full);
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-hover));
        color: var(--color-btn-primary-text);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: var(--font-weight-bold);
        font-size: var(--font-size-xl);
        box-shadow: 0 var(--space-4) var(--space-20) rgba(var(--color-teal-500-rgb), 0.3);
        opacity: 0;
        transform: scale(0);
        transition: all var(--duration-normal) var(--ease-standard);
    }

    .industrial-feature-item:hover .industrial-feature-counter {
        opacity: 1;
        transform: scale(1);
    }

    /* Image Section */
    .industrial-features-image-section {
        position: relative;
        height: 100%;
    }

    .industrial-features-image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
    }

    .layout-normal-left .industrial-features-image-wrapper,
    .layout-normal-right .industrial-features-image-wrapper {
        height: 400px;
    }

    .industrial-features-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform var(--duration-normal) var(--ease-standard);
    }

    .industrial-features-image-wrapper:hover .industrial-features-image {
        transform: scale(1.12) rotate(-2deg);
    }

    .industrial-features-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(var(--color-teal-500-rgb), 0.15), transparent);
        opacity: 0;
        transition: opacity var(--duration-normal) var(--ease-standard);
    }

    .industrial-features-image-wrapper:hover .industrial-features-image-overlay {
        opacity: 1;
    }

    /* Floating Elements */
    .industrial-features-float-element {
        position: absolute;
        border-radius: var(--radius-full);
        opacity: 0.08;
        pointer-events: none;
    }

    .industrial-features-float-1 {
        width: 200px;
        height: 200px;
        background: var(--color-primary);
        top: calc(-1 * var(--space-32));
        left: -100px;
        animation: float-element 8s var(--ease-standard) infinite;
    }

    .industrial-features-float-2 {
        width: 150px;
        height: 150px;
        background: var(--color-teal-700);
        bottom: var(--space-32);
        right: -80px;
        animation: float-element 10s var(--ease-standard) infinite reverse;
    }

    @keyframes float-element {
        0%, 100% { transform: translate(0, 0); }
        50% { transform: translate(var(--space-24), calc(-1 * var(--space-32))); }
    }

    /* Animations */
    .industrial-feature-item-animate {
        opacity: 0;
        animation: feature-fadeInUp var(--duration-normal) var(--ease-standard) forwards;
    }

    @keyframes feature-fadeInUp {
        from {
            opacity: 0;
            transform: translateY(var(--space-24));
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 1200px) {
        .industrial-features-heading {
            font-size: var(--font-size-3xl);
        }
        .industrial-features-grid {
            gap: var(--space-32);
        }
        .industrial-features-list {
            gap: var(--space-20);
        }
    }

    @media (max-width: 991px) {
        .industrial-features-showcase-wrapper {
            padding: var(--space-32) 0;
        }
        .industrial-features-heading {
            font-size: var(--font-size-2xl);
        }
        .industrial-features-grid.layout-normal-left,
        .industrial-features-grid.layout-normal-right,
        .industrial-features-grid.layout-stretch-left,
        .industrial-features-grid.layout-stretch-right {
            grid-template-columns: 1fr;
            height: auto;
        }
        .industrial-features-grid.layout-normal-left .industrial-features-image-section,
        .industrial-features-grid.layout-stretch-left .industrial-features-image-section {
            order: 0;
        }
        .industrial-features-image-wrapper {
            height: 300px;
        }
        .industrial-features-list {
            grid-template-columns: 1fr;
            gap: var(--space-16);
        }
    }

    @media (max-width: 768px) {
        .industrial-features-showcase-wrapper {
            padding: var(--space-24) 0;
        }
        .industrial-features-heading {
            font-size: var(--font-size-xl);
            margin-bottom: var(--space-24);
        }
        .industrial-feature-item {
            padding: var(--space-20);
            gap: var(--space-16);
        }
        .industrial-feature-icon {
            width: 60px;
            height: 60px;
            font-size: var(--font-size-2xl);
        }
        .industrial-feature-title {
            font-size: var(--font-size-base);
        }
    }

    @media (max-width: 576px) {
        .industrial-features-heading {
            font-size: var(--font-size-lg);
        }
        .industrial-feature-item {
            padding: var(--space-16);
        }
        .industrial-features-image-wrapper {
            height: 250px;
        }
    }

    @media (max-width: 480px) {
        .industrial-features-showcase-wrapper {
            padding: var(--space-20) 0;
        }
        
        .industrial-features-container {
            padding: 0 var(--space-16);
        }
        
        .industrial-features-heading {
            font-size: var(--font-size-md);
            margin-bottom: var(--space-20);
        }
        
        .industrial-features-grid {
            gap: var(--space-20);
        }
        
        .industrial-feature-item {
            padding: var(--space-12);
            gap: var(--space-12);
            flex-direction: column;
            text-align: center;
        }
        
        .industrial-feature-icon {
            width: 50px;
            height: 50px;
            font-size: var(--font-size-xl);
        }
        
        .industrial-feature-title {
            font-size: var(--font-size-sm);
        }
        
        .industrial-features-image-wrapper {
            height: 200px;
        }
        
        .industrial-features-float-1,
        .industrial-features-float-2 {
            display: none;
        }
    }
</style>

<?php
// Layout configuration
$position = $position ?? 'right';
$isStretch = $isStretch ?? false;
$imageOnLeft = $imageOnLeft ?? false;
$hasImage = $hasImage ?? 'yes';

// Parse features data
$features = [];
if (!empty($custom['features_data'])) {
    $features = is_array($custom['features_data']) 
        ? $custom['features_data'] 
        : json_decode($custom['features_data'], true);
}

// Determine layout class
$layoutClass = 'layout-full';
if ($hasImage === "yes") {
    if ($isStretch) {
        $layoutClass = $imageOnLeft ? 'layout-stretch-left' : 'layout-stretch-right';
    } else {
        $layoutClass = $imageOnLeft ? 'layout-normal-left' : 'layout-normal-right';
    }
}
?>

<!-- ===== INDUSTRIAL EDGE PRO - MANUFACTURING CAPABILITIES SHOWCASE ===== -->
<section class="industrial-features-showcase-wrapper">
    <!-- Animated Background -->
    <div class="industrial-features-bg"></div>

    <!-- Floating Elements -->
    <div class="industrial-features-float-element industrial-features-float-1"></div>
    <div class="industrial-features-float-element industrial-features-float-2"></div>

    <div class="industrial-features-container">
        <div class="industrial-features-grid <?= $layoutClass; ?>">
            
            <!-- Features Section -->
            <div class="industrial-features-section"
                 data-aos="<?= $imageOnLeft ? 'fade-right' : 'fade-left'; ?>" 
                 data-aos-duration="1000">
                
                <div class="industrial-features-inner">
                    <!-- Heading -->
                    <h2 class="industrial-features-heading">
                        <?= htmlspecialchars($custom['heading'] ?? 'Manufacturing Capabilities'); ?>
                        <?php if (strpos($custom['heading'] ?? '', 'Capabilities') !== false): ?>
                            <span class="industrial-features-accent"></span>
                        <?php endif; ?>
                    </h2>

                    <!-- Features Grid -->
                    <div class="industrial-features-list">
                        <?php 
                        $featureCount = 1;
                        if (!empty($features)): 
                            foreach ($features as $index => $feature): 
                        ?>
                            <div class="industrial-feature-item industrial-feature-item-animate" 
                                 style="animation-delay: <?= ($index * 100); ?>ms;"
                                 data-aos="fade-in-up" 
                                 data-aos-delay="<?= ($index % 4) * 80; ?>">
                                
                                <div class="industrial-feature-icon-wrapper">
                                    <div class="industrial-feature-icon">
                                        <i class="fas <?= htmlspecialchars($feature['icon'] ?? 'fa-cogs'); ?>"></i>
                                    </div>
                                    <div class="industrial-feature-counter">
                                        <?= $featureCount; ?>
                                    </div>
                                </div>

                                <div class="industrial-feature-content">
                                    <h4 class="industrial-feature-title">
                                        <?= htmlspecialchars($feature['title'] ?? 'Capability'); ?>
                                    </h4>
                                    <p class="industrial-feature-description">
                                        <?= htmlspecialchars($feature['description'] ?? 'Advanced manufacturing capability'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php 
                            $featureCount++;
                            endforeach; 
                        else: 
                        ?>
                            <!-- Fallback Features -->
                            <div class="industrial-feature-item industrial-feature-item-animate" style="animation-delay: 0ms;">
                                <div class="industrial-feature-icon-wrapper">
                                    <div class="industrial-feature-icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="industrial-feature-counter">1</div>
                                </div>
                                <div class="industrial-feature-content">
                                    <h4 class="industrial-feature-title">CNC Machining</h4>
                                    <p class="industrial-feature-description">Precision manufacturing expertise</p>
                                </div>
                            </div>

                            <div class="industrial-feature-item industrial-feature-item-animate" style="animation-delay: 100ms;">
                                <div class="industrial-feature-icon-wrapper">
                                    <div class="industrial-feature-icon">
                                        <i class="fas fa-hammer"></i>
                                    </div>
                                    <div class="industrial-feature-counter">2</div>
                                </div>
                                <div class="industrial-feature-content">
                                    <h4 class="industrial-feature-title">Metal Fabrication</h4>
                                    <p class="industrial-feature-description">Quality-focused production</p>
                                </div>
                            </div>

                            <div class="industrial-feature-item industrial-feature-item-animate" style="animation-delay: 200ms;">
                                <div class="industrial-feature-icon-wrapper">
                                    <div class="industrial-feature-icon">
                                        <i class="fas fa-drafting-compass"></i>
                                    </div>
                                    <div class="industrial-feature-counter">3</div>
                                </div>
                                <div class="industrial-feature-content">
                                    <h4 class="industrial-feature-title">CAD Design</h4>
                                    <p class="industrial-feature-description">Advanced design solutions</p>
                                </div>
                            </div>

                            <div class="industrial-feature-item industrial-feature-item-animate" style="animation-delay: 300ms;">
                                <div class="industrial-feature-icon-wrapper">
                                    <div class="industrial-feature-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="industrial-feature-counter">4</div>
                                </div>
                                <div class="industrial-feature-content">
                                    <h4 class="industrial-feature-title">Quality Assurance</h4>
                                    <p class="industrial-feature-description">ISO certified testing</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Image Section -->
            <?php if ($hasImage === "yes"): ?>
            <div class="industrial-features-image-section"
                 data-aos="<?= $imageOnLeft ? 'fade-left' : 'fade-right'; ?>" 
                 data-aos-duration="1000">
                <div class="industrial-features-image-wrapper">
                    <img src="<?= htmlspecialchars($img ?? base_url() . '/public/assets/img/default-section.jpg'); ?>" 
                         alt="<?= htmlspecialchars($custom['heading'] ?? 'Manufacturing'); ?>" 
                         class="industrial-features-image"
                         loading="lazy">
                    <div class="industrial-features-image-overlay"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }
    });
</script>

<?php
?>