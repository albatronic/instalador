<?php

/* _global/macros.html.twig */
class __TwigTemplate_4f18897a3a76c5534f9b0a43817357eaec2e7d3803efc40a91308ef2f8994adf extends Twig_Template
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
        // line 19
        echo "
";
        // line 34
        echo "
";
        // line 63
        echo "
";
        // line 81
        echo "

";
        // line 101
        echo "
";
        // line 124
        echo "
";
        // line 146
        echo "
";
        // line 170
        echo "
";
        // line 190
        echo "
";
        // line 194
        echo "
";
    }

    // line 6
    public function getnoticia($_noticia = null, $_nImagen = null)
    {
        $context = $this->env->mergeGlobals(array(
            "noticia" => $_noticia,
            "nImagen" => $_nImagen,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "<div class=\"evento_indiv\">
    ";
            // line 8
            if ($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPathNameImagenN", array(0 => ((array_key_exists("nImagen", $context)) ? (_twig_default_filter((isset($context["nImagen"]) ? $context["nImagen"] : null), "1")) : ("1"))), "method")) {
                // line 9
                echo "    <div class=\"imagen_evento\">
        <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPathNameImagenN", array(0 => ((array_key_exists("nImagen", $context)) ? (_twig_default_filter((isset($context["nImagen"]) ? $context["nImagen"] : null), "1")) : ("1"))), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "titulo"), "html", null, true);
                echo "\" />
        <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo"), "html", null, true);
                echo "\"><span class=\"fecha_evento arriba\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "PublishedAt"), "d/m/Y"), "html", null, true);
                echo "</span></a>
    </div>
    ";
            }
            // line 14
            echo "    <h2>";
            echo $this->getAttribute($this, "link", array(0 => $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Titulo"), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "Href"), "targetBlank")), "method");
            echo "</h2>
    <h3>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "subtitulo"), "html", null, true);
            echo "</h3>
    <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "resumen"), "html", null, true);
            echo "</p>
</div>    
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getservicio($_servicio = null, $_nImagen = null)
    {
        $context = $this->env->mergeGlobals(array(
            "servicio" => $_servicio,
            "nImagen" => $_nImagen,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "<div class=\"evento_indiv\">
    ";
            // line 23
            if ($this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "getPathNameImagenN", array(0 => ((array_key_exists("nImagen", $context)) ? (_twig_default_filter((isset($context["nImagen"]) ? $context["nImagen"] : null), "1")) : ("1"))), "method")) {
                // line 24
                echo "    <div class=\"imagen_evento\">
        <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "getPathNameImagenN", array(0 => ((array_key_exists("nImagen", $context)) ? (_twig_default_filter((isset($context["nImagen"]) ? $context["nImagen"] : null), "1")) : ("1"))), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "titulo"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "titulo"), "html", null, true);
                echo "\" />
        <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "Href"), "url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "Titulo"), "html", null, true);
                echo "\"><span class=\"fecha_evento arriba\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "PublishedAt"), "d/m/Y"), "html", null, true);
                echo "</span></a>
    </div>
    ";
            }
            // line 29
            echo "    <h2>";
            echo $this->getAttribute($this, "link", array(0 => $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "Titulo"), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "Href"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "Href"), "targetBlank")), "method");
            echo "</h2>
    <h3>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "Subtitulo"), "html", null, true);
            echo "</h3>
    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["servicio"]) ? $context["servicio"] : null), "ResumenBreve"), "html", null, true);
            echo "</p>
