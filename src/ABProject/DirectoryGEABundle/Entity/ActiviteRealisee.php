<?php

namespace ABProject\DirectoryGEABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiviteRealisee
 */
class ActiviteRealisee
{
    /**
     * @var integer
     */
    private $id;

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
     * @var \ABProject\DirectoryGEABundle\Entity\Etudiant
     */
    private $etudiant;

    /**
     * @var \ABProject\DirectoryGEABundle\Entity\Activite
     */
    private $activite;


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
     * Set annee_debut
     *
     * @param integer $anneeDebut
     * @return ActiviteRealisee
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
     * @return ActiviteRealisee
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
     * @return ActiviteRealisee
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
     * Set etudiant
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Etudiant $etudiant
     * @return ActiviteRealisee
     */
    public function setEtudiant(\ABProject\DirectoryGEABundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \ABProject\DirectoryGEABundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set activite
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Activite $activite
     * @return ActiviteRealisee
     */
    public function setActivite(\ABProject\DirectoryGEABundle\Entity\Activite $activite = null)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \ABProject\DirectoryGEABundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }
}
