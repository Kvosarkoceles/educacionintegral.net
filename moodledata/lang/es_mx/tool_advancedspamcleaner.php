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
 * Strings for component 'tool_advancedspamcleaner', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   tool_advancedspamcleaner
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['akismetkey'] = 'Usar clave de  akismet';
$string['akismetkey_desc'] = 'Escriba la clave que le proporcionaron en  akismet.com';
$string['alreadyreported'] = 'Usted ya había reportado este contenido como spam';
$string['apilimit'] = 'Límite de API';
$string['apilimit_help'] = 'Número máximo de llamadas API a realizar (0 = ilimitadas)';
$string['blogpost'] = 'Publicación de blog';
$string['blogsummary'] = 'Resumen del blog';
$string['cannotdelete'] = 'No se puede eliminar el contenido para este usuario.';
$string['commment'] = 'Comentario';
$string['confirmdelete'] = 'Eliminar spammer';
$string['confirmdeletemsg'] = '¿Está Usted seguro de querer marcar a <strong>{$a->firstname} {$a->lastname} ({$a->username})</strong> como chatarrero (spammer)? Los datos pertenecientes a este usuario serán vaciados o removidos.';
$string['confirmspamreportmsg'] = '¿ Está Usted seguro de querer reportar este contenido como publicidad chatarra (SPAM) ?';
$string['countcomment'] = 'Comentarios: {$a}';
$string['countforum'] = 'Publicaciones en foro: {$a}';
$string['countmessageread'] = 'Mensajes leídos: {$a}';
$string['countmessageunread'] = 'Mensajes no leídos: {$a}';
$string['counttags'] = 'Marcas únicas: {$a}';
$string['datelimits'] = 'Límite de fecha';
$string['deletebutton'] = 'Desparecer al spammer';
$string['enddate'] = 'Fecha final';
$string['forummessage'] = 'Mensaje del foro';
$string['forumsubject'] = 'Asunto del foro';
$string['hitlimit'] = 'Límite de aciertos';
$string['hitlimit_help'] = 'Detener después de haber detectado esta cantidad de entradas de spam (0 = ilimitadas)';
$string['keywordstouse'] = 'Palabras clave a usar';
$string['limithit'] = 'Se alcanzó el límite impuesto. Los resultados que sigan puede que no estén completos.';
$string['limits'] = 'Límites';
$string['message'] = 'Mensaje';
$string['messageblocked'] = 'Su publicación ha sido bloqueada, porque nuestro sistema para prevención de publicidad chatarra la ha señalado como que posiblemente contenga publicidad chatarra (SPAM). Si no fuera este el caso, por favor vea  \'My post has been incorrectly flagged as containing spam\' in <a href="http://docs.moodle.org/en/Moodle.org_FAQ#My_post_has_been_incorrectly_flagged_as_containing_spam">http://docs.moodle.org/en/Moodle.org_FAQ</a>. Su mensaje está debajo por si necesita copiarlo y pegarlo.';
$string['messageblockedtitle'] = '¡SPAM potencial detectado!';
$string['messageprovider:spamreport'] = 'Reporte de spam';
$string['method'] = 'Método a usar';
$string['methodoptions'] = 'Opciones de método';
$string['methodused'] = 'Método de detección de spam usado: {$a}';
$string['missingkeywords'] = 'Las palabras clave no pueden estar vacías';
$string['missingmethod'] = 'El método a usar no puede estar vacío';
$string['missingscope'] = 'No se especificó el alcance para buscar';
$string['noakismetkey'] = 'Configurar clave API desde configuraciones antes de usar esta opción';
$string['notrecentlyaccessed'] = '¡ Tenga cuidado ! La fecha de primer acceso de esta cuenta es de hace más de un mes. Asegúrese doblemente de que realmente sea un chatarrero (spammer).';
$string['nukeuser'] = 'Destruir usuario';
$string['pluginname'] = 'Limpiador de spam avanzado';
$string['pluginpage'] = 'Página del plugin';
$string['pluginsettings'] = 'Configuraciones de sub-plugins del limpiador de spam avanzado para {$a}';
$string['reportasspam'] = 'Reportar como spam';
$string['reportcontentasspam'] = 'Reportar el contenido como spam';
$string['reportissue'] = 'Reportar un problema';
$string['searchblogs'] = 'Incluir blogs';
$string['searchcomments'] = 'Incluir comentarios';
$string['searchforums'] = 'Incluir foros';
$string['searchmsgs'] = 'Incluir mensajes';
$string['searchscope'] = 'Alcance de la búsqueda de spam';
$string['searchusers'] = 'Incluir perfiles de usuario';
$string['settingpage'] = 'Configuraciones del limpiador de spam avanzado';
$string['showstats'] = 'A las entradas siguientes se les revisó el SPAM : <br/> Blogs: {$a->blogs}, Perfiles de usuario: {$a->users}, Comentarios: {$a->comments}, Mensajes: {$a->msgs}, Publicaciones en Foros: {$a->forums} <br/>El tiempo empleado fue de {$a->time} segundos aproximadamente';
$string['spamauto'] = 'Auto-detectar spam empleando palabras clave de spam comunes';
$string['spamcannotdelete'] = 'No se puede eliminar a este usuario';
$string['spamcannotfinduser'] = 'No hay usuarios que coincidan con su búsqueda';
$string['spamcleanerintro'] = 'Este script le permite buscar en todos los perfiles de usuarios, comentarios, publicaciones en blog y foros y mensajes,  para encontrar ciertas cadenas de texto (de spam) y después borrar esas cuentas que obviamente fueron creadas por spammers.
   Usted puede buscar palabras clave múltiples empleando una lista separada por comas (por ejemplo: casino, porn, oferta) o usar un sistema de terceros para escanear su sitio (por ejemplo, Akismet)
   Por favor tenga en cuenta que esto puede demorar bastante, según sea su método de búsqueda. Use límites para reducir el espectro de la búsqueda.';
