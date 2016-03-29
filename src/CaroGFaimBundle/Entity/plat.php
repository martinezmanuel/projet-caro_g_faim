<?php

namespace CaroGFaimBundle\Entity;


use CaroGFaimBundle\Entity\type_plat;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var string
     * @Assert\File(maxSize="1500k", mimeTypes = {"image/jpeg", "image/png"},
     *     mimeTypesMessage = "Veuillez sélectionner une photo au format JPEG ou PNG")
     */
    private $photofilename;

    /**
     * @var CaroGFaimBundle\Entity\type_plat
     */
    private $type_plat;

    /**
     * @var ArrayCollection
     */
    private $ingredients;

    /**
     * @var CaroGFaimBundle\Entity\diner
     */
    private $diner;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
        $this->note = "0";
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
     * Set photo filename
     *
     * @param string $filename
     * @return plat
     */
    public function setPhotofilename($filename)
    {
        $this->photofilename = $filename;

        return $this;
    }

    /**
     * Get photo filename
     *
     * @return string
     */
    public function getPhotofilename()
    {
        return $this->photofilename;
    }

    /*
     * @var string
     */
    private $path;

    public function getAbsolutePath()
    {
        return null === $this->photofilename
            ? null
            : $this->getUploadRootDir().'/'.$this->photofilename;
    }

    public function getWebPath()
    {
        return empty($this->photofilename)
            ? null
            : $this->getUploadDir().'/'.$this->photofilename;
    }

    public function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'bundles/carogfaim/upload';
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

    /**
     * Set diner
     *
     * @param \CaroGFaimBundle\Entity\diner $diner
     * @return plat
     */
    public function setDiner(\CaroGFaimBundle\Entity\diner $diner = null)
    {
        $this->diner = $diner;

        return $this;
    }

    /**
     * Get diner
     *
     * @return \CaroGFaimBundle\Entity\diner
     */
    public function getDiner()
    {
        return $this->diner;
    }
}
