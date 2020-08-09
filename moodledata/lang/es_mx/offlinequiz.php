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
 * Strings for component 'offlinequiz', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   offlinequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Añadir';
$string['addarandomquestion'] = 'preguntas aleatoriamente';
$string['addarandomquestion_help'] = 'Moodle añade una selección aleatoria de preguntas de opción múltiple (o preguntas de opción múltiple todo-o-nada) al grupo del examen fuera-de-línea actual. El número de preguntas añadidas puede configurarse. Las preguntas son elegidas de la categoría de preguntas actual (y, si estuviera seleccionada, de la sub-categoría).';
$string['addarandomselectedquestion'] = 'Añadir una pregunta seleccionada aleatoriamente...';
$string['addlist'] = 'Añadir lista';
$string['addnewpagesafterselected'] = 'Añadir saltos de página después de las preguntas seleccionadas';
$string['addnewquestion'] = 'una pregunta nueva';
$string['addnewquestionsqbank'] = 'Añadir preguntas a la categoría {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Añadir anulación de usuario';
$string['addpagebreak'] = 'Añadir salto de página';
$string['addpagehere'] = 'Añadir página aquí';
$string['addparts'] = 'Añadir participantes';
$string['addquestionfrombankatend'] = 'Añadir desde el banco de preguntas alfinal';
$string['addquestionfrombanktopage'] = 'Añadir del banco de preguntas a la página {$a}';
$string['addrandom'] = 'Añadir aleatoriamente {$a} pregunta(s) de opción múltiple';
$string['addrandomfromcategory'] = 'preguntas aleatoriamente';
$string['addrandomquestion'] = 'preguntas aleatoriamente';
$string['addrandomquestiontoofflinequiz'] = 'Añadiendo preguntas a examen-fuera-de-línea {$a->name} (group {$a->group})';
$string['addrandomquestiontopage'] = 'Añadir una pregunta aleatoria a la página {$a}';
$string['addtoofflinequiz'] = 'Añadir a examen fuera-de-línea';
$string['addtoqueue'] = 'Añadir a la cola';
$string['allinone'] = 'Ilimitado(a)';
$string['alllists'] = 'Todas las listas';
$string['allornothing'] = 'Todo-o-nada';
$string['allresults'] = 'Mostrar todos los resultados';
$string['allstudents'] = 'Mostrar todos los estudiantes';
$string['alwaysavailable'] = 'Siempre disponible';
$string['analysis'] = 'Análisi de ítems';
$string['answerform'] = 'Formato para respuestas';
$string['answerformforgroup'] = 'Formato de respuesta para el grupo {$a}';
$string['answerforms'] = 'Formatos de respuestas';
$string['answerpdfxy'] = 'Formato para respuestas ({$a}->maxquestions questions / {$a}->maxanswers options)';
$string['areyousureremoveselected'] = '¿Está Usted seguro de querer quitar todas las preguntas seleccionadas?';
$string['attemptexists'] = 'Existen intentos';
$string['attemptsexist'] = 'Usted ya no puede añadir o quitar preguntas';
$string['attemptsnum'] = 'Resultados: {$a}';
$string['attemptsonly'] = 'Mostrar solamente estudiantes con resultados';
$string['attendances'] = 'Asistencias';
$string['basicideasofofflinequiz'] = 'Las ideas básicas de hacer preguntas fuera-de-línea';
$string['blackwhitethreshold'] = 'Umbral negro/blanco.';
$string['bulksavegrades'] = 'Guardar Calificaciones';
$string['calibratescanner'] = 'Calibrar \'\'scanner\'\'';
$string['cannoteditafterattempts'] = 'Usted no puede añadir o quitar preguntas porque ya hay resultados completados. ({$a})';
$string['category'] = 'Categoría';
$string['changed'] = 'Se ha cambiado el resultado.';
$string['changeevaluationmode'] = 'Cambiar la manera  de como se hace la evaluación. Solamente es posible si es permitida por el administrador.';
$string['checkparts'] = 'Marcar a los participantes seleccionados como presentes';
$string['checkuserid'] = 'Verificar ID de grupo/usuario';
$string['chooseagroup'] = 'Elegir un grupo ...';
$string['closebeforeopen'] = 'No pudo actualizarse el examen fuera-de-línea. Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['closestudentview'] = 'Cerrar Vista de Estudiante';
$string['closewindow'] = 'Cerrar Ventana';
$string['cmmissing'] = 'Falta el módulo del curso para el examen fuera-de-línea con ID {$a}';
$string['configblackwhitethreshold'] = 'Configurar el umbral para la conversión blanco/negro entre 1 y 99 - Mientras más alto, tiene que haber más pixeles blancos importados  para que sea reconocido como blanco. Cualquier otro valor causará que no se haga ninguna conversión negro/blanco en lo absoluto.';
$string['configdecimalplaces'] = 'Número de dígitos que deberían mostrarse después del punto decimal al mostrar calificaciones para el examen fuera-de-línea.';
$string['configdisableimgnewlines'] = 'Esta opción deshabilita nuevas líneas antes y después de imágenes en las hojas PDF de preguntas. Advertencia: Esto podría causar problemas de formato.';
$string['configexperimentalevaluation'] = 'Evaluación experimental de hojas de respuesta';
$string['configexperimentalevaluationdesc'] = '¡NO UTILIZAR EN PRODUCCIÓN! Esta opción es utilizada para pruebas alfa del algoritmo de nueva evaluación. Si esta opción es activada,  Usted puede activarla dentro de las opciones de la instancia de offlinequiz. Nosotros le recomendamos encarecidamente  que NO utilice esta opción. No existe soporte en absoluto para sus datos perdidos en caso de activar esta opción.';
$string['configintro'] = 'Los valores que Usted configure aquí son usados como valores por defecto para las configuraciones de los nuevos exámenes fuera-de-línea.';
$string['configkeepfilesfordays'] = 'Determinar por cuantos días se conservan los archivos de imágenes subidas en el almacenamiento temporal. Durante este tiempo, los archivos de imágenes están disponibles en el reporte de la administración del examen fuera-de-línea.';
$string['configonlylocalcategories'] = 'No se permiten categorías de preguntas compartidas.';
$string['configpapergray'] = 'valor-del-blanco del papel, que se usa para la evaluación de hojas-de-respuestas';
$string['configshuffleanswers'] = 'Barajar respuestas';
$string['configshufflequestions'] = 'Si Usted habilita esta opción, entonces el orden de las preguntas en los grupos de examen fuera-de-línea serán barajados aleatoriamente cada vez que Usted re-cree la vista previa en la pestaña de "Crear formato".';
$string['configshufflewithin'] = 'Si Usted habilita esta opción, entonces las partes que componen las preguntas individuales se barajarán aleatoriamente cuando sean creados los formatos de pregunta y los formatos de respuesta.';
$string['configuseridentification'] = 'Una fórmula que describe la identificación del usuario. Esta fórmula es usada para asignar formatos de respuestas a usuarios en el sistema. El lado derecho de la ecuación denota un campo dentro de la tabla de usuarios de Moodle.';
$string['confirmremovequestion'] = '¿Está Usted seguro de querer quitar esta {$a} pregunta?';
$string['copy'] = 'Copiar';
$string['copyright'] = '<strong>Advertencia: ¡ Los textos en esta página son solamente para su información personal. Al igual que otros textos, estas preguntas están protegidas por Reserva de Derechos de Autor (\'\'copyright\'\') Usted no tiene permitido copiarlas ni mostrarlas a otras personas  !</strong>';
$string['copyselectedtogroup'] = 'Añadir preguntas seleccionadas al grupo: {$a}';
$string['copytogroup'] = 'Añadir todas las preguntas al grupo: {$a}';
$string['correct'] = 'correcto';
$string['correcterror'] = 'resolver';
$string['correctforgroup'] = 'Respuestas correctas para el Grupo {$a}';
$string['correctionform'] = 'Corrección';
$string['correctionforms'] = 'Formatos para corrección';
$string['correctionoptionsheading'] = 'Opciones de corrección';
$string['correctupdated'] = 'Formato actualizado para corrección del grupo {$a}';
$string['couldnotgrab'] = 'No se pudo capturar la imagen {$a}';
$string['couldnotregister'] = 'No se pudo registrar al usuario {$a}';
$string['createcategoryandaddrandomquestion'] = 'Crear categoría y añadir pregunta aleatoria';
$string['createlistfirst'] = 'Añadir participantes';
$string['createofflinequiz'] = 'Crear formatos';
$string['createpartpdferror'] = 'El formato PDF para la lista de participantes {$a} no se pudo crear. La lista podría estar vacía.';
$string['createpdf'] = 'Formato';
$string['createpdferror'] = 'No pudo crearse el formato para el grupo {$a} . Posiblemente no haya preguntas en el grupo.';
$string['createpdffirst'] = 'Crear primeramente lista PDF';
$string['createpdfforms'] = 'Crear formatos';
$string['createpdfs'] = 'Descargar formatos';
$string['createpdfsparticipants'] = 'Formatos PDF para listas de participantes';
$string['createquestionandadd'] = 'Crear una pregunta nueva y añadirla al examen.';
$string['createquiz'] = 'Crear formatos';
$string['csvfile'] = 'Archivo CSV';
$string['csvformat'] = 'Archivo de texto de valores separados por coma (CSV)';
$string['csvplus1format'] = 'Archivo de texto con datos crudos (CSV)';
$string['csvpluspointsformat'] = 'Archivo de texto con puntos (CSV)';
$string['darkgray'] = 'Gris oscuro';
$string['datanotsaved'] = 'No se pudieron guardar las configuraciones';
$string['decimalplaces'] = 'Número de decimales';
$string['decimalplaces_help'] = 'Número de dígitos que deberían mostrarse después del punto decimal al mostrar calificaciones para el examen fuera-de-línea.';
$string['deletelistcheck'] = '¿Realmente desea eliminar la lista seleccionada y a todos sus participantes?';
$string['deletepagecheck'] = '¿Realmente desea eliminar las páginas seleccionadas?';
$string['deletepagesafterselected'] = 'Remover saltos de página después de las preguntas seleccionadas';
$string['deletepartcheck'] = '¿Realmente desea eliminar los participantes seleccionados?';
$string['deleteparticipantslist'] = 'Eliminar lista de participantes';
$string['deletepdfs'] = 'Eliminar documentos';
$string['deleteresultcheck'] = '¿Realmente desea eliminar los resultados seleccionados?';
$string['deleteselectedpart'] = 'Eliminar participantes seleccionados';
$string['deleteselectedresults'] = 'Eliminar resultados seleccionados';
$string['deletethislist'] = 'Eliminar esta lista';
$string['deleteupdatepdf'] = 'Eliminar y actualizar formatos-PDF';
$string['difficultytitle'] = 'Dificultad';
$string['difficultytitlea'] = 'Dificultad A';
$string['difficultytitleb'] = 'Dificultad B';
$string['difficultytitlediff'] = 'Diferencia';
$string['disableimgnewlines'] = 'Deshabilitar nuevas líneas antes y después de imágenes';
$string['disableimgnewlines_help'] = 'Esta opción deshabilita nuevas líneas antes y después de imágenes en las hojas PDF de preguntas. Advertencia: Esto podría causar problemas de formato.';
$string['displayoptions'] = 'Mostrar opciones';
$string['done'] = 'hecho';
$string['downloadallzip'] = 'Descargar todos los archivos como ZIP';
$string['downloadpartpdf'] = 'Descargar archivo PDF para la lista \'{$a}\'';
$string['downloadpdfs'] = 'Descargar documentos';
$string['downloadresultsas'] = 'Descargar resultados como:';
$string['dragtoafter'] = 'Después de {$a}';
$string['dragtostart'] = 'Al inicio';
$string['editgroupquestions'] = 'Editar pregunas del grupo';
$string['editgroups'] = 'Editar grupos fuera-de-línea';
$string['editingofflinequiz'] = 'Editando preguntas del grupo';
$string['editingofflinequiz_help'] = 'Al crear un examen fuera-de-línea, los conceptos principales son:
<ul><li> El examen fuera-de-línea, que contiene preguntas en una o más páginas</li>
<li> El banco de preguntas, que almacena copias de todas las preguntas organizadas dentro de categorías</li></ul>';
$string['editingofflinequizx'] = 'Editar examen fuera-de-línea: {$a}';
$string['editlist'] = 'Editar lista';
$string['editlists'] = 'Editar listas';
$string['editmaxmark'] = 'Editar puntuación máxima';
$string['editofflinequiz'] = 'Editar examen fuera-de-línea';
$string['editofflinesettings'] = 'Editar configuraciones fuera-de-línea';
$string['editorder'] = 'Editar orden';
$string['editparticipants'] = 'Editar participantes';
$string['editquestion'] = 'Editar pregunta';
$string['editquestions'] = 'Editar preguntas';
$string['editscannedform'] = 'Editar formato escaneado';
$string['editthislist'] = 'Editar esta lista';
$string['emptygroups'] = 'Algunos grupos de exámenes fuera-de-línea están vacíos. Por favor, añada algunas preguntas.';
$string['enroluser'] = 'Inscribir usuario';
$string['erroraccessingreport'] = 'Usted no tiene permitido ver este reporte.';
$string['errorreport'] = 'Reporte de errores de importación';
$string['eventattemptdeleted'] = 'Intento de examen fuera-de-línea eliminado';
$string['eventattemptpreviewstarted'] = 'Vista previa de intento de examen fuera-de-línea iniciada';
$string['eventattemptreviewed'] = 'Intento de examen fuera-de-línea  revisado';
$string['eventattemptsummaryviewed'] = 'Resumen de intento de examen fuera-de-línea visto';
$string['eventattemptviewed'] = 'Intento de examen fuera-de-línea visto';
$string['eventdocscreated'] = 'Formatos de preguntas y respuestas de examen fuera-de-línea creados';
$string['eventdocsdeleted'] = 'Formatos de preguntas y respuestas de examen fuera-de-línea eliminados';
$string['eventeditpageviewed'] = 'Página para edición de preguntas de examen fuera-de-línea vista';
$string['eventofflinequizattemptsubmitted'] = 'Intento de examen fuera-de-línea  enviado';
$string['eventoverridecreated'] = 'Anulación de examen fuera-de-línea creada';
$string['eventoverridedeleted'] = 'Anulación de examen fuera-de-línea eliminada';
$string['eventoverrideupdated'] = 'Anulación de examen fuera-de-línea actualizada';
$string['eventparticipantmarked'] = 'Participante de examen fuera-de-línea calificado manualmente';
$string['eventquestionmanuallygraded'] = 'Pregunta calificada manualmente';
$string['eventreportviewed'] = 'Reporte de examen fuera-de-línea visto';
$string['eventresultsregraded'] = 'Resultados de examen fuera-de-línea re-calificados';
$string['everythingon'] = 'habilitado';
$string['excelformat'] = 'Hoija de cálculo de Excel (XLSX)';
$string['experimentalevaluation'] = 'Evaluación experimental de hojas de respuesta';
$string['experimentalevaluation_help'] = 'Evaluación experimental de hojas de respuesta';
$string['fileformat'] = 'Formato para hojas de pregunta';
$string['fileformat_help'] = 'Elija si quiere sus hojas de preguntas en formato PDF o formato DOCX. Los formatos de respuesta y las hojas para corrección siempre se generarán en formato PDF.';
$string['fileprefixanswer'] = 'formato_respuesta';
$string['fileprefixcorrection'] = 'formato_correccion';
$string['fileprefixform'] = 'formato_pregunta';
$string['fileprefixparticipants'] = 'lista_participantes';
$string['filesizetolarge'] = 'Algunos de sus archivos de imágenes son muy grandes. Las dimensiones serán re-dimensionadas durante la interpretación. Por favor, intente escanear con una resulución de entre 200 y 300 dpi (puntos por pulgada) y en el modo de blanco y negro. Esto acelerará la interpretación la próxima vez.';
$string['filterbytags'] = 'Filtrar por marcas...';
$string['fontsize'] = 'Tamaño de letra';
$string['forautoanalysis'] = 'Para análisis automático';
$string['formforcorrection'] = 'Formato para corrección del grupo {$a}';
$string['formforgroup'] = 'Formato de preguntas para grupo {$a}';
$string['formforgroupdocx'] = 'Formato de preguntas para grupo {$a} (DOCX)';
$string['formforgrouplatex'] = 'Formato de pregunta para grupo {$a} (LATEX)';
$string['formsexist'] = 'Los formatos ya fueron creados.';
$string['formsexistx'] = 'Formatos ya creados (<a href="{$a}">Descargar formatos</a>)';
$string['formsheetsettings'] = 'Configuraciones del formato';
$string['formspreview'] = 'Vista previa para formatos';
$string['formwarning'] = 'No hay un formato de respuesta definido. Por favor, contacte a su administrador.';
$string['fromquestionbank'] = 'del banco de preguntas';
$string['functiondisabledbysecuremode'] = 'Esta fucionalidad actualmente está deshabilitada';
$string['generalfeedback'] = 'Retroalimentación general';
$string['generalfeedback_help'] = 'La retroalimentación general es el texto que se les muestra a los estudiantes después del intento de reponder a una pregunta. A diferencia de la retroalimentación para una respuesta específica, siempre se muestra la misma retroalimentación general.';
$string['generatepdfform'] = 'Generar formato PDF';
$string['grade'] = 'Calificación';
$string['gradedon'] = 'Calificado en';
$string['gradedscannedform'] = 'Formato escaneado con calificaciones';
$string['gradeiszero'] = 'Nota: ¡ La calificación máxima para este examen es de 0 puntos !';
$string['gradeswarning'] = '¡ Las calificaciones de preguntas deben de ser números !';
$string['gradewarning'] = '¡ La calificaciones de pregunta debe de ser un número !';
$string['gradingofflinequiz'] = 'Calificaciones';
$string['gradingofflinequizx'] = 'Calificaciones: {$a}';
$string['gradingoptionsheading'] = 'Opciones para calificar';
$string['greeniscross'] = 'contada como una cruz';
$string['group'] = 'Grupo';
$string['groupoutofrange'] = 'El grupo estaba fuera del rango y se remplazó con grupo A.';
$string['groupquestions'] = 'Preguntas del Grupo';
$string['hasresult'] = 'Existe resultado';
$string['hotspotdeletiontask'] = 'Eliminación de puntos calientes';
$string['html'] = 'HTML';
$string['idnumber'] = 'Número ID';
$string['imagefile'] = 'Archivo de imagen';
$string['imagenotfound'] = '¡Archivo de imagen: {$a} no encontrado!';
$string['imagenotjpg'] = 'La imagen no es .JPG ni .PNG: {$a}';
$string['imagickwarning'] = 'Falta imagemagick: Pídale a su administrador del sistema que instale la libreria de imagemagick y que revise la ruta hacia el binario del convertidor en sus configuraciones del filtro de notación TeX. ¡Usted no puede importar archivos TIF sin imagemagick!';
$string['import'] = 'Importar';
$string['importedon'] = 'Importado en';
$string['importerror11'] = 'Existen otros resultados';
$string['importerror12'] = 'Usuario no registrado';
$string['importerror13'] = 'Sin datos del grupo';
$string['importerror14'] = 'No pudo obtenerse';
$string['importerror15'] = 'Marcas inseguras';
$string['importerror16'] = 'Error en página';
$string['importerror17'] = 'Páginas incompletas';
$string['importerror21'] = 'No pudo obtenerse';
$string['importerror22'] = 'Marcas inseguras';
$string['importerror23'] = 'Usuario no está en lista';
$string['importerror24'] = 'Lista no detectada';
$string['importforms'] = 'Importar formatos de respuesta';
$string['importfromto'] = 'Importando de {$a->from} a {$a->to} de {$a->total}.';
$string['importisfinished'] = 'La importación del examen fuera-de-línea {$a} está terminada.';
$string['importlinkresults'] = 'Enlace hacia resultados: {$a}';
$string['importlinkverify'] = 'Enlace hacia verificación: {$a}';
$string['importmailsubject'] = 'Notificación de importación de examen fuera-de-línea';
$string['importnew'] = 'Importar';
$string['importnew_help'] = '<p>
Usted puede importar archivos únicos de imágenes escaneadas o varias imágenes escaneadas incluidas dentro de un archivo-ZIP. El módulo de exámenes fuera-de-línea procesará en segundo plano los archivos de imágenes. Los nombres de los archivos no son relevantes  pero no deben de contener caracteres especiales como eñe ni vocales acentuadas. Las imágenes deben de ser GIFs, PNGs o TIFs. Se recomienda una resolución de entre 200 y 300 puntos por pulgada (dpi).</p>';
$string['importnumberexisting'] = 'Número de formatos dobles: {$a}';
$string['importnumberpages'] = 'Número de páginas importadas exitosamente: {$a}';
$string['importnumberresults'] = 'Número de importadas : {$a}';
$string['importnumberverify'] = 'Número de formatos que necesitan verificación: {$a}';
$string['importtimefinish'] = 'Proceso terminado: {$a}';
$string['importtimestart'] = 'Proceso iniciado: {$a}';
$string['inconsistentdata'] = 'Datos inconsistentes: {$a}';
$string['info'] = 'Información';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Las marcas inseguras necesitan corrección manual';
$string['insecuremarkingsforquestion'] = 'Las marcas inseguras necesitan corrección manual para preguntas';
$string['insertnumber'] = 'Por favor, inserte el número de identificación correcto enmarcado por el marco azul.';
$string['instruction1'] = 'El formato de respuesta será escaneado automáticamente. Por favor, no lo doble ni lo arrugue. Use una pluma negra o azul para marcar los campos.';
$string['instruction2'] = '¡Solamente las anotaciones de respuestas claras pueden interpretarse correctamente! Si Usted quiere corregir una anotación, llene completamente la casilla con color y ese campo será entonces interpretado como una caja vacía:';
$string['instruction3'] = 'Las cajas corregidas no pueden volverse a marcar. Por favor, no escriba nada afuera de las cajas.';
$string['introduction'] = 'Introducción';
$string['invalidformula'] = 'Fórmula inválida para la identificación del usuario. La fórmula debe de tener la forma de <prefix>[<#digits>]<suffix>=<db-field&>.';
$string['invalidnumberofdigits'] = 'Se usó un número de dígitos inválido. Solamente se permiten de 1 hasta 9 dígitos.';
$string['invaliduserfield'] = 'Campo inválido usado en la tabla de usuario.';
$string['invigilator'] = 'Supervisor';
$string['ischecked'] = 'La participación está verificada';
$string['isnotchecked'] = 'La participación no está verificada';
$string['itemdata'] = 'Itemdata';
$string['keepfilesfordays'] = 'Conservar archivos por días';
$string['letter'] = 'Carta';
$string['lightgray'] = 'Gris claro';
$string['linktoscannedform'] = 'Ver formato escaneado';
$string['listnotdetected'] = '¡ No pudo detectarse el código de barras para la lista !';
$string['logdeleted'] = 'Entrada de bitácora {$a} eliminada.';
$string['logourl'] = 'URL del logo';
$string['logourldesc'] = 'URL de un archivo de imagen que se muestra en la esquina superior derecha de los formatos de respuesta; por ejemplo <b>http://www.susitio.com.mx/milogo.png</b> o <b>../ruta/hacia/su/logo.png</b>. El tamaño máximo permitido es de 520x140 pixeles. ¡Los formatos de respuesta no pueden evaluarse si la imagen excede el tamaño máximo!';
$string['lowertrigger'] = 'Segundo límite inferior';
$string['lowertriggerzero'] = 'El Segundo límite inferior es cero';
$string['lowerwarning'] = 'Primer límite inferior';
$string['lowerwarningzero'] = 'El Primer límite inferior es cero';
$string['marginwarning'] = '¡ Por favor, imprima los siguientes archivos PDF sin márgenes adicionales !<br /> Evite el entregarle fotocopias a los estudiantes.';
$string['marks'] = 'Puntuación';
$string['matrikel'] = 'Número de estudiante';
$string['maxgradewarning'] = '¡La calificación máxima debe de ser un número !';
$string['maxmark'] = 'Puntaje máximo';
$string['membersinplist'] = '{$a->count} participantes en <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Falta archivo de imagen';
$string['missingitemdata'] = 'Respuesta(s) faltante(s) para usuario {$a}';
$string['missinglogdata'] = 'Datos de bitácora faltantes para los resultados existentes.';
$string['missingquestion'] = 'Al parecer ya no existe esta pregunta';
$string['missinguserid'] = '¡Falta número de identificación del usuario! ¡No se pudo leer el código de barras!';
$string['modulename'] = 'Examen Fuera-de-línea';
$string['modulename_help'] = 'Este módulo le permite al profesor diseñar exámenes fuera-de-línea, que constan de varias preguntas de opción múltiple.
Estas preguntas están mantenidas adentro del banco de preguntas de Moodle y pueden ser re-utilizadas en cursos e inclusive compartirse entre cursos.
Los exámenes fuera-de-línea pueden ser descargados como archivos PDF, DOCX o LaTeX.
El estudiante marca sus respuestas en hojas de repuesta. Las hojas con el formato son escaneadas y las respuestas son importadas al sistema.';
$string['modulenameplural'] = 'Exámenes Fuera-de-línea';
$string['moodleprocessing'] = 'Permitir que Moodle procese los datos';
$string['movecorners'] = 'Cambie primeramente las posiciones de las marcas de esquina. Use arrastrar y soltar.';
$string['moveselectedonpage'] = 'Mover preguntas seleccionadas a la página: {$a}';
$string['multianswersforsingle'] = 'Respuestas múltiples para preguntas de opción única';
$string['multichoice'] = 'Opción múltiple';
$string['multipleanswers'] = 'Elegir al menos una respuesta.';
$string['name'] = 'Nombre del examen fuera-de-línea';
$string['neededcorrection'] = '<strong>Atención: Algunas de sus anotaciones necesitaron corrección manual. Vea los cuadros rojos en la siguiente imagen.
<br />¡Esto implicó intervención manual por un profesor y retrasó la publicación de los resultados del examen fuera-de-línea!</strong>';
$string['newgrade'] = 'Calificado';
$string['newpage'] = 'Página nueva';
$string['noattemptexists'] = 'No existen resultados';
$string['noattempts'] = '¡ Sin resultados importados !';
$string['noattemptsonly'] = 'Mostrar solamente estudiantes sin resultados';
$string['nocourse'] = 'El curso con id {$a->course} al que pertenece el examen fuera-de-línea con ID {$a->offlinequiz} falta.';
$string['nogradesseelater'] = 'Este examen todavía no ha sido calificado para {$a}. Los resultados se publicarán aquí.';
$string['nogroupdata'] = 'No hay datos de grupo para el usuario {$a}';
$string['nomcquestions'] = '¡ No hay preguntas de opción múltiple dentro del grupo {$a} !';
$string['noofflinequiz'] = 'No hay examen fuera-de-línea con id {$a}!';
$string['nopages'] = 'No se importaron páginas';
$string['noparticipantsfound'] = 'No se encontraron participantes';
$string['nopdfscreated'] = '¡ No se crearon documentos !';
$string['noquestions'] = 'Algunos grupos de exámenes fuera-de-línea están vacíos. Por favor, añada algunas preguntas.';
$string['noquestionselected'] = '¡ No se encontraron preguntas !';
$string['noquestionsfound'] = '¡ No hay preguntas en el grupo {$a}!';
$string['noquestionsonpage'] = 'Página vacía';
$string['noresults'] = 'No hay resultados.';
$string['noreview'] = 'Usted no tiene permitido revisar este examen fuera-de-línea';
$string['noscannedpage'] = '¡No hay página escaneada con ID {$a}!';
$string['notagselected'] = 'Sin marcas seleccionadas';
$string['nothingtodo'] = '¡Nada para hacer!';
$string['notxtfile'] = 'No hay archivo TXT';
$string['notyetgraded'] = 'Todavía sin calificar';
$string['nozipfile'] = 'No hay archivo ZIP';
$string['numattempts'] = 'Número de resultados importados: {$a}';
$string['numattemptsqueue'] = '{$a} formatos de respuestas añadidos a la cola. Se enviará un Email a su dirección después del procesamiento de los datos.';
$string['numattemptsverify'] = 'Formatos escaneados esperando corrección: {$a}';
$string['numberformat'] = '¡El valor debe ser un número con {$a} dígitos!';
$string['numbergroups'] = 'Número de grupos (tipos diferentes de exámenes)';
$string['numpages'] = '{$a} páginas importadas';
$string['numquestionsx'] = 'Preguntas: {$a}';
$string['numusersadded'] = '{$a} participantes añadidos';
$string['odsformat'] = 'Hoja de cálculo de OpenDocument (ODS)';
$string['offlineimplementationfor'] = 'Implementación fuera-de-línea para';
$string['offlinequiz:addinstance'] = 'Añadir un examen Fuera-de-línea';
$string['offlinequiz:attempt'] = 'Intentar exámenes';
$string['offlinequiz:changeevaluationmode'] = 'Hace posible el cambiar el modo de evaluación. ADVERTENCIA: ¡NO UTILIZAR EN SISTEMAS EN PRODUCCIÓN!';
$string['offlinequizcloses'] = 'El examen fuera-de-línea se cierra en';
$string['offlinequizcloseson'] = 'La revisión para este examen fuera-de-línea se cierra en {$a}';
$string['offlinequiz:createofflinequiz'] = 'Crear formatos de examen fuera-de-línea';
$string['offlinequiz:deleteattempts'] = 'Eliminar resultados de examen fuera-de-línea';
$string['offlinequiz:grade'] = 'Calificar manualmente exámenes fuera-de-línea';
$string['offlinequizisclosed'] = 'Examen fuera-de-línea cerrado';
$string['offlinequizisclosedwillopen'] = 'Examen fuera-de-línea cerrado (se abre en {$a})';
$string['offlinequizisopen'] = 'Este examen fuera-de-línea está abierto';
$string['offlinequizisopenwillclose'] = 'Examen fuera-de-línea abierto (se cierra en {$a})';
$string['offlinequiz:manage'] = 'Gestionar Exámenes fuera-de-línea';
$string['offlinequizopenedon'] = 'Este examen fuera-de-línea se abrió en {$a}';
$string['offlinequizopens'] = 'Examen fuera-de-línea se abre';
$string['offlinequiz:preview'] = 'Previsualizar Exámenes fuera-de-línea';
$string['offlinequizsettings'] = 'Configuraciones de Examen fuera-de-línea';
$string['offlinequiz:view'] = 'Ver información sobre Exámenes fuera-de-línea';
$string['offlinequiz:viewreports'] = 'Ver reportes de Exámenes fuera-de-línea';
$string['offlinequizwillopen'] = 'El examen fuera-de-línea se abre a {$a}';
$string['oneclickenrol'] = 'Inscripción de 1-Click';
$string['oneclickenroldesc'] = 'Si se activa esta opción, los profesores tienen la posibilidad de inscribir usuarios con un click al corregir los formatos de respuesta (error de "Usuario no está en el curso").';
$string['oneclickrole'] = 'Rol para Inscripción de 1-Click';
$string['oneclickroledesc'] = 'Elija el rol usado para la inscripción de 1-Click. Solamente pueden seleccionarse roles que tengan el arquetipo "estudiante".';
$string['onlylocalcategories'] = 'Solamente categorías locales de preguntas';
$string['orderandpaging'] = 'Orden y Paginación';
$string['orderandpaging_help'] = 'Los números 10, 20, 30, ... opuestos a cada pregunta indican el orden de las preguntas. Los números aumentan en escalones de 10 en 10 para dejarle espacio para insertar preguntas adicionales. Para reordenar las preguntas, cambie  los números y después elija el botón para "Reordenar preguntas".

