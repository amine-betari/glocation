<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContratRepository")
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
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="contrats")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $user;
	
	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vehicule", inversedBy="contrats")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $vehicule; 

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
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetourPrevu", type="datetime")
     */
    private $dateRetourPrevu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="datetime")
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetour", type="datetime")
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
     * @ORM\Column(name="NumContrat", type="string", length=255)
     */
    private $numContrat;


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
     * @param \DateTime $dateRetourPrevu
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
     * @return \DateTime
     */
    public function getDateRetourPrevu()
    {
        return $this->dateRetourPrevu;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
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
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
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
     * @return \DateTime
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
		return $this->getName();
	}

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Contrat
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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
}
