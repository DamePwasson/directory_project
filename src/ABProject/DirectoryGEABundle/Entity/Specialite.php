<?php

namespace ABProject\DirectoryGEABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 */
class Specialite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom_specialite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etudiants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom_specialite
     *
     * @param string $nomSpecialite
     * @return Specialite
     */
    public function setNomSpecialite($nomSpecialite)
    {
        $this->nom_specialite = $nomSpecialite;

        return $this;
    }

    /**
     * Get nom_specialite
     *
     * @return string 
     */
    public function getNomSpecialite()
    {
        return $this->nom_specialite;
    }

    /**
     * Add etudiants
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Etudiant $etudiants
     * @return Specialite
     */
    public function addEtudiant(\ABProject\DirectoryGEABundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;

        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Etudiant $etudiants
     */
    public function removeEtudiant(\ABProject\DirectoryGEABundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }

    public function __toString()
    {
      return $this->getNomSpecialite();
    }
}
