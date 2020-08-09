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
 * Strings for component 'plagiarism_ephorus', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   plagiarism_ephorus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_connection'] = 'Revisar conexión';
$string['default'] = 'Configuración  por defecto';
$string['default_processtype'] = 'Tipo de proceso por defecto';
$string['default_processtype_help'] = '<p>Hay dos opciones por deefecto para subir  al enviar documentos a Ephorus:</p>
<ul>
<li>Por defecto: Los documentos que envíee serán revisados para plagio y serán usados como material de referencia en el futuro. </li>
<li>Privado: Su documento será revisado para plagio pero no será usado como material de referencia.</li>
</ul>';
$string['detailed'] = 'Detallado';
$string['document'] = 'Documento';
$string['document_information'] = 'Información del Documento';
$string['document_not_found'] = 'Documento no encontrado.';
$string['document_not_found_msg'] = 'Este documento no pudo encontrase.';
$string['document_protected'] = 'Documento Protegiso';
$string['document_protected_msg'] = 'Este documento está protegido por contraseña y no pudo ser escaneado.';
$string['document_written_by'] = 'Documento escrito por %s (%s)';
$string['duplicate_document'] = 'Documento Duplicado';
$string['duplicate_document_download'] = 'Descargar el Documento';
$string['duplicate_document_msg'] = 'Este documento ya había sido enviado anteriormente.';
$string['ephorus'] = 'Ephorus';
$string['ephorus_logging'] = 'Bitácora Ephorus';
$string['ephorus_logging_help'] = '<p>Bitácora Ephorus habilita bitácoras extra</p>';
$string['ephorus_report'] = 'Reporte Ephorus';
$string['ephorus_settings'] = 'Configuraciones ephorus';
$string['ephorus_status'] = 'estatus Ephorus';
$string['found_by_ephorus'] = 'Encontrado';
$string['handin_address'] = 'Dirección de Entregar';
$string['handin_code'] = 'Código de Entregar';
$string['handin_index_not_okay'] = 'Dirección de índice y entregar no tiene conexión';
$string['handin_index_okay'] = 'Dirección de índice y entregar si tiene conexión';
$string['handin_not_okay'] = 'Dirección de entregar no tiene conexión';
$string['handin_okay'] = 'Dirección de entregar si tiene conexión';
$string['index_address'] = 'Dirección Índice';
$string['index_not_okay'] = 'Dirección Índice no tiene conexión';
$string['index_okay'] = 'Dirección Índice si tiene conexión';
$string['link_original_report'] = 'Ver reporte original';
$string['no_results_found'] = 'No hay resultados encontrados para este documento.';
$string['not_enough_text'] = 'Sin texto suficiente';
$string['not_enough_text_msg'] = 'Este documento no contiene suficiente texto para una revisón de plagio confiable.';
$string['no_text'] = 'Sin Texto';
$string['no_text_msg'] = 'Este documento no contiene texto alguno y no pudo revisarse para plagio.';
$string['original_document_by'] = 'El Documento Original fue entregado por  %s (%s) on %s';
$string['original_document_by_no_date'] = 'El Documento Original fue entregado por  %s (%s)';
$string['original_report'] = 'Reporte Original';
$string['original_text'] = 'Original';
$string['pluginname'] = 'Prevención de Plagio Ephorus';
$string['private'] = 'Privado';
$string['processing'] = 'Procesando';
$string['processing_msg'] = 'Ephorus está revisando el documento para posible plagio y el reporte llegará pronto.';
$string['processtype'] = 'Tipo_de_proceso';
$string['processtype_help'] = '<p>Hay tres opciones para cargar al enviar documentos a Ephorus:</p>
<ul>
    <li>Por defecto: El documento quee Usted envíe será revisado para plagio y será usado como material de referencia en el futuro. </li>
    <li>Referencia: El documento no será revisado para plagio pero será usado como material de referencia.</li>
    <li>Privado: El documento será revisado para plagio pero no será usado como material de referencia.</li>
</ul>';
$string['reference'] = 'Referencia';
$string['saved_settings'] = 'Configuraciones Ephorus guardadas';
$string['send_document_manually'] = 'Mandar manualmente el archivo a Ephorus.';
$string['student'] = 'Estudiante';
$string['student_disclosure'] = 'Declaratoria del Estudiante';
$string['student_disclosure_help'] = '<p>Este texto será mostrado a todos los estudiantes en la página para enviar.</p>';
$string['submission_date'] = 'Fecha del Envío';
$string['summary'] = 'Resumen';
$string['total_score'] = 'Puntaje Total';
$string['unfinalized_file'] = 'Archivo sin_finalizar';
$string['unknown_error'] = 'Error Desconocido';
$string['unknown_error_msg'] = 'Ha ocurrido un error desconocido.';
$string['unknown_file_error'] = 'No se puede enviar archivo';
$string['unknown_file_error_msg'] = 'No se puede enviar archivo';
$string['unsupported_file_type'] = 'Tipo de archivo no soportado';
$string['unsupported_file_type_msg'] = 'Ephorus no soporta este tpo de archivo';
$string['update_sources'] = 'Actualizar Orígenes';
$string['use_cron'] = 'Usar Ephorus en Moodle cron';
$string['use_cron_help'] = '<p>El \'script\' de entregar usualmente es llamado en el cron desde Moodlee, desactive esto para deshabilitar esta característica.</p>
<p>Sin embargo, Usted neceesita configurar un trabajo_cron separado para el \'script\' de entregar.</p>';
$string['use_ephorus'] = 'Habilitar Ephorus';
$string['wait_for_sending'] = 'Esperar para enviar';
$string['wait_for_sending_msg'] = 'Esperando para enviar el Documento a Ephorus.';
$string['xsl_not_enabled'] = 'La extensión XSL no está habilitada; esto es necesario para mostrar reportes.';
