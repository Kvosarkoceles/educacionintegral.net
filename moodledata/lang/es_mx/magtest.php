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
 * Strings for component 'magtest', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   magtest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategories'] = 'Añadir categorías';
$string['addcategory'] = 'Añadir una categoría';
$string['addone'] = 'Añadir una categoría';
$string['addquestion'] = 'Añadir una pregunta';
$string['addthree'] = 'Añadir tres categorías';
$string['allowreplay'] = 'Permitir retomar el test';
$string['allowreplay_help'] = '# # Test Multitrack

# # # Permitir repetición de test

esta configuración permite desactivar o activar globalmente la capacidad de hacer múltiples intentos del test. Los participantes deberán tener la capacidad para &quot;hacer múltiples intentos&quot; habilitada en su perfil para acceder al botón de repetición.';
$string['answer'] = 'Respuesta';
$string['answercount'] = 'Número de respuesta';
$string['answerquestions'] = 'Test:';
$string['answers'] = 'Respuestas';
$string['answertext'] = 'Respuesta para la categoría: {$a}';
$string['answerweights'] = 'Ponderaciones para respuesta';
$string['backtocourse'] = 'Regresar al curso';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryresult'] = 'Test de conclusión para la categoría';
$string['categoryshortname'] = 'Nombre corto de la categoría';
$string['choosecategoryforanswer'] = 'Elija una categoría para esta respuesta';
$string['clearalladvice'] = 'El borrar todos los datos también borrará todos  los resultados de usuarios';
$string['clearalldata'] = 'Borrar todos los datos previos';
$string['cleardata'] = 'Borrar todos los datos';
$string['closed'] = 'El test está cerrado. Ya no se permite contestarlo.';
$string['closedtestadvice'] = 'Este test está cerrado. Usted no puede volver a tomarlo.';
$string['commands'] = 'Órdenes';
$string['configshowmymoodle'] = 'Mostrar test_magazine para hacer en la página de \'Mi Moodle\'';
$string['configshowmymoodledesc'] = 'Si esto se deja desactivado entonces las actividades test_magazine ya no aparecerán en la página de \'Mi Moodle\'';
$string['configusesetprofile'] = 'Usar configurar perfil';
$string['configusesetprofile_desc'] = 'Si se habilita, los profesores podrán impulsar cambios de valor del perfil desde un magtest.';
$string['confirmdeletemessage'] = 'Eliminar esta pregunta quita todas las respuestas asociadas y todas las elecciones hechas por usuarios previamente. ¿Desea continuar?';
$string['default'] = 'Test de revista por defecto';
$string['delcategory'] = 'Eliminar a categoría';
$string['delquestion'] = 'Eliminar la pregunta';
$string['descresult'] = 'Resultados';
$string['description'] = 'Descripción';
$string['doit'] = 'Realizar el test';
$string['editquestions'] = 'Editar las preguntas';
$string['endtime'] = 'Hora de término';
$string['erroraddcategory'] = 'Error al añadir una categoría';
$string['erroranswerinsert'] = 'Falló al insertar una nueva respuesta para pregunta con questionid : {$a}';
$string['erroremptyanswers'] = 'Algunas respuestas no tienen contenido.<br/> Puede que el test no funcione bien.';
$string['errorinvalidcategory'] = 'Categoría inválida';
$string['errornotallowed'] = 'A Usted no se le permite realizar este test';
$string['errorquestionupdate'] = 'Error al actualizar la pregunta {$a}';
$string['errorupdatecategory'] = 'No se pudo actualizar la categoría de test_magazine {$a}';
$string['eventanswersubmitted'] = 'Respuesta enviada';
$string['guestcannotuse'] = 'Los invitados no pueden usar este test';
$string['helper'] = 'Leer pista';
$string['helpertext'] = 'Texto de ayuda';
$string['helpnavigationquestion'] = 'Ayuda';
$string['import'] = 'Importar';
$string['importfile'] = 'Importar archivo';
$string['importformat'] = 'Formato para importar';
$string['importformat_help'] = '### Formato para importar pregunta

El archivo a importar debe estar codificado en UTF8, separadas con ";", una pregunta por línea y que tenga una primera columna para el texto de la pregunta.

