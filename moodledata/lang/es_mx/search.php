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
 * Strings for component 'search', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Búsqueda avanzada';
$string['all'] = 'Todos';
$string['allareas'] = 'Todas las áreas';
$string['allcourses'] = 'Todos los cursos';
$string['allusers'] = 'Todos los usuarios';
$string['author'] = 'Autor';
$string['authorname'] = 'Nombre del autor';
$string['back'] = 'Regresar';
$string['beadmin'] = 'Usted necesita ser un administrador para usar esta página';
$string['checkdb'] = 'Revisar BasedeDatos';
$string['checkdbadvice'] = 'Revisar si hubiera problemas en BasedeDatos';
$string['checkdir'] = 'Revisar dir';
$string['checkdiradvice'] = 'Asegurarse que el directorio de datos existe y se puede escribir en el.';
$string['commenton'] = 'Comentar sobre';
$string['confirm_delete'] = '¿Está seguro de querer eliminar el índice para {$a}? Hasta que esté indexada el área de búsqueda, los usuarios no podrán obtener resultados de búsqueda de esta área.';
$string['confirm_deleteall'] = '¿Está seguro de querer eliminar ahorita todos los contenidos indexados? Hasta que el sitio sea indexado nuevamente, los usuarios no obtendrán resultados de búsquedas.';
$string['confirm_indexall'] = '¿Está seguro de querer actualizar ahorita contenidos indexados? Si muchos contenidos necesitan indexarse, esto puede tomar mucho tiempo. Para servidores activos, Usted normalmente dejaría la indexación para el trabajo agendado \'Global search indexing\' (Indexación de búsqueda global).';
$string['confirm_reindexall'] = '¿Está seguro de querer re-indexar ahorita todos los contenidos del sitio? Si su sitio tiene muchos contenidos, esto tomará mucho tiempo, y los usuarios no obtendrán resultados completos de búsquedas hasta que se complete.';
$string['core-all'] = 'Todos';
$string['core-course-content'] = 'Contenido del curso';
$string['core-courses'] = 'Cursos';
$string['core-other'] = 'Otros';
$string['core-users'] = 'Usuarios';
$string['createanindex'] = 'crear un índice';
$string['createdon'] = 'Creado en';
$string['database'] = 'BasedeDatos';
$string['databasestate'] = 'Estado de indexación de BasedeDatos';
$string['datadirectory'] = 'Directorio de Datos';
$string['deleteindex'] = 'Eliminar índice {$a}';
$string['deletionsinindex'] = 'Borrados en índice';
$string['docmodifiedon'] = 'Modificación más reciente en {$a}';
$string['doctype'] = 'Tipo de documento';
$string['doctypenotsupported'] = 'El tipo de documento especificado todavía no está soportado';
$string['documents'] = 'documentos';
$string['documentsfor'] = 'Documentos para';
$string['documentsindatabase'] = 'Documentos en BasedeDatos';
$string['documentsinindex'] = 'Documentos en índice';
$string['duration'] = 'Duración';
$string['emptydatabaseerror'] = 'No está presente la tabla de la base de datos o no contiene registros de índice.';
$string['enginenotfound'] = 'Motor {$a} no encontrado.';
$string['enginenotinstalled'] = 'El motor {$a} no está instalado.';
$string['enginenotselected'] = 'Usted no ha seleccionado un motor de búsqueda.';
$string['engineserverstatus'] = 'El motor de búsqueda no está disponible. Por favor póngase en contacto con su administrador.';
$string['enteryoursearchquery'] = 'Escriba su búsqueda';
$string['errorareanotavailable'] = 'El área de búsqueda {$a} no está disponible.';
$string['error_indexing'] = 'Ocurrió un error al indexar';
$string['errors'] = 'Errores';
$string['everywhere'] = 'En cualquier lado donde Usted pueda acceder';
$string['filesinindexdirectory'] = 'Archivos en el directorio índice';
$string['filterheader'] = 'Filtro';
$string['fromtime'] = 'Modificado después de';
$string['globalsearch'] = 'Búsqueda global';
$string['globalsearchdisabled'] = 'La búsqueda global no está activada.';
$string['gradualreindex'] = 're-indexar gradual {$a}';
$string['gradualreindex_confirm'] = '¿Está seguro de querer re-indexar {$a}? Esto podría tardar bastante tiempo, aunque los datos existentes permanecerán disponibles durante la re-indexación.';
$string['gradualreindex_queued'] = 'Se ha solicitado re-indexado para {$a->name} ({$a->count} contextos). Este re-indexado será efectuada por el trabajo agendado  ‘Global search indexing’ .';
$string['incourse'] = 'en ourso {$a}';
$string['index'] = 'Índice';
$string['indexwhendisabledfullnotice'] = 'Actualmente no está permitida la indexación cuando la búsqueda está deshabilitada. Para habilitarla, por favor vea la configuración  <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'La indexación no está disponible.';
$string['invalidindexerror'] = 'El directorio índice contiene un índice no válido o está vacío.';
$string['ittook'] = 'Toma';
$string['matchingfile'] = 'Apareado desde archivo <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Apareado desde archivos:';
$string['mycoursesonly'] = 'Solamente mis cursos';
$string['next'] = 'Siguiente';
$string['noindexmessage'] = 'Admin: Parece no haber índice de búsqueda. Por favor';
$string['noresults'] = 'Sin resultados';
$string['normalsearch'] = 'Búsqueda normal';
$string['notitle'] = 'Sin título';
$string['openedon'] = 'abierto el';
$string['optimize'] = 'Optimizar';
$string['order'] = 'Ordenamiento de resultados';
$string['order_location'] = 'Priorizar asuntos relacionados con {$a}';
$string['order_relevance'] = 'Los resultados más relevantes primero';
$string['priority'] = 'Prioridad';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Re-indexado';
$string['privacy:metadata'] = 'El subsistema de búsqueda no almacena ningún dato personal.';
$string['progress'] = 'Progreso';
$string['queryerror'] = 'La consulta que Usted proporcionó no pudo ser interpretada por el motor de búsqueda: {$a}';
$string['queueheading'] = 'Cola adicional de indexado ({$a} ítems)';
$string['resultsreturnedfor'] = 'resultados devueltos para';
$string['runindexer'] = 'Ejecutar indexador (real)';
$string['runindexertest'] = 'Ejecutar prueba de indexador';
$string['schemanotupdated'] = 'El esquema (schema) de búsqueda esta desactualizado.';
$string['schemaversionunknown'] = 'El motor de búsqueda no sabe acerca de la versión actual del esquema (schema).';
$string['score'] = 'Puntuación';
$string['search'] = 'Búsqueda';
$string['searcharea'] = 'Área de búsqueda';
$string['searchareacategories'] = 'Categorías de área de búsqueda';
$string['search:course'] = 'Cursos';
$string['search:customfield'] = 'Campos personalizados del curso';
$string['searching'] = 'Buscando en ...';
$string['search:message_received'] = 'Mensajes - recibidos';
$string['search:message_sent'] = 'Mensajes - enviados';
$string['search:mycourse'] = 'Mis cursos';
$string['searchnotpermitted'] = 'A Usted no se le permite hacer una búsqueda';
$string['search:section'] = 'Secciones de curso';
$string['searchsetupdescription'] = 'Los pasos siguientes le ayudarán a configurar la búsqueda global en Moodle.';
$string['search:user'] = 'Usuarios';
$string['searchwithin'] = 'Buscar dentro de';
$string['seconds'] = 'segundos';
$string['solutions'] = 'Soluciones';
$string['statistics'] = 'Estadísticas';
$string['step'] = 'Paso';
$string['thesewordshelpimproverank'] = 'Estas palabras ayudan a mejorar el rango';
$string['thesewordsmustappear'] = 'Estas palabras deben aparecer';
$string['thesewordsmustnotappear'] = 'Estas palabras no deben aparecer';
$string['title'] = 'Título';
$string['tofetchtheseresults'] = 'para rendir estos resultados';
$string['totalsize'] = 'Tamaño total';
$string['totime'] = 'Modificado antes de';
$string['type'] = 'Tipo';
$string['uncompleteindexingerror'] = 'El indexado no se completó con éxito: por favor, reinícielo.';
$string['versiontoolow'] = 'Lo sentimos, la búsqueda global requiere PHP 5.0 o superior';
$string['viewresultincontext'] = 'Ver sus resultados en contexto';
$string['wordsintitle'] = 'Palabras en el título';
