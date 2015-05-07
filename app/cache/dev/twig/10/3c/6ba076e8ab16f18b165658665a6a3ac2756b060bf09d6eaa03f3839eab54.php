<?php

/* CommercialAdsAdvertiserBundle:Default:advertiser-profile.html.twig */
class __TwigTemplate_103c6ba076e8ab16f18b165658665a6a3ac2756b060bf09d6eaa03f3839eab54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", "CommercialAdsAdvertiserBundle:Default:advertiser-profile.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'advertiser' => array($this, 'block_advertiser'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " Datos Anunciante ";
    }

    // line 9
    public function block_advertiser($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 box-datos-anun panel panel-default\">
    <div class=\"titulo-menulat\"><h4>";
        // line 11
        echo ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "editar")) ? ("Ingrese sus datos de anunciante") : ("Datos de anunciante"));
        echo "</h4></div>
<form action=\"";
        // line 12
        echo ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) ? ($this->env->getExtension('routing')->getPath("advertiser_profile")) : ($this->env->getExtension('routing')->getPath("advertiser_register")));
        echo "\" data-validate=\"parsley\" class=\"form-anunciante\" method=\"POST\">
    <div class=\"row \">
        <div class=\"col-sm-12 col-md-12 col-lg-6\">
            <label for=\"Nombre\" class=\"label-login\">Nombre: </label>
            <input type=\"text\"  name=\"name\" data-required=\"true\"class=\"form-control width-data-anun\" value=\"";
        // line 16
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "name", array()) == null)) ? ("-") : ($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "name", array()))), "html", null, true);
        }
        echo "\"/>
            <label for=\"Descripcion\" class=\"label-login\">Descripción: </label>
            <input type=\"text\"  name=\"description\" class=\"form-control width-data-anun\" value=\"";
        // line 18
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "description", array()) == null)) ? ("-") : ($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "description", array()))), "html", null, true);
        }
        echo "\"/>
            <label for=\"Provincia\" class=\"label-login\">Provincia: </label>
            <select type=\"text\" id=\"prov\" name=\"region\" data-required=\"true\" class=\"form-control width-data-anun\">
                ";
        // line 21
        echo ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "editar")) ? ("<option>Seleccione Provincia</option>") : (null));
        echo "
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 23
            echo "                ";
            if ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "city", array()), "region", array()), "slug", array()) == $this->getAttribute($context["region"], "slug", array())))) {
                // line 24
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "city", array()), "region", array()), "slug", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "city", array()), "region", array()), "name", array()), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 26
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "name", array()), "html", null, true);
                echo "</option>
                ";
            }
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </select>
            <label for=\"Localidad\" class=\"label-login\">Localidad: </label>
            <select type=\"text\" id=\"local\" name=\"city\" data-required=\"true\" class=\"form-control width-data-anun\">
                ";
        // line 32
        if ((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser"))) {
            // line 33
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "city", array()), "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "city", array()), "html", null, true);
            echo "</option>
                ";
        } else {
            // line 35
            echo "                <option value=\"\">Seleccionar Localidad</option>
                ";
        }
        // line 37
        echo "            </select>
        </div>
        <div class=\"col-sm-12 col-md-12 col-lg-6\">
           <label for=\"Ubicacion de anunciante\" class=\"label-login\">Ubicación de anunciante</label>
                        <div id=\"map_canvas_3\" class=\"map-registro\" ></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6\"><label for=\"Calle\" class=\"label-login\">Calle: </label><input type=\"text\" id=\"calle\" name=\"street\" data-required=\"true\" class=\"form-control width-data-anun\" value=\"";
        // line 45
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "street", array()), "html", null, true);
        }
        echo "\"/>
</div><div class=\"col-sm-12 col-md-6 col-lg-6\"><label for=\"Numero\" class=\"label-login\">Número: </label><input type=\"text\" id=\"numero\" name=\"number\" data-required=\"true\" class=\"form-control width-data-anun numero\" value=\"";
        // line 46
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "number", array()), "html", null, true);
        }
        echo "\"/>
</div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-4 col-lg-4\"><label for=\"Piso\" class=\"label-login\">Piso: </label><input type=\"text\" name=\"floor\"  class=\"form-control width-data-anun\" value=\"";
        // line 50
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "floor", array()) == null)) ? ("-") : ($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "floor", array()))), "html", null, true);
        }
        echo "\"/>
</div><div class=\"col-sm-12 col-md-4 col-lg-4\"><label for=\"Dpto\" class=\"label-login\">Dpto: </label><input type=\"text\" name=\"door\"  class=\"form-control width-data-anun\" value=\"";
        // line 51
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "door", array()) == null)) ? ("-") : ($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "door", array()))), "html", null, true);
        }
        echo "\"/>
</div><div class=\"col-sm-12 col-md-4 col-lg-4\"><label for=\"Codigo Postal\" class=\"label-login\">Codigo Postal: </label><input type=\"text\" name=\"postalCode\" class=\"form-control width-data-anun\" value=\"";
        // line 52
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "postalCode", array()) == null)) ? ("-") : ($this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "postalCode", array()))), "html", null, true);
        }
        echo "\"/>
</div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-4 col-lg-6\">
            <label for=\"Telefono\" class=\"label-login\">Telefono: </label>
            <input type=\"text\" name=\"phone\" data-required=\"true\" class=\"form-control width-data-anun\" value=\"";
        // line 58
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "phone", array()), "html", null, true);
        }
        echo "\"/>
        </div>
        <div class=\"col-sm-12 col-md-4 col-lg-6\">
            <label for=\"Horarios\" class=\"label-login\">Horarios: </label>
            <input type=\"text\" name=\"hours\" data-required=\"true\" class=\"form-control width-data-anun\" value=\"";
        // line 62
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "hours", array()), "html", null, true);
        }
        echo "\"/>
        </div>
        <div class=\"col-sm-12 col-md-4 col-lg-6\">
            <label for=\"Imagen\" class=\"label-login\">Imagen: </label>
            <input type=\"file\" name=\"image\"  class=\"form-control width-data-anun\" value=\"";
        // line 66
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "image", array()), "html", null, true);
        }
        echo "\"/>
        </div>
    </div>
<input id=\"latitudAn\" type=\"hidden\" name=\"lat\" class=\"form-control input-data-anun\" data-required=\"true\" value=\"";
        // line 69
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "lat", array()), "html", null, true);
        }
        echo "\"/>
<input id=\"longitudAn\" type=\"hidden\" name=\"lng\" class=\"form-control input-data-anun\" data-required=\"true\" value=\"";
        // line 70
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "editar")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advertiser"]) ? $context["advertiser"] : $this->getContext($context, "advertiser")), "lng", array()), "html", null, true);
        }
        echo "\"/>
<input type=\"submit\" id=\"guardar\" class=\"btn btn-success btn-form\" value=\"Guardar\"/>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdvertiserBundle:Default:advertiser-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 70,  204 => 69,  196 => 66,  187 => 62,  178 => 58,  167 => 52,  161 => 51,  155 => 50,  146 => 46,  140 => 45,  130 => 37,  126 => 35,  118 => 33,  116 => 32,  111 => 29,  105 => 28,  97 => 26,  89 => 24,  86 => 23,  82 => 22,  78 => 21,  70 => 18,  63 => 16,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
