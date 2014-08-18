<?php
/*
 * SMIbeta - Base Imprenta
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
 * Clase Imprenta
 */
class Imprenta {

    public $plantilla;
    public $mensajes = array();

    /**
     * Eliminar un directorio y sus archivos
     *
     * @param string Ruta al directorio a eliminar
     */
    protected function eliminar_directorio($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, eliminar_directorio: Parámetro vacio.");
        }
        // Mensaje
        $this->mensajes[] = "  Eliminando directorio $ruta...";
        // Si existe elimina los archivos que haya en éste
        if (is_dir($ruta)) {
            array_map('unlink', glob("$ruta/*"));
            if (rmdir($ruta) === false) {
                throw new ImprentaExceptionFallo("Error en Imprenta, eliminar_directorio: No se pudo eliminar $ruta.");
            }
        } else {
            $this->mensajes[] = "  No existe $ruta. Por lo que no hice nada.";
        }
    } // eliminar_directorio

    /**
     * Crear directorio
     *
     * @param string Ruta al directorio a crear
     */
    protected function crear_directorio($ruta) {
        // Validar parámetro
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_directorio: Parámetro vacio.");
        }
        // Si no existe el directorio, lo crea
        if (!is_dir($ruta)) {
            if (mkdir($ruta, 0755) === false) {
                throw new ImprentaExceptionFallo("Error en Imprenta, crear_directorio: No se pudo crear el directorio $ruta");
            } else {
                $this->mensajes[] = "  Creado el directorio $ruta...";
            }
        }
    } // crear_directorio

    /**
     * Crear archivo
     *
     * @param string Ruta al archivo a crear
     * @param mixed  Texto o arreglo con el contenido
     */
    protected function crear_archivo($ruta, $contenido) {
        // Validar parámetros
        if (trim($ruta) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_archivo: Parámetro vacío, la ruta.");
        }
        if (trim($contenido) == '') {
            throw new ImprentaExceptionValidacion("Error en Imprenta, crear_archivo: Parámetro vacío, el contenido.");
        }
        // Crear archivo
        $apuntador = fopen($ruta, 'w');
        if ($apuntador === false) {
            throw new ImprentaExceptionFallo("Error en Imprenta, crear_archivo: No se puede crear $archivo");
        }
        if (is_string($contenido)) {
            fwrite($apuntador, $contenido);
        } elseif (is_array($contenido)) {
            foreach ($contenido as $linea) {
                fwrite($apuntador, $contenido);
            }
        }
        fclose($apuntador);
        // Agregar mensaje
        $this->mensajes[] = "  Listo {$ruta}";
    } // crear_archivo

    /**
     * Recolectar Clases
     *
     * @param  string Ruta relativa al directorio donde se van a buscar archivos PHP
     * @return array  Arreglo con las rutas a las clases
     */
    protected function recolectar_clases($dir) {
        // Validar parámetro
        if (!is_string($dir) || (trim($dir) == '')) {
            throw new ImprentaExceptionValidacion('Error en Imprenta, recolectar_clases: Parámetro incorrecto.');
        }
        // Directorio de donde tomar los archivos
        $directorio = "lib/$dir";
        // Si no existe
        if (!is_dir($directorio)) {
            throw new ImprentaExceptionValidacion("  No existe el directorio $directorio.");
        }
        // Obtener el listado con los archivos PHP
        $archivos = glob("$directorio/*.php");
        if ($archivos === false) {
            throw new ImprentaExceptionFallo("  Falló la obtención de archivos PHP en el directorio $directorio.");
        }
        if (count($archivos) == 0) {
            throw new ImprentaExceptionVacio("  No hay archivos PHP en el directorio $directorio.");
        }
        // Bucle en los archivos encontrados
        $a = array();
        foreach ($archivos as $archivo) {
            // Definir la ruta a la clase
            $a[] = $dir.'\\'.basename($archivo, '.php');
        }
        // Entregar
        return $a;
    } // recolectar_clases

    /**
     * Imprimir
     *
     * @param  string Ruta al directorio donde estén las clases como archivos PHP
     * @return string Mensajes para la terminal
     */
    public function imprimir($directorio) {
        // Validar que la plantilla esté definida
        if (!is_object($this->plantilla)) {
            throw new ImprentaExceptionValidacion("Error en Imprenta, imprimir_directorio: No está definida la plantilla.");
        }
        // Bucle con las clases recolectadas
        foreach ($this->recolectar_clases($directorio) as $clase) { // Puede causar una excepción
            // Definir instancia
            $publicacion = new $clase();
            // Definir la ruta de destino (archivo HTML)
            $destino = "{$publicacion->directorio}/{$publicacion->archivo}.html";
            // Pasar propiedades del Indicador a la Plantilla
            $this->plantilla->titulo      = $publicacion->nombre;
            $this->plantilla->autor       = $publicacion->autor;
            $this->plantilla->descripcion = $publicacion->descripcion;
            $this->plantilla->claves      = $publicacion->claves;
            $this->plantilla->ruta        = $destino;
            $this->plantilla->contenido   = $publicacion->contenido;
            $this->plantilla->javascript  = $publicacion->javascript;
            // Escribir el archivo HTML
            $this->crear_directorio($publicacion->directorio);  // Puede causar una excepción
            $this->crear_archivo($destino, $this->plantilla->html()); // Puede causar una excepción
        }
        // Entregar mensajes
        return implode("\n", $this->mensajes);
    } // imprimir

} // Clase Imprenta

?>
