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
 * Strings for component 'local_sanitychecker', language 'es_mx', branch 'MOODLE_26_STABLE'
 *
 * @package   local_sanitychecker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['local_sanitychecker_action_check'] = 'Correr prueba';
$string['local_sanitychecker_action_confirm'] = '¿Realmente desea continuar?';
$string['local_sanitychecker_action_resolve'] = 'Resolver asunto';
$string['local_sanitychecker_action_resolve_invit'] = 'Elija la acción de "<i>Resolver asunto</i>" para solucionar el problema';
$string['local_sanitychecker_check_succeed'] = 'Todo está correcto';
$string['local_sanitychecker_disclaimer'] = 'AVISO IMPORTANTE<br /> Tome en cuenta que estas composturas modifican directamente registros de la BasedeDatos.<br /><b>Es altamente recomendable que realice un respaldo de su BasedeDatos antes de usarlos.</b><br />¡Actualmente no es posible revertir esto !';
$string['local_sanitychecker_impl_legacyfilelink'] = 'Revisor de Salud de Enlaces de Archivos Heredados';
$string['local_sanitychecker_impl_legacyfilelink_description'] = 'Busca incosistencias en enlaces hacia archivos heredados';
$string['local_sanitychecker_impl_legacyfilelink_notification_findin'] = 'Encontrar en tabla.columna :';
$string['local_sanitychecker_impl_legacyfilelink_notification_links'] = 'Enlaces encontrados :';
$string['local_sanitychecker_impl_legacyfilelink_notification_nonvalidlinks'] = 'Los siguientes enlaces hacia archivos heredados no son válidos :';
$string['local_sanitychecker_impl_quiz'] = 'Revisor de sanidad de exámen';
$string['local_sanitychecker_impl_quiz_description'] = 'Busca inconsistencias en la BasedeDatos relacionadas con el módulo de examen<br /> Lea más acerca de este asunto en Moodle Issue Tracker at <a href="https://tracker.moodle.org/browse/MDL-32791" target="_blank">MDL-32791</a>';
$string['local_sanitychecker_impl_quiz_notification_instances'] = 'IDs de Instancias de Preguntas :';
$string['local_sanitychecker_impl_quiz_notification_nonvalidqqi'] = 'Las siguientes instancias de preguntas de examen no son válidas :';
$string['local_sanitychecker_impl_quiz_notification_quiz'] = 'ID del examen :';
$string['local_sanitychecker_menu'] = 'Revisor de sanidad';
$string['local_sanitychecker_table_head_information'] = 'Información';
$string['local_sanitychecker_table_head_name'] = 'Nombre del revisor de sanidad';
$string['pluginname'] = 'Utilería para revisar sanidad';
