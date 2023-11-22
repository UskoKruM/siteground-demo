<?php

require_once __DIR__ . '/src/utils/consts.php';

$allowedOrigins = (ENVIRONMENT === "dev") ? "*" : "http://tu-dominio.com";

header('Access-Control-Allow-Origin: ' . $allowedOrigins);
header('Access-Control-Allow-Headers: ' . ALLOWEDHEADERS);
header('Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS');
header('Content-Type: application/json; charset=UTF-8');

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'OPTIONS') {
    header('Access-Control-Allow-Origin: ' . $allowedOrigins);
    header('Access-Control-Allow-Headers: ' . ALLOWEDHEADERS);
    header('HTTP/1.1 200 OK');
    die();
}
