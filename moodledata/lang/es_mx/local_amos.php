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
 * Strings for component 'local_amos', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   local_amos
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS es un repositorio central de las cadenas de texto de Moodle y de su historia. Monitorea la adición de cadenas de texto en idioma inglés hacia el núcleo de Moodle, junta las traducciones, maneja trabajos comunes de traducción y genera los paquetes de idiomas para ser llevados a los servidores Moodle.</p>
<p>Vea <a href="https://docs.moodle.org/dev/AMOS_manual">documentación de AMOS </a> para más información.</p>';
$string['amos'] = 'Herramienta de traducción AMOS';
$string['amos:changecontriblang'] = 'Cambiar idioma de cadenas contribuídas';
$string['amos:commit'] = 'Implantar las cadenas preparadas al repositorio principal';
$string['amos:execute'] = 'Ejecutar el AMOScript dado';
$string['amos:importfile'] = 'Importar traducciones del archivo subido y ponerlas en el \'stage\'';
$string['amos:importstrings'] = 'Importar cadenas (incluyendo las de Inglés) directamente al repositorio principal';
$string['amos:manage'] = 'Gestionar portal AMOS';
$string['amos:stage'] = 'Usar la herramienta de traducción AMOS y preparar las cadenas';
$string['amos:stash'] = 'Guardar la cadena preparada en espera actual en el almacén persistente';
$string['amos:usegoogle'] = 'Usar los servicios de traducción de Google';
$string['applangindexfile'] = 'Localización del archivo LangIndex de App Moodle';
$string['applangindexfile_desc'] = 'URL completa de la cual descargar el archivo. Será hecho por un trabajo del cron.';
$string['commitbutton'] = 'Implantar';
$string['commitkeepstaged'] = 'Mantener cadenas en \'stage\'';
$string['commitmessage'] = 'Mensaje de implantación';
$string['commitmessageempty'] = 'Por favor, escriba el mensaje de implantación';
$string['commitstage'] = 'Implantar cadenas preparadas';
$string['commitstage_help'] = 'Guardar permanentemente todas las traducciones preparadas en el repositoro AMOS. El \'stage\' se poda automáticamente y se rebasa antes de acometer. Solamente las cadenas que puedan implantarse serán guardadas. Esto significa que solamente las traducciones que estén resaltadas debajo en verde serán guardadas. El \'stage\' se limpia después de la implantación.';
$string['committableall'] = 'todos los idiomas';
$string['committablenone'] = 'no se admiten idiomas: por favor, contacte con el coordinador de AMOS';
$string['componentsall'] = 'Todos';
$string['componentsapp'] = 'App Moodle';
$string['componentsenlarge'] = 'Agrandar';
$string['componentsnone'] = 'Ninguno';
$string['componentsstandard'] = 'Estándar';
$string['confirmaction'] = 'Esta operación no se puede deshacer. ¿Está seguro?';
$string['contribaccept'] = 'Aceptar';
$string['contribactions'] = 'Acciones de traducción contribuídas';
$string['contribactions_help'] = 'Dependiendo de sus derechos y el flujo de trabajo de la contribución, Usted puede tener algunas de las siguientes acciones disponible:

*Aplicar - copiar la traducción contribuída a su \'stage\', no modifica el registro de contribución
* Asignármela a mí - se pone Usted como el asignatario de la contribución, quien es la persona responsable de la revisión e integración de la contribución
* Des-asignar - poner a nadie como asignatario de la contribución
* Empezar revisión - asignar la nueva contribución a Usted mismo, poner el estatus \'en revisión\' y copiar la traducción sometida a su \'stage\'
* Aceptar - marcar la contribución como aceptada
* Rechazar - marcar la contribución como rechazada, por favor describa las razones en un comentario.

