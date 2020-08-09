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
 * Strings for component 'tool_xmldb', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Real';
$string['addpersistent'] = 'Añadir campos persistentes obligatorioss';
$string['aftertable'] = 'Después de la tabla:';
$string['back'] = 'Atrás';
$string['backtomainview'] = 'Volver al principal';
$string['cannotuseidfield'] = 'No se puede insertar el campo "id". Es una columna autonumerada';
$string['change'] = 'Cambiar';
$string['charincorrectlength'] = 'Longitud incorrecta del campo char';
$string['checkbigints'] = 'Comprobar enteros';
$string['check_bigints'] = 'Buscar enteros DB incorrectos';
$string['checkdefaults'] = 'Comprobar valores por defecto';
$string['check_defaults'] = 'Buscar valores por defecto inconsistentes';
$string['checkforeignkeys'] = 'Comprobar las claves externas';
$string['check_foreign_keys'] = 'Buscar violaciones de la clave externa';
$string['checkindexes'] = 'Comprobar índices';
$string['check_indexes'] = 'Buscar índices BD ausentes';
$string['checkoraclesemantics'] = 'Revisar semántica';
$string['check_oracle_semantics'] = 'Buscar semántica de longitud incorrecta';
$string['completelogbelow'] = '(ver abajo el registro completo de la búsqueda)';
$string['confirmcheckbigints'] = 'Esta funcionalidad buscará <a href="https://tracker.moodle.org/browse/MDL-11038">potential wrong integer fields</a> en su servidor Moodle, generando (¡pero no ejecutando!) automáticamente las acciones SQL necesarias para tener todos los enteros de su base de datos adecuadamente definidos.

Una vez generados, Usted puede copiarlas y ejecutarlas con seguridad en su interfaz SQL preferida (no olvide hacer una copia de seguridad de sus datos antes de hacerlo).

Se recomienda ejecutar la última (+) versión de Moodle disponible antes de llevar a cabo la búsqueda de enteros erróneos.

Esta funcionalidad no ejecuta ninguna acción contra la BD (únicamente la lee), de modo que puede ser realizada con seguridad en cualquier momento.';
$string['confirmcheckdefaults'] = 'Esta funcionalidad buscará valores por defecto inconsistentes en su servidor Moodle, y generará (pero no ejecutará) los comandos SQL necesarios para hacer que todos los valores por defecto se definan apropiadamente.

Una vez generados, puede copiar tales comandos y ejecutarlos con seguridad en su interfaz SQL favorita (no olvide hacer una copia de sus datos antes).

Es muy recomendable ejecutar la última versión (+version) disponible de Moodle antes de ejecutar la búsqueda de valores por defecto inconsistentes.

Esta funcionalidad no ejecuta ninguna acción contra la base de datos (simplemente la lee), de modo que puede ejecutarse con seguridad en cualquier momento.';
$string['confirmcheckforeignkeys'] = 'Esta funcionalidad buscará posibles violaciones de las claves externas definidas en las definiciones install.xml. (Moodle no genera actualmente restricciones de clave externa en la base de datos, por lo que datos no válidos pueden estar presentes.)

Es muy recomendable que se ejecuta la última (+ versión) disponible en su versión de Moodle antes de ejecutar para violaciones potenciales de las claves externas.

Esta funcionalidad no realiza ninguna acción contra la Base de Datos (sólo lee de ella), por lo que se puede ejecutar de forma segura en cualquier momento.';
$string['confirmcheckindexes'] = 'Esta funcionalidad buscará potenciales índices ausentes en su servidor Moodle, generando (no ejecutando) automáticamente los comandos SQL necesarios para mantener todo actualizado.

Una vez generados, puede copiar los comandos y ejecutarlos con seguridad con su interfaz SQL favorita.

Es muy recomendable ejecutar la última versión disponible de Moodle antes de llevar a cabo la búsqueda de los índices ausentes.

Esta funcionalidad no ejecuta ninguna acción contra la BD (simplemente lee en ella), de modo que puede ejecutarse con seguridad en cualquier momento.';
$string['confirmcheckoraclesemantics'] = 'Esta funcionalidad buscará <a href="https://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 columns usando semántica BYTE </a> en su servidor Moodle, generando, (¡pero no ejecutando!) automáticamente las instrucciones SQL necesarias para que todas las columnas se conviertan a semántica  CHAR en su lugar (lo que es mejor para compatibilidad entre bases de datos y mayores contenidos  max. length).

Una vez generadas, usted puede copiar estas instrucciones y ejecutarlas de modo seguro en su interfaz SQL favorita (no olvide respaldar sus datos ANTES de hacerlo).

