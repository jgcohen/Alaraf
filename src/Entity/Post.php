<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="post")
     */
    private $comments;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content6;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content7;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content8;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content9;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content10;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Comments[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setPost($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getPost() === $this) {
                $comment->setPost(null);
            }
        }

        return $this;
    }

    public function getContent2(): ?string
    {
        return $this->content2;
    }

    public function setContent2(?string $content2): self
    {
        $this->content2 = $content2;

        return $this;
    }

    public function getContent3(): ?string
    {
        return $this->content3;
    }

    public function setContent3(?string $content3): self
    {
        $this->content3 = $content3;

        return $this;
    }

    public function getContent4(): ?string
    {
        return $this->content4;
    }

    public function setContent4(?string $content4): self
    {
        $this->content4 = $content4;

        return $this;
    }

    public function getContent5(): ?string
    {
        return $this->content5;
    }

    public function setContent5(?string $content5): self
    {
        $this->content5 = $content5;

        return $this;
    }

    public function getContent6(): ?string
    {
        return $this->content6;
    }

    public function setContent6(?string $content6): self
    {
        $this->content6 = $content6;

        return $this;
    }

    public function getContent7(): ?string
    {
        return $this->content7;
    }

    public function setContent7(?string $content7): self
    {
        $this->content7 = $content7;

        return $this;
    }

    public function getContent8(): ?string
    {
        return $this->content8;
    }

    public function setContent8(?string $content8): self
    {
        $this->content8 = $content8;

        return $this;
    }

    public function getContent9(): ?string
    {
        return $this->content9;
    }

    public function setContent9(?string $content9): self
    {
        $this->content9 = $content9;

        return $this;
    }

    public function getContent10(): ?string
    {
        return $this->content10;
    }

    public function setContent10(?string $content10): self
    {
        $this->content10 = $content10;

        return $this;
    }
}
