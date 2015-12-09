<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($page)
    {

        $em = $this->getDoctrine()
                   ->getEntityManager()
                   ->getRepository("AcmeBlogBundle:stagiaire")
                   ->getArticles(10,1) ;

        return $this->render('AcmeBlogBundle:Default:index.html.twig',
            array(

                'articles' => $em,
                'page' => $page,
                'nombrePage' => ceil(count($em))
                )
            );
    }
}
