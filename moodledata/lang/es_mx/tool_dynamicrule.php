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
 * Strings for component 'tool_dynamicrule', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_dynamicrule
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'Activo';
$string['activerules'] = 'Reglas de activo';
$string['addcondition'] = 'Añadir condición';
$string['addconditions'] = 'Añadir condiciones a esta regla';
$string['addoutcome'] = 'Añadir acción';
$string['addoutcomes'] = 'Añadir acciones a esta regla';
$string['after'] = 'En o después de';
$string['archive'] = 'Archivar';
$string['archived'] = 'Archivada';
$string['archivedrules'] = 'Reglas archivadas';
$string['archiverule'] = 'Archivar regla \'{$a}\\';
$string['availableplaceholders'] = 'Reemplazables disponibles';
$string['before'] = 'Antes';
$string['body'] = 'Cuerpo';
$string['broken'] = 'Roto';
$string['cohort'] = 'Cohorte';
$string['conditioncohortmember'] = 'Usuario es miembro de cohorte';
$string['conditioncohortmemberdescription'] = 'Usuarios que son miembros de cohorte \'{$a}\\';
$string['conditioncohortnotmember'] = 'Usuario no es miembro de cohorte';
$string['conditioncohortnotmemberdescription'] = 'Usuarios que no son miembros de cohorte \'{$a}\\';
$string['conditioncoursecompleted'] = 'Curso completado';
$string['conditioncoursecompleteddescription'] = 'Usuarios que han completado el curso \'{$a}\\';
$string['conditioncoursenotcompleted'] = 'Curso no completado';
$string['conditioncoursenotcompleteddescription'] = 'Usuarios que no han completado curso \'{$a}\\';
$string['conditionisbroken'] = 'Esta condición tiene un error.';
$string['conditionnotsaved'] = 'La condición no está guardada.';
$string['conditions'] = 'Condiciones';
$string['conditionuserenrolled'] = 'Usuario inscrito';
$string['conditionuserenrolleddescription'] = 'Usuarios que están inscritos en curso \'{$a->course}\'<br />
Método de inscripción: \'{$a->enrol}\\';
$string['conditionuserlastlogin'] = 'Último ingreso del usuario';
$string['conditionuserlastlogindescriptionbefore'] = 'Usuarios cuyo último ingreso fue {$a} en el pasado';
$string['conditionuserlastlogindescriptionever'] = 'Usuarios que han ingresado al menos una vez';
$string['conditionuserlastlogindescriptioninlast'] = 'Usuarios cuyo último ingreso fue en el último {$a}';
$string['conditionuserlastlogindescriptionnever'] = 'Usuarios que nunca han ingresado';
$string['conditionusernotenrolled'] = 'Usuario no inscrito';
$string['conditionusernotenrolleddescription'] = 'Usuarios que no están inscritos en curso \'{$a->course}\'<br />
Método de inscripción: \'{$a->enrol}\\';
$string['conditionusernotenrolleddescriptionwithenrol'] = 'Usuarios que no están inscritos en curso \'{$a->course}\' con método de inscripción \'{$a->enrol}\\';
$string['conditionuserprofilefield'] = 'Campo de perfil del usuario';
$string['conditionuserprofilefielddescription'] = 'Usuarios cuyo valor para campo de perfil \'{$a->fieldname}\' es \'{$a->fieldvalue}\\';
$string['confirmdeletecondition'] = '¿Está seguro de querer eliminar la condición \'{$a}\' y todos sus datos asociados? Esta acción no puede deshacerse.';
$string['confirmdeleteoutcome'] = '¿Está seguro de querer eliminar la acción \'{$a}\' y todos sus datos asociados? Esta acción no puede deshacerse.';
$string['confirmdeleterule'] = '¿Está seguro de querer eliminar la regla \'{$a}\' y todos sus datos asociados? Esta acción no puede deshacerse.';
$string['confirmdisableruleforedit'] = 'Esta regla será deshabilitada automáticamente para ser editada.';
$string['confirmduplicaterule'] = '¿Está seguro de querer duplicar la regla \'{$a}\'?';
$string['confirmenablerule'] = 'Las condiciones estarán bloqueadas cuando al menos un usuario sea afectado por esta regla. ¿Está seguro de querer habilitar esta regla?';
$string['countmatchingusers'] = '{$a} concordanciass en total';
$string['courseinternalid'] = 'ID interna de curso usada en URLs';
$string['courseurl'] = 'URL del curso';
$string['date'] = 'Fecha';
$string['datetypeever'] = 'Alguna vez';
$string['datetypeinlast'] = 'En los últimos';
$string['datetypenever'] = 'Nunca';
$string['datetypenone'] = 'No configurado';
$string['datetypepast'] = 'Sobre';
$string['deletecondition'] = 'Eliminar condición';
$string['deleteoutcome'] = 'Eliminar acción';
$string['deleterule'] = 'Eliminar regla \'{$a}\\';
$string['details'] = 'Detalles';
$string['disablerule'] = 'Deshabilitar regla \'{$a}\\';
$string['duplicate'] = 'Duplicar';
$string['duplicaterule'] = 'Duplicar regla \'{$a}\\';
$string['dynamicrule:manage'] = 'Gestionar reglas dinámicas';
$string['editactions'] = 'Editar acciones de regla \'{$a}\\';
$string['editcondition'] = 'Editar condición';
$string['editdetails'] = 'Editar detalles de regla \'{$a}\\';
$string['editdetailsbutton'] = 'Editar detalles';
$string['editoutcome'] = 'Editar acción';
$string['editrule'] = 'Editar regla \'{$a}\\';
$string['editrulename'] = 'Editar nombre de regla \'{$a}\\';
$string['enable'] = 'Habilitar';
$string['enablehelp'] = 'habilitando regla';
$string['enablehelp_help'] = 'Una regla requiere que al menos se habiliten una condición y una acción estén habilitadas. Y también que condiciones o acciones no deben contener errores.';
$string['enablehelpmodal'] = 'habilitando regla';
$string['enablehelpmodal_help'] = 'Una regla requiere que al menos se habiliten una acción.';
$string['enablerule'] = 'Habilitar regla \'{$a}\\';
$string['errorcannotcreate'] = 'Usted no tiene permiso para crear reglas';
$string['errorcannotmanage'] = 'Usted no tiene permiso para gestionar esta regla';
$string['errorinvalidbody'] = 'Cuerpo de notificación inválido';
$string['errorinvalidcohort'] = 'Cohorte inválida';
$string['errorinvalidcourse'] = 'Curso inválido';
$string['errorinvalidoperator'] = 'Operador inválido. Solamente están permitidos antes y después.';
$string['errorinvalidsubject'] = 'Asunto de notificación inválido';
$string['errorinvaliduserlastlogin'] = 'Fecha de último ingreso inválida';
$string['errorinvaliduserlastlogintype'] = 'Tipo de último ingreso inválido';
$string['errorinvaliduserprofilefield'] = 'Campo de perfil inválido';
$string['field'] = 'Campo';
$string['general'] = 'General';
$string['lastlogin'] = 'El último ingreso del usuario fue';
$string['lastlogin_help'] = 'Usted puede seleccionar una fecha relativa a la fecha actual o usuarios que nunca han ingresado.';
$string['limitreached'] = 'Límite de reglas dinámicas alcanzado';
$string['managebadges'] = 'Gestionar insignias';
$string['managecompetencies'] = 'Gestionar competencias';
$string['managerules'] = 'Gestionar reglas';
$string['match'] = 'Concordar';
$string['matchedtime'] = 'Tiempo concordado';
$string['matchlimitinvalid'] = 'La regla necesita ser disparada al menos una vez.';
$string['messageprovider:notificationoutcome'] = 'Acción de notificación para herramienta de regla dinámica';
$string['newnameforrule'] = 'Nuevo nombre para regla \'{$a}\\';
$string['newrule'] = 'Regla nueva';
$string['noruleconditions'] = 'Sin condiciones en esta regla';
$string['noruleoutcomes'] = 'Sin acciones en esta regla';
$string['operator'] = 'Condición';
$string['operatorafter'] = 'Después de';
$string['operatorbefore'] = 'Antes de';
$string['outcomebadge'] = 'Otorgar insignia';
$string['outcomebadgedescription'] = 'Otorgar insignia \'{$a}\' a usuarios';
$string['outcomecompetency'] = 'Otorgar competencia';
$string['outcomecompetencydescription'] = 'Otorgar competencia \'{$a}\' a usuarios';
$string['outcomeisbroken'] = 'Esta acción tiene un error.';
$string['outcomenotification'] = 'Notificación';
$string['outcomenotificationdescription'] = 'Enviar notificación \'{$a}\' a usuarios';
$string['outcomenotsaved'] = 'La acción no está guardada';
$string['outcomes'] = 'Acciones';
$string['placeholdersdesc'] = 'Reemplazables';
$string['pluginname'] = 'Reglas dinámicas';
$string['previewcoursefullname'] = 'Nombre completo del curso';
$string['previewcourseshortname'] = 'Nombre corto del curso';
$string['privacy:metadata:tool_dynamicrule_match'] = 'Información acerca del usuario concuerda con condiciones de regla particular. Como un resultado de la concordancia el usuario  es afectado por acciones definidas en la regla.';
$string['privacy:metadata:tool_dynamicrule_match:matchedtime'] = 'Sello de tiempo que indica cuando el usuario ha sido concordado con condiciones de regla.';
$string['privacy:metadata:tool_dynamicrule_match:ruleid'] = 'La ID de la regla';
$string['privacy:metadata:tool_dynamicrule_match:unmatchedtime'] = 'Sello de tiempo que indica cuando el usuario ya no concuerda con condiciones de regla después de que ha sido aplicada la acción.';
$string['privacy:metadata:tool_dynamicrule_match:userid'] = 'La ID del usuario que ha sido concordado a condiciones de la regla.';
$string['reg_wpdynamicrules'] = 'Número de reglas dinámicas ({$a})';
$string['reportmatchingusers'] = 'Reporte con usuarios que concuerdan con una regla dinámica';
$string['reportrulematches'] = 'Reporte con usuarios que concordaron y no concordaron con una regla dinámica';
$string['reportruleslist'] = 'Reporte del sistema para lista de reglas';
$string['rolemanager'] = 'Mánager dinámico de reglas';
$string['rolemanagerdescription'] = 'Permite crear y gestionar reglas dinámicas dentro del inquilino actual';
$string['ruledisabled'] = 'Esta regla está deshabilitada.';
$string['ruleisbroken'] = 'Esta regla está rota. Al menos una de sus condiciones o acciones está rota.';
$string['rulematchfreq'] = 'Límites de acción de la regla';
$string['rulematchfreqdesc0'] = 'No puede ser aplicada para más de';
$string['rulematchfreqdesc1'] = 'veces';
$string['rulematchfreqenable'] = 'Limitar el número de veces que las acciones pueden ser aplicadas a cada usuario';
$string['rulematchfreq_help'] = 'Por defecto, las acciones de la regla son aplicadas a los usuarios cuando se cumplen las condiciones. Si está habilitada la frecuencia de concordancia, la aplicación de la regla estará limitada al número de veces seleccionado por período deseado o siempre.';
$string['rulename'] = 'Nombre';
$string['rulenotfound'] = 'La regla no fue encontrada.';
$string['select'] = 'Seleccionar';
$string['selectbadge'] = 'Seleccionar insignia';
$string['selectcompetency'] = 'Seleccionar competencia';
$string['selectcompetency_help'] = 'Seleccionar competencia a emitir';
$string['subject'] = 'Asunto';
$string['taskprocessrules'] = 'Reglas de procesamiento';
$string['timeadded'] = 'Añadido a cohorte o después de esa fecha y hora';
$string['timecompleted'] = 'La fecha y hora de finalización es en o después de';
$string['timeenrolled'] = 'La fecha o la hora de inicio de inscripción es en o después de';
$string['toomanybadgestoshow'] = 'Demasiadas insignias para mostrar';
$string['unarchiverule'] = 'Desarchivar regla \'{$a}\\';
$string['unmatchedtime'] = 'Tiempo no concordado';
$string['userplaceholders'] = 'Reemplazables del usuario';
$string['value'] = 'Valor';
$string['viewmatchingusers'] = 'Ver usuarios coincidentes';
$string['viewreport'] = 'Ver reporte para \'{$a}\\';
