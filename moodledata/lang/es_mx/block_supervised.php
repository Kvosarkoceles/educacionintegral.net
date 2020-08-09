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
 * Strings for component 'block_supervised', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   block_supervised
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = '¿Usar esta sala en sesiones?';
$string['active_help'] = 'Si se habilita, Usted puede iniciar y planear nuevas sesiones en esta sala';
$string['activesessionsstudenttitle'] = 'Usted tiene {$a} sesión(es) activa(s)';
$string['activesessiontitle'] = 'Usted tiene una sesión activa';
$string['addclassroom'] = 'Añadir una sala ...';
$string['addclassroomnavbar'] = 'Añadir sala';
$string['addclassroompagetitle'] = 'Añadir sala';
$string['addingnewclassroom'] = 'Añadiendo sala nueva';
$string['addingnewlessontype'] = 'Añadiendo nuevo tipo de lección';
$string['addingnewsession'] = 'Planear nueva lección';
$string['addlessontype'] = 'Añadir un tipo de lección ...';
$string['addlessontypenavbar'] = 'Añadir tipo de lección';
$string['addlessontypepagetitle'] = 'Añadir tipo de lección';
$string['addsessionpagetitle'] = 'Planear nueva sesión';
$string['allclassrooms'] = 'Añadir salas';
$string['allgroups'] = 'Todos los grupos';
$string['alllessontypes'] = 'Todos los tipos de lecciones';
$string['allstates'] = 'Todos los estados';
$string['allsupervisers'] = 'Todos los supervisores';
$string['allusers'] = 'Todos los usuarios';
$string['backtocourse'] = 'Regresar al curso';
$string['blocktitle'] = 'Supervisado';
$string['cannotdeleteclassroom'] = 'Hubo sesiones en esta sala. Elimine sesiones que usan esta sala primeramente. Usted puede ocultar la sala';
$string['cannotdeletelessontype'] = 'Usted no puede eliminar este tipo de lección, porque está siendo usada en sesiones o en exámenes';
$string['classroom'] = 'Sala';
$string['classroomsbreadcrumb'] = 'Salas';
$string['classroomsdefinition'] = 'Definición de salas';
$string['classroomsdefinition_help'] = 'Cualquiera de las sesiones supervisadas tiene lugar en algún sitio, como por ejemplo en el salón de clases. El salón de clases está definido por una sub-red de IPs (pregúntele a su administrador del sitio cual es el rango de IPs para su salón de clase, en caso de que no lo sepa). Solamente los estudiantes que estén trabajando en computadoras con las IPs especificadas participan en la sesión supervisada, por lo que los estudiantes del grupo no pueden hacer trampa al acceder al sitio desde otros lugares cuando Usted supervisa a sus compañeros en algunos salones de clase. Los salones de clase son accesibles desde todos los cursos.';
$string['classroomsheader'] = 'Lista de salas';
$string['classroomspagetitle'] = 'Lista de salas';
$string['classroomsurl'] = 'Salas';
$string['completeSession'] = 'Completa';
$string['coursesettings'] = 'Configuraciones específicas del curso';
$string['createclassroom'] = '¡Para planear o iniciar una reunión Usted necesita crear (o hacer visible) al menos una sala!';
$string['deleteclassroomcheck'] = '¿Está seguro de querer eliminar completamente esta sala de todos los cursos en el sitio?';
$string['deletelessontypecheck'] = '¿Está seguro de querer eliminar completamente este tipo de lección?';
$string['deletesessionnavbar'] = '¿Eliminar sesión?';
$string['duration'] = 'Duración (min)';
$string['durationvalidationerror'] = 'La duración debe ser mayor de cero';
$string['editclassroomnavbar'] = 'Editar sala';
$string['editclassroompagetitle'] = 'Editar sala';
$string['editingclassroom'] = 'Editando sala';
$string['editinglessontype'] = 'Editando tipo de lección';
$string['editingsession'] = 'Editando sesión';
$string['editlessontypenavbar'] = 'Editar tipo de lección';
$string['editlessontypepagetitle'] = 'Editar tipo de lección';
$string['editsessionnavbar'] = 'Editar sesión';
$string['editsessionpagetitle'] = 'Editar sesión planeada';
$string['emaildeletesessionurl'] = 'Usted puede eliminar esta sesión: {$a}';
$string['emaileditedsession'] = 'Hola {$a->teachername},