</div>    
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getevento($_evento = null)
    {
        $context = $this->env->mergeGlobals(array(
            "evento" => $_evento,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "<article class=\"evento_indiv ";
            if ((!$this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "imagen"))) {
                echo "sin_imagen";
            }
            echo "\">
    ";
            // line 40
            if ($this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "imagen")) {
                // line 41
                echo "    <div class=\"imagen_evento\">
        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "url"), "url"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "url"), "url"), "html", null, true);
                echo "\">
            <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "imagen"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "titulo"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "titulo"), "html", null, true);
                echo "\" />
        </a>
        <span class=\"fechaEvento arriba\">
           <span class=\"fechaLeft\"></span>
            <span class=\"fechaInter\">";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "fecha"), "d/m/Y"), "html", null, true);
                echo "</span>  
           <span class=\"fechaRigth\"></span>         
        </span>
    </div>
    ";
            } else {
                // line 52
                echo "       <span class=\"fecha\">
           <span class=\"fechaLeft\"></span>
            <span class=\"fechaInter\">";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "fecha"), "d/m/Y"), "html", null, true);
                echo "</span>  
           <span class=\"fechaRigth\"></span>           
       </span> 
    ";
            }
            // line 58
            echo "    <h2>";
            echo $this->getAttribute($this, "link", array(0 => $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "titulo"), 1 => null, 2 => $this->getAttribute($this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "url"), "url"), 3 => $this->getAttribute($this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "url"), "targetBlank")), "method");
            echo "</h2>
    <h3>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "subtitulo"), "html", null, true);
            echo "</h3>
    <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : null), "resumen"), "html", null, true);
            echo "</p>
