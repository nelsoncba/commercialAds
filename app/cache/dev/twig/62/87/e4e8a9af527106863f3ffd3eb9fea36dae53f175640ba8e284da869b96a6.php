<?php

/* :includes:flashes.html.twig */
class __TwigTemplate_6287e4e8a9af527106863f3ffd3eb9fea36dae53f175640ba8e284da869b96a6 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["tipo"] => $context["mensajes"]) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["mensajes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                // line 3
                echo "        <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["tipo"], "html", null, true);
                echo "\">
        ";
                // line 4
                echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
                echo ((($context["tipo"] == "cuenta-inactiva")) ? ("<a href=\"#emailRegDialog\" role=\"button\" data-toggle=\"modal\" id=\"confirm-regis\">aquí.</a>") : (""));
                echo "      
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tipo'], $context['mensajes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        $this->loadTemplate(":includes:dialogEmailRegistro.html.twig", ":includes:flashes.html.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return ":includes:flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  33 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
