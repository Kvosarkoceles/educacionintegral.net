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
 * Strings for component 'enrol_arlo', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_arlo
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessed'] = 'Accedido';
$string['alert'] = 'Alerta';
$string['allowcompletedevents'] = 'Permitir eventos completados';
$string['allowcompletedevents_help'] = 'Los eventos completados podrán ser seleccionados y enlazados a una instancia de inscripción.';
$string['allowcompletedevents_text'] = 'Los eventos completados pueden ser enlazados.';
$string['allowcompletedonlineactivities'] = 'Permitir actividades en-línea completadas';
$string['allowcompletedonlineactivities_help'] = 'Las actividades en-línea copletadas podrán ser seleccionadas y enlazadas a una instancia de inscripción.';
$string['allowcompletedonlineactivities_text'] = 'Las actividades en-línea completadas pueden ser enlazadas';
$string['allowhiddencourses'] = 'Permitir cursos ocultos';
$string['allowhiddencoursesdiabled'] = 'Permitir cursos ocultos está deshabilitado en la configuración del sitio.';
$string['allowhiddencourses_help'] = 'Nota: Usted necesitará deshabilitar los mensajes de BienVenida al curso o ajustarlos apropiadamente.';
$string['allowhiddencourses_text'] = 'Permitir que las instancias de inscripción Arlo en cursos ocultos sean procesadas.';
$string['allowportalintegration'] = 'Permitir integración al portal';
$string['allowportalintegration_text'] = 'Permitir integración con portal Arlo';
$string['allowunenrolaccessedui'] = 'Permitir des-inscrito accedido';
$string['allowunenrolaccessedui_help'] = 'Añadir un control a la página de inscripción no-exitosa para manejar Solicitudes para Juntar Contacto.';
$string['allowunenrolaccessedui_text'] = 'Permitir habilidad para des-inscribir usuarios que hayan accedido a cursos Arlo inscritos.';
$string['allowunenrolactiveenrolmentsui'] = 'Permitir des-inscribir inscripciones activas';
$string['allowunenrolactiveenrolmentsui_help'] = 'Añade el ícono de acción de des-inscribir a un método de inscripción de usuarios.';
$string['allowunenrolactiveenrolmentsui_text'] = 'Permitirle a usuario con capacidad para des-inscribir que manualmente des-inscriba usuarios sin suspenderlos primero.';
$string['apipassword'] = 'Contraseña Arlo';
$string['apipassword_desc'] = '¿Olvidó su contraseña? <a title="{$a->title}" href="{$a->url}" target="_blank">Aprenda a reiniciarla.</a>';
$string['apirequests'] = 'Solicitudes API';
$string['apistatusclienterror'] = '¡Error en conexión al cliente!';
$string['apistatusok'] = 'OK, la última solicitud fue {$a}';
$string['apistatusservererror'] = 'Servicio no disponible actualmente';
$string['apiusername'] = 'Nombre_de_usuario Arlo';
$string['apiusername_desc'] = 'Importante: Su cuenta de usuario Arlo debe tener  API habilitada, <a title="{$a->title}" href="{$a->url}" target="_blank">aprender más.</a>';
$string['arlo:config'] = 'Configurar instancias de inscripción Arlo';
$string['arloconnection'] = 'Conexión Arlo';
$string['arlocontact'] = 'Contacto Arlo';
$string['arlocoursecode'] = 'Código de curso Arlo';
$string['arloenrolment'] = 'Inscripción Arlo';
$string['arlo:manage'] = 'Gestionar instancias de incripción Arlo';
$string['arlo:synchronizecore'] = 'Manualmente jalar nuevos recursos de curso';
$string['arlo:synchronizeinstance'] = 'Manualmente jalar nuevos registros y empujar nuevos resultados para una instancia de inscripción';
$string['arlo:unenrol'] = 'Des-inscribir (dar de baja) usuarios supendidos';
$string['assignedgroup'] = 'Grupo asignado';
$string['assignrole'] = 'Asignar rol';
$string['associatearlotemplate'] = 'Asociar plantilla Arlo';
$string['associateduser'] = 'Usuario asociado';
$string['associatetemplatewithcourse'] = 'Asociar Plantilla Arlo con curso Moodle';
$string['backtoenrolmentmethods'] = 'Regresar a métodos de inscripción';
$string['browseassociateduser'] = 'Mirar cuenta de usuario asociado';
$string['browseuserprofile'] = 'Mirar perfil del usuario';
$string['changessaved'] = 'Cambios guardados';
$string['cleanup'] = 'Limpiar';
$string['codeprimary'] = 'Código primario';
$string['communications'] = 'Comunicaciones';
$string['completed'] = 'completado';
$string['configuration'] = 'Configuración';
$string['contactmergefailurereport'] = 'Reporte de junta de contacto';
$string['contactmergerequestfailure'] = 'Falla al aplicar solicitud de junta de contacto';
$string['contactmergerequestfailures'] = 'Fallas de solicitud para juntar contacto';
$string['contactrecordinformation'] = 'Información de registro de contacto';
$string['contactrecordmissing'] = 'Registro faltante de contacto.';
$string['contactresourcemissing'] = 'Recurso de contacto faltante del Registro.';
$string['courseenrolment'] = 'Inscripción a curso';
$string['coursewelcome'] = 'BienVenida al curso';
$string['creategroup'] = 'Crear grupo nuevo';
$string['customwelcomemessage'] = 'Mensaje personalizado de BienVenida';
$string['customwelcomemessage_help'] = 'Puede añadirse un mensaje personalizado de BienVenida como texto simple o formato automático Moodle, incluyendo marcas HTML y marcas multi-idioma.

