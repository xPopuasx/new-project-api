<?php

namespace DB;

interface WorkWithDBInterface
{
    /*
    @return bool
    */
    public function select($query);

    /*
      @return array
    */
    public function insert($query);

    /*
      @return array
    */
    public function join($query);
}