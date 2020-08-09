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
 * Strings for component 'enrol_authorizedotnet', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_authorizedotnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['authorizedotnet:config'] = 'Configurar instancias de Authorize.net';
$string['authorizedotnet:manage'] = 'Gestionar usuarios inscritos';
$string['authorizedotnet:unenrol'] = 'Des-inscribir usuarios del curso';
$string['authorizedotnet:unenrolself'] = 'Des-inscribirse a sí mismo del curso';
$string['checkproductionmode'] = 'Revisar el modo de producción';
$string['clientkey'] = 'Clave de cliente de Authorize.net';
$string['cost'] = 'Costo de inscripción';
$string['costerror'] = 'El costo de inscripción no es numérico';
$string['costorkey'] = 'Por favol elija uno de los siguientes métodos de inscripción:';
$string['currency'] = 'Divisa';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccionar el rol que será asignado a usuarios durante las inscripciones Authorize.net';
$string['enrolenddate'] = 'Fecha de finalización';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden estar inscritos solamente hasta esta fecha';
$string['enrolenddaterror'] = 'La fecha de finalización de inscripción no puede ser anterior a la fecha de inicio';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Lapso de tiempo por defecto en el que la inscripción es válida. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Lapso de tiempo por defecto en el que la inscripción es válida, comenzando con el momento en el que el usuario es inscrito. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente pueden inscribirse a aprtir de esta fecga.';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Seleccionar la acción a realizar cuando caduca la inscripción del usuario. Por favor tenga en cuenta que los datos y configuraciones de algunos usuarios son purgados del curso durante la des-inscripción al curso.';
$string['loginid'] = 'ID de ingreso de Authorize.net';
$string['mailadmins'] = 'Notificar administrador';
$string['mailstudents'] = 'Notificar estudiantes';
$string['mailteachers'] = 'Notificar profesores';
$string['merchantmd5hash'] = 'Clave hash MD5 de Authorize.net merchant';
$string['pluginname'] = 'Authorize.net';
$string['pluginname_desc'] = 'El módulo de Authorize.net le permite a Usted  configurar cursos de pago. Si el costo de algun curso es cero, a los estudiantes no se les pide pagar para entrar. Hay un costo para-todo-el-sitio que Usted configura aquí como valor por defecto para todo el sitio y después hay una configuración de costo que Usted puede poner para cada curso individualmente. El costo del curso anula el costo del sitio.';
$string['status'] = 'Permitir inscripciones Authorize.net';
$string['status_desc'] = 'Permitirle a usuarios usar Authorize.net para inscribirse a un curso por defecto.';
$string['transactionkey'] = 'Clave de transacción de Authorize.net';
$string['unenrolselfconfirm'] = '¿Realmente quiere des-inscribirse a Usted mismo del curso "{$a}"?';
