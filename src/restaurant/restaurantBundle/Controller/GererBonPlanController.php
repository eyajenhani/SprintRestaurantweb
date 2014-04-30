<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GererBonPlanController extends Controller
{
    public function AfficherBonPlanAction()
    {
        return $this->render('restaurantrestaurantBundle:GererBonPlan:afficherbonplan.html.twig');
    }
     public function ConsulterBonPlanAction()
    {
        return $this->render('restaurantrestaurantBundle:GererBonPlan:consulterbonplan.html.twig');
    }
    public function AjouterBonPlanAction()
    {
        return $this->render('restaurantrestaurantBundle:GererBonPlan:ajouterbonplan.html.twig');
    }
   
 
    
}
