<?php

/* Index/index.html.twig */
class __TwigTemplate_53b602258c5a273de9967529ab249ca371d7699b0355069b6e4fca5f05d869bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["layout"]) ? $context["layout"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col_drcha\">
        ";
        // line 5
        $this->env->loadTemplate("Index/sliderImagenes.html.twig")->display($context);
        // line 6
        echo "\t<div class=\"media\">
            ";
        // line 7
        $this->env->loadTemplate("Index/novedades.html.twig")->display($context);
        // line 8
        echo "            ";
        if ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "eventos")) {
            // line 9
            echo "                ";
            $this->env->loadTemplate("Index/eventos.html.twig")->display($context);
            echo "           
                ";
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                ";
            $this->env->loadTemplate("Index/contenidosVisitados.html.twig")->display($context);
            echo "  
            ";
        }
        // line 14
        echo "\t</div>

\t<div class=\"media\">
            <div class=\"media_izqda border_top\">
                <span class=\"raya azul\"></span>
                <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "bienvenidaDelPresidente"), "method"), "html", null, true);
        echo "</h1>
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "presidente"), "getPathNameImagenN", array(0 => 1), "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "bienvenidaDelPresidente"), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "bienvenidaDelPresidente"), "method"), "html", null, true);
        echo "\" />
                <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "presidente"), "Resumen"), "html", null, true);
        echo "</p>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "link", array(0 => $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "ampliar"), "method"), 1 => null, 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "presidente"), "Href"), "url"), 3 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "presidente"), "Href"), "targetBlank"), 4 => null, 5 => "boton right"), "method"), "html", null, true);
        echo "
            </div>
                
            ";
        // line 25
        $this->env->loadTemplate("Index/albumes.html.twig")->display($context);
        echo "  

\t</div>
    </div>\t
";
    }

    public function getTemplateName()
    {
        return "Index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  83 => 22,  79 => 21,  67 => 20,  63 => 19,  56 => 14,  50 => 12,  47 => 11,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
