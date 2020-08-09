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
 * Strings for component 'local_cohortauto', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   local_cohortauto
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cli_migrated_auth_mcae'] = 'Migrar cualquier cohorte auth_mcae cohorts a local_cohortauto.';
$string['cli_sync_users_begin'] = 'Iniciando sincronización de usuario a cohorte...';
$string['cli_sync_users_finished'] = 'Sincronización para {$a} usuarios terminada.';
$string['cli_sync_users_userdone'] = 'hecho.';
$string['cli_sync_users_userstart'] = '- Usuario \'{$a}\' ...';
$string['cli_user_sync_complete'] = 'Sincronización para usuario \'{$a}\' completa.';
$string['cli_user_sync_notfound'] = 'Usuario \'{$a}\' no encontrado.';
$string['cohortoper_help'] = '<p>Seleccionar cohortes que desea convertir.</p><p><b>NOTA:</b> <i>Usted <b>no puede</b> editar manualmente cohortes convertidas!</i></p><p>¡¡¡Respalde su base de datos!!!</p>';
$string['convert_delete'] = 'Eliminar cohortes';
$string['convert_do'] = 'Convertir a local_cohortauto';
$string['convert_restore'] = 'Convertir a manual';
$string['delim'] = 'Delimitador de nueva línea';
$string['delim_help'] = 'Diferentes Sistemas Operativos usan diferentes delimitadores de fin de línea.<br>Este es usualmente CR+LF (Retorno de Carro + Alimentación de Línea) para Windows, y LF para Sistemas Linux/MacOS .<br>Si el plugin no funciona con la configuración actual experimente con otros valores.';
$string['donttouchusers'] = 'Ignorar usuarios';
$string['donttouchusers_help'] = 'Nombres_de_usuarios separados por comas';
$string['emptycohort'] = 'Cohorte vacía';
$string['enableunenrol'] = 'Habilitar remoción automática de cohortes gestionadas';
$string['error_unknown_action'] = 'Acción desconocida de formato: \'{$a}\\';
$string['heading_cohortname'] = 'Nombre de cohorte';
$string['heading_component'] = 'Gestionada por';
$string['heading_count'] = '# Usuarios';
$string['label_cohortautotool'] = 'Operaciones de conversión de CohortAuto';
$string['label_cohortautoview'] = 'Visor de cohorte';
$string['link'] = 'Enlace';
$string['mainrule_fld'] = 'Plantilla principal (un valor por línea)';
$string['plugindescription'] = 'Este plugin proporciona una manera de añadir automáticamente usuarios dentro de cohortes.';
$string['pluginname'] = 'Plugin de Auto-cohorte';
$string['privacy:metadata'] = 'El plugin de Auto-cohorte no almacena ningún dato de usuario.';
$string['profile_help'] = 'Valores de plantilla disponibles';
$string['replace_arr'] = 'Remplazar arreglo (un valor por línea, en el formato: val_antiguo|val_nuevo)';
$string['secondrule_fld'] = 'Texto de campo vacío';
$string['selectcohort'] = 'Seleccionar cohorte';
$string['total'] = 'Total de usuarios en cohorte: {$a}';
$string['userlink'] = 'Ver usuarios';
$string['username'] = 'Nombre del usuario';
$string['userprofile'] = 'Perfil de usuario &gt;&gt;';
$string['viewcohort'] = 'Vista de cohorte';
