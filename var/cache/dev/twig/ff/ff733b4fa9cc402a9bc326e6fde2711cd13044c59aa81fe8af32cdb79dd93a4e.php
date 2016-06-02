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
        $__internal_9fe835e667fbe3e5fd1b7b5fe552cb57a9883794b0be65b777a2b6103282f465 = $this->env->getExtension("native_profiler");
        $__internal_9fe835e667fbe3e5fd1b7b5fe552cb57a9883794b0be65b777a2b6103282f465->enter($__internal_9fe835e667fbe3e5fd1b7b5fe552cb57a9883794b0be65b777a2b6103282f465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9fe835e667fbe3e5fd1b7b5fe552cb57a9883794b0be65b777a2b6103282f465->leave($__internal_9fe835e667fbe3e5fd1b7b5fe552cb57a9883794b0be65b777a2b6103282f465_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc22a1313d8d4b325a157bf54d8f8c0c62ae1a0d6b14468de203c2765e1c5c86 = $this->env->getExtension("native_profiler");
        $__internal_dc22a1313d8d4b325a157bf54d8f8c0c62ae1a0d6b14468de203c2765e1c5c86->enter($__internal_dc22a1313d8d4b325a157bf54d8f8c0c62ae1a0d6b14468de203c2765e1c5c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dc22a1313d8d4b325a157bf54d8f8c0c62ae1a0d6b14468de203c2765e1c5c86->leave($__internal_dc22a1313d8d4b325a157bf54d8f8c0c62ae1a0d6b14468de203c2765e1c5c86_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82243302aaef0f621b0c668a59c42fa1761577c07eba1e9fbf634896299d583f = $this->env->getExtension("native_profiler");
        $__internal_82243302aaef0f621b0c668a59c42fa1761577c07eba1e9fbf634896299d583f->enter($__internal_82243302aaef0f621b0c668a59c42fa1761577c07eba1e9fbf634896299d583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82243302aaef0f621b0c668a59c42fa1761577c07eba1e9fbf634896299d583f->leave($__internal_82243302aaef0f621b0c668a59c42fa1761577c07eba1e9fbf634896299d583f_prof);

    }

    // line 23
    public function block_category_menu($context, array $blocks = array())
    {
        $__internal_fc16fed5613c295723a0a236f8496024775531bf1ad1ecbd34f9ef2ac3379c9c = $this->env->getExtension("native_profiler");
        $__internal_fc16fed5613c295723a0a236f8496024775531bf1ad1ecbd34f9ef2ac3379c9c->enter($__internal_fc16fed5613c295723a0a236f8496024775531bf1ad1ecbd34f9ef2ac3379c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "category_menu"));

        // line 24
        echo "                <ul class=\"menu\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category_menu"]) ? $context["category_menu"] : $this->getContext($context, "category_menu")), "getItems", array(), "method"));
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
        
        $__internal_fc16fed5613c295723a0a236f8496024775531bf1ad1ecbd34f9ef2ac3379c9c->leave($__internal_fc16fed5613c295723a0a236f8496024775531bf1ad1ecbd34f9ef2ac3379c9c_prof);

    }

    // line 34
    public function block_customer_menu($context, array $blocks = array())
    {
        $__internal_4fbd60d0270bb240e5a35168831439d3616d28ddaee535a0414402c1b4c50739 = $this->env->getExtension("native_profiler");
        $__internal_4fbd60d0270bb240e5a35168831439d3616d28ddaee535a0414402c1b4c50739->enter($__internal_4fbd60d0270bb240e5a35168831439d3616d28ddaee535a0414402c1b4c50739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "customer_menu"));

        // line 35
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["customer_menu"]) ? $context["customer_menu"] : $this->getContext($context, "customer_menu")), "getItems", array(), "method"));
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
        
        $__internal_4fbd60d0270bb240e5a35168831439d3616d28ddaee535a0414402c1b4c50739->leave($__internal_4fbd60d0270bb240e5a35168831439d3616d28ddaee535a0414402c1b4c50739_prof);

    }

    // line 40
    public function block_checkout_menu($context, array $blocks = array())
    {
        $__internal_802bd22092709c26476dda4aa18487e1032953c7b58490ab718d0860f60f68fc = $this->env->getExtension("native_profiler");
        $__internal_802bd22092709c26476dda4aa18487e1032953c7b58490ab718d0860f60f68fc->enter($__internal_802bd22092709c26476dda4aa18487e1032953c7b58490ab718d0860f60f68fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkout_menu"));

        // line 41
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["checkout_menu"]) ? $context["checkout_menu"] : $this->getContext($context, "checkout_menu")), "getItems", array(), "method"));
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
        
        $__internal_802bd22092709c26476dda4aa18487e1032953c7b58490ab718d0860f60f68fc->leave($__internal_802bd22092709c26476dda4aa18487e1032953c7b58490ab718d0860f60f68fc_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ceac057cf7077738fe20bb1c753830c632c50cbe10f9992186d9f661f96dbcd = $this->env->getExtension("native_profiler");
        $__internal_8ceac057cf7077738fe20bb1c753830c632c50cbe10f9992186d9f661f96dbcd->enter($__internal_8ceac057cf7077738fe20bb1c753830c632c50cbe10f9992186d9f661f96dbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ceac057cf7077738fe20bb1c753830c632c50cbe10f9992186d9f661f96dbcd->leave($__internal_8ceac057cf7077738fe20bb1c753830c632c50cbe10f9992186d9f661f96dbcd_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b543493444b4ea6225aec26e114edbf9e2e3a3dda6013d57b1eaeac7c9485cef = $this->env->getExtension("native_profiler");
        $__internal_b543493444b4ea6225aec26e114edbf9e2e3a3dda6013d57b1eaeac7c9485cef->enter($__internal_b543493444b4ea6225aec26e114edbf9e2e3a3dda6013d57b1eaeac7c9485cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b543493444b4ea6225aec26e114edbf9e2e3a3dda6013d57b1eaeac7c9485cef->leave($__internal_b543493444b4ea6225aec26e114edbf9e2e3a3dda6013d57b1eaeac7c9485cef_prof);

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
        return array (  320 => 88,  309 => 69,  302 => 44,  291 => 42,  286 => 41,  280 => 40,  273 => 38,  262 => 36,  257 => 35,  251 => 34,  243 => 28,  232 => 26,  228 => 25,  225 => 24,  219 => 23,  208 => 9,  196 => 7,  188 => 89,  186 => 88,  179 => 84,  175 => 83,  171 => 82,  164 => 78,  160 => 77,  156 => 76,  152 => 75,  148 => 74,  142 => 70,  140 => 69,  135 => 66,  126 => 63,  123 => 62,  118 => 61,  109 => 58,  106 => 57,  101 => 56,  92 => 53,  89 => 52,  85 => 51,  77 => 45,  74 => 40,  72 => 39,  69 => 34,  64 => 30,  61 => 23,  47 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
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
