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
 * Strings for component 'virtualpc', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   virtualpc
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutuds'] = '<center><a href="{$a->umaurl}" target=_blank><img src="{$a->umalogo}"/></a></center><br />La <a href="{$a->umaurl}" target=_blank>Universidad de Málaga</a> ha desarrollado el módulo Virtual PC de código abierto, integrando Moodle y UDS. Esta integración está diseñada para simplificar el acceso a escritorios remotos desde Moodle, proporcionando un único inicio de sesión entre los dos sistemas, con una fácil creación y administración de actividades, que permiten el acceso a diferentes tipos de maquinas virtuales.<br /> <br /><em><a href="{$a->udsurl}" target=_blank> UDS</a></em> es un \'broker\' de conexiones a máquinas virtuales multiplataforma para:<br /> <ul><li>eAprendizaje (eLearning)<br /> <li>VDI: Administración y despliegue escritorios virtuales Windows y Linux<br /> <li>Gestión del acceso de usuarios a recursos de Tecnologías de la Información en Centro de Datos o en La Nube (Cloud)<br /> <li>Consolidación de servicios del usuario mediante módulos nuevos o existentes</ul><br> <p>UDS Enterprise se emplea en diferentes sectores y entornos de producción como educación, administración pública, \'call center\', seguros, oficinas remotas, etc.</p> <p>Más de 10.000 escritorios virtuales Windows y Linux son gestionados y desplegados con UDS Enterprise cada día, dotando de sencillez y flexibilidad a los sistemas VDI de distintas empresas y entidades.</p> <p>Visite <a href="{$a->udsurl}" target=_blank>{$a->udsurl}</a> para obtener información sobre soporte para empresas.<br />';
$string['authsmallnameforactivity'] = 'Etiqueta&nbsp;del&nbsp;autenticador&nbsp;UDS para acceso a los PCs virtuales';
$string['authsmallnameforadmin'] = 'Etiqueta&nbsp;del&nbsp;autenticador&nbsp;UDS del usuario&nbsp;administrador';
$string['configauthsmallnameforactivity'] = 'Etiqueta del autenticador UDS que se usará para crear a los usuarios en UDS que accedan desde Moodle y se conecten a la PC virtual';
$string['configauthsmallnameforadmin'] = 'Etiqueta del autenticador UDS al que pertenece el usuario administrador indicado en el campo anterior';
$string['configfiltropool'] = 'Establece un filtro mediante una expresión regular sobre el listado de nombres de lotes (pools) a ofrecer en este centro. Por ejemplo: Introduzca "^CAV_", sin las comillas, para ofrecer unicamente aquellos pools de servicios que comiencen por CAV_';
$string['configgroupname'] = 'Nombre del grupo que se creará en el anterior autenticador de UDS para permitir el acceso desde Moodle';
$string['configpassword'] = 'Contraseña del usuario UDS con permisos de administrador';
$string['configport'] = 'Puerto para peticiones REST';
$string['configurl'] = 'URL del servidor UDS para peticiones REST (http://hostname)';
$string['configusername'] = 'Usuario UDS con permisos de administrador que utilizará este módulo para interactuar con UDS en tiempo real';
$string['courseorinstanceid'] = 'Usted debe especificar una ID de course_module o ID de una instancia';
$string['errorconnection'] = 'Error de conexión al servidor de PCs Virtuales: <em><a href="{$a->url}" target=_blank>UDS</a></em>. <br/ >Vuelva a acceder a la actividad y si el error persiste póngase en contacto con el administrador de Moodle.';
$string['eventvirtualpcjoined'] = 'PC Virtual unida';
$string['filtropool'] = 'Filtro en nombres pool de servicios';
$string['groupname'] = 'Nombre del grupo';
$string['idpoolnotfound'] = 'PC Virtual del tipo "{$a->poolname}" no encontrada en el servidor UDS . Contacte al administrador de Moodle.';
$string['incorrectcourseid'] = 'La ID del Módulo del Curso era incorrecta';
$string['incorrectcoursemodule'] = 'Módulo del curso es incorrecto';
$string['joinvirtualpc'] = 'Acceder al PC Virtual';
$string['maxusers'] = 'Hasta {$a} usuarios a la vez';
$string['misconfiguredcourse'] = 'El curso está mal configurado';
$string['modifiable'] = 'El profesor podrá cambiar el PC virtual seleccionado';
$string['modulename'] = 'PC Virtual';
$string['modulename_help'] = 'PC Virtual ofrece al participante un equipo con el sistema operativo y aplicaciones ya instaladas seleccionadas por el profesor.</p><p>El módulo ha sido desarrollado por la <a href="http://www.uma.es" target="_blank">Universidad de Málaga</a></p></div>';
$string['modulenameplural'] = 'PCs Virtuales';
$string['password'] = 'Contraseña del usuario UDS administrador';
$string['pluginadministration'] = 'Administración PC Virtual';
$string['pluginname'] = 'PC Virtual';
$string['poollabel'] = '<div style="color:orange">Seleccione el tipo de PC Virtual:</div>';
$string['poollabel_help'] = 'Seleccione un <b>tipo de PC virtual</b> del listado. Puede que contengan algun comentario que facilite su elección. Tenga en cuenta el número máximo de personas que podrán acceder simultáneamente.';
$string['port'] = 'Número del puerto del servidor UDS';
$string['url'] = 'URL del servidor UDS';
$string['username'] = 'Usuario UDS administrador';
$string['usernotenrolled'] = 'Usuario no tiene permisos, "virtualpc:join" consulte con el administrador de Moodle.';
$string['viewpermission'] = 'Usted debe tener permiso para VER este recurso';
$string['virtualpc'] = 'PC Virtual';
$string['virtualpc:addinstance'] = 'Añadir actividades virtualpc (PCs Virtuales)';
$string['virtualpcerrorcreatingticketid'] = '{$a->username} no puede acceder a <b>{$a->poolname}</b>. Inténtelo nuevamente más tarde y, si persiste el problema, por favor contacte al administrador del módulo.';
$string['virtualpcfieldset'] = 'Configuraciones de actividad PC';
$string['virtualpchelp'] = 'Tras pulsar en el botón "Acceder al PC Virtual" puede aparecer un mensaje para descargar un programa necesario para acceder al PC Virtual, solo la primera vez. La dirección de descarga directa es {$a}';
$string['virtualpcintro'] = '<b>Descripción:</b>';
$string['virtualpc:join'] = 'Acceder a PC Virtual';
$string['virtualpcname'] = 'Título de la actividad';
$string['virtualpcname_help'] = 'Introduzca el título de la actividad PC Virtual';
$string['virtualpcnotfound'] = 'No existe ningún PC virtual con este nombre en el servidor UDS';
$string['virtualpcresterror'] = 'En estos momentos no se puede mostrar la actividad. Inténtelo más adelante; si el error continúa, póngase en contacto el administrador de Moodle indicando el siguiente error: Error en la petición REST: {$a}';
$string['virtualpc:view'] = 'Ver Actividad PC Virtual';
