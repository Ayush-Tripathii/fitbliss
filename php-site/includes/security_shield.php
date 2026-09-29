<?php
/**
 * FitBliss Enterprise Security Shield & Web Application Firewall (WAF)
 * Version: 2.0.0
 * Defense-in-Depth Protection against XSS, SQLi, RFI/LFI, RCE, Backdoors & Malicious Injections.
 */

if (!defined('FITBLISS_SECURITY_SHIELD')) {
    define('FITBLISS_SECURITY_SHIELD', true);

    // ── 1. ENFORCE STRICT HTTP SECURITY HEADERS ──────────────────────────
    if (!headers_sent()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
        header("Content-Security-Policy: default-src 'self' https: data: blob: 'unsafe-inline' 'unsafe-eval'; img-src 'self' https: data: blob:; font-src 'self' https: data:; media-src 'self' https: data: blob:; frame-src 'self' https:;");
    }

    // ── 2. REAL-TIME THREAT INSPECTION ENGINE ────────────────────────────
    class FitBlissWAF {
        private static $signatures = [
            'RCE / PHP Code Injection' => '/(?:\b(?:base64_decode|gzinflate|str_rot13|eval|system|shell_exec|passthru|popen|proc_open|assert)\s*\(|\$_(?:GET|POST|REQUEST|COOKIE|SERVER)\s*\[|<\?(?:php|=)?)/i',
            'SQL Injection'            => '/(?:\b(?:union\s+(?:all\s+)?select|select\s+.*?\s+from|insert\s+into|delete\s+from|drop\s+table|information_schema|benchmark\s*\(|load_file\s*\))\b)/i',
            'Cross-Site Scripting'     => '/(?:<script[^>]*>|javascript\s*:|vbscript\s*:|onload\s*=|onerror\s*=|document\.cookie|<iframe|<embed|<object)/i',
            'Path Traversal / LFI'     => '/(?:\.\.[\/\\\\]|\b(?:etc[\/\\\\]passwd|proc[\/\\\\]self|boot\.ini|win\.ini)\b)/i',
            'Spam / Malware Signature' => '/(?:\b(?:portbet|denemebonusu|slot-gacor|poker-online)\b)/i',
            'Null Byte Injection'      => '/(?:\x00|%00)/i'
        ];

        public static function inspect() {
            // Check Query String
            if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
                self::scanValue($_SERVER['QUERY_STRING'], 'QUERY_STRING');
            }

            // Check Request URI
            if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])) {
                self::scanValue(urldecode($_SERVER['REQUEST_URI']), 'REQUEST_URI');
            }

            // Check GET, POST, COOKIE
            self::scanArray($_GET, 'GET');
            self::scanArray($_POST, 'POST');
            self::scanArray($_COOKIE, 'COOKIE');
        }

        private static function scanArray(&$array, $source) {
            if (!is_array($array)) return;
            foreach ($array as $key => &$val) {
                self::scanValue($key, $source . '_KEY');
                if (is_array($val)) {
                    self::scanArray($val, $source);
                } else {
                    self::scanValue($val, $source . '_VALUE');
                }
            }
        }

        private static function scanValue($val, $source) {
            if (!is_string($val) || strlen($val) < 2) return;

            foreach (self::$signatures as $attackType => $pattern) {
                if (preg_match($pattern, $val, $matches)) {
                    self::blockRequest($attackType, $source, $matches[0]);
                }
            }
        }

        private static function blockRequest($attackType, $source, $detectedSnippet) {
            $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
            $uri = $_SERVER['REQUEST_URI'] ?? 'Unknown';
            $time = date('Y-m-d H:i:s');
            
            // Log security incident
            $logEntry = sprintf(
                "[%s] BLOCKED ATTACK | IP: %s | Type: %s | Source: %s | URI: %s | Snippet: %s\n",
                $time, $ip, $attackType, $source, $uri, substr($detectedSnippet, 0, 80)
            );
            
            $logFile = __DIR__ . '/security_audit.log';
            @file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

            // Respond with HTTP 403 Forbidden
            if (!headers_sent()) {
                http_response_code(403);
                header('Content-Type: text/html; charset=UTF-8');
            }

            echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>403 Forbidden - Security Shield</title>'
               . '<style>body{background:#010303;color:#f4f2ea;font-family:Arial,sans-serif;display:flex;align-items:center;justify-content:center;height:100vh;margin:0;}'
               . '.box{background:#0d1717;border:1px solid rgba(55,192,128,0.3);padding:40px;max-width:500px;text-align:center;border-radius:6px;box-shadow:0 10px 30px rgba(0,0,0,0.8);}'
               . 'h1{color:#37c080;font-size:24px;margin-top:0;}p{color:#9b998b;font-size:14px;line-height:1.6;}'
               . '.code{background:#050a0b;padding:8px 12px;color:#f4f2ea;font-family:monospace;font-size:12px;margin:15px 0;display:inline-block;border:1px solid rgba(255,255,255,0.08);}'
               . '
/* Hide Elementor Lightbox and Gallery Item Titles/Captions/Filenames */
.elementor-slideshow__title,
.elementor-slideshow__description,
.elementor-slideshow__footer,
.dialog-lightbox-title,
.dialog-lightbox-description,
.elementor-lightbox .dialog-header,
.elementor-lightbox .elementor-slideshow__title,
.elementor-lightbox .elementor-slideshow__description,
.elementor-lightbox .elementor-slideshow__footer,
.elementor-gallery-item__title,
.elementor-gallery-item__description,
.elementor-gallery-item__content,
.elementor-gallery-item__overlay .elementor-gallery-item__title {
    display: none !important;
    opacity: 0 !important;
    visibility: hidden !important;
    height: 0 !important;
    width: 0 !important;
    min-height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    pointer-events: none !important;
}
</style></head><body><div class="box">'
               . '<h1>Access Denied</h1>'
               . '<p>Your request was blocked by the FitBliss Web Application Firewall (WAF) because potentially malicious payload patterns were detected.</p>'
               . '<div class="code">Security Event ID: ' . substr(md5($time . $ip), 0, 12) . '</div>'
               . '<p>If you believe this was an error, please contact the site administrator.</p>'
               . '</div></body></html>';
            exit;
        }
    }

    // Execute real-time inspection
    FitBlissWAF::inspect();
}
