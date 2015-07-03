<?php

namespace ABProject\DirectoryGEABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_etudiant', null, array('label' => 'Nom'))
            ->add('prenom_etudiant', null, array('label' => 'Prénom'))
            ->add('niveau_etude', null, array('label' => 'Niveau d\'étude (Bac +)'))
            ->add('contact', null, array('label' => 'E-Mail de contact'))
            //->add('created_at')
            //->add('updated_at')
            ->add('promotion', null, array('label' => 'Promotion'))
            ->add('specialite', null, array('label' => 'Spécialité'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ABProject\DirectoryGEABundle\Entity\Etudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'abproject_directorygeabundle_etudiant';
    }
}
