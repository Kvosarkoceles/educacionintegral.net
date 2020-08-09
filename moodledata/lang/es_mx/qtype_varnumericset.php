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
 * Strings for component 'qtype_varnumericset', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_varnumericset
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Espacios vacìos para {no} respuestas más';
$string['addmorevariants'] = 'Añadir {$a} más vacíos para más variables';
$string['addmorevars'] = 'Añadir {no} más vacíos para variables';
$string['ae_numericallycorrect'] = 'Su respuesta casi es correcta. Usted tiene el valor correcto y está redondeado incorrectamente.';
$string['ae_numericallycorrectandwrongformat'] = 'Su respuesta casi es correcta. Usted tiene el valor correcto y está redondeado correctamente, pero no está en notación científica.';
$string['ae_roundingincorrect'] = 'Su respuesta casi es correcta.pero está redondeado incorrectamente.';
$string['ae_roundingincorrectandwrongformat'] = 'Su respuesta casi es correcta pero está redondeado correctamente y no está en notación científica.';
$string['ae_toomanysigfigs'] = 'Su respuesta casi es correcta pero está dada con demasiados dígitos significativos.';
$string['ae_toomanysigfigsandwrongformat'] = 'Su respuesta casi es correcta pero está dada con demasiados dígitos significativos y no está en notación científica.';
$string['ae_wrongbyfactorof10'] = 'Su respuesta casi es correcta pero tiene el factor de 10 equivocado.';
$string['ae_wrongbyfactorof10andwrongformat'] = 'Su respuesta casi es correcta pero tiene el factor de 10 equivocado y no está en notación científica.';
$string['answer'] = 'Respuesta: {$a}';
$string['answermustbegiven'] = 'Usted debe escribir una respuesta si hay una calificación o retroalimentación.';
$string['answerno'] = 'Respuesta {$a}';
$string['autofirehdr'] = 'Dar retroalimentación y crédito parcial cuando la respuesta {$a} esté parcialmente equivocada';
$string['calculatewhen'] = 'Cuando calcular valores calculados';
$string['cannotrecalculate'] = 'No puede recalcular valores para variables calculadas porque hay errores en el formato, lo siento. Por favor arregle los errores y entonces podrá recalcular los valores.';
$string['checknumerical'] = 'si numéricamente correcto';
$string['checkpowerof10'] = 'si la potencia de 10 está equivocada';
$string['checkrounding'] = 'si el redondeo está incorrecto';
$string['checkscinotation'] = 'si se requiere notación científica y no se usa';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['correctansweriserror'] = '{$a->answer} <sup>+</sup>/<sub>-</sub> {$a->error}';
$string['correctanswerissigfigs'] = '{$a->answer} ({$a->sigfigs} dígitos significativos)';
$string['correctanswers'] = 'Respuestas correctas';
$string['error'] = 'error aceptado +/-';
$string['errorreportedbyexpressionevaluator'] = 'Error de evaluación de expresión {$a}';
$string['err_ousupsubnotsupportedonmobile'] = 'Esta pregunta requiere superíndice o subíndice y por esto aun no funciona en esta App. Por favor conteste la pregunta en el navegador web.';
$string['expectingassignment'] = 'Usted debe usar una expresión matemática para asignarle un valor a una \'Variable calculada\'';
$string['expectingvariablename'] = 'Esperando aquí un nombre de variable';
$string['expressionevaluatesasinfinite'] = 'Resultado es infinito.';
$string['expressionevaluatesasnan'] = 'Resultado no es un número';
$string['expressionmustevaluatetoanumber'] = 'Usted debería escribir aquí una expresión que se evalúa a un número, no una tarea.';
$string['filloutoneanswer'] = 'Usted debe proporcionar al menos una respuesta posible. Las respuestas vacías no se usarán. . Se puede usar un \'*\' como comodín para coincidir con cualquier número. La primera respuesta que coincida se usará para determinar la calificación y retroalimentación.';
$string['forallanswers'] = 'Para todas las respuestas';
$string['hintoverride'] = 'Si al disparse la auto-revisión, se permite otro intento pero no se muestra esta pista ni se aplica este castigo.';
$string['illegalthousandseparator'] = 'Usted ha usado un separador de miles ilegal "{$a->thousandssep}" e su respuesta. Solamente aceptamos respuestas con un separador decimal "{$a->decimalsep}".';
$string['notenoughanswers'] = 'Este tipo de pregunta requiere cuando menos {$a} respuestas';
$string['notolerancehere'] = 'Usted no puede escribir una tolerancia para esta respuesta de coincidir con cualquiera';
$string['notvalidnumber'] = 'Usted no ha escrito un número en un formato reconocido.';
$string['notvalidnumberprepostfound'] = 'Por favor escriba un número válido y nada más.';
$string['options'] = 'Opciones';
$string['pleaseenterananswer'] = 'Por favor escriba una respuesta.';
$string['pluginname'] = 'Conjunto numérico variable';
$string['pluginnameadding'] = 'Añadiendo una pregunta de conjunto numérico variable';
$string['pluginnameediting'] = 'Editando una pregunta de conjunto numérico variable';
$string['pluginname_help'] = 'En respuesta a una pregunta, el estudiante escribe un número.

