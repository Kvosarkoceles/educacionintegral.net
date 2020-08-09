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
 * Strings for component 'quizaccess_delayed', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   quizaccess_delayed
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Realizar el examen ahora';
$string['delayedattemptlock'] = 'Entrada gradual al examen';
$string['delayedattemptlock_help'] = 'Si se activa, al acceder a la página antes del momento de apertura del examen se inhabilita transitoriamente el botón de comienzo.
Se activa un contador de tiempo con un plazo aleatorio para cada estudiante (hasta un tiempo configurado por su institución). Solo cuando ese plazo termina el estudiante puede usar el botón de comienzo del examen.';
$string['explaindelayedattempt'] = 'Establece una demora aleatoria para comenzar';
$string['flipdowncounter'] = 'Contador de tarjetas animado';
$string['noscriptwarning'] = 'Este examen necesita un navegador que soporte JavaScript. Si tiene un bloqueador de Javascript necesitará desactivarlo.';
$string['plaintextcounter'] = 'Contador de texto simple';
$string['pleasewait'] = 'Por favor, espere en esta página.';
$string['pluginname'] = 'Entrada con retardo aleatorio al examen.';
$string['pluginname_desc'] = 'Auto activa el botón de inicio de examen con un retardo aleatorio.';
$string['quizaccess_delayed_allowdisable'] = 'A los profesores se les permite desactivar la regla';
$string['quizaccess_delayed_countertype'] = 'Tipo de contador.';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Mensaje institucional que se muestra cuando el examen podría ser problemático';
$string['quizaccess_delayed_enabled'] = 'Entrada retardada a los examenes activada';
$string['quizaccess_delayed_enabledbydefault'] = 'Los nuevos exámenes usarán esta regla por defecto';
$string['quizaccess_delayed_maxdelay'] = 'Máximo retardo (minutos)';
$string['quizaccess_delayed_notice'] = 'Aviso para los estudiantes';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Mostrarle una advertencia al profesor si su examen usa muchos recursos del servidor';
$string['quizaccess_delayed_startrate'] = 'Tasa de entrada (alumnos por minuto)';
$string['quizaccess_delayed_teachernotice'] = 'Este examen aplicará un control de entrada gradual, que hará que los estudiantes entren aleatoriamente hasta con {$a} minutos de retardo.';
$string['quizaccess_delayed_timelimitpercent'] = 'Máximo retardo como porcentaje del tiempo de realización';
$string['quizwillstartinabout'] = 'Su turno para hacer el examen comenzará en';
$string['quizwillstartinless'] = 'Su turno para hacer el examen comenzará en menos de un minuto';
$string['tooshortpagesadvice'] = 'El examen tiene {$a->pages} páginas demasiado cortas. Esto aumenta la carga sobre el servidor gravemente. Considere asignar más tiempo a cada página, por ejemplo poniendo más preguntas en cada página.';
$string['tooshorttimeguardadvice'] = 'Un tiempo de disponibilidad de {$a->timespanstr} es demasiado ajustado. Tenga en cuenta que se aplicará a algunos estudiantes un retardo de espera de hasta {$a->maxdelaystr}, tiene {$a->timelimitstr} para realizar la prueba y conviene dejar un márgen de seguridad para otros retardos en el inicio del examen.';
