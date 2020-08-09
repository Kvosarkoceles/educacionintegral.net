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
 * Strings for component 'message_pageone', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   message_pageone
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_deadline_text'] = 'Tareas esperadas para los próximos {$a} día(s):';
$string['config_assign_deadline'] = 'Notificaciones de fecha-límite de Tarea';
$string['config_assign_deadline_help'] = 'Manda un mensaje de texto conslidado que contiene todas las fechas límites de tareas próximas.';
$string['config_assign_deadline_user'] = 'Valor por defecto de notificación al usuario  de fechas límite de tareas';
$string['config_assign_deadline_user_help'] = 'Configura el valor por defecto para la opción de notificación de fecha límite de tarea por usuario. Si estuvieran deshabilitadas las notificaciones de fecha límiete de tarea, la opción del usuario estará oculta.';
$string['config_cron_time'] = 'Hora de procesamiento de notificación';
$string['config_cron_time_help'] = 'El tiempo en el que será procesada la fecha límite y notificaciones de tarea. Elija la hora en reloj de 24 horas.';
$string['config_deadline_days'] = 'Umbral de notificación de fecha límite (días)';
$string['config_deadline_days_help'] = 'Incluir una tarea en la notificación de fecha límite cuando la fecha para entrega es menor del número de días especificados aquí.';
$string['config_forum'] = 'Foro que publica notificaciones';
$string['config_forum_help'] = 'Envía un mensaje de texto notificando al usuario si es que algún nuevo mensaje está publicado en un foro al cual está suscrito; no se enviarán más notificaciones hasta que el usuario regrese el formato y haga una publicación de seguimiento. Esto es diferente de la configuración de notificaciones de publicaciones estándar que enviará un mensaje por cada publicación. El usar esta opción permite que el número de mensajes de texto consumidos por notificaciones de foros sea restringido.';
$string['config_forum_user'] = 'Usuario por defecto del foro que publica notificaciones.';
$string['config_forum_user_help'] = 'Configurar el ajuste por defecto para la opción de notificación de publicación en foro por usuario. Si están deshabilitadas las notificaciones de publicación, la opción del usuario estará oculta.';
$string['config_log'] = 'Mensajes en bitácora';
$string['config_log_help'] = 'Causa que todos los mensajes genrados automáticamente sean incluidos en la bitácora dePageOne. Si Usted necesita analizar las bitácoras de mensajería para fines de auditoría active esto.';
$string['forum_reply'] = 'Su publicación "{$a->sub}" en foro"{$a->fname}", curso "{$a->cname}" tiene una respuesta';
$string['pluginname'] = 'Mensajes de Texto en MoodleMobila';
$string['user_assign_deadline'] = 'Enviar notificaciones de fecha límite de tarea por mensaje de texto.';
$string['user_forum'] = 'Enviar notificaciones de respuestas a publicaciones en foros por mensaje de texto.';