Para añadir saltos de página después de ciertas preguntas en particular, active las casillas junto a las preguntas y después elija el botón para "Añadir saltos de página después de las preguntas seleccionadas".

Para arreglar las preguntas sobre un número de página, elija el botón para \'Repaginar\' y seleccione el número requerido de preguntas por página.';
$string['orderingofflinequiz'] = 'Orden y Paginación';
$string['otherresultexists'] = '¡Ya existen resultados diferentes para {$a}, importación ignorada! Primero elimine los resultados.';
$string['outof'] = '{$a->grade} de un máximo de {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Retroalimentación global';
$string['overview'] = 'Vista general';
$string['overviewdownload_help'] = 'Descargar Vista General';
$string['pagecorrected'] = 'Hoja corregida de lista de participantes importada';
$string['pageevaluationtask'] = 'Evaluación de hoja-de-respuesta para el plugin de examen-fuera-de-línea';
$string['pageimported'] = 'Hoja de lista de participantes importada';
$string['page-mod-offlinequiz-edit'] = 'Editar página de examen fuera-de-línea';
$string['page-mod-offlinequiz-x'] = 'Cualquier página de examen fuera-de-línea';
$string['pagenotdetected'] = '¡No pudo detectarse código de barras para la página!';
$string['pagenumberimported'] = 'Hoja {$a} de lista de participantes importada';
$string['pagenumberupdate'] = 'Actualización de número de página';
$string['pagesizeparts'] = 'Participantes mostrados por página';
$string['papergray'] = 'Valor de blancura del papel';
$string['papergray_help'] = 'Si las partes blancas de sus formatos de respuestas escaneados están muy oscuras, Usted puede corregirlas al configurar este valor a gris oscuro.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} participantes verificados sin resultados</a>';
$string['partcheckedwithresult'] = '{$a} participantes verificados con resultados';
$string['partial'] = 'parcial';
$string['participants'] = 'Participantes';
$string['participants_help'] = '<p>Las listas de participantes están diseñadas para exámenes fuera-de-línea grandes, con muchos participantes. Las listas le ayudan al profesor para verificar cuales estudiantes participaron en el examen y ver si los resultados se importaron correctamente.
Usted puede añadirle usuarios a listas diferentes. Cada lista podría, por ejemplo, tener a los participantes de un salón particular. Los participantes pueden ser miembros de un grupo especial. Puede usarse una herramienta para registro de grupo para crear estos grupos.
Las listas de participantes pueden descargarse como documentos PDF, imprimirse y marcarse con cruces de la misma manera que los formatos de respuesta de los exámenes fuera-de-línea. Después, se pueden subir a Moodle y los estudiantes marcados serán marcados como presentes en la BasedeDatos. Por favor evite las manchas en los códigos de barras, ya que se usan para identificar a los estudiantes.</p>';
$string['participantsinlists'] = 'Participantes en listas';
$string['participantslist'] = 'Lista de participantes';
$string['participantslists'] = 'Participantes';
$string['partimportnew'] = 'Subiendo lista de participantes';
$string['partimportnew_help'] = '<p>
En esta pestaña Usted puede subir la lista llenada de participantes. Usted puede subir imágenes únicas escaneadas o varias imágenes escaneadas metidas dentro de un archivo-ZIP.  El módulo de exámenes fuera-de-línea procesará en segundo plano los archivos de imágenes. Los nombres de los archivos no son relevantes  pero no deben de contener caracteres especiales como eñe ni vocales acentuadas. Las imágenes deben de ser GIFs, PNGs o TIFs. Se recomienda una resolución de entre 200 y 300 puntos por pulgada (dpi).</p>';
$string['partuncheckedwithoutresult'] = '{$a} participantes no-verificados sin  resultados';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} participantes no-verificados con  resultados</a>';
$string['pdfdeletedforgroup'] = 'Formato para grupo {$a} eliminado';
$string['pdfintro'] = 'Información adicional';
$string['pdfintro_help'] = 'Esta información se imprimirá en la primera página de la hoja de respuestas y debería de contener información general acerca de como llenar el formato de respuestas.';
$string['pdfintrotext'] = '<b>¿Cómo lo contesto correctamente?</b><br />Este formato de respuesta será escaneado automáticamente. Por favor, no lo doble ni lo arrugue. Use una pluma con tinta negra o azul para marcar los campos. Si Usted quiere corregir una respuesta, llene completamente la casilla con color y ese campo será entonces interpretado como una casilla vacía.<br />';
$string['pdfintrotoolarge'] = 'La introducción es demasiado larga (máximo 2000 caracteres).';
$string['pdfscreated'] = 'Se crearon los formatos PDF';
$string['pdfsdeletedforgroup'] = 'Formatos para grupo {$a} eliminados';
$string['pearlywhite'] = 'Blanco perlado';
$string['pluginadministration'] = 'Administración del examen fuera-de-línea';
$string['pluginname'] = 'Examen Fuera_de_línea';
$string['point'] = 'punto';
$string['present'] = 'presente';
$string['preventsamequestion'] = 'Impedir uso múltiple de la misma pregunta en diferentes grupos';
$string['preview'] = 'Vista previa';
$string['previewforgroup'] = 'Vista previa para grupo {$a}';
$string['previewquestion'] = 'Previsualizar pregunta';
$string['printstudycodefield'] = 'Imprimir campo de código de estudio en hoja de respuestas';
$string['printstudycodefield_help'] = 'Si se selecciona, el campo de código de estudio se imprimirá en la primera página de la hoja para respuestas.';
$string['privacy:data_folder_name'] = 'Datos del Offlinequiz';
$string['privacy:metadata:core_files'] = 'El offlinequiz usa el archivo API para almacena las hojas de preguntas generadas, las hojas de respuestas y las hojas de corrección, además de las hojas de respuestas contestadas.';
$string['privacy:metadata:core_question'] = 'Offlinequiz usa la API de pregunta para guardar las preguntas para los exámenes.';
$string['privacy:metadata:mod_quiz'] = 'Offlinequiz usa la API de examen para guardar resultados de los exámenes.';
$string['privacy:metadata:offlinequiz'] = 'La tabla del offlinequiz guarda toda la información específica a una instancia de offlinequiz.';
$string['privacy:metadata:offlinequiz_choices'] = 'Esta tabla guarda la información de todas las cruces para todas las páginas escaneada. La información es necesaria para después crear resultados basados en las cruces.';
$string['privacy:metadata:offlinequiz_choices:choicenumber'] = 'El número de la opción para esta pregunta.';
$string['privacy:metadata:offlinequiz_choices:scannedpageid'] = 'La página escaneada con la que se relaciona la opción.';
$string['privacy:metadata:offlinequiz_choices:slotnumber'] = 'La posición de pregunta para esta opción.';
$string['privacy:metadata:offlinequiz_choices:value'] = 'Si la opción se considera tachada. 0 para no, 1 para si, -1 para incierto.';
$string['privacy:metadata:offlinequiz:course'] = 'La columna \'course\' (curso) en la tabla offlinequiz guarda en cual curso está almacenado este offlinequiz.';
$string['privacy:metadata:offlinequiz:decimalpoints'] = 'La cantidad de puntos decimales a calcular para las calificaciones.';
$string['privacy:metadata:offlinequiz:disableimgnewlines'] = 'Deberían de deshabilitarse nuevas líneas antes y después de imágenes.';
$string['privacy:metadata:offlinequiz:docscreated'] = 'Si los documentos fueron creados, este campo se configura a 1 y de lo contrario es 0.';
$string['privacy:metadata:offlinequiz:fileformat'] = 'El formato que es usado para imprimir las hojas de pregunta, 0 para PDF, 1 para DOCX, 2 para LaTeX.';
$string['privacy:metadata:offlinequiz:fontsize'] = 'El tamaño del tipo de letra (font) en las hojas de preguntas.';
$string['privacy:metadata:offlinequiz:grade'] = 'La calificación muestra la máxima cantidad de puntos a obtener en este offlinequiz.';
$string['privacy:metadata:offlinequiz_group_questions'] = 'Esta tabla guarda todas las preguntas para cada grupo de offlinequiz.';
$string['privacy:metadata:offlinequiz_group_questions:maxmark'] = 'La máxima cantidad de puntos que pueden obtenerse para esta pregunta.';
$string['privacy:metadata:offlinequiz_group_questions:offlinegroupid'] = 'El grupo offlinequiz con el que se relaciona esta pregunta de grupo.';
$string['privacy:metadata:offlinequiz_group_questions:offlinequizid'] = 'El offlinequizid con el cual se relaciona esta pregunta de grupo.';
$string['privacy:metadata:offlinequiz_group_questions:page'] = 'La página en la cual esta pregunta está impresa en las hojas de respuesta.';
$string['privacy:metadata:offlinequiz_group_questions:position'] = 'La posición dentro de este offlinequiz.';
$string['privacy:metadata:offlinequiz_group_questions:questionid'] = 'La id de la pregunta seleccionada.';
$string['privacy:metadata:offlinequiz_group_questions:slot'] = 'La posición de la pregunta en el examen.';
$string['privacy:metadata:offlinequiz_groups'] = 'Tabla para los grupos en la cual toman parte los offlinequizzes.';
$string['privacy:metadata:offlinequiz_groups:answerfilename'] = 'El nombre del archivo que fue usado para guardar el archivo de respuestas.';
$string['privacy:metadata:offlinequiz_groups:correctionfilename'] = 'El archivo que fue usado par guardar el archivo de corrección.';
$string['privacy:metadata:offlinequiz_groups:number'] = 'El número del grupo para este offlinequiz, 1 para grupo A, 2 para grupo B, y así sucesivamente.';
$string['privacy:metadata:offlinequiz_groups:numberofpages'] = 'La cantidad de páginas que se necesitan para imprimir las hojas de respuesta.';
$string['privacy:metadata:offlinequiz_groups:offlinequizid'] = 'La id del offlinequiz al cual pertenece este offlinequiz.';
$string['privacy:metadata:offlinequiz_groups:questionfilename'] = 'El nombre de archivo que fue usado para guardar el archivo de preguntas';
$string['privacy:metadata:offlinequiz_groups:sumgrades'] = 'La suma de todas las calificaciones para todas las preguntas en este grupo.';
$string['privacy:metadata:offlinequiz_groups:templateusageid'] = 'La id de la plantilla usada, la cual es usada para crear un resultado en el API del examen.';
$string['privacy:metadata:offlinequiz_hotspots'] = 'Esta tabla guarda todas las posiciones de las cajas y si es que están evaluadas exitosamente.';
$string['privacy:metadata:offlinequiz_hotspots:blank'] = 'Si el punto caliente es analizado exitosamente.';
$string['privacy:metadata:offlinequiz_hotspots:name'] = 'Tipo del punto caliente; por ejemplo, u%number para punto caliente del usuario, a-0-0 para pregunta 1 respuesta 1, y así sucesivamente.';
$string['privacy:metadata:offlinequiz_hotspots:scannedpageid'] = 'Página escaneada en donde está el punto caliente.';
$string['privacy:metadata:offlinequiz_hotspots:time'] = 'La última hora de actualización para este punto caliente.';
$string['privacy:metadata:offlinequiz_hotspots:x'] = 'El valor X del punto caliente.';
$string['privacy:metadata:offlinequiz_hotspots:y'] = 'El valor Y del punto caliente.';
$string['privacy:metadata:offlinequiz:id_digits'] = 'Guarda el número de dígitos que tenía el idnumber cuando fueron creadas las hojas de respuestas. Esto es necesario para retro-compatibilidad si la cantidad es elevada entre la creación y la importación de las hojas de respuestas.';
$string['privacy:metadata:offlinequiz:introformat'] = 'Este campo no es utilizado.';
$string['privacy:metadata:offlinequiz:name'] = 'La columna \'name\' (nombre) guarda el nombre del offlinequiz.';
$string['privacy:metadata:offlinequiz:numgroups'] = 'La cantidad de grupos que tiene este offlinequiz.';
$string['privacy:metadata:offlinequiz_page_corners'] = 'Esta tabla guarda todas las respuestas para todas las páginas escaneadas para evaluarlas más rápido para la siguiente evaluación o corrección.';
$string['privacy:metadata:offlinequiz_page_corners:position'] = 'La información sobre si es que esta esquina está o no en la parte superior o inferior y derecha o izquierda.';
$string['privacy:metadata:offlinequiz_page_corners:scannedpageid'] = 'La página escaneada donde está esta esquina.';
$string['privacy:metadata:offlinequiz_page_corners:x'] = 'El valor X de la esquina.';
$string['privacy:metadata:offlinequiz_page_corners:y'] = 'El valor Y de la esquina.';
$string['privacy:metadata:offlinequiz:papergray'] = 'El valor del blanco de este offlinequiz.';
$string['privacy:metadata:offlinequiz_participants'] = 'La tabla de participantes guarda la información si es que el usuario estaba tomando parte en el offlinequiz o no.';
$string['privacy:metadata:offlinequiz_participants:checked'] = 'La información acerca de si este usuario fue verificado en la lista de participantes.';
$string['privacy:metadata:offlinequiz_participants:listid'] = 'La id de la lista donde está este participante.';
$string['privacy:metadata:offlinequiz_participants:userid'] = 'El userid del usuario.';
$string['privacy:metadata:offlinequiz_p_choices'] = 'Esta tabla guarda todas las cruces (taches) para las listas de participantes.';
$string['privacy:metadata:offlinequiz_p_choices:scannedpageid'] = 'La página escaneada a la que se refiere esta opción.';
$string['privacy:metadata:offlinequiz_p_choices:userid'] = 'El userid al que se refiere esta opción.';
$string['privacy:metadata:offlinequiz_p_choices:value'] = 'Si el tache está rellenado o no (0 para no llenado, 1 para llenado, -1 para incierto).';
$string['privacy:metadata:offlinequiz:pdfintro'] = 'La información adicional que es insertada dentro de las hojas de preguntas al principio.';
$string['privacy:metadata:offlinequiz_p_lists'] = 'Esta tabla guarda información acerca de las listas de participantes donde los profesores pueden tachar si un estudiante estaba allí o no.';
$string['privacy:metadata:offlinequiz_p_lists:filename'] = 'El nombre del archivo para la lista.';
$string['privacy:metadata:offlinequiz_p_lists:name'] = 'El nombre de la lista de participantes.';
$string['privacy:metadata:offlinequiz_p_lists:number'] = 'El número de la lista en el offlinequiz.';
$string['privacy:metadata:offlinequiz_p_lists:offlinequizid'] = 'El offlinequiz al cual pertenece esta lista.';
$string['privacy:metadata:offlinequiz:printstudycodefield'] = 'Una preferencia acerca de si el código de estudio debería ser impreso en el formulario de la pregunta. 1 para cierto, 0 en caso contrario.';
$string['privacy:metadata:offlinequiz_queue'] = 'Esta tabla guarda una cola de una subida. Para cada subida hay un objeto propio en esta tabla.';
$string['privacy:metadata:offlinequiz_queue_data'] = 'Esta tabla guarda datos para la cola de espera ya que cada archivo en la cola de espera obtendrá un objeto de datos en cola de espera.';
$string['privacy:metadata:offlinequiz_queue_data:error'] = 'Si el estado es error, aquí habrá un mensaje de error más detallado.';
$string['privacy:metadata:offlinequiz_queue_data:filename'] = 'El nombre del archivo con el cual se relaciona esta consulta.';
$string['privacy:metadata:offlinequiz_queue_data:queueid'] = 'La cola a la que pertenecen estos datos.';
$string['privacy:metadata:offlinequiz_queue_data:status'] = 'El estado de los datos en la cola.';
$string['privacy:metadata:offlinequiz_queue:importuserid'] = 'El userid del profesor que importó los archivos.';
$string['privacy:metadata:offlinequiz_queue:offlinequizid'] = 'La id del offlinequiz de la cola.';
$string['privacy:metadata:offlinequiz_queue:status'] = 'El estado de la cola que es necesitada.';
$string['privacy:metadata:offlinequiz_queue:timecreated'] = 'La hora en la cual fueron importadas las hojas del offlinequiz.';
$string['privacy:metadata:offlinequiz_queue:timefinish'] = 'La hora en la que fue terminada la evaluación de la cola.';
$string['privacy:metadata:offlinequiz_queue:timestart'] = 'La hora en la que fue iniciada la evaluación de la cola.';
$string['privacy:metadata:offlinequiz_results'] = 'Esta tabla guarda todos los datos del resultado, que no son almacenables en el API del examen.';
$string['privacy:metadata:offlinequiz_results:offlinegroupid'] = 'El grupo offlinequiz  al cual pertenecen estos resultados.';
$string['privacy:metadata:offlinequiz_results:offlinequizid'] = 'El offlinequiz  al cual pertenecen estos resultados';
$string['privacy:metadata:offlinequiz_results:status'] = 'El estado del resultado (incompleto o completo).';
$string['privacy:metadata:offlinequiz_results:sumgrades'] = 'La suma de todas las calificaciones para este resultado.';
$string['privacy:metadata:offlinequiz_results:teacherid'] = 'El profesor que subió el resultado.';
$string['privacy:metadata:offlinequiz_results:timefinish'] = 'La hora del fin cuando el resultado fue insertado por primera vez.';
$string['privacy:metadata:offlinequiz_results:timemodified'] = 'La fecha de modificación del resultado.';
$string['privacy:metadata:offlinequiz_results:timestart'] = 'El principio de la hora de cuando el resultado fue insertado por primera vez.';
$string['privacy:metadata:offlinequiz_results:usageid'] = 'La ID de uso de plantilla de API del examen en donde es guardado este resultado.';
$string['privacy:metadata:offlinequiz_results:userid'] = 'El usuario al cual pertenece este resultado.';
$string['privacy:metadata:offlinequiz:review'] = 'Esta columna guarda información acerca de como es hecha la revisión.';
$string['privacy:metadata:offlinequiz_scanned_pages'] = 'La tabla guarda información acerca de una página escaneada de un offlinequiz.';
$string['privacy:metadata:offlinequiz_scanned_pages:error'] = 'El error detallado que tiene esta página (si existe).';
$string['privacy:metadata:offlinequiz_scanned_pages:filename'] = 'El nombre del archivo de la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_pages:groupnumber'] = 'El número de grupo del grupo al que pertenece este offlinequiz.';
$string['privacy:metadata:offlinequiz_scanned_pages:offlinequizid'] = 'El offlinequiz de la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_pages:pagenumber'] = 'El número de página de esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:resultid'] = 'El resultado relacionado con esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:status'] = 'El estado de esta página.';
$string['privacy:metadata:offlinequiz_scanned_pages:time'] = 'La hora de cuando fue procesada la página.';
$string['privacy:metadata:offlinequiz_scanned_pages:userkey'] = 'El userkey (no es el userid) del usuario tachado en la página.';
$string['privacy:metadata:offlinequiz_scanned_pages:warningfilename'] = 'El nombre de archivo del archivo que es creado cuando es corregido un llenado equivocado en offlinequiz y al usuario se le proporciona una advertencia a ese respecto.';
$string['privacy:metadata:offlinequiz_scanned_p_pages'] = 'Esta tabla guarda las páginas de participantes y sus informaciones generales.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:error'] = 'El error (si existiera) que esta página disparó al procesarse.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:filename'] = 'El nombre del archivo para la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:listnumber'] = 'El número de la lista.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:offlinequizid'] = 'El offlinequiz al que pertenece esta página de participantes.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:status'] = 'El estado de la página escaneada.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:time'] = 'La hora de cuando fue procesada esta página.';
$string['privacy:metadata:offlinequiz:showgrades'] = 'Guarda si es que la cantidad de puntos a obtener por la pregunta debería de estar impresa en la hoja de preguntas.';
$string['privacy:metadata:offlinequiz:showquestioninfo'] = 'Guarda información acerca de si las preguntas deberían de ser mostradas, 0 para no, 1 para información sobre el tipo de pregunta, 2 para información sobre la cantidad de respuestas correctas.';
$string['privacy:metadata:offlinequiz:showtutorial'] = 'Guarda si es que a los participantes se les pedirá que hagan un tutorial del offlinequiz.';
$string['privacy:metadata:offlinequiz:shufflequestions'] = 'Una preferencia acerca de si las preguntas deberían ser barajeadas al crear un offlinequiz; 1 para barajear, 0 en caso contrario.';
$string['privacy:metadata:offlinequiz:time'] = 'La columna de hora guarda la fecha del offlinequiz.';
$string['privacy:metadata:offlinequiz:timeclose'] = 'La columna timeclose (hora_de_cierre) guarda cuando el offlinequiz fue/será cerrado.';
$string['privacy:metadata:offlinequiz:timecreated'] = 'La columna de horacreada guarda información acerca de cuando fue creado el offlinequiz.';
$string['privacy:metadata:offlinequiz:timemodified'] = 'La columna de horademodificación guarda la hora de cuando el offlinequiz fue cambiado por última vez.';
$string['privacy:metadata:offlinequiz:timeopen'] = 'La columna timeopen (hora_de_apertura) guarda cuando fue/será abierto un offlinequiz.';
$string['questionanalysis'] = 'Análisis de dificultad';
$string['questionanalysistitle'] = 'Tabla de Análisis de Dificultad';
$string['questionbankcontents'] = 'Contenidos del banco de preguntas';
$string['questionforms'] = 'Formatos de preguntas';
$string['questioninfoanswers'] = 'Número de respuestas correctas';
$string['questioninfocorrectanswer'] = 'respuesta correcta';
$string['questioninfocorrectanswers'] = 'respuestas correctas';
$string['questioninfonone'] = 'Nada';
$string['questioninfoqtype'] = 'Tipo de pregunta';
$string['questionname'] = 'Nombre de la pregunta';
$string['questionpage'] = 'Página';
$string['questionsheet'] = 'Hoja de preguntas';
$string['questionsheetlatextemplate'] = '% !TEX encoding = UTF-8 Unicode
\\documentclass[11pt,a4paper]{article}
\\usepackage[utf8x]{inputenc}
\\usepackage[T1]{fontenc}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % for \\implies etc
\\usepackage{amsfonts} % for \\mathbb etc
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % For using hyperlinks
\\usepackage{ifthen}
\\usepackage{enumitem}
\\usepackage{xcolor}
\\usepackage{ulem}
\\parindent 0pt % no indent on the beginning of a section
\\renewcommand\\UrlFont{\\sf}
\\usepackage{lastpage}
\\usepackage{fancyhdr}
\\pagestyle{fancy}
\\chead{\\sc \\Title, Group \\Group}
\\cfoot{Seite \\thepage/\\pageref{LastPage}}
\\makeatletter %%% disable pagebreaks between answers
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
\\newcommand{\\answerIs}[1]{} %%%Disable showing the right answer
% \\newcommand{\\answerIs}[1]{[#1]} %%%Enable showing the right answer
%%%


% ===========================================================================================================
%%% Datos del curso:
\\newcommand{\\Group}{{$a->groupname}}
\\newcommand{\\Title}{{$a->coursename}}
\\newcommand{\\Date}

\\newcommand{\\TestTitle}{%
\\begin{center}
{\\bf \\Large Question sheet}\\\\[3mm]
\\fbox{
\\begin{tabular}{rl}
\\rule{0pt}{25pt} Name: & $\\underline{\\hspace*{8cm}}$ \\rule{20pt}{0pt}\\\\[5mm]
ID number: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]
\\ifthenelse{\\equal{true}{{$a->printstudycodefield}}}{\\rule{10pt}{0pt} Study code: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]}{}
\\rule[-20pt]{0pt}{20pt} Signature: & $\\underline{\\hspace*{8cm}}$
\\end{tabular}}
\\end{center}
}

