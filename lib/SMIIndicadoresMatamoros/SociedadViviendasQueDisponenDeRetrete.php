<?php
/**
 * TrcIMPLAN - SMI Indicadores Matamoros Sociedad Viviendas que Disponen de Retrete (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadViviendasQueDisponenDeRetrete
 */
class SociedadViviendasQueDisponenDeRetrete extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Viviendas que Disponen de Retrete en Matamoros';
     // $this->autor            = '';
        $this->fecha            = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'sociedad-viviendas-que-disponen-de-retrete';
        $this->imagen           = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa    = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Porcentaje de viviendas habitadas que disponen de retrete.';
        $this->claves           = 'IMPLAN, Matamoros, Vivienda, Salud';
        $this->categorias       = array('Vivienda', 'Salud');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-matamoros';
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
<p>Porcentaje de viviendas habitadas que disponen de retrete.</p>

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
            <td>31/12/2010</td>
            <td>95.14 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/biinegi/">Base de Datos</a>.</p>

<p>Enlace al <a href="http://201.159.104.45:8080/apps/implan2.html">Sistema de Información Geográfica</a>.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Viviendas que Disponen de Retrete en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Viviendas que Disponen de Retrete</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Viviendas que Disponen de Retrete</h3>
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
            <td>2010-12-31</td>
            <td>98.71 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>97.10 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>94.60 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>95.14 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>97.54 %</td>
            <td>INEGI</td>
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
            <td>25/05/2015</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/salud-laguna.html">Salud Laguna</a></td>
            <td>Salud Laguna es una agrupación interactiva de pro­fesionales, instituciones, or­ga­nizaciones, integrados en torno a las actividades económicas que dan servicio y soportan al sec­tor salud.</td>
          </tr>
          <tr>
            <td>27/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/objetivos-milenio.html">La Zona Metropolitana de La Laguna y los Objetivos del Milenio</a></td>
            <td>En septiembre del año 2000 fue celebrada la Cumbre del Milenio de las Naciones Unidas, durante la cual 147 jefes de estado firman y 189 países aprueban uno de los retos consensuados más ambicioso de las últimas décadas.</td>
          </tr>
          <tr>
            <td>14/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/mas-areas-verdes-proteger-salud-laguneros.html">Más áreas verdes para proteger la salud de los laguneros</a></td>
            <td>Manejar el tema de protección a la salud como punto estratégico en materia de ordenamiento territorial y urbano representa una oportunidad para el desarrollo de la región.</td>
          </tr>
          <tr>
            <td>15/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/importancia-suelo-ciudades.html">La importancia del suelo en las ciudades</a></td>
            <td>En México el suelo en grandes proporciones ha pasado de ser rural a urbano; la disponibilidad y ordenamiento del mismo son básicos dentro del desarrollo actual.</td>
          </tr>
          <tr>
            <td>14/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/poligonos-actuacion-desarrollo-urbano-integral.html">Polígonos de Actuación para un Desarrollo Urbano Integral</a></td>
            <td>El nuevo modelo de desarrollo urbano mexicano que se impulsa en el país es el de fomentar la consolidación de las ciudades y lograr que sean más competitivas, equilibradas, densas, prósperas, justas, seguras y sustentables.</td>
          </tr>
          <tr>
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>06/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sociedad-incluyente-preparada-sana.html">Sociedad Incluyente, Preparada y Sana</a></td>
            <td>Este es uno de los subíndices que muestra mayores contrastes al interior de la zona metropolitana, ubicándose Torreón en la parte alta del ranking, la ZML en su conjunto en media alta, Gómez Palacio y Lerdo en media baja y Matamoros en la zona baja.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-camas-censables.html">Camas Censables en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad-infantil.html">Mortalidad Infantil en Matamoros</a></td>
            <td>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad.html">Mortalidad en Matamoros</a></td>
            <td>Tasa de Mortalidad. Número de muertes por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html">Mortalidad por Diabetes en Matamoros</a></td>
            <td>Tasa de mortalidad por diabetes mellitus. Defunciones por diabetes por cada diez mil defunciones.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Matamoros</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-medicos.html">Médicos en Matamoros</a></td>
            <td>Médicos en contacto con pacientes por cada diez mil personas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-ocupacion-por-vivienda.html">Ocupación por Vivienda en Matamoros</a></td>
            <td>Promedio de ocupantes por vivienda. Difiere del índice de hacinamiento en que el segundo es resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-poblacion-derechohabiente.html">Población Derechohabiente en Matamoros</a></td>
            <td>Población derechohabiente a los servicios de salud.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html">Razón de Mortalidad Materna en Matamoros</a></td>
            <td>La razón de mortalidad materna es la medida de mortalidad materna más usada. Mide el riesgo obstétrico una vez que la mujer queda embarazada.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-tasa-de-mortalidad-materna.html">Tasa de Mortalidad Materna en Matamoros</a></td>
            <td>La tasa de mortalidad materna mide el riesgo de morir e incluye tanto la posibilidad de quedar embarazada como de morir durante el embarazo o el puerperio.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html">Viviendas Deshabitadas en Matamoros</a></td>
            <td>Viviendas deshabitadas con respecto al total de viviendas totales.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-habitadas.html">Viviendas Habitadas en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sustentabilidad-viviendas-ocupadas-temporalmente.html">Viviendas Ocupadas Temporalmente en Matamoros</a></td>
            <td>Vivienda particular destinada para vacacionar o vivir algunos días, semanas o meses.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-totales.html">Viviendas Totales en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-agua-de-la-red-publica.html">Viviendas con Agua de la Red Pública en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que cuentan con acceso al agua de la red pública.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html">Viviendas con Computadora en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas con computadora.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje.html">Viviendas con Drenaje en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de drenaje.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-energia-electrica.html">Viviendas con Energía Eléctrica en Matamoros</a></td>
            <td>Porcentaje de viviendas con acceso a energía eléctrica</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-con-internet.html">Viviendas con Internet en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas con internet.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-viviendas-que-disponen-de-retrete.html">Viviendas que Disponen de Retrete en Matamoros</a></td>
            <td>Porcentaje de viviendas habitadas que disponen de retrete.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-indice-de-hacinamiento.html">Índice de hacinamiento en Matamoros</a></td>
            <td>Resultado de dividir el número de personas que residen en viviendas particulares habitadas entre el número de cuartos de esas viviendas.</td>
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
      data: [{ fecha: '2010-12-31', dato: 95.1400 }],
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
      data: [{ region: 'Torreón', dato: 98.7100 },{ region: 'Gómez Palacio', dato: 97.1000 },{ region: 'Lerdo', dato: 94.6000 },{ region: 'Matamoros', dato: 95.1400 },{ region: 'La Laguna', dato: 97.5400 }],
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
<p>Porcentaje de viviendas habitadas que disponen de retrete.</p>

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
            <td>31/12/2010</td>
            <td>95.14 %</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/biinegi/">Base de Datos</a>.</p>

<p>Enlace al <a href="http://201.159.104.45:8080/apps/implan2.html">Sistema de Información Geográfica</a>.</p>

FINAL;
    } // constructor

} // Clase SociedadViviendasQueDisponenDeRetrete

?>
