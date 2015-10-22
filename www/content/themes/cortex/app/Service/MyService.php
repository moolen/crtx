<?php

namespace App\Service;

class MyService
{
    public function __construct()
    {
    }

    public function yolo()
    {
    	return 'Hello from ' . get_class();
    }
}
