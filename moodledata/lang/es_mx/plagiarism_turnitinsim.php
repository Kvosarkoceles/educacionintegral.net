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
 * Strings for component 'plagiarism_turnitinsim', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   plagiarism_turnitinsim
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = 'Acceso para estudiantes';
$string['accessoptions_help'] = 'Los estudiantes podrán acceder al informe de similitud de su entrega luego de que se genere.';
$string['accessstudents'] = 'Permitir que los estudiantes vean los informes de similitud';
$string['addtoindex'] = 'Indexar todas las entregas';
$string['code'] = 'Código';
$string['connecttest'] = 'Probar la conexión de Turnitin';
$string['connecttestfailed'] = 'Prueba de conexión fallida.';
$string['connecttestsuccess'] = 'Prueba de conexión exitosa';
$string['dbexport'] = 'Exportación de la base de datos';
$string['dbexporttable'] = 'Exportar datos de {$a}';
$string['defaultsettings'] = 'Configuración predeterminada';
$string['errorenabledfeatures'] = 'No se pudo obtener la lista de características habilitadas.';
$string['errorgettingsubmissioninfo'] = 'Hubo un error al intentar obtener la información del envío.';
$string['errorprocessingdeletedsubmission'] = 'Este envío pertenece a una tarea eliminada y no puede ser procesado.';
$string['errortoolarge'] = 'Este archivo no se enviará a Turnitin ya que supera el tamaño máximo permitido de {$a}';
$string['eulaaccept'] = 'Acepto el Acuerdo de licencia de usuario final de Turnitin';
$string['eulaaccepted'] = 'Gracias por aceptar el nuevo Acuerdo de licencia de usuario final de Turnitin. Ahora todas las entregas futuras se enviarán a Turnitin para su procesamiento.';
$string['euladecline'] = 'Rechazo el Acuerdo de licencia de usuario final de Turnitin';
$string['euladeclined'] = 'Sus entregas no se enviarán a Turnitin ya que no ha aceptado el Acuerdo de licencia de usuario final de Turnitin.';
$string['eulaheader'] = 'Acuerdo de licencia de usuario final de Turnitin';
$string['eulalink'] = 'Para que esta entrega se envíe a Turnitin, debe aceptar el <a href="{$a}" target="_blank">Acuerdo del licencia de usuario final de Turnitin</a>.';
$string['eulalinkgeneric'] = 'Si desea que alguna de sus futuras entregas se envíe a Turnitin, debe aceptar el <a href="{$a}" target="_blank">Acuerdo de licencia de usuario final de Turnitin</a>.';
$string['eulalinkmodal'] = 'Para que esta entrega se envíe a Turnitin, debe aceptar el <a href="#" class="eula_link">Acuerdo de licencia de usuario final de Turnitin</a>.';
$string['excludebiblio'] = 'Bibliografía';
$string['excludeoptions'] = 'Excluir de los informes de similitud';
$string['excludeoptions_help'] = 'Las opciones seleccionadas no se mostrarán como coincidencia en los informes de similitud.';
$string['excludequotes'] = 'Citas';
$string['faultcode'] = 'Código de error';
$string['getwebhookfailure:message'] = 'Es posible que haya un problema con el Webhook registrado en Turnitin para el complemento Plagiarism. La tarea programada que debía verificarlo no pudo conectarse con Turnitin. Revise los registros.';
$string['getwebhookfailure:subject'] = 'Error al verificar el Webhook de Turnitin';
$string['indexoptions'] = 'Indexación de entregas';
$string['indexoptions_help'] = 'Las entregas indexadas estarán disponibles para su comparación en los informes de similitud.';
$string['invalidtablename'] = 'No se pudo exportar la tabla {$a}';
$string['line'] = 'Línea';
$string['loadingcv'] = 'Cargando Turnitin Cloud Viewer';
$string['message'] = 'Mensaje';
$string['messageprovider:digital_receipt_instructor'] = 'Recibo digital del instructor de Turnitin';
$string['messageprovider:digital_receipt_student'] = 'Recibo digital del estudiante de Turnitin';
$string['messageprovider:get_webhook_failure'] = 'Error al verificar el Webhook de Turnitin';
$string['messageprovider:new_eula'] = 'Nueva versión del Acuerdo de licencia de usuario final de Turnitin';
$string['neweula:message'] = 'Turnitin publicó un nuevo Acuerdo de licencia de usuario final. Para obtener más información, haga clic <a href="{$a}">aquí</a>.';
$string['neweula:subject'] = 'Se publicó un nuevo Acuerdo de licencia de usuario final de Turnitin';
$string['pluginname'] = 'Complemento Turnitin Integrity';
$string['pluginsetup'] = 'Configuración';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = 'Para realizar correctamente una entrega a Turnitin, deben intercambiarse datos específicos del usuario entre Moodle y Turnitin. Para obtener más información sobre los complementos de Moodle y el RGPD, visite https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm.';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = 'El nombre del usuario se envía a Turnitin en un inicio de Cloud Viewer para poder identificarlo.';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = 'Se envío el apellido del usuario a Turnitin en un inicio de Cloud Viewer para poder identificarlo.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = 'Tenga en cuenta que el contenido de un archivo/entrega se envía a Turnitin para su procesamiento.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = 'El nombre del archivo entregado se envía a Turnitin para poder identificarlo.';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = 'Se envío el título de la entrega a Turnitin para poder identificarla.';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = 'Información que vincula una entrega de Moodle con una entrega de Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = 'Un hash utilizado por Moodle para identificar el archivo enviado.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = 'El identificador que distingue la entrega para el tipo de módulo correspondiente.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = 'La puntuación de similitud general de la entrega.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = 'Una marca de tiempo para indicar el momento de la entrega del usuario a Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'El identificador utilizado por Turnitin para hacer referencia a la entrega.';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = 'El identificador del usuario que realizó una entrega.';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = 'Información que vincula a un usuario de Moodle con un usuario de Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = 'La versión más reciente del Acuerdo de licencia de usuario final de Turnitin aceptado por el usuario.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = 'El idioma en el cual el usuario aceptó por última vez el Acuerdo de licencia de usuario final de Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = 'Una marca de tiempo que indica la última vez que el usuario aceptó el Acuerdo de licencia de usuario final de Turnitin.';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'El identificador utilizado por Turnitin para hacer referencia al usuario.';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = 'El identificador del usuario que realizó una entrega.';
$string['queuedrafts'] = 'Procesar las entregas en borrador';
$string['queuedrafts_help'] = 'Tenga en cuenta que las entregas en borrador no se indexarán en Turnitin para poder ser incluidas en una comparación';
$string['receiptsinstructor:message'] = 'Una entrega titulada <strong>{$a->submission_title}</strong> realizada al módulo <strong>{$a->module_name}</strong> en la clase <strong>{$a->course_fullname}</strong> se envió a Turnitin.<br /><br />Identificador de entrega: <strong>{$a->submission_id}</strong><br />Fecha de la entrega: <strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = 'Entrega enviada a Turnitin';
$string['receiptstudent:message'] = 'Estimado/a {$a->firstname} {$a->lastname}:<br /><br />El archivo <strong>{$a->submission_title}</strong> para el módulo <strong>{$a->module_name}</strong> en la clase <strong>{$a->course_fullname}</strong> se envió correctamente a Turnitin el <strong>{$a->submission_date}</strong>. Su identificador de entrega es <strong>{$a->submission_id}</strong>.<br /><br />Gracias por usar Turnitin.<br /><br />El equipo de Turnitin';
$string['receiptstudent:subject'] = 'Este es su recibo digital de Turnitin';
$string['reportgen0'] = 'Inmediatamente';
$string['reportgen1'] = 'Inmediatamente y volver a generar en la fecha límite de entrega';
$string['reportgen2'] = 'Fecha límite de entrega';
$string['reportgenoptions'] = 'Generar informes de similitud';
$string['reportgenoptions_help'] = '<strong>Inmediatamente:</strong>Los informes de similitud se generarán inmediatamente después de enviar el archivo.<br/><br/><strong>En la fecha límite de entrega:</strong> Los informes de similitud solo se generarán en la fecha límite de entrega del ejercicio.<br/><br/><strong>Inmediatamente y en la fecha límite de entrega:</strong> Se generará un informe de similitud inmediatamente después de enviar el archivo. El informe de similitud se volverá a generar en la fecha límite de entrega del ejercicio. Esta opción puede usarse para comprobar si hay plagio dentro de una clase.';
$string['resubmittoturnitin'] = 'Volver a enviar a Turnitin';
$string['savesuccess'] = 'Cambios guardados';
$string['settingslearnmore'] = 'Más información sobre la configuración de Turnitin';
$string['submissiondisplayerror:cannotextracttext'] = 'Informe no disponible';
$string['submissiondisplayerror:cannotextracttext_help'] = 'No se pudo generar un informe para esta entrega ya que este tipo de archivo no puede generar un informe, o bien porque no hay suficiente texto.';
$string['submissiondisplayerror:corruptfile'] = 'Archivo dañado';
$string['submissiondisplayerror:corruptfile_help'] = 'El archivo cargado parece estar dañado.';
$string['submissiondisplayerror:eulanotaccepted'] = 'No se aceptó el Acuerdo de licencia de usuario final';
$string['submissiondisplayerror:eulanotaccepted_help'] = 'El remitente debe primero aceptar el Acuerdo de licencia de usuario final de Turnitin para que pueda verificarse la similitud de la entrega.';
$string['submissiondisplayerror:filelocked'] = 'Archivo bloqueado';
$string['submissiondisplayerror:filelocked_help'] = 'El archivo cargado requiere una contraseña para abrirse.';
$string['submissiondisplayerror:generic'] = 'Archivo no enviado a Turnitin';
$string['submissiondisplayerror:generic_help'] = 'Este archivo no se envió a Turnitin. Consulte al administrador del sistema.';
$string['submissiondisplayerror:notsent'] = 'Archivo no enviado a Turnitin';
$string['submissiondisplayerror:notsent_help'] = 'Este archivo no se envió a Turnitin ya que la opción de Turnitin no estaba habilitada cuando se realizó la entrega. Modifique o vuelva a cargar su entrega si desea que se envíe a Turnitin.';
$string['submissiondisplayerror:processingerror'] = 'Error de procesamiento';
$string['submissiondisplayerror:processingerror_help'] = 'Se produjo un error no especificado al procesar las entregas.';
$string['submissiondisplayerror:toolarge'] = 'El archivo es demasiado grande';
$string['submissiondisplayerror:toolarge_help'] = 'Este archivo es demasiado grande para enviarlo a Turnitin. Para comprobar su originalidad, debe enviar un archivo con un tamaño inferior a 100 MB.';
$string['submissiondisplayerror:toolittletext'] = 'No hay suficiente texto';
$string['submissiondisplayerror:toolittletext_help'] = 'La entrega no tiene suficiente texto para generar un informe de similitud (las entregas deben tener al menos 20 palabras)';
$string['submissiondisplayerror:toomanypages'] = 'Demasiadas páginas';
$string['submissiondisplayerror:toomanypages_help'] = 'La entrega tiene demasiadas páginas para generar un informe de similitud (una entrega no puede tener más de 400 páginas)';
$string['submissiondisplayerror:toomuchtext'] = 'Demasiado texto';
$string['submissiondisplayerror:toomuchtext_help'] = 'La entrega tiene demasiado texto para generar un informe de similitud (después de extraer el texto, se lo convierte a UTF-8 y la entrega debe tener menos de {$a} de texto)';
$string['submissiondisplayerror:unknown'] = 'Error en la entrega';
$string['submissiondisplayerror:unknown_help'] = 'Se produjo un error desconocido en su entrega y este archivo no se envió a Turnitin. Consulte al administrador del sistema.';
$string['submissiondisplayerror:unsupportedfiletype'] = 'Tipo de archivo no compatible';
$string['submissiondisplayerror:unsupportedfiletype_help'] = 'El tipo de archivo cargado no es compatible.';
$string['submissiondisplaystatus:awaitingeula'] = 'Esperando Acuerdo de licencia de usuario final';
$string['submissiondisplaystatus:cannotextracttext'] = 'Informe no disponible';
$string['submissiondisplaystatus:error'] = 'Error';
$string['submissiondisplaystatus:notsent'] = 'No enviado';
$string['submissiondisplaystatus:pending'] = 'Pendiente';
$string['submissiondisplaystatus:queued'] = 'En cola';
$string['submissiondisplaystatus:unknown'] = 'Error desconocido';
$string['taskadminupdate'] = 'Actualizar la configuración local del complemento Turnitin Integrity';
$string['taskgetreportscores'] = 'Recuperar las puntuaciones del informe para el complemento Turnitin Integrity';
$string['taskoutputenabledfeaturesnotretrieved'] = 'No se pudieron recuperar las funciones habilitadas de Turnitin';
$string['taskoutputenabledfeaturesretrievalfailure'] = 'Error en la invocación de funciones habilitadas de Turnitin';
$string['taskoutputenabledfeaturesretrieved'] = 'Se recuperaron las funciones habilitadas de Turnitin';
$string['taskoutputfailedconnection'] = 'Se produjo un problema al conectarse con la API de Turnitin';
$string['taskoutputfailedcvlaunchurl'] = 'Se produjo un problema al solicitar una URL de inicio de Cloud Viewer desde la API de Turnitin para el identificador de entrega: {$a}';
$string['taskoutputfailedreportrequest'] = 'Se produjo un problema al solicitar un informe de originalidad a la API de Turnitin para el identificador de entrega: {$a}';
$string['taskoutputfailedscorerequest'] = 'Se produjo un problema al solicitar una puntuación de informe de originalidad desde la API de Turnitin para el identificador de entrega: {$a}';
$string['taskoutputfailedupload'] = 'Se produjo un problema al cargar un archivo a la API de Turnitin para el identificador de entrega: {$a}';
$string['taskoutputfileuploaded'] = 'Archivo cargado a la entrega de Turnitin: {$a}';
$string['taskoutputlatesteulanotretrieved'] = 'No se pudo recuperar la versión más reciente del Acuerdo de licencia de usuario final';
$string['taskoutputlatesteularetrievalfailure'] = 'Error al invocar la versión más reciente del Acuerdo de licencia de usuario final.';
$string['taskoutputlatesteularetrieved'] = 'Se recuperó la versión {$a} del Acuerdo de licencia de usuario final.';
$string['taskoutputpluginnotconfigured'] = 'No se pudo ejecutar la tarea a {$a} ya que el complemento Turnitin Integrity no está configurado. <br/>Vaya a la página de configuración del complemento en Administración de sitio para agregar sus credenciales de API de Turnitin.';
$string['taskoutputsubmissioncreated'] = 'Entrega creada en Turnitin: {$a}';
$string['taskoutputsubmissionnotcreatedeula'] = 'No se pudo crear la entrega en Turnitin ya que el remitente no aceptó el Acuerdo de licencia de usuario final.';
$string['taskoutputsubmissionnotcreatedgeneral'] = 'No se pudo crear la entrega en Turnitin. Revise los registros.';
$string['taskoutputwebhookcreated'] = 'Se creó el Webhook. Turnitin enviará invocaciones a {$a}.';
$string['taskoutputwebhookcreationfailure'] = 'Error en la solicitud de creación de Webhook. Revise los registros.';
$string['taskoutputwebhookdeleted'] = 'Se eliminó el Webhook {$a}.';
$string['taskoutputwebhookdeletefailure'] = 'No se pudo eliminar el Webhook. Revise los registros.';
$string['taskoutputwebhooknotcreated'] = 'No pudo crearse el Webhook. Revise los registros.';
$string['taskoutputwebhooknotdeleted'] = 'No se pudo eliminar el Webhook {$a}.';
$string['taskoutputwebhooknotretrieved'] = 'No se pudo recuperar el Webhook {$a}. Se creará uno nuevo.';
$string['taskoutputwebhookretrievalfailure'] = 'Error en la invocación para recuperar el Webhook {$a}.';
$string['taskoutputwebhookretrieved'] = 'Se recuperó el Webhook {$a}. El Webhook está activo.';
$string['tasksendqueuedsubmissions'] = 'Enviar archivos en cola del complemento Turnitin Integrity';
$string['turnitinapikey'] = 'Clave de la API de Turnitin';
$string['turnitinapiurl'] = 'URL de la API de Turnitin';
$string['turnitinconfig'] = 'Configuración del complemento';
$string['turnitinenablelogging'] = 'Habilitar modo de diagnóstico';
$string['turnitinenableremotelogging'] = 'Enviar bitácoras a Turnitin';
$string['turnitinenableremotelogging_help'] = 'Las bitácoras serán enviadas automáticamente a Turnitin para fines diagnósticos. No se transfieren datos privados. Nosotros recomendamos dejar habilitada esta característica para que podamos proporcionar soporte en caso necesario. Sin embargo, las bitácoras todavía pueden ser encontradas en su entorno de Moodle para enviarlas manualmente a Turnitin.';
$string['turnitinfeatures'] = 'Características de Turnitin Integrity';
$string['turnitinfeatures::eulanotrequired'] = 'No se requiere que los usuarios acepten el Acuerdo de licencia de usuario final';
$string['turnitinfeatures::eularequired'] = 'Se requiere que todos los usuarios acepten el Acuerdo de licencia de usuario final de Turnitin';
$string['turnitinfeatures::header'] = 'Características de Turnitin Integrity';
$string['turnitinfeatures::moreinfo'] = 'Para obtener más información sobre las funciones habilitadas y los paquetes disponibles de Turnitin, consulte <a href="http://www.turnitin.com" target="_blank">http://www.turnitin.com</a>.';
$string['turnitinfeatures::repositories'] = 'Repositorios incluidos en la comparación:';
$string['turnitinfeatures::viewoptions'] = 'Opciones de Cloud Viewer:';
$string['turnitinhideidentity'] = 'Ocultar la identidad del estudiante a Turnitin';
$string['turnitinmodenabled'] = 'Habilitar Turnitin Integrity para {$a}';
$string['turnitinpluginenabled'] = 'Habilitar Turnitin';
$string['turnitinpluginsettings'] = 'Configuración del complemento Turnitin Integrity';
$string['turnitinsim'] = 'Complemento Turnitin Integrity';
$string['turnitinsim:enable'] = 'Habilitar Turnitin Integrity';
$string['turnitinsiminternet'] = 'Comparar con contenido en Internet';
$string['turnitinsimprivate'] = 'Comparar con el contenido privado';
$string['turnitinsim:viewfullreport'] = 'Ver informe de originalidad';
$string['turnitinviewermatchsubinfo'] = 'Permitir que los instructores de su institución vean la información de las entregas para detectar coincidencias internas';
$string['turnitinviewersavechanges'] = 'Guardar cambios del visor';
$string['turnitinviewerviewfullsource'] = 'Permitir que los instructores dentro de su institución vean el texto completo de los envíos para acceder a coincidencias internas';
$string['viewapilog'] = 'Ver los registros de API desde {$a}';
$string['viewerpermissionferpa'] = 'Los siguientes permisos afectan la forma en que pueden compartirse los datos en su institución. Estos datos son responsabilidad exclusiva de su institución. Por ese motivo, al configurar estos permisos debe tener en cuenta si cumplen íntegramente las políticas de su institución en relación con los registros de los estudiantes.';
$string['viewerpermissionoptions'] = 'Permisos del visor';
$string['viewlogs'] = 'Registros';
$string['webhook_description'] = 'Webhook para {$a}';
$string['webhookincorrectsignature'] = 'Error en la invocación del Webhook ya que la firma es incorrecta';