El contribuyente es informado por Email cuando cambia el estatus de su contribución.';
$string['contribapply'] = 'Aplicar';
$string['contribassignee'] = 'Asignatario';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Asignarme a mi mismo';
$string['contribauthor'] = 'Autor';
$string['contribclosedno'] = 'Ocultar contribuciones resueltas';
$string['contribclosedyes'] = 'Mostrar contribuciones resueltas';
$string['contribcomponents'] = 'Componentes';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'No hay contribuciones recibidas';
$string['contribincomingsome'] = 'Contribuciones recibidas ({$a})';
$string['contriblanguage'] = 'Idioma';
$string['contriblanguagebutton'] = 'Convertir';
$string['contriblanguagechange'] = 'Reparando idioma contribuído equivocado';
$string['contriblanguagechange_help'] = 'Si la contribución ha sido sometida por error al paquete de idioma equivocado, seleccione el idioma correcto en el menú desplegable inferior y después haga clic en el botón para Convertir.';
$string['contriblanguagereport'] = 'Reportando idioma de contribución equivocado';
$string['contriblanguagereport_help'] = 'Si esta contribución ha sido sometida en el paquete de idioma equivocado por error, por fvaor copie y pegue la URL de la contribución en un Email a `translation@moodle.org`.  La contribución será entonces movida al idioma correcto.';
$string['contriblanguagewrong'] = '¿Idioma equivocado?';
$string['contribnotif'] = '[AMOS] Notificación de contribución (#{$a->id})';
$string['contribnotifaccepted'] = '{$a->fullname} ha aceptado su traducción contribuída
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Página de la contribución: {$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} ha comentado acerca de la traducción contribuída
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Página de la contribución: {$a->contriburl}';
$string['contribnotifconverted'] = '{$a->fullname} ha convertido su traducción contribuída
#{$a->id} {$a->subject}

Gracias por su contribución. Sin embargo, al parecer fue enviada al paquete de idioma equivocado por error. Por eso, su contribución ha sido rechazada del paquete equivocado y ha sido movida al paquete de idioma correcto, para que sea revisada por el mantenedor del paquete de idioma. No se requiere otra acción de parte de Usted.

En el futuro por favor cerciórese dos veces de haber seleccionado su propio idioam antes de comenzar con la traducción de cadenas.

---------------------------------------------------------------------
Página de la contribución original: {$a->contriborigurl}
Página de la nueva contribución: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Hay una traducción contribuída que requiere su acción
#{$a->id} {$a->subject}

Como el mantenedor del paquete de idioma, Se supone que Usted debe revisar y eventualmente acometer todas las contribuciones enviadas. Cuando haya terminado de hacerlo, por favor marquelas como aceptadas o rechazadas.

Vea {$a->docsurl} para más detalles.
---------------------------------------------------------------------
Página de la contribución: {$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} ha rechazado su traducción contribuída
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Página de la contribución: {$a->contriburl}';
$string['contribnotifsubmitted'] = '{$a->fullname} ha enviado una nueva traducción contribuída
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

* Idioma: {$a->language}
* Componentes: {$a->components}
* Cadenas: {$a->strings}

---------------------------------------------------------------------
Página de la contribución: {$a->contriburl}';
$string['contribreject'] = 'Rechazar';
$string['contribresign'] = 'Des-asignar';
$string['contribstaged'] = 'Contribuciones preparadas <a href="contrib.php?id={$a->id}">#{$a->id}</a> por {$a->author}';
$string['contribstagedinfo'] = 'Contribución preparada';
$string['contribstagedinfo_help'] = 'El \'stage\' contiene las cadenas preparada que fueron contribuídas por un miembro de la comunidad, Los responsables (mantenedores) del paquete de idioma son los encargados de revisarlas y poner su estatus en Aceptadas (si fueron implantadas) o Rechazadas (si no se pudieron incluir en el paquete de idioma oficial por alguna razón).';
$string['contribstartreview'] = 'Iniciar revisión';
$string['contribstatus'] = 'Estatus';
$string['contribstatus0'] = 'Nuevo';
$string['contribstatus10'] = 'En revisión';
$string['contribstatus20'] = 'Rechazado';
$string['contribstatus30'] = 'Aceptado';
$string['contribstatus_help'] = 'El flujo de trabajo de una traducción contribuída consiste de las siguientes etapas:

* Nueva - la contribución ha sido enviada pero aún no ha sido revisada
* En revisión - la contribución ha sido asignada a un responsable (mantenedor) del paquete de idioma y ha sido preparada para revisión
* Rechazada - el responsable (mantenedor) del paquete de idioma ha rechazado su contribución y probablemente dejó una explicación en un comentario
* Aceptada - la contribución ha sido aceptada por el responsable (mantenedor) del paquete de idioma';
$string['contribstrings'] = 'Cadenas';
$string['contribstringseq'] = '{$a->orig} nuevas';
$string['contribstringsnone'] = '{$a->orig} (todas están ya están traducidas en el paquete de idioma)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} de ellas ya tienen una traducción más reciente)';
$string['contribsubject'] = 'Asunto';
$string['contribsubmittednone'] = 'No se han enviado contribuciones';
$string['contribsubmittedsome'] = 'Sus contribuciones ({$a})';
$string['contribtimemodified'] = 'Modificada';
$string['contribute'] = 'Contribuir';
$string['contributenow'] = '¡Contribuir ahora!';
$string['contributestats'] = 'Un total de <strong>{$a->count}</strong> cadenas traducidas por miembros de la comunidad han sido envidas a AMOS hasta ahora.';
$string['contributethanks'] = '¡Muchas gracias a {$a->listcontributors} por sus contribuciones recientes!';
$string['contributions'] = 'Contribuciones';
$string['creditsaddcontributor'] = 'Añadir contribuyente';
$string['creditsaddmaintainer'] = 'Añadir mantenedor';
$string['creditscontact'] = 'Enviar mensaje';
$string['creditscontributors'] = 'Otros contribuyentes';
$string['creditsdelcontributor'] = 'Remover contribuyente';
$string['creditsdelmaintainer'] = 'Remover mantenedos';
$string['creditsmaintainedby'] = 'Mantenido por';
$string['creditsnomaintainer'] = 'Sin mantenedor actualmente. <a href="{$a->url}">¡Vuélvase uno!</a>';
$string['creditsthanks'] = 'En esta página, quisieramos agradecerle a todos los que han contribuído a las traducciones de Moodle. Su trabajo ha hecho posible la difusión de Moodle en el mundo.';
$string['creditstitlelong'] = 'Mantenedores y contribuyentes a paquetes de idiomas';
$string['creditstitleshort'] = 'Créditos';
$string['diff'] = 'Comparar';
$string['diffaction'] = 'Si se detectara una diferencia';
$string['diffaction1'] = 'Ponga en preparación ambas traducciones en sus ramas';
$string['diffaction2'] = 'Prepare la traducción más reciente en ambas ramas';
$string['diffmode'] = 'Prepare las cadenas si';
$string['diffmode1'] = 'Las cadenas en inglés han cambiado, pero las traducidas no';
$string['diffmode2'] = 'Las cadenas en inglés no han cambiado, pero las traducidas si';
$string['diffmode3'] = 'O las cadenas en inglés han cambiado, o las traducidas (pero no ambas)';
$string['diffmode4'] = 'Tanto las cadenas en inglés como las traducidas han cambiado';
$string['diffprogress'] = 'Comparando ramas seleccionadas';
$string['diffprogressdone'] = 'Se encontraron en total {$a} diferencias';
$string['diffstringmode'] = 'Alternar modo diff';
$string['diffstrings'] = 'Comparar cadenas en dos ramas';
$string['diffstrings_help'] = 'Esto comparará todas las cadenas en las dos ramas seleccionadas. Si hubiera diferencia en cadenas entre las ramas, ambas versiones serán preparadas en el \'stage\'. Usted podrá entonces emplear la función de "Editar cadenas preparadas" para revisar y arreglar los cambios necesarios';
$string['diffversions'] = 'Versiones';
$string['err_exception'] = 'Error: {$a}';
$string['err_invalidlangcode'] = 'Código de idioma no válido';
$string['err_parser'] = 'Error al analizar: {$a}';
$string['filtercmp'] = 'Componentes';
$string['filtercmp_desc'] = 'Mostrar cadenas de estos componentes';
$string['filtercmpnothingselected'] = 'Por favor, seleccione algun componente';
$string['filterlng'] = 'Idiomas';
$string['filterlng_desc'] = 'Mostrar traducciones en estos idiomas';
$string['filterlngnothingselected'] = 'Por favor, seleccione algun idioma';
$string['filtermis'] = 'Misceláneos';
$string['filtermis_desc'] = 'Condiciones adicionales en las cadenas a mostrar.';
$string['filtermisfapp'] = 'solamente frases usadas en la App Moodle';
$string['filtermisfapp_help'] = 'Esta frase es usada en Apps Moodle como {$a}';
$string['filtermisfglo'] = 'solo cadenas en lista gris';
$string['filtermisfhas'] = 'solo cadenas traducidas';
$string['filtermisfhlp'] = 'solo cadenas de ayuda';
$string['filtermisfmis'] = 'solo cadenas faltantes u obsoletas';
$string['filtermisfout'] = 'solo cadenas obsoletas';
$string['filtermisfstg'] = 'cadenas preparadas solamente';
$string['filtermisfwog'] = 'sin cadenas en lista gris';
$string['filtersid'] = 'Identificador de cadena';
$string['filtersid_desc'] = 'La clave en la matriz de cadenas';
$string['filtersidpartial'] = 'coincidencia parcial';
$string['filtertxt'] = 'Sub-cadena';
$string['filtertxtcasesensitive'] = 'sensible a minúscula/MAYÚSCULA';
$string['filtertxt_desc'] = 'La cadena debe contener el texto dado';
$string['filtertxtregex'] = 'regex';
$string['filterver'] = 'Versiones';
$string['filterver_desc'] = 'Mostrar cadenas de estas versiones de Moodle';
$string['filtervernothingselected'] = 'Por favor, seleccione alguna versión';
$string['found'] = 'Encontradas: {$a->found} &nbsp;&nbsp;&nbsp; Faltantes: {$a->missing} ({$a->missingonpage})';
$string['foundinfo'] = 'Número de cadenas encontradas';
$string['foundinfo_help'] = 'Muestra el número total de filas en la tabla de traducción, el número de traducciones que faltan y el número de traducciones que faltan en la página actual.';
$string['googletranslate'] = 'preguntar a Google';
$string['gotofirst'] = 'ir a la primera página';
$string['gotoprevious'] = 'ir a la página anterior';
$string['greylisted'] = 'Cadenas en lista gris';
$string['greylisted_help'] = 'Por razones de antiguedad, un paquete de idioma de Moodle puede contener cadenas que ya no se emplean más pero que no han sido eliminadas. Estas cadenas están en la "lista gris". Una vez que haya sido confirmado que una cadena en lista gris ya no se usa más, será removida del paquete de idioma.