</article>    
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function getvideo($_video = null, $_key = null, $_nCaracteres = null, $_ultimoFila = null)
    {
        $context = $this->env->mergeGlobals(array(
            "video" => $_video,
            "key" => $_key,
            "nCaracteres" => $_nCaracteres,
            "ultimoFila" => $_ultimoFila,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 71
            $context["nCar"] = ((array_key_exists("nCaracteres", $context)) ? (_twig_default_filter((isset($context["nCaracteres"]) ? $context["nCaracteres"] : null), 100)) : (100));
            // line 72
            echo "<div class=\"mosaic-block bar proyecto";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
    <div class=\"mosaic-backdrop\" style=\"display: block;\"> 
        <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "titulo"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "titulo"), "html", null, true);
            echo "\" />
    </div>
    <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "url"), "html", null, true);
            echo "\" class=\"mosaic-overlay\" style=\"";
            if ((isset($context["ultimoFila"]) ? $context["ultimoFila"] : null)) {
                echo "display: inline;";
            }
            echo " left: 0px; bottom: -146px;\">
        <span class=\"details\">";
            // line 77
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "titulo"), 0, (isset($context["nCar"]) ? $context["nCar"] : null)), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "titulo")) > (isset($context["nCar"]) ? $context["nCar"] : null))) {
                echo "...";
            }
            echo "</span>
    </a>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function getgaleria($_galeria = null, $_key = null)
    {
        $context = $this->env->mergeGlobals(array(
            "galeria" => $_galeria,
            "key" => $_key,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "<div class=\"proyecto";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
    <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "imagen"), "html", null, true);
            echo "\" rel=\"gallery\" class=\"pirobox_gall";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "titulo"), "html", null, true);
            echo "\">
        <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "imagen"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "titulo"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "titulo"), "html", null, true);
            echo "\" />
    </a>
    <div class=\"textoAlbum\"><h4>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "titulo"), "html", null, true);
            echo "</h4></div>

    ";
            // line 96
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : null), "bloqueThumbnail"));
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                // line 97
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "PathName"), "html", null, true);
                echo "\" rel=\"gallery\" class=\"pirobox_gall";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : null), "Title"), "html", null, true);
                echo "\"></a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 112
    public function getlink($_titulo = null, $_title = null, $_url = null, $_esPopup = null, $_id = null, $_claseCss = null)
    {
        $context = $this->env->mergeGlobals(array(
            "titulo" => $_titulo,
            "title" => $_title,
            "url" => $_url,
            "esPopup" => $_esPopup,
            "id" => $_id,
            "claseCss" => $_claseCss,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "    ";
            if (((isset($context["url"]) ? $context["url"] : null) == "")) {
                echo " 
        ";
                // line 114
                echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
                echo "
    ";
            } else {
                // line 116
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
                echo "\" 
           title=\"";
                // line 117
                echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), (isset($context["titulo"]) ? $context["titulo"] : null))) : ((isset($context["titulo"]) ? $context["titulo"] : null))), "html", null, true);
                echo "\" 
           ";
                // line 118
                if (((isset($context["esPopup"]) ? $context["esPopup"] : null) == "1")) {
                    echo " rel=\"pop-up\" ";
                }
                echo " 
           ";
                // line 119
                if (((isset($context["id"]) ? $context["id"] : null) != "")) {
                    echo " id=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\" ";
                }
                echo "               
           ";
                // line 120
                if (((isset($context["claseCss"]) ? $context["claseCss"] : null) != "")) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["claseCss"]) ? $context["claseCss"] : null), "html", null, true);
                    echo "\" ";
                }
                // line 121
                echo "           >";
                echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
                echo "</a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 136
    public function getpaginacion($_paginacion = null, $_claseCssAnterior = null, $_claseCssSiguiente = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginacion" => $_paginacion,
            "claseCssAnterior" => $_claseCssAnterior,
            "claseCssSiguiente" => $_claseCssSiguiente,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 137
            echo "    <div class=\"botonera\">
        ";
            // line 138
            if (($this->getAttribute((isset($context["paginacion"]) ? $context["paginacion"] : null), "pagina") > 1)) {
                // line 139
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["urlAmigable"]) ? $context["urlAmigable"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginacion"]) ? $context["paginacion"] : null), "pagina") - 1), "html", null, true);
                echo "\" title=\"";
                echo $this->getAttribute($this, "idioma", array(0 => "anterior"), "method");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("claseCssAnterior", $context)) ? (_twig_default_filter((isset($context["claseCssAnterior"]) ? $context["claseCssAnterior"] : null), "boton left")) : ("boton left")), "html", null, true);
                echo "\">";
                echo $this->getAttribute($this, "idioma", array(0 => "anterior"), "method");
                echo "</a>
        ";
            }
            // line 141
            echo "        ";
            if (($this->getAttribute((isset($context["paginacion"]) ? $context["paginacion"] : null), "pagina") < $this->getAttribute((isset($context["paginacion"]) ? $context["paginacion"] : null), "totalPaginas"))) {
                // line 142
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["appPath"]) ? $context["appPath"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["urlAmigable"]) ? $context["urlAmigable"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginacion"]) ? $context["paginacion"] : null), "pagina") + 1), "html", null, true);
                echo "\" title=\"";
                echo $this->getAttribute($this, "idioma", array(0 => "siguiente"), "method");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("claseCssSiguiente", $context)) ? (_twig_default_filter((isset($context["claseCssSiguiente"]) ? $context["claseCssSiguiente"] : null), "boton right")) : ("boton right")), "html", null, true);
                echo "\">";
                echo $this->getAttribute($this, "idioma", array(0 => "siguiente"), "method");
                echo "</a>
        ";
            }
            // line 144
            echo "    </div> 
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function getgoogleMap($_title = null, $_longitude = null, $_latitude = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
            "longitude" => $_longitude,
            "latitude" => $_latitude,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 149
            echo "<script src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
<script>
  function initialize() {
    var latlng = new google.maps.LatLng(";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : null), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : null), "html", null, true);
            echo ");
\t
    var myOptions = {
      zoom: 17,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById(\"map_canvas\"),
        myOptions);

\t var marker = new google.maps.Marker({
\t\t  position: latlng,
\t\t  map: map,
\t\t  title:\"";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\"
\t  });
  }
</script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 184
    public function getrecortaTexto($_texto = null, $_nCaracteres = null)
    {
        $context = $this->env->mergeGlobals(array(
            "texto" => $_texto,
            "nCaracteres" => $_nCaracteres,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 185
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null)) > (isset($context["nCaracteres"]) ? $context["nCaracteres"] : null))) {
                // line 186
                echo "        ";
                $context["puntos"] = " ...";
                // line 187
                echo "    ";
            }
            // line 188
            echo "    ";
            echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["texto"]) ? $context["texto"] : null), 0, (isset($context["nCaracteres"]) ? $context["nCaracteres"] : null)), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["puntos"]) ? $context["puntos"] : null), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 191
    public function getmoneda($_importe = null, $_nDecimales = null, $_separadorMiles = null, $_separadorDecimales = null, $_simbolo = null)
    {
        $context = $this->env->mergeGlobals(array(
            "importe" => $_importe,
            "nDecimales" => $_nDecimales,
            "separadorMiles" => $_separadorMiles,
            "separadorDecimales" => $_separadorDecimales,
            "simbolo" => $_simbolo,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["importe"]) ? $context["importe"] : null), ((array_key_exists("nDecimales", $context)) ? (_twig_default_filter((isset($context["nDecimales"]) ? $context["nDecimales"] : null), 2)) : (2)), ((array_key_exists("separadorDecimales", $context)) ? (_twig_default_filter((isset($context["separadorDecimales"]) ? $context["separadorDecimales"] : null), ".")) : (".")), ((array_key_exists("separadorMiles", $context)) ? (_twig_default_filter((isset($context["separadorMiles"]) ? $context["separadorMiles"] : null), ",")) : (","))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((array_key_exists("simbolo", $context)) ? (_twig_default_filter((isset($context["simbolo"]) ? $context["simbolo"] : null), "€")) : ("€")), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 195
    public function getidioma($_clave = null)
    {
        $context = $this->env->mergeGlobals(array(
            "clave" => $_clave,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 196
            echo "    ";
            ob_start();
            // line 197
            echo "    ";
            if ($this->getAttribute((isset($context["LABELS"]) ? $context["LABELS"] : null), (isset($context["clave"]) ? $context["clave"] : null), array(), "array")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["LABELS"]) ? $context["LABELS"] : null), (isset($context["clave"]) ? $context["clave"] : null), array(), "array"), "html", null, true);
            } else {
                echo "[";
                echo twig_escape_filter($this->env, (isset($context["clave"]) ? $context["clave"] : null), "html", null, true);
                echo "]";
            }
            // line 198
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "        
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_global/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 198,  678 => 197,  675 => 196,  664 => 195,  648 => 192,  633 => 191,  618 => 188,  615 => 187,  612 => 186,  609 => 185,  597 => 184,  581 => 165,  563 => 152,  558 => 149,  545 => 148,  533 => 144,  518 => 142,  515 => 141,  500 => 139,  498 => 138,  495 => 137,  482 => 136,  467 => 121,  461 => 120,  453 => 119,  447 => 118,  443 => 117,  438 => 116,  433 => 114,  428 => 113,  412 => 112,  400 => 99,  383 => 97,  379 => 96,  374 => 94,  361 => 92,  349 => 91,  344 => 90,  332 => 89,  314 => 77,  306 => 76,  293 => 74,  287 => 72,  285 => 71,  271 => 70,  257 => 60,  253 => 59,  248 => 58,  241 => 54,  237 => 52,  229 => 47,  214 => 43,  208 => 42,  205 => 41,  203 => 40,  196 => 39,  185 => 38,  171 => 31,  167 => 30,  162 => 29,  152 => 26,  135 => 23,  132 => 22,  120 => 21,  106 => 16,  97 => 14,  87 => 11,  75 => 10,  70 => 8,  55 => 6,  44 => 170,  35 => 101,  28 => 63,  22 => 19,  19 => 2,  150 => 22,  147 => 21,  144 => 20,  140 => 25,  137 => 24,  134 => 16,  130 => 14,  127 => 13,  124 => 12,  119 => 11,  113 => 44,  110 => 43,  107 => 42,  105 => 41,  102 => 15,  99 => 39,  95 => 37,  92 => 36,  86 => 33,  80 => 30,  76 => 29,  72 => 9,  69 => 27,  64 => 24,  61 => 23,  59 => 20,  54 => 16,  51 => 15,  49 => 12,  45 => 11,  41 => 146,  38 => 124,  33 => 7,  31 => 81,  25 => 34,  23 => 1,  89 => 34,  83 => 22,  79 => 21,  67 => 7,  63 => 19,  56 => 19,  50 => 194,  47 => 190,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
