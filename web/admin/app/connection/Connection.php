<?php

class Connection {

    private $conection;

    function __construct() {
        $this->connect();
    }

    public function connect() {
        $config = parse_ini_file(__DIR__ . '../../config/config.ini');

        $this->conection = mysqli_connect($config['server'], $config['username'], $config['password'], $config['dbname']);
        $this->conection->set_charset("utf8");
        //mysqli_set_charset($this->conection, "utf8");
       
        if (mysqli_connect_errno()) {
            throw new Exception('No fue posible conectarse con la base de datos.');
        }

        return $this->conection;
    }

    public function getConection() {
        if ($this->conection == null) {
            $this->connect();
        }
        return $this->conection;
    }

    public function closeConnection() {
        mysqli_close($this->getConection());
    }

    public function getAll($query) {
        $prepare = mysqli_query($this->getConection(), $query);
        $result = mysqli_fetch_all($prepare, MYSQLI_ASSOC);
        
        return $result;
    }

    public function getRow($query) {

        $result = mysqli_query($this->getConection(), $query);

        $row = mysqli_fetch_assoc($result);

        return $row;
    }

    public function getLastInserId() {
        return mysqli_insert_id($this->getConection());
    }

    public function executeQuery($query) {
        $result = mysqli_query($this->getConection(), $query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function beginTransaction() {
        mysqli_autocommit($this->getConection(), FALSE);
    }

    public function rollBackTransaction() {
        mysqli_rollback($this->getConection());
    }

    public function commitTransaction() {
        mysqli_commit($this->getConection());
        mysqli_autocommit($this->getConection(), TRUE);
    }

}
