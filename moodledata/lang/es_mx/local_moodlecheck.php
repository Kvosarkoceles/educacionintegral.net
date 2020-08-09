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
 * Strings for component 'local_moodlecheck', language 'es_mx', branch 'MOODLE_22_STABLE'
 *
 * @package   local_moodlecheck
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Revisar';
$string['checkallrules'] = 'Revisar sobre todas las reglas';
$string['checkselectedrules'] = 'Revisar sobre las reglas seleccionadas (elija el botón de "Mostrar avanzadas" para ver la lista)';
$string['error_categoryvalid'] = 'La categoría  <b>{$a->category}</b> no es válida';
$string['error_classesdocumented'] = 'La clase <b>{$a->class}</b> no está documentada';
$string['error_classeshavecopyright'] = 'La clase  <b>{$a->object}</b> no tiene la marca (tag) de @copyright';
$string['error_classeshavelicense'] = 'La clase  <b>{$a->object}</b> no tiene la marca (tag) de @licence';
$string['error_constsdocumented'] = 'La constante <b>{$a->object}</b> no está documentada';
$string['error_default'] = 'Error: {$a}';
$string['error_definedoccorrect'] = 'Phpdocs para oraciones de definición (define) debe empezar con el nombre de la constante y guión: <b>{$a->object}</b>';
$string['error_definesdocumented'] = 'La oración de definición (define) para <b>{$a->object}</b> no está documentada';
$string['error_filehascopyright'] = 'El bloque phpdocs a nivel de archivo no tiene la marca (tag)  @copyright';
$string['error_filehaslicense'] = 'El bloque phpdocs a nivel de archivo no tiene la marca (tag)  @license';
$string['error_filephpdocpresent'] = 'El bloque phpdocs a nivel de archivo no se encontró';
$string['error_functionarguments'] = 'Phpdocs para la función <b>{$a->function}</b> tiene una lista incompleta de parámetros';
$string['error_functiondescription'] = 'No hay descripción en phpdocs para la función <b>{$a->object}</b>';
$string['error_functionsdocumented'] = 'La función <b>{$a->function}</b> no está documentada';
$string['error_noemptysecondline'] = 'Se encontró linea vacía después de marca (tag) PHP open';
$string['error_noinlinephpdocs'] = 'Se encontró un comentario que empieza con tres o más barras diagonales';
$string['error_packagespecified'] = 'El  paquete no está especificado para <b>{$a->object}</b>.Tampoco está especificado en phpdocs a nivel de archivo phpdocs';
$string['error_packagevalid'] = 'El paquete <b>{$a->package}</b> no es válido';
$string['error_phpdocsfistline'] = 'No se encontró descripción de una-línea en phpdocs para <b>{$a->object}</b>';
$string['error_phpdocsinvalidinlinetag'] = 'Marca (tag) inline phpdocs inválida <b>{$a->tag}</b> encontrada';
$string['error_phpdocsinvalidtag'] = 'Marca (tag) phpdocs inválida<b>{$a->tag}</b> utilizada';
$string['error_phpdocsnotrecommendedtag'] = 'Marca (tag) phpdocs no recomendada<b>{$a->tag}</b> usada';
$string['error_phpdocsuncurlyinlinetag'] = 'Marca (tag) inline phpdocs no encerrada entre paréntesis curveados <b>{$a->tag}</b> encontrada';
$string['error_variablesdocumented'] = 'La variable <b>{$a->variable}</b> no está documentada';
$string['error_variableshasvar'] = 'Phpdocs para la variable <b>{$a->variable}</b> no contiene @var o está incorrecta';
$string['ignorepath'] = 'Subrutas a ignorar';
$string['linenum'] = 'Línea <b>{$a}</b>:';
$string['path'] = 'Ruta(s)';
$string['path_help'] = 'Especifique uno o más archivos y/o directorios a revisar como rutas locales desde el directorio de instalación de Moodle';
$string['pluginname'] = 'Revisión PHPdoc de Moodle';
$string['rule_categoryvalid'] = 'La marca (tag) de categoría es inválida';
$string['rule_classesdocumented'] = 'Todas las clases están documentadas';
$string['rule_classeshavecopyright'] = 'Todas las clases tienen la marca (tag) de @copyright';
$string['rule_classeshavelicense'] = 'Todas las clases tienen la marca (tag) de @license';
$string['rule_constsdocumented'] = 'Todas las constantes están documentadas';
$string['rule_definedoccorrect'] = 'Revisar sintaxis para oraciones de definición (define)';
$string['rule_definesdocumented'] = 'Todas las oraciones de definición (define) están documentadas';
$string['rule_filehascopyright'] = 'Los archivos tienen la marca (tag) de @copyright';
$string['rule_filehaslicense'] = 'Los archivos tienen la marca (tag) de @license';
$string['rule_filephpdocpresent'] = 'El bloque phpdocs a nivel de archivo está presente';
$string['rule_functionarguments'] = 'Phpdocs para funciones define apropiadamente todos los parámetros';
$string['rule_functiondescription'] = 'Las funciones tienen descripciones en phpdocs';
$string['rule_functionsdocumented'] = 'Todas las funciones están documentadas';
$string['rule_noemptysecondline'] = 'Marca (tag) php open en la primera línea no está seguida por una linea vacía';
$string['rule_noinlinephpdocs'] = 'No hay comentarios que empiecen con tres o más diagonales';
$string['rule_packagespecified'] = 'Todas las funciones (que no son métodos) y clases tienen paquete especificado o heredado';
$string['rule_packagevalid'] = 'La marca (tag) del paquete es válida';
$string['rule_phpdocsfistline'] = 'El bloque de phpdocs a nivel archivo y la clase phpdocs deberían tener una descripción corta de una-línea';
$string['rule_phpdocsinvalidinlinetag'] = 'Las marcas (tags) phpdocs en-línea (inline) son válidas';
$string['rule_phpdocsinvalidtag'] = 'Las marcas (tags) phpdocs usadas son válidas';
$string['rule_phpdocsnotrecommendedtag'] = 'Las marcas (tags) phpdocs usadas están recomendadas';
$string['rule_phpdocsuncurlyinlinetag'] = 'Las marcas (tags) phpdocs en-línea (inline) están dentro de paréntesis curveados';
$string['rule_variablesdocumented'] = 'Todas las variables están documentadas';
$string['rule_variableshasvar'] = 'Phpdocs para variables contiene  @var con tipo y nombre de variable';
