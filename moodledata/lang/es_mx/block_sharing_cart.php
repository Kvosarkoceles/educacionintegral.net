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
 * Strings for component 'block_sharing_cart', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   block_sharing_cart
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Actividad';
$string['backup'] = 'Copiar al Carrito para Compartir';
$string['bulkdelete'] = 'Eliminar en masa';
$string['clicktomove'] = 'Clic para mover aquí';
$string['clipboard'] = 'Copiando este ítem compartido';
$string['confirm_backup'] = '¿Está seguro de querer copiar esta actividad/recurso al Carrito para Compartir?';
$string['confirm_backup_section'] = '¿ Quiere copiar esta sección del curso y sus actividades y recursos al Carrito para Compartir ?';
$string['confirm_delete'] = '¿Está Usted seguro de querer eliminar?';
$string['confirm_delete_selected'] = '¿Está Usted seguro de querer eliminar todos los ítems seleccionados?';
$string['confirm_restore'] = '¿Está seguro de querer copiar este ítem al curso?';
$string['confirm_userdata'] = '¿Quiere Usted incluir datos de usuario dentro de la copia de esta actividad/recurso?
OK - Copiar *con* datos del usuario
Cancelar - Copiar *sin* datos del usuario';
$string['conflict_description'] = '¿Desea sobrescribir título de sección en curso?';
$string['conflict_description_note'] = '*Los formatos de resumen de sección  (color del font , imágenes, etc.) aparecerán después de ser copiadas al curso.';
$string['conflict_no_overwrite'] = 'Conservar el título actual de sección <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Cambiar título de sección a <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Continuar';
$string['copyhere'] = 'Copiar aquí';
$string['copy_section'] = 'Copiar sección';
$string['delete_folder'] = 'y todo su contenido';
$string['folder_string'] = 'Carpeta:';
$string['forbidden'] = 'Usted no tiene permisos para acceder a este ítem compartido';
$string['inprogess_pleasewait'] = 'Espere por favor...';
$string['invalidoperation'] = 'Operación inválida detectada';
$string['modal_bulkdelete_confirm'] = 'Eliminar seleccionado';
$string['modal_bulkdelete_title'] = 'Seguro que quiere eliminar';
$string['modal_checkbox'] = '¿Seguro que desea copiar datos del usuario? (por ejemplo. glosario/wiki/entradas de base de datos)';
$string['modal_confirm_backup'] = 'Confirmar';
$string['modal_confirm_delete'] = 'Eliminar';
$string['movedir'] = 'Mover a la carpeta';
$string['no_backup_support'] = 'Sin soporte para respaldo para este módulo';
$string['notarget'] = 'Destino no encontrado';
$string['pluginname'] = 'Carrito para Compartir';
$string['recordnotfound'] = 'Ítems compartidos no encontrados';
$string['requireajax'] = 'El carrito para compartir requiere AJAX';
$string['requirejs'] = 'El carrito para compartir requiere JavaScript habilitado en su navegador';
$string['restore'] = 'Copiar al curso';
$string['section_name_conflict'] = 'Conflicto en título de sección';
$string['settings:userdata_copyable_modtypes'] = 'Tipos de módulos copiables con datos de usuarios';
$string['settings:userdata_copyable_modtypes_desc'] = 'Al copiar una actividad al Carrito para Compartir, un diálogo muestra una opción para decidir si es que una copia de una actividad incluye o no sus datos del usuario, si este tipo de módulo es seleccionado en el caso de arriba y un operador tiene las capacidades <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> y <strong>moodle/restore:userinfo</strong>.
(Por defecto, solamente los roles de administrador y Mánager tienen esas capacidades.)';
$string['settings:workaround_qtypes'] = 'Parche para tipos de preguntas';
$string['settings:workaround_qtypes_desc'] = 'El parche para el problema de la restauración de pregunta será realizado si se selecciona su tipo de pregunta. Sin embargo, cuando la pregunta a restaurarse ya existe, estos datos se verán como inconsistentes; este parche tratará de hacer otros duplicados en lugar de re-utilizar los datos existentes. Podría ser útil para evitar algunos errores en la restauración, tales como <i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Carrito para Compartir';
$string['sharing_cart:addinstance'] = 'Añadir un nuevo bloque de carrito para compartir';
$string['sharing_cart_help'] = '<h2 class="helpheading">Operación</h2>
<dl style="margin-left:0.5em;">
<dt>Copiar desde el curso hacia el Carrito para Compartir</dt>
<dd>Usted notará un pequeño ícono de "Copiar al Carrito para Compartir" que aparece después de cada recurso o actividad en un curso.
Haga clic en ese ícono para mandar una copia de ese recurso/actividad al Carrito para Compartir.
Solamente la actividad misma, sin datos del usuario, será clonada.</dd>
<dt>Copiar desde el Carrito para Compartir al curso</dt>
<dd>Haga clic en un ícono para "Copiar al curso" en el Carrito para Compartir y seleccione uno de los marcadores para destino en cada sección.
O haga clic en el ícono para "Cancelar" que está arriba de éstos.</dd>
<dt>Hacer carpetas adentro del Carrito para Compartir</dt>
<dd>Haga clic en un ícono para "Mover hacia adentro de una carpeta" en un ítem del Carrito para Compartir.
Aparecerá una caja para escritura para el nuevo nombre de la carpeta en caso de que no hubiera carpeta.
O Usted puede seleccionar una carpeta existente en la lista desplegable.
La cual será remplazada con una caja para ingresar texto si Usted hace clic en el ícono para "Editar".</dd>
</dl>';
$string['unexpectederror'] = 'Ocurrió un error inesperado';
$string['variouscourse'] = 'de varios cursos';
