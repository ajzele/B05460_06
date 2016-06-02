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
        $__internal_29b275d14aca83fdbe364ceaa360df729c067879ebb1a0e61c4b31b228f209f2 = $this->env->getExtension("native_profiler");
        $__internal_29b275d14aca83fdbe364ceaa360df729c067879ebb1a0e61c4b31b228f209f2->enter($__internal_29b275d14aca83fdbe364ceaa360df729c067879ebb1a0e61c4b31b228f209f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b275d14aca83fdbe364ceaa360df729c067879ebb1a0e61c4b31b228f209f2->leave($__internal_29b275d14aca83fdbe364ceaa360df729c067879ebb1a0e61c4b31b228f209f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8c6ba167f23ab524cd235a40d4247e975cdc6dc6ca5d4ed347a2d855eb5629d = $this->env->getExtension("native_profiler");
        $__internal_f8c6ba167f23ab524cd235a40d4247e975cdc6dc6ca5d4ed347a2d855eb5629d->enter($__internal_f8c6ba167f23ab524cd235a40d4247e975cdc6dc6ca5d4ed347a2d855eb5629d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8c6ba167f23ab524cd235a40d4247e975cdc6dc6ca5d4ed347a2d855eb5629d->leave($__internal_f8c6ba167f23ab524cd235a40d4247e975cdc6dc6ca5d4ed347a2d855eb5629d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee0d0f516b6ced73ff7fd2bbf673e78e33c6bfe0d263dbd513cb8888093d318d = $this->env->getExtension("native_profiler");
        $__internal_ee0d0f516b6ced73ff7fd2bbf673e78e33c6bfe0d263dbd513cb8888093d318d->enter($__internal_ee0d0f516b6ced73ff7fd2bbf673e78e33c6bfe0d263dbd513cb8888093d318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee0d0f516b6ced73ff7fd2bbf673e78e33c6bfe0d263dbd513cb8888093d318d->leave($__internal_ee0d0f516b6ced73ff7fd2bbf673e78e33c6bfe0d263dbd513cb8888093d318d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8158fe2083ff07ab1eb95e7e5225a77d126e4526b27d0a6ae49c9abd039c8c6a = $this->env->getExtension("native_profiler");
        $__internal_8158fe2083ff07ab1eb95e7e5225a77d126e4526b27d0a6ae49c9abd039c8c6a->enter($__internal_8158fe2083ff07ab1eb95e7e5225a77d126e4526b27d0a6ae49c9abd039c8c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8158fe2083ff07ab1eb95e7e5225a77d126e4526b27d0a6ae49c9abd039c8c6a->leave($__internal_8158fe2083ff07ab1eb95e7e5225a77d126e4526b27d0a6ae49c9abd039c8c6a_prof);

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
