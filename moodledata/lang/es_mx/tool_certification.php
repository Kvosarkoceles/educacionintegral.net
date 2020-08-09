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
 * Strings for component 'tool_certification', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_certification
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['active'] = 'Activa';
$string['activecertifications'] = 'Certificaciones activas';
$string['afterallocationdate'] = 'Después de fecha de asignación';
$string['aftercompletion'] = 'Después de finalización';
$string['afterduedate'] = 'Después de fecha esperada';
$string['afterpreviouscertexpdate'] = 'Después de la fecha de expiración de la certificación previa';
$string['afterstartdate'] = 'Después de la fecha de inicio';
$string['allocateusers'] = 'Asignar usuarios';
$string['allocationdate'] = 'Fecha de asignación';
$string['allocationdateisonorafter'] = 'Fecha de asignaciónen o después de';
$string['allocationenddate'] = 'Fecha de fin de asignación';
$string['allocationfor'] = 'Asignación para \'{$a}\\';
$string['allocationsource'] = 'Origen de asignación';
$string['allocationstartdate'] = 'Fecha de inicio de asignación';
$string['allocationwindowenddate'] = 'Fecha de fin';
$string['allocationwindowenddate_help'] = 'Fecha de fin para la ventana de asignación';
$string['allocationwindowstartdate'] = 'Fecha de inicio';
$string['allocationwindowstartdate_help'] = 'Fecha de inicio para la ventana de asignación';
$string['archive'] = 'Archivar';
$string['archived'] = 'Archivada';
$string['archivedcertifications'] = 'Certificaciones archivadas';
$string['archivedconfirmation'] = '¿Está seguro de querer archivar la certificación \'{$a}\'? La certificación archivada ya no estará disponible para mánagers o alumnos y solamente podría ser vista en reportes históricos.';
$string['archivedon'] = 'Archivada en';
$string['autocreategroups'] = 'Añadir a grupos del curso';
$string['autocreategroupsasinprogram'] = 'Como está definido en el programa';
$string['autocreategroupscertification'] = 'Crear grupos para esta certificación';
$string['basic'] = 'Básico';
$string['basicdetails'] = 'Detalles básicos';
$string['calendarduedate'] = 'Fecha esperada para certificación {$a}';
$string['calendarexpirydate'] = 'Fecha de expiración para certificación {$a}';
$string['cannotallocateuser'] = 'No puede asignarse usuario a certificación {$a}';
$string['certification'] = 'Certificación';
$string['certification:allocateuser'] = 'Permiso para asignar usuario';
$string['certification:edit'] = 'Permiso para editar';
$string['certificationfullname'] = 'Nombre completo de certificación';
$string['certificationfullname_help'] = 'Nombre completo de certificación';
$string['certificationidnumber'] = 'Número ID de certificación';
$string['certificationidnumber_help'] = 'El número ID de una certificación solamente es usado cuando se aparea  la certificación contra sistemas externos y no es mostrado en ninguna parte del sitio. Si la certificación tiene un nombre de código oficial podría ser ingresado; en caso contrario el campo puede dejarse vacío.';
$string['certificationname'] = 'Nombre de certificación';
$string['certificationnamewithlink'] = 'Nombre con enlaces de la certificación';
$string['certificationprogress'] = 'Progreso de la certificación';
$string['certificationrules'] = 'Reglas de certificación';
$string['certifications'] = 'Certificaciones';
$string['certificationstatus'] = 'Estatus de certificaciones';
$string['certificationstatus_help'] = 'Estado de la certificación vigente';
$string['certificationtags'] = 'Marcas de certificación';
$string['certificationtags_help'] = 'Marcas para esta certificación';
$string['certification:view'] = 'Permiso para ver';
$string['certified'] = 'Certificado';
$string['certifiedby'] = 'Certificado por';
$string['certifiedcertificationslink'] = '<a href="{$a->href}">Certificaciones certificadas: {$a->count}</a>';
$string['certifieddate'] = 'Fecha de certificada';
$string['certifieddateisonorafter'] = 'Fecha certificado en o después de';
$string['certifiednotification'] = 'El usuario ha sido exitosamente certificado';
$string['certify'] = 'Certificar';
$string['certifyuser'] = 'Certificar usuario';
$string['conditioncertificationcertified'] = 'Certificación certificada';
$string['conditioncertificationexpired'] = 'Certificación expirada';
$string['conditioncertificationnotcertified'] = 'Certificación no certificada';
$string['conditioncertificationoverdue'] = 'Certificación retrasada';
$string['conditioncertificationstatus'] = 'Estatus de certificación';
$string['conditioncertificationstatusdescription'] = 'Usuarios que tienen estatus \'{$a->status}\' en certificación \'{$a->fullname}\\';
$string['conditioncertificationstatusdescriptionnegated'] = 'Usuarios que no tienen estatus \'{$a->status}\' en certificación \'{$a->fullname}\\';
$string['conditioncertificationsuspended'] = 'Certificación suspendida';
$string['conditionuserallocated'] = 'Usuario asignado a certificación';
$string['conditionuserallocateddescription'] = 'Usuarios asignados a certificación {$a}';
$string['conditionusernotallocated'] = 'Usuarios no asignados a certificación';
$string['conditionusernotallocateddescription'] = 'Usuarios no asignados a certificación {$a}';
$string['confirmdeletecertification'] = '¿Está seguro que desea eliminar la certificación \'{$a}\' y sus datos asociados ? Esta acción no puede deshacerse.';
$string['confirmduplicate'] = 'Se creará una copia de la configuración del certificado y Usted podrá cambiar el progranma y otras propiedades. No se realizará ninguna asignación de usuarios a la copia.';
$string['currentprogram'] = 'Programa vigente';
$string['currentprogram_help'] = 'Este es el programa vigente que este usuario está tomando';
$string['dateoverrided'] = 'Fecha anulada';
$string['dayssinceallocation'] = 'Días desde asignación';
$string['daystakingcertification'] = 'Días tomando certificación';
$string['default'] = 'Predeterminado';
$string['deleteuserallocation'] = 'eliminar asignación de usuario';
$string['displaycertificationdate'] = 'Fecha de certificación';
$string['displaycertificationname'] = 'Nombre de certificación';
$string['displayexpirydate'] = 'Fecha de expiración de certificación';
$string['duedate'] = 'Fecha esperada';
$string['duedate_help'] = 'Fecha de cuando es esperado este certificado';
$string['duplicate'] = 'Duplicar';
$string['dynamic'] = 'Dinámica';
$string['dynamicrules'] = 'Reglas dinámicas';
$string['editcertification'] = 'Editar certificación \'{$a}\\';
$string['editcertificationname'] = 'Editar nombre de certificación';
$string['editcertificationsettings'] = 'Editar configuraciones de certificación';
$string['editcontent'] = 'Editar contenido';
$string['editdetails'] = 'Editar detalles';
$string['enddate'] = 'Fecha de fin';
$string['entitycertification'] = 'Certificación';
$string['entitycertificationusers'] = 'Certificación usa asignación y finalización';
$string['errorallocatinguserintorelatedprogram'] = 'No puede asignar usuario en programa relacionado';
$string['errorallocationsourcenotfound'] = 'Origen de asignación no encontrado';
$string['errorcantdeletecertification'] = 'No puede eliminar certificación';
$string['errorcantdeletenotarchivedcertification'] = 'No puede eliminar una certificación no archivada';
$string['errorcantmanageusers'] = 'No puede gestionar usuarios';
$string['errorcantrestorecertification'] = 'No puede restaurar certificación';
$string['errorevaluatinguserallocationstatus'] = 'Error al evaluar estatus de asignación de usuario';
$string['errorinvalidcertification'] = 'Certificación inválida';
$string['errorinvaliddate'] = 'Fecha inválida';
$string['errormissingassociatedprogram'] = 'Falta programa asociado';
$string['errornopermissionmanagecertifications'] = 'Sin permiso para gestionar certificaciones';
$string['errornopermissionviewreports'] = 'Sin permiso parra ver reportes';
$string['errorreporttypedoesnotexist'] = 'El tipo de reporte no existe';
$string['erroruseralreadyallocatedincertification'] = 'El usuario ya está asignado en certificación';
$string['erroruseralreadyallocatedinprogram'] = 'El usuario ya está asignado en programa';
$string['errorusernotinsametenant'] = 'Usuario no está dentro del mismo inquilino';
$string['eventcertificationcompleted'] = 'Certificación completada';
$string['eventcertificationcreated'] = 'Certificación creada';
$string['eventcertificationdeleted'] = 'Certificación eliminada';
$string['eventcertificationupdated'] = 'Certificación actualizada';
$string['eventuserallocated'] = 'Fue asignado a la certificación';
$string['eventuserdeallocated'] = 'Usuario des-asignado';
$string['eventuserupdated'] = 'Asignación de usuario actualizada';
$string['expired'] = 'Expirado';
$string['expiredcertificationslink'] = '<a href="{$a->href}">Certificaciones expiradas: {$a->count}</a>';
$string['expireddateisonorafter'] = 'Fecha expirada en o después de';
$string['expirydate'] = 'Fecha de expiración';
$string['expirydate_help'] = 'Fecha de expiración para la certificación';
$string['futureallocation'] = 'Asignación futura';
$string['idnumber'] = 'Número ID';
$string['manageprograms'] = 'Gestionar programas';
$string['manual'] = 'Manual';
$string['messageprovider:certificationcompleted'] = 'Certificación completada';
$string['messageprovider:certificationuserallocated'] = 'Usuario asignado';
$string['messageprovider:certificationuserdeallocated'] = 'Usuario des-asignado';
$string['missingcertification'] = 'Certificación faltante';
$string['missingfullname'] = 'Falta nombre completo';
$string['missingprogram'] = 'Falta programa';
$string['never'] = 'Nunca';
$string['newcertification'] = 'Nueva certificación';
$string['newvaluefor'] = 'Nuevo valor para';
$string['notificationmsgcertificationcompleted'] = '¡Felicitaciones! Usted completó la certificación \'{$a}\'.';
$string['notificationmsgcertificationuserallocated'] = 'Usted ha sido asignado a la certificación \'{$a}\'.';
$string['notificationmsgcertificationuserdeallocated'] = 'Usted ha sido des-asignado de la certificación \'{$a}\'.';
$string['notificationsubjectcertificationcompleted'] = 'Certificación \'{$a}\' completada';
$string['notificationsubjectcertificationuserallocated'] = 'Asignado a certificación \'{$a}\\';
$string['notificationsubjectcertificationuserdeallocated'] = 'Des-asignado de certificación \'{$a}\\';
$string['notset'] = 'No configurado';
$string['nousersselected'] = 'Por favor seleccione al menos un usuario';
$string['ongoingcertificationslink'] = '<a href="{$a->href}">Certificaciones en cursos: {$a->count}</a>';
$string['open'] = 'Abierto';
$string['outcomeallocation'] = 'Asignar usuarios a certificaciones';
$string['outcomeallocationdescription'] = 'Asignar usuarios a certificación {$a}<br />
Conservar fecha de inicio predeterminada del certificado';
$string['outcomedeallocation'] = 'Des-asignar usuarios de certificaciones';
$string['outcomedeallocationdescription'] = 'Des-asignar usuarios de certificación {$a}';
$string['overdue'] = 'Vencidas';
$string['overduecertificationslink'] = '<a href="{$a->href}">Certificaciones vencidas: {$a->count}</a>';
$string['pluginname'] = 'Certificaciones';
$string['previouscertexpirydate'] = 'Fecha de expiración de certificaciones previas';
$string['privacy:metadata:certification_completions'] = 'Información acerca de la finalización de certificación.';
$string['privacy:metadata:certification_completions:certificationid'] = 'La certificación que completó el usuario.';
$string['privacy:metadata:certification_completions:expirydate'] = 'La fecha de expiración de esta finalización de certificación.';
$string['privacy:metadata:certification_completions:timemodified'] = 'La fecha de modificación de esta finalización de certificación.';
$string['privacy:metadata:certification_completions:userid'] = 'El usuario que completó la certificación';
$string['privacy:metadata:certification_users'] = 'Información acerca de la asignación de certificación del usuario.';
$string['privacy:metadata:certification_users:certificationid'] = 'La certificación asignada a-';
$string['privacy:metadata:certification_users:status'] = 'Si es que el usuario ha sido suspendido de la certificación.';
$string['privacy:metadata:certification_users:timemodified'] = 'La fecha modificada de la asignación del usuario.';
$string['privacy:metadata:certification_users:userid'] = 'El usuario asignado.';
$string['program'] = 'Programa';
$string['progressreport'] = 'Reporte del progreso';
$string['recertduedaterelative'] = 'Fecha esperada';
$string['recertexpirydate'] = 'Fecha de expiración';
$string['recertgraceperiod'] = 'Período de gracia';
$string['recertification'] = 'Re-certificación';
$string['recertificationprogram'] = 'Programa de re-certificación';
$string['recertstartdaterelative'] = 'Fecha de inicio';
$string['reg_wpcertifications'] = 'Número de certificaciones ({$a})';
$string['reportactivecerts'] = 'Reporte del sistema para certificaciones activas';
$string['reportarchivedcerts'] = 'Reporte del sistema para certificaciones archivadas';
$string['reportbuilderactivecertifications'] = 'El ver la lista de certificaciones activas es imposible sin el plugin tool_reportbuilder';
$string['reportbuilderarchivedcertifications'] = 'El ver la lista de certificaciones archivadas es imposible sin el plugin tool_reportbuilder';
$string['reportbuilderdynamicrules'] = 'El ver la lista de reglas dinámicas es imposible sin el plugin tool_reportbuilder';
$string['reportbuilderuserallocations'] = 'El ver la lista de asignaciones de usuarios es imposible sin el plugin tool_reportbuilder';
$string['reportbuilderuserlist'] = 'El ver la lista de  usuarios es imposible sin el plugin tool_reportbuilder';
$string['reportcertificationprogress'] = 'Reporte del sistema para progreso de certificación';
$string['reportcertsusers'] = 'Reporte del sistema para usuarios de certificación';
$string['reportusercerts'] = 'Reporte del sistema para lista de certificación de usuario';
$string['requirerecertification'] = 'Requerir certificación';
$string['restore'] = 'Restaurar';
$string['revokecertification'] = 'Revocar certificación';
$string['revoked'] = 'Revocada';
$string['revokedby'] = 'Revocada por';
$string['revokednotification'] = 'Esta certificación ha sido revocada exitosamente.';
$string['revokewarning'] = '¿Está seguro de querer revocar la certificación de \'{$a}\'? Las distinciones o algunos otras extras que podrían haber sido dados al completar no serán revocadas.';
$string['rolemanagerdescription'] = 'Perite crear y gestionar certificaciones dentro del inquilino actual y asignarles usuarios';
$string['selectadifferentprogram'] = 'Seleccionar un programa diferente';
$string['selectcertificationcondition'] = 'Certificación';
$string['selectcertificationcondition_help'] = 'Seleccionar la certificación en donde será aplicada esta condición';
$string['selectcertificationoutcome'] = 'Certificación';
$string['selectcertificationoutcome_help'] = 'Seleccionar la certificación en donde será aplicada esta acción';
$string['selectdate'] = 'Seleccionar fecha';
$string['selectprogram'] = 'Seleccionar programa';
$string['selectprogram_help'] = 'Seleccionar  un programa a ser asociado con esta certificación';
$string['startdate'] = 'Fecha de inicio';
$string['startdate_help'] = 'Fecha de cuando inicia la certificación';
$string['status'] = 'Estatus';
$string['suspended'] = 'Suspendido';
$string['suspendeddateisonorafter'] = 'Fecha suspendida en o después de';
$string['tagarea_tool_certification'] = 'Certificaciones';
$string['tags'] = 'Marcas';
$string['timecreated'] = 'Creada en';
$string['toomanycertificationstoshow'] = 'Demasiadas certificaciones para mostrar';
$string['userallocation'] = 'Asignación de usuario';
$string['usercompletion'] = 'Finalización de usuario';
$string['userduedate'] = 'Fecha esperada';
$string['userduedate_help'] = 'Seleccionar una fecha esperada de certificación para este usuario.';
$string['users'] = 'Usuarios';
$string['userstartdate'] = 'Fecha de inicio';
$string['userstartdate_help'] = 'Seleccionar la fecha cuando el usuario podrá comenzar la certificación. Esta fecha solamente será aplicada a este usuario.';
$string['userstatus'] = 'Estatus';
$string['userstatus_help'] = 'El estatus de suspendido ocultará esta certificación al usuario, mientras que el estatus predeterminado lo mostrará.';
