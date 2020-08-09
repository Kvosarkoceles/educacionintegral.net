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
 * Strings for component 'taskchain', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   taskchain
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = 'Abandonado';
$string['activitycloses'] = 'Actividad Taskchain cierra';
$string['activitygrade'] = 'Calificación de actividad';
$string['activityname'] = 'Nombre de actividad';
$string['activityopens'] = 'Actividad Taskchain abre';
$string['added'] = 'Añadida';
$string['addtaskchain_help'] = '**No**
Solamente una tarea se añadirá al curso

**Si**
Si el archivo de orígen es un (archivo de tarea) **task file**, se le trata como el principio de una cadena de tareas, y todas las tareas en la cadena se añadirán al curso con configuraciones idénticas. Cada tarea en la cadena debe tener un enlace hacia el archivo siguiente en la cadena.

Si el archivo de orígen es una carpeta **folder**, todas las tareas reconocibles en la carpeta se añadirán al curso, para formar una cadena de tareas con configuraciones idénticas.

Si el archivo de orígen es un (archivo de cadena) **chain file**, como un archivo de Hot Potatoes masher file o index.html, las tareas enlistadas en el archivo de cadena se añadirán al curso como una cadena de tareas con configuraciones idénticas.';
$string['addtasks'] = 'Añadir (más) tareas';
$string['addtype'] = 'Archivos a ser añadidos';
$string['addtypeauto'] = 'Detectado automáticamente';
$string['addtypechainfile'] = 'Añadir todos los archivos enlistados en el archivo seleccionado';
$string['addtypechainfolder'] = 'Añadir todos los archivos en la carpeta seleccionada';
$string['addtypechainfolders'] = 'Añadir todos los archivos en todas las carpetas';
$string['addtype_help'] = '\'Cuales archivos deberían de ser añadidos como tareas?

**Detectar automáticamentey**
: Si un archivo es seleccionado, entonces es tratado, ya sea como un **archivo de tarea (task file)** al principio de una cadena de tareas, o como un **archivo de cadena (chain file)** que contiene una lista de archivos a ser añadidos. Si no se selecciona ningún archivo, todos los archivos reconocibles en la carpeta serán añadidos como tareas.

**Añadir solamente archivo seleccionado**
: Solamente el archivo fuente seleccionado será añadido a esta actividad como una tarea.

**Añadir cadena comenzando en archivo seleccionado**
: El archivo fuente seleccionado se asume que es un **archivo de tarea (task file)** al principio de una cadena de tareas. Todas las tareas en la cadena serán añadidas a la actividad. Cada tarea debe de tener un enlace hacia la siguiente tarea en la cadena.

**Añadir todos los archivos enlistados en archivo seleccionado**
: El archivo fuente seleccionado se asume que sea el  **archivo cadena (chain file)**, como por ejemplo un Hot Potatoes masher file o index.html. Cualquier tarea enlistada dentro del archivo seleccionado será añadida a esta actividad.

**Añadir todos los archivos adentro de carpeta seleccionada**
: Todos los archivos de tarea reconocibles All recognizable task files in the source folder will be added to this activity.

**Añadir todos los archivos en todas las carpetas**
: Todos los archivos de tareas reconocibles adentro de la carpeta destino y todas sus subcarpetas serán añadidos a esta actividad.';
$string['addtypetaskchain'] = 'Añadir cadena empezando en la fila seleccionada';
$string['addtypetaskfile'] = 'Añadir solamente el archivo seleccionado';
$string['afterattempt'] = 'Después del intento';
$string['afterclose'] = 'Después de cerrar';
$string['aftertaskid'] = 'Después de tarea';
$string['aftertaskid_help'] = 'Después de tarea';
$string['allowfreeaccess'] = 'Permitir el libre acceso';
$string['allowfreeaccess_help'] = 'Esta configuración especifica si es que a los estudiantes se les da o no acceso libre a las tareas en esta TaskChain.

Una vez que los estudiantes tengan libre acceso, ellos pueden acceder a cualquier tarea en la TaskChain, sin importar las pre-condiciones ni post-condiciones de la tarea.

**No**
: A los estudiantes no se les dará acceso libre a tareas en la TaskChain. En otras palabras, el acceso a las tareas será siempre controlado por las pre-condiciones y post-condiciones de  las tareas.

**Si: Calificaciones**
: Al estudiante se le dará libre acceso a las tareas en la  TaskChain, una vez que hayan obtenido la calificación requerida.

**Si: Intentos**
: Al estudiante se le dará libre acceso a las tareas en la TaskChain,  una vez que hayan completado el número requerido de intentos.';
$string['allowpaste'] = 'Permitir pegar';
$string['allowpaste_help'] = 'Si se habilita esta configuración, se les permitirá a los estudiantes el copiar y pegar y el arrastrar texto hacia las cajas de entrada de texto.';
$string['allowresume'] = 'Permitir continuar';
$string['allowresume_help'] = 'Esta configuración especifica si es que los estudiantes pueden o no retomar un intento.

**No**
: No pueden retomarse los intentos.

**Si**
: A los estudiantes se les dará la opción de continuar un intento previo que esté en progreso, o iniciar un nuevo intento.

**Forzar**
: Si existiera un intento previo que todavía estuviera en progreso, los estudiantes se verán forzados a retomar ese intento. De otra forma, pueden iniciar un nuevo intento.';
$string['allowreview'] = 'Permitir revisión';
$string['allowreview_help'] = 'Si se habilita, los estudiantes pueden revisar sus intentos de tareas despues de que la tarea esté cerrada.';
$string['allpostconditions'] = 'Todas las post-condiciones';
$string['allpreconditions'] = 'Todas las pre-condiciones';
$string['answers'] = 'Respuestas';
$string['answersshort'] = 'Res';
$string['anyattempts'] = 'Cualquier intento';
$string['anygroup'] = 'Cualquier grupo';
$string['applydefaults'] = 'Aplicar valores por defecto seleccionados';
$string['assessmenthdr'] = 'Evaluación';
$string['assessment_help'] = 'Las configuraciones de evaluación para tareas y cadenas TaskChain definen lo siguiente:

<ul>
<li>cómo son combinadas las tareas para formar un único puntaje de tarea</li>
<li>la contribución del puntaje de la tarea hacia la calificación para un intento de tarea única</li>
<li>como son combinadas las calificaciones de los intentos de cadena para obtener una única calificación de la cadena</li>
</ul>

**Puntajes de intento de tarea**
Los puntajes de intento de tarea son normalizados usando el cálculo siguiente:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>(puntaje del intento - puntaje mínimo)</tt>
<tt>------------------------------</tt><br \\>
<tt>puntaje máximo</tt>
</td>
<td align="centro" valign="mitade"><big><big>   X   </big></big></td>
<td align="centro" valign="mitade">
<tt>límite del puntaje</tt>
<tt>-----------</tt><br \\>
<tt>100</tt>
</td>
</tr></tbody></table>

**Puntaje de tarea**
Dependiendo de la configuración del método para puntear la tarea, el puntaje para la tarea es configurado al primero, el último, el más-alto, o el promedio de los puntajes del intento normalizados.

Los puntajes de tarea después son ponderados usando el cálculo siguiente

<table border="0"><tbody><tr>
<td align="centro" valign="mitade">
<tt>puntaje de tarea</tt>
</td>
<td align="centro" valign="mitade"><big><big>   X   </big></big></td>
<td align="centro" valign="mitade">
<tt>ponderación de puntaje</tt>
<tt>--------------</tt><br \\>
<tt>100</tt>
</td>
</tr></tbody></table>

**Calificación de intento de tarea**
La calificación del intento de tarea es configurada al total, el más alto o el último de los puntajes de tarea ponderados, dependiendo de la configuración del método para calificar el intento de tarea.

**Calificación de cadena**
La calificación para la cadena es configurada a la calificación primera, la última, la más alta o al promedio de calificaciones de intento de la cadena, dependiendo de la configuración del método para calificar la cadena.

Finalmente, la calificación es ponderada de acuerdo al cálculo siguiente:

<table border="0"><tbody><tr>
<td align="centro" valign="mitade">
<tt>calificación de cadena</tt>
</td>
<td align="centro" valign="mitad"><big><big>   X   </big></big></td>
<td align="centro" valign="mitade">
<tt>ponderación de calificación</tt>
<tt>-----------</tt><br \\>
<tt>100</tt>
</td>
</tr></tbody></table>';
$string['attemptcount'] = 'Conteo de intentos';
$string['attemptcount_help'] = 'Si se habilita, esta configuración especifica el máximo o mínimo número de intentos que deben de satisfacer las condiciones de puntaje y duración.

**>=** (mayor o igual a)
El mínimo número de intentos que deben de satisfacer las condiciones de puntaje y duración.

**<=** (menor o igual a)
El máximo número de intentos que deben de satisfacer las condiciones de puntaje y duración.';
$string['attemptdelay'] = 'Retraso de intento';
$string['attemptdelay_help'] = 'Si se habilita, esta configuración especifica el retraso mínimo o máximo desde los intentos, que satisface las condiciones de puntaje y número.

**>=** (mayor que o igua a)
El retraso mínimo desde los intentos que satisface las condiciones de puntaje y número.

**<=** (menor que o igual a)
El retraso máximo desde los intentos que satisface las condiciones de puntaje y número.';
$string['attemptduration'] = 'Duración del intento';
$string['attemptduration_help'] = 'Si se habilita, esta configuración especifica la duración mínima o máxima para los intentos, que satisface las condiciones de puntaje y número.

**>=** (mayor que o igua a)
La duración mínima de intentos que debe satisfacer las condiciones de puntaje y número.

**<=** (menor que o igual a)
La duración máxima de intentos que debe satisfacer las condiciones de puntaje y número.';
$string['attempted'] = 'Intentada';
$string['attemptgrade'] = 'Calificación del intento';
$string['attemptgrademethod'] = 'Método de calificación del intento';
$string['attemptgrademethod_help'] = 'Esta configuración define como es calculada la calificación para un solo intento en esta actividad TaskChain.

**Total**
: La calificación del intento será configurada a la suma de los puntajes ponderados de la tarea.

**Más alta**
: La calificación del intento será configurada al puntaje ponderado más alto de la tarea.