Los números usados en la pregunta y los usados para calcular la respuesta se eligen a partir de conjuntos predefinidos que pueden ser pre-calculados por expresiones matemáticas. Todas las expresiones son calculadas al momento de creación de la pregunta y los valores de funciones aleatorias son los mismos para todos los usuarios.

Para una pregunta sin variantes, con expresiones calculadas al instante y con valores aleatorios diferentes para cada usuario, vea el tipo de pregunta \'numérica variable\'.';
$string['pluginnamesummary'] = 'Permite una respuesta numérica, la pregunta puede tener varias \'variantes\', las expresiones son pre-evaluadas para cada variante de pregunta';
$string['preandpostfixesignored'] = 'Solamente la parte numérica de su respuesta fue calificada.';
$string['privacy:metadata'] = 'El plugin del conjunto numérico variable no almacena ningún dato personal.';
$string['questiontext'] = 'Texto de pregunta y variables incrustadas';
$string['questiontext_help'] = 'Usted puede incrustar nombres de variables y expresiones en el texto de la pregunta, la retroalimentación general, la retroalimentación a la pregunta y las pistas.

Todo lo que esté entre corchetes (paréntesis cuadrados) dobles será evaluado antes de ser mostrado. Por ejemplo: si Usted escribe, digamos,  [[a]] entonces se mostrará el valor de la variable a; mientras que [[log(a)]] mostrará el logaritmo de a.

Usted puede también especificar cómo se mostrará el resultado empleando códigos printf. Por ejemplo: [[a,.3e]] mostrará el valor de a en notación científica con 4 dígitos significativos.';
$string['randomseed'] = 'Cadena que actúa como semilla para aleatorización';
$string['recalculatenow'] = 'Recalcular ahora';
$string['requirescinotation'] = 'Requerir notación científica';
$string['sigfigs'] = 'Dígitos significativos';
$string['syserrorpenalty'] = 'Para cada error deducir';
$string['unspecified'] = 'No especificado/a';
$string['usesuperscript'] = 'Usar entrada de superíndice';
$string['varheader'] = 'Variable {no}';
$string['variables'] = 'Variables';
$string['variant'] = 'Valor para variante {$a}';
$string['variants'] = 'Valor para variantes';
$string['variants_help'] = 'Escriba valores para \'Variables predefinidas\' O si esta es una \'Variable calculada\' Usted verá los valores calculados mostrados aquí.

Para una variable pre-definida, Usted debe escribir un valor para cuando menos una variante de pregunta y para cada una de las variables predefinidas Usted debe llenar un número idéntico de cajas.

Moodle determina automáticamente cuantas variantes tiene cada pregunta al ver cuantos valores variantes han sido llenados para las variables predefinidas, o si no hubiera variables predefinidas;  solamente calculadas, entonces se asumen 5 variantes de preguntas. Usted no necesita llenar los últimos huecos vacíos, están allí para que Usted pueda añadir más valores para variantes a la pregunta, si se requirieren.';
$string['varname'] = 'Nombre o tarea';
$string['varname_help'] = 'Para una \'Variable predefinida\' Usted solamente escribe un nombre de variable aquí (ejemplo:  \'a\'). Después escriba los valores para esta variable en cada variante de pregunta debajo.

O para una  \'Variable calculada\' escriba un nombre de variable y asígnele un valor de una expresión (ejemplo:  \'b = a^4\' , donde  \'a\' es una variable definida previamente).

Si deja este campo vacío entonces los valores debajo serán ignorados.';
$string['varnumericset'] = 'Conjunto numérico variable';
$string['varnumericset_help'] = 'El alumno escribe un número en respuesta a una pregunta.

Los números usados en la pregunta y los usados para calcular la respuesta son elegidos a partor de conjuntos predefinidos que pueden ser precalculados desde expresiones matemáticas.

Todas las expresiones son calculadas al momento de la creación de las preguntas y los valores para las funciones aleatorias son los mismos para todos los usuarios.

Para una pregunta sin variantes, con expresiones calculadas al instante, y con valores aleatorios diferentes para cada usuario, vea el tipo de pregunta \'numérica variable\'';
$string['varnumericsetsummary'] = 'Permite una respuesta numérica, la pregunta puede tener varias \'variantes\',  las expresiones son pre-evaluadas para cada variante de pregunta';
$string['vartypecalculated'] = 'Variable calculada';
$string['vartypepredefined'] = 'Variable predefinida';
$string['youmustprovideavalueforallvariants'] = 'Por favor llene un número igual de vacíos para todas las variables predefinidas. Por ejemplo: un valor para cada variable predefinida para cada variante de pregunta que requiera.';
$string['youmustprovideavalueforatleastonevariant'] = 'Usted debe proporcionar aquí un valor.';
