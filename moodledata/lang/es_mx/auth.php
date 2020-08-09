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
 * Strings for component 'auth', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugins de autenticación disponibles';
$string['allowaccountssameemail'] = 'Permitir cuentas con el mismo Email';
$string['allowaccountssameemail_desc'] = 'Si se habilita, más de una cuenta de usuario puede compartir la misma dirección Email. Esto puede resultar en riesgos de seguridad o privacidad; por ejemplo, con el Email para confirmación de cambio de contraseña.';
$string['alternatelogin'] = 'Si introduce aquí una URL, se usará como página de ingreso al sitio. La página debería contener un formato cuya propiedad de acción está ajustada a <strong>\'{$a}\'</strong> y devuelve los campos <strong>nombre_de_usuario </strong> y <strong>contraseña</strong>.<br />Procure no introducir una URL incorrecta puesto que hacerlo supondrá su expulsión del sitio.<br />Deje el ajuste en blanco para utilizar la página de acceso por defecto.';
$string['alternateloginurl'] = 'URL de ingreso alternativo';
$string['auth_changepasswordhelp'] = 'Ayuda sobre cambio de contraseña';
$string['auth_changepasswordhelp_expl'] = 'Muestra ayuda a los usuarios que han perdido su contraseña {$a}. Esta opción puede mostrarse como añadidura o en lugar de la <strong>URL de cambio de contraseña</strong> o como un cambio de contraseña interno de Moodle.';
$string['auth_changepasswordurl'] = 'URL para cambio de contraseña';
$string['auth_changepasswordurl_expl'] = 'Especifique la URL a la que enviar a los usuarios que han perdido su contraseña {$a}. Seleccione <strong>No</strong> en la <strong>Página Usar página estándar de cambio de contraseña</strong>.';
$string['auth_changingemailaddress'] = 'Usted ha solicitado un cambio de dirección email, desde {$a->oldemail} a {$a->newemail}. Por razones de seguridad, le hemos enviado un mensaje de email a la nueva dirección para confirmar que usted es el titular. Su nueva dirección será actualizada una vez que abra este mensaje que le acabomos de enviar a esta nueva dirección.';
$string['auth_common_settings'] = 'Ajustes comunes';
$string['auth_data_mapping'] = 'Mapeado de datos';
$string['authenticationoptions'] = 'Opciones de autenticación';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> ISi se habilita, impedirá que los usuarios de Moodle y administradores editar directamente el campo. Use esta opción si Usted está manteniendo estos datos en el sistema de autenticación externo. </p>';
$string['auth_fieldlockfield'] = 'Bloquear valor ({$a})';
$string['auth_fieldlocks'] = 'Bloquear campos de usuario';
$string['auth_fieldlocks_help'] = '<p>Usted puede bloquear los campos de datos del usuario. Esto es útil para sitios donde los datos del usuario son mantenidos por los administradores manualmente al editar los registros de usuarios o subir usuarios empleando la característica de "Subir usuarios". Si Usted bloquea campos que son necesarios para Moodle, asegúrese de que Usted proporciona estos datos al crear cuentas de usuarios, porque de lo contrario las cuentas serán imposibles de usar.</p><p>Considere configurar estos campos a  \'Desbloqueado si está vacío\' para evitar este problema.</p>';
$string['auth_fieldmapping'] = 'Mapeo de datos ({$a})';
$string['authinstructions'] = 'Déjelo vacío para que se muestren las instrucciones por defecto en la página de ingreso al sitio. Si desea proporcionar instrucciones específicas para ingresar al sitio, escríbalas aquí.';
$string['auth_invalidnewemailkey'] = 'Error: Si está intentando confirmar un cambio de dirección email. debe haber cometido un error al copiar la URL que le enviamos por email. Por favor, copie la dirección y pruebe de nuevo.';
$string['authloginviaemail'] = 'Permitir ingresar mediante Email';
$string['authloginviaemail_desc'] = 'Permitirles a los usuarios que usen nombre_de_usuario y dirección de Email (si fueran únicas) para ingresar al sitio.';
$string['auth_multiplehosts'] = 'Es posible especificar múltiples servidores o direcciones (por ej. servidor1.com;servidor2.com;servidor3.com) o (xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'El método de autenticación {$a} no está configurado.';
$string['auth_outofnewemailupdateattempts'] = 'Ha hecho más intentos de los permitidos para actualizar su dirección email. Su solicitud de actualización ha sido cancelada.';
$string['auth_passwordisexpired'] = 'Su contraseña ha caducado. Por favor, cámbiela ahora.';
$string['auth_passwordwillexpire'] = 'Su contraseña expirará en {$a} días ¿Desea cambiar su contraseña ahora?';
$string['auth_remove_delete'] = 'Borrado completo interna';
$string['auth_remove_keep'] = 'Mantener interna';
$string['auth_remove_suspend'] = 'Suspender interna';
$string['auth_remove_user'] = 'Especifique qué hacer con una cuenta de usuario interna durante sincronización masiva cuando el usuario fue eliminado de la fuente externa. Únicamente los usuarios suspendidos son automáticamente restaurados si ellos reaparecen en la fuente externa.';
$string['auth_remove_user_key'] = 'Usuario externo eliminado';
$string['auth_sync_script'] = 'Sincronización de cuenta del usuario';
$string['auth_sync_suspended'] = 'Si se habilita, el atributo suspendido será usado para actualizar el estatus de suspensión de la cuenta del usuario local.';
$string['auth_sync_suspended_key'] = 'Sincronizar estatus de suspensión del usuario local';
$string['auth_updatelocal'] = 'Actualizar datos locales';
$string['auth_updatelocal_expl'] = '<p><b>Actualizar datos locales:</b> Si está activado, el campo será actualizado (con autenticación externa) cada vez que el usuario ingresa o se produce una sincronización de usuarios. Los campos configurados para  actualizarse localmente deberían estar bloqueados.</p>';
$string['auth_updatelocalfield'] = 'Actualizar local ({$a})';
$string['auth_updateremote'] = 'Actualizar datos externos';
$string['auth_updateremote_expl'] = '<p><b>Actualizar datos externos:</b> Si está activado, la autorización externa será actualizada cuando se actualice el registro del usuario. Los campos deberían estar desbloqueados para poder editarlos.</p>';
$string['auth_updateremotefield'] = 'Actualizar externo ({$a})';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> La actualización de datos LDAP externos requiere que usted ajuste los valores \'binddn\' y \'bindpw\' a un usuario con privilegios de edición de todos los registros de usuario. Por el momento, esto no preserva los atributos multi-valor, y eliminará los valores extra durante la actualización. </p>';
$string['auth_user_create'] = 'Habilitar creación por parte del usuario';
$string['auth_user_creation'] = 'Los nuevos usuarios (anónimos) pueden crear cuentas de usuario sobre el código externo de autenticación y confirmar vía correo electrónico. Si usted habilita esto, recuerde también configurar las opciones del módulo específico para la creación de usuario.';
$string['auth_usernameexists'] = 'El nombre_de_usuario seleccionado ya existe. Por favor, elija otro.';
$string['auth_usernotexist'] = 'No se puede actualizar un usuario no existente: {$a}';
$string['auto_add_remote_users'] = 'Añadir automáticamente usuarios remotos';
$string['cannotmapfield'] = 'El campo "{$a->fieldname}" no puede ser mapeado porque su nombre corto "{$a->shortname}" es demasiado largo. Para permitir que sea mapeado, Usted necesita reducir el nombre corto a {$a->charlimit} caracteres. <a href="{$a->link}">Editar campos de perfil de usuario</a>';
$string['changepassword'] = 'Cambiar contraseña URL';
$string['changepasswordhelp'] = 'URL de la página para recuperación de contraseña, que será enviada por Email a los usuarios. Por favor tenga en cuenta que esta configuración no tendrá efecto si se configura una URL para contraseña olvidada en las configuraciones comunes de la autenticación.';
$string['chooseauthmethod'] = 'Escoger un método de autenticación:';
$string['chooseauthmethod_help'] = 'Esta configuración determina el método de autenticación usado cuando ingresa el usuario. Solamente deberían de elegirse plugins de autenticación habilitados, porque de otra manera el usuario podría no poder ingresar. Para bloquear a un usuario y que no pueda ingresar, seleccione "Sin ingreso al sistema".';
$string['createpassword'] = 'Generar contraseña y notificarle al usuario';
$string['createpasswordifneeded'] = 'Crear contraseña si es necesario y enviarla por email';
$string['emailchangecancel'] = 'Cancelar cambio de email';
$string['emailchangepending'] = 'Cambio pendiente. Abra el enlace enviado en {$a->preference_newemail}.';
$string['emailnowexists'] = 'La dirección email que ha intentado asignar a su perfil ha sido asignada a otra persona. Su solicitud de cambio queda cancelada, pero puede intentarlo con otra dirección.';
$string['emailupdate'] = 'Actualizar dirección Email';
$string['emailupdatemessage'] = 'Estimado(a) {$a->fullname},

