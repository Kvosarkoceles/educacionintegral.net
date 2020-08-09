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
 * Strings for component 'quizaccess_seb', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   quizaccess_seb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Añadir nueva plantilla';
$string['allowedbrowserkeysdistinct'] = 'Las claves deben ser todas diferentes.';
$string['allowedbrowserkeyssyntax'] = 'Una clave debería ser una cadena de caracteres hex de 64 caracteres.';
$string['cachedef_config'] = 'Caché config SEB';
$string['cachedef_configkey'] = 'Caché clave config SEB';
$string['cachedef_quizsettings'] = 'Caché configuraciones examen SEB';
$string['cantdelete'] = 'La plantilla no puede ser eliminada porque ha sido usada para uno o más exámenes.';
$string['cantedit'] = 'La plantilla no puede ser editada porque ha sido usada para uno o más exámenes.';
$string['clientrequiresseb'] = 'Este examen ha sido configurado para usar Safe Exam Browser con configuración del cliente.';
$string['confirmtemplateremovalquestion'] = '¿Está seguro de querer eliminar esta plantilla?';
$string['confirmtemplateremovaltitle'] = '¿Confirmar remoción de plantilla?';
$string['conflictingsettings'] = 'Usted no tiene permisos para actualizar las configuraciones existentes del Safe Exam Browser.';
$string['content'] = 'Plantilla';
$string['description'] = 'Descripción';
$string['disabledsettings'] = 'Configuraciones deshabilitadas';
$string['disabledsettings_help'] = 'Las configuraciones del examen con Safe Exam Browser no pueden ser actualizadas si hay uno o más intentos de examen existentes. Para re-habilitar las configuraciones, todos los intentos del examen deben ser eliminados primeramente.';
$string['downloadsebconfig'] = 'Descargar archivo de configuración de SEB';
$string['duplicatetemplate'] = 'Ya existe una plantilla con el mismo nombre.';
$string['edittemplate'] = 'Editar plantilla';
$string['enabled'] = 'Habilitado';
$string['event:accessprevented'] = 'El acceso al examen fue impedido';
$string['event:templatecreated'] = 'Plantilla SEB fue creada';
$string['event:templatedeleted'] = 'Plantilla SEB fue eliminada';
$string['event:templatedisabled'] = 'Plantilla SEB fue deshabilitada';
$string['event:templateenabled'] = 'Plantilla SEB fue habilitada';
$string['event:templateupdated'] = 'Plantilla SEB fue actualizada';
$string['exitsebbutton'] = 'Salir del Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Subir archivo de configuración del Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Por favor suba su propio archivo de configuración del Safe Exam Browser para este examen.';
$string['filenotpresent'] = 'Por favor suba un archivo de configuración del Safe Exam Browser';
$string['fileparsefailed'] = 'El archivo subido no pudo ser guardado como un archivo de configuración del Safe Exam Browser.';
$string['httplinkbutton'] = 'Descargar configuración';
$string['invalid_browser_key'] = 'Clave de navegador SEB inválida';
$string['invalid_config_key'] = 'Clave de configuración de SEB inválida';
$string['invalidkeys'] = 'La clave de configuración o la clave de examen del navegador no pudieron ser validadas. Por favor asegúrese de que esté usando el Safe Exam Browser con el archivo de configuración correcto.';
$string['invalidtemplate'] = 'Plantilla de configuración de SEB inválida';
$string['managetemplates'] = 'Gestionar plantillas';
$string['manage_templates'] = 'Platillas de Safe Exam Browser';
$string['missingrequiredsettings'] = 'Los ajustes de configuración no proporcionaron todos los valores requeridos.';
$string['name'] = 'Nombre';
$string['newtemplate'] = 'Nueva plantilla';
$string['noconfigfilefound'] = 'No se pudo encontrar archivo de configuración del Safe Exam Browser para el examen con cmid: {$a}';
$string['noconfigfound'] = 'No se pudo encontrar configuración del Safe Exam Browser para el examen con cmid: {$a}';
$string['notemplate'] = 'Sin plantillas';
$string['not_seb'] = 'No se está usando navegador de Safe Exam Browser.';
$string['passwordnotset'] = 'Las configuraciones actuales requieren que los exámenes usen el Safe Exam Browser para tener una contraseña de examen configurada.';
$string['pluginname'] = 'Reglas de acceso para Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Configuraciones de Safe Exam Browser para un examen. Esto incluye la ID del último usuario para crear o modificar las configuraciones.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID del examen para el cual existe la configuración.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Hora UNIX cuando fue creada la configuración.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Hora UNIX cuando fue modificada por última vez la configuración.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID del usuario que creó o configuró por última vez las configuraciones.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Configuraciones de plantilla de Safe Exam Browser. Esto incluye la ID del último usuario que creó o modificó la plantilla.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Hora UNIX de cuando fue creada la plantilla.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Hora UNIX de cuando fue modificda por última vez la plantilla.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'D del  usuario que creó o modificó la plantilla por última vez.';
$string['quizsettings'] = 'Configuraciones del examen';
$string['restoredfrom'] = '{$a->name} (restaurado via cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser (Navegador de Examen Seguro)';
$string['seb_activateurlfiltering'] = 'Habilitar filtrado de URL';
$string['seb_activateurlfiltering_help'] = 'Si se habilita, las URLs serán filtradas cuando se carguen páginas web. El filtro configurado debe estar definido debajo.';
$string['seb_allowedbrowserexamkeys'] = 'Claves del examen permitidas para el navegador';
$string['seb_allowedbrowserexamkeys_help'] = 'En este campo puede ingresar las Claves del Examen permitidas para las versiones del Safe Exam Browser  que tienen permitido acceder a este examen. Si no se ingresan claves, entonces no se revisan las Claves de Examen del Navegador.';
$string['seb_allowreloadinexam'] = 'Habilitar re-cargar en examen';
$string['seb_allowreloadinexam_help'] = 'Si se habilita, la re-carga de página es permitida (botón re-cargar) en la barra de trabajo del SEB, barra de herramienta del navegador, menú deslizador lateral de iOS, atajo de teclado F5/cmd+R). Tenga en cuenta que puede romperse el cacheo fuera de línea si un usuario intenta re-cargar una página sin conexión a internet.';
$string['seb_allowspellchecking'] = 'Habilitar revisión de ortografía';
$string['seb_allowspellchecking_help'] = 'Si se habilita, se permitirá la revisión de ortografía en el SEB';
$string['seb_allowuserquitseb'] = 'Habilitar abandonar SEB';
$string['seb_allowuserquitseb_help'] = 'Si se habilita, los usuarios pueden abandonar SEB con el botón "Abandonar" en la barra de trabajo del  SEB, o al presionar las teclas Ctrl-Q o al hacer clic en el botón para cerrar ventana del navegador principal.';
$string['seb:bypassseb'] = 'Saltar el requisito para ver examen en Safe Exam Browser';
$string['sebdownloadbutton'] = 'Descargar Safe Exam Browser';
$string['seb_enableaudiocontrol'] = 'Habilitar controles de audio';
$string['seb_enableaudiocontrol_help'] = 'Si se activa, el ícono para control del audio es mostrado en la barra de trabajo del SEB.';
$string['seb_expressionsallowed'] = 'Expresiones permitidas';
$string['seb_expressionsallowed_help'] = 'Un campo de texto que contiene las expresiones de filtrado permitidas para las URLs permitidas. El uso del caracter del comodín \'\\*\' es posible. Ejemplos de expresiones: \'ejemplo.com\' o \'ejemplo.com/cosas/\\*\'. \'ejemplo.com\' coincide con \'ejemplo.com\', \'www.ejemplo.com\' y \'www.mail.ejemplo.com\'. \'ejemplo.com/cosas/\\*\' coincide con todas las solicitudes de cualquier subdominio de \'ejemplo.com\' que tenga \'cosas\' como el primer segmento de la ruta.';
$string['seb_expressionsblocked'] = 'Expresiones bloqueadas';
$string['seb_expressionsblocked_help'] = 'Un campo de texto que contiene las expresiones de filtrado permitidas para las URLs bloqueadas. El uso del caracter del comodín \'\\*\' es posible. Ejemplos de expresiones: \'ejemplo.com\' o \'ejemplo.com/cosas/\\*\'. \'ejemplo.com\' coincide con \'ejemplo.com\', \'www.ejemplo.com\' y \'www.mail.ejemplo.com\'. \'ejemplo.com/cosas/\\*\' coincide con todas las solicitudes de cualquier subdominio de \'ejemplo.com\' que tenga \'cosas\' como el primer segmento de la ruta.';
$string['seb_filterembeddedcontent'] = 'Filtrar también contenido incrustado';
$string['seb_filterembeddedcontent_help'] = 'Si se activa, también serán filtrados usando el filtro configurado todos los recursos incrustados.';
$string['seb_help'] = 'Configurar examen para usar Safe Exam Browser (Navegador de Examen Seguro)';
$string['seblinkbutton'] = 'Invocar Safe Exam Browser';
$string['seb_linkquitseb'] = 'Mostrar botón para Salir del Safe Exam Browser, configurado con este enlace para abandonar.';
$string['seb_linkquitseb_help'] = 'En este campo Usted puede escribir el enlace para abandonar el SEB. Será usado en un botón para "Salir del Safe Exam Browser" en la página que aparece después de que el examen es enviado. Al elegir el botón, o el enlace colocado en donde sea que Usted quiso ponerlo, es posible abandonar el SEB sin tener que ingresar una contraseña para abandonar. Si no se escribe un enlace, entonces el botón para "Salir del Safe Exam Browser" no aparece y no hay un enlace configurado para abandonar el SEB.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Modificar configuraciones del SEB: Seleccionar archivo de configuración de SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Modificar configuraciones del SEB: Activar filtrado de URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Modificar configuraciones del SEB: Modificar Claves Permitidas  del Navegador';
$string['seb:manage_seb_allowreloadinexam'] = 'Modificar configuraciones del SEB: Permitir Re-cargar.';
$string['seb:manage_seb_allowspellchecking'] = 'Modificar configuraciones del SEB: Permitir revisión ortográfica';
$string['seb:manage_seb_allowuserquitseb'] = 'Modificar configuraciones delSEBr: Permitir abandonar';
$string['seb:manage_seb_enableaudiocontrol'] = 'Modificar configuraciones del SEB: Permitir control de audio';
$string['seb:manage_seb_expressionsallowed'] = 'Modificar configuraciones del SEB: Expresiones simples permitidas';
$string['seb:manage_seb_expressionsblocked'] = 'Modificar configuraciones del SEB: Expresiones simples bloqueadas';
$string['seb:manage_seb_filterembeddedcontent'] = 'Modificar configuraciones del SEB: Filtrar contenido incrustado';
$string['seb:manage_seb_linkquitseb'] = 'Modificar configuraciones del SEB: Enlace para abandonar.';
$string['seb:manage_seb_muteonstartup'] = 'Modificar configuraciones del SEB: Mudo al iniciar.';
$string['seb:manage_seb_quitpassword'] = 'Modificar configuraciones de SEB: Contraseña para abandonar.';
$string['seb:manage_seb_regexallowed'] = 'Modificar configuraciones del SEB:  Expresiones Regex permitidas.';
$string['seb:manage_seb_regexblocked'] = 'Modificar configuraciones del SEB:  Expresiones Regex bloqueadas.';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Modificar configuraciones del SEB:  Requerir Safe Exam Browser.';
$string['seb:manage_seb_showkeyboardlayout'] = 'Modificar configuraciones del examen SEB:  Mostrar distribución del teclado.';
$string['seb:manage_seb_showreloadbutton'] = 'Modificar configuraciones del examen SEB:  Mostrar botón para re-cargar.';
$string['seb:manage_seb_showsebdownloadlink'] = 'Modificar configuraciones del examen SEB:  Mostrar enlace para descargar.';
$string['seb:manage_seb_showsebtaskbar'] = 'Modificar configuraciones del examen SEB:  Mostrar barra de trabajo.';
$string['seb:manage_seb_showtime'] = 'Modificar configuraciones del examen SEB:  Mostrar la hora.';
$string['seb:manage_seb_showwificontrol'] = 'Modificar configuraciones del examen SEB:  Mostrar control de Wi-Fi.';
$string['seb:manage_seb_templateid'] = 'Modificar configuraciones del examenSEB:  Seleccionar plantilla SEB.';
$string['seb:manage_seb_userconfirmquit'] = 'Modificar configuraciones del examen SEB:  Confirmar al abandonar.';
$string['seb_managetemplates'] = 'Gestionar plantillas de Safe Exam Browser';
$string['seb:managetemplates'] = 'Gestionar plantillas de configuración de SEB';
$string['seb_muteonstartup'] = 'Mudo al iniciar';
$string['seb_muteonstartup_help'] = 'Si se activa, el audio está inicialmente mudo cuando se inicia Safe Exam Browser.';
$string['seb_quitpassword'] = 'Contraseña al abandonar';
$string['seb_quitpassword_help'] = 'Esta contraseña es solicitada cuando los usuarios intentan abandonar Safe Exam Browser con el botón para "Abandonar", Ctrl-Q o el botón para cerrar en la ventana principal del navegador. Si no se configura una contraseña para abandonar, entonces Safe Exam Browser solamente pregunta "¿Está seguro de querer abandonar Safe Exam Browser"?.';
$string['seb_regexallowed'] = 'Regex permitido';
$string['seb_regexallowed_help'] = 'Un campo de texto que contiene las expresiones de filtrado para URLs permitidas en un formato de expresiones regulares (Regex).';
$string['seb_regexblocked'] = 'Regex bloqueado';
$string['seb_regexblocked_help'] = 'Un campo de texto que contiene las expresiones de filtrado para URLs bloquedas en un formato de expresiones regulares (Regex).';
$string['sebrequired'] = 'Este examen ha sido configurado de forma tal que los estudiantes solamente pueden intentarlo si usan Safe Exam Browser.';
$string['seb_requiresafeexambrowser'] = 'Requerir el uso de Safe Exam Browser (Navegador de Examen Seguro)';
$string['seb_requiresafeexambrowser_help'] = 'Si se habilita, los estudiantes solamente pueden intentar el examen usando Safe Exam Browser (Navegador de Examen Seguro).
Las opciones disponibles son:

