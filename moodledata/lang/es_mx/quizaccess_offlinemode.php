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
 * Strings for component 'quizaccess_offlinemode', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   quizaccess_offlinemode
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Respuesta cambiada';
$string['backtothequiz'] = 'Regresar al examen';
$string['changesmadereallygoaway'] = 'Sus respuestas no han sido guardadas en el servidor. ¿Está Usted seguro de querer abandonar este intento?';
$string['dataprocessedsuccessfully'] = 'Datos procesados exitosamente ({$a}).';
$string['description'] = 'Este examen usa un modo resistente-a-fallas. Los administradores pueden {$a}';
$string['descriptionlink'] = 'subir respuestas exportadas';
$string['finishattemptsafterupload'] = 'Enviar y terminar cada intento después de procesar la subida';
$string['lastsaved'] = 'Último guardado: {$a}';
$string['lastsavedtotheserver'] = 'Último guardado en el servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Último guardado en esta computadora: {$a}';
$string['loggedinaswronguser'] = 'Usted ha ingresado con una cuenta diferente de la que estaba intentando el examen. Eso no funcionará. Haga clic en Continuar para ingresar nuevamente como el usuario correcto.';
$string['logindialogueheader'] = 'Es posible que Usted necesite ingresar nuevamente';
$string['loginokagain'] = 'Su ingreso actualmente está OK';
$string['offlinemodeenabled'] = 'Modo experimental resistente-a-fallos';
$string['offlinemodeenabled_desc'] = 'Si es que, por defecto, debería de habilitarse el modo resistente-a-fallas para los exámenes nuevos, y también si es que debería de ser una configuración avanzada (detrás de \'Mostrar más ...\') en el formato de configuraciones del examen.';
$string['offlinemodeenabled_help'] = 'El objetivo de esta opción experimental es permitirles a los estudiantes intentar contestar un examen aun y cuando la conexión de red no sea confiable. Por ejemplo, en un tren que atraviesa un túnel, o simplemente con una mala conexión wi-fi. El estudiante puede moverse entre páginas del examen aun y cuando el servidor no esté disponible, y todas sus respuestas son almacenadas localmente, y enviadas al servidor cuando sea posible.';
$string['offlinemode:uploadresponses'] = 'Subir respuestas';
$string['pluginname'] = 'Modo de examen resistente-a-fallos';
$string['privacy:metadata'] = 'El modo de examen resistente-a-fallos no almacena ningún dato personal.';
$string['privatekey'] = 'Clave privada de encriptación';
$string['privatekey_desc'] = 'Usted puede usar criptografía con clave-pública para proteger las respuestas descargadas. Para hacer esto, Usted necesita proporcionar un par de claves privada/pública. Usted puede generar una clave privada usando <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> en la línea-de-comando (si tiene OpenSSL instalado desde https://www.openssl.org/). Después pegue el contenido del archivo rsa_1024_priv.pem dentro de esta caja.';
$string['processingcomplete'] = 'Procesamiento completado';
$string['processingfile'] = 'Procesando archivo {$a}';
$string['publickey'] = 'Clave de encriptación pública';
$string['publickey_desc'] = 'Esto debe de corresponder con la clave privada. Usted puede generarla desde la clave privada usando <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> y después pegue el contenido de rsa_1024_pub.pem aquí.';
$string['responsefiles'] = 'Archivos de respuestas';
$string['responsefiles_help'] = 'Usted puede subir una o más archivos de respuestas descargados usando el enlace para \'Exportación de respuesta de ememergencia\' durante un intento de un examen.';
$string['reviewthisattempt'] = 'Revisar este intento';
$string['savefailed'] = 'Falló el guardar. Usted puede continuar trabajando. De tiempo en tiempo Usted debería de {$a}.';
$string['savetheresponses'] = 'guardar las respuestas';
$string['savingdots'] = 'Guardando...';
$string['savingtryagaindots'] = 'Intentando nuevamente guardar en el servidor ...';
$string['submitfailed'] = 'Falló el envío';
$string['submitfaileddownloadmessage'] = '... o Usted puede {$a} como un archivo que puede ser procesado después.';
$string['submitfailedmessage'] = 'Sus respuestas no pudieron enviarse. Usted podría intentarlo nuevamente o ...';
$string['submitting'] = 'Enviando ...';
$string['uploadfailed'] = 'Falló la subida';
$string['uploadingresponsesfor'] = 'Subiendo respuestas para {$a}';
$string['uploadmoreresponses'] = 'Subir más respuestas';
$string['uploadresponses'] = 'Subir respuestas';
$string['uploadresponsesfor'] = 'Subir respuestas para {$a}';
