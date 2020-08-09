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
 * Strings for component 'report_apocalypse', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   report_apocalypse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytype'] = 'Tipo';
$string['apocalypseinxdays'] = 'Apocalipsis Flash en {$a} días';
$string['apocalypseishere'] = 'La apocalipsis Flash está aquí - Flash ya no está soportado.';
$string['apocalypselastaudit'] = 'Última auditoría ejecutada fue en {$a}';
$string['description'] = '<p>Este reporte enlista las actividades, por tipo, en su sitio que contienen contenido basado en Flash.</p>
<p>El soporte para  Flash termina a mediados del  2019 cuando la mayoría de los navegadores deshabilitarán el reproductor de Flash y su contenido no se mostrará.</p>
<p>Algunas herramientas de autoría pueden  publicar dual, con HTML5 como plan B en caso de que Flash no esté soportado por el navegador. Cuando se ha detectado contenido HTML5 se muestra como un \'Si\' en la columna de \'HTML5 presente\'.</p>
<p>Si secesita ayuda para reemplazar su antiguo contenido Flash, contacte al socio Moodle certificado <a href="https://www.catalyst.net.nz/products/moodle/?refer=report_apocalypse">Catalyst IT</a></p>';
$string['dualmode'] = 'HTML5 presente';
$string['noaudit'] = '<p>No se han realizado auditorías de Flash para este sitio.</p>
<p><strong>Este reporte necesita que esté habilitado cron para la auditoría automática de Flash, o que el trabajo  `scheduled_flash_audit` sea ejecutado manualmente.</strong></p>';
$string['noflashobjectsfound'] = 'No se encontraron objetos Flash en su sitio.';
$string['pluginname'] = 'Apocalipsis Flash';
$string['privacy:metadata'] = 'El plugin Reportes Apocalipsis Flash no almacena ningún dato personal.';
$string['scheduledflashaudit'] = 'Auditoría Flash Agendada';
