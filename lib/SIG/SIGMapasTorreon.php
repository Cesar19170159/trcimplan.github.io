<?php
/**
 * TrcIMPLAN - DESCRIPCION
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace SIG;

/**
 * Clase SIGMapasTorreon
 *
 * No crea archivo. Es para poner la opción en index.html
 */
class SIGMapasTorreon extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = '';
    //~ $this->autor                      = '';
        $this->fecha                      = '';
        // El nombre del archivo a crear
        $this->archivo                    = '';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = '';
        $this->claves                     = '';
        // Opción de navegación a poner como activa
        $this->nombre_menu                = '';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SIG/CLASE.md';
        // Ruta al archivo HTML con el contenido
     // $this->contenido_archivo_html     = 'lib/SIG/CLASE.html';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                     = 'publicar';

        // Título, autor y fecha
        $this->nombre         = 'S.I.G. de Torreón';
     // $this->autor          = 'Autor';
        $this->fecha          = '2015-05-14T13:00';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo        = ''; // No hay archivo HTML a crear
        $this->imagen         = 'introduccion/imagen.jpg';
        $this->imagen_previa  = 'introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion    = 'Mapas del Sistema de Información Geográfica para Torreón.';
        $this->claves         = 'IMPLAN, SIG, Información, Geográfica, Torreón';
        $this->categorias     = array();
        // El estado puede ser 'publicar' (lo usa), 'revisar' o 'ignorar' (lo omite)
        $this->estado         = 'publicar';
        // URL de destino
        $this->url            = '../sig-mapas-torreon/index.html';
     // $this->url_etiqueta   = '';
        // Sin contenido
        $this->contenido      = '';
        // Sin JavaScript
        $this->javascript     = '';
        // Para redifusión, si tiene una imagen se usa y después la descripción
        if ($this->imagen != '') {
            $this->redifusion = sprintf("<a href=\"%s\"><img src=\"%s\"><br>\n\n%s</a>", $this->url, $this->imagen, $this->descripcion);
        } else {
            $this->redifusion = sprintf('<a href="%s">%s</a>', $this->url, $this->descripcion);
        }
    } // constructor

} // Clase SIGMapasTorreon

?>
