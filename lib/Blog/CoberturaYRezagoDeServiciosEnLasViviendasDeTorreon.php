<?php
/**
 * TrcIMPLAN Sitio Web - CoberturaYRezagoDeServiciosEnLasViviendasDeTorreon
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
 * Clase CoberturaYRezagoDeServiciosEnLasViviendasDeTorreon
 */
class CoberturaYRezagoDeServiciosEnLasViviendasDeTorreon extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Cobertura y rezago de servicios en las viviendas de Torreón';
        $this->autor                      = 'Lic. Luis A. Gutiérrez Arizpe';
        $this->fecha                      = '2017-11-30T10:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'cobertura-y-rezago-de-servicios-en-las-viviendas-de-torreon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Análisis de las colonias de Torreón con mayor brecha en la cobertura de bienes y servicios en la vivienda y su repercusión en la calidad de vida de sus habitantes.';
        $this->claves                     = 'IMPLAN, Torreon, Brecha, Colonias';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/CoberturaYRezagoDeServiciosEnLasViviendasDeTorreon.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar', 'Servicios Públicos', 'Vivienda');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase CoberturaYRezagoDeServiciosEnLasViviendasDeTorreon

?>
