<?php
/**
 * SociedadUsuariosDeInternet.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadUsuariosDeInternet
 */
class SociedadUsuariosDeInternet extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Usuarios de Internet en Gómez Palacio';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-gomez-palacio';
        $this->archivo      = 'sociedad-usuarios-de-internet';
        $this->descripcion  = 'Porcentaje de la población que usa internet.';
        $this->claves       = 'Gómez Palacio, Innovación, Competitividad, Población, Objetivos del Milenio';
        $this->categorias   = array('Innovación', 'Competitividad', 'Población', 'Objetivos del Milenio');
        $this->region_nivel = 111;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Porcentaje de la población que usa internet.</p>

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
            <td>31/12/2013</td>
            <td>NO TIENE</td>
            <td>INEGI</td>
            <td>El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Cálculo realizado con datos de MODUTIH y CONAPO. Se considera a todos los segmentos etarios de la población estimada para 2013.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Usuarios de Internet</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Usuarios de Internet</h3>
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
            <td>2013-12-31</td>
            <td>NO TIENE</td>
            <td>INEGI</td>
            <td>El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2013-12-31</td>
            <td>NO TIENE</td>
            <td>INEGI</td>
            <td>El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td>NO TIENE</td>
            <td>INEGI</td>
            <td>El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td>NO TIENE</td>
            <td>INEGI</td>
            <td>El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>NO TIENE</td>
            <td>INEGI</td>
            <td>El dato disponible es estatal, aunque la metodología de MODUTIH considera la cifra representativa para los municipios.</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td>44.00 %</td>
            <td>INEGI</td>
            <td>Consulta la [Base deDatos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978)</td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td>34.00 %</td>
            <td>INEGI</td>
            <td>Consulta la [Base de Datos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978)</td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td>40.00 %</td>
            <td>INEGI</td>
            <td>Consulta la [Base de Datos](http://www3.inegi.org.mx/sistemas/sisept/default.aspx?t=tinf255&s=est&c=28978)</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Usuarios de Internet</h3>
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
            <td>08/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/innovacion-internet-competitividad.html">Innovación, Internet y Competitividad</a></td>
            <td>Cada día se hace más necesario que el gobierno realice gran número de sus trámites por Internet. Los ciudadanos y la banca lo exigen en aras de aumentar la competitividad.</td>
          </tr>
          <tr>
            <td>07/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/nuevas-tecnologias-estandares-web.html">Nuevas Tecnologías y Estándares para la Web</a></td>
            <td>Recopilación de las nuevas técnicas que se deben de usar para la elaboración de sitios web institucionales. Con el objetivo de mejorarlas tanto para los humanos como para los robots (motores de búsqueda).</td>
          </tr>
          <tr>
            <td>10/12/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/papel-organizaciones-civiles-aumento-competitividad.html">El papel de las Organizaciones Civiles en el aumento del bienestar y competitividad</a></td>
            <td>En toda ciudad, estado o país debe haber sinergia entre ciudadanos, asociaciones civiles y empresas para definir programas a largo plazo que mejoren la calidad y el bienestar de todos nosotros.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/vision-vencedores.html">La visión de los vencedores</a></td>
            <td>El regreso de La Laguna a los primeros lugares en el ranking de competitividad nacional demanda de una comunidad que retome los valores y el empuje de “Los Fundadores”, de los hombres y mujeres que lejos de considerarse victimas de las adversidades, de su entorno natural y político, construyeron una de las regiones más prósperas de México.</td>
          </tr>
          <tr>
            <td>24/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/apertura-empresas-2014.html">Apertura de Empresas 2014</a></td>
            <td>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.</td>
          </tr>
          <tr>
            <td>23/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/nuevas-herramientas-nuevos-paradigmas.html">Nuevas herramientas para Nuevos Paradigmas</a></td>
            <td>Hoy en día, con un teléfono inteligente o tablet se puede consultar la versión móvil de un SIG para recaudar información, emitir un diagnóstico y trabajar en planes programas y proyectos futuros.</td>
          </tr>
          <tr>
            <td>18/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/competitividad-planeacion-metropolitana.html">Competitividad y Planeación Metropolitana</a></td>
            <td>El Instituto Mexicano para la Competitividad dio a conocer el Índice de Competitividad Urbana 2014; en él muestra que la Zona Metropolitana de la Laguna (ZML) continúa en un nivel de competitividad media baja.</td>
          </tr>
          <tr>
            <td>04/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/contribucion-tic-competitividad-productividad.html">Contribución de las TICs en la competitividad y productividad</a></td>
            <td>La implementación de las TICs en las actividades económicas se ha vuelto indispensable para el óptimo desarrollo de una región.</td>
          </tr>
          <tr>
            <td>01/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gas-shale-impacto.html">El Gas Shale y su impacto</a></td>
            <td>La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.</td>
          </tr>
          <tr>
            <td>03/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sectores-innovacion-sofisticacion.html">Sectores de Innovación y Sofisticación</a></td>
            <td>Análisis de los indicadores relativos a la innovación.</td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/relaciones-internacionales.html">Relaciones Internacionales</a></td>
            <td>Análisis de las cuestiones internacionales como la inversión extranjera, el flujo de pasajeros y la ausencia de puertos o frontera con otro país.</td>
          </tr>
          <tr>
            <td>13/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/torreon-vulnerabilidad-social.html">Torreón y la Vulnerabilidad Social</a></td>
            <td>Análisis de los indicadores sobre la infancia, alimentación, educación, maternidad adolescente, adultos mayores, vulnerabilidad por la delincuencia y discapacidad.</td>
          </tr>
          <tr>
            <td>12/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gobiernos-eficaces-eficientes.html">Gobiernos eficaces y eficientes</a></td>
            <td>La eficiencia de los gobiernos es el subíndice peor evaluado para la metrópoli ubicándonos en el lugar 63 de 77.</td>
          </tr>
          <tr>
            <td>29/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/doing-business-torreon.html">Doing Business en Torreón</a></td>
            <td>Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.</td>
          </tr>
          <tr>
            <td>28/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/indicadores-por-municipio-metodologia-imco.html">Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO</a></td>
            <td>Índice de Competitividad Urbana de la Zona Metropolitana de la Laguna, Torreón, Gómez Palacio, Lerdo y Matamoros en 2012.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
          </tr>
          <tr>
            <td>28/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/la-laguna-metropoli-del-conocimiento.html">La Laguna: Metrópoli del Conocimiento</a></td>
            <td>Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.</td>
          </tr>
          <tr>
            <td>03/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/equidad-economica-torreon.html">Equidad Económica en Torreón</a></td>
            <td>Torreón, como la zona metropolitana de La Laguna, se encuentra en una situación favorable en temas de igualdad y cohesión social.</td>
          </tr>
          <tr>
            <td>25/02/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/que-vuelva-la-region-de-los-grandes-esfuerzos.html">Que vuelva la región de los grandes esfuerzos</a></td>
            <td>La Calificadora Internacional Moodys elevó por primera vez la nota soberana de México a la categoría A3 gracias a las reformas estructurales.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html">Diferencial de Grado Promedio de Escolaridad por Género en Gómez Palacio</a></td>
            <td>Grado promedio de escolaridad (GPE) de las mujeres menos GPE de hombres.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html">Mortalidad Infantil en Gómez Palacio</a></td>
            <td>Tasa de mortalidad infantil. Defunciones de menores de un año por cada mil nacimientos</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vih-sida.html">Mortalidad por VIH-SIDA en Gómez Palacio</a></td>
            <td>Defunciones a causa de VIH/SIDA por cada 100,000 habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html">Población Católica en Gómez Palacio</a></td>
            <td>Porcentaje de la población que dijo ser, pertenecer o profesar la religión católica.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html">Población Estimada en Gómez Palacio</a></td>
            <td>Población estimada a mitad de año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-pobreza-extrema.html">Pobreza Extrema en Gómez Palacio</a></td>
            <td>Porcentaje de la población en situación de pobreza extrema.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior en Gómez Palacio</a></td>
            <td>Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-razon-de-mortalidad-materna.html">Razón de Mortalidad Materna en Gómez Palacio</a></td>
            <td>La razón de mortalidad materna es la medida de mortalidad materna más usada. Mide el riesgo obstétrico una vez que la mujer queda embarazada.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html">Rezago Educativo en Gómez Palacio</a></td>
            <td>Tiene 3 a 15 años, no cuenta con la educación básica obligatoria y no asiste a un centro de educación formal o,
Tiene 16 años o más, nació antes de 1982 y no cuenta con el nivel de educación obligatoria vigente en el momento en que debía haberla cursado, o,
Tiene 16 años o más, nació a partir de 1982 y no cuenta con el nivel de educación obligatoria. CONEVAL</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-indice-de-competitividad-urbana.html">Índice de Competitividad Urbana en Gómez Palacio</a></td>
            <td>El índice de Competitividad Urbana (ICU) ha sido dado a conocer por el Instituto Mexicano para la Competitividad (IMCO)en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 0 },{ region: 'Gómez Palacio', dato: 0 },{ region: 'Lerdo', dato: 0 },{ region: 'Matamoros', dato: 0 },{ region: 'La Laguna', dato: 0 },{ region: 'Coahuila', dato: 44.0000 },{ region: 'Durango', dato: 34.0000 },{ region: 'Nacional', dato: 40.0000 }],
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
    } // constructor

} // Clase SociedadUsuariosDeInternet

?>
