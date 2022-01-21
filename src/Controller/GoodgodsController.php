<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoodgodsController extends AbstractController
{
    /**
     * @Route("/goodgods", name="goodgods")
     */
    public function index(): Response
    {
        return $this->render('goodgods/index.html.twig', [
            'controller_name' => 'GoodgodsController',
        ]);
    }
}
