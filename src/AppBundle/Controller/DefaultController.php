<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="begin")
     */
    public function indexAction(Request $request)
    {
       $groups=$this->getDoctrine()
        ->getRepository('AppBundle:Groups')
        ->findAll();
           return $this->render('default/index.html.twig', array('groups'=>$groups,));
    }
    /**
     * @Route("/group/group_id", name="group")
     */
    public function groupAction($group_id)
    {
        $group=$this->getDoctrine()
        ->getRepository('AppBundle:Groups')
        ->find($group_id);
       $groups=$this->getDoctrine()
        ->getRepository('AppBundle:Groups')
        ->findAll();
        return $this->render('default/index.html.twig', array('groups'=>$groups,'group'=>$group));
    }
}
