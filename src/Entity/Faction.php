<?php

namespace App\Entity;

use App\Repository\FactionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactionRepository::class)
 */
class Faction
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
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Subfaction::class, mappedBy="faction")
     */
    private $subfactions;

    /**
     * @ORM\OneToMany(targetEntity=Npc::class, mappedBy="faction")
     */
    private $npcs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $races;

    public function __construct()
    {
        $this->subfactions = new ArrayCollection();
        $this->npcs = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Subfaction[]
     */
    public function getSubfactions(): Collection
    {
        return $this->subfactions;
    }

    public function addSubfaction(Subfaction $subfaction): self
    {
        if (!$this->subfactions->contains($subfaction)) {
            $this->subfactions[] = $subfaction;
            $subfaction->setFaction($this);
        }

        return $this;
    }

    public function removeSubfaction(Subfaction $subfaction): self
    {
        if ($this->subfactions->removeElement($subfaction)) {
            // set the owning side to null (unless already changed)
            if ($subfaction->getFaction() === $this) {
                $subfaction->setFaction(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Npc[]
     */
    public function getNpcs(): Collection
    {
        return $this->npcs;
    }

    public function addNpc(Npc $npc): self
    {
        if (!$this->npcs->contains($npc)) {
            $this->npcs[] = $npc;
            $npc->setFaction($this);
        }

        return $this;
    }

    public function removeNpc(Npc $npc): self
    {
        if ($this->npcs->removeElement($npc)) {
            // set the owning side to null (unless already changed)
            if ($npc->getFaction() === $this) {
                $npc->setFaction(null);
            }
        }

        return $this;
    }

    public function getRaces(): ?string
    {
        return $this->races;
    }

    public function setRaces(?string $races): self
    {
        $this->races = $races;

        return $this;
    }
}
