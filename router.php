<?php
/**
 * FutureNxt Built-in Server Router
 * Enables clean URLs without .php extension when running:
 * php -S 127.0.0.1:8000 router.php
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static assets directly (CSS, JS, images, fonts)
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Redirect /index.php to /
if ($uri === '/index.php') {
    header("Location: /", true, 301);
    exit;
}

// Redirect any /something.php to clean /something
if (preg_match('/^(.+)\.php$/', $uri, $matches) && file_exists(__DIR__ . $uri)) {
    header("Location: " . $matches[1], true, 301);
    exit;
}

// Root request
if ($uri === '/' || $uri === '') {
    include __DIR__ . '/index.php';
    return true;
}

// Clean extensionless route (e.g. /about, /ventures, /affiliates, /contact, /map)
$cleanPath = trim($uri, '/');
if (file_exists(__DIR__ . '/' . $cleanPath . '.php')) {
    include __DIR__ . '/' . $cleanPath . '.php';
    return true;
}

// Fallback to index.php
include __DIR__ . '/index.php';
return true;
