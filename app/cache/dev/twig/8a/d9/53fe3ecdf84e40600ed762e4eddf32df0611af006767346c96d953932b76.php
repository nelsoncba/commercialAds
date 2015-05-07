<?php

/* ::frontend.html.twig */
class __TwigTemplate_8ad953fe3ecdf84e40600ed762e4eddf32df0611af006767346c96d953932b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::frontend.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'article' => array($this, 'block_article'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsuser/css/login.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsad/css/detalle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.metisMenu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/parsley/parsley.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsad/css/lista-avisos.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<!--[if lt IE 7]>
            <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
            <header class=\"navbar-fixed-top\" >
                ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo " 
            </header>
            <div class=\"container back-container contorno\">
                <section class=\"aviso-container\">
                     <div class=\"row\">
                        ";
        // line 25
        $this->displayBlock('aside', $context, $blocks);
        // line 28
        echo "                        ";
        $this->displayBlock('article', $context, $blocks);
        // line 32
        echo "                        
                     </div>
                </section>
            </div>
            <!-- show map-modal  -->
            <div class=\"modal fade\" id=\"mapmodals\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\" id=\"myCity\">Ubicación de local</h4>
                        </div>
                        <div class=\"modal-body body-map\">
                            <div id=\"map_canvas\" class=\"map\"></div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end map-modal -->
            
            <!-- map-cercanas -->
            <div class=\"modal fade\" id=\"map-cercanas\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button onclick=\"javascript:geolocalizar();\" type=\"button\" class=\"btn btn-default\" style=\"float: right; margin-top: auto; margin-bottom: auto; \"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-localizador-1.png"), "html", null, true);
        echo "\" class=\"img-localization-1\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-localizador-2.png"), "html", null, true);
        echo "\" class=\"img-localization-2\"/></button>
                            <h4 class=\"modal-title\">Ingrese \"Av. Colón 121 Córdoba\" para hacer prueba</h4>
                        </div>
                        <div class=\"modal-body body-map\">
                            <div class=\"\">
                                <form method=\"POST\"  id=\"form_mapa\" class=\"navbar-form\">
                                    <input type=\"text\"  placeholder=\"Ingrese dirección\" id=\"myaddress\"  class=\"form-control input-address\" />
                                    <input type=\"button\" value=\"Ir\" id=\"btn-form-cercanas\" class=\"btn btn-default\" onclick=\"codeAddress();\"/> 
                                </form>
                            </div>
                            <div id=\"map_canvas_2\"  class=\"map\"></div><div class=\"rpta-geosearch\"></div>
                        </div>
                        <div class=\"modal-footer\">
                            <form action=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("my_location");
        echo "\" method=\"get\" data-parsley-validate id=\"form_mapa\" class=\"\">
                                   <input type=\"hidden\" id=\"address\" name=\"address\" data-parsley-required=\"true\"/>\t 
                                   <input type=\"hidden\" id=\"latitud\" name=\"lat\" data-parsley-required=\"true\"/>\t    
                                   <input type=\"hidden\" id=\"longitud\" name=\"lng\" data-parsley-required=\"true\"/> 
                                   <input type=\"hidden\" name=\"cat\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["categorySelected"]) ? $context["categorySelected"] : $this->getContext($context, "categorySelected")), "html", null, true);
        echo "\"/>
                                   <input type=\"hidden\" name=\"subcat\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected")), "html", null, true);
        echo "\"/>
                                   <button type=\"submit\" id=\"btn-guardar-ubicacion\" class=\"btn btn-success\" onclick=\"startloading();\" style=\"float: left;\">Guardar ubicación</button>
                            </form> 
                            <button type=\"button\" class=\"close close-2\" data-dismiss=\"modal\">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end map-cercanas -->
            
            
";
    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        // line 19
        echo "                    ";
        $this->loadTemplate(":includes:header.html.twig", "::frontend.html.twig", 19)->display($context);
        // line 20
        echo "                ";
    }

    // line 25
    public function block_aside($context, array $blocks = array())
    {
        // line 26
        echo "                            
                        ";
    }

    // line 28
    public function block_article($context, array $blocks = array())
    {
        // line 29
        echo "                             <span class=\"ancho\"></span>

                        ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"  type=\"text/javascript\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js\"></script>
        <script> window.jQuery || document.write('<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"><\\/script>');</script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script>
           \$(document).ready(function(){
               selectImg();
           });
        </script>
";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 103,  225 => 102,  221 => 101,  217 => 100,  213 => 99,  209 => 98,  205 => 97,  201 => 96,  196 => 93,  193 => 92,  187 => 29,  184 => 28,  179 => 26,  176 => 25,  172 => 20,  169 => 19,  166 => 18,  149 => 78,  145 => 77,  138 => 73,  120 => 60,  90 => 32,  87 => 28,  85 => 25,  78 => 20,  76 => 18,  70 => 14,  67 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
