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
 * Strings for component 'gradingform_checklist', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_checklist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Añadir grupo';
$string['alwaysshowdefinition'] = 'Permitirle a usuarios pre-visualizar lista de cotejo (checklist) usada en el módulo (de otra forma, la lista de cotejo solamente se hará visible después de calificar).';
$string['backtoediting'] = 'Regresar a editar';
$string['checked'] = 'Revisada';
$string['checkitem'] = 'Calificar con crédito completo para "{$a}"';
$string['checklist'] = 'Lista de cotejo (checklist)';
$string['checklistmapping'] = 'Reglas de mapeo de puntaje hacia calificación';
$string['checklistmappingexplained'] = 'El puntaje mínimo posible para esta lista de cotejo (checklist) es <b>{$a->minscore} puntos</b> y será convertido a la calificación mínima disponible en este módulo (que es de cero, a menos que se utilice la escala).
   El puntaje máximo de <b>{$a->maxscore} puntos</b> será convertido a la calificación máxima.<br />
   Los puntajes intermedios serán convertidos respectivamente y redondeados a la calificación disponible más cercana.<br />
   Si se usa una escala en lugar de una calificación, el puntaje será convertido a los elementos de la escala, como si fueran números enteros consecutivos.';
$string['checklistoptions'] = 'Opciones de lista de cotejo (checklist)';
$string['checkliststatus'] = 'Estatus actual de lista de cotejo (checklist)';
$string['confirmdeletegroup'] = '¿Está Usted seguro de querer eliminar este grupo?';
$string['confirmdeleteitem'] = '¿Está Usted seguro de querer eliminar este ítem?';
$string['definechecklist'] = 'Definir lista de cotejo (checklist)';
$string['description'] = 'Descripción';
$string['enablegroupremarks'] = 'Permitirle al evaluador que añada comentarios en texto para cada grupo de lista de cotejo (checklist)';
$string['enableitemremarks'] = 'Permitirle al evaluador que añada comentarios en texto para cada ítem de lista de cotejo (checklist)';
$string['err_definitionmax'] = 'La definición del ítem no puede tener más de 255 caracteres';
$string['err_descriptionmax'] = 'La descripción del grupo no puede tener más de 255 caracteres';
$string['err_nodefinition'] = 'La definción del ítem no puede estar vacía';
$string['err_nodescription'] = 'La descripción del grupo no puede estar vacía';
$string['err_nogroups'] = 'La lista de cotejo (checklist) debe contener al menos un grupo';
$string['err_scoreformat'] = 'El número de puntos para cada ítem debe ser un número no-negativo válido';
$string['err_scoremax'] = 'El número de puntos para cada ítem no debe ser mayor a 1000';
$string['err_totalscore'] = 'El número máximo de puntos posibles al calificar  por la lista de cotejo (checklist) debe de ser mayor a cero';
$string['gradingof'] = '{$a} calificando';
$string['groupadditem'] = 'Añadir ítem';
$string['groupdelete'] = 'Eliminar grupo';
$string['groupdescription'] = 'Descripción del grupo';
$string['groupempty'] = 'Elegir para editar grupo';
$string['groupfeedback'] = 'Retroalimentación grupal para "{$a}"';
$string['groupmovedown'] = 'Mover abajo';
$string['groupmoveup'] = 'Mover arriba';
$string['grouppoints'] = 'Puntos del grupo';
$string['groupremark'] = 'Comentario grupal para "{$a}"';
$string['itemdefinition'] = 'Definición del ítem';
$string['itemdelete'] = 'Eliminar ítem';
$string['itemempty'] = 'Elegir para eliminar ítem';
$string['itemfeedback'] = 'Retroalimentación para "{$a}"';
$string['itemremark'] = 'Comentario de ítem para "{$a}"';
$string['itemscore'] = 'Puntaje del ítem';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición de la lista de cotejo (checklist) fue cambiada después de que este estudiante fue calificado. El estudiante no puede ver esta lista de cotejo (checklist) hasta que Usted haya revisado la lista de cotejo y haya actualizado la calificación.';
$string['overallpoints'] = 'Puntos generales';
$string['pluginname'] = 'Lista de cotejo (checklist)';
$string['previewchecklist'] = 'Pre-visualizar lista de cotejo (checklist)';
$string['regrademessage1'] = 'Usted está a punto de guardar cambios a una lista de cotejo (checklist) que ya ha sido usada para calificar. Por favor, indique si es que las calificaciones existentes necesitan revisarse. Si Usted configura esto así, entonces la lista de cotejo estará oculta para los estudiantes hasta que sus ítems hayan sido re-calificados.';
$string['regrademessage5'] = 'Usted está a punto de guardar cambios significativos a una lista de cotejo que ya ha sido usada para calificar. El valor del Libro de calificaciones permanecerá sin cambios, pero la lista de cotejo estará oculta para los estudiantes hasta que sus ítems hayan sido re-calificados.';
$string['regradeoption0'] = 'No marcar para re-calificar';
$string['regradeoption1'] = 'Marcar para re-calificar';
$string['restoredfromdraft'] = 'NOTA: El último intento para calificar a esta persona no fue guardado apropiadamente, por lo que las calificaciones en borrador han sido restauradas. Si Usted quisiera cancelar estos cambios, use el botón inferior para \'Cancelar\'.';
$string['save'] = 'Guardar';
$string['savechecklist'] = 'Guardar lista de cotejo (checklist) y hacerla disponible';
$string['savechecklistdraft'] = 'Guardar como borrador';
$string['scorepostfix'] = '{$a} puntos';
$string['showitempointseval'] = 'Mostrar puntos para cada ítem durante la evaluación';
$string['showitempointstudent'] = 'Mostrar puntos para cada ítem a sujetos que están siendo calificados';
$string['showremarksstudent'] = 'Mostrar todos los comentarios a sujetos que están siendo calificados';
$string['unchecked'] = 'No-revisada';
