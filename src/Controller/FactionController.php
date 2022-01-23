<?php

namespace App\Controller;

use App\Entity\Faction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class FactionController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/faction/{id}", name="faction")
     */
    public function index($id): Response
    {

        $faction = $this->entityManager->getRepository(Faction::class)->find($id);
        $subfactions = $faction->getSubfactions();
        return $this->render('faction/index.html.twig', [
            'faction' => $faction,
            'subfactions'=>$subfactions
        ]);
    }
}
