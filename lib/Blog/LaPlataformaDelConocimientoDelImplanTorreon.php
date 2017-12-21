<?php
/**
 * TrcIMPLAN Sitio Web - LaPlataformaDelConocimientoDelImplanTorreon
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

namespace Blog;

/**
 * Clase LaPlataformaDelConocimientoDelImplanTorreon
 */
class LaPlataformaDelConocimientoDelImplanTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Plataforma del Conocimiento del IMPLAN Torreón';
        $this->autor                      = 'Ing. Guillermo Valdés Lozano';
        $this->fecha                      = '2017-12-21T14:45';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-plataforma-del-conocimiento-del-implan-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Desde su creación en 2014 el sitio web del IMPLAN Torreón ha crecido ininterrumpidamente, organizando, conservando y difundiendo el conocimiento que sirve para mejorar nuestra región.';
        $this->claves                     = 'IMPLAN, Torreon, Plataforma del Conocimiento, Sitio Web';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/LaPlataformaDelConocimientoDelImplanTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno Digital', 'Innovación');
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase LaPlataformaDelConocimientoDelImplanTorreon

?>
