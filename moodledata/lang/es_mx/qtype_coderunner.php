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
 * Strings for component 'qtype_coderunner', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   qtype_coderunner
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aborted'] = 'Se abortó la prueba a causa de un error.';
$string['ace-language'] = 'Lenguage Ace';
$string['ace_ui_notready'] = 'Editor Ace no listo. ¿Tal vez desea re-cargar página?';
$string['addingcoderunner'] = 'Añadiendo una nueva pregunta CodeRunner';
$string['advanced_customisation'] = 'Personalización avanzada';
$string['ajax_error'] = '*** ¡ ERROR AJAX, NO GUARDE ESTO ! ***';
$string['allok'] = '¡Pasó todas las pruebas!';
$string['allornone'] = 'Debe proporcionarse código de prueba, ya sea para todos los casos_a_probar o para ninguno.';
$string['allornothing'] = 'Calificación todo-o-nada';
$string['allornothing_help'] = 'Si se marca "Todo o nada", se deben cumplir todos los casos de prueba para que el envío gane cualquier calificación. De lo contrario, la puntuación se obtiene sumando los puntos para el caso de prueba que pase y expresando esto como una fracción del puntaje máximo posible.

Los puntajes por caso de prueba se pueden especificar solo si la casilla de verificación todo o nada está desmarcada.

