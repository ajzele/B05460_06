<?php

/* AppBundle:default:index.html.twig */
class __TwigTemplate_555af59c0dd2e3bcbb83ea7f7c030328942163df6c1b3249c0a6e3349c52e1a2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["products_bestsellers"]) ? $context["products_bestsellers"] : null)) {
            // line 6
            echo "        <h2>Best Sellers</h2>
        <div class=\"row small-up-1 medium-up-3 large-up-5\" data-equalizer data-equalize-by-row=\"true\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_bestsellers"]) ? $context["products_bestsellers"] : null), "getItems", array(), "method"));
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
        if ((isset($context["products_onsale"]) ? $context["products_onsale"] : null)) {
            // line 19
            echo "        <h2>On Sale</h2>
        <div class=\"row small-up-1 medium-up-3 large-up-5\" data-equalizer data-equalize-by-row=\"true\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_onsale"]) ? $context["products_onsale"] : null), "getItems", array(), "method"));
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
        return array (  99 => 29,  95 => 27,  84 => 24,  80 => 22,  76 => 21,  72 => 19,  70 => 18,  67 => 17,  63 => 15,  54 => 12,  48 => 11,  44 => 9,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
