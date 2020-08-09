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
 * Strings for component 'local_syslogger', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   local_syslogger
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enabled'] = 'Habilitado';
$string['enabled_desc'] = 'Habilitar duplicación de bitácora a syslog usando el comando logger de Linux';
$string['path'] = 'Ruta de logger';
$string['path_desc'] = 'La ruta completa al binario de logger de Linux';
$string['pluginname'] = 'Syslogger';
$string['syslogger'] = 'Syslogger';
$string['syslog_priority'] = 'Prioridad de Syslog';
$string['syslog_priority_desc'] = 'El argumento de prioridad de syslog a pasarle al comando logger de Linux - debe ser en la forma de  syslog_facility.syslog_priority, como por ejemplo local7.info';
$string['syslog_tag'] = 'Marca de Syslog';
$string['syslog_tag_desc'] = 'La marca para pasarla al comando del Linux logger - debe ser alfanumérica (incluyendo _ y -)';
