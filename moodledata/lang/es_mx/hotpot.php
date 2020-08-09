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
 * Strings for component 'hotpot', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   hotpot
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Abandonado';
$string['abandonhotpot'] = 'Sus resultados hasta ahora serán guardados, pero Usted no podrá continuar ni reiniciar esta actividad más tarde.';
$string['activitycloses'] = 'Actividad se cierra';
$string['activitygrade'] = 'Calificación de actividad';
$string['activityopens'] = 'Actividad se abre';
$string['added'] = 'Añadido';
$string['addquizchain'] = 'Añadir cadena de examen';
$string['addquizchain_help'] = '¿Deberían añadirse todos los exámenes en una cadena de exámenes?

**No**
: solo se añadirá un examen al curso

**Si** :si el archivo fuente es un (archivo de examen) **quiz file**,será tratado como el comienzo de una cadena de exámenes y todos los exámenes en la cadena serán añadidos al curso con configuraciones idénticas. Cada examen en la cadena debe tener un enlace hacia el siguiente archivo de la cadena.

Si el archivo fuente es una (carpeta)  **folder**, todos los exámenes reconocibles en la carpeta serán añadidos al curso para formar una cadena de exámenes con configuraciones idénticas.

Si el archivo fuente es un (archivo de unidad) **unit file**, tal como un archivo machacador de Hot Potatoes (Hot Potatoes masher file) o index.html, los exámenes enlistados en el archivo de la unidad serán añadidos al curso como una cadena de exámenes con configuraciones idénticas.';
$string['allowpaste'] = 'Permitir pegar';
$string['allowpaste_help'] = 'Si esta configuración es habilitada, se les permitirá a los estudiante el copiar, pegar y arrastrartexto dentro de las cajas de entrada de texto.';
$string['allowreview'] = 'Permitir revisión';
$string['allowreview_help'] = 'Si se habilita, los estudiantes pueden revisar sus intentos de examen después de que se haya cerrado el examen.';
$string['analysisreport'] = 'Análisis de items';
$string['attempted'] = 'Intentado';
$string['attemptlimit'] = 'Límite de intentos';
$string['attemptlimit_help'] = 'El número máximo de intentos de una actividad HotPot que puede tener un estudiante';
$string['attemptnumber'] = 'Intento número';
$string['attempts'] = 'Intentos';
$string['attemptscore'] = 'Puntaje de intento';
$string['attemptsunlimited'] = 'Intentos ilimitados';
$string['average'] = 'Promedio';
$string['averagescore'] = 'Puntaje promedio';
$string['bodystyles'] = 'Estilos de cuerpo';
$string['bodystylesbackground'] = 'Color del fondo e imagen';
$string['bodystylescolor'] = 'Color del texto';
$string['bodystylesfont'] = 'Tamaño y familia de letra';
$string['bodystylesmargin'] = 'Márgenes izquierdo y derecho';
$string['cacherecords'] = 'Registros de caché HotPot';
$string['canrestarthotpot'] = 'Sus resultados hasta ahora serán guardados y Usted puede rehacer "{$a}" más tarde.';
$string['canresumehotpot'] = 'Sus resultados hasta ahora serán guardados y Usted puede continuar "{$a}" más tarde.';
$string['checks'] = 'Revisar';
$string['checksomeboxes'] = 'Por favor elija algunas casillas';
$string['clearcache'] = 'Limpiar caché HotPot';
$string['cleardetails'] = 'Limpiar detalles HotPot';
$string['clearedcache'] = 'Se ha borrado la caché de HotPot';
$string['cleareddetails'] = 'Los detalles de HotPot se han borrado';
$string['clickreporting'] = 'Habilitar reportar click';
$string['clickreporting_help'] = 'Si se habilita, se guarda un registro separado cada vez que se elige un botón de "pista", "clave" o "revisar". Esto le permite al profesor ver un reporte detallado que muestra el estado del examen en cada click. De otra forma, solamente se guarda un registro por intento del examen.';
$string['clicktrailreport'] = 'Elejor caminos';
$string['closed'] = 'Esta actividad está cerrada';
$string['clues'] = 'Pistas';
$string['completed'] = 'Completada';
$string['completioncompleted'] = 'Requerir estatus de finalizado';
$string['completionmingrade'] = 'Requerir calificación máxima';
$string['completionpass'] = 'Requerir calificación aprobatoria';
$string['completionwarning'] = 'Estos campos están deshabilitados si el límite de calificación para esta calificación fuera "Sin calificación" o la ponderación de calificación fuera "Sin calificación"';
$string['configbodystyles'] = 'Por defecto, los estilos de tema de Moodle anularán los estilos de la actividad HotPot. Sin embargo, para cualquier estilo seleccionado aquí, los estilos de actividad HotPot tendrán prioridad sobre los estilos de tema gráfico de Moodle.';
$string['configenablecache'] = 'Mantener una caché de exámenes HotPot puede agilizar dramáticamente la velocidad con que los exámenes llegan a los alumnos.';
$string['configenablecron'] = 'Especificar las horas en su zona horaria en las que correrá el script del cron de HotPot';
$string['configenablemymoodle'] = 'Esta configuración controla si HotPots se enlistan o no en la página de MiMoodle';
$string['configenableobfuscate'] = 'El ofuscar las cadenas del texto y URLs en el código de JavaScript hace más dificil adivinar las respuestas al ver el código fuente de la página HTML en el navegador de Internet.';
$string['configenableswf'] = 'Permitir incrustar archivos SWF en actividades HotPot. Si se habilita, esta configuración anula filter_mediaplugin_enable_swf.';
$string['configfile'] = 'Archivo de configuración';
$string['configframeheight'] = 'Cuando se muestra un examen dentro de un marco, este valor es la altura (en pixeles) del marco superior que contiene la barra de navegación de Moodle.';
$string['configlocation'] = 'Ubicación del archivo de configuración';
$string['configlockframe'] = 'Si se habilita esta configuración, entonces, si se empleara el marco de navegación, estará bloqueado para que no se pueda deslizar, ni re-ajustar tamaño y que no tenga borde';
$string['configmaxeventlength'] = 'Si un HotPot tiene ambas, una fecha de apertura y una de cierre, y la diferencia entre ambas es mayor que el número de días especificado aquí, entonces dos eventos de calendario separados serán añadidos al calendario del curso. Para duraciones menores, o cuando solamente se especifica una fecha, solamente se añadirá un evento al calendario. Si no se especifica ninguna fecha, no se añadirá evento al calendario';
$string['configstoredetails'] = 'Si esta configuración se habilita, entonces se almacenarán en la tabla de hotpot_details los detalles crudos en XML de los intentos de resolver los exámenes HotPot. Esto permite que se pudieran re-calificar los intentos de exámenes en el futuro, para reflejar cambios en el sistema de puntuación del examen HotPot. Sin embargo, el habilitar esta opción en un sitio muy concurrido causará que la tabla hotpot_details crezca muy rápidamente';
$string['confirmdeleteattempts'] = '¿Realmente desea borrar estos intentos?';
$string['confirmstop'] = '¿Está seguro de querer navegar lejos de esta página?';
$string['correct'] = 'Correcto';
$string['couldnotinsertsubmissionform'] = 'No pudo insertarse el formato para envío';
$string['delay1'] = 'Lapso de tiempo 1';
$string['delay1_help'] = 'El lapso de tiempo mínimo entre el primer y el segundo intento';
$string['delay1summary'] = 'El lapso de tiempo entre el primer intento y el segundo';
$string['delay2'] = 'Lapso de tiempo 2';
$string['delay2_help'] = 'El lapso de tiempo mínimo entre intentos posteriores al segundo intento';
$string['delay2summary'] = 'Lapso de tiempo entre intentos posteriores';
$string['delay3'] = 'Lapso de tiempo 3';
$string['delay3afterok'] = 'Esperar hasta que los estudiantes elijan \'OK\' (aceptar)';
$string['delay3disable'] = 'No continuar automáticamente';
$string['delay3_help'] = 'Esta configuración especifica el lapso de tiempo entre que se termina el examen y cuando se regresa el control de la visualización a Moodle.

