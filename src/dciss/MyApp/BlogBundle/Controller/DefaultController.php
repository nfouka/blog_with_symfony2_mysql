<?php

namespace dciss\MyApp\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name,Request $request)
    {
    	
    	$entityManager = $this->getDoctrine()->getManager() ; 
    	$all_posts     = $entityManager->getRepository("dcissMyAppBlogBundle:Post")->findAll() ; 
    	
    	$em    = $this->get('doctrine.orm.entity_manager');
    	$dql   = "SELECT p FROM dcissMyAppBlogBundle:Post p";
    	$query = $em->createQuery($dql);
    	
    	$paginator  = $this->get('knp_paginator');
    	$pagination = $paginator->paginate(
    			$query, /* query NOT result */
    			$request->query->getInt('page', 1),
    			5
    			);
    	
    	
        return $this->render('dcissMyAppBlogBundle:Default:index.html.twig', 
        		array(
        				'name'      => $name , 
        				'all_posts' => $all_posts , 
        				'pagination' => $pagination
        		));
    }
}
