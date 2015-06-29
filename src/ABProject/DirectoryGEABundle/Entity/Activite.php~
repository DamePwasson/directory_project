<?php

namespace ABProject\DirectoryGEABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 */
class Activite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom_activite;

    /**
     * @var string
     */
    private $type_activite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $activite_realisees;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activite_realisees = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom_activite
     *
     * @param string $nomActivite
     * @return Activite
     */
    public function setNomActivite($nomActivite)
    {
        $this->nom_activite = $nomActivite;

        return $this;
    }

    /**
     * Get nom_activite
     *
     * @return string 
     */
    public function getNomActivite()
    {
        return $this->nom_activite;
    }

    /**
     * Set type_activite
     *
     * @param string $typeActivite
     * @return Activite
     */
    public function setTypeActivite($typeActivite)
    {
        $this->type_activite = $typeActivite;

        return $this;
    }

    /**
     * Get type_activite
     *
     * @return string 
     */
    public function getTypeActivite()
    {
        return $this->type_activite;
    }

    /**
     * Add activite_realisees
     *
     * @param \ABProject\DirectoryGEABundle\Entity\ActiviteRealisee $activiteRealisees
     * @return Activite
     */
    public function addActiviteRealisee(\ABProject\DirectoryGEABundle\Entity\ActiviteRealisee $activiteRealisees)
    {
        $this->activite_realisees[] = $activiteRealisees;

        return $this;
    }

    /**
     * Remove activite_realisees
     *
     * @param \ABProject\DirectoryGEABundle\Entity\ActiviteRealisee $activiteRealisees
     */
    public function removeActiviteRealisee(\ABProject\DirectoryGEABundle\Entity\ActiviteRealisee $activiteRealisees)
    {
        $this->activite_realisees->removeElement($activiteRealisees);
    }

    /**
     * Get activite_realisees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActiviteRealisees()
    {
        return $this->activite_realisees;
    }
}
