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
 * Strings for component 'offlinequiz_statistics', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   offlinequiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Respuesta real';
$string['allattempts'] = 'todos los intentos';
$string['allattemptsavg'] = 'Calificación promedio de todos los intentos';
$string['allattemptscount'] = 'Número total de resultados calificados completos';
$string['allgroups'] = 'Estadísticas para todos los grupos de exámenes fuera-de-línea';
$string['analysisofresponses'] = 'Análisis de respuestas';
$string['analysisofresponsesfor'] = 'Análisis de respuestas para {$a}.';
$string['attempts'] = 'Intentos';
$string['attemptsall'] = 'todos los intentos';
$string['attemptsfirst'] = 'primer intento';
$string['backtoquestionsandanswers'] = 'Regresar a la página del reporte principal de estadísticas';
$string['bestgrade'] = 'Mayor calificación obtenida';
$string['calculatefrom'] = 'Calcular estadísticas a partir de';
$string['cic'] = 'Coeficiente de consistencia interna';
$string['completestatsfilename'] = 'completestats';
$string['correct'] = 'Respondida(s) correctamente';
$string['count'] = 'Veces';
$string['coursename'] = 'Nombre del curso';
$string['detailedanalysis'] = 'Análisis más detallado de las respuestas a esta pregunta';
$string['differentquestions'] = 'Sus grupos de exámenes fuera-de-línea contienen diferentes conjuntos de preguntas.';
$string['differentsumgrades'] = 'Sus grupos de exámenes fuera-de-línea  tienen diferentes sumas de calificaciones ({$a}). Por lo tanto, no pueden calcularse la calificación promedio, la mediana y la desviación estándar.';
$string['discrimination_index'] = 'Índice de discriminación';
$string['discriminative_efficiency'] = 'Eficiencia discriminatoria';
$string['downloadeverything'] = 'Descargar reporte completo como';
$string['duration'] = 'Abierto para';
$string['effective_weight'] = 'Ponderación efectiva';
$string['errordeleting'] = 'Error al eliminar registros {$a} antiguos';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'La pregunta ({$a}) aparece más de una vez con diferentes ponderaciones en diferentes posiciones del examen. Esto actualmente no está soportado por el reporte de estadísticas y puede hacer no-confiables las estadísticas para esta pregunta.';
$string['errormedian'] = 'Error al buscar la mediana';
$string['errorpowerquestions'] = 'Error al buscar datos para calcular la varianza para las calificaciones de preguntas';
$string['errorpowers'] = 'Error al buscar datos para calcular la varianza para las calificaciones de exámenes fuera-de-línea';
$string['errorrandom'] = 'Error al obtener datos de sub ítems';
$string['errorratio'] = 'Tasa de error';
$string['errorstatisticsquestions'] = 'Error al buscar datos para calcular estadísticas para calificaciones de preguntas';
$string['facility'] = 'Índice de facilidad';
$string['firstattempts'] = 'primeros intentos';
$string['firstattemptsavg'] = 'Calificación promedio de primeros intentos';
$string['firstattemptscount'] = 'Número de primeros intentos completamente calificados';
$string['frequency'] = 'Frecuencia';
$string['intended_weight'] = 'Ponderaciones deseadas';
$string['kurtosis'] = 'Kurtosis de la distribución de puntajes';
$string['lastcalculated'] = 'Calculado por última vez en {$a->lastcalculated} y hay  {$a->count} intentos nuevos desde entonces.';
$string['maxgrade'] = 'Calificación máxima posible';
$string['median'] = 'Mediana de calificacion';
$string['modelresponse'] = 'Respuesta del modelo';
$string['negcovar'] = 'Covarianza negativa de calificación con calificación total del intento';
$string['negcovar_help'] = 'Esta calificación para esta pregunta para este conjunto de intentos en el examen fuera-de-línea varía en forma opuesta a la calificación genral del intento. Esto significa que la calificación del intento tiende a ser una calificación inferior cuando la calificación para esta pregunta está arriba del promedio y vice-versa.

No puede calcularse nuestra ecuación para ponderación efectiva en este caso. Los cálculos para ponderación efectiva para otras preguntas en este examen fuera-de-línea son el peso efectivo de la pregunta para estas preguntas si es que se les da una calificación máxima de cero a las preguntas resaltadas con covarianza negativa.

Si Usted edita un examen fuera-de-línea y le da a esta(s) pregunta(s)  con covarianza negativa calificación de cero, entonces la ponderación efectiva para estas preguntas será de cero y la ponderación efectiva real de la pregunta de las otras preguntas será como se calcula ahora.';
$string['nostudentsingroup'] = 'Todavía no hay estudiantes en este grupo';
$string['offlinequizinformation'] = 'Información del examen fuera-de-línea';
$string['offlinequizname'] = 'Nombre del Examen fuera-de-línea';
$string['offlinequizoverallstatistics'] = 'Estadísticas del examen fuera-de-línea';
$string['offlinequizstructureanalysis'] = 'Análisis de la estructura del examen fuera-de-línea';
$string['optiongrade'] = 'Crédito parcial';
$string['partially'] = 'Contestada Parcialmente Correcta';
$string['partofquestion'] = '#Respuesta';
$string['pluginname'] = 'Estadísticas de Examen Fuera-de-línea';
$string['position'] = 'Posición';
$string['positions'] = 'Posicion(es)';
$string['preferencespage'] = 'Preferencias solamente para esta página';
$string['privacy:metadata'] = 'Este plugin no almacena ningún dato relacionado de usuario.';
$string['questionandanswerstats'] = 'Preguntas + Respuestas';
$string['questionandanswerstatsheader'] = 'Estadísticas - Análisis de preguntas y Respuestas';
$string['questioninformation'] = 'Información de pregunta';
$string['questionname'] = 'Nombre de pregunta';
$string['questionnumber'] = 'P#';
$string['questionstatistics'] = 'Estadísticas de pregunta';
$string['questionstats'] = 'Análisis de preguntas';
$string['questionstatsfilename'] = 'questionstats';
$string['questionstatsheader'] = 'Estadísticas - Análisi de Preguntas';
$string['questiontype'] = 'Tipo de pregunta';
$string['random_guess_score'] = 'Puntaje por adivinación aleatoria';
$string['recalculatenow'] = 'Re-calcular ahora';
$string['remarks'] = 'Nota';
$string['response'] = 'Respuesta';
$string['skewness'] = 'Sesgo de distribución de puntaje';
$string['standarddeviation'] = 'Desviación estándar';
$string['standarddeviationq'] = 'Desviación estándar';
$string['standarderror'] = 'Error estándar';
$string['statistics'] = 'Estadísticas';
$string['statistics:componentname'] = 'Reporte de estadísticas del examen fuera-de-línea';
$string['statisticsforgroup'] = 'Estadísticas para grupo';
$string['statisticshelp'] = 'Ayuda para estadísticas del examen fuera-de-línea';
$string['statisticsreport'] = 'Reporte de estadísticas';
$string['statisticsreportgraph'] = 'Estadísticas para posiciones de preguntas';
$string['statistics:view'] = 'Ver Reporte de estadísticas';
$string['statsfor'] = 'Reporte de estadísticas de examen fuera-de-línea (para {$a})';
$string['statsoverview'] = 'Vista general';
$string['statsoverviewheader'] = 'Vista general';
$string['worstgrade'] = 'Mínima calificación obtenida';
$string['wrong'] = 'Contestada equivocadamente';
