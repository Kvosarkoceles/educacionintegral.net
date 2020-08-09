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
 * Strings for component 'ouwiki', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   ouwiki
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionheading'] = 'Acciones';
$string['add'] = 'Añadir';
$string['addannotation'] = 'Añadir anotación';
$string['addedbegins'] = '[Sigue texto añadido]';
$string['addedends'] = '[Fin de texto añadido]';
$string['addnewsection'] = 'Añadir nueva sección a esta página';
$string['addnewsection1'] = 'Añadir nueva sección';
$string['advice_annotate'] = '<p>Hacer anotaciones en la página inferior, luego elegir <strong>Guardar cambios</strong>.</p> <ul> <li>Para hacer anotaciones elija uno de los marcadores de anotaciones y escriba el texto necesario.</li> <li>Las anotaciones nuevas y existentes pueden borrarse quitando  todo el texto en el formato inferior.</li> <li>El número entre paréntesis se refiere a las anotacionesT.</li> </ul>';
$string['advice_diff'] = 'La versión anterior se muestra a la izquierda<span class=\'accesshide\'>  debajo del encabezado \'Versión Anterior\'</span>, en donde el texto borrado aparece resaltado. El texto añadido se indica en la nueva versión a la derecha<span class=\'accesshide\'> under the heading Newer version</span>.<span class=\'accesshide\'> Cada cambio está indicado por un par de imágenes de antes y después el texto añadido o borrado, con texto alternativo apropiado.</span>';
$string['advice_edit'] = '<p>Editar la página inferior.</p> <ul> <li>Haga un enlace hacia otra página escribiendo el nombre de la página dentro de paréntesis cuadrados dobles: [[nombre de página]]. El enlace se volverá activo una vez que guarde los cambios.</li> <li>Para crear una página nueva, primero haga un enlace hacia ella de la misma forma. {$a}</li> </ul>';
$string['advice_history'] = '<p>La tabla debajo muestra todos los cambios que se han hecho a <a href="{$a}">la página actual</a>.</p> <p>Usted puede ver las versiones antiguas o ver que cambió en una versión en particular. Si desea comparar dos versiones cualquiera, seleccione las casillas relevantes y elija \'Comparar seleccionadas\'.</p>';
$string['advice_missingpage'] = 'La página está enlazada a, pero no ha sido creada.';
$string['advice_missingpages'] = 'La página está enlazada a, pero aún no ha sido creada.';
$string['advice_viewdeleted'] = 'Usted está viendo una versión borrada de esta página';
$string['advice_viewold'] = 'Usted está viendo una versión antigua de esta página';
$string['advice_wikirecentchanges_changes'] = '<p>La tabla debajo enlista todos los cambios a cualquier página en este wiki, empezando con los más recientes. La versiòn más reciente de cada página está resaltada.</p> <p>Usando los enlaces Usted puede ver una página tal como se veía después de un cambio en particular, o ver qué cambió en ese momento.</p>';
$string['advice_wikirecentchanges_changes_nohighlight'] = '<p>La tabla debajo enlista todos los cambios a cualquier página en este wiki, empezando con los más recientes.</p> <p>Usando los enlaces Usted puede ver una página tal como se veía después de un cambio en particular, o ver qué cambió en ese momento.</p>';
$string['advice_wikirecentchanges_pages'] = '<p>La tabla debajo muestra cuando se añadió cada página a este wiki, empezando con la más recientemente creada.</p>';
$string['ajaxnotenabled'] = 'AJAX no está habilitado en su perfil.';
$string['allowediting_help'] = '<p> Si Usted habilita esta opción, el wiki cambia a un modo de solo-lectura, hasta la fecha especificada. En el modo de solo-lectura, los usuarios pueden ver las páginas, navegar en  ellas, ver la historia, y participar en discusiones, pero no pueden editar páginas</p>

<h2>Prevenir editar desde</h2>

<p>
Si habilita esta opción, el wiki entra en modo de sólo-lectura desde le fecha especificada en adelante.
</p>';
$string['allowimport'] = 'Enlace hacia páginas de importación';
$string['allowimport_help'] = 'Al activar esta casilla se añadirá la habilidad para \'importar\' páginas de otros wikis en el curso hacia el wiki actual:';
$string['annotate'] = 'Hacer anotaciones';
$string['annotatingpage'] = 'Página de anotaciones';
$string['annotationmarker'] = 'Marcador de anotaciones';
$string['annotations'] = 'Anotaciones';
$string['annotationsystem'] = 'Sistema de anotación';
$string['annotationsystem_help'] = 'Habilita la pestaña de anotaciones,  para usuarios con los permisos apropiados.

