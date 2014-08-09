<?php

/* _global/meta.twig */
class __TwigTemplate_5f37b32ef43b8a6b346738541ed9f3ecf4cc6fda999ab7264bf330e071e4ac2b extends Twig_Template
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
        echo "<title>";
        ob_start();
        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "titleSimple")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "title"), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "titlePosition")) {
                // line 6
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "webName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "title"), "html", null, true);
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "title"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "webName"), "html", null, true);
                echo "    
        ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 12
        echo "</title>
<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
<link rel=\"canonical\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "url"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["urlAmigable"]) ? $context["urlAmigable"] : null), "html", null, true);
        echo "\">
<meta name=\"Title\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "title"), "html", null, true);
        echo "\"/>
<meta name=\"Description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "description"), "html", null, true);
        echo "\"/>
<meta name=\"Keywords\" content=\"'";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "keyWords"), "html", null, true);
        echo "\"/>
<meta name=\"Robots\" content=\"all\"/>
<meta name=\"Author\" content=\"'";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "author"), "html", null, true);
        echo "\"/>
";
        // line 20
        if (((isset($context["controller"]) ? $context["controller"] : null) == "Index")) {
            // line 21
            echo "    <meta name=\"resource-type\" content=\"Homepage\"/>
    <meta name=\"doc-type\" content=\"Homepage\"/>
";
        }
        // line 24
        echo "<meta name=\"Classification\" content=\"General\"/>
<meta name=\"Distribution\" content=\"Global\"/>
<meta http-equiv=\"Pragma\" content=\"no-cache\"/>
<meta http-equiv=\"Cache-Control\" content=\"no-cache\"/>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<meta name=\"Revisit-after\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "revisitAfter"), "html", null, true);
        echo "\"/>
<meta name=\"robots\" content=\"";
        // line 30
        if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "blockRobots") == "1")) {
            echo "noindex,nofollow";
        } else {
            echo "index,follow";
        }
        echo "\" />
<meta name=\"googlebot\" content=\"";
        // line 31
        if (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "blockRobots") == "1")) {
            echo "noindex,nofollow";
        } else {
            echo "index,follow";
        }
        echo "\" />
<meta name=\"geo.region\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoRegion"), "html", null, true);
        echo "\"/>
<meta name=\"geo.placename\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPlaceName"), "html", null, true);
        echo "\"/>
";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPositionLatitude") && $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPositionLongitude"))) {
            // line 35
            echo "    <meta name=\"geo.position\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPositionLatitude"), "html", null, true);
            echo ";";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPositionLongitude"), "html", null, true);
            echo "\"/>
    <meta name=\"ICBM\" content=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPositionLatitude"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "geoPositionLongitude"), "html", null, true);
            echo "\"/>    
";
        }
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "urlImagen")) {
            // line 39
            echo "<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "urlImagen"), "html", null, true);
            echo "\">
";
        }
        // line 41
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/favicon.ico\" rel=\"shortcut icon\" hreflang=\"es\" />
";
    }

    public function getTemplateName()
    {
        return "_global/meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  142 => 39,  133 => 36,  126 => 35,  116 => 32,  108 => 31,  100 => 30,  96 => 29,  84 => 21,  82 => 20,  78 => 19,  73 => 17,  65 => 15,  60 => 14,  53 => 11,  687 => 198,  678 => 197,  675 => 196,  664 => 195,  648 => 192,  633 => 191,  618 => 188,  615 => 187,  612 => 186,  609 => 185,  597 => 184,  581 => 165,  563 => 152,  558 => 149,  545 => 148,  533 => 144,  518 => 142,  515 => 141,  500 => 139,  498 => 138,  495 => 137,  482 => 136,  467 => 121,  461 => 120,  453 => 119,  447 => 118,  443 => 117,  438 => 116,  433 => 114,  428 => 113,  412 => 112,  400 => 99,  383 => 97,  379 => 96,  374 => 94,  361 => 92,  349 => 91,  344 => 90,  332 => 89,  314 => 77,  306 => 76,  293 => 74,  287 => 72,  285 => 71,  271 => 70,  257 => 60,  253 => 59,  248 => 58,  241 => 54,  237 => 52,  229 => 47,  214 => 43,  208 => 42,  205 => 41,  203 => 40,  196 => 39,  185 => 38,  171 => 31,  167 => 30,  162 => 29,  152 => 26,  135 => 23,  132 => 22,  120 => 33,  106 => 16,  97 => 14,  87 => 11,  75 => 10,  70 => 8,  55 => 6,  44 => 170,  35 => 101,  28 => 63,  22 => 2,  19 => 1,  150 => 22,  147 => 21,  144 => 20,  140 => 38,  137 => 24,  134 => 16,  130 => 14,  127 => 13,  124 => 34,  119 => 11,  113 => 44,  110 => 43,  107 => 42,  105 => 41,  102 => 15,  99 => 39,  95 => 37,  92 => 36,  86 => 33,  80 => 30,  76 => 29,  72 => 9,  69 => 16,  64 => 24,  61 => 23,  59 => 20,  54 => 16,  51 => 15,  49 => 12,  45 => 11,  41 => 146,  38 => 124,  33 => 7,  31 => 5,  25 => 3,  23 => 1,  89 => 24,  83 => 22,  79 => 21,  67 => 7,  63 => 19,  56 => 12,  50 => 10,  47 => 190,  42 => 8,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
