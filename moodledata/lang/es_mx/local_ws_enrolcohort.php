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
 * Strings for component 'local_ws_enrolcohort', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   local_ws_enrolcohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinstance:201'] = 'Instancia de inscripción a cohorte añadida.';
$string['addinstance:400'] = 'No se pudo añadir instancia de inscripción a cohorte.';
$string['addinstance:courseissite'] = 'No se puede añadir instancia al curso del sitio.';
$string['addinstance:usingdefaultname'] = 'Usando nombre generado por el sistema.';
$string['cohortenrolmethodnotavailable'] = 'El método de inscripción a cohorte no está disponible.';
$string['cohortnotavailableatcontext'] = 'Cohorte no puede ser añadida a este curso.';
$string['cohortnotexists'] = 'Cohorte no existe.';
$string['cohortnullcontext'] = 'Cohorte no puede ser añadida porque el contexto es nulo.';
$string['coursenotexists'] = 'Curso no existe.';
$string['deleteinstance:200'] = 'Instancia de inscripción a cohorte eliminada.';
$string['deleteinstance:400'] = 'No se pudo eliminar instancia de inscripción a cohorte.';
$string['enrolcohortalreadysyncedwithrole'] = 'Ya existe una instancia de inscripción a cohorte para este rol.';
$string['enrolcohortalreadysyncedwithrole:message'] = 'Una instancia de inscripción de cohorte con id {$a->enrolid} ya está sincronizada con el rol {$a->roleid}';
$string['enrolmentmethodnotavailable'] = 'No se pudo instanciar enrol_cohort.';
$string['getinstance:200'] = 'Se encontraron {$a->numberofenrolmentinstances} instancias de inscripción de cohorte para el curso con id {$a->courseid}.';
$string['getinstances:200'] = 'Se encontraron {$a->numberofenrolmentinstances} instancias de inscripción de cohorte en {$a->numberofcourses} cursos (Todos los cursos).';
$string['getinstances:400'] = 'No se pudieron obtener instancias de inscripción a cohorte.';
$string['getinstances:courseissite'] = 'No se pudieron obtener instancias para el curso del sitio.';
$string['groupnotexists'] = 'Grupo no existe.';
$string['instancegroupnone'] = 'Inscribir a ningún grupo de instancia.';
$string['instancenotexists'] = 'Instancia de inscripción desconocida.';
$string['invalidcourse'] = '¡Curso es inválido!';
$string['invalidcourse:issite'] = 'No se pudo añadir instancia al curso del sitio.';
$string['invalidstatus'] = '¡Estado inválido de instancia de inscripción!';
$string['invalidstatus:message'] = 'Los valores posibles para estado de instancia de inscripción son: {$a->enabled} - Habilitado, {$a->disabled} - Deshabilitado. Se tiene {$a->actual}.';
$string['objectnotfound'] = '¡Objeto no existe!';
$string['objectnotfound:message'] = 'No se pudo encontrar {$a->object} con {$a->key} {$a->value}';
$string['pluginname'] = 'Webservices extendidos de inscripción a cohorte';
$string['privacy:metadata'] = 'El plugin de inscripción por cohortes de servicios web no almacena ningún dato personal.';
$string['rolenotassignablehere'] = 'Rol no es asignable aquí.';
$string['rolenotexists'] = 'Rol no existe.';
$string['statusinvalid'] = 'Estado inválido {$a}. Los estados posibles son: 0 - activo, 1 - no activo.';
$string['unavailableatcontext'] = '¡Objeto no está disponible en este contexto!';
$string['unavailableatcontext:message'] = '{$a->object} con id {$a->id} no es {$a->word} en este contexto.';
$string['unknownstatuscode'] = 'Estado de código desconocido {$a}.';
$string['updateinstance:200'] = 'Instancia de inscripción a cohorte actualizada.';
$string['updateinstance:400'] = 'No se pudo actualizar la instancia de inscripción a cohorte.';
$string['updateinstance:nochange'] = 'No se hicieron cambios a la instancia de inscripción a cohorte.';
$string['usermissinganycapability'] = 'Al usuario le falta una de las siguientes capacidades en el contexto de curso:  {$a}\'';
$string['usermissingrequiredcapability'] = 'Al usuario le falta la capacidad requerida \'{$a}\' en el contexto de curso.';
