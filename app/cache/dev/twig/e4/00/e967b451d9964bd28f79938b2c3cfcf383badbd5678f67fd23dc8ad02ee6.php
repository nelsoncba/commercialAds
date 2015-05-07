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
        if ((isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected"))) {
            // line 6
            echo "           <li><a href=\"";
            if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_subcategory", array("category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : $this->getContext($context, "categorySelected")), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected")))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("main");
            }
            echo "\"><span class=\"breads\">Província </span></a><span class=\"bread-prov\">";
            echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : $this->getContext($context, "region_name")), "html", null, true);
            echo "</span></li>
         ";
        }
        // line 8
        echo "         ";
        if ((isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected"))) {
            // line 9
            echo "           <li><a href=\"";
            if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region_subcat", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")), "category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : $this->getContext($context, "categorySelected")), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected")))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")))), "html", null, true);
            }
            echo "\"><span class=\"breads\">Localidad </span></a><span class=\"bread-local\">";
            echo twig_escape_filter($this->env, (isset($context["city_name"]) ? $context["city_name"] : $this->getContext($context, "city_name")), "html", null, true);
            echo "</span></li>
         ";
        }
        // line 11
        echo "         ";
        if ((isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected"))) {
            // line 12
            echo "           <li><a href=\"";
            if ((isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_city", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")), "city" => (isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected")))), "html", null, true);
            } elseif ((isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")))), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath("main");
            }
            echo "\"><span class=\"breads\">Rubro </span></a><span class=\"bread-subcat\">";
            echo twig_escape_filter($this->env, (isset($context["subcat_name"]) ? $context["subcat_name"] : $this->getContext($context, "subcat_name")), "html", null, true);
            echo "</span></li>
         ";
        }
        // line 14
        echo "    </ol>
                                           
<div class=\" aviso-container\">
        ";
        // line 17
        if (((isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected")) || (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")))) {
            // line 18
            echo "            ";
            if ((isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected"))) {
                // line 19
                echo "            <h4>Avisos en ";
                echo twig_escape_filter($this->env, (isset($context["city_name"]) ? $context["city_name"] : $this->getContext($context, "city_name")), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : $this->getContext($context, "region_name")), "html", null, true);
                echo "</h4>
            ";
            } elseif (            // line 20
(isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected"))) {
                // line 21
                echo "            <h4>Avisos en ";
                echo twig_escape_filter($this->env, (isset($context["region_name"]) ? $context["region_name"] : $this->getContext($context, "region_name")), "html", null, true);
                echo "</h4>
            ";
            } else {
                // line 23
                echo "            <h4>Avisos de ofertas</h4>
            ";
            }
            // line 25
            echo "        ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "address"), "method")) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 34
            echo "                <li class=\"aviso\">
                    <div class=\" col-sm-2 col-md-2 col-lg-2 aviso-container col-aviso\">
                        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array())))) : ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png"))), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive img-aviso-list\"/>
                    </div>
                    <div class=\"col-sm-8 col-md-8 col-lg-8 aviso-container\">
                        <div class=\"container-center-aviso\">
                         <div class=\"aviso-title\"><a href=\"";
            // line 40
            if (((isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")) && (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_by_coord", array("lat" => $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "lat", array()), "lng" => $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "lng", array()), "category" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "category", array()), "slug", array()), "subcategory" => $this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "slug", array()), "slug" => $this->getAttribute($context["ad"], "slug", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad", array("region" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "city", array()), "region", array()), "slug", array()), "city" => $this->getAttribute($this->getAttribute($context["ad"], "city", array()), "slug", array()), "category" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "category", array()), "slug", array()), "subcategory" => $this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "slug", array()), "slug" => $this->getAttribute($context["ad"], "slug", array()))), "html", null, true);
            }
            echo "\"><div class=\"aviso-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "title", array()), "html", null, true);
            echo "</div></a></div>
                            <div class=\"anunciante-container\"><span class=\"anunciante label label-primary\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "name", array()), "html", null, true);
            echo "</span> - <span class=\"dir-calle\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "street", array()), "html", null, true);
            echo "</span> <span class=\"dir-num\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "number", array()), "html", null, true);
            echo "</span>, <span class=\"dir-city\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "city", array()), "html", null, true);
            echo "</span> - Tel: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "phone", array()), "html", null, true);
            echo " - Hr: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "hours", array()), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                   <div class=\"col-sm-2 col-md-2 col-lg-2 aviso-container\">
                        <div class=\"container-right-aviso\">
                            <div class=\"\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</div>
                            <div class=\"content-marker\"><a href=\"#mapmodals\" onclick=\"initialize(";
            // line 47
            if (((isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")) && (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "lat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "lng", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "lat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ad"], "advertiser", array()), "lng", array()), "html", null, true);
            }
            echo ");\" role=\"button\" data-toggle=\"modal\" class=\"aviso-marker\"></a></div>
                            <div class=\"precio-anuncio\">";
            // line 48
            echo ((($this->getAttribute($context["ad"], "typePrice", array()) != "pesos")) ? ("% -") : ("\$ "));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </li>
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
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
        return array (  202 => 75,  198 => 73,  194 => 53,  181 => 48,  165 => 47,  161 => 46,  143 => 41,  133 => 40,  126 => 36,  122 => 34,  118 => 33,  111 => 30,  107 => 28,  103 => 26,  100 => 25,  96 => 23,  90 => 21,  88 => 20,  81 => 19,  78 => 18,  76 => 17,  71 => 14,  57 => 12,  54 => 11,  42 => 9,  39 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