Si utiliza una plantilla que otorgue puntuaciones a los casos de prueba, generalmente se debe desmarcar \'Todo o nada\'.';
$string['allowattachments'] = 'Permitir anexos';
$string['allowattachments_help'] = 'Si es que se les permite a los estudiantes que añadan anexos a sus envíos y, si así fuera, cuantos. Los anexos son copiados al directorio de trabajo del ejecutable y una lista separada por comas de los nombres de los anexos es proporcionada a la plantilla en la variable Twig {{ ATTACHMENTS }}. Advertencia: el permitir anexos podría tener implicaciones en desempeño o espacio de disco para los servidores Moodle y Jobe con clases grandes o con anexos grandes. el servidor Moodle, y los servidores Jobe anteriores a Febrero del 2019 almacenan todos los anexos indefinidamente.';
$string['allowedfilenames'] = 'Nombres de archivo permitidos';
$string['allowedfilenamesregex'] = 'Nombres de archivo permitidos (expresión regular)';
$string['allowmultiplestdins'] = 'Permitir múltiples stdins';
$string['answer'] = 'Respuesta';
$string['answerbox_group'] = 'Caja de respuesta';
$string['answerbox_group_help'] = 'Establezca el número de filas para asignar para la caja de respuesta. Esto configura la altura mínima del elemento de la Interfaz del Usuario (por ejemplo Ace) que controla la caja de respuesta. El ancho es configurado para que se ajuste a la ventana. Si la respuesta desborda la caja verticalmente u horizontalmente, aparecerán barras para desplazamiento.';
$string['answerboxlines'] = 'Filas';
$string['answer_help'] = 'Una respuesta de muestra puede ingresarse aquí y usarse para verificar por el autor de la pregunta; y opcionalmente es mostrada a los estudiantes durante la revisión. También lo usa el script del probador masivo. Se revisa que esté correcta una respuesta no-vacía al guardarla, a  menos que se deje des-seleccionada  \'Validar al guardar\'.';
$string['answerpreload'] = 'Precarga de caja de respuesta';
$string['answerpreload_help'] = 'El texto aquí proporcionado será precargado dentro de la caja de respuesta del estudiante.';
$string['answerprompt'] = 'Respuesta:';
$string['answerrequired'] = 'Por favor, proporcione una respuest que no esté vacía';
$string['answertooshort'] = 'Respuesta demasiado corta. Debe ser de al menos  {$a} caracteres.';
$string['asolutionis'] = 'Solución del autor a  la pregunta:';
$string['atleastonetest'] = 'Usted debe de proporcionar al menos un caso de prueba para esta pregunta.';
$string['attachmentoptions'] = 'Opciones de anexo (experimental)';
$string['attachmentsoptional'] = 'Los anexos son opcionales';
$string['attachmentsrequired'] = 'Requerir anexos';
$string['attachmentsrequired_help'] = 'Esta opción especifica el número máximo de anexos requeridos para que una respuesta sea calificada.';
$string['autotagbycategoryindextitle'] = 'Automarcador de pregunta CodeRunner';
$string['autotagbycategorytitle'] = 'Automarcar por categoría CodeRunner';
$string['badacelangstring'] = 'Cadena de caracteres cucha de Idioma-Ace';
$string['badcputime'] = 'El límite del tiempo de CPU debe dejarse vacío o ser un número entero mayor de cero';
$string['bad_dotdotdot'] = 'Uso incorrecto de \'...\'. Debe estar al final, después de dos se aumentan las penalizaciones numéricas';
$string['bademptyprecheck'] = 'La pre-revisión falló con la siguiente salida inesperada.';
$string['bad_empty_splitter'] = 'El divisor de prueba no puede estar vacío cuando se usa una plantilla combinadora';
$string['badfilenamesregex'] = 'Expresión regular inválida';
$string['badfiles'] = 'Nombre de archivo(s) prohibido: {$a}';
$string['badjsonfunc'] = 'Función JSON incrustada desconocida ({$a->func})';
$string['badmemlimit'] = 'El límite de memoria debería de estar, ya sea vacío, o ser un número entero que no sea negativo';
$string['bad_new_prototype_name'] = 'Nombre ilegal para un nuevo prototipo: ya está en uso';
$string['badpenalties'] = 'El régimen de penalización debe ser una lista separada por comas de números en el rango [0, 100]';
$string['badquestion'] = 'Error en pregunta';
$string['badrandomintarg'] = 'Argumento malo para función JSON @randomint';
$string['badrandompickarg'] = 'Argumento malo para función JSON @randompic';
$string['badsandboxparams'] = 'El campo Otro \'Other\' (sandbox params) debe de estar, ya sea vacío, o ser un registro JSON válido';
$string['badtemplateparams'] = 'Los parámetros de plantilla deben de estar, ya sea vacíos o ser un registro JSON válido';
$string['badtemplateparamsaftertwig'] = 'Twigging de parámetros de plantilla produjo  JSON inválido: <pre>{$a}</pre>';
$string['brokencombinator'] = 'Se esperaban {$a->numtests} resultados de prueba, se obtuvieron {$a->numresults}. ¿Tal vez hubo salida excesiva o error en pregunta?';
$string['brokentemplategrader'] = 'Mala salida del calificador: {$a->output}. Pudo haber abortado la ejecución de su  programa (por ejemplo, por agotamiento del tiempo o se excedió el límite de memoria).';
$string['bulkquestiontester'] = 'El <a href="{$a->link}">script para pruebas masivas</a> prueba que las respuestas de muestra para todas las preguntas en el contexto actual sean calificadas correctamente. Útil solamente una vez que algunas preguntas con respuestas de ejemplo hayan sido añadidas; el resultado inicial no tiene ninguna.';
$string['bulktestallincontext'] = 'Probarlos todos';
$string['bulktestcontinuefromhere'] = 'Correr otra vez o continuar, empezando desde aquí';
$string['bulktestindextitle'] = 'Prueba masiva CodeRunner';
$string['bulktestrun'] = 'Correr todas las pruebas de preguntas para todas las preguntas en el sistema (lento, solamente administradores)';
$string['bulktesttitle'] = 'Probando preguntas en {$a}';
$string['coderunner'] = 'Código de Programa';
$string['coderunnercategories'] = 'Categorías con preguntas CodeRunner';
$string['coderunnercontexts'] = 'Contextos con preguntas CodeRunner';
$string['coderunner_help'] = 'En respuesta a una pregunta, que es una especificación para un fragmento de programa, función o programa completo, el usuario ingresa código fuente en un lenguaje de computadora especificado que satisface la especificación.';
$string['coderunner_install_testsuite_failures'] = 'Pruebas que fallaron';
$string['coderunner_install_testsuite_intro'] = 'Esta página le permite probar que las preguntas CodeRunner con respuestas de ejemplo están funcionando correctamente.';
$string['coderunner_install_testsuite_noanswer'] = 'Preguntas sin respuestas de muestra';
$string['coderunner_install_testsuite_title'] = 'Un conjunto de pruebas para respuestas de muestra CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'El <a href="{$a->link}">script probar-respuesta-muestra</a> verifica que las preguntas con respuestas de muestra se desempeñan correctamente.';
$string['coderunner_question_type'] = 'Tipo de pregunta CodeRunner:';
$string['coderunnersettings'] = 'Configuraciones de CodeRunner';
$string['coderunnersummary'] = 'La respuesta es código de programa que es ejecutado en el contexto de un conjunto de casos de prueba para determinar su certeza.';
$string['coderunnertype'] = 'Tipo de pregunta';
$string['coderunnertype_help'] = 'Seleccione su lenguaje de programación y tipo de pregunta. Una vez que se haya seleccionado un tipo, los detalles pueden verse en el panel inferior de Detalles del tipo de pregunta.';
$string['columncontrols'] = 'Tabla de resultados';
$string['columncontrols_help'] = 'Las casillas de selección seleccionan cuales columnas de la tabla de resultados deberían mostrarse a los estudiantes después del envío';
$string['confirm_proceed'] = 'Si Usted guarda eta pregunta con \'Personalizar\' desactivado, se perderá cualquier personalización. ¿Proceder?';
$string['confirmreset'] = '¿Descartar todo su trabajo en esta pregunta y reiniciar la caja de respuesta al valor precargado original?';
$string['cputime'] = 'Límite de tiempo (segundos)';
$string['customisation'] = 'Personalización';
$string['customisationcontrols'] = 'Personalización';
$string['customise'] = 'Personalizar';
$string['datafiles'] = 'Archivos de soporte';
$string['datafiles_help'] = 'Cualquier archivo subido aquí será añadido al directorio de trabajo cuando sea ejecutado el programa de la plantilla expandida. Esto permite que datos grandes o archivos de soporte sean añadidos convenientemente.';
$string['default_penalty_regime'] = 'Régimen de penalización por defecto';
$string['default_penalty_regime_desc'] = 'El Régimen de penalización por defecto para aplicar a preguntas nuevas, consistente en una lista separada por comas de porcentajes de penalización, opcionalmente terminando en ", ..." para significar una progresión aritmética en curso.';
$string['display'] = 'Mostrar';
$string['downloadquizattempts'] = 'Descargar intentos de examen';
$string['downloadquizattemptshelp'] = 'Haga clic en el curso apropiado o botón de descarga para el curso y examen que desea descargar. Los números entre paréntesis después de los cursos son el número de exámenes en el curso con al menos un envío. El número entre paréntesis después del nombre del examen son el número de envíos.';
$string['editingcoderunner'] = 'Editando una pregunta CodeRunner';
$string['empty_new_prototype_name'] = 'El nombre del nuevo tipo de pregunta no puede estar vacío';
$string['emptypenaltyregime'] = 'El régimen de penalización debe estar definido (a partir de la versión 3.1)';
$string['enable'] = 'Habilitar';
$string['enablecombinator'] = 'Habilitar combinador';
$string['enable_diff_check'] = 'Habilitar botón para \'Mostrar diferencias\'';
$string['enable_diff_check_desc'] = 'Presentarle a los estudiantes un botón para \'Mostrar diferencias\' si su respuesta es errónea y  se usa un validador de coincidencia exacta (experimental)';
$string['enable_sandbox_desc'] = 'Permitir el uso del sandbox (entorno de prueba) especificado para correr envíos de estudiantes';
$string['equalitygrader'] = 'Coincidencia exacta';
$string['error_loading_prototype'] = 'Error al cargar prototipo. ¿ Problemas de la red o servidor tirado, tal vez ?';
$string['errorstring-accessdenied'] = 'Acceso a sandbox denegado';
$string['errorstring-autherror'] = 'No- autorizado para usar sandbox';
$string['errorstring-jobe400'] = 'Error del servidor de sandbox Jobe:';
$string['errorstring-ok'] = 'OK';
$string['errorstring-overload'] = 'No pudo correrse el trabajo por sobrecarga del servidor. ¿Tal vez intentarlo nuevamente después?';
$string['errorstring-pastenotfound'] = 'Solicitando estatus de un trabajo inexistente';
$string['errorstring-submissionfailed'] = 'Falló envío a sandbox';
$string['errorstring-submissionlimitexceeded'] = 'Se alcanzó el límite de envío a sandbox';
$string['errorstring-unknown'] = 'Eror inesperado al ejecutar su código. El servidor del sandbox podría estar tirado o sobrecargado. ¿Intentarlo nuevamente poco después?';
$string['errorstring-wronglangid'] = 'Lenguaje solicitado inexistente';
$string['expand'] = 'Expandir';
$string['expandtitle'] = 'Mostrar categorías de preguntas';
$string['expected'] = 'Salida esperada';
$string['expectedcolhdr'] = 'Esperado';
$string['expected_help'] = 'La salida esperada de la prueba. Vista por la plantilla como {{TEST.expected}}.';
$string['exportthisquestion'] = 'Exportar esta pregunta';
$string['exportthisquestion_help'] = 'Esto creará un archivo de exportación Moodle XML que solamente contiene una pregunta. Un ejemplo de cuando es útil esto es si Usted piensa que esta pregunta demuestra un \'bug\' en CodeRunner que a Usted le gustaría reportar a los desarrolladores.';
$string['extra'] = 'Datos de plantilla extra';
$string['extra_help'] = 'Un campo de texto extra que a veces es útil para usarse por la plantilla, accedida como {{TEST.extra}}';
$string['fail'] = 'Fallo';
$string['failedhidden'] = 'Su código falló una o más pruebas ocultas.';
$string['failedntests'] = 'Falló {$a->numerrors} prueba(s)';
$string['failedtesting'] = 'Falló prueba';
$string['fails'] = 'fallas';
$string['feedback'] = 'Retroalimentación';
$string['feedback_help'] = 'Elegir "Configurar por examen" para permitir que las configuraciones de retroalimentación del examen controlen la visualización de la tabla de resultados. "Forzar mostrar" para mostrar la tabla de resultados a la fuerza y "Forzar ocultar" para ocultarla a la fuerza';
$string['feedback_hide'] = 'Forzar ocultar';
$string['feedback_quiz'] = 'Configurado por examen';
$string['feedback_show'] = 'Forzar mostrar';
$string['fileheader'] = 'Archivos de soporte';
$string['filenamesexplain'] = 'Descripción';
$string['filenamesregex'] = 'Expresión regular';
$string['filloutoneanswer'] = 'Usted debe ingresar código fuente que satisfaga las especificaciones. el código que Usted ingrese será ejecutado para determinar su exactitud y se otorgará una calificación en consecuencia.';
$string['firstfailure'] = 'Primer caso de prueba fallido: {$a}';
$string['forexample'] = 'Por ejemplo';
$string['globalextra'] = 'Global extra';
$string['globalextra_help'] = 'Un campo de texto para uso de propósito general por autores de plantillas, a semejanza del campo extra de cada caso de prueba, pero global para todas las pruebas. Disponible para el autor de la plantilla como {{ QUESTION.globalextra }}.';
$string['goodemptyprecheck'] = 'Pasó';
$string['gotcolhdr'] = 'Obtenido';
$string['grader'] = 'Calificador';
$string['grading'] = 'Calificar/Calificando';
$string['gradingcontrols'] = 'Controles de Calificación';
$string['gradingcontrols_help'] = 'El calificador predeterminado de "coincidencia exacta"
otorga puntajes solamente si la salida de la corrida coincide exactamente con el valor esperado definido por el caso de prueba. Se elimina el espacio blanco posterior de todas las líneas y cualquier líneas en blanco posterior se borra, antes de hacer la prueba de igualdad.

El calificador de casi-igualdad es similar, excepto que
también colapsa espacios y tabuladores múltiples en un único espacio, borra todas las líneas vacías y convierte las cadenas de texto a minúsculas.

El calificador de \'expresión regular\' usa el campo \'esperado\'
del caso de prueba como una expresión regular y prueba la salida para ver si se puede encontrar una coincidencia con el resultado esperado en cualquier lugar dentro de la salida.
Para forzar la coincidencia de toda la salida, comience y termine la expresión regular
con \'\\ A\' y \'\\ Z\' respectivamente. La coincidencia de expresión regular usa las opciones  MULTILINE y DOTALL.

