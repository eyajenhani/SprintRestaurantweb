<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercherBonPlanController extends Controller
{
       public function romantiqueAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherBonPlan:romantique.html.twig');
    }
     public function familialeAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherBonPlan:familiale.html.twig');
    }
     public function autresAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherBonPlan:autres.html.twig');
    }
     public function animeAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherBonPlan:anime.html.twig');
    }
   
 
    
}
