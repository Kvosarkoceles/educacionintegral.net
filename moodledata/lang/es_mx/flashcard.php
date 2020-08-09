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
 * Strings for component 'flashcard', language 'es_mx', branch 'MOODLE_37_STABLE'
 *
 * @package   flashcard
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addone'] = 'Añadir una nueva pregunta';
$string['addthree'] = 'Añadir tres nuevas preguntas';
$string['answer'] = 'Respuestas';
$string['answersmediatype'] = 'Tipo de medio para respuestas';
$string['audiostart'] = 'Inicia sonidos automáticamente';
$string['autodowngrade'] = 'Permitir autodesvalorar';
$string['autodowngrade_help'] = 'Esta opción permite el degradamiento automático de cartas. Un juego está erosionado si el alumno no revisa el juego por un tiempo (vea tiempos más abajo). Las cartas muy viejas en los paquetes son más difíciles de regresar al primer paquete. La taza de erosión depende de la configuración de los varios retrasos para cada paquete.';
$string['avgaccess'] = 'Número de rascados (ticks) por carta';
$string['backside'] = 'Reverso de Carta Flash';
$string['backtocourse'] = 'Regresa al curso';
$string['backtodecks'] = 'Regresa a la mesa de cartas';
$string['badcards'] = 'Carta(s) rechazada(s):';
$string['bothmodels'] = 'Ambos Leitner y entrenamiento libre';
$string['bycards'] = 'Por cartas';
$string['byusers'] = 'Por usuario';
$string['card'] = 'Carta';
$string['cardback'] = 'Imagen trasera de carta';
$string['cardfront'] = 'Imagen frontal de carta';
$string['cardsep'] = 'Separador de carta en importación de texto:';
$string['cardsindeck'] = 'Quedan : {$a} carta(s)';
$string['cardsread'] = 'Carta(s) leídas:';
$string['cardsremaining'] = 'Cartas restantes';
$string['commands'] = '';
$string['completionallgoodenabled'] = 'El estudiante debe traer todas las cartas en el último mazo para completar';
$string['completionallgoodgroup'] = 'Requerir que todas las cartas sean conocidas';
$string['completionallgoodhelp'] = 'requerir que todas las cartas estén en el último mazo para completar';
$string['completionallviewed'] = 'El estudiante debe haber visto todas las cartas una vez, o al menos algunas de elllas (cartas):';
$string['completionallviewedgroup'] = 'Requerir ver todas las cartas';
$string['completiondiscussionshelp'] = 'requerir que todas las cartas sean vistas al menos una  vez';
$string['confirm'] = 'Confirmar:';
$string['counters'] = 'Contadores';
$string['crontask'] = 'Trabajo cron para flashcard';
$string['customisationfiles'] = 'Archivos para personalización de carta';
$string['deck'] = 'Mazo de cartas';
$string['deck1_delay'] = 'Retraso del disparo de revisión (mazo 1)';
$string['deck2_delay'] = 'Retraso del disparo de revisión (mazo 2)';
$string['deck2_release'] = 'Tiempo extra de autodesvaloración (mazo 2)';
$string['deck3_delay'] = 'Retraso del disparo de revisión (mazo 3)';
$string['deck3_release'] = 'Tiempo extra de autodesvaloración (mazo 3)';
$string['deck4_delay'] = 'Retraso del disparo de revisión (mazo 4)';
$string['deck4_release'] = 'Tiempo extra de autodesvaloración (mazo 3)';
$string['deck_delay'] = 'Disparo de revisión';
$string['deck_delay_help'] = 'Tiempo ajustable en horas en las cuales el mazo está marcado "para revisar"';
$string['deck_release'] = 'Autodesvalorar';
$string['deck_release_help'] = 'Tiempo en horas, despues del cual las cartas se regresan al mazo superior. Cada paquete puede ajustarse diferentemente.';
$string['decks'] = 'Mazos';
$string['decks_help'] = 'Permite elegir 2, 3, o 4 mazos. Tipicamente, el sistema Leitner usa 3 mazos. 4 mazos ampliarán el ciclo de memorización, para poder aprender cartas más difíciles o juegos de cartas más grandes. 2 mazos será conveniente para juegos simples o ensambles de pequeño tamaño.';
$string['deckstates'] = 'Estado del juego';
$string['deleteselected'] = 'Eliminar cartas seleccionadas';
$string['deleteselection'] = 'Borrar la selección';
$string['difficultcards'] = 'Juego difícil';
$string['easycards'] = 'Juego fácil';
$string['edit'] = 'Editar las cartas';
$string['editingcards1'] = 'Editar el juego de Flashcards';
$string['editingcards2'] = 'Editar el juego de Flashcards';
$string['emptydeck'] = 'Imagen del mazo vacío';
$string['emptyset'] = 'El juego de Flashcards está vacío';
$string['endtime'] = 'Se acabó el tiempo';
$string['erroraddcard'] = 'No se pudieron añadir cartas al mazo';
$string['errorbindcard'] = 'No pudo ligarse la carta al mazo del usuario {$a}';
$string['errordeletecard'] = 'No se pudieron eliminar cartas del mazo';
$string['errorupdatecard'] = 'No se pudo actualizar el mazo de cartas';
$string['extracss'] = 'CSS extra';
$string['fieldsep'] = 'Separador de campo:';
$string['flashcard:addinstance'] = 'Añadir una flashcard';
$string['flashcard:canplayfree'] = 'Juego en modo libre';
$string['flashcard:manage'] = 'Administrar las cartas';
$string['flashcardneedsreview'] = 'Flashcard necesita revisión';
$string['flipdeck'] = 'Voltear respuestas y preguntas';
$string['flipdeck_help'] = 'Esta opción permite invertir las cartas. Si se habilita, las preguntas se escribirán en la parte trasera de las cartas como si fuesen respuestas y viceversa.';
$string['forcereload'] = 'Forzar recarga de pregunta';
$string['forcereload_help'] = 'Forzar recarga del juego de cartas. Habilitar esta casilla forzará que el juego de cartas se recargue con datos del tipo de preguntas pareadas. Todos los datos del usuario grabados se perderán y todas las cuentas se resetearán.';
$string['freegame'] = 'Juego libre';
$string['freeplayinstructions'] = 'Piense en la respuesta, voltee la carta, y evalúe su respuesta para ver si le atinó (ya se la sabe). Puede extraer esta carta del mazo o probar con otra carta. El mazo se presenta en orden aleatorio. Revise todo el mazo una vuelta completa de ser posible.';
$string['freeuse'] = 'Entrenamiento libre';
$string['frontside'] = 'Frente de Carta Flash';
$string['goodcards'] = 'Carta(s) válida(s):';
$string['havetologin'] = 'Tiene que registrarse antes de enviar su elección';
$string['ifailed'] = '¡ Fallé !';
$string['igotit'] = '¡ Le atiné !';
$string['image'] = 'imágen';
$string['imageplussound'] = 'imágen + sonido';
$string['import'] = 'Importar';
$string['importadvice'] = 'Al importar un nuevo juego de cartas, Usted removerá el juego antiguo junto con la información previa sobre los jugadores';
$string['imported'] = 'Importar:';
$string['import_help'] = 'Usted puede importar en forma masiva pares de pregunta/respuesta dentro de un flashcard usando la opción de importación de cartas a granel. Solo necesita hacer un archivo con la lista de pares de preguntas/respuestas y pegar el contenido de ese archivo en el área de texto del importador. Usted puede decidir codificar este archivo con alguno de los separadores comunes en sistemas Linux o Windows. El más común puede ser archivos de "una pareja por línea", usar \':\' o la coma para separar las preguntas de las respuestas.

