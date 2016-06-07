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
        $__internal_b325ac02d891798f0d18188a03ce6a59a44a1dc62268123b23b8123d14d986ce = $this->env->getExtension("native_profiler");
        $__internal_b325ac02d891798f0d18188a03ce6a59a44a1dc62268123b23b8123d14d986ce->enter($__internal_b325ac02d891798f0d18188a03ce6a59a44a1dc62268123b23b8123d14d986ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:orders-returns.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b325ac02d891798f0d18188a03ce6a59a44a1dc62268123b23b8123d14d986ce->leave($__internal_b325ac02d891798f0d18188a03ce6a59a44a1dc62268123b23b8123d14d986ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf33ad13f9ea55ade5f733f015f4752dea90802bb105d4a2810eb8926bed89d = $this->env->getExtension("native_profiler");
        $__internal_4cf33ad13f9ea55ade5f733f015f4752dea90802bb105d4a2810eb8926bed89d->enter($__internal_4cf33ad13f9ea55ade5f733f015f4752dea90802bb105d4a2810eb8926bed89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"row\">
      <h1>Orders and Returns</h1>
   </div>
   <div class=\"row\">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
   </div>
";
        
        $__internal_4cf33ad13f9ea55ade5f733f015f4752dea90802bb105d4a2810eb8926bed89d->leave($__internal_4cf33ad13f9ea55ade5f733f015f4752dea90802bb105d4a2810eb8926bed89d_prof);

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
