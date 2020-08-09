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
 * Strings for component 'block_workflow', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_workflow
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetasktitle'] = 'Tarea actualmente activa';
$string['addanotherworkflow'] = 'Añadir otro flujograma';
$string['addaworkflow'] = 'Añadir un flujograma';
$string['addemail'] = 'Añadir plantilla E-mail';
$string['addroletostep'] = 'Añadir rol al paso';
$string['addstep'] = 'Añadir un paso adicional a este flujograma';
$string['addstepafter'] = 'Añadir un paso después de este punto';
$string['addtask'] = 'Añadir tarea';
$string['any'] = 'Cualquier/a';
$string['appliesto'] = 'Aplica para';
$string['atendfinishworkflow'] = 'terminar el flujograma';
$string['atendgobackatworkflowcreate'] = 'Una configuración de regresateunpaso (atendgobacktostep) no puede ser especificada  en la creación de un flujograma porque no existen pasos anteriores para referenciar';
$string['atendgobacktostep'] = 'Al final del paso {$a}';
$string['atendgobacktostepinfo'] = 'Después del paso {$a->stepcount}, regresa al paso número {$a->atendgobacktostep}.';
$string['atendgobacktostepno'] = 'regresa al paso {$a->stepno} ({$a->name})';
$string['atendstop'] = 'Después del paso {$a->stepcount}, este flujograma terminará.';
$string['automaticallyfinish'] = 'Terminar automáticamente';
$string['cannotdeleteworkflowinuseby'] = 'No puede eliminarse, este flujograma se usa en {$a} sitios.';
$string['cannotremoveemailinuse'] = 'No puede eliminarse la plantilla de E-mail -- esta plantilla actualmente está en uso';
$string['cannotremoveonlystep'] = 'No puede eliminarse paso. Este es el único flujograma en el paso';
$string['cannotremovestepsinuse'] = 'No puede eliminarse el paso. Este paso está actualmente activo en {$a} flujogramas';
$string['cannotremoveworkflowinuse'] = 'No puede eliminarse flujograma -- este flujograma está actualmente en uso';
$string['cannotstepflowinuse'] = 'No puede eliminarse paso -- este paso está actualmente en uso';
$string['clone'] = 'Clonar';
$string['clonedname'] = '{$a} (clonado)';
$string['clonedshortname'] = '{$a}_clonado';
$string['cloneworkflow'] = 'Clonar flujograma';
$string['cloneworkflowinstructions'] = 'Clonar instrucciones de flujograma';
$string['cloneworkflowname'] = 'Clonar flujograma \'{$a}\\';
$string['commentlabel'] = 'Actualizar comentario de flujograma';
$string['comments'] = 'Comentarios';
$string['confirm'] = 'Confirmar';
$string['confirmemaildeletetitle'] = '¿Eliminar plantilla de E-mail \'{$a}\'?';
$string['confirmfinishstep'] = '¿Está seguro que quiere marcar este paso ({$a}) como completo?';
$string['confirmjumptostep'] = '¿Está seguro de querer brincar al paso {$a->stepno} ({$a->stepname})?';
$string['confirmstepdeletetitle'] = '¿Eliminar paso \'{$a}\'?';
$string['confirmworkflowdeletetitle'] = '¿Eliminar flujograma \'{$a}\'?';
$string['contexthasactiveworkflow'] = 'Este contexto ya tiene un flujograma activo.';
$string['coursestartdate'] = 'la fecha de inicio del curso';
$string['coursestudentclose'] = 'el curso está cerrado a estudiantes';
$string['coursestudentopen'] = 'el curso está abierto a estudiantes';
$string['coursetutorclose'] = 'el curso está cerrado a tutores';
$string['coursetutoropen'] = 'el curso está abierto a tutores';
$string['create'] = 'Crear';
$string['createemail'] = 'Crear nueva plantilla de E-mail';
$string['createstep'] = 'Crear paso';
$string['createstepinstructions'] = 'Mismas instrucciones sobre como crear un paso';
$string['createstepname'] = 'No se puede crear paso para flujograma\'{$a}\\';
$string['createtask'] = 'No se puede crear nueva tarea para paso {$a}';
$string['createtemplate'] = 'Crear plantilla';
$string['createworkflow'] = 'Crear nuevo flujograma';
$string['crontaskautostepfinisher'] = 'Terminador de paso de flujograma';
$string['crontaskextranotify'] = 'Notificación extra de paso de flujograma';
$string['currentlyinuseby'] = 'Este flujograma actualmente está en uso por';
$string['dayafter'] = '{$a} día después de';
$string['dayas'] = 'el mismo día que';
$string['daybefore'] = '{$a} día antes de';
$string['days'] = 'Días';
$string['daysafter'] = '{$a} días después de';
$string['daysbefore'] = '{$a} días antes de';
$string['defaultonactivescript'] = '# Usted puede poner un conjunto de acciones para completar al marcar este paso activo aquí';
$string['defaultoncompletescript'] = '# Usted puede poner un conjunto de acciones para completar al marcar este paso terminado aquí';
$string['defaultonextranotifyscript'] = '# Usted puede colocar un conjunto de acciones para marcar que este paso envía notificación';
$string['defaultstepdescription'] = 'Una descripción para este paso debería ir aquí';
$string['defaultstepinstructions'] = 'Haga X, después Y, después Z.';
$string['defaultstepname'] = 'Primer paso';
$string['defaultworkflowdescription'] = 'Una descripción para este flujograma';
$string['delete'] = 'Eliminar';
$string['deleteemail'] = 'Eliminar E-mail';
$string['deleteemailcheck'] = '¿Está absolutamente seguro de querer eliminar completamente la plantilla de E-mail \'{$a}\'?';
$string['deletestep'] = 'Eliminar paso';
$string['deletestepcheck'] = '¿Está absolutamente seguro de querer eliminar completamente el paso \'{$a}\'?';
$string['deletetask'] = 'Eliminar tarea';
$string['deletetaskcheck'] = '¿Está seguro de querer eliminar la tarea \'{$a->taskname}\' del paso \'{$a->stepname}\'?';
$string['deletetasktitle'] = 'Eliminar tarea \'{$a->taskname}\' para confirmación del paso \'{$a->stepname}';
$string['deletetemplate'] = 'Eliminar plantilla';
$string['deleteworkflow'] = 'Eliminar flujograma';
$string['deleteworkflowcheck'] = '¿Está absolutamente seguro de querer eliminar completamente el flujograma {$a}?';
$string['description'] = 'Descripción';
$string['disabled'] = 'Deshabilitado';
$string['disableworkflow'] = 'Deshabilitar flujograma';
$string['doerstitle'] = 'Roles responsables para este paso';
$string['doertitle'] = 'Roles responsables para este paso';
$string['donotautomaticallyfinish'] = 'No terminar automáticamente';
$string['donotnotify'] = 'No enviar notificación extra';
$string['edit'] = 'Editar';
$string['editcomments'] = 'Editar comentarios';
$string['editemail'] = 'Editar plantilla de E-mail \'{$a}\'';
$string['editingcommentfor'] = 'Editando comentario para \'{$a->stepname}\' en {$a->contextname}';
$string['editstep'] = 'Editar paso';
$string['editstepinstructions'] = 'Algunas instrucciones sobre para qué es esta página y una página de  introducción general. Mencione los scripts, pero sus archivos de ayuda deberían de dar más información sobre cómo funcionan.';
$string['editstepname'] = 'Editando paso \'{$a}\\';
$string['editsteps'] = 'Editar pasos para flujograma \'{$a}\\';
$string['edittask'] = 'Editar tarea';
$string['edittemplate'] = 'Editar plantilla';
$string['edittemplateinstructions'] = 'Algunas instrucciones sobre cómo crear una plantilla de E-mail';
$string['editworkflow'] = 'Editando flujograma \'{$a}\\';
$string['editworkflowinstructions'] = 'Editar instrucciones de flujograma';
$string['emaildescription'] = 'Las plantillas de E-mail pueden usarse por los diferentes scripts en un paso de flujograma';
$string['emailfrom'] = 'Sistema de flujograma {$a}';
$string['emaillist'] = 'Mandar por correo plantillas de E-mail';
$string['emailmessage'] = 'Mensaje';
$string['emailmessage_help'] = 'Los siguientes reemplazables puedenser usados en la línea del asunto y en el mensaje:

* %%workflowname%% - el nombre del flujograma.
* %%stepname%% - el nombre del paso actual.
* %%contextname%% - el nombre de la cosa a la que se aplica el flujograma; por ejemplo el sitio web o el nombre del examen.
* %%contexturl%% - enlace hacia la cosa a la que se aplica el flujograma.
* %coursename%% - el curso donde está la cosa (realmente solo es útil para flujogramas de actividad)
* %%usernames%% - los nombres de todas las personas a quienes será enviado este Email, como lista separada por comas.
* %%currentusername%% - el nombre de la persona cuya acción disparó el Email actual. Esto solamente funcionará para Emails de trabajo terminado, no para los enviados en una agenda.

Las siguientes fichas (tokens) pueden ser usadas solamente en el cuerpo del mensaje:

* %%instructions%% - las instrucciones de este paso de flujograma.
* %%tasks%% - la lista de casilla para-hacer, formateadas como una lista de viñetas.
* %%comment%% - el comentario del flujograma. Normalmente el comentario del trabajo actual, pero a veces el comentario del trabajo anterior, cuando esto tenga más sentido.';
$string['emailsettings'] = 'Configuraciones de plantilla de E-mail';
$string['emailsubject'] = 'Asunto';
$string['emailtemplateexists'] = 'Plantilla de E-mail \'{$a}\' que se intentó importar ya existía antes. Se preservó la plantilla existente.';
$string['emptyfield'] = 'El campo requerido está vacío: {$a}';
$string['enabled'] = 'Habilitado';
$string['enabledworkflow'] = 'Habilitado';
$string['enableworkflow'] = 'Habilitar flujograma';
$string['eventstepaborted'] = 'Paso abortado';
$string['eventstepactivated'] = 'Paso activado';
$string['eventstepcompleted'] = 'Paso completado';
$string['eventstepextranotification'] = 'Paso extra de notificación procesado';
$string['eventtodotriggered'] = 'Pendiente disparado';
$string['export'] = 'Exportar';
$string['exportworkflow'] = 'Exportar flujograma';
$string['finish'] = 'Terminar';
$string['finishstep'] = 'Terminar paso';
$string['finishstepautomatically'] = 'Este paso fue terminado automáticamente por el sistema de  flujo en {$a}.';
$string['finishstepfor'] = 'Terminar paso \'{$a->stepname}\' en {$a->contextname}';
$string['finishstepinstructions'] = 'Usted está a punto de marcar este paso como completo, y moverse al siguiente paso en el flujograma. Un resumen del paso se muestra debajo -- Usted podría desear actualizar el comentario debajo.';
$string['format_html'] = 'HTML';
$string['format_plain'] = 'simple';
$string['format_unknown'] = 'desconocido';
$string['general'] = 'General';
$string['hidetask'] = 'Deshabilitar tarea';
$string['importfile'] = 'Archivo';
$string['importsuccess'] = 'La importación fue exitosa. Usted pronto será direccionado a la página de edición del flujograma .';
$string['importworkflow'] = 'Importar flujograma';
$string['instructions'] = 'Instrucciones';
$string['inuseby'] = 'Está actualmente en uso en {$a} lugares..';
$string['invalidactivitysettingcolumn'] = 'La columna especificada ({$a}) no existe.';
$string['invalidappliestomodule'] = 'Se espicificó un valor inválido de appliesto (aplicaa)';
$string['invalidappliestotable'] = 'La tabla de la base de datos para {$a} no se encontró. No será posible usar este comando para este tipo de flujograma';
$string['invalidbody'] = 'Se especificó un cuerpo inválido';
$string['invalidcapability'] = 'Se especificó una capacidad inválida.';
$string['invalidclearmustendcommand'] = 'No debería haber nada después de la palabra \'clear\' (\'limpiar\')';
$string['invalidcommand'] = 'Se especificó un comando inválido en el script. El comando usado fue {$a}';
$string['invalidemailemail'] = 'Se especificó una dirección de E-mail inválida. El E-mail especificado fue \'{$a}';
$string['invalidemailshortname'] = 'Nombre corto especificado inválido ({$a})';
$string['invalidfield'] = 'Se especificó un campo inválido en los datos. El campo fue \'{$a}\\';
$string['invalidformat'] = 'Se ha especificado un formato inválido: {$a}';
$string['invalidid'] = 'Una ID inválida fue especificado';
$string['invalidinstructions'] = 'Se especificaron instrucciones de paso inválidas';
$string['invalidmissingvalue'] = 'Comando inválido, falta valor.';
$string['invalidname'] = 'Se especificó un nombre inválido';
$string['invalidobsoletesetting'] = 'Se especificó un valor obsoleto inválido. Las configuraciones válidas son 0, o 1';
$string['invalidpermission'] = 'Permiso inválido especificado. Los permisos válidos son heredar, permitir, prevenir o prohibir (inherit, allow, prevent or prohibit).';
$string['invalidrole'] = 'Un rol inválido ({$a}) fue especificado al procesar el script';
$string['invalidscript'] = 'El script que especificó era inválido. {$a}';
$string['invalidshortname'] = 'Se especificó un nombre corto inválido';
$string['invalidstate'] = 'Estado inválido';
$string['invalidstep'] = 'Paso inválido especificado.';
$string['invalidstepid'] = 'ID de paso inválida especificada.';
$string['invalidstepno'] = 'Número de paso inválido especificado.';
$string['invalidsubject'] = 'Se especificó un asunto inválido';
$string['invalidsyntaxmissingto'] = 'Sintaxis de comando inválida -- falta componete a';
$string['invalidsyntaxmissingx'] = 'Sintaxis de comando inválida - falta \'{$a}\'.';
$string['invalidtarget'] = 'Blanco/destino de actividad inválido';
$string['invalidtodo'] = 'ParaHacer (todo) especificado inválido';
$string['invalidvisibilitysetting'] = 'Una opción de visibilidad inválida fue especificada. Las opciones válidas son visible y oculto (hidden). Usted especificó {$a}.';
$string['invalidwordnotclearorset'] = 'Se esperaba \'clear\' (limpiar) o \'set\' (configurar).';
$string['invalidworkflow'] = 'Flujograma inválido especificado.';
$string['invalidworkflowid'] = 'Se especificó un flujograma inválido';
$string['invalidworkflowname'] = 'Se especificó un nombre de flujograma inválido';
$string['invalidworkflowstepno'] = 'El número de paso especificado no pudo encontrarse en este flujograma';
$string['jumpstep'] = 'Brincar al paso';
$string['jumptostep'] = 'Brincar al paso';
$string['jumptostepcheck'] = '¿Está seguro de querer brincar del paso \'{$a->fromstep}\' al paso \'{$a->tostep}\' para el flujograma en {$a->workflowon}?';
$string['jumptostepcommentaddition'] = '<p>[Nota: El flujograma acaba de brincar desde el paso \'{$a->fromstep}\'. Este comentario pudiera parecer fuera de contexto.]</p>{$a->comment}';
$string['jumptostepon'] = 'Brincar al paso \'{$a->stepname}\' en {$a->contextname}';
$string['jumptosteptitle'] = 'Brincar al paso \'{$a->tostep}\' para \'{$a->workflowon}\' confirmaciónn';
$string['lastmodified'] = 'Último modificado';
$string['managedescription'] = 'En esta página Usted puede crear y editar flujogramas y las plantillas de Email que usan.';
$string['manageemails'] = 'Gestionar plantillas de E-mail';
$string['manageworkflows'] = 'Gestionar flujogramas';
$string['messageprovider:notification'] = 'Notificaciones y alertas de flujogramas';
$string['missingfield'] = 'Falta el campo requerido: {$a}';
$string['movedown'] = 'Mover abajo';
$string['moveup'] = 'Mover arriba';
$string['name'] = 'Nombre';
$string['nameinuse'] = 'El nombre especificado ya está en uso. Los nombres deben ser únicos';
$string['nameshortname'] = '{$a->name} ({$a->shortname})';
$string['noactiveworkflow'] = 'No hay flujograma activo actualmente.';
$string['nocomment'] = 'Aún sin comentarios...';
$string['nocomments'] = 'Aún no se han hecho comentarios acerca de este paso';
$string['nomorestepsleft'] = 'El flujograma ha sido completado.';
$string['norolesspecified'] = 'No se especificaron roles';
$string['nosuchrole'] = 'El rol {$a} no existe';
$string['notacourse'] = 'Este no es un curso';
$string['notallowedtodothisstep'] = 'Usted no tiene permiso para hacerle cambios a este paso actualmente';
$string['notanactivity'] = 'El comando {$a} solamente puede usarse con una actividad';
$string['notaworkflow'] = 'Este no es un archivo de flujograma válido';
$string['notcontrollablegradeitem'] = 'El comando {$a} solamente puede se usado con una actividad en donde la visibilidad del ítem de calificación NO ESTÉ controlada por la actividad.';
$string['notcurrentlyinuse'] = 'Actualmente no está en uso';
$string['notgradesupported'] = 'El comando {$a} solamente puede se usado con una actividad que soporte calificación';
$string['notificationdate'] = 'Fecha de notificación';
$string['notuniquestep'] = 'El paso {$a} no es único';
$string['notutfencoding'] = 'Este archivo no está codificado en UTF-8';
$string['noworkflow'] = 'No existe flujograma asignado a esta página actualmente';
$string['noworkflows'] = 'Actualmente no hay flujogramas disponibles';
$string['obsoleteworkflow'] = 'Vuelto obsoleto';
$string['onactivescript'] = 'Activación sobre paso';
$string['oncompletescript'] = 'Completado sobre paso';
$string['onextranotifyscript'] = 'Notificar mientras el paso esté activo';
$string['overview'] = 'Vista general';
$string['overviewtitle'] = 'Vista general de flujograma {$a->workflowname} en {$a->contexttitle}';
$string['percentcomplete'] = '{$a}% completo';
$string['pluginname'] = 'Flujogramas';
$string['privacy:metadata'] = 'El bloque de Calendario solamente muestra datos existentes del calendario.';
$string['privacy:metadata:block_workflow_state_changes'] = 'Cambios a estados.';
$string['privacy:metadata:block_workflow_state_changes:newstate'] = 'El estado al cual cambió este paso.';
$string['privacy:metadata:block_workflow_state_changes:userid'] = 'El usuario que causó el cambio de estado.';
$string['privacy:metadata:block_workflow_todo_done'] = 'Cambios a cada paso en el flujograma.';
$string['privacy:metadata:block_workflow_todo_done:steptodoid'] = 'El paso a realizar al cual cambió el usuario.';
$string['privacy:metadata:block_workflow_todo_done:userid'] = 'El usuario que causó el cambio de estado.';
$string['privacy_somebodyelse'] = 'Alguien más';
$string['privacy_you'] = 'Usted';
$string['quizclosedate'] = 'La fecha de cierre del examen';
$string['quizopendate'] = 'La fecha de apertura del examen';
$string['remove'] = 'Remover';
$string['removerolefromstep'] = 'Remover rol del paso';
$string['removestep'] = 'Remover paso';
$string['removetask'] = 'Remover tarea';
$string['removeworkflow'] = 'Remover flujograma';
$string['removeworkflowcheck'] = '¿Está Usted seguro de querer remover el flujograma \'{$a->workflowname}\' de {$a->contexttitle}? Esta acción remueve todos los datos asociados, y no puede revertirse!';
$string['removeworkflowfromcontext'] = 'Remover flujograma \'{$a->workflowname}\' de {$a->contexttitle}?';
$string['roles'] = 'Roles';
$string['shortname'] = 'Nombrecorto';
$string['shortnameinuse'] = 'El nombrecorto especificado ya está en uso. Los nombrescortos deben ser únicos';
$string['shortnametaken'] = 'Este nombrecorto ya está en uso por otro flujograma({$a})';
$string['shortnametakenemail'] = 'Este nombrecorto ya está en uso por otra plantilla de E-mail ({$a})';
$string['shownamesx'] = 'Mostrar nombres ({$a})';
$string['showpeoplecandotask'] = 'Personas que pueden hacer esta tarea';
$string['showtask'] = 'Habilitar tarea';
$string['state'] = 'Estado';
$string['state_aborted'] = 'Abortado';
$string['state_active'] = 'Activo';
$string['state_completed'] = 'Completado';
$string['state_history'] = 'Historia';
$string['state_history_aborted'] = 'Abortado';
$string['state_history_active'] = 'Activado';
$string['state_history_completed'] = 'Completado';
$string['state_history_detail'] = '{$a->newstate} por {$a->user} at {$a->time}.';
$string['state_notstarted'] = 'No iniciado';
$string['status'] = 'Estado actual';
$string['step'] = 'Paso';
$string['stepactivation'] = 'Activación del paso';
$string['stepactivation_help'] = 'Activación del paso';
$string['stepcompletion'] = 'Finalización del paso';
$string['stepcompletion_help'] = 'Finalización del paso';
$string['stepextranotify'] = 'Notificación extra del paso';
$string['stepextranotify_help'] = 'Configurar notificación E-mail a ser enviada automáticamente a los destinatarios elegidos en la fecha de notificación seleccionada.';
$string['stepfinishconfirmation'] = 'El paso fue terminado exitosamente. Usted ha completado todo el trabajo requerido en esta etapa';
$string['stepinstructions'] = 'Instrucciones';
$string['stepname'] = 'Nombre del paso';
$string['stepno'] = 'Paso No.';
$string['stepnotexist'] = 'Paso para ir al final no existe en los datos importados: {$a}';
$string['steps'] = 'Pasos';
$string['stepsettings'] = 'Configuraciones de paso';
$string['task'] = 'Tarea';
$string['taskcomplete'] = 'Tarea completada';
$string['tasknotspecified'] = 'No se especificó tarea';
$string['thisworkflowappliesto'] = 'Este flujograma aplica a';
$string['tobecompletedby'] = 'Para ser completado por';
$string['todocannotchangestepid'] = 'No es posible cambiar la ID del paso para una tarea ParaHacer existente';
$string['tododone'] = 'Marcada {$a} como completa';
$string['todolisttitle'] = 'Tareas para completar';
$string['todotask'] = 'Tarea';
$string['todotitle'] = 'Items para completar para este paso';
$string['todoundone'] = 'Marcada {$a} como incompleta';
$string['updatecomment'] = 'Actualizar comentario';
$string['vieweditemail'] = 'Ver/Editar E-mail';
$string['vieweditworkflow'] = 'Ver/Editar Flujograma';
$string['workflow'] = 'Flujograma';
$string['workflowactive'] = 'Este flujograma acualmente está habilitado (<a href="{$a}" título="Deshabilitar este flujograma">disable it</a>).';
$string['workflow:addinstance'] = 'Añadir un nuevo bloque de Flujograma';
$string['workflowalreadyassigned'] = 'Ya está asignado un flujograma a este contexto. Solamente puede asignarse un flujograma a un contexto a la vez.';
$string['workflowalreadyset'] = 'Ya ha sido configurado un flujograma para este paso. Los pasos no pueden reasignarse aun flujograma diferente';
$string['workflow:dostep'] = 'Permiso para realizar un paso';
$string['workflow:editdefinitions'] = 'Permiso para editar detalles de flujograma';
$string['workflowimport'] = 'Importando Flujograma';
$string['workflowinformation'] = 'Información de Flujograma';
$string['workflowlist'] = 'Flujogramas';
$string['workflow:manage'] = 'Permiso paa gestionar flujogramas';
$string['workflownotassigned'] = 'El flujograma \'{$a->workflowname}\' no está asignado al contexto especifcado';
$string['workflownotassignedtocontext'] = 'El flujograma \'{$a->workflowname}\' no está asignado a {$a->contexttitle}';
$string['workflowobsolete'] = 'Actualmente este flujograma está marcado como deshabilitado (<a href="{$a}" title="Re-habiltar este flujograma">enable it</a>).';
$string['workflowoverview'] = 'Vista general de flujograma';
$string['workflowsettings'] = 'Configuraciones de Flujograma';
$string['workflowstatus'] = 'Status de Flujograma';
$string['workflowsteps'] = 'Pasos de Flujograma';
$string['workflowusage'] = 'Uso del Flujograma';
$string['workflow:view'] = 'Permiso para ver información de flujograma';
$string['xmlloadfailed'] = 'Falló al cargar XML con los siguientes problemas:';
$string['youandanyother'] = 'Usted, o cualquier otro';
$string['youor'] = ', o';