Las preguntas deben venir primero y SIEMPRE deben tener una respuesta. Las líneas vacías o líneas negras serán ignoradas, igual que las que empiecen con un # o diagonal (/).

El importador hará una revisión rápida del texto a importar y rechazará la importación si la secuencia del texto no está bien formada y le dirá cuantas parejas están mal en el archivo.

Dado que la importación exitosa borrará todos los datos de los mazos y la información sobre los participantes, aparecerá una casilla de verificación que debe de aprobarse para que se realice la importación.';
$string['importingcards'] = 'Importar cartas';
$string['importreport'] = '<b>Flashcard ha importado nuevas cartas :</b>';
$string['instructions'] = 'Haga clic sobre la carta (flashcard) para voltearla y ver el lado opuesto';
$string['lastaccessed'] = 'Último acceso';
$string['leitner'] = 'Entrenamiento Leitner';
$string['leitnergame'] = 'Juego Leitner';
$string['matchingquestion'] = 'Pregunta pareada (relación de columnas) del banco de preguntas';
$string['maxaccess'] = 'Más rascadas vistas';
$string['mediatypes'] = 'Tipo de medio';
$string['mediatypes_help'] = 'Esta lista define el tipo de medio empleado para las preguntas.

*Texto: El texto introducido se imprime literalmente sobre las cartas.
*Imagen: El texto introducido es la ubicación de un archivo de imágen en el servidor, tomado de los archivos del curso.
*Sonido: El texto introducido es la ubicación de un archivo de sonido en el servidor, tomado de los archivos del curso.';
$string['mediumeffortcards'] = 'Juego de esfuerzo medio';
$string['minaccess'] = 'Rascadas  menos vistas';
$string['missingimage'] = '{Archivo de imágen faltante}';
$string['missingsound'] = '{Archivo de sonido faltante}';
$string['missingvid'] = '{archivo de video faltante}';
$string['models'] = 'Juego';
$string['models_help'] = 'Habilitar o deshabilitar modelos de juego';
$string['modulename'] = 'Conjunto de Cartas Flash';
$string['modulename_help'] = '<p>
Este módulo les proporciona a los estudiantes una forma de memorizar rápidamente listas de "cosas". Este es un ejercicio típico de indexación, en donde debe aprenderse y retenerse un mapa de cosas pareadas. Nosotros decimos "cosa", porque tanto la clave como el valor podrían ser cualquier pareja relacionada de texto, imágenes o sonidos.
</p>
<p>
Este módulo implementa un sistema Leitner completo, para soportar mecánicamente el proceso de memorización de las relaciones. Las parejas a ser aprendidas primeramente son anexadas a un mazo de cartas. Estas son consideradas inicialmente como difíciles de aprender. El profesor puede elegir una curva de aprendizaje usando 2, 3, o 4 mazos. Los 4 mazos deberían de usarse para conjuntos grandes de definiciones. Cuando el estudiante falla al contestar una carta, se le dirá; y se permite que la carta permanezca en el mismo mazo. Si tiene correcta la respuesta, pedirá pasar la carta al segundo mazo, al considerarla como menos difícil de aprender. El proceso se repite para todos los mazos, hasta el último, en donde permanecerá la carta. Los mazos están ajustados para que el estudiante sepa cual debería de revisar. Las cartas difíciles se presentarán con más frecuencia que las cartas triviales. Los retrasos para presentación son ajustables.
</p>
<p>
Cuando un estudiante no pide revisar mazos, las cartas pueden degradarse automáticamente a un mazo de mayor dificultad.
</p>
<p>
El módulo también permite un uso libre de las cartas, habilitado por la configuración del módulo. El módulo puede personalizarse gráficamente usando CSS y un conjunto de imágenes definidas por el usuario.
</p>';
$string['modulenameplural'] = 'Cartas Flash';
$string['next'] = 'Siguiente carta';
$string['nocards'] = 'No hay cartas definidas.';
$string['noflashcards'] = 'No hay cartas en este curso.';
$string['nomorecards'] = 'Ya no hay más cartas.';
$string['nosubquestions'] = 'Error: ¡ Faltan subpreguntas para esta pregunta!';
$string['notifications'] = 'Notificaciones';
$string['notify_review_html_tpl'] = '<p>Hola <%%FULLNAME%%></p>

