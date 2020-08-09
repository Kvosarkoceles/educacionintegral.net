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
 * Strings for component 'groupselect', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   groupselect
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['assignedteacher'] = 'Supervisor';
$string['assigngroup'] = 'Asignar supervisores a grupos';
$string['assigngroup_help'] = 'Si se configura, habilita un botón que asigna a profesores sin derecho de edición a grupos (si el curso tiene profesores sin derecho de edición). Los profesores sin derechos de edición asignados no son miembros del grupo, pero aparecen en el archivo de exportación y en la vista principal (si se configura). Es útil si el curso emplea asistentes (ayudantes de profesor) para manejar los grupos.';
$string['cannotselectclosed'] = 'Usted ya no puede volverse miembro del grupo.';
$string['cannotselectmaxed'] = 'Usted no puede unirse al grupo {$a} - se alcanzó el número máximo de miembros.';
$string['cannotselectnocap'] = 'Usted no tiene permitido seleccionar grupo.';
$string['cannotselectnoenrol'] = 'Usted necesita estar inscrito al curso para poder volverse miembro del grupo.';
$string['cannotunselectclosed'] = 'Usted ya no puede dejar el grupo';
$string['creategroup'] = 'Crear un grupo nuevo';
$string['deleteallgrouppasswords'] = 'Eliminar todas las contraseñas de los grupos';
$string['deleteemptygroups'] = 'Eliminar grupo cuando lo abandone el último estudiante';
$string['deleteemptygroups_help'] = 'Si se configura, elimina al grupo automáticamente cuando el último estudiante lo abandona.';
$string['description'] = 'Descripción del grupo';
$string['duedate'] = 'Fecha esperada';
$string['edittooltip'] = 'Haga clic para editar';
$string['enablepermissions'] = 'Permisos generales';
$string['eventexportlinkcreated'] = 'Enlace de exportación creado';
$string['eventgroupteacheradded'] = 'Profesor supervisor añadido';
$string['export'] = 'Crear un enlace a descarga para archivo de datos del grupo (CSV)';
$string['export_download'] = 'Descargar archivo CSV';
$string['fromallgroups'] = 'Todos los grupos';
$string['globalpassword_help'] = 'Configurar una contraseña global para unirse a grupo. Anula contraseñas configuradas por el alumno.';
$string['groupid'] = 'ID del grupo';
$string['groupselect:addinstance'] = 'Añadir una nueva auto-selección de grupo';
$string['groupselect:assign'] = 'Permite asignar supervisores a los grupos';
$string['groupselect:create'] = 'Permitir creación de grupo';
$string['groupselect:export'] = 'Permitir exportación de miembros del grupo';
$string['groupselect:select'] = 'Permitir volverse miembro del grupo';
$string['groupselect:unselect'] = 'Permitir abandonar el grupo';
$string['hidefullgroups'] = 'Ocultar grupos llenos de la vista principal';
$string['hidefullgroups_help'] = 'Si se configura, oculta todos los grupos que hayan alcanzado el número máxiomo de miembros, de la vista de lista principal (excluyendo al grupo propio del usuario). Puede ser útil si la actividad tiene muchos grupos.';
$string['hidegroupmembers'] = 'Ocultar miembros del grupo para estudiantes';
$string['hidegroupmembers_help'] = 'Si se activa, todos los miembros del grupo  estarán ocultos para los estudiantes. Si los estudiantes tienen la capacidad para gestionar grupos (moodle/course:managegroups) o si ellos pueden acceder a todos los grupos (moodle/site:accessallgroups), los miembros siempre serán mostrados.';
$string['hidesuspendedstudents'] = 'Ocultar estudiantes suspendidos';
$string['hidesuspendedstudents_help'] = 'Si se activa, los estudiantes suspendidos serán quitados del número de usuarios y de las listas de usuarios.';
$string['incorrectpassword'] = 'Contraseña incorrecta';
$string['managegroups'] = 'Gestionar grupos';
$string['maxcharlenreached'] = 'Número máximo de caracteres alcanzado';
$string['maxgroupmembership'] = 'Número máximo de grupos para participar en ellos';
$string['maxgroupmembership_error_low'] = '¡Los números negativos no están permitidos!';
$string['maxgroupmembership_help'] = 'Número máximo de grupos en los cuales participar. Un 0 significa que no es posible ninguna participación.';
$string['maxlimitreached'] = 'Número máximo alcanzado';
$string['maxmembers'] = 'Miembros máx por grupo';
$string['maxmembers_error_low'] = '¡Los números negativos no están permitidos! ¡Use 0 para  ilimitado!';
$string['maxmembers_error_smaller_minmembers'] = '¡Necesita ser mayor que el mínimo de participantes por grupo!';
$string['maxmembers_help'] = 'Número máximo de miembros por gupo. Use 0 para ilimitado.';
$string['maxmembers_icon'] = 'El grupo tiene demasiados miembros';
$string['maxmembers_notification'] = '¡Su grupo tiene demasiados miembros! El máximo es {$a}.';
$string['member'] = 'Miembro';
$string['membercount'] = 'Número';
$string['membershidden'] = 'Lista de miembros no disponible';
$string['memberslist'] = 'Miembros';
$string['minmembers'] = 'Mínimo de miembros por grupo';
$string['minmembers_error_bigger_maxmembers'] = '¡El tamaño mínimo del grupo necesita ser menor que el máximo de  participantes por grupo!';
$string['minmembers_error_low'] = '¡No se permiten números negativos para el tamaño mínimo del grupo!';
$string['minmembers_help'] = 'Número mínimo de miembros por grupo. Añade notificaciones para miembros de grupos que ya están bajo este límite. El valor por defecto es 0 (deshabilitado).';
$string['minmembers_icon'] = 'El grupo tiene menos miembros de los requeridos';
$string['minmembers_notification'] = '¡Su grupo tiene menos miembros de los requeridos! El mínimo es {$a}.';
$string['miscellaneoussettings'] = 'Configuraciones misceláneas';
$string['modulename'] = 'Auto-selección de grupo';
$string['modulename_help'] = 'Le permite a los estudiantes el crear y seleccionar grupos. Características:

