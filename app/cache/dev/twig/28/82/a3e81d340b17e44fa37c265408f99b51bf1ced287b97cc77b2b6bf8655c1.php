<?php

/* CommercialAdsAdvertiserBundle:Default:publish-ad.html.twig */
class __TwigTemplate_2882a3e81d340b17e44fa37c265408f99b51bf1ced287b97cc77b2b6bf8655c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommercialAdsAdvertiserBundle:Default:advertiser-main.html.twig", "CommercialAdsAdvertiserBundle:Default:publish-ad.html.twig", 1);
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
        echo " Publicar Anunciante ";
    }

    // line 9
    public function block_advertiser($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 box-datos-anun panel panel-default\">
    <div class=\"titulo-menulat\"><h4>Publicar Anuncio</h4></div>
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("publish_ad");
        echo "\" id=\"form-publicar\" data-validate=\"parsley\" class=\"form-anunciante\" method=\"POST\" enctype=\"multipart/form-data\">
        <label class=\"label-anuncio\">
            <input type=\"radio\" name=\"type\" value=\"0\" checked/>
            Aviso <span class=\"\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">(Duración de aviso 30 días)</span>
        </label><br>
        <label class=\"label-anuncio\">
            <input type=\"radio\" name=\"type\" value=\"1\"/>
            Oferta <span class=\"\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">(Duración de oferta 5 días)</span>
        </label>
    <div class=\"row \">
        <div class=\"col-sm-12 col-md-12 col-lg-6\">
            <label for=\"Categoria\" class=\"label-anuncio\">Categoría: </label>
            <select type=\"text\" id=\"categoria\" name=\"category\"  class=\"form-control width-data-anun\" data-parsley-required=\"true\">
                ";
        // line 25
        echo "<option>Seleccione Categoria</option>";
        echo "
                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo " 
            </select>
            <label for=\"Subcategoria\" class=\"label-anuncio\">Subcategoría: </label>
            <select type=\"text\" id=\"subcategoria\" name=\"subcategory\"  class=\"form-control width-data-anun\" data-parsley-required=\"true\">
            
            </select>
            <div><label for=\"Título\" class=\"label-anuncio\">Título: </label>
            <input type=\"text\"  name=\"title\" class=\"form-control\" value=\"\" data-parsley-minlength=\"10\" data-parsley-required=\"true\"/>
            <span style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">Escriba un título que impacte en un potencial cliente.</span></div>
            <label for=\"Descripcion\" class=\"label-anuncio\">Descripción: </label>
            <textarea rows=\"7\" cols=\"50\" type=\"text\"  name=\"description\" class=\"form-control\" value=\"\" data-parsley-minlength=\"50\" data-parsley-required=\"true\"></textarea>
            <span class=\"\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">Escriba una descripción de su producto o servicio resaltando aspectos que llamen la atención a potenciales clientes.</span>      
        </div>
        <div class=\"col-sm-12 col-md-12 col-lg-6\">
           <div>
                <label for=\"Precio\" class=\"label-anuncio\">Precio / descuento: </label>
                <div class=\"\">
                    <div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3 aviso-container\">
                        <select class=\"form-control\" name=\"typePrice\" style=\"width: 65px;\"><option value=\"pesos\">\$</option><option value=\"porcentaje\">%</option></select>
                    </div>
                    <div class=\"col-xs-8 col-sm-9 col-md-9 col-lg-9 aviso-container\">
                        <input type=\"text\" id=\"calle\" name=\"price\" class=\"form-control\" value=\"0\"/>
                    </div>
                 </div>
                <span style=\"font-size: 12px; margin-left: 1px; color: darkgray;\"> Ingresar precio o % en descuento. (opcional)</span>
            </div>
           ";
        // line 59
        echo "            
            <label for=\"Imagen\" class=\"label-anuncio\">Imágenes: </label>
            <div class=\"help-img\" style=\"font-size: 12px; margin-left: 1px; margin-bottom: 10px; color: darkgray;\">Fotos formato jpeg, jpg, png; peso menor a 1 MB. </div>
            <div class=\"mini-photo-content\">
                <div style=\"float:left;\">
                    <input type=\"file\" id=\"photo1\"  name=\"image1\" class=\"form-control  photo-aviso\" />
                    <span class=\"invalid-message1\" data-photo-ins=\"Foto principal.\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">Foto principal.</span>
                </div>
                <div style=\"float:right;\">
                    <span id=\"mini-photo1\" class=\"mini-photo\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/upload-img.png"), "html", null, true);
        echo "\"  width=\"60\" height=\"50\" /></span>
                </div>
            </div>
            <div class=\"mini-photo-content\">
                <div style=\"float:left;\">
                    <input type=\"file\" id=\"photo2\"  name=\"image2\" class=\"form-control photo-aviso\" />
                    <span class=\"invalid-message2\" data-photo-ins=\"Foto 1.\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">Foto 1.</span>
                </div>
                <div style=\"float:right;\">
                    <span id=\"mini-photo2\" class=\"mini-photo\" data-photo-file=\"photo2\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/upload-img.png"), "html", null, true);
        echo "\" width=\"60\" height=\"50\"/></span>
                </div>
            </div>
            <div class=\"mini-photo-content\">
                <div style=\"float:left;\">
                    <input type=\"file\" id=\"photo3\" name=\"image3\" class=\"form-control photo-aviso\" />
                    <span class=\"invalid-message3\" data-photo-ins=\"Foto 2.\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">Foto 2.</span>
                </div>
                <div style=\"float:right;\"><span id=\"mini-photo3\" class=\"mini-photo\" data-photo-file=\"photo3\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/upload-img.png"), "html", null, true);
        echo "\" width=\"60\" height=\"50\"/></span></div>
            </div>
            <div class=\"mini-photo-content\">
                <div style=\"float:left;\">
                    <input type=\"file\" id=\"photo4\" name=\"image4\" class=\"form-control photo-aviso\" />
                    <span class=\"invalid-message4\" data-photo-ins=\"Foto 3.\" style=\"font-size: 12px; margin-left: 1px; color: darkgray;\">Foto 3.</span>
                </div>
                    <div style=\"float:right;\"><span id=\"mini-photo4\" class=\"mini-photo\" data-photo-file=\"photo4\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/upload-img.png"), "html", null, true);
        echo "\" width=\"60\" height=\"50\"/></span></div>
            </div>
        </div>
    </div>
<input type=\"submit\" class=\"btn btn-success btn-form\" value=\"Publicar aviso\"/>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "CommercialAdsAdvertiserBundle:Default:publish-ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 92,  150 => 85,  139 => 77,  127 => 68,  116 => 59,  88 => 28,  77 => 27,  73 => 26,  69 => 25,  53 => 12,  49 => 10,  46 => 9,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
