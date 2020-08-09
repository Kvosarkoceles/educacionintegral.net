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
 * Strings for component 'cohort', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Añadir nuevo cohorte';
$string['allcohorts'] = 'Todas las cohortes';
$string['anycohort'] = 'Cualquiera';
$string['assign'] = 'Asignar';
$string['assigncohorts'] = 'Asignar miembros de cohorte';
$string['assignto'] = 'Miembros de cohorte \'{$a}';
$string['backtocohorts'] = 'Regresar a cohorte';
$string['bulkadd'] = 'Añadir a cohorte';
$string['bulknocohort'] = 'No se encontraron cohortes disponibles';
$string['categorynotfound'] = 'Categoría <b>{$a}</b> no encontrada, o Usted no tiene permisos para crear allí una cohorte. Se usará el contexto por defecto.';
$string['cohort'] = 'Cohorte';
$string['cohorts'] = 'Cohortes';
$string['cohortsin'] = '{$a}: cohortes disponibles';
$string['component'] = 'Orígen';
$string['contextnotfound'] = 'Categoría <b>{$a}</b> no encontrada, o Usted no tiene permisos para crear allí una cohorte. Se usará el contexto por defecto.';
$string['csvcontainserrors'] = 'Se encontraron errores en los datos del CSV. Vea debajo los detalles.';
$string['csvcontainswarnings'] = 'Se encontraron advertencias en los datos del CSV. Vea debajo los detalles.';
$string['csvextracolumns'] = 'Columna(s) <b>{$a}</b> será(n) ignorada(s).';
$string['currentusers'] = 'Usuarios actuales';
$string['currentusersmatching'] = 'Usuarios actuales que coinciden';
$string['defaultcontext'] = 'Contexto por defecto';
$string['delcohort'] = 'Eliminar cohorte';
$string['delconfirm'] = '¿Realmente desea borrar la cohorte \'{$a}\'?';
$string['description'] = 'Descripción';
$string['displayedrows'] = '{$a->displayed} hileras mostradas de un total de  {$a->total}.';
$string['duplicateidnumber'] = 'Ya existe una cohorte con el mismo número ID';
$string['editcohort'] = 'Editar cohorte';
$string['editcohortidnumber'] = 'Editar ID de cohorte';
$string['editcohortname'] = 'Editar nombre de cohorte';
$string['eventcohortcreated'] = 'Cohorte creada';
$string['eventcohortdeleted'] = 'Cohorte eliminada';
$string['eventcohortmemberadded'] = 'Usuario añadido a cohorte';
$string['eventcohortmemberremoved'] = 'Usuario removido de cohorte';
$string['eventcohortupdated'] = 'Cohorte actualizada';
$string['external'] = 'Cohorte externa';
$string['idnumber'] = 'ID de cohorte';
$string['invalidtheme'] = 'El tema de la cohorte no existe';
$string['memberscount'] = 'Tamaño de cohorte';
$string['name'] = 'Nombre';
$string['namecolumnmissing'] = 'Algo está mal con el formato del archivo CSV. Por favor, revise que incluya los nombres correctos de las columnas. Para añadirle usuarios a una cohorte, vaya a \'Subir usuarios\' en la Administración del sitio.';
$string['namefieldempty'] = 'El nombre del campo no puede estar vacío.';
$string['newidnumberfor'] = 'Nuevo ID number (número_ID) para cohorte {$a}';
$string['newnamefor'] = 'Nuevo nombre para cohorte {$a}';
$string['nocomponent'] = 'Creada manualmente';
$string['potusers'] = 'Usuarios potenciales';
$string['potusersmatching'] = 'Usuarios potencialesque coinciden';
$string['preview'] = 'Vista previa';
$string['privacy:metadata:cohort_members'] = 'Información acerca de la cohorte del usuario.';
$string['privacy:metadata:cohort_members:cohortid'] = 'La ID de la cohorte';
$string['privacy:metadata:cohort_members:timeadded'] = 'El sello de tiempo que indica cuando fue añadido el usuario a la cohorte';
$string['privacy:metadata:cohort_members:userid'] = 'La ID del usuario que está asociado a la cohorte';
$string['removeuserwarning'] = 'Quitar usuarios de una cohorte puede resultar en la des-inscripción (dar de baja) de usuarios de múltiples cursos, lo que incluye la eliminación de las configuraciones de usuario, las calificaciones, la pertenencia a grupos y otra información de usuario de los cursos afectados.';
$string['search'] = 'Buscar';
$string['searchcohort'] = 'Buscar cohorte';
$string['selectfromcohort'] = 'Miembros seleccionados de cohorte';
$string['systemcohorts'] = 'Cohortes del sistema';
$string['unknowncohort'] = 'Cohorte desconocida ({$a})!';
$string['uploadcohorts'] = 'Subir cohortes';
$string['uploadcohorts_help'] = 'Se pueden subir cohortes mediante archivos de texto. El formato del archivo es como sigue:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas (o por otros delimitadores)
* El primer registro contiene una lista de nombres_de_campos que definen el formato del resto del archivo
* El nombre_de_campo obligatorio es (así escrito en idioma inglés) name
* Los nombres_de_campo opcionales (así escritos en idioma inglés) son idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Subidos {$a} cohortes';
$string['useradded'] = 'Usuario añadido a cohorte "{$a}"';
$string['visible'] = 'Visible';
$string['visible_help'] = 'Cualquier cohorte puede ser vista por usuarios que tengan  la capacidad  \'moodle/cohort:view\' en el contexto de cohorte. <br/>
Las cohortes visibles pueden verse por usuarios en los cursos subyacentes.';
