<?php

/* _global/avisoCookies.html.twig */
class __TwigTemplate_861012b6f9925748143c9af260b804fd5e172dfd1da71f935807f595331c463c extends Twig_Template
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
        if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "session_id") == "")) {
            // line 3
            echo "<div id=\"cookie-compliant\" class=\"clearfix\">
   <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "avisoCookies"), "method"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/aviso-cookies\" rel=\"iframe-800-550\" class=\"pirobox\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "masInfo"), "method"), "html", null, true);
            echo "\" id=\"contenidosLegales\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "masInfo"), "method"), "html", null, true);
            echo "</a></p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/avisoCookies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  21 => 3,  76 => 15,  67 => 11,  32 => 6,  44 => 8,  39 => 7,  31 => 5,  27 => 4,  64 => 18,  61 => 17,  28 => 5,  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 14,  69 => 21,  55 => 19,  52 => 9,  46 => 12,  30 => 8,  26 => 7,  49 => 8,  33 => 8,  23 => 3,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 16,  87 => 16,  84 => 15,  70 => 20,  57 => 16,  37 => 9,  35 => 10,  24 => 4,  22 => 2,  40 => 10,  29 => 6,  25 => 4,  19 => 2,);
    }
}
