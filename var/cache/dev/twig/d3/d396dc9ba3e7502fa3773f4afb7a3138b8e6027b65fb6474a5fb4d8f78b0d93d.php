<?php

/* AppBundle:default:about.html.twig */
class __TwigTemplate_b6fadae1e49cba89817222ce845d87044ab59d12fd8b388aaed031d0d40d48ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0745493623b8d7d7adb55b253a8fde059171d04fcbaae9b9a86d6438fd6fc8dd = $this->env->getExtension("native_profiler");
        $__internal_0745493623b8d7d7adb55b253a8fde059171d04fcbaae9b9a86d6438fd6fc8dd->enter($__internal_0745493623b8d7d7adb55b253a8fde059171d04fcbaae9b9a86d6438fd6fc8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0745493623b8d7d7adb55b253a8fde059171d04fcbaae9b9a86d6438fd6fc8dd->leave($__internal_0745493623b8d7d7adb55b253a8fde059171d04fcbaae9b9a86d6438fd6fc8dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84c0286d099b909eeef9f4a48083283e35a253c127e1fa5179df56c74fe9dbc9 = $this->env->getExtension("native_profiler");
        $__internal_84c0286d099b909eeef9f4a48083283e35a253c127e1fa5179df56c74fe9dbc9->enter($__internal_84c0286d099b909eeef9f4a48083283e35a253c127e1fa5179df56c74fe9dbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"row\">
      <h1>About Us</h1>
   </div>
   <div class=\"row\">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
   </div>
";
        
        $__internal_84c0286d099b909eeef9f4a48083283e35a253c127e1fa5179df56c74fe9dbc9->leave($__internal_84c0286d099b909eeef9f4a48083283e35a253c127e1fa5179df56c74fe9dbc9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*    <div class="row">*/
/*       <h1>About Us</h1>*/
/*    </div>*/
/*    <div class="row">*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>*/
/*    </div>*/
/* {% endblock %}*/
/* */