Con esta pestaña Usted puede añadir anotaciones incorporadas a las páginas wiki (por ejemplo: comentarios del profesor en trbajos de estudiantes).';
$string['attachments'] = 'Anexos';
$string['brokenimage'] = '<span class="imgremoved"> Imagen faltante, no incluída en plantilla. </span>';
$string['cancel'] = 'Cancelar';
$string['cannotlockpage'] = 'La página no se pudo bloquear, sus cambios no fueron guardados.';
$string['changebutton'] = 'Cambio';
$string['changedby'] = 'Cambiado por';
$string['changedifferences'] = 'Diferencias cambiadas';
$string['changes'] = 'cambios';
$string['changesnav'] = 'Cambios';
$string['collapseallannotations'] = 'Colapsar anotaciones';
$string['collapseannotation'] = 'Colapsar anotación';
$string['compare'] = 'Comparar';
$string['compareselected'] = 'Comparar seleccionadas';
$string['completionedits'] = 'El usuario debe hacer ediciones:';
$string['completioneditsgroup'] = 'Ediciones requeridas';
$string['completioneditshelp'] = 'requiere ediciones para completar';
$string['completion_help'] = '<ul>
<li>
Si elige "Requerir páginas nuevas" entonces el wiki será marcado como completo para un usuario una vez que haya creado el número de páginas especificado. Con esta opción, los usuarios tienen que crear páginas desde cero; si alguien más crea la página y el usuario la edita, no cuenta </li>


<li>
Si elige "Requerir ediciones", entonces el wiki será marcado como completo para un usuario en cuanto haga un cierto número de ediciones. El usuario podría estar editando muchas páginas, o editar la página muchas veces; ambas cuentan igual. </li>
</ul>

<p>
Observe que escribir la primera versión de una página también cuenta como una edición, por lo que si Usted quiere que alguien haga una página  <i>y</i> que realice al menos una edición diferente, configure páginas a 1 y ediciones a 2. </p>';
$string['completionpages'] = 'El usuario debe crear páginas nuevas:';
$string['completionpagesgroup'] = 'Requiere páginas nuevas';
$string['completionpageshelp'] = 'requiriendo páginas nuevas para completar';
$string['contributions'] = '<strong>{$a->pages}</strong> página nueva{$a->pagesplural}, <strong>{$a->changes}</strong> otro cambio{$a->changesplural}.';
$string['contributionsbyuser'] = 'Contribuciones del usuario';
$string['contributionsgrouplabel'] = 'Grupo';
$string['countdowntext'] = 'Este wiki solamente permite  {$a} minutos para editar. Haga sus cambios y elija Guardar o Cancelar antes de que el tiempo restante (a la derecha) llegue a cero.';
$string['countdownurgent'] = 'Por favor termine o cancele su edición ahora. Si no guarda antes de que se agote el tiempo, sus cambios no serán guardados automáticamente.';
$string['create'] = 'Crear';
$string['createdbyon'] = 'creado por {$a->name} en {$a->date}';
$string['createlinkedwiki'] = 'Creando una página nueva';
$string['createlinkedwiki_help'] = 'Mientras edite, Usted puede escribir un enlace hacia una página que aún no existe, como por ejemplo [[Ranas]]. TDespués guarde esta página y elija el enlace de  ‘Ranas’ para crear la página nueva.

