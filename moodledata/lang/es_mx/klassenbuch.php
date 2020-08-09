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
 * Strings for component 'klassenbuch', language 'es_mx', branch 'MOODLE_32_STABLE'
 *
 * @package   klassenbuch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Añadir nuevo capítulo';
$string['addnewfield'] = 'Añadir nuevo campo Klassenbuch';
$string['addsubscriber'] = 'Añadir';
$string['allowchoice'] = 'Permitirles a todos elegir';
$string['allowsallsubscribe'] = 'Todos pueden elegir suscribirse a este libro';
$string['attachment'] = 'Anexo(s)';
$string['attachments'] = 'Anexos';
$string['autosavedon'] = 'Autoguardado en';
$string['autosaveseconds'] = 'Autoguardar cada (segundos)';
$string['backtochapter'] = 'Regresar al capítulo';
$string['bynameondate'] = 'por {$a->name} en {$a->date}';
$string['chapter'] = 'Capítulo';
$string['chapters'] = 'Capítulos';
$string['chapterscount'] = 'Capítulos';
$string['chaptertitle'] = 'Título del capítulo';
$string['collapsesubchapters'] = 'Colapsar subcapítulos';
$string['confchapterdelete'] = '¿Realmente desea Usted eiminar este capítulo?';
$string['confchapterdeleteall'] = '¿Realmente desea Usted eiminar este capítulo y todos sus subcapítulos?';
$string['configreplytouser'] = 'Emails de notificación vienen del usuario que actualiza el libro; no vienen de la dirección de \'sin respuesta\'';
$string['content'] = 'Contenido';
$string['customfieldswarning'] = 'Actualmente no hay campos definidos para el módulo Klassenbuch - por favor, visite {$a->globalfieldslink} para configurarlos (esto también puede encontrarse mediante el enlace en {$a->settingslink}).';
$string['customtitles'] = 'Títulos personalizados';
$string['customtitles_help'] = 'Los títulos de capítulos se muestran automáticamente solamente en la Tabla de Contenidos.';
$string['disallowsubscribe'] = 'No está permitido suscribirse a este libro';
$string['duplicatenewchaptererror'] = 'Los capítulos nuevos ya están guardados - no pueden crearse duplicados';
$string['editingchapter'] = 'Editando capítulo';
$string['editsubscribersoff'] = 'Dejar de editar suscripciones';
$string['editsubscriberson'] = 'Editar suscripciones';
$string['errorchapter'] = 'Error al leer capítulo de libro.';
$string['eventchaptercreated'] = 'Capítulo creado';
$string['eventchapterdeleted'] = 'Capítulo eliminado';
$string['eventchapterupdated'] = 'CApítulo actualizado';
$string['eventchapterviewed'] = 'Capítulo visto';
$string['eventsubscriptioncreated'] = 'Suscripción Klassenbuch  creada';
$string['eventsubscriptiondeleted'] = 'Suscripción Klassenbuch  eliminada';
$string['everyonecannowchoose'] = 'Todos pueden elegir suscribirse a este libro';
$string['everyoneisnowsubscribed'] = 'Todos están ahora suscritos a este libro';
$string['everyoneissubscribed'] = 'Todos están suscritos';
$string['existingsubscribers'] = 'Suscriptores actuales';
$string['exportpdf'] = 'Exportar como PDF';
$string['faq'] = 'Klassenbuch   FAQ';
$string['faq_help'] = '*¿Porqué solamente dos niveles?*

Dos niveles son generalmente suficientes para todos los libros; tres niveles conducirían a documentos pobremente estructurados. El módulo de Libro está diseñado para la creación de materiales de estudio muti-página cortos. Usualmente es mejor usar formato PDF para documentos más largos. La manera más fácil de crear documentos PDF es con impresosras virtuales (vea <a href="http://sector7g.wurzel6.de/pdfcreator/index_en.htm" target="_blank">PDFCreator</a>,
<a href="http://fineprint.com/products/pdffactory/index.html" target="_blank">PDFFactory</a>,
<a href="http://www.adobe.com/products/acrobatstd/main.html" target="_blank">Adobe Acrobat</a>,
etc.).

*¿Pueden los estudiantes editar libros?*

Solamente los profesores pueden crear y editar libros. No hay planes paa implementar el que los estdiantes editen libros, pero alguien podría crear algo similar para los estudiantes (¿Portafolio?). La razón principal es mantener al módulo de Libro tan sencillo como sea posible.

*¿Cómo busco en los libros?*

Actualmente solo hay una forma: use la capacidad de buscar del navegador de Internet en la página para imprimir. La búsqueda global es ahora posible solamente en los Foros de Moodle. Sería lindo el tener búsqueda global para todos los recursos, incluyendo libros. ¿Algún voluntario?

*Mis capitulos no caben en una línea.*

