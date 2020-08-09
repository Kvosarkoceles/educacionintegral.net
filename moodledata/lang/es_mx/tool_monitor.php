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
 * Strings for component 'tool_monitor', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Añadir una nueva regla';
$string['allevents'] = 'Tdos los eventos';
$string['allmodules'] = 'Todas las instancias';
$string['area'] = 'Área';
$string['areatomonitor'] = 'Área a monitorear';
$string['cachedef_eventsubscriptions'] = 'Esto almacena la lista de suscripciones a eventos para cursos individuales';
$string['contactadmin'] = 'Póngase en contacto con su administrador para habilitarlo/a';
$string['core'] = 'Núcleo (\'\'core\'\')';
$string['currentsubscriptions'] = 'Sus suscripciones actuales';
$string['defaultmessagetemplate'] = 'Nombre de la regla: {rulename}<br />Description: {description}<br />Nombre del evento: {eventname}';
$string['deleterule'] = 'Eliminar regla';
$string['deletesubscription'] = 'Eliminar suscripción';
$string['description'] = 'Descripción:';
$string['disablefieldswarning'] = 'Algunos campos no pueden editarse porque esta regla ya tiene suscriptores.';
$string['duplicaterule'] = 'Duplicar regla';
$string['editrule'] = 'Editar regla';
$string['enablehelp'] = 'Habilitar/deshabilitar monitoreo de evento';
$string['enablehelp_help'] = 'El monitoreo de evento debe habilitarse antes de que Usted pueda crear reglas y suscribirse a ellas. Por favor tenga en cuenta que el habilitar monitoreo de evento puede afectar el desempeño de su sitio.';
$string['errorincorrectevent'] = 'Por favor, seleccione un evento relacionado con el plugin seleccionado';
$string['event'] = 'Evento';
$string['eventnotfound'] = 'Evento no encontrado';
$string['eventrulecreated'] = 'Regla creada';
$string['eventruledeleted'] = 'Regla eliminada';
$string['eventruleupdated'] = 'Regla actualizada';
$string['eventsubcreated'] = 'Suscripción creada';
$string['eventsubcriteriamet'] = 'Se cumplió el criterio para suscripción';
$string['eventsubdeleted'] = 'Suscripción eliminada';
$string['freqdesc'] = '{$a->freq} vez/veces en {$a->mins} minuto(s)';
$string['frequency'] = 'Umbral de notificación';
$string['frequency_help'] = 'El número de eventos, dentro de un período de tiempo especificado, necesarios para que se envíe un mensaje de notificación.';
$string['inminutes'] = 'en minutos';
$string['invalidmodule'] = 'Módulo inválido';
$string['manage'] = 'Gestionar';
$string['managerules'] = 'Reglas para monitoreo de eventos';
$string['manageruleslink'] = 'Usted puede gestionar reglas desde la página {$a}.';
$string['managesubscriptions'] = 'Monitoreo de eventos';
$string['managesubscriptionslink'] = 'Usted puede suscribirse a las reglas desde la página {$a}.';
$string['messageprovider:notification'] = 'Notificaciones a Suscripciones de reglas';
$string['messagetemplate'] = 'Mensaje de notificación';
$string['messagetemplate_help'] = 'Se envía un mensaje de notificación a los suscriptores una vez que se alcance el umbral para notificación. El mensaje puede incluir alguno de, o todos, los siguientes remplazables (\'\'placeholders\'\'):

