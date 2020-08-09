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
 * Strings for component 'local_temporary_enrolments', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   local_temporary_enrolments
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Inscripciones temporales';
$string['privacy:metadata:export_description'] = 'Sus inscripciones temporales dentro de este curso';
$string['privacy:metadata:roleassignid'] = 'ID del objeto de asignación de rol relacionado con esta inscripción temporal.';
$string['privacy:metadata:roleid'] = 'ID del rol dado al usuario en la asignación del rol para esta inscripción temporal.';
$string['privacy:metadata:table'] = 'Datos que describen cada inscripción temporal.';
$string['privacy:metadata:timeend'] = 'Sello de tiempo de cuando terminará la inscripción temporal.';
$string['privacy:metadata:timestart'] = 'Sello de tiempo de cuando inició la inscripción temporal.';
$string['settings:existing_assignments:desc'] = '¿Gestionar asignaciones de roles existentes?';
$string['settings:existing_assignments_email:desc'] = '¿Mandar Emails para asignaciones pre-existentes?';
$string['settings:existing_assignments_email:subdesc'] = 'Si el Rol de calificador de inscripción temporal ya está asignado a algunos usuarios: ¿desea Usted que el plugin mande Emails explicatorios iniciales para aquellas asignaciones de rol pre-existentes? Solamente aplica si Usted activó la opción para gestionar asignaciones de rol existentes.';
$string['settings:existing_assignments_start:desc'] = 'Momento de inicio de asignación de rol existente';
$string['settings:existing_assignments_start:from_now'] = 'Desde ahorita';
$string['settings:existing_assignments_start:from_start'] = 'Desde el momento de inicio de asignación';
$string['settings:existing_assignments_start:subdesc'] = 'Si el Rol de calificador de inscripción temporal ya está asignado a algunos usuarios: ¿desea Usted que  la duración de  la inscripción temporal para aquellas asignaciones de rol pre-existentes empiecen desde la creación de la asignación de rol, o desde ahora? Solamente aplica si Usted activó la opción para gestionar asignaciones de rol existentes.';
$string['settings:existing_assignments:subdesc'] = 'Si el Rol de calificador de inscripción temporal ya está asignado a algunos usuarios: ¿desea Usted que estas asignaciones de rol se vuelan temporales, y pasen a ser gestionadas por este plugin?';
$string['settings:expire_content:default'] = '{SUBJECT: Temporary enrolment for {COURSE} expired}

Estimado/a {STUDENTFIRST},

Su acceso temporal a  {COURSE} ha expirado o ha sido revocado. Usted ya no podrá acceder a este curso. Si Usted desea participar en este curso, por favor regístrese en él mediante el sistema habitual de registro.';
$string['settings:expire_content:desc'] = 'Contenido del Email de expiración';
$string['settings:expire_content:subdesc'] = 'Email enviado a estudiante por expiración de su inscripción temporal (si es que no ha sido inscrito completamente)';
$string['settings:expire_onoff:desc'] = 'Activar/desactivar Email expiración';
$string['settings:expire_onoff:subdesc'] = 'Activar la casilla para activar Emails de expiración. Esto no afecta la des-inscripción (baja) automática.';
$string['settings:headers:email'] = 'email';
$string['settings:headers:existing_assignments'] = 'Asignaciones de Rol Existentes';
$string['settings:headers:main'] = 'Principal';
$string['settings:length:desc'] = 'Duración de inscripcióntemporal';
$string['settings:length:subdesc'] = 'Cuanto tiempo durará la inscripción temporal de un estudiante antes de expirar automáticamente.';
$string['settings:onoff:desc'] = 'Activar/Desactivar';
$string['settings:onoff:subdesc'] = 'Active la casilla para activar funcionalidad del plugin';
$string['settings:remind_content:default'] = '{SUBJECT: Temporary enrolment reminder for {COURSE}}

Estimado/a {STUDENTFIRST},

