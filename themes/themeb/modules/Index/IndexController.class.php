<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 06-nov-2012
 *
 */
class IndexController extends ControllerProject {

    protected $controller = "Index";
    protected $nivel = "";

    public function IndexAction() {
        
        /* SLIDER DE IMAGENES */
        $slider = new SldSliders();
        $rows = $slider->cargaCondicion("Id", "IdTipo='2'");
        $tipo = (count($rows)) ? 2: 0;
        unset($slider);     
        $this->values['sliderImagenes'] = Sliders::getSliders(1, $tipo);
        
        /* SLIDER NOTICIAS */
        $this->values['carruselNoticias'] = Noticias::getNoticias(true); 
        
        /* EVENTOS ÚNICOS. */
        $this->values['eventos'] = Eventos::getEventos('','', 3,2,true);

        /* LAS NOTICIAS MÁS LEIDAS */
        $this->values['noticias'] = Noticias::getNoticiasMasLeidas(0, 2);

        /* LOS CONTENIDOS MAS VISITADOS */
        $this->values['contenidosVisitados'] = Contenidos::getContenidosMasVisitados(6);

        /* PRESIDENTE */
        $this->values['presidente'] = Contenidos::getContenido($this->varWeb['Pro']['staticContents'][0]);

        /* GALERIA FOTOS */
        $this->values['galeriaFotos'] = Albumes::getAlbumes(1, "", 1, 5);

        /* VIDEO YOUTUBE */
        $this->values['videoYoutube'] = Videos::getVideos(0,1,1);

        return parent::IndexAction();
    }

}

?>