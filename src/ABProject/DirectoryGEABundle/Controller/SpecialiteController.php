<?php

namespace ABProject\DirectoryGEABundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ABProject\DirectoryGEABundle\Entity\Specialite;

/**
 * Etudiant controller.
 *
 */
class SpecialiteController extends Controller
{
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
     
        $specialite = $em->getRepository('ABProjectDirectoryGEABundle:Specialite')->findOneBySlug($slug);
     
        if (!$specialite) {
            throw $this->createNotFoundException('Unable to find Specialite entity.');
        }
        
        $specialite->getEtudiants($specialite->getId());

        return $this->render('ABProjectDirectoryGEABundle:Specialite:show.html.twig', array(
            'specialite' => $specialite,
        ));
    }
}
