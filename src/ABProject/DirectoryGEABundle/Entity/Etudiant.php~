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
    private $activite;

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
        $this->activite = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add activite
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Activite $activite
     * @return Etudiant
     */
    public function addActivite(\ABProject\DirectoryGEABundle\Entity\Activite $activite)
    {
        $this->activite[] = $activite;

        return $this;
    }

    /**
     * Remove activite
     *
     * @param \ABProject\DirectoryGEABundle\Entity\Activite $activite
     */
    public function removeActivite(\ABProject\DirectoryGEABundle\Entity\Activite $activite)
    {
        $this->activite->removeElement($activite);
    }

    /**
     * Get activite
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivite()
    {
        return $this->activite;
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
        $this->created_at = new \DateTime();
    }

    static public function getLuceneIndex()
    {
        if (file_exists($index = self::getLuceneIndexFile())) {
            return \Zend_Search_Lucene::open($index);
        }
 
        return \Zend_Search_Lucene::create($index);
    }
 
    static public function getLuceneIndexFile()
    {
        return __DIR__.'/../../../../web/data/student.index';
    }

    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        // Add your code here
    }

    /**
     * @ORM\PostPersist
     */
    public function updateLuceneIndex()
    {
        $index = self::getLuceneIndex();
 
        // remove existing entries
        foreach ($index->find('pk:'.$this->getId()) as $hit)
        {
          $index->delete($hit->id);
        }

        $doc = new \Zend_Search_Lucene_Document();
 
        // store job primary key to identify it in the search results
        $doc->addField(\Zend_Search_Lucene_Field::Keyword('pk', $this->getId()));
 
        // index job fields
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('nom', $this->getNomEtudiant(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('prenom', $this->getPrenomEtudiant(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('specialite', $this->getSpecialite(), 'utf-8'));
        $doc->addField(\Zend_Search_Lucene_Field::UnStored('promotion', $this->getPromotion(), 'utf-8'));
 
        // add job to the index
        $index->addDocument($doc);
        $index->commit();
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        // Add your code here
    }

    /**
     * @ORM\PostRemove
     */
    public function deleteLuceneIndex()
    {
        $index = self::getLuceneIndex();
 
        foreach ($index->find('pk:'.$this->getId()) as $hit) {
            $index->delete($hit->id);
        }
    }
}