**Usar tiempo específico (en segundos)** : el control regresará a Moodle después del retraso especificado.

**Usar configuraciones del archivo fuente/plantilla**
: el control regresará a Moodle después del número de segundos especificado en el archivo fuente o en el archivo de la plantilla para este formato de salida.

. **Esperar a que el estudiante elija OK** : el control regresará a Moodle después de que el estudiante elija el botón OK (aceptar) en el mensaje de terminación del examen

**No continuar automáticamente** : el control no regresará a Moodle despues de terminar el examen. El estudiante tendrá libertad para navegar lejos de la página del examen.

Nota: los resultados del examen siempre se mandan a Moodle inmediatamente que el examen es finalizado o abandonado, sin importar esta configuración.';
$string['delay3specific'] = 'Usar tiempo específico';
$string['delay3summary'] = 'Lapso de tiempo al final del examen';
$string['delay3template'] = 'Usar configuraciones del archivo fuente/plantilla';
$string['deleteallattempts'] = 'Borrar todos los intentos';
$string['deleteattempts'] = 'Borrar intentos';
$string['detailsrecords'] = 'Registros de detalles HotPot';
$string['d_index'] = 'Índice de discriminación';
$string['duration'] = 'Duración';
$string['enablecache'] = 'Habilitar caché HotPot';
$string['enablecron'] = 'Habilitar cron HotPot';
$string['enablemymoodle'] = 'Mostrar HotPot en MiMoodle';
$string['enableobfuscate'] = 'Habilitar ofuscación del texto y reproductores multimedia';
$string['enableswf'] = 'Habilitar incrustar archivos SWF dentro de actividades HotPot';
$string['entry_attempts'] = 'Intentos';
$string['entrycm'] = 'Actividad previa';
$string['entrycmcourse'] = 'Actividad previa en este curso';
$string['entrycm_help'] = 'Esta configuración especifica una actividad Moodle y una calificación mínima para esta actividad, que debe de alcanzarse antes de intentar esta actividad HotPot

El profesor puede seleccionar una actividad específica,
o una de las siguientes configuraciones de propósito general:

