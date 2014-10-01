<?php
/**
 * EconomiaCarteraHipotecaria.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase EconomiaCarteraHipotecaria
 */
class EconomiaCarteraHipotecaria extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cartera Hipotecaria en La Laguna';
        $this->nombre_menu = 'Indicadores La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'economia-cartera-hipotecaria';
        $this->descripcion = 'Monto total de créditos otorgados hasta la fecha indicada.';
        $this->claves      = 'La Laguna, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasqqosdwcf">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Monto total de créditos otorgados hasta la fecha indicada.
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
<td class="derecha">$ 4,205,870,657.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2011</td>
<td class="derecha">$ 4,528,969,820.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2012</td>
<td class="derecha">$ 4,896,553,645.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2013</td>
<td class="derecha">$ 5,442,162,894.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">$ 5,671,976,037.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Pesos
<h4>Observaciones</h4>
La cartera hipotecaria de La Laguna representa el 1.69% de la cartera nacional. 

Datos obtenidos de [CNBV](http://portafoliodeinformacion.cnbv.gob.mx/bm1/Paginas/carteravivienda.aspx)
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morrismxrvvmqr" class="grafica"></div>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLettnkkzgaa" class="mapa"></div>
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
<td>2010-12-31</td>
<td class="derecha">$ 3,479,653,828.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2011-12-31</td>
<td class="derecha">$ 3,741,316,668.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2012-12-31</td>
<td class="derecha">$ 4,027,766,032.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-12-31</td>
<td class="derecha">$ 4,476,538,920.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">$ 4,664,619,926.00</td>
<td>Comisión Nacional Bancaria y de Valores (CNBV)</td>
<td>Dato trimestral</td>
</tr>
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
</tbody>
</table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetasqqosdwcf a:first').tab('show')
});
// LENGUETA
$('#Lenguetasqqosdwcf a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrismxrvvmqr === 'undefined') {
    varMorrismxrvvmqr = Morris.Line({
      element: 'Morrismxrvvmqr',
      data: [{ fecha: '2010-12-31', dato: 4205870657.00 },{ fecha: '2011-12-31', dato: 4528969820.00 },{ fecha: '2012-12-31', dato: 4896553645.00 },{ fecha: '2013-12-31', dato: 5442162894.00 },{ fecha: '2014-03-31', dato: 5671976037.00 }],
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
$('#Lenguetasqqosdwcf a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var maptnkkzgaa;
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
  function initmaptnkkzgaa() {
    // Nuevo Mapa
    maptnkkzgaa = new L.Map('LeafLettnkkzgaa');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    maptnkkzgaa.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    maptnkkzgaa.addLayer(osm);
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
    }).addTo(maptnkkzgaa);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmaptnkkzgaa === 'undefined') {
    varinitmaptnkkzgaa = initmaptnkkzgaa();
  };
});
FINAL;
    } // constructor

} // Clase EconomiaCarteraHipotecaria

?>
