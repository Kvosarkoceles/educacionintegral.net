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
 * Strings for component 'glossary', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   glossary
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Añadir categoría';
$string['addcomment'] = 'Añadir comentario';
$string['addentry'] = 'Añadir una nueva entrada';
$string['addingcomment'] = 'Añadir un comentario';
$string['alias'] = 'Palabra clave';
$string['aliases'] = 'Palabra(s) clave';
$string['aliases_help'] = 'Cada entrada del glosario puede tener asociad una lista de palabras (alias) claves. Si la entrada está auto-enlazada, entonces las palabras clave también estarán auto-enlazados.

Introduzca cada palabra clave en una línea nueva (sin separarlas por comas).';
$string['allcategories'] = 'Todas las categorías';
$string['allentries'] = 'TODAS';
$string['allowcomments'] = 'Permitir comentar las entradas';
$string['allowcomments_help'] = 'Si se habilita, todos los participantes con permiso para crear comentarios podrán añadirlos a las entradas del glosario.';
$string['allowduplicatedentries'] = 'Permitir entradas duplicadas';
$string['allowduplicatedentries_help'] = '<P>Si está habilitada, puede haber varias entradas con el mismo nombre de concepto.';
$string['allowprintview'] = 'Permitir vista impresión';
$string['allowprintview_help'] = '<p>Se puede permitir que los estudiantes usen la vista de impresión del glosario.</p>

<p>Usted puede elegir si desea activar o desactivar esta opción.</p>

<p>Los profesores pueden utilizar la vista de impresión en todo momento.</p>';
$string['andmorenewentries'] = 'y {$a} nuevas entradas más.';
$string['answer'] = 'Respuesta';
$string['approvaldisplayformat'] = 'Formato mostrar aprobación';
$string['approvaldisplayformat_help'] = 'Cuando se aprueban las entradas del glosario, Usted puede elegir emplear un formato de visualización diferente';
$string['approve'] = 'Aprobar';
$string['areaattachment'] = 'Archivos adjuntos';
$string['areaentry'] = 'Definiciones';
$string['areyousuredelete'] = '¿Realmente desea borrarla?';
$string['areyousuredeletecomment'] = '¿Está seguro de que desea borrar este comentario?';
$string['areyousureexport'] = '¿Realmente desea exportar esta entrada a';
$string['ascending'] = '(ascendente)';
$string['attachment'] = 'Adjunto';
$string['attachment_help'] = '<p>De forma opcional, usted puede adjuntar UN archivo desde su propia computadora a cualquier entrada del glosario. Este archivo se sube al servidor y se almacena con su entrada.</p> <p>Esta opción resulta útil cuando usted desea, por ejemplo, compartir una imagen o un documento Word.</p> <p>El archivo en cuestión puede ser de cualquier tipo, pero se recomienda que se denomine utilizando los sufijos estándar de 3 letras usados en internet, tales como .doc para un documento Word, .jpg o .png para una imagen, y así sucesivamente. Esto facilitará a otras personas descargar y ver en sus navegadores el archivo enviado.</p> <p>Si usted reedita una entrada y adjunta un nuevo archivo, quedarán reemplazados cualesquiera archivos asociados a dicha entrada.</p> <p>Si usted reedita una entrada con un archivo adjunto y deja este espacio en blanco, entonces el archivo adjunto original se conservará.</p>';
$string['author'] = 'autor';
$string['authorview'] = 'Vista por Autor';
$string['back'] = 'Volver';
$string['cachedef_concepts'] = 'Enlace a concepto';
$string['cantinsertcat'] = 'No se puede insertar la categoría';
$string['cantinsertrec'] = 'No se puede insertar el registro';
$string['cantinsertrel'] = 'No se puede insertar la relación registro-categoría';
$string['casesensitive'] = 'Esta entrada es en MAYÚSCULAS y minúsculas';
$string['casesensitive_help'] = '<P>Esta variable especifica si las MAYÚSCULAS y minúsculas deben coincidir
exactamente para crear el enlace automático a las entradas.</p>

