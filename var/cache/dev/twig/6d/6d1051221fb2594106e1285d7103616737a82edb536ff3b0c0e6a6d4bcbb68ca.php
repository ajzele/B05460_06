<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5656dd8c73b2a81a72abf213b230e6bebfa9ab903d49f059f08b3e880e334dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34c4762065b247c7c25dc4cf834b9114779388e188f45f89d1ff8d74a2276275 = $this->env->getExtension("native_profiler");
        $__internal_34c4762065b247c7c25dc4cf834b9114779388e188f45f89d1ff8d74a2276275->enter($__internal_34c4762065b247c7c25dc4cf834b9114779388e188f45f89d1ff8d74a2276275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c4762065b247c7c25dc4cf834b9114779388e188f45f89d1ff8d74a2276275->leave($__internal_34c4762065b247c7c25dc4cf834b9114779388e188f45f89d1ff8d74a2276275_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d984d51e23b008011aca2f34fd442822e684ba7cfcacbe4cca0002a3dc6b3b5 = $this->env->getExtension("native_profiler");
        $__internal_1d984d51e23b008011aca2f34fd442822e684ba7cfcacbe4cca0002a3dc6b3b5->enter($__internal_1d984d51e23b008011aca2f34fd442822e684ba7cfcacbe4cca0002a3dc6b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1d984d51e23b008011aca2f34fd442822e684ba7cfcacbe4cca0002a3dc6b3b5->leave($__internal_1d984d51e23b008011aca2f34fd442822e684ba7cfcacbe4cca0002a3dc6b3b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4afb420c416f63566b794eab5e98f727ae6914bb6637bbe907c691e00ff4f3b6 = $this->env->getExtension("native_profiler");
        $__internal_4afb420c416f63566b794eab5e98f727ae6914bb6637bbe907c691e00ff4f3b6->enter($__internal_4afb420c416f63566b794eab5e98f727ae6914bb6637bbe907c691e00ff4f3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4afb420c416f63566b794eab5e98f727ae6914bb6637bbe907c691e00ff4f3b6->leave($__internal_4afb420c416f63566b794eab5e98f727ae6914bb6637bbe907c691e00ff4f3b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad81890f860a605e39b5dba7b5b1e15fa8a85f84001fe816e5001070cbcd0ace = $this->env->getExtension("native_profiler");
        $__internal_ad81890f860a605e39b5dba7b5b1e15fa8a85f84001fe816e5001070cbcd0ace->enter($__internal_ad81890f860a605e39b5dba7b5b1e15fa8a85f84001fe816e5001070cbcd0ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ad81890f860a605e39b5dba7b5b1e15fa8a85f84001fe816e5001070cbcd0ace->leave($__internal_ad81890f860a605e39b5dba7b5b1e15fa8a85f84001fe816e5001070cbcd0ace_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
