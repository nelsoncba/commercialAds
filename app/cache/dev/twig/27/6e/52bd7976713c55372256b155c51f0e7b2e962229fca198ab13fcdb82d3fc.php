<?php

/* CommercialAdsAdBundle:Default:detail.html.twig */
class __TwigTemplate_276e52bd7976713c55372256b155c51f0e7b2e962229fca198ab13fcdb82d3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "CommercialAdsAdBundle:Default:detail.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'aside' => array($this, 'block_aside'),
            'article' => array($this, 'block_article'),
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
        $context["regionSelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "region"), "method");
        // line 3
        $context["citySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "city"), "method");
        // line 4
        $context["categorySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "category"), "method");
        // line 5
        $context["subcategorySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "subcategory"), "method");
        // line 6
        $context["lat"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "lat"), "method");
        // line 7
        $context["lng"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "lng"), "method");
        // line 8
        $context["address"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "address"), "method");
        // line 9
        $context["querySearch"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Detalle";
    }

    // line 15
    public function block_id($context, array $blocks = array())
    {
        echo "detail";
    }

    // line 17
    public function block_aside($context, array $blocks = array())
    {
        // line 18
        echo "      ";
        $this->loadTemplate(":includes:aside.html.twig", "CommercialAdsAdBundle:Default:detail.html.twig", 18)->display($context);
        echo " 
";
    }

    // line 21
    public function block_article($context, array $blocks = array())
    {
        // line 22
        $this->displayParentBlock("article", $context, $blocks);
        echo "
<div class=\"col-sm-9 col-md-9 col-lg-9 col-main\">
<article class=\"detalle-contenedor\">
   ";
        // line 25
        $this->loadTemplate("CommercialAdsAdBundle:Default:ad.html.twig", "CommercialAdsAdBundle:Default:detail.html.twig", 25)->display($context);
        // line 26
        echo "</article>
</div>
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  95 => 30,  89 => 26,  87 => 25,  81 => 22,  78 => 21,  71 => 18,  68 => 17,  62 => 15,  56 => 13,  50 => 11,  46 => 1,  44 => 9,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  11 => 1,);
    }
}
