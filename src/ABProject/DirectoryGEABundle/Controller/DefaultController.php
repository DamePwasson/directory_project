<?php

namespace ABProject\DirectoryGEABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ABProjectDirectoryGEABundle:Default:index.html.twig', array('name' => $name));
    }
}
