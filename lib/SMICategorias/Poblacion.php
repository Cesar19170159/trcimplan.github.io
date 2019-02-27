<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Poblacion
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
 * Clase Poblacion
 */
class Poblacion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Población';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'poblacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Población. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Población';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/poblacion.jpg';
        $this->imagen_previa = '../imagenes/categorias/poblacion.jpg';
        $this->imagen_id     = 'categorias-poblacion';
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
    <td class="indicador color1">Densidad Poblacional</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2012, IMCO">6,401.3953</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-densidad-poblacional.html" data-toggle="tooltip" title="Habitantes por kilómetro cuadrado, 31/12/2016, IMCO">54.4100</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personas con ingresos mayores al promedio de la Ciudad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personas-con-ingresos-mayores-al-promedio-de-la-ciudad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">84969</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personas-con-ingresos-mayores-al-promedio-de-la-ciudad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">31841</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personas-con-ingresos-mayores-al-promedio-de-la-ciudad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">13078</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personas-con-ingresos-mayores-al-promedio-de-la-ciudad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">14899</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personas-con-ingresos-mayores-al-promedio-de-la-ciudad.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">25 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población con discapacidad del Centro Histórico</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-poblacion-con-discapacidad-del-centro-historico.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">430</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población Económicamente Activa (PEA)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-poblacion-economicamente-activa-pea.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, Encuesta Nacional de Ocupación y Empleo (ENOE) Indicadores Estratégicos">528456</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-poblacion-economicamente-activa-pea.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">165171</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-poblacion-economicamente-activa-pea.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">54779</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-poblacion-economicamente-activa-pea.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">81243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-poblacion-economicamente-activa-pea.html" data-toggle="tooltip" title="Cantidad, 31/12/2016, IMCO">613008</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población ocupada</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-poblacion-ocupada.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">294071</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-poblacion-ocupada.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">153477</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-poblacion-ocupada.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">50569</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-poblacion-ocupada.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">79877</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-poblacion-ocupada.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">577994</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Proporción de la PEA de la ciudad por municipio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-proporcion-de-la-pea-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">51 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-proporcion-de-la-pea-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-proporcion-de-la-pea-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-proporcion-de-la-pea-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">13 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alojamiento y preparación de alimentos en Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alojamiento-y-preparacion-de-alimentos-en-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">564</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Carencia por acceso a la alimentación</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-carencia-por-acceso-a-la-alimentacion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">19.88 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Carencia por acceso a la seguridad social</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-carencia-por-acceso-a-la-seguridad-social.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">34.59 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Carencia por acceso a los servicios básicos de la vivienda</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-carencia-por-acceso-a-los-servicios-basicos-de-la-vivienda.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">4.65 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Carencia por acceso a los servicios de salud</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-carencia-por-acceso-a-los-servicios-de-salud.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">18.08 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Comercio al por menor en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-comercio-al-por-menor-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">1839</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Defunciones</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-defunciones.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, INEGI">5.09</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Equidad laboral</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-equidad-laboral.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, IMCO">0.5531</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Esperanza de vida al nacer</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-esperanza-de-vida-al-nacer.html" data-toggle="tooltip" title="Años, 31/12/2010, IMCO">74.31</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Fecundidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.50</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.34</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.23</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2015, INEGI">2.60</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Matrimonio infantil, precoz o forzado</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-matrimonio-infantil-precoz-o-forzado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">5.89 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Migrantes (Nal y Ext) con educación superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-migrantes-nal-y-ext-con-educacion-superior.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6.88 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-migrantes-nal-y-ext-con-educacion-superior.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6.62 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-migrantes-nal-y-ext-con-educacion-superior.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">3.15 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-migrantes-nal-y-ext-con-educacion-superior.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">0.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-migrantes-nal-y-ext-con-educacion-superior.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">6.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Nacimientos</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-nacimientos.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, INEGI">15.32</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ocupantes por cuarto en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-ocupantes-por-cuarto-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">2</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Participación del municipio en la población del estado</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-participacion-del-municipio-en-la-poblacion-del-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">23.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-participacion-del-municipio-en-la-poblacion-del-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">20.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-participacion-del-municipio-en-la-poblacion-del-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-participacion-del-municipio-en-la-poblacion-del-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">4.00 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-participacion-del-municipio-en-la-poblacion-del-estado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, IMCO">32.73 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Católica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">83.7 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.8 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.1 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">77.6 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.8 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población de 0 a 14 años del Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-de-0-a-14-anos-del-centro-historico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">15.97 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población de 15 a 29 años del Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-de-15-a-29-anos-del-centro-historico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">20.77 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población de 18 a 25 años</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-de-18-a-25-anos.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">74323</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-de-18-a-25-anos.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">51089</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-de-18-a-25-anos.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">14441</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-de-18-a-25-anos.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">17073</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-de-18-a-25-anos.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">156926</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población de 30 a 59 años del Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-de-30-a-59-anos-del-centro-historico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">35.57 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población de 60 y más años del Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-de-60-y-mas-anos-del-centro-historico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">19.79 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población del Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-del-centro-historico.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI. Censos de Población y Vivienda">8587</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población del estado al que pertenece el municipio</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-del-estado-al-que-pertenece-el-municipio.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">3043062</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-del-estado-al-que-pertenece-el-municipio.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">1801963</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-del-estado-al-que-pertenece-el-municipio.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">1801963</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-del-estado-al-que-pertenece-el-municipio.html" data-toggle="tooltip" title="Personas, 31/12/2016, IMCO">3043062</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, CONAPO">700655</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, CONAPO">357663</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, CONAPO">154620</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, CONAPO">114828</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, CONAPO">1356216</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Promedio de Descendencia por Varón</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMPLAN">1.66</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Proporción de la población de la ciudad por municipio</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-proporcion-de-la-poblacion-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">53 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-proporcion-de-la-poblacion-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">27 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-proporcion-de-la-poblacion-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">12 %</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-proporcion-de-la-poblacion-de-la-ciudad-por-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, IMCO">9 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Proporción de mujeres</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-proporcion-de-mujeres.html" data-toggle="tooltip" title="Porcentaje, 31/12/2018, CONAPO">51.02 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Tasa de suicidios</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-tasa-de-suicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">37</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-tasa-de-suicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">21</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-tasa-de-suicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">9</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-tasa-de-suicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">7</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-tasa-de-suicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2016, IMCO">5.57</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Total de establecimientos en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-total-de-establecimientos-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">4784</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Trabajo no remunerado de hombres y mujeres</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-trabajo-no-remunerado-de-hombres-y-mujeres.html" data-toggle="tooltip" title="Horas, 31/12/2015, IMCO">35.9873</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">3774</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas habitadas en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-habitadas-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">2717</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas particulares deshabitadas en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-deshabitadas-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">843</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas Alquiladas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-alquiladas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">15 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas de un Familiar o Prestada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-de-un-familiar-o-prestada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">11.6 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas particulares habitadas en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">2667</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas en Otra Situación de Tenencia</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-en-otra-situacion-de-tenencia.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">1.3 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas Propias</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-propias.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">71.9 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Pantalla Plana</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-pantalla-plana.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">59.6 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Teléfono Celular</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-telefono-celular.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">87.0000 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-viviendas-particulares-habitadas-que-disponen-de-telefono-celular.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">85.1022 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Teléfono Fijo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-telefono-fijo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">45 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Particulares Habitadas que disponen de Televisión de Paga</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-habitadas-que-disponen-de-television-de-paga.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">46.6 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas particulares temporales en el Centro Histórico</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-particulares-temporales-en-el-centro-historico.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">54</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Densidad Media Urbana</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">81.3</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">82.2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">52.6</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-densidad-media-urbana.html" data-toggle="tooltip" title="Personas, 31/12/2010, CONAPO-SEDESOL-INEGI">58.8</a></td>
    <td class="nd">ND</td>
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
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Católica</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.7 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-coahuila/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">3063662</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-durango/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2018, CONAPO">1815966</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-nacional/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 31/12/2018, CONAPO">124737789</a></td>
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

} // Clase Poblacion

?>