La opción \'calificador de plantilla\' asume que la salida
del programa es en realidad un resultado de calificación; es decir, que la plantilla no evalúa * y califica * la respuesta del alumno.
La única salida de tal programna plantilla debe de ser un registro codificado JSON.

Si la plantilla es una plantilla por prueba (es decir, no es un combinador), la cadena JSON debe describir una fila del
tabla de resultados y debe contener al menos un campo \'fracción\', que se multiplica por TEST.mark para decidir cual puntaje  se otorga al caso de prueba. Por lo general, también debería contener un campo \'got\' (obtenido), que es el valor que se muestra en la columna "Obtenido" de la tabla de resultados.
Las otras columnas de la tabla de resultados (testcode, stdin, expected) también pueden ser definidas por el programa calificador de la plantilla y serán usadas en lugar de los valores del caso de prueba. Como ejemplo, si la salida del programa es la cadena de caracteres
`{" fraction ": 0.5," got ":" ¡La mitad de las respuestas eran correctas! "}`, se daran medios puntajes para ese caso de prueba en particular y la columna \'Obtenido\' mostraría el
texto "¡La mitad de las respuestas fueron correctas!". Se pueden agregar otras columnas  a la tabla de  resultados
agregando atributos adicionales al registro JSON y también al Campo de Columnas Resultantes.

Si la plantilla es un combinador, la salida de cadena de caracteres JSON producida por el calificador de plantilla
debería contener nuevamente un campo \'fracción\'; esta vez para el puntaje total,
y puede contener cero o más  \'prologuehtml\', \'testresults\',
\'epiloguehtml\', \'columnformats\' y \'showdifferences\'.

Los campos \'prologuehtml\' y \'epiloguehtml\' son HTML
que se muestra antes y después de la tabla de resultados (opcional).
El campo \'testresults\', si se proporciona, es una lista de listas usadas para mostrar algún tipo de tabla de resultados. La primera fila es la fila de encabezado-de-columna y todas las demás filas definen el cuerpo de la tabla.

Existen dos valores especiales de encabezado de columna: \'iscorrect\' y \'ishidden\'.
La(s) columna(s) \'iscorrect\' se utilizan para mostrar palomitas o cruces para valores de fila de 1 o 0 respectivamente.
La columna \'ishidden\' no se muestra realmente, pero se pueden usar valores de 0 o 1 en la columna para activar y desactivar la visibilidad de la fila.
Los estudiantes no ven las filas ocultas, pero las personas que califican y otros miembros del staff si las ven.

Si se proporciona una tabla \'testresults\' como una opción, el campo \'columnformats\' también puede suministrarse. Esto debería ser una lista de cadenas de caracteres, una para cada columna excluyendo las columnas \'iscorrect\' y \'ishidden\'.

