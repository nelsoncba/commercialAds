<?php

/* CommercialAdsUserBundle:emails:registerEmail.html.twig */
class __TwigTemplate_3c2e8cb8bc62f2f4258a00871b2c57338e8433cfd5bc00bbc9293b2a454ab815 extends Twig_Template
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
                Hola Nelson, bienvenido a LocalOfertas.com!
                <br><br>
                Debes activar tu cuenta para completar tu registro en LocalOfertas.com y comenzar a publicar.
                <br><br>
                Para confirmar tu registro, haz click en el siguiente link:<br>
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("user_registration_confirmation", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\">http://www.localofertas.com/confirmar-registro/";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</a>
                <br><br>
                ¡Gracias por registrarte en LocalOfertas.com!
                <br><br><br>
                Usted se ha registrado con los siguientes datos:<br>
                Usuario: <span style=\"font-weight: bold\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</span>  <br>
                Email:  <span style=\"font-weight: bold\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</span> <br>
                Contraseña: <span style=\"font-weight: bold\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "</span><br>
                <br>
                Por favor no responder este correo electrónico, ya que es un mensaje enviado de forma automática.
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
        return "CommercialAdsUserBundle:emails:registerEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 31,  63 => 30,  59 => 29,  49 => 24,  32 => 12,  19 => 1,);
    }
}
