<?php
/**
 * SociedadMedicos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadMedicos
 */
class SociedadMedicos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Médicos en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-medicos';
        $this->descripcion = 'Médicos en contacto con pacientes por cada diez mil personas.';
        $this->claves      = 'Gómez Palacio, Salud';
        $this->categorias  = array('Salud');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasdjjghdmp">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Médicos en contacto con pacientes por cada diez mil personas.

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
<td class="centrado">31/12/2001</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2002</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">4.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2004</td>
<td class="derecha">4.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2005</td>
<td class="derecha">4.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2006</td>
<td class="derecha">3.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2007</td>
<td class="derecha">4.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">5.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2009</td>
<td class="derecha">5.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2010</td>
<td class="derecha">4.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">4.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">4.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">4.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Por cada 10 mil.

<h4>Observaciones</h4>
Dirección General de Información en Salud (DGIS). Base de datos de recursos (infraestructura, materiales y humanos) de la Secretaría de Salud y los Servicios Estatales de Salud 2001-2009: [Sistema Nacional de Información en Salud](http://www.sinais.salud.gob.mx) (SINAIS). México: Secretaría de Salud. Consulta: 01 abril 2014.

    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>

<div id="Morristjgtuaed" class="grafica"></div>


    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetzzhekldi" class="mapa"></div>
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
<td>2001-12-31</td>
<td class="derecha">2.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2002-12-31</td>
<td class="derecha">1.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">1.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2004-12-31</td>
<td class="derecha">1.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2005-12-31</td>
<td class="derecha">1.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2006-12-31</td>
<td class="derecha">1.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2007-12-31</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2009-12-31</td>
<td class="derecha">2.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2010-12-31</td>
<td class="derecha">2.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">2.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2001-12-31</td>
<td class="derecha">5.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2002-12-31</td>
<td class="derecha">5.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2003-12-31</td>
<td class="derecha">5.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2004-12-31</td>
<td class="derecha">5.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2005-12-31</td>
<td class="derecha">5.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2006-12-31</td>
<td class="derecha">4.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2007-12-31</td>
<td class="derecha">6.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">5.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2009-12-31</td>
<td class="derecha">5.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2010-12-31</td>
<td class="derecha">6.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2011-12-31</td>
<td class="derecha">6.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2012-12-31</td>
<td class="derecha">6.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">6.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2001-12-31</td>
<td class="derecha">3.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2002-12-31</td>
<td class="derecha">3.4000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">3.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2004-12-31</td>
<td class="derecha">3.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2005-12-31</td>
<td class="derecha">3.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2006-12-31</td>
<td class="derecha">3.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2007-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2009-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2010-12-31</td>
<td class="derecha">4.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2011-12-31</td>
<td class="derecha">4.2000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2012-12-31</td>
<td class="derecha">4.3000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">4.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2001-12-31</td>
<td class="derecha">3.1000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2002-12-31</td>
<td class="derecha">2.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">3.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2004-12-31</td>
<td class="derecha">3.0000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2005-12-31</td>
<td class="derecha">2.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2006-12-31</td>
<td class="derecha">2.9000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2007-12-31</td>
<td class="derecha">3.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2009-12-31</td>
<td class="derecha">3.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2010-12-31</td>
<td class="derecha">3.8000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2011-12-31</td>
<td class="derecha">3.6000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2012-12-31</td>
<td class="derecha">3.7000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">3.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Coahuila</td>
<td>2012-12-31</td>
<td class="derecha">4.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Durango</td>
<td>2012-12-31</td>
<td class="derecha">8.5000</td>
<td>SINAIS (SSA)</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2012-12-31</td>
<td class="derecha">7.6000</td>
<td>SINAIS (SSA)</td>
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
  $('#Lenguetasdjjghdmp a:first').tab('show')
});
// LENGUETA
$('#Lenguetasdjjghdmp a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorristjgtuaed === 'undefined') {
    varMorristjgtuaed = Morris.Line({
      element: 'Morristjgtuaed',
      data: [{ fecha: '2001-12-31', dato: 3.7000 },{ fecha: '2002-12-31', dato: 4.0000 },{ fecha: '2003-12-31', dato: 4.1000 },{ fecha: '2004-12-31', dato: 4.3000 },{ fecha: '2005-12-31', dato: 4.3000 },{ fecha: '2006-12-31', dato: 3.9000 },{ fecha: '2007-12-31', dato: 4.2000 },{ fecha: '2008-12-31', dato: 5.1000 },{ fecha: '2009-12-31', dato: 5.3000 },{ fecha: '2010-12-31', dato: 4.9000 },{ fecha: '2011-12-31', dato: 4.4000 },{ fecha: '2012-12-31', dato: 4.5000 },{ fecha: '2013-12-31', dato: 4.2000 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA
$('#Lenguetasdjjghdmp a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapzzhekldi;
  // DECLARAR LOS CIRCULOS DE COLORES PARA GEOPUNTOS
  var circuloParque = {
    "radius": 8,
    "fillColor": "#2BFF2B",
    "color": "#000",
    "weight": 1,
    "opacity": 1,
    "fillOpacity": 0.7
  };
  // Función para Pop-Ups
  function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
      layer.bindPopup(feature.properties.popupContent);
    }
  };
  // Función para el mapa
  function initmapzzhekldi() {
    // Nuevo Mapa
    mapzzhekldi = new L.Map('LeafLetzzhekldi');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapzzhekldi.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapzzhekldi.addLayer(osm);
    // ARREGLO CON LOS GEOPUNTOS
    var geoPuntos = {
      "type": "FeatureCollection",
      "features": [
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Plaza Mayor" },
          "geometry": {"type":"Point","coordinates":[-103.45387,25.54021]},
          "id": 1
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque V. Carranza" },
          "geometry": {"type":"Point","coordinates":[-103.43321,25.54132]},
          "id": 2
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque Urbano" },
          "geometry": {"type":"Point","coordinates":[-103.39061,25.55129]},
          "id": 3
        }
      ]
    };
    // CONMUTAR LOS GEOPUNTOS POR SUS CIRCULOS DE COLORES
    L.geoJson(geoPuntos, {
      onEachFeature: onEachFeature,
      pointToLayer: function (feature, latlng) {
        switch (feature.properties.name) {
          case 'Parque': return L.circleMarker(latlng, circuloParque);
        }
      }
    }).addTo(mapzzhekldi);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapzzhekldi === 'undefined') {
    varinitmapzzhekldi = initmapzzhekldi();
  };
});
FINAL;
    } // constructor

} // Clase SociedadMedicos

?>
