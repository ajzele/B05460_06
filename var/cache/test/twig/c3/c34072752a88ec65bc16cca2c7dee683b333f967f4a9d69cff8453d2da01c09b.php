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
        $__internal_d33b7f7dc9cb168e9cf348e6b140185ed29783d2b123ac8fc097117c9f08b269 = $this->env->getExtension("native_profiler");
        $__internal_d33b7f7dc9cb168e9cf348e6b140185ed29783d2b123ac8fc097117c9f08b269->enter($__internal_d33b7f7dc9cb168e9cf348e6b140185ed29783d2b123ac8fc097117c9f08b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:privacy-cookie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d33b7f7dc9cb168e9cf348e6b140185ed29783d2b123ac8fc097117c9f08b269->leave($__internal_d33b7f7dc9cb168e9cf348e6b140185ed29783d2b123ac8fc097117c9f08b269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da52c179c23b625b1a18652435eb16c7187fd3d01c33b36df930f01cdd6ced1 = $this->env->getExtension("native_profiler");
        $__internal_8da52c179c23b625b1a18652435eb16c7187fd3d01c33b36df930f01cdd6ced1->enter($__internal_8da52c179c23b625b1a18652435eb16c7187fd3d01c33b36df930f01cdd6ced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"row\">
      <h1>Privacy and Cookie Policy</h1>
   </div>
   <div class=\"row\">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
   </div>
";
        
        $__internal_8da52c179c23b625b1a18652435eb16c7187fd3d01c33b36df930f01cdd6ced1->leave($__internal_8da52c179c23b625b1a18652435eb16c7187fd3d01c33b36df930f01cdd6ced1_prof);

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