**Último**
: La calificación del intento será configurada al puntaje ponderado de la tarea intentada más reciente.

**Ültima (completada)**
: La calificación del intento será configurada al puntaje ponderado de la tarea más recientemente intentada cuyo estatus sea "completado". Otros puntajes de tarea serán ignorados.

**Último (tiempo agotado)**
: La calificación del intento será configurada al puntaje ponderado de la tarea más recieente cuyo estatus sea "completado" o "tiempo agotado". Otros puntajes de tarea serán ignorados.

**Último (abandonado)**
: La calificación del intento será configurada al puntaje ponderado de la tarea más reciente intentada cuyo estatus sea "completado" o "tiempo agotado" o "abandonado". Las tareas cuyo estatus sea "en progreso" serán ignoradas.';
$string['attemptlimit'] = 'Límite de intentos';
$string['attemptlimit_help'] = 'El máximo número de intentos que un estudiante puede tener en esta actividad TaskChain';
$string['attemptnumber'] = 'Número de intento';
$string['attempts'] = 'Intentos';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptscore'] = 'Puntuación del intento';
$string['attemptshdr'] = 'Restricciones del intento';
$string['attemptsunlimited'] = 'Intentos ilimitados';
$string['attempttasknow'] = 'Intentar la tarea ahora';
$string['attempttype'] = 'Tipo de intento';
$string['attempttype_help'] = 'Esta configuración especifica el tipo de intentos a ser considerados por la condición de contar intentos.

**Cualquier intento**
Cualquier intento será considerado.

**Intentos más recientes**
Solamente serán considerados los intentos más recientes..

**Intentos consecutivos**
Cualquier bloque de intentos consecutivos será considerado.';
$string['average'] = 'Promedio';
$string['averagegrade'] = 'Calificación promedio';
$string['averagescore'] = 'Puntuación promedio';
$string['bodystyles'] = 'Estilos del cuerpo';
$string['bodystylesbackground'] = 'Color e imagen del fondo';
$string['bodystylescolor'] = 'Color del texto';
$string['bodystylesfont'] = 'Tamaño y familia de tipo de letra (font)';
$string['bodystylesmargin'] = 'Márgen izquierdo y derecho';
$string['cacherecords'] = 'Registros de caché TaskChain';
$string['cannotread'] = 'No puede leerse el archivo (¡o el archivo está vacío!): {$a}';
$string['canrestartchain'] = 'Tus resultados hasta el momento han sido guardados, pero si quieres volver a hacer esta actividad después, tendrías que empezar por el principio.';
$string['canrestarttask'] = 'Tus resultados hasta el momento han sido guardados, y puedes volver a hacer  "{$a}" más tarde';
$string['canresumetask'] = 'Tus resultados hasta el momento han sido guardados, y puedes continuar "{$a}" más tarde';
$string['chain'] = 'Actividad TaskChain';
$string['chainattempt'] = 'Intento de Cadena';
$string['chainattemptnotinprogress'] = 'Intento de Cadena no en progreso';
$string['chainclosed'] = 'Lo siento, esta actividad se cerró el {$a}';
$string['chaingrade'] = 'Calificación de Cadena';
$string['chainname_help'] = 'El nombre de esta actividad TaskChain se mostrará en la página del curso';
$string['chainnotavailable'] = 'Lo siento, esta actividadno estará disponible sino hasta después de {$a}';
$string['chainrequirepasswordmessage'] = 'Para intentar esta actividad, Usted necesita conocer la contraseña';
$string['checks'] = 'Revisiones';
$string['checksomeboxes'] = 'Por favor elija algunas casillas';
$string['classreports'] = 'Reportes de clase';
$string['clearcache'] = 'Limpiar caché TaskChain';
$string['cleardetails'] = 'Limpiar detalles TaskChain';
$string['clearedcache'] = 'La caché de TaskChain se ha limpiado';
$string['cleareddetails'] = 'Los detalles de TaskChain se han limpiado';
$string['clickreporting'] = 'Habilitar reporte de click';
$string['clickreporting_help'] = 'Si se habilita, se guarda un registro de cada vez que se hace click en un botón de "pista", "ayuda" o "revisar". Esto permite que el profesor vea un reporte muy detallado que muestra el estado de las tareas en cada click. De otra forma, solamente se guarda un registro por intento en una tarea.';
$string['clues'] = 'Pistas';
$string['cnumber'] = 'Intento de cadena';
$string['columnlist'] = 'Lista de columna {$a}';
$string['columnlistid'] = 'Mostrar columnas';
$string['columnlistid_help'] = 'Este menú le permite seleccionar cual conjunto de columnas se mostrarán en esta página';
$string['columnlistschain'] = 'Listas de columnas de todas las cadenas';
$string['columnlistschains'] = 'Listas de columnas para editar cadenas';
$string['columnliststask'] = 'Listas de columna de todas las tareas';
$string['columnliststasks'] = 'Listas de columna para tareas de edición';
$string['completed'] = 'Completada';
$string['completedalltasks_close'] = 'Si Usted quiere terminar y cerrar este intento, haga clic en el botón inferior.<br />Tenga en cuenta que Usted no podrá re-hacer tareas en este intento después de que haya sido cerrado.';
$string['completedalltasks_redo'] = 'Si Usted quiere re-hacer una de las tareas en esta actividad, haga clic en el nombre de la tarea en la lista inferior.';
$string['completedalltasks_title'] = '¡Felicitaciones!<br />Usted ha completado todas las tareas en esta actividad.';
$string['completioncompleted'] = 'Requerir estatus de completado';
$string['completionmingrade'] = 'Requerir calificación mínima';
$string['completionpass'] = 'Requerir calificación aprobatoria';
$string['completionwarning'] = 'Estos campos están deshabilitados si el límite de calificación para esta actividad es "Sin calificación" o si laponderación de calificación es "Sin ponderación"';
$string['conditions'] = 'Condiciones';
$string['conditionscore'] = 'Puntaje de condición';
$string['conditionscore_help'] = 'Si se habilita, esta configuración especifica el puntaje mínimo o máximo al que se satisface  esta condición .

**>=** (mayor que o igual a)
El puntaje mínimo al que se satisface esta condición

**<=** (menor que o igual a)
El puntaje máximo al que se satisface esta condición';
$string['conditiontaskid'] = 'Tarea de condición';
$string['conditiontaskid_help'] = 'Esta configuración especifica la tarea a la cual se refiere esta pre-condición.

**Tarea previa**
Esta condición se refiere a la tarea previa en esta cadena,
de acuerdo al orden de ordenamiento.

**Tarea específica**
El profesor también puede seleccionar una tarea específica a la cual se refiere esta pre-condición.
Para evitar confusión causada por tareas con nombres idénticos,
los números del orden de tareas son añadidos a los nombres de las tareas.';
$string['configbodystyles'] = 'Por defecto, los estilos de Tema de Moodle anularán los estilos de actividad de TaskChain. Sin embargo, para cualquier estilo aquí seleccionado, a los estilos de actividad TaskChain, incluyendo aquellos definidos en archivos de fuentes de tareas, tales como los archivos de Hot Potatoes, se les dará prioridad por sobre de los estilos de los temas de Moodle.';
$string['configenablecache'] = 'Manteniendo una caché de las tareas TaskChain puede acelerar drásticamente el proporcionarles tareas a los estudiantes.';
$string['configenablecron'] = 'Especifique las horas en su zona horaria en las que puede correr el script de cron para TaskChain';
$string['configenablemymoodle'] = 'Esta configuración controla si es que las TaskChains son listadas o no en la página de Mi Moodle';
$string['configenableobfuscate'] = 'El ofuscar las cadenas del texto y URLs en el código de JavaScript hace más dificil adivinar las respuestas al ver el código fuente de la página HTML en el navegador de Internet.';
$string['configenableswf'] = 'Permitir incrustar los archivos SWF en actividades taskChain. Si se habilita, esta configuración anula  filter_mediaplugin_enable_swf.';
$string['configfile'] = 'Archivo de configuración';
$string['configfile_help'] = 'Si se especifica, el archivo de configuración será usado cuando el contenido del navegador sea generado desde el archivo fuente.

La función exacta del archivo de configuración depende del formato de salida, pero generalmente las configuraciones en la configuración anularán las configuraciones en el archivo fuente.

Al usar el mismo archivo de configuración para varias tareas, puede lograrse que las tareas compartan los mismos mensajes, esquema de colores o comportamientos.

