<?php

/* restaurantrestaurantBundle:Authentification:authentification.html.twig */
class __TwigTemplate_b85ce372b2902ba59800c34ed4a7ed061ed83958be904269ca9d2b9e498d7cde extends Twig_Template
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        echo "\t



\t
\t
\t<div id=\"main\">
\t\t<div class=\"width-container\">

                            <form role=\"form\" class=\"row\">
                             
                                    <label class=\"col-sm-2 control-label\">Email Address*</label>
                                   
                                        <input type=\"text\" class=\"form-control\">
                                  
                                    <label class=\"col-sm-2 control-label\" for=\"password\">Password*</label>
                                    
                                        <input type=\"password\" class=\"form-control\" id=\"password\">
                                    
                                        <button type=\"submit\" id=\"mc-embedded-subscribe\" class=\"button\" >Sign in</button>
                                 
                            </form>
                       
\t\t<div class=\"clearfix\"></div>
\t\t</div><!-- close .width-container -->
\t\t<div class=\"widget-area-highlight\">
\t\t<div class=\"width-container\">
\t\t\t
\t\t\t\t\t\t<div class=\"grid4column homepage-widget\">
\t\t\t\t<h3 class=\"header-underline\">Qui sommes nous</h3>
\t\t\t\t<p>At dawn on the 13th the Carnatic entered the port of Yokohama. This is an important port of call in the Pacific, where all the mail-steamers.</p>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"grid4column homepage-widget\">
\t\t\t\t<h3 class=\"header-underline\">Inscription</h3>
\t\t\t\t<!-- Begin MailChimp Signup Form -->
\t\t\t\t<div id=\"mc_embed_signup\">
\t\t\t\t\t<form action=\"http://progressionstudios.us1.list-manage.com/subscribe/post?u=1a06aa3bca8613232881e8a6e&amp;id=2f5a556941\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
\t\t\t\t\t\t<label for=\"mce-EMAIL\">Join our digital mailing list and get news, deals, and be first to know about events at White Rock!</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clear\"><button type=\"submit\" value=\"Inscription\" name=\"inscription\" id=\"mc-embedded-subscribe\" class=\"button\"></div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<!--End MailChimp Signup Form-->
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"grid4column homepage-widget\">
\t\t\t\t<h3 class=\"header-underline\">Contacter nous</h3>
\t\t\t\t<h6 class=\"heading-address-widget\">Resto-Tunisie</h6>
\t\t\t\t<div class=\"e-mail-widget\"><span>E-mail:</span> <a href=\"#\">admin@e-mail.com</a></div>
\t\t\t\t<div class=\"social-icons\">
\t\t\t\t\t\t<a class=\"rss\" href=\"#\" target=\"_blank\">r</a>
\t\t\t\t\t\t<a class=\"facebook\" href=\"http://facebook.com/\" target=\"_blank\">F</a>
\t\t\t\t\t\t<a class=\"twitter\" href=\"https://twitter.com/Progression_S\" target=\"_blank\">t</a>
\t\t\t\t\t\t<a class=\"skype\" href=\"http://skype.com/\" target=\"_blank\">s</a>
\t\t\t\t\t\t<a class=\"vimeo\" href=\"http://vimeo.com/\" target=\"_blank\">v</a>
\t\t\t\t\t\t<a class=\"linkedin\" href=\"http://linkedin.com/\" target=\"_blank\">l</a>
\t\t\t\t\t\t<!--a class=\"dribbble\" href=\"http://dribbble.com/\" target=\"_blank\">d</a-->
\t\t\t\t\t\t<!--a class=\"forrst\" href=\"http://forrst.com/\" target=\"_blank\">f</a-->
\t\t\t\t\t\t<!--a class=\"flickr\" href=\"http://flickr.com\" target=\"_blank\">n</a-->
\t\t\t\t\t\t<!--a class=\"google\" href=\"http://google.com\" target=\"_blank\">g</a-->
\t\t\t\t\t\t<!--a class=\"youtube\" href=\"http://youtube.com\" target=\"_blank\">y</a-->
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div><!-- close .social-icons -->
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t<div class=\"clearfix\"></div>
\t\t</div><!-- close .width-container -->
\t\t</div><!-- close .widget-area-highlight -->
\t\t
\t\t<div class=\"clearfix\"></div>
\t</div><!-- close #main -->
\t       ";
    }

    public function getTemplateName()
    {
        return "restaurantrestaurantBundle:Authentification:authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,);
    }
}