<p>Una actividad flashcard necesita de tu atención. Usted tiene algunas cartas para revisar
en el curso  <b><%%COURSE%%></b> : </p>

<a href="<%%URL%%>"><%%URL%%></a>';
$string['notify_review_tpl'] = 'Hola <%%FULLNAME%%>

Una actividad flashcard necesita de tu atención. Usted tiene algunas cartas para revisar
en el curso <%%COURSE%%> :

<%%URL%%>';
$string['notinitialized'] = 'Este estudiante nunca empleó esta flashcard.';
$string['nousers'] = 'No hay estudiantes en este curso.';
$string['num'] = 'N°';
$string['numericrequired'] = 'Se necesita un número.';
$string['outoftimerange'] = 'Este módulo se cerró por horario. No puede usarlo ahora.';
$string['playwithme'] = 'Aprende con este mazo';
$string['pluginadministration'] = 'Administración de flashcard';
$string['pluginname'] = 'Flashcard';
$string['previous'] = 'Carta anterior';
$string['privacy:metadata:flashcard_card'] = 'Almacena el contenido del mazo para el usuario';
$string['privacy:metadata:flashcard_card:deck'] = 'La ID actual del mazo en el que está la carta para este usuario';
$string['privacy:metadata:flashcard_card:entryid'] = 'La ID de la carta en el conjunto de cartas';
$string['privacy:metadata:flashcard_card:flashcardid'] = 'La ID de la flashcard';
$string['privacy:metadata:flashcard_card:lastaccessed'] = 'la hora en la cual fue accedida por última vez la entrada de carta por este usuario';
$string['privacy:metadata:flashcard_card:userid'] = 'La ID del usuario que tiene uso de carta';
$string['privacy:metadata:flashcard_userdeck_state'] = 'Almacena estados del mazo con respecto a revisar requisitos por el usuario';
$string['privacy:metadata:flashcard_userdeck_state:deck'] = 'El mazo para el que es el estado';
$string['privacy:metadata:flashcard_userdeck_state:flashcardid'] = 'La ID del flashcard';
$string['privacy:metadata:flashcard_userdeck_state:state'] = 'El estado en el que está el mazo (revisar estado)';
$string['privacy:metadata:flashcard_userdeck_state:userid'] = 'La ID del usuario que tiene uso de cartas';
$string['question'] = 'Preguntas';
$string['questionid'] = 'Pregunta a importar';
$string['questionsmediatype'] = 'Tipo de medio de pregunta';
$string['reinforce'] = 'revisar este mazo';
$string['remindusers'] = 'Recordarle a usuarios';
$string['removecard'] = 'Remover carta';
$string['reset'] = 'Resetear juego de cartas';
$string['resetflashcardstates'] = 'Reiniciar todos los estados de flashcard';
$string['reviewback'] = 'Imagen del mazo que necesita revisión';
$string['reviewedback'] = 'Imagen del mazo revisada';
$string['reviewedempty'] = 'Imagen del mazo vacío revisado';
$string['sound'] = 'sonido';
$string['sourcequestion'] = 'Pregunta a importar';
$string['sourcequestion_help'] = 'Elija una pregunta como orígen.

