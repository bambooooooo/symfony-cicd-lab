<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammaController extends AbstractController
{
    #[Route(path:"gamma", name:"gamma")]
    public function index(Request $request){
        return new Response("Ok. Gamma", Response::HTTP_OK);
    }
}