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
 * Strings for component 'allocationform', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   allocationform
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso Negado al Formato de Asignación';
$string['add_option'] = 'Añadir nueva opción';
$string['allocationform'] = 'Formato de Asignación';
$string['allocationform:addinstance'] = 'Añadir un nuevo Formato de Asignación';
$string['allocationform:edit'] = 'Editar Formatos de Asignación';
$string['allocationformname'] = 'Nombre del Formato de Asignación';
$string['allocationformname_help'] = 'El nombre del Formato de Asignación, se usará para enlazar con el formato.';
$string['allocationform:reallocate'] = 'Forzar una re-asignación';
$string['allocationform:viewallocations'] = 'Ver todas las asignaciones hechas';
$string['allocationform:viewform'] = 'Ver Formatos de Asignación';
$string['allocations'] = 'Asignaciones';
$string['allocationsexported'] = 'Asignaciones exportadas';
$string['allocations_not_visible'] = 'Las asignaciones solamente pueden ser vistas por editores.';
$string['allocationviewed'] = 'Formato de Asignación visto';
$string['al_notwant'] = 'No la quiero';
$string['al_notwant_help'] = 'Seleccione una opción a la que NO le gustaría ser asignado';
$string['availabilityheading'] = 'Disponibilidad del formato';
$string['back_to_edit'] = 'Cambiar a modo de edición';
$string['back_to_edit_warning'] = 'Esto eliminará toda la información enviada al formato.';
$string['before_start'] = 'La fecha de inicio de este formato de asignación no ha llegado aun.';
$string['calendar:avaliable'] = 'Asignaciones liberadas para {$a}';
$string['calendar:deadline'] = 'Fecha límite para {$a}';
$string['cannoteditinapp'] = 'El formato de asignación no puede ser editado en la App Moodle';
$string['changestateto'] = '¿Está seguro de querer cambiar el formato al estado {$a} ?';
$string['choice'] = 'Elección {$a->choice}';
$string['choicealreadyselected'] = 'Una opción solamente puede ser seleccionada una vez';
$string['choiceheading'] = 'Opciones de configuración';
$string['choice_help'] = 'Seleccionar una opción a la que Usted desea ser asignado.';
$string['choiceincorrectstate'] = 'Este formato no está abierto. Por favor refresque la página.';
$string['choiceinvalid'] = 'Usted ha seleccionado una opción que no es parte del formato';
$string['choicerequired'] = 'Hacer una elección';
$string['choicesexported'] = 'Elección exportada';
$string['cron'] = 'Procesamiento en segundo plano para Formatos de Asignación';
$string['csvgenerated'] = 'CSV generado';
$string['deadline'] = 'Fecha límite';
$string['deadline_help'] = 'El momento más tardío en que los usuarios podrán seleccionar sus asignaciones. También es el momento más temprano en el  que se pondrá en espera de procesamiento un formato de asignación para que suceda el proceso de asignación.';
$string['deadline_message'] = 'La fecha límite para completar este formato es: {$a->deadline}';
$string['deadline_passed'] = 'La fecha límite para este formato ha pasado. Si Usted lo vuelve activo ahora empezará a procesrse inmediatamente.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultrole_help'] = 'Configure el rol por defecto a usarse para seleccionar usuarios que serán asignados usando la actividad';
$string['deleteuserdata'] = 'Eliminar datos del usuario';
$string['disallow_list'] = 'Lista de no-permitidos';
$string['disallow_list_help'] = 'Todos los usuarios seleccionados NO podrán seleccionar {$a->option_name}';
$string['duplicate_choice'] = 'Usted solamente puede seleccionar una elección una vez';
$string['duplicateoption'] = 'Sus cambios no pudieron ser guardados en la base de datos. Esto muy probablemente sea debido a un nombre de opción duplicado ingresado';
$string['editingmode'] = 'Editando';
$string['editingoption'] = 'Editando opción';
$string['event:optiondcreated'] = 'Opción creada';
$string['event:optiondeleted'] = 'Opción eliminada';
$string['form_allocation_error'] = 'ERROR en formid {$a->formid}:';
$string['form_allocation_error2'] = 'ERROR: No se pudo asignar userid {$a->userid}';
$string['generate_allocation_csv'] = 'Generar CSV de asignaciones de usuario';
$string['generate_csv'] = 'Generar CSV de elecciones de usuario';
$string['incorrectnumberofchoices'] = 'El formato no tiene el número correcto de opciones';
$string['instructions'] = 'Usted debe rankear {$a->choices} opciones; Usted será asignado a {$a->allocation} de las opciones.';
$string['instructionsnotwant'] = 'Usted debe rankear {$a->choices} opciones; Usted será asignado a {$a->allocation} de las opciones. Usted puede seleccionar 1 opción a la cual no desea ser asignado.';
$string['invalidstate'] = 'Se pasó un cambio de estado inválido al formato de asignación';
$string['invalidstatechange'] = 'Cambio de estado invalido intentado';
$string['make_active'] = 'Hacer el formato activo';
$string['makechoice'] = 'Haga su elección';
$string['mod/allocationform:exportallocations'] = 'Exportar asignaciones';
$string['mod/allocationform:exportchoices'] = 'exportar opciones';
$string['modulename'] = 'Formato de Asignación';
$string['modulename_help'] = 'El formato de asignación puede usarse para asignar estudiantes a entre una y diez opciones (por ejemplo, módulos, tareas, acomodos...)

