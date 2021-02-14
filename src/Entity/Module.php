<?php

namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuleRepository::class)
 * @ORM\Table(name="module")
 */
class Module
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=8)
     */
    private ?string $PPN = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $intitule = null;

    /**
     * @ORM\ManyToMany(targetEntity=Enseignant::class, inversedBy="modules")
     */
    private $responsables;

    /**
     * @ORM\OneToMany(targetEntity=Semaine::class, mappedBy="module")
     */
    private $semaines;

    /**
     * Module constructor.
     */
    public function __construct()
    {
        $this->responsables = new ArrayCollection();
        $this->semaines = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getPPN(): ?string
    {
        return $this->PPN;
    }

    /**
     * @param string|null $PPN
     */
    public function setPPN(?string $PPN): void
    {
        $this->PPN = $PPN;
    }

    /**
     * @return string|null
     */
    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    /**
     * @param string|null $intitule
     */
    public function setIntitule(?string $intitule): void
    {
        $this->intitule = $intitule;
    }

    /**
     * @return Collection|enseignant[]
     */
    public function getResponsables(): Collection
    {
        return $this->responsables;
    }

    public function addResponsable(enseignant $responsable): self
    {
        if (!$this->responsables->contains($responsable)) {
            $this->responsables[] = $responsable;
        }

        return $this;
    }

    public function removeResponsable(enseignant $responsable): self
    {
        $this->responsables->removeElement($responsable);

        return $this;
    }

    /**
     * @return Collection|Semaine[]
     */
    public function getSemaines(): Collection
    {
        return $this->semaines;
    }

    public function addSemaine(Semaine $semaine): self
    {
        if (!$this->semaines->contains($semaine)) {
            $this->semaines[] = $semaine;
            $semaine->setModule($this);
        }

        return $this;
    }

    public function removeSemaine(Semaine $semaine): self
    {
        if ($this->semaines->removeElement($semaine)) {
            // set the owning side to null (unless already changed)
            if ($semaine->getModule() === $this) {
                $semaine->setModule(null);
            }
        }

        return $this;
    }
}
