<?php

namespace App\Controller;

use App\Entity\Faction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class FactionsController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/factions", name="factions")
     */
    public function index(): Response
    {

        $factions = $this->entityManager->getRepository(Faction::class)->findAll();
        
        return $this->render('factions/index.html.twig', [
            'factions' => $factions,
        ]);
    }
}
