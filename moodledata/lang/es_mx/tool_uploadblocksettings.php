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
 * Strings for component 'tool_uploadblocksettings', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_uploadblocksettings
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockadded'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Bloquek "{$a->blocktitle}" ({$a->blockname}) añadido al curso "{$a->coursename}" ({$a->courseid}).';
$string['blockadderror'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Error: bloque "{$a->blocktitle}" ({$a->blockname}) no añadido al curso "{$a->coursename}" ({$a->courseid}). {$a->skipped}.';
$string['blockalreadyadded'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Block "{$a->blocktitle}" ({$a->blockname}) ya había sido añadido antes al curso "{$a->coursename}" ({$a->courseid}). {$a->skipped}.';
$string['blockdeleted'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Bloqueck "{$a->blocktitle}" ({$a->blockname}) eliminado del curso "{$a->coursename}" ({$a->courseid}).';
$string['blockdoesntexist'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Bloque "{$a->blocktitle}" ({$a->blockname}) no añadido al curso "{$a->coursename}" ({$a->courseid}). {$a->skipped}.';
$string['blockinstancenotfound'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Advertencia: Bloque "{$a->blocktitle}" ({$a->blockname}) no encontrado en curso "{$a->coursename}" ({$a->courseid}).';
$string['blockmoved'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Bloque "{$a->blocktitle}" ({$a->blockname}) en curso "{$a->coursename}" ({$a->courseid}) movido.';
$string['blocknotinstalled'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Bloque ({$a->blockname}) no instalado. {$a->skipped}.';
$string['courseblocksreset'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Curso "{$a->coursename}" bloques  reiniciados.';
$string['coursenotfound'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Curso "{$a->coursename}" no encontrado. {$a->skipped}.';
$string['csvcomment'] = '{$a->line} {$a->linenum} [Comentario]: {$a->skipped}.';
$string['csvfile'] = '';
$string['csvfile_help'] = 'El formato del archivo CSV debe ser como sigue:

* Las líneas que comienzan con un caracter # o un caracter ; son comentarios y son saltadas.
* Cada línea del archivo contiene un registro.
* Cada registro es una serie de datos  en un orden fijo separados por comas.
* Los campos requeridos son operation, course shortname, block, region, weight.
* Las operaciones permitidas son add, del(ete), res(et), upd(ate).
* Las regiones permitidas son side-pre y side-post.
* Los pesos permitidos son -10 a 10 (0 es neutral)';
$string['fieldscannotbeblank'] = '$a->line} {$a->linenum} [{$a->oplabel}]: Los campos no pueden estar vacío: bloque ({$a->blockname}), curso ($a->coursename), región ($a->region), peso ($a->weight). {$a->skipped}.';
$string['heading'] = 'Subir configuraciones de cloque de curso desde un archivo CSV';
$string['operationnotvalid'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Operación no válida para bloque "{$a->blocktitle}" ({$a->blockname}). {$a->skipped}.';
$string['operationunknown'] = '{$a->line} {$a->linenum} [{$a->op}]: Operación desconocida.';
$string['pluginname'] = 'Subir configuraciones de bloque';
$string['pluginname_help'] = 'Subir configuraciones de bloque desde un archivo CSV para configurar configuraciones de bloque para un rango de cursos en una sola operación.';
$string['privacy:metadata'] = 'La herramienta de administración para Subir configuraciones de bloque no almacena datos personales.';
$string['regionnotvalid'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Región "{$a->region}" es desconocida. {$a->skipped}.';
$string['toofewcols'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Demasiado pocas columnas, se esperaban 5. {$a->skipped}.';
$string['toomanycols'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Demasiadas columnas, se esperaban 5. {$a->skipped}.';
$string['weightnotvalid'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Peso"{$a->weight}" no es válido. {$a->skipped}.';
