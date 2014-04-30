<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // restaurantrestaurant_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'restaurantrestaurant_homepage');
            }

            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\DefaultController::indexAction',  '_route' => 'restaurantrestaurant_homepage',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\ContactController::contactAction',  '_route' => 'contact',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // authentification
            if ($pathinfo === '/authentification') {
                return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\AuthentificationController::authentificationAction',  '_route' => 'authentification',);
            }

            // afficherbonplan
            if ($pathinfo === '/afficherbonplan') {
                return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererBonPlanController::afficherbonplanAction',  '_route' => 'afficherbonplan',);
            }

        }

        // consulterbonplan
        if ($pathinfo === '/consulterbonplan') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererBonPlanController::consulterbonplanAction',  '_route' => 'consulterbonplan',);
        }

        // supprimerbonplan
        if ($pathinfo === '/supprimerbonplan') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererBonPlanController::supprimerbonplanAction',  '_route' => 'supprimerbonplan',);
        }

        // affichermenu
        if ($pathinfo === '/affichermenu') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererMenuController::affichermenuAction',  '_route' => 'affichermenu',);
        }

        // supprimermenu
        if ($pathinfo === '/supprimermenu') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererMenuController::supprimermenuAction',  '_route' => 'supprimermenu',);
        }

        // consultermenu
        if ($pathinfo === '/consultermenu') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererMenuController::consultermenuAction',  '_route' => 'consultermenu',);
        }

        // afficherfacture
        if ($pathinfo === '/afficherfacture') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::afficherfactureAction',  '_route' => 'afficherfacture',);
        }

        // supprimerfacture
        if ($pathinfo === '/supprimerfacture') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::supprimerfactureAction',  '_route' => 'supprimerfacture',);
        }

        // consulterfacture
        if ($pathinfo === '/consulterfacture') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::consulterfactureAction',  '_route' => 'consulterfacture',);
        }

        // afficherrestaurant
        if ($pathinfo === '/afficherrestaurant') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererRestaurantController::afficherrestaurantAction',  '_route' => 'afficherrestaurant',);
        }

        // supprimerrestaurant
        if ($pathinfo === '/supprimerrestaurant') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererRestaurantController::supprimerrestaurantAction',  '_route' => 'supprimerrestaurant',);
        }

        // consulterrestaurant
        if ($pathinfo === '/consulterrestaurant') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::consulterrestaurantAction',  '_route' => 'consulterrestaurant',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
