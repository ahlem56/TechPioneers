<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: RessourceRepository::class)]
#[Broadcast]
class Ressource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Id_Ressource = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Titre_Ressource = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description_Ressource = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Type_Ressource = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Enseignat_Ressource = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Url_Ressource = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateCreation_Ressource = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRessource(): ?string
    {
        return $this->Id_Ressource;
    }

    public function setIdRessource(?string $Id_Ressource): static
    {
        $this->Id_Ressource = $Id_Ressource;

        return $this;
    }

    public function getTitreRessource(): ?string
    {
        return $this->Titre_Ressource;
    }

    public function setTitreRessource(?string $Titre_Ressource): static
    {
        $this->Titre_Ressource = $Titre_Ressource;

        return $this;
    }

    public function getDescriptionRessource(): ?string
    {
        return $this->Description_Ressource;
    }

    public function setDescriptionRessource(?string $Description_Ressource): static
    {
        $this->Description_Ressource = $Description_Ressource;

        return $this;
    }

    public function getTypeRessource(): ?string
    {
        return $this->Type_Ressource;
    }

    public function setTypeRessource(?string $Type_Ressource): static
    {
        $this->Type_Ressource = $Type_Ressource;

        return $this;
    }

    public function getIdEnseignatRessource(): ?int
    {
        return $this->Id_Enseignat_Ressource;
    }

    public function setIdEnseignatRessource(?int $Id_Enseignat_Ressource): static
    {
        $this->Id_Enseignat_Ressource = $Id_Enseignat_Ressource;

        return $this;
    }

    public function getUrlRessource(): ?string
    {
        return $this->Url_Ressource;
    }

    public function setUrlRessource(?string $Url_Ressource): static
    {
        $this->Url_Ressource = $Url_Ressource;

        return $this;
    }

    public function getDateCreationRessource(): ?\DateTimeInterface
    {
        return $this->DateCreation_Ressource;
    }

    public function setDateCreationRessource(?\DateTimeInterface $DateCreation_Ressource): static
    {
        $this->DateCreation_Ressource = $DateCreation_Ressource;

        return $this;
    }
}
