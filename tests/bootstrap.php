<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

// The file driver falls back under APP_PATH when no path is configured; point
// that fallback at a scratch directory so the suite never writes somewhere shared.
defined('APP_PATH') || define('APP_PATH', sys_get_temp_dir() . '/laika-cache-tests');
