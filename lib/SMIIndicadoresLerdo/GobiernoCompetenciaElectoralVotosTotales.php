<?php
/**
 * GobiernoCompetenciaElectoralVotosTotales.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoCompetenciaElectoralVotosTotales
 */
class GobiernoCompetenciaElectoralVotosTotales extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Competencia Electoral Votos Totales en Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'gobierno-competencia-electoral-votos-totales';
        $this->descripcion = '';
        $this->claves      = 'Lerdo, Participación Ciudadana';
        $this->categorias  = array('Participación Ciudadana');
        $this->contenido   = <<<FINAL


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
<td class="centrado">01/07/2012</td>
<td class="derecha">56,517</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.




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
<td>2012-07-01</td>
<td class="derecha">246,044</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2012-07-01</td>
<td class="derecha">120,131</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-07-01</td>
<td class="derecha">48,093</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-07-01</td>
<td class="derecha">479,785</td>
<td>INE-IEPCC</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase GobiernoCompetenciaElectoralVotosTotales

?>
