<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_filetypes', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Añadir un nuevo tipo de archivo';
$string['corestring'] = 'Cadena alterna de caracteres de idioma';
$string['corestring_help'] = 'Esta configuración puede usarse para seleccionar una cadena de caracteres de idioma diferente desde el archivo de idioma mimetypes.php. Generalmente debería de dejarse vacía. Para tipos personalizados, use el campo de descripción.';
$string['defaulticon'] = 'Ícono por defecto para tipo MIME';
$string['defaulticon_help'] = 'Si hay varias extensiones de archivo con el mismo tipo MIME, seleccione esta opción para una de las extensiones, de forma que su ícono se use al determinar un ícono del tipo MIME.';
$string['deletea'] = 'Eliminar  {$a}';
$string['delete_confirmation'] = '¿Está Usted absolutamente seguro de querer eliminar <strong>.{$a}</strong>?';
$string['deletefiletypes'] = 'Eliminar un tipo de archivo';
$string['description'] = 'Descripción personalizada';
$string['description_help'] = 'Descripción simple del tipo de archivo, por ejemplo ‘ebook de Kindle ’. Si su sitio soporta varios idiomas y usa el filtro multi-idioma, Usted puede escribir marcas multi-idioma en este campo para poner una descripción en diferentes idiomas.';
$string['descriptiontype'] = 'Tipo de descripción';
$string['descriptiontype_custom'] = 'Descripción personalizada especificada en este formato';
$string['descriptiontype_default'] = 'Por defecto ( tipo MIME o cadena de caracteres del idioma correspondiente si estuviera disponible)';
$string['descriptiontype_help'] = 'Hay tres maneras posibles para especificar una descripción:

* Comportamiento por defecto usa el tipo MIME. Si hubiera una cadena de caracteres de idioma en mimetypes.php correspondiente a ese tipo MIME, se usará; de otra forma el propio tipo MIME será mostrado a los usuarios.
* Usted puede especificar una descripción personalizada en este formato.
* Usted puede especificar el nombre de una cadena de caracteres de idioma en mimetypes.php a usarse en lugar del tipo MIME.';
$string['descriptiontype_lang'] = 'Cadena alterna de caracteres de idioma (de mimetypes.php)';
$string['displaydescription'] = 'Descripción';
$string['editfiletypes'] = 'Editar un tipo de archivo existente';
$string['emptylist'] = 'No hay tipos de archivo definidos.';
$string['error_addentry'] = 'La extensión del tipo de archivo, tipo MIME, y el ícono, no deben de contener caracteres de alimentación de línea ni punto y coma.';
$string['error_defaulticon'] = 'Otra extensión de archivo con el mismo tipo MIME ya está marcada como el ícono por defecto.';
$string['error_extension'] = 'La extensión del tipo de archivo <strong>{$a}</strong> ya existe o es inválida. Las extensiones de archivo deben ser únicas y no pueden contener caracteres especiales.';
$string['error_notfound'] = 'No pudo encontrarse al tipo de archivo con la extensión {$a}.';
$string['extension'] = 'Extensión';
$string['extension_help'] = 'Extensión del nombre del archivo sin el punto, por ejemplo \'mobi\'';
$string['groups'] = 'Grupos de tipos';
$string['groups_help'] = 'Lista opcional de grupos de tipos de archivos a los que pertenece este tipo. Estas son categorías genéricas como ‘documento’ e ‘imagen’.';
$string['icon'] = 'Ícono del archivo';
$string['icon_help'] = 'nombre_de_archivo del ícono.

La lista de íconos es tomada del directorio /pix/f dentro de su instalación Moodle. Usted puede añadir íconos personalizados a esta carpeta si los necesita.';
$string['mimetype'] = 'tipo MIME';
$string['mimetype_help'] = 'Tipo MIME asociado con este tipo de archivo, por ejemplo \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Tipos de archivos';
$string['privacy:metadata'] = 'El plugin de Tipos de archivos no almacena ningún dato personal.';
$string['revert'] = 'Restaurar {$a} a los valores predeterminados de Moodle';
$string['revert_confirmation'] = '¿Está Usted seguro de querer restaurar <strong>.{$a}</strong> a los valores predeterminados de Moodle, descartando sus cambios?';
$string['revertfiletype'] = 'Restaurar un tipo de archivo';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizado';
$string['source_deleted'] = 'Eliminado';
$string['source_modified'] = 'Modificado';
$string['source_standard'] = 'Estándar';
