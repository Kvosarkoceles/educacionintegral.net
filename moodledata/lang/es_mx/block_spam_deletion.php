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
 * Strings for component 'block_spam_deletion', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   block_spam_deletion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountsuspended'] = 'Su cuenta ha sido suspendida, porque nuestro sistema de prevención de SPAM la ha marcado como que posiblemente pertenezca a un spammer. SI esto fuese un error, mande un Email a helen@moodle.org copiando y pegando su intento de publicación en el correo.';
$string['accountsuspendedtitle'] = 'Cuenta suspendida';
$string['akismetaccountage'] = 'Edad de cuenta de usuario Akismet';
$string['akismetaccountagedesc'] = 'Saltar deteccción de SPAM akismet en publicaciones de cuentas de usuarios más antiguas de este valor.';
$string['akismetkey'] = 'Clave API Akismet';
$string['akismetreports'] = 'Reportes Akismet: {$a}';
$string['alreadyreported'] = 'Usted ya ha reportado este contenido como spam.';
$string['badwords'] = 'diet,viagra,football,soccer,live,match,señor,premio,sorteo';
$string['badwordslist'] = 'Lista personalizada  de palabras SPAM';
$string['badwordslistdesc'] = 'Una lista separada por comas de palabras usadas para identificar SPAM';
$string['blockedspamdescription'] = 'Cuenta suspendida {$a} después de ser bloqueada para publicar.';
$string['cannotdelete'] = 'No puede eliminarse contenido de esta cuenta suspendida.';
$string['confirmdelete'] = 'Eliminar spammer';
$string['confirmdeletemsg'] = '¿Está Usted seguro de querer marcar a <strong>{$a->firstname} {$a->lastname} ({$a->username})</strong> como spammer? Los datos pertenecientes a este usuario serán vaciados o removidos.';
$string['confirmspamreportmsg'] = '¿Está seguro de querer reportar a este contenido como spam?';
$string['countcomment'] = 'Comentarios: {$a}';
$string['countforum'] = 'Publicaciones de foros: {$a}';
$string['countmessageread'] = 'Mensajes leídos: {$a}';
$string['countmessageunread'] = 'Mensajes no leídos: {$a}';
$string['counttags'] = 'Marcas únicas: {$a}';
$string['deleteandreporttoakismet'] = 'Eliminar usuario y guardar contenido para reporte akismet';
$string['deletebutton'] = 'Eliminar spammer';
$string['eventspammerdeleted'] = 'Spammer eliminado';
$string['invalidcharspercentage'] = 'Porcentaje de caracteres inválidos permitidos';
$string['invalidcharspercentagedesc'] = 'Si una publicación contiene más de cierto porcentaje de caracteres inválidos (por ejemplo, caracteres coreanos en un curso de español), será bloqueada.';
$string['messageblocked'] = 'Su publicación en foro ha sido bloqueada, porque nuestro sistema de prevención de SPAM la ha marcado como que posiblemente contenga SPAM. Si este no fuera el caso, por favor mande un Email a helen@moodle.org copiando y pegando su publicación en el Email.';
$string['messageblockedtitle'] = '¡SPAM potencial detectado!';
$string['messageprovider:spamreport'] = 'Reporte de SPAM';
$string['notrecentlyaccessed'] = '¡Precaución! LA fecha del primer acceso de esta cuenta es de hace más de un mes. Asegúrese doblemente de que realmente sea un spammer.';
$string['pluginname'] = 'Eliminación de spam';
$string['postthrottlecount'] = 'Límite de publicaciones';
$string['postthrottlecountdesc'] = 'Número de publicaciones que los nuevos usuarios tienen permitidas crear en duración configurada antes de que sean bloqueados.';
$string['postthrottleduration'] = 'Duración límite publicación';
$string['postthrottledurationdesc'] = 'Duración a buscar en publicaciones al bloquear.';
$string['reportasspam'] = 'Reportar como SPAM';
$string['reportcontentasspam'] = 'Reportar contenido como SPAM';
$string['spam_deletion:addinstance'] = 'Añadir bloque de eliminación de spammer';
$string['spam_deletion:spamdelete'] = 'Eliminar SPAM';
$string['spam_deletion:viewspamreport'] = 'Ver reportes de SPAM';
$string['spamdescription'] = 'Spammer - SPAM eliminado y cuenta bloqueada {$a}';
$string['spamreportmessage'] = '{$a->spammer} puede ser un spammer.
Ver reporte de SPAM en {$a->url}';
$string['spamreportmessagetitle'] = '{$a->spammer} puede ser un spammer.';
$string['spamreports'] = 'Reportes de spam: {$a}';
$string['thanksspamrecorded'] = 'Gracias, su reporte de spam ha sido registrado';
$string['totalcount'] = 'Registros totales';
$string['unknowncomponent'] = 'Componente de comentario no-soportado: {$a}';
