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
        $__internal_b79ec9549dfc84d4d365deb190b6ea4f1bc5b372a989478a17e1947a014134f9 = $this->env->getExtension("native_profiler");
        $__internal_b79ec9549dfc84d4d365deb190b6ea4f1bc5b372a989478a17e1947a014134f9->enter($__internal_b79ec9549dfc84d4d365deb190b6ea4f1bc5b372a989478a17e1947a014134f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79ec9549dfc84d4d365deb190b6ea4f1bc5b372a989478a17e1947a014134f9->leave($__internal_b79ec9549dfc84d4d365deb190b6ea4f1bc5b372a989478a17e1947a014134f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37158ee8da54905e7fa8c0f0aee4022e81d8669d14341966870533f4784c403f = $this->env->getExtension("native_profiler");
        $__internal_37158ee8da54905e7fa8c0f0aee4022e81d8669d14341966870533f4784c403f->enter($__internal_37158ee8da54905e7fa8c0f0aee4022e81d8669d14341966870533f4784c403f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37158ee8da54905e7fa8c0f0aee4022e81d8669d14341966870533f4784c403f->leave($__internal_37158ee8da54905e7fa8c0f0aee4022e81d8669d14341966870533f4784c403f_prof);

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
