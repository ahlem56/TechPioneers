<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
#[Broadcast]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Evenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Titre_Evenement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Evenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description_Evenement = null;

    #[ORM\Column(nullable: true)]
    private ?int $Organisateur_Evenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lien_Evenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Lieu_Evenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Type_Evenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvenement(): ?int
    {
        return $this->Id_Evenement;
    }

    public function setIdEvenement(?int $Id_Evenement): static
    {
        $this->Id_Evenement = $Id_Evenement;

        return $this;
    }

    public function getTitreEvenement(): ?string
    {
        return $this->Titre_Evenement;
    }

    public function setTitreEvenement(?string $Titre_Evenement): static
    {
        $this->Titre_Evenement = $Titre_Evenement;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->Date_Evenement;
    }

    public function setDateEvenement(?\DateTimeInterface $Date_Evenement): static
    {
        $this->Date_Evenement = $Date_Evenement;

        return $this;
    }

    public function getDescriptionEvenement(): ?string
    {
        return $this->Description_Evenement;
    }

    public function setDescriptionEvenement(?string $Description_Evenement): static
    {
        $this->Description_Evenement = $Description_Evenement;

        return $this;
    }

    public function getOrganisateurEvenement(): ?int
    {
        return $this->Organisateur_Evenement;
    }

    public function setOrganisateurEvenement(?int $Organisateur_Evenement): static
    {
        $this->Organisateur_Evenement = $Organisateur_Evenement;

        return $this;
    }

    public function getLienEvenement(): ?string
    {
        return $this->lien_Evenement;
    }

    public function setLienEvenement(?string $lien_Evenement): static
    {
        $this->lien_Evenement = $lien_Evenement;

        return $this;
    }

    public function getLieuEvenement(): ?string
    {
        return $this->Lieu_Evenement;
    }

    public function setLieuEvenement(?string $Lieu_Evenement): static
    {
        $this->Lieu_Evenement = $Lieu_Evenement;

        return $this;
    }

    public function getTypeEvenement(): ?string
    {
        return $this->Type_Evenement;
    }

    public function setTypeEvenement(?string $Type_Evenement): static
    {
        $this->Type_Evenement = $Type_Evenement;

        return $this;
    }
}
