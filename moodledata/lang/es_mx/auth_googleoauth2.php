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
 * Strings for component 'auth_googleoauth2', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_googleoauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid'] = 'Su Secreto/Clave de la App son generados en la <a href="https://www.dropbox.com/developers/apps" target="_blank">Dropbox app console</a>.
Escriba las siguientes configuraciones al crear una aplicación (tenga en cuenta que Dropbox solamente soporta URL de tipo https, por lo que su sitio Moodle debe de soportar https):
<br/>App website: {$a->siteurl}
<br/>Redirect URIs: {$a->callbackurl}';
$string['auth_dropboxclientid_key'] = 'Clave App Ddropbox';
$string['auth_dropboxclientsecret'] = '';
$string['auth_dropboxclientsecret_key'] = 'Secreto de App Dropbox';
$string['auth_facebookclientid'] = 'Su Secreto/ID de la App puede generarse en su <a href="https://developers.facebook.com/apps/" target="_blank">Facebook developer page</a>:
<br/>\'\'Add a new app > Website > Enter your site name as app name > Create new facebook app ID > Enter the Site URL - no need to enter Mobile URL >\'\'
En la página de confirmación, busque el enlace hacia "Skip to Developer Dashboard"  > en el tablero (dashboard) de la App Usted deberá de encontrar la ID/secreto > Settings > Advanced > escriba las URIs de redireccción OAuth válidas
<br/>Site URL: {$a->siteurl}
<br/>App domains: {$a->sitedomain}
<br/>Valid OAuth redirect URIs: {$a->callbackurl}';
$string['auth_facebookclientid_key'] = 'ID de Facebook App';
$string['auth_facebookclientsecret'] = '';
$string['auth_facebookclientsecret_key'] = 'Secreto de Facebook App';
$string['auth_githubclientid'] = 'Su ID/Secreto del cliente puede generarse en su página <a href="https://github.com/settings/applications/new" target="_blank">Github register application page</a>:
<br/>Homepage URL: {$a->siteurl}
<br/>Authorization callback URL: {$a->callbackurl}';
$string['auth_githubclientid_key'] = 'ID del cliente Github';
$string['auth_githubclientsecret'] = '';
$string['auth_githubclientsecret_key'] = 'Secreto del cliente Github';
$string['auth_googleclientid'] = 'Su ID/Secreto del cliente puede generarse en la  <a href="https://code.google.com/apis/console" target="_blank">Google console API</a>:
<br/>
Project > APIS & AUTH > Credentials > Create new Client ID > Web application
<br/>
Authorized Javascript origins: {$a->jsorigins}
<br/>
Authorized Redirect URI: {$a->redirecturls}
<br/>
Usted también necesitará <strong>habilitar la API de Google+ (\'\'enable the "Google+ API\'\')"</strong> en Project > APIS & AUTH > APIs';
$string['auth_googleclientid_key'] = 'ID de cliente de Google';
$string['auth_googleclientsecret'] = '';
$string['auth_googleclientsecret_key'] = 'Secreto de Cliente de Google';
$string['auth_googleipinfodbkey'] = 'IPinfoDB es un servicio que le permite encontrar de qué país  y ciudad es su visitante.
Esta configuración es opcional. Usted puede suscribirse a  <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> para obtener una clave gratuita.<br/>
Website: {$a->website}';
$string['auth_googleipinfodbkey_key'] = 'Clave IPinfoDB';
$string['auth_googleoauth2description'] = 'Permitirle a un usuario conectarse al sitio con un provedor de autenticación externo: Google/Facebook/Windows Live.
Se crea una cuenta nueva la priomeravez que el usuario se conecta con un provedor de autenticación.
Para impedir la creación de cuenta  (configuración administrativa de authpreventaccountcreation) al autenticarse <b>debe de </b> desactivarse.';
$string['auth_googlesettings'] = 'Configuraciones';
$string['auth_linkedinclientid'] = 'Sus claves de API/Secreto pueden generarse en su <a href="https://www.linkedin.com/secure/developer" target="_blank">Linkedin register application page</a>:
<br/>Website URL: {$a->siteurl}
<br/>OAuth 2.0 Accept Redirect URL: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'Clave API de LinkEdln';
$string['auth_linkedinclientsecret'] = '';
$string['auth_linkedinclientsecret_key'] = 'Clave Secreta de LinkEdln';
$string['auth_microsoftclientid'] = 'Su Secreto/ID del cliente puede ser generado en <a href="https://apps.dev.microsoft.com/" target="_blank">Microsoft Application Registration Portal</a>:
<br />Redirect URI: {$a->callbackurl}';
$string['auth_microsoftclientid_key'] = 'ID de Aplicación Microsoft v2';
$string['auth_microsoftclientsecret'] = '';
$string['auth_microsoftclientsecret_key'] = 'Secreto de Aplicación de Microsoft v2';
$string['auth_sign-in_with'] = 'Ingresar con {$a->providername}';
$string['couldnotauthenticate'] = 'Falló la autenticación - Por favor intente ingresar nuevamente.';
$string['couldnotauthenticateuserlogin'] = 'Error del método de autenticación.<br/>
Por favor, intente ingresarnuevamente con su nombre_De_usuario y contraseña.<br/>
<br/>
<a href="{$a->loginpage}">Intentar nuevamente</a>.<br/>
<a href="{$a->forgotpass}">¿Olvidó su contraseña</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'El provedor de autenticación nos envió un error de comunicación. Por favor trate de entrar de nuevo.';
$string['emailaddressmustbeverified'] = 'Su dirección email no es verificada por el método de autentificación que Usted seleccionó. Posiblemente se le olvidó a Usted activar el enlace para "verificar dirección Email" que le enviaron Google o Facebook durante la suscripción a su servicio.';
$string['faileduserdetails'] = 'El sitio tuvo éxito al conectarse al provedor seleccionado, pero falló al recuperar sus datos de usuario. Si Usted está usando Google, revise que su administrador del sitio ha habilitado la API de Google+ en la \'Google Developer Console\'; esta es la causa más común para este error.';
$string['microsoft_failure'] = 'No se recibió un código de autorización de los servidores Microsoft.';
$string['moreproviderlink'] = 'Entrar con otro servicio';
$string['noaccountyet'] = 'Usted aun no tiene permiso para usar el sitio. Por favor, contacte al administrador y pídale que active su cuenta.';
$string['othermoodle'] = 'Otra autenticación Moodle';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Ingresar con {$a}';
$string['stattitle'] = 'Estadísticas de ingreso para los últimos {$a->periodindays} días (comenzando desde el momento de la instalación/actualización del plugin)';
$string['supportmaintenance'] = 'A partir de Moodle 3.3, Oauth2 será soportado en el núcleo de Moodle. Nosotros recomendamos encarecidamente que actualice a Moodle 3.3 y que use el/los plugin(s) del núcleo de autenticación de Oauth 2. Este plugin no es usado por el mantenedor, por lo que cuando ocurra un problema crítico Usted necesita confiar en la comunidad para encontrarle una solución. Un problema similar que ocurra en el núcleo de Moodle es muy probable que sea resuelto mucho más rápidamente por el Cuartel General de Moodle. Por favor, entienda que Usted está empleando un plugin de terceros para gestionar su autenticación de usuarios. Cuando ocurren problemas con un plugin de autenticación, nunca son leves.';
$string['unknownfirstname'] = 'Nombre(s) desconocido(s)';
$string['unknownlastname'] = 'Apellido(s) desconocido(s)';
