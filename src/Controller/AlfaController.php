<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlfaController extends AbstractController
{
    #[Route(path:"alfa", name:"alfa")]
    public function index(Request $request){
        return new Response("Ok. Alfa", Response::HTTP_OK);
    }
}