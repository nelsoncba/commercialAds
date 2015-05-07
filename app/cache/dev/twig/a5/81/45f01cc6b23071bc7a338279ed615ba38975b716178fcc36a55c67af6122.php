<?php

/* CommercialAdsUserBundle:emails:resetPassword.html.twig */
class __TwigTemplate_a58145f01cc6b23071bc7a338279ed615ba38975b716178fcc36a55c67af6122 extends Twig_Template
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
        echo "<html>
<head>
    <style>
        body { font: 13px/1.5 Arial, sans-serif; }
        ul { margin-left: .5em; padding-left: 0; }
    </style>
</head>

<body>
    <table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;\" width=\"100%\">
        <tr style=\"background: #FFF; color:  #cc0000; border:1px solid #ccc;\">
            <td style=\"padding: 1em; width: 300px;\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo10.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\"></a></a></td>
            <td style=\"text-align: justify; padding: 1em;\"><span style=\"color: #ff4040; display: block; font-size: 24px;\">Bienvenido a LocalOfertas.com!!</span></td>
        </tr>

        <tr style=\"background: #DDEBEB;\">
            <td style=\"padding: 10px; \" colspan=\"2\">
                <div style=\"background: #FFF; border:1px solid #ccc; padding: 20px; margin-left: 200px; margin-right: 200px; \">
                Hola ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo ".
                <br><br>
                Si no recuerdas tu contraseña puedes redefinirla ingresando al siguiente enlace.
                <br><br>
                Resetea tu contraseña:<br>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_reset_password", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\">http://www.localofertas.com/reset-password/";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</a>
                <br><br>
                Si recuerdas tu contraseña no es necesario reestablecerla y puedes ignorar este mensaje.
                <br><br><br>
                Ante cualquier consulta estamos a tu disposición. LocalOfertas.com
                <br><br>
               <p style=\"font-size: 12px;\"> Por favor no responder este correo electrónico, ya que es un mensaje enviado de forma automática.</p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=\"2\" style=\"color: #AAA; font-size: 13px;\">
            </td>
        </tr>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsUserBundle:emails:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 24,  44 => 19,  32 => 12,  19 => 1,);
    }
}
