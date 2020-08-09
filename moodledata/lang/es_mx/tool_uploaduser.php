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
 * Strings for component 'tool_uploaduser', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir eliminar';
$string['allowrenames'] = 'Permitir renombrar';
$string['allowsuspends'] = 'Permitir suspender y activar cuentas';
$string['assignedsysrole'] = 'Rol del sistema asignado {$a}';
$string['csvdelimiter'] = 'Delimitador CVS';
$string['defaultvalues'] = 'Valores por defecto';
$string['deleteerrors'] = 'Eliminar errores';
$string['encoding'] = 'Codificación';
$string['errormnetadd'] = 'No se pueden añadir usuarios remotos';
$string['errors'] = 'Errores';
$string['examplecsv'] = 'Archivo de texto de ejemplo';
$string['examplecsv_help'] = 'Para usar el archivo de texto de ejemplo, descargarlo y después abrirlo con un editor de texto o un editor de hoja de cálculo. Deje la primera línea sin cambiar, después edite las líneas (registros) siguientes y añada sus datos de usuarios, añadiendo más líneas conforme sea necesario. Guarde el archivo como CSV y después súbalo.

El archivo de texto de ejemplo también puede ser usado para fines de prueba, ya que Usted puede previsualizar los datos de usuarios y elegir cancelar la acción antes de que sean creadas las cuentas de usuarios.';
$string['invalidtheme'] = 'El tema "{$a}" no está instalado y será ignorado.';
$string['invalidupdatetype'] = 'Esta opción no puede ser seleccionada con el \'Tipo de subida\' elegido';
$string['invaliduserdata'] = 'Dato inválido detectado para usuario {$a} y han sido limpiados automáticamente.';
$string['nochanges'] = 'Sin cambios';
$string['notheme'] = 'No está definido ningún tema para este usuario.';
$string['pluginname'] = 'Subir usuarios';
$string['privacy:metadata'] = 'El plugin para Subir usuario no almacena ningún dato personal.';
$string['renameerrors'] = 'Errores de renombrado';
$string['requiredtemplate'] = 'Exigido. Puede utilizar sintaxis de plantilla aquí (%l = lastname, %f = firstname, %u = username). Consulte la ayuda para ver detalles y ejemplos.';
$string['rowpreviewnum'] = 'Previsualizar filas';
$string['unassignedsysrole'] = 'Rol del sistema no-asignado {$a}';
$string['uploadpicture_baduserfield'] = 'El atributo de usuario especificado no es válido. Por favor, inténtelo de nuevo.';
$string['uploadpicture_cannotmovezip'] = 'No se puede mover el archivo zip a un directorio temporal.';
$string['uploadpicture_cannotprocessdir'] = 'No se pueden procesar archivos que no hayan sido des-comprimidos.';
$string['uploadpicture_cannotsave'] = 'No se puede guardar la imagen del usuario {$a}. Compruebe el archivo de imagen original.';
$string['uploadpicture_cannotunzip'] = 'No se puede descomprimir el archivo de imágenes.';
$string['uploadpicture_invalidfilename'] = 'El nombre del archivo de imagen {$a} tiene caracteres no válidos. Se ha omitido.';
$string['uploadpicture_overwrite'] = '¿Sobrescribir las imágenes del usuario?';
$string['uploadpictures'] = 'Subir imágenes de los usuarios';
$string['uploadpictures_help'] = 'Las imágenes de los usuarios se pueden cargar masivamente mediante un archivo zip. Estos archivos debe ser nombrados en atención al "atributo del usuario" elegido (username, idnumber, id) por ejemplo user1234.jpg para un usuario con nombre_de_usuario (username) user1234.
Tenga en cuenta que el tamaño del archivo zip no puede superar el límite establecido en la configuración "políticas de sitio" de su sitio Moodle. En cualquier caso, siempre podrá preparar varios paquetes de imágenes comprimidas y subirlas por partes.';
$string['uploadpicture_userfield'] = 'Atributo del usuario a utilizar para hacer coincidir con las imágenes:';
$string['uploadpicture_usernotfound'] = 'El usuario con \'{$a->userfield}\' valor de \'{$a->uservalue}\' no existe. Ha sido omitido.';
$string['uploadpicture_userskipped'] = 'Se ha omitido el usuario {$a} (ya tiene imagen).';
$string['uploadpicture_userupdated'] = 'Imagen actualizada para el usuario {$a}.';
$string['uploadusers'] = 'Subir usuarios';
$string['uploadusers_help'] = 'Los usuarios pueden subirse (y, opcionalmente, inscribirse en cursos) por medio de un archivo de texto simple con terminación .CVS codificado en UTF-8 para permitir eñes y vocales acentuadas en nombre y apellidos - pero NO en el nombre_de_usuario (username) -. El formato debe ser el siguiente:

* Cada línea contiene solo un registro.
* Cada registro es una serie de datos separados por comas (o por otro delimitador)
* El primer registro contiene una lista de nombres de campo que definen el formato del resto del archivo
* Los nombres de campo necesarios son (así escritos en inglés)  username, password, firstname, lastname, email (nombre-de-usuario, contraseña, nombre, apellidos, correo)


<a href="https://docs.moodle.org/all/es/Subir_usuarios" target="_blank">Más ayuda</a>';
$string['uploaduserspreview'] = 'Previsualizar subida de usuarios';
$string['uploadusersresult'] = 'Resultados de subida de usuarios';
$string['uploaduser:uploaduserpictures'] = 'Subir imágenes de usuario';
$string['useraccountupdated'] = 'Usuario actualizado';
$string['useraccountuptodate'] = 'Usuario hasta hoy';
$string['userdeleted'] = 'Usuario eliminado';
$string['userrenamed'] = 'Usuario renombrado';
$string['userscreated'] = 'Usuarios creados';
$string['usersdeleted'] = 'Usuarios eliminados';
$string['usersrenamed'] = 'Usuarios renombrados';
$string['usersskipped'] = 'Usuarios pasados por alto';
$string['usersupdated'] = 'Usuarios actualizados';
$string['usersweakpassword'] = 'Usuarios con contraseña débil';
$string['userthemesnotallowed'] = 'Los temas del usuario no están habilitados, por lo que cualquier tema incluido en el archivo de subir usuarios será ignorado.';
$string['uubulk'] = 'Seleccionar para acciones masivas con usuarios';
$string['uubulkall'] = 'Todos los usuarios';
$string['uubulknew'] = 'Nuevos usuarios';
$string['uubulkupdated'] = 'Usuarios actualizados';
$string['uucsvline'] = 'Línea CVS';
$string['uulegacy1role'] = '(Estudiante original) tipo N=1';
$string['uulegacy2role'] = '(Profesor original) tipo N=2';
$string['uulegacy3role'] = '(Profesor no editor original) tipo N=3';
$string['uunoemailduplicates'] = 'Prevenir duplicados de dirección email';
$string['uuoptype'] = 'Tipo de subida';
$string['uuoptype_addinc'] = 'Agregar todo, añadir contador a nombres_de_usuarios si fuera necesario.';
$string['uuoptype_addnew'] = 'Agregar sólo nuevos, pasar por alto usuarios existentes';
$string['uuoptype_addupdate'] = 'Agregar nuevos y actualizar usuarios existentes';
$string['uuoptype_update'] = 'Actualizar sólo usuarios existentes';
$string['uupasswordcron'] = 'Generado en cron';
$string['uupasswordnew'] = 'Contraseña de nuevo usuario';
$string['uupasswordold'] = 'Contraseña de usuario existente';
$string['uustandardusernames'] = 'Estandarizar nombres_de_usuario';
$string['uuupdateall'] = 'Sobrescribir con archivo y valores por defecto';
$string['uuupdatefromfile'] = 'Sobrescribir con archivo';
$string['uuupdatemissing'] = 'Rellenar datos faltantes a partir del archivo y valores por defecto';
$string['uuupdatetype'] = 'Detalles del usuario existente';
$string['uuusernametemplate'] = 'Plantilla de nombre_de_usuario';
