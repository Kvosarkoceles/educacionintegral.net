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
 * Strings for component 'report_trainingsessions', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   report_trainingsessions
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytime'] = 'Tiempo en actividades';
$string['activitytime_help'] = '<p>Este cálculo del tiempo considera todo el tiempo empleado en actividades del curso, dejando afuera el tiempo en el diseño del curso. En ciertos casos (cuando se usa la Revisión del Tiempo de Aprendizaje (no estandard) con asignación estandar del tiempo (http://github.com/vfremaux/moodle-mod_learningtimecheck.git), se usan tiempos estandar adicionales en lugar de tiempos reales extraidos de las bitácoras.</p>';
$string['addcoursegrade'] = 'Añadirle calificación del curso al reporte';
$string['addmodulelabel'] = 'Añadir módulo de actividad';
$string['addmoduletitle'] = 'Añadir un módulo de actividad al que Usted quiere que se le añada calificación en el reporte';
$string['addtimebonus'] = 'bono por tiempo sobre la calificación global';
$string['addtimegrade'] = 'Calificación por tiempo';
$string['advancement'] = 'Avance';
$string['allcourses'] = 'Todos los cursos';
$string['allgroups'] = 'Todos los grupos';
$string['authoritysign'] = 'Autoridad Educativa';
$string['availableactivities'] = 'Actividades disponibles';
$string['batchdate'] = 'Fecha de la labor';
$string['batchdate_help'] = '<p>Esta configuración significa la fecha exacta en la cual será invocado el lote y los documentos serán generados. Si Usted teme que los documentos sean pesados (muchos estudiantes, muchas historias a monitorear), elija una fecha/hora en un período de baja carga de su servidor.</p>';
$string['batchreports_task'] = 'Reportes masivos';
$string['bgcolor'] = 'Color del fondo';
$string['binary'] = 'Salida binaria';
$string['bonusgrademode'] = 'Modo de calificación con bono por tiempo';
$string['bonusgrademodedefault'] = 'Modo calificación Bono por defecto';
$string['bonusgrademodedefault_desc'] = 'Valor por defecto para el modo de calificación con bono cuando se configura por vez primera en un curso';
$string['calculated'] = 'Calculado';
$string['calculatedcolumns'] = 'Columnas calculadas (Solamente XLS)';
$string['calculated_help'] = 'Ingresar una fórmula EXCEL usando referencias locales de Excel como son producidas en el documento de salida. Use el remplazable {row} para insertar el número de la línea actual en referencias de celdas. Use nombres en idioma inglés para las funciones.

Ejemplo :