<p>Por ejemplo, si se encuentra habilitada, la palabra "html" en un mensaje de
un foro no generará un hiperenlace a la entrada "HTML".</p>';
$string['cat'] = 'cat';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categorydeleted'] = 'Categoría eliminada';
$string['categoryview'] = 'Vista por Categoría';
$string['changeto'] = 'cambiar a {$a}';
$string['cnfallowcomments'] = 'Define si el glosario aceptará por defecto comentarios a las entradas';
$string['cnfallowdupentries'] = 'Define si el glosario aceptará por defecto entradas duplicadas';
$string['cnfapprovalstatus'] = 'Define el estatus por defecto de las entradas colocadas por los estudiantes';
$string['cnfcasesensitive'] = 'Define si una entrada, cuando es hiperenlace, es sensible al uso de MAYÚSCULAS y minúsculas';
$string['cnfdefaulthook'] = 'Seleccione la visualización por defecto para presentar al glosario por primera vez';
$string['cnfdefaultmode'] = 'Seleccione el marco por defecto para presentar al glosario por primera vez';
$string['cnffullmatch'] = 'Define si una entrada, cuando es hiperenlace, debe por defecto corresponder exactamente en sus MAYÚSCULAS y minúsculas con el texto objetivo';
$string['cnflinkentry'] = 'Define si una entrada debe ser automáticamente convertida en hiperenlace';
$string['cnflinkglossaries'] = 'Define si el glosario debe ser automáticamente convertido en hiperenlace';
$string['cnfrelatedview'] = 'Seleccione el formato de visualización para el hiperenlace automático.';
$string['cnfshowgroup'] = 'Especifique si mostrar o no el grupo.';
$string['cnfsortkey'] = 'Seleccione la clave de organización por defecto.';
$string['cnfsortorder'] = 'Seleccione el orden por defecto.';
$string['cnfstudentcanpost'] = 'Define si por defecto los estudiantes pueden o no colocar entradas';
$string['cnftabs'] = 'Seleccionar las pestañas visibles para este formato de glosario';
$string['comment'] = 'Comentario';
$string['commentdeleted'] = 'Se ha borrado el comentario.';
$string['comments'] = 'Comentarios';
$string['commentson'] = 'Comentarios sobre';
$string['commentupdated'] = 'Este comentario se ha actualizado';
$string['completionentries'] = 'El estudiante debe crear entradas:';
$string['completionentriesdesc'] = 'El estudiante debe crear al menos {$a} entrada(s)';
$string['completionentriesgroup'] = 'Requerir entradas';
$string['concept'] = 'Concepto';
$string['concepts'] = 'Conceptos';
$string['configenablerssfeeds'] = 'Esta opción habilita la posibilidad de canales RSS para todos los glosarios. Aún así necesitará activar manualmente los canales en los ajustes de cada glosario.';
$string['current'] = 'Actualmente ordenados {$a}';
$string['currentglossary'] = 'Glosario actual';
$string['date'] = 'fecha';
$string['dateview'] = 'Vista por Fecha';
$string['defaultapproval'] = 'Estado de aprobación por defecto';
$string['defaultapproval_help'] = 'Si se establece a No, las entradas requieren la aprobación de un profesor antes de que sean visibles por todos.';
$string['defaulthook'] = '\'Hook\' por defecto';
$string['defaultmode'] = 'Modo por defecto';
$string['defaultsortkey'] = 'Clave de clasificación por defecto';
$string['defaultsortorder'] = 'Orden de clasificación por defecto';
$string['definition'] = 'Definición';
$string['definitions'] = 'Definiciones';
$string['deletecategory'] = 'Eliminar categoría';
$string['deleteentry'] = 'Eliminar entrada';
$string['deleteentrya'] = 'Eliminar entrada {$a}';
$string['deletenotenrolled'] = 'Eliminar entradas de usuarios no inscritos';
$string['deletingcomment'] = 'Borrando comentario';
$string['deletingnoneemptycategory'] = 'Eliminar una categoría no eliminará las entradas. Si desea eliminar las entradas tendrá que hacerlo manualmente.';
$string['descending'] = 'descendente';
$string['destination'] = 'Destino de las entradas importadas';
$string['destination_help'] = '<P>Puede especificar dónde desea importar las entradas:</p>
<ul>
<li><strong>Glosario actual: </strong>Las entradas importadas se añadirán
  en el glosario abierto.</li>
