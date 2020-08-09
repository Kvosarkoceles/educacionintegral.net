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
 * Strings for component 'assignfeedback_offline', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Confirmar importación de calificaciones';
$string['default'] = 'Habilitado por defecto';
$string['default_help'] = 'Si se configura, lse permitirá calificar fuera-de-línea mediante hojas de cálculo por defecto para todas las  tareas nuevas.';
$string['downloadgrades'] = 'Descargar hoja de trabajo calificadora';
$string['enabled'] = 'Hoja de trabajo calificadora fuera-de-línea';
$string['enabled_help'] = 'Si se habilita, el profesor podrá descargar y subir una hoja de trabajo con calificaciones de estudiantes al calificar las tareas.';
$string['feedbackupdate'] = 'Configurar campo "{$a->field}" para "{$a->student}" a "{$a->text}"';
$string['gradelockedingradebook'] = 'La calificación ha sido bloqueada en el libro de calificaciones para {$a}';
$string['graderecentlymodified'] = 'La calificación ha sido modificada en Moodle más recientemente que en la hoja de trabajo de calificación en el caso de  {$a}';
$string['gradesfile'] = 'Hoja de trabajo calificadora (formato CSV)';
$string['gradesfile_help'] = 'La hoja de trabajo con calificaciones modificadas. Este archivo debe ser un archivo CSV con codificación UTF-8 que ha sido descargado desde la tarea, con columnas para la calificación del estudiante, e identificador.';
$string['gradeupdate'] = 'Poner calificación para {$a->student} a {$a->grade}';
$string['ignoremodified'] = 'Permite actualizar registros que hayan sido modificados más recientemente en Moodle que en la hoja de cálculo.';
$string['ignoremodified_help'] = 'Cuando se descargue la hoja de trabajo calificadora desde Moodle, esta contiene la fecha de última modificación para cada calificación. Si cualquiera de las calificaciones es actualizada en Moodle después de que fuera descargada, por defecto Moodle se negará a sobrescribir esta información actualizada al importar calificaciones. Al seleccionar esta opción, Moodle deshabilitará esta configuración de seguridad y entonces será posible que múltiples profesores sobrescriban las calificaciones de los otros profesores (se puede volver un relajo).';
$string['importgrades'] = 'Enviar los cambios en la hoja de trabajo calificadora';
$string['invalidgradeimport'] = 'Moodle no pudo leer la hoja de trabajo subida. Asegúrese que esté guardada en formato de valores separados por coma (CSV) e inténtelo de nuevo.';
$string['nochanges'] = 'No se encontraron calificaciones modificadas en la hoja de trabajo subida';
$string['offlinegradingworksheet'] = 'Calificaciones';
$string['pluginname'] = 'Hoja de trabajo calificadora fuera-de-línea';
$string['privacy:nullproviderreason'] = 'Este plugin no tiene base de datos para almacenar información del usuario. Solamenta usa APIs en mod_assign para ayudarle a mostrar la interfaz para calificar.';
$string['processgrades'] = 'Importar calificaciones';
$string['skiprecord'] = 'Saltar registro';
$string['updatedgrades'] = 'Se actualizaron {$a} calificaciones y retroalimentaciones';
$string['updaterecord'] = 'Actualizar registro';
$string['uploadgrades'] = 'Subir hoja de trabajo calificadora';
