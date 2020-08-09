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
 * Strings for component 'enrol_lti', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: Se recomeinda que se habilite la configuración del sitio para \'Permitir incrustación de marco\', de forma tal que las herramientas se muestren dentro de un marco, en lugar de que se muestren en una ventana nueva.';
$string['authltimustbeenabled'] = 'Nota: Este plugin requiere que también esté habilitado el elp plugin de autenticación LTI.';
$string['cartridgeurl'] = 'URL de Cartucho';
$string['couldnotestablishproxy'] = 'No pudo establecerse proxy con consumidor.';
$string['enrolenddate'] = 'Fecha de término';
$string['enrolenddateerror'] = 'La fecha del fin de la inscripción no puede ser anterior a la fecha del inicio';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden acceder solamente hasta antes de esta fecha.';
$string['enrolisdisabled'] = 'El plugin de \'Publicar como una herramienta LTI\' está deshabilitado.';
$string['enrolmentfinished'] = 'Terminó la inscripción.';
$string['enrolmentnotstarted'] = 'La inscripción no ha iniciado.';
$string['enrolperiod'] = 'Duración de la inscripción';
$string['enrolperiod_help'] = 'Lapso de tiempo que es válida la inscripción, comenzando  con el momento en el que el usuario se inscribe a si mismo desde el sistema remoto. Si está deshabilitado, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios solamente podrán empezar a acceder a partir de esta fecha.';
$string['failedrequest'] = 'FAlló la solicitud. Razón: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acceder a la herramienta, por favor siga el enlace inferior.';
$string['gradesync'] = 'Sincronización de calificación';
$string['gradesync_help'] = 'Si es que las calificaciones de la herramienta son enviadas al sistema remoto (consumidor LTI).';
$string['incorrecttoken'] = 'La ficha (token) era incorrecta; por favor, revise la URL e inténtelo nuevamente, o póngase en contacto con el administrador de esta herramienta.';
$string['invalidrequest'] = 'Solicitud inválida';
$string['invalidtoolconsumer'] = 'Consumidor de herramienta inválido.';
$string['launchdetails'] = 'Detalles de invocación';
$string['launchdetails_help'] = 'Se necesitan una URL de cartucho (también llamada URL de configuración) más un secreto o una URL de invocación (launch URL) para configurar la herramienta.';
$string['launchurl'] = 'URL de invocación (launch URL)';
$string['lti:config'] = 'Configurar instancias de\'Publicar como herramienta LTI\'';
$string['lti:unenrol'] = 'Des-inscribir (dar de baja) usuarios del curso';
$string['maxenrolled'] = 'Máximo de usuarios inscritos';
$string['maxenrolled_help'] = 'El número máximo de usuarios remotos que pueden acceder a la herramienta. Si se configura a \'0\' , el número de usuarios remotos es ilimitado.';
$string['maxenrolledreached'] = 'Ya se ha alcanzado el número máximo de usuarios remotos a los que se les permite acceder a la herramienta.';
$string['membersync'] = 'Sincronización de usuario';
$string['membersync_help'] = 'Si es que un trabajo agendado sincroniza usuarios inscritos en el sistema remoto con inscripciones en este curso, creando una cuenta para cada usuario remoto conforme sea necesario, e inscribiéndolos o des-incribiéndolos (darlos de baja) según se requiera.

Si se configura en NO, en el momento en que un usuario remoto acceda a la herramienta, se le creará una cuenta para él y será inscrito automáticamente.';
$string['membersyncmode'] = 'Modo de sincronización de usuario';
$string['membersyncmodeenrolandunenrol'] = 'Inscribir nuevo y des-inscribir (dar de baja) a usuarios faltantes';
$string['membersyncmodeenrolnew'] = 'Inscribir nuevos usuarios';
$string['membersyncmode_help'] = 'Si es que los usuarios remotos deberían de se inscritos o des-inscritos (dados de baja)  de este curso.';
$string['membersyncmodeunenrolmissing'] = 'Des-inscribir (dar de baja) usuarios faltantes';
$string['notoolsprovided'] = 'Sin herramientas proporcionadas';
$string['opentool'] = 'Abrir herramienta';
$string['pluginname'] = 'Publicar como herramienta LTI';
$string['pluginname_desc'] = 'El plugin de \'Publicar como herramienta LTI\', en conjunto con el plugin de autenticación LTI, les permite a los usuarios remotos acceder a cursos y actividades selectos. En otras palabras, Moodle funciona como un proveedor de herramienta LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'La lista de usuarios inscritos vía un provedor LTI.';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'El momento cuando el usuario accedió por última vez al curso';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La última calificación que el usuario tiene grabada de haber tenido';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'El momento cuando el usuario fue inscrito';
$string['privacy:metadata:enrol_lti_users:userid'] = 'La ID del usuario';
$string['registration'] = 'Registro de herramienta publicada';
$string['registrationurl'] = 'URL de Registro';
$string['registrationurl_help'] = 'Si se usa una URL de registro (también llamada URL del proxy), entonces la herramienta es configurada automáticamente.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Requerir que el curso o la actividad esté completada antes de la sincronización de calificaciones';
$string['returnurlnotset'] = 'No se configuró la URL de retorno';
$string['roleinstructor'] = 'Rol para profesor';
$string['roleinstructor_help'] = 'El rol asignado en la herramienta al profesor remoto.';
$string['rolelearner'] = 'Rol para estudiante';
$string['rolelearner_help'] = 'Este es el rol que le será asignado en la herramienta al estudiante remoto.';
$string['secret'] = 'Secreto';
$string['secret_help'] = 'Una cadena de caracteres que es compartida con el sistema  remoto (consumidor LTI) para proporcionarles acceso a la herramienta.';
$string['sharedexternaltools'] = 'Publicadas como herramientas LTI';
$string['successfulregistration'] = 'Registro exitoso';
$string['tasksyncgrades'] = 'Publicar como sincronización de calificaciones de herramienta LTI';
$string['tasksyncmembers'] = 'Publicar como sincronización de usuarios de herramienta LTI';
$string['toolsprovided'] = 'Herramientas publicadas';
$string['toolsprovided_help'] = 'Una herramienta puede ser compartida con otro sitio al proporcionar, ya sea detalles de invocación o una URL de registro.';
$string['tooltobeprovided'] = 'Herramienta a ser publicada';
$string['toolurl'] = 'URL de herramienta';
$string['userdefaultvalues'] = 'Valores por defecto del usuario';