<li><strong>Glosario nuevo: </strong>Se creará un nuevo glosario basado en la
  información encontrada en el archivo importado y luego las entradas serán
  añadidas al mismo.</li>
</ul>';
$string['disapprove'] = 'Deshacer aprobación';
$string['displayformat'] = 'Formato de muestra de entradas';
$string['displayformatcontinuous'] = 'Continuo sin autor';
$string['displayformatdefault'] = 'Poner por defecto el mismo que en el formato de visualización';
$string['displayformatdictionary'] = 'Simple, estilo diccionario';
$string['displayformatencyclopedia'] = 'Enciclopedia';
$string['displayformatentrylist'] = 'Lista de entradas';
$string['displayformatfaq'] = 'FAQ';
$string['displayformatfullwithauthor'] = 'Completo con autor';
$string['displayformatfullwithoutauthor'] = 'Completo sin autor';
$string['displayformat_help'] = 'Hay 7 formatos para mostrar:

* Simple, estilo Diccionario  - No se muestran autores y los anexos se muestran como enlaces
* Continuo sin autor - Las entradas se muestran una después de la otra sin separación, parte de los íconos para edición
* Completo con autor - Un formato semejante al de los foros, que muestra los datos del autor y con los archivos adjuntos que aparecen como enlaces.* Completo sin autor - Un formato semejante al de los foros, que no muestra al autor y donde los archivos adjuntos aparecen como enlaces.
* Enciclopedia - Semejante a "Completo con autor", pero en el que las imágenes adjuntas se muestran
en línea
* Lista de entradas - Los conceptos se enlistan como enlaces
* FAQ - Las palabras PREGUNTA y RESPUESTA se añaden al concepto y a la definición respectivamente';
$string['displayformats'] = 'Formatos de visualización';
$string['displayformatssetup'] = 'Ajustar formatos de visualización';
$string['duplicatecategory'] = 'Duplicar categoría';
$string['duplicateentry'] = 'Entrada duplicada';
$string['editalways'] = 'Permitir editar siempre';
$string['editalways_help'] = '<P>Esta opción permite decidir si los estudiantes pueden editar sus entradas
en cualquier momento.

<P>Usted puede seleccionar:

<UL>
<LI><B>Sí:</B> Las entradas pueden editarse siempre.

