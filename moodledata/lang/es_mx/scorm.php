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
 * Strings for component 'scorm', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Activación';
$string['activityloading'] = 'Usted será automáticamente encaminado a la actividad en';
$string['activityoverview'] = 'Usted tiene paquetes SCORM que requieren su atención';
$string['activitypleasewait'] = 'Cargando actividad, espere por favor...';
$string['adminsettings'] = 'Configuración de administración';
$string['advanced'] = 'Parámetros';
$string['aicchacpkeepsessiondata'] = 'Datos de sesión AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Período de tiempo en días en el que se mantendrán los datos de la sesión externa AICC HACP (un valor alto llenará la tabla con datos antiguos, pero puede ser útil a la hora de depurar)';
$string['aicchacptimeout'] = 'Tiempo de espera agotado  AICC HACP';
$string['aicchacptimeout_desc'] = 'Período de tiempo en minutos en el que una sesión externa AICC HACP se mantendrá abierta';
$string['aiccuserid'] = 'AICC pasar ID numérico del usuario';
$string['aiccuserid_desc'] = 'El estándar AICC para nombres_de_usuario es muy restrictivo comparado con Moodle, y solamente permite caracteres alfanuméricos, guión medio (-) y guión bajo (_). Los puntos, los espacios y el símbolo  de @ no están permitidos. Si se habilita esto, los números ID del usuario son pasados al paquete AICC en lugar de los nombres_de_usuarios.';
$string['aliasonly'] = 'Al seleccionar un archivo imsmanifest.xml file de un repositorio, Usted debe usar un alias/atajo para este archivo.';
$string['allowapidebug'] = 'Activar depuración y trazado API (ajustar la máscara de captura con apidebugmask)';
$string['allowtypeaicchacp'] = 'Habilitar AICC HACP externo';
$string['allowtypeaicchacp_desc'] = 'Si se habilita permite comunicaciones externas AICC HACP sin necesidad de ingreso del usuario para publicar peticiones desde un paquete AICC externo';
$string['allowtypeexternal'] = 'Habilitar tipo de paquete externo';
$string['allowtypeexternalaicc'] = 'Habilitar URL AICC directa';
$string['allowtypeexternalaicc_desc'] = 'Si se habilita permite una URL directa a un paquete simple AICC';
$string['allowtypelocalsync'] = 'Habilitar tipo de paquete descargado';
$string['apidebugmask'] = 'Máscara de captura de depuración (debug) API  - use un regex simple en  <username>:<activityname>  Por ejemplo,  admin:.* depurará para uso de administradores solamente.';
$string['areacontent'] = 'Archivos de contenido';
$string['areapackage'] = 'Archivo de paquete';
$string['asset'] = 'Recurso';
$string['assetlaunched'] = 'Recurso - Visto';
$string['attempt'] = 'Intento';
$string['attempt1'] = '1 intento';
$string['attempts'] = 'Intentos';
$string['attemptsmanagement'] = 'Gestión de intentos';
$string['attemptstatusall'] = 'Tablero y página de entrada';
$string['attemptstatusentry'] = 'Página de entrada solamente';
$string['attemptstatusmy'] = 'Tablero solamente';
$string['attemptsx'] = '{$a} intentos';
$string['attr_error'] = 'Valor incorrecto para el atributo ({$a->attr}) en la marca {$a->tag}.';
$string['autocommit'] = 'Auto-implantar';
$string['autocommitdesc'] = 'Guardar automáticamente datos del SCORM si el paquete SCORM no los guarda.';
$string['autocommit_help'] = 'Si se habilita, los datos del SCORM son guardados automáticamente a la BasedeDatos. Útil para objetos SCORM que no guardan regularmente sus datos.';
$string['autocontinue'] = 'Continuación automática';
$string['autocontinuedesc'] = 'Si se habilita, los objetos de aprendizaje subsecuentes serán lanzados automáticamente; de otra forma deberá de usarse el botón para Continuar.';
$string['autocontinue_help'] = '<p><strong>Autocontinuar</strong></p>

<p>Si Autocontinuar está configurado en Sí, cuando un SCO llama
  al método &quot;cerrar comunicación&quot;, el siguiente SCO disponible
  se abrirá automáticamente.</p>
<p>Si está configurado en No, los usuarios deben hacer clic en el botón &quot;Continuar&quot;
  para seguir.</p>';
