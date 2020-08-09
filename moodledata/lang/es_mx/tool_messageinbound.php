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
 * Strings for component 'tool_messageinbound', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nombre de la clase';
$string['component'] = 'Componente';
$string['configmessageinboundhost'] = 'La dirección del servidor contra la que Moodle debería de revisar el correo. Para especificar un puerto no-estándar, use  [servidor]:[puerto], como por ejemplo el formato mail.ejemplo.com:993, Si no se especifica un puerto, se usará el puerto por defecto para el tipo de servidor de correo.';
$string['defaultexpiration'] = 'Período de caducidad de dirección por defecto';
$string['defaultexpiration_help'] = 'Cuando una dirrección de Email es generada por el manejador (\'\'handler\'\'), puede configurarse para que caduque automáticamente después de un  tiempo,  para que ya no sea usada. Es recomendable configurar un período de caducidad.';
$string['description'] = 'Descripción';
$string['domain'] = 'Dominio de Email';
$string['edit'] = 'Editar';
$string['edithandler'] = 'Editar configuraciones para el manejador {$a}';
$string['editinghandler'] = 'Editando {$a}';
$string['enabled'] = 'Habilitado';
$string['fixedenabled_help'] = 'Usted no puede cambiar el estado de este manejador. Esto puede deberse a que el manejador es necesario para otros manejadores.';
$string['fixedvalidateaddress'] = 'Validar dirección del remitente';
$string['fixedvalidateaddress_help'] = 'Usted no puede cambiar el estado de este manejador. Esto puede deberse a que el manejador requiere una configuración específica.';
$string['handlerdisabled'] = 'El manejador de Email que Usted intentó contactar ha sido deshabilitado. No se puede procesar el mensaje por ahora.';
$string['incomingmailconfiguration'] = 'Configuración de correo entrante';
$string['incomingmailserversettings'] = 'Configuraciones de Email entrante';
$string['incomingmailserversettings_desc'] = 'Moodle es capaz de conectarse a servidores IMAP configurados apropiadamente. Usted puede especificar aquí las configuraciones usadas para conectarse a su servidor IMAP.';
$string['invalidrecipientdescription'] = 'El mensaje "{$a->subject}" no pudo autenticarse, porque fue enviado desde una dirección Email diferente a la que está en su perfil de usuario. Para que el mensaje sea autenticado, Usted necesita responder a este mensaje.';
$string['invalidrecipientdescriptionhtml'] = 'El mensaje "{$a->subject}" no pudo autenticarse, porque fue enviado desde una dirección Email diferente a la que está en su perfil de usuario. Para que el mensaje sea autenticado, Usted necesita responder a este mensaje.';
$string['invalidrecipientfinal'] = 'No pudo autenticarse el mensaje que usted envió con el asunto de  "{$a->subject}". Por favor, revise que Usted esté enviando sus mensajes desde la misma cuenta de Email que está en su perfil de Moodle.';
$string['invalid_recipient_handler'] = 'Si se recibe un mensaje válido, pero el remitente no puede ser autenticado, el mensaje es almacenado en el servidor de Email y el usuario es contactado empleando la dirección Email de su perfil de usuario. Al usuario se le da la oportunidad de que conteste el mensaje para confirmar así la autenticidad del mensaje original.

Este manejador procesa estas respuestas.

No es posible deshabilitar la verificación del remitente de este manejador debido a que el usuario podría responder desde una dirección Email incorrecta si su configuración del cliente de Email fuera incorrecta.';
$string['invalid_recipient_handler_name'] = 'Manejador de remitente inválido';
$string['mailbox'] = 'Nombre del buzón';
$string['mailboxconfiguration'] = 'Configuración del buzón';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Configuraciones de Email';
$string['message_handlers'] = 'Manejadores de mensaje';
$string['messageinbound'] = 'Mensaje entrante';
$string['messageinboundenabled'] = 'Habilitar procesamiento de correo entrante';
$string['messageinboundenabled_desc'] = 'El procesamiento de correo entrante debe habilitarse para que los mensaje a enviar tengan la información apropiada.';
$string['messageinboundgeneralconfiguration'] = 'Configuración general';
$string['messageinboundgeneralconfiguration_desc'] = 'El procesamiento de mensaje entrante le permite a Usted recibir y procesar Email dentro de Moodle. Esto tiene aplicaciones como el enviar contestaciones de Email a publicaciones en foros, o añadir archivos a los archivos privados de un usuario.';
$string['messageinboundhost'] = 'Servidor de correo entrante';
$string['messageinboundhostpass'] = 'Contraseña';
$string['messageinboundhostpass_desc'] = 'Esta es la contraseña que su proveedor de servicio le ha proporcionado para ingresar a su cuenta de Email.';
$string['messageinboundhostssl'] = 'Usar SSL';
$string['messageinboundhostssl_desc'] = 'Algunos servidores de Email soportan un nivel adicional de seguridad al encriptar la comunicación entre Moodle y su servidor. Nosotros recomendamos usar esta encriptación SSL si su servidor la soporta.';
$string['messageinboundhosttype'] = 'Tipo de servidor';
$string['messageinboundhostuser'] = 'Nombre_de_usuario';
$string['messageinboundhostuser_desc'] = 'Este es el nombre_de_usuario que su proveedor de servicio le ha proporcionado para ingresar a su cuenta de Email.';
$string['messageinboundmailboxconfiguration_desc'] = 'Cuando se envían los mensajes, se acomodan dentro del formato dirección+datos@ejemplo.com. Para generar direcciones de manera confiable desde Moodle, por favor especifique la dirección que Usted normalmente usaría antes del signo de @, y el dominio que está después del signo de @ de forma separada. Por ejemplo, el nombre del buzón en este ejemplo sería "dirección", y el dominio de E-mail sería  "ejemplo.com". Usted debe de emplear una cuenta de correo dedicada para este propósito  (exclusivamente para esto).';
$string['messageprocessingerror'] = 'Recientemente Usted envió un Email a Moodle con el asunto "{$a->subject}" pero desafortunadamente  Moodle no pudo procesarlo.

