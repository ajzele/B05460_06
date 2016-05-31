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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58a7f5ce4b78624ab7dfba0618e5937dd5818658c3887dd815a4ecb8d1aa078e = $this->env->getExtension("native_profiler");
        $__internal_58a7f5ce4b78624ab7dfba0618e5937dd5818658c3887dd815a4ecb8d1aa078e->enter($__internal_58a7f5ce4b78624ab7dfba0618e5937dd5818658c3887dd815a4ecb8d1aa078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <strong>shop</strong>
    </div>
    <div id=\"responsive-menu\">
        <div class=\"top-bar-left\">
            ";
        // line 23
        $this->displayBlock('category_menu', $context, $blocks);
        // line 30
        echo "        </div>
        <div class=\"top-bar-right\">
            ";
        // line 32
        $this->displayBlock('customer_menu', $context, $blocks);
        // line 46
        echo "        </div>
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

";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
<div class=\"row column\">
    <ul class=\"menu\">
        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About Us</a></li>
        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("customer_service");
        echo "\">Customer Service</a></li>
        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("privacy_cookie");
        echo "\">Privacy and Cookie Policy</a></li>
        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("orders_returns");
        echo "\">Orders and Returns</a></li>
        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact Us</a></li>
    </ul>
</div>

<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).foundation();
</script>
";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "</body>
</html>";
        
        $__internal_58a7f5ce4b78624ab7dfba0618e5937dd5818658c3887dd815a4ecb8d1aa078e->leave($__internal_58a7f5ce4b78624ab7dfba0618e5937dd5818658c3887dd815a4ecb8d1aa078e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b90ab516e44efd08e8ad7acd30d5e5a8dc82a2dadba47e351dc798bfa39011a8 = $this->env->getExtension("native_profiler");
        $__internal_b90ab516e44efd08e8ad7acd30d5e5a8dc82a2dadba47e351dc798bfa39011a8->enter($__internal_b90ab516e44efd08e8ad7acd30d5e5a8dc82a2dadba47e351dc798bfa39011a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b90ab516e44efd08e8ad7acd30d5e5a8dc82a2dadba47e351dc798bfa39011a8->leave($__internal_b90ab516e44efd08e8ad7acd30d5e5a8dc82a2dadba47e351dc798bfa39011a8_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b1b23f21f5b27f41baa17f1322643d76a9fdf160e3037f89c34f90a24749f84 = $this->env->getExtension("native_profiler");
        $__internal_0b1b23f21f5b27f41baa17f1322643d76a9fdf160e3037f89c34f90a24749f84->enter($__internal_0b1b23f21f5b27f41baa17f1322643d76a9fdf160e3037f89c34f90a24749f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b1b23f21f5b27f41baa17f1322643d76a9fdf160e3037f89c34f90a24749f84->leave($__internal_0b1b23f21f5b27f41baa17f1322643d76a9fdf160e3037f89c34f90a24749f84_prof);

    }

    // line 23
    public function block_category_menu($context, array $blocks = array())
    {
        $__internal_7556dae6ea8ecdc502398e6809571efe220aa0ff2bbc330f6c4cb51d594d34da = $this->env->getExtension("native_profiler");
        $__internal_7556dae6ea8ecdc502398e6809571efe220aa0ff2bbc330f6c4cb51d594d34da->enter($__internal_7556dae6ea8ecdc502398e6809571efe220aa0ff2bbc330f6c4cb51d594d34da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "category_menu"));

        // line 24
        echo "                <ul class=\"menu\">
                    <li><a href=\"#\">Women</a></li>
                    <li><a href=\"#\">Men</a></li>
                    <li><a href=\"#\">Gear</a></li>
                </ul>
            ";
        
        $__internal_7556dae6ea8ecdc502398e6809571efe220aa0ff2bbc330f6c4cb51d594d34da->leave($__internal_7556dae6ea8ecdc502398e6809571efe220aa0ff2bbc330f6c4cb51d594d34da_prof);

    }

    // line 32
    public function block_customer_menu($context, array $blocks = array())
    {
        $__internal_9694b773b77868c60662a8c888c7c888ffae445f0179df0299b2319f2633666c = $this->env->getExtension("native_profiler");
        $__internal_9694b773b77868c60662a8c888c7c888ffae445f0179df0299b2319f2633666c->enter($__internal_9694b773b77868c60662a8c888c7c888ffae445f0179df0299b2319f2633666c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "customer_menu"));

        // line 33
        echo "                <ul class=\"menu\">
                    <ul class=\"dropdown menu\" data-dropdown-menu>
                        <li>
                            <a href=\"#\">Branko Ajzele</a>
                            <ul class=\"menu vertical\">
                                <li><a href=\"#\">Account</a></li>
                                <li><a href=\"#\">Logout</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Two</a></li>
                    </ul>
                </ul>
            ";
        
        $__internal_9694b773b77868c60662a8c888c7c888ffae445f0179df0299b2319f2633666c->leave($__internal_9694b773b77868c60662a8c888c7c888ffae445f0179df0299b2319f2633666c_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_d67da2d968f2153d99635a5a01b0a2f156b581ed44d721583c2a953de90e6f96 = $this->env->getExtension("native_profiler");
        $__internal_d67da2d968f2153d99635a5a01b0a2f156b581ed44d721583c2a953de90e6f96->enter($__internal_d67da2d968f2153d99635a5a01b0a2f156b581ed44d721583c2a953de90e6f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d67da2d968f2153d99635a5a01b0a2f156b581ed44d721583c2a953de90e6f96->leave($__internal_d67da2d968f2153d99635a5a01b0a2f156b581ed44d721583c2a953de90e6f96_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad3b4e99aa9c0b85bd00a667505b0afd6ad6e1af28e0f070e8d4a5346f3375fd = $this->env->getExtension("native_profiler");
        $__internal_ad3b4e99aa9c0b85bd00a667505b0afd6ad6e1af28e0f070e8d4a5346f3375fd->enter($__internal_ad3b4e99aa9c0b85bd00a667505b0afd6ad6e1af28e0f070e8d4a5346f3375fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad3b4e99aa9c0b85bd00a667505b0afd6ad6e1af28e0f070e8d4a5346f3375fd->leave($__internal_ad3b4e99aa9c0b85bd00a667505b0afd6ad6e1af28e0f070e8d4a5346f3375fd_prof);

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
        return array (  262 => 86,  251 => 68,  232 => 33,  226 => 32,  214 => 24,  208 => 23,  197 => 9,  185 => 7,  177 => 87,  175 => 86,  168 => 82,  164 => 81,  160 => 80,  153 => 76,  149 => 75,  145 => 74,  141 => 73,  137 => 72,  132 => 69,  130 => 68,  126 => 66,  117 => 63,  114 => 62,  109 => 61,  100 => 58,  97 => 57,  92 => 56,  83 => 53,  80 => 52,  76 => 51,  69 => 46,  67 => 32,  63 => 30,  61 => 23,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
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
/* */
/* <div class="top-bar">*/
/*     <div class="top-bar-title">*/
/*         <span data-responsive-toggle="responsive-menu" data-hide-for="medium">*/
/*           <button class="menu-icon dark" type="button" data-toggle></button>*/
/*         </span>*/
/*         <strong>shop</strong>*/
/*     </div>*/
/*     <div id="responsive-menu">*/
/*         <div class="top-bar-left">*/
/*             {% block category_menu %}*/
/*                 <ul class="menu">*/
/*                     <li><a href="#">Women</a></li>*/
/*                     <li><a href="#">Men</a></li>*/
/*                     <li><a href="#">Gear</a></li>*/
/*                 </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="top-bar-right">*/
/*             {% block customer_menu %}*/
/*                 <ul class="menu">*/
/*                     <ul class="dropdown menu" data-dropdown-menu>*/
/*                         <li>*/
/*                             <a href="#">Branko Ajzele</a>*/
/*                             <ul class="menu vertical">*/
/*                                 <li><a href="#">Account</a></li>*/
/*                                 <li><a href="#">Logout</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="#">Two</a></li>*/
/*                     </ul>*/
/*                 </ul>*/
/*             {% endblock %}*/
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
/* {% block body %}{% endblock %}*/
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
