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
 * Strings for component 'cachestore_memcached', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Escrituras a buffer';
$string['bufferwrites_help'] = 'Habilita o deshabilita Entrada/Salida amortiguada (buffered I/O). Habilitar E/S amortiguada causa que los comandos de almacenamiento se "amortigüen" en lugar de mandarse. Cualquier acción que recoja datos causa que este amortigüador (buffer) se mande a la conexión remota. El abandonar la conexión o cerrarla también causará que los datos amortigüados se empujen a la conexión remota.';
$string['clustered'] = 'Habilitar servidores agupados (\'\'clustered\'\')';
$string['clusteredheader'] = 'Separar servidores';
$string['clustered_help'] = 'Esto es usado para permitir la funcionalidad de lee-uno, configura-multi.

El uso que se pretende es crear un almacén mejorado para configuraciones con balanceo-de-carga. El almacén buscará de un servidor (usualmente localhost), pero configurará a varios (todos los servidores en el \'\'pool\'\' de balanceo-de-carga), Para cachés con tasas muy altas de lectura contra configuración, esto ahorra una cantidad significativa de carga adicional de red.

Cuando se habilita esta configuración, el servidor arriba enlistado será usado para búsqueda';
$string['hash'] = 'Método de hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Por defecto (uno-a-la-vez)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Especifica el método de algoritmo de "hashing" usado para las claves de items. Cada algoritmo de hash tiene sus ventajas y desventajas. Quédese con el que está por defecto si no sabe de qué se trata o no le importa.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur (murmullo)';
$string['isshared'] = 'Caché compartido';
$string['isshared_help'] = '¿Su servidor memcached es usado también por otras aplicaciones?

Si la caché es compartida por otras aplicaciones, entonces cada clave será eliminada  individualmente para asegurar que solamente los datos propiedad de esta aplicación sean purgados (dejando sin cambios a los datos del caché de la aplicación externa). Esto puede resultar en disminución del desempeño al purgar la caché, dependiendo de la configuración de su servidor.

Si Usted está corriendo una caché dedicada para esta aplicación, entonces toda la caché puede limpiarse con seguridad sin riesgo de destruir los datos cacheados de otra aplicación. Esto resultaría en rendimiento aumentado al purgar la caché.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Clave prefijo (prefix key)';
$string['prefix_help'] = 'Esto puede usarse para crear un "dominio" para sus claves de item, permitiéndole crear múltiples almacenes memcached en una instalación memcached única. No puede ser más largo de 16 caracteres para asegurar que no se encuentren problemas por asuntos relacionados por la longitud de claves.';
$string['prefixinvalid'] = 'Prefijo inválido. Solamente puede emplear a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'El plugin de caché del almacén de caché Memcached almacena datos por corto tiempo como parte de su funcionalidad de cachear. Estos datos son almacenados en un servidor Memcache en donde los datos son eliminados regularmente.';
$string['privacy:metadata:memcached:data'] = 'Los diversos datos almacenados en la caché';
$string['serialiser_igbinary'] = 'El serializador igbinary';
$string['serialiser_json'] = 'El serializador JSON';
$string['serialiser_php'] = 'El serializador PHP por defecto';
$string['servers'] = 'Servidores';
$string['serversclusterinvalid'] = 'Exactamente un servidor es necesario cuando se habilita agruparlos (\'\'clustering\'\')';
$string['servers_help'] = 'Esto configura los servidores que deberían ser utilizados por este adaptador memcached. Los servidores deberían definirse de a uno por línea y consisten de una dirección de servidor y opcionalmente un puerto y peso.
Si no se proporciona puerto, entonces el puerto por defecto (11211) es usado.

Por ejemplo:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Si se habilita el *Habilitar servidores agrupados (clustered)" debajo, entonces deberá de haber solamente un servidor enlistado aquí. Esto usualmente sería un nombre que siempre resuelve a la máquina local, como 127.0.0.1 o localhost.';
$string['sessionhandlerconflict'] = 'Advertencia: Una instancia memcached  ({$a}) hasido configurada para usar el mismo servidor  memcached que las sesiones. El purgar todas las cachés causará que las sesiones también sean purgadas.';
$string['setservers'] = 'Configurar servidores';
$string['setservers_help'] = 'Esta es la lista de servidores que serán actualizados cuando se modifiquen los datos en la caché. Generalmente es el nombre calificado completamente de cada servidor en el lote (\'\'pool\'). **Debe** de incluir al servidor enlistado arriba en "Servidores", aun si tuviera un \'\'hostname\'\' diferente.
Los servidores deberían estar definidos  de a uno por línea  y consistir en una dirección del servidor y opcionalmente un puerto.
Si no se proporciona un puerto, entonces se usa el puerto por defecto (11211).

Por ejemplo:
<pre>
server.url.com
direccionIP:puerto
</pre>';
$string['testservers'] = 'Servidores de prueba';
$string['testservers_desc'] = 'Una o más cadenas de texto para conexión usada para probar servidores memcached. Si se ha especificado un servidor de prueba, entonces puede probarse el desempeño de memcached empleando la página de desempeño del caché en el bloque de administración.
Como ejemplo: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Nosotros le recomendamos que  actualice  su extensión Memcached PHP a la versión 2.0.0 o superior.
La versión de la extensión Memcached PHP que Usted está actualmente usando no proporciona la funcionalidad que Moodle usa para asegurar una caché de-espacio-aislado (\'sandboxed\'). Mientras Usted no actualice, nosotros le recomendamos que no configure a ninguna otra aplicación para usar los mismos servidores Memcached que Moodle está configurado para usar.';
$string['usecompression'] = 'Usar compresión';
$string['usecompression_help'] = 'Habilita o deshabilita la compresión de carga. Cuando se habilita, los valores de item más largos que un cierto umbral (actualmente 100 bytes) serán comprimidos durante el almacenamiento y descomprimidos durante la recuperación de forma transparente.';
$string['useserialiser'] = 'Usar serializador';
$string['useserialiser_help'] = 'Especifica el serializador a usar para serializar valores no-escalares.
Los serializadores válidos son
Memcached::SERIALIZER_PHP o Memcached::SERIALIZER_IGBINARY.
Este último es soportado únicamente cuando memcached está configurada con la opción de  --enable-memcached-igbinary y está cargada la extensión igbinary.';
