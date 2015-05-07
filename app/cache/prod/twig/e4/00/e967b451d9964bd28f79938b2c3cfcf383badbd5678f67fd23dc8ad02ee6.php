<?php

/* CommercialAdsAdBundle:Default:ads_list.html.twig */
class __TwigTemplate_e400e967b451d9964bd28f79938b2c3cfcf383badbd5678f67fd23dc8ad02ee6 extends Twig_Template
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
        echo "<div class=\"banner-superior\">
</div>

<ol class=\"breadcrumb hidden-xs\">
         ";
        // line 5
        if ((isset($context["regionSelected"]) ? $context["regionSelected"] : null)) {
            // line 6
            echo "           <li><a href=\"";
            if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_subcategory", array("category" => (isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : null), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("main");
            }
            echo "\"><span class=\"breads\">Província </span></a><span class=\"bread-prov\">";
            echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : null), "html", null, true);
            echo "</span></li>
         ";
        }
        // line 8
        echo "         ";
        if ((isset($context["citySelected"]) ? $context["citySelected"] : null)) {
            // line 9
            echo "           <li><a href=\"";
            if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region_subcat", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null), "category" => (isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : null), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null))), "html", null, true);
            }
            echo "\"><span class=\"breads\">Localidad </span></a><span class=\"bread-local\">";
            echo twig_escape_filter($this->env, (isset($context["city_name"]) ? $context["city_name"] : null), "html", null, true);
            echo "</span></li>
         ";
        }
        // line 11
        echo "         ";
        if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : null)) {
            // line 12
            echo "           <li><a href=\"";
            if ((isset($context["citySelected"]) ? $context["citySelected"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_city", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null), "city" => (isset($context["citySelected"]) ? $context["citySelected"] : null))), "html", null, true);
            } elseif ((isset($context["regionSelected"]) ? $context["regionSelected"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : null))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("main");
            }
            echo "\"><span class=\"breads\">Rubro </span></a><span class=\"bread-subcat\">";
            echo twig_escape_filter($this->env, (isset($context["subcat_name"]) ? $context["subcat_name"] : null), "html", null, true);
            echo "</span></li>
         ";
        }
        // line 14
        echo "    </ol>
                                           
<div class=\" aviso-container\">
        ";
        // line 17
        if (((isset($context["citySelected"]) ? $context["citySelected"] : null) || (isset($context["regionSelected"]) ? $context["regionSelected"] : null))) {
            // line 18
            echo "            ";
            if ((isset($context["citySelected"]) ? $context["citySelected"] : null)) {
                // line 19
                echo "            <h4>Avisos en ";
                echo twig_escape_filter($this->env, (isset($context["city_name"]) ? $context["city_name"] : null), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : null), "html", null, true);
                echo "</h4>
            ";
            } elseif (            // line 20
(isset($context["regionSelected"]) ? $context["regionSelected"] : null)) {
                // line 21
                echo "            <h4>Avisos en ";
                echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : null), "html", null, true);
                echo "</h4>
            ";
            } else {
                // line 23
                echo "            <h4>Avisos de ofertas</h4>
            ";
            }
            // line 25
            echo "        ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "address"), "method")) {
            // line 26
            echo "            <h4>Avisos en mi zona</h4>
        ";
        } else {
            // line 28
            echo "            <h4>Todos los avisos</h4>
        ";
        }
        // line 30
        echo "        <h3><div>";
        $this->loadTemplate(":includes:flashes.html.twig", "CommercialAdsAdBundle:Default:ads_list.html.twig", 30)->display($context);
        echo "</div></h3>
        <ul>
            <div class=\"hidden-xs\">
                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 34
            echo "                <li class=\"aviso\">
                    <div class=\" col-sm-2 col-md-2 col-lg-2 aviso-container col-aviso\">
                        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array())))) : ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png"))), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive img-aviso-list\"/>
                    </div>
                  ";
            // line 44
            echo "                   ";
            // line 51
            echo "                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </div>
            <!-- formato aviso para disp. movile -->
          ";
        // line 73
        echo "        </ul>
        <div class=\"paginator\">
        ";
        // line 75
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "   
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdBundle:Default:ads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 75,  144 => 73,  140 => 53,  133 => 51,  131 => 44,  126 => 36,  122 => 34,  118 => 33,  111 => 30,  107 => 28,  103 => 26,  100 => 25,  96 => 23,  90 => 21,  88 => 20,  81 => 19,  78 => 18,  76 => 17,  71 => 14,  57 => 12,  54 => 11,  42 => 9,  39 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
