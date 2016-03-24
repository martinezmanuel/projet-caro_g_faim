<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * type_plat
 *
 * @UniqueEntity(fields="libelle", message="Ce type de plat existe déjà.")
 */
class type_plat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var ArrayCollection
     */
    private $plats;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plats = new ArrayCollection();
    }

    /**
     * get libelle
     * @return string
     */
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return type_plat
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add plats
     *
     * @param \CaroGFaimBundle\Entity\plat $plats
     * @return type_plat
     */
    public function addPlat(\CaroGFaimBundle\Entity\plat $plats)
    {
        $this->plats[] = $plats;

        return $this;
    }

    /**
     * Remove plats
     *
     * @param \CaroGFaimBundle\Entity\plat $plats
     */
    public function removePlat(\CaroGFaimBundle\Entity\plat $plats)
    {
        $this->plats->removeElement($plats);
    }

    /**
     * Get plats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlats()
    {
        return $this->plats;
    }
}