Por favor tenga en cuenta que su inscripción temporal en  {COURSE} expirará en {TIMELEFT} días. Si Usted desea continuar participando en este curso, Usted DEBE registrarse formalmente para esto mediante el sistema normal de registro.';
$string['settings:remind_content:desc'] = 'Contenido del Email recordatorio';
$string['settings:remind_content:subdesc'] = 'Email enviado a estudiante cada x días para recordarle que su inscripción es solamente temporal';
$string['settings:remind_freq:desc'] = 'Frecuencia de Email recordatorio';
$string['settings:remind_freq:subdesc'] = 'Los Emails recordatorios son enviados cada ____ días';
$string['settings:remind_onoff:desc'] = 'Activar/desactivar Emails recordatorio';
$string['settings:remind_onoff:subdesc'] = 'Activar casilla para activar Emails recordatorios';
$string['settings:roleid:desc'] = 'Rol de calificador de inscripción temporal';
$string['settings:roleid:subdesc'] = 'El rol que indica que una inscripción es temporal.';
$string['settings:studentinit_content:default'] = '{SUBJECT: Temporary enrolment granted for {COURSE}}

Estimado/a {STUDENTFIRST},

Se le ha otorgado a Usted acceso temporal al sitio Moodle para {COURSE}. Después de que Usted sea registrado oficialmente para el curso, Usted recibirá acceso de estudiante para el resto del semestre. El acceso temporal expirará después de 14 días. Aunque los académicos pueden añadirlo a Usted a Moodle, ellos NO PUEDEN registrarlo para el curso.';
$string['settings:studentinit_content:desc'] = 'Contenido del Email inicial al estudiante';
$string['settings:studentinit_content:subdesc'] = 'Email enviado al estudiante que fue inscrito temporalmente';
$string['settings:studentinit_onoff:desc'] = 'Activar/desactivar Email inicial estudiante';
$string['settings:studentinit_onoff:subdesc'] = 'Activar la casilla para activar el Email inicial al estudiante. Esto no afecta a la inscripción actual.';
$string['settings:teacherinit_content:default'] = '{SUBJECT: Temporary enrolment granted to {STUDENTFULL} for {COURSE}}

Estimado/a {TEACHER},

Se le ha otorgado a {STUDENTFULL} acceso temporal a {COURSE}. La inscripción temporal expirará después de 14 días. Aunque Usted puede añadir estudiantes a Moodle, Usted NO PUEDE registrarlos al curso. Ellos se pueden registrar mediante el registro habitual hasta antes de la fecha límite.';
$string['settings:teacherinit_content:desc'] = 'Contenido del Email inicial al profesor';
$string['settings:teacherinit_content:subdesc'] = 'Email enviado al profesor que inscribió temporalmente a un estudiante';
$string['settings:teacherinit_onoff:desc'] = 'Activar/desactivar contenido del Email inicial al profesor';
$string['settings:teacherinit_onoff:subdesc'] = 'Seleccionar la casilla para activar el Email inicial al profesor. Esto no afecta a la inscripción actual.';
$string['settings:upgrade_content:default'] = '{SUBJECT: Temporary enrolment for {COURSE} upgraded!}

Estimado/a {STUDENTFIRST},

¡Su acceso temporal a {COURSE} ha sido actualizado a inscripción completa! Usted ahora está oficialmente registrado para este curso y tiene acceso permanente al sitio Moodle.';
$string['settings:upgrade_content:desc'] = 'Contenido del Email de actualización';
$string['settings:upgrade_content:subdesc'] = 'Correo enviado a estudiante si están completamente inscritos (actualizado su inscripción a estatus permanente).';
$string['settings:upgrade_onoff:desc'] = 'Email actualización si/no';
$string['settings:upgrade_onoff:subdesc'] = 'Activar la casilla para activar Email de actualización. No afecta a la inscripción actual.';
$string['task:expire'] = 'Revisar roles temporales expirados y quitarlos';
$string['task:remind'] = 'Enviar Emails recordatorios de inscripción temporal';
