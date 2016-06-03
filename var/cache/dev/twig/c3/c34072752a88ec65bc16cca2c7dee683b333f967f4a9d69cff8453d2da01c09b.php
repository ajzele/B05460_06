<?php

/* AppBundle:default:privacy-cookie.html.twig */
class __TwigTemplate_5ed301b3c9820166467115fdbf8778e8e130798db0d677d9add48696d8c29542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:privacy-cookie.html.twig", 1);
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
        $__internal_fc129c998afbf609b18fdf878a2fae32a5671fd0394af4eaecff272fbd8d2093 = $this->env->getExtension("native_profiler");
        $__internal_fc129c998afbf609b18fdf878a2fae32a5671fd0394af4eaecff272fbd8d2093->enter($__internal_fc129c998afbf609b18fdf878a2fae32a5671fd0394af4eaecff272fbd8d2093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:privacy-cookie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc129c998afbf609b18fdf878a2fae32a5671fd0394af4eaecff272fbd8d2093->leave($__internal_fc129c998afbf609b18fdf878a2fae32a5671fd0394af4eaecff272fbd8d2093_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c2d49f9858f9b76040b58f3920edf5ab4691aa74236c321e1f2d11ca43b0c89 = $this->env->getExtension("native_profiler");
        $__internal_8c2d49f9858f9b76040b58f3920edf5ab4691aa74236c321e1f2d11ca43b0c89->enter($__internal_8c2d49f9858f9b76040b58f3920edf5ab4691aa74236c321e1f2d11ca43b0c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"row\">
      <h1>Privacy and Cookie Policy</h1>
   </div>
   <div class=\"row\">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
   </div>
";
        
        $__internal_8c2d49f9858f9b76040b58f3920edf5ab4691aa74236c321e1f2d11ca43b0c89->leave($__internal_8c2d49f9858f9b76040b58f3920edf5ab4691aa74236c321e1f2d11ca43b0c89_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:privacy-cookie.html.twig";
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
/*    <div class="row">*/
/*       <h1>Privacy and Cookie Policy</h1>*/
/*    </div>*/
/*    <div class="row">*/
/*       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>*/
/*    </div>*/
/* {% endblock %}*/
/* */