Para tareas de **Hot Potatoes**, el archivo de configuración es un archivo  &quot;.cfg&quot;. Para tareas **Qedoc**, esta configuración no es utilizada.';
$string['configfilenotfound'] = 'Archivo de configuración no encontrado: {$a}';
$string['configframeheight'] = 'Cuando una tarea se muestra dentro de un marco, este valor es la altura (en pixeles) del marco superior que contiene la barra de navegación de Moodle.';
$string['configlocation'] = 'Ubicación del archivo de configuración';
$string['configlocation_help'] = 'La ubicación del archivo de configuración.';
$string['configlockframe'] = 'Si se habilita esta configuración, entonces el marco de navegación, si se usa, estará bloqueado de forma que no pueda desplazarse, ni cambiarse de tamaño, y que no tenga borde.';
$string['configmaxeventlength'] = 'Si una cadena TaskChain tiene tanto hora de apertura como hora de cierre especificadas, y la diferencia entre ambas es mayor que el número de días aquí especificados, entonces se añadirán dos eventos de calendario separados al calendario del curso. Para duraciones más cortas, o cuando solamente se especifica una hora, solamente se añadirá un evento de calendario. Si no se especifica ninguna de las dos horas, no se añadirá evento alguno de calendario.';
$string['configstoredetails'] = 'Si esta configuración está habilitada, entonces los detalles XML crudos de los intentos en tareas TaskChain se almacenarán en la tabla taskchain_details. Esto permite que los intentos de tareas sean re-calificados en el futuro para reflejar cambios en el sistema de puntuación de tareas de TaskChain. Sin embargo, habilitar esta opción en un sitio concurrido causará que la tabla taskchain_details crezca muy rápidamente.';
$string['confirmdeleteallpostconditions'] = '¿Está Usted seguro de querer eliminar TODAS las post-condiciones?';
$string['confirmdeleteallpreconditions'] = '¿Está Usted seguro de querer eliminar TODAS las pre-condiciones?';
$string['confirmdeleteattempts'] = '¿Está Usted seguro de querer eliminar los intentos seleccionados?';
$string['confirmdeletechainscolumnlist'] = '¿Está Usted seguro de querer eliminar esta lista de columna de cadena: {$a} ?';
$string['confirmdeletechainscolumnlists'] = '¿Está Usted seguro de querer eliminar TODAS las listas de columnas de cadena?';
$string['confirmdeletepostcondition'] = '¿Está Usted seguro de querer eliminar esta post-condición?';
$string['confirmdeleteprecondition'] = '¿Está Usted seguro de querer eliminar esta pre-condición?';
$string['confirmdeletetask'] = '¿Está Usted seguro de querer eliminar esta tarea?';
$string['confirmdeletetaskscolumnlist'] = '¿Está Usted seguro de querer eliminar esta lista de columna de tarea: {$a} ?';
$string['confirmdeletetaskscolumnlists'] = '¿Está Usted seguro de querer eliminar TODAS las listas de columnas de tarea?';
$string['confirmregradeattempts'] = '¿Está Usted seguro de querer re-calificar los intentos seleccionados?';
$string['confirmstop'] = '¿Está Usted seguro de querer navagar lejos de esta página?';
$string['consecutiveattempts'] = 'Intentos consecutivos';
$string['correct'] = 'Correcto';
$string['couldnotinsertsubmissionform'] = 'No se pudo insertar el formato de envío';
$string['delay'] = 'Espera';
$string['delay1'] = 'Espera 1';
$string['delay1_help'] = 'La espera mínimo entre el primer intento y el segundo.';
$string['delay1summary'] = 'Tiempo de espera entre el primer intento y el segundo';
$string['delay2'] = 'Espera 2';
$string['delay2_help'] = 'La espera mínimo entre intentos después del segundo intento.';
$string['delay2summary'] = 'Tiempo de espera entre intentos posteriores';
$string['delay3'] = 'Espera 3';
$string['delay3afterok'] = 'Esperar hasta que el estudiante elija OK';
$string['delay3disable'] = 'No continuar automáticamente';
$string['delay3_help'] = 'Esta configuración especifica el retraso entre la terminación de la tarea y el retorno del control de la visualización a Moodle.

**Usar retraso específico**
: el control será regresado a Moodle después del retraso especificado.

**Usar configuraciones en archivo fuente/plantilla**
: el control será regresado a Moodle después del número de segundos especificados en el archivo fuente o los archivos de plantilla para este formato de salida.

**Esperar hasta que el estudiante haga clic en OK**
: el control será regresado a Moodle después de que el estudiante haga clic el botón OK en el mensaje de finalización en la tarea.

**No continuar automáticamente**
: el control será regresado a Moodle después de que la tarea sea terminada. El estudiante será libre de navegar lejos de la página de la tarea.

Tenga en cuenta que los resultados de la tarea siempre son regresados a Moodle inmediatamente cuando la tarea es completada o abandonada, sin importar esta configuración.';
$string['delay3specific'] = 'Usar retraso de tiempo específico';
$string['delay3summary'] = 'Tiempo de espera al final de la tarea';
$string['delay3template'] = 'Usar configuraciones en archivo de orígen/plantilla';
$string['deleteallattempts'] = 'Eliminar todos los intentos';
$string['deleteallcolumnlistschain'] = 'Eliminar TODAS las listas de columna de cadena';
$string['deleteallcolumnliststask'] = 'Eliminar TODAS las listas de columna de tarea';
$string['deleteallpostconditions'] = 'Eliminar TODAS las post-condiciones';
$string['deleteallpreconditions'] = 'Eliminar TODAS las pre-condiciones';
$string['deleteattempts'] = 'Eliminar intentos';
$string['deletecolumnlistchain'] = 'Eliminar lista de columna de cadena: {$a}';
$string['deletecolumnlisttask'] = 'Eliminar lista de columna de tarea: {$a}';
$string['deletepostcondition'] = 'Eliminar una post-condición';
$string['deleteprecondition'] = 'Eliminar una pre-condición';
$string['deletetasks'] = 'Eliminar tareas seleccionadas';
$string['detailsrecords'] = 'Registros de detalles de TaskChain';
$string['d_index'] = 'Índice de discriminación';
$string['discarddetails'] = 'Descartar detalles';
$string['discarddetails_help'] = 'Si esta configuración está en "Si", los detalles XML de cada intento de esta tarea se descartarán, de otra forma los detalles XML se almacenarán en la base de datos para posibles referencias futuras';
$string['duration'] = 'Duración';
$string['duringattempt'] = 'Durante el intento';
$string['editchains'] = 'Editar cadenas';
$string['editcolumnlistschain'] = 'Editar columnas para Cadenas TaskChain';
$string['editcolumnliststask'] = 'Editar columnas para Tareas TaskChain';
$string['edittasks'] = 'Editar tareas';
$string['enablecache'] = 'Habilitar caché de TaskChain';
$string['enablecron'] = 'Habilitar cron de TaskChain';
$string['enablemymoodle'] = 'Mostrar TaskChains en Mi Moodle';
$string['enableobfuscate'] = 'Habilitar ofuscación del código del texto y reproductores de medios';
$string['enableswf'] = 'Permitir incrustación de archivos SWF en actividades TaskChain';
$string['endofchain'] = 'Fin de cadena';
$string['entry_attempts'] = 'Intentos';
$string['entrycm'] = 'Actividad previa';
$string['entrycmcourse'] = 'Actividad previa en este curso';
$string['entrycm_help'] = 'Esta configuración especifica una actividad Moodle y una calificación mínima para esa actividad, que deben obtenerse antes de que esta actividad TaskChain pueda ser intentada.

El profesor puede seleccionar una actividad específica, o una de las configuraciones siguientes de propósito general:

*Actividad previa en este curso
*Actividad previa en esta sección
*Actividad calificada previa en este curso
*Actividad calificada previa en esta sección
*TaskChain previa en este curso
*TaskChain previa en esta sección';
$string['entrycmsection'] = 'Actividad previa en esta sección del curso';
$string['entrycompletionwarning'] = 'Antes de iniciar esta actividad, Usted debe ver {$a}.';
$string['entry_dates'] = 'Fechas';
$string['entrygrade'] = 'Calificación de actividad previa';
$string['entrygradedcourse'] = 'La anterior actividad calificada en este curso';
$string['entrygradedsection'] = 'La anterior actividad calificada en esta sección de curso';
$string['entrygradewarning'] = 'Usted no puede empezar esta actividad hasta que haya obtenido {$a->entrygrade}% en {$a->entryactivity}. Actualmente su calificación para esa actividad es de {$a->usergrade}%';
$string['entry_grading'] = 'Calificación';
$string['entryoptions'] = 'Opciones de página de entrada';
$string['entryoptions_help'] = 'Estas casillas de selección habilitan y deshabilitan el mostrar ítems en la página de entrada de TaskChain.

**Nombre de cadena como título**
: si se activa, el nombre de la cadena será mostrado como l título de la página de entrada.

**Calificación**
: si se activa, la información de calificación de TaskChain será mostrada en la página de entrada.

**Fechas**
: si se activa, las fehas de apertura y cierre de TaskChain serán mostradas en la página de entrada.

**Intentos**
: si se activa, una tabla mostrará detalles de los intentos anteriores a esta TaskChain en la página de entrada. Los intentos que puedan continuarse tendrán un botón para continuarlos mostrado en la columna del extremo derecho.';
$string['entrypage'] = 'Mostrar página de entrada';
$string['entrypagehdr'] = 'Página de entrada';
$string['entrypage_help'] = '\'Debería de mostrarse a los estudiantes una página inicial antes de comenzar una actividad TaskChain?

**Si**
: a los estudiantes se les mostrará una página de entrada antes de comenzar la TaskChain. Los contenidos de la página de entrada están determinados por las opciones de la página de entrada de TaskChain.

**No**
:a los estudiantes no se les mostrará una página de entrada, y comenzarán la TaskChain inmediatamente.

