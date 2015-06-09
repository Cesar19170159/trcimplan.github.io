<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Economía Nuevas Empresas (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaNuevasEmpresas
 */
class EconomiaNuevasEmpresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Nuevas Empresas en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2015-02-09T08:43';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-nuevas-empresas';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.';
        $this->claves            = 'IMPLAN, Torreón, Empresas';
        $this->categorias        = array('Empresas');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        $schema->articleBody     = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.</p>

      <h3>Información recopilada</h3>
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
            <td>31/01/2009</td>
            <td>71</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2009</td>
            <td>77</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2009</td>
            <td>95</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2009</td>
            <td>66</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2009</td>
            <td>60</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2009</td>
            <td>99</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2009</td>
            <td>93</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2009</td>
            <td>93</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2009</td>
            <td>139</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2009</td>
            <td>87</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2009</td>
            <td>73</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>25</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2010</td>
            <td>58</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2010</td>
            <td>137</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2010</td>
            <td>144</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2010</td>
            <td>126</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2010</td>
            <td>111</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2010</td>
            <td>77</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2010</td>
            <td>91</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2010</td>
            <td>113</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2010</td>
            <td>77</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2010</td>
            <td>86</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2010</td>
            <td>73</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>52</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2011</td>
            <td>88</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2011</td>
            <td>152</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2011</td>
            <td>127</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2011</td>
            <td>98</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2011</td>
            <td>128</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2011</td>
            <td>136</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2011</td>
            <td>85</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2011</td>
            <td>108</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2011</td>
            <td>129</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2011</td>
            <td>188</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2011</td>
            <td>165</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>90</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2012</td>
            <td>89</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2012</td>
            <td>135</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>206</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>187</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>182</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>161</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>122</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>96</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>74</td>
            <td>00) DESCONOCIDA</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>113</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>99</td>
            <td>00) DESCONOCIDA</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>36</td>
            <td>00) DESCONOCIDA</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>71</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>117</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>121</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>122</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>147</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>112</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>121</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>146</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>165</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>132</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>92</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>37</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>53</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>101</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>112</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>98</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>121</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>94</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>327</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>362</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>334</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>297</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>230</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>102</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>123</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>152</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>269</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>203</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Nuevas Empresas en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
  </div>
