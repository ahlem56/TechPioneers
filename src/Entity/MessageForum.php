<?php

namespace App\Entity;

use App\Repository\MessageForumRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: MessageForumRepository::class)]
#[Broadcast]
class MessageForum
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_MessageForum = null;

    #[ORM\Column(nullable: true)]
    private ?int $Createur_MessageForum = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Forum = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Contenu_MessageForum = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateCreation_MessageForum = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMessageForum(): ?int
    {
        return $this->Id_MessageForum;
    }

    public function setIdMessageForum(?int $Id_MessageForum): static
    {
        $this->Id_MessageForum = $Id_MessageForum;

        return $this;
    }

    public function getCreateurMessageForum(): ?int
    {
        return $this->Createur_MessageForum;
    }

    public function setCreateurMessageForum(?int $Createur_MessageForum): static
    {
        $this->Createur_MessageForum = $Createur_MessageForum;

        return $this;
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

    public function getContenuMessageForum(): ?string
    {
        return $this->Contenu_MessageForum;
    }

    public function setContenuMessageForum(?string $Contenu_MessageForum): static
    {
        $this->Contenu_MessageForum = $Contenu_MessageForum;

        return $this;
    }

    public function getDateCreationMessageForum(): ?\DateTimeInterface
    {
        return $this->DateCreation_MessageForum;
    }

    public function setDateCreationMessageForum(?\DateTimeInterface $DateCreation_MessageForum): static
    {
        $this->DateCreation_MessageForum = $DateCreation_MessageForum;

        return $this;
    }
}
