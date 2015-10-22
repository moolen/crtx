<?php

namespace App\Controller;

use App\Service\MyService;
use Symfony\Component\HttpFoundation\Response;


class ServiceController{

	/**
	 * @var MyService
	 */
	protected $service;

	public function __construct(MyService $myService)
	{
		$this->service = $myService;
	}

	public function handleRequest()
	{
		return new Response($this->service->yolo(), 200);
	}

}