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
 * Strings for component 'local_fm', language 'es_mx', branch 'MOODLE_23_STABLE'
 *
 * @package   local_fm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionwithselected'] = 'Acción con seleccionados';
$string['actionwithselected_help'] = '<p>Las respuestas seleccionadas están marcadas con una casilla seleccionada en la columna hacia el extremo derecho de la tabla de respuestas.
Una acción realizada sobre las respuestas seleccionadas será aplicada a todas las seleccionadas, aún a aquellas que no estén visibles en la página actualmente mostrada.</p>

<p><b>Asignar marca (tag)</b> asigna la marca (tag) seleccionada a todas las respuestas seleccionadas; o en el caso cuando no  hubiera ninguna marca seleccionada, la acción remueve la asignación de marca actual.</p>

<p><b>Asignar calificación</b> asigna la calificación configurada en el campo de entrada junto al botón de "Asignar calificación".
Sin embargo, si la calificación configurada excede el máximo de puntos permitidos indicado a la derecha del campo, se asignará cero.</p>';
$string['addcategory'] = 'Añadir categoría';
$string['addfeedback'] = 'Añadir retroalimentación';
$string['addfilter'] = 'Añadir filtro';
$string['assignedby'] = 'Asignado por: {$a}';
$string['category'] = 'Categoría de retroalimentación';
$string['categoryinfo'] = 'Descripción';
$string['categoryname'] = 'Nombre de categoría';
$string['clearallconfirm'] = 'Todos los cambios en esta página que no se hayan guardado serán eliminados. ¿Está seguro de querer continuar?';
$string['coursereport'] = 'Reporte de Retroalimentación por correo a examen de curso';
$string['coursereport_help'] = '<h2>Intentos de examen</h2>

<p>Los exámenes se enlistan en la parte superior del reporte como encabezados de columnas. Si elige el nombre de un examen, verá el resumen de resultados para dicho examen. La calificación para cada intento del estudiante se muestra en una línea separada en la celda correspondiente en la columna del examen. Elija la calificación para ver el intento del estudiante. Su retroalimentación en respuesta al intento del estudiante se muestra en la página de revisión del intento.</p>

<h2>Fecha del mensaje de Email de retroalimentación</h2>

<p>Si se ha enviado un mensaje de retroalimentación al estudiante para un intento, la fecha en la que se envió se anota junto a la calificación para ese intento.</p>

<h2>Liga al libro de calificaciones</h2>

