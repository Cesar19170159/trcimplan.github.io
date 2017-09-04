<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadRezagoEducativo
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
 * Clase SociedadRezagoEducativo
 */
class SociedadRezagoEducativo extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Rezago Educativo en Torreón';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-rezago-educativo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal; o tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado; o tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria.';
        $this->claves      = 'IMPLAN, Torreón, Educación, Grupos Vulnerables, Objetivos del Milenio';
        // Para el Organizador
        $this->categorias  = array('Educación', 'Grupos Vulnerables', 'Objetivos del Milenio');
        $this->fuentes     = array('CONEVAL');
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
            array('fecha' => '2010-12-31', 'valor' => '10.8300', 'fuente_nombre' => 'CONEVAL'));
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
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2010-12-31', 'valor' => '10.8300', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2010-12-31', 'valor' => '17.3100', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2010-12-31', 'valor' => '16.7600', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2010-12-31', 'valor' => '19.2000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2010-12-31', 'valor' => '12.1000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Durango', 'fecha' => '2010-12-31', 'valor' => '18.6000', 'fuente_nombre' => 'CONEVAL'),
            array('region_nombre' => 'Nacional', 'fecha' => '2010-12-31', 'valor' => '20.6000', 'fuente_nombre' => 'CONEVAL'));
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
Fuente CONEVAL. Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Anexo-estad%C3%ADstico-municipal-2010.aspx).
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadRezagoEducativo

?>
