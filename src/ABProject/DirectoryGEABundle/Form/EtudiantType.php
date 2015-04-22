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
            ->add('nom_etudiant')
            ->add('prenom_etudiant')
            ->add('niveau_etude')
            ->add('contact')
            ->add('created_at')
            ->add('updated_at')
            ->add('promotion')
            ->add('specialite')
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
