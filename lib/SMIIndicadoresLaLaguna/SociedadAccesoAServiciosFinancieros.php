<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadAccesoAServiciosFinancieros
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
 * Clase SociedadAccesoAServiciosFinancieros
 */
class SociedadAccesoAServiciosFinancieros extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Acceso a Servicios Financieros en La Laguna';
        $this->fecha       = '2015-07-14T16:12:46';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-acceso-a-servicios-financieros';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Precursores". Qué mide: El número de sucursales y corresponsales de banca múltiple en la ciudad por cada 10 mil adultos como proxy del acceso a servicios financieros.';
        $this->claves      = 'IMPLAN, La Laguna, Índice de Competitividad Urbana, Empresas';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Empresas');
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
            array('fecha' => '2008-12-31', 'valor' => '3.3618', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '3.2949', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '2.9821', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '4.7339', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '5.1117', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '6.0313', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '7.9500', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 14, crudo 7
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return array(
            'region_nombre' => array('enca' => 'Región', 'formato' => 'texto'),
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'texto'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '510', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Sucursales y corresponsales'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '190', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Sucursales y corresponsales'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '40', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Sucursales y corresponsales'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '30', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 cambió a "cantidad" de Sucursales y corresponsales'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '7.9500', 'fuente_nombre' => 'IMCO'));
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
Unidades: Sucursales/corresponsales por cada 10 mil adultos. Fuente: (CNBV), 2010-2012.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadAccesoAServiciosFinancieros

?>
