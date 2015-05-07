<?php

/* CommercialAdsFilterBundle:Default:sidebar.html.twig */
class __TwigTemplate_7134250989aafaf68742771455776de86f9c2e05d7caa742b2162f8d70e22a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"titulo-menulat\"><h4>Categorías</h4></div>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "<li class=\"menu-item\"><a href=\"#\" title=\"menu\"><span class=\"item-categoria\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
           ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo " ";
            if (((((($this->getAttribute($context["category"], "id", array()) == 1) || ($this->getAttribute(            // line 5
$context["category"], "id", array()) == 7)) || ($this->getAttribute(            // line 6
$context["category"], "id", array()) == 8)) || ($this->getAttribute(            // line 7
$context["category"], "id", array()) == 15)) || ($this->getAttribute(            // line 8
$context["category"], "id", array()) == 16))) {
                echo "<span class=\"glyphicon glyphicon-ok\"></span>";
            }
            echo "</span></a>
            <ul class=\"nav nav-second-level collapse\">
                ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subcategories"]) ? $context["subcategories"] : $this->getContext($context, "subcategories")));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 11
                echo "                    ";
                if (($this->getAttribute($context["category"], "id", array()) == $this->getAttribute($this->getAttribute($context["subcategory"], "category", array()), "id", array()))) {
                    // line 12
                    echo "                        ";
                    if (((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")) && (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")))) {
                        // line 13
                        echo "                    <li><a class=\"subcat-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_city_subcat", array("region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "city" => (isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "category" => $this->getAttribute($this->getAttribute($context["subcategory"], "category", array()), "slug", array()), "subcategory" => $this->getAttribute($context["subcategory"], "slug", array()))), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\"><span class=\"item-subcategoria\" data-id-subcat=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "name", array()), "html", null, true);
                        echo " ";
                        if (((((((($this->getAttribute($context["subcategory"], "id", array()) == 3) || ($this->getAttribute(                        // line 14
$context["subcategory"], "id", array()) == 4)) || ($this->getAttribute(                        // line 15
$context["subcategory"], "id", array()) == 3)) || ($this->getAttribute(                        // line 16
$context["subcategory"], "id", array()) == 43)) || ($this->getAttribute(                        // line 17
$context["subcategory"], "id", array()) == 45)) || ($this->getAttribute($context["subcategory"], "id", array()) == 82)) || ($this->getAttribute($context["subcategory"], "id", array()) == 83))) {
                            echo "<span class=\"glyphicon glyphicon-ok\"></span>";
                        }
                        echo "</span></a></li>
                        ";
                    } elseif (                    // line 18
(isset($context["region"]) ? $context["region"] : $this->getContext($context, "region"))) {
                        // line 19
                        echo "                            <li><a class=\"subcat-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region_subcat", array("region" => (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "category" => $this->getAttribute($this->getAttribute($context["subcategory"], "category", array()), "slug", array()), "subcategory" => $this->getAttribute($context["subcategory"], "slug", array()))), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\"><span class=\"item-subcategoria\" data-id-subcat=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "name", array()), "html", null, true);
                        echo " ";
                        if (((((((($this->getAttribute($context["subcategory"], "id", array()) == 3) || ($this->getAttribute(                        // line 20
$context["subcategory"], "id", array()) == 4)) || ($this->getAttribute(                        // line 21
$context["subcategory"], "id", array()) == 3)) || ($this->getAttribute(                        // line 22
$context["subcategory"], "id", array()) == 43)) || ($this->getAttribute(                        // line 23
$context["subcategory"], "id", array()) == 45)) || ($this->getAttribute($context["subcategory"], "id", array()) == 82)) || ($this->getAttribute($context["subcategory"], "id", array()) == 83))) {
                            echo "<span class=\"glyphicon glyphicon-ok\"></span>";
                        }
                        echo "</span></a></li>
                        ";
                    } elseif ((                    // line 24
(isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")) && (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")))) {
                        // line 25
                        echo "                            <li><a class=\"subcat-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("near_coords_subcat", array("lat" => (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "lng" => (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "category" => $this->getAttribute($this->getAttribute($context["subcategory"], "category", array()), "slug", array()), "subcategory" => $this->getAttribute($context["subcategory"], "slug", array()))), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\"><span class=\"item-subcategoria\" data-id-subcat=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "name", array()), "html", null, true);
                        echo " ";
                        if (((((((($this->getAttribute($context["subcategory"], "id", array()) == 3) || ($this->getAttribute(                        // line 26
$context["subcategory"], "id", array()) == 4)) || ($this->getAttribute(                        // line 27
$context["subcategory"], "id", array()) == 3)) || ($this->getAttribute(                        // line 28
$context["subcategory"], "id", array()) == 43)) || ($this->getAttribute(                        // line 29
$context["subcategory"], "id", array()) == 45)) || ($this->getAttribute($context["subcategory"], "id", array()) == 82)) || ($this->getAttribute($context["subcategory"], "id", array()) == 83))) {
                            echo "<span class=\"glyphicon glyphicon-ok\"></span>";
                        }
                        echo "</span></a></li>
                        ";
                    } else {
                        // line 31
                        echo "                            <li><a class=\"subcat-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_subcategory", array("category" => $this->getAttribute($this->getAttribute($context["subcategory"], "category", array()), "slug", array()), "subcategory" => $this->getAttribute($context["subcategory"], "slug", array()))), "html", null, true);
                        echo "\"  title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "id", array()), "html", null, true);
                        echo "\" ><span class=\"item-subcategoria\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "name", array()), "html", null, true);
                        echo " ";
                        if (((((((($this->getAttribute($context["subcategory"], "id", array()) == 3) || ($this->getAttribute(                        // line 32
$context["subcategory"], "id", array()) == 4)) || ($this->getAttribute(                        // line 33
$context["subcategory"], "id", array()) == 3)) || ($this->getAttribute(                        // line 34
$context["subcategory"], "id", array()) == 43)) || ($this->getAttribute(                        // line 35
$context["subcategory"], "id", array()) == 45)) || ($this->getAttribute($context["subcategory"], "id", array()) == 82)) || ($this->getAttribute($context["subcategory"], "id", array()) == 83))) {
                            echo "<span class=\"glyphicon glyphicon-ok\"></span>";
                        }
                        echo "</span></a><div></div></li>
                        ";
                    }
                    // line 36
                    echo " 
                   ";
                }
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "           </ul> 
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
    }

    public function getTemplateName()
    {
        return "CommercialAdsFilterBundle:Default:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 42,  144 => 39,  138 => 38,  134 => 36,  127 => 35,  126 => 34,  125 => 33,  124 => 32,  116 => 31,  109 => 29,  108 => 28,  107 => 27,  106 => 26,  96 => 25,  94 => 24,  88 => 23,  87 => 22,  86 => 21,  85 => 20,  75 => 19,  73 => 18,  67 => 17,  66 => 16,  65 => 15,  64 => 14,  54 => 13,  51 => 12,  48 => 11,  44 => 10,  37 => 8,  36 => 7,  35 => 6,  34 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
