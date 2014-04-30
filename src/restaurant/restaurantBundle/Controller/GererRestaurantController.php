<?php


namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GererRestaurantController extends Controller
{
      public function afficherrestaurantAction()
    {
        return $this->render('restaurantrestaurantBundle:GererRestaurant:afficherrestaurant.html.twig');
    }
     public function consulterrestaurantAction()
    {
        return $this->render('restaurantrestaurantBundle:GererRestaurant:consulterrestaurant.html.twig');
    }
    public function ajouterrestaurantAction()
    {
        return $this->render('restaurantrestaurantBundle:GererRestaurant:ajouterrestaurant.html.twig');
    }
 
    
}
