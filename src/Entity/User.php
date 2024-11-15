<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[Broadcast]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $Id_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Nom_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Prenom_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Motdepasse_user = null;

    #[ORM\Column(nullable: true)]
    private ?int $Numtelephone_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Role_user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Datenaissance_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Photo_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->Id_user;
    }

    public function setIdUser(?int $Id_user): static
    {
        $this->Id_user = $Id_user;

        return $this;
    }

    public function getNomUser(): ?string
    {
        return $this->Nom_user;
    }

    public function setNomUser(?string $Nom_user): static
    {
        $this->Nom_user = $Nom_user;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->Prenom_user;
    }

    public function setPrenomUser(?string $Prenom_user): static
    {
        $this->Prenom_user = $Prenom_user;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->Email_user;
    }

    public function setEmailUser(?string $Email_user): static
    {
        $this->Email_user = $Email_user;

        return $this;
    }

    public function getMotdepasseUser(): ?string
    {
        return $this->Motdepasse_user;
    }

    public function setMotdepasseUser(?string $Motdepasse_user): static
    {
        $this->Motdepasse_user = $Motdepasse_user;

        return $this;
    }

    public function getNumtelephoneUser(): ?int
    {
        return $this->Numtelephone_user;
    }

    public function setNumtelephoneUser(?int $Numtelephone_user): static
    {
        $this->Numtelephone_user = $Numtelephone_user;

        return $this;
    }

    public function getRoleUser(): ?string
    {
        return $this->Role_user;
    }

    public function setRoleUser(?string $Role_user): static
    {
        $this->Role_user = $Role_user;

        return $this;
    }

    public function getDatenaissanceUser(): ?\DateTimeInterface
    {
        return $this->Datenaissance_user;
    }

    public function setDatenaissanceUser(?\DateTimeInterface $Datenaissance_user): static
    {
        $this->Datenaissance_user = $Datenaissance_user;

        return $this;
    }

    public function getPhotoUser(): ?string
    {
        return $this->Photo_user;
    }

    public function setPhotoUser(?string $Photo_user): static
    {
        $this->Photo_user = $Photo_user;

        return $this;
    }
}
