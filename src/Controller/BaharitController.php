<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaharitController extends AbstractController
{
    /**
     * @Route("/baharit", name="baharit")
     */
    public function index(): Response
    {
        return $this->render('baharit/index.html.twig', [
            'controller_name' => 'BaharitController',
        ]);
    }
}
