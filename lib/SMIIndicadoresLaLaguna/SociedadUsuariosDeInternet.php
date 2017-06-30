<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadUsuariosDeInternet
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
 * Clase SociedadUsuariosDeInternet
 */
class SociedadUsuariosDeInternet extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Usuarios de Internet en La Laguna';
        $this->fecha       = '2015-01-14T14:50:08';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-usuarios-de-internet';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de la población que usa internet.';
        $this->claves      = 'IMPLAN, La Laguna, Innovación, Competitividad, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Innovación', 'Competitividad', 'Objetivos del Milenio');
        $this->fuentes     = array('INEGI');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'caracter'),
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
            array('fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.'));
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
            array('region_nombre' => 'Torreón', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2013-12-31', 'valor' => 'X', 'fuente_nombre' => 'INEGI', 'notas' => 'El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2013-12-31', 'valor' => '44.0000', 'fuente_nombre' => 'INEGI', 'notas' => 'Consulta la [Base deDatos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978)'),
            array('region_nombre' => 'Durango', 'fecha' => '2013-12-31', 'valor' => '34.0000', 'fuente_nombre' => 'INEGI', 'notas' => 'Consulta la [Base de Datos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978)'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-12-31', 'valor' => '40.0000', 'fuente_nombre' => 'INEGI', 'notas' => 'Consulta la [Base de Datos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978)'));
    } // otras_regiones

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
Cálculo realizado con datos de MODUTIH y CONAPO. Se considera a todos los segmentos etarios de la población estimada para 2013.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadUsuariosDeInternet

?>