Si Usted observa una cadena de lista gris que aún se utiliza en Moodle, por favor informe al respecto en una comunicación del foro en el curso de Translating  Moodle en este sitio. De otra manera, Usted puede ahorrar tiempo valioso al traducir cadenas que sea más probable que se usen en Moodle e ignorar las cadenas en lista gris.';
$string['greylistedwarning'] = 'en lista gris';
$string['importfile'] = 'Importar cadenas traducidas desde un archivo';
$string['importfile_help'] = 'Si Usted tiene sus cadenas traducidas fuera de linea, Usted puede meterlas al sistema mediante este formato.

* El archivo debe ser un archivo de definición de cadenas PHP válido. Busque en el directorio `/lang/en/` de su instalación de Moodle los ejemplos.
* El nombre del archivo debe coincidir con el que tiene las definiciones en el idioma inglés para el componente dado (por ejemplo `moodle.php`, `assignment.php` o `enrol_manual.php`).

Todas las cadenas encontradas en el archivo serán preparadas en el \'stage\' para la versión e idioma seleccionados.

Se pueden procesar múltiples archivos PHP a la vez si los pone dentro de un archivo ZIP.';
$string['language'] = 'Idioma';
$string['languages'] = 'Idiomas';
$string['languagesall'] = 'Todos';
$string['languagesnone'] = 'Ninguno';
$string['lastavailable'] = 'Versión disponible más reciente';
$string['log'] = 'Bitácora';
$string['logfilterbranch'] = 'Versiones';
$string['logfiltercommithash'] = 'hash GIT';
$string['logfiltercommitmsg'] = 'Mensaje de implantación contiene';
$string['logfiltercommits'] = 'Filtro de implantación';
$string['logfiltercommittedafter'] = 'Implantada después de';
$string['logfiltercommittedbefore'] = 'Implantada antes de';
$string['logfiltercomponent'] = 'Componentes';
$string['logfilterlang'] = 'Idiomas';
$string['logfiltershow'] = 'Mostrar implantadas y cadenas filtradas';
$string['logfiltersource'] = 'Orígen';
$string['logfiltersourceamos'] = 'amos (traductor basado en web)';
$string['logfiltersourceautomerge'] = 'autotransplante (traducción copiada desde otra rama)';
$string['logfiltersourcebot'] = 'bot (operaciones en lote ejecutadas por un script)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOSscript en el mensaje de implantación)';
$string['logfiltersourcefixdrift'] = 'fixedrift (AMOS-git drift fijo)';
$string['logfiltersourcegit'] = 'git (espejo git del código fuente de Moodle y paquetes  1.x)';
$string['logfiltersourceimport'] = 'Importar (cadenas importadas para un plugin contribuído)';
$string['logfiltersourcerevclean'] = 'revclean (proceso de limpieza reverso)';
$string['logfilterstringid'] = 'Identificador de la cadena';
$string['logfilterstrings'] = 'Filtro de la cadena';
$string['logfilterusergrp'] = 'Persona que implanta';
$string['logfilterusergrpor'] = 'o';
$string['maintainers'] = 'Mantenedores';
$string['markuptodate'] = 'Marcar la traducción como actualizada';
$string['markuptodate_help'] = 'AMOS ha detectado que la cadena puede estar obsoleta, puesto que la versión inglesa fue modificada después de haber sido traducida. Por favor, revise la traducción. Si está actualizada, marque la casilla de cotejo. En caso contrario, edítela.';
$string['markuptodatelabel'] = 'Marcar como actualizadas';
$string['merge'] = 'Juntar';
$string['mergestrings'] = 'Juntar cadenas desde otra rama';
$string['mergestrings_help'] = 'Esto eligirá y preparará todas las cadenas de la rama orígen que no hayan sido traducidas aún en la rama destino y que se emplean allí. Usted puede usar esta herramienta para copiar una cadena traducida hacia todas las otras versiones del paquete. Solamente los responsables (mantenedores) del paquete de idioma pueden usar esta herramienta.';
$string['messageprovider:checker'] = 'Resultados del revisor del paquete de idioma';
$string['messageprovider:contribution'] = 'Traducciones contribuídas';
$string['morefilteringoptions'] = 'Más opciones';
$string['newlanguage'] = 'Nuevo idioma';
$string['nodiffs'] = 'No se encontraron diferencias';
$string['nofiletoimport'] = 'Por favor proporcione un archivo desde donde se importará.';
$string['nologsfound'] = 'No se han encontrado cadenas, por favor modifique los filtros';
$string['nostringsfound'] = 'No se encontraron cadenas';
$string['nostringsfoundonpage'] = 'No se encontraron cadenas en la página {$a}';
$string['nostringtoimport'] = 'No se encontró cadena válida en el archivo. Asegúrese de que el archivo tiene un nombre correcto y está formateado adecuadamente.';
$string['nothingtomerge'] = 'La rama orígen no contiene ninguna cadena nueva que estuviese ausente en la rama destino. Nada para juntar.';
$string['nothingtostage'] = 'La operación  no regresó ninguna cadena que pudiese ser preparada y puesta en el \'stage\'.';
$string['novalidzip'] = 'No puede extraerse el archivo ZIP';
$string['numofcommitsabovelimit'] = 'Se encontraron {$a->found} implantadas que coincidieron con el filtro de implantar, se usan las  {$a->limit} más recientes';
$string['numofcommitsunderlimit'] = 'Se encontraron {$a->found} implantadas que coincidieron con el filtro de implantar';
$string['numofmatchingstrings'] = 'Con esta, {$a->strings} modificaciones en  {$a->commits} implantadas coinciden con el filtro de cadena';
$string['outdatednotcommitted'] = 'Cadena obsoleta';
$string['outdatednotcommitted_help'] = 'AMOS ha detectado que la cadena puede estar obsoleta, puesto que la versión inglesa fue modificada después de haber sido traducida. Por favor, revise la traducción.';
$string['outdatednotcommittedwarning'] = 'Obsoleta';
$string['ownstashactions'] = 'Acciones del almacén';
$string['ownstashactions_help'] = '* Aplicar - copiar las cadenas traducidas desde el almacén hacia el stage y mantener el almacén sin modificar. si la cadena ya estuviera en el stage, se sobre-escribe con la del almacén.
* Pop - mover la cadena traducida desde el almacén hacia el stage y limpiar el almacén (esto es aplicar y dejar caer).
* Dejar caer -tirar las cadenas del almacén.
* Someter - abre un formato para someter el almacén a los responsables (mantenedores) oficiales del idioma para que puedan incluir su contribución en el paquete de idioma oficial.';
$string['ownstashes'] = 'Sus almacenes';
$string['ownstashes_help'] = 'Esta es una lista de todos sus almacenes';
$string['ownstashesnone'] = 'No se encontraron almacenes propios';
$string['permalink'] = 'Permaenlace';
$string['placeholder'] = 'Remplazables (placeholders)';
$string['placeholder_help'] = 'Los remplazables (placeholders) son frases especiales como `{$a}` o `{$a->algo}` dentro de la cadena. Estos son remplazados con un valor cuando la cadena de hecho se imprima .

