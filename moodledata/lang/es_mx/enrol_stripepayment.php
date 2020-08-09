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
 * Strings for component 'enrol_stripepayment', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_stripepayment
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applycode'] = 'Aplicar Código';
$string['assignrole'] = 'Asignar rol';
$string['canntenrol'] = 'La inscripción está deshabilitada o inactiva';
$string['charge_description1'] = 'crear cliente para recibo Email';
$string['charge_description2'] = 'Cobrar por el Costo de Inscripción a Curso';
$string['cost'] = 'Costo de inscripción';
$string['costerror'] = 'El costo de inscripción no es numérico';
$string['costorkey'] = 'Por favor elija uno de los siguientes métodos de inscripción:';
$string['couponcode'] = 'Código del Cupón';
$string['currency'] = 'Divisa';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccionar cual rol deberá ser asignado a los usuarios durante la inscripción por Stripe';
$string['enrol'] = 'Inscribir';
$string['enrolenddate'] = 'Fecha de terminación';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios permanecerán inscritos solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha de fin de inscripción no puede ser anterior a la fecha de inicio';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'Duración de tiempo por defecto que es válida la inscripción. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Duración de tiempo que es válida la inscripción, comenzando con el momento en que el usuario es inscrito. Si se deshabilita, la duración de lainscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios pueden ser inscritos únicamente después de esta fecha.';
$string['expiredaction'] = 'Acción al caducar la inscripción';
$string['expiredaction_help'] = 'Seleccione la acción a realizar cuando caducan las inscripciones de los usuarios. Por favor tenga en cuenta que algunos datos y configuraciones de usuarios son purgados del curso durante la des-inscripción (baja) al curso.';
$string['invalidcouponcode'] = 'Código de Cupón Inválido';
$string['invalidcouponcodevalue'] = '¡El Código del Cupón {$a} no es válido!';
$string['mailadmins'] = 'Notificar administradores';
$string['mailstudents'] = 'Notificar estudiantes';
$string['mailteachers'] = 'Notificar profesores';
$string['maxenrolled'] = 'Máximos usuarios inscritos';
$string['maxenrolled_help'] = 'Especifica el número máximo de usuarios que stripepayment puede inscribir. 0 significa sin límite.';
$string['maxenrolledreached'] = 'Ya se alcanzó el número máximo de usuarios permitidos para inscribirse con stripepayment.';
$string['messageprovider:stripe_enrolment'] = 'Mensajes de inscripción Stripe';
$string['messageprovider:stripepayment_enrolment'] = 'Provedor del Mensaje';
$string['newcost'] = 'Nuevo Costo';
$string['nocost'] = '¡No hay costo asociado con inscribirse a este curso!';
$string['pluginname'] = 'Pago con Stripe';
$string['pluginname_desc'] = 'El módulo Stripe le permite a Usted configurar cursos pagados. Si el costo para algun curso fuera cero, entonces a los estudiantes no se les pide pagar para entrar. Existe un costo para-todo-el-sitio que Usted configura aquí como el costo por defecto para todo el sitio, y además hay una configuración del curso que Usted puede configurar individualmente para cada curso. El costo del curso anula (tiene proridad por encima de) el costo del sitio.';
$string['publishablekey'] = 'Clave Publicable Stripe';
$string['publishablekey_desc'] = 'La API de Clave Publicable de cuenta Stripe';
$string['secretkey'] = 'Clave Secreta Stripe';
$string['secretkey_desc'] = 'La API de Clave Secreta de cuenta Stripe';
$string['sendpaymentbutton'] = 'Mandar pago mediante Stripe';
$string['status'] = 'Permitir inscripciones con Stripe';
$string['status_desc'] = 'Permitirles a los usuarios el inscribirse a un curso por defecto.';
$string['stripeaccepted'] = 'Pagos Stripe aceptados';
$string['stripe:config'] = 'Configurar instancias de inscripción con Stripe';
$string['stripe:manage'] = 'Gestionar usuarios inscritos';
$string['stripepayment:config'] = 'Configurar stripepayment';
$string['stripepayment:manage'] = 'Gestionar stripepayment';
$string['stripepayment:unenrol'] = 'Des-inscribir (dar de baja) stripepayment';
$string['stripepayment:unenrolself'] = 'Des-inscrirse (darse de baja) a sí mismo en stripepayment';
$string['stripe_sorry'] = 'Lo sentimos, Usted no puede usar el \'script\' de esta manera.';
$string['stripe:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['stripe:unenrolself'] = 'Des-inscribirse (darse de baja) Usted mismo del curso';
$string['unenrolselfconfirm'] = '¿Realmente quiere des-inscibirse (darse de baja) Usted mismo del curso "{$a}"?';
