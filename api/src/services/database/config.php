<?php

require_once __DIR__ . '/../../utils/consts.php';

define('DB_HOST', 'localhost');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8');
define('DB_NAME', (ENVIRONMENT === "dev") ? 'php_api_demo' : 'PROD_DATABASE');
define('DB_USER', (ENVIRONMENT === "dev") ? 'root' : 'PROD_USER');
define('DB_PASSWORD', (ENVIRONMENT === "dev") ? '123456' : 'PROD_PASSWORD');