Es importante copiarlos exactamente como aparecen en la cadena original. No los traduzca ni cambie la orientación de-izquierda-a-derecha.';
$string['placeholderwarning'] = 'remplazables (placeholders)';
$string['pluginclasscore'] = 'Subsistemas del núcleo';
$string['pluginclassnonstandard'] = 'Plugins no estándar';
$string['pluginclassstandard'] = 'Plugins estándar';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = 'Traducción contribuída #{$a->id} por {$a->author}';
$string['presetcommitmessage2'] = 'Se juntaron cadenas faltantes desde {$a->source} hacia {$a->target} branch';
$string['presetcommitmessage3'] = 'Arreglando diferencias entre {$a->versiona} y {$a->versionb}';
$string['privacy:contribnumber'] = 'Contribución {$a}';
$string['privacy:filterusage'] = 'Uso de filtro';
$string['privacy:metadata:db:amoscommits'] = 'Conservar todos los meta-datos relacionados con el commit.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Sello de tiempo del commit.';
$string['privacy:metadata:db:amoscontributions'] = 'Traducciones contribuidas por miembros de la comunidad.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'El código del idioma al que pertenece esta contribución.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Mensaje inicial que describe el envío';
$string['privacy:metadata:db:amoscontributions:status'] = 'El estado del flujograma de la contribución.';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Asunto del envío contribuído.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Sello de tiempo de cuando fue creado el registro de la contribución.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Sello de tiempo de cuando fue modificado recientemente el registro de la contribución.';
$string['privacy:metadata:db:amosfilterusage'] = 'Bitácora del uso de filtro del traductor AMOS.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'El idioma de la sesión actual.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = '¿Tiene permiso el usuario para guardar en el repositorio AMOS?';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Número de componentes seleccionados';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Número de idiomas seleccionados';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Número de versiones seleccionadas';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = '¿Deberían mostrarse solamente las traducciones existentes?';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = '¿Deberían mostrarse solamente las frases en lista gris?';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = '¿Deberían mostrarse solamente las frases de ayuda?';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = '¿Deberían mostrarse solamente las frases faltantes y las obsoletas?';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = '¿Deberían mostrarse solamente las frases obsoletas?';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = '¿Deberían mostrarse solamente frases en el \'stage\'?';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = '¿Deberían quitarse de los resultados frases en lista gris?';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = '¿Se solicita coincidencia parcial para frases?';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = '¿Debería la subcadena ser considerada sensible a MAYÚSCULAS/ minúsculas?';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = '¿Debería la subcadena ser considerada una regex (expresión regular)?';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Sello de tiempo de cuando fue enviado el filtro';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Código de país del usuario tal como fue seleccionado en su perfil';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Idioma preferido del usuario en su perfil';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = '¿El usuario usó los idiomas pre-seleccionados?';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = '¿El usuario usó las versiones pre-seleccionadas en el formato?';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = '¿Fue especificada la stringid?';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = '¿Fue especificada una subcadena a buscar?';
$string['privacy:metadata:db:amosstashes'] = 'Conserva la información acerca de los \'stashes\' en el stashpool';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Sello de tiempo de cuando fue modificado recientemente el registro';
$string['privacy:metadata:db:amostranslators:lang'] = 'El código del idioma que el raductor tiene permitido traducir, o asterisco para todos los idiomas.';
$string['privacy:metadata:external:languagepacks:email'] = 'Dirección Email del contribuyente puede ser incluida en los archivos del paquete del idioma.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Nombre del contribuyente puede ser incluida en los archivos del paquete del idioma.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Apellido(s) del contribuyente puede ser incluida en los archivos del paquete del idioma.';
$string['privacy:metadata:subsystem:comment'] = 'Describe como es que el subsistema de comentario es usado por el plugin.';
$string['privileges'] = 'Sus privilegios';
$string['privilegesnone'] = 'Usted solamente tiene acceso de solo-lectura a información pública.';
$string['processing'] = 'Procesando...';
$string['propagate'] = 'Propagar traducciones';
$string['propagatednone'] = 'No se propagaron traducciones';
$string['propagatedsome'] = '{$a} traducciones preparadas propagadas';
$string['propagate_help'] = 'Las traducciones preparadas se pueden propagar a ramas seleccionadas. AMOS iteractua sobre la lista de traducciones preparadas en el \'stage\' y trata de aplicarlas a cada rama seleccionada. La propagación no es posible si:

