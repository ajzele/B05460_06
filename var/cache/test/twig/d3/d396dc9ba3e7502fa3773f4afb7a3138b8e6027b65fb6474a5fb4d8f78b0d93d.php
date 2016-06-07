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
        $__internal_7f83ef40cbdb66e971a1e3c4b3ee20fece9913f24773b7fb237a7e3e13a9d4b1 = $this->env->getExtension("native_profiler");
        $__internal_7f83ef40cbdb66e971a1e3c4b3ee20fece9913f24773b7fb237a7e3e13a9d4b1->enter($__internal_7f83ef40cbdb66e971a1e3c4b3ee20fece9913f24773b7fb237a7e3e13a9d4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f83ef40cbdb66e971a1e3c4b3ee20fece9913f24773b7fb237a7e3e13a9d4b1->leave($__internal_7f83ef40cbdb66e971a1e3c4b3ee20fece9913f24773b7fb237a7e3e13a9d4b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_246ca9ab13f036865265ad16d3f53bee021b1f65e60810e173b95675ad089d2f = $this->env->getExtension("native_profiler");
        $__internal_246ca9ab13f036865265ad16d3f53bee021b1f65e60810e173b95675ad089d2f->enter($__internal_246ca9ab13f036865265ad16d3f53bee021b1f65e60810e173b95675ad089d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"row\">
      <h1>About Us</h1>
   </div>
   <div class=\"row\">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
   </div>
";
        
        $__internal_246ca9ab13f036865265ad16d3f53bee021b1f65e60810e173b95675ad089d2f->leave($__internal_246ca9ab13f036865265ad16d3f53bee021b1f65e60810e173b95675ad089d2f_prof);

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
