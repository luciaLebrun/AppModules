<?php

namespace App\Entity;

use App\Repository\ModuleDetailsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuleDetailsRepository::class)
 */
class ModuleDetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $semaine;


    /**
     * @ORM\Column(type="integer")
     */
    private $nbGroupe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCour;

    /**
     * @ORM\ManyToOne(targetEntity=Enseignant::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $trigramme;

    /**
     * @ORM\ManyToOne(targetEntity=Module::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $PPN;


    public function __construct()
    {
        $this->trigramme = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemaine(): ?int
    {
        return $this->semaine;
    }

    public function setSemaine(int $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }

    public function getNbGroupe(): ?int
    {
        return $this->nbGroupe;
    }

    public function setNbGroupe(int $nbGroupe): self
    {
        $this->nbGroupe = $nbGroupe;

        return $this;
    }

    public function getTypeCour(): ?string
    {
        return $this->typeCour;
    }

    public function setTypeCour(string $typeCour): self
    {
        $this->typeCour = $typeCour;

        return $this;
    }

    /**
     * @return Collection|Enseignant[]
     */
    public function getTrigramme(): Collection
    {
        return $this->trigramme;
    }

    public function addTrigramme(Enseignant $trigramme): self
    {
        if (!$this->trigramme->contains($trigramme)) {
            $this->trigramme[] = $trigramme;
        }

        return $this;
    }

    public function removeTrigramme(Enseignant $trigramme): self
    {
        $this->trigramme->removeElement($trigramme);

        return $this;
    }

    public function setTrigramme(?Enseignant $trigramme): self
    {
        $this->trigramme = $trigramme;

        return $this;
    }

    public function getPPN(): ?Module
    {
        return $this->PPN;
    }

    public function setPPN(?Module $PPN): self
    {
        $this->PPN = $PPN;

        return $this;
    }

}
