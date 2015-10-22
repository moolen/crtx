<?php

namespace App\Controller;

use Cortex\Controller\BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExplicitController extends BaseController
{
    public function handleRequest()
    {
        $res = new JsonResponse("ExplicitController does handleRequest");
        $res->setData(array('cyka' => 'blyat'));
        return $res;
    }
}