También es posible crear páginas nuevas desde la pestaña de  ‘Ver’ tab usando la caja de  ‘Crear página nueva’.';
$string['createnewpage'] = 'Crear página nueva';
$string['createpage'] = 'Crear página';
$string['csvdownload'] = 'Descargar en formato de hoja de cálculo (UTF-8 .csv)';
$string['current'] = 'actual';
$string['currentversion'] = 'Versión actual';
$string['currentversionof'] = 'Versión actual de';
$string['deletedbegins'] = '[Sigue el texto borrado]';
$string['deletedends'] = '[Termina el texto borrado]';
$string['deleteorphanedannotations'] = 'Borrar anotaciones perdidas';
$string['deleteversionerror'] = 'Error al borrar versión de página';
$string['deleteversionerrorversion'] = 'No se puede borrar versión de página inexistente';
$string['detail'] = 'detalle';
$string['diff_nochanges'] = 'Esta edición no le hizo cambios al texto actual, por lo que no se destacan diferencias debajo. Pudieran haber cambios en apariencia.';
$string['diff_someannotations'] = 'Esta edición no le hizo cambios al texto actual, por lo que no se destacan diferencias debajo; sin embargo, pudieron haber cambiado las anotaciones. Tambén pudieran haber cambios en apariencia.';
$string['displayversion'] = 'OU wiki versión: <strong>{$a}</strong>';
$string['downloadcsv'] = 'Archivo de texto de valores separados por comas';
$string['downloadspreadsheet'] = 'Descargar como hoja de cálculo';
$string['duplicatepagetitle'] = 'El título de la página nueva no puede ser el mismo de alguna de las páginas existentes.';
$string['editbegin'] = 'Permitir editar a partir de';
$string['editbegin_help'] = '<p>Si habilita esta opción, el wiki entra en modo de solo-lectura hasta la fecha programada. En modo de solo-lectura, los usuarios pueden ver páginas, navegar entre ellas, ver la historia y participar en discusiones, pero no pueden editar páginas.</p>';
$string['editedby'] = 'Editada por {$a}';
$string['editend'] = 'Impedir editar a partir de';
$string['editend_help'] = 'Si habilita esta opción, el wiki entra en modo de solo-lectura desde la fecha programada en adelante.';
$string['editingpage'] = 'Editando página';
$string['editingsection'] = 'Editando sección: {$a}';
$string['editpage'] = 'Editar página';
$string['editsection'] = 'Editar sección';
$string['emptypagetitle'] = 'El título de la página nueva no puede estar vacío';
$string['emptysectiontitle'] = 'El nombre de la nueva sección no puede estar vacío';
$string['endannotation'] = 'Fin de anotación';
$string['entirewiki'] = 'El wiki completo';
$string['errorcoursesubwiki'] = 'Debe ser &lsquo;No grupos&rsquo; a menos que la opción de subgrupos sea &lsquo;Un wiki por grupo&rsquo;';
$string['error_export'] = 'Ocurrió un error al exportar datos del wiki.';
$string['errorgroupssubwiki'] = 'Debe estar habilitada cuando la opción de sub-wikis es &lsquo;Un wiki por grupo&rsquo;';
$string['error_nopermission'] = 'Usted no tiene permiso para ver el contenido de esta página';
$string['event:ouwikidelete'] = 'OUwiki eliminar versión';
$string['event:ouwikipagecreated'] = 'OUwiki página creada';
$string['event:ouwikipageupdated'] = 'OUwiki página actualizada';
$string['event:ouwikiundelete'] = 'OUwiki des-borrar versión';
$string['event:ouwikiviewed'] = 'OUwiki ver';
$string['event:pagelock'] = 'OUwiki bloquear';
$string['event:pageunlock'] = 'OUwiki des-bloquear';
$string['event:savefailed'] = 'Falla de sesión al guardar página';
$string['excelcsvdownload'] = 'Descargar en formato compatible con Excel (.csv)';
$string['expandallannotations'] = 'Expander anotaciones';
$string['expandannotation'] = 'Expander anotación';
$string['externaldashboardadd'] = 'Añadir wiki al tablero';
$string['externaldashboardremove'] = 'Remover wiki del tablero';
$string['feedalt'] = 'Suscribirse a canal Atom';
$string['feedchange'] = 'Cambiado por {$a->name} (<a href=\'{$a->url}\'>ver cambio</a>)';
$string['feeddescriptionchanges'] = 'Enlista todos los cambios hechos al wiki. Suscríbase a este canal si quiere ser actualizado cuando cambie el wiki.';
$string['feeddescriptionhistory'] = 'Enlista todos los cambios hechos a esta página individual del wiki. Suscríbase a este canal si quiere ser actualizado cuando alguien edite esta página.';
$string['feeddescriptionpages'] = 'Enlista todas las páginas nuevas del wiki. Suscríbase a este canal si quiere ser actualizado cuando alguien haga una nueva página.';
$string['feeditemdescriptiondate'] = '{$a->main} en {$a->date}.';
$string['feeditemdescriptionnodate'] = '{$a->main}.';
$string['feednewpage'] = 'Creada por {$a->name}';
$string['feedsubscribe'] = 'Usted se puede suscribir a un canal que contiene esta información: <a href=\'{$a->atom}\'>Atom</a> o <a href=\'{$a->rss}\'>RSS</a>.';
$string['feedtitle'] = '{$a->course} wiki: {$a->name} - {$a->subtitle}';
$string['format_html'] = 'Ver en línea';
$string['format_rtf'] = 'Descargar en formato de procesador de texto Word';
$string['format_template'] = 'Descargar como archivo de plantilla de wiki';
$string['frompage'] = 'de {$a}';
$string['frompages'] = 'de {$a}...';
$string['gradesupdated'] = 'Calificaciones actualizadas';
$string['hideannotationicons'] = 'Ocultar anotaciones';
$string['historycompareaccessibility'] = 'Seleccione {$a->lastdate} {$a->createdtime}';
$string['historyfor'] = 'Historia por';
$string['import'] = 'Importar páginas';
$string['import_confirm'] = 'Confirmar importación';
$string['import_confirm_conflicts'] = 'Conflictos en página';
$string['import_confirm_conflicts_instruct'] = 'Se han identificado \'conflictos\' en página en donde los nombres de página importada enlistados son los mismos de una página existente.';
$string['import_confirm_conflicts_label'] = 'Unir configuración';
$string['import_confirm_conflicts_locked'] = 'La página {$a} está bloqueada';
$string['import_confirm_conflicts_lockedwarn'] = 'Una página que será sobre-escrita esta actualmente bloqueada. Revise que Usted pueda editar esta página antes de intentarlo nuevamente.';
$string['import_confirm_conflicts_notlocked'] = 'Página no bloqueada';
$string['import_confirm_conflicts_option1'] = 'Unir contenido de página';
$string['import_confirm_conflicts_option2'] = 'Remplazar contenido existente de página';
$string['import_confirm_from'] = 'Importar desde';
$string['import_confirm_infoheader'] = 'Importar información';
$string['import_confirm_linkfrom'] = 'Añadir enlaces hacia nueva página a:';
$string['import_confirm_linkfrom_help'] = 'Seleccionar una página en la que los enlaces al nivel superior de las páginas nuevas serán añadidos.';
$string['import_confirm_linkfrom_newpage'] = 'Página nueva';
$string['import_confirm_linkfrom_startpage'] = 'Usar página de Inicio importada';
$string['import_confirm_linkfrom_startpage1'] = 'Unir con el contenido de la página de Inicio existente';
$string['import_confirm_linkfrom_startpage2'] = 'Crear página nueva desde la página de Inicio importada';
$string['import_confirm_linkheader'] = 'Enlaces a página';
$string['import_confirm_mergeheader'] = 'Conflictos de página';
$string['import_confirm_pages'] = 'Importar páginas';
$string['import_confirm_pages_help'] = 'Páginas que Usted seleccionó para importar, más cualquier página adicional enlazada desde éstas.';
$string['import_confirm_pages_none'] = 'No hay páginas seleccionadas para importar';
$string['importedfrom'] = 'Importada desde';
$string['importedpages'] = 'Páginas importadas';
$string['importedstartpage'] = 'Página de Inicio importada';
$string['import_lockedpage'] = 'Página bloqueada';
$string['import_nocontent'] = 'Esta actividad de wiki no tiene contenido disponible para importar.';
$string['import_process'] = 'Importando página';
$string['import_process_locked'] = 'Una página que va a tener su contenido importado está actualmente bloqueada, ya sea permanentemente para impedir que se edite, o temporalmente mientras otro usuario está editando el contenido.';
$string['import_process_startpage_locked'] = 'La página de Inicio que va a tener su contenido importado está actualmente bloqueada, ya sea permanentemente para impedir que se edite, o temporalmente mientras otro usuario está editando el contenido.';
$string['import_process_summary'] = 'Resumen';
$string['import_process_summary_imported'] = 'Páginas importadas';
$string['import_process_summary_success'] = 'La importación se completó exitosamente.';
$string['import_process_summary_updated'] = 'Páginas actualizadas';
$string['import_process_summary_warn'] = 'La importación se completó con advertencias.';
$string['import_selectsubwiki'] = 'Seleccionar wiki';
$string['import_selectsubwiki_help'] = 'Elija entre los wikis disponibles. Los wikis que no tengan ningun contenido no serán enlistados.';
$string['import_selectwiki'] = 'Importar desde {$a}';
$string['index'] = 'Índice del wiki';
$string['jsajaxrequired'] = 'Esta página de Anotaciones requiere que esté habilitado Javascript en su navegador y estén configurados AJAX y Javascript en su perfil de usuario en la parte de Características web avanzadas.';
$string['jsnotenabled'] = 'Javascript no está habilitado en su navegador.';
$string['lastchange'] = 'Último cambio: {$a->date} / {$a->userlink}';
$string['lastmodified'] = 'Última edición: {$a}';
$string['linkedfrom'] = 'Páginas que enlazan hacia esta';
$string['linkedfromsingle'] = 'Página que enlaza hacia esta';
$string['lockcancelled'] = 'Su bloqueo de edición ha sido anulado y alguien más está ahora editando esta página. Si desea conservar sus cambios, por favor seleccione y cópielos antes de elegir Cancelar; después intente editarla más tarde.';
$string['lockediting'] = 'Bloquear wiki - no ediciones';
$string['lockpage'] = 'Bloquear página';
$string['missingpages'] = 'Páginas faltantes';
$string['modulename'] = 'OU wiki';
$string['modulename_help'] = '<p>
Un wiki es un sistema basado en web que le permite a los usuarios editar un conjunto de páginas enlazadas. En Moodle, Usted normalmente emplearía un wiki cuando desea que sus estudiantes fabriquen contenidos.
</p>

