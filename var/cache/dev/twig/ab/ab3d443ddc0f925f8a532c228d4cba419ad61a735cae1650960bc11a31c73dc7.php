<?php

/* default/index.html.twig */
class __TwigTemplate_1780f9c81e68c7699bd8985d94bbdfae8c31561ee5c1a8c900305bf821b1b4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_3199499cc8c7a7510a374b742b50829215ea8ecb77ecb48c9c48d236cbf48961 = $this->env->getExtension("native_profiler");
        $__internal_3199499cc8c7a7510a374b742b50829215ea8ecb77ecb48c9c48d236cbf48961->enter($__internal_3199499cc8c7a7510a374b742b50829215ea8ecb77ecb48c9c48d236cbf48961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3199499cc8c7a7510a374b742b50829215ea8ecb77ecb48c9c48d236cbf48961->leave($__internal_3199499cc8c7a7510a374b742b50829215ea8ecb77ecb48c9c48d236cbf48961_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c555afc81c142866abb13aac27e3c1cf83de62259f3fae5384047db6c6b5ae84 = $this->env->getExtension("native_profiler");
        $__internal_c555afc81c142866abb13aac27e3c1cf83de62259f3fae5384047db6c6b5ae84->enter($__internal_c555afc81c142866abb13aac27e3c1cf83de62259f3fae5384047db6c6b5ae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   app/Resources/views/default/index.html.twig
";
        
        $__internal_c555afc81c142866abb13aac27e3c1cf83de62259f3fae5384047db6c6b5ae84->leave($__internal_c555afc81c142866abb13aac27e3c1cf83de62259f3fae5384047db6c6b5ae84_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/*    app/Resources/views/default/index.html.twig*/
/* {% endblock %}*/
/* */
