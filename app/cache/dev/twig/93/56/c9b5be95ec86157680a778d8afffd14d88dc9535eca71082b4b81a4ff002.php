<?php

/* CommercialAdsUserBundle:Default:reset-password.html.twig */
class __TwigTemplate_9356c9b5be95ec86157680a778d8afffd14d88dc9535eca71082b4b81a4ff002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsUserBundle:Default:user.html.twig", "CommercialAdsUserBundle:Default:reset-password.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'user' => array($this, 'block_user'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommercialAdsUserBundle:Default:user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Reset password ";
    }

    // line 5
    public function block_user($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"box-login contorno\">
    <div class=\"titulo-menulat\"><h4>Ingrese su nueva contraseña</h4></div>
    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div class=\"error-form\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "insidePass")) ? ($this->env->getExtension('routing')->getPath("user_reset_pass_default")) : ($this->env->getExtension('routing')->getPath("user_reset_password", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " class=\"form-login\" method=\"POST\" data-validate=\"parsley\">
           ";
        // line 12
        echo ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "insidePass")) ? (null) : ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'label', array("label" => "Contraseña"))));
        echo "
           ";
        // line 13
        echo ((((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "insidePass")) ? (null) : ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'widget', array("value" => "", "type" => "password", "attr" => array("class" => "form-control width-login ", "data-parsley-trigger" => "change", "required" => "true", "data-parsley-type" => "alphanum")))));
        echo "
           ";
        // line 14
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "insidePass")) {
            // line 15
            echo "            <div class=\"error-form\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "oldPassword", array()), 'errors');
            echo "</div>
            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "oldPassword", array()), 'label', array("label" => "Contraseña actual"));
            echo "
           ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "oldPassword", array()), 'widget', array("attr" => array("class" => "form-control width-login ", "data-parsley-trigger" => "change", "required" => "true", "data-parsley-type" => "alphanum")));
            echo "
           ";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'label', array("label" => "Contraseña nueva"));
            echo "
           ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'widget', array("attr" => array("class" => "form-control width-login ", "data-parsley-trigger" => "change", "required" => "true", "type" => "alphanum")));
            echo "
      <!--     <label for=\"login_pass\" class=\"label-login\">Contraseña actual</label>
           <input id=\"password\" type=\"password\" name=\"password\" class=\"form-control width-login\" id=\"passwordRe\" data-trigger=\"change\" data-required=\"true\" data-type=\"alphanum\"/>   
           <label for=\"login_pass\" class=\"label-login\">Contraseña nueva</label>
           <input id=\"usuariotype_password\" type=\"password\" name=\"usuariotype_password\" class=\"form-control width-login\" id=\"passwordRe\" data-trigger=\"change\" data-required=\"true\" data-type=\"alphanum\"/>   
    -->       ";
        }
        // line 25
        echo "           <label for=\"login_pass\" class=\"label-login\">Repetir Contraseña</label>
           <input id=\"passwordRe\" type=\"password\" name=\"passwordRe\" class=\"form-control width-login\" id=\"passwordRe\" data-parsley-trigger=\"change\" required=\"true\" data-parsley-equalto=\"#usuariotype_password\" data-parsley-type=\"alphanum\"/>   
           <input type=\"submit\" class=\"btn btn-success\" value=\"Guardar\"/> ó <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("advertiser_panel");
        echo "\">Cancelar</a>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsUserBundle:Default:reset-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  93 => 25,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 15,  65 => 14,  61 => 13,  57 => 12,  50 => 11,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
