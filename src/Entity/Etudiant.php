<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
#[Broadcast]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Specialité_etudiant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Niveau_etudiant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Classe_etudiant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecialitéEtudiant(): ?string
    {
        return $this->Specialité_etudiant;
    }

    public function setSpecialitéEtudiant(?string $Specialité_etudiant): static
    {
        $this->Specialité_etudiant = $Specialité_etudiant;

        return $this;
    }

    public function getNiveauEtudiant(): ?string
    {
        return $this->Niveau_etudiant;
    }

    public function setNiveauEtudiant(?string $Niveau_etudiant): static
    {
        $this->Niveau_etudiant = $Niveau_etudiant;

        return $this;
    }

    public function getClasseEtudiant(): ?string
    {
        return $this->Classe_etudiant;
    }

    public function setClasseEtudiant(?string $Classe_etudiant): static
    {
        $this->Classe_etudiant = $Classe_etudiant;

        return $this;
    }
}
