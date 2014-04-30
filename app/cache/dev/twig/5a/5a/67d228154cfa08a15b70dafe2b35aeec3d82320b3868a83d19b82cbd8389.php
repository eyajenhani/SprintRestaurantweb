<?php

/* restaurantrestaurantBundle:Contact:contact.html.twig */
class __TwigTemplate_5a5a67d228154cfa08a15b70dafe2b35aeec3d82320b3868a83d19b82cbd8389 extends Twig_Template
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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "
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
        return "restaurantrestaurantBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
