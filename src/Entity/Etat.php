<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatRepository::class)]
class Etat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idEtat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtat(): ?int
    {
        return $this->idEtat;
    }

    public function setIdEtat(int $idEtat): self
    {
        $this->idEtat = $idEtat;

        return $this;
    }
}
