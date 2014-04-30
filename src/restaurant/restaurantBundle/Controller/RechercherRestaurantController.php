<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercherRestaurantController extends Controller
{
    public function restaurantAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:restaurant.html.twig');
    }
    public function fastfoodAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:fastfood.html.twig');
    }
     public function salon_de_theAction()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:salon_de_the.html.twig');
    }
     public function budgetmoins20Action()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:budgetmoins20.html.twig');
    }
 
      public function budgetplus50Action()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:budgetplus50.html.twig');
    }
      public function budget2030Action()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:budget2030.html.twig');
    }
      public function budget3040Action()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:budget3040.html.twig');
    }
      public function budget4050Action()
    {
        return $this->render('restaurantrestaurantBundle:RechercherRestaurant:budget4050.html.twig');
    }
 
}