Una página de entrada es siempre mostrada al profesor, para proporcionarle acceso a las páginas de los reportes y para editar tareas.';
$string['entrytaskchaincourse'] = 'TaskChain previa en este curso';
$string['entrytaskchainsection'] = 'TaskChain previa en esta sección del curso';
$string['entrytext'] = 'Texto de la página de entrada';
$string['entry_title'] = 'Nombre de la cadena igual al del título';
$string['error_formhelperclassnotfound'] = 'Clase ayudadora de formato taskChain no encontrada: {$a}';
$string['error_formhelperfilenotfound'] = 'Archivo ayudador de formato taskChain no encontrado: {$a}';
$string['error_getprivateproperty'] = 'No se puede accesar propiedad privada, {$a->property}, de {$a->class} objeto directamente. Use {$a->method} en su lugar.';
$string['error_getunknownproperty'] = 'No se puede accesar propiedad desconocida, {$a->property}, de {$a->class} objeto.';
$string['error_insertrecord'] = 'No se pudo insertar registro en tabla de base de datos: {$a}';
$string['error_missingclass'] = 'No se pudo encontrar la clase del objeto: {$a}';
$string['error_nocolumns'] = 'Por favor seleccione algunas columnas';
$string['error_nocourseid'] = 'Sin ID de curso';
$string['error_nodatabaseinfo'] = 'Sin información disponible de la base de datos';
$string['error_noinputparameters'] = 'Sin parámetros de entrada';
$string['error_norecordsfound'] = 'No se encontraron registros';
$string['error_recordclassnotfound'] = 'No se encontró la clase del registro Taskchain: {$a}';
$string['error_setprivateproperty'] = 'No se puede modificar propiedad privada, {$a->property}, de {$a->class} objeto directamente. Use {$a->method} en su lugar.';
$string['error_setpropertydirectly'] = 'No se puede modificar la propiedad {$a->property} de{$a->class} objeto directamente. Use {$a->method} en su lugar';
$string['error_setunknownproperty'] = 'No se puede modificar propiedad desconocida, {$a->property}, de {$a->class} objeto.';
$string['error_unrecognizedpageid'] = 'Pageid de TaskChain no reconocida: {$a}';
$string['error_updaterecord'] = 'No se pudo actualizar registro en tabla de base de datos: {$a}';
$string['event_attempt_started'] = 'Intento de TaskChain iniciado';
$string['event_attempt_started_description'] = 'El usuario con id "{$a->userid}" inició un intento a una tarea (task) en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_attempt_started_explanation'] = 'Un usuario justamente acaba de iniciar un intento de una actividad TaskChain';
$string['event_attempt_submitted'] = 'Intento de TaskChain enviado';
$string['event_attempt_submitted_description'] = 'El usuario con id "{$a->userid}" envió un intento a una tarea  en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_attempt_submitted_explanation'] = 'Un usuario justamente ha enviado un intento en una actividad TaskChain';
$string['event_base'] = 'Evento HotPot detectado';
$string['event_base_description'] = 'El usuario con id "{$a->userid}" initició un evento en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_base_explanation'] = 'Un evento fue detectado por el módulo TaskChain';
$string['event_chains_edited'] = 'Cadenas de TaskChain editadas';
$string['event_chains_edited_description'] = 'El usuario con id "{$a->userid}" editó todas las cadenas TaskChain ene l curso con ID "{$a->courseid}"';
$string['event_chains_edited_explanation'] = 'Un usuario recientemente ha editado todas las cadenas TaskChain en un curso';
$string['event_columnlists_edited'] = 'Listas de columnas TaskChain editadas';
$string['event_columnlists_edited_description'] = 'El usuario con id "{$a->userid}" editó listas de columnas en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_columnlists_edited_explanation'] = 'Un usuario recientemente ha editado las listas de columna para una actividad TaskChain';
$string['event_condition_edited'] = 'Condición de TaskChain editada';
$string['event_condition_edited_description'] = 'El usuario con id "{$a->userid}" editó una condición en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_condition_edited_explanation'] = 'Un usuario recientemente ha editado una condición a una actividad TaskChain';
$string['event_report_viewed'] = 'Reporte de TaskChain visto';
$string['event_report_viewed_description'] = 'El usuario con id "{$a->userid}" vió un reporte en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_report_viewed_explanation'] = 'Un usuario recientemente ha visto un reporte de intentos a una actividad TaskChain';
$string['event_task_edited'] = 'Tarea (task) de TaskChain editada';
$string['event_task_edited_description'] = 'El usuario con id "{$a->userid}" editó una tarea (task) en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_task_edited_explanation'] = 'Un usuario recientemente ha editado una tarea (task) en una actividad TaskChain';
$string['event_tasks_edited'] = 'Tareas (tasks) de TaskChain editadas';
$string['event_tasks_edited_description'] = 'El usuario con id "{$a->userid}" editó una todas las tareas (tasks) en la actividad "taskchain" con ID del módulo del curso "{$a->cmid}"';
$string['event_tasks_edited_explanation'] = 'Un usuario recientemente ha editado todas las tareas (tasks) en una actividad TaskChain';
$string['exit_areyouok'] = 'Hola, ¿todavía estás allí?';
$string['exit_attemptscore'] = 'Su puntaje para ese intento fue {$a}';
$string['exitcm'] = 'Siguiente actividad';
$string['exitcmcourse'] = 'Siguiente actividad en este curso';
$string['exitcm_help'] = 'Esta configuración especifica una actividad Moodle  para hacerse después de que sea completada esta actividad TaskChain. La calificación opcional es la calificación mínima para esta TaskChain que es necesaria para que se muestre la siguiente actividad.

El profesor puede seleccionar una actividad específica, o una de las siguientes configuraciones de propósito general:

* Actividad siguiente en este curso
* Actividad siguiente en esta sección
* Actividad calificada siguiente en este curso
* Actividad calificada siguiente en esta sección
* TaskChain siguiente en este curso
* TaskChain siguiente en sección

Si están deshabilitadas otras opciones de página de salida y el estudiante ha obtenido la calificación requerida en esta actividad TaskChain, la siguiente actividad será mostrada de inmediato. De lo contrario, al estudiante se le mostrará un enlace hacia la siguiente actividad, en el cual puede hacer clic cuando esté listo.';
$string['exitcmsection'] = 'Siguiente actividad en esta sección del curso';
$string['exit_course'] = 'Curso';
$string['exit_course_text'] = 'Regresar a la página principal del curso';
$string['exit_encouragement'] = 'Estímulo';
$string['exit_excellent'] = '¡Excelente!';
$string['exit_feedback'] = 'Salir de página de retroalimentación';
$string['exit_feedback_help'] = 'Estas opciones habilitan o deshabilitan el mostrar ítems de retroalimentación en una página de salida de TaskChain.

**Nombre de cadena como título**
: si se activa, se mostrará el nombre de la cadena como el título de la página de salida.

**Motivación**
: si se activa, se mostrará una motivación en la  página de salida. La motivación depende de la calificación de TaskChain:
: **> 90%**: ¡Excelente!
: **> 60%**: Bien hecho
: **> 0%**: Buen intento
: **= 0%**: ¿Estás OK?

**Calificación de intento de cadena**
: si se activa, se mostrará la calificación para el intento de cadena que recientemente se ha completado en la página de salida.

**Calificación de cadena**
: si se activa, se mostrará la calificación TaskChain en la página de salida.

Adicionalmente, si el método de calificación de la cadena es el más alto, se mostrará un mensaje para decirle al usuario si es que el intento más reciente fue igual o mejor que sus intentos anteriores.';
$string['exit_goodtry'] = '¡Buen intento!';
$string['exitgrade'] = 'Calificación de siguiente actividad';
$string['exitgradedcourse'] = 'La siguiente actividad calificada en este curso';
$string['exitgradedsection'] = 'La siguiente actividad calificada en esta sección de curso';
$string['exit_grades'] = 'Calificaciones';
$string['exit_grades_text'] = 'Vea sus calificaciones hasta el momento para este curso';
$string['exit_index'] = 'Índice';
$string['exit_index_text'] = 'Ir al índice de actividades';
$string['exit_links'] = 'Enlaces para salir de la página';
$string['exit_links_help'] = 'Estas opciones habilitan o deshabilitan el mostrar ciertos enlaces de navegación en una página de salida de TaskChain.

**Reintentar**
: si están permitidos intentos múltiples en esta TaskChain y el estudiante todavía tiene algunos intentos restantes, se mostrará un enlace para reintentar la TaskChain.

**Índice**
: Si se activa, se mostrará un enlace hacia la página de índice de TaskChain .

**Curso**
: Si se activa, se mostrará un enlace hacia la página del curso Moodle.

**Calificaciones**
: Si se activa, se mostrará un enlace hacia el Libro de Calificaciones de  Moodle.';
$string['exit_next'] = 'Siguiente';
$string['exit_next_text'] = 'Intentar la siguiente actividad';
$string['exit_nograde'] = '¡Usted ha completado exitosamente esta actividad!';
$string['exitoptions'] = 'Salir de opciones';
$string['exitpage'] = 'Mostrar página de salida';
$string['exitpagehdr'] = 'Página de salida';
$string['exitpage_help'] = '¿Debería de mostrarse una página de salida después de que se haya completado la tarea TaskChain?

**Si** : al estudiante se le mostrará una página de salida cuando se complete la  TaskChain. Los contenidos de la página de salida están determinados por las configuraciones para los enlaces y la retroalimentación de la página de salida de TaskChain.

**No** : al estudiante no se le mostrará una página de salida. En su lugar, se irán inmediatamente a la siguiente actividad, o regresarán a la página del curso Moodle.';
$string['exit_retry'] = 'Reintentar';
$string['exit_retry_text'] = 'Reintentar esta actividad';
$string['exittaskchaincourse'] = 'Siguiente TaskChain en este curso';
$string['exit_taskchaingrade'] = 'Su calficación para esta actividad es {$a}';
$string['exit_taskchaingrade_average'] = 'Su calificación promedio hasta ahora para esta actividad es {$a}';
$string['exit_taskchaingrade_highest'] = 'Su calificación más alta hasta ahora para esta actividad es {$a}';
$string['exit_taskchaingrade_highest_equal'] = '¡Usted igualó su máximo previo para esta actividad!';
$string['exit_taskchaingrade_highest_previous'] = 'Su calificación más alta anterior para esta actividad fue {$a}';
$string['exit_taskchaingrade_highest_zero'] = 'Usted todavía no ha obtenido calificación mayor de {$a} para esta actividad';
$string['exittaskchainsection'] = 'Siguiente TaskChain en esta sección de curso';
$string['exittext'] = 'Texto de página de salida';
$string['exit_welldone'] = '¡Bien hecho!';
$string['exit_whatnext_0'] = '¿Que quisieras hacer ahora?';
$string['exit_whatnext_1'] = 'Elije tu destino...';
$string['exit_whatnext_default'] = 'Por favor elija una de las siguientes:';
$string['feedback'] = 'Retroalimentación';
$string['feedbackdiscuss'] = 'Discutir esta tarea en el foro';
$string['feedbackformmail'] = 'Formato de retroalimentación';
$string['feedbackmoodleforum'] = 'Foro Moodle';
$string['feedbackmoodlemessaging'] = 'Mensajería Moodle';
$string['feedbacknone'] = 'Ninguna';
$string['feedbacksendmessage'] = 'Mandarle un mensaje a su instructor';
$string['feedbackshort'] = 'Ret';
$string['feedbackwebpage'] = 'Página web';
$string['filename'] = 'Nombre del archivo';
$string['filetype'] = 'Tipo del archivo';
$string['filteredchains'] = 'TaskChains que coinciden con los filtros siguientes:';
$string['filteredtasks'] = 'Tareas que coinciden con los filtros siguientes:';
$string['finishandclose'] = 'Terminar y cerrar este intento';
$string['firstattempt'] = 'Primer intento';
$string['fix_boms'] = 'Corregir BOMs';
$string['fix_installxml'] = 'Corregir db/install.xml';
$string['forceplugins'] = 'Forzar plugins multimedia';
$string['forceplugins_help'] = 'Si se habilita, los reproductores compatibles con Moodle reproducirán los archivos del tipo AVI, MPEG, MPG, MP3, MOV y WMV. De otra forma, Moodle no cambiará las configuraciones de los reproductores multimedia en la tarea.';
$string['frameheight'] = 'Altura del marco';
$string['giveup'] = 'Darse por vencido';
$string['grade'] = 'Calificación';
$string['gradeignore'] = 'Ignorar vacíos';
$string['gradeignore_help'] = 'Esta configuración especifica si los intentos nulos (intentos abandonados con puntaje de 0%) son ignorados o incluidos cuando sean calculados las calificaciones para esta TaskChain.

 **Si** Los intentos nulos son *ignorados* durante el cálculo de calificacionespara esta actividad TaskChain.