Su sesión en \'{$a->sitename}\' has been edited.
Editor:        {$a->editorname}

Información de la sesión actualizada:
{$a->sessioninfo}

{$a->editsession}
{$a->deletesession}

{$a->haveaniceday}';
$string['emaileditedsessionsubject'] = '{$a->sitename}: sesión ha sido editada en {$a->timestart}';
$string['emaileditsessionurl'] = 'Usted puede eliminar esta sesión: {$a}';
$string['emailnewsession'] = 'Hola {$a->teachername},
Una nueva sesión ha sido creada para tí en \'{$a->sitename}\'.
Creador:        {$a->creatorname}

{$a->sessioninfo}

{$a->editsession}
{$a->deletesession}

{$a->haveaniceday}';
$string['emailnewsessionsubject'] = '{$a->sitename}: nueva sesión en {$a->timestart}';
$string['emailremovedsession'] = 'Hola {$a->teachername},

Su sesión en \'{$a->sitename}\' ha sido eliminada.
Eliminador:        {$a->removername}

{$a->sessioninfo}

{$a->custommessage}

{$a->haveaniceday}';
$string['emailremovedsessionmsg'] = 'Una persona que quitó esta sesión dejó un mensaje para para Usted:
--------------------------------------------------
{$a}
--------------------------------------------------';
$string['emailremovedsessionsubject'] = '{$a->sitename}: sesión ha sido removida en {$a->timestart}';
$string['emailsessioncomment'] = 'Comentario de la sesión:
--------------------------------------------------
{$a}
--------------------------------------------------';
$string['emailsessioninfo'] = 'Curso:         {$a->course}
Sala:      {$a->classroom}
Grupo:          {$a->group}
Tipo de lección:    {$a->lessontype}
Hora de inicio:     {$a->timestart}
Duración (min): {$a->duration}
Hora de terminación:       {$a->timeend}

{$a->comment}';
$string['emptygroup'] = '¡Grupo vacío! ¡Por favor, añada estudiantes a la sesión!';
$string['enrollteacher'] = '¡Para planear una sesión, Usted necesita inscribir al menos un usuario con la habilidad para supervisar sesiones en el curso!';
$string['eventaddclassroom'] = 'Se ha añadido una nueva sala';
$string['eventaddlessontype'] = 'Se ha añadido un nuevo tipo de lección';
$string['eventaddsession'] = 'Se ha añadido una nueva sesión';
$string['eventdeleteclassroom'] = 'La sala ha sido eliminada';
$string['eventdeletelessontype'] = 'El tipodelección ha sido eliminado';
$string['eventdeletesession'] = 'La sesión ha sido eliminada';
$string['eventfinishsession'] = 'La sesión se ha terminado';
$string['eventhideclassroom'] = 'La sala fue ocultada';
$string['eventstartplannedsession'] = 'Sesión planeada ha iniciado';
$string['eventstartsession'] = 'La sesión se ha iniciado';
$string['eventunhideclassroom'] = 'La sala fue hecha visible';
$string['eventupdateactivesession'] = 'Sesión activa ha sido actualizada';
$string['eventupdateclassroom'] = 'La sala ha sido actualizada';
$string['eventupdatelessontype'] = 'El tipodelección ha sido actualizado';
$string['eventupdatesession'] = 'La sesión ha sido actualizada';
$string['filterlogsbyuser'] = 'Filtrar bitácoras por usuario';
$string['finishedstate'] = 'Terminado';
$string['finishsession'] = 'Terminar sesión';
$string['gotoclassrooms'] = 'Ir a página de sala';
$string['gotoenrollment'] = 'Ir a página de inscripción de usuario';
$string['haveaniceday'] = '¡Que tenga un lindo día!';
$string['increaseduration'] = 'La hora de fin de la sesión debe ser mayor que la hora actual.';
$string['insertclassroomerror'] = '¡Error de base de datos! No se puede insertar sala en la base de datos';
$string['insertlessontypeerror'] = '¡Error de base de datos! No se puede insertar tipo de lección en la base de datos';
$string['insertsessionerror'] = '¡Error de base de datos! No se puede insertar sesión en la base de datos';
$string['internship'] = 'Grupo de internado';
$string['invalidclassroomid'] = 'Usted está tratando de usar una ID de sala inválida';
$string['invalidlessontypeid'] = 'Usted está tratando de usar una ID de tipo de lección inválida';
$string['invalidsessionid'] = 'Usted está tratando de usar una ID de sesión inválida';
$string['iplist'] = 'Lista de IPs';
$string['iplist_help'] = 'Lista de IP es una cadena de caracteres separados por comas de definiciones de sub-redes.

