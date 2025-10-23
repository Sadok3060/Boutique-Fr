<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is
} else {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    include __DIR__ . '/public/index.php';
}