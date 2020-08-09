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
 * Strings for component 'tool_mobile', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Depuración ADOdb está habilitada. Debería de ser deshabilitada en la configuración del plugin de inscripción por base de datos externa o autenticación de base de datos externa.';
$string['androidappid'] = 'Identificador único de App Androide';
$string['androidappid_desc'] = 'Esta configuración puede dejarse como valor por defecto a menos que Usted tenga una App personalizada de Androide.';
$string['apppolicy'] = 'URL de política de App';
$string['apppolicy_help'] = 'La URL de una política para usuarios de la App que está enlistada en la página de Acerca de en la App. Si el campo se deja vacío, en su lugar se usará la URL de la política del sitio.';
$string['apprequired'] = 'Esta funcionalidad solamente está disponible cuando es accesada vía la App Moodle mobile o vía la App  de Escritorio.';
$string['autologinkeygenerationlockout'] = 'La generación de clave de auto-ingreso está bloqueada. Usted necesita esperar 6 minutos entre solicitudes.';
$string['autologinnotallowedtoadmins'] = 'El auto-ingreso no está permitido para los administradores del sitio.';
$string['cachedef_plugininfo'] = 'Esto almacena la lista de plugins con adiciones Mobile (para móviles)';
$string['cachedef_subscriptiondata'] = 'Esto almacena la información de la suscripción de la App Moodle.';
$string['clickheretolaunchtheapp'] = 'Haga clic aquí si la App no se abre automáticamente.';
$string['configmobilecssurl'] = 'Un archivo CSS para personalizar su interfaz para dispositivo móvil';
$string['customlangstrings'] = 'Cadenas personalizadas del idioma';
$string['customlangstrings_desc'] = 'Las palabras y las frases mostradas en la App pueden ser personalizadas aquí. Ingrese cada cadena de caracteres personalizada en una línea nueva con el formato: identificador_de_la_cadena (string identifier), cadena de idioma personalizada y código del idioma, separados por caracteres de barra vertical |. Por ejemplo:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es_mx
</pre>
Para una lista completa de los identificadores_de_cadena, vea la documentación.';
$string['custommenuitems'] = 'Ítems de menú personalizado';
$string['custommenuitems_desc'] = 'Se pueden añadir ítems adicionales al menú principal de la App al especificarlos aquí. Ingrese cada ítem de menú personalizado en una línea nueva con el formato: texto del ítem, URL del enlace, método de apertura del enlace y código de idioma (opcional, para mostrarle el ítem solamente a usuarios del idioma especificado), separados por caracteres de barra vertical | .

Los métodos para apertura del enlace son: app (para enlazar hacia una actividad soportada por la App), inappbrowser (para abrir un enlace en un navegador sin abandonar la App), browser (para abrir el enlace en el navegador por defecto del dispositivo afuera de la App) y embedded (para mostrar el enlace adentro de un iframe en una página nueva en la App).

Cuando faltan ítems en una traducción para un idioma dado, se usarán otros idiomas como plan B a menos que  "_only" sea añadido al código de idioma.


