<?php

/* _global/layoutLaptop.html.twig */
class __TwigTemplate_410d143e35b6aa18b28b517b71939ac22ad052ade971bc9309cfccf20cae43a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'bodyContacto' => array($this, 'block_bodyContacto'),
            'header' => array($this, 'block_header'),
            'contenido' => array($this, 'block_contenido'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->env->loadTemplate("_global/macros.html.twig");
        // line 2
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"es-ES\" lang=\"es-ES\">
    <head>
        ";
        // line 6
        $this->env->loadTemplate("_global/meta.twig")->display($context);
        // line 7
        echo "        ";
        $this->env->loadTemplate("_global/googleAnalytics.js.twig")->display($context);
        echo "      
        ";
        // line 8
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "archivoCss"));
        $template->display($context);
        // line 9
        echo "    </head>

    <body ";
        // line 11
        $this->displayBlock('bodyContacto', $context, $blocks);
        echo ">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "       
        ";
        // line 16
        $this->displayBlock('contenido', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "        
        ";
        // line 24
        $this->env->loadTemplate("_global/avisoCookies.html.twig")->display($context);
        echo " 
        
        ";
        // line 27
        echo "        <script type=\"text/javascript\">
            var appPath = \"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
        echo "\";
            var theme = \"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "\";
            var language = \"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : null), "html", null, true);
        echo "\";
        </script>

        ";
        // line 33
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "archivoJs"));
        $template->display($context);
        // line 34
        echo "
        ";
        // line 36
        echo "        ";
        if ((!(isset($context["chequeadaResolucionVisitante"]) ? $context["chequeadaResolucionVisitante"] : null))) {
            // line 37
            echo "        <script type=\"text/javascript\">chequeaResolucionVisitante();</script>
        ";
        }
        // line 39
        echo "    
        ";
        // line 40
        echo "            
        ";
        // line 41
        if ($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "_debugMode")) {
            // line 42
            echo "            ";
            $this->env->loadTemplate("_global/debuger.html.twig")->display($context);
            // line 43
            echo "        ";
        }
        // line 44
        echo "    </body>
</html>
";
    }

    // line 11
    public function block_bodyContacto($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "            ";
        $this->env->loadTemplate("_global/cabecera.html.twig")->display($context);
        // line 14
        echo "        ";
    }

    // line 16
    public function block_contenido($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->env->loadTemplate("_global/contenido.html.twig")->display($context);
        // line 18
        echo "        ";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $this->env->loadTemplate("_global/pie.html.twig")->display($context);
        // line 22
        echo "        ";
    }

    public function getTemplateName()
    {
        return "_global/layoutLaptop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 22,  147 => 21,  144 => 20,  140 => 18,  137 => 17,  134 => 16,  130 => 14,  127 => 13,  124 => 12,  119 => 11,  113 => 44,  110 => 43,  107 => 42,  105 => 41,  102 => 40,  99 => 39,  95 => 37,  92 => 36,  86 => 33,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  64 => 24,  61 => 23,  59 => 20,  54 => 16,  51 => 15,  49 => 12,  45 => 11,  41 => 9,  38 => 8,  33 => 7,  31 => 6,  25 => 2,  23 => 1,  89 => 34,  83 => 22,  79 => 21,  67 => 20,  63 => 19,  56 => 19,  50 => 12,  47 => 11,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
