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
        <strong>shop.app</strong>
    </div>
    <div id=\"responsive-menu\">
        <div class=\"top-bar-left\">
            <ul class=\"dropdown menu\" data-dropdown-menu>
                <li>
                    <a href=\"#\">One</a>
                    <ul class=\"menu vertical\">
                        <li><a href=\"#\">One</a></li>
                        <li><a href=\"#\">Two</a></li>
                        <li><a href=\"#\">Three</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Two</a></li>
                <li><a href=\"#\">Three</a></li>
            </ul>
        </div>
        <div class=\"top-bar-right\">
            <ul class=\"menu\">
                <li><a href=\"#\">Welcome Branko</a></li>
                <li><a href=\"#\">logout</a></li>
            </ul>
        </div>
    </div>
</div>


<h1>Hello, world!</h1>


";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).foundation();
</script>
";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
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

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 56
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
        return array (  123 => 56,  118 => 49,  113 => 9,  107 => 7,  102 => 57,  100 => 56,  93 => 52,  89 => 51,  84 => 50,  82 => 49,  41 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
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
/*         <strong>shop.app</strong>*/
/*     </div>*/
/*     <div id="responsive-menu">*/
/*         <div class="top-bar-left">*/
/*             <ul class="dropdown menu" data-dropdown-menu>*/
/*                 <li>*/
/*                     <a href="#">One</a>*/
/*                     <ul class="menu vertical">*/
/*                         <li><a href="#">One</a></li>*/
/*                         <li><a href="#">Two</a></li>*/
/*                         <li><a href="#">Three</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li><a href="#">Two</a></li>*/
/*                 <li><a href="#">Three</a></li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="top-bar-right">*/
/*             <ul class="menu">*/
/*                 <li><a href="#">Welcome Branko</a></li>*/
/*                 <li><a href="#">logout</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <h1>Hello, world!</h1>*/
/* */
/* */
/* {% block body %}{% endblock %}*/
/* <script src="{{ asset('js/vendor/jquery.js') }}"></script>*/
/* <script src="{{ asset('js/vendor/what-input.js') }}"></script>*/
/* <script src="{{ asset('js/vendor/foundation.js') }}"></script>*/
/* <script>*/
/*     $(document).foundation();*/
/* </script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
