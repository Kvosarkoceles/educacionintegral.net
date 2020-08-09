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
 * Strings for component 'qtype_opaque', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_opaque
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoutofsequence'] = 'Usted ha accedido a esta página fuera de secuencia. Por favor no use el botón Atrás cuando esté intentando resolver preguntas.';
$string['addengine'] = 'Añadir otro motor';
$string['cannotaccessfile'] = 'Usted no tiene permitido accesar este archivo';
$string['configuredquestionengines'] = 'Motores de preguntas configurados';
$string['configuredquestionengines_help'] = 'Opaco es una forma de conectar otros motores de preguntas compatibles con Moodle. Para que Moodle use otro motor de preguntas, necesita configurarse aquí. La pantalla enlista todos los motores de preguntas que han sido configurados. Le permite editar sus configuraciones, eliminar configuraciones y crear otras nuevas.';
$string['couldnotconnect'] = 'No se pudo conectar al servidor Opaco {$a}.';
$string['couldnotgetengineinfo'] = 'No pudo obtenerse información del servidor remoto para el motor con id {$a}.';
$string['couldnotgetquestionmetadata'] = 'El motor de preguntas no pudo regresar las calificaciones máximas para esta pregunta. ¿Está Usted segurro de que la ID y versión remotas son correctas? (Información Técnica: {$a})';
$string['couldnotloadenginename'] = 'No se pudo cargar el nombre del motor desde la BasedeDatos para el motor con ID {$a}.';
$string['couldnotloadengineservers'] = 'No se pudo cargar la lista de servidores desde la BasedeDatos para el motor con ID {$a}.';
$string['couldnotsaveengineinfo'] = 'No se pudieron guardar los detalles del motor de praguntas a la BasedeDatos';
$string['deleteconfigareyousure'] = '¿Está seguro de querer borrar la configuración para el motor con ID {$a}?';
$string['deletefailed'] = 'Error al tratar de eliminar la configuración del motor';
$string['editquestionengine'] = 'Editando la configuración del motor de preguntas Opaco';
$string['editquestionengine_help'] = 'Cada sistema remoto que Usted configure debe tener un nombre, que será usado para identificarlo dentro de Moodle. Usted debe especificar cuando menos un URL de motor de pregunta. Usted también puede especificar URLs de bancos de preguntas. Cuando especifique URLs Usted puede especificar varios, uno por línea. Haga esto cuando tenga varios servidores para balance de carga. Las llamadas a los motores de preguntas serán distribuídos aproximadamente de forma pareja sobre los diferentes servidores remotos.';
$string['editquestionengineshort'] = 'Editando motor';
$string['enginecannotbedeleted'] = 'Este motor no puede ser eliminado. Está en uso por varias preguntas.';
$string['enginedeleted'] = 'Configuración del motor eliminada.';
$string['enginename'] = 'Nombre del motor';
$string['enginenotused'] = '{$a->name} (No usado)';
$string['engineusedby'] = '{$a->name} (Usado por {$a->count} preguntas)';
$string['eventengine_created'] = 'Configuración del motor de preguntas creada';
$string['eventengine_deleted'] = 'Configuración del motor de preguntas eliminada';
$string['eventengine_edited'] = 'Configuración del motor de preguntas editada';
$string['getmetadatacallfailed'] = 'Falló al recuperar metadatos  para esta pregunta. ¿ Está seguro de que la ID remota y versión son correctas?';
$string['invalidquestionidsyntax'] = 'Esto no coincide con la sintaxis para la ID de pregunta';
$string['invalidquestionversionsyntax'] = 'La versión de la pregunta debería estar en la forma de mayor,menor donde mayor y menor son enteros.';
$string['managequestionengines'] = 'Gestionar la lista de motores de preguntas instalados.';
$string['maxgradenotreturned'] = 'El motor de preguntas no pudo regresar las calificaciones máximas para esta pregunta. ¿Está Usted seguro de que la ID remota y versión son correctas?';
$string['missingenginedetailsinimport'] = 'Faltan detalles del motor al importar una pregunta Opaca';
$string['missingenginename'] = 'Nombre del motor faltante';
$string['missingengineurls'] = 'URLs de motor de pregunta faltante';
$string['missingremoteidinimport'] = 'Falta ID remota en archivo de importación';
$string['missingremoteversioninimport'] = 'Falta versión remota en archivo de importación';
$string['noengines'] = 'Actualmente, no hay motores remotos configurados';
$string['notcompleted'] = '[No completada]';
$string['onequestionperpage'] = 'Por razones técnicas, esta pregunta no se puede mostrar aquí en este momento. (Solamente una pregunta de este tipo se puede mostrar por cada pantalla). Por favor revise una pregunta a la vez al elegir el número de la pregunta en el panel de navegación.';
$string['passkey'] = 'Clave de paso';
$string['passkey_help'] = 'Una clave de paso es una medida de seguridad que implementan algunos motores de pregunta. Usted solamente podrá conectarse a ese motor de pregunta si conoce la clave de paso. Consulte la documentación para el tipo particular de motor de pregunta al que está intentando conectarse.';
$string['pluginname'] = 'Opaco';
$string['pluginnameadding'] = 'Añadiendo una pregunta Opaco';
$string['pluginnameediting'] = 'Editando una pregunta Opaco';
$string['pluginname_help'] = 'Opaco (Opaque) es una forma de conectar Moodle a otros motores de pregunta compatibles. Esta pantalla le permite crear una pregunta Opaca al identificar a cual motor de pregunta se conecta y darle la identidad de la pregunta en ese motor remoto, como se explica en la documentación de Opaco. Los motores de pregunta deben configurarse en la pantalla de administración de configuración del motor de pregunta.';
$string['pluginnamesummary'] = 'Usar una pregunta proporcionada por otro sistema de motor de pregunta';
$string['privacy:metadata'] = 'El plugin Opaque no almacena ningún dato personal.';
$string['processcallfailed'] = 'Falló al procesar una respuesta. {$a}';
$string['questionbankurls'] = 'URLs de banco de preguntas';
$string['questionengine'] = 'Motor de pregunta';
$string['questionengine_help'] = 'Seleccione el motor remoto de pregunta que aloja la pregunta que Usted quiere usar.';
$string['questionengineurls'] = 'URLs de motores de pregunta';
$string['questionid'] = 'ID de pregunta';
$string['questionid_help'] = 'Las preguntas opacas están identificadas por tanto una ID de la pregunta y un número de versión de la pregunta. La persona que creó la pregunta a la que Usted está tratando de referirse podrá decirle ambas.';
$string['questionversion'] = 'Versión de pregunta';
$string['startcallfailed'] = 'Falló al iniciar una sesión de pregunta. {$a}';
$string['stopcallfailed'] = 'Falló al cerrar una sesión de pregunta. {$a}';
$string['testconnection'] = 'Conexión de prueba';
$string['testconnectionfailed'] = 'Falló la conexión de prueba';
$string['testconnectionpassed'] = 'Pasó la conexión de prueba';
$string['testconnectionto'] = 'Falló la conexión al motor de pregunta. {$a}';
$string['testconnectionunknownreturn'] = 'La prueba de conexión regresó una respuesta no reconocida.';
$string['testingengine'] = 'Probando el motor de pregunta';
$string['timeout'] = 'Tiempo de espera de conexión (segundos)';
$string['timeout_help'] = 'El tiempo de espera controla por cuanto tiempo Moodle esperará a que el motor de pregunta responda. Si lo configura demasiado corto, se reportarán errores eventualmente. Si lo configura demasiado largo, entonces, cuando el motor de pregunta no estuviera respondiendo, Moodle esperará mucho tiempo sin hacer nada. Por eso, el valor correcto es un balance entre los dos.';
$string['timeoutmustbepositive'] = 'El tiempo de espera debe ser un entero positivo.';
$string['unknownengine'] = 'Motor desconocido. {$a}';
$string['unrecognisedservertype'] = 'Lectura de tTipo de servidor desconocido desde la Basededatos';
$string['urlsinvalid'] = 'Usted debe escribir una lista de URLs, una por línea.';