**No** Los intentos nulos *no son ignorados*, lo que significa que son *incluídos* en el cálculo de calificaciones para esta actividad TaskChain.

Los intentos nulos ocurren cuando un estudiante comienza una actividad TaskChain, pero después no intenta responder ninguna pregunta en ninguna tarea, antes de abandonar la tarea. Esos intentos pueden tener un impacto significativo en la calificación cuando el método de calificación sea Promedio, Primero o Último. En esas situaciones, el profesor puede decidir que es mejor ignorar los intentos nulos cuando se calcule la calificación.';
$string['gradelimit'] = 'Límite de calificación';
$string['gradelimit_help'] = 'Las calificaciones para los intentos de cadena están escaladas para que se ajusten al rango desde 0 hasta el límite de calificación.

La calificación máxima para una actividad de TaskChain en el libro de calificaciones de Moodle se calcula de la siguiente manera:

: calificación máxima x (ponderación de calificación / 100)';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Esta configuración define como es calculada la calificación de actividad TaskChain  a partir de las calificaciones del intento.

**Puntuación más alta**
: la calificación de la actividad será configurada a la calificación más alta para un intento en esta actividad TaskChain.

**Puntaje promedio**
: la calificación será configurada a la calificación promedio para intentos en esta actividad  TaskChain.

**Primer intento**
: la calificación será configurada a la calificación del primer intento en esta actividad TaskChain.

**Últimointento**
: la calificación será configurada a la calificación del intento más reciente en esta actividad TaskChain.';
$string['gradeweighting'] = 'Ponderación de calificación';
$string['gradeweighting_help'] = 'Las calificaciones para esta actividad TaskChain se ajustarán por escala a este número en el libro de calificaciones de Moodle.';
$string['groupid'] = 'Grupo';
$string['groupid_help'] = 'El grupo de usuarios Moodle en donde se aplica esdta condición';
$string['guestsno'] = 'Lo siento, los invitados no pueden ver ni intentar actividades TaskChain';
$string['highestgrade'] = 'Calificación más alta';
$string['highestscore'] = 'Puntaje más alto';
$string['highesttaskscore'] = 'Puntaje de tarea más alto';
$string['hints'] = 'Sugerencias';
$string['ignored'] = 'Ignorado';
$string['incorrecttask'] = 'Tarea contestada incorrectamente';
$string['inprogress'] = 'En progreso';
$string['isgreaterthan'] = 'es mayor que';
$string['islessthan'] = 'es menor que';
$string['lastaccess'] = 'Último acceso';
$string['lastattempt'] = 'último intento';
$string['lasttaskabandoned'] = 'Puntaje de la última tarea abandonada';
$string['lasttaskattempted'] = 'Puntaje de la última tarea intentada';
$string['lasttaskcompleted'] = 'Puntaje de la última tarea completada';
$string['lasttasktimedout'] = 'Puntaje de la última tarea con tiempo agotado';
$string['lockframe'] = 'Bloquear marco';
$string['manualcompletion'] = 'Finalización manual';
$string['manualcompletion_help'] = 'Esta configuración determina la acción a tomar cuando todas las tareas estén completadas, pero las post-condiciones en la tarea final NO_especifican qué hacer a continuación.

**No**
: Después de que todas las tareas hayan sido completadas, el intento de cadena automáticamente será marcado como completado y los estudiantes no podrán re-hacer tareas.

**Si**
: Después de completar todas las tareas, los estudiantes podrán re_hacer tareas y deben de hacer clic manualmente en un botón para terminar un intento de tarea.';
$string['maxeventlength'] = 'Número máximo de días para un solo evento de calendario';
$string['maximum'] = '&lt;=';
$string['mediafilter_moodle'] = 'Filtros multimedia estándar de Moodle';
$string['mediafilter_taskchain'] = 'Filtro multimedia de TaskChain';
$string['menuofalltasks'] = 'Menú de todas las tareas';
$string['menuofalltasksone'] = 'Menú de todas las tareas (un enlace)';
$string['menuofnexttasks'] = 'Menú de siguientes tareas';
$string['menuofnexttasksone'] = 'Menú de siguientes tareas (un enlace)';
$string['migratingfiles'] = 'Migrando archivos de tareas TaskChain';
$string['migratinglogs'] = 'Migrando bitácoras de TaskChain';
$string['minimum'] = '&gt;=';
$string['missingsourcetype'] = 'Añ registro Taskchain le falta el tipo-de-origen (sourcetype)';
$string['mods_help'] = '<img src="http://localhost/24/mod/taskchain/icon.gif" alt="" /> **TaskChain**

El módulo TaskChain le permite a los profesores distribuir materiales educativos interactivos vía Moodle y ver detalles de las respuestas de los estudiantes.
Los materiales son creados en la computadora del profesor usando software para autoría, como por ejemplo:
<a href="http://web.uvic.ca/hrd/halfbaked/" target="_blank">Hot Potatoes</a> y
<a href="http://www.qedoc.org/" target="_blank">Qedoc</a>, y después son subidos al curso Moodle.

Después de que los estudiantes hayan intentado las tareas, están disponibles varios reportes quee muestran como se contestaron preguntas individuales y algunas tendencias estadísticas en las puntuaciones.';
$string['modulename'] = 'CadenadeTarea (TaskChain)';
$string['modulename_help'] = 'El módulo TaskChain (CadenadeTarea) le permite a los profesores distribuir materiales interactivos de aprendizaje a sus alumnos mediante Moodle y ver reportes acerca de las respuestas de los alumnos y resultados.

Una actividad única de Taskchain consiste en una página opcional de entrada, una cadena de tareas y una página opcional de salida. Cada tarea puede ser una página web estática o una página web interactiva que les ofrece a los estudiantes texto, audio y estímulos visuales y graba sus respuestas. Las tareas son creadas en la computadora del profesor usando software para autoría y después son subidas a Moodle.

El profesor puede definir las rutas de aprendizaje mediante una cadena al añadir condiciones previas (pre-requisitos) y condiciones posteriores a las tareas. Una tarea no puede intentar realizarse hasta que todas las condiciones previas (pre-requisitos) hayan sido satisfechas. Después de que la tarea sea terminada, las condiciones posteriores definen lo que se muestra después al estudiante.

Una actividad de TaskChain puede contener tareas creadas con los siguientes programas (software) de autoría:

* Hot Potatoes (versión 6)
* Qedoc
* Xerte
* iSpring
* cualquier editor HTML';
$string['modulenameplural'] = 'TaskChains';
$string['movetasks'] = 'Mover tareas seleccionadas';
$string['myattempts'] = 'Mis intentos';
$string['name'] = 'Nombre';
$string['nameadd'] = 'Nombre';
$string['nameadd_help'] = 'El nombre puede ser texto específico ingresado por el profesor o puede ser generado automáticamente.

**Obtener del archivo fuente**
El nombre será extraído del archivo fuente.

**Usar nombre del archivo fuente**
El nombre del archivo fuente será usado como el nombre.

**Usar ruta al archivo fuente**
La ruta al archivo fuente será usada como el nombre.
Cualquier diagonal en la ruta será remplazada por espacios.

**Texto específico**
El texto específico ingresado por el profesor será usado como el nombre.';
$string['name_help'] = 'El texto específico que es mostrado a los estudiantes';
$string['navigation'] = 'Navegación';
$string['navigation_embed'] = 'Página web incrustada';
$string['navigation_frame'] = 'Marco de navegación Moodle';
$string['navigation_give_up'] = 'Un botón único para "Darse por vencido"';
$string['navigation_help'] = 'Esta configuración especifica la navegación usada en la tarea:

**Barra de navegación de Moodle*
: la Barra de navegación de Moodle será mostrada en la misma ventana que la tarea en la parte superior de la página

**marco de navegación de Moodle**
: la Barra de navegación de Moodle será mostrada en un marco separado en la parte superior de la tarea

**Página web incrustada**
: la Barra de navegación de Moodle será mostrada con la tarea incrustada adentro de la ventana

**Ayudas originalees de navegación**
: la tarea será mostrada con los botones de navegación, si hubiera, definidos adentro de la tarea

**Un botón único para "Darse por vencido"**
: la tarea será mostrada con un único botón para "Darse por vencido" en la parte superior de la página

**Ninguno**
: la tarea será mostrada sin ninguna ayuda para navegación; por lo que, cuando todas las preguntas hayan sido contestadas correctamente, dependiendo de la configuración para "¿Mostrar siguiente tarea?", Moodle, o bien, regresará a la página del curso, o mostrará la siguiente tarea';
$string['navigation_moodle'] = 'Barras de navegación estándar de Moodle (superior y lateral)';
$string['navigation_none'] = 'Nada/ninguno';
$string['navigation_original'] = 'Ayudas de navegación originales';
$string['navigation_topbar'] = 'Solamente barra de navegación superior de Moodle (sin barras laterales)';
$string['next1task'] = 'Siguiente tarea';
$string['next2task'] = 'Saltarse la siguiente tarea';
$string['next3task'] = 'Saltarse 2 tareas';
$string['next4task'] = 'Saltarse 3 tareas';
$string['next5task'] = 'Saltarse 4 tareas';
$string['nexttaskid'] = 'Siguiente tarea';
$string['nexttaskid_help'] = 'Esta configuración especifica la tarea que va a ser mostrada si se satisface la post-condición.

**Misma tarea**
Mostrar la tarea que recientemente acaba de ser completada.

**Tarea siguiente
Mostrar la tarea siguiente en la cadena, de acuerdo al orden existente.

**Saltarse tarea**
Mostrar la tarea que está después de la siguiente, de acuerdo al orden existente.

