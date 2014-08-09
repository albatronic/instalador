<?php

/* Index/sliderImagenes.html.twig */
class __TwigTemplate_ac7c38f12d098951dfd23d5a1a5b162f6519ca79068b1b740355f56a7dadbeac extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "sliderImagenes")) > 0)) {
            // line 4
            echo "<div id=\"slider\">
     
    <div id=\"featured\"> 
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "sliderImagenes"));
            foreach ($context['_seq'] as $context["key"] => $context["slider"]) {
                echo " 
            ";
                // line 8
                if ((!$this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "url"), "url"))) {
                    // line 9
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "imagen"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo")) {
                        echo " data-caption=\"#htmlCaption";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "\" ";
                    }
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "\" />              
            ";
                } else {
                    // line 11
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "url"), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo")) {
                        echo " data-caption=\"#htmlCaption";
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "\" ";
                    }
                    echo ">
                    <img src=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "imagen"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "\" />
                </a>                
            ";
                }
                // line 15
                echo "
            ";
                // line 16
                if ($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo")) {
                    echo "            
            <span class=\"orbit-caption\" id=\"htmlCaption";
                    // line 17
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "url"), "url"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "\">
                    <span class=\"titular\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "titulo"), "html", null, true);
                    echo "</span>
                    <span class=\"descripcion\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "subtitulo"), "html", null, true);
                    echo "</span>
                </a>
            </span> 
            ";
                }
                // line 23
                echo "              
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        
    </div>
\t\t\t
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Index/sliderImagenes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  112 => 23,  105 => 20,  101 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  70 => 12,  57 => 11,  37 => 9,  35 => 8,  24 => 4,  22 => 3,  40 => 12,  29 => 7,  25 => 5,  19 => 2,);
    }
}
