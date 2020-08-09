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
 * Strings for component 'simplecertificate', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   simplecertificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Todos los usuarios';
$string['awardedsubject'] = 'Notificación de certificado emitido: {$a->certificate} otorgado a {$a->student}';
$string['awardedto'] = 'Otorgado a';
$string['bulkaction'] = 'Elija una operación masiva';
$string['bulkbuttonlabel'] = 'Enviar';
$string['bulkview'] = 'Operaciones masivas';
$string['cantdeleteissue'] = 'Error al remover certificados emitidos';
$string['cantissue'] = 'El certificado no puede emitirse, porque el usuario no ha cumplido las condiciones de la actividad.';
$string['certificatecopy'] = 'COPIA';
$string['certificateimage'] = 'Archivo de imagen de certificado';
$string['certificateimage_help'] = 'Esta es la fotografía que se usará en el certificado';
$string['certificatename'] = 'Nombre del Certificado';
$string['certificatename_help'] = 'Nombre del Certificado';
$string['certificatenot'] = 'Instancia de certificado simple no encontrada';
$string['certificatetext'] = 'Textodel Certificado';
$string['certificatetext_help'] = 'Este es el texto que se usará en el certificado, algunas palabras especiales serán remplazadas con variables tales como el nombre del curso, el nombre del estudiante, calificación ...
Estas son:

{USERNAME} -> Nombre completo del usuario
{COURSENAME} -> Nombre completo del curso (o un nombre de curso alterno Definido)
{GRADE} -> Calificación formateada
{DATE} -> Fecha formateada
{OUTCOME} -> Competencias
{HOURS} -> Horas definidas en el curso
{TEACHERS} -> Lista de profesores
{IDNUMBER} -> N{umero ID del usuarior
{FIRSTNAME} -> Nombre(s) del usuario
{LASTNAME} -> Apellido(s) del usuario
{EMAIL} -> E-mail del usuario
{ICQ} -> ICQ  del usuario
{SKYPE} -> Skype  del usuario
{YAHOO} -> yahoo messenger  del usuario
{AIM} -> AIM  del usuario
{MSN} -> MSN  del usuario
{PHONE1} ->  Teléfono 1°  del usuario
{PHONE2} -> Teléfono 2°  del usuario
{INSTITUTION} -> Institución del usuario
{DEPARTMENT} -> Departmento del usuario
{ADDRESS} -> Dirección del usuario
{CITY} -> Ciudad del usuario
{COUNTRY} -> País
{URL} -> Home-page del usuario
{CERTIFICATECODE} -> Texto del código único del certificado
{PROFILE_xxxx} -> Campos personalizados del perfil del usuario

Para poder emplear campos personalizados del perfil Usted debe de usar el prefijo "PROFILE_" , por ejemplo, Si Usted ha creado un campo personalizado con nombre corto de "aniversario", el texto usado en el certificado deberá emnplear {PROFILE_ANIVERSARIO}
El texto puede usar HTML básico, tipos de letra (fonts) básicos, tablas, pero évite cualquier definición de posición';
$string['certificatetextx'] = 'Posición Horizontal de Texto del Certificado';
$string['certificatetexty'] = 'Posición Vertical de Texto del Certificado';
$string['certificateverification'] = 'Verificación de Certificado';
$string['certlifetime'] = 'Mantener certificados emitidos por: (en meses)';
$string['certlifetime_help'] = 'Esto especifica el lapso de tiempo que usted desea conservar los certificados emitidos. Los certificados emitidos que sean más antiguos que esta fecha serán eliminados automáticamente.';
$string['code'] = 'Código';
$string['codex'] = 'Posición Horizontal del Código QR (Respuesta Rápida) del Certificado';
$string['codey'] = 'Posición Vertical del Código QR (Respuesta Rápida) del Certificado';
$string['completedusers'] = 'Usuarios que alcanzaron las condiciones de la actividad';
$string['completiondate'] = 'Finalización del Curso';
$string['coursegrade'] = 'Calificación del Curso';
$string['coursename'] = 'Nombre Alternativo del Curso';
$string['coursename_help'] = 'Nombre Alternativo del Curso';
$string['coursenotfound'] = 'Curso no encontrado';
$string['coursestartdate'] = 'Fecha de Inicio del Curso';
$string['coursetimereq'] = 'Minutos requeridos en el curso';
$string['coursetimereq_help'] = 'Escriba aquí el lapso de tiempo mínimo, en minutos, que un estudiante debe haber estado cursando el curso antes de que puedaa recibir el certificado.';
$string['datefmt'] = 'Formato de Fecha';
$string['datefmt_help'] = 'Elija un formato de fecha PHP válido (http://www.php.net/manual/en/function.strftime.php). O déjelo vacío para usar el formato del idioma elegido por el usurio.';
$string['defaultcertificatetextx'] = 'Posición de Texto Horizontal por defecto';
$string['defaultcertificatetexty'] = 'Posición de Texto Vertical por defecto';
$string['defaultcodex'] = 'Posición Horizontal por defecto del Código QR (Respuesta Rápida)';
$string['defaultcodey'] = 'Posición Vertical por defecto del Código QR (Respuesta Rápida)';
$string['defaultheight'] = 'Altura por defecto';
$string['defaultperpage'] = 'Por página';
$string['defaultperpage_help'] = 'Número de certificados a mostrar por página (Máx 200)';
$string['defaultwidth'] = 'Ancho por defecto';
$string['deleteall'] = 'Eliminar Todo';
$string['deleteselected'] = 'Eliminar Seleccionado';
$string['deletissuedcertificates'] = 'Eliminar certificados emitidos';
$string['delivery'] = 'Entrega';
$string['delivery_help'] = 'Elija aquí cómo le gustaría que sus estudiantes obtengan su certificado:

Abrir en Navegador: Abre el certificado en una ventana nueva del navegador de Internet.
Forzar descarga: Abre la ventana del navegador para descargar un archivo.
Email certificado: Al elegir esta opción se envía el certificado al estudiante mediante un anexo de un mensaje de Email.

Después de que un usuario reciba su certificado, si elige el enlace del certificado dentro de la página del curso, verán la fecha en que recibieron dicho certificado y podrán revisar el certificado recibido.';
$string['designoptions'] = 'Opciones de Diseño';
$string['download'] = 'Forzar descarga';
$string['emailcertificate'] = 'Email';
$string['emailfrom'] = 'Nombre del Remitente del Email';
$string['emailfrom_help'] = 'Nombre alterno del formato de Email';
$string['emailoncompletion'] = 'Enviar Email al completar el curso';
$string['emailothers'] = 'Email otros';
$string['emailothers_help'] = 'Escriba aquí las direcciones Email, separadas por comas, de quienes deberían de ser alertados con un Email cada vez que un estudiante reciba un certificado.';
$string['emailsent'] = 'Los Emails se han enviado';
$string['emailstudentsubject'] = 'Su certificado para {$a->course}';
$string['emailstudenttext'] = 'Hola {$a->username},

Anexo está su certificado para {$a->course}.


ESTE ES UN MENSAJE AUTOMATIZADO -  POR FAVOR NO RESPONDA';
$string['emailteachermail'] = '{$a->student} ha recibido su certificado: \'{$a->certificate}\' para {$a->course}.

Usted puede revisarlo aquí:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->student} ha recibido su certificado: \'{$a->certificate}\' para {$a->course}.

