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
 * Strings for component 'languagelab', language 'es_mx', branch 'MOODLE_28_STABLE'
 *
 * @package   languagelab
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adapter_access'] = '¿Acceso seguro a plugin de adaptador Red5 ?';
$string['adapter_access_help'] = '¿Está el servidor RAP protegido con un certificado? (por ejemplo, https?)';
$string['adapter_file'] = 'Nombre del archivo para el plugin del adaptador de Red5';
$string['adapter_file_help'] = 'Escriba el nombre del archivo (sin la extensión) que le dió a Usted el administrador de Red5 . El plugin adaptador de Red5 (RAP) se usa para manipular el flujo (\'\'streams\'\') grabado en el servidor Red5. Por ejemplo, : Al eliminar una actividad de Laboratorio de Idioma, el RAP elimina los archivos de audio y video asociados, manteniendo limpio al servidor Red5. En la próxima versión se usará también para respaldar los archivos de audio y video al hacer un respaldo en Moodle. Esta característica todavía no está disponible.

El nombre del archivo se usa por razones de seguridad. De esta forma, si alguien accediera al servidor Red5, no se mostrará ninguna página \'\'home\'\' por defecto.

Este es el único archivo en esta carpeta, lo que hace más dificil el adivinarlo. Por supuesto, debe deshabilitarse el poder navegar a este directorio.';
$string['adapter_server'] = 'Dirección del servidor para acceder al adaptador.';
$string['adapter_server_help'] = 'Dirección del servidor para acceder al adaptador. Generalmente es la misma que la del servidor Red5. Usted puede adaptar un puerto al final de la dirección del servidor si fuera diferente del puerto http clásico (por ejemplo, 123.456.789:8081)';
$string['adminconfig_header'] = 'Después de completar, Usted puede hacer click  <a href="{$a}">aquí</a> para probar la configuración de  RAP.';
$string['advanced'] = 'Configuraciones avanzadas';
$string['agoAfter'] = 'atrás';
$string['agoBefore'] = '';
$string['april'] = 'Abril';
$string['async'] = 'Discusión (como foro)';
$string['attempts'] = 'Una grabación por estudiante';
$string['attempts_help'] = 'Elija esta casilla si quiere que sus estudiantes graben únicamente a un archivo.';
$string['attempts_warning'] = 'Nota: Solamente se permite un envío.<br>Usted puede regresar y grabar sobre el envío anterior. Esto borrará la grabación previa.<br>Solamente será evaluada la última grabación enviada';
$string['august'] = 'Ago';
$string['availabledate'] = 'Disponible a partir de:';
$string['btnCancel'] = 'Cancelar';
$string['btnDiscard'] = 'Descartar cambios';
$string['cancel'] = 'Cancelar';
$string['classmonitor'] = 'Monitorear su clase';
$string['classmonitor_help'] = 'Elija aquí para acceder al monitor de clase';
$string['confirmDeleteHistory'] = 'Está seguro de querer eliminar grabación';
$string['connectClient'] = 'Conectando ...';
$string['connected_class'] = 'Usted está ahora conectado con la clase. elija el botón Cerrar para terminar la discusión';
$string['connected_class_btnStop'] = 'Cerrar';
$string['connected_class_title'] = 'Conectado con la clase';
$string['connected_error'] = 'Error de conexión';
$string['connected_no_student_connected'] = 'Sin estudiantes conectados';
$string['connected_student'] = 'Usted está ahora conectado con el estudiante. Elija el botón Cerrar para terminar la discusión';
$string['connected_student_btnStop'] = 'Cerrar';
$string['connected_student_title'] = 'Conectado con un estudiante';
$string['connectiongServer'] = 'Conectando a servidor...';
$string['content'] = 'Laboratorio de Idioma';
$string['corrNotes'] = 'Escriba notas de corrección aquí';
$string['days'] = 'días';
$string['december'] = 'Dic';
$string['defaultTitleNewRecording'] = 'Grabación nueva';
$string['deletealldata'] = 'Eliminar todas las grabaciones de alumnos';
$string['deletealldata_notice'] = '<b>Advertencia</b>: La eliminación de todos los datos de los alumnos es irreversible.';
$string['deleteRecord'] = 'Eliminar';
$string['deleteRecord_help'] = 'Seleccione un registro y elíjalo (click) para eliminarlo';
$string['description'] = 'Descripción';
$string['dialogue'] = 'Diálogo';
$string['disconnectClient'] = 'Desconectando...';
$string['downloadRecord'] = 'Descargar MP3';
$string['downloadRecord_help'] = 'Elegir para descargar grabación como MP3';
$string['duedate'] = 'Fecha esperada:';
$string['emailbodydelete'] = 'Yo quisiera que Usted reiniciara su grabación. Por favor regrese a la actividad y grábese de nuevo otra vez.';
$string['emailbodynewreply'] = 'Yo he añadido un comentario a su grabación. Por favor regrese a la actividad y oiga/lea mis comentarios.';
$string['emailgreeting'] = 'Hola';
$string['emailsubject'] = 'Actividad -';
$string['emailthankyou'] = 'Gracias';
$string['enableGradebook'] = 'Habilitar integración con el libro de calificaciones para accesar la interfaz para calificar';
$string['error_activity_not_available'] = 'Esta actividad ya no está disponible para crear una grabación nueva';
$string['error_activity_not_available_delete'] = 'Esta actividad ya no está disponible, no puede eliminarse';
$string['error_cannot_connect_student'] = 'No se puede conectar con el estudiante';
$string['error_delete_notexists'] = 'Este registro no se encontró, no se puede completar la eliminación';
$string['error_delete_permission'] = 'Usted no tiene permiso para eliminar este registro';
$string['error_grade_notsaved'] = 'Ocurrió un error al guardar la calificación. La calificación no se guardó.';
$string['error_grade_permission'] = 'Usted no tiene el permiso para calificar a un estudiante';
$string['error_grade_user_notexists'] = 'No existe este usuario para esta actividad. No se guardó la calificación';
$string['error_insert_feedback_parent_notexists'] = 'No existe la grabación del estudiante, no puede insertarse la retroalimentación';
$string['error_insert_feedback_permission'] = 'Usted no tiene el permiso para crear una retroalimentación';
$string['error_missing_camera'] = 'No se detectó cámara. Por favor, conecte una cámara y reinicie el navegador.';
$string['error_missing_microphone'] = 'No se detectó micrófono. Por favor, conecte un micrófono y reinicie el navegador.';
$string['error_record_save'] = 'Ha ocurrido un error, no se guardaron grabaciones';
$string['errorTitle'] = 'Error';
$string['error_user_max_attempts'] = 'Usted no puede crear más grabaciones. Usted debe eliminar una grabación para poder crear una nueva.';
$string['february'] = 'Feb';
$string['feedback'] = 'Retroalimentación';
$string['filterStudents'] = 'Filtro de estudiantes:';
$string['filterStudents_help'] = 'Escriba el nombre del alumno para mostrar solamente a este alumno';
$string['folder'] = 'El nombre de la carpeta en el servidor Red5 en donde son gravbados los archivos';
$string['folder_help'] = 'Escriba el nombre de la carpeta en donde son guardados los archivos para ESTE Moodle.';
$string['friday'] = 'Vie';
$string['fullscreen_student'] = 'Interfaz del estudiante en pantalla completa';
$string['fullscreen_student_help'] = 'Si esta opción está activada, el estudiante tendrá el laboratorio de idioma en modo de pantalla completa sin encabezado/pie de página ni bloques (depende del tema).';
$string['general'] = 'General';
$string['goBackCourse'] = 'Regresar al curso';
$string['goBackCourse_help'] = 'Regresar al curso';
$string['grade'] = 'Calificación';
$string['gradeStudentWithRecordings'] = 'Solamente pueden ser calificados los estudiantes que tengan al menos una grabación';
$string['grading'] = 'Calificar';
$string['group_type'] = 'Tipo de Grupo';
$string['group_type_help'] = '<b>Nota: Use esta configuración solamente si emplea grupos separados o grupos visibles</b><br> <ul><li><i>Discusión:</i> Use este tipo si a Usted le gustaría que sus alumnos graben en forma asincrónica. La conversación se mostrará en una hebra semejante a un foro</li> <li><i>Diálogo:</i> Use este tipo si quiere que su grupo de estudiantes tenga una conversación grabada.</li></ul>';
$string['hours'] = 'horas';
$string['january'] = 'Ene';
$string['july'] = 'Jul';
$string['june'] = 'Jun';
$string['languagelab'] = 'Laboratorio de Idioma';
$string['languagelab:addinstance'] = 'Añadir un nuevo Laboratorio de Idioma';
$string['languagelab:manage'] = 'Laboratorio de Idioma: Mánager.';
$string['languagelab:studentview'] = 'Laboratorio de Idioma: Vista de estudiante.';
$string['languagelab:teacherview'] = 'Laboratorio de Idioma: Vista de Maestro.';
$string['languagelab:view'] = 'Ver Laboratorio de Idioma';
$string['listened'] = 'Tu maestro te está oyendo ahora mismo';
$string['listRecordings'] = 'Grabaciones';
$string['listRecordings_help'] = 'Elija aquí para abrir las grabaciones en una ventana emergente';
$string['LLnext'] = 'Siguiente';
$string['LLnext_help'] = 'Ir al siguiente lab de idioma';
$string['LLprevious'] = 'Anterior';
$string['LLprevious_help'] = 'Ir al lab de idioma anterior';
$string['load_prev_master'] = 'Revertir a la pista maestra anterior';
$string['march'] = 'Mar';
$string['master_track'] = 'Pista maestra (solamente MP3)';
$string['master_track_file'] = 'Pista maestra actualmente usada';
$string['master_track_help'] = 'De forma similar, si Usted tiene grabaciones previas en formato MP3, Usted puede elegir subir el archivo MP3 y usarlo como Pista Maestra.