$string['averageattempt'] = 'Intentos promedio';
$string['badarchive'] = 'Usted debe de proporcionar un código postal válido';
$string['badimsmanifestlocation'] = 'Se encontró un archivo imsmanifest.xml pero no estaba en la raíz de su archivo ZIP;  por favor re-empaquete su SCORM';
$string['badmanifest'] = 'Errores de manifiesto: ver registro de errores';
$string['browse'] = 'Vista previa';
$string['browsed'] = 'Navegado';
$string['browsemode'] = 'Modo de presentación preliminar';
$string['browserepository'] = 'Navegar por el repositorio';
$string['calculatedweight'] = 'Ponderación calculada';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cannotaccess'] = 'Usted no puede llamar a este \'\'script\'\' en esa forma';
$string['cannotfindsco'] = 'No se ha encontrado SCO';
$string['chooseapacket'] = 'Elegir o actualizar un paquete SCORM';
$string['closebeforeopen'] = 'Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['collapsetocwinsize'] = 'Colapsar Tabla de Contenidos con tamaño de ventana menor de';
$string['collapsetocwinsizedesc'] = 'Esta configuración permite especificar el tamaño de ventana, debajo del cual la Tabla de Contenidos debería de colapsar automáticamente.';
$string['compatibilitysettings'] = 'Configuraciones de compatibilidad';
$string['completed'] = 'Finalizado';
$string['completionscorerequired'] = 'Requiere puntuación mínima';
$string['completionscorerequireddesc'] = 'Puntaje mínimo de {$a} es necesario para finalización';
$string['completionscorerequired_help'] = 'Al habilitar esta configuración se le exigirá al usuario que tenga al menos el puntaje mínimo marcado como finalizado en esta actividad SCORM, al igual que cualquier otro requisito de Finalización de Actividad.';
$string['completionstatusallscos'] = 'Requerir que todos los scos regresen estatus de finalización';
$string['completionstatusallscos_help'] = 'Algunos paquetes SCORM contienen componentes múltiples o "scos" - cuando esto está habilitado, todos los scos dentro del paquete deben de regresar el  lesson_status (estatus-de-la-lección) relevante para que esta actividad sea marcada como completa.';
$string['completionstatus_completed'] = 'Finalizado';
$string['completionstatus_passed'] = 'Pasado';
$string['completionstatusrequired'] = 'Requerir estatus';
$string['completionstatusrequireddesc'] = 'El estudiante debe lograr al menos uno de los siguientes estatus: {$a}';
$string['completionstatusrequired_help'] = 'All seleccionar uno o más estatus se le exigirá al usuario que logre al menos un estatus seleccionado para que pueda marcarse como finalizada esta actividad SCORM, al igual que cualquier otro requisito de Finalización de Actividad.';
$string['confirmloosetracks'] = 'ADVERTENCIA: El paquete parece haber sido cambiado o modificado.Si la estructura del paquete se ha cambiado, los seguimientos de algunos usuarios pueden haberse perdido durante el proceso de actualización.';
$string['contents'] = 'Contenido';
$string['coursepacket'] = 'Paquete de curso';
$string['coursestruct'] = 'Estructura de curso';
$string['crontask'] = 'Procesamiento en segundo-plano para SCORM';
$string['currentwindow'] = 'Ventana actual';
$string['datadir'] = 'Error de sistema: No se puede crear el directorio de datos del curso';
$string['defaultdisplaysettings'] = 'Configuración de pantalla predeterminada';
$string['defaultgradesettings'] = 'Configuración de calificación predeterminada';
$string['defaultothersettings'] = 'Otras configuraciones predeterminadas';
$string['deleteallattempts'] = 'Eliminar todos los intentos SCORM';
$string['deleteattemptcheck'] = '¿Está totalmente seguro que quiere eliminar completamente estos intentos?';
$string['deleteselected'] = 'Eliminar los intentos seleccionados';
$string['deleteuserattemptcheck'] = '¿Está Usted absolutamente seguro de querer borrar completamente todos sus intentos?';
$string['details'] = 'Detalles del seguimiento';
$string['directories'] = 'Mostrar enlaces de directorio';
$string['disabled'] = 'Deshabilitado';
$string['display'] = 'Mostrar';
$string['displayactivityname'] = 'Mostrar nombre de actividad';
$string['displayactivityname_help'] = 'Si es que se muestra o no el nombre de la actividad arriba del reproductor del SCORM.';
$string['displayattemptstatus'] = 'Mostrar estatus de intentos';
$string['displayattemptstatusdesc'] = 'Si es que se muestra un resumen de los intentos del usuario en el bloque de vista general del curso en el Tablero y/o en la página de entrada al SCORM.';
$string['displayattemptstatus_help'] = 'Esta preferencia permite un resumen de los intentos del usuario para mostrar la vista general del curso en el Tablero y/o en la página de entrada al SCORM.';
$string['displaycoursestructure'] = 'Mostrar estructura del curso en la página de entrada';
$string['displaycoursestructuredesc'] = 'Si se habilita, se muestra la tabla de contenidos en la página de estructura del SCORM';
$string['displaycoursestructure_help'] = 'Si está activado, la tabla de contenidos se mostrará en la página de resumen SCORM.';
$string['displaydesc'] = 'Si se muestra el paquete SCORM en una ventana nueva';
$string['displaysettings'] = 'Configuración de visualización';
$string['dnduploadscorm'] = 'Añadir un paquete SCORM';
$string['domxml'] = 'Librería externa DOMXML';
$string['duedate'] = 'Vencimiento';
$string['element'] = 'Elemento';
$string['enter'] = 'Entrar';
$string['entercourse'] = 'Introducir el curso SCORM';
$string['errorlogs'] = 'Registro de errores';
$string['eventattemptdeleted'] = 'Intento eliminado';
$string['eventinteractionsviewed'] = 'Interacciones vistas';
$string['eventreportviewed'] = 'Reporte visto';
$string['eventscolaunched'] = 'Sco lanzado';
$string['eventscorerawsubmitted'] = 'Puntaje crudo de SCORM enviado';
$string['eventstatussubmitted'] = 'Estatus de SCORM enviado';
$string['eventtracksviewed'] = 'Rastreos vistos';
$string['eventuserreportviewed'] = 'Reporte de usuario visto';
$string['everyday'] = 'Todos los días';
$string['everytime'] = 'Cada vez que se use';
$string['exceededmaxattempts'] = 'Ha alcanzado el número máximo de intentos';
$string['exit'] = 'Salir del curso';
$string['exitactivity'] = 'Salir de la actividad';
$string['expired'] = 'Lo sentimos, esta actividad se cerró en {$a} y ya no está disponible';
$string['external'] = 'Actualizar la temporalización de paquetes externos';
$string['failed'] = 'Error';
$string['finishscorm'] = 'Si ha terminado de ver este recurso, {$a}';
$string['finishscormlinkname'] = 'haga clic aquí para volver a la página del curso';
$string['firstaccess'] = 'Primer acceso';
$string['firstattempt'] = 'Primer intento';
$string['floating'] = 'Flotante';
$string['forceattemptalways'] = 'Siempre';
$string['forceattemptoncomplete'] = 'Cuando el intento anterior completó, pasó o falló';
$string['forcecompleted'] = 'Forzar finalización';
$string['forcecompleteddesc'] = 'Esta preferencia fija el valor por defecto para mostrar el ajuste de forzar completados';
$string['forcecompleted_help'] = 'Si se activa, el estatus del intento actual se cambia a "Finalizado". Este ajuste sólo se aplica a los paquetes SCORM 1.2.';
$string['forcejavascript'] = 'Obligar a los usuarios a tener JavaScript habilitado';
$string['forcejavascript_desc'] = 'Si está activado (recomendado) impide el acceso a los objetos SCORM cuando JavaScript no está soportado/activado en el navegador del usuario. Si está desactivado, el usuario puede ver el SCORM, pero la comunicación API fallará y no se almacenará la información de la calificación.';
$string['forcejavascriptmessage'] = 'Se requiere JavaScript para visualizar este objeto, por favor, active JavaScript en su navegador y vuelva a intentarlo.';
$string['forcenewattempts'] = 'Forzar nuevo intento';
$string['forcenewattempts_help'] = 'Hay 3 opciones:

* No - Si un intento previo es completado, pasado o reprobado, al estudiante se le dará la opción de ingresar al modo de revisión o de iniciar un nuevo intento.
* Cuando el intento anterior se completó, pasado o reprobado - Esto depende de que el paquete SCORM configure el estatus de \'completado\', \'pasado\' o \'reprobado\'.
* Siempre- Cada re-entrada a la actividad SCORM generará un nuevo intento y el estudiante no será regresado al mismo punto que alcanzó en el intento anterior.';
$string['found'] = 'Encontrado manifiesto';
$string['frameheight'] = 'La altura por defecto del marco o ventana';
$string['framewidth'] = 'El ancho por defecto del marco o ventana';
$string['fromleft'] = 'Desde la izquierda';
$string['fromtop'] = 'Desde arriba';
$string['fullscreen'] = 'Llenar toda la pantalla';
$string['general'] = 'Datos generales';
$string['gradeaverage'] = 'Calificación promedio';
$string['gradeforattempt'] = 'Calificación del intento';
$string['gradehighest'] = 'Calificación más alta';
$string['grademethod'] = 'Método de calificación';
$string['grademethoddesc'] = 'El método de calificación define cómo se determina la calificación para un intento único para una actividad.';
$string['grademethod_help'] = 'El método de calificar define cómo se determina la calificación para un intento de la actividad.
Existen 4 métodos para calificar:

* Objetos de aprendizaje - El número de objetos de aprendizaje completados/pasados
* Calificación más alta - La puntuación más alta obtenida en todos los objetos de aprendizaje pasados
* Calificación promedio - La media de todos los puntajes
* Suma de calificación - La suma de todos los puntajes';
$string['gradereported'] = 'Calificación informada';
$string['gradescoes'] = 'Objetos de aprendizaje';
$string['gradesettings'] = 'Configuración de calificación';
$string['gradesum'] = 'Calificaciones sumadas';
$string['height'] = 'Altura';
$string['hidden'] = 'Oculto';
$string['hidebrowse'] = 'Ocultar botón de previsualización';
$string['hidebrowsedesc'] = 'El modo de previsualización le permite a un estudiante mirar una actividad antes de intentarla.';
$string['hidebrowse_help'] = '<p>Si esta opción está ajustada a "Sí", el botón de previsualización en la página principal de la actividad SCORM/AICC no mostrará.</p>

<p>En caso contrario, el estudiante puede elegir entre previsualizar la actividad o realizar un intento de forma normal.</p>

<p>Cuando un objeto de aprendizaje es completado en modo previsualizar, es marcado con el icono de previsualizado (<img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" />).</p>';
$string['hideexit'] = 'Ocultar enlace de salida';
$string['hidereview'] = 'Ocultar botón de revisión';
$string['hidetoc'] = 'Mostrar la estructura del curso en el reproductor';
$string['hidetocdesc'] = 'Esta configuración especifica cómo se muestra la tabla de contenidos dentro del reproductor SCORM';
$string['hidetoc_help'] = 'Cómo se muestra la tabla de contenidos en el reproductor de SCORM.';
$string['highestattempt'] = 'Intento más alto';
$string['identifier'] = 'Identificador de preguntas';
$string['incomplete'] = 'Incompleto';
$string['indicator:cognitivedepth'] = 'SCORM cognitiva';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades SCORM durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver retroalimentación)';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad SCORM.';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de SCORM durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad SCORM.';
$string['info'] = 'Info';
$string['interactions'] = 'Interacciones';
$string['invalidactivity'] = 'La actividad SCORM es incorrecta';
$string['invalidhacpsession'] = 'Sesión HACP no válida';
$string['invalidmanifestname'] = 'Solamente pueden seleccionarse archivos imsmanifest.xml o archivos .zip';
$string['invalidmanifestresource'] = 'ADVERTENCIA: Los siguientes recursos son mencionados en el manifiesto, pero no se puden encontrar';
$string['invalidstatus'] = 'Estado inválido';
$string['invalidurl'] = 'Se ha especificado una URL no válida';
$string['invalidurlhttpcheck'] = 'URL inválida especificada. Mensaje para depuración:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Último acceso en';
$string['lastaccess'] = 'Último acceso';
$string['lastattempt'] = 'Último intento';
$string['lastattemptlock'] = 'Bloquear después del último intento';
$string['lastattemptlockdesc'] = 'Si se habilita, se le impide a un estudiante que lance el reproductor SCORM después de agotar todos sus intentos.';
$string['lastattemptlock_help'] = 'Si se activa, al estudiante se le impide el lanzamiento del reproductor SCORM después de haber utilizado todos los intentos que tenía asignados.';
$string['location'] = 'Mostrar la barra de ubicación';
$string['masteryoverride'] = 'El puntaje por maestría anula el estatus';
$string['masteryoverridedesc'] = 'Esta preferencia configura el valor por defecto para la configuración de la anulación por puntaje por maestría';
$string['masteryoverride_help'] = 'Si se habilita, y se proporciona un puntaje por maestría, cuando se llame a LMSFinish y se haya configurado un puntaje bruto, se re-calculará  el estatus usando el puntaje bruto y el puntaje por maestría; y se anulará cualquier estatus proporcionados por el SCORM (incluyendo "incompleto") .';
$string['max'] = 'Calificación máxima';
$string['maximumattempts'] = 'Número de intentos';
$string['maximumattemptsdesc'] = 'Esta preferencia fija el valor por defecto sobre el número máximo de intentos en una actividad';
$string['maximumattempts_help'] = '<p>Este parámetro define el número de intentos permitidos a los usuarios.<br />Solo funciona con paquetes SCORM1.2 y AICC. Los paquetes SCORM2004 tienen su propia definición de máximo de intentos.</p>';
$string['maximumgradedesc'] = 'Esta preferencia fija el valor por defecto sobre la calificación máxima de una actividad';
$string['menubar'] = 'Mostrar la barra de menú';
$string['min'] = 'Puntuación mínima';
$string['missing_attribute'] = 'Falta atributo ({$a->attr}) en marca {$a->tag}';
$string['missingparam'] = 'Un parámetro requerido falta o está equivocado';
$string['missing_tag'] = 'Falta marca {$a->tag}';
$string['mode'] = 'Moda';
$string['modulename'] = 'Paquete SCORM';
$string['modulename_help'] = 'Un paquete SCORM es una colección de archivos que están empaquetados de acuerdo a el stándard acordado para objetos de aprendizaje. El módulo de actividad SCORM permite que los paquetes SCORM o AICC se suban como un archivo ZIP y se añadan al curso.

