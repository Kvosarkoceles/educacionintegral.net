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
 * Strings for component 'analytics', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analizable {$a->analysableid} no usado {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analizable {$a->analysableid} no es válido para esta meta: {$a->result}';
$string['analysisinprogress'] = 'Todavía está siendo analizado por una ejecución previa';
$string['analytics'] = 'Analítica';
$string['analyticsdisabled'] = 'Analítica está deshabilitada. Usted puede habilitarla en "Administración del sitio  > Características avanzadas".';
$string['analyticslogstore'] = 'Almacén de bitácora usado para analítica';
$string['analyticslogstore_help'] = 'El almacén de bitácora que será usado por la API de analítica para leer la actividad de los usuarios';
$string['analyticssettings'] = 'Configuraciones de Analítica';
$string['analyticssiteinfo'] = 'Información del sitio';
$string['defaultpredictionsprocessor'] = 'Procesador de predicciones por defecto';
$string['defaultpredictoroption'] = 'Procesador por defecto ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervalos predeterminados de análisis para evaluación del modelo';
$string['defaulttimesplittingmethods_help'] = 'El intervalo de análisis define cuando el sistema calculará predicciones y la porción de las bitácoras de actividad que serán consideradas para esas predicciones. El proceso de evaluación del modelo iterará por estos intervalos de análisis a menos que sea especificado un intervalo de análisis.';
$string['disabledmodel'] = 'Modelo deshabilitado';
$string['erroralreadypredict'] = 'El archivo {$a} ya ha sido usado para generar predicciones.';
$string['errorcannotreaddataset'] = 'El archivo {$a} del conjunto_de_datos no puede leerse.';
$string['errorcannotusetimesplitting'] = 'El intervalo de análisis proporcionado no puede ser usado en este modelo.';
$string['errorcannotwritedataset'] = 'El archivo {$a} del conjunto_de_datos no puede escribirse.';
$string['errorexportmodelresult'] = 'El modelo de aprendizaje de máquina no puede ser exportado.';
$string['errorimport'] = 'Error al importar el archivo JSON proporcionado.';
$string['errorimportmissingclasses'] = 'Los siguientes componentes analíticos no están disponibles en este sitio: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'El modelo proporcionado necesita que sean instalados los siguientes plugins: {$a}. Tenga en cuenta que las versiones no necesitan forzosamente coincidir con las versiones instaladas en su sitio. El instalar la misma versión o una versión más nueva del plugin debería de ser suficiente en la mayoría de los casos.';
$string['errorimportversionmismatches'] = 'La versión de los componentes siguientes difiere de la versión instalada en este sitio: {$a}. Usted puede usar la opción para "Ignorar discrepancias de versiones" para ignorar estas diferencias.';
$string['errorinvalidcontexts'] = 'Algunos de los contextos seleccionados no pueden ser usados en esta meta.';
$string['errorinvalidindicator'] = 'Indicador {$a} inválido';
$string['errorinvalidtarget'] = 'Objetivo {$a} inválido';
$string['errorinvalidtimesplitting'] = 'Intervalo de análisis inválido; por favor asegúrese de que añadió el nombre de clase completamente calificado.';
$string['errornocontextrestrictions'] = 'La meta seleccionada no soporta restricciones de contexto';
$string['errornoexportconfig'] = 'Hubo un  problema al exportar la configuración del modelo.';
$string['errornoexportconfigrequirements'] = 'Solamente pueden ser exportados modelos no estáticos con un intervalo de análisis.';
$string['errornoindicators'] = 'Este modelo no tiene ningún indicador';
$string['errornopredictresults'] = 'No se regresaron resultados del procesador de predicciones;. Revise los contenidos del directorio de salida para más información.';
$string['errornoroles'] = 'No se han definido roles de estudiante o profesor. Defínalos en la página de configuraciones de analítica.';
$string['errornotarget'] = 'Este modelo todavía no tiene ninguna meta.';
$string['errornotimesplittings'] = 'Este modelo todavía no tiene ningún intervalo de análisis.';
$string['errorpredictioncontextnotavailable'] = 'Este contexto de predicción ya no está disponible.';
$string['errorpredictionformat'] = 'Formato de cálculos de predicción equivocado';
$string['errorpredictionnotfound'] = 'Predicción no encontrada';
$string['errorpredictionsprocessor'] = 'Error de procesador de predicciones: {$a}';
$string['errorpredictwrongformat'] = 'El retorno del procesador de predicciones no pudo ser decodificado: "{$a}"';
$string['errorprocessornotready'] = 'El procesador de predicciones seleccionado no está listo: {$a}';
$string['errorsamplenotavailable'] = 'La muestra predecida ya no está disponible.';
$string['errorunexistingmodel'] = 'Modelo inexistente {$a}';
$string['errorunexistingtimesplitting'] = 'El intervalo de análisis seleccionado no está disponible.';
$string['errorunknownaction'] = 'Acción desconocida';
$string['eventinsightsviewed'] = 'Intuiciones (predicciones) vistas';
$string['eventpredictionactionstarted'] = 'Proceso de predicción iniciado';
$string['fixedack'] = 'Aceptar';
$string['incorrectlyflagged'] = 'Señalada  incorrectamente';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'El sistema generó una intuición (predicción) para Usted.';
$string['insightinfomessageplain'] = 'El sistema generó una intuición (predicción) para Usted: {$a}';
$string['insightmessagesubject'] = 'Nueva intuición (predicción) para "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'No puede ser analizado usando el Intervalo de análisis{$a}.';
$string['invalidtimesplitting'] = 'El modelo con ID {$a} necesita un intervalo de análisis antes de que pueda ser usado para entrenar.';
$string['levelinstitution'] = 'Nivel educativo';
$string['levelinstitutionisced0'] = 'Educación infantil temprana (\'menos que primaria\' para logro educativo)';
$string['levelinstitutionisced1'] = 'Educación primaria';
$string['levelinstitutionisced2'] = 'Educación secundaria';
$string['levelinstitutionisced3'] = 'Educación de bachillerato';
$string['levelinstitutionisced4'] = 'Educación post-bachillerato no universitaria (puede incluir entrenamiento corporativo o comunitario/ONGs)';
$string['levelinstitutionisced5'] = 'Educación post-bachillerato de ciclo corto  (puede incluir entrenamiento corporativo o comunitario/ONGs)';
$string['levelinstitutionisced6'] = 'Licenciatura o nivel equivalente';
$string['levelinstitutionisced7'] = 'Maestría o nivel equivalente';
$string['levelinstitutionisced8'] = 'Doctorado o nivel equivalente';
$string['modeinstruction'] = 'Modos de instrucción';
$string['modeinstructionblendedhybrid'] = 'Mezclado/blended o híbrido';
$string['modeinstructionfacetoface'] = 'Cara a Cara';
$string['modeinstructionfullyonline'] = 'Completamente en línea';
$string['modeloutputdir'] = 'Directorio de salida del modelo';
$string['modeloutputdirinfo'] = 'Directorio en donde los procesadores de predicción guardan toda la información de la evaluación. Útil para depuración y desarrollo.';
$string['modeltimelimit'] = 'Límite de tiempo de análisis por modelo';
$string['modeltimelimitinfo'] = 'Esta configuración limita el tiempo que cada modelo gasta analizando los contenidos del sitio.';
$string['neutral'] = 'Neutral';
$string['nocourses'] = 'Sin cursos para analizar';
$string['nodata'] = 'Sin datos para analizar';
$string['noevaluationbasedassumptions'] = 'Los modelos baados en suposiciones no pueden ser evaluados.';
$string['noinsights'] = 'Sin intuiciones (predicciones) reportadas';
$string['noinsightsmodel'] = 'Este modelo no genera intuiciones (predicciones)';
$string['nonewdata'] = 'Sin nuevos datos disponibles. El modelo será analizado después del siguiente intervalo de análisis.';
$string['nonewranges'] = 'Todavía sin nuevas predicciones. El modelo será analizado después del siguiente intervalo de análisis.';
$string['nopredictionsyet'] = 'Todavía sin predicciones disponibles';
$string['noranges'] = 'Todavía sin predicciones';
$string['notapplicable'] = 'No aplicable';
$string['notrainingbasedassumptions'] = 'Los modelos basados en suposiciones no necesitan entrenamiento';
$string['notuseful'] = 'No útil';
$string['novaliddata'] = 'Sin datos válidos disponibles';
$string['novalidsamples'] = 'Sin muestras válidas disponibles';
$string['onlycli'] = 'Ejecución de los procesos analíticos solamente vía línea de comando';
$string['onlycliinfo'] = 'Los procesos analíticos, como los modelos evaluativos, los algoritmos para entrenar aprendizaje de máquinas, o la obtención de predicciones, pueden tomar algún tiempo. Se ejecutarán como trabajos del cron o pueden ser forzados mediante la línea de comandos. Si se deshabilitan, los procesos puedan ser ejecutados manualmente mediante la interfaz por línea de comandos.';
$string['percentonline'] = 'Porcentaje en línea';
$string['percentonline_help'] = 'Si su institución ofrece cursos mezclados (blended) o híbridos, ¿qué porcentaje del trabajo del estudiante es realizado en línea en Moodle? Ingrese un número entre 0 y 100.';
$string['predictionsprocessor'] = 'Procesador de predicciones';
$string['predictionsprocessor_help'] = 'Un procesador de predicciones es el \'backend\' de aprendizaje de máquina que procesa los conjuntos_de_datos generados al calcular los indicadores y objetivos de los modelos. El que está especificado aquí será el valor por defecto.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Cálculos del indicador';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'El contexto';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Hora de terminación de cálculos';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'La clase de calculador indicador';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'La ID de la muestra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'La tabla de origen de la muestra';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Hora de inicio del cálculo';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Cuando fue hecha la predicción';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'El valor calculado';
$string['privacy:metadata:analytics:predictionactions'] = 'Acciones de predicción';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'El nombre de la acción';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'La ID de la predicción';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Cuando fue realizada la acción de predición';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'El usuario que hizo la acción';
$string['privacy:metadata:analytics:predictions'] = 'Predicciones';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Cálculos del indicador';
$string['privacy:metadata:analytics:predictions:contextid'] = 'El contexto';
$string['privacy:metadata:analytics:predictions:modelid'] = 'La ID del modelo';
$string['privacy:metadata:analytics:predictions:prediction'] = 'La predicción';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'El puntaje de la predicción';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'El índice del intervalo de análisis';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'La ID de la muestra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Cuando fue hecha la predicción';
$string['privacy:metadata:analytics:predictions:timeend'] = 'La hora de terminación de los cálculos';
$string['privacy:metadata:analytics:predictions:timestart'] = 'La hora de inicio de los cálculos';
$string['processingsitecontents'] = 'Procesando contenidos del sitio';
$string['successfullyanalysed'] = 'Analizado exitosamente';
$string['timesplittingmethod'] = 'Intervalo de análisis';
$string['timesplittingmethod_help'] = 'El intervalo de análisis define cuando el sistema calculará predicciones y la porción de las bitácoras de actividad que serán consideradas para esas  predicciones. Por ejemplo, la duración del curso puede ser dividida en partes, con una  predicción generada al final de cada parte.';
$string['typeinstitution'] = 'Tipo de institución';
$string['typeinstitutionacademic'] = 'Académica';
$string['typeinstitutionngo'] = 'Organización No Gubernamental (ONG)';
$string['typeinstitutiontraining'] = 'Entrenamiento corporativo';
$string['useful'] = 'Útil';
$string['viewdetails'] = 'Ver detalles';
$string['viewinsight'] = 'Ver intuición (predicción)';
$string['viewinsightdetails'] = 'Ver detalles de intuición (predicción)';
$string['viewprediction'] = 'Ver detalles de predicción';
$string['washelpful'] = '¿Fue útil esto?';
