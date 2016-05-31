<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4520c3b1b95dd0bd819c3bbe4f13a6aef1d26e0a118b750da2dc7c04d572b054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fbf47d449523d49732ec14c2808007fb134abe0634d723baed96831b40e141f = $this->env->getExtension("native_profiler");
        $__internal_6fbf47d449523d49732ec14c2808007fb134abe0634d723baed96831b40e141f->enter($__internal_6fbf47d449523d49732ec14c2808007fb134abe0634d723baed96831b40e141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbf47d449523d49732ec14c2808007fb134abe0634d723baed96831b40e141f->leave($__internal_6fbf47d449523d49732ec14c2808007fb134abe0634d723baed96831b40e141f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97f634b539c7f46778fe7ddd20714d493e7fd69d6e30f7e2a64a32e9306e3469 = $this->env->getExtension("native_profiler");
        $__internal_97f634b539c7f46778fe7ddd20714d493e7fd69d6e30f7e2a64a32e9306e3469->enter($__internal_97f634b539c7f46778fe7ddd20714d493e7fd69d6e30f7e2a64a32e9306e3469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97f634b539c7f46778fe7ddd20714d493e7fd69d6e30f7e2a64a32e9306e3469->leave($__internal_97f634b539c7f46778fe7ddd20714d493e7fd69d6e30f7e2a64a32e9306e3469_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6036bf5ee54797c29eaa1e058e1ece0265c0f178fbf2dfeb335bbd681e8a790 = $this->env->getExtension("native_profiler");
        $__internal_b6036bf5ee54797c29eaa1e058e1ece0265c0f178fbf2dfeb335bbd681e8a790->enter($__internal_b6036bf5ee54797c29eaa1e058e1ece0265c0f178fbf2dfeb335bbd681e8a790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6036bf5ee54797c29eaa1e058e1ece0265c0f178fbf2dfeb335bbd681e8a790->leave($__internal_b6036bf5ee54797c29eaa1e058e1ece0265c0f178fbf2dfeb335bbd681e8a790_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66ee10be6734ff4cc3252d855cd95d54b71a020403699e57b2511051ad80a548 = $this->env->getExtension("native_profiler");
        $__internal_66ee10be6734ff4cc3252d855cd95d54b71a020403699e57b2511051ad80a548->enter($__internal_66ee10be6734ff4cc3252d855cd95d54b71a020403699e57b2511051ad80a548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66ee10be6734ff4cc3252d855cd95d54b71a020403699e57b2511051ad80a548->leave($__internal_66ee10be6734ff4cc3252d855cd95d54b71a020403699e57b2511051ad80a548_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
