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
     * @var int
     */
    private $fid_categorie;

    /**
     * @var ArrayCollection
     */
    private $personnes;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->personnes = new ArrayCollection();
    }

    /**
     * return label
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
     * @var \CaroGFaimBundle\Entity\categorie
     */
    private $categorie;


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
}
