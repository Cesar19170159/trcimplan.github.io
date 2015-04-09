<?php
/*
 * TrcIMPLAN Sitio Web - SMI Categorías Imprenta
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        $this->publicaciones_directorio = 'SMICategorias';
        $this->titulo                   = 'Indicadores por Categoría';
        $this->descripcion              = 'Categorías del Sistema Metropolitano de Indicadores del IMPLAN Torreón.';
        $this->claves                   = 'IMPLAN, Torreon, Indicadores, Categorías';
        $this->directorio               = 'indicadores-categorias';
        $this->archivo_ruta             = 'indicadores-categorias/index.html';
        $this->nombre_menu              = 'Indicadores > Indicadores por Categoría';
        $this->concentrador             = 'Galeria';
    } // constructor

} // Clase Imprenta

?>
