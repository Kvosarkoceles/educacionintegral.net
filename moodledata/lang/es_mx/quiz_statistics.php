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
 * Strings for component 'quiz_statistics', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   quiz_statistics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actualresponse'] = 'Respuesta actual';
$string['allattempts'] = 'todos los intentos';
$string['allattemptsavg'] = 'Calificación promedio de todos los intentos';
$string['allattemptscount'] = 'Número total de intentos completos calificados';
$string['analysisnameonly'] = '"{$a->name}"';
$string['analysisno'] = '({$a->number}) "{$a->name}"';
$string['analysisnovariant'] = '({$a->number}) "{$a->name}" variante {$a->variant}';
$string['analysisofresponses'] = 'Análisis de respuestas';
$string['analysisofresponsesfor'] = 'Análisis de respuestas para {$a}';
$string['analysisvariant'] = '"{$a->name}" variante {$a->variant}';
$string['attempts'] = 'Intentos';
$string['attemptsall'] = 'todos los intentos';
$string['attemptsfirst'] = 'primer intento';
$string['backtoquizreport'] = 'Regresar a página principal de reporte de estadísticas';
$string['calculatefrom'] = 'Calcular estadísticas de';
$string['calculatingallstats'] = 'Calculando estadísticas para preguntas y examen y analizando datos de respuestas';
$string['cic'] = 'Coeficiente de consistencia interna (para {$a})';
$string['completestatsfilename'] = 'completestats';
$string['count'] = 'Número';
$string['counttryno'] = 'Número de intentos {$a}';
$string['coursename'] = 'Nombre del curso';
$string['detailedanalysis'] = 'Análisis más detallado de las respuestas a esta pregunta';
$string['detailedanalysisforvariant'] = 'Análisis más detallado para las respuestas a la variante {$a} de esta pregunta';
$string['discrimination_index'] = 'Índice de Discriminación';
$string['discriminative_efficiency'] = 'Eficiencia discriminativa';
$string['downloadeverything'] = 'Descargar reporte completo como';
$string['duration'] = 'Abierto por';
$string['effective_weight'] = 'Ponderación efectiva';
$string['errordeleting'] = 'Error al borrar registros {$a} antiguos.';
$string['errormedian'] = 'Error al buscar mediana';
$string['errorpowerquestions'] = 'Error al buscar datos para calcular varianza para calificaciones de preguntas';
$string['errorpowers'] = 'Error al recuperar datos para calcular la varianza de las calificaciones del examen';
$string['errorrandom'] = 'Error al obtener datos del sub elemento';
$string['errorratio'] = 'Tasa de error (para {$a})';
$string['errorstatisticsquestions'] = 'Error al buscar datos para calcular estadísticas para calificaciones de preguntas';
$string['facility'] = 'Índice de facilidad';
$string['firstattempts'] = 'primeros intentos';
$string['firstattemptsavg'] = 'Calificación promedio de primeros intentos';
$string['firstattemptscount'] = 'Número de primeros intentos completos calificados';
$string['frequency'] = 'Frecuencia';
$string['highestattempts'] = 'intento con máxima calificación';
$string['highestattemptsavg'] = 'Calificación promedio de los intentos con mayores calificaciones';
$string['intended_weight'] = 'Ponderación deseada';
$string['kurtosis'] = 'Curtosis de la distribución de puntuaciones (para {$a})';
$string['lastattempts'] = 'último intento';
$string['lastattemptsavg'] = 'Calificación promedio de los últimos intentos';
$string['lastcalculated'] = 'El último cálculo fue hace  {$a->lastcalculated} y desde entonces se han realizado  {$a->count} intentos.';
$string['maximumfacility'] = 'Facilidad máxima';
$string['median'] = 'Mediana de calificación (de {$a})';
$string['medianfacility'] = 'Facilidad media';
$string['minimumfacility'] = 'Facilidad mínima';
$string['modelresponse'] = 'Respuesta modelo';
$string['nameforvariant'] = 'Variante {$a->variant} de {$a->name}';
$string['negcovar'] = 'Covarianza negativa de esta calificación con la calificación total del examen';
$string['negcovar_help'] = 'La calificación de la pregunta para este conjunto de intentos varía en forma inversa a la calificación promedio. Esto significa que la calificación general tiende a estar debajo del promedio cuando la calificación para esta pregunta está sobre el promedio y viceversa.

Nuestra ecuación para la ponderación efectiva de la pregunta no puede calcularse en este caso. Los cálculos para la ponderacón efectiva de la pregunta para las otras preguntas de este examen son la ponderación de la pregunta si a las preguntas resaltadas que tienen una covarianza negativa se les diera una calificación máxima de cero.

Si edita un examen y les pone a estas preguntas con covarianza negativa una calificación máxima de cero, entonces  la ponderación efectiva de estas preguntas será cero y la ponderación efectiva real de las otras  preguntas será como se calcule ahora.';
$string['nogradedattempts'] = 'No se han hecho intentos de resolver este examen; o bien, todos los intentos tienen preguntas que necesitan calificación manual.';
$string['nostudentsingroup'] = 'Aún no hay estudiantes en este grupo';
$string['optiongrade'] = 'Crédito parcial';
$string['partofquestion'] = 'Parte de pregunta';
$string['pluginname'] = 'Estadísticas';
$string['position'] = 'Posición';
$string['positions'] = 'Posición(es)';
$string['privacy:metadata'] = 'Aunque el plugin de Estadísticas del Examen tiene tablas de la base de datos, los datos son datos agregados y no describen a un individuo único.';
$string['questioninformation'] = 'Información sobre la pregunta';
$string['questionname'] = 'Nombre de la pregunta';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'Estadísticas de la pregunta';
$string['questionstatsfilename'] = 'completestats';
$string['questiontype'] = 'Tipo de pregunta';
$string['quizinformation'] = 'Información del examen';
$string['quizname'] = 'Nombre del examen';
$string['quizoverallstatistics'] = 'Estadísticas globales del examen';
$string['quizstatisticscleanuptask'] = 'Limpiar los registros de la caché de estadísticas del examen';
$string['quizstructureanalysis'] = 'Análisis de la estructura del examen';
$string['random_guess_score'] = 'Calificación aleatoria estimada';
$string['rangebetween'] = '{$a->min} − {$a->max}';
$string['rangeofvalues'] = 'Rango de estadísticas para estas preguntas';
$string['recalculatenow'] = 'Recalcular ahora';
$string['reportsettings'] = 'Configuraciones de cálculos estadísticos';
$string['response'] = 'Respuesta';
$string['skewness'] = 'Sesgo de la distribución de puntuaciones (para {$a})';
$string['slotstructureanalysis'] = 'Análisis estructural para la pregunta número {$a}';
$string['standarddeviation'] = 'Desviación estándar (para {$a})';
$string['standarddeviationq'] = 'Desviación estándar';
$string['standarderror'] = 'Error estándar (para {$a})';
$string['statistics'] = 'Estadísticas';
$string['statisticsreport'] = 'Reporte de Estadísticas';
$string['statisticsreportgraph'] = 'Estadísticas para posiciones de pregunta';
$string['statistics:view'] = 'Ver reporte de estadísticas';
$string['statsfor'] = 'Estadísticas del examen (para {$a})';
$string['variant'] = 'Variante';
$string['viewanalysis'] = 'Ver detalles';
$string['whichtries'] = 'Analizar respuestas para';
