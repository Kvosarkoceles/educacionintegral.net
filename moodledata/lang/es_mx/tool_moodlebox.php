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
 * Strings for component 'tool_moodlebox', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_moodlebox
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['badpowersupply'] = '<p><b>¡Advertencia: bajo-voltaje detectado!</b> El suministro de energía de la MoodleBox es inadecuado, lo cual puede causar varios problemas, como por ejemplo una limitante en el número de clientes de Wi-Fi o inclusive un repentino apagón del dispositivo.</p><p>Se le recomienda encarecidamente que  <b>cambie su adaptador de energía</b>, de preferencia por el <a href="https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/" target="_blank">official Raspberry Foundation power supply</a>, y que use un cable de buena calidad para conectarlo al MoodleBox.</p>';
$string['changepassworderror'] = 'La contraseña de MoodleBox no ha cambiado. Las contraseñas no coinciden.';
$string['changepasswordmessage'] = 'La contraseña principal de la MoodleBox  (cuenta UNIX) y del servidor de la base de datos fueron exitosamente cambiadas.<br /><br />¡Advertencia! La contraseña del usuario administrador de Moodle <b>NO fue cambiada</b>. Para cambiarla, por favor use la página de preferencias de este usuario.';
$string['changepasswordsetting'] = 'Cambio de contraseña de MoodleBox';
$string['changewifipassword'] = 'Cambiar contraseña Wi-Fi';
$string['changewifisettings'] = 'Cambiar configuraciones Wi-Fi';
$string['configuration'] = 'Configuraciones de MoodleBox';
$string['cpufrequency'] = 'Frecuencia del CPU';
$string['cpuload'] = 'Carga del CPU';
$string['cputemperature'] = 'Temperatura del CPU';
$string['currentwifipassword'] = 'Contraseña Wi-Fi actual';
$string['dashboard'] = 'Tablero de MoodleBox';
$string['datetime'] = 'fecha y Hora';
$string['datetime_help'] = 'Si la MoodleBox no está conectada a Internet, no tendrá su hora del reloj a tiempo. Se puede configurar manualmente usando este ajuste.';
$string['datetimemessage'] = 'Se configuraron fecha y hora de la MoodleBox. Para mayor exactitud, se recomienda conectar la MoodleBox a una red conectada al Internet mediante un cable Ethernet.';
$string['datetimeset'] = 'Configurar fecha y hora';
$string['datetimesetmessage'] = 'El reloj de la MoodleBox no está a tiempo. Es altamente recomendable configurar la fecha y hora a la hora y fecha actual.';
$string['datetimesetting'] = 'Fecha y hora';
$string['defaultgateway'] = 'Gateway (puerta de enlace) predeterminada';
$string['dhcpclientinfo'] = 'Dirección IP y nombre del cliente';
$string['dhcpclientnumber'] = 'Número de clientes';
$string['dhcpclients'] = 'Clientes DHCP';
$string['documentation'] = 'Documentación de MoodleBox';
$string['documentation_desc'] = '<p>Para asuntos de soporte, mire la  <a href="https://moodlebox.net/en/help/" title="MoodleBox documentation" target="_blank">MoodleBox documentation</a>.</p>';
$string['ethernetdisconnected'] = 'Ethernet desconectado';
$string['forum'] = 'Foro de soporte de MoodleBox';
$string['forum_desc'] = '<p>Si no puede encontrar una respuesta a su pregunta en la  <a href="https://moodlebox.net/en/help/" title="MoodleBox documentation" target="_blank">MoodleBox documentation</a>, busque en el <a href="https://discuss.moodlebox.net/" title="MoodleBox forum" target="_blank">MoodleBox support forum</a> para ver si su pregunta ya ha sido contestada. En caso contrario, siéntase en libertad de abrir una nueva discusión.</p>';
$string['hidden'] = 'Oculta';
$string['ihavedonated'] = '¡Yo he donado! 🎉';
$string['ihavedonated_desc'] = 'Activar esta casilla si <a href="https://moodlebox.net/en/donate/" title="Make a donation" target="_blank">Usted ha donado</a> al proyecto MoodleBox.<br />Esta configuración no tiene efecto en absoluto, smplemente le permite mostrar su orgullo al haber contribuido al <a href="https://moodlebox.net/en/" title="MoodleBox website" target="_blank">MoodleBox project</a>. ¡Muchas gracias!';
$string['infofileerror'] = 'Información no disponible';
$string['infoheading'] = 'Información de soporte de MoodleBox';
$string['information'] = 'Información';
$string['interfacename'] = 'Nombre de interfaz';
$string['ipaddress'] = 'Dirección IP';
$string['kernelversion'] = 'Versión del kernel';
$string['missingconfigurationerror'] = 'Esta sección no está disponible.  La instalación del plugin no está completa, por lo que la configuración no puede ser manejada por la MoodleBox. Por favor, lea la  <a href="https://github.com/moodlebox/moodle-tool_moodlebox/blob/master/README.md" target="_blank">installation documentation</a>  para corregir este error.';
$string['moodleboxinfo'] = 'Versión de MoodleBox';
$string['moodleboxinfofileerror'] = 'Información no disponible';
$string['moodleboxpluginversion'] = 'Versión del plugin de MoodleBox';
$string['moodleboxsysteminfo'] = 'Información de MoodleBox';
$string['moodleboxsysteminfo_help'] = 'El tablero de información de MoodleBox muestra varios datos importantes acerca de MoodleBlox. Esta información incluye:

