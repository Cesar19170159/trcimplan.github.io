<?php
/**
 * SeguridadTasaDeSecuestro.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadTasaDeSecuestro
 */
class SeguridadTasaDeSecuestro extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Tasa de Secuestro en Matamoros';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-matamoros';
        $this->archivo      = 'seguridad-tasa-de-secuestro';
        $this->descripcion  = '';
        $this->claves       = 'Matamoros, Seguridad, Delincuencia';
        $this->categorias   = array('Seguridad', 'Delincuencia');
        $this->region_nivel = 131;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>


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
            <td>31/03/2015</td>
            <td>NO DISPONIBLE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: <a href="http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php">Secretariado Ejecutivo del Sistema Nacional de Seguridad</a></p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Tasa de Secuestro</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Secuestro</h3>
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
            <td>2015-03-31</td>
            <td>NO DISPONIBLE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-03-31</td>
            <td>NO DISPONIBLE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-03-31</td>
            <td>NO DISPONIBLE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-03-31</td>
            <td>NO DISPONIBLE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-03-31</td>
            <td>NO DISPONIBLE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2015-04-30</td>
            <td>0.24 %</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2015-04-30</td>
            <td>NO TIENE</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Tasa de Secuestro</h3>
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
            <td>22/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/necesidad-diagnostico-sobre-delincuencia-juvenil.html">La Necesidad de un Diagnóstico sobre la Delincuencia Juvenil en el Municipio de Torreón</a></td>
            <td>Se debe desarrollar un trabajo conjunto entre autoridades y organizaciones civiles en el tema de la delincuencia juvenil para tener un conocimiento claro de cómo ha evolucionado, de su situación real y para crear las políticas públicas pertinentes.</td>
          </tr>
          <tr>
            <td>17/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/seguridad-humana.html">Seguridad Humana</a></td>
            <td>La población se siente insegura no solo por las acciones de la delincuencia organizada, también la genera la falta de empleo, la pobreza persistente, la ausencia de acceso a cuidados básicos de salud, la violencia física, la violencia familiar, la represión política, la violación a los derechos humanos, el deterioro ambiental, la incertidumbre política, la falta de educación, la imposibilidad de ejercer el derecho de libre expresión y la ausencia de equidad de género entre otros.</td>
          </tr>
          <tr>
            <td>07/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delincuencia-juvenil.html">La prevención de la Delincuencia Juvenil, elemento central de la prevención integral del delito y la violencia</a></td>
            <td>Dentro de una estrategia de prevención integral del delito, la delincuencia juvenil constituye desde luego el elemento fundamental, si lo que se pretende es evitar que niños de doce años decidan formar parte de la delincuencia.</td>
          </tr>
          <tr>
            <td>18/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-seguridad.html">La Prevención del Delito como elemento fundamental para la Seguridad</a></td>
            <td>La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).</td>
          </tr>
          <tr>
            <td>25/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/comportamiento-tendencia-incidencia-delictiva.html">Comportamiento y tendencia de la incidencia delictiva. Una visión ampliada.</a></td>
            <td>Mostramos las tendencias de los delitos más recurrentes en la ciudad de Torreón; con datos del Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública.</td>
          </tr>
          <tr>
            <td>02/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/zml-sistema-derecho-confiable-objetivo.html">La Zona Metropolitana de La Laguna y sus municipios en Sistema de Derecho Confiable y Objetivo</a></td>
            <td>De acuerdo al ICU 2012, es el subíndice más débil de la región; algunos de sus subíndices ponderados con alto peso por el IMCO corresponden a rubros de seguridad pública.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-delitos.html">Delitos en Matamoros</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-homicidios.html">Homicidios en Matamoros</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html">Personas Involucradas en Delitos del Fuero Común en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html">Personas Involucradas en Delitos del Fuero Federal en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-comun.html">Presuntos Delitos del Fuero Común en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-federal.html">Presuntos Delitos del Fuero Federal en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-a-negocios.html">Robo a Negocios en Matamoros</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en Matamoros</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robo-de-vehiculos.html">Robo de Vehículos en Matamoros</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robos-totales.html">Robos Totales en Matamoros</a></td>
            <td>Cantidad total de robos en el mes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en Matamoros</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-secuestros.html">Secuestros en Matamoros</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en Matamoros</a></td>
            <td></td>
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
      data: [{ region: 'Torreón', dato: 0 },{ region: 'Gómez Palacio', dato: 0 },{ region: 'Lerdo', dato: 0 },{ region: 'Matamoros', dato: 0 },{ region: 'La Laguna', dato: 0 },{ region: 'Coahuila', dato: 0.2400 },{ region: 'Durango', dato: 0 }],
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

} // Clase SeguridadTasaDeSecuestro

?>