<LI><B>No:</B> Las entradas son editables durante un período especificado.
</UL>';
$string['editcategories'] = 'Editar categorías';
$string['editcategory'] = 'Editar categorís';
$string['editentry'] = 'Editar entrada';
$string['editentrya'] = 'Editar entrada {$a}';
$string['editingcomment'] = 'Editando un comentario';
$string['entbypage'] = 'Entradas por página';
$string['entries'] = 'Entradas';
$string['entrieswithoutcategory'] = 'Entradas sin categoría';
$string['entry'] = 'Entrada';
$string['entryalreadyexist'] = 'Esta entrada ya existe.';
$string['entryapproved'] = 'Esta entrada ha sido aprobada';
$string['entrydeleted'] = 'Entrada borrada';
$string['entryexported'] = 'Entrada exportada con éxito';
$string['entryishidden'] = '(esta entrada está oculta)';
$string['entryleveldefaultsettings'] = 'Ajustes por defecto del nivel de entrada';
$string['entrylink'] = 'Enlace para entrar: {$a}';
$string['entrynotapproved'] = 'Entrada no aprobada';
$string['entrysaved'] = 'Esta entrada ha sido guardada';
$string['entryupdated'] = 'Esta entrada ha sido actualizada';
$string['entryusedynalink'] = 'Esta entrada será enlazada automáticamente';
$string['entryusedynalink_help'] = 'Si el <strong>Enlace automático al glosario</strong> ha sido habilitada por un administrador y esta opción está activada, la opción del formato "Agregar una nueva entrada" permite vincular automáticamente las palabras y frases del concepto allá donde aparezcan en el resto del curso.';
$string['errcannoteditothers'] = 'No puede editar entradas de otras personas.';
$string['errconceptalreadyexists'] = 'Este concepto ya existe. En este glosario no se permiten duplicados.';
$string['errdeltimeexpired'] = 'No puede eliminar esto: El tiempo ha expirado.';
$string['erredittimeexpired'] = 'El tiempo de edición de esta entrada ha expirado.';
$string['errorparsingxml'] = 'Error al analizar el archivo. Asegúrese de que la sintaxis XML es válida.';
$string['eventcategorycreated'] = 'La categoría ha sido creada';
$string['eventcategorydeleted'] = 'La categoría ha sido eliminada';
$string['eventcategoryupdated'] = 'La categoría ha sido actualizada';
$string['evententryapproved'] = 'La entrada ha sido aprobada';
$string['evententrycreated'] = 'La entrada ha sido creada';
$string['evententrydeleted'] = 'La entrada ha sido eliminada';
$string['evententrydisapproved'] = 'La entrada ha sido des-aprobada';
$string['evententryupdated'] = 'La entrada ha sido actualizada';
$string['evententryviewed'] = 'La entrada ha sido vista';
$string['explainaddentry'] = 'Añadir una nueva entrada al glosario actual.<br />Concepto y Definición son campos obligatorios.';
$string['explainall'] = 'Muestra TODAS las entradas en una página.';
$string['explainalphabet'] = 'Navegue por el glosario usando este índice.';
$string['explainexport'] = 'Haga clic en el botón inferior para exportar entradas del Glosario.<br />Usted puede importarlas en cualquier momento que así lo desee en este o en otros cursos.<p>Por favor tenga en cuenta que los anexos (como por ejemplo, las imágenes) y los autores no son exportados.</p>';
$string['explainimport'] = 'Debe especificar el archivo a importar y definir el criterio del proceso.<p>Someta su solicitud y revise los resultados.</p>';
$string['explainspecial'] = 'Muestra las entradas que no comienzan con una letra';
$string['exportedentry'] = 'Entrada exportada';
$string['exportentries'] = 'Exportar entradas';
$string['exportentriestoxml'] = 'Exportar entradas a archivo XML';
$string['exportfile'] = 'Exportar entradas a un archivo';
$string['exportglossary'] = 'Exportar glosario';
$string['exporttomainglossary'] = 'Exportar al glosario principal';
$string['filetoimport'] = 'Archivo a importar';
$string['filetoimport_help'] = '<P ALIGN=CENTER><b>Archivos a importar</b></P>

<P>Seleccione en su computadora los archivos XML que contienen las entradas a
importar.</p>';
$string['fillfields'] = 'Los campos Concepto y Definición son obligatorios.';
$string['filtername'] = 'Enlace automático a glosario';
$string['fullmatch'] = 'Sólo enlazar palabras completas';
$string['fullmatch_help'] = '<p>Esta variable define si el enlace automático se hará con palabras completas o no.

