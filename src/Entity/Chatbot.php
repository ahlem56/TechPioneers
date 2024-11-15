<?php

namespace App\Entity;

use App\Repository\ChatbotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ChatbotRepository::class)]
#[Broadcast]
class Chatbot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Chatbot = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Datecreation_Chatbot = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Contenu_Chatbot = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdChatbot(): ?int
    {
        return $this->Id_Chatbot;
    }

    public function setIdChatbot(?int $Id_Chatbot): static
    {
        $this->Id_Chatbot = $Id_Chatbot;

        return $this;
    }

    public function getDatecreationChatbot(): ?\DateTimeInterface
    {
        return $this->Datecreation_Chatbot;
    }

    public function setDatecreationChatbot(?\DateTimeInterface $Datecreation_Chatbot): static
    {
        $this->Datecreation_Chatbot = $Datecreation_Chatbot;

        return $this;
    }

    public function getContenuChatbot(): ?string
    {
        return $this->Contenu_Chatbot;
    }

    public function setContenuChatbot(?string $Contenu_Chatbot): static
    {
        $this->Contenu_Chatbot = $Contenu_Chatbot;

        return $this;
    }
}
