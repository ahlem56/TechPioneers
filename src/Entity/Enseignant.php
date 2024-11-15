<?php

namespace App\Entity;

use App\Repository\EnseignantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: EnseignantRepository::class)]
#[Broadcast]
class Enseignant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Spécialite_Enseignant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Departement_Enseignant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Etat_Enseignant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpécialiteEnseignant(): ?string
    {
        return $this->Spécialite_Enseignant;
    }

    public function setSpécialiteEnseignant(?string $Spécialite_Enseignant): static
    {
        $this->Spécialite_Enseignant = $Spécialite_Enseignant;

        return $this;
    }

    public function getDepartementEnseignant(): ?string
    {
        return $this->Departement_Enseignant;
    }

    public function setDepartementEnseignant(?string $Departement_Enseignant): static
    {
        $this->Departement_Enseignant = $Departement_Enseignant;

        return $this;
    }

    public function getEtatEnseignant(): ?string
    {
        return $this->Etat_Enseignant;
    }

    public function setEtatEnseignant(?string $Etat_Enseignant): static
    {
        $this->Etat_Enseignant = $Etat_Enseignant;

        return $this;
    }
}
