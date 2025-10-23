<?php
// Temporary debug endpoint - remove it after use
header('Content-Type: text/plain');

echo "getenv('APP_ENV'): " . (getenv('APP_ENV') ?: '<not set>') . "\n";
echo "getenv('DATABASE_URL'): " . (getenv('DATABASE_URL') ?: '<not set>') . "\n\n";
echo "\$_ENV dump:\n";
foreach ($_ENV as $k => $v) {
    echo "$k=$v\n";
}

echo "\nPHP SAPI: " . php_sapi_name() . "\n";
echo "PHP binary: " . PHP_BINARY . "\n";
