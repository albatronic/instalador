<?php

/* Error404/index.html.twig */
class __TwigTemplate_690011fc9fee8ccd76f8d0af74148d9fa0b11622f193ea02448cc2359931007d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["layout"]) ? $context["layout"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"col_drcha\">
    <div id=\"error_404\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/images/aspa.png\" alt=\"Error 404\" title=\"Error 404\" />
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "loSentimos"), "method"), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "noHemosPodidoLocalizarLaPagina"), "method"), "html", null, true);
        echo ".</h1>
        <p class=\"exito\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "idioma", array(0 => "sigueNavegando"), "method"), "html", null, true);
        echo "</p>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Error404/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