<p>Por ejemplo, si está habilitada, la entrada "casa" no se enlazará automáticamente
con la palabra "casamiento".</p>';
$string['glossary:addinstance'] = 'Añadir un nuevo glosario';
$string['glossary:approve'] = 'Aprobar entradas, y desaprobar las aprobadas';
$string['glossary:comment'] = 'Crear comentarios';
$string['glossary:export'] = 'Exportar entradas';
$string['glossary:exportentry'] = 'Exportar entrada única';
$string['glossary:exportownentry'] = 'Exportar entrada única de Usted';
$string['glossary:import'] = 'Importar entradas';
$string['glossaryleveldefaultsettings'] = 'Ajustes por defecto del nivel de glosario';
$string['glossary:managecategories'] = 'Gestionar categorías';
$string['glossary:managecomments'] = 'Gestionar comentarios';
$string['glossary:manageentries'] = 'Gestionar entradas';
$string['glossary:rate'] = 'Valorar entradas';
$string['glossarytype'] = 'Tipo de glosario';
$string['glossarytype_help'] = 'Un glosario principal es un glosario en el que se pueden importar entradas de glosarios secundarios. Solamente puede haber un glosario principal en cada curso. Si no se necesita importar entradas del glosario, todos los glosarios en el curso pueden ser glosarios secundarios.';
$string['glossary:view'] = 'Ver glosario';
$string['glossary:viewallratings'] = 'Ver las valuaciones crudas emitidas por las usuarios';
$string['glossary:viewanyrating'] = 'Ver el total de valuaciones que alguien recibió';
$string['glossary:viewrating'] = 'Ver valuación total recibida';
$string['glossary:write'] = 'Crear nuevas entradas';
$string['guestnoedit'] = 'Los invitados no pueden editar glosarios';
$string['importcategories'] = 'Categorías a donde importar';
$string['importedcategories'] = 'Categorías importadas';
$string['importedentries'] = 'Entradas importadas';
$string['importentries'] = 'Importar entradas';
$string['importentriesfromxml'] = 'Importar entradas desde archivo XML';
$string['includegroupbreaks'] = 'Incluir segmentaciones de grupo';
$string['indicator:cognitivedepth'] = 'Glosario cognitiva';
$string['indicator:cognitivedepthdef'] = 'Glosario cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Glosario durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Glosario.';
$string['indicator:socialbreadth'] = 'Glosario social';
$string['indicator:socialbreadthdef'] = 'Glosario social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Glosario durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Glosario.';
$string['isglobal'] = '¿Este es el glosario global?';
$string['isglobal_help'] = 'Un glosario global tiene entradas que están enlazadas desde cualquier lugar del sitio, no solo desde el curso en que reside el glosario. Únicamente los administradores pueden determinar que un glosario sea global.';
$string['letter'] = 'letra';
$string['linkcategory'] = 'Enlazar automáticamente esta categoría';
$string['linkcategory_help'] = 'Si la opción <strong>Enlace automático al glosario</strong> ha sido habilitada por un administrador y la opción <Hiperenlace automático</strong> está habilitada en el glosario, el nombre de la categoría se enlazará automáticamente cuando aparezca en cualquier otro sitio del curso. Cuando un participante siga un enlace de nombre de la categoría, será llevado a la "Búsqueda por categoría" en la página del glosario.';
$string['linking'] = 'Auto-enlace';
$string['mainglossary'] = 'Glosario principal';
$string['maxtimehaspassed'] = '¡Lo sentimos, pero ya excedió el tiempo máximo para editar este comentario  ({$a}) !';
$string['modulename'] = 'Glosario';
$string['modulename_help'] = 'El módulo de actividad Glosario permite a los participantes crear y mantener una lista de definiciones, igual que un diccionario, o colectar y organizar recursos o información.

Un profesor puede permitir que se anexen archivos a las entradas del glosario. Las imágenes anexas se muestran en la entrada del glosario. Las entradas se pueden emplear en búsquedas, o se pueden revisar en órden alfabético o por categoría, fecha o autor. Las entradas pueden ser aprobadas por defecto o puede requerirse aprobación por un profesor antes de que sean visibles para todos.

