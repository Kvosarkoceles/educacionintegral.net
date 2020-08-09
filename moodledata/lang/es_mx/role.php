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
 * Strings for component 'role', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Agregando nuevo rol';
$string['addrole'] = 'Añadir un nuevo rol';
$string['advancedoverride'] = 'Anular rol avanzado';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir asignar roles';
$string['allowed'] = 'Permitido';
$string['allowoverride'] = 'Permitir anular roles';
$string['allowroletoassign'] = 'Permitir a los usuarios con el rol {$a->fromrole} asignar el rol {$a->targetrole}';
$string['allowroletooverride'] = 'Permitir a los usuarios con el rol {$a->fromrole} anular el rol {$a->targetrole}';
$string['allowroletoswitch'] = 'Permitir a los usuarios con el rol {$a->fromrole} cambiar al rol {$a->targetrole}';
$string['allowroletoview'] = 'Permitirle a usuarios con rol {$a->fromrole} que vean al rol {$a->targetrole}';
$string['allowswitch'] = 'Permitir cambios de rol';
$string['allowview'] = 'Permitirle ver a rol';
$string['allsiteusers'] = 'Todos los usuarios del sitio';
$string['analytics:listinsights'] = 'Enlistar intuiciones (predicciones)';
$string['analytics:listowninsights'] = 'Enlistar las intuiciones (predicciones) propias';
$string['analytics:managemodels'] = 'Gestionar modelos';
$string['archetype'] = 'Arquetipo de rol';
$string['archetypecoursecreator'] = 'ARQUETIPO: Creador de cursos';
$string['archetypeeditingteacher'] = 'ARQUETIPO: Profesor con permiso de edición';
$string['archetypefrontpage'] = 'ARQUETIPO: Usuario autenticado en la portada';
$string['archetypeguest'] = 'ARQUETIPO: Invitado';
$string['archetype_help'] = 'El rol arquetipo determina los permisos cuando un se restablece un rol a su valor por defecto. También determina los permisos nuevos para el papel cuando el sitio se actualiza.';
$string['archetypemanager'] = 'ARQUETIPO: Mánager';
$string['archetypestudent'] = 'ARQUETIPO: Estudiante';
$string['archetypeteacher'] = 'ARQUETIPO: Profesor sin permiso de edición';
$string['archetypeuser'] = 'ARQUETIPO: Usuario autenticado';
$string['assignanotherrole'] = 'Asignar otro rol';
$string['assignedroles'] = 'Roles asignados';
$string['assignerror'] = 'Error al asignar el rol {$a->role} al usuario {$a->user}.';
$string['assignglobalroles'] = 'Asignar roles globales';
$string['assignmentcontext'] = 'Contexto de asignación';
$string['assignmentoptions'] = 'Opciones de asignación';
$string['assignrole'] = 'Asignar rol';
$string['assignrolenameincontext'] = 'Asignar rol \'{$a->role}\' en {$a->context}';
$string['assignroles'] = 'Asignar roles';
$string['assignroles_help'] = '<p>
Al asignar un rol a un usuario en un contexto, usted
le está garantizando los permisos propios de ese rol
en el contexto actual y en todos los contextos de
rango \'inferior\'.
</p>

<p>
Contextos:
<ol>
<li>Sitio/Sistema</li>
<li>Categorías de cursos</li>
<li>Cursos</li>
<li>Bloques y Actividades</li>
</ol>
</p>

<p>
Así, si le da a un estudiante el rol de usuario de un
curso, tendrá ese rol para ese curso, pero también para
todos los bloques y actividades dentro del curso. Sus
permisos reales dependerán de otros roles y anularán
los que han sido definidos.
</p>

