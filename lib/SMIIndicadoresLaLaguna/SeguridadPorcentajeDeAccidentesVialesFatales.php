<?php
/**
 * SeguridadPorcentajeDeAccidentesVialesFatales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadPorcentajeDeAccidentesVialesFatales
 */
class SeguridadPorcentajeDeAccidentesVialesFatales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Porcentaje de Accidentes Viales Fatales en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'seguridad-porcentaje-de-accidentes-viales-fatales';
        $this->descripcion = 'Porcentaje de accidentes fatales entre accidentes viales totales';
        $this->claves      = 'La Laguna, Vialidad';
        $this->categorias  = array('Vialidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaswkdtnqjq">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Porcentaje de accidentes fatales entre accidentes viales totales
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
<td class="centrado">31/12/2012</td>
<td class="derecha">1.61 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
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
<td>2012-12-31</td>
<td class="derecha">1.17 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-12-31</td>
<td class="derecha">1.94 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">3.04 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">1.04 %</td>
<td>INEGI</td>
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
  $('#Lenguetaswkdtnqjq a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SeguridadPorcentajeDeAccidentesVialesFatales

?>
