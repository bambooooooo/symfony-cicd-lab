<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewFeatureController extends AbstractController
{
    #[Route('/new-feature', name: 'new_feature')]
    public function index(): Response
    {
        return new Response('<html><body>Nowa funkcja działa!</body></html>');
    }

    #[Route('manual', name:'manual')]
    public function manualAction(): Response
    {
        return new Response('Manual here', Response::HTTP_OK);
    }
    
    #[Route('/status', name:'staus')]
    public function statusAction(Request $request): Response
    {
        return new Response('Ok', Response::HTTP_OK);
    }
}