<?php

namespace DB;

interface WorkWithDBInterface
{
    public function connect();

    public function CheckConnect($var);

}