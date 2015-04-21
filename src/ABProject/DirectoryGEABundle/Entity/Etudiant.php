<?php

namespace ABProject\DirectoryGEABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 */
class Etudiant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom_etudiant;

    /**
     * @var string
     */
    private $prenom_etudiant;

    /**
     * @var integer
     */
    private $niveau_etude;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $activite_realisees;

    /**
     * @var \ABProject\DirectoryGEABundle\Entity\Promotion
     */
    private $promotion;

    /**
     * @var \ABProject\DirectoryGEABundle\Entity\Specialite
     */
    private $specialite;

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
     * Set nom_etudiant
     *
     * @param string $nomEtudiant
     * @return Etudiant
     */
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nom_etudiant = $nomEtudiant;

        return $this;
    }

    /**
     * Get nom_etudiant
     *
     * @return string 
     */
    public function getNomEtudiant()
    {
        return $this->nom_etudiant;
    }

    /**
     * Set prenom_etudiant
     *
     * @param string $prenomEtudiant
     * @return Etudiant
     */
    public function setPrenomEtudiant($prenomEtudiant)
    {
        $this->prenom_etudiant = $prenomEtudiant;

        return $this;
    }

    /**
     * Get prenom_etudiant
     *
     * @return string 
     */
    public function getPrenomEtudiant()
    {
        return $this->prenom_etudiant;
    }

    /**
     * Set niveau_etude
     *
     * @param integer $niveauEtude
     * @return Etudiant
     */
    public function setNiveauEtude($niveauEtude)
    {
        $this->niveau_etude = $niveauEtude;

        return $this;
    }

    /**
     * Get niveau_etude
     *
     * @return integer 
     */
    public function getNiveauEtude()
    {
        return $this->niveau_etude;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Etudiant
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Etudiant
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Etudiant
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add activite_realisees
     *
     * @param \ABProject\DirectoryGEABundle\Entity\ActiviteRealisee $activiteRealisees
     * @return Etudiant
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

    /**
     * Set promotion
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Promotion $promotion
     * @return Etudiant
     */
    public function setPromotion(\ABProject\DirectoryGEABundle\Entity\Promotion $promotion = null)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return \ABProject\DirectoryGEABundle\Entity\Promotion 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Set specialite
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Specialite $specialite
     * @return Etudiant
     */
    public function setSpecialite(\ABProject\DirectoryGEABundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \ABProject\DirectoryGEABundle\Entity\Specialite 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if(!$this->getCreatedAt())
          {
            $this->created_at = new \DateTime();
          }
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->created_at = new \DateTime();
    }
}
