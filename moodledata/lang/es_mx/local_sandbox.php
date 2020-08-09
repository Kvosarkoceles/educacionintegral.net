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
 * Strings for component 'local_sandbox', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_sandbox
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adjustcoursestartdate'] = 'Ajustar la fecha de inicio del curso';
$string['adjustcoursestartdate_desc'] = 'Ajustar la fecha de inicio del curso a hoy, en lugar de configurarla a la fecha guardada en el archivo de respaldo del curso';
$string['coursebackups'] = 'Respaldos del curso';
$string['coursebackups_desc'] = 'Suba aquí los archivos .mbz con los archivos de respaldos del curso para usar para la restauración del curso. Los archivos de respaldo de curso en esta área_de_archivos deben de nombrarse con el nombre corto del curso apropiado y el archivo debe tener la extensión .mbz. Vea el archivo README para más detalles.';
$string['coursebackupsheading'] = 'Respaldos del curso';
$string['cronrunday'] = 'Días de ejecución';
$string['cronrunday_desc'] = 'Restaurar cursos en la zona de pruebas (\'\'sandbox\'\') en estos días';
$string['cronruntime'] = 'Hora de ejecución';
$string['cronruntime_desc'] = 'Restaurar cursos en  zona de pruebas (\'\'sandbox\'\') en esta hora del día';
$string['cronruntimeheading'] = 'Hora de ejecución';
$string['cronruntimescheduledtasksactivate'] = 'Por defecto, el trabajo agendado de la zona de pruebas (\'\'sandbox\'\') está deshabilitada en los "Trabajos (\'\'tasks\'\') del sistema". Usted tiene que habilitarlo allí para usar este plugin.';
$string['cronruntimescheduledtasksmanagement'] = 'El núcleo de Moodle soporta un sistema llamado "Trabajos agendados (Scheduled tasks)". El tiempo de ejecución del plugin de sandbox está configurado en el sistema de "Trabajos agendados (Scheduled tasks)".';
$string['cronruntimescheduledtasksstandardtime'] = 'Por defecto, el trabajo (\'\'task\'\') agendado de la zona de pruebas (\'\'sandbox\'\') está configurada a correr cada domingo a la 1:00 hora de Greenwich en el sistema de "Trabajos agendados". Por favor, cambie esta hora de acuerdo a sus necesidades.';
$string['emailsubjecterror'] = 'ERROR: Zona de pruebas (\'\'sandbox\'\')';
$string['emailsubjectnotice'] = 'AVISO: Zona de pruebas (\'\'sandbox\'\')';
$string['emailsubjectwarning'] = 'ADVERTENCIA: Zona de pruebas (\'\'sandbox\'\')';
$string['errorlastcronerror'] = 'ERROR: No se pudo obtener el sello-de-tiempo de la hora de la última ejecución de Zona de pruebas (\'\'sandbox\'\') de la base de datos, saliendo...';
$string['eventcourserestored'] = 'Curso restaurado';
$string['eventcourserestored_desc'] = 'El curso \'{$a}\' fue restaurado a su estado de curso predefinido';
$string['exitingnoneed'] = 'No hay necesidad de restaurar cursos en la Zona de pruebas (\'\'sandbox\'\') hasta ahora, esperemos a la siguiente hora de corrida del CRON, saliendo...';
$string['keepcourseid'] = 'Conservar ID del curso';
$string['keepcourseid_desc'] = 'Por defecto, para estar completamente a salvo al restaurar un curso desde los archivos de respaldo del curso, este plugin elimina el curso y crea uno nuevo; El curso restaurado ahora tendrá un nuevo ID del curso. Pero con esta configuración habilitada, el plugin conservará el curso existente y solamente borrará el contenido existente del curso antes de restaurar los contenidos del curso a partir de los archivos de respaldo del curso; El curso restaurado entonces tendrá el mismo ID del curso.';
$string['noticedaysnotconfigured'] = 'AVISO: No están configurados los días para la ejecución de Zona de pruebas (\'\'sandbox\'\'), por esta razón no hay nada que hacer, saliendo...';
$string['noticenocoursebackups'] = 'AVISO: El área de archivos de la caja_de_arena no contiene ningun respaldo del curso, por lo que no hay nada que hacer; saliendo...';
$string['noticerestorecount'] = 'AVISO: Zona de pruebas (\'\'sandbox\'\') ha restaurado {$a} cursos';
$string['notifyheading'] = 'Notificaciones';
$string['notifylevel'] = 'Umbral para Email';
$string['notifylevel_desc'] = 'Las notificaciones de Email sólamente se mandarán para eventos que usted quiera que le sean notificados. ¿De qué quiere usted que le notifiquen?';
$string['notifyonerrors'] = 'Mandar Email de fallas a';
$string['notifyonerrors_desc'] = 'Si hubiera fallas en Zona de pruebas (\'\'sandbox\'\'), se pueden enviar notificaciones por Email. ¿Quién debería de ver estas notificaciones?';
$string['nowprocessing'] = 'AHORA: Procesando el curso "{$a}"';
$string['pluginname'] = 'Zona de pruebas (\'\'sandbox\'\')';
$string['privacy:metadata'] = 'El plugin Sandbox (caja-de-arena) proporciona funcionalidad extendida a administradores Moodle, pero no almacena ningún dato personal.';
$string['restoreheading'] = 'Restaurar configuraciones';
$string['restoresettingsdescription'] = 'Similar a las configuraciones de restauración globales de Moodle y a las configuraciones de restauración que verá al restaurar manualmente un curso, Usted puede configurar aquí los detalles para restaurar los cursos de la caja de arena.';
$string['restoresettingswarning'] = 'Por favor, tenga en cuenta que la caja de arena no valida si es que  el respaldo del curso subido cumple con las configuraciones configuradas. Por favor, asegúrese de que solamente activa las configuraciones que realmente necesita para restaurar con la caja de arena. Pruebe adecuadamente sus configuraciones antes de ejecutar desatendida la caja de arena. Asegúrese de que solamente habilita las configuraciones de restauración que todos sus archivos de respaldo de cursos cumplen; pues de lo contrario se arriesga a que la caja de arena falle graciosamiente cuando intente restaurar los archivos de respaldo del curso.';
$string['skippingadjuststartdatefailed'] = 'ADVERTENCIA: El ajuste de fecha de inicio del curso "{$a}" falló, saltándose el archivo...';
$string['skippingcreatefailed'] = 'ADVERTENCIA: La creación del curso "{$a}" falló, saltándose el archivo...';
$string['skippingdbupdatefailed'] = 'ADVERTENCIA: La actualización de la base de datos para el curso "{$a}" falló, saltándose el archivo...';
$string['skippingdeletecontentfailed'] = 'ADVERTENCIA: La eliminación del contenido existente en el curso  "{$a}" falló (parcial o completamente), saltando archivo...';
$string['skippingdeletionfailed'] = 'ADVERTENCIA: La eliminación del curso existente "{$a}" falló (parcial o completamente), saltándose el archivo...';
$string['skippingnocourse'] = 'ADVERTENCIA: No existe el curso con nombre corto de "{$a}", saltándose el archivo...';
$string['skippingrestorefailed'] = 'ADVERTENCIA: La restauración del curso "{$a}" falló, saltándose el archivo...';
$string['skippingunzipfailed'] = 'ADVERTENCIA: La descompresión del archivo de respaldo del curso "{$a}" falló, saltándose el archivo...';
$string['successrestored'] = 'ÉXITO: Curso restaurado "{$a}"';
$string['taskrestorecourses'] = 'Restaurar cursos de la Zona de pruebas (\'\'sandbox\'\')';
$string['upgrade_notice_2014051200'] = '<strong>NOTA SOBRE LA ACTUALIZACIÓN:</strong> Esta actualización del plugin de la Zona de pruebas (\'\'sandbox\'\') añade soporte para el sistema de trabajos (del sistema) agendadas de Moodle. Las configuraciones del horario de ejecución del plugin  <strong>no</strong> se migrarán al sistema de trabajos agendados. El trabajo agendado del plugin está deshabilitada después de esta actualización y el horario de ejecución está configurado a los valores por defecto del plugin; por favor, revise las configuraciones de los trabajos agendados de Moodle y re-habilite el plugin de acuerdo a sus necesidades.';
$string['upgrade_notice_2018020902'] = '<strong>AVISO DE ACTUALIZACIÓN:</strong> Los archivos de respaldo del curso fueron movidos a la nueva área_de_archivos dentro de Moodle. Usted puede borrar el antiguo directorio de respaldos de cursos {$a} ahora. Para más instrucciones sobre la actualización, lea el archivo  README.';
