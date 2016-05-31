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
        $__internal_b002cbfd3823daaf3ab598981c616541ec712be50d198f7a735e1d229462fe56 = $this->env->getExtension("native_profiler");
        $__internal_b002cbfd3823daaf3ab598981c616541ec712be50d198f7a735e1d229462fe56->enter($__internal_b002cbfd3823daaf3ab598981c616541ec712be50d198f7a735e1d229462fe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b002cbfd3823daaf3ab598981c616541ec712be50d198f7a735e1d229462fe56->leave($__internal_b002cbfd3823daaf3ab598981c616541ec712be50d198f7a735e1d229462fe56_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea3567dde6b0045bb3edf96e6d51c3e53ea64a07a1b79805d95b74f8cdff5c54 = $this->env->getExtension("native_profiler");
        $__internal_ea3567dde6b0045bb3edf96e6d51c3e53ea64a07a1b79805d95b74f8cdff5c54->enter($__internal_ea3567dde6b0045bb3edf96e6d51c3e53ea64a07a1b79805d95b74f8cdff5c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   app/Resources/views/default/about.html.twig
";
        
        $__internal_ea3567dde6b0045bb3edf96e6d51c3e53ea64a07a1b79805d95b74f8cdff5c54->leave($__internal_ea3567dde6b0045bb3edf96e6d51c3e53ea64a07a1b79805d95b74f8cdff5c54_prof);

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
