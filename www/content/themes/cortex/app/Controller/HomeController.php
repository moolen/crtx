<?php

namespace App\Controller;

use Cortex\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Cortex\Model\Acf\Post;

class HomeController extends BaseController
{
        public function handleRequest()
        {
        	$model = new Post(1);
            return new Response(
                $this->templating->render('layout.twig', array( 'Model' => $model ))
            );
        }
}
