<?php
/**
 * TrcIMPLAN Sitio Web - Schema Organization
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
namespace Base;

/**
 * Clase SchemaOrganization
 *
 * An organization such as a school, NGO, corporation, club, etc.
 * http://schema.org/Organization
 */
class SchemaOrganization extends SchemaThing {

    // public $onTypeProperty; // Text. Use when this item is part of another one.
    // public $description;    // Text. A short description of the item.
    // public $image;          // URL or ImageObject. An image of the item.
    // public $name;           // Text. The name of the item.
    // public $url;            // URL of the item.
    // public $url_label;      // Label for the URL of the item.

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular inicia
        if ($this->onTypeProperty != '') {
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Organization\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/Organization">';
        }
        // Imagen
        if ($this->image != '') {
            $a[] = "  <img class=\"imagen-previa\" itemprop=\"image\" alt=\"Imagen previa\" src=\"{$this->image}\">";
        }
        // Título
        if ($this->name != '') {
            $a[] = "  <h3 class=\"titulo\" itemprop=\"name\">{$this->name}</h3>";
        } else {
            throw new \Exception('Error en SchemaOrganization, html: La propiedad name es incorrecta.');
        }
        // Descripción
        if ($this->description != '') {
            $a[] = "  <div class=\"descripcion\" itemprop=\"description\">{$this->description}</div>";
        }
        // URL
        if ($this->url != '') {
            if ($this->url_label != '') {
                $a[] = "  <a href=\"{$this->url}\" itemprop=\"url\">{$this->url_label}</a>";
            } else {
                $a[] = "  <a href=\"{$this->url}\" itemprop=\"url\">{$this->name}</a>";
            }
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

/*
<div itemscope itemtype="http://schema.org/GovernmentOrganization">
    <a itemprop="url" href="www.trcimplan.gob.mx"><div itemprop="name"><strong>Instituto Municipal de Planeación y Competitividad de Torreón</strong></div>
    </a>
    <div itemprop="description">Órgano técnico de ...</div>
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">Antiguo Edificio del Banco de México, segundo piso. Av. Morelos 1217 Pte. esquina con C. Cepeda. Col. Centro.</span><br>
        <span itemprop="addressLocality">Torreón</span><br>
        <span itemprop="addressRegion">Coahuila</span><br>
        <span itemprop="postalCode">27000</span><br>
    <span itemprop="addressCountry">México</span><br>
    </div>
</div>
*/

} // Clase SchemaOrganization

?>