<p>
Vea también
<a href="help.php?file=roles.html">Roles</a>,
<a href="help.php?file=contexts.html">Contextos</a>,
<a href="help.php?file=permissions.html">Permisos</a> y
<a href="help.php?file=overrides.html">Anulaciones</a>.
</p>';
$string['assignrolesin'] = 'Asignar roles en {$a}';
$string['assignrolesrelativetothisuser'] = 'Asignar roles relativos a este usuario';
$string['backtoallroles'] = 'Regresar a la lista de todos los roles';
$string['backup:anonymise'] = 'Hacer anónimos los datos de usuarios en el respaldo';
$string['backup:backupactivity'] = 'Respaldar actividades';
$string['backup:backupcourse'] = 'Restaurar cursos';
$string['backup:backupsection'] = 'Repaldar secciones';
$string['backup:backuptargetimport'] = 'Respaldar para importar';
$string['backup:configure'] = 'Configurar opciones de respaldo';
$string['backup:downloadfile'] = 'Descargar archivos de las áreas respaldos';
$string['backup:userinfo'] = 'Respaldar datos de usuario';
$string['badges:awardbadge'] = 'Otorgarle insignia a un usuario';
$string['badges:configurecriteria'] = 'Configurar / editar criterio para ganar una insignia';
$string['badges:configuredetails'] = 'Detalles para configurar / editar  insignia';
$string['badges:configuremessages'] = 'Mensajes para configurar insignia';
$string['badges:createbadge'] = 'Crear/duplicar insignia';
$string['badges:deletebadge'] = 'Eliminar insignias';
$string['badges:earnbadge'] = 'Ganar insignia';
$string['badges:manageglobalsettings'] = 'Configuraciones globales para gestionar insignias';
$string['badges:manageownbadges'] = 'Ver y gestionar sus propias insignias ganadas';
$string['badges:revokebadge'] = 'Revocar insignia de un usuario';
$string['badges:viewawarded'] = 'Ver usuarios que ganaron una insignia específica sin poder otorgar una insignia';
$string['badges:viewbadges'] = 'Ver insignias disponibles sin ganarlas';
$string['badges:viewotherbadges'] = 'Ver insignias públicas en los perfiles de otros usuarios';
$string['block:edit'] = 'Editar la configuración de un bloque';
$string['block:view'] = 'Ver bloque';
$string['blog:create'] = 'Crear nuevas entradas de blog';
$string['blog:manageentries'] = 'Editar y gestionar entradas';
$string['blog:manageexternal'] = 'Editar y gestionar blogs externos';
$string['blog:search'] = 'Buscar entradas de blog';
$string['blog:view'] = 'Ver entradas de blog';
$string['blog:viewdrafts'] = 'Ver entradas de blog en borrador';
$string['calendar:manageentries'] = 'Gestionar cualquier entrada de calendario';
$string['calendar:managegroupentries'] = 'Gestionar entradas de calendario de grupo';
$string['calendar:manageownentries'] = 'Gestionar entradas de calendario propias';
$string['capabilities'] = 'Capacidades';
$string['capability'] = 'Capacidad';
$string['category:create'] = 'Crear categorías';
$string['category:delete'] = 'Eliminar categorías';
$string['category:manage'] = 'Gestionar categorías';
$string['category:update'] = 'Actualizar categorías';
$string['category:viewcourselist'] = 'Ver lista de  cursos en los cuales Usted está inscrito';
$string['category:viewhiddencategories'] = 'Ver categorías ocultas';
$string['category:visibility'] = 'Ver categorías ocultas';
$string['checkglobalpermissions'] = 'Comprobar permisos del sistema';
$string['checkpermissions'] = 'Comprobar los permisos';
$string['checkpermissionsin'] = 'Comprobar los permisos en {$a}';
$string['checksystempermissionsfor'] = 'Comprobar los permisos de {$a->fullname}';
$string['checkuserspermissionshere'] = 'Comprobar los permisos que tiene {$a->fullname} in este {$a->contextlevel}';
$string['chooseroletoassign'] = 'Por favor, seleccione un rol a asignar';
$string['cohort:assign'] = 'Agregar y eliminar miembros de cohorte';
$string['cohort:manage'] = 'Crear, eliminar y mover cohortes';
$string['cohort:view'] = 'Ver cohortes de todo el sitio';
$string['comment:delete'] = 'Eliminar comentarios';
$string['comment:post'] = 'Enviar comentarios';
$string['comment:view'] = 'Ver comentarios';
$string['competency:competencygrade'] = 'Configurar valoración de competencia';
$string['competency:competencymanage'] = 'Gestionar estructuras de competencia';
$string['competency:competencyview'] = 'Ver estructuras de competencia';
$string['competency:coursecompetencyconfigure'] = 'Configurar configuraciones de competencia de curso';
$string['competency:coursecompetencygradable'] = 'Recibir puntuaciones de competencia';
$string['competency:coursecompetencymanage'] = 'Gestionar competencias del curso';
$string['competency:coursecompetencyview'] = 'Ver competencias del curso';
$string['competency:evidencedelete'] = 'Eliminar evidencia';
$string['competency:plancomment'] = 'Comentar sobre un plan de aprendizaje';
$string['competency:plancommentown'] = 'Comentar sobre el plan de aprendizaje propio';
$string['competency:planmanage'] = 'Gestionar planes de aprendizaje';
$string['competency:planmanagedraft'] = 'Gestionar borradores de planes de aprendizaje';
$string['competency:planmanageown'] = 'Gestionar los planes de aprendizaje propios';
$string['competency:planmanageowndraft'] = 'Gestionar los borradores de planes de aprendizaje propios';
$string['competency:planrequestreview'] = 'Solicitar la revisión de un plan de parendizaje';
$string['competency:planrequestreviewown'] = 'Solicitar la revisión del plan de parendizaje propio';
$string['competency:planreview'] = 'Revisar un plan de aprendizaje';
$string['competency:planview'] = 'Ver todos los planes de aprendizaje';
$string['competency:planviewdraft'] = 'Ver borradores de planes de aprendizaje';
$string['competency:planviewown'] = 'Ver planes de aprendizaje propios';
$string['competency:planviewowndraft'] = 'Ver los borradores propios de planes de aprendizaje';
$string['competency:templatemanage'] = 'Gestionar plantillas de plan de aprendizaje';
$string['competency:templateview'] = 'Ver plantillas de plan de aprendizaje';
$string['competency:usercompetencycomment'] = 'Comentar acerca de una competencia del usuario';
$string['competency:usercompetencycommentown'] = 'Comentar acerca de una competencia propia';
$string['competency:usercompetencyrequestreview'] = 'Solicitar la revisión de una competencia del usuario';
$string['competency:usercompetencyrequestreviewown'] = 'Solicitar la revisión de una competencia de usuario propia';
$string['competency:usercompetencyreview'] = 'Revisar una competencia del usuario';
$string['competency:usercompetencyview'] = 'Ver una competencia del usuario';
$string['competency:userevidencemanage'] = 'Gestionar evidencia sobre aprendizaje previo';
$string['competency:userevidencemanageown'] = 'Gestionar evidencia propia sobre aprendizaje previo';
$string['competency:userevidenceview'] = 'Ver evidencia sobre aprendizaje previo de un usuario';
$string['confirmaddadmin'] = '¿Realmente desea agregar al usuario <strong>{$a}</strong> como nuevo administrador del sitio?';
$string['confirmdeladmin'] = '¿Realmente desea eliminar al usuario <strong>{$a}</strong> de la lista de administradores del sitio?';
$string['confirmroleprevent'] = '¿Realmente desea eliminar <strong>"{$a->role}"</strong> de la lista de roles con la capacidad de "{$a->cap}" en el contexto "{$a->context}"?';
$string['confirmroleunprohibit'] = '¿Realmente desea eliminar <strong>"{$a->role}"</strong> de la lista de roles a los que se prohibe la capacidad de "{$a->cap}" en el contexto "{$a->context}"?';
$string['confirmunassign'] = '¿Está seguro de que quiere eliminar este rol a este usuario?';
$string['confirmunassignno'] = 'Cancelar';
$string['confirmunassigntitle'] = 'Confirmar cambio de rol';
$string['confirmunassignyes'] = 'Eliminar';
$string['contentbank:access'] = 'Acceder al banco de contenido';
$string['contentbank:deleteanycontent'] = 'Eliminar cualquier contenido del banco de contenido';
$string['contentbank:deleteowncontent'] = 'Eliminar contenido del banco de contenido propio';
$string['contentbank:manageanycontent'] = 'Gestionar cualquier contenido desde el banco de contenido';
$string['contentbank:manageowncontent'] = 'Gestionar cualquier contenido desde su banco propio de contenido';
$string['contentbank:upload'] = 'Subir nuevo contenido al banco de contenido';
$string['contentbank:useeditor'] = 'Crear o editar contenido usando un editor de tipo de contenido';
$string['context'] = 'Contexto';
$string['course:activityvisibility'] = 'Ocultar/mostrar actividades';
$string['course:bulkmessaging'] = 'Enviar un mensaje a mucha gente';
$string['course:changecategory'] = 'Cambiar la categoría del curso';
$string['course:changefullname'] = 'Cambiar el nombre completo del curso';
$string['course:changeidnumber'] = 'Cambiar el número ID del curso';
$string['course:changelockedcustomfields'] = 'Modificar campos personalizados bloqueados';
$string['course:changeshortname'] = 'Cambiar el nombre corto del curso';
$string['course:changesummary'] = 'Cambiar el resumen del curso';
$string['course:configurecustomfields'] = 'Configurar campos personalizados';
$string['course:create'] = 'Crear cursos';
$string['course:creategroupconversations'] = 'Crear conversaciones grupales';
$string['course:delete'] = 'Eliminar cursos';
$string['course:enrolconfig'] = 'Configurar instancias de inscripción en cursos';
$string['course:enrolreview'] = 'Revisar inscripciones del curso';
$string['course:ignoreavailabilityrestrictions'] = 'Ignorar restricciones de disponibilidad';
$string['course:ignorefilesizelimits'] = 'Usar archivos mayores a las restricciones por tamaño';
$string['course:isincompletionreports'] = 'Mostrarse en reportes de finalización';
$string['course:manageactivities'] = 'Gestionar actividades';
$string['course:managefiles'] = 'Gestionar archivos';
$string['course:managegrades'] = 'Gestionar calificaciones';
$string['course:managegroups'] = 'Gestionar grupos';
$string['course:managescales'] = 'Gestionar escalas';
$string['course:markcomplete'] = 'Marcar usuarios como finalizados en finalización del curso';
$string['course:movesections'] = 'Mover secciones';
$string['course:overridecompletion'] = 'Anular estatus de finalización de actividad';
$string['course:recommendactivity'] = 'Actividades recomendadas en el Selector de Actividades';
$string['course:renameroles'] = 'Renombrar roles';
$string['course:request'] = 'Solicitar nuevos cursos';
$string['course:reset'] = 'Reiniciar curso';
$string['course:reviewotherusers'] = 'Revisar otros usuarios';
$string['course:sectionvisibility'] = 'Controlar visibilidad de sección';
$string['course:setcurrentsection'] = 'Ajustar sección actual';
$string['course:setforcedlanguage'] = 'Forzar idioma del curso';
$string['course:tag'] = 'Cambiar marcas del curso';
$string['course:togglecompletion'] = 'Marcar manualmente actividades como completadas';
$string['course:update'] = 'Actualizar ajustes de curso';
$string['course:useremail'] = 'Habilitar/deshabilitar dirección email';
$string['course:view'] = 'Ver cursos sin participación';
$string['course:viewcoursegrades'] = 'Ver calificaciones de curso';
$string['course:viewhiddenactivities'] = 'Ver actividades ocultas';
$string['course:viewhiddencourses'] = 'Ver cursos ocultos';
$string['course:viewhiddensections'] = 'Ver secciones ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos de usuario ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:viewsuspendedusers'] = 'Ver usuarios suspendidos.';
$string['course:visibility'] = 'Ocultar/mostrar cursos';
$string['createrolebycopying'] = 'Crear un nuevo rol copiando {$a}';
$string['createthisrole'] = 'Crear este rol';
$string['currentcontext'] = 'Contexto actual';
$string['currentrole'] = 'Rol actual';
$string['customroledescription'] = 'Descripción personalizada';
$string['customroledescription_help'] = 'Las descripciones de roles estándar se localizan automáticamente si la descripción personalizada está vacía.';
$string['customrolename'] = 'Nombre completo personalizado';
$string['customrolename_help'] = 'Los nombres de los roles estándar se localizan automáticamente si el nombre personalizado está vacío. Usted debe proporcionar un nombre completo para todos los roles personalizados.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultx'] = 'Valor predeterminado: {$a}';
$string['defineroles'] = 'Definir roles';
$string['deletecourseoverrides'] = 'Eliminar todas las anulaciones del curso';
$string['deletelocalroles'] = 'Eliminar todas las asignaciones de rol locales';
$string['deleterolesure'] = '<p>¿Está seguro de que quiere eliminar el rol "{$a->name} ({$a->shortname})"?</p><p>Actualmente este rol está asignado a {$a->count} usuarios.</p>';
$string['deletexrole'] = 'Eliminar el rol {$a}';
$string['duplicaterole'] = 'Duplicar este rol';
$string['duplicaterolesure'] = '<p>¿Está seguro de que quiere duplicar el rol "{$a->name} ({$a->shortname})"?</p>';
$string['editingrolex'] = 'Editando el rol \'{$a}\'';
$string['editrole'] = 'Editar rol';
$string['editxrole'] = 'Editar el rol {$a}';
$string['errorbadrolename'] = 'Nombre de rol incorrecto';
$string['errorbadroleshortname'] = 'Nombre corto de rol incorrecto';
$string['errorexistsrolename'] = 'El nombre de este rol ya existe';
$string['errorexistsroleshortname'] = 'El nombre de este rol ya existe';
$string['errorroleshortnametoolong'] = 'El nombre corto no debe exceder de 100 caracteres';
$string['eventcapabilityassigned'] = 'Capacidad asignada';
$string['eventcapabilityunassigned'] = 'Capacidad des-asignada';
$string['eventroleallowassignupdated'] = 'Permitir evaluación de rol';
$string['eventroleallowoverrideupdated'] = 'Permitir anulación de rol';
$string['eventroleallowswitchupdated'] = 'Permitir cambio de rol';
$string['eventroleallowviewupdated'] = 'Permitir vista a rol';
$string['eventroleassigned'] = 'Rol asignado';
$string['eventrolecapabilitiesupdated'] = 'Capacidad del rol actualizada';
$string['eventroledeleted'] = 'Rol eliminado';
$string['eventroleunassigned'] = 'Rol desasignado';
$string['eventroleupdated'] = 'Rol actualizado';
$string['existingadmins'] = 'Administradores actuales del sitio';
$string['existingusers'] = '{$a} usuarios existentes';
$string['explanation'] = 'Explicación';
$string['export'] = 'Exportar';
$string['extusers'] = 'Usuarios existentes';
$string['extusersmatching'] = 'Usuarios existentes que coinciden con \'{$a}\'';
$string['filter:manage'] = 'Gestionar configuración de filtros locales';
$string['frontpageuser'] = 'Usuario autenticado en la portada';
$string['frontpageuserdescription'] = 'Todos los usuarios ingresados en el curso de la portada del sitio.';
$string['globalrole'] = 'Rol del sistema';
$string['globalroleswarning'] = '¡ADVERTENCIA! Cualquier rol que asigne desde esta página se aplicará a los usuarios asignados en todo el sitio, incluyendo la portada y todos los cursos.';
$string['gotoassignroles'] = 'Ir a Asignar roles en este {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ir a Asignar roles del sistema';
$string['grade:edit'] = 'Editar calificaciones';
$string['grade:export'] = 'Exportar calificaciones';
$string['grade:hide'] = 'Ocultar/mostrar calificaciones de los ítems';
$string['grade:import'] = 'Importar calificaciones';
$string['grade:lock'] = 'Bloquear calificaciones de los ítems';
$string['grade:manage'] = 'Gestionar ítems de calificación';
$string['grade:managegradingforms'] = 'Gestionar métodos de calificación avanzados';
$string['grade:manageletters'] = 'Gestionar calificaciones con letra';
$string['grade:manageoutcomes'] = 'Manejar resultados de calificación';
$string['grade:managesharedforms'] = 'Gestionar plantillas avanzadas de formatos de calificación';
$string['grade:override'] = 'Pasar calificaciones por alto';
$string['grade:sharegradingforms'] = 'Publicar (compartir) formatos avanzados de calificación como plantillas';
$string['grade:unlock'] = 'Desbloquear calificaciones o elementos';
$string['grade:view'] = 'Ver calificaciones propias';
$string['grade:viewall'] = 'Ver calificaciones de otros usuarios';
$string['grade:viewhidden'] = 'Ver calificaciones ocultas al usuario';
$string['h5p:deploy'] = 'Mostrar contenido H5P';
$string['h5p:setdisplayoptions'] = 'Configurar las opciones de visualización de H5P';
$string['h5p:updatelibraries'] = 'Gestionar tipos de contenido H5P';
$string['highlightedcellsshowdefault'] = 'Los permisos resaltados marcados en la siguiente tabla son los permisos predeterminados para el arquetipo de rol actualmente seleccionado arriba.';
$string['highlightedcellsshowinherit'] = 'Las celdas resaltadas en la siguiente tabla muestran el permiso (si lo hay) que se hereda. Además de las capacidades cuyos permisos realmente desea cambiar, Usted debe dejar todo configurado a heredar.';
$string['inactiveformorethan'] = 'inactivo durante más de {$a->timeperiod}';
$string['ingroup'] = 'en el grupo "{$a->group}"';
$string['inherit'] = 'Heredar';
$string['invalidpresetfile'] = 'Archivo de definición de rol inválido';
$string['legacy:admin'] = 'ROL ANTIGUO: Administrador';
$string['legacy:coursecreator'] = 'ROL ANTIGUO: Creador de cursos';
$string['legacy:editingteacher'] = 'ROL ANTIGUO: Profesor (editor)';
$string['legacy:guest'] = 'ROL ANTIGUO: Invitado';
$string['legacy:student'] = 'ROL  ANTIGUO: Estudiante';
$string['legacy:teacher'] = 'ROL ANTIGUO: Profesor (no editor)';
$string['legacytype'] = 'Tipo de rol antiguo';
$string['legacy:user'] = 'ROL ANTIGUO: Usuario autenticado';
$string['listallroles'] = 'Listar todos los roles';
$string['localroles'] = 'Roles asignados localmente';
$string['mainadmin'] = 'Admin principal';
$string['mainadminset'] = 'Admin principal';
$string['manageadmins'] = 'Gestionar los administradores del sitio';
$string['manager'] = 'Mánager';
$string['managerdescription'] = 'Los mánagers pueden acceder a los cursos y modificarlos, aunque generalmente no participan en los cursos.';
$string['manageroles'] = 'Gestionar roles';
$string['maybeassignedin'] = 'Tipos de contexto en que puede asignarse este rol';
$string['morethan'] = 'Más de {$a}';
$string['multipleroles'] = 'Roles múltiples';
$string['my:configsyspages'] = 'Configurar plantillas del sistema para las páginas del Tablero';
$string['my:manageblocks'] = 'Gestionar bloques de página del Tablero';
$string['neededroles'] = 'Roles con permiso';
$string['nocapabilitiesincontext'] = 'Sin capacidades disponibles en este contexto';
$string['noneinthisx'] = 'Ninguno en este {$a}';
$string['noneinthisxmatching'] = 'No hay usuarios coincidentes con \'{$a->search}\' en este {$a->contexttype}';
$string['norole'] = 'Sin rol';
$string['noroleassignments'] = 'Este usuario no tiene ninguna asignación de rol en ningún lugar de este sitio';
$string['noroles'] = 'No hay roles';
$string['notabletoassignroleshere'] = 'La asignación de roles en este contexto no ha sido habilitada por un administrador.';
$string['notabletooverrideroleshere'] = 'No tiene privilegios para anular los permisos de ningún rol aquí';
$string['notes:manage'] = 'Gestionar notas';
$string['notes:view'] = 'Ver notas';
$string['notset'] = 'No ajustado';
$string['novisibleroles'] = 'Sin roles';
$string['overrideanotherrole'] = 'Anular otro rol';
$string['overridecontext'] = 'Anular contexto';
$string['overridepermissions'] = 'Anular permisos';
$string['overridepermissionsforrole'] = 'Reemplazar los permisos del rol \'{$a->role}\' en el contexto \'{$a->context}';
$string['overridepermissions_help'] = 'Las anulaciones de permisos posibilitan permitir o impedir las capacidades seleccionadas en un contexto específico.';
$string['overridepermissionsin'] = 'Anular permisos en {$a}';
$string['overrideroles'] = 'Anular roles';
$string['overriderolesin'] = 'Anular roles en {$a}';
$string['overrides'] = 'Anulaciones';
$string['overridesbycontext'] = 'Anulaciones (por contexto)';
$string['permission'] = 'Permiso';
$string['permission_help'] = 'Los permisos son configuraciones de capacidad. Hay 4 opciones:

