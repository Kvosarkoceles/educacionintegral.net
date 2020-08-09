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
 * Strings for component 'tool_organisation', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_organisation
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['addchilddepartment'] = 'Nuevo subdepartamento para departamento \'{$a}\\';
$string['addchildposition'] = 'Nueva subposición para posición \'{$a}\\';
$string['adddepartment'] = 'Nuevo departamento para estructura \'{$a}\\';
$string['adddepartmentframework'] = 'Nueva estructura de departamento';
$string['addjob'] = 'Nuevo trabajo';
$string['addjobforuser'] = 'Nuevo trabajo para \'{$a}\\';
$string['addposition'] = 'Nueva posición para estructura \'{$a}\\';
$string['addpositionframework'] = 'Nueva estructura de posición';
$string['anydepartment'] = 'Cualquiera';
$string['anyposition'] = 'Cualquiera';
$string['assfirstchildof'] = 'Como el primer hijo de \'{$a}\\';
$string['conditioncanallocateprograms'] = 'Puede asignar a programas';
$string['conditioncanreceivenotifications'] = 'Puede recibir notificaciones';
$string['conditioncanviewreports'] = 'Puede ver reportes';
$string['conditionuserdepartment'] = 'Usuario está en departamento';
$string['conditionuserdepartmentdescription'] = 'Usuario está asignado al departamento  \'{$a->deptname}\'<br />
Sub-departamentos: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'Usuario no está asignado al departamento \'{$a->deptname}\'<br />
Sub-departamentos: {$a->subdeptsinclude}';
$string['conditionusernotindepartment'] = 'Usuario no está en departamento';
$string['conditionuserposition'] = 'Usuario tiene posición';
$string['conditionuserpositiondescription'] = 'Usuario tiene posición \'{$a->posname}\'<br />
Sub-posiciones: {$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'Usuario no tiene posición \'{$a->posname}\'<br />
Sub-posiciones: {$a->subposinclude}';
$string['conditionuserwithoutposition'] = 'Usuario no tiene posición';
$string['delete'] = 'Eliminar';
$string['deletedepartment'] = 'Eliminar departamento \'{$a}\\';
$string['deletedepartmentconfirm'] = '¿Está seguro de querer eliminar el departamento \'{$a}\'?';
$string['deletedepartmentframework'] = 'Eliminar estructura de departamento \'{$a}\\';
$string['deletedepartmentframeworkconfirm'] = 'Está seguro de querer eliminar la estructura de departamento \'{$a}\'?';
$string['deleteposition'] = 'Eliminar posición \'{$a}\\';
$string['deletepositionconfirm'] = '¿Está seguro de querer eliminar la posición \'{$a}\'?';
$string['deletepositionframework'] = 'Eliminar estructura de posición \'{$a}\\';
$string['deletepositionframeworkconfirm'] = 'Está seguro de querer eliminar la estructura de posición \'{$a}\'?';
$string['department'] = 'Departamento';
$string['departmentdescription'] = 'Descripción';
$string['departmentframeworks'] = 'Estructuras de departamento';
$string['departmenthasjobs'] = 'El departamento no puede ser eliminado porque existen trabajos asociados con él.';
$string['department_help'] = 'Seleccionar departamento';
$string['departmentidnumber'] = 'Número ID';
$string['departmentmanagementicons'] = 'Íconos de gestión del departamento';
$string['departmentmanager'] = 'Mánager del departamento';
$string['departmentmanager_help'] = 'Una persona con el trabajo de mánager del departamento será considerada un mánager de cualquiera dentro del mismo departamento o de un sub-departamento, sin importar sus posiciones.';
$string['departmentname'] = 'Nombre';
$string['departmentnotfound'] = 'Departamento no encontrado';
$string['departmentrequiredforjobcreate'] = 'El departamento necesita ser creado para proceder con las asignaciones de trabajo';
$string['departments'] = 'Departamentos';
$string['details'] = 'Detalles';
$string['editdepartment'] = 'Editar departamento \'{$a}\\';
$string['editdepartmentframework'] = 'Editar estructura de departamento \'{$a}\\';
$string['editdepartmentname'] = 'Editar nombre';
$string['editjob'] = 'Editar trabajo';
$string['editjobforuser'] = 'Editar trabajo para \'{$a}\\';
$string['editposition'] = 'Editar posición \'{$a}\\';
$string['editpositionframework'] = 'Editar estructura de posición \'{$a}\\';
$string['editpositionname'] = 'Editar nombre';
$string['enddate'] = 'Fecha de fin';
$string['enddate_help'] = 'Fecha de fin del trabajo';
$string['entitydepartment'] = 'Departamento';
$string['entityjob'] = 'Trabajo';
$string['entityposition'] = 'Posición';
$string['errorcreatingjob'] = 'Ocurrió un error al crear el trabajo. Por favor inténtelo nuevamente.';
$string['errorinvaliddepartment'] = 'Departamento no válido';
$string['errorinvalidposition'] = 'Posición no válida';
$string['errormovehierarchy'] = 'Ocurrió un error al mover la posición o el departamento hacia otra localización jerárquica.';
$string['errorparentnotfound'] = 'Padre no encontrado';
$string['eventdepartmentcreated'] = 'Departamento creado';
$string['eventdepartmentdeleted'] = 'Departamento eliminado';
$string['eventdepartmentupdated'] = 'Departamento actualizado';
$string['eventjobcreated'] = 'Trabajo creado';
$string['eventjobdeleted'] = 'Trabajo eliminado';
$string['eventjobupdated'] = 'Trabajo actualizado';
$string['eventpositioncreated'] = 'Posición creada';
$string['eventpositiondeleted'] = 'Posición eliminada';
$string['eventpositionupdated'] = 'Posición actualizada';
$string['expanddepartmentframework'] = 'Expander estructura de departamento \'{$a}\\';
$string['expandpositionframework'] = 'Expander estructura de posición \'{$a}\\';
$string['fullname'] = 'Usuario';
$string['globalmanagementicons'] = 'Íconos de gestión global';
$string['globalmanager'] = 'Mánager global';
$string['globalmanager_help'] = 'Una persona con el trabajo de mánager global será considerado un mánager de cualquiera en una posición inferior, sin importar sus departamentos.';
$string['hasjobdepartment'] = 'Tiene trabajo en departamento';
$string['hasjobposition'] = 'Tiene trabajo en posición';
$string['jobdeleteconfirm'] = '¿Está seguro de querer eliminar este trabajo y todos sus datos asociados? Esta acción no puede deshacerse.';
$string['jobdeleted'] = 'El trabajo ha sido eliminado exitosamente';
$string['jobfrom'] = 'De {$a}';
$string['jobfromto'] = 'De {$a->from} para {$a->to}';
$string['jobnotfound'] = 'Trabajo no encontrado';
$string['jobpositiondepartment'] = 'Posición y departamento';
$string['jobs'] = 'asignaciones de trabajo';
$string['jobsnumber'] = 'Trabajos';
$string['jobsnumber_help'] = 'Mostrar trabajos activos y pasados.<br /> Por ejemplo \'10 (2)\' significa que hay 10 trabajos activos y 2trabajos en el pasado.';
$string['jobstartdateafter'] = 'fecha de inicio de trabajo en o después de';
$string['missingdepartment'] = 'Falta el departamento';
$string['missingposition'] = 'Falta la posición';
$string['missingusers'] = 'Falta usuario(s)';
$string['movedepartmentframework'] = 'Mover estructura de departamento \'{$a}\\';
$string['movepositionframework'] = 'Mover estructura de posición \'{$a}\\';
$string['myteams'] = 'Equipos';
$string['newnamefor'] = 'Nuevo nombre para \'{$a}\\';
$string['onlycurrent'] = 'Solo actual';
$string['onlyfuture'] = 'Solo futuro';
$string['onlypast'] = 'Solo pasado';
$string['organisationadmintab'] = 'Organización';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'Asignar usuarios a programas/certificaciones';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = 'Mánager de departamento: Asignar usuarios a programas/certificaciones';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'Asignar usuarios a programas/certificaciones';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'Mánager global: Asignar usuarios a programas/certificaciones';
$string['organisation:assignjobs'] = 'Asignar trabajos';
$string['organisation:managedepartments'] = 'Gestionar departamentos';
$string['organisation:managepositions'] = 'Gestionar posiciones';
$string['organisation:receivenotificationsdept'] = 'Recibir notificaciones';
$string['organisation:receivenotificationsdept_help'] = 'Mánager de departamento: Recibir notificaciones';
$string['organisation:receivenotificationsglob'] = 'Recibir notificaciones';
$string['organisation:receivenotificationsglob_help'] = 'Mánager global: Recibir notificaciones';
$string['organisation:viewusersreportdept'] = 'Ver reportes de usuario';
$string['organisation:viewusersreportdept_help'] = 'Mánager de departamento: Ver reportes de usuario';
$string['organisation:viewusersreportglob'] = 'Ver reportes de usuario';
$string['organisation:viewusersreportglob_help'] = 'Mánager global: Ver reportes de usuario';
$string['orgstructure'] = 'Estructura de organización';
$string['pluginname'] = 'Estructura de organización';
$string['position'] = 'Posición';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = 'La posición ha sido eliminada exitosamente.';
$string['positiondescription'] = 'Descripción';
$string['positionframeworks'] = 'Estructuras de posición';
$string['positionhasjobs'] = 'La posición no puede ser eliminada porque hay trabajos asociados con ellla.';
$string['position_help'] = 'Seleccionar posición';
$string['positionidnumber'] = 'Número ID';
$string['positionname'] = 'Nombre';
$string['positionnotfound'] = 'Posición no encontrada';
$string['positionpermissions'] = 'Permisos';
$string['positionrequiredforjobcreate'] = 'Las posiciones necesitan ser creadas para proceder con asignaciones de trabajos.';
$string['positions'] = 'Posiciones';
$string['privacy:metadata:department'] = 'Posición del trabajoDepartamento del trabajo';
$string['privacy:metadata:enddate'] = 'Cuando este trabajo termine';
$string['privacy:metadata:jobssummary'] = 'Resumen de trabajos';
$string['privacy:metadata:position'] = 'Posición del trabajo';
$string['privacy:metadata:startdate'] = 'Cuando este trabajo inicia';
$string['privacy:metadata:timecreated'] = 'Cuando este trabajo fue creado';
$string['privacy:metadata:timemodified'] = 'Cuando fue modificado por última vez este trabajo';
$string['privacy:metadata:userid'] = 'ID del usuario';
$string['reg_wpdepartmentframeworks'] = 'Número de estructuras de departamento ({$a})';
$string['reg_wpdepartments'] = 'Número de departamentos ({$a})';
$string['reg_wpjobs'] = 'Número de trabajos ({$a})';
$string['reg_wppositionframeworks'] = 'Número de estructuras de posición ({$a})';
$string['reg_wppositions'] = 'Número de posiciones ({$a})';
$string['rolemanager'] = 'Mánager de estructura de organización';
$string['roleslist'] = 'Roles';
$string['showjobs'] = 'Mostrar trabajos';
$string['showpastjobs'] = 'Mostrar trabajos pasados';
$string['startdate'] = 'Fecha de inicio';
$string['startdate_help'] = 'Fecha de inicio del trabajo';
$string['usernotfound'] = 'Usuario no encontrado';
$string['users'] = 'Seleccionar usuarios';
$string['users_help'] = 'Buscar y seleccionar usuarios para asignación de trabajo';
$string['validationmsgedateonsdate'] = 'La fecha de término debe ser después de la fecha de inicio.';
$string['withoutpermission'] = 'Sin permiso \'{$a}\\';
$string['withpermission'] = 'Con permiso \'{$a}\\';
$string['withsubdepartments'] = 'Incluir subdepartamentos';
$string['withsubpositions'] = 'Incluir subposiciones';
