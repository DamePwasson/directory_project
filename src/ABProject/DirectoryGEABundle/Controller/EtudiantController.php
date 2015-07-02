<?php

namespace ABProject\DirectoryGEABundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ABProject\DirectoryGEABundle\Entity\Etudiant;
use ABProject\DirectoryGEABundle\Form\EtudiantType;

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
     * Creates a new Etudiant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Etudiant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('etudiant_show', array('id' => $entity->getId())));
        }

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Etudiant entity.
     *
     * @param Etudiant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Etudiant $entity)
    {
        $form = $this->createForm(new EtudiantType(), $entity, array(
            'action' => $this->generateUrl('etudiant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Etudiant entity.
     *
     */
    public function newAction()
    {
        $entity = new Etudiant();
        $form   = $this->createCreateForm($entity);

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
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

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Etudiant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ABProjectDirectoryGEABundle:Etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Etudiant entity.
    *
    * @param Etudiant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Etudiant $entity)
    {
        $form = $this->createForm(new EtudiantType(), $entity, array(
            'action' => $this->generateUrl('etudiant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Etudiant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ABProjectDirectoryGEABundle:Etudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('etudiant_edit', array('id' => $id)));
        }

        return $this->render('ABProjectDirectoryGEABundle:Etudiant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Etudiant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ABProjectDirectoryGEABundle:Etudiant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Etudiant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('etudiant'));
    }

    /**
     * Creates a form to delete a Etudiant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etudiant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
