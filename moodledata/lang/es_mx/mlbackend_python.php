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
 * Strings for component 'mlbackend_python', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   mlbackend_python
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'La configuración del servidor no está completa.';
$string['errorserver'] = 'Error del servidor {$a}';
$string['host'] = 'Host';
$string['hostdesc'] = 'Host';
$string['packageinstalledshouldbe'] = 'El paquete Python moodlemlbackend debería ser actualizado. La versión necesaria es "{$a->required}" y la versión instalada es "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'El paquete Python moodlemlbackend no es compatible con esta versión de Moodle. La versión necesaria es "{$a->required}" o más alta en cuanto sea compatible con API. La versión instalada  "{$a->installed}" es demasiado alta.';
$string['password'] = 'Contraseña';
$string['passworddesc'] = 'Cadena de caracteres alfanuméricos usada como una contraseña para comunicarse entre el servidor Moodle y el servidor Python';
$string['pluginname'] = 'Backend de Python de aprendizaje de máquina';
$string['port'] = 'Puerto';
$string['portdesc'] = 'Puerto';
$string['privacy:metadata'] = 'El plugin del Backend de aprendizaje de máquina Python no almacena ningún dato personal.';
$string['pythonpackagenotinstalled'] = 'El paquete Python moodlemlbackend no está instalado o hay un problema con él. Por favor ejecute "{$a}" desde la interfaz de línea de comando para más información';
$string['pythonpathnotdefined'] = 'La ruta hacia su binario ejecutable de Python no ha sido definida. Por favor visite "{$a}" para configurarla.';
$string['secure'] = 'Usar HTTPS';
$string['securedesc'] = 'Si es que se usa HTTP o HTTPS.';
$string['serversettingsinfo'] = 'Si está habilitado el "Usar un servidor", serán mostradas las configuraciones del servidor.';
$string['tensorboardinfo'] = 'Invocar TensorBoard desde la línea de comandos al escribir tensorboard --logdir=\'{$a}\' en su servidor web.';
$string['username'] = 'Nombre_de_usuario';
$string['usernamedesc'] = 'Cadena de caracteres alfanuméricos usada como un nombre_de_usuario para comunicarse entre su servidor Moodle y el servidor Python.';
$string['useserver'] = 'Usar un servidor';
$string['useserverdesc'] = 'El paquete Python de backend de aprendizaje de máquina no está instalado en el servidor web, sino que está en un servidor diferente.';
