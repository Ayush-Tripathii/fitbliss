# FitBliss - Live Web Hosting Deployment Guide

## 🚀 Overview
FitBliss is configured as a high-performance, standalone standard PHP web application with clean URL routing, organized categorized directory structure, centralized media assets, integrated Web Application Firewall (WAF), SEO metadata, and luxury responsive UI styling.

---

## 📁 Standard Directory Structure
```
fitbliss/
├── .htaccess                 # Security rules, compression, caching, clean URL routing
├── .gitignore                # Git exclusions (backups, IDE files)
├── DEPLOYMENT_GUIDE.md       # Live server deployment instructions
│
├── index.php                 # Homepage (Root Frontend)
├── about.php                 # About Us page
├── contact.php               # Contact Us page
├── gallery.php               # Photo Gallery with Lightbox
├── trainers.php              # Personal Trainers page
├── membership.php            # Membership Plans page
├── blog.php                  # Main Blog & Fitness Articles page
├── founder.php               # Founder page
│
├── services/                 # Categorized Services Subfolders
│   ├── fitness/              # gym.php, personal-training.php, functional-training.php, spinning.php
│   ├── yoga-pilates/         # pilates.php, traditional-yoga.php, aerial-yoga.php, aquatic-wellness.php
│   ├── sports-dance/         # boxing.php, zumba.php, dance.php, squash.php
│   ├── wellness-healing/     # spa.php, panchkarma.php, physiotherapy.php, steam-sauna.php, iv-therapy.php
│   └── lifestyle/            # nutrition.php, salon.php, cafe.php, equipment.php
│
├── blog/                     # Single Blog Article Pages
│   ├── 10-benefits-of-combining-yoga-and-pilates-for-a-balanced-workout-routine.php
│   ├── 5-reasons-to-incorporate-crossfit-into-your-weekly-workout-routine.php
│   └── a-beginners-guide-to-cardio-workouts-tips-and-tricks-for-lasting-results.php
│
├── legal/                    # Legal & Compliance Pages
│   ├── privacy-policy.php
│   ├── terms-conditions.php
│   └── terms-of-use.php
│
├── includes/                 # Core reusable backend components & security
│   ├── config.php            # Dynamic environment & base URL configuration
│   ├── security_shield.php   # WAF protection (XSS, SQLi, RCE defense)
│   ├── header.php            # Global header & navigation bar component
│   └── footer.php            # Global footer component
│
└── assets/                   # Centralized Static Media & Frontend Assets
    ├── images/               # All photos, banners, icons, and media uploads
    ├── css/                  # Custom CSS stylesheets
    ├── js/                   # Custom JavaScript logic & interactions
    ├── fonts/                # Custom web fonts & typography
    ├── pdf/                  # PDF brochures and documents
    ├── videos/               # Video files and media
    ├── plugins/              # Plugin stylesheets & frontend scripts
    ├── theme/                # Theme styles
    └── vendor/               # Vendor frontend libraries (jQuery, swiper, etc.)
```

---

## 🌐 Live Server Deployment Steps

### 1. Uploading Files to Server (cPanel / DirectAdmin / FTP / SSH)
- Upload all files into `public_html/` (or your domain's web root directory).
- Ensure `.htaccess` is uploaded into the root directory.

### 2. Permissions
- Standard files: `644`
- Directories: `755`

### 3. Web Server Requirements
- **PHP Version:** PHP 7.4 / 8.0 / 8.1 / 8.2 / 8.3
- **Web Server:** Apache / LiteSpeed / Nginx
- **Apache Modules:** `mod_rewrite`, `mod_headers`, `mod_deflate`, `mod_expires` (enabled by default on all major hosts).

### 4. Clean URL Routing Configuration
- If hosted at domain root (e.g. `https://example.com/`), `.htaccess` works automatically out of the box.
- If hosted in a subfolder (e.g. `http://localhost/fitbliss/`), ensure `RewriteBase /fitbliss/` is enabled in `.htaccess`.

---

## 🛡️ Built-in Security & Performance
- **WAF Shield:** Blocks SQL Injection, PHP code execution, XSS attacks, null byte injections, and path traversal attempts.
- **Hidden File Protection:** Denies direct web access to `.git`, `.env`, configuration, and log files.
- **Asset Execution Lockdown:** Strictly forbids executing server-side scripts inside `assets/` and `assets/images/`.
- **GZIP & Caching:** Pre-configured browser caching and gzip compression for high Google PageSpeed scores.