Las cadenas especifican el formato que se usará para mostrar los valores de las celdas;
actualmente, los únicos formatos admitidos son \'%s\' para una visualización de cadena de caracteres normal
(que se desinfecta y envuelve en un elemento \'pre\') y \'%h\' para un valor HTML que no debe procesarse más antes de la visualización.

El campo \'showdifferences\' activa la visualización de un botón para \'Mostrar diferencias\' después de la tabla de resultados si la fracción de puntaje otorgado no es 1.0.';
$string['graphhelp'] = '- Haga doble clic en un espacio en blanco para crear un nuevo nodo / estado.
- Haga doble clic en un nodo existente para "marcarlo", por ejemplo, como un estado de aceptación para las Máquinas de estados Finitos (FSM). Haga doble clic de nuevo para desmarcarlo.
- Haz clic y arrastre para mover un nodo.
- Shift clic dentro de un nodo y arrastre a otro para crear un enlace.
- Shift clic en un espacio en blanco, arrastre a un nodo para crear un enlace de inicio (solo FSM).
- Haga clic y arrastre un enlace para modificar sus curvas.
- Haga clic en un enlace/nodo para editar su texto.
- Escribir _ seguido de un dígito hace que ese dígito sea un subíndice.
- Escribir \\ epsilon crea un carácter épsilon (y de forma similar para \\ alpha, \\ beta, etc.).
- Haga clic en un enlace/nodo y luego presione la tecla Eliminar para eliminarlo (o función-eliminar en una Mac)..';
$string['graph_ui_invalidserialisation'] = 'GraphUI: serialización inválida';
$string['hidden'] = 'Oculto';
$string['HIDE'] = 'Ocultar';
$string['hidedifferences'] = 'Ocultar diferencias';
$string['HIDE_IF_FAIL'] = 'Ocultar si falla';
$string['HIDE_IF_SUCCEED'] = 'Ocultar si éxito';
$string['hiderestiffail'] = 'Ocultar el resto si falla.';
$string['hoisttemplateparams'] = 'Elevar Parámetros de la Plantilla (Hoist template parameters)';
$string['howtogetmore'] = 'Para información más detallada, guarde la pregunta con \'Validar al guardar\' desactivada y pruebe manualmente';
$string['ideone_pass'] = 'Contraseña del servidor Ideone';
$string['ideone_pass_desc'] = 'La contraseña a usar al conectarse al servidor obsoleto Ideone (si está habilitado el sandbox)';
$string['ideone_user'] = 'Usuario de servidor Ideone';
$string['ideone_user_desc'] = 'El nombre de ingreso a usar al conectarse al servidor Ideone obsoleto (si está habilitado el sandbox)';
$string['illegalformat'] = 'Formato ilegal ({$a->format}) en columnformats';
$string['info_unavailable'] = 'La información del tipo de pregunta no está disponible para preguntas personalizadas.';
$string['inputcolhdr'] = 'Entrada';
$string['insufficientattachments'] = 'No hay suficientes anexos, {$a} requeridos.';
$string['iscombinatortemplate'] = 'Is combinator (Combinador Es)';
$string['is_prototype'] = 'Usar como prototipo';
$string['jobe_apikey'] = 'Clave-API Jobe';
$string['jobe_apikey_desc'] = 'La clave API a ser incluida en todas las solicitudes REST al servidor Jobe  (si fuera necesario). Máximo 40 caracteres. Dejar vacío para omitir la Clave API de solicitudes.';
$string['jobe_host'] = 'Servidor Jobe';
$string['jobe_host_desc'] = 'El nombre del host del servidor Jobe más el número del puerto si fuera diferente del 80; por ejemplo jobe.algunsitio.edu:4010. La URL para la solicitud Jobe es obtenida al prefijar esta cadena con http:// y añadirle /jobe/index.php/restapi/<REST_METHOD>.';
$string['jobe_warning_html'] = '<p style=\'background-color:yellow\'>Correr usando el servidor Jobe de la Universidad de   Canterbury. Esto es solamente para pruebas iniciales. Por favor configure su propio servidor Jobe tan pronto como sea posible. Vea  <a href=\'https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#sandbox-configuration\' target=\'_blank\'>aquí</a>.</p>';
$string['language'] = 'Lenguaje de sandbox';
$string['languages'] = 'Lenguajes';
$string['languageselectlabel'] = 'Lenguaje';
$string['languages_help'] = 'El lenguaje del sandbox es el lenguaje informático utilizado para ejecutar el envío
Debe ser conocido por el sandbox elegido (si ha sido seleccionado un lenguaje específico), o al menos a uno de los sandboxes habilitadas (en caso contrario).
Esto no debería necesitar alterar el valor en el
plantilla paterna; Ajústalo bajo tu propia cuenta y riesgo.

El lenguaje-Ace es el lenguaje utilizado por  <a href="https://ace.c9.io/">el editor de código Ace</a> (si está habilitado) para la respuesta del alumno.
Por defecto, esto es lo mismo que el lenguaje del sandbox; ingrese un valor diferente aquí solamente si el idioma de la plantilla es diferente del idioma en el que se espera que el alumno escriba (por ejemplo, si se usa un preprocesador de Python para validar el programa C de un alumno antes de ejecutarlo).

Preguntas en varios lenguajes; es decir, preguntas en las que los alumnos pueden responder en más de un lenguaje, se habilitan configurando el lenguaje Ace en una lista de lenguajes separados por comas. Luego se les presenta a los estudiantes un menú desplegable para seleccionar el idioma en que está escrita su respuesta. Si exactamente uno de los idiomas
tiene un asterisco (\'*\') antepuesto, ese idioma se elige como el idioma predeterminado, que se selecciona como el estado inicial del menú desplegable. Por ejemplo,
un valor en lenguaje Ace de "C, C ++, Java *, Python3" le permitiría al alumno enviar en
C, C ++, Java o Python3, pero el menú desplegable mostraría inicialmente Java, que sería el predeterminado. Si no se especifica ningún valor predeterminado, el estado inicial del menú desplegable está vacío y el estudiante debe elegir un lenguaje.
Las preguntas en varios lenguajes requieren una plantilla especial que usa la variable de plantilla {{LANGUAGE}}
 para controlar cómo ejecutar el código del alumno. Ver el tipo de pregunta incorporado multi-lenguaje de muestra. La variable {{LANGUAGE}} está definida
<i> solamenteo </ i> para preguntas multi-lenguaje.

Si el autor desea proporcionar una respuesta de muestra a una pregunta multi-lenguaje, debe escribirla en el lenguaje predeterminado, si está especificado, o en el primero de los lenguajes permitidos en caso contrario.';
$string['mark'] = 'Puntaje';
$string['marking'] = 'Asignación de puntaje';
$string['markinggroup'] = 'Calificada';
$string['markinggroup_help'] = 'Si se activa "Todo o nada", se deben satisfacer todos los casos de prueba para que el envío pueda ganar puntaje. De lo contrario, se obtiene el puntaje sumando los puntos para los casos de prueba que pasan y se expresa esto como una fracción del puntaje máximo posible.

Los puntajes para el caso por prueba se pueden especificar solamente si la casilla de selección \'Todo o nada\' está desmarcada. Si usa un calificador por plantlla que otorga
puntajes parciales para casos de prueba, \'Todo o nada\' generalmente debería de estar desmarcado.

El régimen de penalización obligatorio es una lista de penalizaciones separadas por comas (cada una un porcentaje) para aplicar a envíos sucesivos. Estos son absolutos, no acumulativos. Como un caso especial, la última penalización puede ser ... \'para significar\' extender las dos penalizaciones anteriores como una progresión aritmética hasta 100. Por ejemplo, `0, 5, 10, 30, ...` es equivalente a `0, 5, 10, 30, 50, 70, 90, 100`.
Si hay más envíos que penalizaciones definidas, se utiliza el último valor.

El régimen de penalización por defecto puede ser establecido para todo el sitio por un administrador del sistema usando
Administración del sitio > Plugins  > Tipos de preguntas > CodeRunner.

Establezca el régimen de penalizaciones en \'0\' para cero penalizaciones en todos los envíos.';
$string['maxfilesize'] = 'Tamaño máximo de archivo permitido (bytes)';
$string['maxfilesize_help'] = 'Seleccionar el tamaño máximo de archivo a subir (bytes). El permitir subidas de archivos grandes con clases grandes puede impactar el desempeño y el espacio de disco tanto en el servidor Jobe como en Moodle.';
$string['memorylimit'] = 'MemLimit (MB)';
$string['missinganswers'] = 'respuestas faltantes';
$string['missingoutput'] = 'Usted debe proporcionar la salida esperada de este caso de prueba.';
$string['missingprototype'] = 'Esta pregunta fue definida como del tipo \'{$a->crtype}\' pero el prototipo no existe, o no es único,  o está no-disponible en este contexto. Usted debería Cancelar y tratar de (re)instalar el prototipo. ¡Proceda a editarla solamente si Usted sabe exactamente lo que está haciendo!';
$string['missingprototypes'] = 'Faltan prototipos';
$string['missingprototypewhenrunning'] = 'Pregunta rota (falta prototipo \'{$a->crtype}\'). No se puede ejecutar.';
$string['morehidden'] = 'También fallaron algunos casos de prueba ocultos';
$string['multipledefaults'] = 'Solamente puede seleccionarse como máximo un lenguaje como valor por defecto';
$string['multipleprototypes'] = 'Múltiples prototipos encontrados para \'{$a->crtype}\\';
$string['mustrequirefewer'] = 'Usted no puede requerir más anexos de los que permite.';
$string['nearequalitygrader'] = 'Casi coincidencia exacta';
$string['negativeorzeromark'] = 'El puntaje debe ser mayor de cero';
$string['nodetailsavailable'] = 'Seleccionar un tipo de pregunta para ver ayuda detallada.';
$string['noerrorsallowed'] = 'Su código debe pasar todas las pruebas para ganar algun puntaje. Inténtelo nuevamente.';
$string['nonnumericmark'] = 'Puntaje no-numérico';
$string['noqtype'] = 'No se seleccionó tipo de pregunta';
$string['nosampleanswer'] = 'Sin respuesta de muestra';
$string['options'] = 'Opciones';
$string['ordering'] = 'Ordenamiento';
$string['overallresult'] = 'Resultado general';
$string['pass'] = 'Pasado';
$string['passes'] = 'pasados';
$string['penaltyregime'] = '(régimen de penalización: {$a} %)';
$string['penaltyregimelabel'] = 'Régimen de penalización';
$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'Añadiendo una pregunta CodeRunner';
$string['pluginnameediting'] = 'Editando una pregunta CodeRunner';
$string['pluginname_help'] = 'Usar la caja combo \'Tipo de pregunta\' para seleccionar el lenguaje de computadora y tipo de pregunta que serán usados para correr el envío del estudiante.
Especificar el problema para el cual el estudiante debe de escribir código, después definir un conjunto de pruebas a correr en el envío del estudiante';
$string['pluginnamesummary'] = 'CodeRunner: corre código enviado por estudiantes en un sandbox (entorno de prueba)';
$string['precheck'] = 'Pre-revisión';
$string['precheck_all'] = 'Todo/todos';
$string['precheck_disabled'] = 'Deshabilitado';
$string['precheck_empty'] = 'Vacío';
$string['precheck_examples'] = 'Ejemplos';
$string['precheck_help'] = 'Si está habilitada la pre-revisión, los estudiantes tendrán un botón extra a la izquierda del botón usual para revisar, para darles una corrida sin-penalización para revisar sus códigos contra un subconjunto de los casos de prueba de pregunta.

Si se selecciona \'Vacío\', se hará una corrida única con la plantilla por-prueba, usando un caso de prueba en el cual todos los campos (testcode, stdin, expected, etc) son la cadena de caracteres vacía.

Salida no-vacía se considera que es una falla de la pre-revisión. Úsela con precaución: algunos tipos de pregunta no manejan esto adecuadamente; por ejemplo, preguntas de escribir-un-programa que generan salida.

Si se selecciona \'Ejemplos\', el código será probado contra todas las pruebas para las que se haya activado \'usar_como_ejemplo\'.

Si está seleccionado \'Seleccionado\', un elemento extra de Interfaz de usuario es añadido a cada caso de prueba, para permitirle al autor seleccionar un subconjunto específico de las pruebas.

Si está seleccionado \'Todo\', todos los casos de prueba son corridos (aunque su comportamiento pueda ser diferente del normal Revisar, si el código de la plantilla así lo elige).

La plantilla puede revisar si es que la corrida es una corrida de pre-revisión usando el parámetro Twig {{ IS_PRECHECK }}, el cual es "1" durante las corridas de pre-revisión y
"0" de lo contrario.';
$string['precheckingemptyset'] = 'Ejemplos de pre-revisión, ¡pero no hay ninguno!';
$string['precheck_only'] = 'Solamente pre-revisar';
$string['precheck_selected'] = 'Seleccionado';
$string['privacy:metadata'] = 'El plugin del tipo de pregunta CodeRunner no almacena ningún dato personal.';
$string['proceed_at_own_risk'] = '¿Editando un prototipo de pregunta incorporada?! Proceda bajo su propio riesgo y cuenta!';
$string['prototypecontrols'] = 'Prototipado';
$string['prototypecontrols_help'] = 'Si \'Es prototipo\' es verdadero, esta pregunta se convierte en un prototipo para otras preguntas.

Después de guardar, la pregunta especificada aparecerá en la lista desplegable de tipos de preguntas Por defecto, las nuevas preguntas basadas en este tipo heredarán todos los atributos de personalización especificados para esta pregunta.

Cambios posteriores a esta pregunta afectarán a todas las preguntas derivadas  a menos que ellas mismas  sean personalizadas, lo que rompe la conexión.

La herencia prototípica es de un solo nivel, por lo que esta pregunta, cuando se guarda como un prototipo, pierde su
conexión a su tipo de base original, convirtiéndose en un nuevo tipo de base por derecho propio.

Tenga presente que cuando se exportan preguntas derivadas Usted debe asegurarse de que esta pregunta esté incluida en la exportación, también, o la pregunta derivada será una huérfana al importarla a otro sistema. También, Usted es responsable de llevar el registro de cuales preguntas Usted está usando como prototipos; se recomienda encarecidamente que Usted renombre la pregunta a algo parecido a \'PROTOTIPO_para_mi_nuevo_tipo_de_pregunta\'
para facilitar el mantenimiento posterior.';
$string['prototype_error'] = '*** FALLA DE CARGA DEL PROTOTIPO. ¡NO GUARDE ESTO! ***';
$string['prototype_load_failure'] = 'Error al cargar prototipo:';
$string['prototypeQ'] = '¿Es prototipo?';
$string['prototypeusage'] = 'Uso de prototipo de pregunta CodeRunner para curso {$a}';
$string['prototypeusageindex'] = 'Cursos disponibles';
$string['qtype_cpp_program'] = '<p>Usado para preguntas de escriba-un-programa en C++, en donde no hay código por-caso-de-prueba, y las diferentes pruebas solamente usan diferentes datos de entrada estándar (stdin). Se espera que la respuesta del estudiante sea un programa ejecutable completo, el cual se ejecuta como-está, sin modificaciones por CodeRunner, una vez para cada caso de prueba. Los valores del código de prueba y los campos extra de cada caso de prueba son ignorados..</p>';
$string['qtype_c_program'] = '<p>Usado para preguntas de escriba-un-programa en C, en donde no hay código por-caso-de-prueba, y las diferentes pruebas solamente usan diferentes datos de entrada estándar (stdin). Se espera que la respuesta del estudiante sea un programa ejecutable completo, el cual se ejecuta como-está, sin modificaciones por CodeRunner, una vez para cada caso de prueba. Los valores del código de prueba y los campos extra de cada caso de prueba son ignorados..</p>';
$string['qtypehelp'] = 'Ayuda con tipo de pregunta';
$string['qtype_java_method'] = '<p>Usado para preguntas de Java de escriba-un-método, en donde al estudiante se le pide  que escriba un método que es esencialmente una función independiente.
La prueba proporcionada por el autor es típicamente solo una o dos líneas de código que (aparentemente) solamente llaman al método proporcionado por el estudiante, como en C. Tras bambalinas, la plantilla  construye una clase principal (Main) que contiene el método proporcionado por el estudiante (y cualesquiera otros métodos  de soporte, si deciden escribirlos), además de  un método \'runTests\' que envuelve al (a los) caso(s) de prueba. La función principal para class es construir  una instancia de Main y hacer una llamada a su método runTest . Vea el código de la plantilla para los detalles.';
$string['qtype_java_program'] = '<p>Una pregunta de escriba-un-programa Java, en donde el estudiante envía un programa completo como su respuesta. El programa es compilado y ejecutado para cada caso de prueba. No hay código de prueba, solamente datos stdin de prueba, aunque esto no es revisado en realidad: caveat emptor (sobre aviso no hay engaño). Los campos extra de los casos de prueba son similarmente ignorados.</p>
<p>Este tipo de pregunta se vuelve muy ineficiente si hubiera muchos casos de prueba, dado que cada uno necesita de un ciclo completo de compilar-y-ejecutar en el servidor Jobe. Es posible envolver a todas las pruebas en un solo trabajo Python que es enviado a la caja-de-arena servidor y que compila el programa una sola vez, y después lo corre en cada caso de prueba. Para detalles acerca de este sistema, vea el foro del autor de la pregunta en
coderunner.org.nz.</p>';
$string['qtype_multilanguage'] = '<p>Un estilo de preguntas de "escriba un programa" en donde el estudiante puede enviar una respuesta en cualquiera de los siguientes lenguajes: C, C++, Java, Python3. La caja de respuesta del estudiante tiene un menú desplegable en la parte superior, con el cual el estudiante debe elegir el lenguaje en el cual está escrita su respuesta.</p>
<p>Se pueden añadir más lenguajes, si lo soportara el servidor  Jobe, al añadir el nombre del lenguaje al campo <i>AceLang</i> del formato para editar la pregunta y después extender la plantilla (q.v.) para manejar el nuevo lenguaje.</p>
<p>El código del programa enviado es ejecutado como-está para cada caso de prueba. El código-de-´prueba (testcode) y los campos extra de cada caso de prueba son ignorados.</p>';
$string['qtype_pascal_function'] = '<p>Un tipo de pregunta Pascal, en donde al estudiante se le pide que escriba un procedimiento o una función. El programa a ser ejecutado consiste de la respuesta del estudiante seguida por el   <i>testcode</i> de CodeRunner encerrado entre  <code>begin ... end.</code>.<br>
Esta no es un tipo de pregunta combinatoria, por lo que será hecho un trabajo Jobe separado para cada caso de prueba.</p>';
$string['qtype_pascal_program'] = '<p>Un tipo de pregunta Pascal en donde la respuesta del estudiante es un programa Pascal completo. El programa es compilado y ejecutado una vez para cada caso de prueba, usando  el ingreso estándar proporcionado en el caso de prueba e ignorando los campos  <i>testcode</i> y <i>extra</i>.</p>';
$string['qtype_php'] = '<p>Una pregunta PHP en donde el envío del estudiante es código PHP. En el caso más simple, el código del estudiante comenzará con</p><pre>
<?php
</pre>pero <i>no cerrará la marca (tag) PHP </i>. La razón para no cerrar puede ser vista al inspeccionar la plantilla: la respuesta del estudiante es seguida por cada uno de los códigos de los casos de prueba. Si, en lugar de esto, Usted desea que el código del estudiante termine cerrando la marca (tag) PHP, Usted deberá editar la plantilla para re-abrir la marca (tag) PHP antes de la secuencia de pruebas.
</p><p>La salida de cada caso de prueba, que debería de coincidir con el campo
<i>esperado</i> del caso de prueba, será la salida del código PHP del estudiante (incluyendo cualquier contenido fuera del alcance de las marcas <?php...?> ) más la salida del código de prueba.</p><p>Inspeccione el código de la plantilla (al hacer clic en
<i>Personalizar</i>) para entender esto.</p>';
$string['qtype_python3'] = '<p>Un tipo de pregunta Python3, que puede manejar tipos de pregunta de escriba-una-función, escriba-una-clase o escriba-un-programa. Para cada caso de prueba, el código de la respuesta del estudiante es ejecutado seguido del código de prueba.
Así, por ejemplo, si al estudiante se le pide  que escriba una definición de función, su definición será ejecutada primeramente, seguida por el código de prueba proporcionado por el autor, el cual típicamente llamará a la función e imprimirá el resultado o algún valor derivado de él .</p>
<p>Si no hubiera entradas estándar definidas para todos los casos de prueba, la pregunta de hecho envuelve a todas las pruebas  dentro de una sola ejecución, imprimiendo una cadena de caracteres separadora entra cada salida de caso de prueba.
Por favor tenga en cuenta que esto no necesariamente es lo mismo que ejecutar cada caso de prueba en forma separada. Por ejemplo, si hay algunas variables globales definidas por el código del estudiante, éstas conservarán sus valores a lo largo de múltiples ejecuciones.
Si fuera probable que esto provoque  un problema, la forma más sencilla de corregir esto es definir que uno de los campos de entrada estándar tenga un valor no-vacío - esto fuerza a CodeRunner a un modo de \'fallback\' de ejecutar cada caso de prueba separadamente.</p>';
$string['questioncheckboxes'] = 'Personalización';
$string['questioncheckboxes_help'] = 'Para personalizar el tipo de pregunta; por ejemplo, para editar las plantillas de la pregunta o parámetros del sandbox. Hacer clic en la casilla para \'Personalizar\' y leer la ayuda disponible en los elementos del formato recién-visible para más información.

Si está seleccionada la casilla depurado-de-plantilla, el programa generado para cada caso de prueba será mostrado en la salida.';
$string['questionloaderror'] = 'Falló al cargar pregunta';
$string['questionpreview'] = 'Vista previa de pregunta';
$string['questiontype'] = 'Tipo de pregunta';
$string['question_type_changed'] = 'Cambiando tipo de pregunta. Haga clic en OK para recargar campos de personalización. Cancelar para conservar sus personalizaciones.';
$string['questiontypedetails'] = 'Detalles del tipo de pregunta';
$string['questiontype_help'] = 'Configurar el tipo particular de pregunta.

La caja-combo selecciona uno de los tipos integrados, cada uno de los cuales especifica un lenguaje particular y, a veces, un sandbox (entorno de pruebas), en el cual será ejecutado el programa. Cada tipo de pregunta tiene una plantilla que define cómo está construido el programa ejecutable a partir de los datos del caso de prueba y la respuesta del estudiante.

La plantilla puede ser vista y opcionalmente ser personalizada al hacer clic en la casilla \'Personalizar\'.

Si está activada la casilla depurado-de-plantilla, el programa generado para cada caso de prueba será mostrado en la salida.';
$string['questiontype_required'] = 'Usted debe seleccionar el tipo de pregunta';
$string['qWrongBehaviour'] = 'Por favor use Comportamiento Adaptativo para todas las preguntas CoderRunner, porque puede haber impactos masivos al desempeño. Por ejemplo, todas las preguntas en una página necesitan ser re-calificadas cuando la página es vuelta a mostrar.';
$string['regexgrader'] = 'Expresión regular';
$string['replacedollarscount'] = 'Esta categoría contiene {$a} preguntas CodeRunner.';
$string['replaceexpectedwithgot'] = 'Haga clic en el botón << para remplazar la salida esperada de este caso-de-prueba con salida actual.';
$string['reset'] = 'Reiniciar respuesta';
$string['resethover'] = 'Descartar los cambios y reiniciar respuesta al valor precargado original';
$string['resultcolumnheader'] = 'Resultado';
$string['resultcolumns'] = 'Columnas de resultados';
$string['resultcolumns_help'] = 'Por defecto, la tabla de resultados muestra las columnas del código de prueba, stdin, expected (esperado) y got (obtenido), siempre que las columnas no estén vacías. Puede cambiar el valor predeterminado, y / o los encabezados de las columnas ingresando un valor para las columnas de resultado (deje vacío para el comportamiento predeterminado).

Si se proporciona, el campo resultcolumns debe ser una
lista de especificadores de columna codificados en JSON. Cada especificador de columna es en sí mismo una lista,
típicamente con solo dos o tres elementos. El primer elemento es el encabezado de la columna, el segundo elemento es el campo del objeto TestResult que
se muestra en la columna y el tercer elemento opcional es una cadena de caracteres en formato sprintf utilizada para mostrar el campo.

Los campos disponibles en el objeto estándar TestResult son: testcode, stdin, expected, got, extra, awarded y mark.

testcode, stdin, expected y extra son los campos del caso de prueba mientras que got es la salida real generada y awarded y mark son el puntaje realmente otorgado y el puntaje máximo para el caso de prueba respectivamente.

Los calificadores por plantilla por-prueba pueden añadir sus propios campos, los que también pueden ser seleccionados para mostrarse. También es  posible combinar múltiples campos en una columna al añadirle campos extra al especificador: estos deben de preceder el especificador con formato sprintf, el cual entonces se vuelve obligatorio. Por ejemplo, para mostrar una columna Mark Fraction en el formato  0.74 / 1.00, digamos, podría usarse un especificador de formato de columna de  ["Mark Fraction", "awarded", "mark", "%.2f/%.2f"]

Como otro caso especial, un formato de %h significa que
el campo de resultado de la prueba debe tomarse como HTML listo para la salida y no debe ser sujeto a un procesamiento posterior; esto solo es útil con plantillas personalizadas que generan resultados HTML, como gráficos SVG.

El valor predeterminado de
resultcolumns es [["" Test "," testcode "], [" Input "," stdin "], [" Expected ",
"expected"], ["Got", "got"]].

La configuración del campo \'resultcolumns\' o no tiene efecto si una plantilla calificadora combinadora está siendo usada. El autor de la pregunta es entonces responsable de formatear la tabla de resultados en cualquier forma deseada.';
$string['resultcolumnsnotjson'] = 'El campo de columnas de resultados no es una cadena JSON válida';
$string['resultcolumnsnotlist'] = 'El campo de columnas de resultados debe ser una lista de especificadores de columna codificada JSON válida';
$string['resultcolumnspecbad'] = 'Se encontró un especificador de columna inválido; cada uno debe ser una lista de dos o más cadenas de caracteres';
$string['resultstring-abnormaltermination'] = 'Terminación anormal';
$string['resultstring-compilationerror'] = 'Error de compilación';
$string['resultstring-illegalsyscall'] = 'LLamada ilegal a función';
$string['resultstring-internalerror'] = 'Error CodeRunner (IE): por favor dígale a un tutor';
$string['resultstring-memorylimit'] = 'Límite de memoria excedido';
$string['resultstring-norun'] = 'No corre';
$string['resultstring-outputlimit'] = 'Salida excesiva';
$string['resultstring-runtimeerror'] = 'Error';
$string['resultstring-sandboxoverload'] = 'Servidor de sandbox sobrecargado.¿Intentarlo nuevamente poco después?';
$string['resultstring-sandboxpending'] = 'Error CodeRunner (PD): por favor dígale a un tutor';
$string['resultstring-sandboxpolicy'] = 'Error CodeRunner (BP): por favor dígale a un tutor';
$string['resultstring-success'] = 'OK';
$string['resultstring-timelimit'] = 'Límite de tiempo excedido';
$string['run_failed'] = 'No se pudo correr pruebas';
$string['sampleanswerattachments'] = 'Anexos a respuesta de muestra';
$string['sampleanswerattachments_help'] = 'Si la muestra necesita archivos anexos, súbalos aquí';
$string['sandboxcontrols'] = 'Sandbox (Entorno de pruebas)';
$string['sandboxcontrols_help'] = 'Seleccione qué sandbox (entorno de prueba) usar para ejecutar los envíos de los estudiantes.
DEFAULT )POR DEFECTO) usa el sandbox de mayor prioridad disponible para el lenguaje elegido.
Desde que Jobe ha reemplazado todos los tipos de sandbox
excepto el \'ideonesandbox\' obsoleto, el valor \'jobesandbox\' se recomienda para uso normal, y da como resultado mejores mensajes de error que DEFAULT si el servidor Jobe está tirado.

