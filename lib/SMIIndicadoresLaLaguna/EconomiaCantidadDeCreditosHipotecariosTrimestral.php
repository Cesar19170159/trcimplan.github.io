<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaCantidadDeCreditosHipotecariosTrimestral
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
 * Clase EconomiaCantidadDeCreditosHipotecariosTrimestral
 */
class EconomiaCantidadDeCreditosHipotecariosTrimestral extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Cantidad de Créditos Hipotecarios (trimestral) en La Laguna';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-cantidad-de-creditos-hipotecarios-trimestral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Créditos dispuestos marginalmente durante el año indicado.';
        $this->claves      = 'IMPLAN, La Laguna, Mercados';
        // Para el Organizador
        $this->categorias  = array('Mercados');
        $this->fuentes     = array('Comisión Nacional Bancaria y de Valores (CNBV)');
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
            array('fecha' => '2010-12-31', 'valor' => '1548', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2011-12-31', 'valor' => '2755', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2012-12-31', 'valor' => '3124', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2013-12-31', 'valor' => '2915', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)'),
            array('fecha' => '2014-03-31', 'valor' => '401', 'fuente_nombre' => 'Comisión Nacional Bancaria y de Valores (CNBV)', 'notas' => 'Dato trimestral'));
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
El mercado hipotecario de La Laguna representa el 0.54% del mercado hipotecario nacional.

Datos obtenidos de [CNBV](http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaCantidadDeCreditosHipotecariosTrimestral

?>