Las cadenas de caracteres de las sub-redes pueden estar en uno de estos formatos:

* xxx.xxx.xxx.xxx     (dirección IP completa)

* xxx.xxx.xxx.xxx/nn  (número de bits en máscara de red)

* xxx.xxx.xxx.xxx-yyy (un rango de direcciones IP en el último grupo)

* xxx.xxx or xxx.xxx. (dirección incompleta)';
$string['lessontype'] = 'Tipo de lección';
$string['lessontypesbreadcrumb'] = 'Tipos de lección';
$string['lessontypesdefinition'] = 'Definición de tipos de lección';
$string['lessontypesdefinition_help'] = 'Considere que Usted tiene varios tipos de lecciones en los cursos (por ejemplo: examen, coloquio, etc) y quiere asegurarse de que solamente algunas lecciones  (como por ejemplo examen) no sean accesibles en un coloquio. Usted puede usar tipos de lecciones para ordenar esto. La sesión siempre es creada para algunos tipos de lecciones. Usted puede limitar la accesibilidad del examen y otras características de la sesión en algunos tipos de lecciones. A diferencia de los salones de clase, los tipos de lección son creados separadamente para cada curso.';
$string['lessontypespagetitle'] = 'Tipos de lección';
$string['lessontypesurl'] = 'Tipos de lección';
$string['lessontypesview'] = 'Tipos de lección en el curso actual';
$string['logsbreadcrumb'] = 'Bitácoras de sesión';
$string['logspagetitle'] = 'Bitácoras de sesión';
$string['logsview'] = 'Bitácoras de sesión';
$string['messageforteacher'] = 'Mensaje para el supervisor';
$string['newinternship'] = 'Nuevo grupo de internado';
$string['nosessionsstudenttitle'] = 'Usted no tiene ninguna sesión activa ...';
$string['nosessionstitle'] = 'Usted no tiene sesiones planeadas ni activas. Usted puede iniciar una nueva sesión ahorita mismo';
$string['notifyteacher'] = 'Notificar al supervisor por E-mail';
$string['notifyteacher_help'] = 'Si se activa, el supervisor seleccionado será notificado acerca de la creación, remoción y cualquier cambio en su sesión. Si el supervisor será cambiado, ambos serán notificados.';
$string['notspecified'] = 'No especificado';
$string['pagesizevalidationerror'] = 'El tamaño de página debe ser mayor de cero.';
$string['plannedsessiontitle'] = 'Usted tiene una sesión planeada';
$string['plannedstate'] = 'Planeada';
$string['plansession'] = 'Planear una nueva sesión ...';
$string['plansession_forInter'] = 'Planear una nueva sesión para internado ...';
$string['plansessionnavbar'] = 'Planear sesión';
$string['pluginname'] = 'Supervisada';
$string['sessiondeleteerror'] = 'Usted no puede eliminar una sesión activa. Primeramente termine la sesión.';
$string['sessiondeleteheader'] = '¡Desea eliminar esta sesión?';
$string['sessiondeletetitle'] = 'Eliminar sesión';
$string['sessiondurationcourse'] = 'Valor predeterminado para duración de la sesión en este curso (minutos)';
$string['sessionediterror'] = 'Usted solamente puede editar sesiones planeadas';
$string['sessionendsbefore'] = 'La sesión termina antes de';
$string['sessioninfo'] = 'Información de la sesión';
$string['sessionlogserror'] = 'Usted no puede ver bitácoras de sesiones planeadas - no hay nada para ver';
$string['sessionsbreadcrumb'] = 'Sesiones';
$string['sessionsdefinition'] = 'Definición de sesiones';
$string['sessionsdefinition_help'] = 'El supervisor del curso crea sesiones especificando el grupo, tipo de lección (por ejemplo: trabajo de laboratorio, examen, etc...), salón de clase y duración. Después de eso, los estudiantes podrán iniciar exámenes desde este curso de acuerdo con las siguientes condiciones:

