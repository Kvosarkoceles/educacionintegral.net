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
 * Strings for component 'quiz_answersheets', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   quiz_answersheets
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_instruction_message'] = 'Mensaje con instrucciones';
$string['admin_instruction_message_des'] = 'Si se activa, este texto será mostrado en la parte superior del reporte. Usted puede usar esto, por ejemplo, para enlazar hacia cualquier política institucional acerca de imprimir exámenes sumativos.';
$string['answer_sheet_label'] = 'Hoja de respuestas correctas';
$string['answersheets'] = 'Intentos de exportación';
$string['answersheets:bulkdownload'] = 'Descargar masivamente hoja de revisión';
$string['answersheets:componentname'] = 'Exportar intentos de examen';
$string['answersheets:createattempt'] = 'Crear un intento para otro usuario';
$string['answersheetsfilename'] = 'Intentos_de_examen_exportables';
$string['answersheetsreport'] = 'Exportar intentos de examen';
$string['answersheets:submitresponses'] = 'Enviar respuestas del estudiante';
$string['answersheets:view'] = 'Ver hoja de respuestas';
$string['answersheets:viewrightanswers'] = 'Ver hoja de respuesta correcta';
$string['answer_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Hoja de respuesta';
$string['attempt_sheet_label'] = 'Hoja del intento';
$string['attempt_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Hoja del intento';
$string['bulkdownloadlink'] = 'Descargar masivamente hojas de revisión';
$string['bulkinstructions'] = 'Para poder descargar masivamente hojas de revisión, Usted necesita en su computadora la herramienta `save-answersheets` Una vez que la tenga:

1. Los intentos que serán descargados cuando Usted siga estas instrucciones están basados en las configuraciones del reporte que Usted dejó.
   Lo que este proceso hará es seguir efectivamente cada enlace que haya hacia una **Hoja de revisión**. Así que, si tiene alguna duda, regrese y revise que el reporte esté mostrando los intentos que desea exportar.
2. Una vez que esté satisfecho, descargue el [archivo para descargar masivamente]({$a->scripturl}) que le dirá a `save-answersheets` lo que tiene que hacer.
   **¡No olvide la advertencia de arriba!**
3. Guarde ese archivo (que debería de llamarse `{$a->scriptname}-steps.txt`) en la misma carpeta en donde Usted tiene las `save-answersheets` en su computadora.
4. Abra una línea de comando de instrucciones y vaya a esa carpeta.
5. Escriba el comando `.\\save-answersheets {$a->scriptname}-steps.txt` y espere a que se ejecute. Sacará lo que esté haciendo conforme trabaje.
6. Una vez que el script haya terminado, Usted debería de tener un archivo `{$a->scriptname}.zip` adentro de la carpeta `output`.
7. Recuerde eliminar el archivo `{$a->scriptname}-steps.txt`.';
$string['bulkinstructionstitle'] = 'Instrucciones para descargar masivamente hojas de revisión';
$string['bulkinstructionswarning'] = '¡<b>Advertencia</b>! el archivo que Usted descargue en el paso 2 de las instrucciones inferiores contiene información suficiente para que la herramienta acceda a los intentos del examen a ser guardados usando su sesión de ingreso actual. Usted  <b>debe</b> borrar ese archivo tan pronto como haya terminado de usarlo. El conservar ese archivo es un riesgo de seguridad.';
$string['coderunner_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['column_answer_sheet'] = 'Hojas de respuesta';
$string['column_attempt_sheet'] = 'Hojas de intento';
$string['column_submit_student_responses'] = 'Enviar respuestas de estudiante';
$string['create_attempt'] = 'Crear Intento';
$string['create_attempt_modal_button'] = 'Crear';
$string['create_attempt_modal_description'] = '¿Está seguro de querer crear un intento de examen para {$a}?';
$string['create_attempt_modal_title'] = 'Confirmación';
$string['ddimageortext_instruction'] = 'Marque los puntos en la imagen y escriba la letra de la respuesta que corresponda (A, B, C, D, ...) a un lado.
Después del ítem está el número máximo de veces que puede ser usado; por ejemplo, (1) significa que el ítem solamente puede ser usado una vez, (2) significa dos veces, etc. Un asterisco (*) significa que el uso del ítem es ilimitado.';
$string['ddmarker_instruction'] = 'Marque los puntos en la imagen y escriba la letra de la respuesta que corresponda (A, B, C, D, ...) a un lado.
Después del ítem está el número máximo de veces que puede ser usado; por ejemplo, (1) significa que el ítem solamente puede ser usado una vez, (2) significa dos veces, etc. Un asterisco (*) significa que el uso del ítem es ilimitado.';
$string['ddwtos_instruction'] = 'Escriba la letra correspondiente  a la respuesta (A, B, C, D, ...) en el espacio correspondiente.
Después del ítem está el número máximo de veces que puede ser usado; por ejemplo, (1) significa que el ítem solamente puede ser usado una vez, (2) significa dos veces, etc. Un asterisco (*) significa que el uso del ítem es ilimitado.';
$string['essay_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['event_attempt_created'] = 'Intento de examen creado para usuario';
$string['event_attempt_printed'] = 'Hoja de intento de examen impresa';
$string['event_attempt_viewed'] = 'Hoja de intento de examen vista';
$string['event_responses_submitted'] = 'Respuestas del examen enviadas para usuario';
$string['event_right_answer_printed'] = 'Hoja de respuesta correcta impresa';
$string['event_right_answer_viewed'] = 'Hoja de respuesta correcta vista';
$string['examcode'] = 'Código de confirmación';
$string['gapselect_instruction'] = 'Escriba la letra de la respuesta correspondiente (A, B, C, D, ...) en el espacio proporcionado.';
$string['interactive_content_warning'] = 'Contenido interactivo no está disponible en este formato.';
$string['match_instruction'] = 'Escriba la letra de la respuesta correspondiente (A, B, C, D, ...) en el espacio proporcionado.';
$string['multichoice_instruction'] = 'Seleccione la respuesta correcta.';
$string['numerical_instruction'] = 'Escriba su respuesta (en valor numérico) en el espacio proporcionado.';
$string['ordering_instruction'] = 'Escriba el orden correcto en el espacio proporcionado.';
$string['oumultiresponse_instruction'] = 'Seleccione la(s) respuesta(s) correcta(s).';
$string['page_type_answer'] = 'Hoja de respuesta';
$string['page_type_attempt'] = 'Hoja de intento';
$string['page_type_review'] = 'Hoja de revisión';
$string['pluginname'] = 'Exportar intentos de examen';
$string['pmatch_instruction'] = 'Escriba su respuesta en el espacio proporcionado. Por favor limítese a una oración o dos.';
$string['pmatchjme_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['print'] = 'Imprimir';
$string['print_header'] = '{$a->courseshortname} {$a->quizname} para {$a->studentname} generada {$a->generatedtime} - {$a->sheettype}';
$string['print_header_minimised'] = '{$a->courseshortname} {$a->quizname} generada {$a->generatedtime} - {$a->sheettype}';
$string['privacy:metadata'] = 'El plugin para exportar intentos de examen no almacena ningún dato personal por sí mismo. Proporciona una interfaz adicional para ver y gestionar los datos propiedad de la actividad de examen.';
$string['review_sheet_label'] = 'Hoja de revisión';
$string['review_sheet_title'] = '{$a->courseshortname} - {$a->quizname} - Hoja de revisión';
$string['shortanswer_instruction'] = 'Escriba su respuesta en el espacio proporcionado. Por favor limítese a una oración o dos.';
$string['showuserinfo'] = 'Información identificadora a mostrar acerca de los usuarios';
$string['stack_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['strftime_header'] = '%d %b %Y, %H:%M';
$string['submit_student_responses_dialog_content'] = '¿Está seguro de que desea enviarlo?';
$string['submit_student_responses_label'] = 'Enviar respuestas...';
$string['submit_student_responses_on_behalf'] = 'Enviar respuestas a nombre de {$a} y terminar el intento';
$string['submit_student_responses_title'] = '{$a}: Enviar respuestas del estudiante';
$string['truefalse_instruction'] = 'Seleccione la repuesta correcta.';
$string['user_identity_fields'] = '({$a})';
$string['varnumeric_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['varnumericset_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['varnumunit_instruction'] = 'Escriba su respuesta en el espacio proporcionado.';
$string['webservicecannotcreateattempts'] = 'No se puede crear intento';
$string['wordselect_instruction'] = 'Seleccione la(s) respuesta(s) correcta(s) al encerrar en un círculo la(s) palabra(s) clave.';
