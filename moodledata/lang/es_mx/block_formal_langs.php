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
 * Strings for component 'block_formal_langs', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   block_formal_langs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewlanguage'] = 'Añadir nuevo lenguaje';
$string['affectedcourses'] = 'Cursos afectados:';
$string['changevisibility'] = 'Cambiar visibilidad en contexto actual';
$string['clanguagemulticharliteral'] = 'Hay varios caracteres en literal de caracter en {$a->line}:{$a->col}';
$string['clanguageunknownsymbol'] = 'HAy un caracter desconocido "{$a->symbol}" en {$a->line}:{$a->position}';
$string['clanguageunmatchedquote'] = 'Hay una comilla sin pareja en {$a->line}:{$a->col}';
$string['clanguageunmatchedsquote'] = 'Hay una comilla simple sin pareja en {$a->line}:{$a->col}';
$string['defaultlangdescription'] = 'Lenguaje seleccionado por defecto al crear un nuevo {$a}';
$string['defaultlanglabel'] = 'Lenguaje por defecto';
$string['deletelanguage'] = 'Eliminar lenguaje "{$a}"';
$string['editinglanguage'] = 'Editando lenguaje "{$a}"';
$string['editingnewlanguage'] = 'Editando lenguaje nuevo';
$string['editlanguage'] = 'Editar lenguaje "{$a}"';
$string['editpermissionslink'] = 'Editar permisos en contexto actual';
$string['editpermissionspagename'] = 'Editar permisos';
$string['extraseparatormsg'] = 'puede haber un separador extra dentro de {$a->correct[0]}';
$string['formal_langs:addinstance'] = 'Añadir nuevo bloque de lenguajes formales al módulo actual';
$string['formal_langs:addlanguage'] = 'Puede añadir nuevo lenguaje formal';
$string['formal_langs:changelanguagevisibility'] = 'Puede cambiar visibilidad de lenguaje en formatos';
$string['formal_langs:editalllanguages'] = 'Puede editar todos los lenguajes formales registrados (excepto por el sistema)';
$string['formal_langs:editownlanguages'] = 'Puede editar solamente los lenguajes formales creados por él mismo';
$string['formallangsglobalsettings'] = 'Configuraciones del sitio para el bloque de lenguaje formal';
$string['formal_langs:viewlanguagelist'] = 'Puede ver lista de lenguajes formales';
$string['formallangsvisibilitysettings'] = 'Configuraciones globales para visibilidad de lenguajes';
$string['inherited'] = '(heredado)';
$string['inherited_course'] = 'Curso';
$string['inherited_site'] = 'Sitio';
$string['lang_c_language'] = 'Lenguaje de programación C';
$string['lang_c_language_help'] = 'Lenguaje de programación C. Solamente escaneando.';
$string['lang_cpp_language'] = 'Lenguaje de programación C++';
$string['lang_cpp_language_help'] = 'Lenguaje de programación C++. Solamente escaneando.';
$string['lang_cpp_parseable_language'] = 'Lenguaje de programación C++ con capacidad de análisis (parsing)';
$string['lang_cpp_parseable_language_help'] = 'Lenguaje de programación C++ con capacidad de análisis (parsing)';
$string['lang_not_found'] = 'Lenguaje no encontrado';
$string['lang_printf_language'] = 'Lenguaje para dar formato a cadena de caracteres  (lenguaje C, como en printf).';
$string['lang_printf_language_help'] = 'Lenguaje para dar formato a cadena de caracteres  (lenguaje C, como en printf). Solamente escaneando.';
$string['lang_simple_english'] = 'Inglés';
$string['lang_simple_english_help'] = 'Lenguaje (idioma) Inglés con soporte para palabras, números y signos de puntuación. Solamente escaneando.';
$string['language_editing_field_description'] = 'Descripción:';
$string['language_editing_field_lexemname'] = 'Nombre del \'token\' en lenguaje';
$string['language_editing_field_name'] = 'Nombre identificador para el lenguaje';
$string['language_editing_field_parserules'] = 'Reglas de evaluación (parsing) para lenguaje';
$string['language_editing_field_scanrules'] = 'Reglas de léxico paar  lenguaje';
$string['language_editing_field_uiname'] = 'Nombre visible';
$string['language_editing_field_version'] = 'Versión';
$string['language_editing_field_visible'] = 'Visible en el contexto global del sitio';
$string['language_editing_submit_add'] = 'Añadir lenguaje y regresar';
$string['language_editing_submit_edit'] = 'Editar lenguaje y regresar';
$string['language_editing_submit_save_as_new'] = 'Guardar lenguaje como nuevo';
$string['lexeme'] = 'lexema';
$string['lexical_error_message'] = 'No puede concordarse el ingresado {$a->symbol} cercano a {$a->line}:{$a->position}';
$string['maximumlexicalbacktrackingexecutuiontimesettingdescription'] = 'Tiempo máximo de ejecución para seguimiento recursivo (recursive backtracking) para análisis para errores tipográficos. Un algoritmo para seguimiento recursivo puede ser muy costoso en tiempo, por lo que Usted puede poner limitante para evitar problemas con respuestas muy largas.';
$string['maximumlexicalbacktrackingexecutuiontimesettingname'] = 'Tieempo máximo de ejecución para seguimiento recursivo (recursive backtracking) para análisis de errores tipográficos (en segundos)';
$string['maximumvariationsoftypocorrectionsettingdescription'] = 'A veces, cuando un estudiante hace muchos errores tipográficos en la respuesta, el plugin puede generar muchas variaciones para corregirlos, lo que toma mucho tiempo para analizarlos. En esos casos, Usted debería diminuir esta configuración. Tenga en cuenta que esto afecta la cantidad de errores tipográficos encontrados. Si Usted lo configura demasiado bajo, podría no encontrar algunos errores tipográficos.';
$string['maximumvariationsoftypocorrectionsettingname'] = 'Máxima cantidad de variaciones de corrección de error tipográfico en respuesta de estudiante';
$string['missingseparatormsg'] = 'no hay separador entre {$a->correct0} y {$a->correct1}';
$string['missingseparatornodescriptionmsg'] = 'hay un separador faltante en {$a->compared}';
$string['part'] = 'parte';
$string['pluginname'] = 'Bloque de lenguajes formales';
$string['privacy:metadata'] = 'El \'Bloque de lenguajes formales\' no almacena datos del usuario.';
$string['quote'] = '"{$a}"';
$string['quoteat'] = '"{$a->value}" comenzando en la posición {$a->line}:{$a->column}';
$string['quoteatsingleline'] = '"{$a->value}" comenzando en el caracter {$a->column}';
$string['tokenseparatorpart'] = '{$a->correct0} y {$a->correct1}';
$string['typomsg'] = 'puede haber un error tipográfico en {$a->correct0}';
$string['visiblelangsdescription'] = 'Los usuarios en su sitio solamente pueden usar estos lenguajes; otros lenguajes estarán ocultos para ellos';
$string['visiblelangslabel'] = 'Lenguajes visibles';
$string['word'] = 'palabra';
