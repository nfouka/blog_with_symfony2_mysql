<?php

namespace dciss\MyAppCalculateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	
    	$value_1_from_twig = $this->get('request')->request->get('nombre1');
    	$value_2_from_twig = $this->get('request')->request->get('nombre2');
    	$operator_from_twig = $this->get('request')->request->get('choix');
    	$result = 0 ; 
    	if($operator_from_twig=="addition") {
    	$result = $value_1_from_twig + $value_2_from_twig ; 
    	}else if($operator_from_twig == '*'){
    		$result = $value_1_from_twig * $value_2_from_twig ;
    	
    	}else if($operator_from_twig == "/"){
    		$result = $value_1_from_twig / $value_2_from_twig ;
    	
    	}else if($operator_from_twig == "soustraction"){
    		$result = $value_1_from_twig - $value_2_from_twig ;
    	}
    	
        return $this->render('dcissMyAppCalculateBundle:Default:index.html.twig', 
        		array(
        				"result" => $result ,
        		)
        		);
    }
}
