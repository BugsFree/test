<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:eshop:main.html.twig');
    }
    public function SiteAction()
    {
        return $this->render('MainBundle:eshop:main.html.twig');
    }
    public function AdminAction()
    {
        return $this->render('MainBundle:admin:dash.html.twig');
    }
}
