<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GererMenuController extends Controller
{
     public function affichermenuAction()
    {
        return $this->render('restaurantrestaurantBundle:GererBonPlan:affichermenu.html.twig');
    }
     public function consultermenuAction()
    {
        return $this->render('restaurantrestaurantBundle:GererBonPlan:consultermenu.html.twig');
    }
    public function ajoutermenuAction()
    {
        return $this->render('restaurantrestaurantBundle:GererBonPlan:ajoutermenu.html.twig');
    }
   
 
    
}
