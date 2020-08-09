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
 * Strings for component 'customlabel', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   customlabel
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminmetadata'] = 'Configuración de clasificadores';
$string['apparence'] = 'Apariencia';
$string['category'] = 'Categoría';
$string['changetypeadvice'] = 'Usted está a punto de cambiar la estructura interna de datos de este elemento. El contenido antiguo no puede mantenerse. ¿Desea continuar?';
$string['classification'] = 'Clasificación';
$string['classificationconstrainttable'] = 'Tabla de Limitantes de Clasificación';
$string['classificationconstrainttable_help'] = 'Esta tabla es capaz de mapear las parejas de valores que no son compatibles.';
$string['classificationmodel'] = 'Modelo de datos para Clasificación';
$string['classificationtypetable'] = 'Tabla de Tipos de Clasificación';
$string['classificationtypetable_help'] = 'Esta tabla proporciona dominios de clasificación. Un dominio contiene un conjunto de valores.';
$string['classificationvalues'] = 'Valores';
$string['classificationvaluetable'] = 'Tabla de Valores de Clasificación';
$string['classificationvaluetable_help'] = 'Esta tabla proporciona todos los valores para todos los clasificadores definidos en la Tabla de Tipo.';
$string['classificationvaluetypekey'] = 'Clave de Tipo para los valores';
$string['classificationvaluetypekey_help'] = 'Esto debe definir el nombre de la columna de la tabla que es usado como clave para el propietario del tipo en los valores.';
$string['classifiers'] = 'Clasificadores';
$string['classifierstypes'] = 'Tipo de clasificadores';
$string['cleararea'] = 'Limpiar esta área de archivo';
$string['code'] = 'Código';
$string['commands'] = 'Comandos';
$string['configclassificationconstrainttable'] = 'Tabla de limitantes';
$string['configclassificationconstrainttable_desc'] = 'Esta tabla tiene las limitantes entre los diferentes tipos involucrados en la clasificación.';
$string['configclassificationtypetable'] = 'Tabla para tipos de clasificación';
$string['configclassificationtypetable_desc'] = 'Un tipo clasificador tiene un conjunto de valores en la tabla de valores.';
$string['configclassificationvaluetable'] = 'Tabla de valores de clasificación';
$string['configclassificationvaluetable_desc'] = 'Esta es la tabla en donde se encuentran los valores de metadatos';
$string['configclassificationvaluetypekey'] = 'Nombre clave del tipo en tabla de valor';
$string['configclassificationvaluetypekey_desc'] = 'Este es el nombre del campo  que sirve como clave extranjera de tipo_de_datos para calificar el valor';
$string['configcoursemetadatacoursekey'] = 'Nombre clave del curso en ligando de metadatos';
$string['configcoursemetadatacoursekey_desc'] = 'Este es el nombre del campo que sirve como la clave extranjera del curso en la tabla de metadatoss. el contenido de este campo debería de ser una id de COURSE válida.';
$string['configcoursemetadatatable'] = 'Tabla para ligadura de metadatos';
$string['configcoursemetadatatable_desc'] = 'Esta tabla liga la relación entre un registro de curso y cualquier metadato apuntado por una id ab. Los metadatos deberán residir en la siguiente tabla de vvalores de metadatos.';
$string['configcoursemetadatavaluekey'] = 'Valor clave en ligadura de metadatos';
$string['configcoursemetadatavaluekey_desc'] = 'Este es el nombre del campo que sirve como clave extranjera de valor de datos en la tabla de metadatos.';
$string['configmetadatabinding'] = 'Ligadura de esquema de metadatos';
$string['constraints'] = 'Restricciones';
$string['content'] = 'Contenido';
$string['coursefilter'] = 'Filtro de curso';
$string['coursemetadatacoursekey'] = 'Clave del curso de Metadatos del curso';
$string['coursemetadatacoursekey_help'] = 'Esto debe definir un nombre de columna en la base de datos, que mapea un registro hacia una ID del curso.';
$string['coursemetadatatable'] = 'Tabla de Metadatos del Curso';
$string['coursemetadatatable_help'] = 'Esta tabla proporciona curso a las ligaduras de metadatos.';
$string['coursemetadatavaluekey'] = 'Claves de Valores de Metadatos del Curso';
$string['coursemetadatavaluekey_help'] = 'Esto debe definir un nombre de columna en la base de datos, que mapea un registro hacia un valor de metadatos.';
$string['cssoverrides'] = 'Anulaciones CSS';
$string['cssoverridesdesc'] = 'Si se usa este campo, las reglas de estilo aquí escritas se añadirán a la hoja_de_estilo global para alterar la apariencia de customlabel (etiqueta_personalizada). Esto necesita que su tema haya sido afinado para definir el punto de inserción. Lea README.txt.';
$string['customlabel:addinstance'] = 'Puede añadirse una instancia';
$string['customlabel:fullaccess'] = 'Acceso completo a todos los campos';
$string['customlabel:managemetadata'] = 'Gestionar metadatos';
$string['customlabelplugins'] = 'Plugins';
$string['customlabeltools'] = 'Herramientas masivas para etiquetas personalizadas';
$string['disabledsubtypes'] = 'Subtipos deshabilitados';
$string['disabledsubtypesdesc'] = 'Cualquier subtipo mencionado en este campo será deshabilitado globalmente para todo el sitio.';
$string['doupdate'] = '¡¡Actualizar!!';
$string['down'] = 'Abajo';
$string['editclass'] = 'Actualizar clase clasificadora';
$string['editvalues'] = 'Editar valores';
$string['errorclassloading'] = 'Error al cargar : Clase nula';
$string['errorfailedloading'] = 'Falló al cargar la clase para la etiqueta personalizada {$a}. Revirtiendo a etiqueta personalizada de "texto".';
$string['errorinsertvalue'] = 'No pudo insertarse un valor nuevo';
$string['errorupdatevalue'] = 'No pudo actualizarse un valor nuevo';
$string['exclude'] = 'Excluir';
$string['exportdata'] = 'Exportar datos a XML';
$string['familygeneric'] = 'Elementos genéricos';
$string['familymeta'] = 'Elementos Meta-pedagógicos';
$string['familypedagogic'] = 'elementos Pedagógicos';
$string['familyspecial'] = 'Elementos Especiales';
$string['familystructure'] = 'Elementos Estructurales';
$string['filter'] = 'Filtro';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['include'] = 'Incluir';
$string['labelclass'] = 'Tipo de etiqueta';
$string['labelclasses'] = 'Clases de elementos';
$string['labelupdater'] = 'Herramienta de regeneración {$a}';
$string['languages'] = 'Idioma';
$string['lockedsample'] = 'Ejemplo de campo bloqueado';
$string['managecustomlabeltypeplugins'] = 'Gestionar plugins customlabel (etiqueta_personalizada)';
$string['metadata'] = 'Valores de metadatos';
$string['metadataset'] = 'Valores de clasificación';
$string['missingfields'] = 'No se han definido campos obligatorios';
$string['model'] = 'Modelo de Datos';
$string['modulename'] = 'Elemento de curso';
$string['modulename_help'] = 'Los elementos de curso le proporcionan a Usted módulos pedagógicos que ya están diseñados y preparados para servir algunas necesidades pedagógicas de alto nivel. Los elementos de curso tienen subtipos que tratan con acciones comunes de aprendizaje: trabajo por hacer, tutorial paso a paso, vea también (referencia opcional), metas locales, recordatorio y otras ayudas editoriales como subtítulos de curso. Un administrador puede integrar modelos específicos con valor editorial adicional, tales como banco de imágenes predefinidas, o marcar cursos; Usted solamente necesita escribir los datos apropiados en cada módulo y registrarlo.';
$string['modulenameplural'] = 'Elementos de curso';
$string['name'] = 'Etiqueta';
$string['noclassifiers'] = 'Sin clasificador';
$string['nocontentforthislanguage'] = 'No hay contenido disponible para este idioma <br/>';
$string['none'] = 'Indefinido';
$string['notypes'] = 'Sin tipo clasificador';
$string['novalues'] = 'Sin valor registrado';
$string['pluginadministration'] = 'Administración de elemento de curso';
$string['pluginname'] = 'Elemento de curso';
$string['qualifiers'] = 'Calificadores';
$string['regenerate'] = 'Regenerar';
$string['regeneration'] = 'Regeneración en masa de contenido';
$string['resourcetypecustomlabel'] = 'Elemento de curso';
$string['roleaccesstoelements'] = 'Acceso por rol';
$string['sametypes'] = 'Usted no puede limitar dos veces al mismo tipo';
$string['settings'] = 'Configuraciones';
$string['show'] = 'Mostrar&ensp;';
$string['specifics'] = 'Específico del tipo';
$string['storage'] = 'Modelo de almacenamiento';
$string['templatenotfound'] = 'Plantilla {$a} no encontrada';
$string['text'] = 'Texto';
$string['title'] = 'Nombre de elemento';
$string['typecode'] = 'Código';
$string['typename'] = 'Nombre';
$string['typetype'] = 'Tipo';
$string['typetype_help'] = '<p>El tipo puede ser:</p>
<ul>
<li>Una categoría: Una categoría interactua con implementaciones de catálogo de curso para construir una taxonomía de curso multi-criterio.</li>
<li>Un filtro: Una marca simple que pueden usar algunos subtipos de Elemento de Curso</p>
<li>Un filtro de curso: Una marca que pueden usar algunas implementaciones de catálogo de curso para filtrar resultados de búsqueda.</p>
</ul>';
$string['up'] = 'Arriba';
$string['updateall'] = 'Actualizar todas las instancias';
$string['updatelabels'] = 'Regenerar instancias de {$a}';
$string['updatescope'] = 'Actualizando el alcance';
$string['usedas'] = 'Usar como';
$string['usesafestorage'] = 'Usar almacenamiento seguro para contenido (base64)';
$string['value'] = 'Valor';
