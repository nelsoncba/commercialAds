<?php

/* CommercialAdsFilterBundle:Default:cities-list.html.twig */
class __TwigTemplate_1f1c27cef40d6fd43b668964b5522bf0e2c5832d427f7f0356ee92c42b21216a extends Twig_Template
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
        echo "<h5>Localidad:</h5>
<select id=\"city\" class=\"form-control select\"  >
 <!--   <option value=\"#\">Seleccione localidad</option> -->
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 5
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "slug", array()), "html", null, true);
            echo "\"
            ";
            // line 6
            if ((isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory"))) {
                // line 7
                echo "                 data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_city_subcat", array("region" => $this->getAttribute($this->getAttribute($context["city"], "region", array()), "slug", array()), "city" => $this->getAttribute($context["city"], "slug", array()), "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "subcategory" => (isset($context["subcategory"]) ? $context["subcategory"] : $this->getContext($context, "subcategory")))), "html", null, true);
                echo "\"
            ";
            } else {
                // line 9
                echo "                 data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ad_city", array("region" => $this->getAttribute($this->getAttribute($context["city"], "region", array()), "slug", array()), "city" => $this->getAttribute($context["city"], "slug", array()))), "html", null, true);
                echo "\"
            ";
            }
            // line 11
            echo "            ";
            echo ((((isset($context["currentCity"]) ? $context["currentCity"] : $this->getContext($context, "currentCity")) == $this->getAttribute($context["city"], "slug", array()))) ? ("selected=\"selected\"") : (""));
            echo ">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
            echo " ";
            if ((($this->getAttribute($context["city"], "slug", array()) == "cordoba") || ($this->getAttribute($context["city"], "slug", array()) == "belgrano"))) {
                echo "✓";
            }
            // line 13
            echo "    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
</select>

<script type=\"text/javascript\">
    var lista = document.getElementById('city');

    lista.onchange = function() {
        var url = lista.options[lista.selectedIndex].getAttribute('data-url');
        window.location = url;
    };
</script>";
    }

    public function getTemplateName()
    {
        return "CommercialAdsFilterBundle:Default:cities-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  58 => 13,  52 => 12,  47 => 11,  41 => 9,  35 => 7,  33 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
