<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NeutralgodsController extends AbstractController
{
    /**
     * @Route("/neutralgods", name="neutralgods")
     */
    public function index(): Response
    {
        return $this->render('neutralgods/index.html.twig', [
            'controller_name' => 'NeutralgodsController',
        ]);
    }
}
