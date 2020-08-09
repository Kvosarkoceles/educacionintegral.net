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
 * Strings for component 'block_inactiveuseralert', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   block_inactiveuseralert
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Actividad';
$string['activityalerttemplate'] = 'Plantilla de Email';
$string['activityalerttemplate_help'] = 'Pueden usarse las siguientes palabras clave en su plantilla:

{alink} : enlace a la actividad (se muestra como el nombre de la actividad)<br />
{clink} : enlace al curso (se muestra como el nombre completo del curso)<br />
{cfull} : el nombre completo del curso<br />
{cshort} : el nombre corto del curso<br />
{userfullname} : el nombre completo del usuario';
$string['addalert'] = 'Añadir alerta';
$string['alert'] = 'Alerta';
$string['alertdate'] = 'Alerta {$a}';
$string['alertssent'] = 'Alertas enviadas';
$string['alerttemplate'] = 'Plantilla de Email';
$string['cc'] = 'CC\'s de Alertas';
$string['cc_help'] = 'Si se habilita, a los contactos del curso serán enviadas CC\'s (copia carbón) de todas las aertas enviadas';
$string['configtemplateactivity'] = 'La plantilla por defecto usada para nuevas alertas de ingreso.';
$string['configtemplateactivitydefault'] = 'Hola {userfullname},

Aparentemente Usted aún no ha completado la actividad de  \'{alink}\' en {clink}.';
$string['configtemplatelogin'] = 'La plantilla por defecto usada para nuevas alertas de ingreso.';
$string['configtemplatelogindefault'] = 'Hola {userfullname},

Aparentemente Usted aún no ha ingresado a {clink}.';
$string['configure'] = 'Configurar';
$string['deleteconfirm'] = '¿Está seguro de querer eliminar esta alerta para la actividad  "{$a}"?';
$string['deleteconfirminvalidalert'] = '¿Está seguro de querer eliminar esta alerta inválida?';
$string['enabled'] = 'Habilitado';
$string['errorcoursecompletiondisabled'] = 'La finalización del curso está actualmente desactivada en este curso, por lo que no se disparán alertas de actividad.';
$string['errorcoursemismatch'] = 'La alerta que Usted está tratando de alterar no pertenece a este curso.';
$string['errorearlierthanprevious'] = 'La fecha seleccionada debe ser después de la fecha de alerta previa.';
$string['errorinthepast'] = 'Nuevas alertas deben de configurarse en el futuro.';
$string['errornoactivitieswithcompletion'] = 'Su curso aún no tiene actividades con criterios de terminación configurados.';
$string['inactiveuseralert:addinstance'] = 'Añadir un nuevo bloque de alerta de usuario inactivo';
$string['invalidalert'] = 'Alerta inválida';
$string['loginalerttemplate'] = 'Plantilla de Email';
$string['loginalerttemplate_help'] = 'Pueden usarse las siguientes palabras clave en su plantilla:

{clink} : enlace al curso (se muestra como el nombre completo del curso)<br />
{cfull} : el nombre completo del curso<br />
{cshort} : el nombre corto del curso<br />
{userfullname} : el nombre completo del usuario';
$string['noalerts'] = 'No se han cconfigurado alertas';
$string['nomoreactivities'] = 'No pueden configurarse más actividades con alertas. Ya sea que las actividades no tienen habilitada la finalización o todas las que si la tienen ya tienen configuradas las alertas.';
$string['numbersent'] = '{$a} senviado/a';
$string['pluginname'] = 'Alertas de usuario inactivo';
$string['reportname'] = 'Reporte de usuario inactivo';
$string['sendalertstask'] = 'Enviar alertas de usuario inactivo';
$string['studentsonly'] = 'Solamente estudiantes';
$string['studentsonly_help'] = 'Solamente se les enviará una notificación de actividad/ingreso a usuarios que tengan el rol de estudiante.';
$string['subject'] = 'Alerta de usuario inactivo';
$string['templateactivity'] = 'Alerta de actividad por defecto';
$string['templatelogin'] = 'Alerta de ingreso por defecto';
$string['type'] = 'Tipo';
$string['typeactivity'] = 'Alerta de actividad';
$string['typelogin'] = 'Alerta de ingreso';
$string['viewreport'] = 'Ver reporte de acceso de usuario';
