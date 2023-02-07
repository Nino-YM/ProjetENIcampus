<?php

namespace App\Entity;

use App\Repository\GroupeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupeRepository::class)]
class Groupe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $noms = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoms(): array
    {
        return $this->noms;
    }

    public function setNoms(array $noms): self
    {
        $this->noms = $noms;

        return $this;
    }
}
