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
    ";
        // line 24
        $this->displayBlock('container', $context, $blocks);
        // line 28
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
        // line 39
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

    // line 24
    public function block_container($context, array $blocks = array())
    {
        // line 25
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
        return array (  97 => 25,  94 => 24,  78 => 39,  65 => 28,  63 => 24,  55 => 19,  51 => 18,  46 => 16,  42 => 15,  38 => 14,  32 => 11,  20 => 1,  289 => 235,  268 => 217,  248 => 200,  227 => 182,  206 => 164,  186 => 147,  102 => 66,  45 => 12,  36 => 6,  31 => 3,  28 => 2,);
    }
}
