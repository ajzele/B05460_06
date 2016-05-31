<?php

/* default/about.html.twig */
class __TwigTemplate_6fe6a6e344484cdb2ddfaf1e5159db52a0f5415d132151f428770e3dd3693102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/about.html.twig", 1);
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
        $__internal_16b3a801fc07508dbb9ed3aefdeaf2e5f68d74e2ee490d16ad7a6080f6645769 = $this->env->getExtension("native_profiler");
        $__internal_16b3a801fc07508dbb9ed3aefdeaf2e5f68d74e2ee490d16ad7a6080f6645769->enter($__internal_16b3a801fc07508dbb9ed3aefdeaf2e5f68d74e2ee490d16ad7a6080f6645769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b3a801fc07508dbb9ed3aefdeaf2e5f68d74e2ee490d16ad7a6080f6645769->leave($__internal_16b3a801fc07508dbb9ed3aefdeaf2e5f68d74e2ee490d16ad7a6080f6645769_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c88cf4731cf62cf1facbd7ae81289bcca2dc3b5cb0f793802283226294251341 = $this->env->getExtension("native_profiler");
        $__internal_c88cf4731cf62cf1facbd7ae81289bcca2dc3b5cb0f793802283226294251341->enter($__internal_c88cf4731cf62cf1facbd7ae81289bcca2dc3b5cb0f793802283226294251341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   app/Resources/views/default/about.html.twig
";
        
        $__internal_c88cf4731cf62cf1facbd7ae81289bcca2dc3b5cb0f793802283226294251341->leave($__internal_c88cf4731cf62cf1facbd7ae81289bcca2dc3b5cb0f793802283226294251341_prof);

    }

    public function getTemplateName()
    {
        return "default/about.html.twig";
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
/*    app/Resources/views/default/about.html.twig*/
/* {% endblock %}*/
/* */
