<?php

class connection
{

    private $host = "localhost";
    private $dbname = 'mv_prototipo';
    private $username = 'root';
    private $password = '';
    private static $con;

    function __construct()
    {
        try {
            self::$con = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public static function getConnection()
    {
        if (!isset(self::$con)) {
            self::$con = new self();
        }
        return self::$con;
    }
}


// if ($con) {
// } else {
// }
