<?php
/*
 * TrcIMPLAN Sitio Web - Proyectos Imprenta
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace Proyectos;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene las clases con las publicaciones
        $this->publicaciones_directorio  = 'Proyectos';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                    = 'Proyectos Estratégicos';
        $this->descripcion               = 'Información y seguimiento de los Proyectos Estratégicos del IMPLAN Torreón.';
        $this->claves                    = 'IMPLAN, Torreon, Banco, Municipal, Proyectos, Estrategicos';
        // Parámetros que el Recolector definirá en las Publicaciones si éstas no los tienen
        $this->aparece_en_pagina_inicial = TRUE;
        $this->autor                     = 'Dirección de Proyectos Estratégicos';
        $this->para_compartir            = TRUE;
        $this->imagen                    = '../imagenes/imagen.jpg';
        $this->imagen_previa             = '../imagenes/imagen-previa.jpg';
        $this->poner_imagen_en_contenido = FALSE;
        $this->nombre_menu               = 'Plan Estratégico Torreón 2040 > Proyectos';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas           = '\\Base\\PaginasTarjetas';
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio                = 'proyectos';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser grande
        $this->nivel                     = 41000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
