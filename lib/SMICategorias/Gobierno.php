<?php
/**
 * TrcIMPLAN - SMI Categorías Gobierno (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Gobierno
 */
class Gobierno extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Gobierno';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'gobierno';
        $this->imagen           = '../imagenes/categorias/gobierno.jpg';
        $this->imagen_previa    = '../imagenes/categorias/gobierno.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Gobierno';
        $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-categorias';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Indicadores por Categoría';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
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
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">1.77 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 30/06/2012, INE-IEPCC">4.48 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 02/07/2012, INE-IEPCC">5.15 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">39.67 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">6.70 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Índice de Gobierno Electrónico Municipal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.6916</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.4763</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.4714</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.5366</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.5440</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">47.98</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">45.84</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">22.70</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">10.78</a></td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">41.22</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL

FINAL;
    } // constructor

} // Clase Gobierno

?>
