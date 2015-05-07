<?php

/* CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig */
class __TwigTemplate_619141f29ee582897e0fa02ebbaf4f92c70b3d3462d4b500147cd600f9ff094f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::extranet.html.twig", "CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'advertiser' => array($this, 'block_advertiser'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::extranet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "LocalOfertas | Anunciantes";
    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        echo "advertiser";
    }

    // line 12
    public function block_article($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("article", $context, $blocks);
        echo "
<div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-8 col-main\">
<section class=\"anunciantes-container\">
    <div style=\"margin-top:10px;\">";
        // line 16
        $this->loadTemplate(":includes:flashes.html.twig", "CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", 16)->display($context);
        echo "</div>
    ";
        // line 17
        $this->displayBlock('advertiser', $context, $blocks);
        // line 20
        echo "    ";
        $this->loadTemplate(":includes:dialogEmailResetPass.html.twig", "CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", 20)->display($context);
        echo " 
</section>  
</div>
";
    }

    // line 17
    public function block_advertiser($context, array $blocks = array())
    {
        // line 18
        echo "        
    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  88 => 25,  83 => 18,  80 => 17,  71 => 20,  69 => 17,  65 => 16,  58 => 13,  55 => 12,  49 => 10,  43 => 8,  36 => 5,  33 => 4,  11 => 1,);
    }
}
