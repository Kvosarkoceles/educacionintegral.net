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
 * Strings for component 'data', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   data
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['add'] = 'Añadir entrada';
$string['addcomment'] = 'Añadir comentario';
$string['addentries'] = 'Añadir entradas';
$string['addtemplate'] = 'Plantilla Añadir';
$string['advancedsearch'] = 'Búsqueda avanzada';
$string['allowcomments'] = 'Permitir comentar las entradas';
$string['alttext'] = 'Texto alternativo';
$string['approvalstatus'] = 'Estatus de aprobación';
$string['approve'] = 'Aprobar';
$string['approved'] = 'Aprobado';
$string['areacontent'] = 'Campos';
$string['ascending'] = 'Ascendente';
$string['asearchtemplate'] = 'Plantilla de búsqueda avanzada';
$string['atmaxentry'] = '¡Ha introducido el número máximo de entradas permitido!';
$string['authorfirstname'] = 'Nombre del autor';
$string['authorlastname'] = 'Apellidos del autor';
$string['autogenallforms'] = 'Generar todas las plantillas por defecto';
$string['autolinkurl'] = 'Autoenlazar la URL';
$string['availablefromdate'] = 'Disponible a partir de';
$string['availabletags'] = 'Marcas disponibles';
$string['availabletags_help'] = 'Las marcas son remplazables (\'placeholders\') en la plantilla que se sustituirán con datos o con otras características (como un ícono de edición) cuando se editan o se muestran las entradas.

Los campos tienen el formato: [[fieldname]]. Todas las otras marcas tienen el formato: ##sometag##

