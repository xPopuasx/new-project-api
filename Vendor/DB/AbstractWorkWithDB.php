<?php

namespace DB;

use DB\MysqlConnect;

abstract class AbstractWorkWithDB implements WorkWithDBInterface{

    private $connect = false

    public function select($query)
    {
        $this->connect = new MysqlConnect();
        try{
            if($this->connect->getInstanc === true)
            {

            }
            else
            {
                trow new \Exception('Ошибка подключения');
            }
        }
        catch (Exception $e)


    }

    public function insert($query)
    {
        // TODO: Implement insert() method.
    }

    public function join($query)
    {
        // TODO: Implement join() method.
    }


}