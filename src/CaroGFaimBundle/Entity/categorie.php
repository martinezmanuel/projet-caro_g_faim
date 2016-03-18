<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * categorie
 *
 * @UniqueEntity(fields="libelle", message="Cette catégorie existe déjà.")
 */


class categorie
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
    private $ingredients;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
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
     * @return categorie
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

    /*
     * Get libelle when calling object directly
     *
     * @return string
     */
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * Add ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $ingredients
     * @return categorie
     */
    public function addIngredient(\CaroGFaimBundle\Entity\ingredient $ingredients)
    {
        $this->ingredients[] = $ingredients;

        return $this;
    }

    /**
     * Remove ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $ingredients
     */
    public function removeIngredient(\CaroGFaimBundle\Entity\ingredient $ingredients)
    {
        $this->ingredients->removeElement($ingredients);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