En la plantilla actual sólo pueden usarse las marcas que están en la lista de "Marcas disponibles".';
$string['availabletodate'] = 'Disponible hasta';
$string['availabletodatevalidation'] = 'La fecha \'Disponible hasta\' no puede ser anterior a la fecha \'Disponible a partir de\'.';
$string['blank'] = 'En blanco';
$string['buttons'] = 'Acciones';
$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cancel'] = 'Cancelar';
$string['cannotaccesspresentsother'] = 'No se le permite acceder a las preconfiguraciones de otros usuarios';
$string['cannotadd'] = 'No se pueden añadir entradas';
$string['cannotdeletepreset'] = 'Error al eliminar una reconfiguración';
$string['cannotoverwritepreset'] = 'Error al sobrescribir preconfiguración';
$string['cannotunziptopreset'] = 'No se ha podido descomprimir al directorio de preconfiguraciones';
$string['checkbox'] = 'Casilla de selección';
$string['chooseexportfields'] = 'Seleccione los campos que desea exportar:';
$string['chooseexportformat'] = 'Seleccione el formato al que desea exportar:';
$string['chooseorupload'] = 'Elegir archivo';
$string['closebeforeopen'] = 'Usted ha especificado una fecha de terminación anterior a la fecha de inicio.';
$string['columns'] = 'columnas';
$string['comment'] = 'Comentario';
$string['commentdeleted'] = 'Comentario eliminado';
$string['commentempty'] = 'El comentario estaba vacío';
$string['comments'] = 'Comentarios';
$string['commentsaved'] = 'Comentario guardado';
$string['commentsn'] = '{$a} comentarios';
$string['commentsoff'] = 'La característica de comentarios no está habilitada';
$string['completionentries'] = 'Requerir entradas';
$string['completionentriescount'] = 'Número de entradas';
$string['completionentriesdesc'] = 'Número mínimo de entradas requeridas: {$a}';
$string['configenablerssfeeds'] = 'Esta opción habilita la posibilidad de canales RSS para todas las bases de datos. Aún así necesitará activar manualmente los canales en los ajustes de cada base de datos.';
$string['confirmdeletefield'] = 'Está a punto de eliminar este campo. ¿Está seguro?';
$string['confirmdeleterecord'] = '¿Está seguro de que desea eliminar esta entrada?';
$string['confirmdeleterecords'] = '¿Está Uted seguro de querer eliminar estas entradas?';
$string['csstemplate'] = 'Plantilla CSS';
$string['csvfailed'] = 'No se pueden leer los datos del archivo CVS';
$string['csvfile'] = 'Archivo CSV';
$string['csvimport'] = 'Importar archivo CSV';
$string['csvimport_help'] = 'Las entradas pueden ser importadas vía un archivo de texto simple con una lista de nombres de campo como la primera línea, después los datos, con un registro por línea.';
$string['csvwithselecteddelimiter'] = '<acronym title="Comma Separated Values">texto</acronym> CVS con el delimitador seleccionado:';
$string['data:addinstance'] = 'Añadir una nueva base de datos';
$string['data:approve'] = 'Aprobar entradas pendientes, o desaprobar entradas aprobadas';
$string['data:comment'] = 'Escribir comentarios';
$string['data:exportallentries'] = 'Exportar todas las entradas de la base de datos';
$string['data:exportentry'] = 'Exportar una entrada de la base de datos';
$string['data:exportownentry'] = 'Exportar la propia entrada de la base de datos';
$string['data:exportuserinfo'] = 'Exprtar información de usuario';
$string['data:managecomments'] = 'Gestionar comentarios';
$string['data:manageentries'] = 'Gestionar entradas';
$string['data:managetemplates'] = 'Gestionar plantillas';
$string['data:manageuserpresets'] = 'Gestionar todas las preconfiguraciones de plantillas';
$string['data:rate'] = 'Valorar entradas';
$string['data:readentry'] = 'Leer entradas';
$string['data:view'] = 'Ver actividad Base de Datos';
$string['data:viewallratings'] = 'Ver todas las valuaciones (calificaciones) emitidas por los usuarios';
$string['data:viewalluserpresets'] = 'Ver preconfiguraciones de todos los usuarios';
$string['data:viewanyrating'] = 'Ver el total de valuaciones (calificaciones) que alguien recibió';
$string['data:viewentry'] = 'Ver entradas';
$string['data:viewrating'] = 'Ver valuación (rating) total recibida';
$string['data:writeentry'] = 'Escribir entradas';
$string['date'] = 'Fecha';
$string['dateentered'] = 'Fecha introducida';
$string['defaultfielddelimiter'] = '(el valor por defecto es la coma)';
$string['defaultfieldenclosure'] = '(el valor por defecto es ninguno)';
$string['defaultsortfield'] = 'Campo de ordenación por defecto';
$string['delcheck'] = 'Casilla de verificación de eliminaciones masivas';
$string['delete'] = 'Eliminar';
$string['deleteallentries'] = 'Eliminar todas las entradas';
$string['deletecomment'] = '¿Está seguro de que desea eliminar este comentario?';
$string['deleted'] = 'eliminado';
$string['deletefield'] = 'Eliminar un campo existente';
$string['deletenotenrolled'] = 'Eliminar entradas de usuarios no inscritos';
$string['deletewarning'] = '¿Está seguro de que desea eliminar esta preconfiguración?';
$string['descending'] = 'Descendente';
$string['directorynotapreset'] = '{$a->directory} No es una preconfiguración: le faltan archivos: {$a->missing_files}';
$string['disapprove'] = 'Deshacer aprobación';
$string['download'] = 'Descargar';
$string['edit'] = 'Edición';
$string['editcomment'] = 'Editar comentario';
$string['editentry'] = 'Editar entrada';
$string['editordisable'] = 'Desactivar editor';
$string['editorenable'] = 'Activar editor';
$string['emptyadd'] = 'La plantilla Añadir está vacía, generando un formato por defecto...';
$string['emptyaddform'] = '¡No ha rellenado ningún campo!';
$string['enabletemplateeditorcheck'] = '¿Está Usted seguro de querer habilitar el editor? Esto podría resultar en que se altere el contenido cuando se guarde la plantilla.';
$string['entries'] = 'Entradas';
$string['entrieslefttoadd'] = 'Debe añadir {$a->entriesleft} entrada(s) más antes de poder ver las entradas de otro participante.';
$string['entrieslefttoaddtoview'] = 'Debe añadir {$a->entrieslefttoview} entrada(s) antes de poder ver las entradas de otros participantes.';
$string['entry'] = 'Entrada';
$string['entrysaved'] = 'Su entrada se ha guardado';
$string['errormustbeteacher'] = 'Necesita ser un profesor para usar esta página';
$string['errormustsupplyvalue'] = 'Usted debe proporcionar un valor aquí.';
$string['errorpresetexists'] = 'Ya existe una preconfiguración con el nombre seleccionado';
$string['eventfieldcreated'] = 'Campo creado';
$string['eventfielddeleted'] = 'Campo eliminado';
$string['eventfieldupdated'] = 'Campo actualizado';
$string['eventrecordcreated'] = 'Registro creado';
$string['eventrecorddeleted'] = 'Registro eliminado';
$string['eventrecordupdated'] = 'Registro actualizado';
$string['eventtemplateupdated'] = 'Plantilla actualizada';
$string['eventtemplateviewed'] = 'Plantillas vistas';
$string['example'] = 'Ejemplo de módulo de base de datos';
$string['excel'] = 'Excel';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['export'] = 'Exportar';
$string['exportaszip'] = 'Exportar como \'zip';
$string['exportaszip_help'] = 'Exportar como archivo Zip permite guardar las plantillas y campos como un archivo ZIP de preconfiguración para descarga. El archivo ZIP podrá subirlas más tarde a otro curso.';
$string['exportedtozip'] = 'Exportado a un \'zip\' temporal...';
$string['exportentries'] = 'Exportar entradas';
$string['exportownentries'] = 'Desea exporta solo sus propias entradas? ({$a->mine} / {$a->all})';
$string['failedpresetdelete'] = '¡Error al eliminar una preconfiguración!';
$string['fieldadded'] = 'Campo añadido';
$string['fieldallowautolink'] = 'Permitir autoenlace';
$string['fielddeleted'] = 'Campo eliminado';
$string['fielddelimiter'] = 'Delimitador de campo';
$string['fielddescription'] = 'Descripción de campo';
$string['fieldenclosure'] = 'Cierre de campo';
$string['fieldheight'] = 'Altura';
$string['fieldheightlistview'] = 'Altura en vista de lista';
$string['fieldheightsingleview'] = 'Altura en vista individual';
$string['fieldids'] = 'Ids. de campo';
$string['fieldmappings'] = 'Mapeos de campo';
$string['fieldmappings_help'] = 'Este menú le permite guardar los datos de la base de datos existente.
Para conservar los datos en un campo, debe mapearlo a un nuevo campo, en el que aparecerán los datos. Puede asímismo dejar en blanco cualquier campo, sin que en él se copie información alguna. Cualquier campo antiguo no mapeado a uno nuevo se perderá, y todos sus datos quedarán eliminados.
Usted sólo puede mapear campos del mismo tipo, de modo que cada menú desplegable contendrá distintos campos en él. Del mismo modo, debe ser cuidadoso en no tratar y mapear un campo viejo a más de un campo nuevo.';
$string['fieldname'] = 'Nombre de campo';
$string['fieldnotmatched'] = 'Los campos siguientes de su archivo no figuran en esta base de datos: {$a}';
$string['fieldoptions'] = 'Opciones (una por línea)';
$string['fields'] = 'Campos';
$string['fieldupdated'] = 'Campos actualizados';
$string['fieldwidth'] = 'Anchura';
$string['fieldwidthlistview'] = 'Anchura en vista de lista';
$string['fieldwidthsingleview'] = 'Ancho en vista individual';
$string['file'] = 'Archivo';
$string['fileencoding'] = 'Codificación';
$string['filesnotgenerated'] = 'No se han generado todos los archivos: {$a}';
$string['filtername'] = 'Auto-enlace de base de datos';
$string['footer'] = 'Pie';
$string['forcelinkname'] = 'Nombre forzado para el enlace';
$string['foundnorecords'] = 'No se han encontrado registros (<a href="{$a->reseturl}">Reset filters</a>)';
$string['foundrecords'] = 'Registros encontrados: {$a->num}/{$a->max} (<a href="{$a->reseturl}">Reset filters</a>)';
$string['fromfile'] = 'Importar desde archivo \'zip';
$string['fromfile_help'] = 'La característica de importar desde un archivo ZIP permite buscar y subir una preconfiguración ZIPeada de plantillas y campos.';
$string['generateerror'] = 'No se han generado todos los archivos';
$string['header'] = 'Cabecera';
$string['headeraddtemplate'] = 'Define la interfaz para añadir o editar entradas';
$string['headerasearchtemplate'] = 'Define la interfaz para la búsqueda avanzada';
$string['headercsstemplate'] = 'Define los estilos CSS locales para las demás plantillas';
$string['headerjstemplate'] = 'Define Javascript personalizado para manipular la forma en la que los elementos son mostrados en la Lista, Única o Añadir plantillas';
$string['headerlisttemplate'] = 'Define la interfaz de navegación para entradas múltiples';
$string['headerrsstemplate'] = 'Define la apariencia de las entradas en canales RSS';
$string['headersingletemplate'] = 'Define interfaz del navegador para una entrada individual';
$string['importentries'] = 'Importar entradas';
$string['importsuccess'] = 'La preconfiguración ha sido aplicado con éxito.';
$string['includeapproval'] = 'Incluir estatus de aprobación';
$string['includetags'] = 'Incluir marcas';
$string['includetime'] = 'Incluir hora de adición/modificación';
$string['includeuserdetails'] = 'Incluir detalles de usuario';
$string['indicator:cognitivedepth'] = 'BasedeDatos cognitiva';
$string['indicator:cognitivedepthdef'] = 'Base de Datos cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Base de Datos durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver retroalimentación, Comentar en retroalimentación, Reenviar después de ver retroalimentación)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Base de Datos.';
$string['indicator:socialbreadth'] = 'BasedeDatos social';
$string['indicator:socialbreadthdef'] = 'Base de Datos social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Base de Datos durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Base de Datos.';
$string['insufficiententries'] = 'se necesitan más entradas para ver esta base de datos';
$string['intro'] = 'Descripción';
$string['invalidaccess'] = 'No se ha accedido correctamente a esta página';
$string['invalidfieldid'] = 'El campo ID es incorrecto';
$string['invalidfieldname'] = 'Por favor, seleccione otro nombre para este campo';
$string['invalidfieldtype'] = 'El campo Tipo es incorrecto';
$string['invalidid'] = 'ID de datos incorrecto';
$string['invalidpreset'] = '{$a} no es una preconfiguración.';
$string['invalidrecord'] = 'Registro incorrecto';
$string['invalidurl'] = 'La URL introducida no es válida';
$string['jstemplate'] = 'Plantilla Javascript';
$string['latitude'] = 'Latitud';
$string['latlong'] = 'Latitud/logitud';
$string['latlongboth'] = 'Tanto la Latitud como la Longitud son necesarias.';
$string['latlongdownloadallhint'] = 'Descargar enlace para todas las entradas como KML';
$string['latlongkmllabelling'] = 'Cómo etiquetar ítems en archivos KML (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Conectar servicios a mostrar';
$string['latlongotherfields'] = 'Otros campos';
$string['list'] = 'Ver lista';
$string['listtemplate'] = 'Plantilla de Lista';
$string['longitude'] = 'Longitud';
$string['manageapproved'] = 'Permitir la edición de entradas aprobadas';
$string['manageapproved_help'] = 'Si se deshabilita, las entradas aprobadas ya no serán editables o eliminables por el usuario que las añadió. Esta configuración no tiene efecto a menos que esté habilitado \'Aprobación requerida\'.';
$string['mapexistingfield'] = 'Mapea a {$a}';
$string['mapnewfield'] = 'Crear un nuevo campo';
$string['mappingwarning'] = 'Todos los campos viejos no mapeados a un nuevo campo se perderán y todos los datos de dichos campos quedarán eliminados.';
$string['maxentries'] = 'Número máximo de entradas';
$string['maxentries_help'] = 'Número máximo de entradas que un estudiante puede enviar en esta actividad.';
$string['maxsize'] = 'Tamaño máximo';
$string['menu'] = 'Menú';
$string['menuchoose'] = 'Seleccionar...';
$string['missingdata'] = 'Debe suministrarse la ID de los datos o del objeto a la clase de campo';
$string['missingfield'] = 'Error del programador: Debe especificar el campo y/o los datos al definir la clase de campo.';
$string['modulename'] = 'Base de datos';
$string['modulename_help'] = 'El módulo de actividad de base de datos permite a los participantes crear, mantener y buscar información en un banco de entradas (registros). La estructura de estas entradas es definida por el profesor como un número de campos. Los tipos de campo incluyen casilla de selección, botones de selección, menú desplegable, área de texto, URL, imagen y archivos subidos.

