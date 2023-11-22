<?php

require_once __DIR__ . '/consts.php';

class Logger {

    public static function addToLog($message) {
        $currentTime = self::getCurrentTime();
        $path = __DIR__ . "/logs/log.log";
        error_log("$currentTime: $message\n", 3, $path);
    }

    public static function addToRequestLog() {
        $currentTime = self::getCurrentTime();
        $path = __DIR__ . "/logs/request.log";
        error_log("$currentTime: " . $_SERVER[SERVER_PROTOCOL] . " " . $_SERVER[REQUEST_METHOD] . " " . $_SERVER[REQUEST_URI] . "\n", 3, $path);
    }

    public static function addToErrorsLog($message) {
        $currentTime = self::getCurrentTime();
        $path = __DIR__ . "/logs/errors.log";
        error_log("$currentTime: $message\n", 3, $path);
    }

    private static function getCurrentTime() {
        date_default_timezone_set(TIMEZONE);
        return date('Y-m-d H:i:s');
    }
}
