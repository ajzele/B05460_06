<?php

/* AppBundle:default:orders-returns.html.twig */
class __TwigTemplate_ff5400f9292cda35650c31627e611ad8b6e8c49201bd112d74759287fc456757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:orders-returns.html.twig", 1);
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
        $__internal_0af957fecafdc35a345acafdfd933bf192803303a93725ea24b7283e694cbfc7 = $this->env->getExtension("native_profiler");
        $__internal_0af957fecafdc35a345acafdfd933bf192803303a93725ea24b7283e694cbfc7->enter($__internal_0af957fecafdc35a345acafdfd933bf192803303a93725ea24b7283e694cbfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:orders-returns.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0af957fecafdc35a345acafdfd933bf192803303a93725ea24b7283e694cbfc7->leave($__internal_0af957fecafdc35a345acafdfd933bf192803303a93725ea24b7283e694cbfc7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f289df721a9f98b458274f10a6f98a9790f8f5b5f71197c410402053e7b93d6a = $this->env->getExtension("native_profiler");
        $__internal_f289df721a9f98b458274f10a6f98a9790f8f5b5f71197c410402053e7b93d6a->enter($__internal_f289df721a9f98b458274f10a6f98a9790f8f5b5f71197c410402053e7b93d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"row\">
      <h1>Orders and Returns</h1>
   </div>
   <div class=\"row\">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
   </div>
";
        
        $__internal_f289df721a9f98b458274f10a6f98a9790f8f5b5f71197c410402053e7b93d6a->leave($__internal_f289df721a9f98b458274f10a6f98a9790f8f5b5f71197c410402053e7b93d6a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:orders-returns.html.twig";
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
/*       <h1>Orders and Returns</h1>*/
/*    </div>*/
/*    <div class="row">*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>*/
/*    </div>*/
/* {% endblock %}*/
/* */
