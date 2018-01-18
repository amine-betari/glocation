<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Contrat", mappedBy="vehicule", orphanRemoval=true, cascade={"all"} )
	 *
	 */
	private $contrats; 

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Equipement", cascade={"persist"})
     * @ORM\JoinTable(name="vehicule_equipement")
     */	 
     private $equipements;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="string", length=255)
     */
    private $carburant;


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
     * Set marque
     *
     * @param string $marque
     *
     * @return Vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Vehicule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set carburant
     *
     * @param string $carburant
     *
     * @return Vehicule
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
     * Constructor
     */
    public function __construct()
    {
	
    }

    /**
     * Add contrat
     *
     * @param \AppBundle\Entity\Contrat $contrat
     *
     * @return Vehicule
     */
    public function addContrat(\AppBundle\Entity\Contrat $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \AppBundle\Entity\Contrat $contrat
     */
    public function removeContrat(\AppBundle\Entity\Contrat $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }
	
	public function __toString()
	{
		return $this->getMarque().$this->getMatricule();
	}
	

    /**
     * Set equipement
     *
     * @param \AppBundle\Entity\Equipement $equipement
     *
     * @return Vehicule
     */
    public function setEquipement(\AppBundle\Entity\Equipement $equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * Get equipement
     *
     * @return \AppBundle\Entity\Equipement
     */
    public function getEquipement()
    {
        return $this->equipement;
    }

    /**
     * Add equipement
     *
     * @param \AppBundle\Entity\Equipement $equipement
     *
     * @return Vehicule
     */
    public function addEquipement(\AppBundle\Entity\Equipement $equipement)
    {
        $this->equipements[] = $equipement;

        return $this;
    }

    /**
     * Remove equipement
     *
     * @param \AppBundle\Entity\Equipement $equipement
     */
    public function removeEquipement(\AppBundle\Entity\Equipement $equipement)
    {
        $this->equipements->removeElement($equipement);
    }

    /**
     * Get equipements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipements()
    {
        return $this->equipements;
    }
}