Pueden incluirse los siguientes reemplazables en el mensaje:

* Nombre del curso {$a->coursename}
* URL del curso {$a->courseurl}
* Nombre completo del usuario {$a->fullname}
* Nombre_de_usuario del susuario {$a->username}
* URL para contraseña olvidada {$a->forgotpasswordurl}';
$string['dailytask'] = 'Trabajo diario Arlo para los trabajos más intensivos';
$string['defaultgroupnametext'] = '{$a->name} grupo Arlo';
$string['defaultperiod'] = 'Duración por defecto de inscripción';
$string['defaultperiod_desc'] = 'Duración por defecto del tiempo por el cual es válida esta inscripción. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['defaultperiod_help'] = 'Duración por defecto del tiempo por el cual es válida esta inscripción, comenzando con el momento en el que el usuario es inscrito. Si se deshabilita, la duración de la inscripción será ilimitada por defecto.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultrole_help'] = 'El rol que debería de ser asignado a usuarios durante la inscripción';
$string['delivered'] = 'Entregado';
$string['destinationcontact'] = 'Contacto destino';
$string['disabled'] = 'Deshabilitado';
$string['divertedto'] = 'Desviado a {$a}';
$string['email'] = 'Email';
$string['email_desc'] = 'Usar dirección Email completa';
$string['emaillocalpart'] = 'Parte local del Email';
$string['emaillocalpart_desc'] = 'Usar dirección del nombre_de_usuario del Email antes del símbolo de @';
$string['emaillocalpartrandomnumber'] = 'Parte local del Email y número aleatorio';
$string['emaillocalpartrandomnumber_desc'] = 'Usar dirección del nombre_de_usuario del Email antes del símbolo de @ + número aleatorio';
$string['emailrandomnumber'] = 'Email y número aleatorio';
$string['emailrandomnumber_desc'] = 'Usar dirección completa del Email + número aleatorio';
$string['enrolment'] = 'Inscripción';
$string['enrolmentfailure'] = 'Ha ocurrido falla en inscripción';
$string['enrolmentinstancedisabled'] = 'Instancia de inscripción deshabilitada';
$string['enrolmentinstances'] = 'Instancias de Inscripción';
$string['enrolmentinstancescount'] = 'Instancias de Inscripción: {$a}';
$string['enrolmentwillbeattemptedagain'] = 'La inscripción será intentada nuevamente vía el trabajo agendado estándar. Usted también podría intentar resolverlo vía una sincronización manual.';
$string['enrolperiod'] = 'Duración de inscripción';
$string['enrolusers'] = 'Inscribir usuarios';
$string['error_duplicateusers_smallmessage'] = 'Se encontraron usuarios duplicados en Moodle al concordar Contacto Arlo';
$string['error_duplicateusers_subject'] = 'Se encontraron usuarios duplicados en Moodle al concordar Contacto Arlo';
$string['errorselectevent'] = 'Usted debe seleccionar un evento';
$string['errorselectonlineactvity'] = 'Usted debe seleccionar una Actividad En-línea';
$string['errorselecttemplate'] = 'Por favor seleccione una Plantilla de evento';
$string['errorselecttype'] = 'Usted debe seleccionar un Tipo';
$string['event'] = 'Evento';
$string['eventcreated'] = 'Evento creado';
$string['eventresultpushingdisabled'] = 'El empuje de resultado del evento está deshabilitado en la configuración del sitio.';
$string['events'] = 'Eventos';
$string['eventupdated'] = 'Evento actualizado';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Seleccionar acción a realizar cuando caduca la inscripción del usuario. Por favor tenga en cuenta que algunos datos del usuario y configuraciones son purgadas del curso durante la des-inscripción (baja) del curso.';
$string['expirymessagesubject'] = 'Notificación de caducidad de inscripción';
$string['expirymessagetext'] = 'Estimado {$a->user},