Si se habilita el filtro de auto-enlazado del glosario, las entradas serán automáticamente enlazadas a donde las palabras o frases del concepto aparezcan dentro del curso.

Un profesor puede permitir comentarios a las entradas. Las entradas pueden calificarse por los profesores o alumnos (evaluación por pares). Las calificaciones de entradas se agregan para formar una calificación final que se guarda en el libro de calificaciones.

Los glosarios tienen muchos usos como

* Un banco colaborativo de palabras clave
* Un espacio para \'empezar a conocerse\' donde los estudiantes ponen su nombre y detalles personales (NOTA: Tener cuidado con reglamentación de datos personales en cada país)
* Un recurso de \'tips útiles\' sobre las mejores prácticas en una materia práctica
* Una zona para compartir videos, imágenes o archivos de sonido
* Un recurso de revisión sobre datos que debemos recordar';
$string['modulenameplural'] = 'Glosarios';
$string['newentries'] = 'Nuevas entradas al glosario';
$string['newglossary'] = 'Glosario nuevo';
$string['newglossarycreated'] = 'Se ha creado nuevo glosario.';
$string['newglossaryentries'] = 'Nuevas entradas en el glosario:';
$string['nocomment'] = 'No se encontraron comentarios';
$string['nocomments'] = '(Entrada sin comentarios)';
$string['noconceptfound'] = 'No se encontraron conceptos o definiciones.';
$string['noentries'] = 'No se encontraron entradas en esta sección';
$string['noentry'] = 'No se econtró ninguna entrada.';
$string['nopermissiontodelcomment'] = 'No puede eliminar los comentarios de otras personas.';
$string['nopermissiontodelinglossary'] = 'No puede agregar comentarios a este glosario.';
$string['nopermissiontoviewresult'] = 'Sólo puede mirar los resultados de sus propias entradas';
$string['notapproved'] = 'Entrada de glosario aún sin aprobar';
$string['notcategorised'] = 'No clasificado';
$string['numberofentries'] = 'Número de entradas';
$string['onebyline'] = '(uno por línea)';
$string['page-mod-glossary-edit'] = 'Página de entrada para añadir/editar Glosario';
$string['page-mod-glossary-view'] = 'Ver página para editar Glosario';
$string['page-mod-glossary-x'] = 'Cualquier página del módulo Glosario';
$string['pluginadministration'] = 'Administración del glosario';
$string['pluginname'] = 'Glosario';
$string['popupformat'] = 'Formato \'popup';
$string['print'] = 'Imprimir';
$string['printerfriendly'] = 'Versión para impresión';
$string['printviewnotallowed'] = 'No se permite vista de impresión';
$string['privacy'] = 'Privacidad de resultados';
$string['privacy:metadata:core_comments'] = 'Comentarios hechos en definiciones del Glosario son almacenados usando el sistema core_comments';
$string['privacy:metadata:core_files'] = 'Archivos enlazados a definiciones del glosario son almacenados usando el sistema core_files';
$string['privacy:metadata:core_rating'] = 'Valoraciones añadidas a entradas del Glosrio son almacenads usando el sitema core_rating';
$string['privacy:metadata:core_tag'] = 'Marcas añadidas a definiciones del Glosario son almacenadas usando el sistema core_tag';
$string['privacy:metadata:glossary_entries'] = 'Información acerca de las entradas del usuario para una actividad de Glosario dada';
$string['privacy:metadata:glossary_entries:attachment'] = 'El anexo de la entrada que el usuario añadió';
$string['privacy:metadata:glossary_entries:concept'] = 'El concepto de la entrada que el usuario añadió';
$string['privacy:metadata:glossary_entries:definition'] = 'La definición de la entrada que el usuario añadió';
$string['privacy:metadata:glossary_entries:glossaryid'] = 'La ID de la actividad de Glosario';
$string['privacy:metadata:glossary_entries:timemodified'] = 'El sello de tiempo que indica cuando fue modificada la entrada del glosario por el usuario.';
$string['privacy:metadata:glossary_entries:userid'] = 'La ID del usuario que está añadiendo la entrada del Glosario';
$string['question'] = 'Pregunta';
$string['rejectedentries'] = 'Entradas rechazadas';
$string['rejectionrpt'] = 'Reporte de rechazo';
$string['removeallglossarytags'] = 'Quitar todas las marcas del glosario';
$string['resetglossaries'] = 'Eliminar entradas de';
$string['resetglossariesall'] = 'Eliminar entradas de todos los glosarios';
$string['rssarticles'] = 'Número de artículos recientes RSS';
$string['rssarticles_help'] = '<P>Esta opción le permite seleccionar el número de artículos a incluir en el Canal RSS.

