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
 * Strings for component 'tool_ally', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_ally
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminurl'] = 'Invocar URL';
$string['adminurldesc'] = 'La URL para invocar LTI usada para acceder al reporte de Accesibilidad.';
$string['allyclientconfig'] = 'Configuración de Ally';
$string['ally:clientconfig'] = 'Acceder a, y actualizar la configuración del cliente';
$string['ally:viewlogs'] = 'Visor de bitácoras Ally';
$string['autoconfigapicall'] = 'Usted puede probar que está funcionando el servicio web vía la siguiente URL:';
$string['autoconfigsuccess'] = 'Éxito - el servicio web Ally ha sido automáticamente configurado.';
$string['autoconfigtoken'] = 'El token) de servicio web es como sigue:';
$string['autoconfigure'] = 'Auto configurar servicio web Ally';
$string['autoconfigureconfirmation'] = 'Automaticamente crear el usuario y rol de servicio web para ally y habilitar el servicio web. Las siguientes acciones serán realizadas: <ul><li>crear un rol titulado \'ally_webservice\' y un usuario con el nombre_de_usuario \'ally_webuser\'</li><li>añadir al usuario \'ally_webuser\' al rol \'ally_webservice\' </li><li>habilitar servicios web </li><li>habilitar el protocolo rest de servicio web </li><li>habilitar el servicio web </li><li>crear un token para la cuenta \'ally_webuser\' </li></ul>';
$string['autoconfiguredesc'] = 'Automáticamente crear rol de servicio web y usuario para Ally.';
$string['cachedef_request'] = 'Caché de solicitud de filtro Ally';
$string['clientid'] = 'ID del cliente';
$string['clientiddesc'] = 'La ID del cliente Ally';
$string['code'] = 'Código';
$string['contentauthors'] = 'Autores del contenido';
$string['contentauthorsdesc'] = 'Los administradores y usuarios asignados a estos roles seleccionados tendrán evaluados para accesibilidad sus archivos que hayan subido a cursos. A los archivos se les da una valoración de accesibilidad. Valoraciones bajas significan que el archivo necesita cambios para hacerlo más accesible.';
$string['contentupdatestask'] = 'Trabajo de actualizaciones de contenido';
$string['courseupdatestask'] = 'Empujar eventos del curso hacia ally';
$string['curlerror'] = 'Error cURL : {$a}';
$string['curlinvalidhttpcode'] = 'Código de estatus HTTP inválido: {$a}';
$string['curlnohttpcode'] = 'No se puede verificar código de estatus HTTP';
$string['error:componentcontentnotfound'] = 'Contenido no encontrado para {$a}';
$string['error:invalidcomponentident'] = 'Identificador inválido de componente {$a}';
$string['error:pluginfilequestiononly'] = 'Solamente componentes de pregunta son soportados para esta URL.';
$string['error:wstokenmissing'] = 'Falta eñ token de servicio web. ¿Posiblemente un administrador necesite ejecutar la auto configuración ?';
$string['filecoursenotfound'] = 'El archivo pasado no pertenece a ningun curso';
$string['fileupdatestask'] = 'Actualizaciones de push de archivo a Ally';
$string['hidedata'] = 'Ocultar datos';
$string['hideexception'] = 'Ocultar excepción';
$string['hideexplanation'] = 'Ocultar explicación';
$string['id'] = 'ID';
$string['key'] = 'Clave';
$string['keydesc'] = 'La clave de consumidor LTI.';
$string['lessonanswertitle'] = 'Respuesta para lección "{$a}"';
$string['lessonresponsetitle'] = 'Respuesta para lección "{$a}"';
$string['level'] = 'Nivel';
$string['logger:addingconenttoqueue'] = 'Añadir contenido a la cola para empujar';
$string['logger:addingcourseevttoqueue'] = 'Añadir evento del curso a la cola para empujar';
$string['logger:annotationmoderror'] = 'Falló la anotación de contenido de módulo Ally.';
$string['logger:annotationmoderror_exp'] = 'El módulo no fue identificado correctamente.';
$string['logger:autoconfigfailureteachercap'] = 'Falló al asignar una capacidad de arquetipo de profesor al rol ally_webservice.';
$string['logger:autoconfigfailureteachercap_exp'] = '<br>Capacidad: {$a->cap}<br>Permiso: {$a->permission}';
$string['logger:cmiderraticpremoddelete'] = 'IDdel módulo del curso tiene problemas pre-eliminándolo.';
$string['logger:cmiderraticpremoddelete_exp'] = 'El módulo no fue identificado correctamente, ya sea porque no existe debido a eliminación de la sección, o porque hay otro factor que disparó el enganche de eliminación y que no se encontró.';
$string['logger:cmidresolutionfailure'] = 'No se pudo obtener la ID del módulo del curso';
$string['logger:cmvisibilityresolutionfailure'] = 'No se pudo resolver la visibilidad del módulo del curso';
$string['logger:failedtogetcoursesectionname'] = 'No se pudo obtener el nombre de sección del curso';
$string['logger:moduleidresolutionfailure'] = 'No se pudo resolver la ID del módulo';
$string['logger:pushcontentliveskip'] = 'Falla al empujar contenido en vivo';
$string['logger:pushcontentliveskip_exp'] = 'Saltando push de archivo(s) vivo(s) debido a problemas de comunicación. Push de archivo vivo será restaurado cuando el trabajo de actualizaciones de contenido sea exitoso. Por favor, revise su configuración.';
$string['logger:pushcontentserror'] = 'Empuje fallido a \'end points\' de ally';
$string['logger:pushcontentserror_exp'] = 'Errores asociados con actualizaciones de contenido empujadas a servicios Ally.';
$string['logger:pushcontentsuccess'] = 'Empuje exitoso de contenidos a \'end point\' de ally';
$string['logger:pushcourseerror'] = 'Falla al empujar evento de curso en vivo';
$string['logger:pushcourseliveskip'] = 'Falla al empujar evento de curso en vivo';
$string['logger:pushcourseliveskip_exp'] = 'Saltando push de archivo(s) vivo(s) debido a problemas de comunicación. Push de archivo vivo será restaurado cuando el trabajo de actualizaciones de eventos de curso sea exitoso. Por favor, revise su configuración.';
$string['logger:pushcourseserror'] = 'Empuje fallido a \'end point\' de ally';
$string['logger:pushcourseserror_exp'] = 'Errores asociados con empuje de actualizaciones de curso a servicios Ally.';
$string['logger:pushcoursesuccess'] = 'Empuje exitoso de evento(s) de curso a \'end point\' de ally';
$string['logger:pushfileliveskip'] = 'Falla de empuje de archivo en vivo';
$string['logger:pushfileliveskip_exp'] = 'Saltando push de archivo(s) vivo(s) debido a problemas de comunicación. Push de archivo vivo será restaurado cuando el trabajo de actualizaciones sea exitoso. Por favor, revise su configuración.';
$string['logger:pushfileserror'] = 'Empuje fallido a \'end point\' de ally';
$string['logger:pushfileserror_exp'] = 'Errores asociados con actualizaciones de contenido empujadas a servicios Ally.';
$string['logger:pushfilesuccess'] = 'Empuje exitoso  de archivo(s) al \'end point\' de ally';
$string['logger:pushtoallyfail'] = 'Empuje fallido al \'end point\' de ally';
$string['logger:pushtoallysuccess'] = 'Empuje exitoso al \'end point\' de ally';
$string['logger:servicefailure'] = 'Falló al consumir servicio';
$string['logger:servicefailure_exp'] = '<br>Clase: {$a->class}<br>Paráms: {$a->params}';
$string['loglevel:all'] = 'Todo';
$string['loglevel:light'] = 'Ligero';
$string['loglevel:medium'] = 'Medio';
$string['loglevel:none'] = 'Ninguno';
$string['logrange'] = 'Rango de bitácora';
$string['logs'] = 'Bitácoras Ally';
$string['message'] = 'Mensaje';
$string['pluginname'] = 'Ally';
$string['privacy:metadata:files:action'] = 'La acción tomada con el archivo, por ejemplo: creado, actualizado o eliminado.';
$string['privacy:metadata:files:contenthash'] = 'El hash del contenido del archivo para poder determinar singularidad.';
$string['privacy:metadata:files:courseid'] = 'La ID del curso al cual pertenece el archivo.';
$string['privacy:metadata:files:externalpurpose'] = 'Para poder integrarse con Ally, archivos necesitan ser intercambiados con Ally.';
$string['privacy:metadata:files:filecontents'] = 'El auténtico contenido del archivo es enviado a Ally para evaluarlo para accesibilidad.';
$string['privacy:metadata:files:mimetype'] = 'El tipo MIME, por ejemplo: texto/simple, imagen/jpeg, etc.';
$string['privacy:metadata:files:pathnamehash'] = 'El hash del nombre de la ruta del archivo para identificarla inequívocamente.';
$string['privacy:metadata:files:timemodified'] = 'La hora de cuando fue modificado el campo por última vez.';
$string['pushfilessummary'] = 'Resumen de actualizaciones de archivos Ally.';
$string['pushfilessummary:explanation'] = 'Resumen de actualizaciones de archivos enviados a Ally.';
$string['pushurl'] = 'URL para actualizar archivo';
$string['pushurldesc'] = 'Notificaciones de push acerca de actualizaciones a esta URL.';
$string['queuesendmessagesfailure'] = 'Ocurrió un error al enviarle mensajes al AWS SQS. Datos del error: $a';
$string['secret'] = 'Secreto';
$string['secretdesc'] = 'El secreto LTI.';
$string['section'] = 'Sección {$a}';
$string['showdata'] = 'Mostrar datos';
$string['showexception'] = 'Mostrar excepción';
$string['showexplanation'] = 'Mostrar explicación';
$string['usercapabilitymissing'] = 'El usuario proporcionado no tiene la capacidad para eliminar este archivo.';