También puedes configurar el tiempo máximo de CPU en segundos permitido para cada ejecución de prueba y el máximo de memoria que puede consumir una sola ejecución de prueba (MB). Una entrada vacía usa el valor predeterminado del sandbox (típicamente 5 segundos para el límite de tiempo de la CPU y una cantidad de memoria que depende-del-lenguaje), pero los valores predeterminados pueden no ser adecuados para programas con recursos exigentes. Un valor de cero para la memoria máxima da como resultado que no se imponga límite de memoria. La cantidad de memoria especificada aquí es la cantidad total necesaria para la ejecución incluyendo todas las bibliotecas, intérpretes, máquinas virtuales, etc.

La entrada \'Parámetros\' se usa para pasar más datos específicos del sandbox, tales como opciones de compilación y
claves API (API-keys). Por lo general, debe dejarse vacía, pero si no está vacía, debe ser un registro JSON válido. En el caso del sandbox jobe, los atributos disponibles incluyen
disklimit, streamsize, numprocs, compileargs, linkargs e interpreterargs. por ejemplo  `{"compileargs":["-std=c89"]}`  para una pregunta en C forzaría al cumplimiento de C89 y no se usarían otras opciones de C. Vea la documentación jobe
para los detalles. Algunos sandboxes (por ejemplo, el sandbox Ideone obsoleto) pueden ignorar silenciosamente alguna o todas estas configuraciones