**Tarea anterior**
Mostrar la tarea anterior en esta cadena, de acuerdo al orden existente.

**Tarea no-vista**
Mostrar una tarea de esta cadena que el usuario actual todavía no haya visto.

**Tarea no-contestada**
Mostrar una tarea de esta cadena que el usuario actual todavía no haya visto, o que la haya visto pero que todavía no hubiera respuestas a ninguna de las preguntas dentro de la tarea.

**Tarea contestada incorrectamente**
Mostrar una tarea que todavía no haya sido completada correctamente. Por ejemplo, una tarea para la cual el puntaje no sea del 100%.

**Tarea aleatoria**
Mostrar una tarea aleatoria dentro de esta cadena.
La tarea podría ya haber sido intentada.

**Menú de tareas siguientes**
Mostrar un menú de tareas de esta cadena que, de acuerdo a las pre-condiciones y otras restricciones para el acceso para las tareas, estén disponibles para el estudiante.

**Menú de todas las tareas**
Mostrar un menú de todas las tareas de esta cadena.
Las tareas que estén disponibles para estudiantes tendrán enlaces hacia el inicio de la tarea.
Las tareas que no estén disponibles no tendran tal enlace.

**Final de la cadena**
Se ha alcanzado el final de la cadena. el estatus de la cadena se configurará a completada y, dependiendo de las configuraciones de la página de salida de la cadena, al estudiante se le mostrará, ya sea la página de salida, la siguiente actividad de Moodle, o la página del curso de Moodle.

**Tarea específica**
El profesor puede también seleccionar una tarea específica como la tarea siguiente. Para evitar confusión causada por tareas con nombres idénticos, se añaden los números de ordenamiento de la tarea a los nombres de las tareas.';
$string['noactivity'] = 'Sin actividad';
$string['nograde'] = 'Sin calificación';
$string['nolastchainattempt'] = 'No se encontró el registro de cadena previa';
$string['nolasttaskattempt'] = 'No se encontró el registro de actividad previa';
$string['nomorechainattempts'] = 'Lo sentimos, Usted ya no tiene más intentos disponibles para esta actividad';
$string['nomoretaskattempts'] = 'Lo sentimos, Usted ya no tiene más intentos disponibles para esta tarea';
$string['noresponses'] = 'No se encontró información sobre preguntas y respuestas individuales';
$string['noreview'] = 'Lo siento, Usted no tiene permitido ver detalles de este intento de tarea.';
$string['noreviewafterclose'] = 'Lo siento, esta tarea se cerró. Usted ya no tiene permitido ver detalles de este intento de tarea.';
$string['noreviewbeforeclose'] = 'Lo siento, Usted ya no tiene permitido ver detalles de este intento de tarea hasta después de {$a}.';
$string['noscore'] = 'Sin puntaje';
$string['nosourcefilesettings'] = 'Al registro TaskChain le falta información del archivo de orígen';
$string['notaskchains'] = 'No se encontraron TaskChains';
$string['notasksforyou'] = 'Lo siento, ahorita no hay tareas para que tu hagas.';
$string['notasksinchain'] = 'No hay tareas en esta cadena TaskChain';
$string['notattemptedyet'] = 'Todavía no intentada';
$string['notavailable'] = 'Lo siento, esta actividad actualmente ya no está disponible para Usted.';
$string['notendswith'] = 'no termina con';
$string['notisempty'] = 'no está vacío';
$string['notisequalto'] = 'no es igual a';
$string['notstartswith'] = 'no comienza con';
$string['or'] = 'o';
$string['orless'] = '{$a} (o menos)';
$string['ormore'] = '{$a} (or más)';
$string['outputformat'] = 'Formato de salida';
$string['outputformat_best'] = 'Mejor';
$string['outputformat_help'] = 'El formato de salida especifica como se presentará el contenido al estudiante.

Los formatos de salida que están disponibles dependen del tipo de archivo de orígen. Algunos tipos de archivo de orígen solamente tienen un tipo de formato de salida, mientras que otros tipos de archivos de orígen tienen varios formatos de salida.

La "mejor" configuración mostrará el contenido empleando el formato de salida óptimo para el navegador del estudiante.';
$string['outputformat_hp_6_jcloze_html'] = 'JCloze (v6) desde html';
$string['outputformat_hp_6_jcloze_html_dropdown'] = 'Desplegable desde HTML';
$string['outputformat_hp_6_jcloze_html_findit_a'] = 'FindIt (a) desde HP6 JCloze html';
$string['outputformat_hp_6_jcloze_html_findit_b'] = 'FindIt (b) desde HP6 JCloze html';
$string['outputformat_hp_6_jcloze_html_jgloss'] = 'JGloss desde HTML';
$string['outputformat_hp_6_jcloze_xml_anctscan'] = 'ANCT-Scan desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_anctscan_autoadvance'] = 'ANCT-Scan desde HP6 JCloze xml (Auto-avanzar)';
$string['outputformat_hp_6_jcloze_xml_dropdown'] = 'Desplegable (DropDown) desdeHP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_a'] = 'FindIt (a) desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_findit_b'] = 'FindIt (b) desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_jgloss'] = 'JGloss desde HP6 JCloze xml';
$string['outputformat_hp_6_jcloze_xml_v6'] = 'JCloze (v6) desde HP6 xml';
$string['outputformat_hp_6_jcloze_xml_v6_autoadvance'] = 'JCloze (v6) desde HP6 xml (Auto-avanzar)';
$string['outputformat_hp_6_jcross_xml_v6'] = 'JCross (v6) desde xml';
$string['outputformat_hp_6_jmatch_html'] = 'JMatch (v6) desde html';
$string['outputformat_hp_6_jmatch_xml_flashcard'] = 'JMatch (flashcard) desde xml';
$string['outputformat_hp_6_jmatch_xml_jmemori'] = 'JMemori desde xml';
$string['outputformat_hp_6_jmatch_xml_sort'] = 'JMatch Ordenar (\'\'JMatch Sort \'\') desde xml';
$string['outputformat_hp_6_jmatch_xml_v6'] = 'JMatch (v6) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus'] = 'JMatch (v6+) desde xml';
$string['outputformat_hp_6_jmatch_xml_v6_plus_duplicates'] = 'JMatch (v6+) desde xml (permitir duplicados)';
$string['outputformat_hp_6_jmix_html'] = 'JQuiz (v6) desde html';
$string['outputformat_hp_6_jmix_xml_v6'] = 'JMix (v6) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus'] = 'JMix (v6+) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_deluxe'] = 'JMix (v6+ con prefijo, sufijjo y distractores) desde xml';
$string['outputformat_hp_6_jmix_xml_v6_plus_keypress'] = 'JMix (v6+ con tecla apretada) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6'] = 'JQuiz (v6) desde xml';
$string['outputformat_hp_6_jquiz_xml_v6_autoadvance'] = 'JQuiz (v6) desde xml (Auto-avance)';
$string['outputformat_hp_6_jquiz_xml_v6_exam'] = 'JQuiz (v6) desde xml (Examen)';
$string['outputformat_hp_6_jquiz_xml_v6_intro'] = 'JQuiz (v6) desde xml (Intro)';
$string['outputformat_hp_6_rhubarb_html'] = 'Rhubarb (v6) desde html';
$string['outputformat_hp_6_rhubarb_xml'] = 'Rhubarb (v6) desde xml';
$string['outputformat_hp_6_sequitur_html'] = 'Sequitur (v6) desde html';
$string['outputformat_hp_6_sequitur_html_incremental'] = 'Sequitur (v6) desde html, puntaje incremental';
$string['outputformat_hp_6_sequitur_xml'] = 'Sequitur (v6) desde xml';
$string['outputformat_hp_6_sequitur_xml_incremental'] = 'Sequitur (v6) desde xml, puntaje incremental';
$string['outputformat_html_ispring'] = 'Archivo iSpring HTML';
$string['outputformat_html_xerte'] = 'Archivo Xerte HTML';
$string['outputformat_html_xhtml'] = 'Archivo HTML estándar';
$string['outputformat_qedoc'] = 'Archivo Qedoc';
$string['passworderror'] = 'La contraseña escrita era incorrecta';
$string['penalties'] = 'Castigos';
$string['pending'] = 'Pendieente de finalización';
$string['percent'] = 'Porcentaje';
$string['pluginadministration'] = 'Administración de TaskChain';
$string['pluginname'] = 'Módulo TaskChain';
$string['postcondition'] = 'Post-condición';
$string['postconditions'] = 'Post-condiciones';
$string['postconditions_help'] = 'Después de terminar la tarea, será tomada la acción de la *primera* post-condición coincidente en la lista.';
$string['precondition'] = 'Pre-condición';
$string['preconditions'] = 'Pre-condiciones';
$string['preconditions_help'] = 'Esta tarea solamente puede ser tomada si *todas* las pre-condiciones en esta lista están satisfechas.';
$string['pressoktocontinue'] = 'Presione OK para cotinuar, o Cancelar para permanecer en la página actual';
$string['preview'] = 'Vista previa';
$string['previewchainnow'] = 'Previsualizar actividad TaskChain ahora';
$string['previewtasknow'] = 'Previsualizar tarea ahora';
$string['previoustask'] = 'Tarea previa';
$string['questionshort'] = 'Q-{$a}';
$string['randomtask'] = 'Tarea aleatoria';
$string['reattempttask'] = 'Re-intentar tarea';
$string['recentattempts'] = 'Intentos más recientes';
$string['redo'] = 'Re-hacer';
$string['reordertasks'] = 'Re-ordenar tareas';
$string['requirepassword'] = 'Requerir contraseña';
$string['requirepassword_help'] = 'Si se especifica una contraseña, un estudiante deberá escribirla para poder intentar el examen.';
$string['requiresubnet'] = 'Requerir dirección de red';
$string['requiresubnet_help'] = 'El acceso al examen puede restringirse a subredes particulares de la LAN o el Internet, al especificar una lista (separada por comas) de números de direcciones IP parciales o completas. Esto puede ser útil para un examen supervisado (vigilado), para asegurarse que solamente las personas dentro de cierto lugar puedan accesar al examen.';
$string['responses'] = 'Respuestas';
$string['responsesshort'] = 'R';
$string['resume'] = 'Resumen';
$string['reviewafterattempt'] = 'Permitir revisión después del intento';
$string['reviewafterclose'] = 'Permitir revisión después de que cierre HotPot';
$string['reviewduringattempt'] = 'Permitir revisión después del intento';
$string['reviewoptions'] = 'Revisar opciones';
$string['sametask'] = 'Misma tarea';
$string['score'] = 'Puntaje';
$string['scoreignore'] = 'Ignorar vacíos';
$string['scoreignore_help'] = 'Esta configuración especifica si los intentos nulos (intentos abandonados con puntaje de 0%) son ignorados o incluidos cuando sean calculados los puntajes para esta tarea.

