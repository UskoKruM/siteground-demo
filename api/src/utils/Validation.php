<?php

class Validation {

    public static function checkIfNullOrEmpty($value) {
        return is_null($value) || empty($value);
    }

    public static function startsWith($string, $startString) {
        $startStringLength = strlen($startString);
        return substr($string, 0, $startStringLength) === $startString;
    }
}
