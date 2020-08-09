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
 * Strings for component 'tool_capexplorer', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_capexplorer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assigned'] = 'Asignado';
$string['autoassign'] = 'Asignado automáticamente';
$string['autoassignment'] = 'Asignación automática';
$string['autoassignment_help'] = 'Algunos roles pueden asignarse automáticamente a usuarios en el contexto del sistema. Los roles pueden configurarse desde Administración del sitio > Usuarios > Permisos > Políticas de Usuarios';
$string['capability'] = 'Capacidad';
$string['capability_help'] = '<p>Seleccione una capacidad a revisar.</p><p>Este campo usa  autocompletar, por lo que una vez que Usted empiece a escribir el nombre de una capacidad, entonces podrá seleccionarla de entre las opciones que aparezcan.</p>';
$string['capabilityplaceholder'] = 'Escriba una capacidad';
$string['capdenied'] = 'Falso (Negada)';
$string['capexplorerresult'] = 'Resultado global';
$string['capexplorersummary'] = '<p>El Explorador de Capacidad es una herramienta para ayudarle a explicar como funciona el sistema de capacidades de Moodle. Envíe el formato inferior para obtener una explicación de como es que se calcula la revisión de capacidad.</p>';
$string['capexplorer:view'] = 'Ver explorador de capacidad';
$string['capgranted'] = 'Cierta (Otorgada)';
$string['change'] = 'Cambiar';
$string['combineusingcontextaggregation'] = '<p>Combine los permisos individuales usando reglas para agregación en contexto {$a} para obtener un conjunto de totales del rol.</p>';
$string['context'] = 'Contexto';
$string['contextaggrrules'] = 'Reglas de agregación en contexto';
$string['contextaggrrules_help'] = '<p>Para determinar el total del rol para un rol en particular, agregue los permisos de cada contexto usando las reglas inferiores:</p>
<ol>
<li>Si "Prohibir" aparece en cualquier contexto, el total del rol es "Prohibir".</li>
<li>Si todos los contextos tienen el permiso "No configurado", el total del rol es "No configurado".</li>
<li>En otros casos, el total del rol es el mismo del permiso más específico que está configurado (por ejemplo, el permitir o prevenir que esté más cercano al contexto en el cual se está revisando la capacidad).</li>
</ol>';
$string['context_help'] = '<p>Usted debe proporcionar una <em>instancia del contexto</em> en contra de la cual se revisa la capacidad. El árbol muestra la jerarquía de todas las instancias de contexto en su sitio.</p>
<p>Expanda los nodos al hacer click en  la flecha para ver contextos hijos más específicos. Seleccione una instancia al hacer click en su nombre.</p>
<p>Los íconos representan el <em>nivel del contexto</em> de cada instancia:</p>
<p>
<div class="capexplorer-tree-label capexplorer-tree-system">Contexto de Sistema (Sitio)</div>
<div class="capexplorer-tree-label capexplorer-tree-user">Contexto de usuario</div>
<div class="capexplorer-tree-label capexplorer-tree-category">Contexto de categoría</div>
<div class="capexplorer-tree-label capexplorer-tree-course">Contexto de curso</div>
<div class="capexplorer-tree-label capexplorer-tree-module">Contexto de módulo</div>
<div class="capexplorer-tree-label capexplorer-tree-block">Contexto de bloque</div>
</p>';
$string['contextinfo'] = '{$a->contextstring} (contexto {$a->contextlevel})';
$string['contextlevel'] = 'Nivel de contexto';
$string['error:invalidcapability'] = 'No hay capacidad que se llame "{$a}"';
$string['error:invalidcontext'] = 'Usted debe seleccionar una instancia de contexto';
$string['error:invalidusername'] = 'No hay un usuario con el nombre_de_usuario de "{$a}"';
$string['error:missingcapability'] = 'Usted debe escribir una capacidad';
$string['error:missingusername'] = 'Usted debe escribir un nombre_de_usuario';
$string['exploreanother'] = '&laquo; Explorar otra capacidad';
$string['finalresultsummary'] = '<p>Finalmente, combinar los totales del rol usando las reglas de agregación de rol {$a} para obtener el resultado global.</p>';
$string['guestaccessblocked'] = '<p>Nota: Como una medida de seguridad adicional, Moodle impide que a los usuarios sin privilegios se les otorguen capacidades "riesgosas". La capacidad "{$a->capability}" es considerada riesgosa porque podría ser usada para editar o quitar datos, modificar la configuración del sitio, o añadir \'\'scripts\'\' potencialmente maliciosos dentro de las páginas del sitio. Los resultados inferiores muestran como se calcularían sus accesos si la capacidad no fuera considerada riesgosa.</p>';
$string['instancename'] = 'Nombre de la instancia';
$string['manualassign'] = 'Asignada manualmente';
$string['manualassignment'] = 'Asignación manual';
$string['manualassignment_help'] = 'Roles asignados directamente a un usuario específico, por ejemplo, mediante \'Asignar roles del sistema\', o mediante inscripciones a curso.';
$string['none'] = 'Nada/ninguna';
$string['nopermtoassign'] = 'Sin permiso';
$string['nopermtoassign_help'] = '<p>No todos los usuarios tienen permiso para asignarles roles a otros usuarios. La habilidad para asignar roles es dependiente de sus propios roles y puede controlarse aquí:</p><p><em>Administración del sitio > Usuarios > Permisos > Definir roles > Permitir asignaciones de rol</em></p><p>Además, el usuario debe tener la capacidad "moodle/role:assign" en el contexto en donde se está haciendo la asignación del rol.</p><p>Los administradores del sitio pueden asignar todos los roles.</p>';
$string['nopermtoautoassign'] = 'Sin permiso';
$string['nopermtoautoassign_help'] = 'No todos los usuarios tienen permiso para cambiar roles asignados automáticamente. La habilidad para configurar estas políticas de usuario está controlada por la capacidad "moodle/site:config" en el contexto de sistema.';
$string['nopermtodefinerole'] = 'Sin permiso';
$string['nopermtodefinerole_help'] = 'La habilidad para definir permisos de rol requiere de la capacidad "moodle/role:manage" en el contexto de sistema. Los usuarios con permiso pueden controlar aquí las definiciones del rol:</p><p><em>Administradores del sitio &gt; Usuarios &gt; Permisos &gt; Definir roles </p><p>El usuario actual no tiene este permiso, por lo que no puede cambiar definiciones de roles.</p>';
$string['nopermtooverride'] = 'Sin permiso';
$string['nopermtooverride_help'] = 'No todos los usuarios tienen permiso para anular roles. La habilidad para  anular roles es dependiente de sus propios roles y puede controlarse aquí:</p><p><em>Administración del sitio &gt; Usuarios &gt; Permisos &gt; Definir roles &gt; Permitir anulaciones de roles</em></p><p>Además, el usuario debe tener la capacidad "moodle/role:override" o "moodle/role:safeoverride" en el contexto en donde tiene lugar la anulación.</p><p>Los administradores del sitio pueden anular a todos los roles.</p>';
$string['notassignable'] = 'No asignable';
$string['notassignable_help'] = '<p>Cada rol define los niveles de contexto en donde puede asignarse dicho rol.</p><p>Esto puede personalizarse al cambiar la configuración para "Tipos de contexto en donde puede ser asignado este rol" en la definición del rol:</p><p><em>Administración del sitio > Usuarios > Permisos > Definir Roles > [Nombre del rol] > Editar</em>.</p>';
$string['notassigned'] = 'No asignada';
$string['notoverridable'] = 'No anulable';
$string['notoverridable_help'] = '<p>Cada capacidad define un nivel de contexto, el cual es el nivel más inferior en donde el contexto será revisado. Debajo de este nivel, la capacidad no está disponible para anulación, dado que la anulación no tendría efecto.</p><p>Esto impide que las capacidades que son claramente  no-aplicables a contextos más específicos atiborren la página de anulación.</p><p>En este caso, la capacidad que se está revisando ha especificado un nivel de contexto más elevado, por lo que no es posible anular esta capacidad en este nivel.</p>';
$string['overallresult'] = 'Resultado global';
$string['parentcontexts'] = 'Contextos paternos';
$string['parentcontexts_help'] = '<p>Debido a la naturaleza jerárquica del sistema de permisos, las asignaciones en cualquier contexto paterno pueden impactar una revisión de capacidad en un contexto hijo. Por lo tanto, el primer paso es determinar todos los contextos entre el nivel de sistema y el contexto que se está revisando.</p>';
$string['parentcontextssummary'] = '<p>Determinar todos los niveles de contextos entre el nivel de sistema y el contexto que está siendo revisado.</p>';
$string['permission'] = 'Permiso';
$string['permissionallow'] = 'Permitir';
$string['permissioninherit'] = 'Heredar';
$string['permissionnotset'] = 'No configurado';
$string['permissionprevent'] = 'Prevenir';
$string['permissionprohibit'] = 'Prohibir';
$string['permissionunknown'] = 'Desconocido';
$string['pluginname'] = 'Explorador de capacidad';
$string['result'] = 'Resultado';
$string['resultdiffersfromaccesslib'] = '<p>¡Los resultados calculados por esta herramienta no coinciden con los resultados del código del núcleo de Moodle!</p><p>Usted podría intentar <a href="{$a->cacheurl}">borrar su caché</a> pero si esto no ayuda, entonces probablemente haya un problema (\'\'bug\'\') en el Explorador de Capacidad. Por favor, <a href="{$a->bugurl}">infórmenos al respecto</a> y si puede, incluya una imagen de pantalla de esta página para ayudarnos a investigar el problema.</p>';
$string['role'] = 'Rol';
$string['roleaggrrules'] = 'Reglas de agregación del rol';
$string['roleaggrrules_help'] = '<p>Para determinar el resultado global, agregue los permisos de todos los totales del rol usando las reglas inferiores:</p>
<ol>
<li>Si "Prohibir" aparece en cualquier total de rol, el resultado global es "Negado".</li>
<li>De otra forma, si cualquiera de los totales de rol es "Permitir" el resultado global es "Otorgado".</li>
<li>Si ninguno de los totales del rol es "Permitir", el resultado global es "Negado".</li>
</ol>';
$string['roleassignmentsforuserx'] = '<p>Debajo están los roles que tienen asignaciones para "{$a}" en cualquiera de los contextos enlistados arriba:</p>';
$string['roleassignmentsummary'] = '<p>Determinar cuales roles están asignados al usuario en cualquiera de los contextos paternos. Solamente los roles asignados en uno de los contextos paternos contribuyen al resultado final.</p>';
$string['rolepermissionsandoverridesforcapx'] = '<p>Todos los permisos de rol y anulaciones para la capacidad "{$a}"</p>';
$string['rolepermissionsummary'] = '<p>Para cada rol asignado, enlistar los permisos de la definición del rol para el contexto de sistema. También enlistar cualquier anulaciones de rol en cualquiera de los contextos paternos.</p>';
$string['roletotal'] = 'Total del rol';
$string['roletotals'] = 'Totales del rol';
$string['step1'] = 'Paso 1: Contextos paternos';
$string['step2'] = 'Paso 2: Asignaciones de roles';
$string['step3'] = 'Paso 3: Permisos de roles y anulaciones';
$string['step4'] = 'Paso 4: Agregar entre contextos';
$string['step5'] = 'Paso 5: Agregar entre roles';
$string['systemcontext'] = 'Contexto Sistema (Sitio)';
$string['user'] = 'Usuario';
$string['usercontext'] = 'Contexto del usuario';
$string['userisadmin'] = '<p>Nota: "{$a->user}" es un <a href="{$a->url}">administrador del sitio</a>, y como tal, automáticamente se le otorgan todas las capacidades. Los resultados de abajo muestran como podrían calcularse sus accesos sin los privilegios de administrador del sitio.</p>';
$string['username'] = 'Nobre_de_usuario';
$string['username_help'] = '<p>Seleccione un usuario a revisar.</p><p>Esta campo usa autocompletar, por lo que al empezar a escribir un nombre_de_usuario, direción Email o Nombre-del-Usuario, aparecerán opciones entre las que podrá elegir.</p>';
$string['usernameplaceholder'] = 'Escriba nombre, nombre_de_usuario o Email';
$string['xfrontpage'] = '{$a} (Portada)';
