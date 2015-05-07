<?php

/* CommercialAdsAdvertiserBundle:Default:advertiser-panel.html.twig */
class __TwigTemplate_688b677e13eb8bcfa94ec8427c6ac8daf688b9a9ff764c0d117220d2599cc666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", "CommercialAdsAdvertiserBundle:Default:advertiser-panel.html.twig", 1);
        $this->blocks = array(
            'advertiser' => array($this, 'block_advertiser'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <article class=\"panel-principal contorno\">
        <p>Bienvenido <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "name", array()), "html", null, true);
        echo "</strong> a su panel de anunciante.</p>
        
        <p>Desde su panel de control podrá administrar sus anuncios de una manera fácil y sensilla, 
        haga conocer su negocio publicanco las mejors ofertas para capturar la atención del público,
        con el sistema de localización espacial logrará dar a conocer su local y con la oferta de productos 
        y servicios tendrá la atención de potenciales clientes para hacer crecer su negocio.</p>
        
        <p>También puedes publicar anuncios de forma particular para vender u ofrecer productos o servicios.</p>
                
    </article>
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 
 ";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdvertiserBundle:Default:advertiser-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  50 => 16,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
