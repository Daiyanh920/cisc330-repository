<?php

namespace Post\Models;

use PDO;

abstract class Model {

    private function connect() {
        $string = "mysql:hostname=" . DB_HOST . ";dbname=" . DB_NAME;
        $con = new PDO($string, DB_USER, DB_PASS);
        return $con;
    }

    public function query($query, $data = []) {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            //return as an associated array
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
        return false;
    }

}