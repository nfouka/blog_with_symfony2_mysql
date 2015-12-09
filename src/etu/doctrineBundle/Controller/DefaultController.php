<?php

namespace etu\doctrineBundle\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {


        return $this->render('etudoctrineBundle:Default:index.html.twig', array('name' => $name));
    }
}