$string['spamcount'] = 'Conteo de spam';
$string['spamdeleteall'] = 'Eliminar todas estas cuentas de usuarios';
$string['spamdeleteallconfirm'] = '¿Está Usted seguro de querer eliminar esta entrada? Usted no podrá deshacer esto.';
$string['spamdeleteconfirm'] = '¿Está Usted seguro de querer eliminar esta entrada? Usted no podrá deshacer esto.';
$string['spam_deletion:addinstance'] = 'Añadir bloque para eliminar spam';
$string['spam_deletion:spamdelete'] = 'eliminar spam';
$string['spam_deletion:viewspamreport'] = 'Ver reportes de spam';
$string['spamdesc'] = 'Descripción';
$string['spamdescription'] = 'Spammer - spam detectado y cuenta bloqueada {$a}';
$string['spameg'] = 'por ejemplo: casino, porn, xxx';
$string['spamfromblog'] = 'De mensaje de blog:';
$string['spamfromcomments'] = 'De comentarios:';
$string['spamfromforumpost'] = 'De mensaje de foro:';
$string['spamfrommessages'] = 'De mensajes:';
$string['spaminvalidresult'] = 'Resultados desconocidos pero inválidos';
$string['spamoperation'] = 'Operación';
$string['spamreportmessage'] = '{$a->spammer} puede ser chatarrero (spammer).
Ver reportes de SPAM en {$a->url}';
$string['spamreportmessagetitle'] = '{$a->spammer} puede ser chatarrero (spammer)';
$string['spamreports'] = 'Reportes de publicidad chatarra (SPAM): {$a}';
$string['spamresult'] = 'Resultados de buscar en perfiles de usuario conteniendo:';
$string['spamsearch'] = 'Buscar spam';
$string['spamtext'] = 'Texto spam';
$string['spamtype'] = 'Tipo de spam';
$string['startdate'] = 'Fecha de inicio';
$string['thanksspamrecorded'] = 'Gracias, su reporte de SPAM ha sido grabado.';
$string['totalcount'] = 'Registros totales por este usuario:-';
$string['usedatestartlimit'] = 'Usar límite de fecha';
$string['usedatestartlimit_help'] = 'Habilitar correr la búsqueda de spam en entidades solamente en el rango de fechas seleccionado';
$string['usekeywords'] = 'Usar palabras claves escritas';
$string['uselimits'] = 'Usar límites';
$string['uselimits_help'] = 'Usar límites para reducir el uso de recursos<br /> (Observe que los límites no se usan en los métodos de auto-detección y palabras claves)';
$string['userdesc'] = 'Descripción del usuario';