* Actividad previa en este curso
* Actividad previa en esta sección
* HotPot previo en este curso
* HotPot previo en esta sección';
$string['entrycmsection'] = 'Actividad previa en esta sección del curso';
$string['entrycompletionwarning'] = 'Antes de comenzar esta actividad debe ver {$a}.';
$string['entry_dates'] = 'Fechas';
$string['entrygrade'] = 'Calificación de actividad previa';
$string['entrygradewarning'] = 'No puede comenzar esta actividad hasta que tenga un puntaje de {$a->entrygrade}% en {$a->entryactivity}. Actualmente, su puntaje para esta actividad es de  {$a->usergrade}%';
$string['entry_grading'] = 'Calificaciones';
$string['entryhotpotcourse'] = 'HotPot previo en este curso';
$string['entryhotpotsection'] = 'HotPot previo en esta sección del curso';
$string['entryoptions'] = 'Opciones de página de inicio';
$string['entryoptions_help'] = 'Estas casillas habilitan y deshabilitan la visualización de items en la página de inicio de HotPot

**Nombre de la unidad como título**
:si se habilita, el nombre de la unidad se mostrará omo título en la página de inicio.

**Calificaciones** : si se elige, la información de calificación de HotPot se mostrará en la página de inicio

**Fechas** : si se elige, las fechas de apertura y cierre de HotPot se mostrarán en la página de inicio

**Intentos** : si se elige, se mostrará una tabla con detalles de los intentos previos del usuario en la página de inicio. Los intentos que se pudiesen continuar tendrán un botón de continuar mostrado en la columna más a la derecha.';
$string['entrypage'] = 'Mostrar página de inicio';
$string['entrypagehdr'] = 'Página de inicio';
$string['entrypage_help'] = '¿Deberá mostrarse la página de inicio a los estudiantes antes de comenzar la actividad HotPot?

**Si** : a los estudiantes se les mostrará una página de inicio antes de comenzar HotPot. Los contenidos de la página de inicio están determinados por las opciones de la página de inicio de HotPot.

**No** : a los estudiantes no se les mostrará una página de inicio y comenzarán HotPot inmediatamente.

Una página de inicio siempre le será mostrada al profesor, para darle acceso a los reportes y poder editar la página del examen';
$string['entrytext'] = 'Texto de página de inicio';
$string['entry_title'] = 'Nombre de unidad como título';
$string['event_attempt_reviewed'] = 'Intento HotPot revisado';
$string['event_attempt_reviewed_description'] = 'El usuario con id "{$a->userid}" revisó un intento de la actividad "hotpot" con ID del módulo del curso "{$a->cmid}"';
$string['event_attempt_reviewed_explanation'] = 'Un usuario recién revisó un intento de una actividad HotPot';
$string['event_attempt_started'] = 'Intento HotPot iniciado';
$string['event_attempt_started_description'] = 'El usuario con id "{$a->userid}" inició un intento a la actividad "hotpot" con ID del módulo del curso "{$a->cmid}"';
$string['event_attempt_started_explanation'] = 'Un usuario recién inició un intento a una actividad HotPot';
$string['event_attempt_submitted'] = 'Intento HotPot enviado';
$string['event_attempt_submitted_description'] = 'El usuario con id "{$a->userid}" envió un intento a la actividad "hotpot" con ID de módulo del curso "{$a->cmid}"';
$string['event_attempt_submitted_explanation'] = 'Un usuario recién envió un intento a una actividad HotPot';
$string['event_base'] = 'Evento HotPot detectado';
$string['event_base_description'] = 'El usuario con id "{$a->userid}" inició un evento en la actividad "hotpot" con ID de módulo del curso "{$a->cmid}"';
$string['event_base_explanation'] = 'Un evento fue detectado por el módulo HotPot';
$string['event_report_viewed'] = 'Reporte HotPot visto';
$string['event_report_viewed_description'] = 'El usuario con id "{$a->userid}" vio un reporte sobre intentos a la actividad "hotpot" con ID de módulo del curso "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'Un usuario recién vió un reporte sobre intentos a una actividad HotPot';
$string['exit_areyouok'] = 'Hola ¿aún estás allí?';
$string['exit_attemptscore'] = 'Su puntuación para este intento fue  {$a}';
$string['exitcm'] = 'Siguiente actividad';
$string['exitcmcourse'] = 'Siguiente actividad en este curso';
$string['exitcm_help'] = 'Esta configuración especifica una actividad Moodle que debe de realizarse después de completar esta actividad HotPot. La calificación mínima opcional es la calificación mínima que se requiere antes de que se muestre la siguiente actividad.

El profesor puede seleccionar una actividad específica, o una de las siguientes configuraciones de propósito general:

* Actividad siguiente en este curso
* Actividad siguiente en esta sección * HotPot siguiente en este curso
* HotPot siguiente en esta sección

Si se deshabilitan las opciones para otras opciones de la página de salida, el estudiante irá derechito hacia la siguiente actividad. En caso contrario, al estudiante se le mostrará un enlace para llevarlo hacia la siguiente actividad en cuanto esté listo.';
$string['exitcmsection'] = 'Siguiente actividad en esta sección del curso';
$string['exit_course'] = 'Curso';
$string['exit_course_text'] = 'Regresar a la página principal del curso';
$string['exit_encouragement'] = 'Estímulo';
$string['exit_excellent'] = '¡Excelente!';
$string['exit_feedback'] = 'Salir de retroalimentación de página';
$string['exit_feedback_help'] = 'Esta opción habilita y deshabilita el mostrar los items de retroalimentación en una página de salida de HotPot.

