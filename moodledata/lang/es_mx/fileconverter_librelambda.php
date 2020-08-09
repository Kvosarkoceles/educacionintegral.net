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
 * Strings for component 'fileconverter_librelambda', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   fileconverter_librelambda
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Convertidor de documento LibreLambda';
$string['preparesubmissionsforannotation'] = 'Revisar conversiones LibreLambda.';
$string['privacy:metadata:fileconverter_librelambda:externalpurpose'] = 'La información es enviada a AWS API para que el archivo sea convertido a un formato alternativo. El archivo es conservado temporalmente en un bucket AWS S3 y es eliminado después de que la conversión sea hecha.';
$string['privacy:metadata:fileconverter_librelambda:filecontent'] = 'El contenido del archivo.';
$string['privacy:metadata:fileconverter_librelambda:filemimetype'] = 'El tipo MIME del archivo.';
$string['privacy:metadata:fileconverter_librelambda:params'] = 'Los parámetros de consulta pasados a AWS API.';
$string['provision:bucketcreated'] = 'Se creó {$a->bucket} bucket, en localización {$a->location}';
$string['provision:bucketexists'] = 'Bucket existe';
$string['provision:creatings3'] = 'Creando recurso S3 Bucket';
$string['provision:inputbucket'] = 'Bucket de entrada: {$a}';
$string['provision:lambdaarchiveuploaded'] = 'Archivo de función Lambda subido exitosamente a: {$a}';
$string['provision:lambdalayeruploaded'] = 'Capa de Lambda subida exitosamente a: {$a}';
$string['provision:librearchiveuploaded'] = 'Archivo de LibreOfficesubido exitosamente a: {$a}';
$string['provision:outputbucket'] = 'Bucket de salida: {$a}';
$string['provision:s3useraccesskey'] = 'Clave de acceso de usuario S3: {$a}';
$string['provision:s3usersecretkey'] = 'Clave secreta de usuario S3: {$a}';
$string['provision:setconfig'] = 'Configurando el plugin en Moodle, a partir de sonfiguraciones regresadas.';
$string['provision:stack'] = 'Aprovisionando la función Lambda y recursos de stack';
$string['provision:stackcreated'] = 'Cloudformation stack creado. Stack ID es: {$a}';
$string['provision:uploadlambdaarchive'] = 'Subiendo archivo Lambda a recurso S3 bucket';
$string['provision:uploadlambdalayer'] = 'Subiendo capa Lambda a recurso S3 bucket';
$string['provision:uploadlibrearchive'] = 'Subiendo archivo LibreOffice a recurso S3 bucket';
$string['settings:aws:header'] = 'Configuraciones AWS';
$string['settings:aws:input_bucket'] = 'Bucket de entrada';
$string['settings:aws:input_bucket_help'] = 'Bucket Amazon S3 para subir envíos de tareas.';
$string['settings:aws:key'] = 'Clave';
$string['settings:aws:key_help'] = 'Credencial de clave Amazon API';
$string['settings:aws:output_bucket'] = 'Bucket de salida';
$string['settings:aws:output_bucket_help'] = 'Bucket de Amazon S3 para buscar envíos de tareas convertidas.';
$string['settings:aws:region'] = 'Región';
$string['settings:aws:region_help'] = 'Región de gateway API Amazon.';
$string['settings:aws:secret'] = 'Secreto';
$string['settings:aws:secret_help'] = 'Credencial de secreto Amazon API.';
$string['settings:connectionfailure'] = 'No se pudo establecer conexión al almacenamiento de objeto externo.';
$string['settings:connectionsuccess'] = 'Se pudo establecer conexión al almacenamiento de objeto externo.';
$string['settings:deleteerror'] = 'No se pudo eliminar objeto del almacenamiento de objeto externo.';
$string['settings:deletesuccess'] = 'Se pudo eliminar objeto del almacenamiento de objeto externo - No es recomendable para el usuario el tener permisos de eliminación.';
$string['settings:permissioncheckpassed'] = 'Revisión de permisos pasada.';
$string['settings:readfailure'] = 'No se pudo leer objeto del almacenamiento de objeto externo.';
$string['settings:writefailure'] = 'No se pudo escribir objeto al almacenamiento de objeto externo.';
$string['test:bucketnotexists'] = 'El bucket {$a} no existe.';
$string['test:conversioncheck'] = 'Revisando la conversión, por favor espere ...';
$string['test:conversioncomplete'] = 'Conversión de archivo exitosa. (¡Yupi!)';
$string['test:fileuploaded'] = 'Archivo de prueba subido';
$string['test:uploadfile'] = 'Subiendo archivo de prueba';
