<?php

namespace App\Entity;

use App\Repository\EtatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatRepository::class)]
class Etat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idEtat = null;

    #[ORM\OneToMany(mappedBy: 'état', targetEntity: Sortie::class)]
    private Collection $libelle;

    public function __construct()
    {
        $this->libelle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEtat(): ?string
    {
        return $this->idEtat;
    }

    public function setIdEtat(string $idEtat): self
    {
        $this->idEtat = $idEtat;

        return $this;
    }


    /**
     * @return Collection<int, Sortie>
     */
    public function getLibelle(): Collection
    {
        return $this->libellée;
    }

    public function addLibelle(Sortie $libelle): self
    {
        if (!$this->libelle->contains($libelle)) {
            $this->libelle->add($libelle);
            $libelle->setétat($this);
        }

        return $this;
    }

    public function removeLibelle(Sortie $libelle): self
    {
        if ($this->libelle->removeElement($libelle)) {
            // set the owning side to null (unless already changed)
            if ($libelle->getétat() === $this) {
                $libelle->setétat(null);
            }
        }

        return $this;
    }
}
