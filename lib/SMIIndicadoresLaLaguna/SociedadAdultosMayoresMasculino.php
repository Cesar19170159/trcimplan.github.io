<?php
/**
 * TrcIMPLAN - SMI Indicadores La Laguna Sociedad Adultos Mayores Masculino (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SociedadAdultosMayoresMasculino
 */
class SociedadAdultosMayoresMasculino extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Adultos Mayores Masculino en La Laguna';
     // $this->autor            = '';
        $this->fecha            = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'sociedad-adultos-mayores-masculino';
        $this->imagen           = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa    = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Población estimada a mediados de año de personas de 65 años y más de sexo masculino';
        $this->claves           = 'IMPLAN, La Laguna, Grupos Vulnerables';
        $this->categorias       = array('Grupos Vulnerables');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-la-laguna';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Población estimada a mediados de año de personas de 65 años y más de sexo masculino</p>

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
            <td>30/06/2011</td>
            <td>33,494</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>34,770</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>36,117</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>37,538</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>39,033</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>40,603</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2017</td>
            <td>42,247</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2018</td>
            <td>43,959</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2019</td>
            <td>45,732</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2020</td>
            <td>47,559</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Adultos Mayores Masculino en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Adultos Mayores Masculino</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Adultos Mayores Masculino</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2014-06-30</td>
            <td>19,829</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-06-30</td>
            <td>9,400</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-06-30</td>
            <td>4,529</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-06-30</td>
            <td>3,780</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-06-30</td>
            <td>37,538</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-06-30</td>
            <td>87,565</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-06-30</td>
            <td>57,418</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-06-30</td>
            <td>3,662,907</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $schema->extra          = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>02/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/ninos-violencia.html">Los Niños y la Violencia</a></td>
            <td>Datos y evidencias sobre los diferentes tipos de violencia contra niños, niñas y adolescentes en México. ¿Qué hacer?... todos los caminos apuntan a la prevención.</td>
          </tr>
          <tr>
            <td>13/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-vulnerabilidad-social.html">Torreón y la Vulnerabilidad Social</a></td>
            <td>Análisis de los indicadores sobre la infancia, alimentación, educación, maternidad adolescente, adultos mayores, vulnerabilidad por la delincuencia y discapacidad.</td>
          </tr>
          <tr>
            <td>03/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-economica-torreon.html">Equidad Económica en Torreón</a></td>
            <td>Torreón, como la zona metropolitana de La Laguna, se encuentra en una situación favorable en temas de igualdad y cohesión social.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-adultos-mayores-femenino.html">Adultos Mayores Femenino en La Laguna</a></td>
            <td>Población estimada a mediados de año de personas de 65 años y más de sexo femenino.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-adultos-mayores-masculino.html">Adultos Mayores Masculino en La Laguna</a></td>
            <td>Población estimada a mediados de año de personas de 65 años y más de sexo masculino</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-adultos-mayores.html">Adultos Mayores en La Laguna</a></td>
            <td>Población estimada a mediados de año de personas de 65 años y más</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-discapacidad.html">Discapacidad en La Laguna</a></td>
            <td>Porcentaje de la población total con alguna limitación (motriz, visión, auditivo, habla y/o cognitivas)</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en La Laguna</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // JavaScript
        $this->javascript       = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2011-06-30', dato: 33494 },{ fecha: '2012-06-30', dato: 34770 },{ fecha: '2013-06-30', dato: 36117 },{ fecha: '2014-06-30', dato: 37538 },{ fecha: '2015-06-30', dato: 39033 },{ fecha: '2016-06-30', dato: 40603 },{ fecha: '2017-06-30', dato: 42247 },{ fecha: '2018-06-30', dato: 43959 },{ fecha: '2019-06-30', dato: 45732 },{ fecha: '2020-06-30', dato: 47559 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 19829 },{ region: 'Gómez Palacio', dato: 9400 },{ region: 'Lerdo', dato: 4529 },{ region: 'Matamoros', dato: 3780 },{ region: 'La Laguna', dato: 37538 },{ region: 'Coahuila', dato: 87565 },{ region: 'Durango', dato: 57418 },{ region: 'Nacional', dato: 3662907 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL
      <h3>Descripción</h3>
<p>Población estimada a mediados de año de personas de 65 años y más de sexo masculino</p>

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
            <td>30/06/2011</td>
            <td>33,494</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>34,770</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>36,117</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>37,538</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>39,033</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>40,603</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2017</td>
            <td>42,247</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2018</td>
            <td>43,959</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2019</td>
            <td>45,732</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2020</td>
            <td>47,559</td>
            <td>CONAPO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
    } // constructor

} // Clase SociedadAdultosMayoresMasculino

?>
