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
 * Strings for component 'certificate', language 'es_mx', branch 'MOODLE_33_STABLE'
 *
 * @package   certificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Añadir otra opción de actividad enlazada';
$string['addlinktitle'] = 'Elija para añadir otra opción de actividad enlazada';
$string['areaintro'] = 'Introducción al certificado';
$string['awarded'] = 'Otorgado';
$string['awardedto'] = 'Otorgado a';
$string['back'] = 'Reverso';
$string['border'] = 'Borde';
$string['borderblack'] = 'Negro';
$string['borderblue'] = 'Azul';
$string['borderbrown'] = 'Café';
$string['bordercolor'] = 'Líneas del borde';
$string['bordercolor_help'] = 'Dado que las imágenes pueden aumentar sustancialmente el tamaño del archivo PDF, Usted puede elegir imprimir un borde de líneas en lugar de emplear una imágen para el borde (asegúrese de que la opción de imágen del Borde sea No). La opción de líneas del borde imprimirá un borde lindo de tres líneas de anchos variables del color elegido.';
$string['bordergreen'] = 'Verde';
$string['borderlines'] = 'Líneas';
$string['borderstyle'] = 'Imágen del borde';
$string['borderstyle_help'] = 'La opción de imágen del borde le permite elegir una imágen para el borde entre las que están en la carpeta certificate/pix/borders. Elija la imágen del borde que desee que aparezca alrededor de las orillas del certificado o déjela sin borde.';
$string['certificate'] = 'Código de verificación para certificado:';
$string['certificate:addinstance'] = 'Añadir una instacia de Certificado';
$string['certificate:manage'] = 'Gestionar una instacia de Certificado';
$string['certificatename'] = 'Nombre de certificado';
$string['certificate:printteacher'] = 'Ser enlistado como un profesor en el certificado si está activada la configuración de imprimir profesor';
$string['certificatereport'] = 'Reporte de certificados';
$string['certificatesfor'] = 'Certificados para';
$string['certificate:student'] = 'Buscar un certificado';
$string['certificatetype'] = 'Tipo de Certificado';
$string['certificatetype_help'] = 'Aquí es donde Usted determina el diseño del certificado. La carpeta del tipo de certificado incluye cuatro certificados por defecto:
 A4 Incrustado imprime en papel tamaño A4 (europeo) con tipos de letra incrustados.
A4 No-Incrustado imprime en papel tamaño A4 (europeo) sin tipos de letra incrustados.
Carta incrustado imprime en papel tamaño carta (para México) con tipos de letra incrustados.
Carta no-incrustado imprime en papel tamaño carta (para México) sin tipos de letra incrustados

Los tipos de diseño no-incrustados emplean los tipos de letra Helvetica yTimes. Si Usted cree que sus usuarios no tendrán instalados estos tipos de letra en sus computadoras, o si su idioma emplea caracteres y símbolos que no están incluidos en los tipos de letra Helvetica y Times, entonces debe elegir tipos incrustados. Los tipos de diseños  incrustados usan los tipos de letra Dejavusans y Dejavuserif. Esto hará que los archivos PDF sean bastante grandes; por eso no se recomienda emplear una variedad incrustada a menos que realmente la necesite.

