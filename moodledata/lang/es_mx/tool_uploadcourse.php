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
 * Strings for component 'tool_uploadcourse', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_uploadcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir eliminaciones';
$string['allowdeletes_help'] = 'Si es que el campo eliminar es aceptado o no';
$string['allowrenames'] = 'Permitir renombrados';
$string['allowrenames_help'] = 'Si es que el campo renombrar es aceptado o no';
$string['allowresets'] = 'Permitir reinicios';
$string['allowresets_help'] = 'Si es que el campo reiniciar es aceptado o no';
$string['cachedef_helper'] = 'Caché ayudante';
$string['cannotdeletecoursenotexist'] = 'No puede eliminarse un curso que no existe';
$string['cannotforcelang'] = 'Sin permiso para forzar idioma para este curso';
$string['cannotgenerateshortnameupdatemode'] = 'No puede generarse un nombre corto cuando están permitidas las actualizaciones';
$string['cannotreadbackupfile'] = 'No puede leerse el archivo de respaldo';
$string['cannotrenamecoursenotexist'] = 'No puede renombrarse un curso que no existe';
$string['cannotrenameidnumberconflict'] = 'No puede renombrarse el curso; el número ID tiene conflicto con un curso existente';
$string['cannotrenameshortnamealreadyinuse'] = 'No puede renombrarse el curso; el nombre corto ya está usado';
$string['cannotupdatefrontpage'] = 'Está prohibido modificar la portada';
$string['canonlyrenameinupdatemode'] = 'Solamente puede renombrarse un curso cuando está permitida la actualización';
$string['canonlyresetcourseinupdatemode'] = 'Solamente puede reiniciarse un curso en modo actualización';
$string['couldnotresolvecatgorybyid'] = 'No pudo resolverse la categoría por el ID';
$string['couldnotresolvecatgorybyidnumber'] = 'No pudo resolverse la categoría por el número ID';
$string['couldnotresolvecatgorybypath'] = 'No pudo resolverse la categoría por la ruta';
$string['coursecreated'] = 'Curso creado';
$string['coursedeleted'] = 'Curso eliminado';
$string['coursedeletionnotallowed'] = 'No está permitida la eliminación de curso';
$string['coursedoesnotexistandcreatenotallowed'] = 'El curso no existe y no está permitido crear curso';
$string['courseexistsanduploadnotallowed'] = 'El curso existe y no está permitida la actualización';
$string['coursefile'] = 'Archivo';
$string['coursefile_help'] = 'Este archivo debe ser un archivo CSV.';
$string['courseidnumberincremented'] = 'Número ID del curso incrementado {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Proceso del curso';
$string['courserenamed'] = 'Curso renombrado';
$string['courserenamingnotallowed'] = 'No está permitido el renombrado de curso';
$string['coursereset'] = 'Reinicio de curso';
$string['courseresetnotallowed'] = 'Reinicio de curso ahora permitido';
$string['courserestored'] = 'Curso restaurado';
$string['coursescreated'] = 'Cursos creados: {$a}';
$string['coursesdeleted'] = 'Cursos eliminados: {$a}';
$string['courseserrors'] = 'Errores en cursos: {$a}';
$string['courseshortnamegenerated'] = 'Nombre corto de curso generado: {$a}';
$string['courseshortnameincremented'] = 'Nombre corto de curso incrementado {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total de cursos: {$a}';
$string['coursesupdated'] = 'Cursos actualizados: {$a}';
$string['coursetemplatename'] = 'Restaurar desde este curso después de subirlo';
$string['coursetemplatename_help'] = 'Escriba un nombre corto de curso para usar como plantilla para la creación de todos los cursos-';
$string['coursetorestorefromdoesnotexist'] = 'No existe el curso a partir del cual restaurar';
$string['courseupdated'] = 'Curso actualizado';
$string['createall'] = 'Crear todos, incrementar nombre corto en caso necesario';
$string['createnew'] = 'Solamente crear cursos nuevos, saltarse los existentes';
$string['createorupdate'] = 'Crear cursos nuevos, o actualizar los existentes';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['csvdelimiter_help'] = 'Delimitador CSV del archivo CSV.';
$string['csvfileerror'] = 'Algo está mal con el formato del archivo CSV. Por favor revise que coincidan el número de encabezados y el número de columnas, y que estén correctos el delimitador y la codificación del archivo: {$a}';
$string['csvline'] = 'Línea';
$string['customfieldinvalid'] = 'El campo personalizado \'{$a}\' está vacío o contiene datos inválidos';
$string['defaultvalues'] = 'Valores por defecto del curso';
$string['defaultvaluescustomfieldcategory'] = 'Valores predeterminados para \'{$a}\'';
$string['encoding'] = 'Codificación';
$string['encoding_help'] = 'Codificación del archivo CSV.';
$string['errorwhiledeletingcourse'] = 'Error al eliminar el curso';
$string['errorwhilerestoringcourse'] = 'Error al restaurar el curso';
$string['generatedshortnamealreadyinuse'] = 'El nombre corto generado ya está en uso';
$string['generatedshortnameinvalid'] = 'El nombre corto generado es inválido';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'El número ID ya está usado por un curso';
$string['importoptions'] = 'Opciones de importación';
$string['invalidbackupfile'] = 'Archivo de respaldo inválido';
$string['invalidcourseformat'] = 'Formato de curso inválido';
$string['invalidcsvfile'] = 'Archivo CVS de entrada inválido';
$string['invalidencoding'] = 'Codificación inválida';
$string['invalideupdatemode'] = 'El modo de actualización seleccionado es inválido';
$string['invalidfullnametoolong'] = 'El campo de nombrecompleto está limitado a {$a} caracteres';
$string['invalidmode'] = 'Modo seleccionado inválido';
$string['invalidroles'] = 'Nombres de rol inválidos: {$a}';
$string['invalidshortname'] = 'Nombres cortos inválidos';
$string['invalidshortnametoolong'] = 'El campo de nombrecorto está limitado a {$a} caracteres';
$string['invalidvisibilitymode'] = 'Modo de visibilidad inválido';
$string['missingmandatoryfields'] = 'Valor faltante para campos obligatorios: {$a}';
$string['missingshortnamenotemplate'] = 'Falta nombre corto y plantilla de nombre corto no configurada';
$string['mode'] = 'Modo subir';
$string['mode_help'] = 'Esto le permite especificar si es que los cursos pueden crearse y/o actualizarse';
$string['nochanges'] = 'Sin cambios';
$string['pluginname'] = 'Subir curso';
$string['preview'] = 'Vista previa';
$string['privacy:metadata'] = 'El plugin para Subir curso no almacena ningún dato personal.';
$string['reset'] = 'Reiniciar curso después de subirlo';
$string['reset_help'] = 'Si se reinicia o no el curso después de crearlo/actualizarlo.';
$string['restoreafterimport'] = 'Restaurar después de importar';
$string['result'] = 'Resultado';
$string['rowpreviewnum'] = 'Vista previa de filas';
$string['rowpreviewnum_help'] = 'Número de filas del archivo CSV que serán previsualizadas en la siguiente página. Esta opción es para limitar el tamaño de la página siguiente.';
$string['shortnametemplate'] = 'Plantilla para generar un nombre corto';
$string['shortnametemplate_help'] = 'El nombre corto del curso es mostrado en la navegación. Usted puede usar sintaxis de plantilla aquí (%f = fullname, %i = idnumber), o escribir un valor inicial que es incrementado.';
$string['templatefile'] = 'Restaurar desde este archivo después de subir';
$string['templatefile_help'] = 'Seleccionar un archivo a usar como plantilla para la creación de todos los cursos.';
$string['unknownimportmode'] = 'Modo de importación desconocido';
$string['updatemissing'] = 'Rellene los datos faltantes a partir de datos CSV y valores por defecto';
$string['updatemode'] = 'Modo de actualización';
$string['updatemodedoessettonothing'] = 'El modo de actualización no permite que nada se actualice';
$string['updatemode_help'] = 'Si Usted permite que los cursos sean actualizados, Usted tendrá que decirle a la herramienta con qué actualizar los cursos.';
$string['updateonly'] = 'Actualizar solamente cursos existentes';
$string['updatewithdataonly'] = 'Actualizar solamente con datos CSV';
$string['updatewithdataordefaults'] = 'Actualizar con datos CVS y valores por defecto';
$string['uploadcourses'] = 'Subir cursos';
$string['uploadcourses_help'] = 'Los cursos pueden subirse mediante archivo de texto. El formato del archivo debería ser como sigue:

* Cada línea del archivo contiene solamente un registro
* Cada registro es una serie de datos separados por comas (o por otros delimitadores)
* El primer registro contiene una lista de los nombres_de_campos (fieldnames) que definen el formato para el resto del archivo
* Los nombres_de_campos (fieldnames) obligatorios son shortname, fullname, y category (así escritos, en inglés)';
$string['uploadcoursespreview'] = 'Vista previa subir cursos';
$string['uploadcoursesresult'] = 'Resultados subir cursos';
