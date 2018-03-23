<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SustentabilidadConsumoDeAguaLaLaguna
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase SustentabilidadConsumoDeAguaLaLaguna
 */
class SustentabilidadConsumoDeAguaLaLaguna extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Consumo de Agua (La Laguna) en La Laguna';
        $this->fecha       = '2018-02-07T09:40:59';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-consumo-de-agua-la-laguna';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad de Agua Consumida en La Laguna, dividida entre la población total.';
        $this->claves      = 'IMPLAN, La Laguna, Medio Ambiente, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Medio Ambiente', 'Recursos Naturales');
        $this->fuentes     = array('IMCO');
        $this->regiones    = array('La Laguna');
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
            array('fecha' => '2008-12-31', 'valor' => '118.8900', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '117.0100', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '115.3400', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '114.0600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '112.8300', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '112.0000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '110.7900', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 14, crudo 7
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
Fuente: IMCO, basado en CONAGUA. [Consulta] ("http://imco.org.mx/indices/#!/#indicesreeleccion-municipal-y-rendicion-de-cuentas%2F")
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadConsumoDeAguaLaLaguna

?>