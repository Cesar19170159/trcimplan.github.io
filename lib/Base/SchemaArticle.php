<?php
/**
 * TrcIMPLAN Sitio Web - Schema Article
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
 * Clase SchemaArticle
 *
 * An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.
 * http://schema.org/Article
 */
class SchemaArticle extends SchemaCreativeWork {

    // public $identation = 3;  // Integer. Level of identation (beautiful code).
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $extra;           // Text. Additional HTML to put inside.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $name;            // Text. The name of the item.
    // public $url;             // URL of the item.
    // public $url_label;       // Label for the URL of the item.
    // public $author;          // Organization or Person. The author of this content.
    // public $contentLocation; // Place. The location of the content.
    // public $datePublished;   // Date. Date of first broadcast/publication.
    // public $headline;        // Text. Headline of the article.
    // public $headline_style;  // Text. CSS style for encabezado
    // public $producer;        // Organization or Person. The person or organization who produced the work.
    public $articleBody;        // Text. The actual body of the article.

    /**
     * Article Body HTML
     *
     * @return string Código HTML
     */
    protected function article_body_html() {
        if ($this->articleBody != '') {
            $a   = array();
            $a[] = '<div itemprop="articleBody">';
            $a[] = $this->articleBody;
            $a[] = '</div>';
            // Entregar
            $spaces = str_repeat('  ', $this->identation + 1);
            return $spaces.implode("\n$spaces", $a);
        } else {
            return '';
        }
    } // article_body_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir los espacios antes de cada renglón
        $spaces = str_repeat('  ', $this->identation);
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        if ($this->onTypeProperty != '') {
            $a[] = "  <div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Article\">";
        } else {
            $a[] = $spaces.'<div itemscope itemtype="http://schema.org/Article">';
        }
        $a[] = $this->big_heading_html();
        $a[] = $this->image_html();
        $a[] = $this->article_body_html();
        if ($this->extra != '') {
            $a[] = $this->extra;
        }
        $a[] = '</div>';
        // Entregar
        return implode("\n$spaces", $a);
    } // html

} // Clase SchemaArticle

?>
