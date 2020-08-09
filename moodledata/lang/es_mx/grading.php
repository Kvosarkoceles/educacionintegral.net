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
 * Strings for component 'grading', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'Se ha seleccionado \'{$a->method}\' como el método activo de calificación  para el área \'{$a->area}';
$string['activemethodinfonone'] = 'No se ha seleccionado el método avanzado de calificación para el área \'{$a->area}\'. Se usará el método simple directo de calificación.';
$string['changeactivemethod'] = 'Cambiar método de calificación activo a';
$string['clicktoclose'] = 'clic para cerrar';
$string['error:notinrange'] = 'Calificación inválida \'{$a->grade}\' proporcionada. Las calificaciones deben estar entre 0 y {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'No es posible crear un elemento  del formato de calificación';
$string['formnotavailable'] = 'Un método de calificación avanzada fue seleccionado para su uso, pero el formato de calificación aún no está disponible. Usted debería definirlo previamente utilizando un enlace existente en el menú de acciones o en el bloque de administración.';
$string['gradingformunavailable'] = 'Tenga en cuenta que el formato de calificación avanzada no está listo en este momento. Se utilizará el método simple de calificación hasta que el formato tenga un estatus válido';
$string['gradingmanagement'] = 'Calificación avanzada';
$string['gradingmanagementtitle'] = 'Calificación avanzada: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Método de calificación';
$string['gradingmethod_help'] = 'Elija el método de calificación avanzada que se debe utilizar para calcular las calificaciones en este contexto.

Para deshabilitar la calificación avanzada y volver al método  de calificación por defecto, elija \'Calificación simple directa\'.';
$string['gradingmethodnone'] = 'Calificación simple directa';
$string['gradingmethods'] = 'Métodos de calificación';
$string['manageactionclone'] = 'Crear un nuevo formato de calificación a partir de una plantilla';
$string['manageactiondelete'] = 'Eliminar el formato actualmente definido';
$string['manageactiondeleteconfirm'] = 'Usted va a eliminar el formato de calificación \'{$a->formname}\' y toda la información asociada de \'{$a->component} ({$a->area})\'. Por favor, asegúrese de que comprende las siguientes consecuencias: * No hay forma de deshacer la operación. * Usted puede cambiar a otro método de calificación, incluida la "Calificación simple directa" sin eliminar este formato. * Toda la información almacenada mediante los formatos de calificación se perderá. * Los resultados de las calificaciones calculadas guardadas en el libro de calificaciones no se verá afectados. Sin embargo, la explicación de cómo se han calculado no estará disponible. * Esta operación no afecta a eventuales copias de este formato en otras actividades.';
$string['manageactiondeletedone'] = 'El formato se eliminó correctamente';
$string['manageactionedit'] = 'Editar la definición del formato actual';
$string['manageactionnew'] = 'Defina un nuevo formato de calificación desde cero';
$string['manageactionshare'] = 'Publicar el formato como una nueva plantilla';
$string['manageactionshareconfirm'] = 'Está a punto de cuardar una copia del formato de calificación \'{$a}\' como una plantilla pública. Otros usuarios de su sitio podrán crear nuevos formatos de calificación para sus actividades a partir de esta plantilla.';
$string['manageactionsharedone'] = 'El formato se guardó correctamente como plantilla';
$string['noitemid'] = 'No es posible calificar. El ítem de calificación no existe.';
$string['nosharedformfound'] = 'No se ha encontrado plantilla';
$string['privacy:metadata:grading_definitions'] = 'Información básica acerca de un formato de método avanzado para calificar definido en una área calificable.';
$string['privacy:metadata:grading_definitions:areaid'] = 'La ID del área en donde está definido el formato de calificación avanzada.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'La ID de definición de calificación desde donde se copió esto.';
$string['privacy:metadata:grading_definitions:description'] = 'La descripción del método avanzado para calificar.';
$string['privacy:metadata:grading_definitions:method'] = 'El método para calificar que es responsable por la definición.';
$string['privacy:metadata:grading_definitions:name'] = 'El nombre de la definición de la calificación avanzada.';
$string['privacy:metadata:grading_definitions:options'] = 'Algunas configuraciones de la definición de calificación.';
$string['privacy:metadata:grading_definitions:status'] = 'El estado de esta definición de calificación avanzada.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'La hora en la cual fue copiada esta definición de calificación.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'La hora en la cual fue creada esta definición de calificación.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'La hora en la cual fue modificada por última vez esta definición de calificación.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'La ID del usuario que creó la definición de calificación.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'La ID del usuario que modificó por última vez la definición de calificación.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Datos para el método de calificar.';
$string['privacy:metadata:grading_instances'] = 'Registro de valoración para un ítem calificable valorado por un evaluador.';
$string['privacy:metadata:grading_instances:feedback'] = 'La retroalimentación dada por el usuario.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'El formato de la retroalimentación dada por el usuario.';
$string['privacy:metadata:grading_instances:raterid'] = 'La ID del usuario que valoró la instancia de calificar.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'La calificación para la instancia de calificar.';
$string['privacy:metadata:grading_instances:status'] = 'El estado de esta  instancia de calificar.';
$string['privacy:metadata:grading_instances:timemodified'] = 'La hora en la cual fue modificada por última vez la instancia para calificar.';
$string['searchownforms'] = 'Incluir mis propios formatos';
$string['searchtemplate'] = 'Búsqueda de formatos de calificación';
$string['searchtemplate_help'] = 'Usted puede buscar aquí un formato de calificación y utilizarlo como una plantilla para crear un nuevo formato de calificación. Simplemente escriba palabras que formen parte del nombre del formato, la descripción o el cuerpo del mismo. Para buscar una frase, ponga toda la consulta entre comillas dobles.

Por defecto, sólo los formatos de calificación que se han guardado como plantillas compartidas se incluyen en los resultados de búsqueda. También puede incluir todos sus propios formatos de calificación en los resultados de la búsqueda. De esta manera, puede simplemente reutilizar sus formatos de calificación sin necesidad de compartirlos. Sólo los formatos marcados como "Listo para su uso" pueden ser reutilizados de esta manera.';
$string['statusdraft'] = 'Borrador';
$string['statusready'] = 'Listo para usarse';
$string['templatedelete'] = 'Eliminar';
$string['templatedeleteconfirm'] = 'Esta a punto de borrar la plantilla compartida \'{$a}\'. Eliminar una plantilla no afecta a los formatos existentes creados a partir de la misma.';
$string['templateedit'] = 'Editar';
$string['templatepick'] = 'Usar esta plantilla';
$string['templatepickconfirm'] = '¿Desea usar el formato de calificación \'{$a->formname}\' como una plantilla para el nuevo formato de calificación en \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Utilice este formato como plantilla';
$string['templatesource'] = 'Ubicación: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Formato propio';
$string['templatetypeshared'] = 'Plantilla compartida';
