<?php

namespace CaroGFaimBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * diner
 */
class diner
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateDiner;

    /**
     * @var bool
     */
    private $estArchive;


    /**
     * @var ArrayCollection
     */
    private $presenter_type_plats;

    /**
     * @var ArrayCollection
     */
    private $plats_servis;

    /**
     * @var ArrayCollection
     */
    private $invites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->presenter_type_plats = new ArrayCollection();
        $this->invites = new ArrayCollection();
        $this->plats_servis = new ArrayCollection();
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
     * Set dateDiner
     *
     * @param \DateTime $dateDiner
     * @return diner
     */
    public function setDateDiner($dateDiner)
    {
        $this->dateDiner = $dateDiner;

        return $this;
    }

    /**
     * Get dateDiner
     *
     * @return \DateTime
     */
    public function getDateDiner()
    {
        return $this->dateDiner;
    }

    /**
     * Set estArchive
     *
     * @param boolean $estArchive
     * @return diner
     */
    public function setEstArchive($estArchive)
    {
        $this->estArchive = $estArchive;

        return $this;
    }

    /**
     * Get estArchive
     *
     * @return boolean
     */
    public function getEstArchive()
    {
        return $this->estArchive;
    }

    /**
     * Add plats_servis
     *
     * @param \CaroGFaimBundle\Entity\plat $platsServis
     * @return diner
     */
    public function addPlatsServi(\CaroGFaimBundle\Entity\plat $platsServis)
    {
        $this->plats_servis[] = $platsServis;

        return $this;
    }

    /**
     * Remove plats_servis
     *
     * @param \CaroGFaimBundle\Entity\plat $platsServis
     */
    public function removePlatsServi(\CaroGFaimBundle\Entity\plat $platsServis)
    {
        $this->plats_servis->removeElement($platsServis);
    }

    /**
     * Get plats_servis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlatsServis()
    {
        return $this->plats_servis;
    }

    /**
     * Add presenter_type_plats
     *
     * @param \CaroGFaimBundle\Entity\type_plat $presenterTypePlats
     * @return diner
     */
    public function addPresenterTypePlat(\CaroGFaimBundle\Entity\type_plat $presenterTypePlats)
    {
        $this->presenter_type_plats[] = $presenterTypePlats;

        return $this;
    }

    /**
     * Remove presenter_type_plats
     *
     * @param \CaroGFaimBundle\Entity\type_plat $presenterTypePlats
     */
    public function removePresenterTypePlat(\CaroGFaimBundle\Entity\type_plat $presenterTypePlats)
    {
        $this->presenter_type_plats->removeElement($presenterTypePlats);
    }

    /**
     * Get presenter_type_plats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPresenterTypePlats()
    {
        return $this->presenter_type_plats;
    }

    /**
     * Add invites
     *
     * @param \CaroGFaimBundle\Entity\personne $invites
     * @return diner
     */
    public function addInvite(\CaroGFaimBundle\Entity\personne $invites)
    {
        $this->invites[] = $invites;

        return $this;
    }

    /**
     * Remove invites
     *
     * @param \CaroGFaimBundle\Entity\personne $invites
     */
    public function removeInvite(\CaroGFaimBundle\Entity\personne $invites)
    {
        $this->invites->removeElement($invites);
    }

    /**
     * Get invites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvites()
    {
        return $this->invites;
    }
}
