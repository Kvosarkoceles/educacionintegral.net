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
 * Strings for component 'rating', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Promedio de valuaciones (ratings)';
$string['aggregatecount'] = 'Número de valuaciones  (ratings)';
$string['aggregatemax'] = 'Valuación (rating) máxima';
$string['aggregatemin'] = 'Valuación (rating) mínima';
$string['aggregatenone'] = 'Sin valuaciones (ratings)';
$string['aggregatesum'] = 'Suma de valuaciones (ratings)';
$string['aggregatetype'] = 'Tipo agregado';
$string['aggregatetype_help'] = 'El tipo de consolidación define cómo se combinan las valuaciones (ratings) para formar la calificación final en el libro de calificaciones.

* Promedio de valuaciones- La media de todas las valuaciones
* Número de calificaciones - El número de elementos valuados se convierte en la calificación final. Tenga en cuenta que el total no puede exceder la calificación máxima de la actividad
* Máxima - La valuación más alta se convierte en la calificación final
* Mínima- La valuación más baja se convierte en la calificación final
* Suma- Todas las valuaciones se suman.
Tenga en cuenta que el total no puede exceder la calificación máxima de la actividad.

Si "Sin valuaciones" está seleccionado, entonces la actividad no aparece en el libro de calificaciones.';
$string['allowratings'] = '¿Permitir que los ítems sean valuados?';
$string['allratingsforitem'] = 'Todas las valuaciones (ratings) emitidas';
$string['capabilitychecknotavailable'] = 'La comprobación de capacidades no está disponible hasta que se guarde la actividad';
$string['couldnotdeleteratings'] = 'Lo sentimos, no se puede eliminar, puesto que alguien ya lo ha valuado';
$string['grade_rating_name'] = 'Valuación (rating)';
$string['norate'] = 'No se permite valuar (rating) ítems.';
$string['noratings'] = 'No se han enviado valuaciones (ratings)';
$string['noviewanyrate'] = 'Sólo puede consultar los resultados de items que Usted hizo';
$string['noviewrate'] = 'No tiene la capacidad para ver las valuaciones (rating) de los ítems';
$string['privacy:metadata:rating'] = 'La valoración ingresada por el usuario es almacenada junto con un mapeo del ítem que fue valorado.';
$string['privacy:metadata:rating:rating'] = 'La valoración numérica que el usuario ingresó.';
$string['privacy:metadata:rating:timecreated'] = 'La hora en la que se hizo por primera vez la valoración.';
$string['privacy:metadata:rating:timemodified'] = 'La hora en la que se actualizó por última vez la valoración.';
$string['privacy:metadata:rating:userid'] = 'El usuario que hizo la valoración.';
$string['rate'] = 'Valorar';
$string['ratepermissiondenied'] = 'No tiene permiso para valuar este ítem';
$string['rating'] = 'Valuación (rating)';
$string['ratinginvalid'] = 'La valuación (rating) es inválida';
$string['ratings'] = 'Valuaciones (ratings)';
$string['ratingtime'] = 'Limitar las valuaciones (ratings) a los elementos con fechas en este rango:';
$string['rolewarning'] = 'Roles con permiso para valuar';
$string['rolewarning_help'] = 'Para enviar valuaciones (ratings), los usuarios necesitan la capacidad \'moodle/rating:rate\' y cualquier capacidad específica del módulo. Los usuarios asignados a los roles siguientes deberían poder valuar ítems. La lista de roles puede ser modificada a través del enlace a permisos en el menú de acciones o el bloque de Administración, dependiendo del tema.';
$string['scaleselectionrequired'] = 'Al seleccionar un tipo de agregación de valoraciones Usted debe de seleccionar también el usar una escala o configurar un puntaje máxicmo.';
