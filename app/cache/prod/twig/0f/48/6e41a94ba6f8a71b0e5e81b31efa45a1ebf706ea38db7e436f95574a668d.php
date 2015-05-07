<?php

/* CommercialAdsAdBundle:Default:main.html.twig */
class __TwigTemplate_0f486e41a94ba6f8a71b0e5e81b31efa45a1ebf706ea38db7e436f95574a668d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "CommercialAdsAdBundle:Default:main.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'aside' => array($this, 'block_aside'),
            'article' => array($this, 'block_article'),
            'filters' => array($this, 'block_filters'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["regionSelected"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "region"), "method");
        // line 3
        $context["citySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "city"), "method");
        // line 4
        $context["categorySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "category"), "method");
        // line 5
        $context["subcategorySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "subcategory"), "method");
        // line 6
        $context["lat"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lat"), "method");
        // line 7
        $context["lng"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lng"), "method");
        // line 8
        $context["address"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "address"), "method");
        // line 9
        $context["querySearch"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "query"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "LocalOfertas";
    }

    // line 17
    public function block_id($context, array $blocks = array())
    {
        echo "main";
    }

    // line 19
    public function block_aside($context, array $blocks = array())
    {
        // line 20
        echo "      ";
        $this->loadTemplate(":includes:aside.html.twig", "CommercialAdsAdBundle:Default:main.html.twig", 20)->display($context);
        echo " 
";
    }

    // line 23
    public function block_article($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("article", $context, $blocks);
        echo "
<div class=\"col-sm-9 col-md-9 col-lg-9 col-main\">
<article class=\"col-main\">
<div class=\"col-xs-12 hidden-sm hidden-md hidden-lg\">
    ";
        // line 28
        $this->displayBlock('filters', $context, $blocks);
        // line 31
        echo "</div>

<div id=\"avisos\">
     ";
        // line 34
        $this->loadTemplate("CommercialAdsAdBundle:Default:ads_list.html.twig", "CommercialAdsAdBundle:Default:main.html.twig", 34)->display($context);
        echo "    
</div>

</article>
";
    }

    // line 28
    public function block_filters($context, array $blocks = array())
    {
        // line 29
        echo "       ";
        $this->loadTemplate("::includes/show-filters.html.twig", "CommercialAdsAdBundle:Default:main.html.twig", 29)->display($context);
        // line 30
        echo "    ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdBundle:Default:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  120 => 40,  116 => 30,  113 => 29,  110 => 28,  101 => 34,  96 => 31,  94 => 28,  86 => 24,  83 => 23,  76 => 20,  73 => 19,  67 => 17,  61 => 15,  54 => 12,  51 => 11,  47 => 1,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  11 => 1,);
    }
}
