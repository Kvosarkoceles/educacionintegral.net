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
 * Strings for component 'quizaccess_onesession', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   quizaccess_onesession
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Usted está intentando acceder a un intento de examen desde una computadora, dispositivo o navegador diferente del que usó para iniciar el examen. Si Usted cerró accidentalmente su navegador, por favor contacte a su profesor.';
$string['eventattemptblocked'] = 'Se bloqueó el intento del estudiante  para continuar el examen usando otro dispositivo';
$string['eventattemptunlocked'] = 'Al estudiante se le permitió continuar el intento del examen usando otro dispositivo';
$string['onesession'] = 'Bloquear conexiones concurrentes';
$string['onesession_help'] = 'Si se habilita, los estudiantes pueden continuar el intento del examen solamente en la misma sesión del navegador. Cualquier intento para abrir el mismo examen usando otra computadora, dispositivo o navegador, será bloqueado. Esto puede ser útil para asegurar que nadie le ayude al estudiante abriendo el mismo intento del examen en otra computadora.';
$string['onesession:unlockattempt'] = 'Desbloquear intento de examen';
$string['pluginname'] = 'Regla de acceso Bloquear sesiones concurrentes de acceso al examen';
$string['studentinfo'] = '¡Atención! Está prohibido el cambiar de dispositivo al intentar este examen. Por favor tenga en cuenta que después de iniciar el intento del examen, cualquier conexión a este examen usando otras computadoras, dispositivos o navegadores, será bloqueado. No cierre la ventana del navegador hasta que finalice el examen, pues de lo contrario Usted no podrá completar este examen.';
$string['unlockthisattempt'] = 'Permitirles a estudiantes continuar con este intento usando otro dispositivo';
$string['unlockthisattempt_header'] = 'Bloquear conexiones concurrentes';
