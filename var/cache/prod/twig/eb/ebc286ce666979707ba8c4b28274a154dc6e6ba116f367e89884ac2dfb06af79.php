<?php

/* base.html.twig */
class __TwigTemplate_f7246792fd4d8361c087ac7bc85c154ab34cb99ce6d6b77ddc6a747c53cf43c1 extends Twig_Template
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

<div class=\"top-bar\">
    <div class=\"top-bar-title\">
    <span data-responsive-toggle=\"responsive-menu\" data-hide-for=\"medium\">
      <button class=\"menu-icon dark\" type=\"button\" data-toggle></button>
    </span>
        <strong>Shop</strong>
    </div>
    <div id=\"responsive-menu\">
        <div class=\"top-bar-left\">
            ";
        // line 23
        echo "            ";
        $this->displayBlock('category_menu', $context, $blocks);
        // line 30
        echo "        </div>
        <div class=\"top-bar-right\">
            <ul class=\"menu\">
                ";
        // line 34
        echo "                ";
        $this->displayBlock('customer_menu', $context, $blocks);
        // line 39
        echo "                ";
        // line 40
        echo "                ";
        $this->displayBlock('checkout_menu', $context, $blocks);
        // line 45
        echo "            </ul>
        </div>
    </div>
</div>

<div class=\"row column\">
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
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
    <ul class=\"menu\">
        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About Us</a></li>
        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("customer_service");
        echo "\">Customer Service</a></li>
        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("privacy_cookie");
        echo "\">Privacy and Cookie Policy</a></li>
        <li><a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("orders_returns");
        echo "\">Orders and Returns</a></li>
        <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact Us</a></li>
    </ul>
</div>

<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).foundation();
</script>
";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 23
    public function block_category_menu($context, array $blocks = array())
    {
        // line 24
        echo "                <ul class=\"menu\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_menu"]) ? $context["category_menu"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 26
            echo "                        <li><a href=\"";
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
        echo "                </ul>
            ";
    }

    // line 34
    public function block_customer_menu($context, array $blocks = array())
    {
        // line 35
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["customer_menu"]) ? $context["customer_menu"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            echo "                        <li><a href=\"";
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
        echo "                ";
    }

    // line 40
    public function block_checkout_menu($context, array $blocks = array())
    {
        // line 41
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["checkout_menu"]) ? $context["checkout_menu"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 42
            echo "                        <li><a href=\"";
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
        echo "                ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  278 => 88,  273 => 69,  269 => 44,  258 => 42,  253 => 41,  250 => 40,  246 => 38,  235 => 36,  230 => 35,  227 => 34,  222 => 28,  211 => 26,  207 => 25,  204 => 24,  201 => 23,  196 => 9,  190 => 7,  185 => 89,  183 => 88,  176 => 84,  172 => 83,  168 => 82,  161 => 78,  157 => 77,  153 => 76,  149 => 75,  145 => 74,  139 => 70,  137 => 69,  132 => 66,  123 => 63,  120 => 62,  115 => 61,  106 => 58,  103 => 57,  98 => 56,  89 => 53,  86 => 52,  82 => 51,  74 => 45,  71 => 40,  69 => 39,  66 => 34,  61 => 30,  58 => 23,  44 => 10,  42 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
/* <div class="top-bar">*/
/*     <div class="top-bar-title">*/
/*     <span data-responsive-toggle="responsive-menu" data-hide-for="medium">*/
/*       <button class="menu-icon dark" type="button" data-toggle></button>*/
/*     </span>*/
/*         <strong>Shop</strong>*/
/*     </div>*/
/*     <div id="responsive-menu">*/
/*         <div class="top-bar-left">*/
/*             {# category_menu is global twig var filled from service, and later overriden by another module service #}*/
/*             {% block category_menu %}*/
/*                 <ul class="menu">*/
/*                     {% for link in category_menu.getItems() %}*/
/*                         <li><a href="{{ link.path }}">{{ link.label }}</li></a>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="top-bar-right">*/
/*             <ul class="menu">*/
/*                 {# customer_menu is global twig var filled from service, and later overriden by another module service #}*/
/*                 {% block customer_menu %}*/
/*                     {% for link in customer_menu.getItems() %}*/
/*                         <li><a href="{{ link.path }}">{{ link.label }}</li></a>*/
/*                     {% endfor %}*/
/*                 {% endblock %}*/
/*                 {# checkout_menu is global twig var filled from service, and later overriden by another module service #}*/
/*                 {% block checkout_menu %}*/
/*                     {% for link in checkout_menu.getItems() %}*/
/*                         <li><a href="{{ link.path }}">{{ link.label }}</li></a>*/
/*                     {% endfor %}*/
/*                 {% endblock %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
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
/*     <ul class="menu">*/
/*         <li><a href="{{ path('about') }}">About Us</a></li>*/
/*         <li><a href="{{ path('customer_service') }}">Customer Service</a></li>*/
/*         <li><a href="{{ path('privacy_cookie') }}">Privacy and Cookie Policy</a></li>*/
/*         <li><a href="{{ path('orders_returns') }}">Orders and Returns</a></li>*/
/*         <li><a href="{{ path('contact') }}">Contact Us</a></li>*/
/*     </ul>*/
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
