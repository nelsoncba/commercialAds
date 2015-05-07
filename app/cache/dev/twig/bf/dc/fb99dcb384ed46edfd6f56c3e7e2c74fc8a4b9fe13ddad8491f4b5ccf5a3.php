<?php

/* CommercialAdsAdvertiserBundle:Default:ad-panel.html.twig */
class __TwigTemplate_bfdcfb99dcb384ed46edfd6f56c3e7e2c74fc8a4b9fe13ddad8491f4b5ccf5a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", "CommercialAdsAdvertiserBundle:Default:ad-panel.html.twig", 1);
        $this->blocks = array(
            'advertiser' => array($this, 'block_advertiser'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_advertiser($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 aviso-container \">
         <div class=\"anunciante-data\"><span>Listado de mis avisos</span><hr></div>
        <ul>
           <div>
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 9
            echo "                <div class=\"container aviso-container \">
                    <li class=\"aviso-anunciante\">
                        <div class=\"col-xs-3 aviso-container\">
                            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array()) != null)) ? ($this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute($this->getAttribute($context["ad"], "image", array()), "path1", array())))) : ($this->env->getExtension('assets')->getAssetUrl("img/img-camara.png"))), "html", null, true);
            echo "\" alt=\"\" class=\"img-list-detalle\"/>
                        </div>
                        <div class=\"col-xs-9  aviso-container\">
                            <div class=\"container-right-aviso\">
                                <a href=\"#\"><div class=\"aviso-mini-title\" style=\"overflow:hidden; white-space:nowrap; text-overflow: ellipsis;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "title", array()), "html", null, true);
            echo "</div></a>
                                <div class=\"aviso-mini-content\">Publicado el ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</div>
                                <div class=\"aviso-mini-content\">";
            // line 18
            echo ((($this->getAttribute($context["ad"], "typePrice", array()) != "pesos")) ? ("% -") : ("\$ "));
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ad"], "price", array()), "html", null, true);
            echo "</div>
                                <div class=\"btn-group-aviso\">
                                    ";
            // line 20
            if ((($this->getAttribute($context["ad"], "enabled", array()) == false) || (twig_date_format_filter($this->env, $this->getAttribute($context["ad"], "expiredAt", array()), "Y-m-d H:i:s") < twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y-m-d H:i:s")))) {
                // line 21
                echo "                                    <div class=\"\">
                                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("enable_ad", array("id" => $this->getAttribute($context["ad"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\">Publicar</a>
                                    </div>
                                    ";
            } else {
                // line 25
                echo "                                    <div class=\"\">
                                        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("disable_ad", array("id" => $this->getAttribute($context["ad"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-warning\">Finalizar</a>
                                    </div>
                                    ";
            }
            // line 29
            echo "                                    <div class=\"\">
                                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_ad", array("id" => $this->getAttribute($context["ad"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger\">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
        </ul> 
        <div class=\"paginator\">
          ";
        // line 41
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "  
        </div>
      </div>

";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdvertiserBundle:Default:ad-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  105 => 38,  91 => 30,  88 => 29,  82 => 26,  79 => 25,  73 => 22,  70 => 21,  68 => 20,  61 => 18,  57 => 17,  53 => 16,  46 => 12,  41 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
