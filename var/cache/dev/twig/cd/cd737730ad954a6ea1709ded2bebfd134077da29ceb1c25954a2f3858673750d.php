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
        $__internal_f70dab5d6b516cf2c12ab229e165487fc994d7df2657c1bd325bf0d552e0d2b4 = $this->env->getExtension("native_profiler");
        $__internal_f70dab5d6b516cf2c12ab229e165487fc994d7df2657c1bd325bf0d552e0d2b4->enter($__internal_f70dab5d6b516cf2c12ab229e165487fc994d7df2657c1bd325bf0d552e0d2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/privacy-cookie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70dab5d6b516cf2c12ab229e165487fc994d7df2657c1bd325bf0d552e0d2b4->leave($__internal_f70dab5d6b516cf2c12ab229e165487fc994d7df2657c1bd325bf0d552e0d2b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44dfa9a633a3e3de7d5f6c293a5f4b645c04a28568c5a1c35ff37acf5240fff = $this->env->getExtension("native_profiler");
        $__internal_e44dfa9a633a3e3de7d5f6c293a5f4b645c04a28568c5a1c35ff37acf5240fff->enter($__internal_e44dfa9a633a3e3de7d5f6c293a5f4b645c04a28568c5a1c35ff37acf5240fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   app/Resources/views/default/privacy-cookie.html.twig
";
        
        $__internal_e44dfa9a633a3e3de7d5f6c293a5f4b645c04a28568c5a1c35ff37acf5240fff->leave($__internal_e44dfa9a633a3e3de7d5f6c293a5f4b645c04a28568c5a1c35ff37acf5240fff_prof);

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