El diseño visual de la información al enlistarla, verla o editar las entradas de la base de datos puede ser controlada mediante plantillas de la base de datos. Las actividades de la base de datos pueden compartirse entre cursos como preconfiguraciones y un profesor también puede importar y exportar entradas de la base de datos.

Si se habilita el filtro de auto-enlazado de la base de datos, cualquier entrada en la base de datos será automáticamente enlazado donde aparezcan estas palabras o frases dentro del curso.

Un profesor puede permitir comentarios en las entradas. Las entradas pueden calificarse por profesores o estudiantes (evaluación por pares). Las evaluaciones pueden juntarse para formar una calificación final que se graba en el libro de calificaciones.

Las actividades de la base de datos tienen muchos usos como:

* Una colección colaborativa de enlaces de internet, libros, revisiones de libros, referencias de revistas, etc

* Para mostrar fotos, posters, sitios web o poesías creadas por alumnos para revisión y comentarios por pares';
$string['modulenameplural'] = 'Bases de datos';
$string['more'] = 'Más';
$string['moreurl'] = 'Más URL';
$string['movezipfailed'] = 'No se puede mover el zip';
$string['multientry'] = 'Entrada repetida';
$string['multimenu'] = 'Menú (selección múltiple)';
$string['multipletags'] = '¡ Se han encontrado múltiples marcas ! Plantilla no guardada';
$string['newentry'] = 'Nueva entrada';
$string['newfield'] = 'Crear un nuevo campo';
$string['newfield_help'] = 'Un campo permite la entrada de datos. Cada entrada en una actividad de base de datos puede tener varios campos de varios tipos, tales como un campo de fecha, que les permite a los participantes el seleccionar un día, mes y año a partir de un menú desplegable, un campo de imagen, que le permite a los participantes cargar un archivo de imagen, o una casilla de selección de campo, que permite a los participantes el seleccionar una o más opciones.

