<?php
/*
 * SMIbeta - Comunicado Prensa 2014-05-12
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 */

// Namespace
namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20140512
 */
class ComunicadoPrensa20140512 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-05-12';
        $this->autor         = 'Lic. Eduardo Holguín Zehfuss';
        $this->nombre        = 'Comunicado de Prensa 12.5.14';
        $this->nombre_menu   = 'Sala de Prensa';
        $this->directorio    = 'sala-prensa';
        $this->archivo       = 'comunicado-prensa-2014-05-12';
        $this->descripcion   = 'Precisiones respecto a conferencia de Sam Podolsky.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'comunicado-prensa-2014-05-12/imagen-previa.png';
        $this->categorias    = array('Sala de Prensa');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="vision-mision/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="comunicado-prensa-2014-05-12/implan.png"></span>

<p>De: IMPLAN Torreón.<br>
Para: Medios de comunicación.</p>

<p>Asunto: precisiones respecto a conferencia de Sam Podolsky y a la siguiente reflexión del investigador: “…a diferencia del Instituto Municipal de Competitividad (de Torreón) hay que crear un Consejo de Competitividad en conjunto con el sector público y privado, con organizaciones sociales, religiosas y ONG’s. “El regionalismo es el futuro del mundo.</p>

<p>Precisión 1: “El Consejo” del Instituto de Planeación y Competitividad de Torreón (IMPLAN Torreón) está conformado por miembros del sector publico, privado y social. 70% del “El Consejo” está representado por ciudadanos, el resto son miembros del Cabildo y funcionarios del Ayuntamiento.</p>

<p>Precisión 2. Coincidimos con la observación del investigador respecto a que “El regionalismo es el futuro del mundo”. En el Siglo XXI el eje de las economías mundiales es la metrópoli global. Las modernas empresas del conocimiento deciden la ubicación de sus centros de operación tomando en cuenta, principalmente, la competitividad de la urbe donde residirán su plantilla de ejecutivos. Competitividad es un termino estrechamente relacionado con calidad de vida de una metrópoli.</p>

<p>Precisión 3. Coincidimos con el Banco Mundial y con IMCO, organismos que insisten en que el enfoque de la planeación a favor de la competitividad –calidad de vida– debe ser metropolitano, y con la necesidad de instrumentar gestiones y figuras de gobernanza metropolitanas en algunos renglones de la administración pública regional: fomento económico, transporte, agua, seguridad, monitoreo del aire, etc.</p>

<p>En Europa, en EE.UU, en Asia, sobran los casos de éxito de figuras de gobernanza metropolitana en sectores específicos donde éstas operan eficiente y eficazmente en concordancia con las alcaldías, municipalidades, colectividades, comunidades autónomas, etc.</p>

<p>El “Nuevo Regionalismo”, promovido por las organizaciones expertas multinacionales, hace menor énfasis en limites territoriales de la estructura tradicional de los gobiernos locales, y mayor énfasis sobre acuerdos entre actores públicos y privados en distintos niveles territoriales con el propósito de definir y prestar servicios urbanos con un alcance a lo largo del área metro. Esta teoría refleja un traslado de conceptos normativos de entidades gubernamentales formales (por ejemplo: municipio, estado) a un modelo de gobernanza pragmático y basado en problemas específicos que serán atendidos de manera específica por organizaciones especificas. Es decir, no es necesario crear otro Estado u otro municipio para atender eficientemente y eficazmente la necesidad de administrar metropolitanamente el transporte, el agua, la planeación, el fomento económico de La Laguna. Lo moderno, lo actual, son los acuerdos de cooperación inter-local en el cual las diferentes localidades y otras unidades del gobierno se asocian con la sociedad civil para tratar cuestiones especificas de relevancia para todos, actuando en conjunto para proporcionar soluciones a través de la cooperación dirigida para resolver problemas dados.</p>

<p>Precisión 4. Es competencia del IMPLAN Torreón y de sus consejeros el diseñar y proponer un nuevo modelo de gobernanza y de cooperación intermunicipal en La Laguna, que facilite e impulse el tránsito de la región a mejores rankings de competitividad urbana; y por lo tanto, a mayores niveles de bienestar.</p>

<p>Atentamente<br>
Eduardo Holguin.<br>
Director Ejecutivo<br>
IMPLAN Torreón.</p>
FINAL;
    } // constructor

} // Clase ComunicadoPrensa20140512

?>
