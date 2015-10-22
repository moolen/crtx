<?php

namespace App\Util;

use Cortex\Core\LogHandlerInterface;
use Monolog\Handler\ErrorLogHandler;

class CustomLogger extends ErrorLogHandler implements LogHandlerInterface{

    // just change the constructor
    public function __construct($options){
        parent::__construct(null, $options['level']);
    }

}