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
 * Strings for component 'block_dukreminder', language 'es_mx', branch 'MOODLE_28_STABLE'
 *
 * @package   block_dukreminder
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockstring'] = 'Recordatorio de Finalización del Curso';
$string['criteria_all'] = 'Todo';
$string['criteria_completion'] = 'Finalización del curso';
$string['criteria_enrolment'] = 'Suscripción al curso';
$string['criteria_error'] = 'No pueden combinarse la fecha límite y el criterio de suscripción';
$string['criteria_error2'] = 'No pueden combinarse la fecha límite y el criterio de todo';
$string['daterelative_error'] = '¡Se permiten valores negativos!';
$string['email_teacher_notification'] = '{$a->amount} estudiantes en el curso {$a->course} han sido avisados (recordados):';
$string['form_criteria'] = 'Criterio recordatorio';
$string['form_criteria_help'] = 'Están disponibles diferentes criterios para recordatorio. Para las descripciones adicionales, por favor revise la documentación del bloque';
$string['form_dateabsolute'] = 'Fecha límite';
$string['form_dateabsolute_help'] = 'Los recordatorios se enviarán en la fecha límite';
$string['form_daterelative'] = 'Tiempo';
$string['form_daterelative_completion'] = 'Enviar recordatorios después de la finalización del curso';
$string['form_daterelative_help'] = 'El tiempo define después de cuanto tiempo se enviará el recordatorio después de haberse cumplido el criterio elegido.';
$string['form_delete'] = '¿Está Usted seguro?';
$string['form_header_criteria'] = 'Criterios';
$string['form_header_general'] = 'General';
$string['form_header_groups'] = 'Filtrado por grupo';
$string['form_header_report'] = 'Ajustes';
$string['form_header_time'] = 'Tiempo';
$string['form_mailssent'] = 'Ya se enviaron recordatorios';
$string['form_placeholder'] = 'Remplazable';
$string['form_subject'] = 'Asunto del Email';
$string['form_subject_help'] = 'Asunto del Email recordatorio';
$string['form_text'] = 'Texto-del-Email para el estudiante';
$string['form_text_help'] = 'Aquí puede Usted definir el texto que recibirán los estudiantes. Pueden usarse los siguientes remplazables: ###username### será remplazado con el nombre_de_usuario del estudiante, ###usermail### con su correo y  ###coursename### con el nombre del curso actual.';
$string['form_text_teacher'] = 'Texto-del-Email para los profesores';
$string['form_text_teacher_help'] = 'Aquí puede Usted definir el texto que recibirán los profesores del curso. Pueden usarse los siguientes remplazables: ###coursename### para el nombre del curso actual. ###users### es la lista de usuarios avisados (recordados), y ###usercount### es el número de alumnos restantes';
$string['form_title'] = 'Descripción interna';
$string['form_to_groups'] = 'Destinatarios';
$string['form_to_mail'] = 'Reportar a usuarios adicionales';
$string['form_to_mail_help'] = 'Aquí puede Usted añadir usuarios adicionales que recibirán el reporte. Inserte sus direcciones de Email separadas con un ;';
$string['form_to_reportsuperior'] = 'Reportar a superiores';
$string['form_to_reporttrainer'] = 'Reportar a profesores del curso';
$string['form_to_reporttrainer_help'] = 'Si se activa, se enviará un reporte a los profesores del curso';
$string['form_to_status'] = 'Estado de finalización del curso';
$string['form_to_status_all'] = 'Todo';
$string['form_to_status_completed'] = 'Con finalización del curso';
$string['form_to_status_notcompleted'] = 'Sin finalización del curso';
$string['newblock:addinstance'] = 'Añadir un bloque';
$string['newblock:myaddinstance'] = 'Añadir un bloque a Mi Moodle';
$string['pluginname'] = 'Recordatorio de Finalización del Curso';
$string['tab_course_reminders'] = 'Recordatorios del curso';
$string['tab_new_reminder'] = 'Nuevo recordatorio';
$string['to_mail_error'] = '¡Email inválido! Las direcciones de Email deben de estar separadas por ;';
