<?php

/* restaurantrestaurantBundle::layout.html.twig */
class __TwigTemplate_9b848b66190c3d3472b5f9c508bd6e4391c2013573f246e5dd2562b70408ac4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"fr\"> 
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<title>White Rock Template</title>
\t<meta name=\"description\" content=\"\">

\t<meta name=\"viewport\" content=\"width=device-width\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
\t<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>\t

\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t

</head>
<body>
    
    <header>
\t<div id=\"header-top-bar\"></div>
\t\t<div class=\"width-container\">
\t\t\t<h1 id=\"logo\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"WordPress Theme\" width=\"288\"></h1>
\t\t\t
\t\t\t<nav>
\t\t\t
\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t<li class=\"current-menu-item\">
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("restaurantrestaurant_homepage");
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Rechercher restaurant</a>
\t\t\t\t\t<ul>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Type</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("salon_de_the");
        echo "\">Salon de thé</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("restaurant");
        echo "\">Restaurant</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fastfood");
        echo "\">Fastfood</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Par budget</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("budgetmoins20");
        echo "\">Restaurant a moins 20dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("budget2030");
        echo "\">Restaurant a entre 20dt et 30dt</a>
\t\t\t\t\t\t</li>
                                                <li>
\t\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("budget3040");
        echo "\">Restaurant a entre 30dt et 40dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("budget4050");
        echo "\">Restaurant a entre 40dt et 50dt</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("budgetplus50");
        echo "\">Restaurant a plus de 50dt</a>
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
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("romantique");
        echo "\">Romantique</a></li>
        
      \t  <li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("familiale");
        echo "\">Familiale</a></li>
        
      \t  <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("anime");
        echo "\">Animé</a></li>
            <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("autres");
        echo "\">autres</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t
\t\t\t</nav>
\t\t
\t\t<div class=\"clearfix\"></div>
\t\t</div><!-- close .width-container -->
        <nav align=\"right\" >
\t</br></br>
\t<a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("authentification");
        echo "\"> <h6 ></b><font color=\"#22427C\"> se connecter</font></b></h6></a>
\t</nav>
\t</header>
    ";
        // line 105
        $this->displayBlock('container', $context, $blocks);
        // line 109
        echo "\t<footer>
\t\t<div class=\"width-container\">
\t\t\t<div id=\"copyright\">
\t\t\t\t
\t\t\t\t<div class=\"grid2column\">
\t\t\t\t\t<a href=\"index.html\"><img src=\"images/logo-footer.png\" width=\"150\" alt=\"Logo-footer\"></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"grid2column lastcolumn\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"index.html\">Accueil</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div><!-- close #copyright -->
\t\t</div><!-- close .width-container -->
\t</footer>
\t
</body>
</html>";
    }

    // line 105
    public function block_container($context, array $blocks = array())
    {
        // line 106
        echo "    
    
    ";
    }

    public function getTemplateName()
    {
        return "restaurantrestaurantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 106,  223 => 105,  207 => 120,  194 => 109,  192 => 105,  186 => 102,  172 => 91,  164 => 86,  160 => 85,  155 => 83,  150 => 81,  136 => 70,  130 => 67,  124 => 64,  118 => 61,  112 => 58,  101 => 50,  95 => 47,  89 => 44,  76 => 34,  67 => 28,  55 => 19,  51 => 18,  46 => 16,  42 => 15,  38 => 14,  32 => 11,  20 => 1,  208 => 163,  187 => 145,  167 => 128,  146 => 110,  125 => 92,  105 => 75,  31 => 3,  28 => 2,);
    }
}
