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
 * Strings for component 'tool_coursebank', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_coursebank
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupdate'] = 'Fecha del respaldo';
$string['backupfailed'] = 'Falló al enviar respaldo {$a}.';
$string['backupfilename'] = 'Nombre del archivo';
$string['backupfiles'] = '{$a} archivo(s)';
$string['backupqueue'] = 'Cola para transferencia de respaldos del Banco del Curso';
$string['backupsummary'] = 'Reporte de transferencias de respaldos del Banco del Curso';
$string['check_delete'] = '¿Está Usted seguro de querer eliminar {$a} de la cola de transferencias?';
$string['check_go'] = '¿Está Usted seguro de querer continuar con la transferencia de {$a} ?';
$string['checking'] = 'Revisando...';
$string['check_stop'] = '¿Está Usted seguro de querer poner en espera la transferencia de {$a} ?';
$string['completion'] = 'Finalización';
$string['conncheckbutton'] = 'Revisar conexión';
$string['conncheckfail'] = 'La conexión a  "{$a}" falló. Por favor, confirme que sean correctas las configuraciones de red y del banco de curso externo';
$string['connchecksuccess'] = '¡Pasó la revisión de la conexión a  "{$a}" !';
$string['connchecktitle'] = 'Revisión de la conexión';
$string['coursebank:download'] = 'Descargar archivos de respaldo de banco del curso';
$string['coursebank:edit'] = 'Editar archivos de respaldo de banco del curso';
$string['coursebanklogging'] = 'Bitácoras de Banco del Curso';
$string['coursebank:view'] = 'Ver una lista de archivos de respaldo de banco del curso';
$string['coursebank:viewlogs'] = 'Ver bitácoras de Banco del Curso';
$string['coursefullname'] = 'Nombre del curso';
$string['coursename'] = 'Nombre del curso';
$string['cron_duplicate'] = 'Duplicación de bloqueo del cron';
$string['cron_force'] = 'El bloqueo puede quitarse al correr el script con  --force como un argumento..';
$string['cron_lock_cleared'] = 'Borrando el registro de bloqueo del antiguo cron en la BasedeDatos porque se considera pasmado.';
$string['cron_locked'] = 'El registrod el bloqueo de cron está ebn la BasedeDatos. El proceso podría haber sido interrumpido recientemente o estar corriendo.';
$string['cron_removinglock'] = 'Removiendo el bloqueo del cron en la BasedeDatos...';
$string['cron_sending'] = 'enviando respaldos...';
$string['cron_skippingexternal'] = 'La herramienta no está configurada para correrse con la Interfaz por Línea de Comandos. Saliendo...';
$string['cron_skippingmoodle'] = 'Configurado para usar un cron externo. Saltando...';
$string['crontimeout'] = '¡Se alcanzó el límite de tiempo para ejecución del cron! Se diferirá la transferencia de los cursos restantes a la siguiente corrida.';
$string['delete'] = 'Eliminar de la cola';
$string['deletefailed'] = 'Falló la eliminación del respaldo {$a}.';
$string['disabled'] = 'El envío de respaldos del curso está deshabilitado.';
$string['download'] = 'Descargar archivo de respaldo';
$string['downloadsummary'] = 'Descarga de respaldos del Banco externo del Curso';
$string['errordownloading'] = 'Error al descargar el archivo de respaldo';
$string['errorgetdownloadlist'] = 'No puede obtenerse una lista de respaldos del banco de cursos externo. Por favor confirme que las configuraciones de su banco de cursos externo y las configuraciones de la red sean correctas,';
$string['ERROR_MAX_ATTEMPTS_REACHED'] = 'Se alcanzó el máximo de intentos';
$string['errorsonly'] = 'Solamente errores';
$string['ERROR_TIMEOUT'] = 'Se agotó el tiempo para la  conexión.';
$string['errorupdatingstatus'] = 'Error al actualizar estatus';
$string['event_backup_chunk_interrupted'] = 'Transferencia de respaldo con {$a} interrumpida por falla de un pedazo.';
$string['eventbackupdeleted'] = 'Archivo de respaldo eliminado';
$string['eventbackupdeletefailed'] = 'Falló la eliminación de respaldo';
$string['eventbackupdeleteskipped'] = 'Eliminación de respaldo saltada';
$string['eventbackupdownloaded'] = 'Respaldo descargado';
$string['eventbackupdownloadfailed'] = 'Falló la descarga del respaldo';
$string['event_backup_init_completed'] = 'El respaldo de curso con {$a} ya ha sido transferido a Coursebank.';
$string['event_backup_init_exists_data'] = 'El respaldo de curso con {$a} ya existe en Coursebank. Los datos existentes serán sobre-escritos.';
$string['event_backup_init_exists_nodata'] = 'El respaldo de curso con {$a} ya existe en Coursebank, pero todavía no se han transferido datos.';
$string['event_backup_init_interrupted'] = 'Transferencia de respaldo con {$a} interrumpida durante la inicialización del respaldo.';
$string['eventbackupsendfailed'] = 'Falló el envío del respaldo';
$string['event_backup_transfer_completed'] = 'Transferencia de respaldo del curso con {$a} completada.';
$string['event_backup_transfer_started'] = 'Transferencia de respaldo del curso con {$a} iniciada.';
$string['event_backup_update'] = 'Registro de transferencia de respaldo con {$a} actualizado.';
$string['eventbackupupdated'] = 'Registro de respaldo actualizado';
$string['event_backup_update_interrupted'] = 'Transferencia de respaldo con {$a} interrumpida por falla de actualización del respaldo.';
$string['eventconnectionchecked'] = 'onexión revisada';
$string['eventconnectioncheckfailed'] = 'Falló la revisón de la conexión';
$string['eventcroncompleted'] = 'Tarea agendada de Coursebank completada.';
$string['eventcronstarted'] = 'Tarea agendada de Coursebank iniciada.';
$string['eventdownloadsviewed'] = 'Página de descarga vista';
$string['event_downloads_viewed'] = 'El usuario con id \'{$a}\' vió la página de descargas de respaldos.';
$string['eventdownloadviewfailed'] = 'Falló la vista de página de Descarga';
$string['event_download_view_failed'] = 'El usuario con id \'{$a}\' intentó ver la página de descargas de respaldos pero ocurrió un error.';
$string['eventgetsession'] = 'Nuevaclave de sesión creada.';
$string['eventgetsessionfailed'] = 'Falló la creación de clave de sesión.';
$string['eventhttprequest'] = 'Solicitud HTTP';
$string['eventhttprequestfailed'] = 'Falló solicitud HTTP';
$string['eventloggedas'] = '{$a->realusername} como {$a->asusername}';
$string['eventname'] = 'Nombre del evento';
$string['eventorigin'] = 'Origen';
$string['eventqueuepopulated'] = 'Cola de respaldo de curso poblada';
$string['eventstatusupdated'] = 'Estatus del respaldo actualizado';
$string['eventstatusupdatefailed'] = 'Falló la actualización del estatus del respaldo';
$string['eventtimeoutreached'] = 'Se agotó el tiempo del cron';
$string['eventtimeoutreached_desc'] = 'Se alcanzó el límite del tiempo para ejecución del cron durante la transferencia del curso {$a}.';
$string['eventtransfercompleted'] = 'Transferencia del respaldo completada';
$string['eventtransferinterrupted'] = 'Transferencia del respaldo interrumpida';
$string['event_transfer_queue_populated'] = 'Archivos del respaldo del curso {$a} añadidos a la cola para transferencia.';
$string['eventtransferresumed'] = 'Transferencia del respaldo continuada';
$string['eventtransferstarted'] = 'Transferencia del respaldo iniciada';
$string['eventtransferstartfailed'] = 'Transferencia del respaldo fallida';
$string['filename'] = 'Nombre del archivo';
$string['filesize'] = 'Tamaño del archivo';
$string['filetimemodified'] = 'Fecha del respaldo';
$string['filterisequalto'] = 'es igual a';
$string['filterlessthan'] = 'menor de';
$string['filtermorethan'] = 'mayor de';
$string['go'] = 'Continuar transfiriendo';
$string['identify_backup'] = 'UUID \'{$a->uuid}\' y nombre de archivo \'{$a->filename}';
$string['limiterfor'] = 'limitador de campo {$a}';
$string['localdeletesuccess'] = '{$a} eliminado exitosamente del área designada de almacenamiento.';
$string['moodledeleteskip'] = 'Saltarse la eliminación de {$a} del área_de_archivos de respaldo automatizado porque el último respaldo automatizado para el curso no fue exitoso.';
$string['moodledeletesuccess'] = '{$a} eliminado exitosamente del área-de-archivo de respaldo automatizado';
$string['nav_download'] = 'Descargar respaldos';
$string['nav_queue'] = 'Cola de transferencia';
$string['nav_report'] = 'Bitácoras de Banco del Curso';
$string['nav_summary'] = 'Reporte de transferencia de respaldos';
$string['noaccesstofeature'] = 'Lo sentimos, solamente el administrador o Interfaz por Línea de Comando tienen acceso a esta característica.';
$string['nologreaderenabled'] = 'No está habilitado nihun lector de bitácora';
$string['notavailable'] = 'No disponible';
$string['notcompleted'] = 'No completada';
$string['notstarted'] = 'No iniciada';
$string['pluginname'] = 'Banco del Curso';
$string['reportpageheader'] = 'Bitácoras del Banco del Curso';
$string['return'] = 'Ir a página de configuraciones';
$string['selectlogreader'] = 'Seleccionar lector de bitácora';
$string['sendcoursebackups'] = 'Respaldos externos del curso';
$string['settings_authtoken'] = 'Token de autenticación';
$string['settings_authtoken_desc'] = 'Token de autenticación para usarse en la comunicación con la instancia de banco del curso externa.';
$string['settings_chunksize'] = 'Tamaño del pedazo';
$string['settings_chunksize_desc'] = 'Tamaño del pedazo de respaldo individual a enviarse al servidor de respaldo.';
$string['settings_deletelocalbackup'] = 'Eliminar respaldos locales';
$string['settings_deletelocalbackup_desc'] = 'Si se habilita, un archivo de respaldo local será eliminado una vez que haya sido enviado al Banco-de-curso';
$string['settings_disablestring'] = 'Deshabilitar';
$string['settings_displaypages'] = 'Mostrar páginas';
$string['settings_displaypages_desc'] = 'Ocultar/mostrar páginas de Banco de Curso en el menú de navegación debajo de Administración del sitio > Cursos > Respaldos > Banco de Curso';
$string['settings_enable'] = 'Activo';
$string['settings_enable_desc'] = 'Habilitar o deshabilitar en envío de respaldos de curso.';
$string['settings_enablestring'] = 'Habilitar';
$string['settings_externalcron'] = 'Usar cron externo';
$string['settings_externalcron_desc'] = 'Si se activa el proceso será disparado por cron externo.
<br />Los administradores del servidor tiuenen que configurar el cron externo.
<br />El ejemplo simple: <PRE>2-57/5 * * * * www-data php /ruta/hacia/su/moodle/admin/tool/coursebank/cli/backup.php >> /var/log/backup.log</PRE>';
$string['settings_header'] = 'Opciones de configuración del Banco del Curso';
$string['settings_intro'] = 'Por favor, vea <a href="https://account.coursebank.biz/content/moodle-setup" target="_blank">Moodle setup documentation</a> para aprender como configurar su plugin. También hay una <a href="https://account.coursebank.biz/content/faq" target="_blank">FAQ page</a>.';
$string['settingspage'] = 'Configuración';
$string['settings_proxyheader'] = 'Configuración del Proxy';
$string['settings_proxypass'] = 'Contraseña';
$string['settings_proxypass_desc'] = 'Credencial de contraseña del proxy';
$string['settings_proxyport'] = 'Puerto';
$string['settings_proxyport_desc'] = 'Puerto del Proxy';
$string['settings_proxyurl'] = 'URL del Proxy';
$string['settings_proxyurl_desc'] = 'URL del provedor del proxy';
$string['settings_proxyuser'] = 'Nombre_de_usuario';
$string['settings_proxyuser_desc'] = 'Credencial de nombre_de_usuario del proxy';
$string['settings_requestretries'] = 'Reintentos de solicitud HTTP';
$string['settings_requestretries_desc'] = 'Número de veces a reintentar el envío de una solicitud individual fallida.';
$string['settings_sessionkey'] = 'Clave de sesión';
$string['settings_sessionkey_desc'] = 'La clave de sesión usada por el Banco de Curso (Moodle) para autenticarse con el Banco de Curso Externo.';
$string['settings_timeout'] = 'Caducidad de revicio web';
$string['settings_timeout_desc'] = 'Caducidad (en segundos) para solicitudes HTTP individuales.';
$string['settings_url'] = 'URL del destino';
$string['settings_url_desc'] = 'Localización del servidor de respaldo destino.';
$string['speedtestbutton'] = 'Probar velocidad de transferencia';
$string['speedtestchunk'] = 'El tamaño recomendado del pedazo para su sistema es de';
$string['speedtestfail'] = 'La conexión a "{$a}" falló. Por favor confirme que sus configuraciones de banco de curso externo y de red sean correctas.';
$string['speedtestslow'] = 'Las transferencias hacia afuera hacia  "{$a}"  son muy lentas.  La velocidad aproximada de la transferencia de prueba fue de';
$string['speedtestsuccess'] = '¡Se aprobó la prueba de velocidad de conexión "{$a}" ! La velocidad aproximada de la transferencia de prueba fue de';
$string['speedtesttitle'] = 'Prueba de velocidad de conexión';
$string['status'] = 'Estatus';
$string['statuscancelled'] = 'La transferencia está cancelada';
$string['statuserror'] = 'Error';
$string['statusfinished'] = 'Transferencia completa';
$string['statusinprogress'] = 'Transferencia en progreso';
$string['statusnotstarted'] = 'Transferencia pendiente';
$string['statusonhold'] = 'Transferencia en espera';
$string['stop'] = 'Poner en espera';
$string['timecompleted'] = 'Transferencia completada';
$string['timecreated'] = 'Transferencia iniciada';
$string['timetransferstarted'] = 'Transferencia iniciada';
$string['transferinprogress'] = 'No puede continuarse. Transferencia en progreso o puede haberse interrumpido recientemente. El registro del bloqueo está en la BasedeDatos.';
$string['valuefor'] = 'valor de {$a}';
