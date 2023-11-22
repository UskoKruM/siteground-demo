<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../../utils/Logger.php';
require_once __DIR__ . '/../../utils/Validation.php';

class DAO {

    private static $instance = null;
    private $connection;

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __construct() {
        try {
            $dsn = sprintf("mysql:host=%s;port=%s;dbname=%s;charset=%s", DB_HOST, DB_PORT, DB_NAME, DB_CHARSET);
            $this->connection = new PDO($dsn, DB_USER, DB_PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            Logger::addToErrorsLog($ex->getMessage());
            throw $ex;
        }
    }

    //Function that executes a query and returns the results.
    public function executeQuery($sql = EMPTY_STRING, $values = array()) {
        try {
            if (!Validation::checkIfNullOrEmpty($sql)) {
                return $this->executeSQLQuery($sql, $values);
            } else {
                return 0;
            }
        } catch (Exception $ex) {
            Logger::addToErrorsLog($ex->getMessage());
        }
    }

    private function executeSQLQuery($sql, $values = array()) {
        try {
            $query = $this->connection->prepare($sql);
            $query->execute($values);

            if (intval($query->errorCode()) === 0) {
                return $query->fetchAll(PDO::FETCH_NUM);
            } else {
                return intval($query->errorCode());
            }
        } catch (Exception $ex) {
            Logger::addToErrorsLog($ex->getMessage());
            return $ex->getMessage();
        }
    }
}