Usted puede, o re-frasear sus títulos, o pedirle a su aministrador del sitio que cambie el ancho de la Tabla de Contenidos, la cual está definida globalmente para todos los libros en la página de configuración.';
$string['fieldtitle'] = 'Título del Campo';
$string['forcessubscribe'] = 'Este libro obliga a todos a suscribirse.';
$string['forcesubscribe'] = 'Todos estarán suscritos a este libro';
$string['globalfields'] = 'Campos Globales';
$string['globalfieldspage'] = 'la página de campos globales';
$string['globalsettingspage'] = 'La página de configuraciones de cambios globales de Klassenbuch';
$string['hiddenbydefault'] = 'Oculto por defecto';
$string['hiddentostudent'] = 'Oculto para el Estudiante';
$string['klassenbuch'] = 'Klassenbuch';
$string['klassenbuch:addinstance'] = 'Añadir nuevo Klassenbuch';
$string['klassenbuch:edit'] = 'Editar capítulos del libro';
$string['klassenbuch:initialsubscriptions'] = 'Inicalmente suscrito al libro';
$string['klassenbuch:managesubscriptions'] = 'Suscribir  des-suscribir a otros usuarios';
$string['klassenbuch:read'] = 'Leer libro';
$string['klassenbuchs'] = 'Klassenbuch';
$string['klassenbuch:viewhiddenchapters'] = 'Ver capítulos ocultos de libro';
$string['klassenbuch:viewsubscribers'] = 'Ver cuales usuarios están suscritos';
$string['mailsent'] = '{$a->count} participantes enviaron capítulo {$a->chapter}';
$string['manageglobalfields'] = 'Gestionar Campos Globales';
$string['missingfilemanagement'] = 'Querido usuario del módulo de libro; y supongo que Usted probablemente ya ha notado que no es posible eliminar o gestionar archivos usados en capítulos de Libro. Por favor vote en {$a} para lograr que se corrija; gracias. Petr Škoda';
$string['modulename'] = 'Klassenbuch';
$string['modulename_help'] = 'Klassenbuch  es un material simple de estudio multi-página.';
$string['modulenameplural'] = 'Klassenbuchs';
$string['navexit'] = 'Salir del libro';
$string['navnext'] = 'Siguiente';
$string['navprev'] = 'Anterior';
$string['newfieldtitle'] = 'Título del Nuevo Campo';
$string['nosubscribers'] = 'Nadie se ha suscrito a este libro';
$string['nownotsubscribed'] = '{$a->name} NO recibirá copias de este libro \'{$a->book}\' por Email.';
$string['nowsubscribed'] = '{$a->name} recibirá copias de este libro \'{$a->book}\' por Email.';
$string['numbering'] = 'Numeración de capítulo';
$string['numbering0'] = 'Nada';
$string['numbering1'] = 'Números';
$string['numbering2'] = 'Viñetas';
$string['numbering3'] = 'Indentación';
$string['numbering_help'] = '* Nada - los títulos de capítulo y subcapítulo no son formateados en absoluto; úselo si Usted quiere definir estilos de numeración especiales. Por ejemplo, letras: en el tipo de título de capítulo escriba "A Primer Capítulo", "A.1 Algún subcapítulo",...
* Números- capítulos y subcapítulos están numerados (1, 1.1, 1.2, 2, ...)
* Viñetas- los capítulos están indentados y mostrados con viñetas (bullets)
* Indentado - los subcapitulos están indentados';
$string['numberingoptions'] = 'Opciones para numeración disponibles';
$string['numberingoptions_help'] = 'Seleccionar opciones para numeración que deberían de estar disponibles al crear libros nuevos.';
$string['page-mod-klassenbuch-x'] = 'Cualquier página de módulo Klassenbuch';
$string['pluginadministration'] = 'Administración de Klassenbuch';
$string['pluginname'] = 'Klassenbuch';
$string['potentialsubscribers'] = 'Suscriptores potenciales';
$string['removesubscriber'] = 'Quitar';
$string['reply'] = 'Leer libro completo';
$string['replytouser'] = 'Emails de usuarios';
$string['send'] = 'Enviar';
$string['showall'] = 'Mostrar todos los usuarios';
$string['showclassplan'] = 'Mostrar plan de clase en menú';
$string['showsubscribers'] = 'Mostrar suscriptores';
$string['subchapter'] = 'Subcapítulo';
$string['subscribe'] = 'Yo quiero suscribirme a este libro';
$string['subscribers'] = 'Suscriptores';
$string['subscribersto'] = 'Suscriptores para \'{$a}\\';
$string['toc'] = 'Tabla de contenidos';
$string['top'] = 'superior';
$string['unsubscribe'] = 'Yo quiero des-suscribirme de este libro';
$string['viewclassplan'] = 'Ver Plan de Clase';
$string['withselectedfields'] = 'Con los Campos Seleccionados';
