<?php
/**
 * EconomiaProduccionBrutaTotalPerCapita.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaProduccionBrutaTotalPerCapita
 */
class EconomiaProduccionBrutaTotalPerCapita extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Producción Bruta Total Per Cápita en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-produccion-bruta-total-per-capita';
        $this->descripcion = 'Producción bruta total (de los sectores industria, comercio y servicios) entre población total.';
        $this->claves      = 'La Laguna, Macroeconomía, Finanzas Públicas';
        $this->categorias  = array('Macroeconomía', 'Finanzas Públicas');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="lenguetasindicador">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
<p>Producción bruta total (de los sectores industria, comercio y servicios) entre población total.</p>

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
            <td class="centrado">31/12/1998</td>
            <td class="derecha">$ 49,506.05</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $5,002.48. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630</td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">$ 88,356.17</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $7,862.83. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720</td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">$ 149,559.46</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $10,812.18. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
      <h4>Observaciones</h4>
<p>La producción bruta total per cápita a nivel nacional es de:</p>

<ul>
<li>2008 = $103,094.93 </li>
<li>2003 = $60,324.54 </li>
<li>1998 = $37,765.57 </li>
</ul>

<p>La producción bruta total per cápita en dólares a nivel nacional es de:</p>

<ul>
<li>2008 = $7,453.09 </li>
<li>2003 = $5,368.29 </li>
<li>1998 = $3,816.13 </li>
</ul>

<p>Calculados con el tipo de cambio Fix publicado por el Banxico al cierre del año correspondiente.</p>

<p>Datos obtenidos de <a href="http://www3.inegi.org.mx/sistemas/saic/">INEGI Censos económicos.</a></p>

    </div>
    <div class="tab-pane" id="grafica">
<h4>Gráfica</h4>
<div id="Morrisroooqywp" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
<h4>En otras regiones</h4>
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
            <td>1998-12-31</td>
            <td class="derecha">$ 57,746.33</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $5,835.14. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630</td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2003-12-31</td>
            <td class="derecha">$ 101,715.94</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $9,051.63. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720</td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2008-12-31</td>
            <td class="derecha">$ 197,853.91</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $14,303.55. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>1998-12-31</td>
            <td class="derecha">$ 64,469.91</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $6,514.55. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2003-12-31</td>
            <td class="derecha">$ 117,603.88</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $10,465.59. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td class="derecha">$ 157,032.38</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $11,352.42. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>1998-12-31</td>
            <td class="derecha">$ 12,093.88</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,222.06. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2003-12-31</td>
            <td class="derecha">$ 21,705.57</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,931.58. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">$ 16,746.04</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,210.63. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>1998-12-31</td>
            <td class="derecha">$ 3,080.72</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $311.30. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2003-12-31</td>
            <td class="derecha">$ 6,803.48</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $605.44. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">$ 15,373.03</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td>La producción bruta total per cápita en dólares es de $1,111.37. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250</td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td class="derecha">$ 103,094.92</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#lenguetasindicador a:first').tab('show')
});
// LENGUETA
$('#lenguetasindicador a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisroooqywp === 'undefined') {
    varMorrisroooqywp = Morris.Line({
      element: 'Morrisroooqywp',
      data: [{ fecha: '1998-12-31', dato: 49506.05 },{ fecha: '2003-12-31', dato: 88356.17 },{ fecha: '2008-12-31', dato: 149559.46 }],
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

} // Clase EconomiaProduccionBrutaTotalPerCapita

?>