<p>
El OU wiki tiene una variedad de opciones. Por favor vea la ayuda individual para cada item para mayor información.
</p>';
$string['modulenameplural'] = 'OU wikis';
$string['mustspecify2'] = 'Usted debe especificar exactamente dos versiones para compararlas.';
$string['myparticipation'] = 'Mi participación';
$string['newerversion'] = 'Versión más nueva';
$string['newpage'] = 'primera versión';
$string['next'] = 'Cambios más antiguos';
$string['nextversion'] = 'Siguiente: {$a}';
$string['noattachments'] = 'Sin anexos';
$string['nochanges'] = 'Usuarios que no hicieron contribuciones';
$string['nojsbrowser'] = 'Usted disculpe, pero está usando un  navegador que no es completamente soportado.';
$string['nojsdisabled'] = 'Usted ha deshabilitado Javascript en la configuració de su navegador.';
$string['nojswarning'] = 'Como resultado, solamente podemos aguantarle esta página por  {$a->minutes} minutos. or favor asegúrese de guardar sus cambios antes de {$a->deadline} (ahorita mismo estamos a {$a->now}). De otra manera, alguien más podría editar la página y los cambios de Usted se perderían';
$string['noparticipation'] = 'No hay participación que mostrar';
$string['note'] = 'Nota:';
$string['nousersingroup'] = 'El grupo elegido no contiene usuarios.';
$string['nowikipages'] = 'Este wiki no tiene páginas.';
$string['numedits'] = '{$a} ediciones';
$string['numwords'] = 'Palabras: {$a}';
$string['olderversion'] = 'Versión más antigua';
$string['oldversion'] = 'Versión antigua';
$string['onepageview'] = 'Usted pued ever todas las páginas de este wiki a la vez, para que seá más conveniente imprimirlas o conservarlas como referencia permanente.';
$string['orphanedannotations'] = 'Anotaciones perdidas';
$string['orphanpages'] = 'Páginas no enlazadas';
$string['ouwiki:addinstance'] = 'Añadir un nuevo OU wiki';
$string['ouwiki:annotate'] = 'Se permitió anotar';
$string['ouwiki:annotateothers'] = 'Anotar cualquier sub-wiki que pueda verse';
$string['ouwikicrontask'] = 'OUwiki trabajos de mantenimiento';
$string['ouwiki:deletepage'] = 'Borrar páginas de wiki';
$string['ouwiki:edit'] = 'Editar páginas de wiki';
$string['ouwiki:editothers'] = 'Editar el contenido de cualquier sub-wiki que pueda verse';
$string['ouwiki:grade'] = 'Calificar a usuarios que han entrado al wiki';
$string['ouwiki:lock'] = 'Se permite bloquear y desbloquear páginas';
$string['ouwiki:overridelock'] = 'Anular páginas bloqueadas';
$string['ouwiki:view'] = 'Ver wikis';
$string['ouwiki:viewallindividuals'] = 'Sub-wikis por usuario: verlos todos';
$string['ouwiki:viewcontributions'] = 'Ver lista de contribuciones organizada por usuario';
$string['ouwiki:viewgroupindividuals'] = 'Sub-wikis por usuario: ver al mismo grupo';
$string['ouwiki:viewparticipation'] = 'Ver participaciónn de todos los usuarios inscritos que tengan acceso al wiki';
$string['overridelock'] = 'Anular bloqueo';
$string['overviewnumentrysince'] = 'nuevas entradas al wiki desde la última visita';
$string['overviewnumentrysince1'] = 'nueva entrada al wiki desde la última visita';
$string['page'] = 'Página';
$string['pagecheckboxlabel'] = 'Importar página, {$a}';
$string['pagedeletedinfo'] = 'Algunas versiones borradas se muestran en la lista debajo. Estas son visibles solamente para los usuarios con permiso para borrar versiones. Los usuarios ordinarios no ven nada en absoluto.';
$string['pagedoesnotexist'] = 'Esta página aún no existe en el wiki.';
$string['pageedits'] = 'Ediciones de página';
$string['pagelockeddetails'] = '{$a->name} empezó a editar esta página en {$a->lockedat}, y la seguía editando para {$a->seenat}. Usted no puede editarla hasta que terminen.';
$string['pagelockeddetailsnojs'] = '{$a->name} empezó a editar esta página en {$a->lockedat}. Tienen hastal {$a->nojs} para editarla. Usted no puede editarla hasta que terminen.';
$string['pagelockedoverride'] = 'Usted tiene acceso especial para cancelarles la edición y desbloquear la página.
Si Usted hiciera esto, ¡todo lo que ellos hubieran escrito se perderá! Por favor piénse cuidadosamente antes de elegir el botón de Anular.';
$string['pagelockedtimeout'] = 'El tiempo para edición de ellos termina en {$a}.';
$string['pagelockedtitle'] = 'Esta página está siendo editada por alguien más.';
$string['pagenameisstartpage'] = 'El nombre de la página es igual al de la página de inicio. Use un nombre de página diferente.';
$string['pagenametoolong'] = 'El nombre de página es demasiado largo. Use un nombre de página más corto.';
$string['pagescreated'] = 'Páginas creadas';
$string['pagesimported'] = 'Páginas importadas';
$string['participation'] = 'Participación';
$string['participationbyuser'] = 'Participación por usuario';
$string['pluginadministration'] = 'Administración de OU wiki';
$string['pluginname'] = 'OU wiki';
$string['preview'] = 'Vista previa';
$string['previewwarning'] = 'La siguiente vista previa de sus cambios no ha sido guardada. <strong>Si Usted no guarda los cambios, su trabajo se perderá.</strong> Guarde con el botón al final de la página.';
$string['previous'] = 'Cambios más nuevos';
$string['previousversion'] = 'Previo: {$a}';
$string['privacy:annotationdeleted'] = '(Anotación eliminada por solicitud del usuario)';
$string['privacy:metadata:core_files'] = 'Archivos anexos a subwikis';
$string['privacy:metadata:ouwiki_annotations'] = 'Anotaciones de páginas de OU wiki';
$string['privacy:metadata:ouwiki_annotations:content'] = 'Contenido de anotación de la página';
$string['privacy:metadata:ouwiki_annotations:timemodified'] = 'Hora de cuando la anotación fue modificada por última vez';
$string['privacy:metadata:ouwiki_annotations:userid'] = 'Usuario que creó la anotación';
$string['privacy:metadata:ouwiki_locks'] = 'Almacenamiento temporal para bloqueos de edición de ouwiki';
$string['privacy:metadata:ouwiki_locks:expiresat'] = 'Hora a la que expira el bloqueo';
$string['privacy:metadata:ouwiki_locks:lockedat'] = 'Fecha de cuando fue bloqueado';
$string['privacy:metadata:ouwiki_locks:sectionsize'] = 'Este es el tamaño en bytes de la sección que está siendo editada.';
$string['privacy:metadata:ouwiki_locks:sectionstart'] = 'Esta es la posición de inicio en bytes relativa al principio del campo \'xhtml\' en la versión especificada.';
$string['privacy:metadata:ouwiki_locks:seenat'] = 'Hora en la cual el cliente del usuario acudió a confirmar';
$string['privacy:metadata:ouwiki_locks:userid'] = 'Usuario que bloqueó una página';
$string['privacy:metadata:ouwiki_subwikis'] = 'Información acerca de subwikis';
$string['privacy:metadata:ouwiki_subwikis:groupid'] = 'Grupo a quien pertenece un subwiki';
$string['privacy:metadata:ouwiki_subwikis:userid'] = 'Usuario a quien pertenece un subwiki (para wikis individuales o únicos)';
$string['privacy:metadata:ouwiki_versions'] = 'Información acerca de historia de páginas de OU wiki';
$string['privacy:metadata:ouwiki_versions:changeprevsize'] = 'El tamaño anterior del número de la sección cuando la sección fue editada';
$string['privacy:metadata:ouwiki_versions:changesize'] = 'El nuevo tamaño de la sección cuando la sección fue editada';
$string['privacy:metadata:ouwiki_versions:changestart'] = 'El punto de inicio de cuando la sección fue editada';
$string['privacy:metadata:ouwiki_versions:deletedat'] = 'Fecha de eliminación de revisión';
$string['privacy:metadata:ouwiki_versions:importversionid'] = 'La id de importación de revisión';
$string['privacy:metadata:ouwiki_versions:previousversionid'] = 'La id de la revisión anterior';
$string['privacy:metadata:ouwiki_versions:timecreated'] = 'Hora de cuando fue creada la revisión';
$string['privacy:metadata:ouwiki_versions:userid'] = 'Usuario que creó la revisión';
$string['privacy:metadata:ouwiki_versions:wordcount'] = 'Número de palabras del contenido de revisión';
$string['privacy:metadata:ouwiki_versions:xhtml'] = 'Contenido de la revisión';
$string['privacy:metadata:preferences:ouwiki_hide_annotations'] = 'Ocultar anotaciones al ver wiki';
$string['privacy_somebodyelse'] = 'Alguien más';
$string['privacy:xhtmlcontentdeleted'] = '[Información del contribuyente eliminada a solicitud del usuario]';
$string['privacy_you'] = 'Usted';
$string['recentchanges'] = 'Últimas ediciones';
$string['returntohistory'] = '(<a href=\'{$a}\'>Regresar a vista histórica</a>.)';
$string['returntopage'] = 'Regresar a página de wiki';
$string['returntoview'] = 'Ver página actual';
$string['revert'] = 'Revertir';
$string['reverterrorcapability'] = 'Usted no tiene permiso para revertir a una versión anterior';
$string['reverterrorversion'] = 'No se puede revertir a una versión de página inexistente';
$string['revertversion'] = 'Revertir';
$string['revertversionconfirm'] = '<p>Esta página será regresada al estado que tenía en {$a}, descartando todos los cambios realizados desde entonces. Sin embargo, los cambios reallizados seguirán estando disponibles en la historia de la página.</p><p>¿Está Usted seguro de querer revertir a esta versión de la página</p>';
$string['savedat'] = 'Guardada en {$a}';
$string['savedby'] = 'guardada por {$a}';
$string['savefailcontent'] = 'Su versión de la página se muestra debajo, para que Usted pueda copiar y pegar las partes relevantes hacia otro programa. Si Usted después regresa a reponer sus cambios al wiki más tarde, tenga cuidado de no sobrescribir el trabajo de alguien más.';
$string['savefaildesynch'] = 'Cuando Usted estaba editando esta página, alguien más logró hacerle un cambio. (Esto puede pasar en varias situaciones como por ejemplo si Usted emplea un navegador poco común o si tuviera Javascript deshabilitado). Desafortunadamente, sus cambios no pudieron guardarse porque eso hubiera sobre-escrito los cambios de la otra persona.';
$string['savefaillocked'] = 'Cuando Usted estaba editando esta página, alguien más logró hacerle un cambio. (Esto puede pasar en varias situaciones como por ejemplo si Usted emplea un navegador poco común o si tuviera Javascript deshabilitado). Desafortunadamente, sus cambios no pudieron guardarse en esta ocasión.';
$string['savefailnetwork'] = '<p>Desafortunadamente, sus cambios no pueden guardarse ahorita. Esto se debe a un error en la red, que el sitio web esté temporalmente no disponible o que Usted se haya salido. </p><p>Se ha deshabilitado el guardar en esta página. Para conservar los cambios, Usted debe copiar el contenido de la página editada, acceder nuevamente a la página para Editar y entonces pegar los cambios.</p>';
$string['savefailtitle'] = 'La página no pudo guardarse';
$string['savegrades'] = 'Guardar calificaciones';
$string['savetemplate'] = 'Guardar wiki como plantilla';
$string['search'] = 'Buscar este wiki';
$string['search:activity'] = 'OUWiki - información de actividad';
$string['search_help'] = 'Escriba las condiciones de su búsqueda y elija el botón o presione \'Intro\'.

