<?php
/*
 * SMIbeta - El Gas Shale y su impacto
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace Blog;

/**
 * Clase GasShaleImpacto
 */
class GasShaleImpacto extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'El Gas Shale y su impacto';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-08-01T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'gas-shale-impacto';
        $this->imagen_previa    = 'gas-shale-impacto/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La extracción del gas shale se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, ha contribuido positivamente en la economía de los países que lo utilizan.';
        $this->claves           = 'IMPLAN, Torreon, Gas Shale, Energía';
        $this->categorias       = array('Innovación', 'Recursos Naturales', 'Empresas');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = 'gas-shale-impacto/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>El gas shale es un gas natural obtenido de rocas sedimentarias (lutitas) de baja permeabilidad. Se considera un gas no convencional por requerir métodos de extracción más complejos.</p>

<p>El método utilizado para su extracción es el <i>Hydraulic Fracturing</i>, que consiste en la fractura de la piedra por medio de una mezcla de agua, químicos y minerales introducida a presión en el pozo. A esta mezcla le llaman <i>lodo</i> y los granos y minerales que contiene mantienen abiertas las fracturas de la piedra para dejar escapar el gas hacia el pozo.</p>

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/extraccion.jpg" alt="Extracción">

<h3>Reservas nacionales y posible impacto en la economía</h3>

<p>La extracción de este gas natural se contempla en el futuro cercano de México, pues además de contar con una de las reservas más grandes del mundo, el gas shale ha contribuido positivamente en la economía de los países que lo utilizan.</p>

<p>Según datos de la Agencia Internacional de Energía, México se encuentra en el Top 10 de reservas internacionales tanto de gas como aceite shale. Nuestro país concentra el 3.76% y 7.46% de las reservas internacionales de aceite y gas shale respectivamente:</p>

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/top-10-reservas-shale-oil.png" alt="Top 10 reservas shale oil">

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/top-10-reservas-shale-gas.png" alt="Top 10 reservas shale gas">

<p>En cuanto al impacto económico, éste se da en el empleo, el PIB, la macroeconomía y la Industria, y tiene tres alcances:</p>

<ul>
    <li><b>Directo:</b> es el impacto generado por las actividades propias para la extracción y producción del gas shale.</li>
    <li><b>Indirecto:</b> contribución creada por los productos y servicios de apoyo en la cadena de suministros del gas shale.</li>
    <li><b>Inducido:</b> crecimiento desarrollado por la derrama económica de las actividades directas e indirectas.</li>
</ul>

<p>Tanto las contribuciones indirectas como inducidas son mayores a la contribución directa a la economía. En la siguiente tabla se muestran los empleos creados por la industria del gas Shale en Estados Unidos en el 2010, así como los empleos esperados para el 2015 y 2035.</p>

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/contribucion-empleo-eeuu.png" alt="Contribución al empleo en EE.UU.">

<p>Como se observa, los empleos inducidos se generan en mayor cantidad. Esto se debe a que el multiplicador del empleo de la industria shale es superior al de otras industrias manufactureras, al sector financiero y al de construcción.</p>

<p>Por cada empleo directo generado por la industria Shale, se crean más de 3 empleos entre indirectos e inducidos. Dos factores contribuyen al multiplicador:</p>

<ul>
    <li>La fuerte inversión de capital en la cadena de suministros doméstica.</li>
    <li>La naturaleza tecnológica e innovadora del sector shale crea trabajos de calidad y mejor remunerados que el promedio ($28.30 dls/hr).</li>
</ul>

<p>El total de la contribución al empleo por la industria del shale tuvo la siguiente distribución en 2010:</p>

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/shale-gas-employment-contribution.png" alt="Contribución del Gas Shale al Empleo">

<p>La gráfica muestra cómo el sector de servicios es el más beneficiado por la industria del shale, pues la mayoría de los empleos inducidos se encuentran precisamente en él.</p>

<p>En el caso de la contribución al Producto interno Bruto el impacto inducido es también mayor y se espera que la contribución total al PIB crezca 44.62% y 90.88% para los años 2015 y 2035 respectivamente.</p>

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/contribucion-pib-eeuu.png" alt="Contribución al PIB en EE.UU.">

<p>En cuanto a los Impactos en la industria y la macroeconomía, el primero se da debido a los bajos precios del gas utilizado como insumo o para la creación de energía y el segundo es una consecuencia del crecimiento en el empleo y la producción.</p>

<h3>¿Cómo prepararnos?</h3>

<p>En caso de iniciarse la extracción del shale, la ubicación de las reservas ofrece a La Laguna la oportunidad de beneficiarse de forma indirecta e inducida participando en la cadena de suministros de bienes y servicios para las actividades directas de exploración, extracción y producción. El siguiente mapa ilustra las reservas en el estado de Coahuila:</p>

<img class="img-responsive contenido-imagen" src="gas-shale-impacto/mapa-coahuila-yacimientos-gas-shale.jpg" alt="Mapa de Yacimientos de Gas Shale en Coahuila">

<p>Es entonces importante para nuestra región prepararse con mano de obra calificada en química, eléctrica y metalurgia, entre otras, para participar en la cadena de suministro de la industria shale y utilizar los bajos costos de la energía generada de este gas natural como ventaja competitiva en otros sectores.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase GasShaleImpacto

?>
