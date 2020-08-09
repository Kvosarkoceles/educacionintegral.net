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
 * Strings for component 'local_contact', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   local_contact
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configurar este plugin';
$string['confirmationemail'] = '<p>Estimado/a [fromname],</p>
<p>Gracias por contactarnos. Si lo necesita, nosotros lo contactaremos muy pronto.</p>
<p>Saludos,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Gracias por contactarnos. Si lo necesita, nosotros lo contactaremos muy pronto.';
$string['confirmationsent'] = 'Se ha enviado un Email a su dirección en {$a}.';
$string['defaultsubject'] = 'Mensaje nuevo';
$string['errorsending'] = 'Ocurrió un error al enviar el mensaje. Por favor inténtelo nuevamente después.';
$string['errorsendingtitle'] = 'No se pudo enviar Email';
$string['extrainfo'] = '<hr>
<p><strong>Información Adicional del Usuario</strong></p>
<ul>
<li><strong>Usuario del sitio:</strong> [userstatus]</li>
<li><strong>Idioma preferido:</strong> [lang]</li>
<li><strong>Desde la dirección IP:</strong> [userip]</li>
<li><strong>Navegador Web :</strong> [http_user_agent]</li>
<li><strong>Formato Web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'Email';
$string['field-message'] = 'mensaje';
$string['field-name'] = 'nombre';
$string['field-subject'] = 'asunto';
$string['forbidden'] = 'Prohibido';
$string['globalhelp'] = 'Formato de Contacto es un plugin para Moodle que permite que su sitio procese información enviada mediante formatos web HTML a la dirección Email de soporte del sitio.';
$string['lockedout'] = 'EXPULSADO';
$string['loginrequired'] = 'Ingreso al sitio necesario';
$string['loginrequired_description'] = 'Solamente permitir que los usuarios ingresados al sitio envíen fromatos de contacto. Los invitados no se considera que hayan ingresado en el sitio.';
$string['norecaptcha'] = 'No ReCAPTCHA';
$string['norecaptcha_description'] = 'No usar ReCAPTCHA con formatos procesados por el Formato de Contacto';
$string['nosubjectsitename'] = 'Nombre del sitio en el campo de asunto del Email';
$string['nosubjectsitename_description'] = 'No incluir el nombre del sitio en el campo de asunto del Email.';
$string['notconfirmed'] = 'NO CONFIRMADO';
$string['pluginname'] = 'Formato de contacto';
$string['privacy:metadata'] = 'El plugin Formato de Contacto no almacena ningún dato personal.';
$string['recapchainfo'] = 'Usando ReCAPTCHA';
$string['recapchainfo_description'] = 'ReCAPTCHA está actualmente habilitado en Moodle. Usted <strong>debe de</strong>:<br>
<ul>
<li>Asegurarse de que la marca {recaptcha} esté incluida en todos los formatos procesados por Formato de Contacto para Moodle.</li>
<li>Asegurarse de que el <a href="https://moodle.org/plugins/filter_filtercodes">plugin FilterCodes</a> esté instalado y habilitado.</li>
</ul>';
$string['recipient_list'] = 'Lista de destinatarios disponibles';
$string['recipient_list_description'] = 'Usted puede configurar aquí una lista de destinatarios potenciales, cualquiera de los cuales puede ser usado en un Formato de Contacto para especificar el destinatario del Email usando un campo de texto oculto, o en una selección de una lista de opciones desplegables sin divulgar la dirección Eemail real del destinatario. Si la lista estuviera vacía, se pueden enviar Emails a la dirección email de Moodle, ya sea a la dirección Email de soporte o a la del administrador primario.
Cada línea debe consistir dee una etiqueta/alias única, una sola dirección Email y un nombre, cada uno separado por un caracteer de barra vertical |. Por ejemplo:
<pre>
soporte técnico|support@example.com|José Arreglatodo
webmaster|admin@example.com|Mr. Moodle
electricistal|nikola.tesla@example.com|Nikola
historia|charles.darwin@example.com|Mr. Darwin
leyes|issac.newton@example.com|Isaac Newton
matemáticas|galileo.galilei@example.com|Galileo
inglés|mark.twain@example.com|Mark Twain
física|albert.einstein@example.com|Albert
ciencias|thomas.edison@example.com|Mr. Edison
filosofía|aristotle@example.com|Aristóteles
</pre>';