Para buscar frases exactas use comillas.

Para excluir una palabra inserte un guión inmediatamente antes de la palabra.

Ejemplo: la búsqueda <tt>picasso -escultura "primeras obras"</tt> le dará resultados para ‘picasso’ o la frase   ‘primeras obras’ pero excluirá términos que contengan ‘escultura’.';
$string['search:page_version'] = 'OUWiki - versiones de página';
$string['seedetails'] = 'historia completa';
$string['showannotationicons'] = 'Mostrar anotaciones';
$string['showwordcounts'] = 'Mostrar conteo de palabras';
$string['showwordcounts_help'] = 'Si se activa, entonces el conteo de palabras se calculará y mostrará al fondo del contenido principal';
$string['sizewarning'] = 'Esta página de wiki es muy grande y puede operar con lentitud. De ser posible, por favor divida el contenido en partes lógicas y colóquelo en páginas separadas enlazadas.';
$string['startannotation'] = 'Principio de anotación';
$string['startpage'] = 'Página de inicio';
$string['startpagedoesnotexist'] = 'La página de inicio de este wiki aún no ha sido creada.';
$string['strftimerecent'] = '%d %B %y, %H:%M';
$string['subwikiexist'] = 'Los sub-wikis ya han sido creados. El añadir un archivo de plantilla solamente afecta a sub-wikis vacíos y recién creados; el contenido existente permanecerá como está.';
$string['subwikis'] = 'Sub-wikis';
$string['subwikis_groups'] = 'Un wiki por grupo';
$string['subwikis_help'] = '<ul>
<li><strong>Wiki único para curso</strong><br /> Este wiki se comporta como un wiki único. Todos en el curso ven las mismas páginas.</li> <li><strong>Un wiki por grupo</strong><br /> Los miembros de cada grupo ven una copia enteramente separada del wiki (sub-wiki) específico para su grupo. Usted solamente puede ver páginas creadas por personas de su mismo grupo. Si Usted estuviera en más de un grupo, o si tiene permisos que le permitan ver a todos los grupos, Usted tiene una lista desplegable para elegir el grupo.</li> <li><strong>Wiki separado para cada Usuario</strong><br /> Cada usuario individual obtiene un wiki enteramente diferente. Usted solamente puede ver su propio wiki a menos que tuviera permisos que le permitan ver los de otros, cuando obtiene una lista desplegable para elegir el usuario. (Esto puede usarse como una manera de que los estudiantes contribuyan trabajo, pero Usted debería considerar otras formas de conseguir esto, como por ejemplo, con la actividad de tarea. )</li> </ul> <p> Observe que la opción de grupo trabaja con el agrupamiento elegido e ignorará a los grupos de otros agrupamientos diferentes. </p>';
$string['subwikis_individual'] = 'Wiki separada para cada usuario';
$string['subwikis_single'] = 'Wiki único para el curso';
$string['summary'] = 'Resumen';
$string['summary_help'] = '<p>
Si aquí escribe un resumen, este aparecerá en la página de inicio del wiki. La página de inicio aparece arriba del texto editable normal del wiki, y no puede ser editada por los usuarios.
</p>


