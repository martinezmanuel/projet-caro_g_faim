<?php

namespace CaroGFaimBundle\Entity;


use CaroGFaimBundle\Entity\type_plat;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * plat
 *
 * @UniqueEntity(fields="libelle", message="Ce plat existe déjà.")
 */
class plat
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
    private $note;

    /**
     * @var string
     */
    private $annotations;

    /**
     * @var CaroGFaimBundle\Entity\type_plat
     */
    private $type_plat;

    /**
     * @var ArrayCollection
     */
    private $ingredients;


    /**
     * constructor
     */
    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
        $this->annotations = '';
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
     * @return plat
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
     * Set note
     *
     * @param integer $note
     * @return plat
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set annotations
     *
     * @param string $annotations
     * @return plat
     */
    public function setAnnotations($annotations)
    {
        $this->annotations = $annotations;

        return $this;
    }

    /**
     * Get annotations
     *
     * @return string
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Set type_plat
     *
     * @param \CaroGFaimBundle\Entity\type_plat $typePlat
     * @return plat
     */
    public function setTypePlat(\CaroGFaimBundle\Entity\type_plat $typePlat)
    {
        $this->type_plat = $typePlat;

        return $this;
    }

    /**
     * Get type_plat
     *
     * @return \CaroGFaimBundle\Entity\type_plat
     */
    public function getTypePlat()
    {
        return $this->type_plat;
    }

    /**
     * Add ingredients
     *
     * @param \CaroGFaimBundle\Entity\ingredient $ingredients
     * @return plat
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