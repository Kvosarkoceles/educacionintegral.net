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
 * Strings for component 'auth_emailadmin', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   auth_emailadmin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminconfirmation'] = 'Hola administrador de Moodle,

Se ha solicitado una cuenta nueva en \'{$a->sitename}\' con los datos siguientes:

Ejemplo de cualquier campo de usuario específico:
user->lastname: {$a->lastname}

Todos los campos personalizados:
{$a->customfields}

Todos los campos de usuario + campos personalizados:
{$a->userdata}

Para confirmar la nueva cuenta, por favor vaya a esta dirección de Internet:

{$a->link}

En la mayoría de los programas de correo electrónico, esto debería de aparecer como un enlace de color azul, al cual Usted puede hacer clic. Si esto no funciona, entonces copie la dirección y péguela en la línea de la dirección de su navegador web.

Usted también puede confirmar las cuentas desde Moodle al ir a
Administración del sitio -> Usuarios';
$string['auth_emailadminconfirmationsubject'] = '{$a}: confirmación de cuenta';
$string['auth_emailadminconfirmsent'] = '<p> Su cuenta ha sido registrada y queda pendiente su confirmación por el administrador. El siguiente paso es que Usted reciba una confirmación o que sea contactado para aclaraciones .</p>';
$string['auth_emailadmindescription'] = '<p>Auto-registro basado en Email con confirmación por el administrador\' le permite a un usuario el crear su  propia cuenta mediante un botón para \'Crear nueva cuenta\' en la página de ingreso al sitio. Los administradores del sitio entonces reciben un Email que contiene un enlace seguro hacia una página en donde el administrador puede confirmar la cuenta. Los ingresos futuros solamente revisan el nombre_de_usuario y la contraseña contra los valores almacenados en la BasedeDatos de Moodle.</p><p>Nota: Además de habilitar el plugin, debe de seleccionarse el auto-registro con confirmación por el administrador del menú desplegable para auto-registro en la página de \'Gestionar autenticación\'.</p>';
$string['auth_emailadminnoadmin'] = 'No se encontraron administradores en la estrategia de notificación. Por favor revise la configuración de auth_emailadmin.';
$string['auth_emailadminnoemail'] = '¡Trató de enviarle un Email pero falló!';
$string['auth_emailadminnotif_failed'] = 'No pudo enviarse notificación de registro a:';
$string['auth_emailadminnotif_strategy'] = 'Define la estrategia para mandar las notificaciones de registro. Las opciones disponibles son "primer" usuario administrador, "todos" los usuarios administradores o un usuario administrador específico.';
$string['auth_emailadminnotif_strategy_all'] = 'Todos los usuarios administradores';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Todos los administradores con capacidad para actualizar usuario';
$string['auth_emailadminnotif_strategy_first'] = 'Primer usuario administrador';
$string['auth_emailadminnotif_strategy_key'] = 'Estrategia de notificación:';
$string['auth_emailadminrecaptcha'] = 'Añade un elemento de formato de confirmación visual/audio a la página de registro para los usuarios que se auto-registran por Email. Esto protege a su sitio de spammmers y contribuye a una buena causa. Vea http://www.google.com/recaptcha/learnmore para más detalles. <br /><em>Se requiere la extensión PHP cURL.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Habilitar elemento reCAPTCHA';
$string['auth_emailadminsettings'] = 'Configuraciones';
$string['auth_emailadminuserconfirmation'] = 'Hola {$a->firstname},

¡Bienvenido a (Mi Organización)! Su cuenta ha sido aprobada. Si aun no lo ha hecho, por favor díganos cómo se enteró de (Mi Organización).

Para las cuentas de estudiantes, por favor, díganos el proyecto en el que le gustaría participar y nosotros crearemos su cuenta de profesor. La información para crear cuentas de estudiantes está  http://www.mi.org/cuentas-estudiantes <a href=http://www.my.org/student-accounts>aquí</a>.

El nombre para la cuenta necesita ser el nombre del estudiante y la inicial de su apellido paterno. El apellido será el nombre de la escuela. Las contraseñas deben de ser de cuando menos 8 caracteres.

Estamos encantados de que se nos haya unido y esperamos verlo a Usted y a sus estudiantes participando en algunos de nuestros proyectos. Usted es ahora un miembro de una comunidad en rápido crecimiento, de educadores y estudiantes, que usan  (Mi Organización) para compartir proyectos, trabajo y conocimiento. Si requiere ayuda no dude en escribirnos  miorg@gmail.com <a href=mailto:myorg@gmail.com>aquí</a>. Nosotros trataremos de resolver las preguntas, comentarios y preocupaciones que pudiera tener respecto a (Mi Organización) con Servicios, Recursos y Herramientas de Google. Vea nuestra página web  http://www.my.org <a href=http://www.my.org/>aquí</a>

* * *

¿Qué es (Mi Organización)?

(Mi Organización) es un ambiente colaborativo fácil de usar, basado en Internet, que les permite a los educadores el desarrollar y gestionar proyectos curriculares basados en la web, compartir información y trabajar juntos a nivel internacional. (Mi Organización) proporciona una variedad de herramientas y accesorios de Google que incluyen mensajería integrada, conferencias y calendarios, para apoyar la colaboración entre profesores y estudiantes dentro de (Mi Organización).

(Mi Organización) le da la bienvenida a sus proyecto y espera verle pronto compartir una gran variedad de proyectos y actividades junto con sus estudiantes participantes. Cuando Usted ingrese, aparecerá la lista de categorías populares. Elija una de ellas para mirar los proyectos en ella especificados. Cuando Usted esté mirando estos proyectos (haga clic en los títulos), le pueden ayudar a generar una idea o dos para usar para desarrollar un proyecto propio en (Mi Organización), o pueden ayudarle a identificar proyectos en los que Usted podría colaborar con otros profesores y estudiantes.

* * *

Debido a que (Mi Organización) está impulsada por proyectos y apoyada por voluntarios, a nosotros nos gustaría que Usted considere el crear un proyecto en ( Mi Organización), o hacerse voluntario para ayudarnos en uno. Si Usted decide crear un proyecto, o volverse voluntario para ayudar a apoyar otros proyectos, por favor envíe un Email miorg@gmail.com <a href=mailto:miorg@gmail.com>aquí</a>. Los líderes y voluntarios de (Mi Organización) estamos aquí para ayudarle con lo que necesite.

Recuerde que el apoyo en-línea para todos los participantes de (Mi Organización) es proporcionado por voluntarios de (Mi Organización). ¡Por favor extienda lo que aprenda aquí para ayudarle a otros profesores a que aprendan también! ¡Esperamos pronto trabajar con Usted y ver sus nuevos proyectos!


Gracias,

Mi Nombre, Director


--
El Equipo de (Mi Organización)
<a href=http://www.my.org/>http://www.mi.org</a>
<a href=mailto:miorg@gmail.com>miorg@gmail.com</a>
<a href=tel:123%20555%205555>123 555 5555</a>';
$string['pluginname'] = 'Auto registro por Email con confirmación del administrador';
