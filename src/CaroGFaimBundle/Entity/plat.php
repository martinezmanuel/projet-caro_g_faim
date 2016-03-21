<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * plat
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
}