\\InputIfFileExists{offline_test_extras.tex}{}{} % Input extra user definitions

\\begin{document}


% ===========================================================================================================
\\TestTitle

% ===========================================================================================================


\\bigskip
% ===========================================================================================================

{$a->pdfintrotext}

% ===========================================================================================================

\\newpage

% ===========================================================================================================


{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Preguntas en';
$string['questionsingroup'] = 'Preguntas en el grupo';
$string['questionsinthisofflinequiz'] = 'Preguntas en este examen fuera-de-línea';
$string['questiontextisempty'] = '[Texto de pregunta vacía]';
$string['quizdate'] = 'Fecha del examen fuera-de-línea';
$string['quizopenclose'] = 'Fechas de apertura y cierre';
$string['quizopenclose_help'] = 'Los estudiantes solamente pueden ver su(s) intento(s) después de la fecha de apertura y antes de la fecha de cierre.';
$string['quizquestions'] = 'Preguntas del Examen';
$string['randomfromexistingcategory'] = 'Pregunta aleatoria de una categoría existente';
$string['randomnumber'] = 'Número de preguntas aleatorias';
$string['randomquestionusinganewcategory'] = 'Pregunta aleatoria usando una categoría nueva';
$string['readjust'] = 'Reajustar';
$string['reallydeletepdfs'] = '¿Realmente desea eliminar los archivos de formato?';
$string['reallydeleteupdatepdf'] = '¿Realmente desea eliminar y atualizar la lista de participantes?';
$string['recreatepdfs'] = 'Re-crear PDFs';
$string['recurse'] = 'Incluir también preguntas de subcategorías';
$string['rediswrong'] = 'cruz equivocada o falta cruz';
$string['refreshpreview'] = 'Refrescar vista previa';
$string['regrade'] = 'Recalificar';
$string['regradedisplayexplanation'] = '<b>Atención:</b> ¡Re-calificar no cambiará las puntuaciones que hayan sido sobrescritas manualmente!';
$string['regradinginfo'] = 'Si Usted cambia el puntaje para una pregunta, Usted debe re-calificar el offlinequiz para actualizar los resultados de los participantes.';
$string['regradingquiz'] = 'Recalificando';
$string['regradingresult'] = 'Re-clificando resultado para el usuario {$a}...';
$string['reloadpreview'] = 'Re-cargar vista previa';
$string['reloadquestionlist'] = 'Re-cargar lista de pregunta';
$string['remove'] = 'Quitar';
$string['removeemptypage'] = 'Quitar página vacía';
$string['removepagebreak'] = 'Quitar salto de página';
$string['removeselected'] = 'Quitar seleccionadas';
$string['reordergroupquestions'] = 'Reordenar Preguntas del Grupo';
$string['reorderquestions'] = 'Reordenar preguntas';
$string['reordertool'] = 'Mostrar la herramienta para re-ordenación';
$string['repaginate'] = 'Repaginar con {$a} preguntas por página';
$string['repaginatecommand'] = 'Repaginar';
$string['repaginatenow'] = 'Repaginar ahora';
$string['reportends'] = 'Revisión de resultados termina';
$string['reportoverview'] = 'Vista general';
$string['reportstarts'] = 'Revisión de resultados inicia';
$string['resetofflinequizzes'] = 'Reiniciar datos de Examen Fuera-de-línea';
$string['resultexists'] = 'Ya existen los mismos resultados para {$a} , importación ignorada';
$string['resultimport'] = 'Importar resultados';
$string['results'] = 'Resultados';
$string['review'] = 'Revisión';
$string['reviewbefore'] = 'Permitir revisión mientras el examen fuera-de-línea esté abierto';
$string['reviewclosed'] = 'Después de que cierre el examen fuera-de-líinea';
$string['reviewcloses'] = 'Se cierra la revisión';
$string['reviewimmediately'] = 'Inmediatamente después del intento';
$string['reviewincludes'] = 'La revisión incluye';
$string['reviewofresult'] = 'Revisión del resultado';
$string['reviewopens'] = 'Se abre para revisión';
$string['reviewoptions'] = 'Los estudiantes pueden ver';
$string['reviewoptionsheading'] = 'Opciones para revisión';
$string['reviewoptions_help'] = 'Con estas opciones Usted puede controlar lo que los estudiantes pueden ver después de que los resultados fueron importados.
Usted también puede definir las horas de inicio y fin para el reporte de resultados. Las casillas de selección significan:
<table>
<tr><td style="vertical-align: top;"><b>El intento</b></td><td>
El texto de las preguntas y respuestas será mostrado a los estudiantes. Ellos verán cuales respuestas eligieron, pero no serán indicadas las respuestas correctas.</td>
</td></tr>
<tr><td style="vertical-align: top;"><b>Si es que es correcta</b></td><td>
Esta opción solamente puede ser activada si la opción "El intento" está activada. Si está activada, los estudiantes pueden ver cual de las respuestas elegidas son correctas (fondo verde) o incorrectas (fondo rojo).
</td></tr>
<tr><td style="vertical-align: top;"><b>Puntos</b></td><td>
Los puntajes del grupo (por ejemplo, B), (calificación lograda, calificación total para preguntas, obtenidas en porcentaje, por ejemplo 40/80 (50)) y la calificación (por ejemplo 50 de un máximo de 100) son mostradas.
Aditionalmente, si "El intento" está seleccionada, el puntaje logrado y el puntaje máximo son mostrados para cada pregunta.
</td></tr>
<tr><td style="vertical-align: top;"><b>Retroalimentación específica</b></td><td>
La retroalimentación que depende de cual respuesta dio el estudiante.
</td></tr>
<tr><td style="vertical-align: top;"><b>Retroalimentación general </b></td><td>
<p>La retroalimentación general es mostrada al estudiante después de que los resultados fueron importados.
A diferencia de la retroalimentación específica, la cual depende del tipo de pregunta y la respuesta que dio el estudiante, la misma retroalimentacón general es mostrada a todos los estudiantes.</p>
<p></p><p>Usted puede usar la retroalimentación general para darle a los estudiantes una respuesta completamente trabajada y probablemente un enlace a mayor información que ellos puedan usar si no entendieron las preguntas.</p>
</td></tr>
<tr><td style="vertical-align: top;"><b>Respuestas Correctas</b></td><td>
Se muestran cuales respuestas son correctas o incorrectas. Esta opción solamente está disponible si está configurado "El intento" .
</td></tr>
<tr><td style="vertical-align: top;"><b>Formato escaneado</b></td><td>
Los formatos de respuesta escaneados son mostrados. Las casillas seleccionadas están marcadas con cuadros verdes.
</td></tr>
<tr><td style="vertical-align: top;"><b>Formato escaneado con calificaciones</b></td><td>
Los formatos de respuesta escaneados son mostrados. Las casillas seleccionadas están marcadas con cuadros verdes. Las marcaciones incorrectas y marcaciones faltantes están resaltadas.
Adicionalmente, una tabla muestra la calificaciónmáxima y la calificación lograda para cada pregunta.
</td></tr>
</table>';
$string['rimport'] = 'Subir/Corregir';
$string['rotate'] = 'Rotar';
$string['rotatingsheet'] = 'La hoja está girada ...';
$string['save'] = 'Guardar';
$string['saveandshow'] = 'Guardar y mostrarle cambios al estudiante';
$string['savescannersettings'] = 'Guardar configuraciones del escaner';
$string['scannedform'] = 'Formato escaneado';
$string['scannerformfortype'] = 'Formato para tipo {$a}';
$string['scanneroptions'] = 'Configuraciones del escaner';
$string['scannerpdfs'] = 'Formatos vacíos';
$string['scannerpdfstext'] = 'Descargue los siguientes formatos vacíos si Usted desea usar su propio \'\'software\'\' para el escaner.';
$string['scanningoptionsheading'] = 'Opciones para escanear';
$string['score'] = 'Puntaje';
$string['search:activity'] = 'Examen Fuera-de-línea - información de actividad';
$string['select'] = 'Seleccionar';
$string['selectagroup'] = 'Seleccionar un grupo';
$string['selectall'] = 'Seleccionar todo';
$string['selectcategory'] = 'Seleccionar categoría';
$string['selectdifferentgroup'] = '¡Por favor, seleccione un grupo diferente!';
$string['selectedattempts'] = 'Intentos selecionados ...';
$string['selectformat'] = 'Seleccionar formato ...';
$string['selectgroup'] = 'Seleccionar grupo';
$string['selectlist'] = 'Por favor, seleccione una lista o trate de reajustar la hoja:';
$string['selectmultipletoolbar'] = 'Seleccionar múltiples barras-de-herramientas';
$string['selectnone'] = 'Des-seleccionar todo';
$string['selectpage'] = 'Por favor, seleccione número de página o trate de reajustar la hoja:';
$string['selectquestiontype'] = '-- Seleccionar tipo de preguntas --';
$string['showallparts'] = 'Mostrar a todos los {$a} participantes';
$string['showcopyright'] = 'Mostrar declaración sobre Derechos de Autor (copyright)';
$string['showcopyrightdesc'] = 'Si Usted habilita esta opción, se mostrará una declaratoria sobre Derechos de Autor (\'\'copyright\'\')  en la página de revisar resultados del estudiante.';
$string['showgrades'] = 'Imprimir puntos para cada pregunta';
$string['showgrades_help'] = 'Esta opción controla si es que los puntos máximos posibles de las preguntas del examen fuera-de-línea deberían o no de imprimirse en la hoja de preguntas.';
$string['showmissingattemptonly'] = 'Mostrar todos los participantes verificados sin resultados';
$string['showmissingcheckonly'] = 'Mostrar todos los participantes no-verificados con resultados';
$string['shownumpartsperpage'] = 'Mostrar  {$a} participantes por página';
$string['showquestioninfo'] = 'Imprimir información acerca de respuestas';
$string['showquestioninfo_help'] = 'Con esta opción Usted puede controlar cual información adicional acerca de la pregunta es impresa en la hoja de respuestas.
Usted puede elegir una de estas:
<ul>
<li> Nada
<li> Tipo de pregunta - Dependiendo del tipo de pregunta Opción-Única, Opción-Múltiple, Opción-Múltiple Todo-o-Nada  será impresa
<li> Número de respuestas correctas - Se imprimirá el número de respuestas correctas
</ul>';
$string['showstudentview'] = 'Mostrar vista del estudiante';
$string['showtutorial'] = 'Mostrarle a los estudiantes un tutorial de examen fuera-de-línea.';
$string['showtutorialdescription'] = 'Usted puede añadirle a la página del curso un enlace hacia el tutorial usando la siguiente URL:';
$string['showtutorial_help'] = 'Esta opción determina si es que los estudiantes pueden ver un tutorial acerca de las características básicas de los exámenes fuera-de-línea.
El tutorial proporciona información acerca de cómo manejar los diferentes tipos de documentos en exámenes fuera-de-línea. En una parte interactiva ellos aprenden como marcar su ID de estudiante correctamente.<br />
<b>Por favor tenga en cuenta que:</b><br />
Si Usted configura esta opción en "Si" pero les oculta el examen fuera-de-línea, el enlace hacia el tutorial no será visible. En este caso, Usted puede añadir un enlace hacia el tutorial dentro de la página del curso.';
$string['shuffleanswers'] = 'Barajar respuestas';
$string['shufflequestions'] = 'Barajar preguntas';
$string['shufflequestionsanswers'] = 'Barajar preguntas y respuestas';
$string['shufflequestionsselected'] = 'Se ha configurado el barajar preguntas, por lo que algunas acciones relacionadas con las páginas no están disponibles. Para cambiar la opción de barajar, {$a}.';
$string['shufflewithin'] = 'Barajar dentro de las preguntas';
$string['shufflewithin_help'] = 'Si se habilita, las partes que componen cada pregunta se barajarán aleatoriamente cada vez que Usted presione el botón para Re-cargar en la vista previa del formato. NOTA: Esta configuración solamente aplica para preguntas que tengan activada la opción para barajarse.';
$string['signature'] = 'Firma';
$string['singlechoice'] = 'Opción Única';
$string['standard'] = 'Estandar';
$string['starttutorial'] = 'Iniciar tutorial acerca del examen';
$string['statistics'] = 'Estadísticas';
$string['statisticsplural'] = 'Estadísticas';
$string['statsoverview'] = 'Vista general de Estadísticas';
$string['studycode'] = 'Código de estudio';
$string['temporaryfiledeletiontask'] = 'Eliminar archivos temporales';
$string['theattempt'] = 'El Intento';
$string['timesup'] = '¡Se agotó el tiempo!';
$string['totalmarksx'] = 'Total de puntos: {$a}';
$string['totalpointsx'] = 'Total de puntos: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Total de {$a} preguntas en categoría.';
$string['trigger'] = 'límite inferior/superior';
$string['tutorial'] = 'Tutorial para exámenes fuera-de-línea';
$string['type'] = 'Tipo';
$string['uncheckparts'] = 'Marcar a los participantes seleccionados como ausentes';
$string['updatedsumgrades'] = 'La suma de todas las calificaciones del grupo {$a->letter} fue re-calculada a {$a->grade}.';
$string['upgradingfilenames'] = 'Actualizando los nombres de los archivos de los documentos: examen fuera-de-línea {$a->done}/{$a->outof} (ID del Examen fuera-de-línea {$a->info})';
$string['upgradingilogs'] = 'Actualizando páginas escaneadas: página escaneada {$a->done}/{$a->outof} <br/>(ID del Examen Fuera-de-línea {$a->info})';
$string['upgradingofflinequizattempts'] = 'Actualizando intentos de resolver examen fuera-de-línea: offline quiz {$a->done}/{$a->outof} <br/>(ID del Examen Fuera-de-línea {$a->info})';
$string['upload'] = 'Subir/Corregir';
$string['uploadpart'] = 'Subir/Corregir listas de participantes';
$string['uppertrigger'] = 'Segundo límite superior';
$string['uppertriggerzero'] = 'El Segundo límite superior es cero';
$string['upperwarning'] = 'Primer límite superior';
$string['upperwarningzero'] = 'El Primer límite superior es cero';
$string['useradded'] = 'Usuario {$a} añadido';
$string['userdoesnotexist'] = 'Usuario {$a} no existe en el sistema';
$string['useridentification'] = 'Identificación del examen';
$string['useridviolation'] = 'Se encontraron varios usuarios';
$string['userimported'] = 'Usuario {$a} importado y calificado';
$string['usernotincourse'] = 'Usuario {$a} no está en el curso';
$string['usernotinlist'] = '¡Usuario no registrado en la lista!';
$string['usernotregistered'] = 'Usuario {$a} no registrado en el curso';
$string['userpageimported'] = 'Página única importada para el usuario {$a}';
$string['valuezero'] = 'El valor no debería de ser cero';
$string['viewresults'] = 'Ver resultados';
$string['white'] = 'Blanco';
$string['withselected'] = 'Con seleccionados ...';
$string['zerogradewarning'] = 'Advertencia: ¡ Su calificación del examen-fuera-de-línea es 0.0 !';
$string['zipfile'] = 'Archivo ZIP';
$string['zipok'] = 'Archivo ZIP importado';
