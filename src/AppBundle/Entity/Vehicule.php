<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 * @UniqueEntity(fields="matricule", message="Un vehicule existe déjà avec ce matricule.")
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;
	
	
	/**
      * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Couleur", inversedBy="vehicules")
      * @ORM\JoinColumn(nullable=true)
     */	 
     private $couleur;
	
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
	 * @Assert\NotBlank()
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=255)
	 * @Assert\NotBlank()
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="carburant", type="string", length=255)
	 * @Assert\NotBlank()
     */
    private $carburant;
	
	/**
     * @var bool
     *
     * @ORM\Column(name="clim", type="boolean", nullable=true)
     */
    private $clim;
	
	/**
	 * @Gedmo\Slug(fields={"matricule"})
	 * @ORM\Column(name="slug", type="string", length=255)
	 */
	private $slug; 
	
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
		$this->dateCreated = new \Datetime();
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
		return $this->getMarque().' '.$this->getMatricule();
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

    /**
     * Set clim
     *
     * @param boolean $clim
     *
     * @return Vehicule
     */
    public function setClim($clim)
    {
        $this->clim = $clim;

        return $this;
    }

    /**
     * Get clim
     *
     * @return boolean
     */
    public function getClim()
    {
        return $this->clim;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Vehicule
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set couleur
     *
     * @param \AppBundle\Entity\Couleur $couleur
     *
     * @return Vehicule
     */
    public function setCouleur(\AppBundle\Entity\Couleur $couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return \AppBundle\Entity\Couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Vehicule
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
}