=AVERAGE($C${row}:$D${row})';
$string['checklistadvice'] = 'Efectos secundarios especiales a la terminación';
$string['chooseagroup'] = 'Elegir un grupo';
$string['chooseaninstitution'] = 'Elegir una institución';
$string['colors'] = 'Colores';
$string['columnname'] = 'Nombre de columna:';
$string['connections'] = 'Conexiones';
$string['contiguoussessions'] = 'Sesiones contiguas';
$string['continuous'] = 'Salida continua';
$string['coupling'] = 'Acoplamiento';
$string['course'] = 'Curso';
$string['courseglobals'] = 'Globales de Curso';
$string['coursegrade'] = 'Habilitar';
$string['courselabel'] = 'como columna:';
$string['coursename'] = 'Nombre de grupo';
$string['courseraw'] = 'Lotes';
$string['coursesessions'] = 'Sesiones de trabajo en curso (tiempos estimados reales)';
$string['coursestart'] = 'Fecha de inicio del curso';
$string['coursesummary'] = 'Resumen por participante';
$string['coursetime'] = 'Tiempo en curso (actividades excluídas)';
$string['coursetime_help'] = '<p>esto resume el tiempo empleado en pantallas generales del curso pero en actividades AFUERA.';
$string['coursetoolargenotice'] = 'El curso es demasiado grande y no tiene grupos interiores. No puede compilarse.';
$string['coursetotaltime'] = 'Tiempo total en curso';
$string['coursetotaltime_help'] = '<p>Esto resume todo el tiempo empleado en el curso o cualquier dependiente del curso.</p>';
$string['crop'] = 'Quitar sesiones fuera del rango';
$string['csv'] = 'Texto (CSV)';
$string['csvoutputtoiso'] = 'Salida ISO CSV';
$string['csvoutputtoiso_desc'] = 'Si se habilita, el reporte del curso en bruto se generará en codificación ISO-8859-1 para las aplicaciones antiguas concordantes con CSV';
$string['currentcourse'] = 'Curso actual';
$string['debugmode'] = 'Modo depuración activado';
$string['defaultmeanformula'] = '=AVERAGE({col}{minrow}:{col}{maxrow})';
$string['defaultsumformula'] = '=SUM({col}{minrow}:{col}{maxrow})';
$string['disabled'] = '|--------- deshabiiitado ------|';
$string['disablesuspendedenrolments'] = 'Ignorar inscripciones suspendidas';
$string['disablesuspendedenrolments_desc'] = 'Si se habilita, los estudiantes con inscripciones suspendidas solamente no  aparecerán en reportes';
$string['disablesuspendedstudents'] = 'Ignorar estudiantes suspendidos';
$string['disablesuspendedstudents_desc'] = 'Si se habilita, os estudiantes suspendidos no aparecerán en reportes';
$string['discrete'] = 'Salida discreta';
$string['discreteforcenumber'] = 'Forzar numérico en discreto';
$string['discreteforcenumber_desc'] = 'Forzar formato numérico en calificación de tiempo discreto (salida de Excel). Los valores discretos de escala de calificación de tiempo seberían de ser numéricamente interpretables.';
$string['done'] = 'Realizado:';
$string['duration'] = 'Duración';
$string['elapsed'] = 'Tiempo total';
$string['elapsedadvice'] = 'El tiempo trasncurrido puede ser diferente del rango de tiempo de sesión debido a tiempos de crédito extra en descansos de sesiones. Refiérase a la configuración del Bloque de Estadísticas de Uso.';
$string['elapsedlastweek'] = 'Hora de semana pasada';
$string['elapsedlastweek_help'] = 'El tiempo de curso extendido calcula el tiempo estrictamente gastado adentro del contexto del curso limitado al rango_de_tiempo de la última semana.';
$string['email'] = 'Email';
$string['emulatecommunity'] = 'Emular la versión de la comunidad';
$string['emulatecommunity_desc'] = 'Si se habilita, el plugin se comportará como la versión pública de la comunidad. ¡ Esto podría perder características !';
$string['enablecoursescore'] = 'Habilitar puntaje del curso';
$string['enablelearningtimecheckcoupling'] = 'Habilitar acoplamiento a LTC';
$string['enablelearningtimecheckcoupling_desc'] = 'Si se habilita, los reportes de sesión usarán filtrado de los días laborables  del Reporte de Revisión del tiempo de Aprendizaje';
$string['enddate'] = 'Fecha final';
$string['enterprisesign'] = 'Empresarial';
$string['equlearningtime'] = 'Tiempo de entrenamiento equivalente:';
$string['equlearningtime_help'] = '<p>Tiempo de aprendizaje equivalente resume todo el tiempo empleado en el curso, incluyendo tiempos de asignación estándares di se usa el módulo Learning Time Check checklist (http://github.com/vfremaux/moodle-mod_learningtimecheck.git).</p>';
$string['errorbadcoursestructure'] = 'Error en estructura de curso : ID malo {$a}';
$string['errorbadviewid'] = 'vista de reporte inexistente';
$string['errorcontinuousscale'] = 'Usted no puede usar escalas como origen de calificación en el modo continuo';
$string['errorcoursestructurefirstpage'] = 'Error en estructura del curso: fallo al obtener la primera página';
$string['errorcoursetoolarge'] = 'El curso es demasiado grande. Eligiendo un grupo';
$string['errordiscretenoranges'] = 'Usted debe definir rangos cuando usa el modo discreto';
$string['errornotingroup'] = 'Usted no tiene acceso a todos los usuarios y no tiene ninguna membresía de grupo.';
$string['extelapsed'] = 'Tiempo total (extendido)';
$string['extelapsed_help'] = 'El tiempo del curso extendido calcula el tiempo estrictamente empleado en el contexto del curso, más el tiempo empleado para llegar al material del curso y un poco del tiempo empleado en pantallas generales del sitio a las que el usuario tienen acceso.';
$string['extelapsedlastweek'] = 'Tiempo de semana pasada (extendido)';
$string['extelapsedlastweek_help'] = 'El tiempo de curso extendido calcula el tiempo gastado estrictamente en el contexto del curso, más el tiempo gastado para bajar al material del curso y algun tiempo gastado en pantallas del sitio general a las que el usuario tiene acceso, limitado al rango_de_tiempo de la última semana.';
$string['exthits'] = 'Aciertos (extendido)';
$string['exthitslastweek'] = 'Aciertos de la semana pasad (extendido)';
$string['extother'] = 'Tiempo extra afuera del curso';
$string['extother_help'] = '<p>Tiempo transcurrido afuera de este curso,pero anexo a estas sesiones del curso. Estos tiempos generalmente son empleados en páginas del usuario, o en entorno global del sitio.</p>';
$string['extotherlastweek'] = 'Tiempo extra (semana pasada)';
$string['extrauserinfo'] = 'Información adicional del usuario en reportes';
$string['extrauserinfo_desc'] = 'Usted puede añadir opcionalmente datos de campos a la parte de información del usuario';
$string['fail'] = 'REPRUEBA';
$string['filetimesuffixformat'] = 'Ymd_His';
$string['firstaccess'] = 'Primer acceso';
$string['firstconnection'] = 'Primera conexión';
$string['firstenrolldate'] = 'Primera inscripción';
$string['firstname'] = 'Nombre(s)';
$string['formulalabel'] = 'Etiqueta de columna';
$string['from'] = 'Desde';
$string['generatecsv'] = 'Generar como CSV';
$string['generatepdf'] = 'Generar como PDF';
$string['generatereports'] = 'Generar reportes';
$string['generatexls'] = 'Generar como XLS';
$string['grademodes'] = 'Modos de calificación';
$string['grademodes_help'] = 'Los modos de calificación definen como es calculada la calificación a partir de los datos originales ingresados:

