<?phpspl_autoload_register(function ($class_name) {    $file_load = __DIR__.'/'.$class_name . '.php';    if(file_exists($file_load))    {        require_once $file_load;    }    else    {        echo 'Ошибка подключения файла класса';    }});