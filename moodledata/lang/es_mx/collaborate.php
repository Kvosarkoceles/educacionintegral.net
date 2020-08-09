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
 * Strings for component 'collaborate', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   collaborate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apidiagnostics'] = 'Diagnósticos API';
$string['apidiagnosticsavenotice'] = 'Nota: Usted debe enviar este formato antes de correr la prueba API';
$string['apisettings'] = 'Integración con Moodle en Producción';
$string['attendance'] = 'Asistencia';
$string['boundaryminutes'] = 'Tiempo límite';
$string['cachedef_recordingcounts'] = 'Caché para descargas y vistas de grabación de Collaborate';
$string['cleanupsessionstask'] = 'Limpiar trabajos de sesión';
$string['collaborate'] = 'Colaborar';
$string['collaborate:addinstance'] = 'Añadir instancia de Collaborate';
$string['collaborate:deleterecordings'] = 'Eliminar grabaciones';
$string['collaboratefieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['collaborate:moderate'] = 'Moderar instancia de Collaborate';
$string['collaboratename'] = 'Nombre de sesión';
$string['collaborate:participate'] = 'Unirse a instancia de Collaborate';
$string['collaborate:view'] = 'Ver instancia de Collaborate';
$string['collaborate:viewattendance'] = 'Ver Asistencia';
$string['completionlaunch'] = 'El estudiante debe invocar la sesión collaborate para completarla';
$string['configpassword'] = 'Contraseña';
$string['configrestkey'] = 'Clave';
$string['configrestmigrate'] = 'Migrar a REST API';
$string['configrestsecret'] = 'Secreto';
$string['configrestserver'] = 'URL de servidor REST';
$string['configrestserverdesc'] = 'El servidor REST en donde son creadas sus sesiones de Collaborate.';
$string['configserver'] = 'URL';
$string['configserverdesc'] = 'El (antiguo) servidor SOAP en donde son creadas sus sesiones de Collaborate.';
$string['configusername'] = 'Nombre_de_usuario';
$string['configwsdebug'] = 'Depuración de Servicios web';
$string['connectionfailed'] = 'Falló conexión - por favor revise credenciales';
$string['connectionstatusunknown'] = 'Estado de conexión desconocido';
$string['connectionverified'] = 'Credenciales verificadas';
$string['copiedlink'] = 'Enlace copiado a Portapapeles.';
$string['copylink'] = 'Copiar enlace';
$string['crontask'] = 'Trabajo agendado de Collaborate';
$string['debugging'] = 'Depuración';
$string['deleterecording'] = 'Eliminar grabación titulada "{$a}"';
$string['deleterecordingconfirmation'] = 'Está seguro de querer eliminar la grabación titulada "{$a}"?';
$string['downloadrec'] = 'Descargar grabación';
$string['duration'] = 'Duración';
$string['error:apicallfailed'] = 'Falló llamada API ( {$a} )';
$string['error:failedtocreateurl'] = 'Falló al generar URL para sesión';
$string['error:failedtodeletesession'] = 'Falló al eliminar sesión de Collaborate';
$string['error:noconfiguration'] = 'El módulo Collaborate o está configurado apropiadamente. Póngase en contacto con su administrador del sitio.';
$string['error:restapiduplicatecontexts'] = 'Múltiples contextos ie Collaborate con extId {$a}.';
$string['error:restapiduplicateusers'] = 'Múltiples usuarios en Collaborate con extId {$a}.';
$string['error:restapisessionguesturlmissing'] = 'Falta URL de invtado para sessionId {$a}.';
$string['error:restapiunexpectedresponsecode'] = 'Falla de REST API. Código inesperado de respuesta({$a}). Contacte por favor a un administrador.';
$string['error:restapiunreachable'] = 'No es posible alcanzar a REST API de Collaborate. Contacte por favor a un administrador.';
$string['error:restapiunusable'] = 'REST API de Collaborate no está en un estado utilizable. Contacte por favor a un administrador.';
$string['error:serviceunreachable'] = 'WSDL inalcanzable';
$string['error:unknownaction'] = 'Acción desconocida';
$string['eventrecordingdeleted'] = 'Grabación eliminada';
$string['eventrecordingdownloaded'] = 'Grabación descargada';
$string['eventrecordingviewed'] = 'Grabación vista';
$string['eventsessionlaunched'] = 'Sesión Collaborate invocada';
$string['exitapidiagnostics'] = 'Salir de Diagnóstico API';
$string['group'] = 'Grupo';
$string['guestaccessenabled'] = 'Permitir acceso de invitado Collaborate';
$string['guestlink'] = 'Enlace de invitado Collaborate';
$string['guestlinks'] = 'Enlaces de invitado';
$string['guestrole'] = 'Rol de invitado Collaborate';
$string['hour'] = '1 Hora';
$string['hourminutes'] = '1 Hora y {$a->minutes} Minutos';
$string['hours'] = '{$a} Horas';
$string['hoursminutes'] = '{$a->hours} Horas y {$a->minutes} Minutos';
$string['lastjoined'] = 'Último unido: {$a}';
$string['lastleft'] = 'Último en salir: {$a}';
$string['log:all'] = 'Todos';
$string['logging'] = 'Bitácoras';
$string['log:light'] = 'Leve - Emergencia|Alerta|Crítica';
$string['log:medium'] = 'Mediana - Emergencia|Alerta|Critica|Error|Advertencia';
$string['log:none'] = 'Ninguna';
$string['meetingtimecurrent'] = 'Sesión en progreso';
$string['meetingtimejoin'] = 'Uirse a sesión';
$string['meetingtimepast'] = 'Sesión terminada';
$string['minutes'] = '{$a} Minutos';
$string['moderator'] = 'Moderador';
$string['modulename'] = 'Collaborate';
$string['modulename_help'] = 'Use Collaborate con la experiencia Ultra para conectarse con un estudiante o con toda la clase. Cree clases virtuales, oficinas y espacios para reuniones para motivar a sus estudiantes en una experienciade aprendizaje más colaborativa e interactiva.';
$string['modulenameplural'] = 'Instancias de Collaborate';
$string['nogroup'] = 'Sesión principal';
$string['noguestentry'] = 'Lo sentimos. Los invitados no tienen permitido tomar parte en discusiones';
$string['openended'] = 'Duración del curso';
$string['participant'] = 'Participante';
$string['pluginadministration'] = 'Administración de Collaborate';
$string['presenter'] = 'Presentador';
$string['privacy:metadata:collaborate'] = 'Para poder identificar al usuario que se está uniendo a la sesión, datos del usuario son enviados al servicio Collaborate.';
$string['privacy:metadata:collaborate:avatarurl'] = 'Su imagen del perfil es enviada al servicio Collaborate';
$string['privacy:metadata:collaborate:fullname'] = 'Su nombre completo es enviado al sistema remoto para permitir una mejor experiencia del usuario.';
$string['privacy:metadata:collaborate:role'] = 'Su rol dentro de la sesión Collaborate.';
$string['recording'] = 'Grabando {$a}';
$string['recordingcounts'] = '{$a->views} vista(s)';
$string['recordingcountsincdownloads'] = '{$a->views} vista(s) · {$a->downloads} descarga(s)';
$string['recordingdeleted'] = 'La grabación titulada "{$a}" ha sido eliminada.';
$string['recordings'] = 'Grabaciones';
$string['restapisettings'] = 'Configuraciones API REST';
$string['session'] = 'Sesión';
$string['sessiongroup'] = 'Grupo {$a}';
$string['sessionstart'] = 'Iniciar';
$string['sessionstarthelp'] = 'Los participantes pueden unirse a la sesión 5 minutos antes de que inicie';
$string['soapapisettings'] = 'Configuraciones API SOAP (antiguo)';
$string['starts'] = 'Inicia - {$a}';
$string['testapi'] = 'Probar conexión';
$string['timezone'] = 'Zona horaria: {$a}';
$string['unrestored'] = 'Un moderador debe ver o unirse a la sesión antes de que Usted pueda acceder a ella.';
$string['verifyingapi'] = 'Verificacndo conexión API. Espere por favor...';
$string['viewrec'] = 'Ver grabación';