. **Nombre de unidad como título** : si se elige, el nombred de la unidad se mostrará como título en la página de salida.

**Estímulo** : si se elige, se mostrará un mensaje motivacional en la página de salida . La motivación depende de la calificación HotPot: :
 **> 90%**: ¡Excelente! :
**> 60%**: Bien hecho :
**> 0%**: Buen intento :
**= 0%**: ¿Estás bién?

**Calificación de intento unidad**
: si se elige, se mostrará en la página de salida la calificación para el intento de unidad que acaba de ser completada.

**Calificación de unidad**
:si se elige, se mostrará en la página de salida la calificación de HotPot.

Además, si resultara que el método de calificar unidad fuese el mayor, aparecerá un mensaje al usuario para decirle si el intento más reciente fue igual o mejor que los anteriores.';
$string['exit_goodtry'] = '¡Buen intento!';
$string['exitgrade'] = 'Siguiente calificación de actividad';
$string['exit_grades'] = 'Calificaciones';
$string['exit_grades_text'] = 'Vea sus calificaciones hasta ahora en este curso';
$string['exithotpotcourse'] = 'Siguiente HotPot en este curso';
$string['exit_hotpotgrade'] = 'Su calificación para esta actividad es {$a}';
$string['exit_hotpotgrade_average'] = 'Su calificación promedio hasta ahora para esta actividad es {$a}';
$string['exit_hotpotgrade_highest'] = 'Su calificación más alta hasta ahora para esta actividad es {$a}';
$string['exit_hotpotgrade_highest_equal'] = '¡Usted igualó su mejor calificación anterior para esta actividad!';
$string['exit_hotpotgrade_highest_previous'] = 'Su calificación más alta anteriormente para esta actividad era {$a}';
$string['exit_hotpotgrade_highest_zero'] = 'Usted no ha logrado puntear más allá de {$a} para esta actividad aún';
$string['exithotpotsection'] = 'Siguiente HotPot en esta sección de curso';
$string['exit_index'] = 'Índice';
$string['exit_index_text'] = 'Ir al índice de actividades';
$string['exit_links'] = 'Salir de enlaces de página';
$string['exit_links_help'] = 'Estas opciones habilitan y deshabilitan la visualización de ciertos enlaces de navegación en una página de salida de HotPot.

**Reintentar** : si se permiten intentos múltiples en este HotPot todavía tiene intentos disponibles, se mostrará un enlace para permitirle al estudiante reintentar el HotPot.

**Índice** : si se elige, se mostrará un enlace hacia la página del índice de HotPot.

**Curso** : si se elige, se mostrará un enlace hacia la página del curso Moodle.

. **Calificaciones** : si se elige, se mostrará un enlace hacia la página del libro de calificaciones de Moodle.';
$string['exit_next'] = 'Siguiente';
$string['exit_next_text'] = 'Intentar la siguiente actividad';
$string['exit_noscore'] = '¡Usted ha completado exitosamente esta actividad!';
$string['exitoptions'] = 'Salir de opciones de página';
$string['exitpage'] = 'Mostrar página de salida';
$string['exitpagehdr'] = 'Página de salida';
$string['exitpage_help'] = '¿Debería de mostrarse una página de salida después de completar el examen HotPot?


**Si** : Al estudiante se le mostrará una página de salida cuando se complete el HotPot. Los contenidos de la página de salida son determinados por las configuraciones para las retroalimentaciones de la página de salida y enlaces de HotPot.

**No** : a los estudiantes no se les mostrará página de salida. En su lugar, podrán ir inmediatamente a la siguiente actividad o regresar a la página del curso de Moodle.';
$string['exit_retry'] = 'Reintentar';
$string['exit_retry_text'] = 'Reintentar esta actividad';
$string['exittext'] = 'Texto de página de salida';
$string['exit_welldone'] = '¡Bien hecho!';
$string['exit_whatnext_0'] = '¿Que le gustaría hacer a continuación?';
$string['exit_whatnext_1'] = 'Elija su destino ...';
$string['exit_whatnext_default'] = 'Por favor elija uno de los siguientes';
$string['feedbackdiscuss'] = 'Discuta este examen en un foro';
$string['feedbackformmail'] = 'Formato de retroalimentación';
$string['feedbackmoodleforum'] = 'Foro de Moodle';
$string['feedbackmoodlemessaging'] = 'Mensajería de Moodle';
$string['feedbacknone'] = 'Nada';
$string['feedbacksendmessage'] = 'Mandar un mensaje a su instructor';
$string['feedbackwebpage'] = 'Página web';
$string['firstattempt'] = 'Primer intento';
$string['forceplugins'] = 'Forzar plugins multimedia';
$string['forceplugins_help'] = 'Si se habilita, los reproductores multimedia compatibles con Moodle reproducirán archivos avi, mpeg, mpg, mp3, mov y wmv.  En caso contrario, Moodle no cambiará las configuraciones de ningún reproductor multimedia en el examen';
$string['frameheight'] = 'Altura del marco';
$string['giveup'] = 'Abandonar';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Esta configuración determina como se calcula la calificaciónHotPot a partir de las calificaciones de los intentos.

**Calificación mayor** : se pondrá la calificación mayor de los intentos de esta actividad HotPot.