El contenido generalmente se muestra sobre varias páginas, con navegación entre ellas. Hay varias opciones para mostrar contenidos; en ventana emergente, con una tabla de contenidos, con botones de navegación, etc. Las actividades SCORM generalmente incluyen preguntas, con calificaciones que se guardan en el libro de calificación.

Las actividades SCORM pueden usarse

* Para presentar animaciones y contenido multimedia
* Como herramienta de evaluación';
$string['modulenameplural'] = 'Paquetes SCORM';
$string['myaiccsessions'] = 'Mis sesiones AICC';
$string['myattempts'] = 'Mis intentos';
$string['nav'] = 'Mostrar navegación';
$string['navdesc'] = 'Esta configuración especifica si es que se muestran/ocultan los botones de navegación y sus posiciones.';
$string['nav_help'] = 'Esta configuración especifica si mostrar o no los botones de navegación y sus posiciones.

Hay 3 opciones:

* No - No mostrar los botones de navegación
* Debajo del contenido - Mostrar los botones de navegación debajo del contenido del paquete SCORM
* Flotante- Los botones de navegación se muestran flotando, con la posición desde la parte superior y desde la izquierda determinadas por el paquete.';
$string['navigation'] = 'Navegación';
$string['navpositionleft'] = 'Posición en pixeles de los botones de navegación desde la izquierda';
$string['navpositiontop'] = 'Posición en pixeles de los botones de navegación desde arriba';
$string['networkdropped'] = 'El reproductor de SCORM ha determinado que su conexión de Internet no es estable o que ha sido interrumpida. Si Usted continúa en esta actividad SCORM, puede que no se guarde su progreso.<br /> Usted debería de salirse ahorita de esta actividad, y regresar en cuanto tenga una conexión confiable de Internet.';
$string['newattempt'] = 'Comenzar un nuevo intento';
$string['next'] = 'Continuar';
$string['noactivity'] = 'Nada que informar';
$string['noattemptsallowed'] = 'Número de intentos permitidos';
$string['noattemptsmade'] = 'Número de intentos realizados';
$string['no_attributes'] = 'La marca {$a->tag} debe tener atributos';
$string['no_children'] = 'La marca {$a->tag} debe tener hijos';
$string['nolimit'] = 'Intentos ilimitados';
$string['nomanifest'] = 'Paquete de archivo incorrecto - falta imsfest.xml o estructura AICC';
$string['noprerequisites'] = 'Lo sentimos, pero no ha satisfecho los pre-requisitos requeridos para acceder a esta actividad.';
$string['noreports'] = 'No hay reportes que mostrar';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Su navegador no admite javascript, o tiene la opción javascript deshabilitada. Este paquete SCORM no puede reproducirse o guardar los datos correctamente.';
$string['notattempted'] = 'No se ha intentado';
$string['not_corr_type'] = 'Discrepancia del tipo para la marca {$a->tag}';
$string['notopenyet'] = 'Esta actividad no estará disponible hasta {$a}';
$string['objectives'] = 'Objetivos';
$string['openafterclose'] = 'Usted ha especificado una fecha de apertura posterior a  la fecha de cierre.';
$string['optallstudents'] = 'todos los usuarios';
$string['optattemptsonly'] = 'Sólo usuarios con intentos';
$string['options'] = 'Opciones (no admitidas por algunos navegadores)';
$string['optionsadv'] = 'Opciones (Avanzadas)';
$string['optionsadv_desc'] = 'Si se selecciona, el ancho y alto se enlistarán como opciones avanzadas en el formato.';
$string['optnoattemptsonly'] = 'Sólo usuarios sin intentos';
$string['organization'] = 'Organización';
$string['organizations'] = 'Organizaciones';
$string['othersettings'] = 'Ajustes adicionales';
$string['package'] = 'Paquete';
$string['packagedir'] = 'Error de sistema: No se puede crear el directorio de paquetes';
$string['packagefile'] = 'No se ha especificado paquete';
$string['packagehdr'] = 'Paquete';
$string['package_help'] = 'El archivo del paquete es un archivo ZIP (o PIF) que contiene archivos SCORM/AICC de definición del curso.';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Esta configuración permite especificar una URL para el paquete SCORM en lugar de elegirlo mediante el selector de archivos.';
$string['page-mod-scorm-x'] = 'Cualquier página del módulo SCORM';
$string['pagesize'] = 'Tamaño de la página';
$string['passed'] = 'Pasado';
$string['php5'] = 'PHP 5 (librería nativa DOMXML)';
$string['pluginadministration'] = 'Administración del paquete SCORM';
$string['pluginname'] = 'Paquete SCORM';
$string['popup'] = 'Abrir Objetos de Aprendizaje en una ventana nueva';
$string['popuplaunched'] = 'Este paquete SCORM ha sido lanzado dentro de una ventana emergente; si Usted ha terminado de ver este recurso, elija aquí para regresar a la página del curso.';
$string['popupmenu'] = 'En un menú desplegable';
$string['popupopen'] = 'Abrir paquete en una ventana nueva';
$string['popupsblocked'] = 'Parece que las ventanas emergentes están bloqueadas, deteniendo la ejecución de este módulo SCORM. Por favor verifique la configuración del explorador, antes de intentarlo de nuevo.';
$string['position_error'] = 'La marca {$a->tag} no puede ser un hijo de la marca {$a->parent}';
$string['preferencespage'] = 'Preferencias exclusivas para esta página';
$string['preferencesuser'] = 'Preferencias para esta exportación';
$string['prev'] = 'Anterior';
$string['privacy:metadata:aicc:data'] = 'Datos personales pasados mediante el subsistema AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Este plugin envía datos externamente usando el AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'El estatus de la lección a ser monitoreada';
$string['privacy:metadata:aicc_session:scormmode'] = 'El modo del elemento a ser monitoreado';
$string['privacy:metadata:aicc_session:scormstatus'] = 'El estatus del elemento a ser monitoreado';
$string['privacy:metadata:aicc_session:sessiontime'] = 'La hora de la sesión a ser monitoreada';
$string['privacy:metadata:aicc_session:timecreated'] = 'La hora cuando el elemento monitoreado fue creado';
$string['privacy:metadata:attempt'] = 'El número del intento';
$string['privacy:metadata:scoes_track:element'] = 'El nombre del elemento a ser monitoreado';
$string['privacy:metadata:scoes_track:value'] = 'El valor del elemento dado';
$string['privacy:metadata:scorm_aicc_session'] = 'La información de la sesión del AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'La fecha monitoreada de los SCOes que pertenecen a la actividad';
$string['privacy:metadata:timemodified'] = 'La hora en la cual el elemento monitoreado fue modificado  por última vez';
$string['privacy:metadata:userid'] = 'La ID del usuario que accedió a la actividad SCORM';
$string['protectpackagedownloads'] = 'Proteger descargas de paquete';
$string['protectpackagedownloads_desc'] = 'Si se habilita, los paquetes SCORM solamente pueden ser descargados si el usuario tiene la capacidad course:manageactivities. Si se deshabilita, los paquetes SCORM siempre pueden descargarse (por dispositivo móvil u otro método).';
$string['raw'] = 'Puntuación bruta';
$string['regular'] = 'Manifiesto Regular';
$string['report'] = 'Reporte';
$string['reportcountallattempts'] = '{$a->nbattempts} intentos de {$a->nbusers} usuarios, de un total de {$a->nbresults} resultados';
$string['reportcountattempts'] = '{$a->nbresults} resultados ({$a->nbusers} users)';
$string['reports'] = 'Reportes';
$string['repositorynotsupported'] = 'Este repositorio no soporta enlazarse directamente a un archivo  imsmanifest.xml .';
$string['response'] = 'Respuesta';
$string['result'] = 'Resultado';
$string['results'] = 'Resultados';
$string['review'] = 'Revisión';
$string['reviewmode'] = 'Modo Revisión';
$string['rightanswer'] = 'Respuesta correcta';
$string['scoes'] = 'Objetos de aprendizaje';
$string['score'] = 'Puntuación';
$string['scorm:addinstance'] = 'Añadir un nuevo paquete SCORM';
$string['scormclose'] = 'Disponible hasta';
$string['scormcourse'] = 'Curso de Aprendizaje';
$string['scorm:deleteownresponses'] = 'Eliminar sus propios intentos';
$string['scorm:deleteresponses'] = 'Eliminar intentos SCORM';
$string['scormloggingoff'] = 'Entrada API desconectada';
$string['scormloggingon'] = 'Entrada API conectada';
$string['scormopen'] = 'Disponible a partir de';
$string['scormresponsedeleted'] = 'Eliminar los intentos del usuario';
$string['scorm:savetrack'] = 'Guardar seguimientos';
$string['scorm:skipview'] = 'Pasar por alto revisión';
$string['scormstandard'] = 'Modo de estándares SCORM';
$string['scormstandarddesc'] = 'Cuando se deshabilita, Moodle permite que los paquetes SCORM 1.2 almacenen más de lo que permiten las especificaciones, y usa el formato de nombre completo Moodle al pasar el nombre de usuarios al paquete SCORM.';
$string['scormtype'] = 'Tipo';
$string['scormtype_help'] = 'Este ajuste determina cómo se incluye el paquete en el curso. Hay hasta 4 opciones:

* Paquete subido - Posibilita escoger un paquete SCORM por medio del selector de archivos

* Manifiesto SCORM externo - Posibilita especificar una URL imsmanifest.xml. NOTA: Si la URL tiene un nombre de dominio distinto del de su sitio, entonces la mejor opción es "Paquete bajado", puesto que en otro caso las calificaciones no son guardadas.

* Paquete bajado - Posibilita especificar una URL del paquete. El paquete será descomprimido y guardado localmente, y actualizado cuando se actualice el paquete SCORM externo.

* Repositorio de contenido IMS externo - esta URL es la URL para invocar una única actividad AICC. Un pseudo-paquete será construído alrededor de esto.';
$string['scorm:viewreport'] = 'Ver reportes';
$string['scorm:viewscores'] = 'Ver puntuaciones';
$string['scrollbars'] = 'Permitir desplazamiento de la ventana';
$string['search:activity'] = 'Paquete SCORM - información de actividad';
$string['selectall'] = 'Seleccionar todo';
$string['selectnone'] = 'Deseleccionar todo';
$string['show'] = 'Mostrar';
$string['sided'] = 'Lateral';
$string['skipview'] = 'El estudiante se salta la página de estructura del contenido';
$string['skipviewdesc'] = 'Esta preferencia fija el valor por defecto sobre cuándo pasar por alto la estructura de contenido de una página';
$string['skipview_help'] = '<p>Si añade un paquete con únicamente un objeto de apredizaje, puede elegir omitir automáticamente la página de estructura de contenidos cuando los usuario seleccionan una actividad SCORM en la página del curso.</p>

