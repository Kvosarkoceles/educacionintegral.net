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
 * Strings for component 'qtype_combined', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_combined
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['controlnamegapselect'] = 'caja desplegable';
$string['controlnamegapselectplural'] = 'cajas desplegables';
$string['controlnamemultichoice'] = 'Grupo de botones de selección';
$string['correct_choice_embed_code'] = '[[{$a->qid}:{$a->qtype}:{correct choice}]]';
$string['embeddedquestionremovedfromform'] = 'Una o más preguntas incrustadas han sido removidas del texto de la pregunta. Los datos de pregunta para estas preguntas todavía se muestran debajo, pero serán eliminados permanentemente cuando Usted presione el botón para \'Verificar el texto de pregunta...\' o presione \'Guardar cambios\', a menos que ponga los códigos incrustados otra vez de regreso en el texto de la pregunta.';
$string['err_accepts_vertical_or_horizontal_layout_param'] = '<p>El tipo de pregunta \'{$a}\' le permite especificar el arreglo de su tipo de pregunta como sigue :<ul> <li>[[{identificador de pregunta}:{$a}:v]] vertical O</li> <li>[[{identificador de pregunta}:{$a}:h]] horizontal.</li></ul> <p>Usted no debería de escribir nada más después del segundo dos puntos.</p>';
$string['err_duplicateids'] = 'Cada instancia de pregunta incrustada debería de tener un identificador diferente. Usted ha usado el/los siguiente(s) identificador(es) para más de una pregunta \'{$a}\'.';
$string['err_fillinthedetailsforsubq'] = 'Usted necesita llenar los detalles que describen la sub pregunta  \'{$a}\'.';
$string['err_fillinthedetailshere'] = 'Usted necesita llenar los detalles para esta sub pregunta.';
$string['err_insufficientnoofcodeparts'] = 'Error, su código para incrustar un control de pregunta  \'{$a->fullcode}\' tiene pocas partes separadas por dos puntos. Usted debería de tener al menos un ID de identificador de pregunta, seguido por un identificador de tipo de pregunta.';
$string['err_invalid_number'] = 'El tipo de pregunta  \'{$a}\' espera un número después del identificador del tipo de pregunta, su código incrustado debería de ser  [[{si ID de pregunta}:{$a}:{aquí va un número}]]';
$string['err_invalidquestionidentifier'] = 'Su código identificador de pregunta consiste de uno o más caracteres alfanuméricos.';
$string['err_invalid_width_specifier_postfix'] = '<p>El tipo de pregunta  \'{$a}\' le permite especificar el ancho de su tipo de pregunta como sigue :<ul> <li>[[{identificador de pregunta}:{$a}:____]] en donde el ancho de la caja para entrada dependerá del número de caracteres de guión bajo </li> <li>[[{identificador de pregunta}:{$a}:__10__]] en donde el ancho de la caja para entrada dependerá del número.</li></ul> <p>Usted no debería de escribir nada más después del segundo dos puntos.</p>';
$string['err_questionidentifiertoolong'] = 'El nombre de ls sub pregunta \'{$a}\' es demasiado largo. Usted puede usar hasta 10 caracteres alfanuméricos.';
$string['err_subq_not_included_in_question_text'] = 'Al parecer Usted ha removido esta pregunta del texto de la pregunta.
Incruste esta pregunta en el formato con el código {$a} o será removida cuando envíe de nuevo este formato.';
$string['err_thisqtypecannothavemorethanonecontrol'] = 'Usted ha tratado de incrustar más de un control para el tipo de pregunta \'{$a->qtype}\' con el nombre de instancia de pregunta \'{$a->qid}\'. Este tipo de pregunta solamente le permite incrustar un control por instancia de pregunta.';
$string['err_thisqtypedoesnotacceptextrainfo'] = 'Este tipo de pregunta está incrustado con el código [[{su ID de pregunta}:{$a}]]. Usted no debería de incluir nada después del identificador qtype, ni siquiera otros dos puntos.';
$string['err_unrecognisedqtype'] = 'El identificador del tipo de pregunta \'{$a->qtype}\' que Usted escribió en el código incrustado \'{$a->fullcode}\'no es conocido.';
$string['err_weightingsdonotaddup'] = 'Las ponderaciones para sub preguntas no suman 1.';
$string['err_you_must_provide_third_param'] = 'Usted debe proporcionar un tercer parámetro para el tipo de pregunta {$a}.';
$string['err_youneedmorechoices'] = 'Usted necesita ingresar aquí dos o más opciones.';
$string['incorrectfeedback'] = 'Retroalimentación para cualquier respuesta incorrecta';
$string['multiresponse'] = 'Opciones predefinidas para sub-preguntas multirespuesta';
$string['noembeddedquestions'] = 'Necesita haber al menos una sub-pregunta incrustada.';
$string['nosubquestiontypesinstalled'] = 'Este tipo de pregunta permite combinar la funcionalidad de otros tipos de preguntas. Usted necesita instalar al menos uno de estos tipos de preguntas, que serán usados como sub preguntas.
Vea la <a href="https://moodle.org/plugins/view.php?plugin=qtype_combined">entrada del plugin en la BasedeDatos</a> para más detalles y una lista de los tipos de preguntas que pueden usarse como  sub preguntas.';
$string['pluginname'] = 'Combinada';
$string['pluginnameadding'] = 'Añadiendo una pregunta combinada';
$string['pluginnameediting'] = 'Editando una pregunta combinada';
$string['pluginname_help'] = 'Crea una pregunta con campos de respuestas incrustadas dentro del texto de la pregunta.

