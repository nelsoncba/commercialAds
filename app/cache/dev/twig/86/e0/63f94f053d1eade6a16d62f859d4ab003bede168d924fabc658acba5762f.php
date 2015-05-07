<?php

/* CommercialAdsUserBundle:Default:login-box.html.twig */
class __TwigTemplate_86e063f94f053d1eade6a16d62f859d4ab003bede168d924fabc658acba5762f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsUserBundle:Default:user.html.twig", "CommercialAdsUserBundle:Default:login-box.html.twig", 1);
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
        echo " Login ";
    }

    // line 5
    public function block_user($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"box-login contorno\">
    <div class=\"titulo-menulat\"><h4>Accede a tu cuenta</h4></div>
    <div style=\"margin-left: 20px; margin-right: 20px;\">Acceda al demo con Email: anunciante@anunciante.com y Password: anunciante</div>
    ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "        ";
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()) == "User account is disabled.")) {
                // line 11
                echo "           <div class=\"error-form\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
                echo "<a href=\"#emailRegDialog\" role=\"button\" data-toggle=\"modal\">¿No recibió email?</a></div>
        ";
            } else {
                // line 13
                echo "           <div class=\"error-form\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array())), "html", null, true);
                echo "</div>
        ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("user_login_check");
        echo "\" class=\"form-login\" method=\"POST\" data-validate=\"parsley\">
            <label for=\"login_user\" class=\"label-login\">Email</label>
            <input id=\"login_user\" type=\"text\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\" class=\"form-control width-login input-sm\" data-parsley-type=\"email\" data-parsley-trigger=\"change\" required=\"true\"/>
            <label for=\"login_pass\" class=\"label-login\">Contraseña</label>
            <input id=\"login_pass\" type=\"password\" name=\"_password\" class=\"form-control width-login input-sm\" data-parsley-trigger=\"change\" required=\"true\"/>
            <input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" class=\"label-login select\" />
            <label for=\"no_cerrar\" class=\"label-login\">No cerrar sesión</label><br>
            <input type=\"submit\" class=\"btn btn-success\" value=\"Ingresar\"/>   ó   <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("user_register");
        echo "\">Registrarse</a> 
            <br><br><a href=\"#resetPassDialog\" role=\"button\" data-toggle=\"modal\" >¿Olvidó su contraseña?</a>
    </form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsUserBundle:Default:login-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  69 => 18,  63 => 16,  60 => 15,  54 => 13,  48 => 11,  45 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
