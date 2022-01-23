<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use App\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

class JournalController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
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

    /**
     * @Route("/post/{id}", name="post")
     */
    public function post($id, Request $request): Response
    {

        $post = $this->entityManager->getRepository(Post::class)->find($id);
        if ($post) {

            $comment = new Comments;
            $form = $this->createForm(CommentType::class, $comment);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $comment->setUser($this->getUser());
                $comment->setCreatedAt(new DateTime('now'));
                $comment->setPost($post);

                $this->entityManager->persist($comment);
                $this->entityManager->flush();
            }
            return $this->render('journal/post.html.twig', [
                'post' => $post,
                'comments' => $post->getComments(),
                'form' => $form->createView(),
            ]);
        }
    }
}
