<?php


namespace App\Entity;

use App\Repository\ModuleRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

/**
 * @ORM\Entity(repositoryClass=ModuleRepository::class)
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
     * @ORM\Column(type="string")
     */
    private ?string $PPN = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $intitule = null;

    /**
     * @var Enseignant|null
     * @ORM\ManyToOne(targetEntity="Enseignant", inversedBy="modules",cascade={"persist"})
     */
    private ?Enseignant $responsable = null;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Semaine", mappedBy="module")
     */
    private Collection $semaines;

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
     * @return Enseignant|null
     */
    public function getResponsable(): ?Enseignant
    {
        return $this->responsable;
    }

    /**
     * @param Enseignant|null $responsable
     */
    public function setResponsable(?Enseignant $responsable): void
    {
        $this->responsable = $responsable;
    }

}