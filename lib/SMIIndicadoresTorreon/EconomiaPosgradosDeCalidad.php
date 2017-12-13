<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaPosgradosDeCalidad
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
 * Clase EconomiaPosgradosDeCalidad
 */
class EconomiaPosgradosDeCalidad extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Posgrados de Calidad en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-posgrados-de-calidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Programas aceptados por CONACYT como posgrados de calidad';
        $this->claves      = 'IMPLAN, Torreón, Educación, Innovación';
        // Para el Organizador
        $this->categorias  = array('Educación', 'Innovación');
        $this->fuentes     = array('CONACYT');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2014-04-30', 'valor' => '11', 'fuente_nombre' => 'CONACYT')); // formateado 0, valor 2, crudo 1
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2014-04-30', 'valor' => '11', 'fuente_nombre' => 'CONACYT'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2014-03-31', 'valor' => '0', 'fuente_nombre' => 'CONACYT'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2014-04-30', 'valor' => '51', 'fuente_nombre' => 'CONACYT', 'notas' => 'Fuente: [CONACYT](http://www.conacyt.gob.mx)'),
            array('region_nombre' => 'Durango', 'fecha' => '2014-04-30', 'valor' => '15', 'fuente_nombre' => 'CONACYT'));
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
Datos obtenidos de [CONACYT](http://svrtmp.main.conacyt.mx/ConsultasPNPC/listar_padron.php)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaPosgradosDeCalidad

?>
