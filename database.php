<?php


class database
{
    //private properties
    private static  $user = 'root';
    private static $pass = '';
    private static $dsn = "mysql:host=localhost;dbname=job_application";
    private static $db;

    private function __construct() {}

    //get pdo connection
    public static function getDb(){
        if(!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn, self::$user, self::$pass);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                include 'error.php';
                exit();
            }
        }
        return self::$db;
    }
}