Ha solicitado un cambio de su dirección Email para su cuenta en {$a->site}. Para confirmar este cambio, vaya por favor a la siguiente dirección de internet.

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'La dirección email del usuario <em>{$a->fullname}</em> ha sido actualizada con éxito a <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmación de actualización de email en {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Las contraseñas deben tener como máximo {$a} caracteres consecutivos idénticos';
$string['errorminpassworddigits'] = 'Las contraseñas deben tener al menos {$a} dígito(s).';
$string['errorminpasswordlength'] = 'Las contraseñas deben tener al menos una longitud de {$a} caracteres.';
$string['errorminpasswordlower'] = 'Las contraseñas deben tener al menos {$a} minúscula(s).';
$string['errorminpasswordnonalphanum'] = 'Las contraseñas deben tener al menos {$a} caracter(es) no-alfanumérico(s) como . $ ? / * - + # @.';
$string['errorminpasswordupper'] = 'Las contraseñas deben tener al menos {$a} MAYÚSCULA(S).';
$string['errorpasswordreused'] = 'Esta contraseña ha sido usada antes, y no está permitido re-utilizarla.';
$string['errorpasswordupdate'] = 'Error actualizando contraseña, la contraseña no ha cambiado';
$string['eventuserloggedin'] = 'El usuario ha ingresado';
$string['eventuserloggedinas'] = 'Usuario ingresado como otro usuario';
$string['eventuserloginfailed'] = 'Falló el ingreso del usuario';
$string['forcechangepassword'] = 'Forzar cambio de contraseña';
$string['forcechangepasswordfirst_help'] = 'Forzar a los usuarios a cambiar la contraseña la primera vez que ingresen a Moodle.';
$string['forcechangepassword_help'] = 'Forzar a los usuarios a cambiar la contraseña la próxima vez que ingresen a Moodle.';
$string['forgottenpassword'] = 'Si escribe aquí una URL, se usará como página de recuperación de la contraseña perdida para este sitio. Esto está pensado para sitios en los que las contraseñas se gestionan totalmente fuera de Moodle. Déjelo en blanco para usar la recuperación por defecto de la contraseña.';
$string['forgottenpasswordurl'] = 'URL contraseña olvidada';
$string['getrecaptchaapi'] = 'Para usar reCAPTCHA Usted necesita obtener una clave API de <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Botón de ingreso para invitados';
$string['incorrectpleasetryagain'] = 'Incorrecto. Por favor, inténtelo de nuevo.';
$string['infilefield'] = 'Campo requerido en el archivo';
$string['informminpassworddigits'] = 'al menos {$a} dígito(s)';
$string['informminpasswordlength'] = 'al menos {$a} caracter(es)';
$string['informminpasswordlower'] = 'al menos {$a} minúscula(s)';
$string['informminpasswordnonalphanum'] = 'al menos {$a} caracter(es) no-alfanumérico(s) como . $ ? / * - + # @';
$string['informminpasswordreuselimit'] = 'Las contraseñas pueden re-utilizarse después de {$a} cambios';
$string['informminpasswordupper'] = 'al menos {$a} MAYÚSCULA(S)';
$string['informpasswordpolicy'] = 'La contraseña debería tener {$a}';
$string['instructions'] = 'Instrucciones';
$string['internal'] = 'Interno';
$string['limitconcurrentlogins'] = 'Limitar ingresos concurrentes';
$string['limitconcurrentlogins_desc'] = 'Si se habilita, se restringe el número de ingresos concurrentes para cada usuario. Se termina la sesión más antigua después de alcanzar el límite. Por favor tenga en cuenta que los usuarios perderán todo su trabajo que no hubieran guardado. Esta configuración no es compatible con los plugins para autenticación con ingreso único (single sign-on = SSO).';
$string['locked'] = 'Bloqueado';
$string['md5'] = 'Encriptación (hash) MD5';
$string['nopasswordchange'] = 'La contraseña no puede cambiarse';
$string['nopasswordchangeforced'] = 'No puede seguir sin cambiar su contraseña, sin embargo no existe ninguna página disponible para cambiarla. Por favor póngase en contacto con su administrador de Moodle.';
$string['noprofileedit'] = 'El perfil no puede editarse';
$string['ntlmsso_attempting'] = 'Intentando ingreso  único (Single Sign On) mediante NTLM...';
$string['ntlmsso_failed'] = 'Falló el ingreso automático; intente con la página de ingreso normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desactivado.';
$string['passwordhandling'] = 'Gestión del campo de contraseña';
$string['plaintext'] = 'Texto plano';
$string['pluginnotenabled'] = 'El Plugin de autenticación \'{$a}\' no está activado.';
$string['pluginnotinstalled'] = 'El plugin de autenticación \'{$a}\' no está instalado';
$string['potentialidps'] = 'Ingrese usando su cuenta en:';
$string['privacy:metadata:userpref:createpassword'] = 'Indica que debería de generarse una contraseña para el usuario';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indica si es que el usuario debería o no de cambiar su contraseña al ingresar al sitio';
$string['privacy:metadata:userpref:loginfailedcount'] = 'El número de veces que el usuario no pudo ingresar al sitio';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'El número de veces que el usuario no pudo ingresar al sitio desde su último ingreso exitoso';
$string['privacy:metadata:userpref:loginfailedlast'] = 'La fecha en la cual fue grabado el último intento fallido de ingreso';
$string['privacy:metadata:userpref:loginlockout'] = 'Si es que la cuenta del usuario está o no bloqueada debido a intentos fallidos para ingresar al sitio, y la fecha en la cual la cuenta fue bloqueada.';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indica si es que una cuenta de usuario nunca debería de estar sujeta a bloqueos';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Cuando se bloquea, el secreto que el usuario debe usar para desbloquear su cuenta';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'El CAPTCHA se utiliza para impedir abusos de programas automáticos. Siga las instrucciones para verificar que Usted es una persona. Esto podría se una casilla a seleccionar, caracteres presentados en una imagen que debe rá ingresar o un conjunto de imágenes entre las cuales elegir..

