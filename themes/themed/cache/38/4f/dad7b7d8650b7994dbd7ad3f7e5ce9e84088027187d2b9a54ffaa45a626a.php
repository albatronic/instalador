<?php

/* _global/googleAnalytics.js.twig */
class __TwigTemplate_384fdad7b7d8650b7994dbd7ad3f7e5ce9e84088027187d2b9a54ffaa45a626a extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "idGoogleAnalytics")) {
            // line 3
            echo "    <script type=\"text/javascript\">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "meta"), "idGoogleAnalytics"), "html", null, true);
            echo "']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_trackPageLoadTime']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "_global/googleAnalytics.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  148 => 41,  142 => 39,  133 => 36,  126 => 35,  116 => 32,  108 => 31,  100 => 30,  96 => 29,  84 => 21,  82 => 20,  78 => 19,  73 => 17,  65 => 15,  60 => 14,  53 => 11,  687 => 198,  678 => 197,  675 => 196,  664 => 195,  648 => 192,  633 => 191,  618 => 188,  615 => 187,  612 => 186,  609 => 185,  597 => 184,  581 => 165,  563 => 152,  558 => 149,  545 => 148,  533 => 144,  518 => 142,  515 => 141,  500 => 139,  498 => 138,  495 => 137,  482 => 136,  467 => 121,  461 => 120,  453 => 119,  447 => 118,  443 => 117,  438 => 116,  433 => 114,  428 => 113,  412 => 112,  400 => 99,  383 => 97,  379 => 96,  374 => 94,  361 => 92,  349 => 91,  344 => 90,  332 => 89,  314 => 77,  306 => 76,  293 => 74,  287 => 72,  285 => 71,  271 => 70,  257 => 60,  253 => 59,  248 => 58,  241 => 54,  237 => 52,  229 => 47,  214 => 43,  208 => 42,  205 => 41,  203 => 40,  196 => 39,  185 => 38,  171 => 31,  167 => 30,  162 => 29,  152 => 26,  135 => 23,  132 => 22,  120 => 33,  106 => 16,  97 => 14,  87 => 11,  75 => 10,  70 => 8,  55 => 6,  44 => 170,  35 => 101,  28 => 63,  22 => 2,  19 => 2,  150 => 22,  147 => 21,  144 => 20,  140 => 38,  137 => 24,  134 => 16,  130 => 14,  127 => 13,  124 => 34,  119 => 11,  113 => 44,  110 => 43,  107 => 42,  105 => 41,  102 => 15,  99 => 39,  95 => 37,  92 => 36,  86 => 33,  80 => 30,  76 => 29,  72 => 9,  69 => 16,  64 => 24,  61 => 23,  59 => 20,  54 => 16,  51 => 15,  49 => 12,  45 => 11,  41 => 146,  38 => 124,  33 => 7,  31 => 5,  25 => 3,  23 => 1,  89 => 24,  83 => 22,  79 => 21,  67 => 7,  63 => 19,  56 => 12,  50 => 10,  47 => 190,  42 => 8,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 6,);
    }
}
