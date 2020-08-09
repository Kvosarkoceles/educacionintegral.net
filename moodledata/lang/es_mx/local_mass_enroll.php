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
 * Strings for component 'local_mass_enroll', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   local_mass_enroll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['creategroupings'] = 'Crear agrupamiento(s) si fuera necesario';
$string['creategroups'] = 'Crear grupo(s) si fuera necesario';
$string['email_sent'] = 'Email enviado a {$a}';
$string['enablemassenrol'] = 'Permitir inscripciones masivas desde administración del curso';
$string['enablemassenrol_help'] = 'Active esta opción para permitir extensiones para inscripción masiva en el árbol de administración del curso';
$string['enablemassunenrol'] = 'Permitir des-inscripciones masivas desde administración del curso';
$string['enablemassunenrol_help'] = 'Active esta opción para permitir extensiones para des-inscripción masiva en el árbol de administración del curso';
$string['enroll'] = 'Inscribirlos a mi curso';
$string['firstcolumn'] = 'La primera columna contiene';
$string['idnumber'] = 'número ID';
$string['im:already_in'] = '{$a} ya incrito(s)';
$string['im:already_in_g'] = 'ya adentro del grupo {$a}';
$string['im:and_added_g'] = 'y añadido(s) al grupo Moodle {$a}';
$string['im:enrolled_ok'] = '{$a} inscrito(s)';
$string['im:err_opening_file'] = 'error al abrir archivo {$a}';
$string['im:error_addg'] = 'error al añadir grupo {$a->groupe} al curso {$a->courseid}';
$string['im:error_add_g_grp'] = 'error al añadir grupo {$a->groupe} al agrupamiento {$a->groupe}';
$string['im:error_add_grp'] = 'error al añadir agrupamiento {$a->groupe} al curso {$a->courseid}';
$string['im:error_adding_u_g'] = 'error al añadir al grupo {$a}';
$string['im:error_g_unknown'] = 'error de grupo desconocido {$a}';
$string['im:error_in'] = 'error al inscribir a {$a}';
$string['im:error_out'] = 'error al des-inscribir a {$a}';
$string['im:not_in'] = '{$a} NO inscrito';
$string['im:opening_file'] = 'Abriendo archivo : {$a}';
$string['im:stats_g'] = '{$a->nb} grupo(s) creado(s) : {$a->what}';
$string['im:stats_grp'] = '{$a->nb} agrupamiento(s) creado(s) : {$a->what}';
$string['im:stats_i'] = '{$a} inscrito(s)';
$string['im:stats_ui'] = '{$a} des-inscrito(s)';
$string['im:unenrolled_ok'] = '{$a} des-inscrito(s)';
$string['im:user_unknown'] = '{$a} desconocido - saltando la línea';
$string['im:using_role'] = 'Inscribiendo usuarios como : {$a}';
$string['localmassenrolldefaults'] = 'Configuraciones por defecto para inscripción masiva';
$string['localmassenrollextensions'] = 'Configuraciones de extensión del menú';
$string['mail_enrolment'] = 'Hola,
Usted acaba de inscribir la siguiente lista de usuarios a su curso \'{$a->course}\'.
Aquí está un reporte de operaciones:
{$a->report}
Atentamente.';
$string['mail_enrolment_subject'] = 'Inscripciones masivas en {$a}';
$string['mailreport'] = 'Mandarme un reporte por correo electrónico';
$string['mailreportdefault'] = 'Mandar reportes por defecto';
$string['mailreportdefault_help'] = 'Configure la configuración por defecto para enviar reportes para los formatos de (des)inscripción masiva';
$string['mail_unenrolment'] = 'Hola,
Usted acaba de des-inscribir la siguiente lista de usuarios de su curso \'{$a->course}\'.
Aquí está un reporte de operaciones :
{$a->report}
Atentamente.';
$string['mail_unenrolment_subject'] = 'Des-inscripciones masivas en {$a}';
$string['mass_enroll'] = 'Inscripciones masivas';
$string['mass_enroll:enrol'] = 'Inscribir usuarios a un curso mediante archivo CSV';
$string['mass_enroll_help'] = '<h1>Inscripciones masivas</h1>

<p>
A continuación usted podrá inscribir a su curso a los usuarios indicados en una lista en un archivo. La lista deberá contener a un usuario por renglón.
</p>
<p>
<b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener una o dos columnas separadas por coma, punto y coma, o tabulación.

Usted debería de prepararlo desde su programa habitual de hoja-de-cálculo a partir de la lista oficial de estudiantes, por ejemplo,
y añadir, si fuera necesario, una columna con grupos a los cuales Usted desea que sean añadidos estos usuarios. Finalmente deberá exportarlo como CSV. (*)</p>

<b> La primera columna debe contener un identificador único de cuenta, ya sea el <i>idnumber</i>) (por defecto),  el Nombre_de_usuario (login) o dirección de correo electrónico del usuario a inscribir (**). </p>

<p>
La segunda columna es opcional. Si está presente deberá indicar el <b>nombre del grupo</b> al que desea añadir al usuario.

<br>
Si el grupo no existe, será creado en su curso junto con un agrupamiento con el mismo nombre al cual será añadido el grupo.
<br/>
Esto es porque las actividades en Moodle se pueden restringir a agrupamientos y no a grupos, por lo que esto hará su vida más simple (esto requiere que los agrupamientos hayan sido activados por el administrador del sitio).
</p>

<p>
Puede Usted tener, en el mismo archivo, usuarios a añadir a grupos distintos o que no sean agregados a ningún grupo.
</p>

