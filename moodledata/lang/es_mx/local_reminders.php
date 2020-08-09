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
 * Strings for component 'local_reminders', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_reminders
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfnoupcomingactivities'] = 'No hay actividades próximas para este curso.';
$string['activityconfupcomingactivities'] = 'Actividades Próximas';
$string['activityconfupcomingactivitiesdesc'] = 'No se enviarán recordatorios para actividades no seleccionadas.';
$string['activityignoreincompletes'] = 'Sin recordatorios una vez completado:';
$string['activityignoreincompletesdetails'] = 'Si se activa, no se enviarán recordatorios si la actividad está completada por el usuario, <strong>antes</strong> de que la actividad termine.';
$string['activityremindersboth'] = 'Para ambos aperturas y cierres';
$string['activityremindersonlyclosings'] = 'Solamente para cierres de actividad';
$string['activityremindersonlyopenings'] = 'Solamente para aperturas de actividad';
$string['admintreelabel'] = 'Recordatorios';
$string['calendareventcreatedprefix'] = 'AÑADIDO';
$string['calendareventoverdueprefix'] = 'RETRASADO';
$string['calendareventremovedprefix'] = 'ELIMINADO';
$string['calendareventupdatedprefix'] = 'ACTUALIZADO';
$string['caleventchangedheading'] = 'Recordatorios de Cambios de Eventos del Calendario';
$string['caleventchangedheadingdetails'] = 'Estas configuraciones serán revisadas <strong>antes</strong>  de considerar el tipo de evento individual.';
$string['categoryheading'] = 'Recordatorios de eventos de Categoría de Curso';
$string['categorynosendforended'] = 'No Recordatorios para Cursos Completados:';
$string['categorynosendforendeddescription'] = 'Si se activa, no se enviarán recordatorios para cursos completados.';
$string['contentdescription'] = 'Descripción';
$string['contenttypeactivity'] = 'Actividad';
$string['contenttypecategory'] = 'Categoría';
$string['contenttypecourse'] = 'Curso';
$string['contenttypegroup'] = 'Grupo';
$string['contenttypelocation'] = 'Donde';
$string['contenttypeuser'] = 'Usuario';
$string['contentwhen'] = 'Cuando';
$string['courseheading'] = 'Recordatorios de Eventos de Curso';
$string['days1'] = '1 Día';
$string['days3'] = '3 Días';
$string['days7'] = '7 Días';
$string['dueheading'] = 'Recordatorios de Eventos de Actividad';
$string['enabled'] = 'Habilitado';
$string['enabledaddedevents'] = 'Enviar cuando se Crea Evento';
$string['enabledaddedeventsdescription'] = 'Indica si es que se envían recordatorios cuando un evento del calendario está siendo creado.';
$string['enabledchangedevents'] = 'Enviar cuando se Actualiza Evento';
$string['enabledchangedeventsdescription'] = 'Indica si es que se envían recordatorios cuando un evento del calendario está siendo actualizado.';
$string['enableddescription'] = 'Habilitar/deshabilitar plugin recordatorio';
$string['enabledforcalevents'] = 'Habilitar para Eventos de Cambio del Calendario:';
$string['enabledforcaleventsdescription'] = 'Habilitar enviar recordatorios para este tipo cuando un evento del calendario sea creado, eliminado o actualizado.';
$string['enabledoverdue'] = 'Retrasado Habilitado';
$string['enabledremovedevents'] = 'Enviar cuando se Elimina Evento';
$string['enabledremovedeventsdescription'] = 'Indica si es que se envían recordatorios cuando un evento del calendario está siendo eliminado.';
$string['explaincategoryheading'] = 'Configuraciones de recordatorios para eventos de categoría de curso.';
$string['explaincourseheading'] = 'Configuraciones del recordatorio para eventos de curso. Estos eventos provienen de un curso.';
$string['explaindueheading'] = 'Configuraciones del recordatorio para eventos de actividad. Estos eventos provienen de actividades/módulos dentro de un curso.';
$string['explaingroupheading'] = 'Configuraciones del recordatorio para eventos de grupo. Estos eventos están basados solamente para un grupo específico.';
$string['explaingroupshowname'] = 'Indica si el nombre del grupo debería de incluirse en el mensaje enviado, o no.';
$string['explainrolesallowedfor'] = 'Elegir cuales usuarios que tienen los roles de arriba pueden recibir recordatorios.';
$string['explainsendactivityreminders'] = 'Indica en cual estado de la actividad deberían de enviarse los recordatorios.';
$string['explainsiteheading'] = 'Configuraciones del recordatorio para eventos del sitio. Estos eventos son relevantes para todos los usuarios del sitio.';
$string['explainuserheading'] = 'Configuraciones del recordatorio para eventos de usuario. Estos eventos son individuales para cada usuario.';
$string['filterevents'] = 'Filtrar eventos de calendario:';
$string['filtereventsdescription'] = 'Cuales eventos del calendario deberían ser filtrados y enviarse recordatorios para ellos.';
$string['filtereventsonlyhidden'] = 'Solamente eventos ocultos en calendario';
$string['filtereventsonlyvisible'] = 'Solamente eventos visibles en calendario';
$string['filtereventssendall'] = 'Todos los eventos';
$string['groupheading'] = 'Recordatorios de Eventos de Grupo';
$string['groupshowname'] = 'Mostrar nombre del grupo en mensaje:';
$string['messageprovider:reminders_course'] = 'Notificaciones de Recordatorio para Eventos de Curso';
$string['messageprovider:reminders_coursecategory'] = 'Notificaciones de recordatorios para eventos de Categoría del Curso';
$string['messageprovider:reminders_due'] = 'Notificaciones de Recordatorio para Eventos de Actividad';
$string['messageprovider:reminders_group'] = 'Notificaciones de Recordatorio para Eventos de Grupo';
$string['messageprovider:reminders_site'] = 'Notificaciones de Recordatorio para Eventos de Sitio';
$string['messageprovider:reminders_user'] = 'Notificaciones de Recordatorio para Eventos de Usuario';
$string['messagetitleprefix'] = 'Prefijo del Título del Mensaje:';
$string['messagetitleprefixdescription'] = 'Este texto será insertado como un prefijo (dentro de paréntesis cuadrados) al título de cada mensaje recordatorio enviado.';
$string['overdueactivityreminders'] = 'Recordatorios de Actividades retrasadas';
$string['overdueactivityremindersdescription'] = 'Si se activa, entonces los recordatorios serán enviados a usuarios que se han retrasado en la actividad.';
$string['overduemessage'] = '¡Esta actividad está retrasada!';
$string['pluginname'] = 'Recordatorios de Evento';
$string['reminderdaysahead'] = 'Enviar antes de:';
$string['reminderdaysaheadcustom'] = 'Agenda personalizada:';
$string['reminderdaysaheadcustomdetails'] = 'Especifique adicionalmente la agenda deseada para mandar recordatorios anticipadamente para un evento.';
$string['reminderdaysaheadschedule'] = 'Agenda';
$string['reminderfrom'] = 'Recordatorio de';
$string['reminderstask'] = 'Recordatorios Locales';
$string['reminderstaskclean'] = 'Borrar Bitácoras de Recordatorios de Eventos';
$string['rolesallowedfor'] = 'Roles permitidos:';
$string['sendactivityreminders'] = 'Recordatorios de Actividades:';
$string['sendas'] = 'Mandar Como:';
$string['sendasadmin'] = 'Como Administrador del Sitio';
$string['sendasdescription'] = 'Especificar como quien deberían de enviarse estos recordatorios.';
$string['sendasnamedescription'] = 'Especificar mostrar nombre del usuario cuando se manden con usuario sin contestación.';
$string['sendasnametitle'] = 'Nombre Sin Contestación:';
$string['sendasnoreply'] = 'Dirección Sin Contestación:';
$string['showmodnameintitle'] = 'Mostrar nombre del módulo en asunto del Email';
$string['showmodnameintitledesc'] = 'Si se activa, entonces el nombre del módulo correspondiente será anexado al asunto del Email recordatorio.';
$string['siteheading'] = 'Recordatorios de Evento de Sitio';
$string['taskreminder'] = 'Trabajos de recordatorios';
$string['titlesubjectprefix'] = 'Recordatorio';
$string['userheading'] = 'Recordatorios de Evento de Usuario';
