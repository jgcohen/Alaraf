<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NpcController extends AbstractController
{
    /**
     * @Route("/npc", name="npc")
     */
    public function index(): Response
    {
        return $this->render('npc/index.html.twig', [
            'controller_name' => 'NpcController',
        ]);
    }
}