El profesor define:

* La lista de opciones disponibles para los estudiantes.
* El número de estudiantes que pueden asignarse a una opción.
* A cuantas opciones se asignan los estudiantes (entre una y diez)
* Cuantas opciones puede priorizar un estudiante (entre una y diez)
* Si es que los estudiantes pueden seleccionar una opción a la que NO quieran ser asignados.
* El último momento en el que los estudiantes pueden enviar una elección.

Advertencia: Cuando la actividad cambia de modo activo a modo de edición, cualquier cambio hecho por los estudiantes será eliminado.

Después de la fecha de cierre el formato intentará hacer una asignación del \'mejor arreglo\' de los estudiantes de manera que :

* La mayor cantidad de estudiantes sean asignados a opciones tan altas en sus prioridades como sea posible.
* Los estudiantes nunca sean asignados a una opción que ellos seleccionaron como \'No la quiero\'.
* Los estudiantes no sean seleccionados a opciones para las que hayan sido restringidos de elegir.
* Los estudiantes que no hayan hecho una elección serán asignados al final.

Después de que se hayan procesado las asignaciones los profesores podrán:

* Revisar los resultados y corregir el número de estudiantes asignados a opciones antes de liberarse los resultados para los estudiantes.
* Obtener un CSV de las elecciones de los estudiantes.
* Obtener un CSV de las asignaciones.';
$string['modulenameplural'] = 'Formatos de Asignación';
$string['noallocationforms'] = 'No se encontraron Formatos de Asignación para este curso';
$string['no_allocations'] = 'No se encontraron asignaciones';
$string['noformdatapassed'] = 'No se pasaron datos. No se hizo actualización.';
$string['nopermission'] = 'Usted no puede ser asignado al formato; sus opciones no han sido guardadas';
$string['not_active'] = 'El formato de asignación no está disponible, por favor, inténtelo más tarde.';
$string['not_enough_slots'] = 'No hay suficientes lugares disponibles para todas las personas elegibles para la tarea';
$string['notrequired'] = 'No requerido';
$string['not_set'] = 'Usted debe de hacer una elección';
$string['notwant'] = 'Incluir la NO querida';
$string['notwant_help'] = 'Si se selecciona, a un usuario se le dará la oportunidad de especificar una opción a la que NO desean ser asignados.';
$string['nousersallocated'] = 'Sin usuarios asignados';
$string['numberofallocations'] = 'Asignación por usuario';
$string['numberofallocations_help'] = 'El número de opciones a las que será asignado un usuario';
$string['numberofchoices'] = 'Numero de opciones';
$string['numberofchoices_help'] = 'El Numero de opciones entre las que tendrá que decidir un usuario';
$string['ok_to_continue'] = '¿Está Usted seguro de querer continuar?';
$string['optioncreated'] = 'Opción creada: {$a}';
$string['optiondeleted'] = 'Opción eliminada: {$a}';
$string['optionedited'] = 'Opción editada';
$string['option_form_header'] = 'Opción nueva';
$string['option_heading'] = 'Encabezado';
$string['option_heading_help'] = 'Un encabezado a mostrar inmediatamente arriba de esta opción.';
$string['option_list'] = 'Lista de opciones';
$string['option_maxallocation'] = 'Asignaciones máximas';
$string['option_maxallocation_help'] = 'El número máximo de personas que pueden asignarse a esta opción.';
$string['option_maxallocation_invalid'] = 'Asignaciones máximas no configuradas';
$string['optionmodified'] = 'Opción modificada: {$a}';
$string['option_name'] = 'Nombre de la opción';
$string['option_name_help'] = 'El Nombre de la opción tal como se mostrará al usuario.';
$string['optionnamenumber'] = '{$a->name} ({$a->allocation})';
$string['option_restricted'] = 'Usuarios restringidos';
$string['overviewclose'] = 'Fecha de cierre: {$a->closedate}';
$string['overviewname'] = 'Asignación: {$a->link}';
$string['overviewready'] = 'Su asignación está disponible.';
$string['overviewreview'] = 'Listo para revisarse. Las personas asignadas no pueden ver los resultados.';
$string['people'] = 'Número de personas a ser  asignadas';
$string['permissionedited'] = 'Permiso editado';
$string['permissionviewed'] = 'Permiso visto';
$string['pluginadministration'] = 'Administración del formato de asignación';
$string['pluginname'] = 'Formatos de asignación (eForms)';
$string['privacy:export:allocations'] = 'Asignaciones';
$string['privacy:export:choices'] = 'Opciones';
$string['privacy:export:restrictions'] = 'Restricciones';
$string['privacy:metadata:allocationform_allocations'] = 'Almacena las asignaciones hechas para el usuario';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'La opción a la cual fue asignado el usuario';
$string['privacy:metadata:allocationform_allocations:userid'] = 'El usuario siendo asignado';
$string['privacy:metadata:allocationform_choices'] = 'Almacena las opciones que ha hecho un usuario en un formato de asignación';
$string['privacy:metadata:allocationform_choices:choice1'] = 'La primera preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice10'] = 'La décima preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice2'] = 'La segunda preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice3'] = 'La tercera preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice4'] = 'La cuarta preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice5'] = 'La quinta preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice6'] = 'La sexta preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice7'] = 'La séptima preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice8'] = 'La octava preferencia del usuario';
$string['privacy:metadata:allocationform_choices:choice9'] = 'La novena preferencia del usuario';
$string['privacy:metadata:allocationform_choices:notwant'] = 'Una opción a la que el usuario no desea ser asignado';
$string['privacy:metadata:allocationform_choices:userid'] = 'El usuario haciendo la elección';
$string['privacy:metadata:allocationform_disallow'] = 'Almacena las opciones que se le han prohibido de elegir al usuario';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'La opción que tiene restringida seleccionar el usuario';
$string['privacy:metadata:allocationform_disallow:userid'] = 'El usuario siendo restringido';
$string['processedmode'] = 'Procesado';
$string['processmode'] = 'Procesando';
$string['queued_for_processing'] = 'El formato para asignación está esperando a ser procesado... por favor, regrese más tarde.';
$string['readymode'] = 'Activo';
$string['reprocess'] = 'Forzar re-asignación';
$string['reprocess_warning'] = 'Esto eliminará todas las asignaciones actuales';
$string['requirechoice'] = 'Requerir elección';
$string['resetstate'] = 'Reiniciar al estado de edición';
$string['restrict'] = 'Restringir';
$string['restrictionsexceeded'] = 'Usted ha excedido el número de restricciones trabajables para {$a->users} usuarios.  Al menos {$a->numberofchoices} opciones disponibles son necesarias por usuario';
$string['restrictionsmodified'] = 'Restricciones actualizadas';
$string['reviewmode'] = 'Revisar';
$string['roleselect'] = 'Rol a ser asignado';
$string['roleselect_help'] = 'Seleccione el rol que se les asignará a los usuarios en este curso al emplear este formato.';
$string['savefail'] = 'Sus opciones no pudieron ser guardadas en Moodle';
$string['search:activity'] = 'Formato de asignación - información de actividad';
$string['show_allocations'] = 'Hacer disponibles asignaciones';
$string['slots'] = 'Número de espacios para asignar';
$string['startdate'] = 'Fecha de inicio';
$string['startdate_help'] = 'La hora más temprana en la que los usuarios puedan seleccionar sus asignacioness.';
$string['statechanged'] = 'Estado cambiado';
$string['statechangefailed'] = 'No pudo cambiarse el estado';
$string['trackcompletion'] = '¿Requerir envío de elección para completar esta actividad?';
$string['unallocated'] = 'Sin-asignar';
$string['youralloactions'] = 'Usted ha sido asignado a';
