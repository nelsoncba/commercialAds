<?php

/* :includes:aside.html.twig */
class __TwigTemplate_7cec392a780a01a0449519828fcfb3980cc5827aee4f8353da02085af60d1dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'filters' => array($this, 'block_filters'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"col-sidebar\" class=\"hidden-xs col-sm-3 col-md-3 col-lg-3 \">
    <nav class=\"navbar-default sidebar\">
        <ul class=\"nav\" id=\"side-menu\">
           <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                 ";
        // line 5
        $this->displayBlock('filters', $context, $blocks);
        // line 7
        echo " 
                   <div class=\"select-localizacion\">                      
                       ";
        // line 9
        if ( !(isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected"))) {
            // line 10
            echo "                                 ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CommercialAdsFilterBundle:Default:regionsList", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")), "category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : $this->getContext($context, "categorySelected")), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected")))));
            echo "
                        ";
        }
        // line 12
        echo "                        ";
        if ((isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected"))) {
            // line 13
            echo "                                 ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CommercialAdsFilterBundle:Default:citiesList", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")), "city" => (isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected")), "category" => (isset($context["categorySelected"]) ? $context["categorySelected"] : $this->getContext($context, "categorySelected")), "subcategory" => (isset($context["subcategorySelected"]) ? $context["subcategorySelected"] : $this->getContext($context, "subcategorySelected")))));
            echo " 
                        ";
        }
        // line 15
        echo "                   </div>
            </div>
                ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 19
        echo "  
        </ul>
    </nav>
</div>
";
    }

    // line 5
    public function block_filters($context, array $blocks = array())
    {
        // line 6
        echo "                         ";
        $this->loadTemplate(":includes:show-filters.html.twig", ":includes:aside.html.twig", 6)->display($context);
        // line 7
        echo "                 ";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        // line 18
        echo "                       ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CommercialAdsFilterBundle:Default:sidebar", array("region" => (isset($context["regionSelected"]) ? $context["regionSelected"] : $this->getContext($context, "regionSelected")), "city" => (isset($context["citySelected"]) ? $context["citySelected"] : $this->getContext($context, "citySelected")), "lat" => (isset($context["lat"]) ? $context["lat"] : $this->getContext($context, "lat")), "lng" => (isset($context["lng"]) ? $context["lng"] : $this->getContext($context, "lng")), "address" => (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")))));
        echo "
                ";
    }

    public function getTemplateName()
    {
        return ":includes:aside.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  74 => 17,  70 => 7,  67 => 6,  64 => 5,  56 => 19,  54 => 17,  50 => 15,  44 => 13,  41 => 12,  35 => 10,  33 => 9,  29 => 7,  27 => 5,  21 => 1,);
    }
}
