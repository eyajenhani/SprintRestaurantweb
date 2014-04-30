<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'restaurantrestaurant_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\ContactController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'authentification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\AuthentificationController::authentificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/authentification',    ),  ),  4 =>   array (  ),),
        'afficherbonplan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererBonPlanController::afficherbonplanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/afficherbonplan',    ),  ),  4 =>   array (  ),),
        'consulterbonplan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererBonPlanController::consulterbonplanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consulterbonplan',    ),  ),  4 =>   array (  ),),
        'supprimerbonplan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererBonPlanController::supprimerbonplanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimerbonplan',    ),  ),  4 =>   array (  ),),
        'affichermenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererMenuController::affichermenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affichermenu',    ),  ),  4 =>   array (  ),),
        'supprimermenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererMenuController::supprimermenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimermenu',    ),  ),  4 =>   array (  ),),
        'consultermenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererMenuController::consultermenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consultermenu',    ),  ),  4 =>   array (  ),),
        'afficherfacture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::afficherfactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/afficherfacture',    ),  ),  4 =>   array (  ),),
        'supprimerfacture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::supprimerfactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimerfacture',    ),  ),  4 =>   array (  ),),
        'consulterfacture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::consulterfactureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consulterfacture',    ),  ),  4 =>   array (  ),),
        'afficherrestaurant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererRestaurantController::afficherrestaurantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/afficherrestaurant',    ),  ),  4 =>   array (  ),),
        'supprimerrestaurant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererRestaurantController::supprimerrestaurantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimerrestaurant',    ),  ),  4 =>   array (  ),),
        'consulterrestaurant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'restaurant\\restaurantBundle\\Controller\\GererFactureController::consulterrestaurantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/consulterrestaurant',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
