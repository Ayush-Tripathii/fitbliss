<?php
/**
 * FitBliss Production Configuration & Environment Manager
 * Version: 2.0.0
 * Automatically adapts between Localhost (XAMPP) and Live Hosting Domain (e.g. cPanel / VPS).
 */

if (!defined('FITBLISS_APP')) {
    define('FITBLISS_APP', true);

    // ── 1. DYNAMIC PROTOCOL & HOST DETECTION ──
    $isHttps = (
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
        ($_SERVER['SERVER_PORT'] ?? 80) == 443 ||
        (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    );
    $protocol = $isHttps ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    // ── 2. DYNAMIC BASE PATH ──
    // Detects whether running inside a subdirectory (like /fitbliss/) or domain root (/)
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    if (strpos($uri, '/fitbliss/') === 0 || strpos($uri, '/fitbliss') === 0) {
        $baseUrl = '/fitbliss';
    } else {
        $baseUrl = '';
    }

    define('SITE_URL', $protocol . $host . $baseUrl);
    define('BASE_PATH', $baseUrl);
    define('ROOT_DIR', dirname(__DIR__));
    define('SITE_NAME', 'Fit Bliss - Luxury Wellness Destination');
}
