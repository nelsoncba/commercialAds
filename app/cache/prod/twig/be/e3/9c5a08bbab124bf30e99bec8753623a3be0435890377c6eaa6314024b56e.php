<?php

/* ::base.html.twig */
class __TwigTemplate_bee39c5a08bbab124bf30e99bec8753623a3be0435890377c6eaa6314024b56e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-mini-rojo-extra.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <!--<div id=\"preloader\">
            <div id=\"loader\">
            </div>
        </div>-->
        <div class=\"wrapper\">
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "                
         <footer class=\"\">
            <div class=\"col-xs-12\">&copy; ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - LocalOfertas -</div>
            <div class=\"col-xs-12\"><a href=\"#\"> Ayuda | </a>
            <a href=\"#\"> Contacto | </a>
            <a href=\"#\"> Privacidad |</a>
            <a href=\"#}\"> Sobre nosotros </a></div>
        </footer>
       </div>
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  90 => 27,  85 => 17,  81 => 8,  78 => 7,  72 => 6,  66 => 30,  64 => 27,  54 => 20,  50 => 18,  48 => 17,  36 => 9,  34 => 7,  30 => 6,  23 => 1,);
    }
}