<p>
Los resúmenes son enteramente opcionales y su wiki tal vez no necesite uno. Si Usted no necesita un resumen, simplemente déjelo en blanco.
</p>';
$string['system'] = 'el sistema';
$string['tab_annotate'] = 'Anotar';
$string['tab_discuss'] = 'Discutir';
$string['tab_edit'] = 'Editar';
$string['tab_history'] = 'Historia';
$string['tab_index_alpha'] = 'Alfabéticamente';
$string['tab_index_changes'] = 'Todos los cambios';
$string['tab_index_pages'] = 'Páginas nuevas';
$string['tab_index_tree'] = 'Estructura';
$string['tab_view'] = 'Vista';
$string['template'] = 'Plantilla';
$string['templatefileexists'] = 'Un archivo de plantilla \'{$a}\' ya está en uso.';
$string['template_help'] = '<p>
Una plantilla es un conjunto predefinido de páginas wiki. Cuando una plantilla se configura, el wiki empieza con el contenido definido por la plantilla.
</p>


<p>
La plantilla aplica para cada subwiki; en el modo de "Un wiki por grupo", por ejemplo, el wiki de cada grupo es inicializado con las páginas dentro de la plantilla.
</p>

<p>
Para crear una plantilla, escriba las páginas que Usted desaría para todos los wikis, después visite la página del Índice y elija el botón  "Guardar wiki como plantilla" (También puede crear plantillas manualmente en otro programa; es un formato XML extremadamente sencillo. Revise una plantilla guardada para ver el formato)
</p>

