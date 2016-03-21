<?php

namespace CaroGFaimBundle\Entity;

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
}
