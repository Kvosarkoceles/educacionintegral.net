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
 * Strings for component 'tool_generator', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_generator
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bigfile'] = 'Archivo grande {$a}';
$string['courseexplanation'] = 'Esta herramienta crea cursos de prueba estándar que incluyen muchas secciones, actividades , y archivos.

Esto está dirigido a proporcionar una medida estandarizada para revisar la confiablilidad y desempeño de varios componentes del sistema (tales como respaldo y restauración).

Esta prueba es importante porque previamente han habido muchos casos en donde, al encontrarse con casos de uso en la vida real (por ejemplo, cursos con 1000 actividades), el sistema no trabaja.

Los cursos creados con esta característica pueden ocupar una gran cantidad de espacio en la BasedeDatos y el sistema de archivos (decenas de GigaBytes). Usted necesitará eliminar los cursos (y esperar varias corridas de limpieza) para liberar de nuevo este espacio.

**No use esta característica en un sistema vivo**. Úselo solamente en un servidor para desarrollo. (Para prevenir uso accidental, esta característica está deshabilitada a menos que Usted también haya seleccionado el nivel de depuración DESARROLLADOR (DEVELOPER debugging level) .';
$string['coursesize_0'] = 'XCh (~10KB; crear en ~1 segundo)';
$string['coursesize_1'] = 'Ch (~10MB; crear en ~30 segundos)';
$string['coursesize_2'] = 'Med (~100MB; crear en ~2 minutos)';
$string['coursesize_3'] = 'Gde (~1GB; crear en ~30 minutos)';
$string['coursesize_4'] = 'XGde (~10GB; crear en ~2 horas)';
$string['coursesize_5'] = 'XXGde (~20GB; crear en ~4 horas)';
$string['coursewithoutusers'] = 'El curso seleccionado no tiene usuarios';
$string['createcourse'] = 'Crear curso';
$string['createtestplan'] = 'Crear plan de prueba';
$string['creating'] = 'Creando curso';
$string['done'] = 'hecho ({$a}s)';
$string['downloadtestplan'] = 'Descargar plan de prueba';
$string['downloadusersfile'] = 'Descargar archivo de usuarios';
$string['error_nocourses'] = 'No hay cursos para generar el plan de prueba';
$string['error_noforumdiscussions'] = 'El curso seleccionado no contiene discusiones de foro';
$string['error_noforuminstances'] = 'El curso seleccionado no contiene instancias de módulo de foro';
$string['error_noforumreplies'] = 'El curso seleccionado no contiene respuestas de foro';
$string['error_nonexistingcourse'] = 'El curso seleccionado no existe';
$string['error_nopageinstances'] = 'El curso seleccionado no contiene instancias de módulo de página';
$string['error_notdebugging'] = 'No disponible en este servidor porque la depuración (debugging) no está configurada en DESARROLLADOR';
$string['error_nouserspassword'] = 'Usted necesita configurar $CFG->tool_generator_users_password en config.php para generar el plan de prueba';
$string['fullname'] = 'Probar curso: {$a->size}';
$string['maketestcourse'] = 'Hacer curso de prueba';
$string['maketestplan'] = 'Hacer un plan de prueba JMeter';
$string['notenoughusers'] = 'El curso seleccionado no tiene suficientes usuarios.';
$string['pluginname'] = 'Generador de datos para desarrollo';
$string['privacy:metadata'] = 'El plugin Generador de datos de desarrollo no almacena ningún dato personal.';
$string['progress_checkaccounts'] = 'Revisando cuentas de usuario ({$a})';
$string['progress_coursecompleted'] = 'Curso completado ({$a}s)';
$string['progress_createaccounts'] = 'Creando cuentas de usuarios ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Creando tareas ({$a})';
$string['progress_createbigfiles'] = 'Creando archivos grandes ({$a})';
$string['progress_createcourse'] = 'Creando curso {$a}';
$string['progress_createforum'] = 'Creando foro ({$a} posts)';
$string['progress_createpages'] = 'Creando páginas ({$a})';
$string['progress_createsmallfiles'] = 'Creando archivos pequeños ({$a})';
$string['progress_enrol'] = 'Inscribiendo usuarios al curso ({$a})';
$string['progress_sitecompleted'] = 'Sitio completado ({$a}s)';
$string['shortsize_0'] = 'XCh';
$string['shortsize_1'] = 'Ch';
$string['shortsize_2'] = 'Med';
$string['shortsize_3'] = 'Gde';
$string['shortsize_4'] = 'XGde';
$string['shortsize_5'] = 'XXGde';
$string['sitesize_0'] = 'XCh (~10MB; 3 cursos, creado en ~30 segundos)';
$string['sitesize_1'] = 'Ch (~50MB; 8 cursos, creado en ~2 minutos)';
$string['sitesize_2'] = 'M (~200MB; 73 cursos, creado en ~10 minutos)';
$string['sitesize_3'] = 'G (~1\'5GB; 277 cursos, creado en ~1\'5 horas)';
$string['sitesize_4'] = 'XG (~10GB; 1065 cursos, creado en ~5 horas)';
$string['sitesize_5'] = 'XXG (~20GB; 4177 cursos, creado en ~10 horas)';
$string['size'] = 'Tamaño del curso';
$string['smallfiles'] = 'Archivos pequeños';
$string['targetcourse'] = 'Probar curso destino';
$string['testplanexplanation'] = 'Esta herramienta crea un archivo para plan de prueba de JMeter junto con el archivo de credenciales del usuario.

Este plan de prueba está diseñado para trabajar junto con {$a}, lo que hace más fácil el corrrer el plan de prueba en un ambiente específico de Moodle, junta información acerca de las corridas y compara los resultados; por lo que Usted necesita descargarlo y usar su script test_runner.sh o seguir las instrucciones de instalación y uso.

Usted necesita configurar una contraseña para los usuarios del curso en config.php (por ejemplo, $CFG->tool_generator_users_password = \'moodle\';). No existe  un valor por defecto para esta contraseña, para evitar usos no deseados de esta herramienta. Usted necesita usar la opción para actualizar contraseña en caso de que los usuarios de su curso tengan otras s contraseñas o que hubieran sido generadas por  tool_generator pero sin haber configurado un valor para $CFG->tool_generator_users_password.
Es parte del tool_generator por lo que funciona bien con los cursos generados por los generadores de cursos y de sitio; también puede usarse con cualquier curso que contenga por lo  menos:

* Suficientes usuarios inscritos (depende del tamaño del plan de prueba que seleccione) con la contraseña reiniciada a \'moodle\'
* Una instancia de módulo de página
* Una instancia de módulo de foro con al menos una discusión y una respuesta

Usted también podría querer considerar la capacidad de sus servidores al correr planes de pruebas grandes, dado que la cantidad de carga generada por JMeter puede ser especialmente grande. El período de incremento ha sido ajustado de acuerdo al número de hilos (usuarios) para reducir este tipo de problemas, pero la carga sigue siendo enorme

**No corra el plan de prueba en un sistema vivo (de trabajo real)** Esta característica solamente crea los archivos para alimentar a JMeter, por lo que por si misma no es peligrosa, pero Usted **NUNCA** debería de correr el plan de pruebas en un servidor de trabajo en producción.';
$string['testplansize_0'] = 'XCh ({$a->users} usuarios, {$a->loops} bucles (loops) y {$a->rampup} período de incremento)';
$string['testplansize_1'] = 'Ch ({$a->users} usuarios, {$a->loops} bucles (loops) y {$a->rampup} período de incremento)';
$string['testplansize_2'] = 'M ({$a->users} usuarios, {$a->loops} bucles (loops) y {$a->rampup} período de incremento)';
$string['testplansize_3'] = 'G ({$a->users} usuarios, {$a->loops} bucles (loops) y {$a->rampup} período de incremento)';
$string['testplansize_4'] = 'XG ({$a->users} usuarios, {$a->loops} bucles (loops) y {$a->rampup} período de incremento)';
$string['testplansize_5'] = 'XXG ({$a->users} usuarios, {$a->loops} bucles (loops) y {$a->rampup} período de incremento)';
$string['updateuserspassword'] = 'Actualizar contraseñas de usuarios del curso';
$string['updateuserspassword_help'] = 'JMeter necesita ingresar como los usuarios del curso, Usted puede configurar las contraseñas de usuarios usando $CFG->tool_generator_users_password en config.php; esta configuración actualiza las contraseñas de usuarios del curso de acuerdo a $CFG->tool_generator_users_password. Puede ser útil en caso de que Usted esté usando un curso que no fue generado por tool_generator, o que $CFG->tool_generator_users_password no fue configurado cuando Usted creó los cursos de prueba.';