Cada campo debe tener un nombre de campo único. La descripción del campo es opcional.';
$string['noaccess'] = 'No tiene acceso a esta página';
$string['nodefinedfields'] = '¡La nueva preconfiguración no tiene campos definidos!';
$string['nofieldcontent'] = 'No se ha encontrado contenido del campo';
$string['nofieldindatabase'] = 'No hay campos definidos para esta base de datos. Por favor, agregue algunos';
$string['nolisttemplate'] = 'La plantilla de Lista no está definida aún';
$string['nomatch'] = 'No se han encontrado entradas';
$string['nomaximum'] = 'No máximo';
$string['norecords'] = 'No entradas en la base de datos';
$string['nosingletemplate'] = 'La plantilla Individual no ha sido definida';
$string['notapproved'] = 'La entrada aún no ha sido aprobada.';
$string['notinjectivemap'] = 'No mapa inyectivo';
$string['notopenyet'] = 'Lo sentimos, esta actividad no está disponible hasta {$a}';
$string['number'] = 'Número';
$string['numberrssarticles'] = 'Entradas en los canales RSS';
$string['numnotapproved'] = 'Pendiente';
$string['numrecords'] = '{$a} entradas';
$string['ods'] = '<acronym title="OpenDocument Spreadsheet">ODS</acronym> (OpenOffice)';
$string['openafterclose'] = 'Usted ha especificado una fecha de apertura después de la fecha de cierre.';
$string['optionaldescription'] = 'Descripción corta (opcional)';
$string['optionalfilename'] = 'Nombre de archivo (opcional)';
$string['other'] = 'Otro';
$string['overrwritedesc'] = 'Sobrescribir la preconfiguración si ya existe';
$string['overwrite'] = 'Sobrescribir';
$string['overwritesettings'] = 'Sobrescribir ajustes actuales';
$string['page-mod-data-x'] = 'Cualquier página del módulo actividad de Base de Datos';
$string['pagesize'] = 'Entradas por página';
$string['participants'] = 'Participantes';
$string['picture'] = 'Imagen';
$string['pleaseaddsome'] = 'Por favor, cree alguno debajo o <a href="{$a}">elija un conjunto predefinido</a> para empezar.';
$string['pluginadministration'] = 'Administración de la actividad base de datos';
$string['pluginname'] = 'Base de datos';
$string['portfolionotfile'] = 'Exportar a un portafolio en lugar de a un archivo (sólo csv)';
$string['presetinfo'] = 'Al guardar como una preconfiguración se publicará esta plantilla. Otros usuarios podrán usarla en sus bases de datos.';
$string['presets'] = 'Preconfiguraciones';
$string['privacy:metadata:commentpurpose'] = 'Comentarios en registros de base de datos';
$string['privacy:metadata:data_content'] = 'Representa una respuesta a un campo en el módulo de actividad base de datos';
$string['privacy:metadata:data_content:content'] = 'Contenido';
$string['privacy:metadata:data_content:content1'] = 'Contenido adicional 1';
$string['privacy:metadata:data_content:content2'] = 'Contenido adicional 2';
$string['privacy:metadata:data_content:content3'] = 'Contenido adicional 3';
$string['privacy:metadata:data_content:content4'] = 'Contenido adicional 4';
$string['privacy:metadata:data_content:fieldid'] = 'ID de definición del campo';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Campos para el módulo de actividad Base de datos';
$string['privacy:metadata:data_records'] = 'Representan registros en el Módulo de actividad Base de datos';
$string['privacy:metadata:data_records:approved'] = 'Estado de aprobación';
$string['privacy:metadata:data_records:groupid'] = 'Grupo';
$string['privacy:metadata:data_records:timecreated'] = 'Hora en la cual fue creado el registro';
$string['privacy:metadata:data_records:timemodified'] = 'Hora en la cual fue modificado por última vez el registro';
$string['privacy:metadata:data_records:userid'] = 'Usuario que creó el registro';
$string['privacy:metadata:filepurpose'] = 'Archivo anexo al registro de la base de datos';
$string['privacy:metadata:ratingpurpose'] = 'Valoraciones en registros de base de datos';
$string['privacy:metadata:tagpurpose'] = 'Marcas en registros de base de datos';
$string['radiobutton'] = 'Botones de selección';
$string['recordapproved'] = 'Entrada aprobada';
$string['recorddeleted'] = 'Entrada eliminada';
$string['recorddisapproved'] = 'Entrada desaprobada';
$string['recordsnotsaved'] = 'No se ha guardado ninguna entrada. Por favor, compruebe el formato del archivo subido.';
$string['recordssaved'] = 'entradas guardadas';
$string['removealldatatags'] = 'Quitar todas las marcas de base de datos';
$string['requireapproval'] = 'Se requiere aprobación';
$string['requireapproval_help'] = '<p align="center"><strong>Se necesita aprobación</strong></p>

