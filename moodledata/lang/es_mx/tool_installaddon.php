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
 * Strings for component 'tool_installaddon', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Declaratoria';
$string['acknowledgementtext'] = 'Yo entiendo que es mi responsabilidad el tener respaldos (copias de seguridad) completos de este sitio, antes de instalar plugins adicionales. Yo acepto y entiendo que los plugins (especialmente, aunque no limitado a, aquellos originarios de fuentes no-oficiales) pueden contener agujeros de seguridad, pueden hacer no-disponible al sitio, o causar fugas o pérdidas de datos privados.';
$string['featuredisabled'] = 'El instalador de plugins está deshabilitado en este sitio.';
$string['installaddon'] = '¡Instalar plugin!';
$string['installaddons'] = 'Instalar plugins';
$string['installfromrepo'] = 'Instalar plugins desde el directorio de plugins de Moodle';
$string['installfromrepo_help'] = 'Usted será redireccionado hacia el directorio de plugins de Moodle para buscar e instalar un plugin. Por favor tenga en cuenta que el nombre completo de su sitio, URL y versión principal serán enviados, para hacerle más sencillo el proceso de instación.';
$string['installfromzip'] = 'Instalar plugin desde archivo ZIP';
$string['installfromzipfile'] = 'Paquete ZIP';
$string['installfromzipfile_help'] = 'El paquete ZIP del plugin debe contener exactamente un directorio que coincida con el nombre del plugin. El ZIP será extraído hacia la ubicación apropiada para el tipo de plugin. Si el paquete ha sido descargado desde el directorio de plugins de Moodle, entonces tendrá esta estructura.';
$string['installfromzip_help'] = 'Una alternativa a instalar directamente un plugin desde el directorio de plugins de Moodle, es subir un paquete ZIP del plugin. Este paquete ZIP debería de tener la misma estructura que un paquete descargado desde el directorio de plugins de Moodle.';
$string['installfromzipinvalid'] = 'El paquete ZIP del plugin debe de contener exactamente un directorio, con un nombre que coincida con el nombre del plugin. El archivo proporcionado no es un paquete ZIP de plugin válido.';
$string['installfromziprootdir'] = 'Renombrar el directorio raíz';
$string['installfromziprootdir_help'] = 'Algunos paquetes ZIP, tales como los generados por Github, pueden contener un nombre incorrecto del directorio raíz. Si así fuera, Usted puede escribir aquí el nombre correcto.';
$string['installfromzipsubmit'] = 'Instalar plugin desde el archivo ZIP';
$string['installfromziptype'] = 'Tipo de plugin';
$string['installfromziptype_help'] = 'Para los plugins que declaran correctamente los nombres de sus componentes, el instalador puede detectar automáticamente el tipo de plugin. Si falla la auto-detección, elija manualmente el tipo correcto de plugin. Advertencia: El proceso de instalación puede fallar feamente si se especifica un tipo incorrecto de plugin.';
$string['permcheck'] = 'Asegúrese de que la ubicación de la raíz del tipo de plugin sea escribible por el proceso del servidor web';
$string['permcheckerror'] = 'Error al revisar los permisos de escritura';
$string['permcheckprogress'] = 'Revisando los permisos de escritura ...';
$string['permcheckrepeat'] = 'Revisar nuevamente';
$string['permcheckresultno'] = 'La ubicación del tipo de plugin <em>{$a->path}</em> no es escribible';
$string['permcheckresultyes'] = 'La ubicación del tipo de plugin <em>{$a->path}</em> si es escribible';
$string['pluginname'] = 'Instalador de plugin';
$string['privacy:metadata'] = 'El plugin Instalador de plugin no almacena ningún dato personal.';
$string['remoterequestalreadyinstalled'] = 'Hay una solicitud para instalar el plugin {$a->name} ({$a->component}) versión {$a->version} desde el directorio de plugins de Moodle hacia este sitio. Sin embargo, este plugin <strong>ya está instalado</strong> en este sitio.';
$string['remoterequestconfirm'] = 'Hay una solicitud para instalar el plugin <strong>{$a->name}</strong> ({$a->component}) versión {$a->version} desde el directorio de plugins de Moodle hacia este sitio. Si continúa, el paquete ZIP del plugin será descargado para validación. Todavía no se instalará nada.';
$string['remoterequestinvalid'] = 'Hay una solicitud para instalar un plugin desde el directorio de plugins de Moodle hacia este sitio. Desafortunadamente, esta solicitud no es válida, por lo que el plugin no puede ser instalado.';
$string['remoterequestnoninstallable'] = 'Hay una solicitud para instalar el plugin {$a->name} ({$a->component}) versión {$a->version} en este sitio desde el directorio de plugins de Moodle. Sin embargo, falló la revisión previa a la instalación del plugin (código de la razón: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Hay una solicitud para instalar el plugin {$a->name} ({$a->component}) versión {$a->version} desde el directorio de plugins de Moodle hacia este sitio. Sin embargo, la ubicación del tipo de plugin <strong>{$a->typepath}</strong> es <strong>no escribible</strong>. Usted necesita darle acceso para escritura al usuario del servidor web en la ubicación del tipo del plugin. Una vez que se otorgue el acceso de escritura, presione el botón de continuar para repetir la revisión.';
$string['remoterequestpluginfoexception'] = 'Órale...Ocurrió un error al tratar de obtener información acerca del plugin {$a->name} ({$a->component}) versión {$a->version}. El plugin no puede ser instalado. Active el modo de depuración (debugging) para ver más detalles acerca de este error.';
$string['typedetectionfailed'] = 'No puede detectarse el tipo de plugin. Por favor, elija manualmente el tipo de plugin.';
$string['typedetectionmismatch'] = 'El tipo del plugin seleccionado no coincide con el tipo declarado por el plugin: {$a}';