Si no está seguro de qué son las imágenes, puede intentar conseguir otro CAPTCHA, o un CAPTCHA de audio.';
$string['security_question'] = 'Pregunta de seguridad';
$string['selfregistration'] = 'Registrarse a sí mismo';
$string['selfregistration_help'] = 'Si se emplea un plugin de autenticación, como el auto-registro basado en email, entonces se habilita a los usuarios potenciales a que se registren a sí mismos y creen cuentas. Esto resultará en la posibilidad de que los spammers puedan crear cuentas para usarlas y mandar mensajes a foros, entradas de blogs y otros riesgos de spam. Para evitar este riesgo, el auto-registro debería estar deshabilitado o limitado a los <em>dominios de correo permitidos</em> en la configuración.';
$string['settingmigrationmismatch'] = '¡Se detectó una discrepancia de valores al corregir los nombres de configuración de del plugin! El plugin de autenticación \'{$a->plugin}\' tenía el ajuste \'{$a->setting}\' configurado a \'{$a->legacy}\' debajo del nombre antiguo (legacy) y tenía  \'{$a->current}\' debajo del nombre actual. Este último valor ha sido ajustado como el valor válido, pero Usted debería de revisar y confirmar que es lo esperado.';
$string['sha1'] = 'Hash SHA-1';
$string['showguestlogin'] = 'Puede ocultar o mostrar el botón de ingreso para invitados en la página de ingreso al sitio';
$string['stdchangepassword'] = 'Utilizar Página de cambio de contraseña estándar';
$string['stdchangepassword_expl'] = 'Si el sistema de autenticación externa permite cambios de contraseña en Moodle, seleccione Sí. Este ajuste pasa por alto \'Cambiar contraseña URL\'.';
$string['stdchangepassword_explldap'] = 'NOTA: Se recomienda que utilice LDAP sobre un túnel encriptado SSL (ldaps://) si el servidor LDAP es remoto.';
$string['suspended'] = 'Cuenta suspendida';
$string['suspended_help'] = 'Las cuentas de usuarios suspendidos no pueden entrar al sitio ni usar servicios web, y cualquier mensaje de salida a ellas es descartado.';
$string['testsettings'] = 'Configuraciones de prueba';
$string['testsettingsheading'] = 'Probar configuraciones de autenticación - {$a}';
$string['unlocked'] = 'Desbloqueado';
$string['unlockedifempty'] = 'Desbloqueado si está vacío';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'Al crearse';
$string['update_onlogin'] = 'En cada ingreso';
$string['update_onupdate'] = 'Al actualizar';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() no admite el tipo de usuario seleccionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() no admite el tipo de usuario seleccionado (...aún)';
$string['username'] = 'Nombre_de_usuario';
$string['username_help'] = 'Por favor tenga en cuenta que algunos plugins de autenticación no le permitirán cambiar el nombre_de_usuario.';
