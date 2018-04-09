<?php
/**
 * TrcIMPLAN Sitio Web - plusvalia
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
 * Clase plusvalia
 */
class Plusvalia extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'El crecimiento de la plusvalía en Torreón';
        $this->autor                      = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha                      = '2018-04-09T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'plusvalia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Son diversos factores los que definen el aumento de la plusvalía en una ciudad. En Torreón, de 2015 a 2016 por lo menos 63 colonias aumentaron de plusvalía media a  alta y otros polígonos se encuentran en diferentes etapas de crecimiento.';
        $this->claves                     = 'IMPLAN, Torreon, Desarrollo, Plusvalia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/Plusvalia.md';
        // Para el Organizador
        $this->categorias                 = array('Bienestar','Poblacion');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase plusvalia

?>
