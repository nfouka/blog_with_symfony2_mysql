<?php

namespace mohamed\MyAppBundle\Controller;

use mohamed\MyAppBundle\Entity\student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function pageAction()
    {


        $query_dql = "select s from mohamedMyAppBundle:student s where s.id <=10 " ;

        $em = $this->getDoctrine()->getEntityManager();
        $query = $em
            ->createQueryBuilder("s")
            ->select('s')
            ->from('mohamedMyAppBundle:student', 's')
            ->where("s.id <= :id")
            ->setParameter("id" , 10)
        ;


        $result = $query->getQuery()->getResult() ;

        return $this->render('mohamedMyAppBundle:Blog:page.html.twig',
            array(

               'all' => $result
            )
        );
    }
}
