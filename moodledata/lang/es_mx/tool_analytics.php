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
 * Strings for component 'tool_analytics', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Precisión';
$string['actionexecutedgroupedusefulness'] = 'Acciones agrupadas';
$string['actions'] = 'Acciones';
$string['actionsexecutedbyusers'] = 'Acciones ejecutadas por usuarios';
$string['actionsexecutedbyusersfor'] = 'Acciones ejecutadas por usuarios para modelo "{$a}"';
$string['allpredictions'] = 'Todas las predicciones';
$string['alltimesplittingmethods'] = 'Todos los intervalos de análisis';
$string['analysingsitedata'] = 'Analizando el sitio';
$string['analysis'] = 'Análisis';
$string['analyticmodels'] = 'Modelos analíticos';
$string['bettercli'] = 'Evaluar modelos y generar predicciones puede involucrar procesamiento pesado. Se recomienda que Usted corra estas acciones desde la interfaz de línea de comando.';
$string['cantguessenddate'] = 'No puede adivinarse la fecha de terminación';
$string['cantguessstartdate'] = 'No puede adivinarse la fecha de inicio';
$string['classdoesnotexist'] = 'La clase {$a} no existe';
$string['clearmodelpredictions'] = '¿ Está Usted seguro de querer eliminar todas las predicciones de "{$a}" ?';
$string['clearpredictions'] = 'Borrar predicciones';
$string['clienablemodel'] = 'Usted puede habilitar el modelo al seleccionar un intervalo de análisis por su ID. Por favor tenga en cuenta que Usted también puede habilitarlo más tarde al usar la intefase web (\'ninguno\' para salir)';
$string['clievaluationandpredictions'] = 'Un trabajo agendado del cron iteractua con los modelos habilitados y obtiene predicciones. La evaluación de modelos vía la interfaz web está deshabilitada. Usted puede permitir que estos procesos sean ejecutados manualmente mediante la interfaz web al deshabilitar la configuración de analítica <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Un trabajo agendado iteractua con los modelos habilitados y obtiene predicciones. La evaluación de modelos vía interfaz web está deshabilitada, pero puede ser habilitada por un administrador del sitio.';
$string['component'] = 'Componente';
$string['componentcore'] = 'Núcleo';
$string['componentselect'] = 'Seleccionar todos los modelos proporcionados por el componente \'{$a}\'';
$string['componentselectnone'] = 'Des-seleccionar todo';
$string['contexts'] = 'Contextos';
$string['contexts_help'] = 'El modelo estará limitado a este conjunto de contextos. No se aplicarán restricciones de contexto si no se selecciona ningún contexto.';
$string['createmodel'] = 'Crear modelo';
$string['currenttimesplitting'] = 'Intervalo de análisis actual';
$string['delete'] = 'Eliminar';
$string['deletemodelconfirmation'] = '¿Está seguro de querer eliminar "{$a}"? {estos cambios no pueden deshacerse.';
$string['disabled'] = 'Deshabilitado';
$string['editmodel'] = 'Editar modelo "{$a}"';
$string['edittrainedwarning'] = 'Este modelo ya ha sido entrenado. Por favor tenga en cuenta que si cambia sus indicadores o su intervalo de análisis, eliminará sus predicciones anteriores y comenzará a generar nuevas predicciones.';
$string['enabled'] = 'Habilitado';
$string['errorcantenablenotimesplitting'] = 'Usted necesita seleccionar un intervalo de análisis antes de habilitar el modelo';
$string['errornoenabledandtrainedmodels'] = 'No hay modelos habilitados y entrenados para predecir.';
$string['errornoenabledmodels'] = 'No hay modelos habilitados  para entrenar.';
$string['errornoexport'] = 'Solamente pueden exportarse modelos entrenados';
$string['errornostaticevaluated'] = 'Los modelos basados en suposiciones no pueden ser evaluados. Son siempre 100% correctos de acuerdo a como fueron definidos.';
$string['errornostaticlog'] = 'Los modelos basados en suposiciones no pueden ser evaluados porque no hay bitácora de desempeño.';
$string['erroronlycli'] = 'La ejecución solamente está permitida vía línea de comando';
$string['errortrainingdataexport'] = 'Los datos de entrenamiento del modelo no pudieron exportarse';
$string['evaluate'] = 'Evaluar';
$string['evaluatemodel'] = 'Evaluar modelo';
$string['evaluationinbatches'] = 'Los contenidos del sitio son calculados y almacenados en lotes. El proceso de evaluación puede ser detenido en cualquier momento. La siguiente vez que corra, continuará a partir del punto en donde se detuvo.';
$string['evaluationmode'] = 'Modo de evaluación';
$string['evaluationmodecolconfiguration'] = 'Configuración';
$string['evaluationmodecoltrainedmodel'] = 'Modelo entrenado';
$string['evaluationmodeconfiguration'] = 'Evaluar la configuración del modelo';
$string['evaluationmode_help'] = 'Hay dos modos de evaluación:

* Modelo entrenado - Se usan datos del sitio como datos de prueba para evaluar la exactitud del modelo entrenado.
* Configuración - Los datos del sitio son divididos en datos de entrenamiento y datos de prueba, para lograr tanto entrenar como probar la exactitud de la configuración del modelo.

El modelo entrenado solamente está disponible si se ha importado un modelo entrenado al sitio, y aun no se ha re-entrenado usando datos del sitio.';
$string['evaluationmodeinfo'] = 'Este modelo ha sido importado al sitio. Usted puede, ya sea, evaluar el desempeño del modelo , o Usted puede evaluar el desempeño de la configuración del modelo usando datos del sitio.';
$string['evaluationmodetrainedmodel'] = 'Evaluar el modelo entrenado';
$string['executescheduledanalysis'] = 'Ejecutar análisis agendado';
$string['export'] = 'Exportar';
$string['exportincludeweights'] = 'Incluir las ponderaciones del modelo entrenado';
$string['exportmodel'] = 'Exportar configuración';
$string['exporttrainingdata'] = 'Exportar datos de entrenamiento';
$string['extrainfo'] = 'Información';
$string['generalerror'] = 'Error de evaluación. Código de estatus {$a}';
$string['getpredictions'] = 'Obtener predicciones';
$string['goodmodel'] = 'Este es un buen modelo a usar para obtener predicciones. Habilítelo para comenzar a obtener predicciones.';
$string['ignoreversionmismatches'] = 'Ignorar discrepancias de versión';
$string['ignoreversionmismatchescheckbox'] = 'Ignorar las diferencias entre la versión de este sitio y la versión del sitio original.';
$string['importedsuccessfully'] = 'El modelo ha sido importado exitosamente.';
$string['importmodel'] = 'Importar modelo';
$string['indicators'] = 'Indicadores';
$string['indicators_help'] = 'Los indicadores son lo que Usted piensa que conducirán a una predicción acertada de la meta.';
$string['indicatorsnum'] = 'Número de indicadores: {$a}';
$string['info'] = 'Información';
$string['insights'] = 'Intuiciones (predicciones)';
$string['insightsreport'] = 'Reporte de intuiciones (predicciones)';
$string['invalidanalysables'] = 'Elementos del sitio inválidos';
$string['invalidanalysablesinfo'] = 'Esta página enlista los elementos analizables del sitio que no pueden ser usados por este modelo de predicción. Los elementos enlistados no pueden ser usados, ni para entrenar el modelo de predicción, ni tampoco puede el modelo de predicción obtener predicciones para ellos.';
$string['invalidanalysablestable'] = 'Tabla inválida de elementos analizables del sitio';
$string['invalidcurrenttimesplitting'] = 'El intervalo de análisis actual es inválido para la meta de este modelo. Por favor seleccione un intervalo diferente.';
$string['invalidindicatorsremoved'] = 'Un nuevo modelo ha sido añadido. Los indicadores que no funcionan con la meta seleccionada han sido removidos automáticamente.';
$string['invalidprediction'] = 'Inválido el obtener predicciones';
$string['invalidtimesplitting'] = 'El intervalo de análisis seleccionado es inválido para la meta seleccionada.';
$string['invalidtimesplittinginmodels'] = 'El intervalo de análisis usado por algunos de los modelos es inválido. Por favor seleccione un intervalo diferente para los modelos siguientes: {$a}';
$string['invalidtraining'] = 'Inválido el entrenar el modelo';
$string['loginfo'] = 'Bitácora información extra';
$string['missingmoodleversion'] = 'El archivo importado no define un número de versión';
$string['modelid'] = 'ID del modelo';
$string['modelinvalidanalysables'] = 'Elemento analizable inválido para el modelo "{$a}"';
$string['modelname'] = 'Nombre del modelo';
$string['modelresults'] = '{$a} resultados';
$string['modeltimesplitting'] = 'Intervalo de análisis';
$string['newmodel'] = 'Nuevo modelo';
$string['nextpage'] = 'Página siguiente';
$string['noactionsfound'] = 'Los usuarios no han ejecutado ninguna acción sobre las intuiciones (predicciones).';
$string['nodatatoevaluate'] = 'No hay datos para evaluar el modelo';
$string['nodatatopredict'] = 'No hay elementos nuevos para los cuales obtener predicción';
$string['nodatatotrain'] = 'No hay datos nuevos que puedan usarse para entrenamiento.';
$string['noinvalidanalysables'] = 'Este sitio no contiene ningún elemento analizable inválido.';
$string['notdefined'] = 'Todavía no definido';
$string['pluginname'] = 'Modelos analíticos';
$string['predictionprocessfinished'] = 'Proceso de predicción finalizado';
$string['predictionresults'] = 'Resultados de predicción';
$string['predictmodels'] = 'Modelos de predicción';
$string['predictorresultsin'] = 'Predictor guardó en bitácora información en el directorio {$a}';
$string['previouspage'] = 'Página anterior';
$string['privacy:metadata'] = 'El plugin de Modelos de Analítica no almacena ningún dato personal.';
$string['restoredefault'] = 'Restaurar modelos predeterminados';
$string['restoredefaultempty'] = 'Por favor seleccione modelos  a ser restaurados.';
$string['restoredefaultinfo'] = 'Estos modelos preseleccionados están faltantes o han cambiado desde que fueron instalados. Usted puede restaurar los modelos predeterminados seleccionados.';
$string['restoredefaultnone'] = 'Ya han sido creados todos los modelos predeterminados proporcionados por el núcleo de Moodle y los plugins instalados. No se encontraron modelos nuevos, no hay nada para restaurar.';
$string['restoredefaultsome'] = 'Recreados exitosamente {$a->count} nuevo(s) modelo(s).';
$string['restoredefaultsubmit'] = 'Restaurar seleccionados';
$string['sameenddate'] = 'La fecha de terminación actual es buena';
$string['samestartdate'] = 'La fecha de inicio actual es buena';
$string['scheduledanalysisresults'] = 'Resultados usando el método {$a->name} para división del tiempo';
$string['scheduledanalysisresultscli'] = 'Resultados usando el método {$a->name} (id: {$a->id}) para división del tiempo';
$string['selecttimesplittingforevaluation'] = 'Seleccionar el intervalo de análisis que desea usar para evaluar la configuración del modelo.';
$string['target'] = 'Meta';
$string['target_help'] = 'La meta es lo que el modelo predice.';
$string['timesplittingnotdefined'] = 'No está definido el intervalo de análisis.';
$string['timesplittingnotdefined_help'] = 'Usted necesita seleccionar un intervalo de análisis antes de habilitar este modelo.';
$string['trainandpredictmodel'] = 'Entrenando modelo y calculando predicciones';
$string['trainingprocessfinished'] = 'Proceso de entrenamiento terminado';
$string['trainingresults'] = 'Resultados del entrenamiento';
$string['trainmodels'] = 'Entrenar modelos';
$string['versionnotsame'] = 'El archivo importado era de una versión diferente ({$a->importedversion}) de la actual ({$a->version})';
$string['viewlog'] = 'Bitácora de evaluación';
$string['weeksenddateautomaticallyset'] = 'Fecha de terminación calculada automáticamente basada en la fecha de inicio y el número de secciones';
$string['weeksenddatedefault'] = 'Fecha de terminación  calculada automáticamente a partir de la fecha de inicio del curso.';
