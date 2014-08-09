<?php

/* /Index/video.html.twig */
class __TwigTemplate_23fa8c4db413e019baf2e58ea0c75273ec638bac96027b09378c98232c459528 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "urlVideo")) {
            // line 3
            echo "<div id=\"video\">
    ";
            // line 5
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "url"), "url"), "html", null, true);
            echo "\" title=\"\">
\t<img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "imagen"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "titulo"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "titulo"), "html", null, true);
            echo "\" />
\t<span><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/images/play.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "titulo"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "titulo"), "html", null, true);
            echo "\" /></span>
    </a>
    <h5><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "url"), "url"), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "videoYoutube"), 0, array(), "array"), "titulo"), "html", null, true);
            echo "</a></h5>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/Index/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  21 => 3,  76 => 15,  67 => 11,  32 => 6,  44 => 8,  39 => 7,  31 => 5,  27 => 4,  64 => 18,  61 => 17,  28 => 5,  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 14,  69 => 21,  55 => 19,  52 => 9,  46 => 12,  30 => 8,  26 => 7,  49 => 8,  33 => 8,  23 => 3,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 16,  87 => 16,  84 => 15,  70 => 20,  57 => 16,  37 => 9,  35 => 10,  24 => 5,  22 => 2,  40 => 10,  29 => 6,  25 => 4,  19 => 2,);
    }
}
