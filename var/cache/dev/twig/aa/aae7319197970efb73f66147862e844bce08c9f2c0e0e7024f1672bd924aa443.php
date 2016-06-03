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
        $__internal_016ad457a9101bde3f6c1d032adf9c0fc983b47f1a7733b17ccfaef7636e405a = $this->env->getExtension("native_profiler");
        $__internal_016ad457a9101bde3f6c1d032adf9c0fc983b47f1a7733b17ccfaef7636e405a->enter($__internal_016ad457a9101bde3f6c1d032adf9c0fc983b47f1a7733b17ccfaef7636e405a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016ad457a9101bde3f6c1d032adf9c0fc983b47f1a7733b17ccfaef7636e405a->leave($__internal_016ad457a9101bde3f6c1d032adf9c0fc983b47f1a7733b17ccfaef7636e405a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc59aaa533fc104844af8d131bbcde7d8718019784410f3686b365a4187ffcaf = $this->env->getExtension("native_profiler");
        $__internal_cc59aaa533fc104844af8d131bbcde7d8718019784410f3686b365a4187ffcaf->enter($__internal_cc59aaa533fc104844af8d131bbcde7d8718019784410f3686b365a4187ffcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc59aaa533fc104844af8d131bbcde7d8718019784410f3686b365a4187ffcaf->leave($__internal_cc59aaa533fc104844af8d131bbcde7d8718019784410f3686b365a4187ffcaf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d93818a66c0e4a8d98e6469faa03db97fcfde6be589419e11dc2871ffdfd1752 = $this->env->getExtension("native_profiler");
        $__internal_d93818a66c0e4a8d98e6469faa03db97fcfde6be589419e11dc2871ffdfd1752->enter($__internal_d93818a66c0e4a8d98e6469faa03db97fcfde6be589419e11dc2871ffdfd1752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d93818a66c0e4a8d98e6469faa03db97fcfde6be589419e11dc2871ffdfd1752->leave($__internal_d93818a66c0e4a8d98e6469faa03db97fcfde6be589419e11dc2871ffdfd1752_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07fa3bf34c07ab9089f4f4d14f93ae46d17de95a6d502e404e980ee476d6e7c6 = $this->env->getExtension("native_profiler");
        $__internal_07fa3bf34c07ab9089f4f4d14f93ae46d17de95a6d502e404e980ee476d6e7c6->enter($__internal_07fa3bf34c07ab9089f4f4d14f93ae46d17de95a6d502e404e980ee476d6e7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07fa3bf34c07ab9089f4f4d14f93ae46d17de95a6d502e404e980ee476d6e7c6->leave($__internal_07fa3bf34c07ab9089f4f4d14f93ae46d17de95a6d502e404e980ee476d6e7c6_prof);

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
