<?php

use App\Kernel;

set_error_handler(function ($severity, $message, $file, $line) {
    if (str_contains($message, 'ini_set(): assert.warning INI setting is deprecated')) {
        return true;
    }
    return false;
});

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
