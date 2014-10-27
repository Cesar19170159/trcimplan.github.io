<?php
/**
 * SociedadPobreza.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadPobreza
 */
class SociedadPobreza extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Pobreza en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-pobreza';
        $this->descripcion = 'Porcentaje de la población en situación de pobreza.';
        $this->claves      = 'Matamoros, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="lenguetasindicador">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
<p>Porcentaje de la población en situación de pobreza.</p>

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
            <td class="derecha">33.84 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h4>Observaciones</h4>
<p>Consulta la <a href="http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx">Base de Datos</a></p>

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
            <td class="derecha">26.80 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td class="derecha">37.29 %</td>
            <td>CONEVAL</td>
            <td>Consulta la [Base de Datos](http://www.coneval.gob.mx/Medicion/Paginas/Medici%C3%B3n/Pobreza%202012/Pobreza-2012.aspx)</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td class="derecha">47.98 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">32.74 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td class="derecha">27.70 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td class="derecha">50.34 %</td>
            <td>CONEVAL</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td class="derecha">45.59 %</td>
            <td>CONEVAL</td>
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
FINAL;
    } // constructor

} // Clase SociedadPobreza

?>
