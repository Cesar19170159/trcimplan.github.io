<?php
/**
 * SociedadEstimacionDeMenoresHuerfanosPorAgresiones.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones
 */
class SociedadEstimacionDeMenoresHuerfanosPorAgresiones extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Estimación de Menores Huérfanos por Agresiones en Torreón';
        $this->nombre_menu = 'Indicadores Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'sociedad-estimacion-de-menores-huerfanos-por-agresiones';
        $this->descripcion = 'Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).';
        $this->claves      = 'Torreón, Grupos Vulnerables, Delincuencia';
        $this->categorias  = array('Grupos Vulnerables', 'Delincuencia');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetashdndstad">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Menores de edad que han perdido a padre o madre a causa de agresión (homicidio).
<h4>Información recopilada</h4>
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
<td class="centrado">31/12/2008</td>
<td class="derecha">544</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">597</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">753</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">858</td>
<td>IMPLAN</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">1,253</td>
<td>IMPLAN</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
<h4>Observaciones</h4>
Elaboración propia en base a las defunciones registradas en [SINAIS](http://www.sinais.salud.gob.mx)
    </div>
    <div class="tab-pane active" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisaepbctwj" class="grafica"></div>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetashdndstad a:first').tab('show')
});
// LENGUETA
$('#Lenguetashdndstad a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisaepbctwj === 'undefined') {
    varMorrisaepbctwj = Morris.Line({
      element: 'Morrisaepbctwj',
      data: [{ fecha: '2008-12-31', dato: 544 },{ fecha: '2009-12-31', dato: 597 },{ fecha: '2010-12-31', dato: 753 },{ fecha: '2011-12-31', dato: 858 },{ fecha: '2012-12-31', dato: 1253 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
FINAL;
    } // constructor

} // Clase SociedadEstimacionDeMenoresHuerfanosPorAgresiones

?>
