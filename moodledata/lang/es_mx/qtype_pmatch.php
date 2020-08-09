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
 * Strings for component 'qtype_pmatch', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_pmatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Añadir';
$string['addmoreanswerblanks'] = 'Espacios vacíos para {no} Respuestas Más';
$string['addmoresynonymblanks'] = 'Espacios vacíos para {no} sinónimos más';
$string['addtoanswer'] = 'Añadir a respuesta';
$string['allowsubscript'] = 'Permitir uso de subíndice';
$string['allowsuperscript'] = 'Permitir uso de superíndice';
$string['amatiwsurl'] = 'URL de servicio web Amati';
$string['amatiwsurl_desc'] = 'URL para el servicio web Amati';
$string['answer'] = 'Respuesta: {$a}';
$string['answeringoptions'] = 'Opciones Para Escribir Respuestas';
$string['answermustbegiven'] = 'Usted debe escribir una respuesta si existe una calificación o retroalimentación';
$string['answerno'] = 'Respuesta {$a}';
$string['answeroptions'] = 'Opciones de respuesta';
$string['anyotheranswer'] = 'Cualquier otra respuesta';
$string['applydictionarycheck'] = 'Revisar ortografía';
$string['apply_spellchecker_label'] = 'No revisar ortografía del estudiante';
$string['apply_spellchecker_missing_language_attempt'] = 'Esta pregunta está configurada para usar revisión ortográfica de {$a}, pero ese idioma no está disponible en este servidor.';
$string['apply_spellchecker_missing_language_select'] = '{$a} (¡Advertencia! Diccionario no instalado en este servidor)';
$string['apply_spellchecker_select'] = '{$a->name} ({$a->code})';
$string['caseno'] = 'No, MAY/minúsculas no importan';
$string['casesensitive'] = 'Sensibilidad a MAY/minúsculas';
$string['caseyes'] = 'MAY/minúsculas deben coincidir';
$string['choosetoken'] = 'Elegir token';
$string['combinedcontrolnamepmatch'] = 'escritura de texto';
$string['converttospace'] = 'Convertir a espacio';
$string['converttospace_help'] = 'Especificar caracteres que Usted quiere que el sistema convierta a espacios antes de ejecutar el proceso de concordancia de patrón. Esto es magnífico para simplificar el ingreso de las respuestas cuando la puntuación no tiene importancia.';
$string['correctanswers'] = 'Respuestas concordantes';
$string['env_dictmissing'] = 'El diccionario faltante de ortografía {$a->langforspellchecker} para el idioma instalado {$a->humanfriendlylang} está instalado.';
$string['env_dictmissing2'] = 'El estudiante intentó una revisión ortográfica en el idioma \'{$a}\'. Pero el diccionario para deletrear (aspell) para este idioma no está instalado.';
$string['env_dictok'] = 'El diccionario de ortografía  {$a->langforspellchecker} para el idioma instalado {$a->humanfriendlylang} está instalado.';
$string['environmentcheck'] = 'Revisiones del entorno para el tipo de pregunta pmatch (pcoincidir)';
$string['env_peclnormalisationmissing'] = 'El Normalizador del Paquete PECL para Unicode parece NO estar correctamente instalado';
$string['env_peclnormalisationok'] = 'El Normalizador del Paquete PECL para Unicode parece estar correctamente instalado';
$string['env_pspellmissing'] = 'La biblioteca pspell (pdeletrear) parece NO estar correctamente instalada';
$string['env_pspellok'] = 'La biblioteca pspell (pdeletrear) parece estar correctamente instalada';
$string['error:blank'] = 'La respuesta no pued estar vacía';
$string['errorfilecell'] = 'El archivo necesita al menos dos filas (la primera fila es la fila de encabezados, a partir de la segunda fila en adelante para respuestas)';
$string['errorfilecolumnbigger'] = 'El archivo tiene más de dos columnas. Por favor incluya solamente el puntaje esperado y la  respuesta.';
$string['errorfilecolumnless'] = 'l archivo necesita al menos dos columnas (lapimera columna para los puntajes esperados, la segunda columna para respuestas).';
$string['errorfileformat'] = 'El archivo debe estar en formato .csv/.xlsx/.html/.json/.ods';
$string['errors'] = 'Por favor arregle los siguientes problemas : {$a}';
$string['error:title'] = 'Error';
$string['err_ousupsubnotsupportedonmobile'] = 'Esta pregunta necesita superíndices o subíndices, por lo que aun no funciona en esta App. Por favor, responda esta pregunta en el navegador web.';
$string['err_providepmatchexpression'] = 'Usted  debe proporcionar aquí una expresión \'pmatch\' (concordancia de patrón).';
$string['exclude'] = 'Excluir';
$string['extenddictionary'] = 'Añadir estas palabras al diccionario';
$string['filloutoneanswer'] = 'Usar sintaxis de coincidencia (concordancia ) de patrón para describir respuestas posibles. La respuesta del estudiante será comparada con estas en orden, y el primer patrón que concuerde determinará el puntaje y la retroalimentación . Usted debe dar al menos un patrón.<br> Precisión de calificación global:';
$string['forcelength'] = 'Si la respuesta tiene más de 20 palabras';
$string['forcelengthno'] = 'no emitir advertencia';
$string['forcelengthyes'] = 'advertir que la respuesta es demasiado larga e invitar al alumno para que la acorte';
$string['ie_illegaloptions'] = 'Opciones ilegales en la expresión "match<strong><em>{$a}</em></strong>()".';
$string['ie_lastsubcontenttypeorcharacter'] = 'El caracter OR no debe terminar subcontenido en "{$a}".';
$string['ie_lastsubcontenttypeworddelimiter'] = 'El caracter delimitador de palabra no debe terminar sub contenido  "{$a}".';
$string['ie_missingclosingbracket'] = 'Falta paréntesis de cierre en fragmento de código "{$a}".';
$string['ie_nofullstop'] = 'Los caracteres de punto y aparte no están permitidos en expresiones pmatch. (los puntos decimales a la mitad de los números están OK).';
$string['ie_nomatchfound'] = 'Error en código de coincidencia de patrón.';
$string['ie_unrecognisedexpression'] = 'Expresión no reconocida.';
$string['ie_unrecognisedsubcontents'] = 'Sub contenido no reconocido en fragmento de código "{$a}".';
$string['inputareatoobig'] = 'El área de entrada definida por "{$a}" es demasiado grande. El tamaño del área de entrada está limitado a un ancho de 150 caracteres y una altura de  100 caracteres.';
$string['minresponses'] = 'Número mínimo de respuestas';
$string['minresponses_desc'] = 'Número mínimo de respuestas calificadas que deberían de ser subidas para que el sistema Amati genere reglas.';
$string['modelanswer'] = 'Respuesta modelo';
$string['modelanswererror'] = '\'<strong>{$a}</strong>\' no es una respuesta correcta a esta pregunta.';
$string['modelanswer_help'] = 'De una repuesta posible para esta pregunta que sería calificada como correcta.';
$string['nolanguagesfound'] = '<i>No se encontraron lenguajes/idiomas</i>';
$string['nomatchingsynonymforword'] = 'No se escribieron sinónimos para la palabra. Elimine la palabra o escriba sinónimo(s) para ella.';
$string['nomatchingwordforsynonym'] = 'Usted no ha escrito una palabra que sea equivalente al sinónimo. Elimine el/los sinónimo(s) o escriba una palabra equivalente a ella.';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere cuando menos {$a} respuestas';
$string['or'] = 'O';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta.';
$string['pluginname'] = 'Coincidencia de patrón';
$string['pluginnameadding'] = 'Añadiendo una pregunta de coincidencia de patrón';
$string['pluginnameediting'] = 'Editando una pregunta de coincidencia de patrón';
$string['pluginname_help'] = 'En respuesta a una pregunta (que puede incluir una imagen) el alumno escribe una frase corta. Puede haber varias respuestas correctas posibles, cada una con una calificación diferente. Si está seleccionada la opción de "MAYÚSCULAS/minúsculas diferentes" entonces puede tener diferente calificaciones para "Palabra" o "palabra".';
$string['pluginnamesummary'] = 'Permite una respuesta corta de una o varias oraciones, que se califica al compararla contra varias respuestas modelo, que se describen usando la sintaxis de coincidencia de patrón (\'\'pmatch\'\') de Open University.';
$string['precedes'] = 'Precede';
$string['precedesclosely'] = 'Precede cercanamente';
$string['privacy:metadata:preference:pagesize'] = 'Número de intentos de pregunta de coincidencia de patrón a mostrar por página.';
$string['processingxofy'] = 'Procesaando respuesta {$a->row} de {$a->total}: {$a->response}.';
$string['repeatedword'] = 'Esta palabra aparece más de una vez en la lista de sinónimos.';
$string['resetrule'] = 'Reiniciar regla';
$string['row'] = 'Fila';
$string['rule'] = 'Regla';
$string['ruleaccuracy'] = 'Respuestas no apareadas arriba: {$a->responseneedmatch} <br> Correctamente apareadas por esta regla: {$a->correctlymatched}, <span class="{$a->class}">Incorrectamente apareadas: {$a->incorrectlymatched}</span> <br> Las respuestas todavía serán procesadas debajo: {$a->responsestillprocess}';
$string['ruleaccuracylabel'] = 'Efecto sobre respuestas muestra';
$string['rulecreationasst'] = 'Mostrar/ocultar asistente para creación de regla';
$string['rulecreationtoomanyors'] = 'Lo sentimos; hay demasiadas o\'s.';
$string['rulecreationtoomanyterms'] = 'Lo siento, demasiados términos';
$string['rulesuggestionbutton'] = 'Auto general reglas de coincidencia';
$string['rulesuggestiondescriptionnoresponses'] = 'Generar automáticamente reglas de concordancia al subir un conjunto de repuestas calificadas existentes';
$string['rulesuggestionlabel'] = 'Sugerencia de regla';
$string['savedxresponses'] = 'Guardadas {$a} respuestas';
$string['sentencedividers'] = 'Puntos finales de oración';
$string['sentencedividers_help'] = 'Especificar caracteres para que el sistema los trate como puntos finales para oraciones. Por defecto, ‘?’ es un punto final de oración, por lo que si Usted quisiera concordar “Hola?”, Usted quitaría el signo de ‘?’ de este campo y usaría “match (hola\\?)”. Tenga en cuenta que el caracter de  ‘?’ necesita ser escapado  ( \\ ) en la expresión de concordancia porque es un caracter especial, pero los caracteres  ‘.’ y ‘!’ no lo necesitan.';
$string['sentencedividers_noconvert'] = '\'<strong>{$a}</strong>\' es usado como un <strong>punto final de la oración</strong> y no puede ser convertido a espacio.';
$string['setting_installed_spell_check_dictionaries'] = 'Diccionarios para revisión ortográfica';
$string['setting_installed_spell_check_dictionaries_des'] = 'Esta configuración controla cuales opciones de idioma para revisión ortográfica son mostradas a los autores de preguntas cuando intentan crear o editar una pregunta.';
$string['showcoverage'] = 'Mostrar cobertura';
$string['showingresponsesforquestion'] = 'Mostrando las respuestas para la pregunta seleccionada: {$a}';
$string['spellcheckerenchant'] = 'Biblioteca revisora de ortografía Enchant';
$string['spellcheckernull'] = 'No hay revisor de ortografía disponible';
$string['spellcheckerpspell'] = 'Biblioteca revisora de ortografía Pspell';
$string['spellcheckertype'] = 'Biblioteca revisora de ortografía';
$string['spellcheckertype_desc'] = 'Cual (librería) biblioteca revisora de ortografía usar. Esto debería de configurarse automáticamente al valor correcto durante la instalación.';
$string['spellingmistakes'] = 'Las siguientes palabras no están en nuestro diccionario : {$a}. Por favor corrija su deletreado.';
$string['subsuponelineonly'] = 'El editor de sub / super índices no puede usarse con una caja de entrada de una línea de alto.';
$string['synonym'] = 'Sinónimos';
$string['synonymcontainsillegalcharacters'] = 'El sinónimo contiene caracteres ilegales.';
$string['synonymsheader'] = 'Definir Sinónimos Para Palabras en Respuestas';
$string['synonymsno'] = 'Sinónimos {$a}';
$string['template'] = 'Plantilla';
$string['term'] = 'Período';
$string['test'] = 'Probar';
$string['testquestionactualmark'] = 'Puntaje computado';
$string['testquestionbacklink'] = 'regresar a pregunta de prueba';
$string['testquestionchangescore'] = 'Cambiar puntaje';
$string['testquestioncorrect'] = 'Correcto';
$string['testquestiondeletedresponses'] = 'Las respuestas fueron eliminadas exitosamente.';
$string['testquestioneditresponse'] = 'Editar respuesta';
$string['testquestionexpectedfraction'] = 'Puntaje humano';
$string['testquestionformcancelresponsebutton'] = 'Cancelar';
$string['testquestionformdeletecheck'] = '¿Está absolutamente seguro de querer eliminar completamente estas respuestas?';
$string['testquestionformdeletesubmit'] = 'Eliminar';
$string['testquestionformduplicateresponse'] = 'No están permitidas respuestas duplicadas';
$string['testquestionformerror_incorrectquestionid'] = 'ID de pregunta incorrecta o no es una pregunta de coincidencia de patrón';
$string['testquestionformheader'] = 'Respuestas calificadas para subir';
$string['testquestionforminfo'] = 'Usted debe subir un archivo de hoja de cálculo (.CSV c o .XLSX) con dos columnas. La primera columna contiene el puntaje esperado para esa respuesta, y la segunda columna debe contener esa respuesta. La primera fila en el archivo se asume que contenga los encabezados de columna, y es ignorada.';
$string['testquestionformnewresponsebutton'] = 'Añadir nueva respuesta';
$string['testquestionformsaveresponsebutton'] = 'Guardar';
$string['testquestionformtestsubmit'] = 'Probar respuestas seleccionadas';
$string['testquestionformtitle'] = 'Herramienta para probar pregunta Pattern-match';
$string['testquestionformuploadlabel'] = 'Respuestas calificadas';
$string['testquestionheader'] = 'Probando pregunta: {$a}';
$string['testquestionidlabel'] = '#';
$string['testquestionincorrectlymarkedrights'] = 'negativo faltante';
$string['testquestionincorrectlymarkedwrong'] = 'positivo faltante';
$string['testquestionmatches'] = 'coincidencias';
$string['testquestionresponse'] = 'Respuesta';
$string['testquestionresponsesthatare'] = 'Respuestas que son';
$string['testquestionresultsheader'] = 'Resultados de la prueba: {$a}';
$string['testquestionresultssummary'] = 'Respuesta de muestra: {$a->total} <br>
     Calificada correctamente: {$a->correct} ({$a->accuracy}%)<br>
     <span>Calificación por computadora mayor que calificación por humano: {$a->misspositive} (missed positive)</span><br>
     <span>Calificación por computadora menor que calificación por humano: {$a->missnegative} (missed negative)</span>';
