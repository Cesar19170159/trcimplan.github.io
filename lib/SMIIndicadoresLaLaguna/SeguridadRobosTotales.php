<?php
/**
 * SeguridadRobosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadRobosTotales
 */
class SeguridadRobosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Robos Totales en La Laguna';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-la-laguna';
        $this->archivo      = 'seguridad-robos-totales';
        $this->descripcion  = 'Cantidad total de robos en el mes.';
        $this->claves       = 'La Laguna, Seguridad, Delincuencia';
        $this->categorias   = array('Seguridad', 'Delincuencia');
        $this->region_nivel = 401;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad total de robos en el mes.</p>

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
            <td>31/01/2014</td>
            <td>952</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>836</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>825</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>763</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>927</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>638</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>742</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>756</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>759</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>851</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>638</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>588</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>647</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>606</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>487</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>696</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Robos Totales en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Robos Totales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Robos Totales</h3>
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
            <td>2015-04-30</td>
            <td>345</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-04-30</td>
            <td>295</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-04-30</td>
            <td>29</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-04-30</td>
            <td>27</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-04-30</td>
            <td>696</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Robos Totales</h3>
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
            <td><a href="../indicadores-la-laguna/seguridad-delitos.html">Delitos en La Laguna</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-homicidios.html">Homicidios en La Laguna</a></td>
            <td>Número de homicidios por mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-a-negocios.html">Robo a Negocios en La Laguna</a></td>
            <td>Robos totales por mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html">Robo a Transeuntes en La Laguna</a></td>
            <td>Robos a Transeuntes totales por mes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html">Robo de Vehículos en La Laguna</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html">Robos a Casa Habitación en La Laguna</a></td>
            <td>Robos totales por mes a casa habitación.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-secuestros.html">Secuestros en La Laguna</a></td>
            <td>Cantidad de secuestros en el mes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-extorsion.html">Tasa de Extorsión en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-homicidio-doloso.html">Tasa de Homicidio Doloso en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html">Tasa de Robo de Vehículo con Violencia en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html">Tasa de Robo de Vehículo sin Violencia en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en La Laguna</a></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2014-01-31', dato: 952 },{ fecha: '2014-02-28', dato: 836 },{ fecha: '2014-03-31', dato: 825 },{ fecha: '2014-04-30', dato: 763 },{ fecha: '2014-05-31', dato: 927 },{ fecha: '2014-06-30', dato: 638 },{ fecha: '2014-07-31', dato: 742 },{ fecha: '2014-08-31', dato: 756 },{ fecha: '2014-09-30', dato: 759 },{ fecha: '2014-10-31', dato: 851 },{ fecha: '2014-11-30', dato: 638 },{ fecha: '2014-12-31', dato: 588 },{ fecha: '2015-01-31', dato: 647 },{ fecha: '2015-02-28', dato: 606 },{ fecha: '2015-03-31', dato: 487 },{ fecha: '2015-04-30', dato: 696 }],
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
      data: [{ region: 'Torreón', dato: 345 },{ region: 'Gómez Palacio', dato: 295 },{ region: 'Lerdo', dato: 29 },{ region: 'Matamoros', dato: 27 },{ region: 'La Laguna', dato: 696 }],
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

} // Clase SeguridadRobosTotales

?>
