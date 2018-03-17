<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactureRepository")
 * @UniqueEntity(fields="numContrat", message="Une facture existe déjà avec ce numero.")
 */
class Facture
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
     * @var string
     *
     * @ORM\Column(name="numFacture", type="string", length=255, nullable=false)
     */
    private $numFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="date")
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

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
     * @ORM\Column(name="prixUnit", type="string", length=255, nullable=true)
     */
    private $prixUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="totalTcc", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="diverses", type="string", length=255, nullable=true)
     */
    private $diverses;

    /**
     * @var string
     *
     * @ORM\Column(name="totalTccApayer", type="string", length=255, nullable=true)
     */
    private $totalTccApayer;

	
	public function __construct()
	{
		$this->dateCreated = new \Datetime();
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Facture
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Facture
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set jours
     *
     * @param string $jours
     *
     * @return Facture
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
     * @return Facture
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
     * @return Facture
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
     * @return Facture
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
     * @return Facture
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
     * @return Facture
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
     * Set diverses
     *
     * @param string $diverses
     *
     * @return Facture
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
     * Set totalTccApayer
     *
     * @param string $totalTccApayer
     *
     * @return Facture
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
     * Set numFacture
     *
     * @param string $numFacture
     *
     * @return Facture
     */
    public function setNumFacture($numFacture)
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    /**
     * Get numFacture
     *
     * @return string
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }
}
