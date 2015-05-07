<?php

/* ::extranet.html.twig */
class __TwigTemplate_d7d52baf2efba982bb6eca220de6430485332503d0edc291b8ef3d4873770ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::extranet.html.twig", 1);
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsadvertiser/css/extranet.css"), "html", null, true);
        echo "\"rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsadvertiser/css/anunciante.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsad/css/detalle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.metisMenu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/parsley/parsley.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/commercialadsad/css/lista-avisos.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>

";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <header class=\"navbar-fixed-top\" >
                ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo " 
    </header>
    <div class=\"container back-container\">
        <section class=\"aviso-container\">
             <div class=\"row\">
                 ";
        // line 24
        $this->displayBlock('aside', $context, $blocks);
        // line 37
        echo " 
                 ";
        // line 38
        $this->displayBlock('article', $context, $blocks);
        // line 41
        echo "             </div>
        </section>
    </div>
";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "                    ";
        $this->loadTemplate(":includes:header.html.twig", "::extranet.html.twig", 18)->display($context);
        // line 19
        echo "                ";
    }

    // line 24
    public function block_aside($context, array $blocks = array())
    {
        // line 25
        echo "                    <div class=\"col-xs-12 hidden-sm hidden-md hidden-lg opciones\"><div id=\"opciones\" class=\"btn btn-info btn-xs\">Ver Opciones <span class=\"caret\"></span></div></div>
                    <div id=\"sidebar-anun\" class=\" col-sm-3 col-md-3 col-lg-3 \">
                        <div class=\"list-group sidebar\">
                           <div class=\"titulo-menulat\"><h4>Menú de opciones</h4></div>
                           <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("advertiser_panel");
        echo "\" class=\"list-group-item\" title=\"\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a>
                           <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("publish_ad");
        echo "\" class=\"list-group-item\" title=\"\"><span class=\"glyphicon glyphicon-tags\"></span>  Publicar</a>
                           <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("advertiser_profile");
        echo "\" class=\"list-group-item\"  title=\"\"><span class=\"glyphicon glyphicon-edit\"></span>  Actualizar mis datos</a>
                           <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("my_ads");
        echo "\" class=\"list-group-item\" title=\"\"><span class=\"glyphicon glyphicon-eye-open\"></span> Ver mis publicaciones</a>
                           <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("user_reset_pass_default");
        echo "\" class=\"list-group-item\" title=\"\"><span class=\"glyphicon glyphicon-lock\"></span> Cambiar contraseña</a>
                           <a href=\"#\" class=\"list-group-item\" title=\"\"><span class=\"glyphicon glyphicon-question-sign\"></span> Ayuda</a>
                        </div>
                    </div>
                 ";
    }

    // line 38
    public function block_article($context, array $blocks = array())
    {
        // line 39
        echo "
                 ";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "        <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.0.5/jquery.min.js\"  type=\"text/javascript\"></script>
        <script> window.jQuery || document.write('<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"><\\/script>');</script>
        <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/filestyle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script>
            var url = '";
        // line 59
        echo $this->env->getExtension('routing')->getPath("load_cities_ajax");
        echo "';
            var url2 = '";
        // line 60
        echo $this->env->getExtension('routing')->getPath("load_subcategories_ajax");
        echo "';
            \$('#prov').change(function(){
                cargarLocalidades(url);
            });
            \$('#categoria').change(function(){
                cargarSubcategorias(url2);
            });
        </script>
";
    }

    public function getTemplateName()
    {
        return "::extranet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 60,  197 => 59,  192 => 57,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  168 => 51,  164 => 50,  160 => 49,  156 => 47,  153 => 46,  148 => 39,  145 => 38,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  114 => 25,  111 => 24,  107 => 19,  104 => 18,  101 => 17,  94 => 41,  92 => 38,  89 => 37,  87 => 24,  80 => 19,  78 => 17,  75 => 16,  72 => 15,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
