<?php

namespace Tyrbok\HealtCheckBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;

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