<p>
Usted NO puede cambiar la plantilla después de que haya sido creado el wiki. Si quisiera hacer esto, borre por completo el wiki y después fabrique uno nuevo empleando la plantilla.
</p>';
$string['thispageislocked'] = 'La página del wiki está bloqueada y no puede ser editada.';
$string['timelocked_after'] = 'El wiki actualmente está bloqueado y ya no puede ser editado.';
$string['timelocked_before'] = 'El wiki actualmente está bloqueado. Puede ser editado a partir de {$a}.';
$string['timeout'] = 'Tiempo disponible para editar';
$string['timeout_help'] = '<p>
Si elige un tiempo límite, las personas editando el wiki solamente podrán editarlo por el tiempo permitido. El wiki bloquea las páginas mientras están siendo editadas (para que dos personas no puedan editar la misma página al mismo tiempo), por lo que configurar un tiempo límite impide que el wiki se bloquee para otras personas.
</p>


<h3>Qué ven los usuarios</h3>


<p>
Cuando se habilita un tiempo límite, los usuarios ven un cronómetro cuando editan una página. Si el cronómetro llega a cero, el navegador automáticamente guarda los cambios y deja de editar.
</p>


<h3>Usuarios sin Javascript habilitado</h3>

<p>
Esta opción no tiene efecto sobre los usuarios que no tengan Javascript habilitado o que usen navegadores antiguos. Un tiempo límite de quince minutos siempre se aplica para estos usuarios. Cuando editan una página, se les muestra el tiempo que tienen para guardarla; si no la guardan a tiempo, se arriesgan a perder su trabajo.
</p>


