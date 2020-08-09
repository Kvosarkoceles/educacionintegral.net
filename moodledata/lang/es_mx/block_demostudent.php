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
 * Strings for component 'block_demostudent', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   block_demostudent
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advicefordemostudent'] = '';
$string['adviceforfirstuse'] = 'Creando una cuenta de EstudianteDemo inscribe a un usuario llamado EstudianteDemo dentro de su curso. Usted puede entonces ingresar como su EstudianteDemo para probar diferentes experiencias como estudiante en su curso.';
$string['adviceforinstructor'] = 'Se ha creado una cuenta de EstudianteDemo en este curso. El cambiarse hacia la cuenta EstudianteDemo le permitirá a Usted:<blockquote>
<ul><li>Ver su curso como un estudiante
<li>Probar restricciones de Grupo basadas en membresía en un Grupo
<li>Probar actividades para experimentar completamente lo que ven los estudiantes
</ul></blockquote>';
$string['advicetwowindows'] = '<p>Dos navegadores, ambos ingresados en Moodle,<br>
Uno como Instructor, el otro como su gemelo EstudianteDemo,<br>
Impedirán el cambiar eternamente el curso<br>
Desde una vista hacia la otra, de ida y vuelta.';
$string['buttonfordemostudent'] = 'Regresar a mi rol de <b>Instructor</b>';
$string['buttonforfirstuse'] = 'Crear un EstudianteDemo';
$string['buttonforinstructor'] = 'Cambiar a EstudianteDemo';
$string['buttonforunenrol'] = 'Des-inscribir EstudianteDemo';
$string['demostudent'] = 'Vista de EstudianteDemo';
$string['demostudent:addinstance'] = 'Añadir un nuevo bloque de EstudianteDemo (solamente para instructores).';
$string['demostudent:seedemostudentblock'] = 'Vea el bloque EstudianteDemo (para instructores y EstudiantesDemo).';
$string['errorfailedtocreateuser'] = '<hr><h4>ERROR: No pudo crearse el usuario </h4><b>{$a}</b> . Lo sentimos.';
$string['errorinstructormasquerade'] = '<hr><h4>ERROR:</h4>Una cuenta de EstudianteDemo no puede ver cursos como
instructor.<p>Por favor, ingrese al sitio nuevamente.<hr>';
$string['errormissingaddinstancecapability'] = '<hr><h4>ERROR:</h4>Usted debe de tener la capacidad de
<i>block/demostudent:addinstance</i> para crear una cuenta de EstudianteDemo.<p>Por favor, haga que un administrador revise su rol y sus capacidades.<p>Por favor, ingrese al sitio nuevamente.<hr>';
$string['errorremovenotinstructor'] = '<hr><h4>ERROR:</h4>Solamente un instructor puede remover a su propio EstudianteDemo.<hr>Por favor, ingrese al sitio nuevamente.<hr>';
$string['pluginname'] = 'Bloque EstudianteDemo';
$string['privacy:metadata'] = 'El bloque de estudiante demo no está configurado para ser compatible con GDPR.';
$string['returntocourse'] = '<p><a href="{$a}">Regresar</a> al curso.';
$string['roledemostudentdescription'] = 'Se asignó el rol a las cuentas creadas mediante el bloque EstudianteDemo, para que los instructores prueben sus cursos.';
$string['roledemostudentname'] = 'EstudianteDemo';
$string['switchfromdemostudentview'] = 'Regresar a vista de instructor. Puede ser que necesite ingresar nuevamente.';
$string['switchfromfirstuseview'] = 'Crear e inscribir EstudianteDemo en este curso.';
$string['switchfrominstructorview'] = 'Ver curso como EstudianteDemo.';
$string['unenroltip'] = 'Quitar al EstudianteDemo de este curso';
$string['viewisdemostudent'] = 'Actualmente Usted está viendo la vista de <b>EstudianteDemo</b>.';
$string['viewisfirstuse'] = 'Actualmente Usted está viendo la vista de <b>Instructor</b>.';
$string['viewisinstructor'] = 'Actualmente Usted está viendo la vista de <b>Instructor</b>.';
$string['warningcoursenotvisible'] = '<hr><h4>Este curso no está disponible para estudiantes.</h4>
Los instructores pueden editar las configuraciones del curso para cambiar esto.<hr>';
$string['warningmissingrole'] = '<hr><h4>ADVERTENCIA:</h4>No se encontró un rol de "demostudent" (estudiantedemo) en la BasedeDatos.
Esto puede llevar a un comportamiento inesperado del bloque de EstudianteDemo. Por favor, pídale a un administrador que verifique los roles del sistema y que reinstale el plugin si fuera necesario.<hr>';
