<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscriptionRepository::class)]
class Inscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $dateDesistement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isDateDesistement(): ?bool
    {
        return $this->dateDesistement;
    }

    public function setDateDesistement(?bool $dateDesistement): self
    {
        $this->dateDesistement = $dateDesistement;

        return $this;
    }
}