<p>
Puede des-seleccionar las opciones de crear grupos y agrupamientos si está seguro que estos ya existen en el curso.
</p>

<p>
Por defecto, los usuarios serán inscritos como estudiantes, pero Usted puede seleccionar otros roles que Usted tenga permitido gestionar (profesor, profesor no-editor o cualquier rol personalizado)
<p>

<p>
Puede repetir esta acción sin peligro; por ejemplo, si olvidó o escribió mal el nombre de un grupo.
</p>


<h2> Ejemplos de archivos </h2>

Idnumbers y un nombre de grupo serán creados si se necesitaran en el curso (*)
<pre>
"idnumber";"group"
" 2513110";" 4GEN"
" 2512334";" 4GEN"
" 2314149";" 4GEN"
" 2514854";" 4GEN"
" 2734431";" 4GEN"
" 2514934";" 4GEN"
" 2631955";" 4GEN"
" 2512459";" 4GEN"
" 2510841";" 4GEN"
</pre>

Solo idnumbers (**)
<pre>
idnumber
2513110
2512334
2314149
2514854
2734431
2514934
2631955
</pre>

Solo direcciones Email (**)
<pre>
email
toto@insa-lyon.fr
titi@]insa-lyon.fr
tutu@insa-lyon.fr
</pre>

Nombres de usuario y grupos, separados por tabulación (los comentarios que aquí están entre paréntesis no deberán de escribirse) :

<pre>
username grupo
ppollet grupo_prueba (estará en ese grupo)
codet grupo_prueba (también él)
astorck otro_grupo (estará en otro grupo)
yjayet  (no estará en ningún grupo)
(línea vacía ignorada)
usuario_desconocido grupo_prueba (cuenta ignorada)
</pre>

<p>
<span <font color=\'red\'>(*) </font></span>: comillas dobles y espacios añadidos por algunas hojas de cálculo serán removidas
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: la cuenta debe existir en Moodle; este es el caso si Moodle se sincroniza con un directorio externo  (LDAP...)
</p>';
$string['mass_enroll_info'] = '<p>
Con esta opción Usted va a inscribir una lista de usuarios conocidos a partir de un archivo con una cuenta por línea
</p>
<p>
<b> La primera línea </b> las líneas vacías o las cuentas desconocidas serán saltadas. </p>
<p>
El archivo puede contener varias columnas, separadas por una coma, un punto-y-coma o una tabulación.
<br/>
<b>La primera debe contener un identificador único de cuenta : idnumber (por defecto) para ingresar o Email </b> del usuario destino. <br/>

La segunda <b>si estuviera presente,</b> contiene el nombre del grupo en el cual Usted desea que ese usuario sea añadido. <br/>

Usted puede repetir esta operación a voluntad sin perjuicios; por ejemplo, si Usted olvidó el grupo para algunos usuarios.
</p>';
$string['massenrollsettings'] = 'Configuraciones de inscripciones masivas';
$string['mass_enroll:unenrol'] = 'Des-inscribir usuarios de un curso mediante archivo CSV';
$string['mass_unenroll'] = 'Des-inscripciones masivas';
$string['mass_unenroll_help'] = '<h1>Des-inscripciones masivas</h1>

<p>
Con esta opción Usted va a des-inscribir una lista de usuarios a partir de un archivo con una cuenta por línea
</p>
<p>
<b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener varias columnas separadas por coma, punto y coma, o tabulación.

Usted debería de prepararlo desde su programa habitual de hoja-de-cálculo a partir de la lista oficial de estudiantes, por ejemplo,
al exportar el Libro de calificaciones a CSV, o usar el mismo archivo que Usted usó para inscribir masivamente a los usuarios (*)</p>

<b> La primera columna debe contener un identificador único de cuenta, ya sea el <i>idnumber</i>) (por defecto) para ingresar, o dirección de correo electrónico del usuario a inscribir (**). </p>

<p>
Todas las demás columnas serán ignoradas.<p>


<p>
Por defecto, los usuarios serán inscritos como estudiantes, pero Usted puede seleccionar otros roles que Usted tenga permitido gestionar (profesor, profesor no-editor o cualquier rol personalizado)
<p>

<p>
Puede repetir esta acción sin peligro; por ejemplo, si olvidó des-inscribir a algunos usuarios.
</p>


<p>
<span <font color=\'red\'>(*) </font></span>: comillas dobles y espacios añadidos por algunas hojas de cálculo serán removidas
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: la cuenta debe existir en Moodle y estar inscrita en este curso.
</p>';
$string['mass_unenroll_info'] = '<p>
Con esta opción Usted va a des-inscribir una lista de usuarios a partir de un archivo con una cuenta por línea.
</p>
<p>b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener una o dos columnas separadas por coma, punto y coma, dos puntos o tabulación.

<b> La primera columna debe contener un identificador único de cuenta ya sea el <i>idnumber</i>) (por defecto),  el Nombre_de_usuario (login) o dirección de correo electrónico del usuario a inscribir. </p>

<p>
Las demás columnas, si estuvieran presentes, serán ignoradas.Así, el archivo podría ser el mismo que el usado para inscribir masivamente a usuarios adentro de este curso

<p>
Puede repetir esta acción sin peligro por ejemplo si olvidó des-inscribir algunos usuarios.
</p>';
$string['pluginname'] = 'Inscripciones masivas';
$string['roleassign'] = 'Rol a asignar';
$string['unenroll'] = 'Des-inscribirlos de mi curso';
$string['username'] = 'Nombre_de_usuario (login)';
