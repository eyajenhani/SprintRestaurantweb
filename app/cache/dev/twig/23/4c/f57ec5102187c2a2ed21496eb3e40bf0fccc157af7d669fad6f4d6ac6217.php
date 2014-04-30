<?php

/* restaurantrestaurantBundle:client:contacte.html.twig */
class __TwigTemplate_234cf57ec5102187c2a2ed21496eb3e40bf0fccc157af7d669fad6f4d6ac6217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("restaurantrestaurantBundle::layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "restaurantrestaurantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<header>
\t<div id=\"header-top-bar\"></div>
\t\t<div class=\"width-container\">
\t\t\t<h1 id=\"logo\"><a href=\"index.html\"><img src=\"images/logo.png\" alt=\"WordPress Theme\" width=\"288\"></a></h1>
\t\t\t\t<nav>
\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t<li class=\"current-menu-item\">
\t\t\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Rechercher restaurant</a>
\t\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Type</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Salon de thé</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Restaurant</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Fastfood</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Par budget</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Restaurant a moins 20dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Restaurant a entre 20dt et 30dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Restaurant a entre 40dt et 50dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"trouver_restaurant.html\">Restaurant a plus de 50dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Rechercher bon plans</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t  <li><a href=\"trouver_bon_plans.html\">Romantique</a></li>
        
      \t  <li><a href=\"trouver_bon_plans.html\">Familiale</a></li>
        
      \t  <li><a href=\"trouver_bon_plans.html\">Animé</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("contacte");
        echo "\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t</div><!-- close .width-container -->
\t</header>
\t
\t<div id=\"page-title\">
\t\t<div class=\"width-container paged-title\">
\t\t\t<h1>Contacter nous<h1>\t
\t\t</div>
\t\t<div id=\"page-title-divider\"></div>
\t</div><!-- #page-title -->
\t<div class=\"clearfix\"></div>

\t
\t
\t<div id=\"main\">
\t\t<div class=\"width-container\">
\t\t\t

\t\t\t
\t\t\t
\t\t\t<div class=\"grid2column lastcolumn\">
\t\t\t\t
\t\t\t\t<h3 class=\"header-underline\">Envoyer un mail</h3>
\t\t\t\t
<form>
  </br>      
    <label>Name</label>
    <input name=\"name\" placeholder=\"Type Here\">
</br>
    <label>Email</label>
    <input name=\"email\" type=\"email\" placeholder=\"Type Here\">
 </br>           
    <label>Message</label>
    <textarea name=\"message\" placeholder=\"Type Here\"></textarea>
 </br>           
    <input type=\"submit\" id=\"mc-embedded-subscribe\" class=\"button\" value=\"Envoyer\">
        
</form>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t<div class=\"clearfix\"></div>
\t\t</div><!-- close .width-container -->
";
    }

    public function getTemplateName()
    {
        return "restaurantrestaurantBundle:client:contacte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 64,  31 => 4,  28 => 3,);
    }
}
