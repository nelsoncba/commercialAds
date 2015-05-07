<?php

/* :includes:dialogEmailResetPass.html.twig */
class __TwigTemplate_cb30fcf965b3ec0731793f21b6c6e7a3f92f28d9580ef0dd854f8fdb783697d6 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"resetPassDialog\">
   <div class=\"modal-dialog\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">Enviar email para resetear contraseña.</h4>
         </div>
            <div class=\"modal-body\">
               <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_email_resetpass");
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
        return ":includes:dialogEmailResetPass.html.twig";
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