Su Usted usa el archivo MP3, es importante que seleccione la siguiente casilla \'<i>Usar el MP3 subido como Pista Maestra.</i>\' En caso contrario, se usará la pista de arriba grabada manualmente.<br>Si Usted hubiera subido previamente un MP3, pero quisiera usar la grabación manual, desactive la casilla de  \'<i>Usar el MP3 subido como Pista Maestra.</i>\'';
$string['master_track_recorder'] = 'Pista maestra';
$string['master_track_recorder_help'] = 'Una pista maestra es una muestra de audio con espacios vacíos que les permite a los estudiantes grabarse a sí mismos en las pausas vacías.

<br>Simplememnte presione el botón redondo de grabar y grabe su ejercicio. Por ejemplo, Usted podría grabar el siguiente ejercicio: <ul>
<li> Por favor diga la palabra bonjour <i>(deje una pausa de 5 segundos)</i> Ahora, diga las palabras bon soir <i>(de nuevo. deje una pausa de 5 segundos)</i>
</li></ul> Esta grabación se repetirá cuando el estudiante presione el botón de grabar. Durante las pausas de 5 segundos, el estudiante podrá pronunciar las palabras que se le piden y serán grabadas. Como profesor, cuando oiga la grabación del estudiante, se reproducirá la Pista Maestra junto con la respuesta de los estudiantes, lo que le permitirá comparar fácilmente.<br>Nota: Tuvimos que integrarlo de esta forma debido a que Flash no permite hacer pausa cuando se graba.';
$string['max_users'] = 'Número máximo de usuarios';
$string['max_users_help'] = 'Número máximo de usuarios que pueden usar simultáneamente el laboratorio de idiomas.';
$string['may'] = 'May';
$string['message'] = 'Usted puede escribir un mensaje aquí.';
$string['micConfig'] = 'Configuración';
$string['minutes'] = 'minutos';
$string['modulename'] = 'Laboratorio de idioma';
$string['modulename_help'] = 'OWLL (Laboratorio de Idioma basado-en-web OOHOO) es un plugin de Moodle que replica las funciones de un laboratorio de idioma tradicional, con características añadidas que emanan de estar basado en la web. Permite el uso sincrónico y asincrónico, de cara-a-cara y también en configuración de aprendizaje a distancia.';
$string['modulenameplural'] = 'Laboratorios de idioma';
$string['monday'] = 'Lun';
$string['months'] = 'meses';
$string['name'] = 'Nombre de actividad';
$string['newMastertrack'] = 'Nueva pista maestra';
$string['newRecording'] = 'Nueva grabación';
$string['newReply'] = 'Contestación del maestro';
$string['no_available_date'] = 'No se escribió una fecha de inicio.';
$string['no_due_date'] = 'No se escribió una fecha de término.';
$string['nonStreamingBasePath'] = 'Ruta HTTP hacia los archivos de audio/video.';
$string['nonStreamingBasePath_help'] = 'Esta es la ruta hacia los archivos auténticos de audio/video mediante HTTP. Esto se necesita para una mejor revisión. Puede dejalo vacío si no tiene esta ruta.';
$string['norappermission'] = 'Usted no tiene los permisos requeridos para ver esta página.';
$string['not_available'] = 'Esta actividad caducó. Usted puede leer/oir las notas de sus maestros. Sin embargo, ya no podrá hacer más grabaciones nuevas.';
$string['note_play_mastertrack'] = '<i><b>Nota: </b> Si Usted sube una pista maestra MP3, este sonido no se podrá reproducir en el reproductor superior hasta que Usted guarde este formato.</i>';
$string['notesCorrection'] = 'Notas y Corrección';
$string['november'] = 'Nov';
$string['october'] = 'Oct';
$string['playeroptionsBtnOk'] = 'OK';
$string['playeroptionstxt1'] = 'Para poder usar el Laboratorio de Idioma,Usted necesita autorizar el acceso a su micrófono. Para hacer eso:';
$string['playeroptionstxt2'] = 'En la pestaña de "{$a} Privacidad"';
$string['playeroptionstxt3'] = 'Seleccione "{$a} Permitir"';
$string['playeroptionstxt4'] = 'Elija la casilla {$a} junto a Recordar';
$string['playeroptionstxt5'] = 'Elija al Cerrar';
$string['playeroptionstxt6'] = 'Elija el botón de OK al fondo de la ventana para guardar sus cambios.';
$string['pluginadministration'] = 'Laboratorio de Idioma';
$string['pluginname'] = 'Laboratorio de Idioma - OWLL';
$string['prefix'] = 'Escriba un prefijo para los canales grabados';
$string['prefix_help'] = 'El prefijo de aquí es útil si el servidor Red5 es usado para transmitir otro material. Usted será capaz de identificar facilmente canales grabados (\'\'recorded streams\'\')';
$string['prerequisitesNotMet'] = 'El servidor destino no fue especificado. Contacte a su administrador de servidores (webmaster).';
$string['previous_recording'] = 'Sus grabaciones previas:';
$string['prev_next_lab'] = 'Añadir botones de Anterior/Siguiente';
$string['prev_next_lab_help'] = 'Añadir dos botones para Anterior/Siguiente al fondo de la actividad, para ir al laboratorio de idiomas anterior o siguiente del curso.';
$string['privateNotes'] = 'Notas privadas';
$string['raiseHand'] = 'Levantar la mano';
$string['raiseHand_help'] = 'Elija aquí para levantar su mano y que la vea el maestro';
$string['recorderdescription'] = 'Grabadora';
$string['recording_exists'] = 'Aviso: Usted ya tiene una grabación hecha. Por favor revise la grabación antes de apretar el botón de \'grabar\', porque al apretar dicho botón se borrará la grabación previa.';
$string['recording_failed_save'] = 'No se pudo guardar su grabación en la base de datos';
$string['recordingRequired'] = 'Usted tiene que grabar antes de poder enviar';
$string['recordings'] = 'Grabaciones';
$string['recording_saved'] = 'Su grabación ha sido enviada';
$string['recordingsHistory'] = 'Grabaciones';
$string['recording_timelimit'] = 'Tiempo límite de grabación en minutos (0 = ilimitado)';
$string['recordingTitle'] = 'Título';
$string['red5config'] = 'Escriba aquí la dirección IP o el nombre calificado completo de su servidor Red5. ¡Localhost no funcionará!';
$string['red5server'] = 'Ruta hacia su servidor Red5';
$string['red5serverfolder'] = 'Ruta hacia la carpeta del servidor Red5 (ejemplo: oflaDemo)';
$string['red5serverfolder_help'] = 'Su primera carpeta del servidor RTPM. Esta carpeta es la aplicación que lee y graba archivos.';
$string['red5server_help'] = 'Escriba la dirección IP o el nombre completo calificado para su servidor Red5. ¡Localhost no funcionará! Usted puede especificar al final el puerto si fuera diferente del puerto por defecto (ejemplo: 123.456.789:12345)';
$string['red5serverprotocol'] = 'Su protocolo del servidor RTPM';
$string['red5serverprotocol_help'] = 'El protocolo de su servidor RTPM. Generalmente es rtpm.';
$string['reFeedBack'] = 'Re:';
$string['refresh'] = 'Refrescar Historia';
$string['salt'] = 'Valor de Sal de contraseña (pasword salt):';
$string['salt_help'] = 'Escriba el valor de la sal de contraseña (password salt) para su instancia de Red5 tal y como se la proporcionó su administrador de Red5.';
$string['saturday'] = 'Sáb';
$string['search'] = 'Buscar:';
$string['seconds'] = 'segundos';
$string['secondsRefreshClassmonitor'] = 'Número de microsegundos antes del siguiente auto refresco del monitor de clase';
$string['secondsRefreshClassmonitor_help'] = 'Escriba el número de microsegundos para auto-refrescar la lista de estudiantes en el monitor de clase.';
$string['secondsRefreshHistory'] = 'Número de microsegundos antes del siguiente auto refresco de historia';
$string['secondsRefreshHistory_help'] = 'Escriba el número de microsegundos para auto-refrescar las grabaciones.';
$string['secondsRefreshStudentView'] = 'Número de microsegundos antes del siguiente auto refresco para estudiantes';
$string['secondsRefreshStudentView_help'] = 'Escriba el número de microsegundos para auto-refrescar la vista del estudiante. Usada para \'en vivo\'';
$string['select_group_type'] = 'Seleccionar el tipo de grupo';
$string['september'] = 'Sept';
$string['simplified_interface_student'] = 'Interfaz simplificada para estudiantes';
$string['simplified_interface_student_help'] = 'Si quiere una interfaz simplificada para el estudiante, con solamente la grabadora y el botón para enviar. Solamente está disponible si está activada la opción de \'\'una grabación por estudiante\'\'.';
$string['speakToClass'] = 'Hablar a la clase';
$string['speakToClasshelp'] = 'Le permite hablar en vivo a todos sus alumnos en línea';
$string['startOver'] = 'Requerir que el estudiante empiece de nuevo';
$string['stealth'] = 'Sigiloso';
$string['stealthActive'] = 'Actualmente activo';
$string['stealthInactive'] = 'Actualmente inactivo';
$string['stealthMode'] = '¿Activar modo sigiloso?';
$string['stealthMode_help'] = 'Cuando se activa, los estudiantes no sabrán que están siendo monitoreados cuando el profesor use el monitor de clase.';
$string['student_delete_recordings'] = 'Permitirle a los estudiantes eliminar sus grabaciones';
$string['student_delete_recordings_help'] = 'Si esta casilla se selecciona, los estudiantes pueden eliminar sus grabaciones, excepto: si hay una respuesta del maestro a esta grabación, la actividad  está no-disponible.';
$string['student_recording'] = 'Grabaciones de estudiantes';
$string['studentsOffline'] = 'Estudiantes fuera-de-línea';
$string['studentsOnline'] = 'Estudiantes en-línea';
$string['subject'] = 'Grabando';
$string['submit'] = 'Enviar';
$string['submitBlank'] = 'Enviar';
$string['submitChanges'] = 'Enviar cambios';
$string['submitGrade'] = 'Enviar';
$string['submitGrade_help'] = 'Elija para enviar la calificación del estudiante';
$string['submitNew'] = 'Enviar grabación';
$string['submitRecord'] = 'Enviar';
$string['submitRecord_help'] = 'Elija para enviar su grabación';
$string['submit_recording'] = 'Enviar su grabación';
$string['sunday'] = 'Dom';
$string['talkToStudent_help'] = 'Elija aquí para hablarle a este estudiante';
$string['teacher_class_speak'] = '<div class="dialogTeacherPic">{$a}</div> <br />hablarle a la clase';
$string['teacher_class_speak_title'] = 'El maestro le habla a la clase';
$string['teacher_student_speak'] = '<div class="dialogTeacherPic">{$a}</div> <br /> ha empezado una discusión contigo. Tu estás ahora conectado/a.';
$string['teacher_student_speak_title'] = 'Discusión con un maestro';
$string['thumbsUp_help'] = 'Elija aquí para mandarle un &quot;Thumbs Up&quot; a este estudiante';
$string['thumbsup_student'] = '¡Buen Trabajo!';
$string['thursday'] = 'Jue';
$string['timesOut'] = 'Tiempo agotado';
$string['titleConfirm'] = 'Confirmación';
$string['titlePlayerOptions'] = 'Opciones del micrófono';
$string['titleRecording'] = 'Grabando';
$string['tuesday'] = 'Mar';
$string['use_grade_book'] = 'Usar libro calificador';
$string['use_grade_book_help'] = 'Por defecto, no se dará calificación a las actividades del laboratorio de idioma. De esa forma, Usted puede crear muchas actividades de idioma para fines de ejercicios, sin llenar de números su libro calificador. Si Usted desea calificar esta actividad en particular, elija esta casilla.';
$string['use_mp3'] = '¿Usar el MP3 subido como Pista Maestra?';
$string['use_mp3_help'] = 'Si Usted usa un archivo subido, Usted querrá asegurarse que esta casilla está seleccionada. De otra forma, al guardar, se usará la grabación Manual como la Pista Maestra. Por otro lado, si Usted deseara usar la grabación manual, asegúrese de que esta casilla está desactivada. Acuérdese de guardar los cambios';
$string['use_video'] = 'Permitir video';
$string['video'] = 'Permitiendo video';
$string['video_help'] = 'Elija esta casilla si le gustaría que sus estudiantes usen video y audio cuando graben. Esto puede ser útil, por ejemplo. para lenguaje de señas para sordomudos.';
$string['video_unavailable'] = 'Opción de video en desarrollo.';
$string['warningLossOfWork'] = 'Usted está intentando navegar lejos de una grabación a la cual le hizo cambios que podrían enviarse. ¿Está Usted seguro de querer descartar sus cambios?';
$string['wednesday'] = 'Mié';
$string['weeks'] = 'semanas';
$string['words'] = 'Lista de palabras para que las graben los estudiantes';
$string['XMLLoadFail'] = 'No se pudo cargar el XML. Contacte a su webmaster administrador de servidores.';
$string['years'] = 'años';