**Calificación promedio** :se pondrá la calificación promedio de los intentos de esta actividad HotPot.

 **Primer intento** : se pondrá la calificación del primer intento de esta actividad HotPot.


**Último intento** : se pondrá la calificación del intento más reciente de esta actividad HotPot.';
$string['gradeweighting'] = 'Ponderación de calificaciones';
$string['gradeweighting_help'] = 'Las calificaciónes para esta actividad HotPot se ajustarán en escala a este número en el libro de calificaciones de Moodle';
$string['highestscore'] = 'Calificación mayor';
$string['hints'] = 'Pistas';
$string['hotpot:addinstance'] = 'Añadir nueva actividad HotPot';
$string['hotpot:attempt'] = 'Intentar una actividad HotPot y enviar resultado';
$string['hotpot:deleteallattempts'] = 'Borrar cualquier intento de usuario para una actividad HotPot';
$string['hotpot:deletemyattempts'] = 'Borrar sus propios inentos a una actividad HotPot';
$string['hotpot:ignoretimelimits'] = 'Ignorar los límites de tiempo en una actividad HotPot';
$string['hotpot:manage'] = 'Cambiar las configuraciones de una actividad HotPot';
$string['hotpotname'] = 'Nombre de actividad HotPot';
$string['hotpot:preview'] = 'Previsualizar una acividad HotPot';
$string['hotpot:reviewallattempts'] = 'Ver cualquier intento de usuario de una actividad HotPot';
$string['hotpot:reviewmyattempts'] = 'Ver su propio intento de una actividad HotPot';
$string['hotpot:view'] = 'Ver la página de inicio de una actividad HotPot';
$string['ignored'] = 'ignorada';
$string['inprogress'] = 'en progreso';
$string['isgreaterthan'] = 'es mayor que';
$string['islessthan'] = 'es menor que';
$string['lastaccess'] = 'Último acceso';
$string['lastattempt'] = 'Último intento';
$string['lockframe'] = 'Bloquear marco';
$string['maxeventlength'] = 'Número máximo de días para un solo evento de calendario';
$string['mediafilter_hotpot'] = 'filtro multimedia HotPot';
$string['mediafilter_moodle'] = 'Filtros multimedia estándar de Moodle';
$string['migratingfiles'] = 'Migrando archivos de examen HotPot';
$string['migratinglogs'] = 'Migrando bitácoras HotPot';
$string['missingsourcetype'] = 'Al registro de HotPot le falta sourcetype (tipoorigen)';
$string['modulename'] = 'HotPot';
$string['modulename_help'] = 'El módulo HotPot le permite a los profesores distribuir materiales de aprendizaje interactivos a sus estudiantes vía Moodle y ver reportes sobre las respuestas y resultados de sus estudiantes.

Una actividad única de HotPot consiste de una página opcional de entrada, un único ejercicio \'elearning\' (eaprendizaje) y una página opcional de salida. El ejercicio de eaprendizaje puede ser una página web estática o una página web interactiva que les ofrece a los estudiantes texto, audio, y estímulos visuales y graba sus respuestas. El ejercicio de eaprendizaje se crea en la computadora del profesor empleando programas de autoría y después se sube a Moodle.

Una actividad HotPot puede manejar ejercicios creados con los siguientes programas de autoría:

 * Hot Potatoes (versión 6)
* Qedoc
* Xerte
* iSpring
* cualquier editor de HTML';
$string['modulenameplural'] = 'HotPots';
$string['nameadd'] = 'Nombre';
$string['nameadd_help'] = 'El nombre puede ser texto específico tecleado por el profesor o puede ser generado automáticamente.

**Obtener del archivo orígen** : el nombre se sacará del archivo orígen.

**Usar el nom,bre del archivo orígen** : el nombre del archivo orígen se usará como nombre.

**Usar la ruta al archivo orígen** : La ruta al archivo orígen se usará como nombre. Cualquier diagonal en la ruta se remplazará por espacios.

**Texto específico** :el texto específico tecleado por el profesor se usará como nombre.';
$string['nameedit'] = 'Nombre';
$string['nameedit_help'] = 'El texto específico que es mostrado a los estudiantes';
$string['navigation'] = 'Navegación';
$string['navigation_embed'] = 'Incrustar página web';
$string['navigation_frame'] = 'Marco de navegación de Moodle';
$string['navigation_give_up'] = 'Un único botón de &quot;Rendirse&quot; button';
$string['navigation_help'] = 'Esta configuración especifica la navegación empleada en el examen:

**Barra de navegación de Moodle**
: la barra de navegación de Moodle se mostará en la misma ventana que el examen en la parte superior de la página


 **Marco de navegación de Moodle** :
: la barra de navegación de Moodle se mostrará en un marco separado en la parte superior de la página

**Página web incrustada**
: la barra de navegación de Moodle se mostrará con el examen HotPot incrustado dentro de la ventana.

**Ayudas de navegación originales**
: el examen se mostrará con los botones de navegación, si los hubiera, definidos en el examen

**Un solo botón "Abandonar" **
: el examen se mostrará con un único botón de "Abandonar" en la parte superior de la página

