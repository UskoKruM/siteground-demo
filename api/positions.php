<?php

require_once __DIR__ . '/EnableCORS.php';
require_once __DIR__ . '/src/controllers/Position.controller.php';

$positionController = PositionController::getInstance();
$positionController->processRequest();
