<?php

/* default/orders-returns.html.twig */
class __TwigTemplate_a1b747ba202dc691448a70eb802ec063c4cfa7a17be745d1de26398ea0fc8cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/orders-returns.html.twig", 1);
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
        $__internal_9f41ea57aca83c33d56910ce5e67c176187dc24da57f0b26c1495ae86cfed0d2 = $this->env->getExtension("native_profiler");
        $__internal_9f41ea57aca83c33d56910ce5e67c176187dc24da57f0b26c1495ae86cfed0d2->enter($__internal_9f41ea57aca83c33d56910ce5e67c176187dc24da57f0b26c1495ae86cfed0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/orders-returns.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f41ea57aca83c33d56910ce5e67c176187dc24da57f0b26c1495ae86cfed0d2->leave($__internal_9f41ea57aca83c33d56910ce5e67c176187dc24da57f0b26c1495ae86cfed0d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c6c61f2773f6c224627d269b14c173980543a53c583de20f055b3f4615ff9ba = $this->env->getExtension("native_profiler");
        $__internal_0c6c61f2773f6c224627d269b14c173980543a53c583de20f055b3f4615ff9ba->enter($__internal_0c6c61f2773f6c224627d269b14c173980543a53c583de20f055b3f4615ff9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   app/Resources/views/default/orders-returns.html.twig
";
        
        $__internal_0c6c61f2773f6c224627d269b14c173980543a53c583de20f055b3f4615ff9ba->leave($__internal_0c6c61f2773f6c224627d269b14c173980543a53c583de20f055b3f4615ff9ba_prof);

    }

    public function getTemplateName()
    {
        return "default/orders-returns.html.twig";
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
/*    app/Resources/views/default/orders-returns.html.twig*/
/* {% endblock %}*/
/* */
