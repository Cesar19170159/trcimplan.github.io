<?php
/**
 * TrcIMPLAN - Viviendas Deshabitadas
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
namespace SMIGeorreferenciados;

/**
 * Clase ViviendasDeshabitadas
 */
class ViviendasDeshabitadas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Viviendas Deshabitadas';
        $this->autor            = 'Arq. Jair Miramontes Chávez';
        $this->fecha            = '2015-04-13T08:10';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        $this->imagen           = '../sig-mapas-torreon/viviendas-deshabitadas/imagen.jpg';
        $this->imagen_previa    = '../sig-mapas-torreon/viviendas-deshabitadas/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Mapa que muestra la incidencia de las viviendas deshabitadas en Torreón, Coahuila.';
        $this->claves           = 'IMPLAN, Torreon, Viviendas, Deshabitadas';
        $this->categorias       = array('Vivienda');
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'Publicar';
        // URL de destino
        $this->url              = '../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html';
        $this->url_etiqueta     = 'Ir al indicador';
        // Sin contenido
        $this->contenido        = '';
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, si tiene una imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = sprintf("<img src=\"%s\"><br>\n\n%s", $this->imagen, $this->descripcion);
        } else {
            $this->redifusion   = $this->descripcion;
        }
    } // constructor

} // Clase ViviendasDeshabitadas

?>