FINAL;
        $schema->extra           = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>25/05/2015</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/salud-laguna.html">Salud Laguna</a></td>
            <td>Salud Laguna es una agrupación interactiva de pro­fesionales, instituciones, or­ga­nizaciones, integrados en torno a las actividades económicas que dan servicio y soportan al sec­tor salud.</td>
          </tr>
          <tr>
            <td>20/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/indicadores-economicos-primer-trimestre-2015-torreon.html">Indicadores Económicos del primer trimestre de 2015 para el Municipio de Torreón</a></td>
            <td>Análisis de los indicadores de inflación, apertura de empresas, trabajadores asegurados y salario promedio para el municipio de Torreón.</td>
          </tr>
          <tr>
            <td>19/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/sed-o-no-sed.html">¿Sed o no sed?</a></td>
            <td>El IMPLAN ve una región de grandes retos y de grandes oportunidades, capaz de rivalizar, si unimos voluntades, con avezados competidores en los mercados globalizados.</td>
          </tr>
          <tr>
            <td>09/02/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-nuevas-empresas.html">Nuevas Empresas en Torreón</a></td>
            <td>Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.</td>
          </tr>
          <tr>
            <td>06/01/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/comercio-al-por-menor-alternativa-crecimiento-economico.html">Comercio al por menor como alternativa de crecimiento económico</a></td>
            <td>El comercio se vuelve tan importante como la industria tradicional para una localidad en la medida en que éste aumente el ingreso local y reduzca la fuga de consumo y empleo hacia otras ciudades.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-empresas-exportadoras.html">Empresas Exportadoras en Gómez Palacio</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-empresas-exportadoras.html">Empresas Exportadoras en La Laguna</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-empresas-exportadoras.html">Empresas Exportadoras en Lerdo</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-empresas-exportadoras.html">Empresas Exportadoras en Matamoros</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>05/12/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-empresas-exportadoras.html">Empresas Exportadoras en Torreón</a></td>
            <td>Empresas vigentes en uno o más programas de apoyo a exportadores de la Secretaría de Economía.</td>
          </tr>
          <tr>
            <td>12/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/industrial-metalmecanica-la-laguna.html">La industria metalmecánica y La Laguna</a></td>
            <td>A diferencia del año 2013 cuando la industria metalmecánica creció 4% a nivel nacional, la directora de Fabetch México pronosticó en Julio un crecimiento de 8% para el presente año.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-apertura-de-negocios.html">Apertura de Negocios en Torreón</a></td>
            <td>Número de días necesarios para el trámite de apertura de un negocio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Torreón</a></td>
            <td>Días transcurridos para la ejecución de un contrato.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-grandes-empresas.html">Grandes Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-grandes-empresas.html">Grandes Empresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-grandes-empresas.html">Grandes Empresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-grandes-empresas.html">Grandes Empresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-grandes-empresas.html">Grandes Empresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que cuentan con más de 250 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-medianas-empresas.html">Medianas Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-medianas-empresas.html">Medianas Empresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-medianas-empresas.html">Medianas Empresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-medianas-empresas.html">Medianas Empresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-medianas-empresas.html">Medianas Empresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que emplean de 51 a 250 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-microempresas.html">Microempresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-microempresas.html">Microempresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-microempresas.html">Microempresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-microempresas.html">Microempresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-microempresas.html">Microempresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que emplean de 0 a 10 personas.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-obtencion-de-credito-creacion-de-garantias.html">Obtención de crédito - Creación de garantías en Torreón</a></td>
            <td>Días transcurridos en el proceso de obtención de un crédito.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-pequenas-empresas.html">Pequeñas Empresas en Gómez Palacio</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-pequenas-empresas.html">Pequeñas Empresas en La Laguna</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-pequenas-empresas.html">Pequeñas Empresas en Lerdo</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-pequenas-empresas.html">Pequeñas Empresas en Matamoros</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-pequenas-empresas.html">Pequeñas Empresas en Torreón</a></td>
            <td>Porcentaje del total de empresas que emplean entre 11 y 50 empleados.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-permiso-de-construccion.html">Permiso de Construcción en Torreón</a></td>
            <td>Número de días necesarios para conseguir un permiso de construcción.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-registro-de-propiedades.html">Registro de Propiedades en Torreón</a></td>
            <td>Días que toma el trámite para el registro de una propiedad.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Gómez Palacio</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Lerdo</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Matamoros</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-total-de-empresas-registradas-en-el-siem.html">Total de Empresas registradas en el SIEM en Torreón</a></td>
            <td></td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en La Laguna</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Lerdo</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Matamoros</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html">Unidades Económicas Dedicadas a la Industria Manufacturera en Torreón</a></td>
            <td>Unidades económicas dedicadas a la manufactura entre el total de unidades económicas del municipio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en La Laguna</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Lerdo</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Matamoros</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html">Unidades Económicas Dedicadas a los Servicios en Torreón</a></td>
            <td>Unidades económicas dedicadas a los servicios entre el total de las unidades económicas del municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Gómez Palacio</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en La Laguna</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Lerdo</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Matamoros</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html">Unidades Económicas Dedicadas al Comercio en Torreón</a></td>
            <td>Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.</td>
          </tr>
          <tr>
            <td>07/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-sector-salud-laguna.html">Economía del Sector Salud en La Laguna</a></td>
            <td>El sector salud contribuye en la economía de La Laguna empleando a 8,584 locales en actividades que incluyen el cuidado y asistencia a enfermos en hospitales generales y servicios de orientación y trabajo social, entre otros.</td>
          </tr>
          <tr>
            <td>26/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/dinamica-pib-per-capita-laguna.html">Dinámica del PIB per cápita de La Laguna (IRAEs Banamex 2011,2014)</a></td>
            <td>Entre los indicadores Banamex de 2011 y 2014 el PIB per cápita de La Laguna creció 22.82%.</td>
          </tr>
          <tr>
            <td>24/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/apertura-empresas-2014.html">Apertura de Empresas 2014</a></td>
            <td>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.</td>
          </tr>
          <tr>
            <td>01/08/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gas-shale-impacto.html">El Gas Shale y su impacto</a></td>
            <td>La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.</td>
          </tr>
          <tr>
            <td>30/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/laguna-apostarle-industria-automotriz.html">La Laguna debe apostarle a la Industria Automotriz</a></td>
            <td>En industria automotriz hay mayor inversión en la investigación y desarrollo que origina una derrama de capacidades tecnológicas con aplicación en otros sectores como el eléctrico, electrónico y aeroespacial.</td>
          </tr>
          <tr>
            <td>03/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sectores-innovacion-sofisticacion.html">Sectores de Innovación y Sofisticación</a></td>
            <td>Análisis de los indicadores relativos a la innovación.</td>
          </tr>
          <tr>
            <td>01/07/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/productividad-zml.html">Productividad en la Zona Metropolitana de La Laguna</a></td>
            <td>Análisis de la productividad laboral, industria manufacturera y eficiencia del trabajo en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>24/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/economia-estable.html">Economía Estable</a></td>
            <td>Análisis de las variables macroeconómicas como crédito, mercado hipotecario, cartera vencida, PIB y desempleo.</td>
          </tr>
          <tr>
            <td>17/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/mercado-factores-eficientes.html">Mercado de Factores Eficientes</a></td>
            <td>Análisis del mercado, las huelgas, el salario promedio mensual, productividad y demandas laborales en la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>01/06/2014</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/plata-laguna.html">Plata Laguna</a></td>
            <td>Contribuir a que la plata de La Laguna sea un sector mundialmente competitivo; reconocida por su calidad e identificable por el consumidor.</td>
          </tr>
          <tr>
            <td>29/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/doing-business-torreon.html">Doing Business en Torreón</a></td>
            <td>Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.</td>
          </tr>
          <tr>
            <td>13/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/invertir-en-torreon.html">Invertir en Torreón</a></td>
            <td>¿Qué buscan las grandes compañías para poder instalarse en nuestra ciudad? Aquí siete razones que las empresas considerarían para invertir en Torreón.</td>
          </tr>
          <tr>
            <td>28/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/la-laguna-metropoli-del-conocimiento.html">La Laguna: Metrópoli del Conocimiento</a></td>
            <td>Las mega tendencias del Tercer Milenio nos indican la necesidad de integrar a La Laguna a la economía del conocimiento.</td>
          </tr>
          <tr>
            <td>16/04/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/hacia-donde-debe-dirigirse-torreon.html">Hacia dónde debe dirigirse Torreón</a></td>
            <td>¿En realidad generan más valor las actividades tecnológicas y de servicios?</td>
          </tr>
        </tbody>
      </table>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // JavaScript
        $this->javascript        = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2009-01-31', dato: 71 },{ fecha: '2009-02-28', dato: 77 },{ fecha: '2009-03-31', dato: 95 },{ fecha: '2009-04-30', dato: 66 },{ fecha: '2009-05-31', dato: 60 },{ fecha: '2009-06-30', dato: 99 },{ fecha: '2009-07-31', dato: 93 },{ fecha: '2009-08-31', dato: 93 },{ fecha: '2009-09-30', dato: 139 },{ fecha: '2009-10-31', dato: 87 },{ fecha: '2009-11-30', dato: 73 },{ fecha: '2009-12-31', dato: 25 },{ fecha: '2010-01-31', dato: 58 },{ fecha: '2010-02-28', dato: 137 },{ fecha: '2010-03-31', dato: 144 },{ fecha: '2010-04-30', dato: 126 },{ fecha: '2010-05-31', dato: 111 },{ fecha: '2010-06-30', dato: 77 },{ fecha: '2010-07-31', dato: 91 },{ fecha: '2010-08-31', dato: 113 },{ fecha: '2010-09-30', dato: 77 },{ fecha: '2010-10-31', dato: 86 },{ fecha: '2010-11-30', dato: 73 },{ fecha: '2010-12-31', dato: 52 },{ fecha: '2011-01-31', dato: 88 },{ fecha: '2011-02-28', dato: 152 },{ fecha: '2011-03-31', dato: 127 },{ fecha: '2011-04-30', dato: 98 },{ fecha: '2011-05-31', dato: 128 },{ fecha: '2011-06-30', dato: 136 },{ fecha: '2011-07-31', dato: 85 },{ fecha: '2011-08-31', dato: 108 },{ fecha: '2011-09-30', dato: 129 },{ fecha: '2011-10-31', dato: 188 },{ fecha: '2011-11-30', dato: 165 },{ fecha: '2011-12-31', dato: 90 },{ fecha: '2012-01-31', dato: 89 },{ fecha: '2012-02-29', dato: 135 },{ fecha: '2012-03-31', dato: 206 },{ fecha: '2012-04-30', dato: 187 },{ fecha: '2012-05-31', dato: 182 },{ fecha: '2012-06-30', dato: 161 },{ fecha: '2012-07-31', dato: 122 },{ fecha: '2012-08-31', dato: 96 },{ fecha: '2012-09-30', dato: 74 },{ fecha: '2012-10-31', dato: 113 },{ fecha: '2012-11-30', dato: 99 },{ fecha: '2012-12-31', dato: 36 },{ fecha: '2013-01-31', dato: 71 },{ fecha: '2013-02-28', dato: 117 },{ fecha: '2013-03-31', dato: 121 },{ fecha: '2013-04-30', dato: 122 },{ fecha: '2013-05-31', dato: 147 },{ fecha: '2013-06-30', dato: 112 },{ fecha: '2013-07-31', dato: 121 },{ fecha: '2013-08-31', dato: 146 },{ fecha: '2013-09-30', dato: 165 },{ fecha: '2013-10-31', dato: 132 },{ fecha: '2013-11-30', dato: 92 },{ fecha: '2013-12-31', dato: 37 },{ fecha: '2014-01-31', dato: 53 },{ fecha: '2014-02-28', dato: 101 },{ fecha: '2014-03-31', dato: 112 },{ fecha: '2014-04-30', dato: 98 },{ fecha: '2014-05-31', dato: 121 },{ fecha: '2014-06-30', dato: 94 },{ fecha: '2014-07-31', dato: 327 },{ fecha: '2014-08-31', dato: 362 },{ fecha: '2014-09-30', dato: 334 },{ fecha: '2014-10-31', dato: 297 },{ fecha: '2014-11-30', dato: 230 },{ fecha: '2014-12-31', dato: 102 },{ fecha: '2015-01-31', dato: 123 },{ fecha: '2015-02-28', dato: 152 },{ fecha: '2015-03-31', dato: 269 },{ fecha: '2015-04-30', dato: 203 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion        = <<<FINAL
      <h3>Descripción</h3>