* Enlace al lugar donde ocurrió el evento {link} <br />
* Enlace al área monitoreada {modulelink}<br />
* Nombre de la regla {rulename}<br />
* Descripción {description}<br />
* Evento {eventname}';
$string['moduleinstance'] = 'Instancia';
$string['monitordisabled'] = 'Actualmente está deshabilitado el monitoreo de evento.';
$string['monitorenabled'] = 'Actualmente está habilitado el monitoreo de evento.';
$string['monitor:managerules'] = 'Gestionar reglas del monitor de eventos';
$string['monitor:managetool'] = 'Habilitar/deshabilitar monitoreo de evento';
$string['monitor:subscribe'] = 'Suscribirse a reglas de monitor de eventos';
$string['norules'] = 'No hay reglas para monitoreo de eventos.';
$string['pluginname'] = 'Monitor de eventos';
$string['privacy:createdrules'] = 'Reglas de monitoreo de evento que yo creé';
$string['privacy:metadata:description'] = 'Descripción de la regla';
$string['privacy:metadata:eventname'] = 'Nombre completamente calificado del evento';
$string['privacy:metadata:frequency'] = 'Frecuencia de notificaciones';
$string['privacy:metadata:historysummary'] = 'Almacena la historia de las notificaciones de mensaje enviadas';
$string['privacy:metadata:inactivedate'] = 'Período de tiempo, en días, después del cual una suscripción inactiva será removida completamente.';
$string['privacy:metadata:lastnotificationsent'] = 'Cuando fue enviada por última vez una notificación para esta suscripción.';
$string['privacy:metadata:messagesummary'] = 'Notificaciones son enviadas al sistema de mensaje.';
$string['privacy:metadata:name'] = 'Nombre de la regla';
$string['privacy:metadata:plugin'] = 'Nombre Frakenstyle del plugin';
$string['privacy:metadata:rulessummary'] = 'Esto almacena reglas de monitoreo.';
$string['privacy:metadata:subscriptionssummary'] = 'Almacena suscripciones de usuario a varias reglas';
$string['privacy:metadata:template'] = 'Plantilla de mensaje';
$string['privacy:metadata:timecreatedrule'] = 'Cuando fue creada esta regla';
$string['privacy:metadata:timecreatedsub'] = 'Cuando fue creada esta suscripción';
$string['privacy:metadata:timemodifiedrule'] = 'Cuando fue modificada por última vez esta regla';
$string['privacy:metadata:timesent'] = 'Cuando fue enviado el mensaje';
$string['privacy:metadata:timewindow'] = 'Ventana de tiempo en segundos';
$string['privacy:metadata:userid'] = 'La ID del usuario que creó la regla';
$string['privacy:metadata:useridhistory'] = 'La Id del usuario a quien se le envió esta notificación';
$string['privacy:metadata:useridsub'] = 'La ID del suscriptor';
$string['privacy:subscriptions'] = 'Mis suscripciones al monitor de evento';
$string['processevents'] = 'Procesar Eventos';
$string['ruleareyousure'] = '¿Está Usted seguro de querer eliminar la regla "{$a}"?';
$string['ruleareyousureextra'] = 'Hay {$a} subscripción(es) a esta regla que también serían eliminadas.';
$string['rulecopysuccess'] = 'Regla duplicada exitosamente';
$string['ruledeletesuccess'] = 'Regla eliminada exitosamente';
$string['rulehelp'] = 'Detalles de la regla';
$string['rulehelp_help'] = 'Esta regla escucha para detectar cuando el evento  \'{$a->eventname}\' en \'{$a->eventcomponent}\' haya sido disparado {$a->frequency} vez/veces en {$a->minutes} minuto(s).';
$string['rulename'] = 'Nombre de la regla';
$string['rulenopermission'] = 'Usted no tiene permiso para suscribirse a ningun evento.';
$string['rulenopermissions'] = 'Usted no tiene permisos para "{$a} una regla"';
$string['rulescansubscribe'] = 'Regas a las que Usted se puede suscribir';
$string['selectacourse'] = 'Seleccione un curso';
$string['selectcourse'] = 'Visite este reporte al nivel de curso para obtener una lista de módulos posibles';
$string['subareyousure'] = '¿Está Usted seguro de querer eliminar esta suscripción  a la regla "{$a}"?';
$string['subcreatesuccess'] = 'Suscripción creada exitosamente';
$string['subdeletesuccess'] = 'Suscripción removida exitosamente';
$string['subhelp'] = 'Detalles de la suscripción';
$string['subhelp_help'] = 'Esta suscripción escucha para detectar cuando el evento  \'{$a->eventname}\' haya sido disparado en \'{$a->moduleinstance}\' {$a->frequency} vez/veces en {$a->minutes} minute(s).';
$string['subscribeto'] = 'Subscribir a la regla "{$a}"';
$string['taskchecksubscriptions'] = 'Activar/desactivar subscripciones a regla inválida';
$string['taskcleanevents'] = 'Limpiar eventos del monitor de eventos';
$string['unsubscribe'] = 'Des-suscribirse';
