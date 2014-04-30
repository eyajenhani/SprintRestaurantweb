<?php

/* restaurantrestaurantBundle:Default:index.html.twig */
class __TwigTemplate_e4702da0b4815c8cff0f4fae769d43c23ea5273cf146c1cdb5917da88ba81c93 extends Twig_Template
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
        // line 3
        echo "<header>
\t<div id=\"header-top-bar\"></div>
\t\t<div class=\"width-container\">
\t\t\t<h1 id=\"logo\"><a href=\"index.html\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"WordPress Theme\" width=\"288\"></a></h1>
\t\t\t
\t\t\t<nav>
\t\t\t
\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t<li class=\"current-menu-item\">
\t\t\t\t\t\t<a href=\"";
        // line 12
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
            <li><a href=\"\">autres</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 66
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
\t</header>
\t
\t<div id=\"page-title\">

\t\t\t<div class=\"flexslider\" id=\"homepage-slider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"caption-progression\">
\t\t\t\t\t\t\t<div class=\"width-container\">
\t\t\t\t\t\t\t\tVisiter notre &amp; site web <br> découvrir nos espaces restauration.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- close .caption-progression -->
\t\t\t\t\t\t<img src=\"demo/slide1.jpg\" alt=\"slide\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"demo/slide2.jpg\" alt=\"slide\">
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"caption-progression \">
\t\t\t\t\t\t\t<div class=\"width-container\">
\t\t\t\t\t\t\t\tvous trouvez <br> votre espace facilement.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><!-- close .caption-progression -->
\t\t\t\t\t\t<img src=\"demo/slide3.jpg\" alt=\"slide\">
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div><!-- close .flexslider -->
\t
\t</div><!-- #page-title -->
\t
\t<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$) {
\t    \$('#homepage-slider').flexslider({
\t\t\tanimation: \"fade\",              //String: Select your animation type, \"fade\" or \"slide\"
\t\t\tslideshow: false,                //Boolean: Animate slider automatically
\t\t\tslideshowSpeed: 8000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
\t\t\tanimationDuration: 500,         //Integer: Set the speed of animations, in milliseconds
\t\t\tdirectionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
\t\t\tcontrolNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
\t\t\tkeyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
\t\t\tmousewheel: false,              //Boolean: Allow slider navigating via mousewheel
\t\t\tprevText: \"Previous\",           //String: Set the text for the \"previous\" directionNav item
\t\t\tnextText: \"Next\",               //String: Set the text for the \"next\" directionNav item
\t\t\tpausePlay: false,               //Boolean: Create pause/play dynamic element
\t\t\tpauseText: 'Pause',             //String: Set the text for the \"pause\" pausePlay item
\t\t\tplayText: 'Play',               //String: Set the text for the \"play\" pausePlay item
\t\t\trandomize: false,               //Boolean: Randomize slide order
\t\t\tslideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
\t\t\tuseCSS: true,
\t\t\tanimationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received \"disable\" classes at either end
\t\t\tpauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
\t\t\tpauseOnHover: false            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
\t    });
\t});
\t</script>
<div class=\"clearfix\"></div>
\t\t<div id=\"page-title-divider\"><br/>\t<h1>Les restaurants les plus visités</h1></div>
\t

\t\t<div id=\"main\">
\t
\t\t<div class=\"widget-area-highlight\">
\t\t
\t\t<div class=\"width-container\">
\t\t
\t<div class=\"width-container\">

\t\t\t
\t\t\t<div class=\"grid3column\">
\t\t\t\t<div class=\"menu-item-container\">
\t\t\t\t\t<a href=\"menu-post.html\">
\t\t\t\t\t\t<div class=\"grid3column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("demo/photodune-1515451-wine-m-300x375.jpg"), "html", null, true);
        echo "\" alt=\"wine-menu\" class=\"noborder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid3columnbig lastcolumn\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h5 class=\"menu-item-header-wine\">Restaurant1</h5>
\t\t\t\t\t\t\t<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"grid3column\">
\t\t\t\t<div class=\"menu-item-container\">
\t\t\t\t\t<a href=\"menu-post.html\">
\t\t\t\t\t\t<div class=\"grid3column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("demo/photodune-1515455-wine-m-300x375.jpg"), "html", null, true);
        echo "\" alt=\"wine-menu\" class=\"noborder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid3columnbig lastcolumn\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h5 class=\"menu-item-header-wine\">Restaurant2</h5>
\t\t\t\t\t\t\t<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"grid3column lastcolumn\">
\t\t\t\t<div class=\"menu-item-container\">
\t\t\t\t\t<a href=\"menu-post.html\">
\t\t\t\t\t\t<div class=\"grid3column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("demo/photodune-1930437-bottle-with-red-wine-and-glass-on-a-old-stone-m-300x375.jpg"), "html", null, true);
        echo "\" alt=\"wine-menu\" class=\"noborder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid3columnbig lastcolumn\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h5 class=\"menu-item-header-wine\">Restaurant3</h5>
\t\t\t\t\t\t\t<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"grid3column\">
\t\t\t\t<div class=\"menu-item-container\">
\t\t\t\t\t<a href=\"menu-post.html\">
\t\t\t\t\t\t<div class=\"grid3column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("demo/photodune-705463-champagner-m-300x375.jpg"), "html", null, true);
        echo "\" alt=\"wine-menu\" class=\"noborder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid3columnbig lastcolumn\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h5 class=\"menu-item-header-wine\">Restaurant4</h5>
\t\t\t\t\t\t\t<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"grid3column\">
\t\t\t\t<div class=\"menu-item-container\">
\t\t\t\t\t<a href=\"menu-post.html\">
\t\t\t\t\t\t<div class=\"grid3column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("demo/photodune-2717933-wine-bottles-l-300x375.jpg"), "html", null, true);
        echo "\" alt=\"wine-menu\" class=\"noborder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid3columnbig lastcolumn\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h5 class=\"menu-item-header-wine\">Restaurant6</h5>
\t\t\t\t\t\t\t<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"grid3column lastcolumn\">
\t\t\t\t<div class=\"menu-item-container\">
\t\t\t\t\t<a href=\"menu-post.html\">
\t\t\t\t\t\t<div class=\"grid3column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("demo/photodune-490628-white-wine-bottle-m-300x375.jpg"), "html", null, true);
        echo "\" alt=\"wine-menu\" class=\"noborder\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"grid3columnbig lastcolumn\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<h5 class=\"menu-item-header-wine\">Restaurant 7</h5>
\t\t\t\t\t\t\t<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t
\t\t</div><!-- close .width-container -->
\t\t
\t\t\t\t<div class=\"widget-area-highlight\">
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
\t\t\t\t\t\t<div class=\"clear\"><input type=\"submit\" value=\"Inscription\" name=\"inscription\" id=\"mc-embedded-subscribe\" class=\"button\"></div>
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
";
    }

    public function getTemplateName()
    {
        return "restaurantrestaurantBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 235,  268 => 217,  248 => 200,  227 => 182,  206 => 164,  186 => 147,  102 => 66,  45 => 12,  36 => 6,  31 => 3,  28 => 2,);
    }
}
