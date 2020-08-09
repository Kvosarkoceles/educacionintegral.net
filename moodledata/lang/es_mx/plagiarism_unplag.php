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
 * Strings for component 'plagiarism_unplag', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   plagiarism_unplag
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Intentos realizados';
$string['check_all_submitted_assignments'] = 'Revisión manual';
$string['check_confirm'] = '¿Está Usted seguro de querer iniciar la revisión por el plugin contra plagio UNPLAG?';
$string['check_file'] = 'Iniciar una revisión';
$string['check_start'] = 'Calificación de originalidadUnplag en progreso';
$string['check_type'] = 'Orígenes';
$string['cronwarning'] = 'El script de mantenimiento  <a href="../../admin/cron.php">cron.php</a> no ha sido ejecutado por al menos 30 min - Cron debe ser configurado para permitirle a UNPLAG funcionar correctamente.';
$string['defaultsdesc'] = 'Las siguientes configuraciones son los valores por defecto cuando se habilita UNPLAG dentro de un Módulo de Actividad';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['delete'] = 'Eliminar';
$string['deletedwarning'] = 'Este archivo no pudo encontrarse - pudo haber sido eliminado por el usuario';
$string['exclude_citations'] = 'Identificar citas y referencias';
$string['exclude_self_plagiarism'] = 'Excluir aut-plagio';
$string['explainerrors'] = 'Esta página enlista cualquier archivo que esté actualmente en estado de error. <br/>Cuando los archivos son eliminados en esta página ya no podrán ser re-enviados y ya no se mostrarán errores a profesores o estudiantes.';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la cola';
$string['filereset'] = 'Un archivo ha sido reiniciado para re-envío a UNPLAG';
$string['fileresubmitted'] = 'Archivo puesto en cola para re-envío';
$string['generalinfo'] = 'Información general';
$string['getscore'] = 'Obtener puntuación';
$string['heldevents'] = 'Eventos detenidos';
$string['heldeventsdescription'] = 'Estos son eventos que no completaron en el primer intento y fueron puestos en cola par re-envío - esto impide que eventos subsecuentes finalicen y podría necesitar más investigación. Algunos de estos eventos podrían no ser relevantes a  UNPLAG.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'Campo(s) debería tener no más de 100 000 palabras y no ser mayor de 70MB';
$string['max_supported_archive_files_count'] = 'Máx archivos soportados';
$string['max_supported_archive_files_count_help'] = 'El número máximo de archivos soportados que serán extraidos de los archivos';
$string['min_30_words'] = 'Se necesitan al menos 30 palabras';
$string['module'] = 'Módulo';
$string['my_library'] = 'Doc Vs Biblioteca';
$string['name'] = 'Nombre';
$string['no_index_files'] = 'Tarea en borrador';
$string['noreceiver'] = 'No se especificó dirección de destinatario';
$string['pending'] = 'Este archivo está pendiente de envío a UNPLAG';
$string['plagiarism'] = 'Plagio potencial';
$string['plagiarism_run_success'] = 'Archivo enviado para revisión de plagio';
$string['pluginname'] = 'Plugin de plagio UNPLAG';
$string['previouslysubmitted'] = 'Previamente enviado como';
$string['processing'] = 'Este archivo ha sido enviado a UNPLAG, y ahora está esperando que el análisis esté disponible';
$string['progress'] = 'Revisar (escanear)';
$string['receivernotvalid'] = 'Esta no es una dirección de destinatario válida.';
$string['refresh'] = 'Refrescar página para ver resultados';
$string['report'] = 'Ver reporte completo';
$string['reportready'] = 'Reporte listo';
$string['resubmit'] = 'Re-enviar';
$string['savedconfigfailed'] = 'Se ha ingresado una combinación incorrecta de Secreto API/ID del cliente. UNPLAG ha sido deshabilitado; por favor inténtelo nuevamente.';
$string['savedconfigsuccess'] = 'Configuraciones de detección de plagio guardadas';
$string['scoreavailable'] = 'Este archivo ha sido procesado por UNPLAG y ahora está disponible un reporte.';
$string['scorenotavailableyet'] = 'Este archivo aun no ha sido procesado por UNPLAG';
$string['showwhenclosed'] = 'Cuando se cerró la actividad';
$string['similarity'] = 'Similitud';
$string['similarity_sensitivity'] = 'Ocultar fuentes con coincidencia menor de (%)';
$string['status'] = 'Estatus';
$string['studentdisclosure'] = 'Familiarizar a estudiantes con la Política de Privacidad de UNPLAG';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán enviados al sistema de detección de plagio UNPLAG.';
$string['studentdisclosure_help'] = 'Este texto será mostrado a todoslos estudiantes en la página para subir archivos.';
$string['studentemailcontent'] = 'El archivo que Usted ha enviado a {$a->modulename} en {$a->coursename} ya ha sido procesado por el sistema de detección de plagio UNPLAG
{$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por UNPLAG';
$string['submitondraft'] = 'Enviar archivo cuando se suba por vez primera';
$string['submitonfinal'] = 'Enviar archivo cuando el estudiante lo envíe para ser calificado';
$string['sync_failed'] = 'Intentar sincronizar archivos no procesados';
$string['toolarge'] = 'Este archivo es demasiado grande para que lo procese UNPLAG';
$string['unknownwarning'] = 'Ocurrió un error al tratar de enviar este archivo a UNPLAG';
$string['unplag'] = 'plugin de plagio UNPLAG';
$string['unplag_api_secret'] = 'Secreto API';
$string['unplag_api_secret_help'] = 'Secreto de API proporcionado por UNPLAG para acceder al API que Usted puede encontrar en  <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag:checkfile'] = 'Permitir revisar archivo para similitud';
$string['unplag_client_id'] = 'ID del cliente';
$string['unplag_client_id_help'] = 'ID de Cliente proporcionado por UNPLAG para acceder al API que Usted puede encontrar en <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplagdebug'] = 'Depuración';
$string['unplagdefaults'] = 'VAlores por defecto de UNPLAG';
$string['unplag_draft_submit'] = 'Cuando debería el archivo ser enviado a UNPLAG';
$string['unplag:enable'] = 'Permitirle al profesor habilitar/deshabilitar UNPLAG adentro de una actividad';
$string['unplag_enableplugin'] = 'Habilitar  en actividad {$a}';
$string['unplagfiles'] = 'Archivos Unplag';
$string['unplag_lang'] = 'Idioma';
$string['unplag_lang_help'] = 'Código de idioma proporcionado por UNPLAG';
$string['unplag:resetfile'] = 'Permitirle al profesor re-enviar el archivo a UNPLAG después de que ocurrió un error';
$string['unplag_settings_url_text'] = 'Abrir cuenta admin Unplug.com para ver/copiar Secreto API/ID de cliente';
$string['unplag_show_student_report'] = 'Mostrar reportes a estudiantes';
$string['unplag_show_student_report_help'] = 'El reporte de similitud da un desglose de cuales partes del envío fueron plagiadas y el lugar en donde UNPLAG encontró este contenido.';
$string['unplag_show_student_score'] = 'Mostrar puntajes a estudiantes';
$string['unplag_show_student_score_help'] = 'El puntaje de similitud es el porcentaje del envío que ha sido apareado con otro contenido.';
$string['unplag_studentemail'] = 'MAndar Email al estudiante';
$string['unplag_studentemail_help'] = 'Esto enviará un Email al estudiante cuando el archivo haya sido procesado para hacerle saber que está disponible un reporte.';
$string['unplag:vieweditreport'] = 'Permitirle al profesor ver y editar el reporte completo de UNPLAG';
$string['unplag:viewreport'] = 'Permitirle al profesor que vea el reporte completo de UNPLAG';
$string['unplag:viewsimilarity'] = 'Permitir ver valor de similitud de UNPLAG';
$string['unsupportedfiletype'] = 'Este tipo de archivo no está soportado por UNPLAG';
$string['upload_error'] = 'Error de subida de archivo';
$string['uploading'] = 'Subiendo';
$string['use_unplag'] = 'Auto revisar';
$string['useunplag_assign_desc_param'] = 'Para desbloquear las configuraciones de UNPLAG';
$string['useunplag_assign_desc_value'] = 'Configurar ajustes de Envío → Requerir que el estudiante haga click en  el botón de Enviar = Sí';
$string['use_unplag_help'] = 'PAra usar el plugin Unplag, primeramente configure la opción de Requqerir quee los estudiantes hagan click en l botón de enviar a Sí (Configuraciones del envío).';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando a cron y {$a->countheld} eventos están siendo detenidos para re-envío';
$string['web'] = 'Doc vs Internet';
$string['web_and_my_library'] = 'Doc vs Internet + Biblioteca';
