<?php
namespace ABProject\DirectoryGEABundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
 
class EtudiantAdmin extends Admin
{
	// setup the defaut sort column and order
	    protected $datagridValues = array(
	        '_sort_order' => 'DESC',
	        '_sort_by' => 'created_at'
	    );
	 
	    protected function configureFormFields(FormMapper $formMapper)
	    {
	        $formMapper
	            ->add('nom_etudiant', null, array('label' => 'Nom'))
	            ->add('prenom_etudiant', null, array('label' => 'Prénom'))
	            ->add('niveau_etude', null, array('label' => 'Niveau d\'étude (Bac +)'))
	            ->add('contact', null, array('label' => 'E-Mail de contact'))
	            ->add('promotion', null, array('label' => 'Promotion'))
	            ->add('specialite', null, array('label' => 'Spécialité'))
	            //->add('created_at')
	        ;
	    }
	 
	    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	    {
	        $datagridMapper
		->add('nom_etudiant', null, array('label' => 'Nom'))
	            ->add('prenom_etudiant', null, array('label' => 'Prénom'))
	            ->add('niveau_etude', null, array('label' => 'Niveau d\'étude (Bac +)'))
	            ->add('contact', null, array('label' => 'E-Mail de contact'))
	            ->add('promotion', null, array('label' => 'Promotion'))
	            ->add('specialite', null, array('label' => 'Spécialité'))
	            ->add('created_at')
	        ;
	    }
	 
	    protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
		->add('nom_etudiant', null, array('label' => 'Nom'))
	            ->add('prenom_etudiant', null, array('label' => 'Prénom'))
	            ->add('niveau_etude', null, array('label' => 'Niveau d\'étude (Bac +)'))
	            ->add('contact', null, array('label' => 'E-Mail de contact'))
	            ->add('promotion', null, array('label' => 'Promotion'))
	            ->add('specialite', null, array('label' => 'Spécialité'))
	            ->add('created_at')
	            ->add('_action', 'actions', array(
	                'actions' => array(
	                    'view' => array(),
	                    'edit' => array(),
	                    'delete' => array(),
	                )
	            ))
	        ;
	    }
	 
	    protected function configureShowField(ShowMapper $showMapper)
	    {
	        $showMapper
		->add('nom_etudiant')
	            ->add('prenom_etudiant')
	            ->add('niveau_etude')
	            ->add('contact')
	            ->add('promotion')
	            ->add('specialite')
	            ->add('created_at')
	        ;
	    }

	    public function getBatchActions()
	{
	    // retrieve the default (currently only the delete action) actions
	    $actions = parent::getBatchActions();
	 
	    // check user permissions
	    if($this->hasRoute('edit') && $this->isGranted('EDIT') && $this->hasRoute('delete') && $this->isGranted('DELETE')) {
	        $actions['extend'] = array(
	            'label'            => 'Extend',
	            'ask_confirmation' => true // If true, a confirmation will be asked before performing the action
	        );
	 
	    }
	 
	    return $actions;
	}
}