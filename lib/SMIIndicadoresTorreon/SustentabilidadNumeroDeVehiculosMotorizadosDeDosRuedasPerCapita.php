<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadNumeroDeVehiculosMotorizadosDeDosRuedasPerCapita
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

namespace SMIIndicadoresTorreon;

/**
 * Clase SustentabilidadNumeroDeVehiculosMotorizadosDeDosRuedasPerCapita
 */
class SustentabilidadNumeroDeVehiculosMotorizadosDeDosRuedasPerCapita extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Número de vehículos motorizados de dos ruedas per cápita en Torreón';
        $this->fecha       = '2018-01-31T09:04:42';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-numero-de-vehiculos-motorizados-de-dos-ruedas-per-capita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de vehículos motorizados de dos ruedas de la ciudad dividido entre la población total de la ciudad';
        $this->claves      = 'IMPLAN, Torreón, Medio ambiente';
        // Para el Organizador
        $this->categorias  = array('Medio ambiente');
        $this->fuentes     = array('DGVyMU');
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // datos_estructura

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos() {
        return array(
            array('fecha' => '2015-12-31', 'valor' => '0.0010', 'fuente_nombre' => 'DGVyMU')); // formateado 0, valor 2, crudo 1
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return NULL;
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return NULL;
    } // otras_regiones

    /**
     * Mapas
     *
     * @return string Código HTML con el iframe de Carto
     */
    public function mapas() {
        return NULL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
Datos tomados de la Dirección General de Vialidad y Movilidad Urbana (DGVyMU)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadNumeroDeVehiculosMotorizadosDeDosRuedasPerCapita

?>