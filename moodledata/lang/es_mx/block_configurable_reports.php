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
 * Strings for component 'block_configurable_reports', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   block_configurable_reports
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Publicaciones de actividad';
$string['activityview'] = 'Vistas de actividad';
$string['addreport'] = 'Añadir reporte';
$string['anyone'] = 'Cualquiera';
$string['anyone_summary'] = 'Cualquier usuario en el Campus podra ver este reporte';
$string['availablemarks'] = 'Puntuaciones disponibles';
$string['average'] = 'Promedio';
$string['badconditionexpr'] = 'Expresión de condición incorrecta';
$string['badsize'] = 'Tamaño incorrecto, debe ser en % o pixeles';
$string['badtablewidth'] = 'Ancho incorrecto, debe ser en % o valor absoluto';
$string['bar'] = 'Barra';
$string['barsummary'] = 'Una gráfica de barras';
$string['blockname'] = 'Reportes configurables';
$string['calcs'] = 'Cálculos';
$string['categories'] = 'Categorías';
$string['categoryfield'] = 'Campo de categoría';
$string['categoryfieldorder'] = 'Orden de campo de categoría';
$string['ccoursefield'] = 'Condición de campo del curso';
$string['cellalign'] = 'Alinear celdas';
$string['cellsize'] = 'Tamaño de celda';
$string['cellwrap'] = 'Reacomodo de celdas';
$string['column'] = 'Columna';
$string['columnandcellproperties'] = 'Propiedades de columna y celda';
$string['columncalculations'] = 'Cálculos de columna';
$string['columns'] = 'Columnas';
$string['comp_calcs'] = 'Cálculos';
$string['comp_calcs_help'] = '<p>Aqui puede usted añadir cálculos para columnas; Por ejemplo, promedio de número de usuarios inscritos en cursos</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Cálculos';
$string['comp_calculations_help'] = '<p>Aqui puede usted añadir cálculos para columnas; Por ejemplo, promedio de número de usuarios inscritos en cursos</p>';
$string['comp_columns'] = 'Columnas';
$string['comp_columns_help'] = '<p>Aqui puede usted elegir las diferentes columnas de su reporte, dependiendo del tipo de reporte</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentación del Plugin </a></p>';
$string['comp_conditions'] = 'Condiciones';
$string['comp_conditions_help'] = '<p>Aqui puede usted definir las condiciones (ejemplo: solamente cursos de esta categoría, solamente usuarios de España, etc.</p>

<p>Usted puede añadir una expresión logica si usted está usando más de una condición</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'SQL Personalizado';
$string['comp_customsql_help'] = '<p>Añadir una solicitud SQL de trabajo. No use el prefijo de base de datos $CFG->prefix ; en su lugar use "prefix_" sin las comillas</p>

<p>Ejemplo:: SELECT * FROM prefix_course</p> <p>Usted puede encontrar muchos reportes de SQL aqui: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

<p>Dado que este bloque soporta los reportes de solicitudes de SQL perzonalizados de Tim Hunt, usted puede usar cualquier solicitud.</p>

<p>Acuerdese de añadir un filtro de tiempo (Time filter) si es que va a usar reportes con fichas (tokens) de tiempo. </p>

<p>Para usar filtros vea: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Filtros';
$string['comp_filters_help'] = '<p>Aqui puede usted elegir cuales filtros se mostrarán</p>

<p>Un filtro le permite al usuario elegir columnas del reporte para filtrar los resultados del reporte</p>

<p>Para usar filtros, si el tipo de su reporte es SQL, vea: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['componenthelp'] = 'Ayuda de componente';
$string['comp_ordering'] = 'Ordenamiento';
$string['comp_ordering_help'] = '<p>Aqui puede usted elegir cómo ordenar el reporte usando campos e instrucciones</p>

 <p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Permisos';
$string['comp_permissions_help'] = '<p>Aqui puede usted elegir quien puede ver un reporte.</p>

