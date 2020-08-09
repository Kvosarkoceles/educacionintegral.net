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
 * Strings for component 'enrol_cvent', language 'es_mx', branch 'MOODLE_26_STABLE'
 *
 * @package   enrol_cvent
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_number'] = 'ID de cuenta Cvent';
$string['account_number_desc'] = 'Su ID para su cuenta de Cvent (Usted debe recibir este dato de Cvent).';
$string['apicallsremaining'] = 'LLamadas API que restan hoy hasta la medianoche, hora del Este de E.U.A.: {$a}';
$string['attemptinginit'] = 'Intentando autenticar a Cvent...';
$string['autocreate_category'] = 'Auto crear categoría de curso';
$string['autocreate_category_desc'] = 'La categoría para los cursos auto-creados.';
$string['autocreate_courses'] = 'Auto-crear cursos';
$string['autocreate_courses_desc'] = 'Los cursos pueden ser creados automáticamente (con los números de ID correctos) si hay inscripciones a un curso que aún no exista en Moodle.';
$string['clicktoseelogafter'] = 'Elija aquí para configurar bitácoras de llamadas API después de que esta página termine de cargar.';
$string['couldnotinit'] = 'Cvent no pudo inicializarse; el número de llamadas API restantes hoy es desconocido.';
$string['cron_frequency'] = 'Retraso del CRON';
$string['cron_frequency_desc'] = 'El número mínimo de minutos a esperar antes de las sincronizaciones con Cvent. El CRON de Moodle debe configurarse para que esto funcione. Escriba \'0\' o déjelo vacío para deshabilitar la sincronización via el CRON de Moodle.';
$string['defaultrole_desc'] = 'Este plugin actualmente solo maneja registros e invitados de Cvent; los maestros aún deben de inscribirse por separado en Moodle.';
$string['enrol_cvent_autocreate_header'] = 'Auto-creación de nuevos cursos';
$string['enrol_cvent_cron_header'] = 'Sincronización via Moodle CRON';
$string['enrol_cvent_cron_now'] = 'Inscripciones Cvent: Sincronizando ahora.';
$string['enrol_cvent_mustbeadmin'] = '¡Debe ser Admin o debe correrse desde la interfaz de línea de comando (CLI) !<br />';
$string['enrol_cvent_nocron'] = 'Inscripciones Cvent: No está configurado para sincronizarse durante Moodle CRON.';
$string['enrol_cvent_nocron_now'] = 'Inscripciones Cvent: Demasiado pronto para la siguiente sincronización durante Moodle CRON. Se sincronizará de nuevo en {$a} minuto(s).';
$string['enrol_daysafter'] = 'Acceso extendido a curso';
$string['enrol_daysafter_desc'] = 'Mantener estudiantes en sus cursos por estos días después de que el evento Cvent está agendado para terminar. (Escriba -1 para deshabilitar -- los estudiantes tendrán acceso al curso indefinidamente).';
$string['enrol_daysbefore'] = 'Acceso temprano a curso';
$string['enrol_daysbefore_desc'] = 'Inscribir alumnos en sus cursos con estos días de anticipación antes de que el evento Cvent está agendado para iniciar.';
$string['headingcallsmade'] = 'LLamadas API realizadas (por este plugin)';
$string['headingcallsremaining'] = 'LLamadas API restantes (a la última revisión)';
$string['initerrorunknown'] = 'Error desconocido al autenticarse con Cvent. Tal vez Usted quisiera activar el modo de depuración (debugging) y volver a intentarlo.';
$string['initsuccess'] = '!Autenticación exitosa a Cvent!';
$string['INVALID_LOGIN'] = 'Cvent regresó \'INVALID_LOGIN\'. Por favor revise su número de cuenta, nombredeusuario y contraseña configurados para Cvent';
$string['manualsync'] = 'Sincronizar ahora';
$string['password'] = 'Contraseña Cvent';
$string['password_desc'] = 'La contraseña de su cuenta Cvent';
$string['pluginname'] = 'Cvent';
$string['pluginname_desc'] = 'Usted puede usar Cvent (cvent.com) para gestionar sus inscripciones. Usted debe ser un cliente de Cvent y tener acceso API para usar este plugin.';
$string['search_location'] = 'Prefijo para localización de búsqueda';
$string['search_location_desc'] = 'El principio del nombre de las locaciones que desea incluir.<br />Por ejemplo: Si tiene tres locaciones en (Ciudad, Ciudadela, Palacio Municipal) y quiere que Moodle obtenga inscripciones desde la Ciudad y la Ciudadela, escriba aquí \'Ciudad\'.';
$string['server_settings'] = 'Configuraciones Cvent';
$string['username'] = 'nombredeusuario Cvent';
$string['username_desc'] = 'Su nombredeusuario de su cuenta con Cvent (Usted debe recibir este dato de Cvent).';
$string['viewlog'] = 'ver bitácora';
$string['view_stats'] = '<a href="{$a}">Ver estadísticas API</a>';
$string['youmustsetdatetimezone'] = 'Error: data.timezone (fecha.zonahoraria) no está configurado en su php.ini. Usted debe configurar este parámetro antes de que el plugin de inscripción por Cvent pueda funcionar.';