<p>Puede elegir:
   <ul>
       <li>Omitir la página de estructura de contenidos <strong>nunca</strong>.</li>
       <li>Omitir la página de estructura de contenidos en el <strong>primer acceso</strong>.</li>
       <li>Omitir la página de estructura de contenidos <strong>siempre</strong>.</li>
   </ul>
</p>';
$string['slashargs'] = 'ADVERTENCIA: los argumentos \'slash\' están deshabilitados en este sitio y los objetos pueden no funcionar como se espera.';
$string['stagesize'] = 'Tamaño de marco/ventana';
$string['stagesize_help'] = '<p>Estos dos parámetros definen la altura y la anchura del marco o ventana en el que se visualizará el objeto de aprendizaje.</p>';
$string['started'] = 'Comenzado en';
$string['status'] = 'Estatus';
$string['statusbar'] = 'Mostrar barra de estatus';
$string['student_response'] = 'Respuesta';
$string['subplugintype_scormreport'] = 'Reporte';
$string['subplugintype_scormreport_plural'] = 'Reportes';
$string['suspended'] = 'Suspendido';
$string['syntax'] = 'Error de sintaxis';
$string['tag_error'] = 'Marca desconocida ({$a->tag}) con este contenido: {$a->value}';
$string['time'] = 'Hora';
$string['title'] = 'Título';
$string['toc'] = 'TOC (Tabla de Contenidos)';
$string['toolbar'] = 'Mostrar la barra de herramientas';
$string['too_many_attributes'] = 'La marca {$a->tag} tiene demasiados atributos';
$string['too_many_children'] = 'La marca {$a->tag} tiene demasiados hijos';
$string['totaltime'] = 'Hora';
$string['trackcorrectcount'] = 'Número correcto';
$string['trackcorrectcount_help'] = 'Número de resultados correctos para la pregunta';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Este es el identificador configurado por su paquete SCORM para esta pregunta, la especificación SCORM no permite que se proporcione el texto completo de la pregunta.';
$string['trackingloose'] = 'ADVERTENCIA: ¡Los datos de seguimiento de este paquete se perderán!';
$string['tracklatency'] = 'Latencia';
$string['tracklatency_help'] = 'Tiempo transcurrido entre el momento en que la se puso a disposición del alumno la interacción para responder y el momento de la primera respuesta';
$string['trackpattern'] = 'Patrón';
$string['trackpattern_help'] = 'Así es como sería una respuesta correcta para esta pregunta, no muestra la respuesta del alumno.';
$string['trackresponse'] = 'Respuesta';
$string['trackresponse_help'] = 'Esta es la respuesta hecha por el alumno para esta pregunta';
$string['trackresult'] = 'Resultado';
$string['trackresult_help'] = 'Resultado basado en la respuesta del estudiante y el resultado correcto';
$string['trackscoremax'] = 'Puntuación máxima';
$string['trackscoremax_help'] = 'Valor máximo en el rango de posible de puntuaciones';
$string['trackscoremin'] = 'Puntuación mínima';
$string['trackscoremin_help'] = 'Valor mínimo en el rango de posible de puntuaciones';
$string['trackscoreraw'] = 'Puntuación cruda';
$string['trackscoreraw_help'] = 'Número que refleja el desempeño del alumno en relación con el rango delimitado por los valores de mínimo y máximo';
$string['tracksuspenddata'] = 'Suspender datos';
$string['tracksuspenddata_help'] = 'Proporciona espacio para almacenar y recuperar datos entre sesiones de aprendizaje';
$string['tracktime'] = 'Hora';
$string['tracktime_help'] = 'Hora en la que se inició el intento';
$string['tracktype'] = 'Tipo';
$string['tracktype_help'] = 'Tipo de la pregunta, por ejemplo "opción múltiple" (choice) o "respuestacorta" (shortanswer)';
$string['trackweight'] = 'Ponderación';
$string['trackweight_help'] = 'Ponderación asignada a lapregunta al calcular el puntaje.';
$string['type'] = 'Tipo';
$string['typeaiccurl'] = 'URL AICC externa';
$string['typeexternal'] = 'Manifiesto SCORM externo';
$string['typelocal'] = 'Paquete subido';
$string['typelocalsync'] = 'Paquete bajado';
$string['undercontent'] = 'Debajo del contenido';
$string['unziperror'] = 'Ha ocurrido un error durante la descompresión del paquete';
$string['updatefreq'] = 'Frecuencia de actualización automática';
$string['updatefreqdesc'] = 'Esta preferencia fija el valor por defecto sobre la frecuencia de actualización automática de una actividad';
$string['updatefreq_error'] = 'La frecuencia de auto-actualización solamente puede configurarse cuando el archivo del paquete está alojado externamente.';
$string['updatefreq_help'] = 'Esto le permite al paquete externo ser descargado y actualizado automáticamente';
$string['validateascorm'] = 'Validar un paquete SCORM';
$string['validation'] = 'Resultado de la validación';
$string['validationtype'] = 'Esta preferencia ajusta la librería DOMXML usada para validar un Manifiesto SCORM. Si tiene dudas, deje la opción activada.';
$string['value'] = 'Valor';
$string['versionwarning'] = 'La versión del manifiesto es anterior a la 1.3, advertencia en la marca {$a->tag}';
$string['viewallreports'] = 'Ver los reportes de {$a} intentos';
$string['viewalluserreports'] = 'Ver los reportes de {$a} usuarios';
$string['whatgrade'] = 'Calificación de intentos';
$string['whatgradedesc'] = 'Si es que se grabará en el libro de calificaciones el mayor, promedio (media), primero o último de los intentos completados en caso de que estén permitidos intentos múltiples.';
$string['whatgrade_help'] = 'Si se permiten múltiples intentos, esta configuración especifica si se almacenará en el libro de calificaciones el valor más alto, el promedio (la media), el primer intento o el último. La opción del último intento completado no incluye los intentos con estatus de \'fallido\' o \'reprobado\'

Notas acerca de la gestión de múltiples intentos

* La posibilidad de iniciar un nuevo intento se marca en una casilla situada encima del botón de Entrada (\'Enter\') en la página de estructura del contenido; así que, asegúrese que permite el acceso a esa página si desea permitir más de un intento.
* Algunos paquetes SCORM son inteligentes sobre los nuevos intentos, pero muchos no lo son. Lo que significa que si el estudiante vuelve a hacer un intento y el contenido SCORM no tiene lógica interna para evitar sobrescribir los intentos anteriores, estos se pueden sobrescribir, incluso si el  intento estaba en estado "completado" o "pasado".
* La configuración de "Forzar completar", "Forzar nuevo intento" y "Bloqueo después del intento final" también proporcionan gestión avanzada de intentos múltiples.';
$string['width'] = 'Anchura';
$string['window'] = 'Ventana';
$string['youmustselectastatus'] = 'Usted debe de seleccionar un estatus a requerir';