**Nada**
: el examen se mostrará sin ayudas para navegación, de forma tal que cuando se hayan respondido correctamente todas las preguntas, dependiendo de la configuración de  "¿Mostrar siguiente examen?" entonces, Moodle lo regresará a la página del curso o mostrará el siguiente examen';
$string['navigation_moodle'] = 'Barras (superior y lateral) estándar de navegación de Moodle';
$string['navigation_none'] = 'Nada';
$string['navigation_original'] = 'Ayudas para navegación originales';
$string['navigation_topbar'] = 'Solamente barra superior de navegación Moodle (sin barras laterales)';
$string['noactivity'] = 'Sin actividad';
$string['nohotpots'] = 'No se encontraron HotPots';
$string['nomoreattempts'] = 'Lo siento, no tiene más intentos disponibles para esta actividad';
$string['noresponses'] = 'No se encontró información sobre preguntas y respuestas individuales';
$string['noreview'] = 'Lo siento, no se le permite ver detalles de este intento de examen';
$string['noreviewafterclose'] = 'Lo sentimos, este examen se cerró. A Usted no se le permite ver detalles de este intento de examen.';
$string['noreviewbeforeclose'] = 'Lo sentimos, a Usted no se le permite ver detalles de este intento de examen hasta {$a}';
$string['nosourcefilesettings'] = 'Al registro de HotPot le falta información del archivo orígen';
$string['notattemptedyet'] = 'Aun no intentado';
$string['notavailable'] = 'Lo sentimos, esta actividad actualmente no está disponible para Usted.';
$string['outputformat'] = 'Formato de salida';
$string['outputformat_best'] = 'Mejor';
$string['outputformat_help'] = 'El formato de salida especifica cómo se presentará el contenido al estudiante.

Los formatos de salida que están disponibles dependen del tipo del archivo orígen. Algunos tipos de archivo orígen solamente tienen un formato de salida, mientras otros tipos de archivo orígen tienen varios formatos de salida.

La "mejor" configuración mostrará el contenido empleando el formato óptimo de salida para el navegador web del estudiante.';
$string['outputformat_hp_6_jcloze_html'] = 'JCloze(v6) desde html';
$string['outputformat_hp_6_jcloze_html_dropdown'] = 'Desplegable desde HTML';
$string['outputformat_hp_6_jcloze_html_findit_a'] = 'Findit (a) desde html';
$string['outputformat_hp_6_jcloze_html_findit_b'] = 'Findit (b) desde html';
$string['outputformat_hp_6_jcloze_html_jgloss'] = 'JGloss desde HTML';
$string['outputformat_hp_6_jcloze_xml_anctscan'] = 'ANCT-Scan desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_dropdown'] = 'Desplegable desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_a'] = 'FindIt (a) desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_b'] = 'FindIt (b)  desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_jgloss'] = 'JGloss desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_v6'] = 'JCloze (v6) desde HP6 xml';
$string['outputformat_hp_6_jcloze_xml_v6_autoadvance'] = 'JCloze (v6) desde HP6 xml (Auto-avance)';
$string['outputformat_hp_6_jcross_html'] = 'JCross (v6) desde html';
$string['outputformat_hp_6_jcross_xml_v6'] = 'JCross (v6) desde xml';
$string['outputformat_hp_6_jmatch_html'] = 'JMatch (v6) desde html';
$string['outputformat_hp_6_jmatch_html_sort'] = 'JMatch Sort desde html';
$string['outputformat_hp_6_jmatch_xml_flashcard'] = 'JMatch (flashcard) desde xml';
$string['outputformat_hp_6_jmatch_xml_jmemori'] = 'JMemori desde xml';
$string['outputformat_hp_6_jmatch_xml_sort'] = 'JMatch Sort desde xml';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6+) desde xml';
$string['outputformat_hp_6_jmix_html'] = 'JMix (v6) desde html';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6+) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6+ con prefijo, sufijo con distractores) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'JMix (v6+ con presionar tecla) desde xml';
$string['outputformat_hp_6_jquiz_html'] = 'JQuiz (v6) desde html';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) desde xml  (Auto-avanzar)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) desde xml (Examen)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) desde html';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) desde xml';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) desde html';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) desde html, calificación incremental';
$string['outputformat_hp_6_sequitur_xml'] = 'Sequitur (v6) desde xml';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) desde xml, calificación incremental';
$string['outputformat_html_ispring'] = 'Archivo HTML de iSpring';
$string['outputformat_html_xerte'] = 'Archivo HTML de Xerte';
$string['outputformat_html_xhtml'] = 'Archivo HTML estándar';
$string['outputformat_qedoc'] = 'Archivo Qedoc';
$string['overviewreport'] = 'Vista general';
$string['penalties'] = 'Castigos';
$string['percent'] = 'Porcentaje';
$string['pluginadministration'] = 'Administración HotPot';
$string['pluginname'] = 'Módulo HotPot';
$string['pressoktocontinue'] = 'Elija OK para continuar, o Cancelar para quedarse en la página actual.';
$string['privacy'] = 'Privacidad de resultados';
$string['privacy:metadata:hotpot_attempts'] = 'Información acerca de los intentos del usuario en actividades Hotot';
$string['privacy:metadata:hotpot_attempts:attempt'] = 'El intento que indica el número de intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:clickreportid'] = 'El clickreportid que indica la id del reporte del click por el usuario';
$string['privacy:metadata:hotpot_attempts:endtime'] = 'La hora_de_terminación que indica cuando fue terminado el intento por el usuario';
$string['privacy:metadata:hotpot_attempts:hotpotid'] = 'La ID de los intentos de actividades HotPot';
$string['privacy:metadata:hotpot_attempts:penalties'] = 'Los castigos que indican los castigos recibidos por los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:score'] = 'El puntaje que indica el puntaje recibido por los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:starttime'] = 'La hora_de_inicio que indica cuando fueron iniciados los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:status'] = 'El estado que indica el estado de los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:timefinish'] = 'La hora_de_terminación que indica cuando fueron terminados los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:timemodified'] = 'La hora_de_modificación que indica cuando fueron modificados los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:timestart'] = 'La hora_de_inicio que indica cuando fueron iniciados los intentos por el usuario';
$string['privacy:metadata:hotpot_attempts:userid'] = 'La ID de los intentos del usuario  en actividades HotPot';
$string['questionshort'] = 'Q-{$a}';
$string['quizname_help'] = 'texto de ayuda para nombre del examen';
$string['quizzes'] = 'Exámenes';
$string['responses'] = 'Respuestas';
$string['responsesreport'] = 'Respuestas';
$string['reviewafterattempt'] = 'Permitir revisión posterior al intento';
$string['reviewafterclose'] = 'Permitir revisión posterior al cierre de HotPot';
$string['reviewduringattempt'] = 'Permitir revisión durante el intento';
$string['reviewoptions'] = 'Opciones de revisión';
$string['score'] = 'Puntaje';
$string['scoresreport'] = 'Puntajes';
$string['selectattempts'] = 'Seleccionar intentos';
$string['showerrormessage'] = 'Error HotPot: {$a}';
$string['sourcefile'] = 'Archivo orígen';
$string['sourcefile_help'] = 'Esta configuración especifica al archivo que tiene el contenido que se mostrará a los estudiantes.