<P>Un número entre 5 y 20 debería ser apropiado para la mayoría de los glosarios. Auméntelo si se trata de un glosario muy utilizado.';
$string['rsssubscriberss'] = 'Mostrar canal RSS para los conceptos \'{$a}\'';
$string['rsstype'] = 'Canal RSS de esta actividad';
$string['rsstype_help'] = '<P>Esta opción le permite habilitar los canales RSS en este glosario.

<P>Puede escoger entre dos tipos:

<UL>
<LI><B>Con autor:</B> Con esta opción, los datos generados incluirán el nombre del autor en cada artículo.

<LI><B>Sin autor:</B> Con esta opción, los datos generados no incluirán el nombre del autor en cada artículo.
</UL>';
$string['search:activity'] = 'Glosario - información de actividad';
$string['search:entry'] = 'Glosario - entradas';
$string['searchindefinition'] = '¿Buscar en conceptos y definiciones?';
$string['secondaryglossary'] = 'Glosario secundario';
$string['showall'] = 'Mostrar enlace \'TODAS';
$string['showall_help'] = 'Si se activa, los participantes pueden buscar todas las entradas a la vez.';
$string['showalphabet'] = 'Mostrar enlaces a alfabeto';
$string['showalphabet_help'] = 'Si se activa, los participantes pueden buscar en el glosario según las letras del alfabeto.';
$string['showspecial'] = 'Mostrar enlace \'Especial';
$string['showspecial_help'] = 'Si se activa, los participantes pueden buscar en el glosario según caracteres especiales, como por ejemplo @ y #.';
$string['sortby'] = 'Ordenar por';
$string['sortbycreation'] = 'Por fecha de creación';
$string['sortbylastupdate'] = 'Por fecha de actualización';
$string['sortchronogically'] = 'Buscar cronológicamente';
$string['special'] = 'Especial';
$string['standardview'] = 'Vista Alfabética';
$string['studentcanpost'] = 'Los estudiantes pueden agregar entradas';
$string['tagarea_glossary_entries'] = 'Entradas del glosario';
$string['tagsdeleted'] = 'Se han eliminado marcas del glosario';
$string['totalentries'] = 'Total de entradas';
$string['usedynalink'] = 'Hiperenlace automático';
$string['usedynalink_help'] = 'Si el <strong>Enlace automático al glosario</strong> ha sido habilitada por un administrador y esta opción está activada, la opción del formato "Añadir una nueva entrada" permite vincular automáticamente las palabras y frases del concepto allá donde aparezcan en el resto del curso.';
$string['visibletabs'] = 'Pestañas visibles';
$string['waitingapproval'] = 'Esperando aprobación';
$string['warningstudentcapost'] = '(Esto sólo aplica si el glosario no es el principal)';
$string['withauthor'] = 'Conceptos con autor';
$string['withoutauthor'] = 'Conceptos sin autor';
$string['writtenby'] = 'por';
$string['youarenottheauthor'] = 'Dado que usted no es el autor de este comentario, no está autorizado a modificarlo.';
