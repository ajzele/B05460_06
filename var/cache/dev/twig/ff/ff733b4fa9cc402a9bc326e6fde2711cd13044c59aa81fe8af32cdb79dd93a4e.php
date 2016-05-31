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
        $__internal_e522bfbc9865f28f701ff88748fdca50984005577315227a56173c5c80fcf492 = $this->env->getExtension("native_profiler");
        $__internal_e522bfbc9865f28f701ff88748fdca50984005577315227a56173c5c80fcf492->enter($__internal_e522bfbc9865f28f701ff88748fdca50984005577315227a56173c5c80fcf492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <div class=\"top-bar-title\"><span data-responsive-toggle=\"responsive-menu\" data-hide-for=\"medium\"><button
                    class=\"menu-icon dark\" type=\"button\" data-toggle></button></span><strong><a
                    href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">shop</a></strong></div>
    <div id=\"responsive-menu\">
        <div class=\"top-bar-left\">
            ";
        // line 20
        $this->displayBlock('category_menu', $context, $blocks);
        // line 27
        echo "        </div>
        <div class=\"top-bar-right\">
            ";
        // line 29
        $this->displayBlock('customer_menu', $context, $blocks);
        // line 43
        echo "        </div>
    </div>
</div>

<div class=\"row column\">
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 49
            echo "        <div class=\"alert callout\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 54
            echo "        <div class=\"warning callout\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 59
            echo "        <div class=\"success callout\">
            ";
            // line 60
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</div>

";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
<div class=\"row column\">
    <ul class=\"menu\">
        <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About Us</a></li>
        <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("customer_service");
        echo "\">Customer Service</a></li>
        <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("privacy_cookie");
        echo "\">Privacy and Cookie Policy</a></li>
        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("orders_returns");
        echo "\">Orders and Returns</a></li>
        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact Us</a></li>
    </ul>
</div>

<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).foundation();
</script>
";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "</body>
</html>";
        
        $__internal_e522bfbc9865f28f701ff88748fdca50984005577315227a56173c5c80fcf492->leave($__internal_e522bfbc9865f28f701ff88748fdca50984005577315227a56173c5c80fcf492_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1082644cc4307d05a55fa8029a181abf7c0a67f22211112379af2a7aac35a849 = $this->env->getExtension("native_profiler");
        $__internal_1082644cc4307d05a55fa8029a181abf7c0a67f22211112379af2a7aac35a849->enter($__internal_1082644cc4307d05a55fa8029a181abf7c0a67f22211112379af2a7aac35a849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1082644cc4307d05a55fa8029a181abf7c0a67f22211112379af2a7aac35a849->leave($__internal_1082644cc4307d05a55fa8029a181abf7c0a67f22211112379af2a7aac35a849_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27e57ceb125e095d0f29159cecb23e9080288b9df2e436831fcf90ff0309bb2d = $this->env->getExtension("native_profiler");
        $__internal_27e57ceb125e095d0f29159cecb23e9080288b9df2e436831fcf90ff0309bb2d->enter($__internal_27e57ceb125e095d0f29159cecb23e9080288b9df2e436831fcf90ff0309bb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27e57ceb125e095d0f29159cecb23e9080288b9df2e436831fcf90ff0309bb2d->leave($__internal_27e57ceb125e095d0f29159cecb23e9080288b9df2e436831fcf90ff0309bb2d_prof);

    }

    // line 20
    public function block_category_menu($context, array $blocks = array())
    {
        $__internal_1f468f2971b680d9753d1000679674cb75022e12db445fb7ec7f647d28b715fc = $this->env->getExtension("native_profiler");
        $__internal_1f468f2971b680d9753d1000679674cb75022e12db445fb7ec7f647d28b715fc->enter($__internal_1f468f2971b680d9753d1000679674cb75022e12db445fb7ec7f647d28b715fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "category_menu"));

        // line 21
        echo "                <ul class=\"menu\">
                    <li><a href=\"#\">Women</a></li>
                    <li><a href=\"#\">Men</a></li>
                    <li><a href=\"#\">Gear</a></li>
                </ul>
            ";
        
        $__internal_1f468f2971b680d9753d1000679674cb75022e12db445fb7ec7f647d28b715fc->leave($__internal_1f468f2971b680d9753d1000679674cb75022e12db445fb7ec7f647d28b715fc_prof);

    }

    // line 29
    public function block_customer_menu($context, array $blocks = array())
    {
        $__internal_1342c03c113906acb4ffb31ab5d6dae3975829c1d42b5c402988bde1dd220142 = $this->env->getExtension("native_profiler");
        $__internal_1342c03c113906acb4ffb31ab5d6dae3975829c1d42b5c402988bde1dd220142->enter($__internal_1342c03c113906acb4ffb31ab5d6dae3975829c1d42b5c402988bde1dd220142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "customer_menu"));

        // line 30
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
        
        $__internal_1342c03c113906acb4ffb31ab5d6dae3975829c1d42b5c402988bde1dd220142->leave($__internal_1342c03c113906acb4ffb31ab5d6dae3975829c1d42b5c402988bde1dd220142_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ac107670013bec353f2461b14625580d59dca6256d4e478d5619350508b7d70 = $this->env->getExtension("native_profiler");
        $__internal_2ac107670013bec353f2461b14625580d59dca6256d4e478d5619350508b7d70->enter($__internal_2ac107670013bec353f2461b14625580d59dca6256d4e478d5619350508b7d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ac107670013bec353f2461b14625580d59dca6256d4e478d5619350508b7d70->leave($__internal_2ac107670013bec353f2461b14625580d59dca6256d4e478d5619350508b7d70_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_feb9fa5449e7ae490a5cf0b318b935ff239b4d74c45cac492642c0dfabf1c79a = $this->env->getExtension("native_profiler");
        $__internal_feb9fa5449e7ae490a5cf0b318b935ff239b4d74c45cac492642c0dfabf1c79a->enter($__internal_feb9fa5449e7ae490a5cf0b318b935ff239b4d74c45cac492642c0dfabf1c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_feb9fa5449e7ae490a5cf0b318b935ff239b4d74c45cac492642c0dfabf1c79a->leave($__internal_feb9fa5449e7ae490a5cf0b318b935ff239b4d74c45cac492642c0dfabf1c79a_prof);

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
        return array (  262 => 83,  251 => 65,  232 => 30,  226 => 29,  214 => 21,  208 => 20,  197 => 9,  185 => 7,  177 => 84,  175 => 83,  168 => 79,  164 => 78,  160 => 77,  153 => 73,  149 => 72,  145 => 71,  141 => 70,  137 => 69,  132 => 66,  130 => 65,  126 => 63,  117 => 60,  114 => 59,  109 => 58,  100 => 55,  97 => 54,  92 => 53,  83 => 50,  80 => 49,  76 => 48,  69 => 43,  67 => 29,  63 => 27,  61 => 20,  55 => 17,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  28 => 1,);
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
/*     <div class="top-bar-title"><span data-responsive-toggle="responsive-menu" data-hide-for="medium"><button*/
/*                     class="menu-icon dark" type="button" data-toggle></button></span><strong><a*/
/*                     href="{{ path('homepage') }}">shop</a></strong></div>*/
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
