<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
#[Broadcast]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Cours = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Titre_Cours = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description_Cours = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_Enseignant_Cours = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_creation_Cours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCours(): ?int
    {
        return $this->Id_Cours;
    }

    public function setIdCours(?int $Id_Cours): static
    {
        $this->Id_Cours = $Id_Cours;

        return $this;
    }

    public function getTitreCours(): ?string
    {
        return $this->Titre_Cours;
    }

    public function setTitreCours(?string $Titre_Cours): static
    {
        $this->Titre_Cours = $Titre_Cours;

        return $this;
    }

    public function getDescriptionCours(): ?string
    {
        return $this->Description_Cours;
    }

    public function setDescriptionCours(?string $Description_Cours): static
    {
        $this->Description_Cours = $Description_Cours;

        return $this;
    }

    public function getIdEnseignantCours(): ?int
    {
        return $this->Id_Enseignant_Cours;
    }

    public function setIdEnseignantCours(?int $Id_Enseignant_Cours): static
    {
        $this->Id_Enseignant_Cours = $Id_Enseignant_Cours;

        return $this;
    }

    public function getDateCreationCours(): ?\DateTimeInterface
    {
        return $this->Date_creation_Cours;
    }

    public function setDateCreationCours(?\DateTimeInterface $Date_creation_Cours): static
    {
        $this->Date_creation_Cours = $Date_creation_Cours;

        return $this;
    }
}
