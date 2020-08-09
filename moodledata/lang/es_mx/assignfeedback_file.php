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
 * Strings for component 'assignfeedback_file', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   assignfeedback_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = '¿Subir uno o más archivos de retroalimentación para todos los usuarios seleccionados?';
$string['batchuploadfiles'] = 'Subir archivos de retroalimentación para múltiples usuarios';
$string['batchuploadfilesforusers'] = 'Mandar archivos de retroalimentación a {$a} usuario(s) seleccionado(s).';
$string['configmaxbytes'] = 'Tamaño máximo de archivo';
$string['confirmuploadzip'] = 'Confirmar subida de ZIP';
$string['countfiles'] = '{$a} archivos';
$string['default'] = 'Habilitado por defecto';
$string['default_help'] = 'Si está establecido, este método de retroalimentación estará habilitado por omisión para todas las tareas nuevas.';
$string['enabled'] = 'Retroalimentación por archivo';
$string['enabled_help'] = 'Si se habilita, el profesor podrá subir archivos con retroalimentación al calificar los envíos de  tareas. Estos archivos pueden ser, pero no están limitados a, envíos corregidos de estudiantes, documentos con comentarios, o retroalimentación en audio hablado.';
$string['feedbackfileadded'] = 'Nuevo archivo de retroalimentación "{$a->filename}" para estudiante "{$a->student}"';
$string['feedbackfileupdated'] = 'Archivo de retroalimentación modificado "{$a->filename}" para estudiante "{$a->student}"';
$string['feedbackzip'] = 'Archivo ZIP con archivos de retroalimentación';
$string['feedbackzip_help'] = 'Un archivo ZIP que contiene una lista de archivos de retroalimentación para uno o más estudiantes. Los archivos de retroalimentación serán asignados a los estudiantes basados en la ID del participante que debería ser la segunda parte de cada nombre de archivo inmediatamente después del nombre completo de los usuarios. Esta convención para los nombres se emplea al descargar envíos, de forma que Usted pueda descargar todos los envíos, añadirles comentarios a algunos archivos y después re-comprimir en ZIP y subir todos los archivos. Los archivos que no tengan cambios serán ignorados.';
$string['file'] = 'Archivos de retroalimentación';
$string['filesadded'] = 'Archivos de retroalimentación añadidos: {$a}';
$string['filesupdated'] = 'Archivos de retroalimentación actualizados: {$a}';
$string['importfeedbackfiles'] = 'Importar archivos de retroalimentación';
$string['maxbytes'] = 'Tamaño máximo del archivo';
$string['maxfiles'] = 'Número máximo de archivos subidos';
$string['maximumsize'] = 'Tamaño máximo de archivos';
$string['moreusers'] = '{$a} más...';
$string['nochanges'] = 'Sin cambios';
$string['pluginname'] = 'Retroalimentación por archivo';
$string['privacy:metadata:filepurpose'] = 'Archivos de retroalimentación del profesor para el estudiante.';
$string['privacy:path'] = 'Archivos de retroalimentación';
$string['selectedusers'] = 'Usuarios seleccionados';
$string['uploadfiles'] = 'Mandar archivos de retroalimentación';
$string['uploadzip'] = 'Subir múltiples archivos de retroalimentación en un ZIP';
$string['uploadzipsummary'] = 'Archivos de retroalimentación importados desde un ZIP';
$string['userswithnewfeedback'] = 'Usuarios con retroalimentaciones actualizadas: {$a}';