Los detalles del error se muestran debajo.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Recientemente Usted envió un Email a Moodle conel asunto "{$a->subject}" pero desafortunadamente  Moodle no pudo procesarlo.</p>
<p>Los detalles del error se muestran debajo.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Moodle no pudo procesar el Email que Usted envió con asunto "{$a->subject}". Se dió el siguiente error: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'Moodle no pudo procesar el Email que Usted envió con asunto "{$a->subject}". Póngase en contacto con su administrador del sistema para más información.';
$string['messageprocessingsuccess'] = '{$a->plain}

Si Usted no desea recibir estas notificaciones en el futuro, Usted puede editar sus preferencias personales de mensajería al abrir {$a->messagepreferencesurl} en su navegador.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Si Usted no desea recibir estas notificaciones en el futuro, Usted puede <a href="{$a->messagepreferencesurl}">editar sus preferencias personales de mensajería</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Mensaje para confirmar que un mensaje entrante vino de Usted';
$string['messageprovider:messageprocessingerror'] = 'Advertir cuando un mensaje entrante no pudo ser procesado';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmación de que un mensaje fue procesado exitosamente';
$string['name'] = 'Nombre';
$string['noencryption'] = 'Apagado - Sin encriptación';
$string['noexpiry'] = 'Sin caducidad';
$string['oldmessagenotfound'] = 'Usted trató de autentificar manualmente un mensaje, pero el mensaje no pudo encontrarse. Esto puede deberse a que ya haya sido procesado, o porque el mensaje expiró.';
$string['oneday'] = 'Un día';
$string['onehour'] = 'Una hora';
$string['oneweek'] = 'Una semana';
$string['oneyear'] = 'Un año';
$string['pluginname'] = 'Configuración de mensaje entrante';
$string['privacy:metadata:coreuserkey'] = 'Las claves del usuario para validar el Email recibido';
$string['privacy:metadata:messagelist'] = 'Una lista de identificadores de mensaje que fallaron validación y requieren autorización adicional.';
$string['privacy:metadata:messagelist:address'] = 'La dirección a la cual fue enviado el Email';
$string['privacy:metadata:messagelist:messageid'] = 'La ID del mensaje';
$string['privacy:metadata:messagelist:timecreated'] = 'El momento cuando fue hecho el registro';
$string['privacy:metadata:messagelist:userid'] = 'La ID del usuario que necesita aprobar el mensaje';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validar dirección del remitente';
$string['ssl'] = 'SSL (Auto-detectar versión de  SSL)';
$string['sslv2'] = 'SSLv2 (Forcar SSL Versión 2)';
$string['sslv3'] = 'SSLv3 (Forcar SSL Versión 3)';
$string['taskcleanup'] = 'Limpieza de Email entrante no-verificado';
$string['taskpickup'] = 'Colecta de Email entrante';
$string['tls'] = 'TLS (TLS; iniciada mediante negociación a nivel de protocolo sobre canal no-encriptado; forma RECOMENDADA de iniciar conexión segura)';
$string['tlsv1'] = 'TLSv1 (conexión directa a servidor TLS versión 1.x)';
$string['validateaddress'] = 'Validar dirección Email del remitente';
$string['validateaddress_help'] = 'Cuando se recibe un mensaje de un usuario, Moodle intenta validar el mensaje al comparar la dirección Email del remitente con la dirección Email en su perfil de usuario.

Si el remitente no coincide, entonces se le manda una notificación al usuario para confirmar que el/ella realmente envió el Email.

Si se deshabilita esta configuración, entonces la dirección Email del remitente no se revisa para nada.';
