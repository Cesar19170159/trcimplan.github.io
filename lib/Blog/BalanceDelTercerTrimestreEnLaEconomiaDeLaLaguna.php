<?php
/**
 * TrcIMPLAN Sitio Web - BalanceDelTercerTrimestreEnLaEconomiaDeLaLaguna
 *
 * Copyright (C) 2016 IMPLAN Torreón
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
 * Clase BalanceDelTercerTrimestreEnLaEconomiaDeLaLaguna
 */
class BalanceDelTercerTrimestreEnLaEconomiaDeLaLaguna extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Balance del tercer trimestre en la economía de La Laguna';
        $this->autor                      = 'Lic. Alicia Valdez Ibarra';
        $this->fecha                      = '2017-01-10T15:10';
        // El nombre del archivo a crear
        $this->archivo                    = 'balance-del-tercer-trimestre-en-la-economia-de-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'A un trimestre para el cierre del año la Zona Metropolitana de La Laguna muestra mejoría en empleo, formalidad, salario promedio y apertura de empresas. Sin embargo 2016 ha sido un año difícil no sólo para la región sino también para México.';
        $this->claves                     = 'IMPLAN, Torreon, Economia, 2016, Salarios, Empleos';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu                = 'Análisis Publicados';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/BalanceDelTercerTrimestreEnLaEconomiaDeLaLaguna.md';
        // Banderas
        $this->poner_imagen_en_contenido  = TRUE;
        $this->para_compartir             = TRUE;
        // Para el Organizador
        $this->categorias                 = array('Mercados', 'Empleo');
        $this->fuentes                    = array('IMSS Subdelegación Torreón', 'INEGI');
        $this->regiones                   = array('Torreón', 'La Laguna');
    } // constructor

} // Clase BalanceDelTercerTrimestreEnLaEconomiaDeLaLaguna

?>