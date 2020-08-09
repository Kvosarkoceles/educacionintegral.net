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
 * Strings for component 'local_mailtest', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_mailtest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'Mostrar siempre bitácora de comunicaciones con el servidor de Email, aunque no haya errores.';
$string['credit'] = 'Michael Milette - <a href="http://www.instruxmedia.com/">TNG Consulting Inc.</a>';
$string['errorcommunications'] = 'Moodle no pudo comunicarse con su servidor de correo.</p><p><strong>Recomendación:</strong></p><p>Empiece por revisar sus<a href="{$a}" target="_blank">Configuraciones de correo SMTP</a>.</p><p>Si se ven correctas, revise su servidor SMTP o las configuraciones de su cortafuegos (firewall) para asegurarse de que estén configurados para aceptar conexiones SMTP de su servidor web de  Moodle y de su dirección Email de no-contestar (no-reply). Para más ayuda, vea la sección FAQ en la documentación.';
$string['errorsend'] = 'El mensaje del Email de prueba no pudo entregarse al servidor SMTP. </p><p><strong>Recomendación:</strong></p><p>Revise sus <a href="{$a}" target="blank">Configuraciones del correo</a>. Para mayor información, vea la sección FAQ en la documentación.';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = 'Desde dirección Email';
$string['heading'] = 'Prueba de la configuración del Email';
$string['message'] = '<p>Este es un mensaje de prueba. Por favor no le haga caso.</p>
<p>Si Usted recibió este Email, significa que Usted ha configurado exitosamente las configuraciones de Email de su sitio Moodle.</p>
<hr><p><strong>Información adicional del usuario</strong></p>
<ul>
<li><strong>Estatus del registro :</strong> {$a->regstatus}</li>
<li><strong>Idioma preferido :</strong> {$a->lang}</li>
<li><strong>Navegador web del usuario :</strong> {$a->browser}</li>
<li><strong>Mensaje enviado desde :</strong> {$a->referer}</li>
<li><strong>Versión Moodle:</strong> {$a->release}</li>
<li><strong>Dirección IP del usuario :</strong> {$a->ip}</li>
</ul>';
$string['nologavailable'] = '<p>El escribir a bitácoras no está disponible al usar la función PHP mail() . Sin embargo, Usted puede encontrar bitácoras en su servidor. Los sitios más comunes en Linux incluyem:</p>
<ul>
<li>/var/log/maillog</li>
<li>/var/log/mail.log</li>
<li>/var/adm/maillog</li>
<li>/var/adm/syslog/mail.log</li>
</ul>
<p>De forma alterna, puede especificarse una localización alterna usando la configuración mail.log en php.ini.</p>';
$string['notregistered'] = 'No registrado o no ingresado al sitio.';
$string['phpmethod'] = 'Método PHP por defecto';
$string['pluginname'] = 'eMail Test (Prueba de Correo)';
$string['pluginname_help'] = 'Mail Test (Prueba de Correo) revisará la configuración del Email del sitio Moodle al enviarle un mensaje Email a una dirección Email especificada. Solamente para administradores del sitio.';
$string['primaryadminemail'] = 'Email del administrador primario';
$string['privacy:metadata'] = 'El plugin Probar Email no almacena ningún dato personal acerca de ningún usuario.';
$string['recipientisrequired'] = 'Usted debe especificar la dirección Email del destinatario.';
$string['registered'] = 'Usuario registrado ({$a}).';
$string['sendmethod'] = 'Método para enviar Email';
$string['sendtest'] = 'Enviar un mensaje de prueba';
$string['sentmail'] = 'Moodle entregó exitosamente el mensaje de prueba al servidor de correo SMTP.';
$string['sentmailphp'] = 'El mensaje de prueba de Moodle fue exitosamente aceptado por PHP Mail.';
$string['smtpmethod'] = 'Hosts SMTP: {$a}';
$string['toemail'] = 'Para dirección Email';
$string['youremail'] = 'Su dirección Email de Usted';
