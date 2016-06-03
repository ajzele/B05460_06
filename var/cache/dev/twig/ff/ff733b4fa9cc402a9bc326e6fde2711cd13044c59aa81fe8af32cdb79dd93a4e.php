<?php

/* base.html.twig */
class __TwigTemplate_01e6f2e311a571d4f00be115f1b87d460b3994d8fb4eca7df1a2a26a22f12e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'category_menu' => array($this, 'block_category_menu'),
            'customer_menu' => array($this, 'block_customer_menu'),
            'checkout_menu' => array($this, 'block_checkout_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5cfa68764e999cc84c15f1d9f7b18ada9cbd340ab3a5e024576868f1c37cf12 = $this->env->getExtension("native_profiler");
        $__internal_a5cfa68764e999cc84c15f1d9f7b18ada9cbd340ab3a5e024576868f1c37cf12->enter($__internal_a5cfa68764e999cc84c15f1d9f7b18ada9cbd340ab3a5e024576868f1c37cf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\"/>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>

<!-- Navigation -->
<div class=\"title-bar\" data-responsive-toggle=\"appMenu\" data-hide-for=\"medium\">
    <button class=\"menu-icon\" type=\"button\" data-toggle></button>
    <div class=\"title-bar-title\">Menu</div>
</div>

<div class=\"top-bar\" id=\"appMenu\">
    <div class=\"top-bar-left\">
        ";
        // line 22
        echo "        <ul class=\"menu\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">HOME</a></li>
            ";
        // line 24
        $this->displayBlock('category_menu', $context, $blocks);
        // line 29
        echo "        </ul>
    </div>
    <div class=\"top-bar-right\">
        <ul class=\"menu\">
            ";
        // line 34
        echo "            ";
        $this->displayBlock('customer_menu', $context, $blocks);
        // line 39
        echo "            ";
        // line 40
        echo "            ";
        $this->displayBlock('checkout_menu', $context, $blocks);
        // line 45
        echo "        </ul>
    </div>
</div>
<!-- /Navigation -->

<div class=\"row column\">
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "        <div class=\"alert callout\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "        <div class=\"warning callout\">
            ";
            // line 58
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 62
            echo "        <div class=\"success callout\">
            ";
            // line 63
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>

<div class=\"row column\">
    ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "</div>

<div class=\"row column\">
    <div class=\"menu-centered\">
        <ul class=\"menu\">
            <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About Us</a></li>
            <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("customer_service");
        echo "\">Customer Service</a></li>
            <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("privacy_cookie");
        echo "\">Privacy and Cookie Policy</a></li>
            <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("orders_returns");
        echo "\">Orders and Returns</a></li>
            <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact Us</a></li>
        </ul>
    </div>
</div>

<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).foundation();
</script>
";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "</body>
</html>";
        
        $__internal_a5cfa68764e999cc84c15f1d9f7b18ada9cbd340ab3a5e024576868f1c37cf12->leave($__internal_a5cfa68764e999cc84c15f1d9f7b18ada9cbd340ab3a5e024576868f1c37cf12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bb4879b0081f10e04b7bedee3dcc5ac5cbefb9d055c95eb9301bec82c3fed46 = $this->env->getExtension("native_profiler");
        $__internal_1bb4879b0081f10e04b7bedee3dcc5ac5cbefb9d055c95eb9301bec82c3fed46->enter($__internal_1bb4879b0081f10e04b7bedee3dcc5ac5cbefb9d055c95eb9301bec82c3fed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bb4879b0081f10e04b7bedee3dcc5ac5cbefb9d055c95eb9301bec82c3fed46->leave($__internal_1bb4879b0081f10e04b7bedee3dcc5ac5cbefb9d055c95eb9301bec82c3fed46_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66e62ef40a7bdf6d39ebd1f902fc38681f7c70327d2939f2777c61d09113740b = $this->env->getExtension("native_profiler");
        $__internal_66e62ef40a7bdf6d39ebd1f902fc38681f7c70327d2939f2777c61d09113740b->enter($__internal_66e62ef40a7bdf6d39ebd1f902fc38681f7c70327d2939f2777c61d09113740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_66e62ef40a7bdf6d39ebd1f902fc38681f7c70327d2939f2777c61d09113740b->leave($__internal_66e62ef40a7bdf6d39ebd1f902fc38681f7c70327d2939f2777c61d09113740b_prof);

    }

    // line 24
    public function block_category_menu($context, array $blocks = array())
    {
        $__internal_af93186bb0f8a69152beed529e38bff23ac33a2a767768c2745ccdbe18745943 = $this->env->getExtension("native_profiler");
        $__internal_af93186bb0f8a69152beed529e38bff23ac33a2a767768c2745ccdbe18745943->enter($__internal_af93186bb0f8a69152beed529e38bff23ac33a2a767768c2745ccdbe18745943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "category_menu"));

        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_menu"]) ? $context["category_menu"] : $this->getContext($context, "category_menu")), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 26
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "path", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
            echo "</li></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            ";
        
        $__internal_af93186bb0f8a69152beed529e38bff23ac33a2a767768c2745ccdbe18745943->leave($__internal_af93186bb0f8a69152beed529e38bff23ac33a2a767768c2745ccdbe18745943_prof);

    }

    // line 34
    public function block_customer_menu($context, array $blocks = array())
    {
        $__internal_057bc69da134c9034aaf03def00482fb6d23b5939c07a12714c6858e908616a6 = $this->env->getExtension("native_profiler");
        $__internal_057bc69da134c9034aaf03def00482fb6d23b5939c07a12714c6858e908616a6->enter($__internal_057bc69da134c9034aaf03def00482fb6d23b5939c07a12714c6858e908616a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "customer_menu"));

        // line 35
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["customer_menu"]) ? $context["customer_menu"] : $this->getContext($context, "customer_menu")), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "path", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
            echo "</li></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            ";
        
        $__internal_057bc69da134c9034aaf03def00482fb6d23b5939c07a12714c6858e908616a6->leave($__internal_057bc69da134c9034aaf03def00482fb6d23b5939c07a12714c6858e908616a6_prof);

    }

    // line 40
    public function block_checkout_menu($context, array $blocks = array())
    {
        $__internal_789eb355e5803fc057f3ea1efe3294e69831c71e964b763f0d2181d10e398e44 = $this->env->getExtension("native_profiler");
        $__internal_789eb355e5803fc057f3ea1efe3294e69831c71e964b763f0d2181d10e398e44->enter($__internal_789eb355e5803fc057f3ea1efe3294e69831c71e964b763f0d2181d10e398e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkout_menu"));

        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["checkout_menu"]) ? $context["checkout_menu"] : $this->getContext($context, "checkout_menu")), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "path", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
            echo "</li></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            ";
        
        $__internal_789eb355e5803fc057f3ea1efe3294e69831c71e964b763f0d2181d10e398e44->leave($__internal_789eb355e5803fc057f3ea1efe3294e69831c71e964b763f0d2181d10e398e44_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_67498fb36ec643296363022d5190786e5c8a012071ef798a8bbcad85385aa7d7 = $this->env->getExtension("native_profiler");
        $__internal_67498fb36ec643296363022d5190786e5c8a012071ef798a8bbcad85385aa7d7->enter($__internal_67498fb36ec643296363022d5190786e5c8a012071ef798a8bbcad85385aa7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67498fb36ec643296363022d5190786e5c8a012071ef798a8bbcad85385aa7d7->leave($__internal_67498fb36ec643296363022d5190786e5c8a012071ef798a8bbcad85385aa7d7_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14c767b0a11b28e956bbecc1b02c0eaab3b5e0727a7fe961ef970e91ca402f3c = $this->env->getExtension("native_profiler");
        $__internal_14c767b0a11b28e956bbecc1b02c0eaab3b5e0727a7fe961ef970e91ca402f3c->enter($__internal_14c767b0a11b28e956bbecc1b02c0eaab3b5e0727a7fe961ef970e91ca402f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14c767b0a11b28e956bbecc1b02c0eaab3b5e0727a7fe961ef970e91ca402f3c->leave($__internal_14c767b0a11b28e956bbecc1b02c0eaab3b5e0727a7fe961ef970e91ca402f3c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 90,  314 => 69,  307 => 44,  296 => 42,  291 => 41,  285 => 40,  278 => 38,  267 => 36,  262 => 35,  256 => 34,  249 => 28,  238 => 26,  233 => 25,  227 => 24,  216 => 9,  204 => 7,  196 => 91,  194 => 90,  187 => 86,  183 => 85,  179 => 84,  171 => 79,  167 => 78,  163 => 77,  159 => 76,  155 => 75,  148 => 70,  146 => 69,  141 => 66,  132 => 63,  129 => 62,  124 => 61,  115 => 58,  112 => 57,  107 => 56,  98 => 53,  95 => 52,  91 => 51,  83 => 45,  80 => 40,  78 => 39,  75 => 34,  69 => 29,  67 => 24,  63 => 23,  60 => 22,  47 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }
}
/* <!doctype html>*/
/* <html class="no-js" lang="en">*/
/* <head>*/
/*     <meta charset="utf-8"/>*/
/*     <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('css/foundation.css') }}"/>*/
/*     {% block stylesheets %}{% endblock %}*/
/* </head>*/
/* <body>*/
/* */
/* <!-- Navigation -->*/
/* <div class="title-bar" data-responsive-toggle="appMenu" data-hide-for="medium">*/
/*     <button class="menu-icon" type="button" data-toggle></button>*/
/*     <div class="title-bar-title">Menu</div>*/
/* </div>*/
/* */
/* <div class="top-bar" id="appMenu">*/
/*     <div class="top-bar-left">*/
/*         {# category_menu is global twig var filled from service, and later overriden by another module service #}*/
/*         <ul class="menu">*/
/*             <li><a href="{{ path('homepage') }}">HOME</a></li>*/
/*             {% block category_menu %}*/
/*             {% for link in category_menu.getItems() %}*/
/*                 <li><a href="{{ link.path }}">{{ link.label }}</li></a>*/
/*             {% endfor %}*/
/*             {% endblock %}*/
/*         </ul>*/
/*     </div>*/
/*     <div class="top-bar-right">*/
/*         <ul class="menu">*/
/*             {# customer_menu is global twig var filled from service, and later overriden by another module service #}*/
/*             {% block customer_menu %}*/
/*                 {% for link in customer_menu.getItems() %}*/
/*                     <li><a href="{{ link.path }}">{{ link.label }}</li></a>*/
/*                 {% endfor %}*/
/*             {% endblock %}*/
/*             {# checkout_menu is global twig var filled from service, and later overriden by another module service #}*/
/*             {% block checkout_menu %}*/
/*                 {% for link in checkout_menu.getItems() %}*/
/*                     <li><a href="{{ link.path }}">{{ link.label }}</li></a>*/
/*                 {% endfor %}*/
/*             {% endblock %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* <!-- /Navigation -->*/
/* */
/* <div class="row column">*/
/*     {% for flash_message in app.session.flashBag.get('alert') %}*/
/*         <div class="alert callout">*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashBag.get('warning') %}*/
/*         <div class="warning callout">*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashBag.get('success') %}*/
/*         <div class="success callout">*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
/* */
/* <div class="row column">*/
/*     {% block body %}{% endblock %}*/
/* </div>*/
/* */
/* <div class="row column">*/
/*     <div class="menu-centered">*/
/*         <ul class="menu">*/
/*             <li><a href="{{ path('about') }}">About Us</a></li>*/
/*             <li><a href="{{ path('customer_service') }}">Customer Service</a></li>*/
/*             <li><a href="{{ path('privacy_cookie') }}">Privacy and Cookie Policy</a></li>*/
/*             <li><a href="{{ path('orders_returns') }}">Orders and Returns</a></li>*/
/*             <li><a href="{{ path('contact') }}">Contact Us</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <script src="{{ asset('js/vendor/jquery.js') }}"></script>*/
/* <script src="{{ asset('js/vendor/what-input.js') }}"></script>*/
/* <script src="{{ asset('js/vendor/foundation.js') }}"></script>*/
/* <script>*/
/*     $(document).foundation();*/
/* </script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
