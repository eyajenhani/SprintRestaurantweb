<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GererFactureController extends Controller
{
      public function afficherfactureAction()
    {
        return $this->render('restaurantrestaurantBundle:GererFacture:afficherfacture.html.twig');
    }
     public function consulterfactureAction()
    {
        return $this->render('restaurantrestaurantBundle:GererFacture:consulterfacture.html.twig');
    }
    public function ajouterfactureAction()
    {
        return $this->render('restaurantrestaurantBundle:GererFacture:ajouterfacture.html.twig');
    }
   
 
    
}
