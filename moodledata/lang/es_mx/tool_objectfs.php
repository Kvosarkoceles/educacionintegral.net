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
 * Strings for component 'tool_objectfs', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_objectfs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['delete_local_objects_task'] = 'Trabajo de asunto local eliminar sistema de archivo de objeto';
$string['generate_status_report_task'] = 'Trabajo generador de reporte de estatus del objeto';
$string['not_enabled'] = 'No están habilitados los trabajos en segundo plano del sistema de archivo de objeto. No se moverá localización de objetos hasta que Usted lo haga.';
$string['object_status:files'] = 'Objetos';
$string['object_status:last_run'] = 'Este reporte fue generado en {$a}';
$string['object_status:location'] = 'Localización del objeto';
$string['object_status:location:duplicated'] = 'Duplicado en directorio_de_archivos y almacenamiento externo';
$string['object_status:location:error'] = 'Faltante en directorio_de_archivos y almacenamiento externo';
$string['object_status:location:external'] = 'Solamente en almacenamiento externo';
$string['object_status:location:local'] = 'Solamente en directorio_de_archiv';
$string['object_status:location:total'] = 'Total';
$string['object_status:location:unknown'] = 'Localización de objeto desconocida';
$string['object_status:never_run'] = 'El trabajo para generar este reporte no ha sido corrido.';
$string['object_status:page'] = 'Estatus del objeto';
$string['object_status:size'] = 'Tamaño total';
$string['pluginname'] = 'Sistema de archivo de almacenamiento de objetos';
$string['pull_objects_from_storage_task'] = 'Trabajo para descargar objetos de sistema de archivo de objetos';
$string['push_objects_to_storage_task'] = 'Trabajo para subir objeto de sistema de archivo';
$string['recover_error_objects_task'] = 'Trabajo para recuperar error de objeto';
$string['settings'] = 'Configuraciones';
$string['settings:aws:bucket'] = 'Bucket (cubeta)';
$string['settings:aws:bucket_help'] = 'Bucket (cubeta) Amazon S3 en donde almacenar archivos.';
$string['settings:aws:header'] = 'Configuraciones de Amazon S3';
$string['settings:aws:key'] = 'Clave';
$string['settings:aws:key_help'] = 'Credencial de clave de Amazon S3';
$string['settings:aws:region'] = 'región';
$string['settings:aws:region_help'] = 'Región de Gateway API Amazon S3.';
$string['settings:aws:secret'] = 'Secreto';
$string['settings:aws:secret_help'] = 'Credencial secreta de Amazon S3.';
$string['settings:azure:accountname'] = 'Nombre de la cuenta';
$string['settings:azure:accountname_help'] = 'El nombre de la cuenta de almacenamiento.';
$string['settings:azure:container'] = 'Nombre del contenedor';
$string['settings:azure:container_help'] = 'El nombre del contenedor que almacenará los blobs (borrones).';
$string['settings:azure:header'] = 'Configuraciones de Almacenamiento Azure Blob';
$string['settings:azure:sastoken'] = 'Firma de Acceso Compartido';
$string['settings:azure:sastoken_help'] = 'Esta Firma de Acceso Compartido debería de tener solamente las siguientes dos capacidades: Read, write (Leer, escribir).';
$string['settings:clientnotavailable'] = 'El cliente configurado \'{$a}\' no está disponible. or favor instale las dependencias requeridas.';
$string['settings:clientselection:header'] = 'Selección de Sistema de Archivo de Almacenamiento';
$string['settings:clientselection:matchfilesystem'] = 'esta configuración coincide con $CFG->alternative_file_system_class';
$string['settings:clientselection:mismatchfilesystem'] = 'Esta configuración no coincide con $CFG->alternative_file_system_class';
$string['settings:clientselection:title'] = 'Sistema de Archivo de Almacenamiento';
$string['settings:clientselection:title_help'] = 'El sistema de archivos de almacenamiento. Esto es también el sistema de archivo activo para los trabajos en segundo plano.';
$string['settings:connectionfailure'] = 'No pudo establecerse conexión al almacenamiento de objetos externo.';
$string['settings:connectionsuccess'] = 'Pudo establecerse conexión al almacenamiento de objetos externo.';
$string['settings:consistencydelay'] = 'Retraso por consistencia';
$string['settings:consistencydelay_help'] = 'Por cuanto tiempo debe de haber existido un objeto, después de haberse transferido a almacenamiento de objetos externo, antes de que sea un candidato para eliminación local.';
$string['settings:deleteerror'] = 'No pudo eliminarse objeto del almacenamiento de objetos externo.';
$string['settings:deletelocal'] = 'Eliminar objetos locales';
$string['settings:deletelocal_help'] = 'Eliminar objetos locales una vez que estén en almacenamiento de objetos externos después del retraso por consistencia.';
$string['settings:deletesuccess'] = 'Puede eliminar objeto del almacenamiento de objeto externo - No es recomendable que el usuario tenga permisos para eliminar.';
$string['settings:enablelogging'] = 'Habilitar bitácoras en tiempo real';
$string['settings:enablelogging_help'] = 'Habilitar o deshabilitar bitácoras de sistema de archivo. Sacará información diagnóstica a la bitácora de error de PHP.';
$string['settings:enabletasks'] = 'Habilitar trabajos de transferencia';
$string['settings:enabletasks_help'] = 'Habilitar o deshabilitar los trabajos de sistema de archivo de objeto que mueven archivos entre el directorio_de_archivos y el almacenamiento de objeto externo.';
$string['settings:filetransferheader'] = 'Configuraciones de Transferencia de Archivos';
$string['settings:generalheader'] = 'Configuraciones Generales';
$string['settings:handlernotset'] = '$CFG->alternative_file_system_class no está configurada; el sistema de archivo no podrá leer desde el almacén de objeto externo. Los trabajos en segundo plano aun pueden funcionar.';
$string['settings:maxtaskruntime'] = 'Trabajo en tiempo-de-ejecución para transferencia máxima';
$string['settings:maxtaskruntime_help'] = 'Trabajos en segundo plano que manejan la transferencia de objetos desde y hacia el almacenamiento de objeto externo. Esta configuración controla el tiempo_de_corrida máximo para todos los trabajos relacionados con transferencia de objetos.';
$string['settings:minimumage'] = 'Edad mínima';
$string['settings:minimumage_help'] = 'Edad mínima que debe existir un objeto en el directorio_de_archivos local antes de que sea considerado';
$string['settings:permissioncheckpassed'] = 'Revisión de permisos pasada.';
$string['settings:preferexternal'] = 'Preferir objetos externos';
$string['settings:preferexternal_help'] = 'Si un archivo está almacenado tanto localmente como en un almacenamiento de objeto externo, leer desde externo\\. esta configuración es principalmente para fines de pruebaa e introduce un overhead (exceso de trabajo) para revisar la localización.';
$string['settings:readfailure'] = 'No pudo leerse objeto desde el almacenamiento de objetos externo.';
$string['settings:sizethreshold'] = 'Umbral de tamaño mínimo (KB)';
$string['settings:sizethreshold_help'] = 'Umbral de tamaño mínimo para transferir objetos a almacenamiento de objetos externo. Si los objetos son mayores de este tamaño, serán transferidos.';
$string['settings:writefailure'] = 'No pudo escribirse objeto al almacenamiento de objetos externo.';
