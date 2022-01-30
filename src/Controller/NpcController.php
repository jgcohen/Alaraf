<?php

namespace App\Controller;

use App\Entity\Npc;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class NpcController extends AbstractController
{
    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }


    /**
     * @Route("/npcs", name="npcs")
     */
    public function list(): Response
    {
        $npcs = $this->entityManager->getRepository(Npc::class)->findAll();
        return $this->render('npc/list.html.twig', [
            'npcs'=>$npcs
        ]);
    }

    /**
     * @Route("/npc/{id}", name="npc")
     */
    public function index($id): Response
    {
        $npc = $this->entityManager->getRepository(Npc::class)->find($id);
        return $this->render('npc/index.html.twig', [
            'npc'=>$npc
        ]);
    }
}