<h3>Porqué Usted tal vez no necesite esta opción</h3>

<p>
Aún cuando esta opción estuviera deshabilitada, los bloqueos son automáticamente descartados en las siguientes situaciones después de que un usuario ha empezado a editar una página:
</p>


<ul>
<li>Sin haber guardado cambios o cancelado, el usuario se mueve a una página diferente.</li>
<li>El usuario cierra su navegador.</li>
<li>Se pasma la computadors.</li>
<li>El usuario pierde su conexión a internet.</li> </ul>


<p>
En estas situaciones, el bloqueo es removido automáticamente después de aproximadamente dos minutos.
</p>

<p> Además, los tutores y empleados del curso tienen (por defecto) la capacidad para anular cualquier bloqueo en cualquier momento.
</p>


<h3>Qué no hace esta opción</h3>


<p> Esta opción no impide que alguien se aferre a una página y de esta forma impida que los otros usuarios puedan editarla (si se aferra a hacerlo). Este sujeto acaparador podría editar una página y esperar hasta que casi se agote el tiempo antes de guardar sus ciambios y muy rápidamente volverla a editar. </p>';
$string['timeout_none'] = 'Sin tiempo límiite';
$string['tryagain'] = 'Intentar de nuevo';
$string['typeinpagename'] = 'Escriba aquí el nombre de la página';
$string['typeinsectionname'] = 'Escriba aquí el título de la sección';
$string['unabletoimport'] = 'No hay wikis disponibles desde los cuales importar.';
$string['undelete'] = 'Des-borrar';
$string['unlockpage'] = 'Desbloquear página';
$string['userdetails'] = 'Detalle para {$a}';
$string['usergrade'] = 'Calificación del usuario';
$string['userparticipation'] = 'Participación del usuario';
$string['viewdeletedversionerrorcapability'] = 'Error al ver la versión de página';
$string['viewparticipationerrror'] = 'No se puede ver participación del usuario';
$string['viewwikichanges'] = 'Cambios para {$a}';
$string['viewwikistartpage'] = 'Ver {$a}';
$string['wikifor'] = 'Viendo wiki para:';
$string['wikifullchanges'] = 'Ver lista completa de cambios';
$string['wikirecentchanges'] = 'Cambios del wiki';
$string['wikirecentchanges_from'] = 'Cambios del wiki (página {$a})';
$string['words'] = 'Palabras';
$string['wordsadded'] = 'Palabras añadidas';
$string['wordsdeleted'] = 'Palabras borradas';
$string['wouldyouliketocreate'] = '¿Le gustaría crearla?';
