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
 * Strings for component 'cachestore_redis', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   cachestore_redis
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Sin compresión.';
$string['compressor_php_gzip'] = 'Usar compresión gzip.';
$string['compressor_php_zstd'] = 'Usar compresión Zstandard.';
$string['password'] = 'Contraseña';
$string['password_help'] = 'Esto configura la contraseña del servidor Redis.';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Prefijo de Clave';
$string['prefix_help'] = 'El prefijo es usado para todos los nombres de claves en el servidor Redis.
* Si Usted solamente tiene una instancia de Moodle usando este servidor, puede dejar el valor por defecto.
* Debido a restricciones en la longitud de la clave, se permite un máximo de 5 caracteres.';
$string['prefixinvalid'] = 'Prefijo inválido. Usted solamente puede usa a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'El plugin de caché del almacén de caché Redis almacena datos por corto tiempo como parte de su funcionalidad de cachear. Estos datos son almacenados en un servidor Redis en donde los datos son eliminados regularmente.';
$string['privacy:metadata:redis:data'] = 'Los diversos datos almacenados en la caché';
$string['serializer_igbinary'] = 'El serializador igbinary.';
$string['serializer_php'] = 'El serializador PHP por defecto.';
$string['server'] = 'Servidor';
$string['server_help'] = 'Esto configura el hostname o la dirección IP del servidor Redis a usar.';
$string['test_password'] = 'Proobar contraseñ del servidor';
$string['test_password_desc'] = 'Contraseña de prueba de servidor Redis.';
$string['test_serializer'] = 'Serializador';
$string['test_serializer_desc'] = 'Serializador a usar para pruebas.';
$string['test_server'] = 'Servidor de Prueba';
$string['test_server_desc'] = 'Servidor Redis a usar para pruebas';
$string['usecompressor'] = 'Usar compresor';
$string['usecompressor_help'] = 'Especifica el compresor a usar después de serializar. Se hace a nivel de la API de Caché Moodle, no es a nivel de php-redis.';
$string['useserializer'] = 'Usar serializador';
$string['useserializer_help'] = 'Especifica el serializador a usar para seializar.
Los serializadore válidos son Redis::SERIALIZER_PHP o Redis::SERIALIZER_IGBINARY.
El último está soportado solamente cuando phpredis está configurado con la opción  --enable-redis-igbinary y está cargada la extensión igbinary.';
