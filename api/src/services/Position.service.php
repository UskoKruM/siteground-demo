<?php

require_once __DIR__ . '/database/DAO.php';
require_once __DIR__ . '/../models/Position.model.php';

class PositionService {

    private static $instance = null;

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    //Method that lists the registered positions.
    public function listPositions() {
        $dao = DAO::getInstance();
        $sql = "CALL sp_listPositions();";

        try {
            $resultSet = $dao->executeQuery($sql);
            $positions = array();

            if (is_array($resultSet) && (sizeof($resultSet) > 0)) {
                foreach ($resultSet as $row) {
                    $position = new Position(intval($row[0]), $row[1]);
                    array_push($positions, $position);
                }
            }
        } catch (Exception $ex) {
            Logger::addToErrorsLog($ex->getMessage());
            $positions = null;
        }

        return $positions;
    }
}
