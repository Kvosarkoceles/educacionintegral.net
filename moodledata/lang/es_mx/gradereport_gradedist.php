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
 * Strings for component 'gradereport_gradedist', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   gradereport_gradedist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a'] = '(absoluto)';
$string['absolut'] = 'Absoluto';
$string['actcoverage'] = 'Ítems no incluidos por letras actuales:';
$string['actualcolumns'] = 'Letras de calificación actuales';
$string['actualgrade'] = 'Calificación (actual)';
$string['boundaryerror'] = 'Algunas entradas para las nuevas calificaciones con letras son inválidas. Debe de existir una entrada en cada campo';
$string['category'] = 'Categoria_de_calificacion';
$string['changeletters'] = 'Cambiar letras de calificación';
$string['chart'] = 'Gráfico';
$string['columns'] = 'Barras';
$string['confirm'] = 'Cambiar letras de calificación';
$string['confirmationtableviewed'] = 'Tabla de confirmación vista';
$string['confirmationtableviewed_description'] = 'El usuario con id {$a->userid} vió la tabla de confirmación de distribución de calificación.';
$string['contextbuttontitle'] = 'Menú contextual de gráfico';
$string['coursesum'] = 'Suma para el curso';
$string['coverage'] = '¡La nueva distribución de calificaciones no cubre todas las calificaciones!';
$string['coverage_export'] = 'Ítems no incluidos por letras:';
$string['decimals'] = 'El límite inferior debe ser un número del 0 al 100. Se permiten máximo dos lugares decimales.';
$string['description'] = 'Etiquetado';
$string['download'] = 'Descargar';
$string['downloadjpeg'] = 'Imagen JPEG';
$string['downloadpdf'] = 'Documento PDF';
$string['downloadpng'] = 'Imagen PNG';
$string['downloadsvg'] = 'Descargar imagen vectores SVG';
$string['export'] = 'Descargar datos como';
$string['exportasimage'] = 'Descargar gráfica como';
$string['gradeboundary'] = 'Límite inferior en %';
$string['gradeboundary_help'] = 'Esta configuración determina el porcentaje mínimo sobre del cual se asignarán calificaciones a la letra de calificación.';
$string['gradeboundary_new'] = 'Nuevo límite inferior en %';
$string['gradeboundary_new_help'] = 'Usted puede ver los efectos de los nuevos límtes inferiores sobre la distribución de las calificaciones. Los límites inferiores deben ser números con un máximo de 2 posiciones decimales.';
$string['gradedistdownloaded'] = 'Distribución de calificación actual descargada';
$string['gradedistdownloaded_description'] = 'El usuario con id {$a->userid} descargó la distribución de calificación actual.';
$string['gradedist:edit'] = 'Gestionar distribución de calificación';
$string['gradedist:view'] = 'Ver distribución de calificación';
$string['gradedistviewed'] = 'Distribución de calificación vista';
$string['gradedistviewed_description'] = 'El usuario con id {$a->userid} vió la distribución de calificación';
$string['gradeitem'] = 'Columna de calificar';
$string['gradeletter'] = 'Calificación con letras';
$string['highchartsmissing'] = 'Para ver el diagrama, descargue la versión 4.x de la librería Highcharts desde <a href="http://code.highcharts.com/">http://code.highcharts.com/</a>. Copambos juntos, el módulo del núcleo highcharts.src.js y el módulo exporting.src.js, o alternativamente, si Usted prefiere sus versiones mínimas,  highcharts.js y exporting.js respectivamente, adentro del directorio moodleroot/grade/report/gradedist/js.';
$string['interval'] = 'El límite inferior debe estar entre 0 y 100.';
$string['labelgroup'] = 'Vista de foco en grupos';
$string['labelgrouping'] = 'Vista de foco en agrupamientos';
$string['newcolumns'] = 'nuevas calificaciones con letras';
$string['newcoverage'] = 'Ítems no incluidos por nuevas letras:';
$string['newgrade'] = 'Calificación (nueva)';
$string['newletterssubmitted'] = 'Nuevas calificaciones con letras enviadas';
$string['newletterssubmitted_description'] = 'El usuario con id {$a->userid} envió las nuevas calificaciones con letras.';
$string['nogroupingentry'] = 'Sin agrupamientos';
$string['notification'] = 'Nota: La definición de calificaciones con letras aplica para todos los ítems de calificación en el curso.';
$string['p'] = '(%)';
$string['percent'] = 'Porcentaje';
$string['pluginname'] = 'Distribución de calificación';
$string['pluginname_help'] = 'Este reporte muestra la distribución de calificaciones sobre un ítem de calificación en particular en los límites inferiores definidos para la calificación con letras,. La funcionalidad de vista previa le permite a Usted ver inmediatamente como es que los cambios en los límites inferiores afectan a la distribución de la calificación. Si Usted está satisfecho con los nuevos límites inferiores, entonces se pueden cambiar permanentementelas definiciones de la calificación con letras.
Nota: Las definiciones de la calificación con letras aplican para todos los ítems de calificaciones en el curso.';
$string['points'] = 'Puntos ({$a})';
$string['predecessor'] = 'El límite inferior de una calificación con letras tiene que ser más pequeño que el límite de su predecesor.';
$string['printchart'] = 'Imprimir gráfica';
$string['privacy:null_reason'] = 'Este plugin no almacena ningún dato personal. Presenta una interfaz para mostrar visulalmente y exportar la distribución de calificación de los elementos calificados adentro de un curso.';
$string['saved'] = 'Calificaciones con letras cambiadas exitosamente';
$string['showgradeitem'] = 'Mostrar ítem de calificación';
$string['showgradeitem_description'] = 'Mostrar tipo de visualización de calificación como elección para ítem de calificación.';
$string['sum'] = 'Suma';
