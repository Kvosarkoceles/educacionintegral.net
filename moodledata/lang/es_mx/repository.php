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
 * Strings for component 'repository', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   repository
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Selector de archivos accesibles';
$string['activaterep'] = 'Repositorios activos';
$string['activerepository'] = 'Plugins de repositorio disponibles';
$string['activitybackup'] = 'Respaldo de actividad';
$string['add'] = 'Agregar';
$string['addfile'] = 'Agregar...';
$string['addfiletext'] = 'Añadir archivo';
$string['addplugin'] = 'Agregar un plugin de repositorio';
$string['aliaseschange'] = 'Hay {$a} archivos de alias/atajos que usan este recurso como su origen. Si Usted precede entonces estos alias serán convertidos a copias auténticas.';
$string['allowexternallinks'] = 'Permitir enlaces externos';
$string['areacategoryintro'] = 'Introducción de la categoría';
$string['areacourseintro'] = 'Introducción del curso';
$string['areacourseoverviewfiles'] = 'Imagen del curso';
$string['areamainfile'] = 'Archivo principal';
$string['arearoot'] = 'Sistema';
$string['areauserbackup'] = 'Respaldo de usuario';
$string['areauserdraft'] = 'Borradores';
$string['areauserpersonal'] = 'Archivos privados';
$string['areauserprofile'] = 'Perfil';
$string['attachedfiles'] = 'Archivos adjuntos';
$string['attachment'] = 'Adjunto';
$string['author'] = 'Autor';
$string['automatedbackup'] = 'Respaldos automatizados';
$string['back'] = 'Atrás';
$string['backtodraftfiles'] = 'Regresar al gestor de archivos de borradores';
$string['cachecleared'] = 'Los archivos en caché son eliminados';
$string['cacheexpire'] = 'Caducidad del caché';
$string['cannotaccessparentwin'] = 'Al usar HTTPS, el repositorio no es refrescado automáticamente. En su lugar, Usted necesita regresar al selector de archivos y seleccionar nuevamente el repositorio.';
$string['cannotdelete'] = 'No se puede eliminar este archivo.';
$string['cannotdownload'] = 'No se puede descargar este archivo.';
$string['cannotdownloaddir'] = 'No se puede descargar este directorio.';
$string['cannotinitplugin'] = 'Error en la llamada a plugin_init';
$string['choosealink'] = 'Seleccione un enlace...';
$string['chooselicense'] = 'Seleccionar licencia';
$string['chooselicense_help'] = 'Siga estos enlaces para más información sobre las opciones disponibles de licencia:';
$string['cleancache'] = 'Limpiar mis archivos en caché';
$string['close'] = 'Cerrar';
$string['commonrepositorysettings'] = 'Ajustes comunes del repositorio';
$string['configallowexternallinks'] = 'Esta opción les permite a todos los usuarios elegir si los medios externos se copiarán a Moodle o no. Si está apagada, entonces los medios siempre se copian a Moodle (generalmente es lo mejor para la integridad de datos y seguridad). Si está encendida entonces los usuarios pueden elegir cada vez que añadan medios a un texto.';
$string['configcacheexpire'] = 'Cantidad de tiempo (en segundos) que los listados de archivos están en caché local cuando se navega por repositorios externos.';
$string['configgetfiletimeout'] = 'Tiempo de espera (\'\'timeout\'\') en segundos, para descargar un archivo externo dentro de Moodle.';
$string['configsaved'] = 'Configuración guardada.';
$string['configsyncfiletimeout'] = 'Tiempo de espera (\'\'timeout\'\') en segundos, para sincronizar el tamaño del  archivo externo.';
$string['configsyncimagetimeout'] = 'Tiempo de espera (\'\'timeout\'\') en segundos, para descargar un archivo de imagen desde un repositorio externo durante la sincronización.';
$string['confirmdelete'] = '¿Está seguro de que desea eliminar este repositorio {$a}?
Si selecciona "Continuar y descargar", los archivos referidos a contenidos externos se descargaran a Moodle. Este proceso puede llevar un largo tiempo para procesarse.';
$string['confirmdeletefile'] = '¿Está seguro de que desea eliminar este archivo?';
$string['confirmdeletefilewithhref'] = '¿Está seguro de que desea eliminar este archivo? Hay {$a} alias/atajos a archivos que usan este archivo como origen. Si continua, estos alias se transformarán en copias reales.';
$string['confirmdeletefolder'] = '¿Está seguro que quiere eliminar esta carpeta? Todoas loas archivos y las subcarpetas se eliminarán?';
$string['confirmdeleteselectedfile'] = '¿Está seguro de querer eliminar el/los {$a} archivo(s) seleccionado(s)?';
$string['confirmremove'] = '¿Está seguro de que desea eliminar este plugin de repositorio, sus opciones y <strong>todas sus instancias</strong> - {$a}? Si Usted elige "Continuar y descargar", las referencias de archivos hacia contenidos externos serán descargados a Moodle. Esto podría tomar mucho tiempo para ser procesado.';
$string['confirmrenamefile'] = '¿Está seguro que quiere renombrar/mover este archivo?';
$string['confirmrenamefolder'] = '¿Está seguro que quiere mover/renombrar esta carpeta? Todos los alias/atajos a archivos que hagan referencia a archivos dentro de la carpeta se transformarán en copias reales.';
$string['continueuninstall'] = 'Continuar';
$string['continueuninstallanddownload'] = 'Continuar y descargar';
$string['copying'] = 'Copiando';
$string['coursebackup'] = 'Respaldos de cursos';
$string['create'] = 'Crear un ejemplo de repositorio';
$string['createfolder'] = 'Crear carpeta';
$string['createfolderfail'] = 'Error al crear este directorio';
$string['createfoldersuccess'] = 'Directorio creado con éxito';
$string['createinstance'] = 'Crear una instancia de repositorio';
$string['createrepository'] = 'Crear una instancia de repositorio';
$string['createxxinstance'] = 'Crear una instancia del repositorio "{$a}"';
$string['date'] = 'Fecha';
$string['datecreated'] = 'Creado';
$string['deleted'] = 'Repositorio eliminado';
$string['deleterepository'] = 'Eliminar este repositorio';
$string['detailview'] = 'Ver detalles';
$string['dimensions'] = 'Dimensiones';
$string['disabled'] = 'Deshabilitado';
$string['displayasdetails'] = 'Mostrar como detalles del archivo';
$string['displayasicons'] = 'Mostrar como íconos del archivo';
$string['displayastree'] = 'Mostrar como árbol del archivo';
$string['displaydetails'] = 'Mostrar carpeta con detalles de archivo';
$string['displayicons'] = 'Mostrar carpeta con íconos de archivo';
$string['displaytree'] = 'Mostrar carpeta como árbol de archivos';
$string['download'] = 'Descargar';
$string['downloadallfiles'] = 'Descargar todos los archivos';
$string['downloadfolder'] = 'Descargar todo';
$string['downloadsucc'] = 'Este archivo se ha descargado con éxito';
$string['draftareanofiles'] = 'No se puede descargar porque no hay archivos adjuntos';
$string['editrepositoryinstance'] = 'Editar instancia de repositorio';
$string['emptylist'] = 'Lista vacía';
$string['emptytype'] = 'No se puede crear el tipo de repositorio: el nombre del tipo está vacío';
$string['enablecourseinstances'] = 'Permitir a los usuarios agregar una instancia de repositorio dentro del curso';
$string['enableuserinstances'] = 'Permitir a los usuarios agregar una instancia de repositorio dentro del contexto del usuario';
$string['enter'] = 'Entrar';
$string['entername'] = 'Por favor, escriba el nombre del directorio';
$string['enternewname'] = 'Por favor, escriba el nombre del nuevo archivo';
$string['error'] = 'Ha ocurrido un error desconocido.';
$string['errordoublereference'] = 'No se puede sobrescribir un archivo con un atajo/alias debido a que ya existen atajos hacia este archivo.';
$string['errornotyourfile'] = 'Usted solamente  puede seleccionar archivos que Usted mismo haya añadido.';
$string['errorpostmaxsize'] = 'El archivo que Usted intentó subir es demasiado grande para que lo procese el servidor.';
$string['erroruniquename'] = 'El nombre de la instancia del repositorio debe ser único';
$string['errorwhilecommunicatingwith'] = 'Error al comunicarse con el repositorio \'{$a}\'.';
$string['errorwhiledownload'] = 'Hubo un error al descargar el archivo: {$a}';
$string['existingrepository'] = 'El repositorio ya existe';
$string['federatedsearch'] = 'Búsqueda federada';
$string['fileexists'] = 'Nombre de archivo ya usado. Por favor, use otro nombre';
$string['fileexistsdialog_editor'] = 'Un archivo con ese nombre ha sido anexado al texto que Usted está editando';
$string['fileexistsdialog_filemanager'] = 'Ya ha sido anexado un archivo con ese nombre';
$string['fileexistsdialogheader'] = 'El archivo existe';
$string['filename'] = 'Nombre del archivo';
$string['filenotnull'] = 'Debe seleccionar un archivo para subir';
$string['filepicker'] = 'Selector de archivos';
$string['filesaved'] = 'El archivo ha sido guardado';
$string['filesizenull'] = 'No se puede determinar el tamaño del archivo';
$string['folderexists'] = 'El nombre para la carpeta ya está empleado, por favor use otro nombre';
$string['foldernotfound'] = 'Carpeta no encontrada';
$string['folderrecurse'] = 'La carpeta no puede moverse a su propia subcarpeta';
$string['getfile'] = 'Seleccionar este archivo';
$string['getfiletimeout'] = 'Obtener tiempo de espera (timeout) de archivo';
$string['help'] = 'Ayuda';
$string['iconview'] = 'Ver como iconos';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'Instancia';
$string['instancedeleted'] = 'Instancia eliminada';
$string['instances'] = 'Instancias de repositorios';
$string['instancesforcourses'] = '{$a} Instancia(s) común(es) de todo el curso';
$string['instancesforsite'] = '{$a} Instancia(s) común(es) de todo el curso';
$string['instancesforusers'] = '{$a} Instancia(s) de usuario privado';
$string['invalidfiletype'] = 'El tipo de archivo {$a} no se acepta.';
$string['invalidjson'] = 'Cadena JSON no válida';
$string['invalidparams'] = 'Parámetros no válidos';
$string['invalidplugin'] = 'Plugin {$a} de reposirtorio no válido';
$string['invalidrepositoryid'] = 'ID de repositorio no válido';
$string['isactive'] = '¿Activo?';
$string['keyword'] = 'Clave';
$string['lastmodified'] = 'Última modicficación';
$string['license'] = 'Licencia';
$string['linkexternal'] = 'Enlace externo';
$string['listview'] = 'Ver como lista';
$string['loading'] = 'Cargando...';
$string['login'] = 'Ingresar a su cuenta';
$string['logintoaccount'] = 'Ingrese a su cuenta de {$a}';
$string['logout'] = 'Salir';
$string['lostsource'] = 'Error. Falta el orígen. {$a}';
$string['makefilecontrolledlink'] = 'Crear un enlace controlado en su acceso hacia el archivo';
$string['makefileinternal'] = 'Hacer una copia del archivo';
$string['makefilelink'] = 'Enlazar directamente al archivo';
$string['makefilereference'] = 'Crear un alias/atajo al archivo';
$string['manage'] = 'Gestionar repositorios';
$string['manageinstances'] = 'Gestionar instancias';
$string['manageurl'] = 'Gestionar';
$string['manageuserrepository'] = 'Gestionar repositorio individual';
$string['missingsourcekey'] = 'La clave de origen está faltante. Esta clave también debe ser proporcionada para recuperar el archivo.';
$string['moving'] = 'Moviendo';
$string['name'] = 'Nombre';
$string['newfolder'] = 'Nueva carpeta';
$string['newfoldername'] = 'Nombre de carpeta nueva';
$string['noenter'] = 'No se ha escrito nada';
$string['nofilesattached'] = 'No se han adjuntado archivos';
$string['nofilesavailable'] = 'No hay archivos disponibles';
$string['nofilesselected'] = 'Sin archivos seleccionados';
$string['nolicenses'] = 'No hay licencias disponibles';
$string['nomorefiles'] = 'No se permiten más adjuntos';
$string['nopathselected'] = 'Aún no se ha seleccionado una ruta de destino (haga doble clic en el nodo del árbol para seleccionar)';
$string['nopermissiontoaccess'] = 'Sin permiso para acceder a este repositorio';
$string['norepositoriesavailable'] = 'Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos en el formato solicitado.';
$string['norepositoriesexternalavailable'] = 'Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos externos.';
$string['noresult'] = 'No hay resultados de la búsqueda';
$string['notyourinstances'] = 'No puede ver ni editar instancias de repositorio de otro usuario';
$string['off'] = 'Activado pero oculto';
$string['on'] = 'Activado y visible';
$string['openpicker'] = 'Seleccione un archivo...';
$string['operation'] = 'Operación';
$string['original'] = 'Original';
$string['originalextensionchange'] = 'La extensión original del archivo ha sido modificada como parte del cambio de nombre del archivo. El cambiar la extensión de ".{$a->originalextension}" a ".{$a->newextension}"  podría causar que un archivo ya no pueda ser abierto.';
$string['originalextensionremove'] = 'La extensión original del archivo ha sido eliminada como parte del cambio de nombre. Eliminar la extensión ".{$a}" probablemente resultará en un archivo que no pueda ser abierto.';
$string['overwrite'] = 'Sobrescribir';
$string['overwriteall'] = 'Sobrescribir todo';
$string['path'] = 'Ruta';
$string['plugin'] = 'Plugins de repositorio';
$string['pluginerror'] = 'Errores en el plugin del repositorio';
$string['pluginname'] = 'Nombre del plugin del repositorio';
$string['pluginnamehelp'] = 'Si deja esto vacío, se usará el nombre predeterminado';
$string['popup'] = 'Haga clic sobre el botón (Login) para ingresar';
$string['popupblockeddownload'] = 'La ventana de descarga está bloqueada. Por favor, permita ventanas emergentes y vuelva a intentarlo.';
$string['preview'] = 'Vista previa';
$string['privacy:metadata:repository'] = 'El componente de Repositorio almacena los tipos de repositorio dentro del subsistema del núcleo.';
$string['privacy:metadata:repository_instances'] = 'El componente de plugins del Repositorio almacena datos del usuario de instancia de repositorio dentro del subsistema del núcleo.';
$string['privacy:metadata:repository_instances:name'] = 'El nombre personalizado de la instancia del repositorio.';
$string['privacy:metadata:repository_instances:password'] = 'La contraseña opcional configurada para la instancia del repositorio.';
$string['privacy:metadata:repository_instances:timecreated'] = 'La fecha/hora de creación para la instancia del repositorio.';
$string['privacy:metadata:repository_instances:timemodified'] = 'La fecha/hora de modificación para la instancia del repositorio.';
$string['privacy:metadata:repository_instances:typeid'] = 'El tipo de ID de la instancia del repositorio.';
$string['privacy:metadata:repository_instances:userid'] = 'La ID del usuario propietario de la intsnacia de repositorio.';
$string['privacy:metadata:repository_instances:username'] = 'El nombre_de_usuario opcional configurado para la instancia del repositorio.';
$string['privatefilesof'] = '{$a} Archivos privados';
$string['readonlyinstance'] = 'No puede editar ni eliminar una instancia de sólo lectura';
$string['referencesexist'] = 'Existen {$a} archivos de alias/atajos que emplean este archivo como su orígen';
$string['referenceslist'] = 'Alias/Atajos';
$string['refresh'] = 'Refrescar';
$string['refreshnonjsfilepicker'] = 'Por favor, cierre esta ventana y refresque el selector de archivos no-javascript';
$string['removed'] = 'Repositorio eliminado';
$string['renameall'] = 'Renombrar todo';
$string['renameto'] = 'Cambiar el nombre a "{$a}"';
$string['repositories'] = 'Repositorios';
$string['repository'] = 'Repositorio';
$string['repositorycourse'] = 'Repositorios del curso';
$string['repositoryerror'] = 'El repositorio remoto produjo un error: {$a}';
$string['repositoryicon'] = 'Ícono del repositorio';
$string['save'] = 'Guardar';
$string['saveas'] = 'Guardar como';
$string['saved'] = 'Guardado';
$string['saving'] = 'Guardando';
$string['search'] = 'Buscar';
$string['searching'] = 'Buscar en';
$string['searchrepo'] = 'Buscar repositorio';
$string['sectionbackup'] = 'Respaldos de sección';
$string['select'] = 'Seleccionar';
$string['setmainfile'] = 'Configurar el archivo principal';
$string['setmainfile_help'] = 'Si hubiera archivos múltiples en la carpeta, el archivo principal es el que aparece al ver la página. Otros archivos, como las imágenes o videos, pueden  incrustarse dentro de este. En el gestor de archivos, el archivo principal está indicado con su título resaltado en negritas.';
$string['settings'] = 'Configuración';
$string['setupdefaultplugins'] = 'Configuración de los plugins de repositorio predeterminados';
$string['siteinstances'] = 'Instancias de repositorios del sitio';
$string['size'] = 'Tamaño';
$string['sourcekeymismatch'] = 'La URL de origen no coincide con la clave_de_origen.';
$string['submit'] = 'Enviar';
$string['sync'] = 'Sincronizar';
$string['syncfiletimeout'] = 'Tiempo de espera (timeout) de sincronización de archivo';
$string['syncimagetimeout'] = 'Tiempo de espera (timeout) de sincronización de imagen';
$string['thumbview'] = 'Ver en forma de iconos';
$string['title'] = 'Seleccione un archivo...';
$string['type'] = 'Tipo';
$string['typenotvisible'] = 'Tipo no visible';
$string['undisclosedreference'] = '(no revelado)';
$string['undisclosedsource'] = '(No revelado)';
$string['unknownoriginal'] = 'Desconocido';
$string['unknownsource'] = 'Orígen desconocido';
$string['unzipped'] = 'Descomprimido con éxito';
$string['upload'] = 'Subir este archivo';
$string['uploading'] = 'Subiendo...';
$string['uploadsucc'] = 'El archivo ha sido subido con éxito';
$string['uselatestfile'] = 'Usar archivo más nuevo';
$string['usenonjsfilemanager'] = 'Abrir el mánager de archivos en ventana nueva';
$string['usenonjsfilepicker'] = 'Abrir el archivo selector en una ventana nueva';
$string['usercontextrepositorydisabled'] = 'Usted no puede editar este repositorio en el contexto del usuario';
$string['wrongcontext'] = 'No puede acceder a este contexto';
$string['xhtmlerror'] = 'Usted probablemente está utilizando encabezado XHTML estricto. Algunos componentes YUI no funcionan en este modo; por favor desactive esto.';
$string['ziped'] = 'Comprimir carpeta con éxito';
