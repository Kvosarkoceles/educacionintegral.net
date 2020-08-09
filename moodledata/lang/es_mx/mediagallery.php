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
 * Strings for component 'mediagallery', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   mediagallery
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Añadir una galería';
$string['addanitem'] = 'Añadir un ítem';
$string['addbulkitems'] = 'Añadir ítems masivamente';
$string['addfiles'] = 'Añadir archivo(s)';
$string['addsamplegallery'] = 'Añadir una galería d emuestra';
$string['allowcomments'] = 'Permitir comentarios';
$string['allowcomments_help'] = 'Pemitirle a los usuarios el comentar acerca de ítems y galerías.';
$string['allowlikes'] = 'Permitir \'me gusta\'';
$string['allowlikes_help'] = 'Permitirles a los usuarios que seleccionen \'me gusta\' en ítems de una galería.';
$string['areagallery'] = 'Galerías';
$string['areaitem'] = 'Ítems';
$string['arealowres'] = 'Baja resuloción';
$string['areathumbnail'] = 'Estampillas';
$string['assignedit'] = 'Editar tarea';
$string['assignsubmit'] = 'Enviar tarea';
$string['assignsubmitted'] = 'Tarea enviada';
$string['automatic'] = 'Automático';
$string['beingprocessed'] = 'procesándose';
$string['bottom'] = 'Fondo';
$string['broadcaster'] = 'Comunicador';
$string['broadcaster_help'] = '¿Quién fue el distribuidor que comunicó este trabajo?';
$string['caption'] = 'Letrerito';
$string['caption_help'] = 'EL letrerito para este ítem en su galería. Este letrerito se mustrara junto al ítem. Si Usted opta por dejar esto vacío, en su lugar se mostrará el nombre del archivo (o la URL) como el letrerito.';
$string['captionposition'] = 'Posición dle letrerito';
$string['carousel'] = 'Carrusel';
$string['choosecontent'] = 'Seleccione, ya sea un archivo a subir, o un URL en las opciones inferiores.';
$string['close'] = 'Cerrar';
$string['collection'] = 'Colección';
$string['collection_help'] = 'La colección de la cual buscar.';
$string['collectionwasdeleted'] = 'Lo siento; esta colección ya no existe y ha sido eliminada de este curso.';
$string['collmode'] = 'Modo colección';
$string['collmode_help'] = 'Esto decide si es que la colección estará puramente en Moodle, o si estará enlazada a laCaja. Una vez configurado, este valor no puede ser cambiado.

<ul><li>Estándar: En este modo, la colección, sus galerías y sus ítems, están almacenados puramente en Moodle.</li></ul>';
$string['colltype'] = 'Tipo de colección';
$string['colltypeassignment'] = 'Colección de tarea';
$string['colltypecontributed'] = 'Colección contribuída';
$string['colltype_help'] = 'El tipo de colección determina que nivel de usuarios puede interactuar con la colección y sus contenidos.

