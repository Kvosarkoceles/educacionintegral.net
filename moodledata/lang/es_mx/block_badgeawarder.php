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
 * Strings for component 'block_badgeawarder', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   block_badgeawarder
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountscreated'] = 'El número de cuentas creadas: {$a}';
$string['awardall'] = 'Otorgar a todos los usuarios, crear usuarios no-existentes';
$string['awardbadges'] = 'Otorgar insignias';
$string['awarderrors'] = 'Errores al otorgar: {$a}';
$string['awardexisting'] = 'Otorgar solamente a usuarios existentes';
$string['awardnew'] = 'Otorgar solamente a usuarios nuevos';
$string['awardresult'] = 'Resultado';
$string['awardtotal'] = 'Total otorgadas: {$a}';
$string['badge'] = 'Insignia';
$string['badgeawarder:addinstance'] = 'Añadir un bloque de Otorgante de Insignias';
$string['badgeawarder:myaddinstance'] = 'Añadir un bloque de Otorgante de Insignia';
$string['badgeawarder:uploadcsv'] = 'Subir un archivo CSV al Bloque Otorgante de Insignia';
$string['badgecsv'] = 'subir CSV insignia';
$string['badgecsvpreview'] = 'Previsualizar la insignia a punto de ser otorgada';
$string['blockname'] = 'Otorgante de Insignia';
$string['completion'] = 'Finalización';
$string['csv'] = 'El archivo de CSV de insignia';
$string['csvdelimiter'] = 'Delimitador en CSV';
$string['csvfileerror'] = 'Hubo un error en la subida del archivo CSV';
$string['csvformaterror'] = '<br>El manejador de CSV no pudo encontrar todos los campos necesarios. El Otorgante_de_Insignia necesita los campos firstname, lastname, badge, email en laprimera fila.<br>Si Usted recibe este mensaje es porque, ya sea que faltaba uno de estos campos, o Usted no ha elegido el correcto delimitador de campo.';
$string['csvline'] = 'línea CSV';
$string['defaultdelimiter'] = 'Delimitador por defecto';
$string['defaultencoding'] = 'Codificación por defecto';
$string['defaultpreviewrows'] = 'Número de filas previsualizadas por defecto';
$string['defaultuploadtype'] = 'Tipo de subida por defecto';
$string['emailawardsubject'] = 'Usted ha recibido una insignia';
$string['emailawardtextexisting'] = 'Felicitaciones; Usted ha recibido una insignia de  {$a->badgename}.<br>
<br>
To access your badge visit {$a->siteurl}';
$string['emailawardtextnew'] = 'Felicitaciones; Usted ha recibido una insignia de  {$a->badgename}.<br>
<br>
Para acceder a  Moodle, vaya a: {$a->siteurl}
<br>
Su información actual para ingresar es:<br>
nombre_de_usuario {$a->username}<br>
contraseña: {$a->newpassword}<br>';
$string['emailsend'] = 'Email enviado';
$string['encoding'] = 'Codificación';
$string['enrolment'] = 'Inscripción';
$string['importoptions'] = 'Opciones de importación';
$string['line'] = 'Línea';
$string['missingbadge'] = 'Insignia no encontrada';
$string['mode'] = 'Modo de subida';
$string['mode_help'] = 'Esto le permite especificar si es que se pueden crear y/o actualizar insignias.';
$string['nothingtodo'] = 'No hay usuarios en el archivo CSV a los que se les pueda otorgar una Insignia';
$string['nothingtodobutton'] = 'Regresar';
$string['pluginname'] = 'Otorgante de Insignia';
$string['preview'] = 'Vista previa:';
$string['previewcreatenew'] = 'Creando usuario nuevo';
$string['previewskipexisting'] = 'Saltándose al usuario existente';
$string['previewskipnonexisting'] = 'Saltándose al usuario no-existente';
$string['previewupdateexisting'] = 'Saltándose a usuario existente';
$string['privacy:metadata'] = 'El plugin del Bloque Badgeawarder (Otorgador_de-insignia) no almacena ningún dato personal. Sin embargo, si usa las APIs estándares de Moodle para crear cuentas de nuevos usuarios, inscribirlos en cursos específicos y otorgarles insignias específicas basadas en una subida CSV de campos: firstname,lastname,email,badge.';
$string['result'] = 'Resultado';
$string['returntocourse'] = 'Regresar al curso';
$string['rowpreviewnum'] = 'Previsualizar filas';
$string['rowpreviewnum_help'] = 'Número de filas del archivo CSV que serán previsualizadas en la siguiente página. Esta opción existe para limitar el tamaño de la página siguiente.';
$string['samplecsv'] = 'Descargar un archivo CSV de ejemplo';
$string['selectcountry'] = 'Seleccionar al país por defecto';
$string['showextendedoption'] = 'Mostrar Opciones extendidas';
$string['statusbadgealreadyawarded'] = 'La insignia ya estaba otorgada previamente';
$string['statusbadgecriteriaerror'] = 'La insignia no fue otorgada manualmente o tiene criterios adicionales';
$string['statusbadgenotactive'] = 'Insignia inactiva';
$string['statusbadgenotexist'] = 'La insignia no existe';
$string['statuscoursebadgeonly'] = 'No es insignia del curso';
$string['statusemailfailed'] = 'No pudo enviarse Email';
$string['statusemailinvited'] = 'Email enviado a nuevo usuario';
$string['statusemailnotified'] = 'Usuario existente notificado';
$string['statusgetuserfailed'] = 'Falló al crear o al obtener usuario';
$string['statusmissingfields'] = 'Faltan campos requeridos';
$string['statusok'] = 'OK';
$string['statusskipexistinguser'] = 'Saltándose a usuario existente';
$string['statusskipinvalidemail'] = 'Dirección Email inválida';
$string['statusskipnewuser'] = 'Saltándose a usuario nuevo';
$string['uploadbadgecsv'] = 'Subir CSV de Insignias';
$string['uploadbadgecsv_help'] = 'Cada línea del archivo contiene un registro.
Cada registro es una serie de datos separados por comas (u otros delimitadores).
El primer registro contiene una lista de nombres_de_campos definiendo el formato del resto del archivo. Los nombres_de_campos necesarios son firstname, lastname, email, badge';
$string['uploadbadgespreview'] = 'Previsualización de Insignias Subidas';
$string['uploadcsv'] = 'Subir CSV';
$string['usersawarded'] = 'Usuarios premiados';
$string['usersenrolled'] = 'Usuarios inscritos: {$a}';
$string['usersettings'] = 'Configuraciones por defecto para Usuario Nuevo';
