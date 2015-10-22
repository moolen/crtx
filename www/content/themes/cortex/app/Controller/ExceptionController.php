<?php

namespace App\Controller;

class ExceptionController extends \Cortex\Controller\BaseController
{

    public function handleRequest()
    {
        $message = $this->exception->getMessage();
        var_dump($this->exception);
    }
}
