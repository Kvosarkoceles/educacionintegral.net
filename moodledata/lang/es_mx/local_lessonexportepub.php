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
 * Strings for component 'local_lessonexportepub', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   local_lessonexportepub
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['covercolour'] = 'Color del banner de cubierta';
$string['covercolour_desc'] = 'El color del banner en la cubierta que contiene el título de la lección.';
$string['created'] = 'Creado en {$a}';
$string['customstyle'] = 'Reglas de estilo EPUB personalizado';
$string['customstyle_desc'] = 'CSS personalizado aplica solamente para el EPUB exportado';
$string['exportepub'] = 'Exportar como epub';
$string['exportstrict'] = 'Exportación estricta';
$string['exportstrict_desc'] = 'Si es que los documentos deberían de lanzar excepciones o si deberían suprimirlas cuando hagan errores.';
$string['failedinsertimage'] = 'Falló al insertar imagen: {$a}';
$string['filename'] = 'Exportar {$a->lessonname} {$a->timestamp}';
$string['lessonexportepub:export'] = 'Exportar lección como epub';
$string['lessonexportfailed'] = 'La exportación de lección \'{$a}\' falló';
$string['lessonexportfailed_body'] = 'La lección \'{$a->name}\' ha sido actualizada, pero el intento para exportarla y mandar por Email ha fallado, después de {$a->exportattempts}  intentos. Si la lección es nuevamente actualizada, entonces se harán más intentos pra exportarla. La lección puede encontrarse en : {$a->url}.';
$string['lessonupdated'] = 'Lección \'{$a}\' actualizada';
$string['lessonupdated_body'] = 'Exportación actualizada anexa';
$string['modified'] = 'Última modificación por {$a->modifiedby} en {$a->timemodified}';
$string['plugingroup'] = 'Exportar Lección';
$string['pluginname'] = 'Exportar Lección como EPUB';
$string['printed'] = 'Este documento fue descargado en {$a}';
$string['publishername'] = 'Desconocido';
