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
 * Strings for component 'assignfeedback_pdf', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   assignfeedback_pdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addquicklist'] = 'Añadir a Listarápida de comentario';
$string['allowpdffeedback'] = 'Habilitado';
$string['annotatesubmission'] = 'Hacer anotaciones al envío';
$string['annotationhelp'] = 'Ayuda sobre anotaciones';
$string['annotationhelp_text'] = '<table> <thead><tr><th>Control</th><th>Atajo de Teclado</th><th>Descripción</th></tr></thead> <tr><td>{$a->save}</td><td> </td><td>Cierre anotación sin generar una respuesta en PDF (tenga en cuenta que todas las anotaciones son guardadas inmediatamente al guardarse</td></tr> <tr><td>{$a->generate}</td><td> </td><td>Generar un PDF con anotaciones para que el estudiante lo descargue</td></tr> <tr><td>Encontrar comentarios</td><td> </td><td>Saltar directamente al comentario previamente introducido (en este envío) y resaltarlo.</td></tr> <tr><td>Mostrar anterior</td><td> </td><td>Mostrar comentarios para este estudiante de otra tarea en este curso (en un marco lateral)</td></tr> <tr><td><-- Prev</td><td>p</td><td>Ver la página anterior</td></tr> <tr><td>Siguiente --></td><td>n</td><td>Ver la página siguiente</td></tr> <tr><td>Color del fondo</td><td>[ and ]</td><td>Cambiar el color del relleno para la caja del comentario (también disponible al hacer click derecho sobre un comentario)</td></tr> <tr><td>Color de línea</td><td>{ and }</td><td>Cambiar el color para las anotaciones</td></tr> <tr><td>Elegir sello (estampado)</td><td> </td><td>Elegir el sello (estampado) a emplar para a herramienta de sellado (se pueden añadir nuevos sellos en la carpeta \'pix/stamps\' del servidor)</td></tr> <tr><td>{$a->comment}</td><td>c</td><td>Haga click sobre la página para añadir una caja de comentario, escriba el comentario, después vuelva a hace click sobre la página para guardarlo. Haga click sobre un comentario para editarlo, arrástrelo para moverlo. Haga click derecho para cambiarle el color, guardarlo en la listarápida o para borrarlo (o elimine el texto para eliminarlo).</td></tr> <tr><td>{$a->line}</td><td>l</td><td>Click + drag (or click, move, click) to draw a line on the page</td></tr> <tr><td>{$a->rectangle}</td><td>r</td><td>Click + drag (or click, move, click) to draw a rectangle on the page</td></tr> <tr><td>{$a->oval}</td><td>o</td><td>Click + drag (or click, move, click) to draw an oval on the page</td></tr> <tr><td>{$a->freehand}</td><td>f</td><td>Click + drag to draw freehand lines on the page</td></tr> <tr><td>{$a->highlight}</td><td>h</td><td>Click + drag (or click, move, click) to draw a semi-transparent highlight across the existing page content</td></tr> <tr><td>{$a->stamp}</td><td>s</td><td>Click to insert the selected stamp at the default size. Click + drag to insert at a different size</td></tr> <tr><td>{$a->erase}</td><td>e</td><td>Haga click dentro o sobre una anotación (que NO es un comentario) para eliminarlo</td></tr> <tr><td>Listarápida</td><td> </td><td>Click derecho en la página para insertar un comentario que estaba previamente guardado en la \'listarápida\'. Use la \'x\' para eliminar items no deseados en la listarápida.</td></tr> </table>';
$string['backtocommentlist'] = 'Regresar a lista de comentarios';
$string['badaction'] = 'Acción inválida \'{$a}\'\\';
$string['badannotationid'] = 'La ID de anotación es para un envío o página diferente';
$string['badcommentid'] = 'La ID del comentario es  para un envío o página diferente';
$string['badcoordinate'] = 'Numero non de coordinadas en línea - deberían ser 2 coordinadas por punto';
$string['badpath'] = 'La ruta apunta a un lugar inválido';
$string['badtype'] = 'Tipo inválido {$a}';
$string['cancel'] = 'Cancelar';
$string['clearimagecache'] = 'Limpiar caché de imagen de página';
$string['colourblack'] = 'Regresar';
$string['colourblue'] = 'Azul';
$string['colourclear'] = 'Borrar';
$string['colourgreen'] = 'Verde';
$string['colourred'] = 'Rojo';
$string['colourwhite'] = 'Blanco';
$string['colouryellow'] = 'Amarillo';
$string['comment'] = 'Comentario';
$string['commentcolour'] = '[,] - color del fondo de comentario';
$string['commenticon'] = 'c - añadir comentarios\\n Mantener presionada Ctrl para dibujar una línea';
$string['deletecomment'] = 'Eliminar comentario';
$string['deleteresponse'] = 'Eliminar respuesta';
$string['deleteresponseconfirm'] = '¿Está Usted seguro de querer eliminar la respuesta para {$a->username} en la tarea \'{$a->assignmentname}\'?';
$string['downloadoriginal'] = 'Descargar PDF envío original';
$string['downloadresponse'] = 'Descargar respuesta';
$string['draftsaved'] = 'Borrador guardado';
$string['emptyquicklist'] = 'No hay items en la Listarápida';
$string['emptyquicklist_instructions'] = 'Click derecho en un comentario para copiarlo a la Listarápida';
$string['emptysubmission'] = 'Vaciar envío';
$string['enabled'] = 'Retroalimentación en PDF';
$string['enabled_help'] = 'Esto permite  hacer anotaciones en línea a los PDFs (enviados mediante el tipo de envío de PDFs) y permite regresarles el trabajo con anotaciones a los estudiantes.';
$string['eraseicon'] = 'e - eliminar lineas y formas';
$string['errorgenerateimage'] = 'No se pudo generar imagen - detalles: {$a}';
$string['errormessage'] = 'Mensaje de error:';
$string['errornosubmission'] = 'Intentando crear imagen para envío no-existente';
$string['errornosubmission2'] = 'No se pudo encontrar envío en PDF';
$string['errortempfolder'] = 'No se pudo crear carpeta temporal';
$string['findcomments'] = 'Encontrar comentarios';
$string['findcommentsempty'] = 'Sin comentarios';
$string['freehandicon'] = 'f - líneas a mano libre';
$string['generateresponse'] = 'Generar archivo de respuesta';
$string['gspath'] = 'Ruta de Ghostscript';
$string['gspath2'] = 'En la mayoría de las instalaciones de Linux, esto puede dejrse en \'/usr/bin/gs\'.
En Windows será algo similar a  \'c:\\gs\\bin\\gswin32c.exe\' (asegúrese de que no haya espacios en la ruta - en caso necesario, copie los archivos  \'gswin32c.exe\' y \'gsdll32.dll\' hacia una carpeta nueva sin espacios en la ruta)';
$string['highlighticon'] = 'h - resaltar texto';
$string['imagefor'] = 'Archivos de imagen para {$a}';
$string['jsrequired'] = 'JavaScript debe estar activado en su navegador para que funcione la anotación de PDF';
$string['keyboardnext'] = 'n - página siguiente';
$string['keyboardprev'] = 'p - página anterior';
$string['linecolour'] = '{,} - color de línea';
$string['lineicon'] = 'l - líneas';
$string['missingannotationdata'] = 'Faltan datos de anotación';
$string['missingcommentdata'] = 'Faltan datos de comentario';
$string['missingquicklistdata'] = 'Faltan datos de lista rápida';
$string['next'] = 'Siguiente';
$string['nocomments'] = 'Sin comentarios';
$string['nogroup'] = 'Sin grupo';
$string['okagain'] = 'Elija OK para intentarlo nuevamente';
$string['openlinknewwindow'] = 'Abrir enlaces en ventana nueva';
$string['opennewwindow'] = 'Abrir esta página en una ventana nueva';
$string['ovalicon'] = 'o - óvalos';
$string['pagenumber'] = 'Número de página';
$string['pagenumbertoobig'] = 'El número de página solicitado es mayor que el total de páginas ({$a->pageno} > {$a->pagecount})';
$string['pagenumbertoosmall'] = 'El número de página solicitado es demasiado pequeño (<1)';
$string['pdf'] = 'Retroalimentación en PDF';
$string['pluginname'] = 'Retroalimentación en PDF';
$string['previous'] = 'Previo';
$string['previousnone'] = 'Ninguno/Nada';
$string['quicklist'] = 'Listarápida de Comentarios';
$string['rectangleicon'] = 'r - rectángulos';
$string['resend'] = 'Re-enviar';
$string['responsefor'] = 'Archivo de respuesta para {$a}';
$string['responseok'] = 'Archivo de respuesta generado';
$string['responseproblem'] = 'Hubo un problema al generar el archivo de respuesta';
$string['savedraft'] = 'Guardar anotaciones en borrador';
$string['servercommfailed'] = 'Falló la comunicación con el servidor - ¿desea volver a enviar el mensaje?';
$string['showpreviousassignment'] = 'Mostrar envío previo';
$string['stamp'] = 'Elegir estampa (sello)';
$string['stampicon'] = 's - sello (estampado)';
$string['test_doesnotexist'] = 'La ruta a Ghostscript apunta hacia un archivo inexistente';
$string['test_empty'] = 'La ruta a Ghostscript está vacía - por favor escriba la rura correcta';
$string['testgs'] = 'Probar ruta a Ghostscript';
$string['test_isdir'] = 'La ruta a Ghostscript apunta hacia una carpeta; por favor incluya el programa ghostscript en la ruta que especifique';
$string['test_notestfile'] = 'Falta el PDF de prueba';
$string['test_notexecutable'] = 'La ruta a Ghostscript apunta hacia un archivo que no es ejecutable';
$string['test_ok'] = 'La ruta a Ghostscript parece estar OK - por favor revise que pueda ver el mensaje dentro de la imagen inferior';
$string['viewresponse'] = 'Ver respuesta en línea';