* No
<br/>Safe Exam Browser no es requerido para intentar el examen.
* Si – Usar una plantilla existente
<br/>Puede ser usada una plantilla para la configuración de Safe Exam Browser. Las plantillas son gestionadas en la Administración del sitio. Sus configuraciones manuales de Usted anularán las configuraciones de la planilla.
* Si – Configurar manualmente
<br/>No será usada una plantilla para la configuración de Safe Exam Browser. Usted puede configurar manualmente Safe Exam Browser.
* Si – Subir mi propia configuración
<br/>Usted puede subir su propio archivo de configuración de Safe Exam Browser. Todas las configuraciones manuales y el uso de plantillas estarán deshabilitadas.
* Si – Usar configuración del cliente de SEB
<br/>No hay configuraciones de Safe Exam Browser del lado de Moodle. El examen puede ser intentado con cualquier configuración de Safe Exam Browser.';
$string['seb_showkeyboardlayout'] = 'Mostrar distribución del teclado';
$string['seb_showkeyboardlayout_help'] = 'Si se activa, la distribución actual del teclado es mostrada en la barra de trabajo de Safe Exam Browser. Esto le permite cambiar las distribuciones del teclado, que hayan sido habilitadas en el sistema operativo.';
$string['seb_showreloadbutton'] = 'Mostrar botón Re-cargar';
$string['seb_showreloadbutton_help'] = 'Si se habilita, un botón para re-cargar aparece en la barra de trabajo de SEB. Este botón le permite re-cargar la página web actual.';
$string['seb_showsebdownloadlink'] = 'Mostrar botón para descargar Safe Exam Browser (Navegador de Examen Seguro)';
$string['seb_showsebdownloadlink_help'] = 'Si se habilita, será mostrado un botón para descargar Safe Exam Browser (Navegador de Examen Seguro) en la página para iniciar el examen.';
$string['seb_showsebtaskbar'] = 'Mostrar barra de trabajo de Safe Exam Browser';
$string['seb_showsebtaskbar_help'] = 'Si se habilita, una barra de trabajo aparece al fondo de la ventana del navegador de SEB. La barra de trabajo es necesaria para mostrar elementos como el control de Wi-Fi, botón para re-cargar, la hora y la distribución del teclado.';
$string['seb_showtime'] = 'Mostrar la hora';
$string['seb_showtime_help'] = 'Si se habilita, la hora actual es mostrada en la barra de trabajo de Safe Exam Browser.';
$string['seb_showwificontrol'] = 'Mostra control Wi-Fi';
$string['seb_showwificontrol_help'] = 'Si se habilita, aparece un botón para control de Wi-Fi en la barra de trabajo de SEB. El botón permite re-conectarse a redes wi-Fi a las que previamente haya estado conectado.';
$string['seb_templateid'] = 'Plantilla de configuración de Safe Exam Browser';
$string['seb_templateid_help'] = 'La configuración en la plantilla de configuración seleccionada será usada para la configuración de Safe Exam Browser mientras se intenta el examen. Usted puede anular las configuraciones en la plantilla con sus configuraciones manuales.';
$string['seb_use_client'] = 'Si - Usar configuración de cliente de SEB';
$string['seb_use_manually'] = 'Si - Configurar manualmente';
$string['seb_userconfirmquit'] = 'Pedirle al usuario que confirme para abandonar';
$string['seb_userconfirmquit_help'] = 'Si se habilita, los usuarios tienen que confirmar para abandonar Safe Exam Browser cuando sea detectado un enlace para abandonar.';
$string['seb_use_template'] = 'Si - Usar una plantilla existente';
$string['seb_use_upload'] = 'Si - Subir mi propia configuración';
$string['setting:autoreconfigureseb'] = 'Auto configurar SEB';
$string['setting:autoreconfigureseb_desc'] = 'Si se habilita, los usuarios que navegan al examen usando e Safe Exam Browser serán automáticamente forzados a reconfigurar sus Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Mostrar bloques antes de iniciar el examen';
$string['setting:displayblocksbeforestart_desc'] = 'Si se habilita, los bloques serán mostrados antes de que un usuario intente el examen.';
$string['setting:displayblockswhenfinished'] = 'Mostrar booques despuès de terminado el examen';
$string['setting:displayblockswhenfinished_desc'] = 'Si se habilita, los bloques serán mostrados después de que un usuario haya terminado su intento del examen.';
$string['setting:downloadlink'] = 'Enlace para descarga de Safe Exam Browser (Navegador de Examen Seguro)';
$string['setting:downloadlink_desc'] = 'URL para descargar la aplicación de Safe Exam Browser (Navegador de Examen Seguro)';
$string['setting:quizpasswordrequired'] = 'Contraseña para abandonar requerida';
$string['setting:quizpasswordrequired_desc'] = 'Si se habilita, todos los exámenes que requieren Safe Exam Browser deben tener una contraseña para abandonar configurada.';
$string['settingsfrozen'] = 'Debido a que hay al menos un examen intentado, las configuraciones de Safe Exam Browser ya no pueden ser actualizadas.';
$string['setting:showhttplink'] = 'Mostrar enlace http://';
$string['setting:showseblink'] = 'Mostrar enlace seb://';
$string['setting:showseblinks'] = 'Mostrar enlaces para configuración de Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Decidir si mostrar o no enlaces para que el usuario acceda al archivo de configuración de SEB cuando está impedido el acceso al examen. Tenga en cuenta que los enlaces seb:// podrían no funcionar para todos los navegadores.';
$string['setting:supportedversions'] = 'Por favor tenga en cuenta que las siguientes versiones mínimas del cliente de Safe Exam Browser son necesarias para el uso de la característica de Configurar Clave: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['unknown_reason'] = 'Razón desconocida';
$string['used'] = 'En uso';