Usted puede revisarlo aquí:

 <a href="{$a->url}">Certificate Report</a>.';
$string['emailteachers'] = 'Email a Profesores';
$string['emailteachers_help'] = 'Si se habilita, entonces los profesores serán alertados con un Email cada vez que un estudiante reciba un certificado.';
$string['enablesecondpage'] = 'Habilitar reverso de página del Certificado';
$string['enablesecondpage_help'] = 'Habilitar reverso de página del Certificado. Si estuviera deshabilitada, sólamente se imprimiría el código QR (Respuesta Rápida) en la página reversa (si el código QR está habilitado).';
$string['eventcertificate_verified'] = 'Certificado verificado';
$string['eventcertificate_verified_description'] = 'El usuario con id {$a->userid} verificó el certidficado con id {$a->certificateid}, emitido para el usuario con id {$a->certiticate_userid}.';
$string['filenotfound'] = 'Archivo no encontrado';
$string['getcertificate'] = 'Verificar certificado';
$string['grade'] = 'Calificación';
$string['gradefmt'] = 'Formato de la calificación';
$string['gradefmt_help'] = 'Hay tres formatos disponibles si usted elege imprimir una calificación en el certificado:
<ul>
<li>Calificación en Porcentaje: Imprime la calificación como un porcentaje.</li>
<li>Calificación en Puntos: Imprime el valor en puntos de la calificación.</li>
<li>Calificación en Letra: Imprime la calificación de porcentaje como una letra.</li></ul>';
$string['gradeletter'] = 'Calificación en letra';
$string['gradepercent'] = 'Calificación en porcentaje';
$string['gradepoints'] = 'Calificación en puntos';
$string['height'] = 'Altura del Certificado';
$string['hours'] = 'horas';
$string['intro'] = 'Introducción';
$string['invalidcode'] = 'Código de certificado inválido';
$string['issued'] = 'Emitido';
$string['issuedcertificatenotfound'] = 'Cerfificado emitido no encontrado';
$string['issueddate'] = 'Fecha de emisión';
$string['issueddownload'] = 'Certificado emitido [id: {$a}] descargado';
$string['issuedview'] = 'Certificados emitidos';
$string['issueoptions'] = 'Opciones de emisión';
$string['keywords'] = 'certificado, curso, PDF, Moodle';
$string['modulename'] = 'Certificado Simple';
$string['modulename_help'] = 'El módulo de actividad de Certificado simple le permite al profesor crear un certificado personalizado que puede otorgarse a participantes que hayan completado los requisitos especificados por el profesor.';
$string['modulenameplural'] = 'Certificados Simples';
$string['multipdf'] = 'Descargar en un archivo ZIP con archivos PDFs';
$string['neverdeleteoption'] = 'Nunca eliminar';
$string['nocertificatesissued'] = 'No hay certificados que hayan sido emitidos';
$string['nodelivering'] = 'No enviado, el usuario rcibirá este certificado empleando otras vías';
$string['notreceived'] = 'Certificado no emitido';
$string['onepdf'] = 'Descargar certificados en un archivo PDF';
$string['openbrowser'] = 'Abrir en nueva ventana';
$string['opendownload'] = 'Elija el botón inferior para guardar su certificado en su computadora.';
$string['openemail'] = 'Elija el botón inferior y su certificado se le enviará como un anexo en un Email.';
$string['openwindow'] = 'Elija el botón inferior para abrir su certificado en una nueva ventana del navegador.';
$string['pluginadministration'] = 'Administración del certificado';
$string['pluginname'] = 'Certificado simple';
$string['printdate'] = 'Fecha de impresión';
$string['printdate_help'] = 'Ésta es la fecha que será impresa, si elige imprimir una fecha. Si selecciona la fecha de terminación del curso, pero el estudiante no hubiera completado el curso, se imprimirá la fecha recibida. Usted también puede elegir imprimir la fecha basándose en cúando se calificó una actividad. Si el certificado es emitido antes de que dicha actividad sea calificada, se imprimirá la fecha recibida.';
$string['printgrade'] = 'Imprimir Calificación';
$string['printgrade_help'] = 'Usted puede elegir cualquier ítem de calificación de curso disponible en el libro de calificación para imprimir en el certificado la calificación recibida por el usuario para ese ítem. Los ítems de calificación están enlistados en el órden en el que aparecen en el libro de calificación. Elija debajo el formato de la calificación.';
$string['printoutcome'] = 'Imprimir Competencia';
$string['printoutcome_help'] = 'Usted puede elegir cualquier competencia del curso para imprimir el nombre de dicha competencia y la competencia recibida por el usuario en el certificado. Un ejemplo sería: Competencia en Tarea: Eficiente.';
$string['printqrcode'] = 'Imprimir código QR del certificado';
$string['printqrcode_help'] = 'Imprimir ( o no) el código QR del certificado';
$string['qrcodefirstpage'] = 'Imprimir código QR en la primera página';
$string['qrcodefirstpage_help'] = 'Imprimir código QR en la primera página';
$string['qrcodeposition'] = 'Posición del Código QR (Respuesta Rápida) del Certificado';
$string['qrcodeposition_help'] = 'Estas son las coordinadas (en milímetros) del Código QR (Respuesta Rápida) del Certificado';
$string['receiveddate'] = 'Fecha Emitido';
$string['report'] = 'Reporte';
$string['requiredtimenotmet'] = 'Usted debe tener cuando menos {$a->requiredtime} minutos en este curso para emitir este certificado';
$string['secondimage'] = 'Archivo de la imágen del Reverso del Certificado';
$string['secondimage_help'] = 'Esta es la imágen que será usada en el Reverso del Certificado';
$string['secondpageoptions'] = 'Página del Reverso del Certificado';
$string['secondpagetext'] = 'Texto del Reverso del Certificado';
$string['secondpagex'] = 'Posición Horizontal del Texto del Reverso del Certificado';
$string['secondpagey'] = 'Posición Vertical del Texto del Reverso del Certificado';
$string['secondtextposition'] = 'Posición del Texto del Reverso del Certificado';
$string['secondtextposition_help'] = 'Estas son las coordenadas (en milímetros) del texto del reverso del certificado';
$string['sendtoemail'] = 'Enviar al Email del usuario';
$string['showusers'] = 'Mostrar';
$string['simplecertificate:addinstance'] = 'Añadir Actividad de Cerfificado Simple';
$string['simplecertificate:manage'] = 'Gestionar Actividad de Cerfificado Simple';
$string['simplecertificate:view'] = 'Ver Actividad de Cerfificado Simple';
$string['size'] = 'Tamaño del Certificado';
$string['size_help'] = 'Estos son los tamaños del Ancho y Alto del certificado en milímetros. El tamaño por defecto es A4 (europeo) acostado (297 * 210 mm). El tamaño carta (americano) es de 279 * 216 mm.';
$string['standardview'] = 'Emitir un certificado de prueba';
$string['summaryofattempts'] = 'Resumen de Certificados Recibidos Previamente';
$string['textposition'] = 'Posición del Texto del Certificado';
$string['textposition_help'] = 'Estas son las coordenadas XY (en milímetros) del texto del certificado';
$string['timestartdatefmt'] = 'Formato de fecha de inicio de inscripción';
$string['timestartdatefmt_help'] = 'Escriba un patrón válido para formato de fecha PHP (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>). O, déjelo vacío para usar el formato del idioma del usuario.';
$string['upgradeerror'] = 'Error al actualizar $a';
$string['usercontextnotfound'] = 'Contexto de usuario no encontrado';
$string['userdateformat'] = 'Formato de Fecha del Idioma del Usuario';
$string['usernotfound'] = 'Usuario no encontrado';
$string['variablesoptions'] = 'Otras Opciones';
$string['verifycertificate'] = 'Verificar certificado';
$string['viewcertificateviews'] = 'Ver {$a} certificados emitidos';
$string['width'] = 'Ancho del Certificado';
