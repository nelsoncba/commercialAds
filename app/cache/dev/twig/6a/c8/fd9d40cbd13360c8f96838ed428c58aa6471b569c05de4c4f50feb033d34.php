<?php

/* :includes:header.html.twig */
class __TwigTemplate_6ac8fd9d40cbd13360c8f96838ed428c58aa6471b569c05de4c4f50feb033d34 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default nav-collapse\">
                        <div class=\"container \">           
                          <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-2 col-md-3 col-lg-3\">
                            <div class=\"navbar-header\">
                            <div class=\"col-xs-4 sm-hidden md-hidden lg-hidden contenedor-boton\">
                                <button type=\"button\" class=\"navbar-toggle toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                            <span class=\"sr-only\">Cambiar Navegacion</span>
                                            <span class=\"icon-bar\"></span>
                                            <span class=\"icon-bar\"></span>
                                            <span class=\"icon-bar\"></span>
                                </button>
                            </div>

                            <div class=\"col-xs-1 col-sm-2 col-md-3 col-lg-4 aviso-container \">
                                  <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-demo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\"></a>
                                 ";
        // line 18
        echo "                            </div>
                          </div>
                          </div> 
                            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                            <div class=\"Col-xs-12 col-sm-5 col-md-5 col-lg-5 aviso-container\">
                                <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("searchEngine");
        echo "\" method=\"get\" class=\"navbar-form\">
                                    <div class=\"form-group form-search\">
                                    <input type=\"text\" name=\"query\" class=\"form-control input-search\" placeholder=\"Buscar\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\">
                                    </div>
                                    <button type=\"submit\" class=\"btn button-search\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/lupe-search.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-lupe\"></button>
                                </form>
                            </div>
                            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 aviso-container col-header-option\">
                                  <ul class=\"nav navbar-nav navbar-right \">
                                        <li><a href=\"#map-cercanas\" onclick=\"javascript:initialize(-31.416614, -64.183376);\" role=\"button\" data-toggle=\"modal\"><span class=\"header-element\"><b class=\"glyphicon glyphicon-globe\"></b> Cercanas</span></a></li>
                                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("publish_ad");
        echo "\" class=\"\"><span class=\"header-element\"><b class=\"glyphicon glyphicon-tag\"></b> Publicar</span></a></li>
                                        ";
        // line 34
        if (($this->env->getExtension('security')->isGranted("ROLE_ADVERTISER") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 35
            echo "                                            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/img-user.jpg"), "html", null, true);
            echo "\" width=\"30\" height=\"30\" style=\"border: 1px #ccc solid; margin-top: -5px; margin-bottom: -5px; border-radius: 3px,\"/><b class=\"caret\"></b></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 38
            if ($this->env->getExtension('security')->isGranted("ROLE_ADVERTISER")) {
                echo $this->env->getExtension('routing')->getPath("advertiser_panel");
            } else {
                echo $this->env->getExtension('routing')->getPath("#");
            }
            echo "\">Ver Perfil</a></li>
                                                <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("user_logout");
            echo "\">Cerrar</a></li>
                                            </ul>
                                        </li>
                                        ";
        } else {
            // line 43
            echo "                                        <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\" class=\"\"><span class=\"header-element\"><b class=\"glyphicon glyphicon-user\"></b> Ingresar</span></a>
                                        </li>
                                        ";
        }
        // line 46
        echo "                                    </ul>
                            </div>
                            </div>
                          </div>
                        </div>
                    </nav>";
    }

    public function getTemplateName()
    {
        return ":includes:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  99 => 43,  92 => 39,  84 => 38,  80 => 37,  74 => 35,  72 => 34,  68 => 33,  59 => 27,  54 => 25,  49 => 23,  42 => 18,  36 => 16,  19 => 1,);
    }
}
