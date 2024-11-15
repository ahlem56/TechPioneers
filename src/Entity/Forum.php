<?php

namespace App\Entity;

use App\Repository\ForumRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ForumRepository::class)]
#[Broadcast]
class Forum
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Forum = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Titre_Forum = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description_Forum = null;

    #[ORM\Column(nullable: true)]
    private ?int $Createur_Forum = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdForum(): ?int
    {
        return $this->Id_Forum;
    }

    public function setIdForum(?int $Id_Forum): static
    {
        $this->Id_Forum = $Id_Forum;

        return $this;
    }

    public function getTitreForum(): ?string
    {
        return $this->Titre_Forum;
    }

    public function setTitreForum(?string $Titre_Forum): static
    {
        $this->Titre_Forum = $Titre_Forum;

        return $this;
    }

    public function getDescriptionForum(): ?string
    {
        return $this->Description_Forum;
    }

    public function setDescriptionForum(?string $Description_Forum): static
    {
        $this->Description_Forum = $Description_Forum;

        return $this;
    }

    public function getCreateurForum(): ?int
    {
        return $this->Createur_Forum;
    }

    public function setCreateurForum(?int $Createur_Forum): static
    {
        $this->Createur_Forum = $Createur_Forum;

        return $this;
    }
}