* Binaria (Cuando sea posible) : Un único umbral será ingresado y el puntaje será el puntaje de escala completa o 0. si el puntaje está basado en una escala, el puntaje cambiará entre el índice más bajo y el más alto.
* Discreto : Un conjunto de rangos serán ingresados que dividen el valor del tiempo en  rangos aceptables. El puntaje de calificación máxima será dividido entre porciones iguales de la escala de puntaje. Si una escala es usada para puntear, entonces los rangos deberán de proporcionar N - 1 umbrales.
* Continuo : Un tiempo equivalente al puntaje completo será ingresado. Si el valor ingresado es mayor o igual al valor de referencia, el puntaje dado será puntaje completo;
de lo contrario, el puntaje será la interpolación redondeada linear más cercana del ingreso contra el umbral.';
$string['gradesettings'] = 'Configuraciones de calificación';
$string['gradexlsformat'] = 'Formato de calificación EXCEL';
$string['gradexlsformat_desc'] = 'Elegir un formato numérico para calificaciones';
$string['head1application'] = 'Los colores del Encabezado 1 son usados en la fila del encabezado superior cuando es apropiado.';
$string['head2application'] = 'Los colores del Encabezado 2 son usados en la fila del encabezado normal justo arriba de las columnas de datos. Esto es el caso más común.';
$string['head3application'] = 'Los colores del Encabezado 3 son usados al final del resumen de tabla, cuando es apropiado.';
$string['headsection'] = 'Sección encabezado';
$string['hideemptymodules'] = 'Ocultar módulos vacíos';
$string['hideemptymodules_desc'] = 'Si se habilita, los módulos vacíos (sin tiempo empleado) no se imprimirán en los reportes.';
$string['hits'] = 'Aciertos';
$string['hitslastweek'] = 'Aciertos la semana pasada';
$string['id'] = 'ID';
$string['idnumber'] = 'Número de ID';
$string['in'] = 'Tiempo empleado';
$string['incourses'] = 'En cursos';
$string['insessiontime'] = 'Dentro de reglas de tiempo de aprendizaje';
$string['insessiontime_help'] = 'Este es el tiempo "en" aprendizaje que coincidió con las reglas validadas';
$string['institution'] = 'Institución';
$string['institutions'] = 'Instituciones';
$string['instructure'] = 'Tiempo en actividades del curso';
$string['interactive'] = 'Interactivo';
$string['interactivetitle'] = '¡Producir este lote ahorita!';
$string['item'] = 'Item';
$string['items'] = 'Ítems';
$string['json'] = 'JSON';
$string['lastaccess'] = 'Último acceso';
$string['lastlogin'] = 'Úlrimo ingreso';
$string['lastname'] = 'Apellido(s)';
$string['layout'] = 'Diseño del documento';
$string['learningtimecheckadvice_help'] = '<p>Cuando se usa un módulo de Revisión del Tiempo de Aprendizaje que les permite a los profesores validar actividades sin interacción alguna del estudiante en el curso, podría aparecer una cierta discrepancia.</p>
<p>Esta es una situación normal que reporta información consistente respecto al uso efectivo de la plataforma</p>';
$string['learningtimesessioncrop'] = 'Operación en sesiones fuera del rango';
$string['learningtimesessioncrop_desc'] = 'Al acoplarse con learningtimecheck, las sesiones fuera del rango válido pudieron recortarse, o conservarse y solamente marcarse en los reportes';
$string['libsmissing'] = 'Esta característica ha sido deshabilitada porque faltan librerías. Instale librerías desde http://github.com/vfremaux/moodle-local_vflibs para tener habilitada la generación de PDF.';
$string['lineaggregators'] = 'Agregadores de línea';
$string['lineaggregators_help'] = '<p>Definir agregadores como una lista de interruptores de agregadores que comienzan en las columnas del extremo izquierdo en la hoja de Excel resultante. Separe los alternadores con comas o punto_y_coma. El dejar espacios vacíos deshabilita la línea del agregador.
</p>
<ul>
<li><b>m :</b> media</li>
<li><b>s :</b> suma</li>
</ul>

