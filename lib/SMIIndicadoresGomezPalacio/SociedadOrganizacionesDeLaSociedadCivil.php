<?php
/**
 * SociedadOrganizacionesDeLaSociedadCivil.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadOrganizacionesDeLaSociedadCivil
 */
class SociedadOrganizacionesDeLaSociedadCivil extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Organizaciones de la Sociedad Civil en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-organizaciones-de-la-sociedad-civil';
        $this->descripcion = 'Organizaciones de la sociedad civil por cada cien mil habitantes.';
        $this->claves      = 'Gómez Palacio, Participación Ciudadana, Gobierno';
        $this->categorias  = array('Participación Ciudadana', 'Gobierno');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetastgyymkjr">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Organizaciones de la sociedad civil por cada cien mil habitantes.
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
<td class="centrado">31/03/2014</td>
<td class="derecha">45.8400</td>
<td>RFOSC</td>
<td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Por cada 100 mil
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
<td>2014-03-31</td>
<td class="derecha">47.9800</td>
<td>RFOSC</td>
<td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="derecha">22.7000</td>
<td>RFOSC</td>
<td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">10.7800</td>
<td>RFOSC</td>
<td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">41.2200</td>
<td>RFOSC</td>
<td>Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)</td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetastgyymkjr a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadOrganizacionesDeLaSociedadCivil

?>
