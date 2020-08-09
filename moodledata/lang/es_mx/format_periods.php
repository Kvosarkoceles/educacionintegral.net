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
 * Strings for component 'format_periods', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   format_periods
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automaticenddate'] = 'Calcular la fecha de finalización a partir del último período';
$string['automaticenddate_help'] = 'Si se habilita, la fecha de terminación del curso será calculada automáticamente a partir de la fecha final del último período.';
$string['currentsection'] = 'Este período';
$string['customdatesformat'] = 'Personalizado';
$string['datesformat'] = 'Formato de fechas';
$string['datesformatcustom'] = 'Formato personalizado de fechas';
$string['datesformatcustom_help'] = 'Especificar formato personalizado de fechas. Vea  <a href="http://php.net/manual/en/function.strftime.php" target="_blank">php manual</a> para la sintaxis';
$string['datesformat_help'] = 'Seleccione el formato de las fechas que se muestra en el nombre del período por defecto';
$string['deletesection'] = 'Eliminar período';
$string['editsection'] = 'Editar período';
$string['editsectionname'] = 'Editar nombre de período';
$string['futuresneakpeek'] = 'Vista de Adelanto Futuro';
$string['futuresneakpeek_help'] = 'Trata los períodos que inician antes que este intervalo como si fueran actuales (por ejemplo, esto puede permitirles a los estudiantes ver la próxima semana dos días antes de que termine la semana actual)';
$string['hidecompletely'] = 'Ocultar completamente';
$string['hidefromcourseview'] = 'Ocultar de la página del curso';
$string['hidefromothers'] = 'Ocultar período';
$string['newsectionname'] = 'Nuevo nombre para período {$a}';
$string['notavailable'] = 'Aun no disponible';
$string['numberperiods'] = 'Número de períodos';
$string['page-course-view-periods'] = 'Cualquier página principal de curso en formato de períodos';
$string['page-course-view-periods-x'] = 'Cualquier página de curso en formato de períodos';
$string['perioddurationdefault'] = 'Duración por defecto del período';
$string['perioddurationdefault_help'] = 'Configurar la duración de un período. Puede ser anulada para períodos individuales';
$string['perioddurationoverride'] = 'Anular duración del período';
$string['perioddurationoverride_help'] = 'Configurar la duración del período. Si no se configura, se usará el valor por defecto del período';
$string['pluginname'] = 'Formato de períodos';
$string['sameascurrent'] = 'Igual que los períodos actuales';
$string['sameaspast'] = 'Igual que los períodos anteriores';
$string['section0name'] = 'General';
$string['sectiondates'] = 'Fechas del período: <b>{$a->dates}</b>';
$string['sectiondatesduration'] = 'Fechas del período: <b>{$a->dates}</b>; duración del período: <b>{$a->duration}</b>';
$string['sectionduration'] = 'Duración del período: <b>{$a->duration}</b>';
$string['sectionname'] = 'Período';
$string['showcollapsed'] = 'Mostrar cada período como un enlace en su propia página';
$string['showexpanded'] = 'Mostrar todos los períodos en una página';
$string['showfromothers'] = 'Mostrar período';
$string['showfutureperiods'] = 'Mostrar períodos futuros';
$string['showfutureperiods_help'] = 'Permite mostrar automáticamente períodos futuros como enlaces, como no-disponible, u ocultarlos completamente';
$string['shownotavailable'] = 'Mostrar como no disponible';
$string['showpastcompleted'] = 'Mostrar períodos anteriores completados';
$string['showpastcompleted_help'] = 'Define el cómo mostrar períodos en el pasado en donde todas las actividades han sido completadas (finalizadas). La finalización debe estar habilitada para todos los módulos en la sección.';
$string['showpastperiods'] = 'Mostrar períodos pasados';
$string['showpastperiods_help'] = 'Define si es que se muestran o se ocultan los períodos que tienen la fecha de término en el pasado. "Ocultar de la página del curso" significa que las actividades no se mostrarán en la página del curso, pero serán visibles en el Libro de Calificaciones y en otros reportes.';
$string['showperiods'] = 'Mostrar períodos actuales';
$string['showperiods_help'] = 'Define el cómo mostrar períodos por defecto. Esto puede ser anulado debajo para períodos pasados o futuros';