$string['testquestionruleslabel'] = 'Reglas';
$string['testquestiontool'] = 'Herramienta para probar Coincidencia de patrón';
$string['testquestionungraded'] = 'sin-calificar';
$string['testquestionuploadanother'] = 'Subir otro archivo';
$string['testquestionuploadresponses'] = 'Subir respuestas';
$string['testquestionuploadrowhastwoitems'] = 'Cada fila debería contener exactameente dos ítems, una marca numérica y una respuesta. Fila <b>{$a->row}</b> contains <b>{$a->items}</b> item(s).<b>{$a->row}</b> contiene <b>{$a->items}</b> ítem(s).';
$string['testquestionuploadrownotvalidutf8'] = 'La respuesta en la fila <b>{$a}</b> contiene caracteres especiales no-reconocidos. Lo ingresado debe de ser UTF-8 válido.';
$string['testquestionuploadtheseresponses'] = 'Subir estas respuestas';
$string['testsubquestionx'] = 'Probar sub pregunta {$a}';
$string['testthisquestion'] = 'Probar esta pregunta';
$string['testthisquestionnoresmoreponsesrequired'] = 'Se necesitan más respuestas para que funcione la auto-sugerencia. Existen {$a->existing} respuestas y Usted necesita {$a->required}';
$string['testthisquestionnoresponsesfound'] = 'No se encontraron respuestas';
$string['testthisquestionnorulesreturned'] = 'No fueron sugeridas reglas.';
$string['toomanywords'] = 'Su respuesta es demasiado larga. Por favor edítela para que no sea mayor de 20 palabras.';
$string['tryrule'] = 'Intentar regla';
$string['tryrulecoverage'] = 'Cobertura';
$string['tryrulegradeerror'] = 'Lo sentimos, la regla intentada solamente funciona si la calificación está configurada a 100% o Ninguna.';
$string['tryrulenogradedresponses'] = 'No hay respuestas calificadas; por favor, califique su conjunto de respuestas.';
$string['tryrulenomatch'] = 'Esta regla no concuerda con ninguna respuesta calificada.';
$string['tryrulenovalidrule'] = 'esta regla no es una expresión pmatch válida.';
$string['unparseable'] = 'No entendemos los caracteres o la puntuación aquí "{$a}"';
$string['wordcontainsillegalcharacters'] = 'La palabra contiene caracteres ilegales.';
$string['wordwithsynonym'] = 'Palabra';
$string['xresponsesduplicated'] = 'Las siguientes {$a} respuestas fueron duplicadas';
$string['xresponsesproblems'] = 'Las siguientes {$a} respuestas nofueron guardadas';
$string['xrulesuggested'] = '{$a} nueva(s) respuesta(s) fue(ron) agregada(s) al final de las respuestas existentes';
