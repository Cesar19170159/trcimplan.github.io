<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaPeaDesocupada
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
 * Clase EconomiaPeaDesocupada
 */
class EconomiaPeaDesocupada extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'PEA desocupada en La Laguna';
        $this->fecha       = '2018-07-27T12:01:33';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-pea-desocupada';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la PEA desocupada';
        $this->claves      = 'IMPLAN, La Laguna, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('fecha' => '2018-03-31', 'valor' => '5.2300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2018-06-30', 'valor' => '4.5700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2018-09-30', 'valor' => '5.0100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2018-12-31', 'valor' => '3.8000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-03-31', 'valor' => '4.7000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-06-30', 'valor' => '4.7000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-09-30', 'valor' => '4.7200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-12-31', 'valor' => '3.9200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2019-12-31', 'valor' => '3.9200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos'),
            array('fecha' => '2020-03-31', 'valor' => '5.1000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos')); // formateado 0, valor 20, crudo 10
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
Datos tomados de INEGI (ENOE)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaPeaDesocupada

?>
