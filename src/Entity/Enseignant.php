<?php


namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use App\Repository\EnseignantRepository;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass=EnseignantRepository::class)
 */
class Enseignant
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
    private ?string $trigramme = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $prenom = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $nom = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    private ?int $serviceDu = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $statut = null;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Module", mappedBy="responsable")
     */
    private Collection $modules;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $contact = null;


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
    public function getTrigramme(): ?string
    {
        return $this->trigramme;
    }

    /**
     * @param string|null $trigramme
     */
    public function setTrigramme(?string $trigramme): void
    {
        $this->trigramme = $trigramme;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom(?string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int|null
     */
    public function getServiceDu(): ?int
    {
        return $this->serviceDu;
    }

    /**
     * @param int|null $serviceDu
     */
    public function setServiceDu(?int $serviceDu): void
    {
        $this->serviceDu = $serviceDu;
    }

    /**
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param string|null $statut
     */
    public function setStatut(?string $statut): void
    {
        $this->statut = $statut;
    }

    /**
     * @return string|null
     */
    public function getContact(): ?string
    {
        return $this->contact;
    }

    /**
     * @param string|null $contact
     */
    public function setContact(?string $contact): void
    {
        $this->contact = $contact;
    }

    public function addModule(Module $module) : void
    {
        if(!$this->modules->contains($module))
        {
            $module->setResponsable($this);
            $this->modules->add($module);
        }
    }

}