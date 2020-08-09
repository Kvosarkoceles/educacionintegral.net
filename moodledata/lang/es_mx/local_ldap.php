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
 * Strings for component 'local_ldap', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   local_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attributesynctask'] = 'Sincronizar cohortes desde atributos LDAP';
$string['cohort_synching_ldap_attribute_attribute'] = 'Nombre del atributo a buscar';
$string['cohort_synching_ldap_attribute_attribute_desc'] = 'Ajustar al atributo del usuario LDAP para buscar con (respetar MAYÚSCULAS/minúsculas)';
$string['cohort_synching_ldap_attribute_autocreate_cohorts'] = 'Auotcrear cohortes faltantes';
$string['cohort_synching_ldap_attribute_autocreate_cohorts_desc'] = 'Si se selecciona, creará automáticamente las cohortes faltantes';
$string['cohort_synching_ldap_attribute_idnumbers'] = 'Idnumbers de cohortes destino';
$string['cohort_synching_ldap_attribute_idnumbers_desc'] = 'Una lista separada por comas de idnumbers de cohorte destino; si faltara, todos los valores distintos del atributo producirán una cohorte sincronizada';
$string['cohort_synching_ldap_attribute_objectclass'] = 'Clase del usuario';
$string['cohort_synching_ldap_attribute_objectclass_desc'] = 'Use para anular valores por defecto heredados desde el plugin de autenticación LDAP o CAS (respetar MAYÚSCULAS/mninúsculas)';
$string['cohort_synching_ldap_groups_autocreate_cohorts'] = 'Autocrear cohortes faltantes';
$string['cohort_synching_ldap_groups_autocreate_cohorts_desc'] = 'Si se selecciona, creará automáticamente las cohortes faltantes';
$string['cohort_synchronized_with_attribute'] = 'Cohorte sincronizada con atributo LDAP {$a}';
$string['cohort_synchronized_with_group'] = 'Cohorte sincronizada con grupo LDAP {$a}';
$string['group_attribute'] = 'Atributo del grupo';
$string['group_attribute_desc'] = 'Atributo nombrador de su LDAP, usualmente cn';
$string['group_class'] = 'Clase del grupo';
$string['group_class_desc'] = 'Activar si sus grupos son de otra clase, como group, groupOfNames...';
$string['groupsynctask'] = 'Sincronizar cohortes desde grupos LDAP';
$string['pluginname'] = 'Scripts para sincronizar LDAP';
$string['privacy:metadata'] = 'Los scripts de sincronización LDAP no almacenan ningún dato personal.';
$string['process_nested_groups'] = 'Procesar grupos anidados';
$string['process_nested_groups_desc'] = 'Si se selecciona, serán procesados los grupos LDAP incluidos dentro de grupos';
$string['real_user_attribute'] = 'Clase de usuario real';
$string['real_user_attribute_desc'] = 'Use si su user_attribute está con MAYÚSCULAS y minúsculas mezcladas en LDAP (sAMAccountName), pero nolo está  en las configuraciones de CAS/LDAP de Moodle';
$string['synccohortattribute'] = 'Sincronizar cohortes de Moodle con atributo de LDAP';
$string['synccohortattribute_info'] = '';
$string['synccohortgroup'] = 'Sincronizar cohortes de Moodle con grupos de LDAP';
$string['synccohortgroup_info'] = '';
