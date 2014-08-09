<?php

/* /Index/galeria.html.twig */
class __TwigTemplate_78fe2fb7410c7c23c1b8f08bc875bd052a6ad259838e711760b05002663a8eb1 extends Twig_Template
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
        echo "<ul class=\"galeria\">
    
    ";
        // line 3
        $context["nItems"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "galeriaFotos"), 0, array(), "array"), "bloqueThumbnail"));
        // line 4
        echo "        
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "galeriaFotos"), 0, array(), "array"), "bloqueThumbnail"));
        foreach ($context['_seq'] as $context["key"] => $context["galeria"]) {
            // line 6
            echo "\t<li ";
            if (((isset($context["nItems"]) ? $context["nItems"] : null) == ((isset($context["key"]) ? $context["key"] : null) + 1))) {
                echo "class=\"ultimo\"";
            }
            echo ">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "PathName"), "html", null, true);
            echo "\" rel=\"gallery\" class=\"pirobox_gall1\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "Title"), "html", null, true);
            echo "\">
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "PathNameThumbnail"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "Title"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "Title"), "html", null, true);
            echo "\" />
            </a>
\t</li>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['galeria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    
</ul>

";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "galeriaFotos"), 0, array(), "array"), "restoImagenes"));
        foreach ($context['_seq'] as $context["_key"] => $context["galeria"]) {
            // line 15
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "PathName"), "html", null, true);
            echo "\" rel=\"gallery\" class=\"pirobox_gall1\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "Title"), "html", null, true);
            echo "\"></a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galeria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  

<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/galeria\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "masAlbumes"), "method"), "html", null, true);
        echo "\" class=\"albumes\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "masAlbumes"), "method"), "html", null, true);
        echo "</a>\t\t\t";
    }

    public function getTemplateName()
    {
        return "/Index/galeria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  67 => 11,  32 => 6,  44 => 8,  39 => 7,  31 => 5,  27 => 4,  64 => 18,  61 => 17,  28 => 5,  96 => 30,  86 => 27,  80 => 25,  74 => 23,  72 => 14,  69 => 21,  55 => 19,  52 => 18,  46 => 12,  30 => 8,  26 => 7,  49 => 8,  33 => 8,  23 => 3,  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 16,  87 => 16,  84 => 15,  70 => 20,  57 => 16,  37 => 9,  35 => 10,  24 => 3,  22 => 2,  40 => 10,  29 => 7,  25 => 4,  19 => 1,);
    }
}
