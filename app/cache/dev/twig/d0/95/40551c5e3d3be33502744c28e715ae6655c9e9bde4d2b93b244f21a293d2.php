<?php

/* CommercialAdsFilterBundle:Default:regions-list.html.twig */
class __TwigTemplate_d09540551c5e3d3be33502744c28e715ae6655c9e9bde4d2b93b244f21a293d2 extends Twig_Template
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
        echo "<h5>Provincia:</h5>

<li><select id=\"provincia\" class=\"form-control select\"  >
    <option>Seleccione provincia</option>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 6
            echo "    <option class=\"opt-prov\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "slug", array()), "html", null, true);
            echo "\"";
            if ((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory"))) {
                echo "data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region_subcat", array("region" => $this->getAttribute($context["region"], "slug", array()), "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "subcategory" => (isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")))), "html", null, true);
                echo "\"";
            } else {
                echo "data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_region", array("region" => $this->getAttribute($context["region"], "slug", array()))), "html", null, true);
                echo "\"";
            }
            echo ((((isset($context["currentRegion"]) ? $context["currentRegion"] : $this->getContext($context, "currentRegion")) == $this->getAttribute($context["region"], "slug", array()))) ? ("selected=\"selected\"") : (""));
            echo ">
      ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "name", array()), "html", null, true);
            echo " ";
            if ((($this->getAttribute($context["region"], "slug", array()) == "cordoba") || ($this->getAttribute($context["region"], "slug", array()) == "capital-federal"))) {
                echo "✓";
            }
            // line 8
            echo "    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</select></li>

<script type=\"text/javascript\">
    
    
</script>
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsFilterBundle:Default:regions-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  51 => 8,  45 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
