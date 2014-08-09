<?php

/* Index/novedades.html.twig */
class __TwigTemplate_53d80bf8eadd8a9e271013fb2b5fd66c1a9e415584ea5110689512245d44b64e extends Twig_Template
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
        // line 2
        echo "
<div class=\"media_izqda\">
    ";
        // line 4
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "carruselNoticias"), "rows")) > 0)) {
            // line 5
            echo "    <div id=\"noticias_top\"></div>
    <div id=\"noticias_inter\">
        <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "noticias"), "method"), "html", null, true);
            echo "</h1>
        ";
            // line 8
            $this->env->loadTemplate("Index/carruselNoticias.html.twig")->display($context);
            // line 9
            echo "    </div>
    <div id=\"noticias_bottom\"></div>

    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/noticias\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "verMasNoticias"), "method"), "html", null, true);
            echo "\" class=\"boton right\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "verMasNoticias"), "method"), "html", null, true);
            echo "</a>
    ";
        }
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "Index/novedades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  33 => 8,  23 => 4,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  70 => 12,  57 => 11,  37 => 9,  35 => 9,  24 => 4,  22 => 3,  40 => 12,  29 => 7,  25 => 5,  19 => 2,);
    }
}
