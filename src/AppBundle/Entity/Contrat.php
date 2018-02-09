<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContratRepository")
 * @UniqueEntity(fields="numContrat", message="Un contrat existe déjà avec ce numero.")
 */
class Contrat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;
	
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Locataire", inversedBy="contrats")
	 * @ORM\JoinColumn(nullable=false)
	 * @Assert\NotBlank()
	 */
	private $locataire;
	
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vehicule", inversedBy="contrats")
	 * @ORM\JoinColumn(nullable=false)
	 * @Assert\NotBlank()
	 */
	private $vehicule; 
	
	/**
	 * @ORM\OneToOne(targetEntity="AppBundle\Entity\Facture", cascade={"persist", "remove"})
	 */
	private $facture;

    /**
     * @var string
     *
     * @ORM\Column(name="departKm", type="string", length=255, nullable=true)
     */
    private $departKm;

    /**
     * @var string
     *
     * @ORM\Column(name="retourKm", type="string", length=255, nullable=true)
     */
    private $retourKm;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateRetourPrevu", type="date")
	 * @Assert\NotBlank()
     */
    private $dateRetourPrevu;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDepart", type="date")
	 * @Assert\NotBlank()
     */
    private $dateDepart;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateRetour", type="date", nullable=false)
     */
    private $dateRetour;

    /**
     * @var bool
     *
     * @ORM\Column(name="assuranceAvFranchise", type="boolean", nullable=true)
     */
    private $assuranceAvFranchise;

    /**
     * @var string
     *
     * @ORM\Column(name="numContrat", type="string", length=255, nullable=true)
     */
    private $numContrat;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nomSecond", type="string", length=255, nullable=true)
     */
    private $nomSecond;
	
	/**
     * @var string
     *
     * @ORM\Column(name="prenomSecond", type="string", length=255, nullable=true)
     */
    private $prenomSecond;
	
	/**
     * @var string
     *
     * @ORM\Column(name="cinSecond", type="string", length=255, nullable=true)
     */
    private $cinSecond;
	
	/**
     * @var string
     *
     * @ORM\Column(name="permisSecond", type="string", length=255, nullable=true)
     */
    private $permisSecond;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255, nullable=true)
     */
    private $Nombre;
	
	/**
     * @var string
     *
     * @ORM\Column(name="jours", type="string", length=255, nullable=true)
     */
    private $jours;
	
	/**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255, nullable=true)
     */
    private $mois;
	
		
	/**
     * @var string
     *
     * @ORM\Column(name="heureSupp", type="string", length=255, nullable=true)
     */
    private $heureSupp;
	
	/**
     * @var string
     *
     * @ORM\Column(name="prixUnit", type="string", length=255, nullable=false)
	 * @Assert\NotBlank()
     */
    private $prixUnit;
	
	/**
     * @var string
     *
     * @ORM\Column(name="totalTcc", type="string", length=255, nullable=false)
	 * @Assert\NotBlank()
     */
    private $totalTcc;
	
	/**
     * @var string
     *
     * @ORM\Column(name="fraisRemise", type="string", length=255, nullable=true)
     */
    private $fraisRemise;
	
	/**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;
	
	/**
     * @var string
     *
     * @ORM\Column(name="avance", type="string", length=255, nullable=true)
     */
    private $avance;
	
	/**
     * @var string
     *
     * @ORM\Column(name="diverses", type="string", length=255, nullable=true)
     */
    private $diverses;
	
	/**
     * @var string
     *
     * @ORM\Column(name="kilometrage", type="string", length=255, nullable=true)
     */
    private $kilometrage;
	
	/**
     * @var string
     *
     * @ORM\Column(name="totalTccApayer", type="string", length=255)
	 * @Assert\NotBlank()
     */
    private $totalTccApayer;
	
	/**
     * @var \Date
     *
     * @ORM\Column(name="Delivrance", type="date")
     */
    private $delivrance;
	
	
	public function __construct()
	{
		$this->dateCreated = new \Datetime();
		$this->dateDepart = new \Datetime();
	}

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set departKm
     *
     * @param string $departKm
     *
     * @return Contrat
     */
    public function setDepartKm($departKm)
    {
        $this->departKm = $departKm;

        return $this;
    }

    /**
     * Get departKm
     *
     * @return string
     */
    public function getDepartKm()
    {
        return $this->departKm;
    }

    /**
     * Set retourKm
     *
     * @param string $retourKm
     *
     * @return Contrat
     */
    public function setRetourKm($retourKm)
    {
        $this->retourKm = $retourKm;

        return $this;
    }

    /**
     * Get retourKm
     *
     * @return string
     */
    public function getRetourKm()
    {
        return $this->retourKm;
    }

    /**
     * Set dateRetourPrevu
     *
     * @param \Date $dateRetourPrevu
     *
     * @return Contrat
     */
    public function setDateRetourPrevu($dateRetourPrevu)
    {
        $this->dateRetourPrevu = $dateRetourPrevu;

        return $this;
    }

    /**
     * Get dateRetourPrevu
     *
     * @return \Date
     */
    public function getDateRetourPrevu()
    {
        return $this->dateRetourPrevu;
    }

    /**
     * Set dateDepart
     *
     * @param \Date $dateDepart
     *
     * @return Contrat
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \Date
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \Date $dateRetour
     *
     * @return Contrat
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \Date
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set assuranceAvFranchise
     *
     * @param boolean $assuranceAvFranchise
     *
     * @return Contrat
     */
    public function setAssuranceAvFranchise($assuranceAvFranchise)
    {
        $this->assuranceAvFranchise = $assuranceAvFranchise;

        return $this;
    }

    /**
     * Get assuranceAvFranchise
     *
     * @return bool
     */
    public function getAssuranceAvFranchise()
    {
        return $this->assuranceAvFranchise;
    }

    /**
     * Set numContrat
     *
     * @param string $numContrat
     *
     * @return Contrat
     */
    public function setNumContrat($numContrat)
    {
        $this->numContrat = $numContrat;

        return $this;
    }

    /**
     * Get numContrat
     *
     * @return string
     */
    public function getNumContrat()
    {
        return $this->numContrat;
    }
	
	public function __toString()
	{
		return $this->getnumContrat();
	}

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Locataire $locataire
     *
     * @return Contrat
     */
    public function setLocataire(\AppBundle\Entity\Locataire $locataire)
    {
        $this->locataire = $locataire;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Locataire
     */
    public function getLocataire()
    {
        return $this->locataire;
    }

    /**
     * Set vehicule
     *
     * @param \AppBundle\Entity\Vehicule $vehicule
     *
     * @return Contrat
     */
    public function setVehicule(\AppBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \AppBundle\Entity\Vehicule
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }


    /**
     * Set nomSecond
     *
     * @param string $nomSecond
     *
     * @return Contrat
     */
    public function setNomSecond($nomSecond)
    {
        $this->nomSecond = $nomSecond;

        return $this;
    }

    /**
     * Get nomSecond
     *
     * @return string
     */
    public function getNomSecond()
    {
        return $this->nomSecond;
    }

    /**
     * Set prenomSecond
     *
     * @param string $prenomSecond
     *
     * @return Contrat
     */
    public function setPrenomSecond($prenomSecond)
    {
        $this->prenomSecond = $prenomSecond;

        return $this;
    }

    /**
     * Get prenomSecond
     *
     * @return string
     */
    public function getPrenomSecond()
    {
        return $this->prenomSecond;
    }

    /**
     * Set cinSecond
     *
     * @param string $cinSecond
     *
     * @return Contrat
     */
    public function setCinSecond($cinSecond)
    {
        $this->cinSecond = $cinSecond;

        return $this;
    }

    /**
     * Get cinSecond
     *
     * @return string
     */
    public function getCinSecond()
    {
        return $this->cinSecond;
    }

    /**
     * Set permisSecond
     *
     * @param string $permisSecond
     *
     * @return Contrat
     */
    public function setPermisSecond($permisSecond)
    {
        $this->permisSecond = $permisSecond;

        return $this;
    }

    /**
     * Get permisSecond
     *
     * @return string
     */
    public function getPermisSecond()
    {
        return $this->permisSecond;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Contrat
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set jours
     *
     * @param string $jours
     *
     * @return Contrat
     */
    public function setJours($jours)
    {
        $this->jours = $jours;

        return $this;
    }

    /**
     * Get jours
     *
     * @return string
     */
    public function getJours()
    {
        return $this->jours;
    }

    /**
     * Set mois
     *
     * @param string $mois
     *
     * @return Contrat
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get mois
     *
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set heureSupp
     *
     * @param string $heureSupp
     *
     * @return Contrat
     */
    public function setHeureSupp($heureSupp)
    {
        $this->heureSupp = $heureSupp;

        return $this;
    }

    /**
     * Get heureSupp
     *
     * @return string
     */
    public function getHeureSupp()
    {
        return $this->heureSupp;
    }

    /**
     * Set prixUnit
     *
     * @param string $prixUnit
     *
     * @return Contrat
     */
    public function setPrixUnit($prixUnit)
    {
        $this->prixUnit = $prixUnit;

        return $this;
    }

    /**
     * Get prixUnit
     *
     * @return string
     */
    public function getPrixUnit()
    {
        return $this->prixUnit;
    }

    /**
     * Set totalTcc
     *
     * @param string $totalTcc
     *
     * @return Contrat
     */
    public function setTotalTcc($totalTcc)
    {
        $this->totalTcc = $totalTcc;

        return $this;
    }

    /**
     * Get totalTcc
     *
     * @return string
     */
    public function getTotalTcc()
    {
        return $this->totalTcc;
    }

    /**
     * Set fraisRemise
     *
     * @param string $fraisRemise
     *
     * @return Contrat
     */
    public function setFraisRemise($fraisRemise)
    {
        $this->fraisRemise = $fraisRemise;

        return $this;
    }

    /**
     * Get fraisRemise
     *
     * @return string
     */
    public function getFraisRemise()
    {
        return $this->fraisRemise;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Contrat
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set carburant
     *
     * @param string $carburant
     *
     * @return Contrat
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    /**
     * Get carburant
     *
     * @return string
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set diverses
     *
     * @param string $diverses
     *
     * @return Contrat
     */
    public function setDiverses($diverses)
    {
        $this->diverses = $diverses;

        return $this;
    }

    /**
     * Get diverses
     *
     * @return string
     */
    public function getDiverses()
    {
        return $this->diverses;
    }

    /**
     * Set kilometrage
     *
     * @param string $kilometrage
     *
     * @return Contrat
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return string
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * Set totalTccApayer
     *
     * @param string $totalTccApayer
     *
     * @return Contrat
     */
    public function setTotalTccApayer($totalTccApayer)
    {
        $this->totalTccApayer = $totalTccApayer;

        return $this;
    }

    /**
     * Get totalTccApayer
     *
     * @return string
     */
    public function getTotalTccApayer()
    {
        return $this->totalTccApayer;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Contrat
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Contrat
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set facture
     *
     * @param \AppBundle\Entity\Facture $facture
     *
     * @return Contrat
     */
    public function setFacture(\AppBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \AppBundle\Entity\Facture
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Set avance
     *
     * @param string $avance
     *
     * @return Contrat
     */
    public function setAvance($avance)
    {
        $this->avance = $avance;

        return $this;
    }

    /**
     * Get avance
     *
     * @return string
     */
    public function getAvance()
    {
        return $this->avance;
    }
	
	/**
     * @Assert\Callback
     */
    public function isDatesValid(ExecutionContextInterface $context, $payload)
    {
        // comparer les dates 
		if ($this->getDateDepart() >= $this->getDateRetour() || $this->getDateDepart() >= $this->getDateRetourPrevu()) {
			$context
					->buildViolation('La date de départ doit être inférieure aux dates de retour')
					->atPath('dateDepart')
					->addViolation();
		}
    }

    /**
     * Set delivrance
     *
     * @param \DateTime $delivrance
     *
     * @return Contrat
     */
    public function setDelivrance($delivrance)
    {
        $this->delivrance = $delivrance;

        return $this;
    }

    /**
     * Get delivrance
     *
     * @return \DateTime
     */
    public function getDelivrance()
    {
        return $this->delivrance;
    }
}
