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
 * Strings for component 'tool_wincache', language 'es_mx', branch 'MOODLE_30_STABLE'
 *
 * @package   tool_wincache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_time'] = 'Tiempo añadido';
$string['add_time_desc'] = 'Indica la cantidad de tiempo total en segundos, que el archivo ha estado en el caché';
$string['app_pool_id'] = 'ID del pool de aplicación';
$string['available_memory'] = 'Memoria disponible';
$string['cached_entries'] = 'Entradas cacheadas';
$string['cached_files'] = 'Archivos cacheados';
$string['cache_scope'] = 'Alcance del caché';
$string['cache_settings'] = 'Configuraciones del caché';
$string['cache_uptime'] = 'Tiempo de funcionamiento del caché';
$string['class_count'] = 'Conteo de clases';
$string['class_count_desc'] = 'Número de clases de PHP en el archivo';
$string['disabled'] = 'deshabilitado';
$string['doc_root'] = 'Raíz del documento';
$string['enabled'] = 'habilitado';
$string['enable_gd_lib'] = 'Habilitar biblioteca GD (<em>php_gd2.dll</em>) para poder ver las gráficas.';
$string['fcache_chart'] = 'Caché de archivo';
$string['fcache_entries'] = 'Entradas del caché de archivo';
$string['fcache_overview'] = 'Vista general del Caché de Archivo';
$string['fcache_title'] = 'Caché del Sistema de Archivos';
$string['fcgi_impersonation'] = 'Suplantación de FastCGI';
$string['file_name'] = 'Nombre de archivo';
$string['file_name_desc'] = 'Nombre del archivo';
$string['file_size'] = 'Tamaño de archivo';
$string['file_size_desc'] = 'Tamaño del archivo en KB';
$string['free_memory'] = 'Memoria libre';
$string['function_count'] = 'Conteo de funciones';
$string['function_count_desc'] = 'Número de funciones PHP en el archivo';
$string['general_info'] = 'Información general';
$string['global'] = 'global';
$string['hit_count'] = 'Conteo de aciertos';
$string['hit_count_desc'] = 'Número de veces que el caché ha acertado';
$string['hitmiss_chart_default'] = 'Aciertos y Fallas (en %)';
$string['hitmiss_chart_desc'] = 'gráfica de porcentaje de aciertos y fallas';
$string['hitmiss_chart_title'] = '{$a} Aciertos y Fallas (en %)';
$string['hits'] = 'Aciertos';
$string['host_name'] = 'Nombre del Host';
$string['hours'] = '{$a} horas';
$string['key'] = 'Clave';
$string['key_name'] = 'Nombre de clave';
$string['key_name_desc'] = 'Nombre de clave de objeto';
$string['key_nonexistent'] = 'La variable con esta clave no existe en el caché del usuario.';
$string['last_check'] = 'Última revisión';
$string['last_check_desc'] = 'Indica el tiempo total en segundos, que ha transcurrido desde que el archivo fue revisado por última vez por cambio en el archivo';
$string['local'] = 'local';
$string['machine_name'] = 'Nombre de la máquina';
$string['memory_chart_default'] = 'Memoria Libre y Usada (en %)';
$string['memory_chart_desc'] = 'gráfica de porcentaje de uso de memoria';
$string['memory_chart_title'] = 'Uso de Memoria por {$a} (en %)';
$string['memory_overhead'] = 'Techo (overhead) de memoria';
$string['minutes'] = '{$a} minutos';
$string['misses'] = 'Fallas';
$string['not_available'] = 'No disponible';
$string['not_defined'] = 'No definida';
$string['not_loaded'] = '¡ La extensión PHP WinCache no está cargada o la versión es menor a 1.1.0 !';
$string['not_set'] = 'No configurada';
$string['num_of_classes'] = 'Número de clases';
$string['num_of_functions'] = 'Número de funciones';
$string['ocache_chart'] = 'Caché de opcode';
$string['ocache_entries'] = 'Entradas de caché de opcode';
$string['ocache_overview'] = 'Vista general de caché de opcode';
$string['ocache_size_increased'] = 'El tamaño del caché de opcode ha sido aumentado automáticamente para que sea al menos 3 veces más grande que el tamaño del caché de archivo.';
$string['ocache_title'] = 'Caché de Opcode';
$string['operating_sys'] = 'Sistema Operativo';
$string['page_title'] = 'Extensiones para PHP del Caché de Windows - Estadísticas';
$string['phprc'] = 'PHPRC';
$string['php_version'] = 'Versión de PHP';
$string['pluginname'] = 'Información de WinCaché';
$string['processor_info'] = 'Información del Procesador';
$string['processor_num'] = 'Número de procesadores';
$string['rcache_entries'] = 'Resolver Ruta de Entradas del Caché';
$string['rcache_overview'] = 'Resolver Ruta de Vista General de Caché';
$string['rcache_title'] = 'Resolver Ruta del Caché';
$string['resolve_path'] = 'Resolver Ruta';
$string['scache_chart'] = 'Caché de Sesión';
$string['scache_entries'] = 'Entradas del caché de sesión';
$string['scache_overview'] = 'Vista General del Caché de Sesión';
$string['scache_title'] = 'Caché de Sesión';
$string['scache_unavailable'] = 'El caché de sesión no está habilitado. Para habilitar el caché de sesión, configure el manejador de sesión en <strong>php.ini</strong> a <strong>wincache</strong>, por ejemplo: <strong>session.save_handler=wincache</strong>.';
$string['seconds'] = '{$a} segundos';
$string['server_software'] = 'Software del servidor';
$string['session_handler'] = 'Manejador de sesión PHP';
$string['show_all_entries'] = 'Mostrar todas las entradas';
$string['site_id'] = 'ID del sitio';
$string['size'] = 'Tamaño';
$string['subkey_data'] = 'Datos de subclave (subkey)';
$string['summery_title'] = 'Resumen';
$string['total_age'] = 'Edad total';
$string['total_age_desc'] = 'Tiempo total en segundos que ha transcurrido desde que el objeto fue añadido al caché';
$string['total_age_sec'] = 'Edad total (en segundos)';
$string['total_file_size'] = 'Tamaño de archivos totales';
$string['total_memory'] = 'Memoria total';
$string['total_ttl'] = 'TTL total';
$string['total_ttl_desc'] = 'Tiempo total en segundos que resta para que el objeto sea removido del caché';
$string['total_ttl_sec'] = 'Tiempo Total para Vivir (TTL) (en segundos)';
$string['ucache_chart'] = 'Caché del usuario';
$string['ucache_content'] = 'Contenido de Entrada del caché del usuario';
$string['ucache_entries'] = 'Entradas del caché del usuario';
$string['ucache_entry_info'] = 'Información del caché del usuario';
$string['ucache_overview'] = 'Vista general del Caché del Usuario';
$string['ucache_title'] = 'Caché del usuario';
$string['ucache_unavailable'] = 'El caché del usuario no está disponible. Habilite el caché del usuario usando la directiva <strong>wincache.ucenabled</strong> en el archivo  <strong>php.ini</strong>.';
$string['unknown'] = 'Desconocido';
$string['used_memory'] = 'Memoria del usuario';
$string['use_time'] = 'Tiempo usado';
$string['use_time_desc'] = 'Tiempo total en segundos que ha transcurrido desde que el archivo se usó por última vez';
$string['value_size'] = 'Tamaño del valor';
$string['value_size_desc'] = 'Tamaño del objeto almacenado';
$string['value_type'] = 'Tipo del valor';
$string['value_type_desc'] = 'Tipo del objeto almacenado';
$string['wincache_version'] = 'Versión de WinCaché';