Por ejemplo:
<pre>
Ayuda de la App | https://someurl.xyz/help | inappbrowser
Mis calificaciones en inglés | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
You will only see this in English|https://someurl.xyz/english|browser|en_only
</pre>
</pre>';
$string['darkmode'] = 'Modo oscuro';
$string['disabledfeatures'] = 'Características deshabilitadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí las características que Usted quiere deshabilitar en la App Mobile para su sitio. Por favor tenga en cuenta que algunas características enlistadas aquí podrían ya estar deshabilitadas vía otras configuraciones del sitio. Usted tendrá que salirse del sitio e ingresar al sitio nuevamente en la App para ver los cambios.';
$string['displayerrorswarning'] = 'Mostrar mensajes de depuración (debugdisplay) está habilitado. debería de ser deshabilitado.';
$string['downloadcourse'] = 'Descargar curso';
$string['downloadcourses'] = 'Descargar cursos';
$string['enablesmartappbanners'] = 'Habilitar Banners de App';
$string['enablesmartappbanners_desc'] = 'Si se habilita, Esto mostrará un banner promoviendo la App  Mobile cuando se acceda al sitio usando un navegador Mobile (móvil).';
$string['forcedurlscheme'] = 'Si Usted quiere permitir que solamente se abra su App personalizada con su marca mediante una ventana del navegador, entonces especifique su esquema de URL aquí. Si desea permitir solamente la App oficial, entonces configure el valor predeterminado. Deje el campo vacío si desea permitir cualquier App.';
$string['forcedurlscheme_key'] = 'Esquema URL';
$string['forcelogout'] = 'Forzar salida';
$string['forcelogout_desc'] = 'Si se habilita, la opción de la App \'Cambiar sitio\' es remplazada por \'Salir\'. Esto resulta en que el usuario es sacado por completo del sitio. Los usuarios deberán entonces re-ingresar sus contraseñas la siguiente vez que deseen acceder al sitio.';
$string['getmoodleonyourmobile'] = 'Obtener la App Mobile';
$string['h5poffline'] = 'Ver contenido H5P fuera de línea';
$string['httpsrequired'] = 'Se requiere HTTPS';
$string['insecurealgorithmwarning'] = 'Parece que el certificado HTTPS usa un algoritmo inseguro para firmar (SHA-1). Por favor intente actualizar el certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que la cadena del certificado es inválida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que el certificado HTTPS para el sitio ha expirado.';
$string['invalidcertificatestartdatewarning'] = 'Parece que el certificado HTTPS para el sitio todavía no es válido (con una fecha de inicio en eel futuro).';
$string['invalidprivatetoken'] = 'Ficha (token) privada inválida. El token no debería de estar vacío ni pasado mediante parámetro GET.';
$string['invaliduserquotawarning'] = 'La cuota del usuario (userquota) está configurada a un número inválido. Debería de configurarse a un número válido (un valor entero) en las Configuraciones de seguridad del sitio.';
$string['iosappid'] = 'Identificador único de App iOS';
$string['iosappid_desc'] = 'Usted solamente necesita cambiar este valor si Usted tiene una App iOS personalizada';
$string['loginintheapp'] = 'Via la App';
$string['logininthebrowser'] = 'Via una ventana de navegador (para plugins SSO)';
$string['loginintheembeddedbrowser'] = 'Via un navegador incrustado (para plugins SSO)';
$string['mainmenu'] = 'Menú principal';
$string['minimumversion'] = 'Si está especificada una versión de la App (3.8.0 o superior), a cualquier usuario que esté usando una versiónanterior de la app se le pedirá que actualice su app antes de permitirle el acceso al sitio.';
$string['minimumversion_key'] = 'Versión mínima de App requerida';
$string['mobileapp'] = 'App Mobile';
$string['mobileappconnected'] = 'App Mobile conectada';
$string['mobileappearance'] = 'Apariencia de Mobile';
$string['mobileappenabled'] = 'Este sitio tiene habilitado el acceso por App Mobile.<br /><a href="{$a}">Descargue la App Mobile</a>.';
$string['mobileappsubscription'] = 'Suscripción de Moodle App';
$string['mobileauthentication'] = 'Autenticación de Mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Características de Mobile';
$string['mobilenotificationsdisabledwarning'] = 'Las notificaciones Mobile no están habilitadas. Deberían de ser habilitadas en Configuraciones de Notificación.';
$string['mobilesettings'] = 'Configuraciones de Mobile';
$string['moodleappsportalfeatureswarning'] = 'Por favor tenga en cuenta que algunas características podrían estar restringidas dependiendo de su suscripción a la App Moodle . Para los detalles, visite el <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notifications'] = 'Notificaciones';
$string['notificationsactivedevices'] = 'Dispositivos activos';
$string['notificationscurrentactivedevices'] = 'Dispositivos recibiendo notificaciones este mes';
$string['notificationsignorednotifications'] = 'Notificaciones no enviadas';
$string['notificationslimitreached'] = 'El límite mensual de dispositivos del usuario activos ha sido excedido. Las notificaciones no serán enviadas para algunos usuarios. Es recomendable que mejore su plan del App en el <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notificationsmissingwarning'] = 'Las estadísticas de notificaciones de Moodle app no se pudieron recuperar. Esto muy probablemente es porque aun no se han habilitado las notificaciones mobile en el sitio. Usted puede habilitarlas en la Administración del Sitio  / Mensajería / Mobile.';
$string['notificationsnewdevices'] = 'Nuevos dispositivos';
$string['notificationsseemore'] = 'Nota: las estadísticas de uso de Moodle app no son calculadas en tiempo  real. Para acceder a estadísticas más detalladas, incluyendo datos de meses anteriores, por favor ingrese al  <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['notificationssentnotifications'] = 'Notificaciones enviadas';
$string['oauth2identityproviders'] = 'Proveedores de identidad OAuth 2';
$string['offlineuse'] = 'Uso fuera-de-línea';
$string['openusingembeddedbrowser'] = 'Abrir usando navegador incrustado';
$string['pluginname'] = 'Herramientas de App Moodle';
$string['pluginnotenabledorconfigured'] = 'Plugin no habilitado o configurado';
$string['privacy:metadata:core_userkey'] = 'Claves de usuario usadas para crear clave de auto-ingreso para el usuario actual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La fecha de la última solicitud de clave para auto-ingreso. Se requieren 6 minutos entre cada solicitud.';
$string['qrcodedisabled'] = 'Acceso vía código QR deshabilitado';
$string['qrcodeformobileappaccess'] = 'Código QR para acceso por dispositivo móvil';
$string['qrcodeformobileapploginabout'] = 'Escanee el código QR con su APP de dispositivo móvil y usted será ingresado automáticamente. El código QR expirará en {$a} minutos.';
$string['qrcodeformobileappurlabout'] = 'Escanee el código QR con su APP de dispositivo móvil para ingresar la URL del sitio en su App.';
$string['qrcodetype'] = 'Acceso por código QR';
$string['qrcodetype_desc'] = 'Un código QR será proporcionado para usuarios de App mobile para ser escaneado y así, o se ingresa automáticamente la URL del sitio o se es ingresado al sitio automáticamente sin tener que introducir sus credenciales.';
$string['qrcodetypelogin'] = 'código QR con ingreso automático';
$string['qrcodetypeurl'] = 'código QR con URL del sitio';
$string['qrsiteadminsnotallowed'] = 'Por razones de seguridad, el ingreso por código QR no está permitido para administradores del sitio o si usted está ingresado como otro usuario.';
$string['readingthisemailgettheapp'] = '¿Está leyendo  esto en un E-mail? <a href="{$a}">Descargar la App Mobile y recibir notificaciones en su dispositivo móvil</a>.';
$string['remoteaddons'] = 'Complementos (add-ons) remotos';
$string['responsivemainmenuitems'] = 'Ítems de menú responsivo';
$string['scanqrcode'] = 'Escanear código QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parace que el certificado HTTPS es auto-firmado o no-confiable. La App Mobile solamente funcianará con sitios confiables.';
$string['setuplink'] = 'Página para descargar App';
$string['setuplink_desc'] = 'URL de página con opciones para descargar la App Mobile desde la App Store y Google Play.. El enlace a la página para descargar la App es mostrado en el pie de la página y en el perfil del usuario. Déjelo vacío para no mostrar un enlace.';
$string['smartappbanners'] = 'Banners de App';
$string['subscription'] = 'Suscripción';
$string['subscriptioncreated'] = 'Fecha de inicio';
$string['subscriptionerrorrequest'] = 'Hubo un error inesperado al intentar recuperar la información de su suscripción de la App Moodle.';
$string['subscriptionexpiration'] = 'Fecha de expiración';
$string['subscriptionfeaturenotapplied'] = 'Esta característica está configurada en su sitio, pero no está incluida en su plan de App Moodle. Por lo tanto, esta configuración no tendrá efecto.';
$string['subscriptionfeatures'] = 'Características de suscripción';
$string['subscriptionlimitsurpassed'] = 'Límites de suscripción excedidos';
$string['subscriptionregister'] = 'Para detalles de los varios planes de App, y para acceder a estadísticas de uso de App Mobile, por favor visite el  <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['subscriptionsseemore'] = 'Nota: La información mostrada no está actualizada en tiempo real. Usted podría necesitar salirse y volver a entrar para ver actualizaciones. Para información sobre como mejorar su plan de la App, por favor ingrese al  <a href="{$a}" target="_blank">Moodle Apps Portal</a>.';
$string['typeoflogin'] = 'Tipo de ingreso';
$string['typeoflogin_desc'] = 'Si el sitio usa un método de autenticación SSO (Single Sign On = Ingreso Único), entonces seleccione via una ventana del navegador o via un navegador incrustado. Un navegador incrustado proporciona una  mejor experiencia del usuario, aunque no funciona con todos los plugins SSO.';
$string['viewqrcode'] = 'Ver código QR';
