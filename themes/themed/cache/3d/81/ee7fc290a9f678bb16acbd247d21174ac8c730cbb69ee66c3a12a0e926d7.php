<?php

/* Index/contenidos.html.twig */
class __TwigTemplate_3d81ee7fc290a9f678bb16acbd247d21174ac8c730cbb69ee66c3a12a0e926d7 extends Twig_Template
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
";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "eventos")) < 3)) {
            // line 4
            echo "    <div class=\"media_drcha\">
        <div id=\"contenidos\">
            <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "contenidosMasVisitados"), "method"), "html", null, true);
            echo "</h1>
            <ul class=\"left\">
                ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "contenidosVisitados"));
            foreach ($context['_seq'] as $context["key"] => $context["contenido"]) {
                // line 9
                echo "                    ";
                if (((isset($context["key"]) ? $context["key"] : null) % 2 == 0)) {
                    // line 10
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "link", array(0 => (twig_slice($this->env, $this->getAttribute((isset($context["contenido"]) ? $context["contenido"] : null), "titulo"), 0, 50) . "..."), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["contenido"]) ? $context["contenido"] : null), "url"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["contenido"]) ? $context["contenido"] : null), "url"), "targetBlank")), "method"), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 12
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contenido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
            </ul>

            <ul class=\"right\">
                ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "contenidosVisitados"));
            foreach ($context['_seq'] as $context["key"] => $context["contenido"]) {
                // line 17
                echo "                    ";
                if (((isset($context["key"]) ? $context["key"] : null) % 2 == 1)) {
                    // line 18
                    echo "                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "link", array(0 => (twig_slice($this->env, $this->getAttribute((isset($context["contenido"]) ? $context["contenido"] : null), "titulo"), 0, 50) . "..."), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["contenido"]) ? $context["contenido"] : null), "url"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["contenido"]) ? $context["contenido"] : null), "url"), "targetBlank")), "method"), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 20
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['contenido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "  
            </ul>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Index/contenidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  61 => 17,  28 => 6,  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 22,  69 => 21,  55 => 19,  52 => 18,  46 => 12,  30 => 8,  26 => 7,  49 => 17,  33 => 8,  23 => 4,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  70 => 20,  57 => 16,  37 => 9,  35 => 10,  24 => 4,  22 => 3,  40 => 10,  29 => 7,  25 => 10,  19 => 2,);
    }
}
