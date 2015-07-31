<?php

namespace ABProject\DirectoryGEABundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ABProject\DirectoryGEABundle\Entity\Promotion;

/**
 * Promotion controller.
 *
 */
class PromotionController extends Controller
{
    public function showAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
     
        $promotion = $em->getRepository('ABProjectDirectoryGEABundle:Promotion')->findOneBySlug($slug);
     
        if (!$promotion) {
            throw $this->createNotFoundException('Unable to find Promotion entity.');
        }
        
        $promotion->getEtudiants($promotion->getId());

        return $this->render('ABProjectDirectoryGEABundle:Promotion:show.html.twig', array(
            'promotion' => $promotion,
        ));
    }
}