**Si**
Los intentos nulos son *ignorados* durante el cálculo de puntajes para esta tarea.

**No**
Los intentos nulos *no son ignorados*, lo que significa que son *incluídos* en el cálculo de puntajes para esta tarea.

Los intentos nulos ocurren cuando un estudiante comienza una tarea, pero después no intenta responder ninguna pregunta antes de abandonar la tarea. Esos intentos pueden tener un impacto significativo en la puntuación cuando el método de puntuación sea Promedio, Primero o Último. En esas situaciones, el profesor puede decidir que es mejor ignorar los intentos nulos cuando se calcule el puntaje.';
$string['scorelimit'] = 'Límite de puntaje';
$string['scorelimit_help'] = 'Esta configuración especifica el puntaje máximo para esta tarea. Todos los intentos de tarea se asume que son porcentajes y serán ajustados de forma tal que ningún puntaje de tarea sea mayor que el límite de puntaje de la tarea.';
$string['scoremethod'] = 'Método de puntuación';
$string['scoremethod_help'] = 'Esta configuración define cómo se calcula la puntuación de la tarea a partir de los intentos de tarea.

 **La más alta** La puntuación de la tarea se configurará a la puntuación más alta para un intento en esta tarea.

 **Promedio** La puntuación de la tarea se configurará a la puntuación promedio para los intentos en esta tarea.

**Primera** La puntuación de la tarea se configurará a la puntuación del primer intento en esta tarea.

**Última** La puntuación de la tarea se configurará a la puntuación del intento más reciente para esta tarea.';
$string['scores'] = 'Puntajes';
$string['scoresshort'] = 'Pts';
$string['scoreweighting'] = 'Ponderación del puntaje';
$string['scoreweighting_help'] = 'La ponderación del puntaje es la contribución del puntaje para esta tarea hacia la calificación del intento de la cadena.

Si varias tareas requieren igual ponderación, entonces debería de dárseles la misma categoría de ponderación.';
$string['securityhdr'] = 'Restricciones de seguridad';
$string['selectattempts'] = 'Seleccionar intentos';
$string['selectedchains'] = 'TaskChains seleccionadas en este curso';
$string['selectedtasks'] = 'Tareas seleccionadas en esta TaskChain';
$string['showdescription'] = 'Mostrar descripción';
$string['showdescription_help'] = 'Si esta configuración está habilitada, el texto de entrada de abajo aparecerá en la página del curso como la descripción para esta actividad.';
$string['showerrormessage'] = 'Error de TaskChain: {$a}';
$string['showpopup'] = 'Ventana';
$string['showpopup_help'] = '**Misma ventana**
La actividad TaskChain se mostrará en la misma ventana que la página del curso Moodle

**Nueva ventana**
La actividad TaskChain se mostrará en una ventana emergente. Algunas características de la ventana emergente pueden habilitarse o deshabilitarse con casillas.
El ancho y alto requeridos para la ventana emergente se especifican como el número de pixeles.';
$string['singlefieldhdr'] = 'Campo único';
$string['sortdirection'] = 'Dirección de ordenamiento';
$string['sortdirection_help'] = 'La dirección en la que Usted desea ordenar estos registros';
$string['sortfield'] = 'Campo pra ordenar';
$string['sortfield_help'] = 'El campo sobre del que Usted desea ordenar estos registros';
$string['sortincrement'] = 'Incremento para ordenar';
$string['sortincrement_help'] = 'Cuando las tareas sean re-ordenadas, los números de orden se incrementarán por la cantidad auií especificada';
$string['sortorder'] = 'Orden para ordenar';
$string['sortorder_help'] = 'El orden de esta tarea dentro de esta cadena';
$string['sourcefile'] = 'Archivo de orígen';
$string['sourcefile_help'] = 'Esta configuración especifica el archivo que contiene el contenido que será mostrado a los estudiantes.

Usualmente el archivo fuente será creado afuera de Moodle, y después será subido al área de archivos de un curso Moodle.
Podría ser un archivo HTML, o podría ser otro tipo de archivo que haya sido creado con software de autoría, como por ejemplo Hot Potatoes o Qedoc.

El archivo fuente puede ser especificado como parte de una carpeta y ruta hacia el archivo en el área de archivos de curso de Moodle, o podría ser una URL que comienza con http:// o https://

Para materiales Qedoc, el archivo fuente debe de ser la URL de un módulo  Qedoc que ha sido subido al servidor Qedoc.