<p>
Ejemplo : si una salida de Excel tiene 10 columnas y se necesita una suma en la columna 10, entonce
ingrese : ;;;;;;;;;s
</p>';
$string['mark'] = 'Marcar sesiones fuera del rango';
$string['modgrade'] = 'Calificación de actividad';
$string['modulegrade'] = 'Módulo de actividad';
$string['modulegrades'] = 'Calificaciones de actividad';
$string['modulegrades_help'] = 'Aquí puede Usted añadir más columnas al reporte del libro de calificaciones del grupo, eligiendo el módulo de actividad que será el origen para el puntaje.
   Usted también puede definir la etiqueta de la columna que será usada para esta columna en las hojas del reporte. Si se deja vacío, el nombre de la columna será,  en orden de disponibilidad, el IDnumber del módulo del curso o un identificador del módulo incluido por Moodle.';
$string['never'] = 'nunca';
$string['newtask'] = 'Añadir un nuevo lote';
$string['nodata'] = 'Sin datos de curso';
$string['noextragrade'] = 'Deshabilitado';
$string['nopermissiontoview'] = 'Usted no tiene suficientes permisos en este curso para ver esta información';
$string['nosessions'] = 'No se grabaron sesiones de trabajo';
$string['nostructure'] = 'No se detectaron estructuras de curso mesurables';
$string['nothing'] = 'Sin usuarios para compilar';
$string['now'] = '¡ Ahora !';
$string['onefulluserpersheet'] = 'Una información de usuario completa por página';
$string['oneuserperrow'] = 'Una información resumida del usuario por fila en una hoja única';
$string['othertime'] = 'Otro tiempo';
$string['othertime_help'] = '<p>El tiempo empleado que no puede asignarse directamente a un módulo de actividad del curso.</p>';
$string['out'] = 'Tiempo fuera';
$string['outofgroup'] = 'Sin grupo';
$string['outofstructure'] = 'Otro tiempo usado en curso';
$string['outputdir'] = 'Directorio de salida';
$string['outputdirectory'] = 'Directorio de salida en los archivos del curso local';
$string['outputdir_help'] = '<p>Usted puede seleccionar un subdirectorio de salida para generar sus documentos de salida. Tome nota del contexto de almacenamiento en donde encontrar esos documentos en el curso en donde Usted programó el lote, aun y cuando el curso compilado mencionaba a "Todos los cursos"</p>';
$string['output:finalcoursegrade'] = 'Calificación final';
$string['output:rawcoursegrade'] = 'Calificación cruda del curso';
$string['output:timebonus'] = 'Bono por tiempo';
$string['output:timegrade'] = 'Calificación por tiempo';
$string['outsessiontime'] = 'Reglas de Tiempo fuera restante';
$string['outsessiontime_help'] = 'Este es el tiempo restante de aprendizaje que NO coincide con las reglas de validación';
$string['over'] = 'sobre';
$string['parts'] = 'partes';
$string['pass'] = 'PASA';
$string['pdf'] = 'PDF';
$string['pdfabsoluteverticaloffset'] = 'Sesgo vertical absoluto del documento';
$string['pdfabsoluteverticaloffset_desc'] = 'Dice el sesgo (en milímetros) inicial para la generación del documento relativo a la parte superior de la página en la generación del PDF.';
$string['pdfpage'] = 'Página:';
$string['pdfpagecutoff'] = 'Punto de corte de altura de página PDF';
$string['pdfpagecutoff_desc'] = 'Altura (en milímetros) de la página para cambiar a la siguiente página.';
$string['pdfreportfooter'] = 'Imagen del pie de página del reporte en PDF';
$string['pdfreportfooter_desc'] = 'Proporcionar una imagen JPG para el pie de página del fondo (880 pixeles de ancho y hasta 100 pixeles de alto)';
$string['pdfreportheader'] = 'Imagen del encabezado del reporte en PDF';
$string['pdfreportheader_desc'] = 'Proporcionar una imagen JPG para la parte del encabezado superior (880 pixeles de ancho por hasta 220 pixeles de alto)';
$string['pdfreportinnerheader'] = 'Imagen del encabezado interior del reporte en PDF';
$string['pdfreportinnerheader_desc'] = 'Proporcionar una imagen JPG para la parte del encabezado superior en las páginas interiores (880 pixeles de ancho por hasta 150 pixeles de alto). Si no se proporciona ninguna, se usará nuevamente el encabezado de la primera página.';
$string['periodshift'] = 'Mover período';
$string['periodshiftto'] = 'Mofer solamente fecha de "hasta"';
$string['plugindist'] = 'Distribución de plugin';
$string['plugindist_desc'] = '<p>Este plugin es la versión comunitaria y es publicado para cualquiera que lo quiera usar tal cual está y revisar la aplicación del núcleo del plugin. Existe una versión "pro" del plugin y es distribuída bajo condiciones para mejorar la alimentación del ciclo de vida, actualización, documentación y mejoras .</p>
<p>Por favor, contacte a uno de nuestros distribuidores para obtener el soporte de la versión "Pro".</p>
<p><a href="http://www.mylearningfactory.com/index.php/documentation/Distributeurs?lang=en_utf8">Distribuidores de MyLF</a></p>';
$string['pluginname'] = 'Sesiones de Entrenamiento';
$string['printidnumber'] = 'Imprimir Número ID';
$string['printidnumber_desc'] = 'Si se selecciona, añade IDNumber a reportes';
$string['printsessiontotal'] = 'Mostrar el tiempo transcurrido en sesión en general';
$string['printsessiontotal_desc'] = 'NO mostrar el tiempo total de sesión en la pantalla de reportes de tiempo en sesión .';
$string['profileinfotimeformat'] = '%d %B %Y';
$string['proversionrequired'] = '<p>Usted está intentando usar una característica que solamente está disponible en la versión "Pro" de este plugin. La versión "Pro" de este plugin
es una versión de pago que nos ayuda a desarrollar el ciclo de desarrollo de este plugini con asuntos de aseguramiento de la calidad, características más avanzadas y soporte completo para nuestros clientes.</p>

