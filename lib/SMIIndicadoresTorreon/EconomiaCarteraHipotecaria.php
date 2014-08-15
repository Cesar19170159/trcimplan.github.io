<?php
/**
 * EconomiaCarteraHipotecaria.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cartera Hipotecaria en Torreón';
        $this->directorio  = 'indicadores-torreon';
        $this->archivo     = 'economia-cartera-hipotecaria';
        $this->descripcion = 'Monto de créditos otorgados a la fecha indicada.';
        $this->claves      = 'Torreón, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Monto de créditos otorgados a la fecha indicada.

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
<td class="centrado">31/12/2010</td>
<td class="derecha">$ 3,479,653,828.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">$ 3,741,316,668.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">$ 4,027,766,032.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">$ 4,476,538,920.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">$ 4,664,619,926.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Pesos.

<h4>Observaciones</h4>
La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional. 

Datos obtenidos de [CNBV](http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx)

<h4>Gráfica</h4>

<div id="Morrisqktdzcdo" class="grafica"></div>


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
<td>Gómez Palacio</td>
<td>2010-12-31</td>
<td class="derecha">$ 428,193,681.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2011-12-31</td>
<td class="derecha">$ 487,730,197.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">$ 549,445,038.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">$ 588,858,276.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="derecha">$ 614,765,352.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">$ 231,743,194.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">$ 240,598,550.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">$ 261,966,994.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">$ 319,887,703.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">$ 334,888,287.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">$ 66,279,954.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">$ 59,324,405.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">$ 57,375,581.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">$ 56,877,995.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">$ 57,702,472.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">$ 4,205,870,657.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">$ 4,528,969,820.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">$ 4,896,553,645.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">$ 5,442,162,894.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">$ 5,671,976,037.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisqktdzcdo === 'undefined') {
    varMorrisqktdzcdo = Morris.Line({
      element: 'Morrisqktdzcdo',
      data: [{ fecha: '2010-12-31', dato: 3479653828.00 },{ fecha: '2011-12-31', dato: 3741316668.00 },{ fecha: '2012-12-31', dato: 4027766032.00 },{ fecha: '2013-12-31', dato: 4476538920.00 },{ fecha: '2014-03-31', dato: 4664619926.00 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // constructor

} // Clase EconomiaCarteraHipotecaria

?>
