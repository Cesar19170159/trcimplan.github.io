<?php
/*
 * SMIbeta - Que vuelva la región de los grandes esfuerzos
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
 * Clase QueVuelvaLaRegionDeLosGrandesEsfuerzos
 */
class QueVuelvaLaRegionDeLosGrandesEsfuerzos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Que vuelva la región de los grandes esfuerzos';
        $this->autor            = 'Lic. Eduardo Holguín Zehfuss';
        $this->fecha            = '2014-02-25T08:00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'que-vuelva-la-region-de-los-grandes-esfuerzos';
        $this->imagen_previa    = 'que-vuelva-la-region-de-los-grandes-esfuerzos/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La Calificadora Internacional Moodys elevó por primera vez la nota soberana de México a la categoría A3 gracias a las reformas estructurales.';
        $this->claves           = 'IMPLAN, Torreon, Mexico, Reformas, Estructurales, Competitividad';
        $this->categorias       = array('Competitividad');
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
        $schema->image          = 'que-vuelva-la-region-de-los-grandes-esfuerzos/imagen.jpg';
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<p>Hace unas semanas recibimos una grata noticia: la Calificadora Internacional Moodys elevó por primera vez la nota soberana de México a la categoría A3 gracias a las reformas estructurales promovidas por el Presidente de la República y por el Poder Legislativo. Gracias a esa inédita calificación el territorio azteca se ha vuelto más atractivo para la Inversión Extranjera Directa elevándose su potencial de crecimiento. Gracias a esa nueva capacidad de pago los costos de financiamiento serán menores y los palazos para darle servicio a la deuda serán mayores tanto para el sector público, como para las empresas y las familias mexicanas.</p>

<p>Si, con la globalización económica las calificaciones, los indicadores, los índices y los rankings de confianza, de desempeño, de competitividad han adquirido una relevante importancia.</p>

<p>Esos índices, esos indicadores, esos rankings son las nuevas brújulas de los capitales nacionales e internacionales.</p>

<p>Algo es seguro: ningún inversionista de gran calado osa, en el Siglo XXI, arriesgar sus dólares, sus euros, o sus pesos en un país, en un estado o en una región cuyas calificaciones de competitividad sean bajas.</p>

<p>Es, en ese sentido, que preocupan y nos ocupan los alicaídos y mediocres índices y subíndices de competitividad de La Laguna. De acuerdo al Instituto Mexicano de la Competitividad la región metropolitana conocida como La Laguna, ocupa el lugar 44 de competitividad en un ranking que contempla a 77 zonas urbanas de la República Mexicana. Es decir, el IMCO nos considera en una posición media baja en cuanto a la capacidad que tenemos para atraer y retener inversiones y talentos.</p>

<p>Posición media baja en materia de competitividad urbana que tiene mucho que ver con la larga ausencia de inversiones foráneas, tanto nacionales como extranjeras.</p>

<p>Amigas y amigos: no podemos, ni debemos, ni tenemos por qué mantener a La Laguna en una posición de competitividad tan baja, en un ranking que incide en desempleo, en alicaídos niveles de ingreso y consumo, en fuga de cerebros, en debilitamiento de las cadenas productivas.</p>

<p>Lo que debemos, podemos y tenemos que hacer “todos” los que integramos la sociedad comarcana, es trabajar organizadamente, eficientemente, eficazmente para elevar a la brevedad posible la capacidad de La Laguna para atraer y retener inversiones productivas, inversiones generadoras de empleos y de riqueza social. Tenemos, “todos”, que esforzarnos, planear, proyectar, diseñar y poner en marcha rutas de acción que coloquen a La Laguna en el lugar que merece, en el lugar que no hace mucho ocupaba en el entorno nacional, en el lugar que la pusieron los fundadores de la metrópoli conocida como la “Región de los Grandes Esfuerzos”.</p>

<p>Y al hacer énfasis en el “todos”, me refiero a los que integramos la comunidad lagunera, porque la competitividad es, al final de cuentas, una suma de múltiples factores responsabilidad de múltiples actores. De los gobiernos sí, pero también de los empresarios, de los trabajadores, de los sindicatos, de las universidades, de los profesionistas, de los investigadores, de los comunicadores.</p>

<p>El IMCO mide la competitividad de una región sumando el resultado de 60 indicadores, mismos que tienen que ver con infraestructura urbana, con seguridad, con Estado de Derecho, con hospedaje industrial, con acervo cultural, con educación, con sustentabilidad ecológica, con productividad laboral, con regulación empresarial, con certificación, con emprendimiento, con innovación, con tecnología, entre otros muchos.</p>

<p>Tomando en cuenta que la competitividad es un asunto que compete a gobierno y sociedad, a un esfuerzo de gobernanza, pues, el Alcalde Miguel Riquelme y el honorable Cabildo de Torreón formalizaron la creación del Instituto de Planeación y Competitividad de Torreón, el IMPLAN, un organismo ciudadanizado, descentralizado, con personalidad jurídica y patrimonio propio. Un organismo que se rige por un consejo integrado por 22 personas, 15 ciudadanos y 7 representantes del ayuntamiento.</p>

<p>Un organismo, el IMPLAN, que tiene como propósito el cumplimiento de las funciones de planeación integral que ordene el accionar de las entidades del Ayuntamiento de Torreón y que concerté el accionar de los municipios comarcanos, de los gobiernos estatal y federal, de las universidades, del sector privado a favor de la competitividad de La Laguna.</p>

<p>En el IMPLAN ciudadanos y gobierno empezaremos por determinar el Sistema de Información Geográfica y el balance económico de la región. El balance económico de la región lo haremos construyendo un Sistema Municipal de Indicadores. Con base en el balance diseñaremos la visión de metrópoli a 4, 8, 12, 16 y 20 años, entendiendo que la planeación debe trascender los tiempos políticos acotados en los periodos de gobierno. Entendiendo la urgente necesidad de que el desarrollo de La Laguna no se someta a actos de voluntarismo de un gobierno sino a la unión de capacidades de todos los actores de la Comarca Lagunera en torno a una perspectiva común de largo plazo, en torno a una visión de futuro.</p>

<p>La planeación es el principio ordenador y la competitividad urbana el objetivo intermedio para alcanzar el propósito último de la acción de gobernanza del Instituto Municipal de Planeación y Competitividad de Torreón: Que los ciudadanos de la zona metropolitana conocida como La Laguna logren una vida sana, segura, productiva, en armonía con sus tradiciones, sus valores culturales y espirituales; es decir, un equilibrio entre el desarrollo humano, la prosperidad económica, individual y colectiva, y el respeto de los ecosistemas.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
    } // constructor

} // Clase QueVuelvaLaRegionDeLosGrandesEsfuerzos

?>
