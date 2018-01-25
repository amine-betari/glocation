<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Locataire
 *
 * @ORM\Table(name="locataire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocataireRepository")
 * @UniqueEntity(fields="cIN", message="Un client existe déjà avec ce CIN.")
 */
class Locataire
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
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Contrat", mappedBy="locataire", orphanRemoval=true, cascade={"all"} )
	 *
	 */
	private $contrats; 

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=255)
	 * @Assert\NotBlank()
     */
    private $cIN;

    /**
     * @var string
     *
     * @ORM\Column(name="RaisonSociale", type="string", length=255, nullable=true)
     */
    private $raisonSociale;

    /**
     * @var \Date
     *
     * @ORM\Column(name="Delivrance", type="date")
     */
    private $delivrance;

    /**
     * @var string
     *
     * @ORM\Column(name="DelivranceVille", type="string", length=255)
     */
    private $delivranceVille;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite", type="string", length=255, nullable=true)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseMaroc", type="text", nullable=true)
     */
    private $adresseMaroc;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseEtranger", type="text", nullable=true)
     */
    private $adresseEtranger;

    /**
     * @var string
     *
     * @ORM\Column(name="Phone", type="string", length=255)
	 * @Assert\NotBlank()
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="NumPasseport", type="string", length=255, nullable=true)
     */
    private $numPasseport;

    /**
     * @var string
     *
     * @ORM\Column(name="Profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="Permis", type="string", length=255)
	 * @Assert\NotBlank()
     */
    private $permis;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Locataire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Locataire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cIN
     *
     * @param string $cIN
     *
     * @return Locataire
     */
    public function setCIN($cIN)
    {
        $this->cIN = $cIN;

        return $this;
    }

    /**
     * Get cIN
     *
     * @return string
     */
    public function getCIN()
    {
        return $this->cIN;
    }

    /**
     * Set raisonSociale
     *
     * @param string $raisonSociale
     *
     * @return Locataire
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set delivrance
     *
     * @param \Date $delivrance
     *
     * @return Locataire
     */
    public function setDelivrance($delivrance)
    {
        $this->delivrance = $delivrance;

        return $this;
    }

    /**
     * Get delivrance
     *
     * @return \Date
     */
    public function getDelivrance()
    {
        return $this->delivrance;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Locataire
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set adresseMaroc
     *
     * @param string $adresseMaroc
     *
     * @return Locataire
     */
    public function setAdresseMaroc($adresseMaroc)
    {
        $this->adresseMaroc = $adresseMaroc;

        return $this;
    }

    /**
     * Get adresseMaroc
     *
     * @return string
     */
    public function getAdresseMaroc()
    {
        return $this->adresseMaroc;
    }

    /**
     * Set adresseEtranger
     *
     * @param string $adresseEtranger
     *
     * @return Locataire
     */
    public function setAdresseEtranger($adresseEtranger)
    {
        $this->adresseEtranger = $adresseEtranger;

        return $this;
    }

    /**
     * Get adresseEtranger
     *
     * @return string
     */
    public function getAdresseEtranger()
    {
        return $this->adresseEtranger;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Locataire
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set numPasseport
     *
     * @param string $numPasseport
     *
     * @return Locataire
     */
    public function setNumPasseport($numPasseport)
    {
        $this->numPasseport = $numPasseport;

        return $this;
    }

    /**
     * Get numPasseport
     *
     * @return string
     */
    public function getNumPasseport()
    {
        return $this->numPasseport;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Locataire
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set permis
     *
     * @param string $permis
     *
     * @return Locataire
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get permis
     *
     * @return string
     */
    public function getPermis()
    {
        return $this->permis;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contrats = new \Doctrine\Common\Collections\ArrayCollection();
		$this->dateCreated = new \Datetime();
    }

    /**
     * Add contrat
     *
     * @param \AppBundle\Entity\Contrat $contrat
     *
     * @return Locataire
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
		return $this->getNom().' '.$this->getCIN().' '.$this->getRaisonSociale();
	}

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Locataire
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
     * Set delivranceVille
     *
     * @param string $delivranceVille
     *
     * @return Locataire
     */
    public function setDelivranceVille($delivranceVille)
    {
        $this->delivranceVille = $delivranceVille;

        return $this;
    }

    /**
     * Get delivranceVille
     *
     * @return string
     */
    public function getDelivranceVille()
    {
        return $this->delivranceVille;
    }
}
