<?php

/* CommercialAdsUserBundle:Default:registration-box.html.twig */
class __TwigTemplate_3e51b4a87284413c9c20aa5f92e92d33d546732e7141c95ca49d19cc2d69d354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsUserBundle:Default:user.html.twig", "CommercialAdsUserBundle:Default:registration-box.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Registro ";
    }

    // line 3
    public function block_user($context, array $blocks = array())
    {
        // line 4
        echo "         <div>";
        $this->loadTemplate(":includes:flashes.html.twig", "CommercialAdsUserBundle:Default:registration-box.html.twig", 4)->display($context);
        echo "</div>
            <div class=\"box-login contorno\">
                <div class=\"titulo-menulat\"><h4>Registrarse en LocalOfertas</h4></div>
                    <div style=\"margin-left: 20px; margin-right: 20px;\">En este formulario no se activa ningun nuevo usuario pero puede probar el envío de mail de registro</div>
                        <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo " data-validate=\"parsley\" class=\"form-login\" method=\"POST\">
                            <div class=\"error-form\">";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
                            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'errors');
        echo "</div>
                            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "user", array()), 'label');
        echo "
                            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "user", array()), 'widget', array("attr" => array("class" => "form-control width-login input-sm", "data-parsley-trigger" => "change", "required" => "true")));
        echo "
                            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'label', array("label" => "Email"));
        echo "
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'widget', array("attr" => array("class" => "form-control width-login input-sm", "data-parsley-type" => "email", "data-parsley-trigger" => "change", "required" => "true")));
        echo "
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'label', array("label" => "Contraseña"));
        echo "
                            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'widget', array("value" => "", "type" => "password", "attr" => array("class" => "form-control width-login input-sm", "data-parsley-trigger" => "change", "required" => "true", "data-parsley-type" => "alphanum", "min" => "5", "max" => "10")));
        echo "
                            <label for=\"login_pass\" class=\"label-login\">Repetir Contraseña</label>
                            <input id=\"passwordRe\" type=\"password\" name=\"passwordRe\" class=\"form-control width-login input-sm\" id=\"passwordRe\" data-parsley-trigger=\"change\" required=\"true\" data-parsley-equalto=\"#usuariotype_password\"/>   
                            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "type", array()), 'label', array("label" => "Usted es:"));
        echo "
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "type", array()), 'widget', array("attr" => array("class" => "form-control width-login")));
        echo "
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
                            <input type=\"submit\" class=\"btn btn-success\" value=\"Registrar\"/>
                        </form>
                <div class=\"form-note\">Al enviar sus datos usted acepta nuestras <a href=\"#\">reglas y condiciones</a> para el uso de este servicio. </div>
            </div>
 ";
    }

    public function getTemplateName()
    {
        return "CommercialAdsUserBundle:Default:registration-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  90 => 20,  86 => 19,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  46 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