* Detalles críticos de la operación de MoodleBox como por ejemplo espacio restante de disco en la tarjeta SD y carga, temperatura y frecuencia del procesador
* Configuraciones actuales de la red Wi-Fi proporcionadas por la MoodleBox
* Número, dirección IP y nombre de todos los dispositivos conectados a la MoodleBox
* Modelo y sistema operativo de la Raspberry Pi
* Versión de MoodleBox y versión del plugin de MoodleBox';
$string['moodlebox:viewbuttonsinfooter'] = 'Ver botones para reiniciar y apagar en el pie de página';
$string['networkinterface'] = 'Interfaz cableada de red';
$string['newwifipassword'] = 'Nueva contraseña Wi-Fi';
$string['nopassworddefined'] = 'Sin contraseña Wi-Fi definida';
$string['parameter'] = 'Parámetro';
$string['passwordprotected'] = 'Protegido por contraseña';
$string['passwordsetting'] = 'Contraseña MoodleBox';
$string['passwordsetting_help'] = 'Aquí puede cambiarse la contraseña principal de MoodleBox. __Se recomienda encarecidamente que no conserve la contraseña por defecto__. Usted __debe__ definitivamente cambiarla como una medida mínima de seguridad.';
$string['pijuicebatterychargelevel'] = 'PiJuice nivel de carga';
$string['pijuicebatterystatus'] = 'PiJuice estado de batería';
$string['pijuicebatterytemp'] = 'PiJuice temperatura de batería';
$string['pijuiceinfo'] = 'PiJuice información del estado';
$string['pijuiceisfault'] = 'PiJuice falla';
$string['pijuicestatuserror'] = 'PiJuice estado';
$string['pluginname'] = 'MoodleBox';
$string['pluginversion'] = 'Versión del plugin de MoodleBox';
$string['privacy:metadata'] = 'El plugin MoodleBox muestra información desde el Raspberry Pi y permite algunos cambios de configuración, pero no afecta ni almacena datos personales por sí mismo.';
$string['projectinfo'] = '<p>El <a href="https://moodlebox.net/en/" title="MoodleBox website" target="_blank">Proyecto MoodleBox</a> es un proyecto voluntario, no lucrativo, de código abierto, implementado por <a href="https://blog.martignoni.net/a-propos/" title="Nicolas Martignoni" target="_blank">Nicolas Martignoni</a> en su tiempo libre.</p><p>Le agradecemos por usar MoodleBox. Usted puede demostrar su aprecio y apoyar este proyecto al <a href="https://moodlebox.net/en/donate/" title="Make a donation" target="_blank">hacer un donativo</a> ❤. Su donativo ayudará a financiar el equipo necesario para desarrollar la MoodleBox y alojar su documentación.</p>';
$string['raspberryhardware'] = 'Modelo de Raspberry Pi';
$string['raspbianversion'] = 'Versión de Raspbian';
$string['resizepartition'] = 'Re-cambiar tamaño de partición de tarjeta SD';
$string['resizepartition_help'] = 'Usar este botón para cambiar el tamaño de la partición de la tarjeta SD.';
$string['resizepartitionmessage'] = 'La partición de tarjeta SD ha sido cambiada en tamaño a su tamaño máximo. La MoodleBox está reiniciando ahora. Estará nuevamente en línea en un momento.';
$string['resizepartitionsetting'] = 'Cambiado de tamaño de partición de tarjeta SD';
$string['restart'] = 'Reiniciar MoodleBox';
$string['restartmessage'] = 'La MoodleBox está reiniciando. Estará de nuevo en-línea en un momentito.';
$string['restartstop'] = 'Reiniciar y apagar';
$string['restartstop_help'] = 'Use estos botones para reiniciar o para desactivar la MoodleBox. Se le recomienda encarecidamente que NO desenche el cable de energía para apagar la MoodleBox.';
$string['rpi1'] = 'Raspberry Pi 1';
$string['rpi2'] = 'Raspberry Pi 2B';
$string['rpi3'] = 'Raspberry Pi 3B';
$string['rpi3aplus'] = 'Raspberry Pi 3A+';
$string['rpi3b'] = 'Raspberry Pi 3B';
$string['rpi3bplus'] = 'Raspberry Pi 3B+';
$string['rpi4eightgb'] = 'Raspberry Pi 4B (8 GB RAM)';
$string['rpi4fourgb'] = 'Raspberry Pi 4B (4 GB RAM)';
$string['rpi4fourmb'] = 'Raspberry Pi 4B (4 MB RAM)';
$string['rpi4onegb'] = 'Raspberry Pi 4B (1 GB RAM)';
$string['rpi4onemb'] = 'Raspberry Pi 4B (1 MB RAM)';
$string['rpi4twogb'] = 'Raspberry Pi 4B (2 GB RAM)';
$string['rpi4twomb'] = 'Raspberry Pi 4B (2 MB RAM)';
$string['rpiosversion'] = 'Versión del Sistema Operativo de Raspberry Pi';
$string['rpizerow'] = 'Raspberry Pi Zero W';
$string['sdcardavailablespace'] = 'Espacio libre en tarjeta SD';
$string['showbuttonsinfooter'] = 'Mostrar botones en pie de página';
$string['showbuttonsinfooter_desc'] = 'Si se habilita, los botones para reiniciar y apagar son mostrados en el pie de página de todas las páginas del sitio cuando se ha ingresado como un administrador o un mánager (gestor).';
$string['shutdown'] = 'Apagar MoodleBox';
$string['shutdownmessage'] = 'La MoodleBox está apagándose. Por favor espere unos cuantos segundos antes de desconectar la alimentación de energía.';
$string['softwareversions'] = 'Versiones de software';
$string['systeminfo'] = 'Información del sistema';
$string['undervoltagedetected'] = '<p><b>¡Advertencia: bajo-voltaje detectado!</b> El suministro de energía de la MoodleBox es inadecuado, lo cual puede causar varios problemas, como por ejemplo una limitante en el número de clientes de Wi-Fi o inclusive un repentino apagón del dispositivo.</p><p>Se le recomienda encarecidamente que  <b>cambie su adaptador de energía</b>, de preferencia por el <a href="https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/" target="_blank">official Raspberry Foundation power supply</a>, y que use un cable de buena calidad para conectarlo al MoodleBox.</p>';
$string['undervoltageoccurred'] = '<p>Ha ocurrido una situación de bajo voltaje desde la última vez que arrancó la MoodleBox. Esto podría indicar que el suministro de energía de la MoodleBox es inadecuado, lo cual puede causar varios problemas, como por ejemplo una limitante en el número de clientes de Wi-Fi o inclusive un repentino apagón del dispositivo.</p><p>Se le recomienda encarecidamente que  <b>cambie su adaptador de energía</b>, de preferencia por el <a href="https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/" target="_blank">official Raspberry Foundation power supply</a>, y que use un cable de buena calidad para conectarlo al MoodleBox.</p>';
$string['unknownmodel'] = 'Modelo de Raspberry Pi desconocido';
$string['unsupportedhardware'] = '¡Hardware de servidor no-soportado detectado! Este plugin solamente funciona en Raspberry Pi';
$string['uptime'] = 'Tiempo-arriba del sistema';
$string['version'] = 'Versión de MoodleBox';
$string['visible'] = 'Visible';
$string['wifichannel'] = 'Canal Wi-Fi';
$string['wifichannel_help'] = 'No es necesario cambiar el canal de transmisión Wi-Fi a menos que el desempeño sea bajo por causa de interferencia.';
$string['wificountry'] = 'País regulatorio Wi-Fi';
$string['wificountry_help'] = 'Por razones legales, se recomienda conffigurar su país como el país regulatorio del Wi-Fi.';
$string['wifipassword'] = 'Contraseña Wi-Fi';
$string['wifipassworderror'] = 'La contraseña de red Wi-Fi debe tener entre 8 y 63 caracteres.';
$string['wifipassword_help'] = 'Si Usted ha elegido una red Wi-Fi protegida por contraseña, para impedir que los extraños usen la red Wi-Fi de MoodleBox; se recomienda cambiar su contraseña predeterminada. La contraseña de la red Wi-Fi debe tener entre 8 y 32 caracteres ASCII imprimibles (minúsculas y MAYÚSCULAS, números, signos de puntuación y algunos otros símbolos misceláneos)..';
$string['wifipasswordinvalid'] = 'La contraseña de red Wi-Fii es inválida. Debe tener entre 3 y 63 caracteres imprimibles ASCII (letras MAYÚSCULAS y minúsculas, números, signos de puntuación y algunos cuantos símbolos misceláneos).';
$string['wifipasswordmessage'] = 'La contraseña de red Wi-Fi fue cambiada. No se le olvide comunicárselo a sus estudiantes.';
$string['wifipasswordon'] = 'Protección de contraseña de red Wi-Fi';
$string['wifipasswordonhelp'] = 'Si se habilita, los usuarios tienen que escribir una contraseña para comunicarse a la red  Wi-Fi de MoodleBox.';
$string['wifipasswordon_help'] = 'Si se habilita, los usuarios tendrán que escribir una contraseña para conectarse a la red Wi-Fi de la MoodleBox.';
$string['wifipasswordsetting'] = 'Cambio de contraseña de red Wi-Fi';
$string['wifisettings'] = 'Configuraciones Wi-Fi';
$string['wifisettingserror'] = 'Las configuraciones de Wi-Fi no fueron cambiadas. Algunas configuraciones no son válidas.';
$string['wifisettingsmessage'] = 'Se cambiaron las configuraciones Wi-Fi. No olvide comunicarles el nuevo SSID y la nueva contraseña a sus estudiantes.';
$string['wifissid'] = 'Nombre de red Wi-Fi';
$string['wifissid_help'] = 'El Nombre de la red Wi-Fi (SSID) de la MoodleBox. La cadena de caracteres debe tener un mínimo de 1 byte y un máximo de 32 bytes. Recuerde que algunos caracteres como los emojis, usan más de un byte.';
$string['wifissidhidden'] = 'Red Wi-Fi oculta';
$string['wifissidhiddenstate'] = 'Visibilidad Wi-Fi SSID';
$string['wifissidhiddenstate_help'] = 'Si se habilita, Wi-Fi SSID estará oculta de los usuarios, los que no sabrán que hay una MoodleBox cerca. Esto reducirá notablemente la usabilidad del dispositivo, pero mejora ligeramente su seguridad.';
$string['wifissidinvalid'] = 'El nombre (SSID) proporcionado de la red Wi-Fi es inválido. Debe ser una cadena de caracteres de al menos 1 byte y cuando más 32 bytes.';
