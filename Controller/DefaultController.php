<?php

namespace Tyrbok\HealthCheckBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/health")
     */
    public function indexAction()
    {
        $status = array("status" => "UP");

        $content = json_encode($status);

        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
