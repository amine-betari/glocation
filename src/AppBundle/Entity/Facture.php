<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FactureRepository")
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="date")
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="jours", type="string", length=255)
     */
    private $jours;

    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=255)
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="heureSupp", type="string", length=255)
     */
    private $heureSupp;

    /**
     * @var string
     *
     * @ORM\Column(name="prixUnit", type="string", length=255)
     */
    private $prixUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="totalTcc", type="string", length=255)
     */
    private $totalTcc;

    /**
     * @var string
     *
     * @ORM\Column(name="fraisRemise", type="string", length=255)
     */
    private $fraisRemise;

    /**
     * @var string
     *
     * @ORM\Column(name="diverses", type="string", length=255)
     */
    private $diverses;

    /**
     * @var string
     *
     * @ORM\Column(name="totalTccApayer", type="string", length=255)
     */
    private $totalTccApayer;


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
}
