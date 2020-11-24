<?php


namespace DB;


class MysqlConnect
{
    public static $connect = false;

    public function __construct()
    {
        $connect_params = require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
        print_r($connect_params);

        self::$connect = mysqli_connect(
            $connect_params['DB_CONNECT']['locahost'],
            $connect_params['DB_CONNECT']['user'],
            $connect_params['DB_CONNECT']['password'],
            $connect_params['DB_CONNECT']['db_name']);



    }

}