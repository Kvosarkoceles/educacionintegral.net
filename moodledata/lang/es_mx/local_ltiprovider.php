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
 * Strings for component 'local_ltiprovider', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   local_ltiprovider
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityroleinstructor'] = 'Rol de actividad para Instructor';
$string['activityrolelearner'] = 'Rol de actividad para Educando';
$string['allowframembedding'] = 'Para evitar problemas al incrustar este sitio, por favor habilite la configuración de \' allowframembedding \' en Admin -> Seguridad -> Seguridad HTTP';
$string['cantdeterminecontext'] = 'No puede determinarse el contexto; al parecer hay más de un provedor de herramienta para este Context_id';
$string['coursebeingrestored'] = 'El curso está siendo restaurado; puede tomar algunos minutos para terminar';
$string['courseroleinstructor'] = 'Rol de curso para Instructor';
$string['courserolelearner'] = 'Rol de curso para Educando';
$string['customcss'] = 'CSS personalizado';
$string['defaultauthmethod'] = 'Método de autenticación por defecto';
$string['defaultauthmethodhelp'] = 'Este es el método de autenticación asignado a los usuarios nuevos creados por el plugin';
$string['delconfirm'] = '¿Está seguro de querer eliminar esta herramienta?';
$string['delegate'] = 'Delegar';
$string['deletetool'] = 'Eliminar una herramienta';
$string['duplicatecourseswithoutusers'] = 'Duplicar cursos sin usuarios';
$string['duplicatecourseswithoutusershelp'] = 'Al crear un nuevo curso, no importar los usuarios desde el curso plantilla';
$string['enablememberssync'] = 'Habilitar sincronización de miembros';
$string['enrolandunenrol'] = 'Inscribir nuevos y des-inscribir miembros faltantes';
$string['enrolenddate'] = 'Fecha de término';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden accesar solamente hasta (antes de) esta fecha.';
$string['enrolenddaterror'] = 'La fecha de terminación de inscripción no puede ser anterior a la fecha de inicio';
$string['enrolinst'] = 'Inscribir Instructores automáticamente';
$string['enrolinst_help'] = 'Desactive esta casilla para re-dirigir a los instructores a la página del curso, para que puedan seleccionar una opción de auto-inscripción';
$string['enrollearn'] = 'Inscribir Alumnos automáticamente';
$string['enrollearn_help'] = 'Desactive esta casilla para re-dirigir a los alumnos a la página del curso, para que puedan seleccionar una opción de auto-inscripción';
$string['enrolmentfinished'] = 'El período de inscripción ha terminado';
$string['enrolmentnotstarted'] = 'El período de inscripción no ha iniciado';
$string['enrolnew'] = 'Inscribir nuevos miembros';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_desc'] = 'El tiempo por defecto durante el que es válida la inscripción (en segundos). Si se pone a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'El tiempo por defecto durante el que es válida la inscripción, empezando con el momento en que el usuario se inscribe a si mismo desde el sistema remoto. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios podrán accesar solamente desde esta fecha en adelante.';
$string['errorcompletionenabled'] = 'La finalización debe de habilitarse para el curso o para la actividad';
$string['forcenavigation'] = 'Forzar navegación en curso o actividad';
$string['fullnameformat'] = 'Formato de nombre_completo para cursos de nueva creación';
$string['genericformathelp'] = 'Para cursos nuevos creados remotamente, Usted puede seleccionar los  parámetros remotos para crear el nombre';
$string['globalsharedsecret'] = 'Secreto Compartido Global';
$string['hideleftblocks'] = 'Ocultar bloques izquierdos';
$string['hidepagefooter'] = 'Ocultar pies de página';
$string['hidepageheader'] = 'Ocultar encabezados de página';
$string['hiderightblocks'] = 'Ocultar bloques derechos';
$string['idnumberformat'] = 'formato idnumber (número_ID) para cursos de nueva creación';
$string['invalidcredentials'] = 'Credenciales no válidas';
$string['invalidresourcecopyid'] = 'Identificador no válido de recurso a copiar';
$string['invalidtplcourse'] = 'ID de plantilla de curso inválido';
$string['invalidtypetool'] = 'Para duplicar un recurso, Usted debe apuntar la solicitud hacia un curso de tipo recurso';
$string['layoutandcss'] = 'Estilo y CSS';
$string['ltiprovider:manage'] = 'Gestionar herramientas (proporcionar)';
$string['ltiprovider:view'] = 'Ver herramientas proporcionadas';
$string['maxenrolled'] = 'Máximo de usuarios inscritos';
$string['maxenrolled_help'] = 'Especifica el número máximo de usuarios que pueden accesar desde el sistema remoto. 0 significa ilimitado.';
$string['maxenrolledreached'] = 'Se alcanzó el número máximo de usuarios permitidos para accesar.';
$string['membershipsettings'] = 'Configuraciones de servicio de membresía';
$string['missingrequiredtool'] = 'Para duplicar un recurso. Usted debe apuntar la solicitud hacia un curso existente de tipo recurso';
$string['name'] = 'Nombre de herramienta';
$string['newpopupnotice'] = 'La herramienta se abrirá en una ventana nueva. Por favor revise que estén permitidas las ventanas emergentes (popups) en su navegador. Usted puede usar la liga mostrada debajo para abrir la herramienta.';
$string['opentool'] = 'Abrir herramienta en una nueva ventana';
$string['pluginname'] = 'Provedor de LTI';
$string['providetool'] = 'Proporcionar una herramienta para un sistema externa';
$string['remoteencoding'] = 'Codificación de sistema remoto';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Requerir curso o actividad completada antes de enviar las calificaciones';
$string['rolesallowedcreatecontexts'] = 'Roles a los que está permitido crear contextos (desde el sitio remoto)';
$string['rolesallowedcreateresources'] = 'Roles a los que está permitido crear recursos (desde el sitio remoto)';
$string['secret'] = 'Secreto compartido';
$string['sendgrades'] = 'Mandar de regreso las calificaciones';
$string['shortnameformat'] = 'Formato de nombre_corto para cursos de nueva creación';
$string['subplugintype_ltiproviderextension'] = 'Extensión LTI';
$string['subplugintype_ltiproviderextension_plural'] = 'Extensiones LTI';
$string['syncmode'] = 'Modo de sincronización';
$string['syncperiod'] = 'Período de sincronización';
$string['tooldisabled'] = 'El acceso a la herramienta está deshabilitado';
$string['toolsettings'] = 'Configuraciones de la herramienta';
$string['toolsprovided'] = 'Lista de herramientas proporcionadas';
$string['tooltobeprovide'] = 'Herramienta a ser proporcionada';
$string['unenrolmissing'] = 'Des-inscribir miembros faltantes';
$string['url'] = 'Invocar URL';
$string['userdefaultvalues'] = 'Valores por defecto del usuario';
$string['userprofileupdate'] = 'Actualizar perfil de usuario';
$string['userprofileupdatehelp'] = 'Nunca actualizar el perfil de usuario en cada acceso remoto. Delegar a que sea configurado a nivel de herramienta';
