<?php

/* :includes:dialogEmailRegistro.html.twig */
class __TwigTemplate_8368abd74cafb1e7eb082eb47a47b7e28ec3e6ad7327e1aeff367f051ad19cc9 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"emailRegDialog\">
   <div class=\"modal-dialog\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">Reenviar email para confirmar activación de cuenta.</h4>
         </div>
            <div class=\"modal-body\">
               <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_register_confirmation");
        echo "\" class=\"form-login\" method=\"POST\" data-validate=\"parsley\">
                   <label for=\"login_user\" class=\"label-login\">Por favor ingrese su email.</label>
                   <input id=\"login_user\" type=\"text\" name=\"email\" placeholder=\"email\" class=\"form-control width-login\" data-type=\"email\" data-trigger=\"change\" data-required=\"true\"/>
                   <input type=\"submit\" class=\"btn btn-success\" value=\"Enviar\"/>   
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">Cerrar</button>
            </div>
      </div>
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return ":includes:dialogEmailRegistro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }
}
