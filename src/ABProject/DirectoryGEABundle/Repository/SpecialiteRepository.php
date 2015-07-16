<?php

namespace ABProject\DirectoryGEABundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SpecialiteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SpecialiteRepository extends EntityRepository
{
	public function getWithStudents()
	  {
	    $query = $this->getEntityManager()->createQuery('SELECT c FROM ABProjectDirectoryGEABundle:Specialite c LEFT JOIN c.etudiants');
	 
	    return $query->getResult();
	  }
}
