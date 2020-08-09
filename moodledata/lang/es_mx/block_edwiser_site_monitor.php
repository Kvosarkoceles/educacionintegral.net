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
 * Strings for component 'block_edwiser_site_monitor', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   block_edwiser_site_monitor
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeusers'] = 'Activo';
$string['cannotshowonsidebar'] = 'No se puede mostrar gráfica de uso en barra lateral. Por favor mueva el bloque hacia región de contenido para ver gráfica de uso.';
$string['changelog'] = 'Bitácora de cambios';
$string['checksettings'] = 'Por favor revise <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['comeswith'] = 'Viene con: {$a}';
$string['configtitle'] = 'Título del bloque del Monitor del Sitio Edwiser';
$string['contactus'] = 'Contáctenos';
$string['cpu'] = 'CPU';
$string['cpucommandnotallowed'] = 'Línea de comandos <strong>/proc/cpuinfo</strong> --Permiso Denegado.';
$string['cpuhigherlimit'] = 'Límite superior de CPU';
$string['cpuhigherlimit_help'] = 'Límite superior de uso de CPU';
$string['cpulimit_invalid'] = 'Por favor proporcione un límite válido de CPU';
$string['cpulimit_overlap'] = 'Por favor proporcione un límite válido de CPU. El lúimite superior no puede ser igual o menor al límite inferior';
$string['cpulowerlimit'] = 'Límite inferior de CPU';
$string['cpulowerlimit_help'] = 'Límite inferior de uso de CPU';
$string['cpuusage'] = 'Uso de CPU';
$string['crontask'] = 'Monitor del Sitio Edwiser - Recolectar estadísticas de uso de 24 horas';
$string['deletedusers'] = 'Eliminado';
$string['edwiserplugins'] = 'Plugins Edwiser';
$string['edwiser_site_monitor:addinstance'] = 'Añadir un nuevo bloque de monitor del sitio';
$string['edwiser_site_monitor:myaddinstance'] = 'Añadir un nuevo monitor del sitio al Tablero';
$string['emailfailed'] = 'No se puede enviar Email.';
$string['emailsent'] = 'Email enviado.';
$string['emailsuccess'] = 'Su mensaje fue enviado exitosamente. Gracias.';
$string['enablethreshold'] = 'Habilitar límites de umbral';
$string['enablethreshold_help'] = 'Esto habilitará revisiones del umbral y envío de Email si el uso es menor del límite inferior o  mayor del límite superior.';
$string['errorfetching'] = 'Error al buscar el ZIP del plugin. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Error al buscar el ZIP del plugin. ya existe el sitio destino. <b>{$a}</b>';
$string['errors'] = 'Errores';
$string['failed'] = 'Fallido';
$string['hader-threshold'] = 'Umbral';
$string['header-current'] = 'Actual';
$string['header-expected'] = 'Bajo/Alto';
$string['header-type'] = 'Tipo';
$string['high'] = 'Alto';
$string['highusage'] = 'Alto uso';
$string['installnew'] = 'Instalar nuevo plugin';
$string['invalidjsonfile'] = 'Lista de producto edwiser inválida.';
$string['invalidzip'] = 'Archivo ZIP inválido. <b>{$a}</b>';
$string['knowmore'] = 'Sepa Más';
$string['last24hoursusage'] = 'Uso de últimas 24 horas';
$string['livestatusrefreshrate'] = 'Tasa de refresco';
$string['livestatusrefreshrate_help'] = 'Tasa de refresco para pestaña de estatus en vivo en segundos';
$string['livestatusrefreshrate_invalid'] = 'Por favor proporcione tasa de refresco válida en segundos';
$string['liveusage'] = 'Uso en vivo';
$string['liveusers'] = 'Usuarios en vivo';
$string['low'] = 'Bajo';
$string['lowusage'] = 'Bajo uso';
$string['memory'] = 'Memoria';
$string['memorycommandnotallowed'] = 'Línea de comandos <strong>libre</strong> --Permiso Denegado.';
$string['memoryhigherlimit'] = 'Límite superior de memoria';
$string['memoryhigherlimit_help'] = 'Límite superior de uso de memoria';
$string['memorylimit_invalid'] = 'Por favor proporcione un límite válido de memoria';
$string['memorylimit_overlap'] = 'Por favor proporcione un límite válido de memoria. El límite superior no puede ser igual o menor al límite inferior';
$string['memorylowerlimit'] = 'Límite inferior de memoria';
$string['memorylowerlimit_help'] = 'Límite inferior de uso de memoria';
$string['memoryusage'] = 'Uso de memoria';
$string['messageprovider:notifications'] = 'Novedades y Actualizaciones Edwiser';
$string['moderateusage'] = 'Uso moderado';
$string['news'] = 'Novedades y Actualizaciones Edwiser';
$string['noupdates'] = 'Todo está actualizado';
$string['otherplugins'] = 'Otros Plugins';
$string['pluginname'] = 'Monitor de Sitio Edwiser';
$string['policy'] = 'Estoy de acuerdo con la  <a href="{$a}" target="_blank">Política de Privacidad</a>';
$string['privacy:metadata'] = 'el bloque de monitor del sitio muestra información acerca del servidor.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Uso de CPU del sitio cuando es grabado.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Uso de memoria del sitio cuando es grabado.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Uso de almacenamiento del sitio cuando es grabado.';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Almacena el uso de CPU,memoria y almacenamiento del sitio.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Hora de cuando el uso es grabado.';
$string['recommendation'] = 'Plugins Recomendados';
$string['requirehigherversion'] = 'Requiere Moodle versión: <b>{$a}</b>';
$string['storage'] = 'Almacenamiento';
$string['storagehigherlimit'] = 'Límite superior de almacenamiento';
$string['storagehigherlimit_help'] = 'Límite superior de uso de almacenamiento';
$string['storagelimit_invalid'] = 'Por favor proporcione un límite de almacenamiento válido';
$string['storagelimit_overlap'] = 'Por favor proporcione un límite de almacenamiento válido. El límite superior no puede ser igual o menor al límite inferior.';
$string['storagelowerlimit'] = 'Límite inferior de almacenamiento';
$string['storagelowerlimit_help'] = 'Límite inferior de uso de almacenamiento';
$string['storageusage'] = 'Uso de almacenamiento';
$string['suspendedusers'] = 'Suspendido';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hola {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Gracias por ponerse  en contacto con nosotros.<br><br> Nuestro equipo de soporte se pondrá en contacto con Usted en las proximas 24 horas.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Este es un Email autogenerado. Para cualquier dudo o consulta adicional puede ponerse en contacto con nosostros en {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['thankssubject'] = 'Gracias por ponerse en contacto connosostros.';
$string['thresholdheader'] = 'Límite del umbral';
$string['today'] = 'Hoy';
$string['unabletoloadplugindetails'] = 'No se pueden cargar detalles del plugin <b>{$a}</b>';
$string['unabletounzip'] = 'No se puede descomprimir <b>{$a}</b>';
$string['usageemailsubject'] = '{$a}: Monitor de Sitio Edwiser - Advertencia de Uso';
$string['users'] = 'Usuarios';
$string['xaxistitle'] = 'Hora';
$string['yaxistitle'] = 'Uso (%)';
