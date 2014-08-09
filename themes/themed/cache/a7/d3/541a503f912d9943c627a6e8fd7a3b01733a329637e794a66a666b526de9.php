<?php

/* _global/debuger.html.twig */
class __TwigTemplate_a7d3541a503f912d9943c627a6e8fd7a3b01733a329637e794a66a666b526de9 extends Twig_Template
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
<div style=\"clear:both;\">
    <pre>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "_debugValues"), "html", null, true);
        echo "</pre>
</div>      ";
    }

    public function getTemplateName()
    {
        return "_global/debuger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  56 => 7,  50 => 6,  38 => 4,  41 => 7,  21 => 3,  76 => 15,  67 => 11,  32 => 3,  44 => 5,  39 => 7,  31 => 5,  27 => 4,  64 => 18,  61 => 17,  28 => 5,  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 14,  69 => 21,  55 => 19,  52 => 9,  46 => 12,  30 => 8,  26 => 2,  49 => 8,  33 => 8,  23 => 4,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 16,  87 => 16,  84 => 15,  70 => 20,  57 => 16,  37 => 9,  35 => 10,  24 => 4,  22 => 2,  40 => 10,  29 => 6,  25 => 4,  19 => 2,);
    }
}