Dependiendo de los tipos de sub-preguntas instaladas en su Moodle, Usted puede pedirle al estudiante que escriba un valor numérico, o un texto, o que seleccione un valor de entre un número de opciones. Los códigos incrustados en el texto de la pregunta serán remplazados por casillas de verificación o cajas de selección o un campo para escritura de texto, para que el estudiante pueda poner su respuesta.

Cuando Usted crea una nueva pregunta, todos los códigos para incrustar los tipos de preguntas disponibles son automáticamente añadidos al texto de la pregunta como ejemplos de los códigos que Usted puede usar. Y al mismo tiempo, los fragmentos del formato apropiados para especificar las opciones para cada pregunta aparecerán debajo del campo para escritura del texto de la pregunta.

Edite el texto de la pregunta y cambie los códigos en el texto de la pregunta para cambiar cuales tipos de sub-preguntas se incluirán en el texto de la pregunta y presione el botón para "Verificar el texto de la pregunta y actualizar el formato", para que se muestren las partes correctas del formato, para editar las configuraciones de sus sub-preguntas.';
$string['pluginnamesummary'] = 'Un tipo de pregunta combinada que permite la incrustación de los campos de respuesta para varias sub preguntas disponibles en el texto de la pregunta.

Dependiendo de cuales tipos de pregunta tenga Usted instalados, el estudiante puede escribir una respuesta numérica o de texto corto o elegir una respuesta o respuestas usando una caja de selección o casillas de elección.';
$string['privacy:metadata'] = 'El plugin Combinado no almacena ningún dato personal.';
$string['shuffle'] = 'Brajear';
$string['singlechoice'] = 'Opciones predefinidas para sub-preguntas opciónúnica';
$string['subqheader'] = '\'{$a->qtype}\' entrada \'{$a->qid}\\';
$string['subqheader_not_in_question_text'] = '\'{$a->qtype}\' entrada \'{$a->qid}\' (no incrustada en texto de pregunta.';
$string['subquestiontypenotinstalled'] = 'Usted está intentando usar una pregunta combinada con un tipo de sub pregunta \'{$a}\' que no está intalada.';
$string['subquestiontypes'] = 'Tipos de sub-pregunta';
$string['updateform'] = 'Verificar el texto de la pregunta y actualizar el formato';
$string['validationerror'] = 'Parte de su respuesta requiere atención : {$a}';
$string['validationerror_multiplecontrols'] = 'Entradas {$a->controlnos} ({$a->controlname}) - {$a->error}';
$string['validationerrors'] = 'Partes de su respuesta requieren atención : {$a}';
$string['validationerror_singlecontrol'] = 'Entrada {$a->controlno} ({$a->controlname}) - {$a->error}';
$string['vertical_or_horizontal_embed_code'] = '[[{$a->qid}:{$a->qtype}:v]] o [[{$a->qid}:{$a->qtype}:h]] dependiendo si es que quiere las opciones colocadas vertical u horizontalmente.';
$string['weighting'] = 'Ponderación';
$string['widthspecifier_embed_code'] = '[[{$a->qid}:{$a->qtype}:{especificador de ancho}]] o solamente [[{$a->qid}:{$a->qtype}]]';
$string['yougot1right'] = '1 de sus respuestas es correcta.';
$string['yougotnright'] = '{$a->num} de sus respuestas son correctas.';
