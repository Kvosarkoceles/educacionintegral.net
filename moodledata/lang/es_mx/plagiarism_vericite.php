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
 * Strings for component 'plagiarism_vericite', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   plagiarism_vericite
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced_settings'] = 'Configuraciones avanzadas';
$string['disable_dynamic_inline'] = 'Deshabilitar envíos en-línea dinámicos';
$string['disable_dynamic_inline_help'] = 'Los envíos en-línea solamente serán enviado una vez y las modificaciones no serán re-enviadas.';
$string['enable_debugging'] = 'Hablitar depuración (debugging)';
$string['enable_debugging_help'] = 'Activar depuración (debugging) para el módulo VeriCite. Los errores se imprimirán en la bitácora de error PHP.';
$string['excludequotesvericite'] = 'Excluir comillas';
$string['excludequotesvericite_help'] = 'Configurar los valores por defecto para todos los reportes enviados para esta tarea. Para disminuir el número de positivos falsos, nosotros recomendamos ajustar a que se excluyan las comillas como configuración por defecto. Los instructores todavía podrán variar esta opción para cada reporte individual después del envío.';
$string['excludequotesvericite_hideinstructor'] = 'Ocultarle al instructor la configuración para "Excluir Citas"';
$string['excludequotesvericite_hideinstructor_help'] = 'Bloquear esta configuración para Excluir Citas, de forma tal que al crear una nueva tarea, el instructor no pueda ver ni cambiar la configuración.';
$string['excludeselfplagvericite'] = 'Excluir Auto Plagio';
$string['excludeselfplagvericite_help'] = 'Configurar el valor por defecto para todos los reportes enviados a esta tarea. Para reducir el número de falsas concordancias, nosotros recomendamos excluir el auto pagio en el mismo curso por defecto. Los instructores seguirán teniendo la habilidad para cambiar esta opción para cada reporte individual después del envío. El auto plagio siempre será revisado contra los reportes del usuario en otros cursos.';
$string['excludeselfplagvericite_hideinstructor'] = 'Ocultarle al instructor la configuración para "Excluir Auto Plagio"';
$string['excludeselfplagvericite_hideinstructor_help'] = 'Bloquear esta configuración para Excluir Auto Plagio, de forma tal que al crear una nueva tarea, el instructor no pueda ver ni cambiar la configuración.';
$string['pluginname'] = 'VeriCite';
$string['preliminaryreportvericite'] = 'Mostrar el puntaje de similaridad preliminar';
$string['preliminaryreportvericite_help'] = 'Habilitar el mostrar el puntaje de similaridad primario (no-final). Si se deshabilita, entonces no se mostrará un puntaje hasta que se haya determinado el puntaje final, lo que podría tomar varias horas.';
$string['savedconfigsuccess'] = 'Configuración de Plagio Guardada';
$string['sendfiles'] = 'Trabajo Cron VeriCite para enviar archivos';
$string['similarity'] = 'Similaridad';
$string['storeinstindexvericite'] = 'Almacenar en índice institucional';
$string['storeinstindexvericite_help'] = 'Configuración por defecto para todos los reportes enviados a esta tarea. Si Usted elige no guardar reportes en su índice intitucional, los reportes no serán usados para revisar el plagio contra otros reportes de estudiantes en su institución. Una vez que un reporte se haya enviado, Usted no puede cambiar esta opción para ese reporte.';
$string['storeinstindexvericite_hideinstructor'] = 'Ocultarle al instructor la configuración para "Almacenar en índice institucional"';
$string['storeinstindexvericite_hideinstructor_help'] = 'Bloquear la configuración de Almacenar en índice institucional, para que cuando se crea una nueva tarea, el instructor no pueda ver ni cambiar la configuración.';
$string['studentdisclosure'] = 'Declaratoria para los alumnos';
$string['studentdisclosuredefault'] = 'Los archivos subidos serán enviados a un servicio de detección de plagio para revisión por el instructor.';
$string['studentdisclosure_help'] = '';
$string['studentreportvericite'] = 'Permitirles a los estudiantes que vean los reportes';
$string['studentreportvericite_help'] = 'Seleccione la casilla si desea que los estudiantes vean sus reportes.';
$string['studentscorevericite'] = 'Permitirles a los estudiantes que vean los puntajes';
$string['studentscorevericite_help'] = 'Seleccione la casilla si desea que los estudiantes vean sus puntajes.';
$string['usevericite'] = 'Habilitar Servicio de Detección de Plagio de VeriCite';
$string['usevericite_help'] = 'Esta será la configuración por defecto al crear una tarea nueva. Seleccione la casilla si desea que las tareas nuevas usen VeriCite por defecto.';
$string['vericite'] = 'Plugin para detección de plagio VeriCite';
$string['vericiteaccountid'] = 'ID de la cuenta';
$string['vericiteaccountid_help'] = 'Esta es la ID que le dió Longsight a Usted';
$string['vericiteapi'] = 'URL de API';
$string['vericiteapi_help'] = 'Esta es la URL de API que le dió Longsight a Usted';
$string['vericitedefaultsettings'] = 'Configuraciones por defecto para nuevas tareas:';
$string['vericitedefaultsettingsforums'] = 'Configuraciones por defecto para foros nuevos:';
$string['vericiteexplain'] = 'VeriCite es un servicio basado en la nube que identifica plagio al comparar el trabajo enviado contra una base de datos siempre-creciente de fuentes. VeriCite es un servicio comercial y requiere una sucripción válida. Hay disponibles pruebas de 60 días en<a href="https://vericite.com" target="_blank">VeriCite.com</a>.<br/><br/>VeriCite ies monitoreado continuamente y <a href="http://status.vericite.com/" target="_blank"">estan disponibles actualizaciones de estatus</a>.<br/><br/>Las novedades y actualizaciones del sistema están disponibles en <a href="https://updates.vericite.com" target="_blank"/>updates.vericite.com</a>.<br/><hr/>';
$string['vericitesecretkey'] = 'Clave Secreta';
$string['vericitesecretkey_help'] = 'El secreto proporcionado por un acuerdo provisional (de prueba) con VeriCite';
