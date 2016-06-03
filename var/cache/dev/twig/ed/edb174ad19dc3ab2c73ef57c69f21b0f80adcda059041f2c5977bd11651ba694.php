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
        $__internal_141e6af0b13f8b0ce1cb917a660e04f64fc679a38e97fc43393c700c31bf26a5 = $this->env->getExtension("native_profiler");
        $__internal_141e6af0b13f8b0ce1cb917a660e04f64fc679a38e97fc43393c700c31bf26a5->enter($__internal_141e6af0b13f8b0ce1cb917a660e04f64fc679a38e97fc43393c700c31bf26a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141e6af0b13f8b0ce1cb917a660e04f64fc679a38e97fc43393c700c31bf26a5->leave($__internal_141e6af0b13f8b0ce1cb917a660e04f64fc679a38e97fc43393c700c31bf26a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_61f5487886eba9b6b24ce5b999ea3c234f591c7bd972af52cd7a84203c43a9a0 = $this->env->getExtension("native_profiler");
        $__internal_61f5487886eba9b6b24ce5b999ea3c234f591c7bd972af52cd7a84203c43a9a0->enter($__internal_61f5487886eba9b6b24ce5b999ea3c234f591c7bd972af52cd7a84203c43a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["products_bestsellers"]) ? $context["products_bestsellers"] : $this->getContext($context, "products_bestsellers"))) {
            // line 6
            echo "        <h2 class=\"text-center\">Best Sellers</h2>
        <div class=\"row text-center small-up-1 medium-up-3 large-up-5\" data-equalizer data-equalize-by-row=\"true\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_bestsellers"]) ? $context["products_bestsellers"] : $this->getContext($context, "products_bestsellers")), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "                <div class=\"column\">
                    <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["product"], "img", array())), "html", null, true);
                echo "\" alt=\"missing image\"/>
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
                    <div><a class=\"small button\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "add_to_cart_url", array()), "html", null, true);
                echo "\">Add to Cart</a></div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ((isset($context["products_onsale"]) ? $context["products_onsale"] : $this->getContext($context, "products_onsale"))) {
            // line 20
            echo "        <h2 class=\"text-center\">On Sale</h2>
        <div class=\"row text-center small-up-1 medium-up-3 large-up-5\" data-equalizer data-equalize-by-row=\"true\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products_onsale"]) ? $context["products_onsale"] : $this->getContext($context, "products_onsale")), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 23
                echo "                <div class=\"column\">
                    <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["product"], "img", array())), "html", null, true);
                echo "\" alt=\"missing image\"/>
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "path", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a>
                    <div>\$";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "</div>
                    <div><a class=\"small button\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "add_to_cart_url", array()), "html", null, true);
                echo "\">Add to Cart</a></div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
    ";
        }
        // line 32
        echo "
";
        
        $__internal_61f5487886eba9b6b24ce5b999ea3c234f591c7bd972af52cd7a84203c43a9a0->leave($__internal_61f5487886eba9b6b24ce5b999ea3c234f591c7bd972af52cd7a84203c43a9a0_prof);

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
        return array (  126 => 32,  122 => 30,  113 => 27,  109 => 26,  103 => 25,  99 => 24,  96 => 23,  92 => 22,  88 => 20,  86 => 19,  83 => 18,  79 => 16,  70 => 13,  66 => 12,  60 => 11,  56 => 10,  53 => 9,  49 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if products_bestsellers %}*/
/*         <h2 class="text-center">Best Sellers</h2>*/
/*         <div class="row text-center small-up-1 medium-up-3 large-up-5" data-equalizer data-equalize-by-row="true">*/
/*             {% for product in products_bestsellers.getItems() %}*/
/*                 <div class="column">*/
/*                     <img src="{{ asset(product.img) }}" alt="missing image"/>*/
/*                     <a href="{{ product.path }}">{{ product.name }}</a>*/
/*                     <div>${{ product.price }}</div>*/
/*                     <div><a class="small button" href="{{ product.add_to_cart_url }}">Add to Cart</a></div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if products_onsale %}*/
/*         <h2 class="text-center">On Sale</h2>*/
/*         <div class="row text-center small-up-1 medium-up-3 large-up-5" data-equalizer data-equalize-by-row="true">*/
/*             {% for product in products_onsale.getItems() %}*/
/*                 <div class="column">*/
/*                     <img src="{{ asset(product.img) }}" alt="missing image"/>*/
/*                     <a href="{{ product.path }}">{{ product.name }}</a>*/
/*                     <div>${{ product.price }}</div>*/
/*                     <div><a class="small button" href="{{ product.add_to_cart_url }}">Add to Cart</a></div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
