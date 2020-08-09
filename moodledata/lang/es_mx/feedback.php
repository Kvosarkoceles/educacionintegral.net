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
 * Strings for component 'feedback', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Añadir pregunta';
$string['add_pagebreak'] = 'Añadir salto de página';
$string['adjustment'] = 'Ajuste';
$string['after_submit'] = 'Después del envío';
$string['allowfullanonymous'] = 'Permitir anonimato completo';
$string['analysis'] = 'Análisis';
$string['anonymous'] = 'Anónima';
$string['anonymous_edit'] = 'Registrar nombres de usuario';
$string['anonymous_entries'] = 'Respuestas anónimas ({$a})';
$string['anonymous_user'] = 'Usuario anónimo';
$string['answerquestions'] = 'Contestar las preguntas';
$string['append_new_items'] = 'Agregar ítems nuevos';
$string['autonumbering'] = 'Auto numerar preguntas';
$string['autonumbering_help'] = 'Activa o desactiva la numeración automática para cada pregunta';
$string['average'] = 'Promedio';
$string['bold'] = 'Negrita';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cannotaccess'] = 'Usted solamente puede acceder a esta retroalimentación desde un curso';
$string['cannotsavetempl'] = 'No se permite guardar plantillas';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'No se ha ajustado el Captcha.';
$string['check'] = 'Opción múltiple (varias respuestas)';
$string['checkbox'] = 'Elección múltiple (se permiten varias respuestas - casillas de elección)';
$string['check_values'] = 'Respuestas posibles';
$string['choosefile'] = 'Seleccione un archivo';
$string['chosen_feedback_response'] = 'Respuesta de retroalimentación elegida';
$string['closebeforeopen'] = 'Usted ha especificado una fecha de terminación anterior a la fecha de inicio.';
$string['completed'] = 'Completado';
$string['completed_feedbacks'] = 'Respuestas enviadas';
$string['completedon'] = 'Completado en {$a}';
$string['complete_the_form'] = 'Contestar las preguntas';
$string['completionsubmit'] = 'Ver como completado si se envía retroalimentación';
$string['configallowfullanonymous'] = 'Si se establece esta opción,los usuarios pueden completar una actividad de retroalimentación en la portada sin que se les pida ingresar.';
$string['confirmdeleteentry'] = '¿Está seguro que quiere borrar esta entrada?';
$string['confirmdeleteitem'] = '¿Está seguro que quiere borrar este elemento?';
$string['confirmdeletetemplate'] = '¿Está seguro que quiere utilizar esta plantilla?';
$string['confirmusetemplate'] = '¿Está seguro de querer usar esta plantilla?';
$string['continue_the_form'] = 'Continuar contestando las preguntas';
$string['count_of_nums'] = 'Conteo de números';
$string['courseid'] = 'ID del curso';
$string['creating_templates'] = 'Guardar estas preguntas como plantilla nueva';
$string['delete_entry'] = 'Eliminar entrada';
$string['delete_item'] = 'Eliminar pregunta';
$string['delete_old_items'] = 'Eliminar ítems antiguos';
$string['delete_pagebreak'] = 'Eliminar salto de página';
$string['delete_template'] = 'Eliminar plantilla';
$string['delete_templates'] = 'Eliminar plantilla...';
$string['depending'] = 'Dependencias';
$string['depending_help'] = 'Los items dependientes le permiten mostrar items que dependen de otros items.<br /> <strong>Por ejemplo:</strong><br /> <ul> <li>primero fabrique un item de cuyo valor dependerán otros items.</li> <li>Despues ponga un salto de página.</i> <li>Despues ponga los items que dependen de este valor<br />Elija dentro del formato de creacion de items, el item de la lista "item dependiente" y ponga el valor necesario dentro de la caja de texto "valor dependiente".</li> </ul> <strong>La estructura debe verse asi:</strong> <ol> <li>Item Q: ¿tienes un auto? A: si/no</li> <li>Pagebreak</li> <li>Item Q: ¿de qué color es tu auto?<br /> (esto depende de que el item 1 tenga valor de  = si)</li> <li>Item Q: ¿porqué no  tienes auto?<br /> (esto depende de que el item 1 tenga valor de = no)</li> <li> ... otros items</li> </ol> Eso es todo.';
$string['dependitem'] = 'Item dependiente';
$string['dependvalue'] = 'Valor dependiente';
$string['description'] = 'Descripción';
$string['do_not_analyse_empty_submits'] = 'No analizar envíos vacíos';
$string['downloadresponseas'] = 'Descargar todas las respuestas como:';
$string['dropdown'] = 'Opción múltiple - respuesta única permitida (menú desplegable)';
$string['dropdownlist'] = 'Opción múltiple - respuesta única (menú desplegable)';
$string['dropdownrated'] = 'Menú desplegable (valorado)';
$string['dropdown_values'] = 'Valores de la lista desplegable';
$string['drop_feedback'] = 'Eliminar de este curso';
$string['edit_item'] = 'Editar pregunta';
$string['edit_items'] = 'Editar preguntas';
$string['email_notification'] = 'Habilitar notificaciones de los envíos';
$string['email_notification_help'] = 'Si está habilitado, los profesores recibirán notificaciones por correo electrónico de los envíos de retroalimentaciones';
$string['emailteachermail'] = '{$a->username} ha terminado y enviado la retroalimentación: \'{$a->feedback}\' Puede verla aquí {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} ha tercompletado la actividad de retroalimentación: <i>\'{$a->feedback}\'</i>.</p>
<p>Está <a href="{$a->url}">disponible en el sitio</a>.</p>';
$string['entries_saved'] = 'Sus respuestas han sido guardadas. Gracias.';
$string['eventresponsedeleted'] = 'Respuesta eliminada';
$string['eventresponsesubmitted'] = 'Respuesta enviada';
$string['export_questions'] = 'Exportar preguntas';
$string['export_to_excel'] = 'Exportar a Excel';
$string['feedback:addinstance'] = 'Añadir una nueva retrolimentación';
$string['feedbackclose'] = 'Permitir respuestas a';
$string['feedback:complete'] = 'Rellene la retroalimentación';
$string['feedbackcompleted'] = '{$a->username} completó {$a->feedbackname}';
$string['feedback:createprivatetemplate'] = 'Crear plantilla privada';
$string['feedback:createpublictemplate'] = 'Crear plantilla pública';
$string['feedback:deletesubmissions'] = 'Eliminar envíos completados';
$string['feedback:deletetemplate'] = 'Eliminar plantilla';
$string['feedback:edititems'] = 'Editar ítems';
$string['feedback_is_not_for_anonymous'] = 'La retroalimentación no es para anónimos';
$string['feedback_is_not_open'] = 'La retroalimentación no está disponible';
$string['feedback:mapcourse'] = 'Asignar cursos a retroalimentaciones globales';
$string['feedbackopen'] = 'Permitir respuestas de';
$string['feedback:receivemail'] = 'Recibir notificación por correo electrónico';
$string['feedback:view'] = 'Ver una retroalimentación';
$string['feedback:viewanalysepage'] = 'Ver página de análisis después del envío';
$string['feedback:viewreports'] = 'Ver reportes';
$string['file'] = 'Archivo';
$string['filter_by_course'] = 'Filtrar por curso';
$string['handling_error'] = 'Error en la ejecución del módulo retroalimentación';
$string['hide_no_select_option'] = 'Ocultar la opción "No seleccionada"';
$string['horizontal'] = 'Horizontal';
$string['importfromthisfile'] = 'Importar de este archivo';
$string['import_questions'] = 'Importar preguntas';
$string['import_successfully'] = 'Importación exitosa';
$string['includeuserinrecipientslist'] = 'Incluir {$a} en la lista de destinatarios';
$string['indicator:cognitivedepth'] = 'Retroalimentación cognitiva';
$string['indicator:cognitivedepthdef'] = 'Retroalimentación cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Retroalimentación durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Retroalimentación.';
$string['indicator:socialbreadth'] = 'Retroalimentación social';
$string['indicator:socialbreadthdef'] = 'Retroalimentación social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Retroalimentación durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Retroalimentación.';
$string['info'] = 'Información';
$string['infotype'] = 'Tipo de información';
$string['insufficient_responses'] = 'Respuestas insuficientes';
$string['insufficient_responses_for_this_group'] = 'Este grupo no tiene suficientes respuestas';
$string['insufficient_responses_help'] = 'Para que la retroalimentación sea anónima, debe haber un mínimo de 2 respuestas.';
$string['item_label'] = 'Etiqueta';
$string['item_name'] = 'Pregunta';
$string['label'] = 'Etiqueta';
$string['labelcontents'] = 'Contenidos';
$string['mapcourse'] = 'Mapear retralimentación a los cursos';
$string['mapcourse_help'] = 'Por  default, los formatos para retroalimentación creadas sobre la portada están disponibles a todo lo ancho del sitio y aparecerán en todos los cursos que emplean el bloque de retroalimentación. Usted puede forzar que aparezca el formato de retroalimentación haciéndolo dentro de un bloque pegajoso o puede limitar los cursos en donde aparecerá el formato de retroalimentación mapeándolo a cursos específicos.';
$string['mapcourseinfo'] = 'Esta retroalimentación está disponible en todos los cursos que usan el bloque retroalimentación. Usted puede sin embargo limitar los cursos en que aparece. Busque el curso y asígnelo a esta retroalimentación.';
$string['mapcoursenone'] = 'No hay cursos mapeados. La retroalimentación está disponible en todos los cursos';
$string['mapcourses'] = 'Asignar retroalimentación a cursos';
$string['mappedcourses'] = 'Cursos mapeados';
$string['mappingchanged'] = 'El mapeo del curso ha sido cambiado';
$string['maximal'] = 'Máximo';
$string['messageprovider:message'] = 'Recordatorio de retroalimentación';
$string['messageprovider:submission'] = 'Notificaciones de retroalimentaciones';
$string['minimal'] = 'Mínimo';
$string['mode'] = 'Modo';
$string['modulename'] = 'Retroalimentación';
$string['modulename_help'] = 'El módulo de actividad de Retroalimentación le permite al profesor crear encuestas personalizadas para colectar retroalimentación de los participantes, empleando una variedad de tipos de preguntas que incluyen opción múltiple, falso/verdadero, o respuesta de texto.

