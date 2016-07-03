<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="home")
     *
     */
    public function IndexAction()
    {

        return $this->render("@App/default/index.html.twig");

    }

    /**
     * @Route("/evenement" , name="evenement" )
     * */
    public function EvenementAction()
    {

        return $this->render("@App/default/evenement.html.twig");
    }

    /**
     *
     * @Route("/contact", name="contact")
     */
    public function ContactAction()
    {
        return $this->render("@App/default/contact.html.twig");
    }


    /**
     * @Route("/about",name="about")
     */
    public function AboutAction(){
        return $this->render("@App/default/about.html.twig");
    }
}