<p>La columna a la derecha del nombre del estudiante contiene ligas hacia la página del resumen del libro calificador.</p>';
$string['coursereportname'] = 'Reporte de Retroalimentación por correo a examen de curso';
$string['coursereportpreference'] = 'Preferencias del reporte';
$string['coursereportshorttitle'] = 'Reporte del curso';
$string['createdby'] = 'Creado por';
$string['customfeedback'] = 'Retroalimentación individual';
$string['editcategories'] = 'Editar categorías';
$string['editcategory'] = 'Editar categorías';
$string['editfeedback'] = 'Editar retroalimentación';
$string['editfilter'] = 'Editar filtro';
$string['feedback'] = 'Retroalimentación';
$string['feedbackdate'] = 'Fecha de retroalimentación';
$string['feedbackname'] = 'Nombre de retroalimentación';
$string['feedbackreport'] = 'Reporte de retroalimentación';
$string['feedbacktext'] = 'Texto de retroalimentación';
$string['filter_answer'] = 'Respuesta a pregunta';
$string['filter_feedback'] = 'Retroalimentación asignada';
$string['filter_feedback_custom'] = 'Retroalimentación individual';
$string['filter_grade'] = 'Calificación de pregunta';
$string['filter_group'] = 'Membresía a grupo';
$string['filter_message_count'] = 'Conteo de mensajes a usuario';
$string['filter_message_last'] = 'Fecha de último mensaje a usuario';
$string['fm:componentname'] = 'Gestionador de retroalimentación';
$string['fm:manage'] = 'Gestionar toda la retroalimentación';
$string['fm:managefeedback'] = 'Gestionar otra retroalimentación';
$string['fm:manageownfeedback'] = 'Gestionar retroalimentación propia';
$string['fm:messageconfig'] = 'Configurar mensajes de retroalimentación';
$string['fm:viewreports'] = 'Ver reportes de retroalimentación';
$string['fm:viewstudentnames'] = 'Ver nombres de estudiantes al calificar / asignar retroalimentación';
$string['gradebooklinktitle'] = 'Elija aquí para ver {$a} para este estudiante';
$string['gradedby'] = 'Calificado por Gestionador de Retroalimentación';
$string['includequestion'] = 'Incluir pregunta en bloque de retroalimentación';
$string['instructorfeedback'] = 'Retroalimentación del instructor';
$string['invalidassignsubmission'] = 'Datos de envío inválidos. Asegúrese de que las calificaciones estén dentro del rango y las operaciones estén permitidas.';
$string['invalidinput'] = 'Se dió una entrada inválida';
$string['message'] = 'Mensaje';
$string['messagecount'] = '#';
$string['messageexample'] = '<p>Estimado $studentfirstname,<br/><br/> Aquí está la retroalimentación para su examen reciente, $quizname, en $courselongname: <br/><br/> $feedback<br/><br/> Usted puede ver el examen calificado aquí: $linktoquiz<br/><br/> Por favor contácteme si tiene dudas.<br/><br/> $userfirstname $userlastname';
$string['messageoptions'] = 'Opciones de mensaje';
$string['messageprovider:question_feedback'] = 'Retroalimentación de pregunta';
$string['messagesubject'] = 'Asunto del mensaje';
$string['modifiedby'] = 'Modificado por';
$string['namecantbeblank'] = 'El nombre no puede estar vacío';
$string['nomessagepermissions'] = 'Usted no tiene permiso para editar la plantilla de retroalimentación de corrreo';
$string['notypical'] = 'No típico';
$string['notypical_help'] = 'Elija para marcar como típico';
$string['noviewreportpermissions'] = 'Usted no tiene permiso para ver este reporte de retroalimentación de examen';
$string['parentcategory'] = 'Categoría padre';
$string['preferencessave'] = 'Guardar preferencia';
$string['question'] = 'Pregunta';
$string['quizheaderlinktitle'] = 'Elija para revisar este examen';
$string['quizreviewlinktitle'] = 'Elija para revisar el intento del examen para este estudiante';
$string['report'] = 'Reporte de retroalimentación';
$string['reporttext'] = 'Texto del reporte';
$string['reportvariables'] = 'Incluya la variable siguiente en alguna parte de su plantilla del reporte para marcar en donde debe colocarse el bloque de retroalimentación. <ul><li>$feedback</li></ul>';
$string['save'] = 'Guardar';
$string['saveallconfirm'] = 'Todos los cambios en esta página que no hayan sido enviados se guardarán. ¿Está seguro de querer continuar?';
$string['savechanges'] = 'Guardar cambios';
$string['selectfilter'] = 'Seleccionando y/o filtrando respuestas';
$string['selectquestion'] = 'Pregunta:';
$string['sendemailorpostcomments'] = 'Mandar mensajes o publicar comentarios';
$string['sendemailorpostcomments_help'] = '<p>Elegir el botón "Mandar Email" hace tres cosas:</p> <ol>

<li>Genera el mensaje de retroalimentación desde las marcas (tags) asignadas y lo guarda en el campo de comentarios para la respuesta del estudiante.</li>
<li>Guarda la calificación asignada a la respuesta en el libro de calificaciones.</li>
<li>Manda un Email que contiene el mensaje de retroalimentación al estudiante.</li> </ol>

<p>Eligir el botón de "Publicar comentarios" hace las primeras dos cosas sin mandar el mensaje de Email.</p>';
$string['sentby'] = 'Enviado por: {$a}';
$string['shareusers'] = 'Usuarios que comparten';
$string['shareusersmatching'] = 'Usuarios que coinciden en compartir \'{$a}';
$string['shareuserspotential'] = 'Usuarios compartidos potenciales';
$string['shareuserspotentialmatching'] = 'Usuarios compartidos potenciales que coinciden con \'{$a}';
$string['sharing'] = 'Compartiendo';
$string['sharing_help'] = 'Configurar el compartir para esta retroalimentación: <p><ul>
<li> Sin compartición general (por defecto) - No hay compartición general  en este contexto </li>
<li> Compartida - Compartir esta retroalimentación con todos los gestionadores de retroalimentación en este contexto </li>
<li> Privada - No permitir compartición alguna de esta retroalimentación </li> </ul></p>';
$string['template'] = 'Plantilla';
$string['templateconfigure'] = 'Configurar plantilla de correo para {$a}';
$string['templatesaved'] = 'Plantilla guardada';
$string['this_answer_emaildate'] = 'Este mensaje enviado';
$string['typical'] = 'Típico';
$string['typical_help'] = 'Elija para marcar como no típico';
$string['unknowajaxaction'] = 'Acción AJAX desconocida';
$string['use'] = 'Usar';
$string['userinfo'] = 'Información de usuario';