<p>¿Debería un profesor aprobar las entradas antes de que los estudiantes puedan verlas? Esta opción es útil para moderar el contenido que potencialmente pudiera resultar ofensivo o inadecuado.</p>';
$string['required'] = 'Requerido';
$string['requiredentries'] = 'Entradas requeridas para finalización (antigua)';
$string['requiredentries_help'] = 'Si se configura, se muestra un mensaje diciendo el número de entradas necesarias para finalización. Por favor tenga en cuenta que esta configuración no está conectda con finalización de la actividad.

Para entradas requeridas para finalización de la actividad, la nueva confiiguración de finalización de actividad \'Requerir entradas\' debería de usarse. Para quitar completamente esta configuración, configure a ninguna/nada, después guarde los cambios.
Por favor, use en su lugar los campos de Entradas requeridas, en la sección de Finalización de la actividad.';
$string['requiredentriestoview'] = 'Entradas requeridas antes de verse';
$string['requiredentriestoview_help'] = '<p align="center"><strong>Entradas exigidas antes de ver</strong></p>

<p>Número de entradas que un participante debe enviar antes de que se le permita ver cualquier entrada en esta actividad de la base de datos.</p>

Nota: Si se requieren entradas antes de poder ver, se debe deshabilitar el filtro de auto-enlazado de la base de datos. Esto se debe a que el filtro de auto-enlazado no puede determinar si un usuario ya ha enviado el número de entradas requerido.';
$string['requiredentrieswarning'] = 'Esta configuración ha sido remplazada por la configuración de finalización de actividad "Requerir entradas"';
$string['requiredfield'] = 'Campo requerido';
$string['resetsettings'] = 'Restablecer filtros';
$string['resettemplate'] = 'Plantilla Reiniciar';
$string['resizingimages'] = 'Cambiando el tamaño de las miniaturas de imagen...';
$string['rows'] = 'filas';
$string['rssglobaldisabled'] = 'Deshabilitado. Vea las variables de configuración';
$string['rsstemplate'] = 'Plantilla RSS';
$string['rsstitletemplate'] = 'Plantilla de Título RSS';
$string['save'] = 'Guardar';
$string['saveandadd'] = 'Guardar y añadir otro';
$string['saveandview'] = 'Guardar y ver';
$string['saveaspreset'] = 'Guardar como preconfiguración';
$string['saveaspreset_help'] = 'La característica de Guardar como preconfiguración publica las plantillas y los campos como una preconfiguración que otros usuarios del sitio pueden utilizar. (Puede borrarla de la lista de preconfiguraciones en cualquier momento.)';
$string['savesettings'] = 'Guardar ajustes';
$string['savesuccess'] = 'Guardado con éxito. Su preconfiguración estará ahora disponible en todo el sitio.';
$string['savetemplate'] = 'Plantilla Guardar';
$string['search'] = 'Buscar';
$string['search:activity'] = 'BasedeDatos - información de actividad';
$string['search:entry'] = 'Base de Datos - entradas';
$string['selectedrequired'] = 'Se requieren todos los seleccionados';
$string['showall'] = 'Mostrar todas las entradas';
$string['single'] = 'Ver individual';
$string['singletemplate'] = 'Plantilla Individual';
$string['subplugintype_datafield'] = 'Tipo de campo de la base de datos';
$string['subplugintype_datafield_plural'] = 'Tipos de campo de la base de datos';
$string['subplugintype_datapreset'] = 'Preconfiguración';
$string['subplugintype_datapreset_plural'] = 'preconfiguraciones';
$string['tagarea_data_records'] = 'Registros de datos';
$string['tags'] = 'Marcas';
$string['tagsdeleted'] = 'Las marcas de base de datos han sido eliminadas';
$string['teachersandstudents'] = '{$a->teachers} y {$a->students}';
$string['templates'] = 'Plantillas';
$string['templatesaved'] = 'Plantilla guardada';
$string['text'] = 'Texto';
$string['textarea'] = 'Área-de-texto';
$string['timeadded'] = 'Tiempo añadido';
$string['timemodified'] = 'Tiempo modificado';
$string['todatabase'] = 'a esta base de datos.';
$string['type'] = 'Tipo de campo';
$string['undefinedprocessactionmethod'] = 'No se ha definido método de acción en Data_Preset para manejar la acción "{$a}".';
$string['unsupportedexport'] = '({$a->fieldtype}) no se puede exportar.';
$string['updatefield'] = 'Actualizar un campo existente';
$string['uploadfile'] = 'Subir archivo';
$string['uploadrecords'] = 'Subir entradas de un archivo';
$string['uploadrecords_help'] = 'Las entradas pueden ser cargadas a través de un archivo de texto. El formato del archivo debe ser el siguiente:

* Cada línea del archivo contiene un registro
* Cada registro contiene una serie de datos separados por comas (u otros delimitadores)
* El primer registro contiene una lista de nombres de campos (en idioma inglés) que definen el formato del resto del archivo.

El campo delimitador es un caracter que separa cada campo dentro de cada registro. Normalmente se puede dejar sin definir.';
$string['url'] = 'URL';
$string['usedate'] = 'Incluir en búsqueda.';
$string['usestandard'] = 'Use una precnfiguración';
$string['usestandard_help'] = 'Para utilizar una preconfiguración disponible en todo el sitio, selecciónelo de la lista. (Si ha agregado un ajuste previo de la lista mediante la función guardar como predeterminado entonces usted tiene la opción de eliminarlo.)';
$string['viewfromdate'] = 'Solo lectura desde';
$string['viewtodate'] = 'Solo lectura para';
$string['viewtodatevalidation'] = 'La fecha de \'solamente lectura hasta\' no puede ser anterior a la fecha de \'solamente lectura a partir de\'.';
$string['wrongdataid'] = 'Datos de id erróneos';
