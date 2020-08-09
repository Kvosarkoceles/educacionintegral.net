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
 * Strings for component 'block_use_stats', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   block_use_stats
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetrackingparams'] = 'Configuraciones de seguimiento activo';
$string['activities'] = 'Actividades';
$string['allowrule'] = 'Permitir enviar al coincidir con regla';
$string['allusers'] = 'Todos los usuarios';
$string['blockdisplay'] = 'Afinación del bloque de visualización';
$string['blockname'] = 'Estadísticas de Uso';
$string['byname'] = 'Por nombre';
$string['bytimedesc'] = 'Por fecha/hora';
$string['cachedef_aggregate'] = 'Agregar';
$string['capabilitycontrol'] = 'Capacidad';
$string['configbacktrackmode'] = 'Modo de volver-atrás';
$string['configbacktrackmode_desc'] = 'Selecciona como los bloques eligen los tiempos para volver-atrás.';
$string['configbacktracksource'] = 'Origen para volver-atrás';
$string['configbacktracksource_desc'] = 'Selecciona quien le dice a los bloques la referencia en el tiempo para volver-atrás';
$string['configcalendarskin'] = 'Piel del calendario';
$string['configcalendarskin_desc'] = 'Cambiar la apariencia del calendario.';
$string['configcustomtagselect'] = 'Seleccionar para marca personalizada';
$string['configcustomtagselect_desc'] = 'Esta consulta necesita regresar un resultado único por fila logueada, lo que alimentará a la columna customtag {$a}.';
$string['configdisplayactivitytimeonly'] = 'Elegir cual hora de referencia mostrar';
$string['configdisplayactivitytimeonly_desc'] = 'Usted puede elegir cual es la hora de aprendizaje de referencia a mostrar';
$string['configdisplayothertime'] = 'Mostrar tiempo "Fuera de curso"';
$string['configdisplayothertime_desc'] = 'Si se configura, muestra la línea de curso del tiempo de "Fuera de curso"';
$string['configenablecompilecube'] = 'Habilitar compilación cúbica';
$string['configenablecompilecube_desc'] = 'Cuando se habilita, se calculan dimensiones adicionales usando selecciones definidas';
$string['configenrolmentfilter'] = 'Filtrar períodos inscritos';
$string['configenrolmentfilter_desc'] = 'Si se activa, las bitácoras serán analizadas desde la primera fecha activa de inscripción, o la fecha de inicio del curso, como más tempranamente. Si está desactivado, la fecha de inicio del curso será el único límite más temprano.';
$string['configfilterdisplayunder'] = 'Mostrar filtro debajo de (segundos)';
$string['configfilterdisplayunder_desc'] = 'Si no fuera nulo, solamente los tiempos en el curso que estén arriba del límite dado (en segundos) serán mostrados en el bloque';
$string['configfromwhen'] = 'Período de compilación (días, hasta hoy)';
$string['configfromwhen_desc'] = 'Período de compilación (en días hasta hoy)';
$string['configkeepalivecontrol'] = 'Método de control';
$string['configkeepalivecontrol_desc'] = 'Datos internos usados para controlar la capacidad para enviar';
$string['configkeepalivecontrolvalue'] = 'Nombre dle ítem de control';
$string['configkeepalivecontrolvalue_desc'] = 'coincidirá la regla si la capacidad está permitida o si el campo del perfil tiene un valor que no sea nulo. La configuración por defecto excluye a los administradores.';
$string['configkeepalivedelay'] = 'Periodo de mantener-viva la sesión';
$string['configkeepalivedelay_desc'] = 'Retraso entre dos seguimientos de bitácora de mantenerse-vivo para usuarios conectados (segundos). Consérvela tan grande como sea posible para disminuir la carga sobre el servidor cuando están conectados varios usuarios, mientras se mantiene el seguimiento consistente.';
$string['configkeepaliverule'] = 'Mandar mantener-viva si';
$string['configkeepaliverule_desc'] = 'Regla para controlar enviar Ajax mantener-viva';
$string['configlastcompiled'] = 'Fecha de registro de últimas bitácoras compiladas';
$string['configlastcompiled_desc'] = 'Al cambiar esta fecha de seguimiento, el cron recalculará todas las bitácoras a partir de la fecha siguiente';
$string['configlastpingcredit'] = 'Este lapso de tiempo (en minutos) será añadido sistemáticamente a la bitácora del total de tiempo registrado cada vez que se adivine que hubo un cierre o descontinuidad de sesión.';
$string['configlastpingcredit_desc'] = 'Esta cantidad de tiempo (en minutos) será añadida sistemáticamente al contador de tiempo registrado en bitácora para cada vez que se cierre una sesión o se adivine discontinuidad';
$string['configonesessionpercourse'] = 'Una sesión por curso';
$string['configonesessionpercourse_desc'] = 'Cuando se habilita, usar estadísticas dividirá las sesiones cada vez que cambie el seguimiento del curso actual. Si se deshabilita, una sesión representa  una secuencia de trabajo que puede usar varios cursos.';
$string['configthreshold'] = 'Umbral';
$string['configthreshold_desc'] = 'Umbral de continuidad de actividad (minutos). Por arriba de este lapso de tiempo transcurrido entre dos anotaciones sucesivas en la bitácora, el usuario es considerado como desconectado. El tiempo arbitrario de "Crédito del Último Ping" será añadido a este conteo del tiempo.';
$string['credittime'] = '(LTC) (Last Time Credit=Crédito de última vez)';
$string['datacubing'] = 'Cubicado de datos';
$string['declaredtime'] = 'Tiempo declarado';
$string['denyrule'] = 'Permitir enviar a menos que coincida con regla';
$string['dimensionitem'] = 'Clases observables';
$string['displayactivitiestime'] = 'Solamente el tiempo asignado a actividades efectivas en el curso';
$string['displaycoursetime'] = 'Tiempo real del curso (todo el tiempo empleado en todos los contextos del curso)';
$string['emulatecommunity'] = 'Emular a la versión de la comunidad';
$string['emulatecommunity_desc'] = 'Si se habilita, el plugin se comportará como la versión pública para la comunidad . ¡Esto podría hacer que se pierdan características!';
$string['errornorecords'] = 'No hay información de seguimiento';
$string['eventscount'] = 'Visitas';
$string['eventusestatskeepalive'] = 'Mantener-viva sesión';
$string['fixedchoice'] = 'Configuración forzada a la fecha de inicio de curso/cuenta';
$string['fixeddate'] = 'Desde una referencia de fecha fija';
$string['from'] = 'Desde';
$string['fromrange'] = 'Desde ';
$string['go'] = '¡Hacerlo!';
$string['hidecourselist'] = 'Ocultar tiempos del curso';
$string['isfiltered'] = 'Solamente son mostrados tiempos arriba de {$a} segundos';
$string['keepuseralive'] = 'El usuario {$a} todavía está en sesión';
$string['loganalysisparams'] = 'Parámetros de análisis de bitácoras';
$string['modulename'] = 'Seguimiento de actividades';
$string['noavailablelogs'] = 'Sin bitácoras disponibles';
$string['onthismoodlefrom'] = 'aquí desde';
$string['other'] = 'Otra presencia fuera de curso';
$string['othershort'] = 'OTRO';
$string['plugindist'] = 'Distribución del plugin';
$string['plugindist_desc'] = '<p>Este plugin es la versión para la comunidad y es publicado para que todos lo usen "como es" y que revisen la aplicación del núcleo del plugin. Existe una versión "pro" de este plugin y es distribuída bajo condiciones tales que alimenten los esfuerzos en el ciclo vital, las actualizaciones, documentación y mejoras.</p>
<p>Por favor contacte a uno de nuestros distribuidores para obtener soporte para la versión "Pro".</p>
<ul><li><a href="http://www.activeprolearn.com/plugin.php?plugin=block_use_stats&lang=en">ActiveProLearn SAS</a></li>
<li><a href="http://www.edunao.com">Edunao SAS</a></li></ul>';
$string['pluginname'] = 'Estadísticas de Uso';
$string['pluginname_desc'] = 'Un bloque que compila los tiempos de sesión';
$string['printpdf'] = 'Imprimir PDF';
$string['profilefieldcontrol'] = 'Campo de perfil';
$string['showdetails'] = 'Mostrar detalles';
$string['sliding'] = 'Ventana de tiempo deslizante';
$string['studentchoice'] = 'Los estudiantes eligen';
$string['studentscansee'] = 'Estudiantes pueden ver';
$string['task_cache_ttl'] = 'Tiempo de Vida (TTL) de Caché Agregado';
$string['task_cleanup'] = 'Limpieza de huecos de tiempo';
$string['task_compile'] = 'Compilación de huecos de tiempo';
$string['timeelapsed'] = 'Tiempo transcurrido';
$string['to'] = '&ensp;hasta&ensp;';
$string['use_stats:addinstance'] = 'Puede añadirse una instancia';
$string['use_stats_description'] = 'Al publicar este servicio, Usted permite que servidores remotos pidan lectura de estadísticas sobre usuarios locales.<br/>Al suscribirse al servicio, Usted permite que su servidor local busque en un servidor remoto acerca de estadísticas de sus miembros.<br/>';
$string['use_stats:export'] = 'Puede exportarse como PDF (necesita reporte trainingsessions)';
$string['use_stats:myaddinstance'] = 'Puede añadirse una instancia a Mi Página';
$string['use_stats_name'] = 'Acceso remoto a estadísticas';
$string['use_stats_rpc_service'] = 'Acceso remoto a estadísticas';
$string['use_stats_rpc_service_name'] = 'Acceso remoto a estadísticas';
$string['use_stats:seecoursedetails'] = 'Puede ver detalle de todos los usuarios desde su curso';
$string['use_stats:seegroupdetails'] = 'Puede ver detalle de todos los usuarios desde sus grupos';
$string['use_stats:seeowndetails'] = 'Puede ver su detalle propio';
$string['use_stats:seesitedetails'] = 'Puede ver detalles de todos los usuarios';
$string['use_stats:view'] = 'Puede ver estadísticas';
$string['youspent'] = 'Usted ya gastó';