<ul>
<li>Colección de instructor: Solamente usuarios que puedan calificar la colección pueden añadir/editar el contenido en su interior. Esto es usado primariamente para que los instructores creen colecciones de ejemplo, o un conjunto de galerías sin permitirles a los usuarios que ellos creen las suyas propias.</li>
<li>Colecciones contribuídas: Se les permite a los usuarios crear sus propias galerías e ítems, pero la colección no puede usarse como parte de una tarea.</li>
<li>Colección de tarea: Los usuarios solamente pueden ver las galerías que hayan creado ellos mismos o su grupo (si estuvieran en modo de grupo). Pueden usarse como parte de un envío de tarea.</li>
<li>Colección de tarea revisada por pares. Los usuarios pueden ver las galerías de otros usuarios/grupos y gustar (like) o comentar en ellas si esas características estuvieran habilitadas. Pueden usarse como parte de un envío de tarea.</li></ul>';
$string['colltypeinstructor'] = 'Colección de instructor';
$string['colltypepeerreviewed'] = 'Colección de tarea revisada por pares';
$string['colltypesingle'] = 'Colección única';
$string['comments'] = 'Comentarios';
$string['completegallery'] = 'Galería completa';
$string['configdisablestandardgallery'] = 'Impedir que los usuaros creen galerías estándar.';
$string['configenablethebox'] = 'Esto necesita ser habilitado para que los usuarios puedan crear nuevas colecciones y contenido basados en laCaja. Si se deshabilita, las colecciones de laCaja existentes mostrarán un mensaje que dice que la actividad está actualmente no-disponible. Las colecciones estándares no serán afectadas.';
$string['configmaxbytes'] = 'Tamaño máximo del archivo del ítem para todas las colecciones d emedios en el sitio (sujeto a los límites del curso y otras configuraciones locales)';
$string['confirmcollectiondelete'] = 'Confirmar eliminación de colección';
$string['confirmgallerydelete'] = 'Confirmar eliminación de galería';
$string['confirmitemdelete'] = 'Confirmar eliminación de ítem';
$string['content'] = 'Contenido';
$string['contentbulk'] = 'Contenido';
$string['contentbulkheader'] = 'Aquí puede Usted subir un archivo ZIP lleno de medios. Cada uno de los archivos dentro del ZIP será añadido como un ítem en la galería, por lo que debe asegurarse de en este archivo solamente estén los archivos que Usted desea subir antes de enviarlo. Se ingnorarán las carpetas dentro del archivo.';
$string['contentbulk_help'] = 'Usted puede seleccionar un archivo ZIP que contenga múltiples imágenes, el cual será extraído dentro del directorio de imágenes depués de subirlo.';
$string['content_help'] = 'El ítem que quiere añadir a su galería';
$string['contentlinked'] = 'Contenido';
$string['contentlinked_help'] = 'Una vez que un ítem esté enlazado al contenido en laCaja, Usted no puede cambiar el archivo enlazado.';
$string['contentlinkedinfo'] = 'Este ítem está enlazado al archivo {$a} en laCaja.';
$string['contributable'] = 'Contribuíble';
$string['contributable_help'] = 'Cuando un galería es contribuíble, les permite a otros usuarios que añadan contenido a la galería de Usted. Ellos solamente estarán limitados a editar sus propios étems. el crador de la galería tendrá la habilidad para quitar ítems de la galería.';
$string['copyright'] = 'Copyright (Derechos de Autor)';
$string['copyright_help'] = 'Esto define cual licencia de copyright (derecho de autor)  está configurada para todos los ítems que Usted suba mediante este formato.';
$string['createdby'] = 'Creada por: {$a}';
$string['creator'] = 'Creador';
$string['datecreated'] = 'Fecha de creación';
$string['deletegallery'] = 'Eliminar galería';
$string['deleteitem'] = 'Eliminar ítem';
$string['deleteitemtype'] = 'Eliminar {$a}';
$string['deleteorremovecollection'] = 'Si Usted desea quitar el enlace a la colección sin eliminar el contenido haga clic en enviar.<br/><br/>

Si Usted desea quitar el enlace a la colección y eliminar el contenido en su interior, escriba DELETE en el área_de_texto inferior y haga clic en enviar. DELETE es ELIMINAR en idioma inglés.';
$string['deleteorremovecollectionwarn'] = 'Al eliminar, Usted reconoce que Usted está:<br/>
- quitando este enlace a la colección de medios<br/>
- eliminando lacolección y todas las galerías y  todo el contenido de laCaja<br/>
- deshabilitando todos los enlaces hechos en otros cursos hacia esta colección o su contenido';
$string['deleteorremovegallery'] = 'Si Usted desea quitar el enlace a la galería sin eliminar el contenido haga clic enviar.<br/><br/>

Si Usted desea quitar el enlace a la galería y eliminar el contenido en su interior, escriba DELETE en el área_de_texto inferior y haga clic en enviar. DELETE es ELIMINAR en idioma inglés.';
$string['deleteorremovegallerywarn'] = 'Al eliminar, Usted reconoce que Usted está:<br/>
- quitando este enlace a la galería de medios<br/>
- eliminando la galería de medios y todo el contenido de laCaja<br/>
- deshabilitando todos los enlaces hechos en otros cursos hacia esta galería de medios o su contenido';
$string['deleteorremoveitem'] = 'Si Usted quiere quitar el ítem de la galería sin eliminar el contenido haga clic en enviar.<br/><br/>

