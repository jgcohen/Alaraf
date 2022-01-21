<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TarocciController extends AbstractController
{
    /**
     * @Route("/tarocci", name="tarocci")
     */
    public function index(): Response
    {
        return $this->render('tarocci/index.html.twig', [
            'controller_name' => 'TarocciController',
        ]);
    }
}
