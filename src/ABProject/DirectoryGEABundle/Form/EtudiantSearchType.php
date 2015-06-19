<?php

namespace ABProject\DirectoryGEABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantSearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('specialite', 'choice', array('choices' => array('Petites et Moyennes Organisations', 'Finance-Comptabilité', 'Ressources Humaines')))

            ->add('promotion', 'choice', array('choices' => array('2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010')))

            ->add('nom_etudiant', 'text')

        ;
    }

    public function getName()
    {
        return 'abproject_directorygeabundle_etudiant';
    }

    public function indexAction()
    {

    $form = $this->createForm(new AnnonceRechercheType());

    $request = $this->getRequest();

    return $this->render('ABProjectDirectoryGEABundle:Etudiant:index.html.twig', array('form' => $form->createView()));
    }
}