Las respuestas de retroalimentación pueden ser anónimas si así se desea, y los resultados se pueden mostrar a todos los participantes o limitarse a solamente los profesores. Cualquier actividad de retroalimentación en la página de portada del sitio Moodle puede ser contestada por usuarios sin necesidad de autenticarse.

Las actividades de retroalimentación pueden usarse

* Para evaluaciones del curso, ayudando a mejorar el contenido para participantes futuros
* Para permitirles a los participantes apuntarse a módulos y eventos del curso
* Para encuestas de invitados sobre variedad de cursos, políticas escolares, etc.
* Para encuestas anti-bullying en las que los estudiantes pueden reportar incidentes anónimamente';
$string['modulenameplural'] = 'Retroalimentaciones';
$string['move_item'] = 'Mover esta pregunta';
$string['multichoice'] = 'Opción múltiple';
$string['multichoiceoption'] = '<span class="ponderación">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Opción múltiple (clasificadas)';
$string['multichoicetype'] = 'Tipo opción múltiple';
$string['multichoice_values'] = 'Valores para opción múltiple';
$string['multiplesubmit'] = 'Permitir envíos múltiples';
$string['multiplesubmit_help'] = 'Si están habilitadas las  encuestas anónimas, los usuarios pueden enviar sus retroalimentaciones un número ilimitado de veces.';
$string['name'] = 'Nombre';
$string['name_required'] = 'Nombre requerido';
$string['next_page'] = 'Siguiente página';
$string['no_handler'] = 'No existe manejador de acción para';
$string['no_itemlabel'] = 'No etiqueta';
$string['no_itemname'] = 'Falta el nombre del ítem';
$string['no_items_available_yet'] = 'No se han planificado preguntas';
$string['non_anonymous'] = 'Los nombres de los usuarios se mostrarán y registrarán con las respuestas';
$string['non_anonymous_entries'] = 'Entradas no anónimas ({$a})';
$string['non_respondents_students'] = 'Estudiantes no respondientes ({$a})';
$string['not_completed_yet'] = 'Aún no se ha finalizado';
$string['no_templates_available_yet'] = 'No hay plantillas disponibles';
$string['not_selected'] = 'No seleccionada';
$string['not_started'] = 'No comenzado';
$string['numberoutofrange'] = 'Número fuera del rango';
$string['numeric'] = 'Respuesta numérica';
$string['numeric_range_from'] = 'Rango desde';
$string['numeric_range_to'] = 'Rango hasta';
$string['of'] = 'de';
$string['oldvaluespreserved'] = 'Se preservarán todas las preguntas antiguas y los valores asignados';
$string['oldvalueswillbedeleted'] = 'Se eliminarán las preguntas actuales y todas las respuestas.';
$string['only_one_captcha_allowed'] = 'En la retroalimentación sólo se admite un captcha';
$string['openafterclose'] = 'Usted ha especificado una  fecha de apertura posterior a la fecha de cierre';
$string['overview'] = 'Vista general';
$string['page'] = 'Página';
$string['page_after_submit'] = 'Página a mostrar tras la terminación del envío';
$string['pagebreak'] = 'Salto de página';
$string['page-mod-feedback-x'] = 'Cualquier página del módulo retroalimentación';
$string['pluginadministration'] = 'Administración de la retroalimentación';
$string['pluginname'] = 'Retroalimentación';
$string['position'] = 'Posición';
$string['previous_page'] = 'Página anterior';
$string['privacy:metadata:completed'] = 'Un registro de los envíos a la retroalimentación';
$string['privacy:metadata:completed:anonymousresponse'] = 'Si es que el envío será usado anónimamente.';
$string['privacy:metadata:completed:timemodified'] = 'La hora en la que el envío fue modificado por última vez.';
$string['privacy:metadata:completedtmp'] = 'Un registro de los envíos que aun están en progreso.';
$string['privacy:metadata:completed:userid'] = 'La ID del usuario que completó la actividad de retroalimentación.';
$string['privacy:metadata:value'] = 'Un registro de la repuesta a una pregunta.';
$string['privacy:metadata:valuetmp'] = 'Un registro de la repuesta a una pregunta en un envío en progreso.';
$string['privacy:metadata:value:value'] = 'La respuesta elegida.';
$string['public'] = 'Pública';
$string['question'] = 'Pregunta';
$string['questionandsubmission'] = 'Configuraciones de pregunta y envío';
$string['questions'] = 'Preguntas';
$string['questionslimited'] = 'mostrando solamente las {$a} primeras preguntas, ver respuestas individuales o descargar datos de tabla para verlos todos.';
$string['radio'] = 'Opción múltiple - respuesta única';
$string['radio_values'] = 'Valores de los botones de opción';
$string['ready_feedbacks'] = 'Retroalimentaciónes preparadas';
$string['required'] = 'Obligatorio';
$string['resetting_data'] = 'Reiniciar respuestas a la retroalimentación';
$string['resetting_feedbacks'] = 'Reiniciando retroalimentaciones';
$string['response_nr'] = 'Respuesta número';
$string['responses'] = 'Respuestas';
$string['responsetime'] = 'Hora de respuesta';
$string['save_as_new_item'] = 'Guardar como nueva pregunta';
$string['save_as_new_template'] = 'Guardar como nueva plantilla';
$string['save_entries'] = 'Enviar sus respuestas';
$string['save_item'] = 'Guardar pregunta';
$string['saving_failed'] = 'No se pudo guardar';
$string['search:activity'] = 'Retroalimentación - información de actividad';
$string['search_course'] = 'Buscar curso';
$string['searchcourses'] = 'Buscar cursos';
$string['searchcourses_help'] = 'Buscar el código o el nombre del (los) curso(s) que desea asociar con esta retroalimentación.';
$string['selected_dump'] = 'Los índices seleccionados en la variable $SESSION se desecharon debajo:';
$string['send'] = 'Enviar';
$string['send_message'] = 'Enviar mensaje';
$string['show_all'] = 'Mostrar todo';
$string['show_analysepage_after_submit'] = 'Mostrar página de análisis';
$string['show_entries'] = 'Mostrar respuestas';
$string['show_entry'] = 'Mostrar respuesta';
$string['show_nonrespondents'] = 'Mostrar no respondientes';
$string['site_after_submit'] = 'Sitio tras el envío';
$string['sort_by_course'] = 'Ordenar por curso';
$string['started'] = 'Comenzado';
$string['startedon'] = 'Comenzado en {$a}';
$string['subject'] = 'Materia';
$string['switch_item_to_not_required'] = 'Configurar como no-obligatoria';
$string['switch_item_to_required'] = 'Configurar como obligatoria';
$string['template'] = 'Plantilla';
$string['template_deleted'] = 'Plantilla eliminada';
$string['templates'] = 'Plantillas';
$string['template_saved'] = 'Plantilla guardada';
$string['textarea'] = 'Respuesta de texto larga';
$string['textarea_height'] = 'Número de líneas';
$string['textarea_width'] = 'Anchura';
$string['textfield'] = 'Respuesta de texto corta';
$string['textfield_maxlength'] = 'Número máximo de caracteres';
$string['textfield_size'] = 'Anchura del campo de texto';
$string['there_are_no_settings_for_recaptcha'] = 'No se ha configurado el captcha';
$string['this_feedback_is_already_submitted'] = 'Usted ya ha finalizado esta actividad.';
$string['typemissing'] = 'Valor ausente "tipo"';
$string['update_item'] = 'Guardar cambios en la pregunta';
$string['url_for_continue'] = 'Enlace hacia siguiente actividad';
$string['url_for_continue_help'] = 'De manera predeterminada, cuando se envía una retroalimentación, se muestra el botón Continuar, que enlaza a la página del curso. Alternativamente, Usted puede definir que enlace a la siguiente actividad si escribe aquí la URL de dicha actividad.';
$string['use_one_line_for_each_value'] = '¡Use una línea para cada respuesta!';
$string['use_this_template'] = 'Usar esta plantilla';
$string['using_templates'] = 'Utilizar una plantilla';
$string['vertical'] = 'Vertical';
