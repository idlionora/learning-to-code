<?php

abstract class Database {
    abstract public function connection();
    public function disconnect() {
        //implementation
    }
}

class Model extends Database {
    public function connection() {
        //
    }
}

$db = new Database();
$model = new Model();
?>
