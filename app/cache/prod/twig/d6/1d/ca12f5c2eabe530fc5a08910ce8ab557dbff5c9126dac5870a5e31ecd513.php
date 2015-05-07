<?php

/* :includes:show-filters.html.twig */
class __TwigTemplate_d61dca12f5c2eabe530fc5a08910ce8ab557dbff5c9126dac5870a5e31ecd513 extends Twig_Template
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
        echo "<div class=\" col-filtros\"> 
        ";
        // line 2
        if ((((((isset($context["regionSelected"]) ? $context["regionSelected"] : null) || (isset($context["citySelected"]) ? $context["citySelected"] : null)) || (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) || (isset($context["address"]) ? $context["address"] : null)) || (isset($context["querySearch"]) ? $context["querySearch"] : null))) {
            // line 3
            echo "        <ul class=\"filtros-container-show col-xs-12\">
            ";
            // line 4
            if ((isset($context["address"]) ? $context["address"] : null)) {
                echo "<div>Filtros por mi ubicación</div>";
            } else {
                echo "<div>Filtros</div>";
            }
            // line 5
            echo "            
            <div class=\"filtros-container\">
                       ";
            // line 7
            if ((isset($context["address"]) ? $context["address"] : null)) {
                // line 8
                echo "                       <li class=\"filtro\"><span class=\"filtro-address\">";
                echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html", null, true);
                echo "</span><a href=\"";
                echo $this->env->getExtension('routing')->getPath("main");
                echo "\"><span>X</span></a></li>
                       ";
            }
            // line 10
            echo "                       ";
            if ((isset($context["querySearch"]) ? $context["querySearch"] : null)) {
                // line 11
                echo "                       <li class=\"filtro\"><span class=\"filtro-querySearch\">";
                echo twig_escape_filter($this->env, (isset($context["querySearch"]) ? $context["querySearch"] : null), "html", null, true);
                echo "</span><a href=\"";
                if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_subcategories", array("category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : null), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null))), "html", null, true);
                } else {
                    echo $this->env->getExtension('routing')->getPath("main");
                }
                echo "\"><span>X</span></a></li>
                       ";
            }
            // line 13
            echo "                       ";
            if ((isset($context["regionSelected"]) ? $context["regionSelected"] : null)) {
                // line 14
                echo "                            <li class=\"filtro\"><span class=\"filtro-prov-nom\">";
                echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : null), "html", null, true);
                echo "</span><a href=\"";
                if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_subcategory", array("category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : null), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null))), "html", null, true);
                } else {
                    echo $this->env->getExtension('routing')->getPath("main");
                }
                echo "\"><span>X</span></a></li>
                       ";
            }
            // line 16
            echo "                       ";
            if ((isset($context["citySelected"]) ? $context["citySelected"] : null)) {
                // line 17
                echo "                            <li class=\"filtro\"><span class=\"filtro-local-nom\">";
                echo twig_escape_filter($this->env, (isset($context["city_name"]) ? $context["city_name"] : null), "html", null, true);
                echo "</span><a href=\"";
                if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region_subcat", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null), "category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : null), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null))), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null))), "html", null, true);
                }
                echo "\"><span>X</span></a></li>
                       ";
            }
            // line 19
            echo "                       ";
            if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
                // line 20
                echo "                            <li class=\"filtro\"><span class=\"filtro-subcat-nom\">";
                echo twig_escape_filter($this->env, (isset($context["subcat_name"]) ? $context["subcat_name"] : null), "html", null, true);
                echo "</span><a href=\"";
                if (((isset($context["lat"]) ? $context["lat"] : null) && (isset($context["lng"]) ? $context["lng"] : null))) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("near_coords", array("lat" => (isset($context["lat"]) ? $context["lat"] : null), "lng" => (isset($context["lng"]) ? $context["lng"] : null))), "html", null, true);
                } elseif ((isset($context["citySelected"]) ? $context["citySelected"] : null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_city", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null), "city" => (isset($context["citySelected"]) ? $context["citySelected"] : null))), "html", null, true);
                } elseif ((isset($context["regionSelected"]) ? $context["regionSelected"] : null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null))), "html", null, true);
                } else {
                    echo $this->env->getExtension('routing')->getPath("main");
                }
                echo "\"><span>X</span></a></li>
                       ";
            }
            // line 22
            echo "             </div>
        </ul>
        ";
        }
        // line 25
        echo "        ";
        // line 38
        echo "</div>";
    }

    public function getTemplateName()
    {
        return ":includes:show-filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  116 => 25,  111 => 22,  95 => 20,  92 => 19,  80 => 17,  77 => 16,  65 => 14,  62 => 13,  50 => 11,  47 => 10,  39 => 8,  37 => 7,  33 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
