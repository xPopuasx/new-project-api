<?php


namespace DB;


class MysqlConnect
{
    public static $connect = false;

    /*
     * @return bool
     */
    public function __construct()
    {
        $connect_params = require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';

        self::$connect = mysqli_connect(
            $connect_params['DB_CONNECT']['locahost'],
            $connect_params['DB_CONNECT']['user'],
            $connect_params['DB_CONNECT']['password'],
            $connect_params['DB_CONNECT']['db_test']);
    }

    /*
     * Одиночка
     * @return bool
    */
    public static function getInstance()
    {
        if (self::$connect === true) {
            return self::$connect;
        }

        return new self;
    }

}