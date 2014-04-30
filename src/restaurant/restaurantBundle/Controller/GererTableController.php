<?php

namespace restaurant\restaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GererTableController extends Controller
{
     public function consultertableAction()
    {
        return $this->render('restaurantrestaurantBundle:GererTable:consultertable.html.twig');
    }
    public function ajoutertableAction()
    {
        return $this->render('restaurantrestaurantBundle:GererTable:ajoutertable.html.twig');
    }
 
    
}
