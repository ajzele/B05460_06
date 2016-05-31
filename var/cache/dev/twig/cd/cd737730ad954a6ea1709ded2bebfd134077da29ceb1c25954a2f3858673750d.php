<?php

/* default/privacy-cookie.html.twig */
class __TwigTemplate_798398b8110f9fe6a82c0e4b0daa276e175dec0de4f38993b100d96f842257f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/privacy-cookie.html.twig", 1);
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
        $__internal_cfeaa082a592234d62ba4c3818d512c09c497e04de933863a39c86bf8d405211 = $this->env->getExtension("native_profiler");
        $__internal_cfeaa082a592234d62ba4c3818d512c09c497e04de933863a39c86bf8d405211->enter($__internal_cfeaa082a592234d62ba4c3818d512c09c497e04de933863a39c86bf8d405211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/privacy-cookie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfeaa082a592234d62ba4c3818d512c09c497e04de933863a39c86bf8d405211->leave($__internal_cfeaa082a592234d62ba4c3818d512c09c497e04de933863a39c86bf8d405211_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa0ff4dab3be12a5228ea14b471e743b1276fd526015e0d675de9666bdacebfc = $this->env->getExtension("native_profiler");
        $__internal_aa0ff4dab3be12a5228ea14b471e743b1276fd526015e0d675de9666bdacebfc->enter($__internal_aa0ff4dab3be12a5228ea14b471e743b1276fd526015e0d675de9666bdacebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   app/Resources/views/default/privacy-cookie.html.twig
";
        
        $__internal_aa0ff4dab3be12a5228ea14b471e743b1276fd526015e0d675de9666bdacebfc->leave($__internal_aa0ff4dab3be12a5228ea14b471e743b1276fd526015e0d675de9666bdacebfc_prof);

    }

    public function getTemplateName()
    {
        return "default/privacy-cookie.html.twig";
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
/*    app/Resources/views/default/privacy-cookie.html.twig*/
/* {% endblock %}*/
/* */
