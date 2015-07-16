<?php

namespace ABProject\DirectoryGEABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 */
class Promotion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom_promotion;

    /**
     * @var integer
     */
    private $annee_promotion;

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
     * Set nom_promotion
     *
     * @param string $nomPromotion
     * @return Promotion
     */
    public function setNomPromotion($nomPromotion)
    {
        $this->nom_promotion = $nomPromotion;

        return $this;
    }

    /**
     * Get nom_promotion
     *
     * @return string 
     */
    public function getNomPromotion()
    {
        return $this->nom_promotion;
    }

    /**
     * Set annee_promotion
     *
     * @param integer $anneePromotion
     * @return Promotion
     */
    public function setAnneePromotion($anneePromotion)
    {
        $this->annee_promotion = $anneePromotion;

        return $this;
    }

    /**
     * Get annee_promotion
     *
     * @return integer 
     */
    public function getAnneePromotion()
    {
        return $this->annee_promotion;
    }

    /**
     * Add etudiants
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Etudiant $etudiants
     * @return Promotion
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
      $this->annee_string = (string) $this->annee_promotion;
        return $this->annee_string;
    }
}
