<?php

namespace App\Util;

class LoggerFactory{

    public static function createCustomLogger($config)
    {
        return new CustomLogger($config);
    }

}