Usted puede armar rápido un mazo de cartas desde una pregunta de relacionar columnas del banco de preguntas. Para proceder, elija una pregunta de la lista y tache la casilla "forzar recarga". Todas las cartas previas se borrarán y se recargarán con los datos de las preguntas.

Advertencia: el cambiar las cartas empleando el editor de cartas NO cambiará el contenido de las preguntas del banco de preguntas.';
$string['starttime'] = 'Hora de inicio';
$string['stylesheet'] = 'Obtener la hoja de estilo';
$string['styling'] = 'Ajustar al gusto del cliente';
$string['sumaccess'] = 'Total de cartas vistas';
$string['summary'] = 'Resumen del Conjunto de Cartas Flash';
$string['teachersummary'] = 'Resumen';
$string['text'] = 'texto';
$string['timetoreview'] = 'Quedan {$a} días antes de la revisión';
$string['trivialcards'] = 'Cartas triviales';
$string['undefinedquestionset'] = 'No se eligió una pregunta pareada en los exámenes para este juego de cartas';
$string['userdecks'] = 'Mazos de los usuarios';
$string['userdecksummary'] = 'Mazo {$a->deckid}: {$a->count} cartas ({$a->cardcount} aciertos en total en el mazo)';
$string['video'] = 'Video';
$string['viewed'] = 'Vistas';