Si el sandbox está configurado en \'jobesandbox\', el host jobe que se usará para probar la pregunta es generalmente como se especifica a través de la configuración de administrador para el plugin CodeRunner.
Sin embargo, es posible seleccionar un jobeserver diferente definiendo un parámetro  \'jobeserver\'
y también, opcionalmente, un parámetro \'jobeapikey\'. Por ejemplo, si el campo \'Parámetros\' está configurado en `{" jobeserver ":" myspecialjobe.com "}, la ejecución
en su lugar, será enviado al servidor "myspecialjobe.com". Advertencia: esta característica es aún experimental y puede cambiar en el futuro.';
$string['sandboxerror'] = 'Error del sandbox [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Parámetros';
$string['seethisquestioninthequestionbank'] = 'Ver esta pregunta en el banco de preguntas';
$string['SHOW'] = 'Mostrar';
$string['showcolumns'] = 'Mostrar columnas:';
$string['showcolumns_help'] = 'Seleccionar cuales columnas de  la tabla de resultados deberían de ser mostradas a estudiantes. Las columnas vacías estarán ocultas.

Los valores por defecto son apropiados para la mayoría de los usos.';
$string['showdifferences'] = 'Mostrar diferencias';
$string['showsource'] = 'Depurado de plantilla';
$string['sourcecodeallruns'] = 'Depuración: código fuente de todas las corridas de prueba';
$string['stdin'] = 'Entrada estándar';
$string['stdin_help'] = 'La entrada estándar a la prueba, vista por la plantilla como {{TEST.stdin}}';
$string['student_answer'] = 'Respuesta del estudiante';
$string['supportscripts'] = 'Scripts soportados';
$string['syntax_errors'] = 'Error(es) de sintaxis';
$string['table_ui_invalidjson'] = 'Interfaz del Usuario de la tabla: serialización JSON inválida.';
$string['table_ui_invalidserialisation'] = 'Interfaz del Usuario de la tabla: serialización inválida.';
$string['table_ui_missingparams'] = 'La Interfaz del Usuario de la tabla necesita los parámetros  table_num_columns y table_num_rows.';
$string['template'] = 'Plantilla';
$string['template_changed'] = 'Plantilla Por-prueba cambiada - ¿deshabilitar combinador? [\'Cancelar\' lo deja habilitado.]';
$string['templatecontrols'] = 'Controles de plantilla';
$string['templatecontrols_help'] = 'El activar la casilla \'Es combinador\' especifica que la plantilla es una plantilla combinadora, que combina (o intenta
combinar) la respuesta del estudiante junto con todos los casos de prueba en una sola corrida. Si esta casilla de selección está marcada, Usted también necesitará definir el valor del campo  test_splitter_re, que es la expresión regular PHP utilizada para dividir la salida de la corrida del programa
y ejecutarlo de nuevo en un conjunto de pruebas individuales. Sin embargo, Usted no necesita definir esto si también está usando un calificador de plantilla, ya que en este caso el código de la plantilla es el responsable de dividir el resultado mismo y calificarlo.

