<?php

namespace ABProject\DirectoryGEABundle\Controller;
 
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery as ProxyQueryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
 
class EtudiantAdminController extends Controller
{
	 public function batchActionExtend(ProxyQueryInterface $selectedModelQuery)
	    {
	        if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false)
	        {
	            throw new AccessDeniedException();
	        }
	 
	        $request = $this->get('request');
	        $modelManager = $this->admin->getModelManager();
	 
	        $selectedModels = $selectedModelQuery->execute();
	 
	        try {
	            foreach ($selectedModels as $selectedModel) {
	                $selectedModel->extend();
	                $modelManager->update($selectedModel);
	            }
	        } catch (\Exception $e) {
	            $this->get('session')->setFlash('sonata_flash_error', $e->getMessage());
	 
	            return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
	        }
	 
	        $this->get('session')->setFlash('sonata_flash_success',  sprintf('The selected jobs validity has been extended until %s.', date('m/d/Y', time() + 86400 * 30)));
	 
	        return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
	    }

	    public function batchActionDeleteNeverActivatedIsRelevant()
	{
	    return true;
	}
	 
	public function batchActionDeleteNeverActivated()
	{
	    if ($this->admin->isGranted('EDIT') === false || $this->admin->isGranted('DELETE') === false) {
	        throw new AccessDeniedException();
	    }
	 
	    $em = $this->getDoctrine()->getEntityManager();
	    $nb = $em->getRepository('ABProjectDirectoryGEABundle:Etudiant')->cleanup(60);
	 
	    if ($nb) {
	        $this->get('session')->setFlash('sonata_flash_success',  sprintf('%d never activated students have been deleted successfully.', $nb));
	    } else {
	        $this->get('session')->setFlash('sonata_flash_info',  'No student to delete.');
	    }
	 
	    return new RedirectResponse($this->admin->generateUrl('list',$this->admin->getFilterParameters()));
	}
}