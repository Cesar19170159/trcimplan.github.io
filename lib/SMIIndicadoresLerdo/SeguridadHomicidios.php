<?php
/**
 * SeguridadHomicidios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadHomicidios
 */
class SeguridadHomicidios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Homicidios en Lerdo';
        $this->nombre_menu = 'Indicadores Lerdo';
        $this->directorio  = 'indicadores-lerdo';
        $this->archivo     = 'seguridad-homicidios';
        $this->descripcion = 'Número de homicidios durante el primer trimestre de 2014';
        $this->claves      = 'Lerdo, Delincuencia, Seguridad';
        $this->categorias  = array('Delincuencia', 'Seguridad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasnfkbqgpn">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Número de homicidios durante el primer trimestre de 2014
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
<td class="centrado">31/01/2014</td>
<td class="derecha">6</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">28/02/2014</td>
<td class="derecha">6</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">7</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/04/2014</td>
<td class="derecha">3</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/05/2014</td>
<td class="derecha">6</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">3</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Cantidad
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrisaxhlkwmi" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetvdvyohfm" class="mapa"></div>
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
<td>2014-01-31</td>
<td class="derecha">24</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-02-28</td>
<td class="derecha">24</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">13</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-04-30</td>
<td class="derecha">16</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-05-31</td>
<td class="derecha">20</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">15</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-01-31</td>
<td class="derecha">12</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-02-28</td>
<td class="derecha">10</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="derecha">8</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-04-30</td>
<td class="derecha">17</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-05-31</td>
<td class="derecha">10</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-06-30</td>
<td class="derecha">19</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-01-31</td>
<td class="derecha">3</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-02-28</td>
<td class="derecha">2</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="derecha">4</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-04-30</td>
<td class="derecha">1</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-05-31</td>
<td class="derecha">2</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-06-30</td>
<td class="derecha">1</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos del segundo trimestre de 2014</td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-01-31</td>
<td class="derecha">45</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-02-28</td>
<td class="derecha">42</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-03-31</td>
<td class="derecha">32</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-04-30</td>
<td class="derecha">37</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-05-31</td>
<td class="derecha">38</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2014-06-30</td>
<td class="derecha">38</td>
<td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
<td>Datos correspondientes al segundo trimestre de 2014</td>
</tr>
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasnfkbqgpn a:first').tab('show')
});
// LENGUETA
$('#Lenguetasnfkbqgpn a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisaxhlkwmi === 'undefined') {
    varMorrisaxhlkwmi = Morris.Line({
      element: 'Morrisaxhlkwmi',
      data: [{ fecha: '2014-01-31', dato: 6 },{ fecha: '2014-02-28', dato: 6 },{ fecha: '2014-03-31', dato: 7 },{ fecha: '2014-04-30', dato: 3 },{ fecha: '2014-05-31', dato: 6 },{ fecha: '2014-06-30', dato: 3 }],
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
$('#Lenguetasnfkbqgpn a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapvdvyohfm;
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
  function initmapvdvyohfm() {
    // Nuevo Mapa
    mapvdvyohfm = new L.Map('LeafLetvdvyohfm');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapvdvyohfm.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapvdvyohfm.addLayer(osm);
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
    }).addTo(mapvdvyohfm);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapvdvyohfm === 'undefined') {
    varinitmapvdvyohfm = initmapvdvyohfm();
  };
});
FINAL;
    } // constructor

} // Clase SeguridadHomicidios

?>