* por ejemplo http://www.qedoc.net/library/ABCDE_123.zip
* Para información acerca de subir módulos Qedoc vea: [Qedoc documentation: Uploading_modules](http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string['sourcefilenotfound'] = 'El archivo de orígen no se encontró (o estaba vacío): {$a}';
$string['sourcelocation'] = 'Ubicación del archivo de orígen';
$string['sourcelocation_help'] = 'La ubicación del archivo de orígen';
$string['sourcetype'] = 'Tipo del archivo de orígen';
$string['sourcetype_help'] = 'El tipo de este archivo de orígen';
$string['startchainattempt'] = 'Iniciar nuevo intento de cadena';
$string['startofchain'] = 'Inicio de cadena';
$string['starttaskattempt'] = 'Iniciar nuevo intento de tarea';
$string['status'] = 'Status';
$string['stopbutton'] = 'Mostrar botón para detener';
$string['stopbutton_help'] = 'Si se habilita esta configuración, se insertará un botón para \'detener\' dentro de la tarea.

Si un alumno elige el botón para detener, los resultados hasta ese momento se regresarán a Moodle y el status del intento de la tarea se pondrá en \'abandonada\'.

El texto que se muestra en el botón para detener puede ser una de las frases pre-hechas de los paquetes de idioma de Moodle, o el profesor puede especificar su propio texto para el botón.';
$string['stopbuttonlangpack'] = 'Del paquete de idioma';
$string['stopbuttonspecific'] = 'Usar texto específico';
$string['stoptext'] = 'Texto del botón de detener';
$string['stoptext_help'] = 'Este texto es usado si la configuración para "Mostrar botón detener" especifica "Sí - Usar texto específico"';
$string['storedetails'] = 'Guardar XML con los detalles crudos de los intentos de TaskChain';
$string['studentfeedback'] = 'Retroalimentación al estudiante';
$string['studentfeedback_help'] = 'Si se habilita, será mostrada una ventana emergente de retroalimentación cuando el estudiante haga clic en el botón para "Revisar". La ventana de retroalimentación le permite a los estudiantes discutir esta tarea con su profesor y con sus compañeros de clase en una de las formas siguientes:

**Página web**
: requiere la URL de la página web; por ejemplo http://miservidor.com/feedbackform.html

**formato de retroalimentación**
: requiere la URL del \'\'script\'\' del formato; por ejemplo http://miservidor.com/cgi-bin/formmail.pl

**Foro de Moodle**
: será mostrado el índice del foro para el curso

**Mensajería de Moodle **
: será mostrada la ventana de la mensajería instantánea de Moodle. Si el curso tiene varios profesores, al estudiante se le pedirá que seleccione un profesor antes de que aparezca la ventana de mensajería.';
$string['studentfeedbackurl'] = 'URL de retroalimentación al estudiante';
$string['submits'] = 'Envíos';
$string['subplugintype_taskchainattempt'] = 'Formato de salida';
$string['subplugintype_taskchainattempt_plural'] = 'Formatos de salida';
$string['subplugintype_taskchainreport'] = 'Reporte';
$string['subplugintype_taskchainreport_plural'] = 'Reportes';
$string['subplugintype_taskchainsource'] = 'Archivo de orígen';
$string['subplugintype_taskchainsource_plural'] = 'Archivos de orígen';
$string['task'] = 'Tarea';
$string['taskaction_help'] = 'Estas opciones especifican cual acción se tomará cuando se haga clic en el botón para "Ir"..

**Re-ordenar tareas**
: Las tareas serán re-ordenadas de acuerdo a los nuevos números de ordenamiento.

**Añadir (más) tareas**
: Se mostrará una nueva página, a partir de la cual Usted puede añadir una o más tareas nuevas a esta actividad TaskChain.

**Mover tareas**
: Las tareas seleccionadas serán movidas a un  lugar diferente en esta actividad TaskChain, o hacia otra actividad TaskChain.

**Aplicar valores por defecto seleccionados**
: Los valores por defecto seleccionados serán aplicados a las tareas i.

**Eliminar tareas**
: Las tareas seleccionadas serán eliminadas de la actividad TaskChain..';
$string['taskattempt'] = 'Intento de tarea (task)';
$string['taskattemptnotinprogress'] = 'Intento de tarea NO en progreso';
$string['taskchain:addinstance'] = 'Añadir una nueva actividad TaskChain';
$string['taskchain:attempt'] = 'Intentar una actividad TaskChain y enviar resultados';
$string['taskchain:deleteallattempts'] = 'Eliminar cualquier intento del usuario en una actividad TaskChain';
$string['taskchain:deletemyattempts'] = 'Eliminar sus propios intentos en una actividad TaskChain';
$string['taskchain:ignoretimelimits'] = 'Ignorar límites de tiempo en una actividad TaskChain';
$string['taskchain:manage'] = 'Cambiar las configuraciones de una actividad TaskChain';
$string['taskchainname'] = 'Nombre de TaskChain';
$string['taskchain:preview'] = 'Previsualizar una actividad TaskChain';
$string['taskchain:regrade'] = 'Re-calificar una actividad TaskChain';
$string['taskchain:reviewallattempts'] = 'Ver cualquier intento de usuario en una actividad TaskChain';
$string['taskchain:reviewmyattempts'] = 'Ver sus propios intentos en una actividad TaskChain';
$string['taskchain:view'] = 'Ver la página de entrada de una actividad TaskChain';
$string['taskclosed'] = 'Lo siento, esta tarea se cerró en {$a}';
$string['taskname'] = 'Nombre de tarea';
$string['tasknameadd_help'] = 'Los nombres de tareas pueden ser derivados desde texto específico ingresado por el profesor o pueden ser generados automáticamente.

. **Obtener del archivo fuente**
Los nombres de las tareas serán extraídos del archivo fuente.

**Usar nombre del archivo fuente**
Los nombres del archivo fuente serán usados como los nombres de las tareas.

**Usar ruta al archivo fuente**
La ruta al archivo fuente será usada como el nombre para la tarea.
Cualquier diagonal en la ruta será remplazada por espacios.

**Texto específico**
Un nombre único para cada tarea será creado al agregar el número de ordenamiento de la tarea al texto específico ingresado por el profesor.';
$string['taskname_help'] = 'texto de ayuda para nombre de Tarea';
$string['tasknames'] = 'Nombres de Tarea';
$string['tasknames_help'] = 'Los nombres de tareas pueden ser derivados desde texto específico ingresado por el profesor o pueden ser generados automáticamente.

. **Obtener del archivo fuente**
Los nombres de las tareas serán extraídos del archivo fuente.

**Usar nombre del archivo fuente**
Los nombres del archivo fuente serán usados como los nombres de las tareas.

**Usar ruta al archivo fuente**
La ruta al archivo fuente será usada como el nombre para la tarea.
Cualquier diagonal en la ruta será remplazada por espacios.

**Texto específico**
Un nombre único para cada tarea será creado al agregar el número de ordenamiento de la tarea al texto específico ingresado por el profesor.';
$string['tasknotavailable'] = 'Lo siento, esta tarea no estará disponible para Usted sino hasta después de {$a}.';
$string['taskposition'] = 'Posición de tarea';
$string['taskrequirepasswordmessage'] = 'Para intentar esta tarea, Usted necesita conocer la contraseña';
$string['tasks'] = 'Tareas';
$string['taskscore'] = 'Puntaje de Tarea (Task)';
$string['tasktype'] = 'Tipo de tarea';
$string['textsourcefile'] = 'Obtener del archivo orígen';
$string['textsourcefilename'] = 'Usar nombre del archivo orígen';
$string['textsourcefilepath'] = 'Usar ruta del archivo orígen';
$string['textsourcespecific'] = 'Usar texto específico';
$string['textsourcetaskname'] = 'Usar el nombre de la actividad';
$string['timeclose'] = 'Disponible hasta';
$string['timedout'] = 'Se acabó el tiempo';
$string['timehdr'] = 'Restricciones de tiempo';
$string['timelimit'] = 'Límite de tiempo';
$string['timelimitexpired'] = 'El límite de tiempo para este intento ha caducado';
$string['timelimit_help'] = 'Esta configuración especifica la duración máxima de un solo intento.

**Usar configuraciones en archivo fuente/plantilla**
: el límite de tiempo será tomado del archivo fuente o de los archivos de plantilla para este formato de salida.

**Usar tiempo específico**
: el límite de tiempo especificado en la página de configuraciones de tarea de TaskChain será usado como el tiempo límite para un intento en esta tarea. Esta configuración anula los límites de tiempo en el archivo fuente, el archivo de configuración, o los archivos de plantilla para este formato de salida.

**Deshabilitar**
: no se configurará límite de tiempo para intentos en esta tarea.

Tenga en cuenta que si un intento fuera continuado, el cronómetro de tiempo continúa desde el momento en el que el intento fue pausado anteriormente.';
$string['timelimitspecific'] = 'Usar tiempo específico';
$string['timelimitsummary'] = 'Límite de tiempo para un intento';
$string['timelimittemplate'] = 'Usar configuraciones del archivo de orígen/plantilla';
$string['timeopen'] = 'Disponible a partir de';
$string['timeopenclose'] = 'Horas de aperrtura y cierre';
$string['timeopenclose_help'] = 'Usted puede especificar las horas en que esta tarea sea accesible para quienes hacen intentos. Antes de la hora de apertura, y después de la hora de cierre, la tarea estará no-disponible.';
$string['title'] = 'Título';
$string['titleappendsortorder'] = 'Agregar órden';
$string['title_help'] = 'Esta configuración especifica el título a mostrar en la página web.

**Nombre de la actividad TaskChain**
: el nombre de esta actividad TaskChain se mostrará como el título de la página web.

**Obtener del archivo fuente**
: el título, si existiera, definido en el archivo fuente, se usará como el título de la página web.

**Usar nombre del archivo fuente**
: el nombre del archivo fuente, excluyendo los nombres de las carpetas, se usará como el título para la página web.

**Usar ruta al archivo fuente**
: la ruta al archivo fuente, incluyendo cualquier nombre de carpeta, se usará como el título de la página web.

**Usar texto específico**
: el texto en la caja_de_texto será usado como título de la página web.';
$string['titleprependchainname'] = 'Anteponer el nombre de la cadena';
$string['titletext'] = 'Texto del título';
$string['titletext_help'] = 'Este texto es usado si la configuración de "Título" es "Usar texto especificado"';
$string['tnumber'] = 'Intento de tarea';
$string['toolsindex'] = 'Índice de Herramientas TaskChain';
$string['totaltaskscores'] = 'Total de puntajes de tarea';
$string['unansweredtask'] = 'Tarea no contestada';
$string['unseentask'] = 'Tarea no vista';
$string['updated'] = 'Actualizada';
$string['updatinggrades'] = 'Actualizando calificaciones de TaskChain';
$string['usefilters'] = 'Usar filtros';
$string['usefilters_help'] = 'Si se habilita esta configuración, el contenido será pasado a través de los filtros de Moodle antes de enviarse al navegador de internet.';
$string['useglossary'] = 'Usar glosario';
$string['useglossary_help'] = 'Si esta configuración se habilita, el contenido será pasado a través del filtro de Auto-enlazado del Glosario de Moodle antes de enviarse al navegador de internet.

Tenga en cuenta que esta configuración anula la configuración de la administración del sitio para habilitar o deshabilitar el filtro de Auto-enlazar del Glosario.';
$string['usemediafilter'] = 'Usar filtro multimedia';
$string['usemediafilter_help'] = 'Esta configuración especifica el filtro de medios a usar.

**Ninguno**
: el contenido no será pasado por ningun filtro.

**Filtros de medios estándares de Moodle**
: el contenido será pasado a través de los filtros de medios estándares de Moodle. Estos filtros buscan enlaces hacia tipos comunes de archivos de sonido y video, y convierten estos enlaces a reproductores de medios apropiados.

**Filtro de medios de TaskChain**
: el contenido será pasado a través de filtros que detectan enlaces, imágenes, sonidos y videos a ser usados, utilizando una notación de paréntesis cuadrados.

La notación de paréntesis cuadrados tiene la sintaxis siguiente:
<code>[url reproductor ancho altura opcciones]</code>

**url**
: la URL relativa o absoluta del archivo de medio

**reproductor** (opcional)
:el nombre del reproductor a ser insertado. El valor por defecto para esta configuración es "moodle". La versión estándar del módulo TaskChain tambien ofrece los siguientes reproductores:
: **dew**: un reproductor mp3
: **dyer**: reproductor mp3 por Bernard Dyer
: **hbs**: reproductor mp3 de Half-Baked Software
: **image**: insertar una imagen adentro de la página web
: **link**: insertar un enlace hacia otra página web

**ancho** (opcional)
: el ancho requerido del reproductor

**altura** (opcional)
: la altura requerida del reproductor. Si se omite, este valor será configurado a lo mismo que la configuración del ancho.

**opciones** (opcional)
: una lista separada por comas que será pasada al reproductor. Cada opción puede ser un simple interruptor si/no, o una pareja de valores nombrados.
: *nombre*
: *nombre=valor*
: *nombre="algun valor con espacios"*';
$string['viewreports'] = 'Ver reportes para {$a} usuario(s)';
$string['views'] = 'Vistas';
$string['weighting'] = 'Ponderación';
$string['weightingequal'] = 'Ponderación igual';
$string['weightingnone'] = 'Sin ponderación';
$string['window'] = 'Ventana';
$string['windowdirectories'] = 'Mostrar los enlaces de directorio';
$string['windowheight'] = 'Altura por defecto de la ventana (en pixeles)';
$string['window_help'] = 'Mostrar la actividad en la ventana principal de Moodle, o en una ventana emergente.

**Misma ventana** : La actividad TaskChain se mostrará en la misma ventana que la página del curso Moodle.

**Nueva ventana** : La actividad TaskChain se mostrará en una ventana emergente. Algunas características de la ventana emergente pueden habilitarse o deshabilitarse con casillas seleccionables (check boxes). La altura y ancho requeridos  de la ventana emergente están especificadas como un número de pixeles.';
$string['windowlocation'] = 'Mostrar la barra de ubicación';
$string['windowmenubar'] = 'Mostrar la barra del menú';
$string['windowmoodlebutton'] = 'Mostrar botón para cerrar ventana';
$string['windowmoodlefooter'] = 'Mostrar pie de página de Moodle';
$string['windowmoodleheader'] = 'Mostrar encabezado de Moodle';
$string['windowmoodlenavbar'] = 'Mostrar barra de navegación de Moodle';
$string['windownew'] = 'Nueva ventana';
$string['windowresizable'] = 'Permitir que a la nueva ventana se le cambie el tamaño';
$string['windowsame'] = 'Misma ventana';
$string['windowscrollbars'] = 'Permitir que la nueva ventana pueda desplazarse';
$string['windowstatus'] = 'Mostrar la barra de status';
$string['windowtoolbar'] = 'Mostrar la barra de herramientas';
$string['windowwidth'] = 'Ancho por defecto de la ventana (en pixeles)';
$string['wrong'] = 'Equivocado';
$string['youneedtoenrol'] = 'Usted necesita inscribirse en este curso antes de poder intentar esta actividad de Cadena-de-Tarea (Taskchain)';
$string['zeroduration'] = 'Sin duración';
$string['zerograde'] = 'Calificación de cero';
$string['zeroscore'] = 'Puntuación de cero';