<p<La versión Pro version puede obtenerse con nuestros distribuidores:</p>

<p><a href="http://www.mylearningfactory.com/index.php/documentation/Distributeurs?lang=en_utf8">MyLF Distributors</a></p<';
$string['quickgroupcompile'] = '<h3>Compilación rápida para {$a} usuarios:</h3><p>La Compilación Rápida proporciona un reporte de resumen rápido para grupos menores a 50 usuarios, directamente en el directorio raíz de sus archivos del curso.</p>';
$string['quickmonthlyreport'] = 'Reportes mensuales rápidos (PDF)';
$string['range'] = 'Rango';
$string['recipient'] = 'Destinatario';
$string['recipient_desc'] = 'Destinatario por defecto de los documentos PDF. Puede ser anulado localmente por cada operador.';
$string['replay'] = 'Responder mismas configuraciones';
$string['replaydelay'] = 'Retraso de respuesta (min)';
$string['replaydelay_help'] = '<p> Si se configura a un valor positivo (en minutos), el lote no será descartado después de la ejecución, pero vuelto a emplear continuamente con ese retraso.
La fecha de inicio o la fecha de término serán desplazadas apropiadamente si se selecciona una vuelta a emplear del período de deslizamiento.</p>';
$string['reportdate'] = 'Fecha del reporte';
$string['reportfilemanager'] = 'Gestor de archivos del reporte';
$string['reportformat'] = 'Formato del documento';
$string['reportforuser'] = 'Reporte para';
$string['reportlayout'] = 'Diseño del reporte';
$string['reports'] = 'Reportes';
$string['reportscope'] = 'Alcance';
$string['reportscope_help'] = '<p>Algunos reportes permiten el revisar todos los cursos del usuario. Tenga en cuenta que algunos reportes no usan el Alcance.</p>';
$string['role'] = 'Rol';
$string['scheduledbatches'] = 'Lotes agendados';
$string['scoresettings'] = 'Configuraciones de Reporte de Puntaje';
$string['scoresettingsadvice'] = 'En reportes resumidos del curso (un usuario por línea), Usted puede añadir columnas de salida adicional con puntajes del Libro de calificaciones. Usted puede añadir la calificación global del curso, o elegir añadir una calificación (o más) de actividad única en el reporte.';
$string['sectionname'] = 'Nombre de sección';
$string['seedetails'] = 'Ver detalles';
$string['selectforreport'] = 'Seleccionar para reportes';
$string['sessionduration'] = 'Duración de la sesión';
$string['sessionend'] = 'Fin de sesión';
$string['sessionreportdoctitle'] = 'Reporte de sesión';
$string['sessionreports'] = 'Reporte de sesión de usuario';
$string['sessionreporttitle'] = 'Leyenda explicativa del documento del reporte de sesión';
$string['sessionreporttitle_desc'] = 'Impresa en la primera página de un reporte de sesión de usuario';
$string['sessions'] = 'Sesiones de trabajo';
$string['sessionsonly'] = 'Solamente sesiones del usuario';
$string['sessionstart'] = 'Inicio de sesión';
$string['showhits'] = 'Mostrar eventos (CSV)';
$string['showhits_desc'] = 'Si se configura, el número de aciertos se añadirá a las líneas del CSV';
$string['showsseconds'] = 'Mostrar segundos';
$string['showsseconds_desc'] = 'Mostrar seguindos en expreesión de duración si está habilitado';
$string['singleexec'] = 'Corrida única';
$string['siteglobals'] = 'Sitio (secciones no de curso)';
$string['specialgrades'] = 'Calificaciones especiales';
$string['startdate'] = 'Fecha de inicio';
$string['structureitem'] = 'Ítem rastreable de curso';
$string['structuretotal'] = 'Total {$a}:';
$string['studentsign'] = 'Estudiante';
$string['summarycolumns'] = 'Sacar columnas para reporte del resumen';
$string['summarycolumns_desc'] = '<p>Elegir columnas al comentar cualquier línea  con  # . Usted puede reordenar líneas para cambiar el ordenamiento de la salida.</p>
<p>(claves para formato : a como texto, t como fecha, d como duración, n como numérico).</p>';
$string['task'] = 'Trabajo {$a}';
$string['taskname'] = 'Trabajo';
$string['taskrecorded'] = 'Trabajo grabado exitosamente';
$string['teachersign'] = 'Profesor';
$string['textapplication'] = 'Esta es una configuraión para texto por defecto del documento.';
$string['textcolor'] = 'Color del texto';
$string['timeelapsed'] = 'Tiempo empleado';
$string['timeelapsedcurweek'] = 'Tiempo empleado semana actual';
$string['timegrade'] = 'Origen de calificación por tiempo';
$string['timegrademode'] = 'Modo de calificación por tiempo';
$string['timegrademodedefault'] = 'Modo de calificación de tiempo por defecto';
$string['timegrademodedefault_desc'] = 'Valor por defecto para el modo de calificación de tiempo cuando se configura por vez primera en un curso';
$string['timegraderanges'] = 'Rangos de calificación por tiempo';
$string['timegraderanges_help'] = 'Los rangos de calificación del tiempo le permiten cortar el tiempo transcurrido en pedacitos, para lograr un efecto de calificación del tiempo discreta. Los modos binarios necesitarán dar solamente un umbral de tiempo (en minutos) para separar los estados de PASADO y REPROBADO. En el modo "discreto", ingrese una lista (separada por comas) de umbral de tiempo que separe los rangos. El último rango es para "tiempo sobre el último valor".';
$string['timegradesourcedefault'] = 'Valor por defecto de orígen de caalificación de tiempo';
$string['timegradesourcedefault_desc'] = 'Valores por defecto para el origen del bono de calificación cuando se configura por primera vez en un curso';
$string['timeperpart'] = 'Tiempo transcurrido por parte';
$string['timesource'] = 'Origen del tiempo';
$string['timespent'] = 'Empleado';
$string['timespentlastweek'] = 'Empleado en la semana pasada';
$string['to'] = 'Hasta';
$string['todate'] = 'Fecha final';
$string['tonow'] = 'Hasta ahora';
$string['toobig'] = '<p>La compilación de grupo es demasiado grande para realizarse en compilación rápida. Le sugerimos que programe un lote con retraso para un momento que no afecte a sus usuarios actualmente trabajando.<br/>Para configurar un lote, preconfigure los parámetros de compilación en ell formato superior, y registre un nuevo lote con la configuración deseada, y configure la hora del lote y el directorio de salida del origen de la localización de almacenamiento de archivo (ruta relativa, ruta absoluta rechazada).</p><p>Usted también puede programar un lote de compilación regular que compilaría cada \\"replaydelay\\"
minutos a la salida deseada.</p>';
$string['totalduration'] = 'Duración total';
$string['totalsessions'] = 'Tiempo total de sesión';
$string['totalsessiontime'] = 'Tiempo total de trabajo en sesión';
$string['totalsessiontime_help'] = 'Tenga en cuenta que la lista de sesión cuenta algunas duraciones que pueden estar fuera de este curso. El \'tiempo total de sesión\' usualmente debería ser mayor que el cálculo de \'tiempo en el curso\'';
$string['totalsitetime'] = 'Tiempo total en el sitio';
$string['trainingreports'] = 'Reportes de Entrenamiento';
$string['trainingsessions'] = 'Sesiones de Entrenamiento';
$string['trainingsessions:batch'] = 'Puede hacer reportes masivos';
$string['trainingsessions:downloadreports'] = 'Puede descargar documentos de reporte';
$string['trainingsessions:iscompiled'] = 'Está compilado en reportes';
$string['trainingsessionsreport'] = 'Reporte de Sesiones de Entrenamiento';
$string['trainingsessions_report_advancement'] = 'Reporte de Progreso';
$string['trainingsessions_report_connections'] = 'Reporte de Conexión';
$string['trainingsessions_report_institutions'] = 'Reporte de Institución';
$string['trainingsessionsscores'] = 'Adiciones de puntaje a reportes';
$string['trainingsessions:usegrading'] = 'Puede configurar salida de calificación';
$string['trainingsessions:view'] = 'Puede ver reporte de sesión de entrenamiento';
$string['trainingsessions:viewother'] = 'Puede ver reportes de sesión de entrenamiento de otros usuarios';
$string['unvisited'] = 'No-visitado';
$string['updatefromaccountstart'] = 'Obtener a partir del primer acceso del usuario';
$string['updatefromcoursestart'] = 'Obtener del principio de curso';
$string['uploadglobals'] = 'Subidas de archivos';
$string['uploadresult'] = 'Descargar resultados en bruto';
$string['user'] = 'Por participante';
$string['userdetail'] = 'Detalle del participante';
$string['userlist'] = 'Una fila por participante';
$string['usersheets'] = 'Una hoja-de-cálculo por participante';
$string['usersummary'] = 'Resumen del participante';
$string['visiteditems'] = 'Ítems visitados.';
$string['weekstartdate'] = 'Inicio de semana';
$string['workingsessions'] = 'Sesiones de trabajo';
$string['xls'] = 'XLS';
$string['xlsadditions'] = 'Adiciones XLS';
$string['xlsexportlocale'] = 'Locale de Exportación XLS';
$string['xlsexportlocale_desc'] = 'Usado para forzar locale al exportar y generar exportaciones Excel.
Dejarlo vacío para usar valor por defecto de locale del sitio, o forzar con un código locale explícito, como por ejemplo en_EN.UTF8';
$string['xlsformula'] = 'Fórmula (expresión Excel)';
$string['xlsmeanformula'] = 'Fórmula XLS Principal';
$string['xlsmeanformula_desc'] = 'La Fórmula XLS para Media. Usa remplazables {minrow} y {maxrow} para fijar el rango vertical, y {col} como identificador de columna actual. Una referencia de celda puede ser : ${col}$4, $Y${minrow}';
$string['xlssumformula'] = 'Fórmula de Suma XLS';
$string['xlssumformula_desc'] = 'Fórmula de Suma XLS. Use remplazables {minrow} y {maxrow} para fijar el rango vertical , y {col} como identificador de columna actual. Una referencia de celda puede ser : ${col}$4, $Y${minrow}';
