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
 * Strings for component 'amanote', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   amanote
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amanote:addinstance'] = 'Añadir un nuevo archivo anotable';
$string['amanotecontent'] = 'Archivos y subcarpetas';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['amanote:view'] = 'Abrir archivo anotable';
$string['autosaveperiod'] = 'Período de auto-guardar';
$string['autosaveperiod_help'] = 'Configurar el período de tiempo en minutos entre los guardados automáticos (min.: 1, max.: 30). El configurar el período a 0 significa sin auto-guardado.';
$string['cannotcreatetoken'] = 'Abrir en Amanote';
$string['cannotcreatetoken_help'] = 'Usted no tiene los permisos para abrir el documento en Amanote.';
$string['clicktoamanote'] = 'Abrir en Amanote';
$string['clicktodownloadfile'] = 'Descargar archivo PDF';
$string['clicktodownloadnotes'] = 'Descargar archivo anotado';
$string['clicktoopen'] = 'Abrir en nueva pestaña';
$string['dnduploadamanote'] = 'Crear archivo anotable';
$string['downloadfile'] = 'Descargar';
$string['guestsarenotallowed'] = 'Abrir en Amanote';
$string['guestsarenotallowed_help'] = 'Los usuarios invitados no tienen permitido abrir un recurso en Amanote. Por favor ingrese al sitio para acceder a esta característica.';
$string['importantinformationdescription'] = 'Para que el módulo funcione adecuadamente, por favor revise que se cumplan los siguientes requisitos en su sitio Moodle:

1. Los servicios web están habilitados (Administración del sitio > Características avanzadas)

2. *Servicio web de Moodle mobile* está habilitado (Administración del sitio > Plugins > Servicios web > Servicios externos)

3. protocolo REST está activado (Administración del sitio > Plugins > Servicios web > Gestionar protocolos)

4. Capacidad *webservice/rest:use* está permitida para *usuarios autenticados* (Administración del sitio > Usuarios > Permisos > Definir Roles > Usuarios autenticados > gestionar roles)';
$string['importantinformationheading'] = 'Información importante sobre instalación';
$string['modifieddate'] = 'Modificado {$a}';
$string['modulename'] = 'Archivo anotable';
$string['modulename_help'] = 'Un archivo anotado es un recurso del curso (PDF) que los estudiantes pueden abrir en Amanote© para tomar notas (apuntes) claras y estructuradas en él.

Los estudiantes tiene la posibilidad de:

* Abrir el recurso del curso en una nueva pestaña del navegador
* Descargar el recurso del curso en su computadora
* Abrir el recurso del curso en Amanote© y comenzar a tomar notas (escribir apuntes)

Cuando los estudiantes abren el recurso del curso en Amanote©, ellos tienen la habilidad para iniciar una toma de notas (escritura de apuntes). Sus notas están enlazadas a las diferentes páginas del documento. Más aun, ellos pueden enriquecer sus notas con anotaciones, dibujos, fórmulas, imágenes, resaltado en las imágenes, etc.

Cuando los estudiantes guarden sus notas, éstas son guardadas adentro del recurso en su espacio personal. La siguiente vez que abran el recurso, ellos tendrán sus notas de vuelta.';
$string['modulenameplural'] = 'Archivos anotables';
$string['nonotestodownload'] = 'Descargar archivo anotado';
$string['nonotestodownload_help'] = 'Usted aun no tiene notas guardadas para este documento.';
$string['openinamanote'] = 'Abrir en Amanote';
$string['openinamanote_help'] = 'El abrir el documento en Amanote le permite iniciar o continuar una toma de notas (toma de apuntes).';
$string['openstatistics'] = 'Abrir estadísticas';
$string['openstatistics_help'] = 'Esto le da accceso a las estadísticas de uso del estudiante y sus retroalimentaciones en este recurso.';
$string['pluginadministration'] = 'Administración del módulo Amanote';
$string['pluginname'] = 'Amanote';
$string['printintro'] = 'Mostrar descripción del recurso';
$string['printintroexplain'] = '¿Mostrar descripción del recurso debajo del contenido?';
$string['privacy:metadata'] = 'Para poder integrarse con Amanote, necesitan enviarse algunos datos del usuario a la aplicación del cliente de Amanote (sistema remoto)';
$string['privacy:metadata:email'] = 'El Email del usuario es enviado al sistema remoto para permitir una mejor experiencia del usuario (compartir nota, notificación, etc).';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario es enviado al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:subsystem:corefiles'] = 'Archivos (PDF,AMA) son almacenados usando el sistema de archivo de Moodle.';
$string['privacy:metadata:userid'] = 'El userid (id del usuario) es enviado desde Moodle  hacia Amanote para a acelerar el proceso de autenticación.';
$string['saveinprivate'] = 'Guardar notas en archivos privados';
$string['saveinprivate_help'] = 'Guardar el archivo anotado en los archivos privados del usuario. Esto permitirá al usuario regresar a notas la próxima vez que abra el archivo anotable en Amanote.';
$string['servicenotavailable'] = 'Abrir en Amanote';
$string['servicenotavailable_help'] = 'El servicio no está disponible. Por favor póngase en contacto con el administrador del sitio.';
$string['showdate'] = 'Mostrar fecha de subido/modificado';
$string['showdate_desc'] = '¿Mostrar fecha de subido/modificado en página del curso?';
$string['showdate_help'] = 'Muestra los datos de subido/modificado junto a enlaces hacia el recurso.';
$string['showsize'] = 'Mostrar tamaño';
$string['showsize_desc'] = '¿Mostrar tamaño del archivo en página del curso?';
$string['showsize_help'] = 'Muestra el tamaño del archivo, como por ejemplo \'3.1 MB\', junto a enlaces hacia el recurso.';
$string['statisticsbutton'] = 'Abrir Analítica del Aprendizaje';
$string['unexpectederror'] = 'Abrir en Amanote';
$string['unexpectederror_help'] = 'Ha ocurrido un error inesperado; el recurso no puede ser abierto en Amanote. Por favor póngase en contacto con el administrador del sitio.';
$string['unsecureconnection'] = '¡Advertencia! Su conexión no es segura.';
$string['uploadeddate'] = 'Subido {$a}';
