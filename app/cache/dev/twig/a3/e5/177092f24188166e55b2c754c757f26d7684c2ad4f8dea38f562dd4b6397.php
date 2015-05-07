<?php

/* CommercialAdsAdBundle:Default:ad.html.twig */
class __TwigTemplate_a3e5177092f24188166e55b2c754c757f26d7684c2ad4f8dea38f562dd4b6397 extends Twig_Template
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
        echo "<!--<article class=\"banner-superior col-lg-12\"></article>-->
                <div style=\"display:none\" class=\"bread-prov\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")), "html", null, true);
        echo "</div>
                <div style=\"display:none\" class=\"bread-local\">";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected")), "html", null, true);
        echo "</div>
                <div style=\"display:none\" class=\"bread-subcat\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected")), "html", null, true);
        echo "</div>
<div class=\"content-anuncio \">

<div class=\"container\" >
  <div class=\"row\">
    <div class=\"header-detalle\"><a href=\"javascript:history.go(-1);";
        // line 9
        echo "\"><div class=\"link-detalle-voler\">Volver</div></a><div class=\"fecha-detalle\">Fecha publicación: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo "</div></div>
    
    <div class=\"col-xs-12 hidden-sm hidden-md hidden-lg aviso-container margenes-anuncio\" >
        <div id=\"carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
            <ol class=\"carousel-indicators\">
               <li data-target=\"#carousel\" data-slide-to=\"0\" class=\"active\"></li>
               ";
        // line 15
        echo ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path2", array()) != null)) ? ("<li data-target=\"#carousel\" data-slide-to=\"1\" ></li>") : (""));
        echo "
               ";
        // line 16
        echo ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path3", array()) != null)) ? ("<li data-target=\"#carousel\" data-slide-to=\"2\" ></li>") : (""));
        echo "
               ";
        // line 17
        echo ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path4", array()) != null)) ? ("<li data-target=\"#carousel\" data-slide-to=\"3\" ></li>") : (""));
        echo "
               ";
        // line 18
        echo ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path5", array()) != null)) ? ("<li data-target=\"#carousel\" data-slide-to=\"4\" ></li>") : (""));
        echo "
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"content-image-ad \"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path1", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path1", array())))) : ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png"))), "html", null, true);
        echo "\" class=\"img-aviso\"/></div>
                    <div class=\"carousel-caption\"></div>
                </div>
                ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path2", array())) {
            // line 26
            echo "                <div class=\"item\">
                    <div class=\"content-image-ad\"><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path2", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path2", array())))) : ("")), "html", null, true);
            echo "\" class=\"img-aviso\"/></div>
                    <div class=\"carousel-caption\"></div>
                </div>
                 ";
        }
        // line 31
        echo "                 ";
        if ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path3", array())) {
            // line 32
            echo "                <div class=\"item\">
                    <div class=\"content-image-ad\"><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path3", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path3", array())))) : ("")), "html", null, true);
            echo "\" class=\"img-aviso\"/></div>
                    <div class=\"carousel-caption\"></div>
                </div>
                 ";
        }
        // line 37
        echo "                 ";
        if ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path4", array())) {
            // line 38
            echo "                <div class=\"item\">
                    <div class=\"content-image-ad\"><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path4", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path4", array())))) : ("")), "html", null, true);
            echo "\" class=\"img-aviso\"/></div>
                    <div class=\"carousel-caption\"></div>
                </div>
                 ";
        }
        // line 43
        echo "                 ";
        if ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path5", array())) {
            // line 44
            echo "                <div class=\"item\">
                    <div class=\"content-image-ad\"><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path5", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path5", array())))) : ("")), "html", null, true);
            echo "\" class=\"img-aviso\"/></div>
                    <div class=\"carousel-caption\"></div>
                </div>
                 ";
        }
        // line 49
        echo "            </div>
            <a class=\"left carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon icon-prev\" ></span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon icon-next\" ></span>
            </a>
        </div>
    </div>
   <div class=\"hidden-xs col-sm-6 col-md-6 col-lg-6 aviso-container margenes-anuncio\" >
        <div class=\"content-image-ad\">
            <span class=\"img-replace\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path1", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path1", array())))) : ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png"))), "html", null, true);
        echo "\" class=\"img-aviso\"/></span>
        </div>
        <div class=\"galeria-img container-title\">
            <div class=\"galeria-item\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path1", array()) == false)) ? ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png")) : ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path1", array()))))), "html", null, true);
        echo "\" class=\"img-gal\" onclick=\"javascript:selectImg(this);\"/></div>
            <div class=\"galeria-item\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path2", array()) == false)) ? ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png")) : ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path2", array()))))), "html", null, true);
        echo "\" class=\"img-gal\" onclick=\"javascript:selectImg(this);\"/></div>
            <div class=\"galeria-item\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path3", array()) == false)) ? ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png")) : ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path3", array()))))), "html", null, true);
        echo "\" class=\"img-gal\" onclick=\"javascript:selectImg(this);\"/></div>
            <div class=\"galeria-item\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path4", array()) == false)) ? ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png")) : ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path4", array()))))), "html", null, true);
        echo "\" class=\"img-gal\" onclick=\"javascript:selectImg(this);\"/></div>
            <div class=\"galeria-item\"><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path5", array()) == false)) ? ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png")) : ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "image", array()), "path5", array()))))), "html", null, true);
        echo "\" class=\"img-gal\" onclick=\"javascript:selectImg(this);\"/></div>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6  margenes-anuncio container-title \">
            <div class=\"title-detalle \">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "title", array()), "html", null, true);
        echo "</div>
            <div class=\"precio-detalle\">";
        // line 72
        echo ((($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "typePrice", array()) != "pesos")) ? ("% -") : ("\$ "));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "price", array()), "html", null, true);
        echo "</div>
    </div>
  </div>
  <div class=\"row\">
      <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 margenes-anuncio\">
           <div class=\"advertiser-data\"><span>Anunciante: </span><span class=\"label label-primary\" style=\"color:#fff;\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "name", array()), "html", null, true);
        echo "</span></div>
           <div class=\"advertiser-data\"><span>Fecha expiración:</span> ";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "expiredAt", array()), "d/m/Y"), "html", null, true);
        echo "</div>
            <div class=\"advertiser-data\"><span>Direccion:</span> ";
        // line 79
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "street", array()) . ", "), "html", null, true);
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "number", array()) . ", "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "floor", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "door", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "city", array()), "name", array()) . ", "), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "city", array()), "region", array()), "name", array()), "html", null, true);
        echo "</div>
            <div class=\"advertiser-data\"><span>Telefono:</span> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "phone", array()), "html", null, true);
        echo "</div>
            <div class=\"advertiser-data\"><span>Horarios:</span> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "hours", array()), "html", null, true);
        echo "</div>
      </div>
      <div class=\"col-xs-3 col-sm-4 col-md-4 col-lg-4\">
          <div class=\"btn-map hidden-xs\"  style=\"\"><a href=\"#mapmodals\" onclick=\"initialize(";
        // line 84
        if (((isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")) && (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lat", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lng", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (isset($context["myLat"]) ? $context["myLat"] : $this->getContext($context, "myLat")), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (isset($context["myLng"]) ? $context["myLng"] : $this->getContext($context, "myLng")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lat", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lng", array()), "html", null, true);
        }
        echo ");\" role=\"button\" data-toggle=\"modal\" class=\"aviso-marker right\"></a><span>Ver mapa</span></div>
          <div class=\"btn-map hidden-sm hidden-md hidden-lg\"><a href=\"#mapmodals\" onclick=\"initialize(";
        // line 85
        if (((isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")) && (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lat", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lng", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (isset($context["myLat"]) ? $context["myLat"] : $this->getContext($context, "myLat")), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, (isset($context["myLng"]) ? $context["myLng"] : $this->getContext($context, "myLng")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lat", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lng", array()), "html", null, true);
        }
        echo ");\" role=\"button\" data-toggle=\"modal\"  class=\"btn btn-sm btn-info\"><span class=\"glyphicon glyphicon-map-marker\"></span> Ver en mapa</a></div>
          <input type=\"hidden\" id=\"lat\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lat", array()), "html", null, true);
        echo "\"/>
          <input type=\"hidden\" id=\"lng\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "advertiser", array()), "lng", array()), "html", null, true);
        echo "\"/> 
      </div>
  </div>
  <div class=\"row\">
      <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 aviso-container margenes-anuncio\">
         <div class=\"advertiser-data\"><span>  Descripción: </span><hr></div><div class=\"texto-descripcion\">";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ad"]) ? $context["ad"] : $this->getContext($context, "ad")), "description", array()), "html", null, true);
        echo "</div>
      </div>
      <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 aviso-container \">
         <div class=\"advertiser-data\"><span> Otros avisos del anunciante: </span><hr></div>
         
        <ul>
           <div>
                ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 100
            echo "                <div class=\"container aviso-mobile\">
                    <li class=\"\">
                        <div class=\"col-xs-3 aviso-container\">
                            <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array())))) : ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png"))), "html", null, true);
            echo "\" alt=\"\" class=\"img-list-detalle\"/>
                        </div>
                        <div class=\"col-xs-9  aviso-container\">
                            <div class=\"container-right-aviso\">
                                <a href=\"";
            // line 107
            if (((isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")) && (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_by_coord", array("lat" => (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "lng" => (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "cat" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "category", array()), "slug", array()), "category" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "category", array()), "slug", array()), "subcategory" => $this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "slug", array()), "slug" => $this->getAttribute($context["ad"], "slug", array()))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad", array("region" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "city", array()), "region", array()), "slug", array()), "city" => $this->getAttribute($this->getAttribute($context["ad"], "city", array()), "slug", array()), "category" => $this->getAttribute($this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "category", array()), "slug", array()), "subcategory" => $this->getAttribute($this->getAttribute($context["ad"], "subcategory", array()), "slug", array()), "slug" => $this->getAttribute($context["ad"], "slug", array()))), "html", null, true);
            }
            echo "\"><div class=\" aviso-mini-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "title", array()), "html", null, true);
            echo "</div></a>
                                <div class=\"\">Publicado el ";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "created_at", array()), "d/m/Y"), "html", null, true);
            echo "</div>
                                <div class=\"\">";
            // line 109
            echo ((($this->getAttribute($context["ad"], "typePrice", array()) != "pesos")) ? ("% -") : ("\$ "));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    </li>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </div>
        </ul> 
        <div class=\"paginator\">
          ";
        // line 118
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "  
        </div>
      </div>
  </div>
 </div>
</div>";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdBundle:Default:ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 118,  308 => 115,  294 => 109,  290 => 108,  280 => 107,  273 => 103,  268 => 100,  264 => 99,  254 => 92,  246 => 87,  242 => 86,  226 => 85,  210 => 84,  204 => 81,  200 => 80,  188 => 79,  184 => 78,  180 => 77,  170 => 72,  166 => 71,  159 => 67,  155 => 66,  151 => 65,  147 => 64,  143 => 63,  137 => 60,  124 => 49,  117 => 45,  114 => 44,  111 => 43,  104 => 39,  101 => 38,  98 => 37,  91 => 33,  88 => 32,  85 => 31,  78 => 27,  75 => 26,  73 => 25,  67 => 22,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  38 => 9,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
