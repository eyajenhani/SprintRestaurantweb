<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthentificationController extends Controller
{
    public function authentificationAction()
    {
        return $this->render('restaurantrestaurantBundle:Authentification:authentification.html.twig');
    }
   
 
    
}


