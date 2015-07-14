<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Gobierno Empleados municipales (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
namespace SMIIndicadoresTorreon;

/**
 * Clase GobiernoEmpleadosMunicipales
 */
class GobiernoEmpleadosMunicipales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Empleados municipales en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2015-07-06T15:01';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'gobierno-empleados-municipales';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.';
        $this->claves            = 'IMPLAN, Torreón, SINDES, Gobierno';
        $this->categorias        = array('SINDES', 'Gobierno');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        $schema->articleBody     = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.</p>

      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>30/06/2014</td>
            <td>5.8400</td>
            <td>Ayuntamiento de Torreón</td>
            <td>Comparativos y mas información sobre el Sistema de Indicadores de Desempeño (SINDES) en http://www.sindes.org/</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil habitantes.</p>
    </div>
  </div>
FINAL;
        $schema->extra           = <<<FINAL

FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // JavaScript
        $this->javascript        = <<<FINAL
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion        = <<<FINAL
      <h3>Descripción</h3>
<p>Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.</p>

      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>30/06/2014</td>
            <td>5.8400</td>
            <td>Ayuntamiento de Torreón</td>
            <td>Comparativos y mas información sobre el Sistema de Indicadores de Desempeño (SINDES) en http://www.sindes.org/</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada mil habitantes.</p>
FINAL;
    } // constructor

} // Clase GobiernoEmpleadosMunicipales

?>