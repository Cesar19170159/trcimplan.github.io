<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadMujeresALasQueSuParejaLesHaProhibidoDesempenarUnTrabajoRemunerado
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
 * Clase SociedadMujeresALasQueSuParejaLesHaProhibidoDesempenarUnTrabajoRemunerado
 */
class SociedadMujeresALasQueSuParejaLesHaProhibidoDesempenarUnTrabajoRemunerado extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Mujeres a las que su pareja les ha prohibido desempeñar un trabajo remunerado en Torreón';
        $this->fecha       = '2019-04-08T15:10:26';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mujeres-a-las-que-su-pareja-les-ha-prohibido-desempenar-un-trabajo-remunerado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de mujeres que no pueden trabajar porque su pareja se los impide. Manifestación de violencia económica.';
        $this->claves      = 'IMPLAN, Torreón, Seguridad, Género';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Género');
        $this->fuentes     = array('INEGI');
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
            array('fecha' => '2016-12-31', 'valor' => '10.7100', 'fuente_nombre' => 'INEGI', 'notas' => 'Aparece en: Encuesta Nacional sobre la Dinámica de las Relaciones en los Hogares (ENDIREH)')); // formateado 0, valor 2, crudo 2
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
Fuente: INEGI
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SociedadMujeresALasQueSuParejaLesHaProhibidoDesempenarUnTrabajoRemunerado

?>