<p>Usted puede añadir una expresión lógica para calcular el permiso final si es que está usando más de una condición </p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_plot'] = 'Graficación';
$string['comp_plot_help'] = '<p>Aqui puede usted añadir graficas a su reporte basadas en los valores y columnas de reporte</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_template'] = 'Plantilla';
$string['comp_template_help'] = '<p>Usted puede modificar el diseño del reporte al crear una plantilla</p>

<p>Para crear una plantilla vea las marcas para reemplazar que puede emplear en el encabezado, pie de paginas y para cada registro del reporte usando los botones de ayuda o la información que se muestra en la misma página</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['conditionexpr'] = 'Condición';
$string['conditionexpr_conditions'] = 'Condición';
$string['conditionexpr_conditions_help'] = '<p>Usted puede combinar condiciones usando una expresión lógica</p>

<p>Escriba una expresión lógica válida con estos operadores: and, or.</p>';
$string['conditionexprhelp'] = 'Escriba una condición valida, por ejemplo (c1 and c2) or (c3 and c4)';
$string['conditionexpr_permissions'] = 'Condición';
$string['conditionexpr_permissions_help'] = '<p>Usted puede combinar condiciones usando una expresión lógica</p>

<p>Escriba una expresión lógica válida con estos operadores: and, or,</p>';
$string['conditions'] = 'Condiciones';
$string['configurable_reports:addinstance'] = 'Añadir un nuevo bloque de reportes configurables';
$string['configurable_reports:manageownreports'] = 'Gestionar sus propios reportes';
$string['configurable_reports:managereports'] = 'Gestionar reportes';
$string['configurable_reports:managesqlreports'] = 'Gestionar reportes SQL';
$string['configurable_reports:myaddinstance'] = 'Añadir un nuevo bloque de reportes configurable  a mi página de MI HOGAR';
$string['configurable_reports:viewreports'] = 'Ver reportes';
$string['confirmdeletereport'] = '¿Está usted seguro de querer eliminar este reporte?';
$string['coursecategories'] = 'Filtro de categoría de curso';
$string['coursecategory'] = 'Curso en categoría';
$string['coursechild'] = 'Cursos que son hijos de';
$string['coursededicationtime'] = 'Tiempo de dedicación al curso';
$string['coursefield'] = 'Campo del curso';
$string['coursefieldorder'] = 'Orden del campo del curso';
$string['coursemodules'] = 'Módulo de curso';
$string['courseparent'] = 'Cursos cuyo padre es';
$string['courses'] = 'Cursos';
$string['coursestats'] = 'Estadisticas del curso';
$string['cron'] = 'Auto correr diariamente';
$string['crondescription'] = 'Agendar esta consulta para que corra cada día (de noche)';
$string['cron_help'] = 'Agendar esta consulta para que corra cada día (de noche)';
$string['crrepository'] = 'Repositorio de reportes';
$string['crrepositoryinfo'] = 'Repositorio compartido remotamente, con reportes muestra completamente funcionales  (Name of GitHub account owner + slash + repository name)';
$string['currentreportcourse'] = 'Reporte de curso actual';
$string['currentreportcourse_summary'] = 'El curso en donde se ha creado el reporte';
$string['currentuser'] = 'Usuario actual';
$string['currentusercourses'] = 'Cursos inscritos por el usuario actual';
$string['currentusercourses_summary'] = 'Una lista de los cursos del usuario actual (solamente cursos visibles)';
$string['currentuserfinalgrade'] = 'Calificación final del curso del usuario actual';
$string['currentuserfinalgrade_summary'] = 'Esta columna muestra la calificación final del usuario actual en el curso-hilera';
$string['currentuser_summary'] = 'El usuario que está viendo el reporte';
$string['cuserfield'] = 'Condición del campo del usuario';
$string['custom'] = 'Personalizado';
$string['customdateformat'] = 'Formato de fecha personalizada';
$string['customsql'] = 'SQL personalizado';
$string['datatables'] = 'Habilitar biblioteca (library) DataTables JS';
$string['datatables_emptytable'] = 'Sin datos disponibles en tabla';
$string['datatables_first'] = 'Primero';
$string['datatablesinfo'] = 'Librería JS de Tablas de Datos (Ordenamiento de columnas, encabezado fijo, búsqueda, paginación...)';
$string['datatables_info'] = 'Moistrando _START_ a _END_ de_las _entradas_TOTAL(es)';
$string['datatables_infoempty'] = 'Mostrando 0 ta 0 de 0 entries';
$string['datatables_infofiltered'] = '(filtrado_de_MAX_ total de entradas)';
$string['datatables_last'] = 'Último';
$string['datatables_lengthmenu'] = 'Mostrar_entradas_del_MENU';
$string['datatables_loadingrecords'] = 'Cargando...';
$string['datatables_next'] = 'Siguiente';
$string['datatables_previous'] = 'Anterior';
$string['datatables_processing'] = 'Procesando...';
$string['datatables_search'] = 'Buscar:';
$string['datatables_sortascending'] = ':activar para ordenar columnas ascendentemente';
$string['datatables_sortdescending'] = ':activar para ordenar columnas descendentemente';
$string['datatables_zerorecords'] = 'No se encontraron resultados coincidentes';
$string['date'] = 'Fecha';
$string['dateformat'] = 'Formato de Fecha';
$string['dbhost'] = 'Host de BasedeDatos';
$string['dbhostinfo'] = 'Nombre del host de BasedeDatos remota (en la cual se ejecutarán nuetras consultas SQL)';
$string['dbname'] = 'Nombre de BasedeDatos';
$string['dbnameinfo'] = 'Nombre de BasedeDatos remota (en la cual se ejecutarán nuetras consultas SQL)';
$string['dbpass'] = 'Contraseña de BasedeDatos';
$string['dbpassinfo'] = 'Contraseña para BasedeDatos remota (para el usuario de arriba)';
$string['dbuser'] = 'Nombre_de_usuario de BasedeDatos';
$string['dbuserinfo'] = 'Nombre de usuario de BasedeDatos remota (debería de tener privilegios SELECT en la BasedeDatos de arriba)';
$string['decimals'] = 'Número de decimales';
$string['direction'] = 'Instruccion';
$string['disabled'] = 'Deshabilitado';
$string['displayglobalreports'] = 'Mostrar reportes globales';
$string['displayreportslist'] = 'Mostrar la lista de reportes en el cuerpo del bloque';
$string['donotshowtime'] = 'No mostrar información de fecha';
$string['download'] = 'Descargar';
$string['downloadreport'] = 'Descargar reporte';
$string['email_message'] = 'Mensaje';
$string['email_send'] = 'enviar';
$string['email_subject'] = 'Asunto';
$string['enabled'] = 'Habilitado';
$string['enableglobal'] = 'Este es un reporte global (accesible desde cualquier curso)';
$string['enablejsordering'] = 'Habilitar ordenamiento JavaScript';
$string['enablejspagination'] = 'Habilitar paginación JavaScript';
$string['endtime'] = 'Fecha de término';
$string['enrolledstudents'] = 'Estudiantes inscritos';
$string['error_field'] = 'Campo no permitido';
$string['error_operator'] = 'Operdor no permitido';
$string['error_value_expected_integer'] = 'Valor entero esperado';
$string['excludedeletedusers'] = 'Excluir usuarios eliminados (solamente para reportes SQL)';
$string['executeat'] = 'Ejecutar en';
$string['executeatinfo'] = 'El CRON de Moodle correrá las consultas SQL agendadas después del tiempo seleccionado. Una vez en 24 horas';
$string['export_csv'] = 'Exportar en formato CSV';
$string['export_json'] = 'Exportar en formato JSON';
$string['export_ods'] = 'Exportar en formato ODS';
$string['exportoptions'] = 'Opciones para exportar';
$string['exportreport'] = 'Exportar reporte';
$string['export_xls'] = 'Exportar en formato XLS';
$string['fcoursefield'] = 'Filtro de campo del curso';
$string['field'] = 'Campo';
$string['filter'] = 'Filtro';
$string['filter_all'] = 'Todos';
$string['filter_apply'] = 'Aplicar';
$string['filtercategories'] = 'Filtrar categorias';
$string['filtercategories_summary'] = 'Para filtrar por categoría';
$string['filtercoursecategories'] = 'Filtro de cuurso de categoría';
$string['filtercoursecategories_summary'] = 'Filtrar cursos por su categoría padre';
$string['filtercoursemodules'] = 'Módulo de curso';
$string['filtercoursemodules_summary'] = 'Filtrar módulo de curso';
$string['filtercourses'] = 'Cursos';
$string['filtercourses_summary'] = 'Este filtro muestra una lista de cursos. Solamente puede seleccionarse un curso a la vez';
$string['filterenrolledstudents'] = 'Estudiantes inscritos al curso';
$string['filterenrolledstudents_summary'] = 'Filtrar un usuario (por ID) de los estudiantes inscritos al curso';
$string['filterrole'] = 'rol';
$string['filterrole_summary'] = 'Filtrar roles del sistema (Profesor, Estudiante, ...)';
$string['filters'] = 'Filtros';
$string['filter_searchtext'] = 'Buscar texto';
$string['filter_searchtext_summary'] = 'Filtro de texto libre';
$string['filtersemester'] = 'Semestre (Hebreo)';
$string['filtersemester_list'] = '';
$string['filtersemester_summary'] = 'Permite el filtrado antes de semestres (en hebreo, por ejemplo: Primer cuatrimestre, segundo semestre)';
$string['filterstartendtime_summary'] = 'Filtro de fecha Inicio / Fin';
$string['filtersubcategories'] = 'Categoría (incluir sub categorías)';
$string['filtersubcategories_summary'] = 'Use: %%FILTER_CATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Usuario del curso actual';
$string['filterusers'] = 'Usuario del sistema';
$string['filterusers_summary'] = 'Filtrar un usuario (por ID) de la lista de usuarios del sistema';
$string['filteruser_summary'] = 'Filtrar un usuario (por ID) de la lista de usuarios actual';
$string['filteryearhebrew'] = 'Año (Hebreo)';
$string['filteryearhebrew_list'] = '';
$string['filteryearhebrew_summary'] = 'El filtro está usando años hebreos (תשעג,...)';
$string['filteryearnumeric'] = 'Año (Numérico)';
$string['filteryearnumeric_summary'] = 'El filtro está usando años numéricos (2013,...)';
$string['filteryears'] = 'Año (Numérico)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filtrar por años (representación numérica, 2012...)';
$string['finalgradeincurrentcourse'] = 'Calificación final en curso actual';
$string['fixeddate'] = 'Fecha fija';
$string['footer'] = 'Pie de página';
$string['forcemidnight'] = 'Forzar medianoche';
$string['fsearchuserfield'] = 'Caja de búsqueda de campo del usuario';
$string['fuserfield'] = 'Filtro de campo del usuario';
$string['global'] = 'Reporte global';
$string['global_help'] = 'El reporte global puede accesarse desde cualquier curso en la plataforma, simplemente añadiendo &courseid=MY_COURSE_ID en la URL del reporte';
$string['globalstatsshouldbeenabled'] = 'Las estadisticas del sitio deben estar habilitadas. Vaya a Administración  > Servidor > Estadisticas';
$string['groupseries'] = 'Series del grupo';
$string['groupvalues'] = 'Mismos valores del grupo (suma)';
$string['head_color'] = 'Color del fondo de la gráfica';
$string['head_data'] = 'Datos de la gráfica';
$string['header'] = 'Encabezado';
$string['head_size'] = 'Tamaño de la gráfica';
$string['height'] = 'Altura';
$string['importfromrepository'] = 'Importar reporte desde repositorio';
$string['importreport'] = 'Importar reporte';
$string['includesubcats'] = 'Incluir subcategorias';
$string['jsordering'] = 'Ordenamiento JavaScript';
$string['jsordering_help'] = 'El ordenamiento JavaScript le permite ordenar la tabla del reporte sin volver a cargar la página';
$string['label_field'] = 'Campo de etiqueta';
$string['label_field_help'] = 'El campo que proporciona nombres para las cosas respresentadas en la gráfica';
$string['lastexecutiontime'] = 'Tiempo de ejecución = {$a} (Sec)';
$string['legacylognotenabled'] = 'Las bitácoras antiguas deben estar habilitadas. Vaya a la Administración del sitio / Plugins / Bitácoras / Habilitar bitácora antigua y dentro de la configuración de bitácora active Datos de Bitácora antigua';
$string['limitcategories'] = 'Limitar categorías en una gráfica';
$string['line'] = 'Gráfica de lineas';
$string['linesummary'] = 'Una gráfica de lineas con varias series de datos';
$string['listofsqlreports'] = 'Presione F11 cuando el cursor está dentro del editor para alternar a edición en pantalla completa. También puede usar la tecla Esc para salirse de la edición en pantalla completa.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Lista de Reportes SQL Contribuídos</a>';
$string['managereports'] = 'Gestionar reportes';
$string['max'] = 'Máximo';
$string['min'] = 'Mínimo';
$string['missingcolumn'] = 'Se requiere una columna';
$string['module'] = 'Modulo';
$string['newreport'] = 'Reporte nuevo';
$string['nocalcsyet'] = 'Todavia sin cálculos';
$string['nocolumnsyet'] = 'Todavia sin columnas';
$string['noconditionsyet'] = 'Todavia sin condiciones';
$string['noexplicitprefix'] = 'Sin prefijo explícito';
$string['nofiltersyet'] = 'Todavia sin filtros';
$string['nofilteryet'] = 'Todavia sin filtros';
$string['noorderingyet'] = 'Todavia sin ordenamiento';
$string['nopermissionsyet'] = 'Todavia sin permisos';
$string['noplotyet'] = 'Todavia sin graficaciones';
$string['norecordsfound'] = 'No se encontraron registros';
$string['noreportsavailable'] = 'Sin reportes disponibles';
$string['norowsreturned'] = 'No regresaron hileras';
$string['nosemicolon'] = 'Sin punto y coma';
$string['notallowedwords'] = 'Palabras no permitidas';
$string['operator'] = 'Operador';
$string['ordering'] = 'Ordenamiento';
$string['others'] = 'Otros';
$string['pagination'] = 'Paginación';
$string['pagination_help'] = 'Numero de registros a mostrar en cada página. Cero significa sin paginación';
$string['parentcategory'] = 'Categoría padre';
$string['percent'] = 'Porcentaje';
$string['permissions'] = 'Permisos';
$string['pie'] = 'Pastel';
$string['pieareaname'] = 'Nombre';
$string['pieareavalue'] = 'Valor';
$string['piesummary'] = 'Una gráfica de pastel';
$string['plot'] = 'Graficar - gráficas';
$string['pluginname'] = 'Reportes configurables';
$string['previousdays'] = 'Dias previos';
$string['previousend'] = 'Fin previo';
$string['previousstart'] = 'Inicio previo';
$string['printreport'] = 'Imprimir reporte';
$string['privacy:metadata:block_configurable_reports'] = 'El bloque de Reportes Configurables contiene reportes personalizados de curso.';
$string['privacy:metadata:block_configurable_reports:components'] = 'La configuración del reporte. Contiene la consulta, los filtros...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'ID del curso';
$string['privacy:metadata:block_configurable_reports:global'] = 'Si es que el reporte está accesible desde todos los cursos o no';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'Tiempo que tardó para ejecutarse la última vez que fue efectuado, en milisegundos.';
$string['privacy:metadata:block_configurable_reports:name'] = 'El nombre del reporte';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'La ID del usuario que creó el reporte';
$string['privacy:metadata:block_configurable_reports:summary'] = 'La descripción del reporte';
$string['privacy:metadata:block_configurable_reports:type'] = 'El tipo del reporte';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Si es que el reporte está visible o no';
$string['puserfield'] = 'Valor de campo de usuario';
$string['puserfield_summary'] = 'Usuario con el valor seleccionado en el campo seleccionado';
$string['queryfailed'] = 'Falló la consulta <code><pre>{$a}</pre></code>';
$string['querysql'] = 'Solicitud SQL';
$string['remote'] = 'Correr en BD remota';
$string['remotedescription'] = '¿Quiere correr esta consulta en la base de datos remota?';
$string['remote_help'] = '¿Quiere correr esta consulta en la base de datos remota?';
$string['remotequerysql'] = 'Consulta SQL';
$string['report'] = 'Reporte';
$string['reportcategories'] = '1) Elegir una categoría de reporte remoto';
$string['report_categories'] = 'Reporte de categorías';
$string['reportcolumn'] = 'Columna de otro reporte';
$string['report_courses'] = 'Reporte de cursos';
$string['reportcreated'] = 'reporte creado exitosamente';
$string['reportlimit'] = 'Límite de filas del reporte';
$string['reportlimitinfo'] = 'Limite el número de filas que son mostradas en la tabla del reporte (El valor por defecto es de 500 filas). Lo mejor es tener un cierto límite, para que los usuarios no sobrecarguen el motor de la BasedeDatos)';
$string['reports'] = 'Reportes';
$string['reportscapabilities'] = 'Capacidades del reporte';
$string['reportscapabilities_summary'] = 'Usuarios con la capacidad moodle/site:viewreports habilitada';
$string['reportsincategory'] = '2) Elegir un reporte de la lista';
$string['report_sql'] = 'Reporte SQL';
$string['reporttable'] = 'Tabla de reporte';
$string['reporttable_help'] = '<p>Este es el ancho de la tabla que mostrará los registros del reporte.</p>

