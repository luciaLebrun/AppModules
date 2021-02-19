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
    private $nbGroupes;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $typeCours;

    /**
     * @ORM\ManyToOne(targetEntity=Module::class, inversedBy="details")
     */
    private $module;

    /**
     * @ORM\ManyToOne(targetEntity=Enseignant::class, inversedBy="interventions")
     */
    private $enseignant;

    /**
     * @ORM\ManyToOne(targetEntity=Semaine::class)
     */
    private $semaine;


    public function __construct()
    {
        $this->trigramme = new ArrayCollection();
        $this->semaine = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbGroupes(): ?int
    {
        return $this->nbGroupes;
    }

    public function setNbGroupes(int $nbGroupes): self
    {
        $this->nbGroupes = $nbGroupes;

        return $this;
    }

    public function getTypeCours(): ?string
    {
        return $this->typeCours;
    }

    public function setTypeCours(string $typeCours): self
    {
        $this->typeCours = $typeCours;

        return $this;
    }

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getEnseignant(): ?Enseignant
    {
        return $this->enseignant;
    }

    public function setEnseignant(?Enseignant $enseignant): self
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    public function getSemaine(): ?Semaine
    {
        return $this->semaine;
    }

    public function setSemaine(?Semaine $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }

}
