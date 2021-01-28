<?php


namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\EnseignantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EnseignantRepository::class)
 * @ORM\Table(name="enseignant")
 */
class Enseignant
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"get"})
     */
    private ?int $id = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     * @Groups({"get"})
     */
    private ?string $trigramme = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     * @Groups({"get"})
     */
    private ?string $prenom = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $nom = null;

    /**
     * @var float|null
     * @ORM\Column(type="integer")
     */
    private ?float $serviceDu = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $statut = null;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="Module", mappedBy="responsable")
     */
    private Collection $modules;

    /**
     * @var string|null
     * @ORM\Column(type="string", nullable=true)
     */
    private ?string $contact = null;

    /**
     * @return static
     */
    public static function create(): self
    {
        $enseignant = new self();
        return $enseignant;
    }

    /**
     * Enseignant constructor.
     */
    public function __construct()
    {
        $this->modules = new ArrayCollection();
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
     * @return float|null
     */
    public function getServiceDu(): ?float
    {
        return $this->serviceDu;
    }

    /**
     * @param float|null $serviceDu
     */
    public function setServiceDu(?float $serviceDu): void
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

    /**
     * @return Collection
     */
    public function getModules() : Collection
    {
        return $this->modules;
    }

    /**
     * @param Module $module
     */
    public function addModule(Module $module) : void
    {
        if(!$this->modules->contains($module))
        {
            $module->setResponsable($this);
            $this->modules->add($module);
        }
    }

}