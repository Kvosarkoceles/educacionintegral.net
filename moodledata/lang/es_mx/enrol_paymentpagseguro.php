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
 * Strings for component 'enrol_paymentpagseguro', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_paymentpagseguro
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cost'] = 'Precio cobrado cada mes';
$string['cost2'] = 'Precio para registro';
$string['cost2_help'] = '¡Valor que el usuario debe pagar para acceder al curso!';
$string['costerror'] = 'El precio de suscripción debe ser un número';
$string['cost_help'] = '¡Cantidad cobrada cada mes en el pago mensual!';
$string['costmonthly'] = 'Costo mensual: R$ {$a}';
$string['costunique'] = 'Costo: R$ {$a}';
$string['defaultrole'] = 'Asignar rol';
$string['defaultrole_help'] = 'Seleccionar el rol que debería ser asignado a usuarios durante registros pagados vía PagSeguro';
$string['email'] = 'Email PagSeguro';
$string['email_desc'] = 'Email PagSeguro';
$string['enrolenddate'] = 'Fecha límite de solicitud';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios solamente pueden suscibirse hasta esta fecha.';
$string['enrolperiod'] = 'Duración de inscripción';
$string['enrolperiod_help'] = 'La duración del tiempo por el que la suscripción es válida, comenzando al momento que el usuario es inscrito. Si se deshabilita, la duración del refistro será ilimitada.';
$string['enrolstartdate'] = 'Inicio de entradas';
$string['enrolstartdate_help'] = 'Si está habilitado, los usuarios solo pueden inscribirse a partir de esta fecha.';
$string['errorapi'] = '¡API PagSeguro!';
$string['errorlowvalue'] = '¡El valor es demasiado bajo!';
$string['errornoenrolment'] = '¡No se encontraron matrices!';
$string['expiredaction'] = 'Acción al expirar la inscripción';
$string['expiredaction_help'] = '¿Qué acción tomar cuando expire el registro?';
$string['faulback'] = '¿Deshabilitar por defecto?';
$string['faulback_help'] = 'Si el pago de la colegiatura falla, ¿la colegiatura debe ser deshabilitada?';
$string['months'] = 'Número de meses';
$string['monthserror'] = '¡Mes debe ser un número entero entre 0 y 24!';
$string['months_help'] = 'Si se configura a 0 (CERO) el pago es único. ¡Si Usted configura más de 3 será mensual!';
$string['monthsmaxerror'] = 'Máximo 24 meses';
$string['nocost'] = '<span style=\'color: #ff0404\'>¡No hay precio definido por el administrador!</span>';
$string['payforpagseguro'] = 'Pagar ahora con PagSeguro';
$string['paymentpagseguro:config'] = 'Configurar el método de inscripción del PagSeguro';
$string['paymentpagseguro:manage'] = 'Gestionar usuarios suscritos';
$string['paymentpagseguro:unenrol'] = 'Des-inscribir usuarios del curso';
$string['paymentpagseguro:unenrolself'] = 'Quitarme del curso';
$string['paymentredirect'] = '<h2>Creando requisición de pago</h2>
<p>URL del pago: <strong>{$a}</strong></p>
<p><a title=\\"Payment URL\\" href=\\"{$a}\\" target=\\_blank\\">Ir a la URL del pago.</a></p>';
$string['paytext'] = 'Cada día {$a->date} se le cobrará R$ {$a->costlocaled} por el curso {$a->fullname}';
$string['pluginname'] = 'Suscripción con pago por PagSeguro';
$string['pluginname_desc'] = 'Costo del curso para pago con PagSeguro';
$string['privacy:metadata'] = 'Plugin comparte datos con PagSeguro';
$string['requestpayforpagseguro'] = 'Este curso requiere pago de la cuota de registro antes de acceder.';
$string['signforpagseguro'] = 'Firme ahora con PagSeguro';
$string['status'] = '¿Habilitar firmas?';
$string['subscriptions'] = 'Habilitar firmas en el formato';
$string['subscriptions_desc'] = 'Si se selecciona, la suscripción habilita la opción de firmas.';
$string['token'] = 'Token de Pago Seguro';
$string['token_desc'] = 'Token de Pago Seguro';
$string['unenrolselfconfirm'] = '¿Realmente desea desinstalar del curso "{$ a}"?';
