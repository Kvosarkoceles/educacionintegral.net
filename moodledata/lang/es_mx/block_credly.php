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
 * Strings for component 'block_credly', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   block_credly
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewbadge'] = 'Añadir una nueva insignia';
$string['apikey'] = 'CLAVE API';
$string['apikeydesc'] = 'La clave API como fue proporcionada por Credly';
$string['apipassword'] = 'Contraseña';
$string['apipassworddesc'] = 'La contraseña Credly para el usuario que autentica use llamadas API que necesitan fichas (tokens) de acceso';
$string['apisecret'] = 'Secreto API';
$string['apisecretdesc'] = 'El secreto API proporcionado por Credly';
$string['apiuser'] = 'Nombre_de_usuario';
$string['apiuserdesc'] = 'El nombre_de_usuario Credly para el usuario que autentica use llamadas API que necesitan fichas (tokens) de acceso';
$string['badgeimage'] = 'Imagen de la insignia';
$string['badgeimage_help'] = 'El archivo de imagen que Usted quiere usar como la imagen de la insignia. Lo mejor es usar una imagen de dimensiones cuadradas. El tamaño máximo del archivo es 1 MB';
$string['created_at'] = 'Fecha de creación';
$string['createnewbadge'] = 'Crear una nueva insignia';
$string['credly:addinstance'] = 'Añadir un nuevo bloque Credly';
$string['credlybadges'] = 'Insignias Credly';
$string['credlyerrorresponse'] = 'El servidor credly srespondió con el siguiente error: {$a}';
$string['credly:grantbadge'] = 'Otorgar una insignia credly a un usuario';
$string['criteria'] = 'Criterios';
$string['criteria_help'] = 'Criterios para la nueva insignia (hasta 500 caracteres)';
$string['description'] = 'Descripción';
$string['description_help'] = 'Una descripción extensa (hasta 500 caracteres) de la insignia';
$string['editbadge'] = 'Editar una insignia';
$string['errorexpiresin'] = 'El valor de caducidad debería ser un número entero entre 0 y {$a}.';
$string['errorfetchingbadgeinfo'] = 'El sistema encontró un error al tratar de obtener la insignia de Credly';
$string['expires_in'] = 'Caduca después de cuantos segundos';
$string['expires_in_help'] = 'Número de segundos, a partir del momento que se emite la insignia, hasta que caduca. Un valor de 0 significa que nunca caduca.';
$string['fetcherror'] = 'El sistema encontró un error al tratar de recuperar la información de la insignia.';
$string['grantbadge'] = 'Otorgar una insignia';
$string['grantbadgerequired'] = 'Usted tiene que seleccionar una insignia a otorgar.';
$string['grantedtouser'] = 'La insignia fue emitida y el usuario fue notificado. El usuario podría todavía necesitar aceptar la insignia, dependiendo de las configuraciones de la cuenta Credly del usuario';
$string['granterror'] = 'El sistema encontró un error al tratar de otorgar la insignia.';
$string['granttocandidates'] = 'Todos los estudiantes';
$string['granttocandidatesmatching'] = 'Estudiantes que coinciden con "{$a}"';
$string['grantuserrequired'] = 'Usted necesita seleccionar a un usuario a quien otorgarle la insignia.';
$string['id'] = 'ID';
$string['image_preview'] = 'Vista previa de la imagen';
$string['image_preview_current'] = 'Vista previa de la imagen actual';
$string['image_url'] = 'URL de la imagen';
$string['is_claimable'] = 'Puede obtenerse';
$string['is_giveable'] = '¿Pueden dar esta insignia otras personas?';
$string['is_giveable_help'] = 'Si es que la nueva insignia puede darse por miembros Credly diferentes del creador';
$string['issuebadge'] = 'Emitir insignia';
$string['managebadges'] = 'Gestionar insignias';
$string['missingbadgeimage'] = 'Se requiere una imagen de la insignia';
$string['missingtitle'] = 'Se requiere un título';
$string['mybadges'] = 'Mis insignias';
$string['noearnedbadges'] = 'Usted aun no ha ganado ninguna insignia.';
$string['notconfigured'] = 'El plugin del bloque credly no está configurado apropiadamente. Configure los parámetros <a href="{$a->configureurl}">aquí</a>.';
$string['orgid'] = 'ID de la organización';
$string['orgiddesc'] = 'Si Usted está gestionando y otorgando insignias a nombre de una organización, configure esto a la ID numérica de la cuenta de la organización en Credly. Usted puede encontrar esta información al acceder a la cuenta de la organización y hacer clic en "View Profile". . Usted será llevado a una URL como por ejemplo http://credly.com/u/<<i>numerical id</i>> y Usted puede usar la ID mosntrada en la URL. NOTA: Si Usted está usando una organización, Usted tiene que asegurarse de que la cuenta que está usando para nombre_de_usuario/contraseña es, ya sea un propietario o un mánager de la organización.';
$string['pluginname'] = 'Credly';
$string['selectbadgeaward'] = 'Seleccionar insignia a otorgar';
$string['short_description'] = 'Descripción breve';
$string['short_description_help'] = 'Una descripción breve para la nueva insignia (hasta 128 caracteres)';
$string['showinglatest'] = 'Sus {$a} insignias más recientes.';
$string['shownumlabel'] = 'Cuantas insignias mostrar';
$string['thumbnail'] = 'Imagen Miniatura';
$string['title'] = 'Título';
$string['title_help'] = 'El título de la nueva insignia (hasta 128 caracteres)';
$string['usecache'] = 'Usar caché';
$string['usecachedesc'] = 'Si es que se  habilitao no el cacheo (24 horas) de resultados API a la base de datos.Esto típicamente no es necesario ya que Credly ya proporciona límites apropiados. Esto está aquí principalmente como parte del código antiguo heredado.';
$string['viewallmy'] = 'Ver todas mis insignias';
$string['viewbadge'] = 'Ver insignia';
$string['viewincredly'] = 'ver en Credly';
