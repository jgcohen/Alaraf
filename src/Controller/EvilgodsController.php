<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvilgodsController extends AbstractController
{
    /**
     * @Route("/evilgods", name="evilgods")
     */
    public function index(): Response
    {
        return $this->render('evilgods/index.html.twig', [
            'controller_name' => 'EvilgodsController',
        ]);
    }
}
