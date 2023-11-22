<?php

require_once __DIR__ . '/Validation.php';

//Environment
define('ENVIRONMENT', Validation::startsWith($_SERVER['HTTP_HOST'], 'localhost') ? 'dev' : 'prod');

//Common
define('EMPTY_STRING', '');

//Culture
define('TIMEZONE', 'America/Lima');

//HTTP
define('PHP_INPUT', 'php://input');
define('SERVER_PROTOCOL', "SERVER_PROTOCOL");
define('REQUEST_METHOD', "REQUEST_METHOD");
define('REQUEST_URI', "REQUEST_URI");

//HTTP CORS
define('ALLOWEDHEADERSARRAY', [
    "X-API-KEY",
    "Origin",
    "X-Requested-With",
    "Content-Type",
    "Accept",
    "Access-Control-Request-Method",
    "Access-Control-Request-Headers",
    "Authorization"
]);
define('ALLOWEDHEADERS', implode(",", ALLOWEDHEADERSARRAY));

//HTTP Methods
define('HTTP_METHOD_GET', "GET");
define('HTTP_METHOD_POST', "POST");
define('HTTP_METHOD_PUT', "PUT");
define('HTTP_METHOD_DELETE', "DELETE");

//HTTP Messages
define('MESSAGE_CODE_200', "SUCCESS");
define('MESSAGE_CODE_404', "NOTFOUND");
define('MESSAGE_CODE_500', "ERROR");