Si Usted quiere quitar el enlace hacia la galería y eliminar el tipo de contenido escriba DELETE -lo que inglés significa ELIMINAR- en la caja_de_texto inferior y haga clicc en enviar.';
$string['deleteorremoveitemwarn'] = 'Al eliminar, Usted reconoce que Usted está:<br/>
- quitando este enlace al ítem de medios<br/>
- quitando el ítem de medios de laCaja<br/>
- deshabilitando todos los enlaces hechos en otros cursos hacia este ítem de medios';
$string['disablestandardgallery'] = 'DEshabilitar galerías estándar';
$string['displayfullcaption'] = 'Mostrar texto completo de subtítulo';
$string['download'] = 'Descargar';
$string['editgallery'] = 'Editar galería';
$string['editgallerysettings'] = 'Editar configuraciones de Galería';
$string['edititem'] = 'Editar ítem';
$string['edititemtype'] = 'Editar {$a}';
$string['editthisgallery'] = 'Editar esta galería';
$string['enablethebox'] = 'Habilitar laCaja';
$string['enforcedefaults'] = 'Hacer obligatorios valores por defecto de galería';
$string['enforcedefaults_help'] = 'Si se habilita, entonces los valores por defecto de la galería determinados por el instructor son obligatorios.';
$string['errorchooseimportoption'] = 'Por favor, seleccione una opción para importar';
$string['errornotyouritem'] = 'Usted no puede editar este objeto de medio, pertenece a otro usuario.';
$string['errortheboxunavailable'] = 'Lo sentimos, parece que laCaja está no-disponible ahorita. Por favor inténtelo después nuevamente.';
$string['errortoomanygalleries'] = 'Lo sentimos; Usted o su grupo ha excedido el número máximo de galerías permitidas dentro de esta colección ({$a}).';
$string['errortoomanyitems'] = 'Lo sentimos, esta galería ya tiene el  número máximo de ítems permitidos ({$a}).';
$string['eventcollectiondeleted'] = 'Colección eliminada';
$string['eventgallerycreated'] = 'Galería creada';
$string['eventgallerydeleted'] = 'Galería eliminada';
$string['eventgalleryupdated'] = 'Galería actualizada';
$string['eventgalleryviewed'] = 'Galería vista';
$string['eventitemcreated'] = 'Ítem creado';
$string['eventitemdeleted'] = 'Ítem eliminado';
$string['eventitemupdated'] = 'Ítem actualizado';
$string['exifmissing'] = 'Sin esto, los archivos .jpg/tiff no pueden ser rotados a la orientación correcta en colecciones de medios.';
$string['export'] = 'Exportar';
$string['exportascsv'] = 'Exportar como CSV';
$string['exportgallery'] = 'Exportar galería';
$string['externalurl'] = 'URL externa';
$string['externalurl_help'] = 'Actualmente están soportados enlaces a imaégenes y a videos de YouTube.';
$string['filename'] = 'Nombre del archivo';
$string['filesize'] = 'Tamaño del archivo';
$string['foundxresults'] = 'Se encontraron {$a} resultado(s):';
$string['gallery'] = 'Galería';
$string['galleryfocus'] = 'Foco de la Galería';
$string['galleryfocus_help'] = 'El enfoque por defecto de la galería (determina que tipos_de_archivos están presentes como el enfoque de la galería). Si se configura como una galería YouTube, el enfoque está bloqueado a Video.';
$string['galleryname'] = 'Nombre de la galería';
$string['gallerythumbnail'] = 'Usar como miniatura';
$string['gallerythumbnail_help'] = 'Si se selecciona, la miniatura para este ítem será usada como la miniatura para la galería.';
$string['galleryviewoptions'] = 'Opciones para vista de galería';
$string['galleryviewoptions_help'] = 'Determina las opciones de vista de galería que están disponible para los estudiantes.';
$string['gridview'] = 'Vista de rejilla';
$string['gridviewcolumns'] = 'Columnas en vista de rejilla';
$string['gridviewcolumns_help'] = 'En vista de rejilla, el número de columnas mostradas.';
$string['gridviewrows'] = 'Filas en vista de rejilla';
$string['gridviewrows_help'] = 'En vista de rejilla, el número de filas mostradas.';
$string['group'] = 'Grupo';
$string['group_help'] = 'Como Usted es miembro de varios grupos (o tiene permiso para gestionar grupos en este curso), este es el grupo con el cual Usted desea asociar esta galería.';
$string['information'] = 'Información';
$string['itemdisplay'] = 'Mostrar ítem';
$string['itemdisplay_help'] = 'Incluir este ítem dentro de la vista de galería (por ejemplo, carrusel).';
$string['like'] = 'Me_Gusta';
$string['likedby'] = 'Gustado por';
$string['maxbytes'] = 'Tamaño máximo por ítem';
$string['maxgalleries'] = 'Número máximo de galerías por usuario/grupo';
$string['maxgalleries_help'] = 'El número máximo de galerías que un usuario (o grupo, al usar modos de grupos) puede crear en esta colección.

