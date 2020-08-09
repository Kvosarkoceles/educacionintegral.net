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
 * Strings for component 'block_eledia_course_archiving', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   block_eledia_course_archiving
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Empezar a archivar';
$string['configure_description'] = 'Aquí puede Usted configurar el proceso de archivado. Archivar significa que el curso será configurado a invisible, movido a la categoría de archivo configurado y todos los estudiantes serán des-inscritos (dados de baja).
Todos los cursos que estén localizados directamente en las categorías de origen serán revisados contra el sello-de-tiempo  elegido. Dependiendo de la configuración del sello-de-tiempo , ocurrirrá el siguiente flujo.<br />

Fecha de inicio del curso:<br />
Si la fecha está dentro del sello-de-tiempo entre ahorita y los días elegidos en el pasado, el curso será archivado. En un segundo paso, todos los cursos en la categoría de archivo son revisados. Si están en en  el pasado por más que el número elegido de días, el curso será eliminado.<br />
<br />
Última actividad del curso:<br />
Si la fecha es mayor que los días elegidos en el pasado, los cursos serán archivados.
En un segundo paso todos los cursos en la categoría de archivado serán revisados.
Si los cursos están inactivos por más que el doble del número de días en la configuración, los cursos serán finalmente eliminados.<br />
<br />
El proceso puede ser iniciado mediante un formato que está enlazado en el bloque. El bloque puede ser añadido a la página principal solamente. Como alternativa, Usted puede configurar el proceso para que corra como un trabajo del cron.';
$string['confirm_archiving'] = 'Los cursos siguientes serán archivados:<br />
<br />
{$a->archived}<br />
<br />
Los cursos siguientes serán eliminados:<br />
<br />
{$a->deleted}';
$string['confirm_header'] = 'Confirmar archivar';
$string['course_archiving_task'] = 'Archivando cursos';
$string['days'] = 'Número de días a archivar';
$string['eledia_course_archiving:addinstance'] = 'añadir bloque para archivar curso';
$string['eledia_course_archiving:use'] = 'usar bloque para archivar curso';
$string['include_subcategories'] = 'Incluir todas las subcategorías';
$string['last_activity'] = 'última actividad del curso';
$string['nothing_to_archive'] = 'no hay cursos para archivar o para eliminar';
$string['notice'] = 'Los cursos siguientes fueron archivados:<br />
<br />
{$a->archived}<br />
<br />
Los cursos siguientes fueron eliminados:<br />
<br />
{$a->deleted}';
$string['pluginname'] = 'Archivador de Curso';
$string['remove_error'] = '- Errores al remover';
$string['remove_success'] = '-- Remoción exitosa';
$string['run_cron'] = 'activar tarea del cron para archivación';
$string['sourcecat'] = 'Categorías a archivar';
$string['targetcat'] = 'Archivar categoría';
$string['targettimestamp'] = 'Sello-de-tiempo para revisar';
$string['title'] = 'Archivador de Curso';
