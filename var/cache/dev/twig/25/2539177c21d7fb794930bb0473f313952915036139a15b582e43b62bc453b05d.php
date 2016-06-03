<?php

/* AppBundle:default:contact.html.twig */
class __TwigTemplate_7c459cc93e82f127e8ad89649230639bcb6c12946462880961a466d2be25b601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:contact.html.twig", 1);
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
        $__internal_3051ccf0ded370e1a212e0fbdb6f0f89bbfe57382244488db5f23f1e24f45f3c = $this->env->getExtension("native_profiler");
        $__internal_3051ccf0ded370e1a212e0fbdb6f0f89bbfe57382244488db5f23f1e24f45f3c->enter($__internal_3051ccf0ded370e1a212e0fbdb6f0f89bbfe57382244488db5f23f1e24f45f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3051ccf0ded370e1a212e0fbdb6f0f89bbfe57382244488db5f23f1e24f45f3c->leave($__internal_3051ccf0ded370e1a212e0fbdb6f0f89bbfe57382244488db5f23f1e24f45f3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ff96f63f81e0001de03b603f6530ef81f2b5d89c12d362864e207df513701a = $this->env->getExtension("native_profiler");
        $__internal_56ff96f63f81e0001de03b603f6530ef81f2b5d89c12d362864e207df513701a->enter($__internal_56ff96f63f81e0001de03b603f6530ef81f2b5d89c12d362864e207df513701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   <div class=\"row\">
      <h1>Contact Us</h1>
   </div>

   <div class=\"row\">
      ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
      ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
   </div>
";
        
        $__internal_56ff96f63f81e0001de03b603f6530ef81f2b5d89c12d362864e207df513701a->leave($__internal_56ff96f63f81e0001de03b603f6530ef81f2b5d89c12d362864e207df513701a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*    <div class="row">*/
/*       <h1>Contact Us</h1>*/
/*    </div>*/
/* */
/*    <div class="row">*/
/*       {{ form_start(form) }}*/
/*       {{ form_widget(form) }}*/
/*       {{ form_end(form) }}*/
/*    </div>*/
/* {% endblock %}*/
/* */
