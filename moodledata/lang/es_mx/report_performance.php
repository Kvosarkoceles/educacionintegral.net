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
 * Strings for component 'report_performance', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   report_performance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Respaldo automático';
$string['check_backup_comment_disable'] = 'El desempeño puede afectarse durante el proceso de repaldo. En caso de habilitarlos, los respaldos deberían de agendarse para realizarse fuera de las horas pico.';
$string['check_backup_comment_enable'] = 'El desempeño puede afectarse durante el proceso de repaldo. Los respaldos deberían de agendarse para realizarse fuera de las horas pico.';
$string['check_backup_details'] = 'Al habilitar respaldos automáticos se crearán automáticamente archivos de todos los cursos en el servidor en la hora que Usted especifique. <p>Durante este proceso, se consumirán más recursos del servidor y puede afectarse el desempeño.</p>';
$string['check_cachejs_comment_disable'] = 'Si se habilita, el desempeño al cargar páginas se mejora.';
$string['check_cachejs_comment_enable'] = 'Si se deshabilita, las páginas pueden cargarse lentamente.';
$string['check_cachejs_details'] = 'El cachear y comprimir JavaScript  mejoran grandemente el desempeño al cargar páginas. Es altamente reecomendable para sitios en producción.';
$string['check_debugmsg_comment_developer'] = 'Si se configura a cualquier opción que sea diferente de  DESARROLLADOR, el desempeño puede ser mejorado ligeramente.';
$string['check_debugmsg_comment_nodeveloper'] = 'Si se configura a DESARROLLADOR, el desempeño puede verse afectado ligeramente.';
$string['check_debugmsg_details'] = 'Raramente hay alguna ventaja en ponerlo en nivel para Desarrollador, a menos que Usted sea un desarrollador, en cuyo caso está fuertemente recomendado.<p>Una vez que tenga el mensaje de error, y lo haya copiado y pegado a algún lado, es ALTAMENTE RECOMENDABLE que configure la depuración (Debug) a NINGUNO. Los mensajes de depuración pueden dar pistas a los hackers acerca de la configuración de su sitio y pueden afectar el desempeño.</p>';
$string['check_enablestats_comment_disable'] = 'El desempeño puede verse afectado por el procesamiento de estadísticas. Si se habilita, las configuraciones de estadísticas deberían hacerse con cuidado.';
$string['check_enablestats_comment_enable'] = 'El desempeño puede ser afectado por el procesamiento de estadísticas. Las configuraciones de estadísticas deberían hacerse con cuidado.';
$string['check_enablestats_details'] = 'Al habilitar esto, se procesan las bitácoras (logs) en cronjob y se colectan algunas estadísticas. Dependiendo de la cantidad de tráfico en su sitio, esto puede demorar bastante. <p>Durante este proceso, se consumirán más recursos del servidor y puede afectarse el desempeño.</p>';
$string['check_themedesignermode_comment_disable'] = 'Si se habilita, las hojas de imágenes y estilos NO son cacheadas, resultando en degradación significativa del desempeño.';
$string['check_themedesignermode_comment_enable'] = 'Si se deshabilita, las hojas de imágenes y estilos son cacheadas, resultando en mejoras significativas del desempeño.';
$string['check_themedesignermode_details'] = 'Esto a menudo es la causa de sitios Moodle lentos. <p>En promedio puede requerirse al menos el doble de la cantidad de CPU para correr un sitio Moodle con el modo de diseñador de temas habilitado.</p>';
$string['comments'] = 'Comentarios';
$string['disabled'] = 'Deshabilitado';
$string['edit'] = 'Editar';
$string['enabled'] = 'Habilitado';
$string['issue'] = 'Asunto';
$string['morehelp'] = 'más ayuda';
$string['performancereportdesc'] = 'Este reporte enlista asuntos que pueden afectar el desempeño del sitio {$a}';
$string['performance:view'] = 'Ver reporte sobre desempeño';
$string['pluginname'] = 'Vista general de desempeño';
$string['privacy:metadata'] = 'El plugin de Vista general de desempeño no almacena ningún dato personal.';
$string['value'] = 'Valor';
