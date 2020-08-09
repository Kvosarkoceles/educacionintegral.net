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
 * Strings for component 'enrol_paypal', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['businessemail'] = 'Correo electrónico de negocios de PayPal';
$string['businessemail_desc'] = 'La dirección de correo electrónico
de su cuenta PayPal Business (de negocios)';
$string['cost'] = 'Costo de inscripción';
$string['costerror'] = 'El costo de inscripción no es numérico';
$string['costorkey'] = 'Por favor, seleccione uno de los siguientes métodos de inscripción.';
$string['currency'] = 'Moneda';
$string['defaultrole'] = 'Asignación de roles por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que debería asignarse a los usuarios durante las inscripciones pagadas con PayPal';
$string['enrolenddate'] = 'Fecha de finalización';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden inscibirse solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha final de inscripción no puede ser anterior a la fecha inicial.';
$string['enrolperiod'] = 'Período de inscripción';
$string['enrolperiod_desc'] = 'Tiempo por defecto (en segundos) de vigencia del período de inscripción por defecto. Si escribe cero la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Tiempo de duración de la inscripción válida, empezando al momento que el usuario es inscrito. Si se deshabilita, la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios sólamente pueden inscribirse a partir de esta fecha.';
$string['errdisabled'] = 'El plugin de inscripción PayPal está deshabilitado y no maneja notificaciones de pago.';
$string['erripninvalid'] = 'Notificación instantánea de pago no ha sido verificada por PayPal.';
$string['errpaypalconnect'] = 'No fue posible conectarse a {$a->url} para verificar la notificación instantánea de pago: {$a->result}';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Seleccione la acción a tomar cuando caduca la inscripción del usuario. Por favor tenga en cuenta que algunos datos del usuario y configuraciones son purgados del curso durante la des-inscripción (baja) al curso.';
$string['mailadmins'] = 'Notificar a admin';
$string['mailstudents'] = 'Notificar a los estudiantes';
$string['mailteachers'] = 'Notificar a los profesores';
$string['messageprovider:paypal_enrolment'] = 'Mensajes de inscripción por PayPal';
$string['nocost'] = 'No hay ningún costo asociado a la inscripción en este curso';
$string['paypalaccepted'] = 'Pagos PayPal aceptados';
$string['paypal:config'] = 'Configuración de instancias de inscripciones PayPal';
$string['paypal:manage'] = 'Administrar los usuarios registrados';
$string['paypal:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['paypal:unenrolself'] = 'Des-inscribirse (darse de baja)  a sí mismo del curso';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'El módulo de PayPal le permite crear cursos de pago. Si el costo de cualquier curso es cero, entonces los estudiantes no tienen que pagar para entrar. Hay un costo para todo el sitio que se establece como un valor predeterminado para todo el sitio y también existe una configuración que se puede establecer para cada curso por separado. El costo del curso anula el costo de sitio.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Información acerca de transacciones PayPal para inscripciones PayPal';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Dirección Email o ID de cuenta PayPal de quien recibe el pago (esto es, el comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'La ID del curso que es vendido.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'La ID de la instancia de inscripción en el curso.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'El nombre completo del curso cuya inscripción ha sido vendida.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Una nota que fue ingresada por el comprador en el campo de nota de pagos del sitio web PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nombre completo del comprador.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'En el caso de un rembolso, reversión o reversión cancelada, esto sería la ID de la transacción de la transacción original.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'El estado del pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Contiene si es que el pago fue financiado con un eCheck (echeck), o fue financiado con balance de PayPal, tarjeta de crédito, o transferencia instantánea (instant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'La razón por la cual el estado del pago está pendiente (si así fuera).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'La razón por la cual el estado del pago es Revertido, Rembolsado, Cancelado_Revertido o Negado (si el estado es uno de ellos).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Dirección Email primaria de quien recibe el pago (esto es, el comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID de cuenta PayPal única del receptor del pago (por ejemplo, el comerciante).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Cantidad de impuesto cargado al pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'La hora en la cual Moodle fue notificado por PayPal acerca del pago.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'El número de identificación de la transacción original del comerciante para el pago del comprador, en contra del cual se registró el caso';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'La ID del usuario que compró la inscripción del curso.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'El plugin de Inscripción PayPal transmite datos del usuario desde Moodle hacia el sitio web PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Dirección del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Ciudad del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'País del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Una cadena de caracteres separados por guiones que contiene la ID del usuario (el comprador), ID del curso, ID de la instancia de inscripción.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Dirección Email del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Nombre del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Apellido(s) del usuario que está comprando el curso.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Nombre completo del usuario que está comprando el curso.';
$string['processexpirationstask'] = 'Trabajo de enviar notificación de caducidades de inscripción PayPal';
$string['sendpaymentbutton'] = 'Enviar pago por Paypal';
$string['status'] = 'Permitir la inscripción con PayPal';
$string['status_desc'] = 'Permitir a los usuarios utilizar PayPal para inscribirse en un curso de forma predeterminada.';
$string['transactions'] = 'Transacciones PayPal';
$string['unenrolselfconfirm'] = '¿Está seguro que desea des-inscribirse (darse de baja)  del curso "{$a}"?';
