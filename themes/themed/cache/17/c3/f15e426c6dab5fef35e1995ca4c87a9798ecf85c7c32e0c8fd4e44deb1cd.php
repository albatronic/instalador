<?php

/* Index/albumes.html.twig */
class __TwigTemplate_17c3f15e426c6dab5fef35e1995ca4c87a9798ecf85c7c32e0c8fd4e44deb1cd extends Twig_Template
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
        echo "<div class=\"media_drcha\">
    ";
        // line 2
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "galeriaFotos"))) {
            // line 3
            echo "        <span class=\"raya verde\"></span>
        <h1>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "albumesFotograficos"), "method"), "html", null, true);
            echo "</h1>
        <h4><a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/galeria\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "masAlbumes"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "galeriaFotos"), 0, array(), "array"), "titulo"), "html", null, true);
            echo "</a></h4>
        ";
            // line 6
            $this->env->loadTemplate("/Index/galeria.html.twig")->display($context);
            echo " 
    ";
        }
        // line 8
        echo "    ";
        $this->env->loadTemplate("/Index/video.html.twig")->display($context);
        echo "  
</div>\t\t";
    }

    public function getTemplateName()
    {
        return "Index/albumes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  39 => 6,  31 => 5,  27 => 4,  64 => 18,  61 => 17,  28 => 6,  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 22,  69 => 21,  55 => 19,  52 => 18,  46 => 12,  30 => 8,  26 => 7,  49 => 17,  33 => 8,  23 => 4,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  70 => 20,  57 => 16,  37 => 9,  35 => 10,  24 => 3,  22 => 2,  40 => 10,  29 => 7,  25 => 10,  19 => 1,);
    }
}
