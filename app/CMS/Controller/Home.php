<?php
namespace CMS\Controller;

use Polymer\Controller\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class Home extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        return $this->withJson(['data' => 'data']);
    }

    public function hello(Request $request, Response $response, $args)
    {
        debugger();
        $this->render('/home/hello.twig', array(
            'name' => 'Macro',
        ));
    }
}