A las plantillas combinadoras no se les pasan la variable TEST Twig. En cambio, ellas reciben una variable TESTCASES, que es una lista de todas las pruebas en la pregunta. El programa producido por la plantilla generalmente se asume que combina la STUDENT_ANSWER (RESPUESTA_DEL_ESTUDIANTE) y todas las TESTCASES en un solo programa que, cuando se ejecuta, produce como salida los resultados de prueba de cada caso de prueba, separados por una cadena de caracteres única.
La cadena de caracteres separadora está definida por una expresión regular dada por el formato
 \'test_splitter_re\' inferior.

Sin embargo, si los casos de prueba tienen una entrada estándar definida, las plantillas combinadoras se vuelven
problemáticas. Si la plantilla construye un solo programa, ¿cuál debería de ser la entrada estándar? La solución más simple (y predeterminada) es correr los casos de prueba uno a la vez, usando la plantilla combinadora para construir
cada programa, pasándolo a la variable TESTCASES que contiene solamente una única prueba.

Este \'truco\' permite que la plantilla combinadora tenga un doble papel: se comporta como una plantilla por-caso-de-prueba (con una matriz TESTCASES de 1-elemento) cuando el autor de la pregunta proporciona entrada estándar, pero se comporta  como un combinador adecuado (con una matriz
TESTCASES de n-elementos) en caso contrario. Para cambiar este comportamiento, para que así el combinador
reciba todos los casos de prueba, incluso cuando stdin esté presente, active la casilla  \'Permitir múltiples stdins\'

Si una ejecución del programa combinador da como resultado cualquier salida a stderr, eso se interpreta como un error de ejecución. Para asegurar que el estudiante obtenga puntaje por tantas pruebas válidas como sea posible, el sistema se comporta como lo hace cuando la entrada estándar está presente, volviendo a ejecutar cada prueba por separado. Esto no aplica para los calificadores combinadores, sin embargo, a los que se les requieren que traten ellos mismos con todos los errores de tiempo de ejecución y siempre deben regresar un resultado JSON válido.';
$string['templateerror'] = 'ERROR DE PLANTILLA';
$string['templategrader'] = 'Calificador de plantilla';
$string['template_help'] = 'La plantilla define el(los) programa(s) que se ejecuta(n) en el sandbox para una determinada respuesta y prueba(s) del estudiante. Hay dos tipos de plantilla:

* una plantilla por-prueba, que define un programa que se ejecutará para un único caso de prueba y,
* una plantilla \'combinadora\' que define un programa que combina todos los casos diferentes en un solo programa.

La casilla de selección \'is_combinator\' se deja sin marcar para una plantilla por-prueba y se activa para una plantilla de combinador. El resto de este panel de ayuda asume que Usted
está usando una plantilla por-prueba; vea la documentación completa para el uso de plantillas de combinador.