* Los estudiantes pueden crear grupos, darles una descripción y configurarles protección por contraseña, si se quiere
* Los participantes pueden seleccionar y unirse a grupos
* Los supervisores pueden exportar la lista del grupo del curso como un archivo CSV
* Compatibilidad completa con los grupos básicos de Moodle: los grupos pueden ser creados por otros medios si se necesitara, soporta envíos de tareas grupales, etc.';
$string['modulenameplural'] = 'Auto-selecciones de grupo';
$string['nogroups'] = 'Lo siento, no hay grupos disponibles para elegir.';
$string['notavailableanymore'] = 'Lo siento, ya no está disponible la selección de grupo (desde {$a}).';
$string['notavailableyet'] = 'La selección de grupo estará disponible en {$a}.';
$string['notifyexpiredselection'] = 'Mostrar mensaje, si se alcanza la fecha de \'abierto hasta\'';
$string['notifyexpiredselection_help'] = 'Si se configura, aparecerá un mensaje si la fecha de \'abierto hasta\' es alcanzada';
$string['ok'] = 'OK';
$string['password'] = 'Requerir contraseña';
$string['pluginadministration'] = 'Administración del módulo';
$string['pluginname'] = 'Auto-selección de grupo';
$string['privacy:metadata'] = 'El plugin de Auto-seleccionar Grupo no almacena ningún dato personal.';
$string['removeallsupervisors'] = 'Quitar supervisores de grupos';
$string['saving'] = 'Guardando ...';
$string['select'] = 'Volverse miembro de {$a}';
$string['selectconfirm'] = '¿Realmente desea volverse miembro del grupo <em>{$a}</em>?';
$string['selectgroupaction'] = 'Seleccionar grupo';
$string['showassignedteacher'] = 'Mostrar supervisores asignados';
$string['showassignedteacher_help'] = 'Si se configura, los supervisores asignados se mostrarán en miembros del grupos. Es útil si los estudiantes necesitan conocer a su profesor asignado';
$string['studentcancreate'] = 'Los participantes pueden crear grupos';
$string['studentcancreate_help'] = 'Si se configura, los estudiantes sin grupo (en agrupamientos selectos) pueden crear grupos. Este permiso puede configurarse mucho más en las capacidades del rol.';
$string['studentcanjoin'] = 'Los participantes pueden unirse a grupos';
$string['studentcanjoin_help'] = 'Si se activa, los participantes pueden unirse a grupos. Este permiso puede ser configurado más en las capacidades del rol.';
$string['studentcanleave'] = 'Los participantes pueden abandonar grupos';
$string['studentcanleave_help'] = 'Si se activa, los participantes pueden abandonar a grupos. Este permiso puede ser configurado más en las capacidades del rol.';
$string['studentcansetdesc'] = 'Los participantes pueden configurar y editar la descripción del grupo';
$string['studentcansetdesc_help'] = 'Si se configura, los participantes pueden configurar una descripción del grupo al crear uno y los miembros del grupo podrán editarla.';
$string['studentcansetenrolmentkey'] = 'Los participantes pueden configurar contraseñas para unirse a grupos';
$string['studentcansetenrolmentkey_help'] = 'Si se configura, los participantes pueden configurar una clave para inscripción para unirse a grupos.';
$string['studentcansetgroupname'] = 'Los participantes pueden configurar el nombre de nuevos grupos';
$string['studentcansetgroupname_help'] = 'Si se configura, los participantes pueden configurar el nombre del grupo para los nuevos grupos.';
$string['supervisionrole'] = 'Rol supervisor';
$string['supervisionrole_help'] = 'Definir el rol para supervisores (formalmente profesores sin derecho de edición)';
$string['targetgrouping'] = 'Sleccionar grupos del agrupamiento';
$string['timeavailable'] = 'Abierto desde';
$string['timeavailable_error_past_timedue'] = '¡No puede iniciar después de la fecha esperada!';
$string['timedue'] = 'Abierto hasta antes de';
$string['timedue_error_pre_timeavailable'] = '¡No puede terminar antes de la fecha de inicio!';
$string['unassigngroup'] = 'Desasignar supervisores de los grupos';
$string['unassigngroup_confirm'] = 'Esto desasignará supervisores de los grupos. ¿Está seguro?';
$string['unselect'] = 'Dejar grupo {$a}';
$string['unselectconfirm'] = '¿Realmente desea dejar el grupo <em>{$a}</em>?';
