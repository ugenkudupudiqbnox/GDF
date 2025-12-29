# Copilot Instructions for thegdf.org

## Project Overview
This is a PHP-based website for the Global DeepTech Forum (GDF). It uses a standalone PHP file architecture where each page is a complete document, often including `includes/inc_config.php` for global settings.

## Architecture & Patterns
- **Standalone Pages**: Most pages (e.g., [index.php](index.php), [cybersecurity.php](cybersecurity.php)) are self-contained.
- **Global Config**: [includes/inc_config.php](includes/inc_config.php) defines global variables like `$pgtl` (page title), `$u_prjct_url`, and contact info. Always use these variables instead of hardcoding strings.
- **Form Handling**: 
  - Contact forms post to [contact_validate.php](contact_validate.php).
  - Newsletter forms post to [newsletter.php](newsletter.php).
  - Both use **PHPMailer** (located in [PHPMailer/](PHPMailer/)) with Zoho SMTP settings.
  - Success/Error handling is done via JavaScript redirects (e.g., `location.href='thank-you.php';`).
- **Frontend Stack**:
  - **Framework**: Bootstrap 5.
  - **Animations**: AOS (Animate On Scroll).
  - **Interactivity**: GLightbox, Swiper.
  - **Assets**: CSS/JS are in [assets/](assets/), with SCSS source in [assets/scss/](assets/scss/).

## Key Conventions
- **Email Configuration**: SMTP credentials and recipient emails are hardcoded in [contact_validate.php](contact_validate.php) and [newsletter.php](newsletter.php).
- **Validation**: Client-side validation often uses `yav.js` (Yet Another Validator) found in [includes/yav.js](includes/yav.js).
- **Recaptcha**: Google Recaptcha v2 is integrated but currently commented out in form handlers. Keys are defined in [index.php](index.php) and [contact_validate.php](contact_validate.php).
- **Error Reporting**: Set to `error_reporting(E_ALL & ~E_NOTICE);` in PHP handlers.

## Critical Files
- [includes/inc_config.php](includes/inc_config.php): Central place for site-wide constants.
- [contact_validate.php](contact_validate.php): Main logic for processing contact form submissions.
- [assets/js/main.js](assets/js/main.js): Main entry point for frontend interactivity.
- [assets/css/main.css](assets/css/main.css): Compiled styles (avoid editing directly if SCSS is used).

## Workflow Notes
- **Deployment**: No automated build process is evident; changes are likely uploaded directly.
- **Legacy Code**: [PHPMailer-old/](PHPMailer-old/) and files like [contact_validate-bkp.php](contact_validate-bkp.php) are backups and should be ignored unless specifically asked.