<p>Si usted usa una plantilla, esta opción no tiene efecto</p>';
$string['reporttableui'] = 'Interfaz de Usuario de tabla de reporte';
$string['reporttableuiinfo'] = 'Mostrar la tabla de reporte como: Simple, tabla HTML desplazable, JQuery con ordenamiento de columnas o librería de Tablas de Datos JS (ordenamiento de columnas, encabezado fijo, búsqueda, paginación...)';
$string['report_timeline'] = 'Reporte de linea de tiempo';
$string['report_users'] = 'Reporte de usuarios';
$string['repository'] = 'Repositorio de reportes';
$string['repository_help'] = 'Usted puede importar reportes de muestra de un repositorio público compartido.

Por favor tenga en cuenta que existe un límte diario a las llamadas al repositorio.

Si no está funcionando la conexión al repositorio, Usted puede descargar manualmente aquí <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> un reporte, y después importarlo usando la característica de  "Importar reporet" que se muestra debajo';
$string['role'] = 'Rol';
$string['roleincourse'] = 'Usuarios con el/los rol(es) en el reporte actual de curso';
$string['roleusersn'] = 'Número de usuarios con rol....';
$string['searchtext'] = 'Buscar texto';
$string['semester'] = 'Semestre (Hebreo)';
$string['serieid'] = 'Columna de serie';
$string['sessionlimittime'] = 'Límite (en minutos) entre clics';
$string['sessionlimittime_help'] = 'El límite entre clics define si dos clics son parte de la misma sesión o no';
$string['setcourseid'] = 'Configura courseid (ID del curso)';
$string['sharedsqlrepository'] = 'Repositorio SQL compartido';
$string['sharedsqlrepositoryinfo'] = 'Nombre del propietario de la cuenta  GitHub  + diagonal + nombre del repositorio';
$string['sqlsecurity'] = 'Seguridad SQL';
$string['sqlsecurityinfo'] = 'Deshabilitar para ejecutar consultas SQL con oraciones para insertar datos';
$string['sqlsyntaxhighlight'] = 'Resaltar sintaxis SQL';
$string['sqlsyntaxhighlightinfo'] = 'Resaltar sintaxis SQL en el editor de código (CodeMirror JS library)';
$string['startendtime'] = 'Filtro de fecha Inicio / Fin';
$string['starttime'] = 'Fecha de inicio';
$string['stat'] = 'Estadistica';
$string['statsactiveenrolments'] = 'Inscripciones activas (ultima semana)';
$string['statslogins'] = 'Entradas a la plataforma';
$string['statstotalenrolments'] = 'Inscripciones totales';
$string['student'] = 'Estudiante';
$string['subcategories'] = 'Categoría (incluir sub categorías)';
$string['sum'] = 'Suma';
$string['tablealign'] = 'Alineación de tabla';
$string['tablecellpadding'] = 'Justificado de tabla';
$string['tablecellspacing'] = 'Espaciado de tabla';
$string['tableclass'] = 'Clase de tabla';
$string['tablewidth'] = 'Ancho de tabla';
$string['template'] = 'Plantilla';
$string['template_marks'] = 'Marcas en plantilla';
$string['template_marks_help'] = '<p>Usted puede usar cualquiera de estas marcas de reemplazo:</p> <ul>
<li>##reportname## - Para incluir el nombre del reporte</li>