Usualmente, el archivo orígen se habrá creado fuera de Moodle, y después se cargará al área de archivos del curso Moodle. Puede ser un archivo HTML, o puede ser otro tipo de archivo que ha sido creado con un programa de autoría como Hot Potatoes o or Qedoc.

El archivo orígen puede especificarse como una carpeta o ruta de acceso en el área de archivos del curso Moodle, o puede ser una URL que empieza con http:// o https://

Para materiales  Qedoc, el archivo orígen debe ser una URL de un módulo Qedoc que fue subido a un servidor Qedoc.

* por ejemplo:. http://www.qedoc.net/library/ABCDE_123.zip
* Para información sobre como subir módulos de Qedoc vea: [Qedoc documentation: Uploading_modules](http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string['sourcefilenotfound'] = 'Archivo orígen no encontrado (o vacío): {$a}';
$string['status'] = 'Estatus';
$string['stopbutton'] = 'Mostrar botón \'detener\'';
$string['stopbutton_help'] = 'Si esta configuración se habilita, se insertará un botón de \'Alto\' dentro del examen.

Si un estudiante elige el botón de \'Alto\', se mandará a Moodle los resultados alcanzados hasta entonces y el estatus del intento de examen se pondrá en abandonado.

El texto que se mostrará en el botón de \'Alto? puede ser una de las frases preseleccionadas de los paquetes de idioma de Moodle, o el profesor puede especificar su propio texto para el botón.';
$string['stopbutton_langpack'] = 'Del paquete de idioma';
$string['stopbutton_specific'] = 'Usar texto específico';
$string['stoptext'] = 'Texto del botón \'detener\'';
$string['storedetails'] = 'Guardar los detalles XML crudos de los intentos de examen HotPot';
$string['studentfeedback'] = 'Retroalimentación para estudiante';
$string['studentfeedback_help'] = 'Si se habilita, se mostrará un enlace hacia una ventana emergente cuando el estudiante elija el botón "Revisar". La ventana de retroalimentación les permite a los estudiantes discutir este examen con el profesor y con los compañeros de clase en una de las formas siguientes:


**Página Web** : requiere la URL de la página web, por ejemplo http://myserver.com/feedbackform.html

**Formato de retroalimentación** : requiere la URL del script del formato, por ejemplo http://myserver.com/cgi-bin/formmail.pl

**Foro Moodle** : se mostrará el índice del foro del curso

**Mensajería Moodle** : se mostrará la ventana de mensjería instantánea de Moodle. Si el curso tiene varios profesores, al estudiante se le pedirá que seleccione un profesor antes de que aparezca la ventana de mensajería.';
$string['submits'] = 'Envíos';
$string['subplugintype_hotpotattempt'] = 'Formato de salida';
$string['subplugintype_hotpotattempt_plural'] = 'Formatos de salida';
$string['subplugintype_hotpotreport'] = 'Reporte';
$string['subplugintype_hotpotreport_plural'] = 'Reportes';
$string['subplugintype_hotpotsource'] = 'Archivo orígen';
$string['subplugintype_hotpotsource_plural'] = 'Archivos orígen';
$string['textsourcefile'] = 'Obtener del archivo orígen';
$string['textsourcefilename'] = 'Usar nombre del archivo orígen';
$string['textsourcefilepath'] = 'Usar ruta al archivo orígen';
$string['textsourcequiz'] = 'Obtener del examen';
$string['textsourcespecific'] = 'Texto específico';
$string['timeclose'] = 'Disponible hasta';
$string['timedout'] = 'Tiempo terminado';
$string['timelimit'] = 'Límite de tiempo';
$string['timelimitexpired'] = 'El límite de tiempo para este intento ha caducado';
$string['timelimit_help'] = 'Esta configuración especifica la duración máxima de un único intento.

**Usar configuración del archivo orígen/plantilla**
: el límite de tiempo se tomará del archivo orígen o del archivo de la plantilla para este formato de salida

**Usar un tiempo específico**
: el tiempo límite especificado en la página de configuraciones del examen HotPot se empleará como tiempo límite para un intento de este examen. Esta configuración anula los límites de tiempo del archivo orígen, del archivo de configuración, o los archivos de plantilla para el formato de salida.

**Deshabilitar**
: no se pondrá límite de tiempo para los intentos de este examen.

Observe que si un intento se continúa, el cronómetro continuará desde donde se había pausado en el intento previo.';
$string['timelimitspecific'] = 'Usar tiempo específico';
$string['timelimitsummary'] = 'Tiempo límite para un intento';
$string['timelimittemplate'] = 'Emplear configuraciones del archivo orígen/plantilla';
$string['timeopen'] = 'Disonible a partir de';
$string['timeopenclose'] = 'Horas de apertura y cierre';
$string['timeopenclose_help'] = 'Usted puede especificar las horas cuando el exámen esté accesible, para que las personas intenten resolverlos. Antes de la hora de apertura, y después de la hora de cierre, el exámen estará no-disponible.';
$string['title'] = 'Título';
$string['title_help'] = 'Esta configuración especifica el título a mostrar en la página web.

**Nombre de actividad HotPot** : el nombre de la actividad HotPot se mostrará como el título para la página web.

**Obtener del archivo orígen** : el título definido en el archivo orígen, si existiera, se usará como título para la página web.


**Usar nombre de archivo orígen** : el nombre del archívo orígen, excluyendo los nombres de la carpeta, se usará como nombre para la página web.


**Usar ruta de archivo orígen** : la ruta al archivo orígen, incluyendo los nombres de carpetas, se usará para el nombre de la página web.';
$string['toolsindex'] = 'Índice de Herramientas HotPot';
$string['unitname_help'] = 'texto de ayuda para nombre de unidad';
$string['unrecognizedsourcefile'] = 'Lo siento, el módulo HotPot no pudo detectar el tipo del archivo fuente:{$a}';
$string['updated'] = 'Actualizado';
$string['updatinggrades'] = 'Actualizando calificaciones de HotPot';
$string['usefilters'] = 'Usar filtros';
$string['usefilters_help'] = 'Si se habilita esta configuración, el contenido se pasará a traves de los filtros de Moodle antes de ser enviado al navegador.';
$string['useglossary'] = 'Usar glosario';
$string['useglossary_help'] = 'Si se habilita esta configuración, el contenido se pasará a traves del auto-enlazado del Glosario de Moodle antes de ser enviado al navegador.

Observe que esta configuración anula la configuración de administración del sitio para habilitar o deshabilitar el filtro de auto-enlazado del Glosario.';
$string['usemediafilter'] = 'Usar filtro multimedia';
$string['usemediafilter_help'] = 'Esta configuración especifica los filtros multimedia que se usarán.

**Ninguno** : el contenido no se pasará a traves de ningún filtro.

**filtros multimedia estándar de Moodles** :el contenido se pasará a traves los filtros multimedia estándar de Moodle. Estos filtros buscan enlaces hacia tipos comunes de archivos de sonido y video, y convierten estos enlaces para los reproductores multimedia apropiados

**filtro multimedia HotPot** : el contenido se pasará por filtros que detectan enlaces, imágenes, sonidos y videos a ser espicificados empleando notación de corchetes (paréntesis cuadrados).

La notación de corchetes (paréntesis cuadrados). tiene la sintaxis siguiente: <code>[url player width height options]</code>

**url** :la URL absoluta o relativa del archivo multimedia

**reproductor** (opcional) : el nombre del reproductor a insertarse. El valor por defecto para esta configuración es "moodle". La versión estándar del módulo HotPot también ofrece los siguientes reproductores: :

**dew**: un reproductor mp3

:**dyer**: reproductor mp3 por Bernard Dyer

:**hbs**: reproductor mp3 de  Half-Baked Software

:**image**: insertar una imágen en página web

:**link**: insertar un enlace hacia otra página web


:**width** (opcional) : el ancho requerido para el reproductor

**height** (opcional) : el alto requerido para el reproductor. Si se omite, este valor se ajustará igual al configurado para ancho

:**options** (opcional) : una lista de opciones separadas por comas para pasarse al reproductor. Cada opción puede ser un simple interruptor si/no, o una pareja de nombre y valor.

:**name=value : **name="algún valor con espacios"';
$string['viewreports'] = 'Ver reportes para {$a} usuario(s)';
$string['views'] = 'Vistas';
$string['weighting'] = 'Ponderación';
$string['wrong'] = 'Mal';
$string['zeroduration'] = 'Sin duración';
$string['zeroscore'] = 'Calificación cero';
