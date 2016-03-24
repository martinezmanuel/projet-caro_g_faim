<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ingredient
 *
 * @UniqueEntity(fields="libelle", message="Cet ingrédient existe déjà.")
 */
class ingredient
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
     * @var \CaroGFaimBundle\Entity\categorie
     */
    private $categorie;

    /**
     * @var ArrayCollection
     */
    private $personnes;

    /**
     * @var ArrayCollection
     */
    private $plats;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->personnes = new ArrayCollection();
    }

    /**
     * get libelle
     *
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
     * @return ingredient
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
     * Set categorie
     *
     * @param \CaroGFaimBundle\Entity\categorie $categorie
     * @return ingredient
     */
    public function setCategorie(\CaroGFaimBundle\Entity\categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \CaroGFaimBundle\Entity\categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add personnes
     *
     * @param \CaroGFaimBundle\Entity\personne $personnes
     * @return ingredient
     */
    public function addPersonne(\CaroGFaimBundle\Entity\personne $personnes)
    {
        $this->personnes[] = $personnes;

        return $this;
    }

    /**
     * Remove personnes
     *
     * @param \CaroGFaimBundle\Entity\personne $personnes
     */
    public function removePersonne(\CaroGFaimBundle\Entity\personne $personnes)
    {
        $this->personnes->removeElement($personnes);
    }

    /**
     * Get personnes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonnes()
    {
        return $this->personnes;
    }

    /**
     * Add plats
     *
     * @param \CaroGFaimBundle\Entity\plat $plats
     * @return ingredient
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
