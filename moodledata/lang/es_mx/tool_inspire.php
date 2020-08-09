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
 * Strings for component 'tool_inspire', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_inspire
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Exactitud';
$string['allindicators'] = 'Todos los indicadores';
$string['analysablenotused'] = 'Analizable {$a->analysableid} no usado: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analizable {$a->analysableid} no es válido para esta meta: {$a->result}';
$string['analysingsitedata'] = 'Analizando el sitio';
$string['bettercli'] = 'La evaluación y ejecución de Moodle son procesos pesados; es mejor correrlos mediante Interfaz por Línea de Comando';
$string['cantguessenddate'] = 'No puede adivinarse la fecha de fin';
$string['cantguessstartdate'] = 'No puede adivinarse la fecha de inicio';
$string['clienablemodel'] = 'Usted puede habilitar el modelo al seleccionar un método de división del tiempo por su id. Tenga en cuenta que Usted también puede habilitarlo posteriormente usando la interfaz web (\'nada/ninguno (none)\' para salir)';
$string['coursenotyetfinished'] = 'El curso aun no ha terminado';
$string['coursenotyetstarted'] = 'El curso aun no ha iniciado';
$string['coursetoolong'] = 'La duración es de más de una año';
$string['disabledmodel'] = 'Lo sentimos, este model o ha sido deshabilitado por el administrador';
$string['editmodel'] = 'Editar model {$a}';
$string['edittrainedwarning'] = 'Este modelo ya ha sido entrenado; tenga en cuenta que el cambiar sus indicadores o su método de división del tiempo eliminará sus predicciones anteriores y comenzará a generar las nuevas.';
$string['enabled'] = 'Habilitado';
$string['enabledtimesplittings'] = 'Métodos de división del tiempo';
$string['enabledtimesplittings_help'] = 'El método de división del tiempo divide la duración del curso en partes, los motores de predicción correrán al final de estas partes. Se recomienda que Usted solamente habilite los métodos de división del tiempo en los cuales  Usted podría estar interesado en usar; el proceso de evaluación iterará en todos ellos, de manera que mientras más métodos de división del tiempo use, más lento será el proceso de evaluación.';
$string['erroralreadypredict'] = 'El archivo {$a} ya ha sido usado para predecir';
$string['errorcantenablenotimesplitting'] = 'Usted necesita seleccionar un método de división del tiempo antes de habilitar el modelo';
$string['errordisabledmodel'] = 'El modelo {$a} está deshabilitado y no puede ser usado para predecir';
$string['errorinvalidindicator'] = 'Indicador {$a} inválido';
$string['errorinvalidtimesplitting'] = 'División del tiempo inválida; por favor asegúrese de que añadió el nombre de la clase completamente calificado';
$string['errornoenabledandtrainedmodels'] = 'No hay modelos habilitados y entrenados para predecir';
$string['errornoenabledmodels'] = 'No hay modelos habilitados para predecir';
$string['errornoindicators'] = 'Este modelo aun no tiene ningun indicador';
$string['errornopredictresults'] = 'Sin resultados regresados del procesador de predicciones; revise los contenidos del directorio de salida para más información';
$string['errornoroles'] = 'No han sido definidos los roles de estudiante o profesor. Defínalos en la página de configuracioens del plugin inspire.';
$string['errornorunrecord'] = 'No pudo localizarse el registro actual de corrida en la base de datos';
$string['errornotarget'] = 'Este model aun no tiene ninguna meta';
$string['errornotimesplittings'] = 'Este modelo no tiene ningun método para división del tiempo';
$string['errornottrainedmodel'] = 'El modelo {$a} aun no ha sido entrenado';
$string['errorpredictionformat'] = 'Formato de cálculos de predicción equivocado';
$string['errorpredictionnotfound'] = 'Predicción no encontrada';
$string['errorpredictionsprocessor'] = 'Error de procesador de predicciones: {$a}';
$string['errorpredictwrongformat'] = 'El retorno del procesador de predicciones no puede ser decodificado: "{$a}"';
$string['errorprocessornotready'] = 'El procesador de predicciones seleccionado no está listo: {$a}';
$string['errorsamplenotavailable'] = 'La muetra predicha ya no está disponibles';
$string['errorunexistingtimesplitting'] = 'El método de división del tiempo no está disponible.';
$string['errorunknownaction'] = 'Acción desconocida';
$string['evaluate'] = 'Evaluar';
$string['evaluatemodel'] = 'Evaluar modelo';
$string['evaluationinbatches'] = 'Los contenidos del sitio son calculados y almacenados en lotes, durante la evaluación Usted no puede detener el proceso en ningun momento; la siguiente vez que lo corra continuará desde el punto en que Usted lo suspendió.';
$string['eventactionclicked'] = 'Acción de predicción clickeada';
$string['executemodel'] = 'ejecutar';
$string['executingmodel'] = 'Entrenando modelo y calculando predicciones';
$string['executionresults'] = 'Resultados usando {$a->name} división de la duración del curso';
$string['executionresultscli'] = 'Resultados usando {$a->name} (id: {$a->id}) división de duración del curso';
$string['extrainfo'] = 'Información';
$string['generalerror'] = 'Errod e evaluación. Código de estatus {$a}';
$string['goodmodel'] = 'Este es un buen modelo y puede ser usado para predecir; habilítelo y ejecútelo para comenzar a obtener predicciones.';
$string['indicator:accessesafterend'] = 'Accesos después de la fecha de fin';
$string['indicator:accessesbeforestart'] = 'Acceso antes de la fecha de inicio';
$string['indicator:anywrite'] = 'Cualquier acción de escritura';
$string['indicator:cognitivedepthassign'] = 'Tarea cognitivo';
$string['indicator:cognitivedepthbook'] = 'Libro cognitivo';
$string['indicator:cognitivedepthchat'] = 'Chat cognitivo';
$string['indicator:cognitivedepthchoice'] = 'Elección cognitivo';
$string['indicator:cognitivedepthdata'] = 'Base de Datos cognitivo';
$string['indicator:cognitivedepthfeedback'] = 'Retroalimentación cognitivo';
$string['indicator:cognitivedepthfolder'] = 'Carpeta cognitivo';
$string['indicator:cognitivedepthforum'] = 'Foro cognitivo';
$string['indicator:cognitivedepthglossary'] = 'Glosario cognitivo';
$string['indicator:cognitivedepthimscp'] = 'Paquete de contenido IMS cognitivo';
$string['indicator:cognitivedepthlabel'] = 'Etiqueta cognitivo';
$string['indicator:cognitivedepthlesson'] = 'Lección cognitivo';
$string['indicator:cognitivedepthlti'] = 'LTI cognitivo';
$string['indicator:cognitivedepthpage'] = 'Página cognitivo';
$string['indicator:cognitivedepthquiz'] = 'Examen cognitivo';
$string['indicator:cognitivedepthresource'] = 'Archivo cognitivo';
$string['indicator:cognitivedepthscorm'] = 'SCORM cognitivo';
$string['indicator:cognitivedepthsurvey'] = 'Encuesta cognitivo';
$string['indicator:cognitivedepthurl'] = 'URL cognitivo';
$string['indicator:cognitivedepthwiki'] = 'Wiki cognitivo';
$string['indicator:cognitivedepthworkshop'] = 'Taller cognitivo';
$string['indicator:completeduserprofile'] = 'El perfil de usuario está completo';
$string['indicator:readactions'] = 'Leer cantidad de acciones';
$string['indicators'] = 'Indicadores';
$string['indicator:socialbreadthassign'] = 'Tarea social';
$string['indicator:socialbreadthbook'] = 'Libro social';
$string['indicator:socialbreadthchat'] = 'Chat social';
$string['indicator:socialbreadthchoice'] = 'Elección social';
$string['indicator:socialbreadthdata'] = 'Base de Datos social';
$string['indicator:socialbreadthfeedback'] = 'Retroalimentación social';
$string['indicator:socialbreadthfolder'] = 'Carpeta social';
$string['indicator:socialbreadthforum'] = 'Foro social';
$string['indicator:socialbreadthglossary'] = 'Glosario social';
$string['indicator:socialbreadthimscp'] = 'Paquete de contenido IMS social';
$string['indicator:socialbreadthlabel'] = 'Etiqueta social';
$string['indicator:socialbreadthlesson'] = 'Lección social';
$string['indicator:socialbreadthlti'] = 'LTI social';
$string['indicator:socialbreadthpage'] = 'Página social';
$string['indicator:socialbreadthquiz'] = 'Examen social';
$string['indicator:socialbreadthresource'] = 'Archivo social';
$string['indicator:socialbreadthscorm'] = 'SCORM social';
$string['indicator:socialbreadthsurvey'] = 'Encuesta social';
$string['indicator:socialbreadthurl'] = 'URL social';
$string['indicator:socialbreadthwiki'] = 'Wiki social';
$string['indicator:socialbreadthworkshop'] = 'Taller social';
$string['indicator:userforumstracking'] = 'Usuario está monitoreando foros';
$string['info'] = 'Información';
$string['insightinfo'] = '{$a->insightname} - {$a->contextname}';
$string['insightinfomessage'] = 'Hay algunas intuiciones (predicciones) que Usted podría encontrar útiles. Revise  {$a}';
$string['insightmessagesubject'] = 'Nueva intuición (predicción) para "{$a->contextname}": {$a->insightname}';
$string['insights'] = 'Intuiciones (predicciones)';
$string['inspire:listinsights'] = 'Enlistar intuiciones (predicciones)';
$string['inspire:managemodels'] = 'Gestionar modelos';
$string['inspiremodels'] = 'Modelos inspire';
$string['invalidanalysablefortimesplitting'] = 'No puede ser analizado usando el método {$a} de división del tiempo';
$string['invalidtimesplitting'] = 'El modelo con id {$a} necesita un método de división del tiempo antes de que pueda ser usado para entrenamiento';
$string['labelstudentdropoutno'] = 'No en riego';
$string['labelstudentdropoutyes'] = 'Estudiantes en riesgo de abandonar';
$string['loginfo'] = 'Guardar en bitácora información extra';
$string['lowaccuracy'] = 'La exactitud del modelo es baja';
$string['messageprovider:insights'] = 'Intuiciones (predicciones) generadas por modelos predictivos';
$string['modeloutputdir'] = 'Directorio de salida de modelos';
$string['modeloutputdirinfo'] = 'Directorio en donde los procesadores de predicción almacen toda la información de evaluación. Útil para depuración e investigación.';
$string['modelresults'] = '{$a} resultados';
$string['modelslist'] = 'Lista de modelos';
$string['modeltimesplitting'] = 'División del tiempo';
$string['nocompletiondetection'] = 'Sin método disponible para detectar finalización del curso (sin finalización ni competencias ni calificación aprobatoria)';
$string['nocourseactivity'] = 'Sin suficientes actividades de curso entre fecha de principio y el fin del curso';
$string['nocourseendtime'] = 'El curso no tiene una dfecha de fin';
$string['nocourses'] = 'Sin cursos para analizar';
$string['nocoursesections'] = 'Sin secciones de curso';
$string['nocoursestudents'] = 'Sin estudiantes';
$string['nodata'] = 'Sin datos disponibles';
$string['nodatatoevaluate'] = 'No hay datos para evaluar el modelo';
$string['nodatatopredict'] = 'No hay datos para usar para predicciones';
$string['nodatatotrain'] = 'No hay datos para usarlos como datos de entenamiento';
$string['nonewdata'] = 'Sin datos nuevos disponibles';
$string['nonewtimeranges'] = 'Sin nuevos rangos de tiempo; nada para predecir';
$string['nopredictionsyet'] = 'Sin predicciones disponibles aun';
$string['notdefined'] = 'Aun no definido';
$string['novaliddata'] = 'Sin datos válidos disponibles';
$string['pluginname'] = 'Inspire (Inspirar)';
$string['prediction'] = 'Predicción';
$string['predictiondetails'] = 'Detalles de predicción';
$string['predictionprocessfinished'] = 'Proceso de predicción terminado';
$string['predictionresults'] = 'Resultados de predicción';
$string['predictions'] = 'Predicciones';
$string['predictionsprocessor'] = 'Procesador de predicciones';
$string['predictionsprocessor_help'] = 'Los procesadores de predicción son el extremo-trasero (backend) del aprendizaje de máquina que procesa  los conjuntos de datos generados por los indicadores de modelos de cálculo y sus objetivos.';
$string['predictmodels'] = 'Modelos de predicción';
$string['predictorresultsin'] = 'Predictor guardó en bitácoras información en el directorio {$a}';
$string['processingsitecontents'] = 'Procesando contenidos del sitio';
$string['sameenddate'] = 'La fecha final actual es buena';
$string['samestartdate'] = 'La fecha inicial actual es buena';
$string['selectotherinsights'] = 'Seleccionar otras intuiciones (predicciones) ...';
$string['skippingcourse'] = 'Saltando curso  {$a}';
$string['studentroles'] = 'Roles de estudiante';
$string['subplugintype_predict'] = 'Procesador de Predicciones';
$string['subplugintype_predict_plural'] = 'Procesadores de Predicciones';
$string['successfullyanalysed'] = 'Analizado exitosamente';
$string['target'] = 'Meta';
$string['target:coursedropout'] = 'Estudiantes en riesgo de abandonar';
$string['target:coursedropoutinfo'] = 'Aquí puede Usted encontrar una lista de estudiantes en riesgo de abandonar.';
$string['teacherroles'] = 'Roles de profesor';
$string['timemodified'] = 'Última modificación';
$string['timesplitting:deciles'] = 'Deciles';
$string['timesplitting:decilesaccum'] = 'Deciles acumulativo';
$string['timesplittingmethod'] = 'Método de división del tiempo';
$string['timesplittingmethod_help'] = 'El método de división del tiempo divide la duración del curso en partes; los motores de predicción correrán al final de estas partes. Se recomienda que Usted solamente habilite los métodos de división del tiempo que podría estar interesado en usar; el proceso de evaluación iterará en todos ellos, por lo que mientras más tiempo pase haciéndolo, más lento será el proceso de evaluación.';
$string['timesplitting:nosplitting'] = 'Sin división del tiempo';
$string['timesplitting:quarters'] = 'Trimestres';
$string['timesplitting:quartersaccum'] = 'Trimestres acumulativo';
$string['timesplitting:singlerange'] = 'Rango único';
$string['timesplitting:weekly'] = 'Semanalmente';
$string['timesplitting:weeklyaccum'] = 'Semanalmente acumulativa';
$string['trainingprocessfinished'] = 'Proceso de entrenamiento terminado';
$string['trainingresults'] = 'Resultados del entrenamiento';
$string['trainmodels'] = 'Entrenar modelos';
$string['viewlog'] = 'Bitácora';
$string['viewprediction'] = 'Ver detalles de predicción';
$string['viewpredictions'] = 'Ver predicciones del modelo';
$string['weeksenddateautomaticallyset'] = 'Fecha final será configurada automáticamente a partir de la fecha de inicio y el númeo de secciones';
$string['weeksenddatedefault'] = 'La fecha final será calculada automáticamente a partir de la fecha de inicio del curso.';