Nota: para colecciones de instructor, esto es siempre ilimitado.';
$string['maxgalleriesreached'] = 'Númeromáximo de galerías añadidas';
$string['maxitems'] = 'Número máximo de ítems por galería';
$string['maxitems_help'] = 'El número máximo de ítems que un usuario puede poner en una galería en esta colección.

Nota: para colecciones de instructor, esto es siempre ilimitado.';
$string['maxitemsreached'] = 'Número máximo de ítems añadidos';
$string['mediagallery'] = 'Colección de medios';
$string['mediagallery:addinstance'] = 'Añadir una instancia de colección de medios';
$string['mediagallery:comment'] = 'Comentar acerca de un ítem o una galería de colección de medios';
$string['mediagalleryfieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['mediagallery:grade'] = 'Calificar galería de medios';
$string['mediagallery:like'] = 'Habilidar para \'Gustar\' ítems de una colección de medios';
$string['mediagallery:manage'] = 'Gestionar una instancia de Colección de medios';
$string['mediagalleryname'] = 'Nombre de colección de medios';
$string['mediagalleryname_help'] = 'El nombre que Usted quiere darle a su colección de medios';
$string['mediagallery:viewall'] = 'Habilidad para ver todas las galerías en una Colección de medios';
$string['mediainformation'] = 'Información del medio';
$string['mediasize'] = 'Tamaño del medio';
$string['mediasizelg'] = 'Grande';
$string['mediasizemd'] = 'Mediano';
$string['mediasizesm'] = 'Pequeño';
$string['mediatype'] = 'Tipo de Medio';
$string['medium'] = 'Medio';
$string['medium_help'] = 'El medio usado para crear el trabajo (pintura, fotografía, sonido, etc).';
$string['metainfobulkheader'] = 'Los valores inferiores se usarán como los metadatos iniciales para cada uno de los ítems añadidos arriba.';
$string['mode'] = 'Modo de Galería';
$string['mode_help'] = 'Esto define el tipo de contenido que la galería soporta. Una vez configurado, este valor no puede ser cambiado.

<ul><li>Estándar: En este modo, los usuarios pueden añadir cualquier tipo de contenido de medios que deseen.</li>
<li>YouTube: En este modo, solamente pueden añadirse videos YouTube a la galería.</li></ul>';
$string['modestandard'] = 'Estándar';
$string['modethebox'] = 'laCaja';
$string['modeyoutube'] = 'YouTube';
$string['modulename'] = 'Colección de medios';
$string['modulename_help'] = 'Usar el módulo de Colección de medios para crear galerías de contenido de medios.

Los usuarios pueden crear sus propias galerías de imágenes, video o audio, ya sea individualmente o en grupos.

El contenido subido será presentado, ya sea en formato de  carrusel o de rejilla, como miniaturas. Elija cualquiera de las miniaturas para centrar la imagen y permitirle navegar dentro de la galería. Los usuarios pueden seleccionar \'Me Gusta\' y comentar sobre el contenido que pueden ver en su propia galería y en las de otros.';
$string['modulenameplural'] = 'Colecciones de medios';
$string['moralrights'] = 'Derechos morales';
$string['moralrights_help'] = '¿ Desea hacer valer sus derechos morales ?

Al elegir \'Si\', Usted está dando su consentimiento para que potencialmente, este ítem pueda usarse como una muestra de trabajo.';
$string['noitemsadded'] = 'No se han añadido ítems a esta galería';
$string['noitemsfound'] = 'No se encontraron ítems';
$string['noitemsselected'] = 'No se han seleccionado ítems para exportar';
$string['originalauthor'] = 'Autor original';
$string['originalauthor_help'] = 'El autor original del ítem';
$string['other'] = 'otro';
$string['otherfiles'] = 'Otros archivos';
$string['others'] = 'otros';
$string['pluginadministration'] = 'Administarción de colección de medios';
$string['pluginname'] = 'Colección de medios';
$string['privacy:metadata:core_comments'] = 'Comentarios asociados con galerías de colecciones de medios o ítems.';
$string['privacy:metadata:core_files'] = 'Marcas asociadas con galerías de colección de medios o ítems';
$string['privacy:metadata:core_tag'] = 'Marcas asociadas con galerías de colección de medios o ítems';
$string['privacy:metadata:mediagallery'] = 'Información acerca de las galerías de medios que un usuario ha creado.';
$string['privacy:metadata:mediagallery_gallery'] = 'Información acerca de las galerías de medios que un usuario ha creado.';
$string['privacy:metadata:mediagallery_gallery:groupid'] = 'Cual ID del grupo de quienes crearon la galería como una parte de.';
$string['privacy:metadata:mediagallery_gallery:instanceid'] = 'La ID del ítem de mediagallery para el cual el usuario está proporcionando una retroalimentaación.';
$string['privacy:metadata:mediagallery_gallery:name'] = 'El nombre de la galería.';
$string['privacy:metadata:mediagallery_gallery:userid'] = 'La ID del usuario que creó la galería.';
$string['privacy:metadata:mediagallery:id'] = 'La ID de la colección de medios.';
$string['privacy:metadata:mediagallery_item'] = 'Información acerca de los ítems de medios que un usuario ha creado.';
$string['privacy:metadata:mediagallery_item:broadcaster'] = 'Locutor del trabajo.';
$string['privacy:metadata:mediagallery_item:caption'] = 'El letrerito que el usuario dio al ítem.';
$string['privacy:metadata:mediagallery_item:description'] = 'La descripción que el usuario dio al ítem.';
$string['privacy:metadata:mediagallery_item:externalurl'] = 'La URL externa, si acaso, que referencía el ítem.';
$string['privacy:metadata:mediagallery_item:galleryid'] = 'La ID de la galería a la que pertenece el ítem.';
$string['privacy:metadata:mediagallery_item:medium'] = 'Medio usado para crear el trabajo.';
$string['privacy:metadata:mediagallery_item:moralrights'] = 'Si el usuario reclamó sus derechos morales sobre el ítem.';
$string['privacy:metadata:mediagallery_item:originalauthor'] = 'Autor/creador original del trabajo.';
$string['privacy:metadata:mediagallery_item:productiondate'] = 'Fecha y hora de creación de la pieza.';
$string['privacy:metadata:mediagallery_item:publisher'] = 'Publicador (casa editorial) del trabajo.';
$string['privacy:metadata:mediagallery_item:reference'] = 'Referencia a la colección a la cual pertenece el trabajo.';
$string['privacy:metadata:mediagallery_item:timecreated'] = 'La hora de cuando el usuario creó el ítem.';
$string['privacy:metadata:mediagallery_item:userid'] = 'La ID del usuario que creó el ítem.';
$string['privacy:metadata:mediagallery:name'] = 'El nombre de la colección de medios.';
$string['privacy:metadata:mediagallery_userfeedback'] = 'Información acerca de la retroalimentación del usuario en un ítem mediagallery dado';
$string['privacy:metadata:mediagallery_userfeedback:itemid'] = 'La ID del ítem mediagallery para el cual el usuario está proporcionando una retroalimentación.';
$string['privacy:metadata:mediagallery_userfeedback:liked'] = 'Si al usuario "le gustó" el ítem.';
$string['privacy:metadata:mediagallery_userfeedback:rating'] = 'Qué valoración le dio el usuario al ítem (no implementado).';
$string['privacy:metadata:mediagallery_userfeedback:userid'] = 'El usuario que hizo la retroalimentación.';
$string['privacy:metadata:mediagallery:userid'] = 'La ID del usuario que creó/posee la actividad de colección de medios.';
$string['privacy:metadata:preference:mediasize'] = 'Que tamaño de visualización prefiere para ver los ítems de medio.';
$string['productiondate'] = 'Fecha de producción';
$string['productiondate_help'] = 'La fecha de producción del trabajo original.';
$string['publisher'] = 'Casa Editorial';
$string['publisher_help'] = 'La Casa Editorial (si hubiera) del trabajo.';
$string['readonlyfrom'] = 'Solamente lectura desde';
$string['readonlyto'] = 'Solamente lectura hasta';
$string['reference'] = 'Referencia';
$string['reference_help'] = 'Referencia a la colección (si hubiera) de donde es este trabajo.';
$string['removecollectionconfirm'] = '¿Está seguro de querer eliminar el enlace hacia esta colección?';
$string['removefromcollection'] = 'Remover de colección';
$string['removefromgallery'] = 'Remover de galería';
$string['removegalleryconfirm'] = '¿Está seguro de querer eliminar el enlace hacia esta galería?';
$string['removeitemconfirm'] = '¿Está seguro de querer eliminar el enlace hacia este ítem?';
$string['removethecollection'] = 'Quitar/eliminar la colección';
$string['restrictavailableinfo'] = 'Para restringir las fechas en que esta actividad está disponible, use la sección inferior  para restringir acceso.';
$string['sample'] = 'Muestra';
$string['search'] = 'Buscar';
$string['searchcourseonly'] = 'Solamente este curso';
$string['searchcourseonly_help'] = '¿ Usted solamente quería buscar ítems en galerías de medios dentro de este curso ?';
$string['searchdisplayxtoyofzresults'] = 'Se encontró {$a->total} resultado(s). Mostrando {$a->from}-{$a->to}:';
$string['search_help'] = 'Escriba las palabras clave que desea buscar.';
$string['searchresults'] = 'Resultados de la búsqueda';
$string['searchtitle'] = 'Búsqueda de colección de medios';
$string['selection'] = 'Selección';
$string['settingsavailability'] = 'Disponibilidad';
$string['settingsdisplay'] = 'Mostrar lista';
$string['settingsgallery'] = 'Valores por defecto de Galería';
$string['settingsgallerydisplay'] = 'Mostrar Galería';
$string['settingsvisibility'] = 'visibilidad';
$string['showall'] = 'Mostrar todo';
$string['storagereport'] = 'Almacén de colección de medios';
$string['storagetotalusage'] = 'Uso total de almacenamiento en el sitio: {$a}.';
$string['submittedforgrading'] = 'Enviado para calificarse';
$string['synclastcompleted'] = 'Sincronización completada por última vez';
$string['syncwiththebox'] = 'Sincronizar desde laCaja';
$string['tags'] = 'Marcas';
$string['theboxisnotenabled'] = 'Desafortunadamente, esta colección actualmente no es accesible porque está ligada a laCaja, que actualmente no está habilitada.';
$string['thumbnail'] = 'Miniatura';
$string['thumbnail_help'] = 'Usted puede selccionar una imagen para usarla como miniatura en la galería para este ítem.

Si Usted no proporciona alguna, se genera una para Usted a partir del recurso subido (para imágenes) o un ícono de tipo de archivo usado (para otros archivos).';
$string['thumbnailsperpage'] = 'Miniaturas por página';
$string['thumbnailsperrow'] = 'Miniaturas por fila';
$string['togglefullscreen'] = 'Alternar pantalla completa';
$string['togglesidebar'] = 'Alternar barra lateral';
$string['toomany'] = 'Demasiadas galerías; por favor elimine o cambie el tipo de colección';
$string['top'] = 'Arriba';
$string['typeall'] = 'Todos los archivos';
$string['typeaudio'] = 'Audio';
$string['typeimage'] = 'Imagen';
$string['typevideo'] = 'Video';
$string['unlike'] = 'Des-agradar';
$string['uploader'] = 'Subidor';
$string['viewgallery'] = 'Ver galería';
$string['visibleinstructor'] = 'Visible para instructores solamente después de';
$string['visibleinstructor_help'] = 'Definir la galería como visible para los instructores de curso después de la fecha especificada. Esto puede ser útil para permitirles a los instructores que accedan antes que los otros usuarios. Los mánagers del curso con los permisos apropiados siempre podrán ver la galerís.';
$string['visibleother'] = 'Visible para todos en el curso después de';
$string['visibleother_help'] = 'Definir la galería como visible a otros usuarios después de la fecha especificada. Los mánagers del curso con permisos apropiados siempre podrán ver la galería.';
$string['you'] = 'Usted';
$string['youmusttypedelete'] = 'Usted debe escribir DELETE, que en idioma inglés significa ELIMINAR, para confirmar la eliminación.';
$string['youtubeurl'] = 'URL de YouTube';
