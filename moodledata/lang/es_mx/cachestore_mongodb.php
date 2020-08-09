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
 * Strings for component 'cachestore_mongodb', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   cachestore_mongodb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'Base de Datos';
$string['database_help'] = 'El nombre de la Base de Datos a emplear';
$string['extendedmode'] = 'Usar claves extendidas';
$string['extendedmode_help'] = 'Si se habilita, se usarán conjuntos de claves completas cuando se trabaje con este plugin. Esto no se usa internamente aún, pero le permitiría a Usted buscar e investigar fácilmente el plugin MongoDB de forma manual si así lo eligiera. Conectarlo añadirá una carga de trabajo extra pequeña, por lo que solamente debería hacerlo si lo requiere.';
$string['password'] = 'Contraseña';
$string['password_help'] = 'La contraseña del usuario que se usa para la conexión';
$string['pleaseupgrademongo'] = 'Usted está usando una versión antigua de la extensión Mongo de PHP (<1.3). El soporte para versiones antiguas de la extensión Mongo será descontinuado en el futuro. Por favor, considere actualizar.';
$string['pluginname'] = 'MongoDB';
$string['privacy:metadata:mongodb'] = 'El plugin de caché del almacén de caché MongoDB almacena datos por corto tiempo como parte de su funcionalidad de cachear. Estos datos son almacenados en un servidor MongoDb en donde los datos son eliminados regularmente.';
$string['privacy:metadata:mongodb:data'] = 'Los diversos datos almacenados en la caché';
$string['replicaset'] = 'Conjunto réplica';
$string['replicaset_help'] = 'El nombre del conjunto réplica al cual conectarse. Si se da, el amo (master) será determinado al usar el comando ismaster en las semillas (seeds), de forma que el conductor puede terminar conectándose a un servidor que ni siquiera estaba enlistado.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esta es la cadena de conexión para el servidor que Usted quiere usar. Se pueden especificar servidores múltiples usando una lista separada por comas.';
$string['testserver'] = 'Servidores de prueba';
$string['testserver_desc'] = 'La cadena de caracteres de conexión para un servidor, usada para prueba. Si se ha especificado un servidor de prueba, entonces puede probarse el desempeño de MongoDB usando la página de desempeño del caché en el bloque de administración.
Como ejemplo: mongodb://127.0.0.1:27017';
$string['username'] = 'Nombre_de_usuario';
$string['username_help'] = 'El nombre_de_usuario a usar al hacer una conexión';
$string['usesafe'] = 'Usar seguro';
$string['usesafe_help'] = 'Si se habilita, la opción usar-seguro se usará durantelas operaciones de  inserción (insert), obtención (get) y remoción (remove). Si ha especificado un conjunto réplica, este será forzado de cualquier forma.';
$string['usesafevalue'] = 'Usar valor seguro';
$string['usesafevalue_help'] = 'Usted puede elegir proporcionar un valor específico para usar seguro. Esto determinará el número de servidores que deben completar las operaciones antes de que se consideren que hayan sido completadas.';