* No ajustado
* Permitir: se concede el permiso para la capacidad.
* Prevenir: se retira el permiso para la capacidad, incluso aunque se admita en un contexto más alto.
* Prohibir: se retira por completo el permiso y no se puede anular en ningún nivel más bajo (más específico).';
$string['permissions'] = 'Permisos';
$string['permissionsforuser'] = 'Permisos para {$a}';
$string['permissionsincontext'] = 'Permisos en {$a}';
$string['portfolio:export'] = 'Exportar a portafolios';
$string['potentialusers'] = '{$a} usuarios potenciales';
$string['potusers'] = 'Usuarios potenciales';
$string['potusersmatching'] = 'Usuarios potenciales que coinciden con \'{$a}\'';
$string['prevent'] = 'Prevenir';
$string['privacy:metadata:preference:showadvanced'] = 'Maneja el botón de alternar el modo avanzado.';
$string['privacy:metadata:role_assignments'] = 'Asignaciones de rol';
$string['privacy:metadata:role_assignments:component'] = 'Plugin responsable para asignación de rol, vacío cuando es asignado manualmente.';
$string['privacy:metadata:role_assignments:itemid'] = 'La ID de la instancia de inscripción/autenticación responsable para esta asignación de rol';
$string['privacy:metadata:role_assignments:modifierid'] = 'La ID del usuario que creó o modificó la asignación de rol';
$string['privacy:metadata:role_assignments:roleid'] = 'La ID del rol';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'Esta tabla almacena los roles asignados en cada contexto.';
$string['privacy:metadata:role_assignments:timemodified'] = 'La fecha de cuando fue creada o modificada esta asignación de rol.';
$string['privacy:metadata:role_assignments:userid'] = 'La ID del usuario';
$string['privacy:metadata:role_capabilities'] = 'Capacidades del rol';
$string['privacy:metadata:role_capabilities:capability'] = 'El nombre de la capacidad';
$string['privacy:metadata:role_capabilities:modifierid'] = 'La ID del usuario que creó o modificó la capacidad';
$string['privacy:metadata:role_capabilities:permission'] = 'El permiso para una capacidad: heredar, permitir, prevenir o prohibir.';
$string['privacy:metadata:role_capabilities:roleid'] = 'La ID del rol';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'Las capacidades y las capacidades de anulación para un rol particular en un contexto particular';
$string['privacy:metadata:role_capabilities:timemodified'] = 'La fecha cuando la capacidad fue creada o modificada.';
$string['privacy:metadata:role_cohortroles'] = 'Roles a cohorte';
$string['prohibit'] = 'Prohibir';
$string['prohibitedroles'] = 'Prohibido';
$string['question:add'] = 'Agregar nuevas preguntas';
$string['question:config'] = 'Configurar tipos de pregunta';
$string['question:editall'] = 'Editar todas las preguntas';
$string['question:editmine'] = 'Editar sus propias preguntas';
$string['question:flag'] = 'Señalar (bandera) preguntas mientras las contesta';
$string['question:managecategory'] = 'Editar categorías de preguntas';
$string['question:moveall'] = 'Mover todas las preguntas';
$string['question:movemine'] = 'Mover sus propias preguntas';
$string['question:tagall'] = 'Marcartodas las preguntas';
$string['question:tagmine'] = 'Marcar sus propias preguntas';
$string['question:useall'] = 'Usar todas las preguntas';
$string['question:usemine'] = 'Usar sus propias preguntas';
$string['question:viewall'] = 'Ver todas las preguntas';
$string['question:viewmine'] = 'Ver sus propias preguntas';
$string['rating:rate'] = 'Añada las valuaciones (ratings) a los elementos';
$string['rating:view'] = 'Ver la valuación (rating) total recibida';
$string['rating:viewall'] = 'Ver todas las valuaciones (ratings) emitidas por los usuarios';
$string['rating:viewany'] = 'Ver el total de valuaciones (ratings) que alguien recibió';
$string['resetrole'] = 'Reiniciar';
$string['resettingrole'] = 'Reiniciando al rol \'{$a}\'';
$string['restore:configure'] = 'Configurar opciones de restauración';
$string['restore:createuser'] = 'Crear usuarios en la restauración';
$string['restore:restoreactivity'] = 'Restaurar actividades';
$string['restore:restorecourse'] = 'Restaurar cursos';
$string['restore:restoresection'] = 'Restaurar secciones';
$string['restore:restoretargetimport'] = 'Restaurar a partir de archivos dirigidos a importar';
$string['restore:rolldates'] = 'Permitir cambiar fechas de configuración de actividades cuando restaure';
$string['restore:uploadfile'] = 'Subir archivos a las áreas de respaldos';
$string['restore:userinfo'] = 'Restaurar datos de usuario';
$string['restore:viewautomatedfilearea'] = 'Reestaurar cursos desde respaldos automatizados';
$string['risks'] = 'Riesgos';
$string['roleallowheader'] = 'Permitir rol:';
$string['roleallowinfo'] = 'Seleccione un rol a ser añadido a la lista de roles permitidos en el contexto "{$a->context}", capacidad "{$a->cap}":';
$string['role:assign'] = 'Asignar roles a los usuarios';
$string['roleassignments'] = 'Asignaciones de rol';
$string['roledefinitions'] = 'Definiciones de rol';
$string['rolefullname'] = 'Nombre';
$string['roleincontext'] = '{$a->role} en {$a->context}';
$string['role:manage'] = 'Crear y gestionar roles';
$string['role:override'] = 'Anular permisos para otros';
$string['roleprohibitheader'] = 'Prohibir rol';
$string['roleprohibitinfo'] = 'Seleccione un rol para añadir a la lista de roles prohibidos en el contexto "{$a->context}", capacidad "{$a->cap}":';
$string['rolerepreset'] = 'Usar preconfiguración del rol';
$string['roleresetdefaults'] = 'Valores por defecto';
$string['roleresetrole'] = 'Usar rol o arquetipo';
$string['role:review'] = 'Revisión de permisos para los demás';
$string['rolerisks'] = 'Riesgos de roles';
$string['roles'] = 'Roles';
$string['role:safeoverride'] = 'Anular permisos seguros para otros';
$string['roleselect'] = 'Seleccionar rol';
$string['rolesforuser'] = 'Roles para usuario {$a}';
$string['roles_help'] = '<p> Un rol es un conjunto de permisos definidos para todo el sitio que usted puede asignar a usuarios específicos en contextos específicos. </p> <p> Por ejemplo, puede tener un rol denominado "Profesor" que se ajusta para permitir que los profesores (y no otros usuarios) puedan hacer ciertas cosas. Una vez que dicho rol existe, usted puede asignarlo a algún usuario del curso y convertirlo en "Profesor" de ese curso. Usted podría asimismo asignar el rol a un usuario en la categoría de cursos y convertirlo en "Profesor" de todos los cursos pertenecientes a tal categoría, o asignar el rol a un usuario simplemente en un foro, restringiendo las posibilidades a ese foro en concreto. </p> <p> Un rol debe tener un <strong>nombre</strong>.

