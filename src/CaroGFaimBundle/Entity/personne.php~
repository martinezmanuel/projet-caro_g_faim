<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * personne
 */
class personne
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var ArrayCollection
     */
    private $exclure_ingredients;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->exclure_ingredients = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return personne
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
     * @return personne
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
     * Add ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $ingredients
     * @return personne
     */
    public function addIngredient(\CaroGFaimBundle\Entity\ingredient $ingredients)
    {
        $this->exclure_ingredients[] = $ingredients;

        return $this;
    }

    /**
     * Remove ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $ingredients
     */
    public function removeIngredient(\CaroGFaimBundle\Entity\ingredient $ingredients)
    {
        $this->exclure_ingredients->removeElement($ingredients);
    }

    /**
     * Get ingredients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExclureIngredients()
    {
        return $this->exclure_ingredients;
    }

    /**
     * Add exclure_ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $exclureIngredients
     * @return personne
     */
    public function addExclureIngredient(\CaroGFaimBundle\Entity\ingredient $exclureIngredients)
    {
        $this->exclure_ingredients[] = $exclureIngredients;

        return $this;
    }

    /**
     * Remove exclure_ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $exclureIngredients
     */
    public function removeExclureIngredient(\CaroGFaimBundle\Entity\ingredient $exclureIngredients)
    {
        $this->exclure_ingredients->removeElement($exclureIngredients);
    }
}