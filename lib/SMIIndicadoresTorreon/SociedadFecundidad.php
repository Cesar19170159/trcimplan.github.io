<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadFecundidad
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
 * Clase SociedadFecundidad
 */
class SociedadFecundidad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Fecundidad en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-fecundidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de fecundidad.';
        $this->claves      = 'IMPLAN, Torreón, Género, Población';
        // Para el Organizador
        $this->categorias  = array('Género', 'Población');
        $this->fuentes     = array('INEGI. Censos de Población y Vivienda', 'INEGI');
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
            array('fecha' => '2008-12-31', 'valor' => '2.2000', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2009-12-31', 'valor' => '2.1700', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2010-12-31', 'valor' => '2.1400', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2011-12-31', 'valor' => '2.1400', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2012-12-31', 'valor' => '2.1300', 'fuente_nombre' => 'INEGI. Censos de Población y Vivienda'),
            array('fecha' => '2015-12-31', 'valor' => '2.5000', 'fuente_nombre' => 'INEGI'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2015-12-31', 'valor' => '2.5000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2015-12-31', 'valor' => '2.3400', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2015-12-31', 'valor' => '2.2300', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2015-12-31', 'valor' => '2.6000', 'fuente_nombre' => 'INEGI'));
    } // otras_regiones

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
El dato de 2015 corresponde a la Encuesta Intercensal 2015 de INEGI y son estimaciones.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadFecundidad

?>
