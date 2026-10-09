<?php
/**
 * FitBliss Production Configuration & Environment Manager
 * Version: 2.1.0
 * Automatically adapts between Localhost (XAMPP/WAMP) and Live Hosting Domain (cPanel / VPS / Root / Subfolder).
 */

if (!defined('FITBLISS_APP')) {
    define('FITBLISS_APP', true);

    // ── 1. DYNAMIC PROTOCOL & HOST DETECTION ──
    $isHttps = (
        (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
        ($_SERVER['SERVER_PORT'] ?? 80) == 443 ||
        (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
        (!empty($_SERVER['HTTP_CF_VISITOR']) && strpos($_SERVER['HTTP_CF_VISITOR'], 'https') !== false)
    );
    $protocol = $isHttps ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

    // ── 2. DYNAMIC BASE PATH DETECTION ──
    $rootDir = str_replace('\\', '/', dirname(__DIR__));
    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT']) ?: $_SERVER['DOCUMENT_ROOT']) : '';
    
    $basePath = '';
    if ($docRoot && strpos($rootDir, $docRoot) === 0) {
        $basePath = substr($rootDir, strlen($docRoot));
    }
    
    // Fallback detection using SCRIPT_NAME / REQUEST_URI
    if ($basePath === false || ($basePath === '' && !empty($_SERVER['SCRIPT_NAME']))) {
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        if (preg_match('#^(/[^/]+)#', $scriptDir, $m) && !in_array($m[1], ['/services', '/blog', '/legal', '/includes'])) {
            $basePath = $m[1];
        }
    }
    
    // Explicit localhost /fitbliss check fallback
    if (empty($basePath)) {
        $reqUri = $_SERVER['REQUEST_URI'] ?? '/';
        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        if (strpos($reqUri, '/fitbliss/') === 0 || strpos($reqUri, '/fitbliss') === 0 || strpos($scriptName, '/fitbliss/') === 0) {
            $basePath = '/fitbliss';
        } else {
            $basePath = '';
        }
    }

    $basePath = rtrim(str_replace('\\', '/', $basePath), '/');

    define('BASE_PATH', $basePath);
    define('BASE_URL', $basePath);
    define('SITE_URL', $protocol . $host . $basePath);
    define('ASSETS_PATH', $basePath . '/assets');
    define('ASSETS_URL', $basePath . '/assets');
    define('ROOT_DIR', dirname(__DIR__));
    define('SITE_NAME', 'Fit Bliss - Luxury Wellness Destination');
}

// Global template variables for rapid embedding
$base_url     = BASE_PATH;
$assets_url   = BASE_PATH . '/assets';
$uploads_base = BASE_PATH . '/assets/images';