* los originales en inglés de la cadena son diferentes en las ramas orígen y destino,
* la cadena está preparada varias veces con diferentes traducciones';
$string['propagaterun'] = 'Propagar';
$string['quicklinks'] = 'Enlaces rápidos';
$string['quicklinks_amos'] = 'Traductor AMOS';
$string['quicklinks_forum'] = 'Foro de traducción';
$string['quicklinks_manual'] = 'Manual del usuario';
$string['quicklinks_newcomers'] = 'Ayuda para novatos';
$string['requestactions'] = 'Acción';
$string['requestactions_help'] = '* Aplicar - copia las cadenas traducidas desde la solicitud de jalarlas hacia su stage para prepararlas. Si la cadena ya estaba preparada en el stage, se sobre-escribe con la que estaba en el almacén.
* Ocultar - bloquea la solicitud de jalar de forma que no se le muestra más a Usted.';
$string['savefilter'] = 'Guardar configuraciones de filtro';
$string['script'] = 'AMOScript';
$string['scriptexecute'] = 'Ejecutar y preparar resultado';
$string['script_help'] = 'AMOScript es un conjunto de instrucciones a ejecutar sobre el repositorio de cadenas.';
$string['sourceversion'] = 'Versión orígen';
$string['stage'] = 'Preparadas';
$string['stageactions'] = 'Acciones sobre preparadas';
$string['stageactions_help'] = '* Editar cadenas preparadas - modifica las configuraciones del filtro del traductor de forma que solamente se muestran traducciones preparadas.
* Podar no-implantables- des-prepara todas las traducciones que no se le permiten implantar a Usted. El \'stage\' se poda automáticamente antes de acometer.
* Rebasar - des-preparar todas las traducciones que o no modifican la traducción actual o que sean más antiguas que la traducción más reciente en el repositorio. El \'stage\' es rebasado automáticamente antes de implantar.
* Des-preparar todas - limpia el \'stage\', todas las traducciones preparadas se pierden.';
$string['stagedownload'] = 'Descargar';
$string['stageedit'] = 'Editar cadenas preparadas';
$string['stageprune'] = 'Podar las no-implantables';
$string['stagerebase'] = 'Rebasar';
$string['stagestringsnocommit'] = 'Hay {$a->staged} cadenas preparadas';
$string['stagestringsnone'] = 'No hay cadenas preparadas';
$string['stagestringssome'] = 'Hay {$a->staged} cadenas preparadas, {$a->committable} de ellas pueden implantarse';
$string['stagesubmit'] = 'Mandar cadenas a responsables (mantenedores) del idioma';
$string['stagetoolopen'] = 'Ir al \'stage\'';
$string['stagetranslation'] = 'Traducción';
$string['stagetranslation_help'] = 'Muestra la traducción preparada para ser implantada. El color del fondo de las celdas significa:

* Verde - Usted ha añadido una traducción faltante y se le permite implantarla.
* Amarillo . Usted ha modificado una cadena y se le permite implantarel cambio.
* Azul - Usted ha modificado la traducción o añadido una traducción faltante, pero no se le permite implantarla dentro del idioma dado.
* Sin color - la traducción preparada es la misma que la actual y por lo tanto no será implantada.';
$string['stageunstageall'] = 'Des-preparar todas';
$string['stashactions'] = 'Guardar trabajo en proceso';
$string['stashactions_help'] = 'El almacen (\'stash\') es una instantánea del \'stage\' actual. Los almacenes se pueden enviar a los responsables (mantenedores) oficiales del paquete de idioma para incluirse en el paquete de idioma.';
$string['stashapply'] = 'Aplicar';
$string['stashautosave'] = 'Almacén de respaldo guardado automáticamente';
$string['stashautosave_help'] = 'El almacén (\'stash\') contiene la instantánea más reciente de su \'stage\'. Usted puede usarla como un respaldo para casos en donde todas las cadenas sean des-preparadas por accidente, por ejemplo. Use la acción de \'Aplicar\' para copiar todas las cadenas almacenadas en el almacén de regreso a la zona de preparación del \'stage\' (sobrescribirá la cadena si ya estuviera preparada).';
$string['stashcomponents'] = '<span>Componentes:</span> {$a}';
$string['stashdownload'] = 'Descargar';
$string['stashdrop'] = 'Dejar caer';
$string['stashes'] = 'Almacenes';
$string['stashlanguages'] = '<span>Idiomas:</span> {$a}';
$string['stashpop'] = 'Pop';
$string['stashpush'] = 'Empujar todas las cadenas preparadas hacia un nuevo almacén';
$string['stashstrings'] = '<span>Número de cadenas:</span> {$a}';
$string['stashsubmit'] = 'Someter a responsables (mantenedores)';
$string['stashsubmitdetails'] = 'Detalles de lo que somete';
$string['stashsubmitmessage'] = 'Mensaje';
$string['stashsubmitsubject'] = 'Asunto';
$string['stashtitle'] = 'Título del almacén';
$string['stashtitledefault'] = 'Trabajo en progreso - {$a->time}';
$string['stringhistory'] = 'Historia';
$string['strings'] = 'Cadenas';
$string['submitting'] = 'Enviando una contribución';
$string['submitting_help'] = 'Esto mandará las cadenas traducidas a los responsables (mantenedores) oficiales del idioma. Ellos podrán aplicar su trabajo hacia la zona de preparación, revisarlo y eventualmente implantarlo. Por favor escriba un mensaje para ellos que describa su trabajo y porqué a Usted le gustaría ver que su contribución sea incluída.';
$string['targetversion'] = 'Versión destino';
$string['timeline'] = 'línea-de-tiempo';
$string['translatortool'] = 'Traductor';
$string['translatortoolopen'] = 'Abrir traductor AMOS';
$string['translatortranslation'] = 'Traducción';
$string['translatortranslation_help'] = 'Elija la celda para convertirla en el editor de entrada. Inserte la traducción y haga clic fuera de la celda para preparar la traducción en el \'stage\'. El color del fondo de las celdas significa:


* Verde - la cadena ya ha sido traducida, Usted puede eventualmente modificar la traducción
* Amarillo . la cadena puede estar des-actualizada. El original en inglés fue probablemente modificado después de que la cadena fuera traducida..
* Rojo la cadena aún no ha sido traducida.
* Azul - Usted ha modificado la traducción y ahora está preparada en el \'stage\'.
* Gris - No puede emplearse AMOS para traducir esta cadena. Por ejemplo: las cadenas para Moodle 1.9 deben ser editadas mediante el antiguo acceso CVS exclusivamente.

Los responsables (mantenedores) del idioma pueden ver un pequeño símbolo rojo en la esquina de las celdas que se les permite implantar.';
$string['typecontrib'] = 'Plugins no-estándard';
$string['typecore'] = 'Subsistemas del núcleo';
$string['typestandard'] = 'Plugins estándar';
$string['unableenfixaddon'] = 'Composturas al inglés son permitidas solamente para plugins estándares';
$string['unableenfixcountries'] = 'Los nombres de países son copiados de ISO 3166-1';
$string['unableunmaintained'] = 'El paquete de idioma \'{$a}\' por el momento no tiene mantenedor responsable, por lo que no se pueden aceptar contribuciones de traducciones. Por favor, considere ofrecerse como voluntario para convertirse en el mantenedor del paquete del idioma \'{$a}\' .';
$string['unstage'] = 'Des-preparar';
$string['unstageconfirm'] = '¿Realmente?';
$string['unstaging'] = 'Des-preparando';
$string['untranslate'] = 'des-traducir';
$string['untranslateconfirm'] = '<p>Usted va a quitar una traducción existente de la cadena <code>{$a->stringid}</code>, componente <code>{$a->component}</code>, de todas las versiones del paquete de idioma <code>{$a->language}</code>.</p><p>¿Está Usted seguro?</p>';
$string['untranslatetitle'] = 'Quitar traducción del paquete de idioma';
$string['untranslating'] = 'Des-traduciendo';
$string['version'] = 'Versión';