Si necesita denominar el rol en varios idiomas, puede utilizar la sintaxis multi-idioma (\'multilang\') si así lo desea, como, por ejemplo <pre>
<span class="multilang" lang="en">Teacher</span>
<span class="multilang" lang="es">Profesor</span>
<span class="multilang" lang="fr">Enseignant</span>

</pre>
</p> <pre> &lt;span lang="fr" class="multilang"&gt;Enseignant&lt;/span&gt; </p> <p>&lt;span lang="de" class="multilang"&gt;Dozent&lt;/span&gt; </p> <p>&lt;span lang="en" class="multilang"&gt;Teacher&lt;</p> <p>/span&gt; &lt;span lang="es" class="multilang"&gt;Profesor&lt;/span&gt; </pre> <p>

Si lo hace así, asegúrese de que el filtrado de cadenas (plugins/filtros/gestionar_filtros/contenido multi-lenguaje) está activado en su administración. </p> <p> El <strong>nombre corto</strong> es necesario para otros plugins de Moodle que puedan necesitar referirse a sus Roles (e.g., cuando se cargan usuarios desde un archivo o cuando se llevan a cabo inscripciones a través de un plugin de inscripcion), por lo que LE RECOMENDAMOS QUE NO LO CAMBIE. </p> La <strong>descripción</strong> consiste en describir el rol con sus propias palabras, de forma que cualquiera entienda en qué consiste.ciones</a>. </p>';
$string['roleshortname'] = 'Nombre corto';
$string['roleshortname_help'] = 'El nombre corto del rol es un identificador del rol de bajo nivel, en el cual solamente están permitidos caracteres ASCII alfanuméricos. No cambie los nombres cortos de los roles estándar.';
$string['role:switchroles'] = 'Cambiar a otros roles';
$string['roletoassign'] = 'Rol a asignar';
$string['roletooverride'] = 'Rol a anular';
$string['safeoverridenotice'] = 'Nota: Los permisos con riesgo más elevado están bloqueados porque usted únicamente puede anular capacidades seguras.';
$string['search:query'] = 'Realizar búsquedas en el sitio completo';
$string['selectanotheruser'] = 'Seleccionar otro rol';
$string['selectauser'] = 'Seleccionar un usuario';
$string['selectrole'] = 'Seleccionar un rol';
$string['showallroles'] = 'Mostrar todos los roles';
$string['showthisuserspermissions'] = 'Mostrar los permisos de este usuario';
$string['site:accessallgroups'] = 'Acceder a todos los grupos';
$string['siteadministrators'] = 'Administradores del sitio';
$string['site:approvecourse'] = 'Aprobar la creación de cursos';
$string['site:backup'] = 'Hacer copia de seguridad de los cursos';
$string['site:config'] = 'Cambiar configuración del sitio';
$string['site:configview'] = 'Ver el árbol de administración del sitio (pero no las páginas en su interior)';
$string['site:deleteanymessage'] = 'Eliminar cualquier mensaje en el sitio';
$string['site:deleteownmessage'] = 'Eliminar mensajes enviados por y para el usuario';
$string['site:doanything'] = 'Permiso para todo';
$string['site:doclinks'] = 'Mostrar enlaces a documentos fuera del sitio';
$string['site:forcelanguage'] = 'Anular idioma de curso';
$string['site:import'] = 'Importar otros cursos a un curso';
$string['site:maintenanceaccess'] = 'Acceder al sitio mientras está en modo de mantenimiento.';
$string['site:manageallmessaging'] = 'Añadir, quitar, bloquear y desbloquear contactos para cualquier usuario';
$string['site:manageblocks'] = 'Gestionar bloques en una página';
$string['site:managecontextlocks'] = 'Gestionar congelamiento de contextos';
$string['site:messageanyuser'] = 'Saltarse preferencias de privacidad del usuario para mensajear a cualquier usuario';
$string['site:mnetloginfromremote'] = 'Ingreso desde una aplicación remota vía MNet';
$string['site:mnetlogintoremote'] = 'Acceder a una aplicación remota vía MNet';
$string['site:readallmessages'] = 'Leer todos los mensajes del sitio';
$string['site:restore'] = 'Restaurar cursos';
$string['site:sendmessage'] = 'Enviar mensajes a cualquier usuario';
$string['site:trustcontent'] = 'Confiar en contenidos enviados';
$string['site:uploadusers'] = 'Subir nuevos usuarios desde un archivo';
$string['site:viewanonymousevents'] = 'Ver eventos anónimos en reportes';
$string['site:viewfullnames'] = 'Ver siempre nombres completos de los usuarios';
$string['site:viewparticipants'] = 'Ver a los participantes';
$string['site:viewreports'] = 'Ver reportes';
$string['site:viewuseridentity'] = 'Ver la identidad completa del usuario en las listas';
$string['tag:edit'] = 'Editar marcas existentes';
$string['tag:editblocks'] = 'Editar bloques en páginas de marcas';
$string['tag:flag'] = 'Señalar marcas como inapropiadas';
$string['tag:manage'] = 'Gestionar todas las marcas';
$string['thisnewrole'] = 'Este nuevo rol';
$string['thisusersroles'] = 'Asignaciones de rol de este usuario';
$string['unassignarole'] = 'Desasignar rol {$a}';
$string['unassignconfirm'] = '¿Realmente desea desasignar el rol "{$a->role}" del usuario "{$a->user}"?';
$string['unassignerror'] = 'Error al desasignar el rol {$a->role} del usuario {$a->user}.';
$string['user:changeownpassword'] = 'Cambiar la contraseña propia';
$string['user:create'] = 'Crear usuarios';
$string['user:delete'] = 'Eliminar usuarios';
$string['user:editmessageprofile'] = 'Editar perfil de mensajería de usuario';
$string['user:editownmessageprofile'] = 'Editar el propio perfil de mensajería de usuario';
$string['user:editownprofile'] = 'Editar el perfil de usuario propio';
$string['user:editprofile'] = 'Editar perfil de usuario';
$string['user:ignoreuserquota'] = 'Ignorar límite de cuota de usuario';
$string['user:loginas'] = 'Ingresar como otro usuario';
$string['user:manageblocks'] = 'Gestionar bloques en el perfil de usuario de otros usuarios';
$string['user:manageownblocks'] = 'Gestionar bloques en el perfil de usuario público propio';
$string['user:manageownfiles'] = 'Gestionar archivos en las áreas de archivos privados propios';
$string['user:managesyspages'] = 'Configurar el diseño de página predeterminado para los perfiles de usuario públicos';
$string['user:readuserblogs'] = 'Ver todos los blogs de usuario';
$string['user:readuserposts'] = 'Ver todos los mensajes en foro de los usuarios';
$string['usersfrom'] = 'Usuarios de {$a}';
$string['usersfrommatching'] = 'Usuarios de {$a->contextname} que coinciden con \'{$a->search}';
$string['usersinthisx'] = 'Usuarios en este {$a}';
$string['usersinthisxmatching'] = 'Usuarios en este {$a->contexttype} que coinciden con \'{$a->search}';
$string['userswithrole'] = 'Todos los usuarios con rol';
$string['userswiththisrole'] = 'Usuarios con rol';
$string['user:update'] = 'Actualizar perfiles de usuario';
$string['user:viewalldetails'] = 'Ver información completa del usuario';
$string['user:viewdetails'] = 'Ver perfiles de usuario';
$string['user:viewhiddendetails'] = 'Ver detalles ocultos de los usuarios';
$string['user:viewlastip'] = 'Ver la última dirección IP del usuario';
$string['user:viewuseractivitiesreport'] = 'Ver reportes de actividad de los usuarios';
$string['user:viewusergrades'] = 'Ver calificaciones de los usuarios';
$string['useshowadvancedtochange'] = 'Usar "Mostrar avanzadas" para cambiar';
$string['viewingdefinitionofrolex'] = 'Viendo la definición del rol \'{$a}\'';
$string['viewrole'] = 'Ver detalles del rol';
$string['webservice:createmobiletoken'] = 'Crear una ficha (token) web para acceso por dispositivos móviles';
$string['webservice:createtoken'] = 'Crear una ficha (token) de servicio web';
$string['webservice:managealltokens'] = 'Gestionar todas las fichas (tokens) de servicios web de los usuarios';
$string['whydoesuserhavecap'] = '¿Por qué {$a->fullname} tiene capacidad de {$a->capability} en el contexto {$a->context}?';
$string['whydoesusernothavecap'] = '¿Por qué {$a->fullname} no tiene la capacidad de {$a->capability} en el contexto {$a->context}?';
$string['xroleassignments'] = 'Asignaciones de rol de {$a}';
$string['xuserswiththerole'] = 'Usuarios con el rol "{$a->role}"';
