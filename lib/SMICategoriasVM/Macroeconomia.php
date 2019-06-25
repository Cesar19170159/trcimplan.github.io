<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Macroeconomia
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace SMICategorias;

/**
 * Clase Macroeconomia
 */
class Macroeconomia extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Macroeconomía';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'macroeconomia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Macroeconomía. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Macroeconomía';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/macroeconomia.jpg';
        $this->imagen_previa = '../imagenes/categorias/macroeconomia.jpg';
        $this->imagen_id     = 'categorias-macroeconomia';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Iniciar el contenido que será un SchemaArticle
        $this->contenido = new \Base\SchemaArticle();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir propiedades del contenido que es un SchemaArticle
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
        $this->contenido->articleBody   = <<<FINAL
<h3>Zona Metropolitana de La Laguna</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del PIB Estatal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">1.97 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">2.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">2.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">1.97 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2016, IMCO">2.10 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de complejidad económica</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-indice-de-complejidad-economica.html" data-toggle="tooltip" title="Índice (0-100), 31/12/2014, IMCO">0.48</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inflación Anual</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inflacion-anual.html" data-toggle="tooltip" title="Porcentaje, 31/12/2017, INEGI">8.5787 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inflación mensual</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inflacion-mensual.html" data-toggle="tooltip" title="Porcentaje, 30/06/2018, INEGI">4.71 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Intensidad eléctrica</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-intensidad-electrica.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">8.35</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 46.50</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 214.49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/05/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 9.79</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 0.61</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 271.40</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Per cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 1,215.79</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 166.04</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 567.45</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 329.76</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 780.89</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Participación del municipio en el PIB de la ZM</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-participacion-del-municipio-en-el-pib-de-la-zm.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-participacion-del-municipio-en-el-pib-de-la-zm.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">25 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-participacion-del-municipio-en-el-pib-de-la-zm.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">2 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-participacion-del-municipio-en-el-pib-de-la-zm.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">1 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Participación del PIB en el estado</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-participacion-del-pib-en-el-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">29 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-participacion-del-pib-en-el-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">32 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-participacion-del-pib-en-el-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">2 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-participacion-del-pib-en-el-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">PIB</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-pib.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 188,607,528.50</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-pib.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 63,790,874.23</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-pib.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 4,654,327.54</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-pib.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 2,519,550.14</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-pib.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 259,572,280.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">PIB en sectores de innovación</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-pib-en-sectores-de-innovacion.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 40,018,039.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-pib-en-sectores-de-innovacion.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 12,252,764.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-pib-en-sectores-de-innovacion.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 125,556.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-pib-en-sectores-de-innovacion.html" data-toggle="tooltip" title="Miles de pesos, 31/12/2016, IMCO">$ 6,364,805.00</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producción Bruta Total Per Cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 225,170.46</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 154,519.29</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 26,085.15</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 18,450.05</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 164,908.36</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 51,284.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 45,744.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producto Interno Bruto per cápita</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-producto-interno-bruto-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2015, IMCO">$ 184,042.74</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Estimación de PIB</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-estimacion-de-pib.html" data-toggle="tooltip" title="Miles de millones de pesos, 31/12/2016, Citibanamex">279.3</a></td>
  </tr>
</tbody>
</table>
<h3>Otras regiones</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Coahuila</th>
    <th>Durango</th>
    <th>Nacional</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inflación Anual</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-inflacion-anual.html" data-toggle="tooltip" title="Porcentaje, 31/12/2017, INEGI">6.77 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 20,685.96</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Per cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 837.41</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 750.61</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2016, Elaboración propia con datos obtenidos del INEGI">$ 495.10</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producción Bruta Total Per Cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-coahuila/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 218,704.95</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-durango/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 63,345.06</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-nacional/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 118,115.69</a></td>
  </tr>
</tbody>
</table>
FINAL;
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript
        $this->javascript = <<<FINAL
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase Macroeconomia

?>