- que la sesión esté activa;

- que el estudiante esté en un grupo para el cual fue creada la sesión;

- que el estudiante esté en un salón de clases de la sesión (el supervisor puede especificar la sub-red de IPs para cada salón de clase);

- que la sesión fue creada para el tipo de lección que está especificado para el examen (vaya a configuraciones del examen -> Restricciones extra sobre los intentos).';
$string['sessionsheader'] = 'Lista de sesiones';
$string['sessionspagetitle'] = 'Sesiones';
$string['sessionstartsafter'] = 'La sesión inicia después de';
$string['sessionsurl'] = 'Sesiones';
$string['settingsdayspastdesc'] = 'Tiempo predeterminado de intervalo para tabla de sesiones en días (a partir del día actual).';
$string['settingsdayspasttitle'] = 'Número de días para mostrar sesiones';
$string['settingsdurationdesc'] = 'Tiempo predeterminado de sesión en minutos';
$string['settingsdurationtitle'] = 'Hora de sesión';
$string['showlogs'] = 'Mostrar bitácoras';
$string['showlogsbutton'] = 'Mostrar bitácoras';
$string['showsessions'] = 'Mostrar sesiones';
$string['startsession'] = 'Iniciar sesión';
$string['supervised:addinstance'] = 'Añadir un nuevo bloque Supervisado';
$string['supervised:besupervised'] = 'Participar en la sesión supervisada (hecho para estudiantes, etc)';
$string['supervised:editclassrooms'] = 'Editar salas';
$string['supervised:editlessontypes'] = 'Editar tipos de lección';
$string['supervised:manageallsessions'] = 'Gestionar todas las sesiones: planear, editar y quitar sesiones inconclusas';
$string['supervised:managefinishedsessions'] = 'Eliminar sesiones terminadas';
$string['supervised:manageownsessions'] = 'Gestionar sesiones propias: planear, editar y quitar sesiones inconclusas';
$string['supervisedsettings'] = 'Configuraciones de supervisadas';
$string['supervised:supervise'] = 'Habilidad para supervisar sesiones: iniciar planeada y nuevas, editar y terminar activas, ver bitácoras.';
$string['supervised:viewallsessions'] = 'Ver todas las sesiones (planeadas, activas yterminadas) y sus bitácoras';
$string['supervised:viewownsessions'] = 'Ver sus propias sesiones (planeadas, activas yterminadas) y sus bitácoras';
$string['superviser'] = 'Supervisor';
$string['teacherhassession'] = 'El supervisor ya tiene una sesión ahorita mismo.';
$string['teachervalidationerror'] = 'Usted solamente puede planear una sesión para Usted mismo.';
$string['timeend'] = 'Fin del tiempo';
$string['timeendvalidationerror'] = 'La sesión debe estar activa antes de {$a} al menos.';
$string['timestart'] = 'Inicio del tiempo';
$string['timetovalidationerror'] = 'El final de la sesión debe ser mayor o igual al inicio de la sesión.';
