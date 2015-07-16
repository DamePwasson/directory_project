<?php

namespace ABProject\DirectoryGEABundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ABProject\DirectoryGEABundle\Entity\Etudiant;

/**
 * Etudiant controller.
 *
 */
class EtudiantController extends Controller
{

    /**
     * Lists all Etudiant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $findEntities = $em->getRepository('ABProjectDirectoryGEABundle:Etudiant')->findAll();

        $entities  = $this->get('knp_paginator')->paginate($findEntities, $this->get('request')->query->get('page', 1),12);

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:index.html.twig', array('entities' => $entities,));
    }

    /**
     * Finds and displays a Etudiant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ABProjectDirectoryGEABundle:Etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
