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
        $__internal_0dcb50f7671fbf0870c50841174cb8701052ef9b92c2b18fb5aafc1e764850d2 = $this->env->getExtension("native_profiler");
        $__internal_0dcb50f7671fbf0870c50841174cb8701052ef9b92c2b18fb5aafc1e764850d2->enter($__internal_0dcb50f7671fbf0870c50841174cb8701052ef9b92c2b18fb5aafc1e764850d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dcb50f7671fbf0870c50841174cb8701052ef9b92c2b18fb5aafc1e764850d2->leave($__internal_0dcb50f7671fbf0870c50841174cb8701052ef9b92c2b18fb5aafc1e764850d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2074b04772403db884410ca9c7864f031fd649151a7853ec5ced23ea2f331f7b = $this->env->getExtension("native_profiler");
        $__internal_2074b04772403db884410ca9c7864f031fd649151a7853ec5ced23ea2f331f7b->enter($__internal_2074b04772403db884410ca9c7864f031fd649151a7853ec5ced23ea2f331f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2074b04772403db884410ca9c7864f031fd649151a7853ec5ced23ea2f331f7b->leave($__internal_2074b04772403db884410ca9c7864f031fd649151a7853ec5ced23ea2f331f7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5aced89578ac2ad2ebf754bdd473a592b63b336868a93cc855a2063285bf75d = $this->env->getExtension("native_profiler");
        $__internal_e5aced89578ac2ad2ebf754bdd473a592b63b336868a93cc855a2063285bf75d->enter($__internal_e5aced89578ac2ad2ebf754bdd473a592b63b336868a93cc855a2063285bf75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5aced89578ac2ad2ebf754bdd473a592b63b336868a93cc855a2063285bf75d->leave($__internal_e5aced89578ac2ad2ebf754bdd473a592b63b336868a93cc855a2063285bf75d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81d2b214e496c372a87504090455732429c70a70003e6e2d3c0e05594df94755 = $this->env->getExtension("native_profiler");
        $__internal_81d2b214e496c372a87504090455732429c70a70003e6e2d3c0e05594df94755->enter($__internal_81d2b214e496c372a87504090455732429c70a70003e6e2d3c0e05594df94755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81d2b214e496c372a87504090455732429c70a70003e6e2d3c0e05594df94755->leave($__internal_81d2b214e496c372a87504090455732429c70a70003e6e2d3c0e05594df94755_prof);

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
