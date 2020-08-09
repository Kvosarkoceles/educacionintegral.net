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
 * Strings for component 'plugin', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['availability'] = 'Disponibilidad';
$string['cancelinstallall'] = 'Cancelar las nuevas instalaciones ({$a})';
$string['cancelinstallhead'] = 'Cancelando la instalación de plugins';
$string['cancelinstallinfo'] = 'Los siguientes plugins todavía no están completamente instalados y todavía podría cancelarse su instalación. Para hacer esto, debe quitarse de su servidor la carpeta del plugin ahora. Asegúrese de que esto es realmente lo que quiere hacer, para prevenir pérdidas accidentales de datos (como por ejemplo, sus propias modificaciones del código).';
$string['cancelinstallinfodir'] = 'Carpeta a ser eliminada: {$a}';
$string['cancelinstallone'] = 'Cancelar esta instalación';
$string['cancelupgradeall'] = 'Cancelar actualizaciones ({$a})';
$string['cancelupgradehead'] = 'Restaurando la versión anterior de los plugins';
$string['cancelupgradeone'] = 'Cancelar esta actualización';
$string['checkforupdates'] = 'Revisar actualizaciones disponibles';
$string['checkforupdateslast'] = 'La última revisión se hizo el {$a}';
$string['dependencyavailable'] = 'Disponible';
$string['dependencyfails'] = 'Falla';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyinstallhead'] = 'Instalando dependencias faltantes';
$string['dependencyinstallmissing'] = 'Instalar dependencias faltantes  ({$a})';
$string['dependencymissing'] = 'Faltante';
$string['dependencyunavailable'] = 'No-disponible';
$string['dependencyupload'] = 'Subir';
$string['dependencyuploadmissing'] = 'Subir archivos ZIP';
$string['detectedmisplacedplugin'] = 'El plugin "{$a->component}" está instalado en una ubicación incorrecta "{$a->current}", la ubicación esperada es "{$a->expected}"';
$string['displayname'] = 'Nombre del plugin';
$string['err_response_curl'] = 'No pudo obtener actualizaciones disponibles - error cURL inesperado.';
$string['err_response_format_version'] = 'Formato de respuesta con versión inesperada. Por favor trate de revisar nuevamente las actualizaciones disponibles.';
$string['err_response_http_code'] = 'No pudo obtener actualizaciones disponibles - código de respuesta HTTP inesperado.';
$string['filterall'] = 'Mostrar todos';
$string['filtercontribonly'] = 'Mostrar únicamente plugins adicionales';
$string['filterupdatesonly'] = 'Mostrar únicamente actualizables';
$string['incompatibleversion'] = 'Versión de Moodle incompatible: {$a}';
$string['isenabled'] = '¿Habilitada?';
$string['misdepinfoplugin'] = 'Información del plugin';
$string['misdepinfoversion'] = 'Información de la versión';
$string['misdepsavail'] = 'Dependencias faltantes disponibles';
$string['misdepsunavail'] = 'Dependencias faltantes no-disponibles';
$string['misdepsunavaillist'] = 'No se encontró versión que cumpla los requisitos de dependencias: {$a}.';
$string['misdepsunknownlist'] = 'No se encuentra en el directorio de Plugins: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'No hay plugins instalados de este tipo';
$string['notdownloadable'] = 'No puede descargarse el paquete';
$string['notdownloadable_help'] = 'El paquete ZIP con la actualización no pudo descargarse automáticamente. Por favor diríjase a la página de documentación para más ayuda.';
$string['notes'] = 'Notas';
$string['notsupported'] = 'El plugin podría no ser compatible con Moodle versión {$a}';
$string['notwritable'] = 'Los archivos de plugins no son escribibles';
$string['notwritable_help'] = 'Los archivos del plugin no son escribibles para el servidor web. El proceso web del servidor necesita tener acceso de escritura a la carpeta del plugin y a todos sus contenidos. También podría necesitarse acceso de escritura a la carpeta raíz del tipo de plugin dado.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Todos los plugins';
$string['overviewext'] = 'Plugins adicionales';
$string['overviewupdatable'] = 'Actualizaciones disponibles';
$string['packagesdebug'] = 'Salida para depuración habilitada';
$string['packagesdownloading'] = 'Descargando {$a}';
$string['packagesextracting'] = 'Extrayendo {$a}';
$string['packagesvalidating'] = 'Validando {$a}';
$string['packagesvalidatingfailed'] = 'Instalación abortada debido a falla en validación';
$string['packagesvalidatingok'] = 'Validación exitosa, la instalación puede continuar';
$string['plugincheckall'] = 'Todos los plugins';
$string['plugincheckattention'] = 'Plugins que requieren su atención';
$string['pluginchecknone'] = 'Ahora no hay plugins que requieran su atención';
$string['pluginchecknotice'] = 'Esta página muestra los plugins que pueden requerir su atención durante la actualización, como por ejemplo los plugins nuevos a instalarse, plugins para actualizar, plugins faltantes, etc. Los plugins adicionales son mostrados si hubiera una actualización disponible para ellos. Se recomienda que Usted revise si hay versiones más reciente disponibles de plugins, y que actualice sus códigos fuentes antes de continuar con esta actualización de Moodle.';
$string['plugindisable'] = 'Deshabilitar';
$string['plugindisabled'] = 'Deshabilitado';
$string['pluginenable'] = 'Habilitar';
$string['pluginenabled'] = 'Habilitado';
$string['release'] = 'Liberación';
$string['requiredby'] = 'Requerido por: {$a}';
$string['requires'] = 'Requiere';
$string['rootdir'] = 'Directorio';
$string['settings'] = 'Configuraciones';
$string['source'] = 'Origen';
$string['sourceext'] = 'Adicional';
$string['sourcestd'] = 'Estándar';
$string['status'] = 'Estatus';
$string['status_delete'] = 'Para ser borrado';
$string['status_downgrade'] = 'Una versión mayor ya está instalada';
$string['status_missing'] = '¡Ausente del disco!';
$string['status_new'] = 'Para instalarse';
$string['status_nodb'] = 'Ninguna base de datos';
$string['status_upgrade'] = 'Para ser actualizada';
$string['status_uptodate'] = 'Instalada';
$string['supportedconversions'] = 'Conversiones de documento soportadas';
$string['supportedmoodleversions'] = 'Versiones de Moodle soportadas';
$string['systemname'] = 'Identificador';
$string['type_antivirus'] = 'Plugin antivirus';
$string['type_antivirus_plural'] = 'Plugins antivirus';
$string['type_auth'] = 'Método de autenticación';
$string['type_auth_plural'] = 'Métodos de autenticación';
$string['type_availability'] = 'Restricción por disponibilidad';
$string['type_availability_plural'] = 'Restricciones por disponibilidad';
$string['type_block'] = 'Bloque';
$string['type_block_plural'] = 'Bloques';
$string['type_cachelock'] = 'Manejador de bloqueo de caché';
$string['type_cachelock_plural'] = 'Manejadores de bloqueo de caché';
$string['type_cachestore'] = 'Almacén de caché';
$string['type_cachestore_plural'] = 'Almacenes de caché';
$string['type_calendartype'] = 'Tipo de calendario';
$string['type_calendartype_plural'] = 'Tipos de calendarios';
$string['type_contentbank'] = 'Banco de contenido';
$string['type_contentbank_plural'] = 'Plugins del banco de contenido';
$string['type_coursereport'] = 'Reporte de curso';
$string['type_coursereport_plural'] = 'Resportes de curso';
$string['type_customfield'] = 'Campo personalizado';
$string['type_customfield_plural'] = 'Campos personalizados';
$string['type_dataformat'] = 'Formato de datos';
$string['type_dataformat_plural'] = 'Formatos de datos';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editores';
$string['type_enrol'] = 'Método de inscripción';
$string['type_enrol_plural'] = 'Métodos de inscripción';
$string['type_fileconverter'] = 'Convertidor de documento';
$string['type_fileconvertermanage'] = 'Gestionar convertidores de documento';
$string['type_fileconverter_plural'] = 'Convertidores de documentos';
$string['type_filter'] = 'Filtro de texto';
$string['type_filter_plural'] = 'Filtros de texto';
$string['type_format'] = 'Formato de curso';
$string['type_format_plural'] = 'Formatos de curso';
$string['type_gradeexport'] = 'Método de exportación de calificaciones';
$string['type_gradeexport_plural'] = 'Métodos de exportación de calificaciones';
$string['type_gradeimport'] = 'Método de importación de calificaciones';
$string['type_gradeimport_plural'] = 'Métodos de importación de calificaciones';
$string['type_gradereport'] = 'Reporte del libro de calificaciones';
$string['type_gradereport_plural'] = 'Reportes del libro de calificaciones';
$string['type_gradingform'] = 'Método avanzado de calificación';
$string['type_gradingform_plural'] = 'Métodos avanzados de calificación';
$string['type_h5plib'] = 'Estructura H5P';
$string['type_h5plib_plural'] = 'Estructuras H5P';
$string['type_local'] = 'Plugin local';
$string['type_local_plural'] = 'Plugins locales';
$string['type_media'] = 'Reproductor de medio';
$string['type_media_plural'] = 'Reproductores de medio';
$string['type_message'] = 'Plugin de notificación';
$string['type_message_plural'] = 'Plugins de notificación';
$string['type_mlbackend'] = 'Backend de aprendizaje de máquina';
$string['type_mlbackend_plural'] = 'Backends de aprendizaje de máquina';
$string['type_mnetservice'] = 'Servicio MNet';
$string['type_mnetservice_plural'] = 'Servicios MNet';
$string['type_mod'] = 'Módulo de actividad';
$string['type_mod_plural'] = 'Módulos de actividad';
$string['type_plagiarism'] = 'Plugin de Plagio';
$string['type_plagiarism_plural'] = 'Plugins de plagio';
$string['type_portfolio'] = 'Portafolio';
$string['type_portfolio_plural'] = 'Portafolios';
$string['type_profilefield'] = 'Tipo de campo de perfil';
$string['type_profilefield_plural'] = 'Tipos de campos de perfiles';
$string['type_qbehaviour'] = 'Comportamiento de preguntas';
$string['type_qbehaviour_plural'] = 'Comportamientos de preguntas';
$string['type_qformat'] = 'Formato para importar/exportar preguntas';
$string['type_qformat_plural'] = 'Formatos para importar/exportar preguntas';
$string['type_qtype'] = 'Tipo de pregunta';
$string['type_qtype_plural'] = 'Tipos de preguntas';
$string['type_report'] = 'Reporte del sitio';
$string['type_report_plural'] = 'Reportes';
$string['type_repository'] = 'Repositorio';
$string['type_repository_plural'] = 'Repositorios';
$string['type_search'] = 'Motor de búsqueda';
$string['type_search_plural'] = 'Motores de búsqueda';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temas';
$string['type_tool'] = 'Herramienta de Administración';
$string['type_tool_plural'] = 'Herramientas de Administración';
$string['type_webservice'] = 'Protocolo Webservice';
$string['type_webservice_plural'] = 'Protocolos Webservice';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Usted está a punto de desinstalar el plugin <em>{$a->name}</em>. Esto borrará completamente todo en la BasedeDatos asociado con este plugin, incluyendo su configuración, registros de bitácoras, archivos del usuario gestionados por el plugin, etc. No hay vuelta atrás y Moodle por sí mismo no crea ningún respaldo para recuperación. ¿ Está seguro de que quiere continuar ?';
$string['uninstalldelete'] = 'Todos los datos asociados con el plugin <em>{$a->name}</em> han sido borrados de la BasedeDatos. Para impedir que el  plugin se re-instale a sí mismo, su carpeta <em>{$a->rootdir}</em> debe ser ahora removida manualmente del servidor.  Moodle mismo no puede remover la carpeta debido a permisos de escritura.';
$string['uninstalldeleteconfirm'] = 'Todos los datos asociados con el plugin <em>{$a->name}</em> han sido borrados de la BasedeDatos. Para impedir que el  plugin se re-instale a sí mismo, su carpeta <em>{$a->rootdir}</em> debe ser removida del servidor. ¿Desea Usted remover la carpeta del plugin ahora?';
$string['uninstalldeleteconfirmexternal'] = 'Al parecer, la versión actual del plugin fue obtenida mediante un sistema de manejo de código fuente ({$a}) checkout. Si Usted remueve la carpeta del plugin, puede perder modificaciones locales importantes del código. Por favor, asegúrese de que definitivamente desea remover la carpeta del plugin antes de continuar.';
$string['uninstallextraconfirmblock'] = 'Hay {$a->instances} instancias de este bloque.';
$string['uninstallextraconfirmenrol'] = 'Hay {$a->enrolments} inscripciones de usuarios.';
$string['uninstallextraconfirmmod'] = 'Hay {$a->instances} instancias de este módulo en {$a->courses} cursos.';
$string['uninstalling'] = 'Desinstalando {$a->name}';
$string['updateavailable'] = '¡Existe una nueva versión {$a} disponible!';
$string['updateavailable_moreinfo'] = 'Más información ...';
$string['updateavailable_release'] = 'Versión {$a}';
$string['updatepluginconfirm'] = 'Confirmación de actualización de plugin';
$string['updatepluginconfirmexternal'] = 'Parece que la versión actual del plugin ha sido obtenida mediante el sistema de manejo de código fuente ({$a}). Si Usted instala esta actualización, Usted ya no podrá después obtener actualizaciones de plugins desde el  sistema de manejo de código fuente. Por favor, asegúrese que defininitivamente si desea actualizar el plugin antes de continuar.';
$string['updatepluginconfirminfo'] = 'Usted está a punto de instalar una nueva versión del plugin <strong>{$a->name}</strong>. Un paquete ZIP con la versión {$a->version} del plugin será descargado desde <a href="{$a->url}">{$a->url}</a> y será extraído a su instalación de Moodle, para que pueda actualizar su instalación.';
$string['updatepluginconfirmwarning'] = 'Por favor tenga en cuenta que Moodle no hará automáticamente un respaldo de su base de datos antes de la actualización. Nosotros le recomendamos encarecidamente que haga un respaldo completo (instantánea) ahora, para lidiar con el raro caso en que el nuevo código tuviese defectos que hicieran a su sitio inoperante o inclusive que corrompiera su base de datos. Proceda bajo su propio riesgo.';
$string['validationmsg_componentmatch'] = 'Nombre completo del componente';
$string['validationmsg_componentmismatchname'] = 'Discrepancia de nombre del plugin';
$string['validationmsg_componentmismatchname_help'] = 'Algunos paquetes ZIP, tales como los generados por Github, pueden contener el nombre incorrecto del directorio raíz. Usted tiene que arreglar el nombre del directorio raíz para que coincida con el nombre declarado del plugin.';
$string['validationmsg_componentmismatchname_info'] = 'El plugin declara que su nombre es \'{$a}\' pero eso no coincide con el nombre del directorio raíz';
$string['validationmsg_componentmismatchtype'] = 'Discrepancia de tipo de plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Tipo esperado \'{$a->expected}\' pero el plugin declara que su tipo es \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'No se encontró el archivo extraído';
$string['validationmsg_filesnumber'] = 'No se encontraron suficientes archivos en el paquete';
$string['validationmsg_filestatus'] = 'No se pudieron extraer todos los archivos';
$string['validationmsg_filestatus_info'] = 'Al intentar extraer el archivo {$a->file} resultó en error \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Se encontró archivo de idioma';
$string['validationmsglevel_debug'] = 'Depuración (debug)';
$string['validationmsglevel_error'] = 'Error';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Advertencia';
$string['validationmsg_maturity'] = 'Nivel de madurez declarado';
$string['validationmsg_maturity_help'] = 'El plugin puede declarar su nivel de madurez. Si el mantenedor considera que el plugin es estable, el nivel de madurez declarado leerá MATURITY_STABLE. Todos los demás niveles de madurez (como alfa o beta) deberían de considerarse inestables y se levantará una advertencia.';
$string['validationmsg_missingcomponent'] = 'El plugin no declara el nombre de su componente';
$string['validationmsg_missingcomponent_help'] = 'Todos los plugins deben de proporcionar su nombre completo mediante la declaración de  `$plugin->component` en el archivo version.php file.';
$string['validationmsg_missingexpectedlangenfile'] = 'Discrepancia de nombre del archivo de idioma Inglés';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Al tipo de plugin dado le falta el archivo de idioma Inglés esperado {$a}.';
$string['validationmsg_missinglangenfile'] = 'No se encontró el archivo del idioma Inglés';
$string['validationmsg_missinglangenfolder'] = 'Falta la carpeta del idioma inglés';
$string['validationmsg_missingversion'] = 'El plugin no declara su versión';
$string['validationmsg_missingversionphp'] = 'No se encontró el archivo version.php';
$string['validationmsg_multiplelangenfiles'] = 'Se encontraron múltiples archivos de idioma Inglés';
$string['validationmsg_onedir'] = 'Estructura inválida del paquete ZIP.';
$string['validationmsg_onedir_help'] = 'El paquete ZIP debe contener exactamente un directorio raíz que contiene el código del plugin. El nombre de ese directorio raíz debe de coincidir con el nombre del plugin.';
$string['validationmsg_pathwritable'] = 'Revisión de acceso de escritura';
$string['validationmsg_pluginversion'] = 'Versión del plugin';
$string['validationmsg_pluginversiontoolow'] = 'Ya está instalada una versión mayor de este plugin';
$string['validationmsg_release'] = 'Lote del plugin';
$string['validationmsg_requiresmoodle'] = 'Versión de Moodle requerida';
$string['validationmsg_rootdir'] = 'Nombre del plugin que será instalado';
$string['validationmsg_rootdir_help'] = 'El nombre del directorio raíz dentro del paquete ZIP forma el nombre del plugin a ser instalado. Si el nombre no es correcto, Usted puede desear renombrar el directorio raíz dentro del ZIP antes de instalar el plugin.';
$string['validationmsg_rootdirinvalid'] = 'Nombre del plugin inválido';
$string['validationmsg_rootdirinvalid_help'] = 'El nombre del directorio raíz dentro del paquete ZIP viola los requisitos formales de sintaxis. Algiunos paquetes ZIP, tales como los generados por Github, pueden contener un nombre incorrecto del directorio raíz. Usted tendrá que arreglar el nombre del directorio raíz, para que coincida con el nombre del plugin.';
$string['validationmsg_targetexists'] = 'Ya existía previamente la ubicación del destino y será removida';
$string['validationmsg_targetexists_help'] = 'El directorio adonde se instalará el plugin ya existía previamente y será remplazado por los contenidos del paquete del plugin.';
$string['validationmsg_targetnotdir'] = 'La ubicación destino está ocupada por un archivo';
$string['validationmsg_unknowntype'] = 'Tipo de plugin desconocido';
$string['validationmsg_versionphpsyntax'] = 'Sintaxis no soportada en el archivo version.php';
$string['version'] = 'Versión';
$string['versiondb'] = 'Versión actual';
$string['versiondisk'] = 'Nueva versión';
