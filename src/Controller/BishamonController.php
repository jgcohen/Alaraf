<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BishamonController extends AbstractController
{
    /**
     * @Route("/bishamon", name="bishamon")
     */
    public function index(): Response
    {
        return $this->render('bishamon/index.html.twig', [
            'controller_name' => 'BishamonController',
        ]);
    }
}
