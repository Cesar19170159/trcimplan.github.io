<?php
/*
 * SMIbeta - Base Publicación
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
namespace Base;

/**
 * Clase Publicacion
 */
class Publicacion extends \Configuracion\PublicacionConfig {

    // public $fecha;
    // public $autor;
    // public $aparece_en_pagina_inicial;
    // public $imagen_previa;
    public $nombre;                      // Título completo de la publicación
    public $nombre_menu;                 // Un título corto para el menú, si se omite, se copia el nombre
    public $directorio;                  // Directorio donde está guardada la publicación completa
    public $archivo;                     // El nombre del archivo para la publicación
    public $descripcion;                 // Descripción del sitio o la página
    public $imagen_previa;               // Ruta relativa a un archivo de imagen para la vista previa a compartir en redes sociales
    public $claves;                      // Claves que ayuden a los buscadores
    public $categorias        = array(); // Arreglo con las categorías de la publicación.
    public $encabezado;                  // Opcional. Código HTML, por ejemplo con un tag img, para mostrar en la parte superior.
    public $contenido;                   // Contenido de la publicación. Puede tener una línea con <!-- break --> para separar la parte breve.
    public $javascript;                  // Código Javascript. Debe estar aparte para ponerlo al final de la página.
    public $en_raiz           = false;   // Verdadero si el archivo va a la raiz del sitio web. Debe ser verdadero cuando se hacen las páginas de inicio.
    public $en_otro           = false;   // Verdadero si el archivo va a OTRO lugar como al directorio autores, categorias, etc.
    protected $html_ejecutado = false;   // Bandera para saber si ya se ejecutó

    /**
     * URL
     *
     * @return string URL para enlazar, segun las banderas en_raiz y en_otro
     */
    public function url() {
        if ($this->en_raiz) {
            // Es verdadero
            return "{$this->directorio}/{$this->archivo}.html";
        } else {
            // Es falso en_raiz
            if ($this->otro) {
                return "../{$this->directorio}/{$this->archivo}.html";
            } else {
                return "{$this->archivo}.html";
            }
        }
    } // url

} // Clase Publicacion

?>