Se pueden añadir carpetas con nuevos tipos de letra en la carpeta de certificate/type. El nombre de la carpeta y cualquier cadena de idioma nueva deberán añadirse al archivo de idioma del certificado.';
$string['certificate:view'] = 'Ver un certificado';
$string['certify'] = 'Hace constar que';
$string['code'] = 'Código';
$string['completiondate'] = 'Finalización del curso';
$string['course'] = 'Para';
$string['coursegrade'] = 'Calificación del Curso';
$string['coursename'] = 'Curso';
$string['coursetimereq'] = 'Minutos requeridos dentro del curso';
$string['coursetimereq_help'] = 'Escriba aquí el tiempo, en minutos, que un estudiante debe estar ingresado en un curso antes de que pueda recibir el certificado.';
$string['credithours'] = 'Horas crédito';
$string['customtext'] = 'Texto a la medida';
$string['customtext_help'] = 'Si quiere que el certificado imprima nombres diferentes para el profesor en lugar de los que tienen asignado el rol de profesor, no elija \'Imprimir Profesor\' ni imágen de firma, exceptuando la imágen de línea. Introduzca los nombres de los profesores en este cuadro de texto tal como Usted quiera que aparezcan. Por defecto, este texto se coloca en la parte inferior izquierda del certificado. Las siguientes marcas HTML están disponibles:<br>, <p>, <b>, <i>, <u>, <img> (src ywidth (or height) son obligatorias), <a> (href es obligatoria), <font> (los atributos posibles son: color, (hex color code), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'En';
$string['datefmt'] = 'Formato de fecha';
$string['datefmt_help'] = 'Elija un formato de fecha para imprimir la fecha en el certificado. O, elija la última opción para que se imprima la fecha en el formato de fecha del idioma elegido por el usuario.';
$string['datehelp'] = 'Fecha';
$string['deletissuedcertificates'] = 'Borrar certificados emitidos';
$string['delivery'] = 'Entregar';
$string['delivery_help'] = 'Elija aquí cómo desea que sus estudiantes obtengan su certificado.
Abrir en navegador: Abre el certificado en una nueva ventana del navegador.
Forzar descarga: Abre la ventana para descargar archivo del navegador
Email Certificado: Eligiendo esta opción manda el certificado al estudiante como un anexo de email.
Después de que un usuario reciba su certificado, si eligen el enlace del certificado en la página inicial del curso, verán la fecha en que recibieron el certificado y podrán visualizar el certificado recibido.';
$string['designoptions'] = 'Opciones de diseño';
$string['download'] = 'Forzar descarga';
$string['emailcertificate'] = 'Email';
$string['emailothers'] = 'Email otros';
$string['emailothers_help'] = 'Introduzca las dircciones de correo electrónico aquí, separadas por coma, de quienes deberán ser avisados por correo cuando los estudiantes reciban un certificado.';
$string['emailstudenttext'] = 'Se anexa su certificado para {$a->course}.';
$string['emailteachermail'] = '{$a->student} ha recibido su certificado: \'{$a->certificate}\' para {$a->course}.

Usted puede revisarlo aquí:

 {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} ha recibido su certificado: \'<i>{$a->certificate}</i>\' para {$a->course}. Usted puede revisarlo aquí <a href="{$a->url}">Certificate Report</a>.';
$string['emailteachers'] = 'Email a Profesores';
$string['emailteachers_help'] = 'Si se habilita, entonces los profesores serán alertados por email cuando los estudiantes reciban un certificado.';
$string['entercode'] = 'Introduzca el código del certificado a verificar:';
$string['fontsans'] = 'Familia de tipos de letras Sans-serif';
$string['fontsans_desc'] = 'Familia de tipos de letras Sans-serif para certificados con tipos de letra incrustados';
$string['fontserif'] = 'Familia de tipos de letras Serif';
$string['fontserif_desc'] = 'Familia de tipos de letras Serif para certificados con tipos de letra incrustados';
$string['getcertificate'] = 'Obtener su certificado';
$string['grade'] = 'Calificación';
$string['gradedate'] = 'Fecha de calificación';
$string['gradefmt'] = 'Formato de calificación';
$string['gradefmt_help'] = 'Hay tres opciones de formatos disponibles si Usted elige imprimir una calificación en el certificado:

Calificación en porciento: Imprime la calificación como porcentaje.
Puntos de calificación: Imprime el valor en puntos de la calificación.
Calificación en letra: Imprime el porcentaje de calificación con una letra.';
$string['gradeletter'] = 'Calificación en letra';
$string['gradepercent'] = 'Calificación en porciento';
$string['gradepoints'] = 'Puntos de calificación';
$string['imagetype'] = 'Tipo de imagen';
$string['incompletemessage'] = 'Para descargar su certificado, Usted debe primeramente completar todas las actividades requeridas. Por favor regrese al curso para completar su trabajo.';
$string['intro'] = 'Introducción';
$string['issued'] = 'Emitido';
$string['issueddate'] = 'Fecha de emisión';
$string['issueoptions'] = 'Opciones de emisión';
$string['landscape'] = 'Apaisado';
$string['lastviewed'] = 'Usted recibió este certificado por última vez en:';
$string['letter'] = 'Carta';
$string['lockingoptions'] = 'Opciones para bloquear';
$string['modulename'] = 'Certificado';
$string['modulename_help'] = 'Este módulo permite la generación dinámica de certificados basados en condiciones predefinidas configuradas por el profesor.';
$string['modulenameplural'] = 'Certificados';
$string['mycertificates'] = 'Mis certificados';
$string['nocertificates'] = 'No hay certificados';
$string['nocertificatesissued'] = 'No hay certificados emitidos';
$string['nocertificatesreceived'] = 'no ha recibido ningún certificado de curso.';
$string['nofileselected'] = '¡Debe seleccionar un archivo para subir!';
$string['nogrades'] = 'Sin calificaciones disponibles';
$string['notapplicable'] = 'No Aplica';
$string['notfound'] = 'El número de certificado no pudo ser validado';
$string['notissued'] = 'No emitido';
$string['notissuedyet'] = 'Aún no emitido';
$string['notreceived'] = 'Usted no ha recibido este certificado';
$string['openbrowser'] = 'Abrir en ventana nueva';
$string['opendownload'] = 'Elija el botón debajo para guardar su certificado en su computadora.';
$string['openemail'] = 'Elija el botón debajo y su certificado se le enviará como anexo de correo electrónico.';
$string['openwindow'] = 'Elija el botón debajo para abrir su certificado en una nueva ventana del navegador.';
$string['or'] = 'O';
$string['orientation'] = 'Orientación';
$string['orientation_help'] = 'Elija si quiere que la orientación de su certificado sea vertical o apaisada (horizontal)';
$string['pluginadministration'] = 'Administración del certificado';
$string['pluginname'] = 'Certificado';
$string['portrait'] = 'Vertical';
$string['printdate'] = 'Fecha de impresión';
$string['printdate_help'] = 'Esta es la fecha que se imprimirá, si se elige que se imprima la fecha. Si se selecciona la fecha de finalización del curso, pero el estudiante no hubiese finalizado el curso, se imprimirá la fecha recibida. También puede Usted elegir imprimir la fecha con base en cuando fué calificada una actividad. Si se emite un certificado antes de que se califique esa actividad, la fecha recibida será impresa.';
$string['printerfriendly'] = 'Página para imprimir';
$string['printgrade'] = 'Imprimir calificación';
$string['printgrade_help'] = 'Usted puede elegir cualquier item de calificación del curso del libro de calificaciones para imprimir la calificación que el usuario recibió por ese item en el certificado. Los items de calificación se enlistan en el órden en que aparecen en el libro de calificaciones. Elija debajo el formato de la calificación.';
$string['printhours'] = 'Imprimir horas crédito';
$string['printhours_help'] = 'Introduzca aquí el número de horas crédito que se imprimirán en el certificado.';
$string['printnumber'] = 'Imprimir código';
$string['printnumber_help'] = 'Un código individual de 10 dígitos de letras y números aleatorios puede imprimirse en el certificado. Este número podrá después ser verificado al compararlo con el número de código mostrado en el reporte de certificados.';
$string['printoutcome'] = 'Imprimir competencia (outcome)';
$string['printoutcome_help'] = 'Usted puede elegir cualquier competencia del curso para imprimir el nombre de la competencia y la competencia recibida por el usuario en el certificado. Un ejemplo sería: Competencia en la tarea: Eficiente.';
$string['printseal'] = 'Imágen del sello, escudo o logo';
$string['printseal_help'] = 'Esta opción le permite elegir un sello, escudo o logo para imprimir en el certificado, dentro de las que están en la carpeta certificate/pix/seals. Por defecto, esta imágen se pondrá en la esquina inferior derecha del certificado.';
$string['printsignature'] = 'Imágen de firma';
$string['printsignature_help'] = 'Esta opción le permite elegir una imágen de firma digitalizada para imprimir en el certificado, dentro de las que están en la carpeta certificate/pix/signatures. Por defecto, esta imágen se pondrá en la esquina inferior izquierda del certificado.';
$string['printteacher'] = 'Imprimir nombre(s) de profesor';
$string['printteacher_help'] = 'Para imprimir el nombre del profesor en el certificado, asigne el rol de profesor a nivel del módulo. Para hacer esto, por ejemplo, Usted tiene más de un profesor para el curso o tiene más de un certificado en el curso y desea imprimir diferentes nombres en cada certificado. Elija \'editar el certificado\', después elija la pestaña para roles asignados localmente. Después asigne el rol de profesor editor al certificado (no necesitan SER profesores en el curso--Usted puede asignar este rol a quien desee). Estos nombres serán impresos en los certificados para profesor.';
$string['printwmark'] = 'Imágen de sello de agua';
$string['printwmark_help'] = 'Un archivo de sello de agua puede ponerse en el fondo del certificado. Un sello de agua es un gráfico desvanecido. Un sello de agua podría ser un logo, escudo, sello, frase, o culquiera cosa que Usted quiera emplear como fondo gráfico.';
$string['receivedcerts'] = 'Certificados recibidos';
$string['receiveddate'] = 'Fecha recibido';
$string['removecert'] = 'Certificado emitido removido';
$string['report'] = 'Reporte';
$string['reportcert'] = 'Certificados Reportados';
$string['reportcert_help'] = 'Si elige si aquí, entonces la fecha de recepción, número de código y el nombre del curso para este certificado se mostrarán en los reportes de certificado. Si elige imprimir una calificación en este certificado, entonces dicha calificación también aparecerá en el reporte del certificado.';
$string['requiredtimenotmet'] = 'Usted debe pasar al menos un mínimo de f {$a->requiredtime} minutos dentro de un curso antes de que pueda acceder a este certificado';
$string['requiredtimenotvalid'] = 'El tiempo necesario debe ser un número mayor que 0';
$string['reviewcertificate'] = 'Revisar su certificado';
$string['savecert'] = 'Guardar certificado';
$string['savecert_help'] = 'Si elige esta opción, entonces una copia de cada archivo PDF de certificado de usuario se guardará en la carpeta moddata para este certificado del curso. Se mostrará un enlace para cada certificado guardado en el reporte de certificado.';
$string['seal'] = 'Sello';
$string['sigline'] = 'línea';
$string['signature'] = 'Firma';
$string['statement'] = 'ha completado el curso';
$string['summaryofattempts'] = 'Resumen de certificados recibidos anteriormente';
$string['textoptions'] = 'Opciones de texto';
$string['title'] = 'CERTIFICADO';
$string['to'] = 'Otorgado a';
$string['typeA4_embedded'] = 'A4 Incrustado (Europa)';
$string['typeA4_non_embedded'] = 'A4   NO-Incrustado (Europa)';
$string['typeletter_embedded'] = 'Carta incrustado (México)';
$string['typeletter_non_embedded'] = 'Carta no-incrustado (México)';
$string['unsupportedfiletype'] = 'El archivo debe ser .JPEG o .PNG';
$string['uploadimage'] = 'Subir imagen';
$string['uploadimagedesc'] = 'Este botón lo llevará a una pantalla nueva, donde podrá subir imágenes.';
$string['userdateformat'] = 'Formato de fecha del usuario';
$string['validate'] = 'Verificar';
$string['verifycertificate'] = 'Verificar certificado';
$string['viewcertificateviews'] = 'Ver {$a} certificados emitidos';
$string['viewed'] = 'Usted recibió este certificado en:';
$string['viewtranscript'] = 'Ver certificados';
$string['watermark'] = 'Sello de agua';
