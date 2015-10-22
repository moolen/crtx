<?php

namespace App\Controller;

class NotFoundController{

    public function __construct()
    {

    }

	public function handleRequest()
	{
		echo "NOP! Not found!";
	}

}