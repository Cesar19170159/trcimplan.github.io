<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SeguridadHeridosEnAccidentesRelacionadosConTransporte
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
 * Clase SeguridadHeridosEnAccidentesRelacionadosConTransporte
 */
class SeguridadHeridosEnAccidentesRelacionadosConTransporte extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Heridos en accidentes relacionados con transporte en La Laguna';
        $this->fecha       = '2019-02-08T10:32:35';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-heridos-en-accidentes-relacionados-con-transporte';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Se muestran los heridos en accidentes por cada 100 mil habitantes';
        $this->claves      = 'IMPLAN, La Laguna, Vialidad , Movilidad , Seguridad';
        // Para el Organizador
        $this->categorias  = array('Vialidad', 'Movilidad', 'Seguridad');
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
            array('fecha' => '2008-12-31', 'valor' => '314.6630', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '324.6090', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '278.6600', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '248.0680', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '225.7470', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2013-12-31', 'valor' => '171.0000', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2014-12-31', 'valor' => '278.4500', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2017-12-31', 'valor' => '247.9900', 'fuente_nombre' => 'IMCO', 'notas' => 'Por cada 100 mil habitantes (INEGI (Registros administrativos))'),
            array('fecha' => '2018-12-31', 'valor' => '231.1500', 'fuente_nombre' => 'IMCO', 'notas' => 'Por cada 100 mil habitantes (INEGI (Registros administrativos))')); // formateado 0, valor 18, crudo 11
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
        return NULL;
    } // observaciones

} // Clase SeguridadHeridosEnAccidentesRelacionadosConTransporte

?>
