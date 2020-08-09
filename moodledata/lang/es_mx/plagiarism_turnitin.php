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
 * Strings for component 'plagiarism_turnitin', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   plagiarism_turnitin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor'] = '¿Permitir envíos de cualquier tipo de archivo?';
$string['allownonor_help'] = 'Esta configuración permitirá que cualquier tipo de archivo sea enviado. Con esta opción ajustada a "Si", los envíos serán revisados para similitud donde sea posible, los envíos estarán disponibles para descargar y las herramientas de retroalimentación GradeMark estarán disponibles donde sea posible.';
$string['anonblindmarkingnote'] = 'Nota: La configuración de calificación anónima separada de Turnitin ha sido eliminada. Turnitin usará la configuración Moodle para calificación a ciegas para determinar la configuración de calificación anónima.';
$string['assigngeterror'] = 'No se pudieron obtener datos de Turnitin';
$string['attachrubric'] = 'Anexar una rúbrica a esta tarea';
$string['attachrubricnote'] = 'Nota: Los estudiantes podrán ver las rúbricas anexas y sus contenidos antes de enviar.';
$string['because'] = 'Esto fue porque un administrador eliminó la tarea pendiente de la cola para procesamiento y abortó el envío a Turnitin.<br /><strong>El archivo todavía existe en Moodle; por favor contacte a su instructor.</strong><br />Por favor vea debajo para cualquier código de error:';
$string['changerubricwarning'] = 'El cambiar o separar una rúbrica quitará todos los puntajes por rúbrica existentes de trabajos en esta tarea, incluyendo las trajetas_de_puntaje  (scorecards) que hubieran sido calificadas previamente. Las calificaciones Generales para trabajos calificados previamente se conservarán.';
$string['checkagainstnote'] = 'Nota: Si Usted no selecciona "Si" para al menos una de las opciones inferiores para "Revisar contra ..." entonces NO se generará un Reporte de similitud .';
$string['classupdateerror'] = 'No se pudo actualizar datos de Turnitin Class';
$string['closebutton'] = 'Cerrar';
$string['code'] = 'Código';
$string['compareinstitution'] = 'Comparar archivos enviados con trabajos enviados dentro de esta institución';
$string['config'] = 'Configuración';
$string['configupdated'] = 'Configuración actualizada';
$string['configureerror'] = 'Usted debe configurar este módulo completamente como Administrador antes de usarlo dentro de un curso. Por favor contacte a su Administrador de Moodle.';
$string['connecttesterror'] = 'Huboo un error al conectarse a Turnitin. El mensaje de error regresado está debajo:<br />';
$string['course'] = 'Curso';
$string['coursegeterror'] = 'No pudieron obtenerse datos del curso';
$string['cronsubmittedsuccessfully'] = 'Envío: {$a->title} (TII ID: {$a->submissionid}) para la tarea {$a->assignmentname} en el curso {$a->coursename} fue enviado exitosamente a Turnitin.';
$string['defaultinserterror'] = 'Hubo un error al tratar de insertar un valor de configuración por defecto dentro de la base de datos.';
$string['defaults'] = 'Configuraciones por defecto';
$string['defaultsdesc'] = 'Las siguientes configuraciones son el conjunto de valores por defecto al habilitar Turnitin dentro de un Módulo de actividad';
$string['defaultupdated'] = 'Configuraciones por defecto de Turnitin actualizadas';
$string['defaultupdateerror'] = 'Hubo un error al tratar de actualizar un valor de configuración por defecto en la base de datos';
$string['deleteconfirm'] = '¿Está Usted seguro de querer eliminar este envío?\\n\\nEsta acción no puede deshacerse.';
$string['deleted'] = 'Eliminado';
$string['deletesubmission'] = 'Eliminar Envío';
$string['digitalreceipt'] = 'Recibo Digital';
$string['digital_receipt_subject'] = 'Este es su recibo Digital Turnitin';
$string['draftsubmit'] = '¿Cuando debería enviarse el archivo a Turnitin?';
$string['erater'] = 'Habilitar revisión de gramática e-rater';
$string['erater_categories'] = 'Categorías e-rater';
$string['erater_dictionary'] = 'Diccionario e-rater';
$string['erater_dictionary_en'] = 'Ambos Diccionarios de Inglés: Estadounidense y Británico';
$string['erater_dictionary_engb'] = 'Diccionario de Inglés UK';
$string['erater_dictionary_enus'] = 'Diccionario de Inglés  US';
$string['erater_grammar'] = 'Gramática';
$string['erater_handbook'] = 'ETS© Handbook';
$string['erater_handbook_advanced'] = 'Avanzadas';
$string['erater_handbook_elementary'] = 'Escuela Elemental (primaria)';
$string['erater_handbook_highschool'] = 'Escuela Preparatoria (High School)';
$string['erater_handbook_learners'] = 'Estudiantes de Inglés';
$string['erater_handbook_middleschool'] = 'Escuela Intermedia (Middle School)';
$string['erater_mechanics'] = 'Mecánica';
$string['erater_spelling'] = 'Ortografía';
$string['erater_style'] = 'Estilo';
$string['erater_usage'] = 'Uso';
$string['errorcode0'] = 'Este archivo no ha sido enviado a Turnitin; por favor consulte a su administrador del sistema.';
$string['errorcode1'] = 'Este archivo no ha sido enviado a Turnitin porque no tiene suficiente contenido para producir un Reporte de Similitud .';
$string['errorcode10'] = 'Este archivo no ha sido enviado a Turnitin porque hay un problema para crear la clase en Turnitin, lo que impide los envíos; por favor consulte sus bitácoras de la API para más información.';
$string['errorcode11'] = 'Este archivo no ha sido enviado a Turnitin porque le faltan datos';
$string['errorcode12'] = 'Este archivo no ha sido enviado a Turnitin porque pertencece a una tarea en donde el curso fue eliminado. ID de la fila: ({$a->id}) | ID del Módulo del Curso: ({$a->cm}) | ID del Usuario: ({$a->userid})';
$string['errorcode13'] = 'Este submissionid - {$a->externalid} no se encontró en Turnitin. No fue posible obtener puntaje de similitud y otros datos del envío.a.';
$string['errorcode2'] = 'Este archivo no será enviado a  Turnitin porque excede el tamaño máximo de  {$a->maxfilesize} permitido';
$string['errorcode3'] = 'Este archivo no ha sido enviado a Turnitin porque el usuario no ha aceptado el Acuerdo de Licencia del Usuario FFinal de Turnitin.';
$string['errorcode4'] = 'Usted debe subir un tipo de archivo soportado para esta tarea. Los tipos de archivo soportados son; .doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps y .rtf';
$string['errorcode5'] = 'Este archivo no ha sido enviado a Turnitin porque hay un problema para crear el módulo en Turnitin, lo que impide los envíos; por favor consulte sus bitácoras de la API para más información.';
$string['errorcode6'] = 'Este archivo no ha sido enviado a Turnitin porque hay un problema para editar las configuraciones del módulo en Turnitin, lo que impide los envíos; por favor consulte sus bitácoras de la API para más información.';
$string['errorcode7'] = 'Este archivo no ha sido enviado a Turnitin porque hay un problema para crear el usuario en Turnitin, lo que impide los envíos; por favor consulte sus bitácoras de la API para más información.';
$string['errorcode8'] = 'Este archivo no ha sido enviado a Turnitin porque hay un problema al crear el archivo temp. La cusa más probable es un nombre inválido de archivo. Por favor renombre el archivo y re-súbalo usando Editar Envío.';
$string['errorcode9'] = 'El archivo no puede ser enviado porque no hay contenido accesible en el pool de archivos para enviar.';
$string['errors'] = 'Errores';
$string['excludebiblio'] = 'Excluir Bibliografía';
$string['excludepercent'] = 'Porcentaje';
$string['excludequoted'] = 'Excluir Material Citado';
$string['excludevalue'] = 'Excluir Concordancias Pequeñas';
$string['excludewords'] = 'Palabras';
$string['faultcode'] = 'Código de Falla';
$string['filedoesnotexist'] = 'El archivo ha sido eliminado';
$string['genduedate'] = 'Generar reportes en fecha prometida (los estudiantes pueden re-enviar hasta antes de la fecha prometida)';
$string['genimmediately1'] = 'Generar reportes inmediatamente (los estudiantes no pueden re-enviar)';
$string['genimmediately2'] = 'Generar reportes inmediatamente (los estudiantes pueden re-enviar hasta antes de la fecha prometida): Después de {$a->num_resubmissions} re-envíos, los reportes se generan después de  {$a->num_hours} horas';
$string['grademark'] = 'GradeMark';
$string['id'] = 'Id';
$string['institutionalrepository'] = 'Reporsitorio Institucional (Donde fuera aplicable)';
$string['internetcheck'] = 'Revisar contra Internet';
$string['journalcheck'] = 'Revisar contra revistas ( journals),<br />periódicos y publicaciones';
$string['launchpeermarkmanager'] = 'Invocar Gestor Peermark';
$string['launchpeermarkreviews'] = 'Invocar Revisiones Peermark';
$string['launchquickmarkmanager'] = 'Invocar Gestor de CalificaciónRápida Quickmark';
$string['launchrubricmanager'] = 'Invocar Gestor de Rúbrica';
$string['launchrubricview'] = 'Ver la Rúbrica usada para calificar';
$string['line'] = 'Línea';
$string['loadingdv'] = 'Cargando el Visor de Documento Turnitin...';
$string['locked_message'] = 'Mensaje Bloqueado';
$string['locked_message_default'] = 'Este ajuste está bloqueado a nivel del sitio.';
$string['locked_message_help'] = 'Si algun ajuste está bloqueado, este mensaje es mostrado para decir porqué.';
$string['message'] = 'Mensaje';
$string['messageprovider:submission'] = 'Notificaciones de Recibo Digital del Plugin de Plagio Turnitin';
$string['module'] = 'Módulo';
$string['norepository'] = 'Sin Repositorio';
$string['norubric'] = 'Sin Rúbrica';
$string['noscriptula'] = '(Como Usted no tiene JavaScript habilitado, Usted tendrá que refrescar manualmente esta página antes de que pueda hacer un envío después de aceptar el Acuerdo de Usuario con Turnitin)';
$string['notavailableyet'] = 'No disponible';
$string['notorcapable'] = 'No es posible producir un Reporte de Similitud para este archivo.';
$string['otherrubric'] = 'Usar rúbrica que pertenece a otro instructor';
$string['pending'] = 'Pendiente';
$string['pluginname'] = 'Plugin de detección de plagio Turnitin';
$string['pp_createsubmissionerror'] = 'Hubo un error al tratar de crear el envío en Turnitin.';
$string['ppcronsubmissionlimitreached'] = 'Ya no serán enviados a Turnitin más envíos por esta ejecución del cron, porque solamente {$a} son procesados por corrida';
$string['pp_digital_receipt_message'] = 'Estimado/a {$a->firstname} {$a->lastname},<br /><br />Usted ha enviado exitosamente el archivo <strong>{$a->submission_title}</strong> a la tarea <strong>{$a->assignment_name}{$a->assignment_part}</strong> en la clase <strong>{$a->course_fullname}</strong> en <strong>{$a->submission_date}</strong>. La ID de su envío es <strong>{$a->submission_id}</strong>. Su recibo digital completo puede ser visto e impreso desde el botón para imprimir/descargar en el Visor de Documento.<br /><br />Gracias por usar Turnitin,<br /><br />El Equipo de  Turnitin';
$string['pperrorsdesc'] = 'Hubo un problema al tratar de subir los archivos debajo a Turnitin. Para re-enviar, seleccione los archivos que desea re-enviar y presione el botón re-enviar. Estos serán procesados la próxima vez que se ejecute el cron.';
$string['pperrorsfail'] = 'Hubo un problema con algunos de los archivos que seleccionó. No se pudo crear un nuevo evento de cron para ellos.';
$string['pperrorssuccess'] = 'Los archivos que seleccionó han sido re-enviados y serán procesados por el cron.';
$string['ppeventsfailedconnection'] = 'Ningún evento será procesado por el plugin de plagio Turnitin por esta ejecución de cron porque no puede establecerse una conexión a Turnitin.';
$string['ppqueuesize'] = 'Número de eventos en la cola de eventos del Plugin de Plagio';
$string['pp_submission_error'] = 'Turnitin ha regresado un error con su envío:';
$string['ppsubmissionerrorseelogs'] = 'Este archivo no ha sido enviado a Turnitin; por favor consulte a su administrador del sistema';
$string['ppsubmissionerrorstudent'] = 'Este archivo no ha sido enviado a Turnitin; por favor consulte a su tutor para más detalles';
$string['pp_updatesubmissionerror'] = 'Hubo un error al tratar de re-enviar su envío a Turnitin';
$string['privacy:metadata:core_files'] = 'Tarea Turnitin almacena archivos que han sido subidos a Moodle para formar un envío Turnitin.';
$string['privacy:metadata:plagiarism_turnitin_client'] = 'Para hacer exitosamente un envío a Turnitin, datos específicos del usuario necesitan ser intercambiados entre Modle y Turnitin.';
$string['privacy:metadata:plagiarism_turnitin_client:email'] = 'La dirección Email del usuario es compartida por Moodle para habilitar la creación de una cuenta Turnitin.';
$string['privacy:metadata:plagiarism_turnitin_client:firstname'] = 'El nombre del usuario es enviado a Turnitin para que el usuario pueda ser identificado.';
$string['privacy:metadata:plagiarism_turnitin_client:lastname'] = 'El apellido(s)del usuario es enviado a Turnitin para que el usuario pueda ser identificado.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_filename'] = 'El nombre del archivo enviado es enviado a Turnitin para que sea identificable.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_title'] = 'El títulodel envíoenviado es enviado a Turnitin para que sea identificable.';
$string['privacy:metadata:plagiarism_turnitin_files'] = 'Información que enlaza un envío Moodle a un envío urnitin.';
$string['privacy:metadata:plagiarism_turnitin_files:attempt'] = 'Un sello de tiempo que indica cuando el usuario vio retroalimentación  en su envío.';
$string['privacy:metadata:plagiarism_turnitin_files:grade'] = 'La calificación aplicada por un instructor al envío.';
$string['privacy:metadata:plagiarism_turnitin_files:lastmodified'] = 'Un sello de tiempo que indica cuando el usuario modificó por última vez su envío.';
$string['privacy:metadata:plagiarism_turnitin_files:orcapable'] = 'Indica si es que Turnitin pudo o no producir un reporte de similitud para el envío del usuario.';
$string['privacy:metadata:plagiarism_turnitin_files:student_read'] = 'Indica si es que un estudiante ha leido o no su retroalimentación.';
$string['privacy:metadata:plagiarism_turnitin_files:submissionscore'] = 'El puntaje de similitud del envío.';
$string['privacy:metadata:plagiarism_turnitin_files:transmatch'] = 'Indica si es que Turnitin ha usado o no concordancia traducida para producir un reporte de Similitud para el envío.';
$string['privacy:metadata:plagiarism_turnitin_files:userid'] = 'La ID del usuario que ha hecho un envío.';
$string['queued'] = 'En Cola';
$string['reportgenspeed'] = 'Velocidad de Generación del Reporte';
$string['reportgenspeed_resubmission'] = 'Usted ya ha enviado un trabajo a esta tarea y se ha generado un Reporte de Similitud para su envío. Si Usted elige re-enviar su trabajo, su envío anterior será remplazado y un nuevo reporte será generado. Después de {$a->num_resubmissions} re-envíos, Usted necesitará esperar {$a->num_hours} después de un envío para ver un nuevo Reporte de Similitud..';
$string['resubmitselected'] = 'Re-enviar archivos seleccionados';
$string['resubmitting'] = 'Re-enviando';
$string['resubmittoturnitin'] = 'Re-enviar a Turnitin';
$string['saveusage'] = 'Guardar Volcado de Datos';
$string['semptytable'] = 'No se encontraron resultados.';
$string['sendqueuedsubmissions'] = 'Mandar Archivos en Cola desde el Plugin de Plagio Turnitin';
$string['sharedrubric'] = 'Rúbrica compartida';
$string['showusage'] = 'Mostrar Volcado de Datos';
$string['similarity'] = 'Similitud';
$string['spapercheck'] = 'Revisar contra trabajos de estudiantes almacenados';
$string['standardrepository'] = 'Repositorio Estándar';
$string['student'] = 'Estudiante';
$string['student_notread'] = 'El estudiante no ha visto este trabajo.';
$string['student_read'] = 'El estudiante vio el trabajo en:';
$string['studentreports'] = 'Mostrar Reportes de Similitud a Estudiantes';
$string['studentreports_help'] = 'Le permite mostrar reportes de similitud Turnitin a usuarios estudiantes. Si se configura a Si, los reportes de similitud generados por Turnitin están disponibles para que los estudiantes los vean.';
$string['submitondraft'] = 'Enviar archivo cuando sea subido primeramente';
$string['submitonfinal'] = 'Enviar archivo cuando  el estudiante lo envía para ser calificado';
$string['submitpapersto'] = 'Almacenar Papeles (Trabajos) del Estudiante';
$string['submitpapersto_help'] = '<strong>Sin Repositorio: </strong><br />Turnitin es instruido para no almacenar documentos enviados a ningún repositorio. Nosotros solamente procesaremos el documento para realizar la revisión inicial de similitud.<br /><br /><strong>Repositorio Estándar: </strong><br />Turnitin almacenará una copia del documento enviado solamente en el Repositorio Estándar. Al elegir esta opción, Turnitin es instruido para solamente usar documentos almacenados para hacer revisiones de similitud contra cualquier documento enviado en el futuro.<br /><br /><strong>Repositorio Institucional (Donde Aplique): </strong><br />El elegir esta opción instruye a Turnitin a solamente añadir documentos enviados a un repositorio privado de su institución. Las revisiones de similitud  a los documentos enviados solamente se harán por otros instructores dento de su institución.';
$string['tiiassignmentgeterror'] = 'Hubo un error al tratar de obtener una Tarea desde Turnitin';
$string['tiiexplain'] = 'Turnitin es un producto comercial y Usted debe tener una suscripcipon pagada para usar este servicio. Para más información vea <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['tii_submission_failure'] = 'Por favor consulte a su tutor o administrador del sistea para más detalles';
$string['tiisubmissiongeterror'] = 'Hubo un error al tratar de obtener un envío desde Turnitin';
$string['tiisubmissionsgeterror'] = 'Hubo un error al tratar de obtener envíos para esta Tarea desde Turnitin';
$string['transmatch'] = 'Concordancia Traducida';
$string['turnitin'] = 'Turnitin';
$string['turnitinconfig'] = 'Configuración del Plugin de Plagio Turnitin';
$string['turnitindefaults'] = 'Configuraciones por defecto del Plugin de Plagio Turnitin';
$string['turnitindeletionerror'] = 'Falló la eliminación del envío. La copia local de Moodle fue removida pero el envío a Turnitin nopudo ser eliminado.';
$string['turnitin:enable'] = 'Permitirle al profesor habilitar/deshabilitar Turnitin dentro de un módulo';
$string['turnitinid'] = 'ID Turnitin';
$string['turnitinpluginsettings'] = 'Configuración del Plugin de Plagio Turnitin';
$string['turnitinppulapost'] = 'Su archivo ha sido enviado a Turnitin. Por favor haga clic aquí para aceptar nuestro Acuerdo del Usuario Final.';
$string['turnitinppulapre'] = 'Par enviar un archivo a Turnitin primeramente debe aceptar nuestro Acuerdo de Licencia del Usuario Final. Al elegir no aceptar nuestro Acuerdo de Licencia enviará su archivo solamente a Moodle. Haga clic aquí para aceptar.';
$string['turnitinrefreshingsubmissions'] = 'Refrescando Envíos';
$string['turnitinrefreshsubmissions'] = 'Refrescar Envíos';
$string['turnitinstatus'] = 'Estatus Turnitin';
$string['turnitintoolofflineerror'] = 'Estamos experimentando un problema temporal. Por favor inténtelo nuevamente más tarde.';
$string['turnitin:viewfullreport'] = 'Ver Reporte de Similitud';
$string['updatereportscores'] = 'Actualizar Puntajes de Reporte para Plugin de Plagio Turnitin';
$string['useturnitin'] = 'Habilitar Turnitin';
$string['useturnitin_mod'] = 'Habilitar Turnitin para {$a}';