Si se activan las opciones de opción-única (singlechoice) , las siguientes columnas son ponderaciones (números enteros) para cada categoría en el orden de las categorías.

Si está desactivada opción-única (singlechoice) las siguientes columnas deben proporcionar en orden : texto de respuesta, ponderación (1 sin ponderación), y texto-de-ayuda para cada categoría en orden.';
$string['importquestions'] = 'Importar preguntas en test_magazine';
$string['intro'] = 'Introducción';
$string['magtestaccesses'] = 'Accesado: {$a} veces';
$string['magtest:addinstance'] = 'Añadir una instancia';
$string['magtestattempted'] = 'Intentado en';
$string['magtest:doit'] = 'Hacer el test';
$string['magtest_help'] = 'Test_magazine implementa los tests de magazines que acumulan respuestas según la "categoría" de las respuestas. Este test le permite definir algunas categorías e implementar un conjunto de preguntas que tendrán tantas propuestas para cada categoría.

Cuando un participante hace el test, tendrá que elegir una de las propuestas posibles, después de lo cual se incrementará el puntaje de la categoría correspondiente.

Al final del test, la categoría ganadora es la que haya colectado el mayor puntaje. Se puede mostrar una conclusión a los usuarios, resaltando la oración ganadora, y seguida eventualmente por una conclusión general.

Los grupos de participantes resultantes, ordenados por la categoría ganadora, eventualmente pueden convertirse a grupos de Moodle. Este módulo puede de esta forma usarse como un operador auto-discriminante al iniciar una sesión de curso, o cuando sea necesario dividir a la población del curso en grupos.';
$string['magtest:manage'] = 'Configurar el test';
$string['magtest:multipleattempts'] = 'Hacer múltiples intentos';
$string['magtest:viewgeneralstat'] = 'Ver estadísticas generales';
$string['magtest:viewotherresults'] = 'Ver resultados de otros participantes';
$string['makegroups'] = 'Generar grupos de Moodle a partir de los resultados';
$string['modulename'] = 'Test multipistas';
$string['modulename_help'] = 'La actividad test_magazine (test de revista) proporciona una evaluación multicriterio que invoca un grupo de varias escalas para cada respuesta. Al final del test, el estudiante será categorizado en su categoría dominante.
El profesor puede usar los resultados para crear grupos para los cursos.';
$string['modulenameplural'] = 'Tests multipistas';
$string['noanswerusers'] = 'No-contestada';
$string['nocategories'] = 'Sin categorías en el test.';
$string['nogroupcreationadvice'] = 'Usted necesita que no haya grupos en el curso para que funcione  la característica de creación de grupos.';
$string['noquestions'] = 'Aún sin preguntas.';
$string['notopened'] = 'Aún no se ha abierto este test.';
$string['notsubmittedyet'] = 'Aún no enviado';
$string['nouseranswer'] = 'Ningún usuario contestó';
$string['nousersinthisgroup'] = 'No hay usuarios en esta categoría';
$string['outputfieldname'] = 'Campo de perfil a configurar';
$string['outputfieldvalue'] = 'Campo de perfil a configurar';
$string['outputgroupdesc'] = 'Descripción del grupo generada';
$string['outputgroupname'] = 'Nombre del grupo generado';
$string['pagenotcomplete'] = 'No fueron contestadas todas las preguntas';
$string['pagesize'] = 'Preguntas por página';
$string['pagesize_help'] = '## Test Multipista

### Tamaño de página