La plantilla es procesada
por el motor de plantillas Twig (ver http://twig.sensiolabs.org)
en un contexto en el cual STUDENT_ANSWER es la respuesta del estudiante y TEST.testcode es el código para el caso de prueba actual. Estos valores
(y otros valores de testcase como TEST.expected, TEST.stdin, TEST.mark)
se pueden insertar en la plantilla encerrándolas en llaves dobles, p. ej.
`{{TEST.testcode}}`. Para usar dentro de cadenas de caracteres literales, debe de aplicarse una función de escape apropiada; por ejemplo.  `{{STUDENT_ANSWER | e(\'py\')}}` es la respuesta del estudiante escapada de una manera adecuada para su uso dentro de cadenas de caracteres con dcomillas dobles-triples de Python. Otras funciones de escape son `e(\'c\')`, `e(\'java\')`, `e(\'matlab\')`. El
programa que es generado por Twig luego se compila y ejecuta
con el lenguaje del tipo incorporado seleccionado y con el stdin
configurado a TEST.stdin. La salida de ese programa se pasa entonces al calificador seleccionado.
Consulte la ayuda en "Controles de calificación" para obtener más información al respecto.

Tenga en cuenta que si se utiliza una plantilla personalizada por-prueba habrá un ciclo de compilación-y-ejecución para cada caso de prueba, mientras que la mayoría de
los tipos de preguntas incorporadas definen en su lugar una plantilla combinadora que combina
todos los casos de prueba en una sola ejecución.

Si se hace clic en la casilla de selección de depuración-de-plantilla, el programa generado para cada caso de prueba se mostrará en la salida.';
$string['templateparams'] = 'Parámetros de plantilla';
$string['templateparams_help'] = 'El campo de parámetros de plantilla le permite pasar parámetros de cadena de caracteres a una(s) plantilla(s) de pregunta. Si no está vacío, debe ser un registro en formato JSON. Los campos del registro se pueden usar entonces adentro de la plantilla, donde aparecen como
QUESTION.parameters. & Lt; & lt; param & gt; & gt;. Por ejemplo, si los parámetros de plantilla son

{"edad": 23}

el valor 23 se sustituiría dentro de la plantilla en lugar del
variable de plantilla `{{QUESTION.parameters.age}}`.

El conjunto de parámetros de plantilla pasados a la plantilla  consiste en cualquier parámetros de plantilla definidos en el prototipo con los parámetros de plantilla de pregunta
fusionados. Los parámetros de la pregunta pueden así entonces anular los parámetros del prototipo, pero no
eliminarlos.

Los parámetros de  plantilla también se pueden usar para proporcionar aleatorización dentro de una pregunta.

Cuando la pregunta es primeramente inicializada los parámetros de la plantilla son pasados mediante el motor de la plantilla Twig para producir la versión JSON final.

La función "random" (aleatoria) de Twig puede
ser utilizada para asignar valores aleatorios a los parámetros de la plantilla. Si la casilla de selección "Twig All"
está activada, todos los otros campos de la pregunta (texto de la pregunta, respuesta, casos de prueba
etc.) son también procesados por Twig, con los parámetros de la plantilla como entorno. Esto puede resultar en que diferentes estudiantes vean diferentes variantes aleatorias de la pregunta. Ver la documentación para detalles.';
$string['testallincategory'] = 'Probar todas las preguntas en esta categoría';
$string['testalltitle'] = 'Probar todas las preguntas en este contexto';
$string['testcase'] = 'Caso de prueba {$a}';
$string['testcasecontrols'] = 'Propiedades de prueba:';
$string['testcasecontrols_help'] = 'Si se activa \'Usar como ejemplo\', esta prueba se incluirá automáticamente en la tabla de resultados de los \'Por ejemplo:\' de las preguntas

El cuadro combinado \'Mostrar\' determina cuándo se muestra este caso de prueba  al estudiante en la tabla de resultados.

Si se activa \'Ocultar resto si falla\' y esta prueba falla, todas las pruebas posteriores esstarán ocultas para el alumno, sin importar la configuración del cuadro desplegable \'Mostrar\'.

\'Puntaje\' establece el valor de este caso de prueba; significativo solo si esto no es una pregunta \'Todo o nada\'.

\'Ordenar\' puede usarse para cambiar el orden de las pruebas cuando la pregunta es guardada: los casos de prueba están ordenados por este campo.';
$string['testcases'] = 'Casos de prueba';
$string['testcode'] = 'Código de prueba';
$string['testcode_help'] = 'El código para la prueba, visto por la plantilla como{{TEST.testcode}}';
$string['testcolhdr'] = 'Prueba';
$string['testingquestion'] = 'Probando pregunta {$a}';
$string['testsplitterre'] = 'Divisor de prueba (regex)';
$string['testtype'] = 'Pre-revisar tipo de prueba';
$string['testtype_both'] = 'Ambos';
$string['testtype_help'] = 'Si está habilitado pre-revisión y configurado  a \'seleccionado\', esta configuración controla si es que la prueba es usada solamente con una corrida normal, solamente con una corrida pre-revisión o en ambas corridas.
Si la pre-revisión se coonfigura a cualquier cosa diferente de \'seleccionada\', esta cofiguración es ignorada.';
$string['testtype_normal'] = 'Revisar solamente';
$string['testtype_precheck'] = 'Pre-revisar solamente';
$string['tooshort'] = 'La respuesta es demasiado corta para tener sentido y ha sido ignorada sin penalización';
$string['twigall'] = 'Twig todo';
$string['twigcontrols'] = 'Controles de Twig';
$string['twigcontrols_help'] = 'Los parámetros de la plantilla son referenciados normalmente durante la expansión Twig en la forma {{QUESTION.parameters.someparam}} Sin embargo, si está activada la casilla de Elevar Parámetros de Plantilla,  (Hoist Template Parameters), los parámetros se elevan en el espacio de nombre global de Twig y pueden ser referenciados simplemente como {{someparam}}.

El macroprocesador Twig se aplicaba tradicionalmente solo a la plantilla. Ahora es aplicado también a la los parámetros de la plantilla y, si \'Twig Todo\' está activado, al texto de la pregunta, respuesta de muestra, precarga de respuesta y todos los campos de casos de prueba, usando los parámetros de la plantilla Twig-expanded como un entorno.

Por lo general, Usted necesita activar  TwigAll si utiliza la aleatorización dentro de los parámetros de la plantilla';
$string['twigerror'] = 'Error de twig {$a}';
$string['twigerrorintest'] = 'Error de twig al procesar esta prueba {$a}';
$string['type_header'] = 'Tipo de pregunta CodeRunner';
$string['typename'] = 'Tipo de pregunta';
$string['typerequired'] = 'Por favor seleccione el tipo de pregunta (lenguaje, formato, etc)';
$string['uicontrols'] = 'Ingresar Interfaces de Usuario';
$string['uicontrols_help'] = 'Seleccione los controladores de Interfaz del Usuario para la respuesta del estudiante y la plantilla del autor de la pregunta.

El menú desplegable de Respuesta del Alumno muestra una lista de plugins disponibles. Para codificar preguntas, generalmente se usa el editor Ace.
Se puede usar un valor de \'Ninguno\' para proporcionar un cuadro de texto sin formato.
El valor \'Gráfica\' proporciona al usuario una interfaz de usuario de dibujo de gráficos simple para usar con preguntas que le piden al alumno que dibuje un gráfico con alguna especificación; estas preguntas usualmente tendrán un solo caso de prueba, calificado con una plantilla que analiza la representación serializada de la gráfica y que imprime un mensaje como  "OK" si la respuesta es correcta o un mensaje de error adecuadamente informativo en caso  contrario.
Los parámetros de la plantilla se pueden establecer, ya sea  en el prototipo o en la pregunta real, para modificar el comportamiento del plugin Graph de la siguiente manera:

{"isdirected": false} para gráficos no dirigidos, {"isfsm": false} para rechazar bordes entrantes sin un nodo de inicio (requerido por los gráficos de Máquina de Estados Finitos, FSM),

{"noderadius": 30}, por ejemplo, para establecer un noderadius diferente en píxeles.
Los parámetros de la plantilla de la pregunta real se fusionan con, y anulan, los del prototipo (a partir de CodeRunner V3.2.2).

También hay un elemento \'Table\' rn la interfaz del usuario, el cual aun es experimental
en la versión 3.5, muestra una tabla de áreas de texto para que el estudiante las rellene. Es usada por el tipo de pregunta  \'python3_program_testing\' , el cual está incluido dentro de las preguntas de muestra en GitHub. Vea la documentación del plugin, ese ejemplo y el código fuente (ui_table.js) para más información.

Los estudiantes con problemas de visión o los autores que desean inspeccionar serializaciones (digamos, para entender la representación utilizada por la Interfaz del Usuario Graph),
pueden alternar el uso de todos los complementos de IU en la página actual tecleando
Ctrl-Alt-M.

Cualquier valor que se seleccione para la respuesta del estudiante también se usará adentro del formato del editor para los campos de la Respuesta de Ejemplo y de la Respuesta Pre-cargada.

Si está activado  \'Plantilla usa Ace\',
el editor de código Ace gestionará tanto la plantilla como los parámetros de la plantilla.  De lo contrario, se usará una caja de texto sin formato.';
$string['ui_fallback'] = 'Regresando al área de texto crudo.';
$string['unauthorisedbulktest'] = 'Usted no tiene acceso apropiado a ninguna pregunta CodeRunner';
$string['unauthoriseddbaccess'] = 'Usted no está autorizado para usar este script';
$string['unknowncombinatorgraderfield'] = 'Nombre de campo desconocido ({$a->fieldname}) en salida de calificador combinador';
$string['unknownerror'] = 'Ocurrió un error inesperado. El sandbox puede estar tirado. Intentelo nuevámente poco después.';
$string['unserializefailed'] = 'Los resultados de exámenes almacenados no pudieron ser des-serializados. ¿Quizás intentará re-calificar?';
$string['useace'] = 'Plantilla usa Ace';
$string['useasexample'] = 'Usar como ejemplo';
$string['validateonsave'] = 'Validar al guardar';
$string['wrongnumberofformats'] = 'Número erróneo de Formatos de columna de resultados  de prueba. Se esperaban {$a->expected}, se obtuvieron {$a->got}';
$string['xmlcoderunnerformaterror'] = 'Error en formato XML en pregunta CodeRunner';
