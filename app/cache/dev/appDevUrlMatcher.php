<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        // restaurant
        if ($pathinfo === '/restaurant') {
            return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:restaurant',  '_route' => 'restaurant',);
        }

        // salon_de_the
        if ($pathinfo === '/salon_de_the') {
            return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:salon_de_the',  '_route' => 'salon_de_the',);
        }

        // fastfood
        if ($pathinfo === '/fastfood') {
            return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:fastfood',  '_route' => 'fastfood',);
        }

        if (0 === strpos($pathinfo, '/budget')) {
            // budgetmoins20
            if ($pathinfo === '/budgetmoins20') {
                return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:budgetmoins20',  '_route' => 'budgetmoins20',);
            }

            // budgetplus50
            if ($pathinfo === '/budgetplus50') {
                return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:budgetplus50',  '_route' => 'budgetplus50',);
            }

            // budget2030
            if ($pathinfo === '/budget2030') {
                return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:budget2030',  '_route' => 'budget2030',);
            }

            // budget3040
            if ($pathinfo === '/budget3040') {
                return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:budget3040',  '_route' => 'budget3040',);
            }

            // budget4050
            if ($pathinfo === '/budget4050') {
                return array (  '_controller' => 'restaurantrestaurantBundle:RechercherRestaurant:budget4050',  '_route' => 'budget4050',);
            }

        }

        // anime
        if ($pathinfo === '/anime') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\RechercherBonPlanController::animeAction',  '_route' => 'anime',);
        }

        // familiale
        if ($pathinfo === '/familiale') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\RechercherBonPlanController::familialeAction',  '_route' => 'familiale',);
        }

        // romantique
        if ($pathinfo === '/romantique') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\RechercherBonPlanController::romantiqueAction',  '_route' => 'romantique',);
        }

        // autres
        if ($pathinfo === '/autres') {
            return array (  '_controller' => 'restaurant\\restaurantBundle\\Controller\\RechercherBonPlanController::autresAction',  '_route' => 'autres',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