Este parámetro le permite escoger cuantas preguntas se mostrarán por página. El configurar este valor a 1 mostrará una página con una sola pregunta.';
$string['pluginadministration'] = 'Configuraciones de test_magazine';
$string['pluginname'] = 'Test multipista';
$string['preview'] = 'vista previa';
$string['privacy:metadata:magtest_useranswer'] = 'Almacena respuestas del usuario a preguntas de magtest';
$string['privacy:metadata:magtest_useranswer:answerid'] = 'La ID de la respuesta elegida para la pregunta';
$string['privacy:metadata:magtest_useranswer:magtestid'] = 'La ID de la instancia de magtest';
$string['privacy:metadata:magtest_useranswer:questionid'] = 'La ID de la pregunta para la cual el usuario ha respondido';
$string['privacy:metadata:magtest_useranswer:timeanswered'] = 'La hora en la cual el usuario ha dado la respuesta';
$string['privacy:metadata:magtest_useranswer:userid'] = 'La ID del usuario';
$string['question'] = 'Pregunta';
$string['questions'] = 'Preguntas';
$string['questiontext'] = 'Texto de la pregunta';
$string['question_text'] = 'Texto de la pregunta';
$string['reset'] = 'Retomar el test';
$string['resetting_data'] = 'Reiniciar respuestas del test_magazine';
$string['resetting_magtests'] = 'Reiniciando tests de magazine';
$string['result'] = 'Resultado';
$string['resultformattexttypehelp'] = 'El formato de edición es idéntico a la descripción';
$string['results'] = 'Resultados';
$string['resultsbycats'] = 'Resultados por categoría';
$string['resultsbyusers'] = 'Resultados por usuario';
$string['resulttext'] = 'Texto de conclusión global';
$string['save'] = 'Guardar';
$string['score'] = 'Puntaje';
$string['selections'] = 'Selecciones';
$string['singlechoice'] = 'Opción única';
$string['singlechoice_help'] = 'Si se activa, para cada pregunta es solicitada una sola respuesta única (seleccionada o no). La ponderación aplica para todas las categorías calificables para las preguntas que están seleccionadas. Test_magazine necesariamente está ponderada en este caso.';
$string['singlechoicemode'] = 'El test_magazine está en modo de opción-única. Usted no puede escribir textos de respuesta en este modo. El estudiante simplemente contesta "si" o "no" a la pregunta, y distribuye ponderaciones en categorías.';
$string['sortorder'] = 'Orden';
$string['starttime'] = 'Hora de inicio';
$string['stat'] = 'Estadísticas';
$string['submitted'] = 'Enviado';
$string['symbol'] = 'Símbolo';
$string['testfinish'] = 'Usted ha terminado el test';
$string['testnotallok'] = 'La configuraión de este test no está completa; Usted no puede realizarlo';
$string['unanswered'] = 'Estos usuarios no contestaron';
$string['updatecategories'] = 'Actualizar categoría';
$string['updatecategory'] = 'Actualizar una categoría';
$string['updatequestion'] = 'Actualizar pregunta';
$string['usemakegroups'] = 'Use este test para generar grupos de curso';
$string['usemakegroups_help'] = '## Test mutipista

### Generando grupos de Moodle a partir de los resultados

El usar el test multipista resultará en que se dividan los participantes entre las categorías proporcionadas.

Esta configuración permite activar la característica de generación de grupos que convertirá los resultados en grupos de Moodle dentro del curso.

La generación puede tener lugar aún cuando no todos los participantes hubieran contestado el test. Por cierto, no habrá generación alguna posible si los grupos ya estuvieran configurados dentro del curso. Usted tendrá que eliminar los grupos existentes si quiere volver a generar grupos de nuevo a partir de un intento posterior.';
$string['userchoices'] = 'Elecciones del usuario';
$string['userstosubmit'] = 'Usario dejado a enviar';
$string['usesetprofile'] = 'Use esta prueba para cambiar valores de perfil del usuario';
$string['usesetprofile_help'] = 'Si se habilita, cada categoríapuede impulsar cambios en el perfil del usuario.';
$string['weight'] = 'Ponderación';
$string['weighted'] = 'Respuestas ponderadas';
$string['weighted_help'] = '## Test multipista

### Modo ponderado

Si Usted habilita este modo, cada respuesta será asociada con una ponderación que se añadirá a la categoría relevante si se elige.

Esto permite crear tests en los que cada pregunta pudiera no tener la misma influencia sobre el resultado final.

Cuando está activado el modo ponderado, la ponderación por defecto es de 1.0 y esto equivale a que no se usara ponderación.';
$string['weightfor'] = 'Ponderación para "{$a}"';
$string['you_have_to_create_categories'] = 'Usted tiene que crear al menos una categoría antes de que pueda crear alguna pregunta.';
$string['youneedcreatingcategories'] = 'Antes de crear preguntas, Usted tiene que crear al menos dos categorías.';
