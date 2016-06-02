<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_8260a9e801f672089ecae485544482d77fb919c1311a8b4b01660a59fa57d01d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:default:index.html.twig", 1);
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
        $__internal_8d75c7d289333c0a915d5a58b6c4ac60b9ac65bc9b30b9d07db31f4aa61acea0 = $this->env->getExtension("native_profiler");
        $__internal_8d75c7d289333c0a915d5a58b6c4ac60b9ac65bc9b30b9d07db31f4aa61acea0->enter($__internal_8d75c7d289333c0a915d5a58b6c4ac60b9ac65bc9b30b9d07db31f4aa61acea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d75c7d289333c0a915d5a58b6c4ac60b9ac65bc9b30b9d07db31f4aa61acea0->leave($__internal_8d75c7d289333c0a915d5a58b6c4ac60b9ac65bc9b30b9d07db31f4aa61acea0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bbaa638665b3cef9653eb06e3d3911d31fe09e821ad67033c79ff07cf49d1b2 = $this->env->getExtension("native_profiler");
        $__internal_5bbaa638665b3cef9653eb06e3d3911d31fe09e821ad67033c79ff07cf49d1b2->enter($__internal_5bbaa638665b3cef9653eb06e3d3911d31fe09e821ad67033c79ff07cf49d1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["products_bestsellers"]) ? $context["products_bestsellers"] : $this->getContext($context, "products_bestsellers"))) {
            // line 6
            echo "        <h2>Best Sellers</h2>
        <div class=\"row small-up-1 medium-up-3 large-up-5\" data-equalizer data-equalize-by-row=\"true\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_bestsellers"]) ? $context["products_bestsellers"] : $this->getContext($context, "products_bestsellers")), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "                <div class=\"column\">
                    <img src=\"#\" alt=\"\"/>
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a>
                    <div>\$";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "</div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if ((isset($context["products_onsale"]) ? $context["products_onsale"] : $this->getContext($context, "products_onsale"))) {
            // line 19
            echo "        <h2>On Sale</h2>
        <div class=\"row small-up-1 medium-up-3 large-up-5\" data-equalizer data-equalize-by-row=\"true\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_onsale"]) ? $context["products_onsale"] : $this->getContext($context, "products_onsale")), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "                <div class=\"column\">
                    <img src=\"#\" alt=\"\"/>
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
    ";
        }
        // line 29
        echo "
";
        
        $__internal_5bbaa638665b3cef9653eb06e3d3911d31fe09e821ad67033c79ff07cf49d1b2->leave($__internal_5bbaa638665b3cef9653eb06e3d3911d31fe09e821ad67033c79ff07cf49d1b2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  104 => 27,  93 => 24,  89 => 22,  85 => 21,  81 => 19,  79 => 18,  76 => 17,  72 => 15,  63 => 12,  57 => 11,  53 => 9,  49 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if products_bestsellers %}*/
/*         <h2>Best Sellers</h2>*/
/*         <div class="row small-up-1 medium-up-3 large-up-5" data-equalizer data-equalize-by-row="true">*/
/*             {% for product in products_bestsellers.getItems() %}*/
/*                 <div class="column">*/
/*                     <img src="#" alt=""/>*/
/*                     <a href="{{ product.path }}">{{ product.name }}</a>*/
/*                     <div>${{ product.price }}</div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if products_onsale %}*/
/*         <h2>On Sale</h2>*/
/*         <div class="row small-up-1 medium-up-3 large-up-5" data-equalizer data-equalize-by-row="true">*/
/*             {% for product in products_onsale.getItems() %}*/
/*                 <div class="column">*/
/*                     <img src="#" alt=""/>*/
/*                     <a href="{{ product.path }}">{{ product.name }}</a>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