Esta es una notificación de que su inscripción en el curso  \'{$a->coursename}\' ha caducado.';
$string['expirynotify'] = 'Notificarle al usuario sobre caducidad de inscripción';
$string['expirynotify_help'] = 'Esta configuración determina si es que son enviados mensajes de notificación de caducidad de inscripción.';
$string['extra'] = 'Extra';
$string['fail'] = 'Reprobar';
$string['failed'] = 'Reprobado';
$string['failures'] = 'Fallas';
$string['firstnamelastnamerandomnumber'] = 'Nombre, apellido(s) y número aleatorio';
$string['firstnamelastnamerandomnumber_desc'] = 'Usar las 3 primeras letras del nombre + 3 primeras letras de apellido(s) + número aleatorio';
$string['httpstatus:200'] = 'OK';
$string['httpstatus:201'] = 'Creado';
$string['httpstatus:302'] = 'Encontrado';
$string['httpstatus:400'] = 'Solicitud Mala';
$string['httpstatus:401'] = 'No-autorizado';
$string['httpstatus:403'] = 'Prohibido';
$string['httpstatus:404'] = 'No Encontrado';
$string['httpstatus:406'] = 'Inaceptable';
$string['httpstatus:409'] = 'Conflicto';
$string['httpstatus:415'] = 'Tipo de Medio No Soportado';
$string['httpstatus:500'] = 'Error Interno del Servidor';
$string['httpstatus:503'] = 'Servicio No Disponible';
$string['inprogress'] = 'En progreso';
$string['instanceexists'] = 'Arlo ya está sincronizado con rol seleccionado';
$string['invalidcredentials_smallmessage'] = 'Moodle no puede conectarse a API  Arlo. Por favor revise las configuraciones d ela conexión: {$a->url}';
$string['invalidcredentials_subject'] = 'Moodle no se puede conectar a API Arlo';
$string['locktimeout'] = 'La operación agotó el tiempo de espera mientras esperaba un bloqueo';
$string['longtime'] = 'Este proceso puede demorar mucho tiempo';
$string['managearlo'] = 'Gestionar Arlo';
$string['manualsynchronisenotice'] = 'Este proceso puede tardar mucho tiempo. No cierre su ventana del navegador. Usted será redireccionado a la página de métodos de inscripción una vez que el proceso haya completado.';
$string['matchbyarlouserdetails'] = 'Nombre, Apellido(s) y Email de Contacto Arlo';
$string['matchuseraccountsby'] = 'Aparear cuentas de usuario por';
$string['messagenotsent'] = 'Mensaje no enviado';
$string['messageprovider:administratornotification'] = 'Notificaciones al Administrador de problemas de integración';
$string['messagesent'] = 'Mensaje enviado';
$string['metadata:enrol_arlo_contact'] = 'Contacto Arlo';
$string['metadata:enrol_arlo_emailqueue'] = 'Comunicaciones';
$string['metadata:enrol_arlo_registration'] = 'Registro Arlo';
$string['moodleusern'] = 'Usuario Moodle {$a}';
$string['morethanonematch'] = 'Se encontró más de una coincidencia';
$string['morethanonemoodleuserfound'] = 'Se encontró más de un usuario Moodle con los mismos detalles';
$string['newaccountdetails'] = 'Detalles de cuenta nueva';
$string['newaccountfullmessage'] = 'Hola {$a->firstname},

