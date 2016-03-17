<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ingredient
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
}
