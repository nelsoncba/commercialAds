<?php

/* CommercialAdsUserBundle:Default:user.html.twig */
class __TwigTemplate_c0466a8401058f433e36f53f85287c217f907328aa51dc92c2db376c7a6d0ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::frontend.html.twig", "CommercialAdsUserBundle:Default:user.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'user' => array($this, 'block_user'),
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
        $context["categorySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "cat"), "method");
        // line 5
        $context["subcategorySelected"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "subcat"), "method");
        // line 6
        $context["lat"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "lat"), "method");
        // line 7
        $context["lng"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "lng"), "method");
        // line 8
        $context["address"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "address"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_id($context, array $blocks = array())
    {
        echo "user";
    }

    // line 16
    public function block_article($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("article", $context, $blocks);
        echo "
<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 col-main\">
<section class=\"login-container\">
    ";
        // line 20
        $this->loadTemplate(":includes:flashes.html.twig", "CommercialAdsUserBundle:Default:user.html.twig", 20)->display($context);
        // line 21
        echo "    ";
        $this->displayBlock('user', $context, $blocks);
        // line 24
        echo "    ";
        $this->loadTemplate(":includes:dialogEmailResetPass.html.twig", "CommercialAdsUserBundle:Default:user.html.twig", 24)->display($context);
        echo " 
</section>  
</div>
";
    }

    // line 21
    public function block_user($context, array $blocks = array())
    {
        // line 22
        echo "        
    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsUserBundle:Default:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  95 => 29,  90 => 22,  87 => 21,  78 => 24,  75 => 21,  73 => 20,  66 => 17,  63 => 16,  57 => 14,  50 => 11,  47 => 10,  43 => 1,  41 => 8,  39 => 7,  37 => 6,  35 => 5,  33 => 4,  31 => 3,  29 => 2,  11 => 1,);
    }
}
