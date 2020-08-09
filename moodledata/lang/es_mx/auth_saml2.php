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
 * Strings for component 'auth_saml2', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   auth_saml2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterlogout'] = 'URL de salida alternativa';
$string['alterlogout_help'] = 'La URL para redireccionar a un usuario después de agotar todos los mecanismos internos para salida del sitio';
$string['anyauth'] = 'Permitido cualquier tipo de autenticación';
$string['anyauth_help'] = 'Si: ¿Permitir ingreso por SAML a todos los usuarios? NO: solamente los usuarios quienes tengan SAML2 como su tipo.';
$string['auth_data_mapping'] = 'MApeo de datos';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> Si se habilita, le impedirá a usuarios y admins de Moodle el editar directamente el campo. Use esta opción si Usted está manteniendo estos datos en el sistema de autentificación externo. </p>';
$string['auth_fieldlockfield'] = 'Bloquear valor ({$a})';
$string['auth_fieldlocks'] = 'Bloquear campos de usuario';
$string['auth_fieldmapping'] = 'Mapeo de datos ({$a})';
$string['auth_saml2description'] = 'Autenticar con un SAML2 IdP';
$string['auth_updatelocalfield'] = 'Actualizar local ({$a})';
$string['auth_updateremotefield'] = 'Actualizar externo ({$a})';
$string['autocreate'] = 'Auto crear usuarios';
$string['autocreate_help'] = 'Si los usuarios están en el idP pero no en Moodle, crear una cuenta Moodle.';
$string['availableidps'] = 'Gestionar IdPs disponibles';
$string['cannotmapfield'] = 'Colisión de mapeo detectada - dos campos mapean al mismo ítem de calificación {$a}';
$string['certificate'] = 'Regenerar certificado';
$string['certificatedetails'] = 'Detalles del certificado';
$string['certificatedetailshelp'] = '<h1>Contenidos del certificado público SAML2 auto generado</h1>
<p>La ruta para el cert está aquí:</p>';
$string['certificate_help'] = 'Regenerar la Clave Privada y Certificado usados por este  SP. | <a href=\'{$a}\'>Ver certificado SP</a>';
$string['certificatelock'] = 'Bloquear certificado';
$string['certificatelock_help'] = 'Bloquear el certificado impedirá que sean sobre-escritos una vez generados.';
$string['certificatelock_locked'] = 'El certificado está bloqueado';
$string['certificatelock_warning'] = 'Advertencia: Usted está a punto de bloquear certificados- ¿Está Usted seguro de querer hacer esto?';
$string['commonname'] = 'Nombre común';
$string['countryname'] = 'País';
$string['debug'] = 'depuración (debugging)';
$string['debug_help'] = 'Exto añade depuración (debugging) extra a la bitácora normal de Moodle | <a href=\'{$a}\'>Ver configuración SSP</a></p>';
$string['duallogin'] = 'Ingreso dual';
$string['duallogin_help'] = '<p>Si se activa, entonces los usuarios verán ambos: botón para ingreso manual y para SAML. Si se desactiva, ellos siempre serán llevados directamente a la página de ingreso IdP.</p>
<p>Si es pasiva, entonces los usuarios que ya estén autenticados dentro del IDP serán ingresados automáticamente, de lo contrario serán enviados a la página para ingreso de Moodle.</p>
<p>Si se desactiva, entonces los administradores todavía pueden ver la página de ingreso manual mediante /login/index.php?saml=off</p>
<p>Si se activa, entonces las páginas externas pueden enlazar profundo adentro de Moodle usando SAML, por ejemplo /course/view.php?id=45&saml=on</p>';
$string['errorparsingxml'] = 'Error al analizar XML: {$a}';
$string['exception'] = 'Excepción SAML2: {$a}';
$string['expirydays'] = 'Caducidad en días';
$string['idpattr'] = 'Mapeando IdP';
$string['idpattr_help'] = '¿Cual atributo IdP debería ser apareado contra un campo de usuario de Moodle?';
$string['idpmetadata'] = 'XML o URL de metadatos IdP';
$string['idpmetadata_badurl'] = 'La URL no regresó ningunos datos';
$string['idpmetadata_help'] = 'Para usar múltiples IdPs ingresar cada URL de metadatos públicos en una nueva línea.<br/>Para anular un nombre, ponga texto antes del http, por ejemplo "Nombre IdP Forzado http://ssp.local/simplesaml/saml2/idp/metadata.php"';
$string['idpmetadata_invalid'] = 'El  IdP XML no es válido';
$string['idpmetadata_noentityid'] = 'El IdP XML no tiene entityID';
$string['idpmetadatarefresh'] = 'Refresacar metadatos IdP';
$string['idpmetadatarefresh_help'] = 'Correr un trabajo agendado para actualizar metadatos IdP desde URL de metadatos IdP';
$string['idpname'] = 'Anulación de nombre IdP';
$string['idpnamedefault'] = 'Ingresar mediante SAML2';
$string['idpnamedefault_varaible'] = 'Ingresar via SAML2 ({$a})';
$string['idpname_help'] = 'por ejemplo myUNI - esto es detectado por los metadatos y se mostrará en la página para ingreso dual (si estuviera habilitada)';
$string['localityname'] = 'Localidad';
$string['locked'] = 'Bloqueado';
$string['logdir'] = 'Directorio de bitácora';
$string['logdirdefault'] = '/tmp/';
$string['logdir_help'] = 'El directorio de bitácora a donde escribirá SSPHP la salida de bitácora; el archivo se llamará simplesamlphp.log';
$string['logtofile'] = 'Habilitar grabar bitácoras a archivo';
$string['logtofile_help'] = 'El activar esto redirigirá la salida de bitácora SSPHP hacia un archivo en el logdir (directorio_de_bitácoras)';
$string['mdlattr'] = 'Mapeando Moodle';
$string['mdlattr_help'] = '¡A cual campo de usuario de Moodle debería de aparejarse el atributo IdP?';
$string['metadatafetchfailed'] = 'Falló búsqueda de metadatos: {$a}';
$string['metadatafetchfailedstatus'] = 'Falló búsqueda de metadatos: Código de estatus {$a}';
$string['metadatafetchfailedunknown'] = 'Falló búsqueda de metadatos: Error desconocido de cURL';
$string['multiidpbuttons'] = 'Botones con íconos';
$string['multiidpdisplay'] = 'Tipo de visualización IdP múltiple';
$string['multiidpdropdown'] = 'Lista desplegable';
$string['nameidasattrib'] = 'Exponer NameID como atributo';
$string['nameidasattrib_help'] = 'La solicitud NameID será expuesta a SSPHP como un atributo llamado nameid';
$string['nameidpolicy'] = 'Política NameID';
$string['nameidpolicy_help'] = '';
$string['noattribute'] = 'Usted ha ingresado exitosamente, pero no pudimos encontrar su atributo \'{$a}\' para asociarlo a Usted con una cuenta en Moodle.';
$string['nouser'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero no tiene una cuenta en Moodle.';
$string['nullprivatecert'] = 'Falló la creación de Certificado Privado.';
$string['nullpubliccert'] = 'Falló la creación de Certificado Público..';
$string['organizationalunitname'] = 'Unidad Organizacional';
$string['organizationname'] = 'Organización';
$string['passivemode'] = 'Modo pasivo';
$string['phone1'] = 'Teléfono';
$string['phone2'] = 'Teléfono móvil';
$string['pluginname'] = 'SAML2';
$string['privacy:no_data_reason'] = 'El plugin de autenticación Saml2 no almacena ningún dato personal.';
$string['regenerate_submit'] = 'Regenerar';
$string['rememberidp'] = 'Recordar servicio para ingresar al sitio';
$string['required'] = 'Este campo es necesario';
$string['requireint'] = 'Este campo es necesario y deb ser un número entero positivo';
$string['sha1'] = 'SHA1 antiguo (Peligroso)';
$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';
$string['showidplink'] = 'Mostrar enlace IdP';
$string['showidplink_help'] = 'Esto mostrará el enlace IdP cuando el sitio está configurado.';
$string['signaturealgorithm'] = 'Algoritmo de firma';
$string['spmetadata'] = 'Metadatos SP';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Ver Metadatos del Provedor de Servicios (SP)</a> | <a href=\'{$a}?download=1\'>Descargar Metadatos del SP</a>
<p>Es posible que Usted necesite darle esto al administrador IdP para que lo ponga en la lista blanca.</p>';
$string['spmetadatasign'] = 'Firma de Metadatos SP';
$string['spmetadatasign_help'] = 'Firmar los Metadatos SP.';
$string['sspversion'] = 'Versión de SimpleSAMLphp';
$string['stateorprovincename'] = 'Estado o Provincia';
$string['suspendeduser'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero su cuenta ha sido suspendida en Moodle.';
$string['taskmetadatarefresh'] = 'Trabajo de refresco de metadatos';
$string['test_auth'] = '<a href="{$a}">Probar isAuthenticated y el ingreso</a>';
$string['test_auth_button_login'] = 'Ingreso IdP';
$string['test_auth_button_logout'] = 'Salida IdP';
$string['test_auth_str'] = 'Probar isAuthenticated e Ingreso';
$string['test_passive'] = '<a href="{$a}">Probar usando isPassive</a>';
$string['test_passive_str'] = 'Probar usando isPassive';
$string['tolower'] = 'Minúscula';
$string['tolower_help'] = '¿Aplicar minúsculas a atributo IdP antes de coincidir?';
$string['unlocked'] = 'Des-bloqueado';
$string['unlockedifempty'] = 'Desbloqueado si vacío';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'En creación';
$string['update_onlogin'] = 'En cada ingreso';
$string['update_onupdate'] = 'En actualización';
$string['wrongauth'] = 'Usted ha ingresado exitosamente como \'{$a}\' pero no está autorizado a acceder a Moodle.';
