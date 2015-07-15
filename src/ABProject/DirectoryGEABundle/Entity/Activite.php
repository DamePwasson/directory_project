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
     * @var integer
     */
    private $annee_debut;

    /**
     * @var integer
     */
    private $annee_fin;

    /**
     * @var string
     */
    private $description;

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
     * Set annee_debut
     *
     * @param integer $anneeDebut
     * @return Activite
     */
    public function setAnneeDebut($anneeDebut)
    {
        $this->annee_debut = $anneeDebut;

        return $this;
    }

    /**
     * Get annee_debut
     *
     * @return integer 
     */
    public function getAnneeDebut()
    {
        return $this->annee_debut;
    }

    /**
     * Set annee_fin
     *
     * @param integer $anneeFin
     * @return Activite
     */
    public function setAnneeFin($anneeFin)
    {
        $this->annee_fin = $anneeFin;

        return $this;
    }

    /**
     * Get annee_fin
     *
     * @return integer 
     */
    public function getAnneeFin()
    {
        return $this->annee_fin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Activite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add etudiants
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Etudiant $etudiants
     * @return Activite
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
}
