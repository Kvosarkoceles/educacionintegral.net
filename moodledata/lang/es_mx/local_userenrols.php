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
 * Strings for component 'local_userenrols', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_userenrols
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ERR_CREATE_GROUP'] = 'Línea %u: No se pudo crear el grupo \'%s\'n';
$string['ERR_ENROLL_FAILED'] = 'Línea %u: No se pudo crear asignación de rol para el usuario con userid \'%s\'n';
$string['ERR_ENROLL_META'] = 'Línea %u: No hay inscripción existente en metacurso para el usuario con userid \'%s\'n';
$string['ERR_GROUP_MEMBER'] = 'Línea %u: No se pudo añadir al usuario \'%s\' al grupo \'%s\'n';
$string['ERR_INVALID_GROUP_ID'] = 'La id %u del grupo es inválida para este curso.';
$string['ERR_NO_MANUAL_ENROL'] = 'El curso debe de tener  habilitado  Meta enlace a curso.';
$string['ERR_NO_META_ENROL'] = 'El curso debe de tener  habilitado el plugin de \'Meta enlace a curso\'.';
$string['ERR_PATTERN_MATCH'] = 'Línea %u: No se pudieron procesar los contenidos de la línea \'%s\'n';
$string['ERR_USERID_INVALID'] = 'Línea %u: Valor inválido de identidad del usuario \'%s\'n';
$string['ERR_USER_MULTIPLE_RECS'] = 'Línea %u: El valor de identidad del usuario \'%s\' no es único. Se encontraron registros múltiples';
$string['HELP_PAGE_IMPORT'] = 'Importar Inscripciones y Asignaciones de Grupos';
$string['HELP_PAGE_IMPORT_help'] = '<p>
Use este plugin de importar curso para importar inscripciones de usuario de un archivo de texto delimitado al curso. No se crearán cuentas nuevas de usuarios, por lo que cada uno de los usuarios enlistados en el archivo de entrada ya debe de tener una cuenta configurada en el sitio.<br />
<br />
I un nombre de grupo es incluido en el archivo ingresado con cualquier registro (línea) de usuario entonces ese usuario será añaddido al grupo si ya existiera. Opcionalmente Usted puede crear nuevos grupos si son necesarios.
</p>

<ul>
<li>Cada línea del archivo de importación representa un único registro</li>
<li>Cada registro debería de contener al menos un campo con un valor de userwrid, ya sea que fuera un nombre_de_usuario, una dirección Email o un idnumber interno.</li>
<li>Cada registro puede contener un campo de nombre de grupo adicional, separado por un caracter de una coma, punto y coma o tabulador.</li>
<li>El rol al cual estos usuarios son asignados puede ser seleccionado, pero por defecto es el rol por defecto del curso</li>
<li>Cualquiera, o ninguno, de los campos puede estar entrecomillado, y el campo del nombre del grupo necesitaría estarlo si contiene un punto y coma o una coma</li>
<li>Las líneas vacías en el archivo de importación serán saltadas</li>
<li>Nota: Si un usuario ya estuviera inscrito en el curso, no se harán cambios a la inscripción de dicho usuario (por ejemplo, cambios de rol).</li>
</ul>

<p>
Una nota sobre metacursos: este plugin no importará inscripciones de usuarios adentro de un metacurso, ya que las inscripciones deberían de hacerse en alguno de los cursos hijos. Sin embargo, si hará asignaciones de grupo, y creará grupos, si fuera necesario, cuando el userid especificado ya esté asociado con el metacurso vía una inscripción a curso hijo.
</p>

<h3>Ejemplos</h3>

Grupo y valor de idnumber interno
<pre>
2144323548;Martes Laborario
2144323623
2144323647;Miercoles Laborario
2144323638;Miercoles Laborario
</pre>

Direcciones E-mail
<pre>
smith-john@university.edu
janedoe@university.edu, "Honors"
alan.jones@university.edu, "HonorsPlus"
</pre>

Nombres_de_usuarios (separadas del campo de grupo con un caracter de tabulador)
<pre>
johnsonf "Presentacion, Grupo Uno"
samsel Diezz en punto Pruebas
</pre';
$string['IMPORT_MENU_LONG'] = 'Importar inscripciones';
$string['IMPORT_MENU_SHORT'] = 'Importar';
$string['INF_IMPORT_SUCCESS'] = 'Importación de inscripción a grupo exitosa';
$string['INF_METACOURSE_WARN'] = '<b>ADVERTENCIA</b>: Usted no puede importar inscripciones directamente al interior de un metacurso. En su lugar, haga inscripciones a uno de sus cursos hijos.<br /><br />';
$string['LBL_ENROLL_OPTIONS'] = 'Opciones de inscripción';
$string['LBL_FILE_OPTIONS'] = 'Importar archivo';
$string['LBL_FILE_OPTIONS_help'] = 'Subir o seleccionar desde un repositorio un archivo de datos delimitados con información de usuario y grupo opcional. El archivo debería tener ya sea una extensión .txt o .csv.';
$string['LBL_GROUP'] = 'Asignar a grupos:';
$string['LBL_GROUP_CREATE'] = 'Crear grupos:';
$string['LBL_GROUP_CREATE_help'] = 'Si no existen grupos en el archvo para importación, crear los nuevos conforme se necesiten; de otra manera solamente asignar usuarios a grupos si ya existieran los nombres de los grupos especificados.';
$string['LBL_GROUP_help'] = 'Hacer asignaciones de grupo, ya sea basándose en entrada por archivo, o un grupo seleccionado.';
$string['LBL_GROUP_ID'] = 'Usar grupo:';
$string['LBL_GROUP_ID_help'] = 'Elija para usar el nombre del grupo en el archivo de entrada, si se pone, o seleccione un grupo existente e ignore los datos de entrada.';
$string['LBL_GROUP_OPTIONS'] = 'Opciones de Grupo';
$string['LBL_IDENTITY_OPTIONS'] = 'Identidad del usuario';
$string['LBL_IMPORT'] = 'Importar';
$string['LBL_IMPORT_TITLE'] = 'Archivo de Inscripción por Importación CSV';
$string['LBL_NO_GROUP_ID'] = 'Usar datos del archivo';
$string['LBL_NO_ROLE_ID'] = 'Sin inscripciones';
$string['LBL_ROLE_ID'] = 'Rol:';
$string['LBL_ROLE_ID_help'] = 'Cual rol quiere Usted que tengan en el curso los usuarios importados. Si fuera \'Sin Inscripción\' entonces solamente se harán las asignaciones de grupo.';
$string['LBL_USER_ID_FIELD'] = 'Campo de usuario:';
$string['LBL_USER_ID_FIELD_help'] = 'Especifique cual campo del registro del usuario está representado en la primera columna del archivo de importación.';
$string['pluginname'] = 'Importar Inscripciones y Grupos';
$string['privacy:no_data_reason'] = 'El plugin para Importar Inscripciones y Grupos no almacena ningún dato personal.';
$string['VAL_INVALID_FORM_DATA'] = 'Envío de datos del formato inválido';
$string['VAL_INVALID_SELECTION'] = 'Selección inválida';
$string['VAL_NO_FILES'] = 'No se selecccionó un archivo para importar';
