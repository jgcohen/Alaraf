<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class JournalController extends AbstractController
{

    private $entityManager;

    public function __construct (EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/journal", name="journal")
     */
    public function index(): Response
    {

        $posts = $this->entityManager->getRepository(Post::class)->findAll();
        return $this->render('journal/index.html.twig', [
            'posts' => $posts
        ]);
    }
}