Es muy recomendable estar ejecutando la versión Moodle más reciente  (la versión +) disponible para su Moodle antes de ejecutar la búsqueda de semántica BYTE.

Esta funcionalidad no ejecuta ninguna acción contra la BD (simplemente lee en ella), de modo que puede ejecutarse con seguridad en cualquier momento.';
$string['confirmdeletefield'] = '¿Está totalmente seguro que quiere eliminar el campo:';
$string['confirmdeleteindex'] = '¿Está totalmente seguro que quiere eliminar el índice:';
$string['confirmdeletekey'] = '¿Está totalmente seguro que quiere eliminar la clave:';
$string['confirmdeletetable'] = '¿Está totalmente seguro que quiere eliminar la tabla:';
$string['confirmdeletexmlfile'] = '¿Está totalmente seguro que quiere eliminar el archivo:';
$string['confirmrevertchanges'] = '¿Está totalmente seguro que quiere revertir los cambios realizados sobre:';
$string['create'] = 'Crear';
$string['createtable'] = 'Crear tabla:';
$string['defaultincorrect'] = 'Valor por defecto incorrecto';
$string['delete'] = 'Eliminar';
$string['delete_field'] = 'Eliminar campo';
$string['delete_index'] = 'Eliminar índice';
$string['delete_key'] = 'Eliminar clave';
$string['delete_table'] = 'Eliminar tabla';
$string['delete_xml_file'] = 'Eliminar archivo XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Índice de la documentación:';
$string['documentationintro'] = 'Esta documentación es generada automáticamente a partir de la definición de la base de datos DMLDB. Únicamente está disponible en inglés.';
$string['down'] = 'Abajo';
$string['duplicate'] = 'Duplicar';
$string['duplicatefieldname'] = 'Ya existe otro campo con ese nombre';
$string['duplicatefieldsused'] = 'Campos duplicados usados';
$string['duplicateindexname'] = 'Duplicar nombre del índice';
$string['duplicatekeyname'] = 'Ya existe otra clave con ese nombre';
$string['duplicatetablename'] = 'Existe otra tabla con ese nombre';
$string['edit'] = 'Edición';
$string['edit_field'] = 'Editar campo';
$string['edit_field_save'] = 'Guardar campo';
$string['edit_index'] = 'Editar índice';
$string['edit_index_save'] = 'Guardar índice';
$string['edit_key'] = 'Editar clave';
$string['edit_key_save'] = 'Guardar clave';
$string['edit_table'] = 'Editar tabla';
$string['edit_table_save'] = 'Guardar tabla';
$string['edit_xml_file'] = 'Editar archivo XML';
$string['enumvaluesincorrect'] = 'Valores incorrectos del campo enum';
$string['expected'] = 'Esperado';
$string['extensionrequired'] = 'Lo siento, se requiere la extensión de PHP \'{$a}\' para esta acción. Por favor instale la extensión si desea emplear esta característica.';
$string['extraindexesfound'] = 'Índices extra encontrados';
$string['field'] = 'Campo';
$string['fieldnameempty'] = 'Nombre del campo vacío';
$string['fields'] = 'Campos';
$string['fieldsnotintable'] = 'El campo no existe en la tabla';
$string['fieldsusedinindex'] = 'Este campo se usa como índice';
$string['fieldsusedinkey'] = 'Este campo se usa como clave.';
$string['filemodifiedoutfromeditor'] = 'Advertencia: Archivo modificado localmente mientras se emplea el editor XMLDB. Al guardarlo se sobrescribirán los cambios locales.';
$string['filenotwriteable'] = 'Archivo no escribible';
$string['fkunknownfield'] = 'Hay una clave extraña {$a->keyname} en la tabla {$a->tablename}, que apunta hacia un campo inexistente {$a->reffield} en la tabla referenciada {$a->reftable}.';
$string['fkunknowntable'] = 'La clave extraña {$a->keyname} en la tabla {$a->tablename} apunta hacia una tabla inexistente {$a->reftable}.';
$string['fkviolationdetails'] = 'La clave externa {$a->keyname} en la tabla {$a->tablename} es violada por {$a->numviolations} de un total de {$a->numrows} filas.';
$string['float2numbernote'] = 'Aviso: A pesar de que los campos "float" (flotante) están soportados al 100% por XMLDB, se recomienda migrar a campos "number" (número) en su lugar.';
$string['floatincorrectdecimals'] = 'Número incorrecto de decimales del campo float';
$string['floatincorrectlength'] = 'Longitud incorrecta del campo float';
$string['generate_all_documentation'] = 'Toda la documentación';
$string['generate_documentation'] = 'Documentación';
$string['gotolastused'] = 'Ir al último archivo usado';
$string['incorrectfieldname'] = 'Nombre incorrecto';
$string['incorrectindexname'] = 'Nombre del índice incorrecto';
$string['incorrectkeyname'] = 'Nombre de clave (key) incorrecto';
$string['incorrecttablename'] = 'Nombre de tabla incorrecto';
$string['index'] = 'Índice';
$string['indexes'] = 'Índices';
$string['indexnameempty'] = 'El nombre del índice está vacío';
$string['integerincorrectlength'] = 'Longitud incorrecta del campo integer';
$string['key'] = 'Clave';
$string['keynameempty'] = 'El nombre de clave (key) no puede estar vacío';
$string['keys'] = 'Claves';
$string['listreservedwords'] = 'Lista de palabra reservadas<br/>(usada para mantener <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB reserved words</a> actualizado)';
$string['load'] = 'Cargar';
$string['main_view'] = 'Vista principal';
$string['masterprimaryuniqueordernomatch'] = 'Los campos de la clave externa deben aparecer en el mismo orden en que se enumeran en la CLAVE ÚNICA de la tabla de referencia.';
$string['missing'] = 'Ausente';
$string['missingindexes'] = 'Se han encontrado índices ausentes';
$string['mustselectonefield'] = 'Debe seleccionar un campo para ver las acciones relacionadas con el campo.';
$string['mustselectoneindex'] = 'Debe seleccionar un índice para ver las acciones relacionadas con el índice.';
$string['mustselectonekey'] = 'Debe seleccionar una clave para ver las acciones relacionadas con la clave.';
$string['newfield'] = 'Nuevo campo';
$string['newindex'] = 'Nuevo índice';
$string['newkey'] = 'Nueva clave';
$string['newtable'] = 'Nueva tabla';
$string['newtablefrommysql'] = 'Nueva tabla desde MySQL';
$string['new_table_from_mysql'] = 'Nueva tabla desde MySQL';
$string['nofieldsspecified'] = 'No se especificaron campos';
$string['nomasterprimaryuniquefound'] = 'La(s) columna(s) de sus referencias de clave externa deben ser incluidas en una CLAVE primaria o única en la tabla referenciada. Tenga en cuenta que el hecho que la columna esté en un ÍNDICE ÚNICO no es suficientemente bueno.';
$string['nomissingorextraindexesfound'] = 'No se han encontrado índices faltantes ni extra, por lo que no  se necesitan más acciones.';
$string['noreffieldsspecified'] = 'No se especificaron campos de referencia';
$string['noreftablespecified'] = 'La tabla de referencia especificada no se encontró';
$string['noviolatedforeignkeysfound'] = 'No se han encontrado claves externas violadas';
$string['nowrongdefaultsfound'] = 'No se han encontrado valores por defecto inconsistentes. Su base de datos no necesita acciones adicionales.';
$string['nowrongintsfound'] = 'No se han encontrado enteros erróneos: su BD no necesita más acciones.';
$string['nowrongoraclesemanticsfound'] = 'No se encontraron columnas de Oracle que emplearan semanticas BYTE, su Base de datos no necesita más acciones.';
$string['numberincorrectdecimals'] = 'Número incorrecto de decimales en el campo numérico';
$string['numberincorrectlength'] = 'Longitud incorrecta del campo numérico';
$string['numberincorrectwholepart'] = 'Parte del número entero demasiado grande para campo de número';
$string['pendingchanges'] = 'Nota: Ha realizado cambios en este archivo. Se pueden guardar en cualquier momento.';
$string['pendingchangescannotbesaved'] = 'Hay cambios en este archivo pero no se puede guardar. Compruebe que el directorio y el "install.xml" que hay dentro tienen permisos de escritura para el servidor web.';
$string['pendingchangescannotbesavedreload'] = 'Hay cambios en este archivo pero no se pueden guardar. Compruebe que el directorio y el archivo "install.xml" que hay en su interior tienen permisos de escritura para el servidor web. A continuación, vuelva a cargar esta página y ya podrá guardar los cambios.';
$string['persistentfieldscomplete'] = 'Los siguientes campos han sido añadidos.';
$string['persistentfieldsconfirm'] = 'desea Usted añadir los siguientes campos :';
$string['persistentfieldsexist'] = 'Los campos siguientes ya existen :';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Las claves (keys) primarias no pueden ser nulas (null)';
$string['privacy:metadata'] = 'El plugin del editor XMLDB no almacena ningún dato personal.';
$string['reserved'] = 'Reservado';
$string['reservedwords'] = 'Palabras reservadas';
$string['revert'] = 'Revertir';
$string['revert_changes'] = 'Revertir cambios';
$string['save'] = 'Guardar';
$string['searchresults'] = 'Resultados de la búsqueda';
$string['selectaction'] = 'Seleccionar acción:';
$string['selectdb'] = 'Seleccionar base de datos:';
$string['selectfieldkeyindex'] = 'Seleccionar Campo/Clave/Índice:';
$string['selectonecommand'] = 'Por favor, seleccione una acción de la lista para ver el código PHP';
$string['selectonefieldkeyindex'] = 'Por favor, seleccione un Campo/Clave/Índice de la lista para ver el código PHP';
$string['selecttable'] = 'Seleccionar tabla:';
$string['table'] = 'Tabla';
$string['tablenameempty'] = 'El nombre de la tabla no puede estar vacío';
$string['tables'] = 'Tablas';
$string['unknownfield'] = 'Se refiere a un campo desconocido';
$string['unknowntable'] = 'Se refiere a una tabla desconocida';
$string['unload'] = 'Descargar';
$string['up'] = 'Arriba';
$string['view'] = 'Ver';
$string['viewedited'] = 'Ver editados';
$string['vieworiginal'] = 'Ver original';
$string['viewphpcode'] = 'Ver código PHP';
$string['view_reserved_words'] = 'Ver palabras reservadas';
$string['viewsqlcode'] = 'Ver código SQL';
$string['view_structure_php'] = 'Mostrar estructura PHP';
$string['view_structure_sql'] = 'Mostrar estructura SQL';
$string['view_table_php'] = 'Ver tabla PHP';
$string['view_table_sql'] = 'Ver tabla SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Claves externas violadas';
$string['violatedforeignkeysfound'] = 'Se han encontrado claves externas violadas';
$string['violations'] = 'Violaciones';
$string['wrong'] = 'Erróneo';
$string['wrongdefaults'] = 'Se encontraron valores por defecto erróneos';
$string['wrongints'] = 'Se han encontrado enteros erróneos';
$string['wronglengthforenum'] = 'Longitud incorrecta del campo enum';
$string['wrongnumberofreffields'] = 'Número equivocado de campos de referencia';
$string['wrongoraclesemantics'] = 'Se encontró semántica de Oracle BYTE equivocada';
$string['wrongreservedwords'] = 'Palabras reservadas en uso<br />(tenga en cuenta que los nombres de la tabla no son importantes si se usa $CFG->prefix)';
$string['yesextraindexesfound'] = 'Los siguientes índices adicionales fueron encontrados.';
$string['yesmissingindexesfound'] = '<p>En su Base de Datos se han encontrado algunos índices ausentes. Aquí puede ver los detalles, así como las instrucciones SQL a ejecutar con su interfaz SQL favorita para crearlos.(¡no olvide hacer una copia de seguridad de sus datos!).</p><p>Una vez realizado, se recomienda ejecutar de nuevo esta utilidad para comprobar que no se encuentran más índices faltantes.</p>';
$string['yeswrongdefaultsfound'] = '<p>En su base de datos se han encontrado algunos valores por defecto inconsistentes. Aquí se presentan los detalles y las instrucciones SQL que deben ejecutarse en su interfaz SQL favorita para reparalos todos (¡no olvide hacer una copia de seguridad de sus datos!).</p><p>Una vez realizado, se recomienda ejecutar de nuevo esta utilidad para comprobar que no se encuentran más valores por defecto inconsistentes.</p>';
$string['yeswrongintsfound'] = '<p>Se han encontrado algunos números enteros erróneos en su Base de Datos. Aquí están sus detalles y las instrucciones SQL que deben ejecutarse en su interfaz SQL favorita para corregirlos. ¡Recuerde hacer primeramente una copia de seguridad de sus datos!.</p><p>Después de corregirlos, se recomienda encarecidamente ejecutar de nuevo esta utilidad, para comprobar que no se encuentran más números enteros erróneos.</p>';
$string['yeswrongoraclesemanticsfound'] = 'Algunas columnas de Oracle que emplean semántica de BYTE han sido encontradas en su base de datos. Aquí están los detalles y las instrucciones SQL que es necesario  ejecutar con su interfaz favorita de SQL para covertirlas todas.
¿Acuérdese de hacer un respaldo ANTES!.</p>
<p>Después de hacer esto, es muy recomendable ejecutar esta utilería de nuevo, para revisar que no se encuentran más semánticas equivocadas</p>';
