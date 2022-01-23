<?php

namespace App\Controller;

use App\Entity\Subfaction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class SubfactionController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/subfaction/{id}", name="subfaction")
     */
    public function index($id): Response
    {
        $subfaction = $this->entityManager->getRepository(Subfaction::class)->find($id);
        $npcs = $subfaction->getNpcs();
        return $this->render('subfaction/index.html.twig', [
            'subfaction'=>$subfaction,
            'npcs'=>$npcs
        ]);
    }
}
