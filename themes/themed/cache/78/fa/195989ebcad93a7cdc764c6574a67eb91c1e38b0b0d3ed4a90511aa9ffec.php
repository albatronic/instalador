<?php

/* Index/carruselNoticias.html.twig */
class __TwigTemplate_78fa195989ebcad93a7cdc764c6574a67eb91c1e38b0b0d3ed4a90511aa9ffec extends Twig_Template
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
<div class=\"slider_noticias\">
    <div class=\"flechas\">
        <ul class=\"widget_custom_portfolio_entries_slides responsiveContentSlider\">

            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "carruselNoticias"), "rows"));
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 8
            echo "                <li><h2>
\t\t    ";
            // line 9
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo")) > 50)) {
                // line 10
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "link", array(0 => twig_slice($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo"), (isset($context["start"]) ? $context["start"] : null), 50), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "targetBlank")), "method"), "html", null, true);
                echo " ...";
            } else {
                // line 11
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "link", array(0 => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo"), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "targetBlank")), "method"), "html", null, true);
                echo "
\t\t    ";
            }
            // line 13
            echo "\t\t    </h2>
                    ";
            // line 17
            echo "                    ";
            $context["imagen"] = $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPathNameImagenN", array(0 => 1), "method");
            // line 18
            echo "                    ";
            if ((isset($context["imagen"]) ? $context["imagen"] : null)) {
                // line 19
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["imagen"]) ? $context["imagen"] : null), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo"), "html", null, true);
                echo "\" class=\"img_noticias\" />
                    ";
            }
            // line 21
            echo "                    
\t\t    ";
            // line 22
            if ($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "imagen")) {
                // line 23
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "recortaTexto", array(0 => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Resumen"), 1 => 100), "method"), "html", null, true);
                echo "</p>
\t\t    ";
            } else {
                // line 25
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "recortaTexto", array(0 => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Resumen"), 1 => 150), "method"), "html", null, true);
                echo "</p>                  
\t\t    ";
            }
            // line 27
            echo "\t\t    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "link", array(0 => "+", 1 => $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "seguirLeyendo"), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "targetBlank"), 4 => null, 5 => "saber_mas"), "method"), "html", null, true);
            echo "\t\t\t    
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Index/carruselNoticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 22,  69 => 21,  55 => 19,  52 => 18,  46 => 13,  30 => 8,  26 => 7,  49 => 17,  33 => 9,  23 => 4,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  70 => 12,  57 => 11,  37 => 9,  35 => 10,  24 => 4,  22 => 3,  40 => 11,  29 => 7,  25 => 5,  19 => 2,);
    }
}
