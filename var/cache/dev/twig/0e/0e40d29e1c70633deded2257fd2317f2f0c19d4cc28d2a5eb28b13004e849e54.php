<?php

/* AppBundle:default:customer-service.html.twig */
class __TwigTemplate_145347d233a5536a9a91e94b81162bb934e7991cd97fb8b9769427613da4bf1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:customer-service.html.twig", 1);
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
        $__internal_e44e90f3591ea58e5f6e749a344c0c8539a4769b570afba420f2ddb99f3f5b40 = $this->env->getExtension("native_profiler");
        $__internal_e44e90f3591ea58e5f6e749a344c0c8539a4769b570afba420f2ddb99f3f5b40->enter($__internal_e44e90f3591ea58e5f6e749a344c0c8539a4769b570afba420f2ddb99f3f5b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:customer-service.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e44e90f3591ea58e5f6e749a344c0c8539a4769b570afba420f2ddb99f3f5b40->leave($__internal_e44e90f3591ea58e5f6e749a344c0c8539a4769b570afba420f2ddb99f3f5b40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc08296011e05b08ccadbae7e679801d4c2d1d7b13ec75e71b433f661a858e5f = $this->env->getExtension("native_profiler");
        $__internal_fc08296011e05b08ccadbae7e679801d4c2d1d7b13ec75e71b433f661a858e5f->enter($__internal_fc08296011e05b08ccadbae7e679801d4c2d1d7b13ec75e71b433f661a858e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <h1>Customer Service</h1>
    </div>
    <div class=\"row\">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>
";
        
        $__internal_fc08296011e05b08ccadbae7e679801d4c2d1d7b13ec75e71b433f661a858e5f->leave($__internal_fc08296011e05b08ccadbae7e679801d4c2d1d7b13ec75e71b433f661a858e5f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:customer-service.html.twig";
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
/*     <div class="row">*/
/*         <h1>Customer Service</h1>*/
/*     </div>*/
/*     <div class="row">*/
/*         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