<li>##reportsummary## - Para incluir el resumen del reporte</li>

<li>##graphs## - Para incluir las gráficas</li>

<li>##exportoptions## - Para incluir las opciones de exportación</li>

<li>##calculationstable## - Para incluir la tabla de cálculos</li>

<li>##pagination## - Para incluir la paginación </li> </ul>';
$string['templaterecord'] = 'Plantilla de registro';
$string['timeinterval'] = 'Intervalo de tiempo';
$string['timeline'] = 'Linea del tiempo';
$string['timemode'] = 'Modo de tiempo';
$string['totalrecords'] = 'Número total de registros = {$a->totalrecords}';
$string['type'] = 'Tipo de reporte';
$string['typeofreport'] = 'Tipo de reporte';
$string['typeofreport_help'] = 'Elija el tipo de reporte que quiere crear. Por seguridad, el reporte SQL requiere una capacidad adicional';
$string['user'] = 'Usuario del curso (ID)';
$string['usercompletion'] = 'Estatus de finalización de curso del usuario';
$string['usercompletionsummary'] = 'Estatus de finalización del curso';
$string['userfield'] = 'Campo de perfil de usuario';
$string['userfieldorder'] = 'Orden de campo de usuario';
$string['usermodactions'] = 'Acciones de módulo de usuario';
$string['usermodoutline'] = 'Estadisticas simples de módulo de usuario';
$string['users'] = 'Usuario del sistema (id)';
$string['usersincohorts'] = 'Usuario que es miembro de una/varias cohorte(s)';
$string['usersincohorts_summary'] = 'Solamente los usuarios que son miembros de las cohortes seleccionadas';
$string['usersincoursereport'] = 'Cualquier usuario en el reporte de curso actual';
$string['usersincoursereport_summary'] = 'Cualquier usuario en el reporte de curso actual';
$string['usersincurrentcourse'] = 'Usuarios en el reporte de curso actual';
$string['usersincurrentcourse_summary'] = 'Usuario con el/los rol(es) seleccionados en el reporte de curso';
$string['userstats'] = 'Estadisticas del usuario';
$string['value'] = 'Valor';
$string['value_fields'] = 'Campos de valores';
$string['value_fields_help'] = 'Campos que deberían de ser representados en la gráfica. Ctrl + clic (Cmd+clic en Mac) para selecciones múltiples. Si Usted selecciona el campo de Etiqueta o un campo con valores no-numéricos será ignorado';
$string['viewreport'] = 'Ver reporte';
$string['width'] = 'Ancho';
$string['xandynotequal'] = 'Los ejes X y Y deben ser diferentes';
$string['xaxis'] = 'Eje de las X';
$string['yaxis'] = 'Eje de las Y';
$string['yearhebrew'] = 'Año (Hebreo)';
$string['yearnumeric'] = 'Año (Numérico)';
$string['years'] = 'Año (Numérico)';
$string['youmustselectarole'] = 'Se requiere al menos un rol';
