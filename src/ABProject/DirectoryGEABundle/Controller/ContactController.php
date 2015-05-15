<?php

namespace ABProject\DirectoryGEABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
	public function contactAction()
    {
        return $this->render('ABProjectDirectoryGEABundle:Contact:contact.html.twig');
    }
}
