<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadMedicosYEnfermeras
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
 * Clase SociedadMedicosYEnfermeras
 */
class SociedadMedicosYEnfermeras extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Médicos y enfermeras en La Laguna';
        $this->fecha       = '2019-01-15T10:58:24';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-medicos-y-enfermeras';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número de médicos generales y familiares más enfermeras en operación';
        $this->claves      = 'IMPLAN, La Laguna, Salud';
        // Para el Organizador
        $this->categorias  = array('Salud');
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
            array('fecha' => '2012-12-31', 'valor' => '33.7695', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '35.1951', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '30.2227', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '66.4800', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 8, crudo 4
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '2492', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 se uso el dato "cantidad" de médicos generales y familiares más enfermeras en operación'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '1179', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 se uso el dato "cantidad" de médicos generales y familiares más enfermeras en operación'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '241', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 se uso el dato "cantidad" de médicos generales y familiares más enfermeras en operación'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '163', 'fuente_nombre' => 'IMCO', 'notas' => 'En 2016 se uso el dato "cantidad" de médicos generales y familiares más enfermeras en operación'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '66.4800', 'fuente_nombre' => 'IMCO'));
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
        return NULL;
    } // observaciones

} // Clase SociedadMedicosYEnfermeras

?>
