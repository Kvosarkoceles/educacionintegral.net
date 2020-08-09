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
 * Strings for component 'qformat_qtex', language 'es_mx', branch 'MOODLE_26_STABLE'
 *
 * @package   qformat_qtex
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allimagesmissing'] = 'El archivo .tex incluye imágenes. Si Usted sube un archivo ZIP que contiene las imágenes y el archivo .tex, las imágenes serán incrustadas automáticamente (formato soportado: png).';
$string['badpercentage'] = 'En la pregunta "{$a->question}" : El parámetro opcional {$a->fraction} contiene caracteres malos.';
$string['cannotopenzip'] = 'No puede abrirse el archivo ZIP, código del error: {$a}';
$string['cannotreadimage'] = 'No puede leerse la imagen desde {$a}';
$string['changedpercentage'] = 'En la pregunta "{$a->question}" : El porcentaje {$a->original} no está permitido en Moodle y ha sido cambiado a {$a->new}.';
$string['configmissing'] = 'No puede accederse al archivo config.php del formato QuestionTeX.';
$string['embederror'] = 'Error al procesar la imagen incrustada';
$string['gradingmissing'] = 'El archivo grading.php , que contiene los esquemas para calificar, no puede accesarse.';
$string['imagefolder'] = 'images/';
$string['imagemissing'] = 'La imagen "{$a}" no pudo encontrase dentro del archivo ZIP.';
$string['instructions'] = '% QuestionTeX

% Instrucciones
% ============
% - Este código fuente LaTeX puede compilarse, ya sea por latex o pdflatex.
% - Requiere el paquete questiontex.
% De forma alterna, questiontex.sty puede colocarse en la misma carpeta.
% Puede descargarse desde
% www.lemuren.math.ethz.ch/coursesupport/multiplechoice
% en donde Usted también puede encontrar una documentación más detallada.';
$string['latexcompilation'] = 'Error en la compilación de LaTeX :n{$a}';
$string['latexdistromissing'] = 'No se encontró distribución de LaTeX . Por favor, configure la ruta hacia latex.exe en config.php.';
$string['macrosmissing'] = 'Falta el archivo con los macros de QuestionTeX.';
$string['multipletex'] = 'Se encontraron múltiples archivos .tex {$a} dentro del archivo ZIP. No se cual traducir.';
$string['noanswers'] = 'No se encontraron respuestas para la pregunta "{$a->question}".';
$string['norenderenginefound'] = 'No se detectó filtro alguno para matemáticas. Asumiendo filtro de notación TeX estándar.';
$string['notexfound'] = 'No se encontró archivo ..tex dentro del archivo ZIP.';
$string['notreadable'] = 'No pudo leerse la ruta {$a} por lo que no puede incluirse en la exportación';
$string['pluginname'] = 'Formato QuestionTeX';
$string['pluginname_help'] = 'QuestionTeX es una colección de macros de LaTeX que les permite a los autores crear exámenes de opción múltiple.';
$string['questionsincludeimages'] = 'Las preguntas seleccionadas incluyen imágenes. Se está creando un archivo ZIP, que contiene tanto las imágenes como el archivo .tex.';
$string['renderenginefound'] = 'Se detectó filtro  "{$a}" para mostra fórmulas.';
$string['tempdir'] = 'Problema con la creación/eliminación de directorio temporal.';
$string['unknownenvironment'] = 'Ambiente LaTeX desconocido {$a}.';
$string['unknownexportformat'] = 'La exportación del formato {$a} no está soportada.';
$string['unknownfiletype'] = 'Extensión de archivo desconocida: {$a}.';
$string['unknowngradingscheme'] = 'El esquema de calificación especificado no pudo encontrarse';
$string['unsupportedimagetype'] = 'El tipo de imagen de {$a} no está soportado para mostrarse en Moodle';
$string['wrongidentifier'] = 'El identificador {$a} es desconocido.';
