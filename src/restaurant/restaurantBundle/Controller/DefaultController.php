<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('restaurantrestaurantBundle:Default:index.html.twig');
    }
   
 
    
}