Se ha creado una cuenta nueva para Usted en \'{$a->sitename}\'
y a Usted se le ha otorgado unanueva contraseña temporal.

Su información actual para ingresar es:
   ombre_de_usuario: {$a->username}
   contraseña: {$a->newpassword}
             (Usted necesitará cambiar su contraseña
              cuando ingrese por primera ves)

Para empezar a usar \'{$a->sitename}\', ingrese a
   {$a->link}

En la mayoría de los programas de correo esto debería aparecer como un enlace en color azul al cual solamente debe hacer clic. Si eso no funciona, entonces corte y pegue la dirección en la línea de dirección de su ventana del navegador de Internet.

Saludos del administrador de \'{$a->sitename}\' ,
{$a->signoff}';
$string['newaccountsubject'] = 'Cuenta de usuario nuevo';
$string['newuserdefaultemail'] = 'Nuevo Email por defecto de usuario';
$string['newuserdefaultemail_help'] = 'Nuevo Email por defecto de usuario';
$string['noassociateduser'] = 'Sin cuenta de usuario Moodle asociada.';
$string['noeventsoractivitiesfound'] = 'Sin eventos  "Activos" o';
$string['nomatchingenrolmentinstance'] = 'Sin instancia de inscripción coincidente.';
$string['notifyexpiry'] = 'Notificar caducidad';
$string['notok'] = 'No OK';
$string['notstarted'] = 'No iniciado';
$string['ok'] = 'OK';
$string['onlineactivities'] = 'Actividades en-línea';
$string['onlineactivity'] = 'Actividad en-línea';
$string['onlineactivitycreated'] = 'Actividad en-línea creada';
$string['onlineactivityresultpushingdisabled'] = 'El empujar resultados de actividad en línea está deshabilitado en la configuración del sitio.';
$string['onlineactivityupdated'] = 'Actividad en-línea actualizada';
$string['opennewtabtitle'] = 'Para abrir una pestaña nueva: en Windows: CTRL + click; en Mac: Command + click';
$string['outboundemaildelivery'] = 'Entrega de correo saliente';
$string['outcomepushingdisabled'] = 'El empuje de resultados está deshabilitado en la configuración del sitio.';
$string['outcomespushingdisabled'] = 'El empuje de resultados está deshabilitado';
$string['pass'] = 'Pasar';
$string['platform'] = 'URL de plataforma Arlo';
$string['pleasecheckrequestlog'] = 'Por favor revise <a href="{$a}">request log</a>';
$string['pluginname'] = 'Inscripción Arlo';
$string['pluginname_desc'] = '<p>Estas inscripciones son gestionadas por local_arlo</p>';
$string['pluginnotenabled'] = '¡Plugin no habilitado!';
$string['pluginstatus'] = 'Estatus';
$string['privacy:metadata:core_group'] = 'El plugin puede crear un nuevo grupo o puede usar un grupo existente para añadir miembros desde la instancia de inscripción.';
$string['privacy:metadata:enrol_arlo_contact'] = 'Información acerca del contacto Arlo enlazado a una cuenta de usuario Moodle.';
$string['privacy:metadata:enrol_arlo_contact:email'] = 'El Email del contacto Arlo';
$string['privacy:metadata:enrol_arlo_contact:firstname'] = 'El nombre del contacto Arlo';
$string['privacy:metadata:enrol_arlo_contact:lastname'] = 'Apellido(s) del contacto Arlo';
$string['privacy:metadata:enrol_arlo_contact:phonemobile'] = 'El número del teléfono móvil del contacto Arlo';
$string['privacy:metadata:enrol_arlo_contact:phonework'] = 'El número del teléfono del trabajo del contacto Arlo';
$string['privacy:metadata:enrol_arlo_contact:sourceguid'] = 'El GUID (IDentificador Único Global) del contacto Arlo.';
$string['privacy:metadata:enrol_arlo_contact:sourceid'] = 'La ID del contacto Arlo';
$string['privacy:metadata:enrol_arlo_contact:userid'] = 'La ID del usuario Moodle asociado con el contacto Arlo.';
$string['privacy:metadata:enrol_arlo_emailqueue'] = 'Información acerca de comunicaciones Email Arlo';
$string['privacy:metadata:enrol_arlo_emailqueue:area'] = 'Sitio o inscripción.';
$string['privacy:metadata:enrol_arlo_emailqueue:extra'] = 'Cualquier información adicional necesaria en el cuerpo del Email.';
$string['privacy:metadata:enrol_arlo_emailqueue:instanceid'] = 'El identificador de instancia del área.';
$string['privacy:metadata:enrol_arlo_emailqueue:status'] = 'En cola, enviado o fallido.';
$string['privacy:metadata:enrol_arlo_emailqueue:type'] = 'Usuario nuevo o bienvenida al curso.';
$string['privacy:metadata:enrol_arlo_emailqueue:userid'] = 'La ID del usuario Moodle asociado con el contacto Arlo.';
$string['privacy:metadata:enrol_arlo_registration'] = 'Información acerca del registro Arlo enlazado a una inscripción de usuario Moodle.';
$string['privacy:metadata:enrol_arlo_registration:enrolid'] = 'La ID de la instancia de inscripción asociada.';
$string['privacy:metadata:enrol_arlo_registration:grade'] = 'La calificación asociada con el registro Arlo.';
$string['privacy:metadata:enrol_arlo_registration:lastactivity'] = 'El momento que hubo alguna actividad en un sistema externo asociado con registro Arlo.';
$string['privacy:metadata:enrol_arlo_registration:outcome'] = 'El resultado (aprobar/reprobar) asociado con el registro Arlo.';
$string['privacy:metadata:enrol_arlo_registration:progresspercent'] = 'El valor decimal que representa un progreso y está asociado con el registro Arlo.';
$string['privacy:metadata:enrol_arlo_registration:progressstatus'] = 'El estado del progreso asociado con el registro Arlo';
$string['privacy:metadata:enrol_arlo_registration:sourcecontactguid'] = 'El GUID (IDentificador Único Global) del contacto Arlo.';
$string['privacy:metadata:enrol_arlo_registration:sourcecontactid'] = 'La ID del contacto Arlo.';
$string['privacy:metadata:enrol_arlo_registration:sourceguid'] = 'El GUID (IDentificador Único Global) del registro Arlo.';
$string['privacy:metadata:enrol_arlo_registration:sourceid'] = 'La ID del registro Arlo.';
$string['privacy:metadata:enrol_arlo_registration:userid'] = 'La ID del usuario Moodle asociado con el contacto Arlo.';
$string['pusheventresults'] = 'Empujar Resultados del Evento';
$string['pushonlineactivityresults'] = 'Empujar resultados de Actividad En-Línea';
$string['queued'] = 'Puesto en cola';
$string['reattemptenrolment'] = 'Re-intentar Inscripción';
$string['reattemptenrolmentconfirm'] = 'Por favor asegúrese de haber tomado acciones correctivas para todos los problemas encontrados en los reportes de fallas antes de re-intentar la inscripción, o la inscripción volverá a fallar. ¿Re-intentar inscripción?';
$string['registrationstatus'] = 'Estado de la Inscripción';
$string['remove'] = 'Quitar';
$string['removeallarloenrolmentsquestion'] = '¿Está seguro de querer quitar todas las inscripciones enlazadas por Arlo para {$a}?';
$string['removetemplatedanger'] = '<div class="alert alert-danger" role="alert">
<strong>¡Importante!</strong>
<p>El quitar la plantilla asociada quitará a todas las personas del curso que estén en las siguientes instancias de inscripción:</p>
{$a}
</div>';
$string['report'] = 'Reporte';
$string['requestlogcleanup'] = 'Limpieza de bitácora de solicitudes';
$string['requestlogcleanup_help'] = 'Quitar entradas de bitácora de solicitudes que seanmás viejas que el tiempo seleccionado.';
$string['resulting'] = 'Resultando';
$string['returntounsucessfulenrolments'] = 'Regresar a inscripciones no exitosas';
$string['savechanges'] = 'Guardar cambios';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de BienVenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si se habilita, los usuarios recibirán un mensaje de BienVenida vía Email cuando ellos sean inscritos en un curso.';
$string['sourcecontact'] = 'Contacto de origen';
$string['status'] = 'Activo';
$string['suspendeduser_smallmessage'] = 'Una cuenta de usuario ha sido suspendida. Por favor revise el perfil del usuario {$a->profileurl}';
$string['suspendeduser_subject'] = 'El plugin ha suspendido una cuenta de usuario';
$string['synchroniseinstancefor'] = 'Sincronizar manualmente inscripciones Arlo y resultados para  {$a}';
$string['synchroniseoperationiscurrentlylocked'] = 'La operación de sincronización de inscripción Arlo para esta instancia actualmente está bloqueada por otro proceso corriendo.';
$string['synchronize'] = 'Sincronizar';
$string['synchronizeinstance'] = 'Jalar manualmente registros nuevos y empujar resultados nuevos para una instancia de inscripción';
$string['template'] = 'Plantilla';
$string['timelogged'] = 'Tiempo anotado en bitácoras';
$string['timemodified'] = 'Hora modificada';
$string['type'] = 'Tipo';
$string['typeofevent'] = 'Tipo de Evento';
$string['unenrolcontact'] = 'Des-inscribir contacto';
$string['unenrolfromarlocourses'] = 'Des-inscribir de cursos enlazados Arlo';
$string['unknown'] = 'Desconocido';
$string['unlock'] = 'Desbloquear';
$string['unsuccessfulenrolment'] = 'Inscripción no exitosa';
$string['unsuccessfulenrolmentof'] = 'Inscripción no exitosa de {$a->fullname} en {$a->code}';
$string['unsuccessfulenrolments'] = 'Inscripciones no exitosas';
$string['unsuccessfulenrolmentscount'] = 'Inscripciones no exitosas: {$a}';
$string['unsuccessfulenrolment_smallmessage'] = 'Inscripción no exitosa de contacto Arlo, por favor revise el reporte {$a->report}';
$string['unsuccessfulenrolment_subject'] = 'Inscripción no exitosa de contacto Arlo';
$string['uri'] = 'URI';
$string['useraccountcreation'] = 'Creación de cuenta de usuario';
$string['useraccountmatching'] = 'Concordancia de cuenta de usuario';
$string['userassociationfailurereport'] = 'Reporte de asociación de usuario';
$string['usercreation'] = 'Creación de usuario';
$string['usernamegeneration_desc'] = '<p>El orden en el cual son usados diferentes formatos de nombre_de_usuario para generar un nombre_de_usuario para una nueva cuenta en Moodle. Si se encontró una cuenta existente con el mismo nombre_de_usuario que el generado, el siguiente formato  será intentado..</p><br>';
$string['userrecordinformation'] = 'Información de registro de usuario';
$string['viewreport'] = 'Ver reporte';
$string['welcometocourse'] = 'BienVenido a {$a}';
$string['welcometocoursetext'] = 'Bienvenido a {$a->coursename}!

Su nombre_de_usuario: {$a->username}

¿Olvidó su contraseña?

Usted puede reiniciar su contraseña usando la siguiente URL:

{$a->forgotpasswordurl}

Usted puede acceder a este curso en la siguiente URL:

{$a->courseurl}';
