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
 * Strings for component 'ltiservice_gradebookservices', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   ltiservice_gradebookservices
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysgs'] = 'Use este servicio para sincronización de calificación y gestión de columna';
$string['grade_synchronization'] = 'Servicios de Calificación y Tarea IMS LTI';
$string['grade_synchronization_help'] = 'Si es que se usan o no los Servicio de Calificación y Tarea IMS LTI para sincronizar las calificaciones en sustitución del servicio de  Resultados Básicos.

* **No usar este servicio** - Se usará la configuración y las características de Resultados Básicos
* **Usar este servicio solamente para sincronizar calificación** - El servicio poblará las calificaciones en una columna ya existente en el Libro de calificaciones, pero no podrá crear nuevas columnas
* **Usar este servicio para sincronizar calificación y gestión de columna** - El servicio podrá crear y actualizar columnas del Libro de calificaciones y gestionar las calificaciones.';
$string['ltiservice_gradebookservices'] = 'Servicios de Tarea y Calificación IMS LTI';
$string['modulename'] = 'Calificaciones LTI';
$string['nevergs'] = 'No usar este servicio';
$string['partialgs'] = 'Usar este servicio solamente para sincronizar calificación';
$string['pluginname'] = 'Servicios de Calificación y Tarea LTI';
$string['privacy:metadata:externalpurpose'] = 'La información es enviada a un provedor LTI externo.';
$string['privacy:metadata:feedback'] = 'La retroalimentación que recibió el usuario para esta actividad LTI.';
$string['privacy:metadata:grade'] = 'La calificación que recibió el usuario para esta actividad LTI.';
$string['privacy:metadata:maxgrade'] = 'La calificación máxima que puede lograrse para esta actividad LTI.';
$string['privacy:metadata:timemodified'] = 'La última vez que fue actualizada la calificación';
$string['privacy:metadata:userid'] = 'La ID del usuario usando el consumidor LTI.';
$string['taskcleanup'] = 'Limpieza de tabla de Servicios de Calificación y Tarea LTI';