<p>Número de nuevas empresas registradas en ventanilla universal en el periodo señalado.</p>

      <h3>Información recopilada</h3>
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
            <td>31/01/2009</td>
            <td>71</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2009</td>
            <td>77</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2009</td>
            <td>95</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2009</td>
            <td>66</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2009</td>
            <td>60</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2009</td>
            <td>99</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2009</td>
            <td>93</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2009</td>
            <td>93</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2009</td>
            <td>139</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2009</td>
            <td>87</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2009</td>
            <td>73</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>25</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2010</td>
            <td>58</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2010</td>
            <td>137</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2010</td>
            <td>144</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2010</td>
            <td>126</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2010</td>
            <td>111</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2010</td>
            <td>77</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2010</td>
            <td>91</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2010</td>
            <td>113</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2010</td>
            <td>77</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2010</td>
            <td>86</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2010</td>
            <td>73</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>52</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2011</td>
            <td>88</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2011</td>
            <td>152</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2011</td>
            <td>127</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2011</td>
            <td>98</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2011</td>
            <td>128</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2011</td>
            <td>136</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2011</td>
            <td>85</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2011</td>
            <td>108</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2011</td>
            <td>129</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2011</td>
            <td>188</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2011</td>
            <td>165</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>90</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2012</td>
            <td>89</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2012</td>
            <td>135</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>206</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>187</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>182</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>161</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>122</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>96</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>74</td>
            <td>00) DESCONOCIDA</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>113</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>99</td>
            <td>00) DESCONOCIDA</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>36</td>
            <td>00) DESCONOCIDA</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>71</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>117</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>121</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>122</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>147</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>112</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>121</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>146</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>165</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>132</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>92</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>37</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>53</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>101</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>112</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>98</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>121</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>94</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>327</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>362</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>334</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>297</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>230</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>102</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>123</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>152</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>269</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>203</td>
            <td>Ventanilla Universal. Dirección de Desarrollo Económico del municipio de Torreón.</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
FINAL;
    } // constructor

} // Clase EconomiaNuevasEmpresas

?>
