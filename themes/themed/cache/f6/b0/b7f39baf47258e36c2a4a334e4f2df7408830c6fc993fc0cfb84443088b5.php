<?php

/* Error404/index.js.twig */
class __TwigTemplate_f6b0b7f39baf47258e36c2a4a334e4f2df7408830c6fc993fc0cfb84443088b5 extends Twig_Template
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
        echo "
<script type=\"text/javascript\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/jquery-1.8.2.min.js\"></script> ";
        // line 4
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/jquery.cookie.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/jquery.hoverIntent.minified.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/jquery.dcjqaccordion.2.7.min.js\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/acordeon-menu-function.js\"></script>
";
        // line 9
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function(\$){

\t\$(\"a[rel='pop-up']\").click(function () {
\tvar caracteristicas = \"height=\"+(screen.availHeight - 40)+\",width=\"+(screen.availWidth - 13)+\",screenX=0,screenY=0,left=0,top=0,status=no,menubar=yes,scrollbars=yes,resizable=yes,toolbar=yes,location=yes\";
\tnueva=window.open(this.href, 'Popup', caracteristicas);
\treturn false;
\t});


});
</script> ";
        // line 22
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/jquery-ui-1.8.2.custom.min.js\"></script> ";
        // line 23
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/pirobox_extended.js\"></script> ";
        // line 24
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "path"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "/js/pirobox_function.js\"></script> ";
        // line 25
        echo "<script type=\"text/javascript\" src=\"http://use.edgefonts.net/open-sans.js\"></script> ";
    }

    public function getTemplateName()
    {
        return "Error404/index.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  78 => 24,  72 => 23,  66 => 22,  52 => 9,  27 => 4,  22 => 2,  65 => 11,  60 => 10,  53 => 8,  47 => 7,  43 => 5,  37 => 4,  31 => 3,  25 => 2,  19 => 1,  46 => 7,  40 => 6,  34 => 5,  29 => 4,  26 => 3,);
    }
}
