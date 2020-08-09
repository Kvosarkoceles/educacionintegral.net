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
 * Strings for component 'quest', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   quest
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Ausente';
$string['accumulative'] = 'Acumulativa';
$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['addacomment'] = 'Añadir un comentario';
$string['addcomment'] = 'Añadir comentario';
$string['addelement'] = 'Añadir elemento';
$string['addsubmission'] = 'Añadir desafío';
$string['adminlogs'] = 'Bitácoras admins';
$string['allowteams'] = 'Permitir equipos_de_trabajo';
$string['allowteams_help'] = '<P align="justify">Este parámetro obliga a que cada uno de los alumnos que participe en este módulo QUESTOURnament pertenezca a un equipo. Cuando un alumno acceda por primera vez a un módulo que tenga esta opción habilitada, tendrá que introducir el nombre del equipo al que pertenece para poder entrar. </P>
<P align="justify">Cuando esta opción esté habilitada aparecerá en el módulo, además de la clasificación individual de todos los alumnos, la clasificación por equipos. </P>
<P align="justify"> Cada equipo tendrá un número de componentes, fijado por el parámero <a href="help.php?component=quest&identifier=ncomponents"">Número de Componentes</a>, que podrá ser gestionado por los profesores. Los posibles errores que se produzcan podrán solucionarse a través de la opción de
<a href="help.php?component=quest&identifier=changeteamteacher"">Gestión de Equipos</a> a la que sólo tienen acceso los profesores. </P>';
$string['amendassessmentelements'] = 'Corregir elementos de evaluación';
$string['answer'] = 'Respuesta';
$string['answercontent'] = 'Contenido de la respuesta';
$string['answerexisty'] = 'Ya existe una respuesta a este desafío';
$string['answername'] = 'Respuesta: {$a->title}';
$string['answernoauthorizedupdate'] = 'Usted no está autorizado para actualizar su respuesta';
$string['answer_not_found'] = 'No puede obtenerse registro de respuesta con id {$a}';
$string['answers'] = 'Respuestas';
$string['answersubmission'] = 'Respuesta al desafío';
$string['answersubmission_help'] = '<P align="justify">Esta página le permite responder al desafío. </P>
<P align="justify">Los campos que aparecen son los siguientes:</P>
<ul>
  <li><strong>Título</strong>: nombre con el que se desea identificar la respuesta a enviar.</li>
  <li><strong>Descripción</strong>: es el cuerpo de la respuesta al desafío. Deberá dar respuesta a todos los elementos del formulario de evaluación del desafío.</li>
  <li><strong>Anexos</strong>: en caso de haberse habilitado el envío de anexos se podrán incluir al final tras el cuerpo de la respuesta</li>
</ul>';
$string['approve'] = 'Aprobar';
$string['approvesubmission'] = 'Aprobar/Rechazar Desafío/Pregunta';
$string['approvesubmission_help'] = '<P align="justify">Esta página permite al profesor aprobar, guardar o borrar un desafío propuesto por un alumno. A continuación se describe cada una de las acciones que se pueden realizar:</P>
<ul>
  <li><strong align="justify">Aprobar</strong>: al pulsar este botón se guardan todos los datos referentes al desafío, con las modificaciones realizadas por el profesor. A partir de este instante, el desafío será visible por el resto de los alumnos que podrán enviar respuestas una vez se abra dicho desafío.</li>
  <li><strong align="justify">Guardar</strong>: se almacenan todos los cambios realizados por el profesor en el desafío, sin que éste pase a estar visible para el resto de alumnos. Esto permite que el autor del desafío realice las modificaciones necesarias para que el profesor lo apruebe</li>
  <li><strong align="justify">Borrar</strong>: el profesor elimina el desafío por no considerarlo adecuado o interesante.</li>
</ul>
<P align="justify">Al realizar cualquiera de estas acciones se enviará un mensaje al autor del desafío, bien interno, bien por correo electrónico, dependiendo de las preferencias del usuario a este respecto fijadas por el mismo en su perfil. </P>';
$string['assess'] = 'Valorar';
$string['assessedon'] = 'Valorado en {$a}';
$string['assessment'] = 'Valoración';
$string['assessmentby'] = 'Evaluación por {$a}';
$string['assessmentcharacteristics'] = 'Características de la evaluación';
$string['assessmentglobal'] = 'Evaluación global';
$string['assessmentgrade'] = 'Calificación de valoración: {$a}';
$string['assessmentof'] = 'Valoración de "{$a}"';
$string['assessmentofthissubmission'] = 'Valoración de este desafío';
$string['assessments'] = 'Valoraciones';
$string['assessmentsby'] = 'Valoraciones por {$a}';
$string['assessthisanswer'] = 'Valorar esta respuesta';
$string['assessthissubmission'] = 'Valorar este desafío';
$string['assessthissubmission_help'] = '<P align="justify">Esta página permite a los profesores evaluar la labor de los alumnos que propongan desafíos en un módulo QUESTOURnament. La calificación otorgada dependerá tanto de la labor del autor como evaluador como del desafío propuesto.</P>
<P align="justify">Para facilitar la valoración de la tarea se utilizarán una serie de elementos de evaluación de forma que cada uno cubra un aspecto particular a valorar en la tarea. Para cada elemento de evaluación será preciso:
<div align="justify">
  <OL>
<LI>Introducir una calificación haciendo clic en el radio botón apropiado, seleccionando un número en el menú desplegable que se presente, etc., lo cuál dependerá de la escala utilizada para ese elemento de evaluación.
<LI>Introducir una explicación de por qué se asigna esa calificación. Si se considera que la razón es obvia, se puede dejar esa casilla en blanco. No obstante, debe tenerse en cuenta que la persona cuyo trabajo está evaluando puede efectuar una reclamación sobre la calificación asignada.
  </OL>
</div>
<P align="justify">Asimismo es posible realizar un comentario general sobre el trabajo valorado. Éste comentario debe ser respetuoso y constructivo. Las calificaciones y comentarios realizados se mostrará al autor del desafío. El profesor podrá modificar manualmente la calificación global, en caso de que desee hacer ajustes sobre la calculada de forma automática.
<P align="justify">La máxima calificación posible para el autor del desafío será, siempre que se haya producido una respuesta correcta, la máxima puntuación alcanzada por el desafío durante su tiempo de vida. Si por el contrario, no se ha enviado ninguna respuesta correcta al desafío antes de que éste se cierre, se considerará como máxima puntuación su puntuación Inicial.';
$string['assignmentnotinthecorrectphase'] = 'La Tarea no está en la fase correcta';
$string['attachment'] = 'Anexo';
$string['attachments'] = 'Anexos';
$string['attachmentsnoauthorizedupdate'] = 'Usted no está autorizado para modificar estos anexos';
$string['authorofsubmission'] = 'Autor del envío';
$string['by'] = 'por';
$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['calification'] = 'Puntaje';
$string['calificationautor'] = 'Calificación para el autor del desafío';
$string['calification_provisional_msg'] = 'La evaluación mostrada puede ser provisional';
$string['cantRespond_WARN'] = 'Usted no tiene permisos para responder.';
$string['cantRespond_WARN_notingroup_or_challengeended'] = 'Usted no puede responder. Usted no pertenece a este grupo o el desafío ha terminado.';
$string['challengeend'] = 'Fecha de Cierre del desafío';
$string['challengeend_help'] = '<P align="justify">Permite establecer la fecha en la que se cerrará un desaf&iacute;o. A partir de esta fecha no será posible enviar más respuestas al desaf&iacute;o. Sin embargo, los profesores sí podr&aacute;n seguir evaluando al autor del desaf&iacute;o, tanto por la pregunta planteada como por la labor desarrollada como evaluador. Asimismo, los autores de los desaf&iacute;os podr&aacute;n continuar evaluando las respuestas enviadas por otros alumnos.</P>
<P align="justify">Una vez se cierre el desafío, todos los participantes podr&aacute;n ver las respuestas enviadas por el resto, así como las evaluaciones y puntuaciones obtenidas. </P>
<P align="justify">Esta fecha no podr&aacute; ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> del m&oacute;dulo QUESTOURnament, ni anterior a la <a href="help.php?component=quest&identifier=submissionstart"">Fecha de Comienzo del Desaf&iacute;o </a>. </P>';
$string['challengestart'] = 'Fecha de Inicio del desafío';
$string['challengestart_help'] = '<P align="justify">Permite establecer la fecha en la que comenzará un desafío. Este parámetro sólo es configurable por un profesor.</P>
<P align="justify">Si el desafío lo crea un alumno se toma como fecha de comienzo la fecha de creación del desafío, pudiendo los profesores modificar este valor al aprobar el desafío o al realizar alguna modificación sobre él.</P>
<P align="justify">A partir de esta fecha los alumnos podrán visualizar el desafío y enviar sus respuestas. </P>
<P align="justify">Este fecha deberá ser anterior a la Fecha de Cierre del Desafío </P>';
$string['change'] = 'Guardar Cambios';
$string['changemanualcalification'] = 'Cambiar calificación manualmente';
$string['changeteam'] = 'Gestionar equipos';
$string['changeteamteacher'] = 'Gestionar equipos';
$string['changeteamteacher_help'] = '<P align="justify">Esta opción permite realizar la gestión de los equipos del módulo QUESTOURnament así como cambiar a un alumno de equipo si resultara necesario.</P>
<P align="justify">Si al cambiar a un alumno de equipo, éste se quedase sin componentes, dicho equipo desaparecería.</p>';
$string['checkthat'] = 'Revisar que';
$string['clasification'] = 'Ranking';
$string['closebeforeopen'] = 'La Fecha de Cierre del Questournament  debe ser posterior a la Fecha de Inicio';
$string['comment'] = 'Comentario';
$string['commentby'] = 'Comentario por';
$string['commentsauthor'] = 'Comentarios generales por el autor';
$string['commentsforauthor'] = 'Retroalimentación para el autor';
$string['commentsforauthor_help'] = '<strong>Retroalimentación para el autor</strong>: En este campo se puede introducir comentarios o sugerencias que el profesor quiere que tenga en cuenta el estudiante que ha propuesto el desafío. Será accesible para el resto de profesores.';
$string['commentsforstudent'] = 'Comentarios para los estudiantes';
$string['commentsforstudent_help'] = '<strong>Comentarios para los estudiantes</strong>: En este campo se introducen los comentarios que el autor quiere mostrar a los estudiantes sobre el desafío. Todos los participantes en el QUESTOURnament lo verán.';
$string['commentsforteacher'] = 'Comentarios para el profesor';
$string['commentsteacher'] = 'Comentarios generales por profesor';
$string['confirmchangeform'] = 'Esto cambiará el formato de evaluación. ¿Está seguro?';
$string['confirmdelete'] = 'Confirmar eliminación';
$string['confirmdeletionofthisitem'] = 'Confirmar eliminación de este ítem {$a}';
$string['correct'] = 'Correcto';
$string['currentphase'] = 'Fase actual de QUESTOURnament';
$string['currentphaseanswer'] = 'Fase de respuestas';
$string['currentphasesubmission'] = 'Fase de envío';
$string['dateanswer'] = 'Fecha';
$string['dateassess'] = 'Fecha de valoración';
$string['dateend'] = 'Cerrando en';
$string['dateendevent'] = 'Fin de QUESTOURnament "{$a}"';
$string['dateend_help'] = '<P align="justify">Este parámetro establece la fecha de cierre de este módulo QUESTOURnament. A partir de esta fecha los alumnos del curso que accedan a este módulo no podrán realizar ninguna de las acciones asociadas al mismo. En este momento se tendrán las calificaciones finales del concurso. </P>
<P align="justify">Una vez cerrado el concurso, su contenido permanecerá visible para los alumnos y profesores del curso, siempre que así se hubiera definido al crear el módulo QUESTOURnament, de manera que se podrá acceder a los desafíos y respuestas realizadas por todos los participantes, así como a las calificaciones por ellos obtenidas. </P>';
$string['dateendsubmissionevent'] = 'Fin de desafío "{$a}"';
$string['dateofend'] = 'Fecha de cierre';
$string['dateofend_help'] = '<P align="justify">Este parámetro configura la fecha de cierre de este QUESTOURnament. Después de esta fecha de cierre, los estudiantes que accedan  al  QUESTOURnament no podrán realizar ninguna de las acciones usuales. En este punto, la calificación del  QUESTOURnament será definitiva.</P>
<P align="justify">Una vez que haya terminado la competencia, su contenido seguirá siendo accesible para los estudiantes y profesores del curso, cuando esto fue definido al momento de creación del QUESTOURnament, lo que significa que todavía será posible acceder a desafíos y respuestas enviadas por todos y cada uno de los participantes, además de sus clasificaciones.</P>';
$string['dateofstart'] = 'Fecha de inicio';
$string['datestart'] = 'Inicia en';
$string['datestartevent'] = 'Inicio de QUESTOURnament "{$a}"';
$string['datestart_help'] = '\'<P align="justify">Este parámetro establece la fecha de comienzo de este módulo QUESTOURnament. A partir de esta fecha los alumnos del curso que accedan al módulo podrán añadir desafíos, responder a los ya planteados o realizar cualquier otra actividad contemplada en este módulo QUESTOURnament. </P>
<P align="justify">Esta fecha se comprobará al crear el módulo, de manera que si fuese posterior a la <a href="help.php?component=quest&identifier=dateend"">
Fecha de Cierre</a> establecida se mostraría un mensaje de error y no se añadiría el módulo QUESTOURnament que se está intentando crear. </P>';
$string['datestartsubmissionevent'] = 'Inicio de desafío "{$a}"';
$string['datestr'] = '%m/%d/%y<br />%H:%M';
$string['datestrmodel'] = '%%m/%%d/%%y &nbsp;&nbsp;%%H:%%M';
$string['deadline'] = 'Fecha final';
$string['deadlineis'] = 'La fecha final es{$a}';
$string['delete'] = 'Eliminar';
$string['deletechallenge'] = 'Este desafío ha sido eliminado';
$string['deleting'] = 'Eliminando';
$string['description'] = 'Descripción';
$string['detailsofassessment'] = 'Detalles de evaluación';
$string['difficultyAttainable'] = 'Moderada';
$string['difficultyEasy'] = 'Fácil';
$string['difficultyHard'] = 'Difícil';
$string['difficultyVeryHard'] = 'Muy difícil';
$string['disagreewiththisassessment'] = 'Estar en desacuerdo con esta evaluación';
$string['displayoffinalgrades'] = 'Visualización de calificación final';
$string['dontshowgrades'] = 'No mostrar calificaciones';
$string['doyouwantparticularform'] = '¿Desea usar un formato diferente del definido por el creador del QUESTournament para este desafío y evaluación?';
$string['edit'] = 'Editar';
$string['editacomment'] = 'Editar un comentario';
$string['editelementsanswer'] = 'Editar elementos de evaluación para respuestas';
$string['editelementsautor'] = 'Editar elementos de evaluación para autores';
$string['editingassessmentelements'] = 'Editando elementos de evaluación';
$string['editingassessmentelementsofautors'] = 'Editando elementos de evaluación de autores';
$string['element'] = 'Elemento';
$string['elements'] = 'Elementos de Evaluación';
$string['elementsautor'] = 'Elementos de Evaluación para Autores';
$string['elementsautor_help'] = '<P align="justify">Para evaluar un desafío se usa un número de "Elementos de calificación". Cada uno debe cubrir un aspecto particular y su número depende del tamaño y complejidad de la tarea encomendada. Los elementos tienen los siguientes componentes:
<div align="justify">
  <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc.
      y pobre. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma "influencia" en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de un desafío, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">Máxima Puntuación</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
  </OL>
</div>';
$string['elements_help'] = '<P align="justify">Para calificar una respuesta enviada a un desafío se utilizarán una serie de "Elementos de evaluación". Cada elemento debe cubrir un aspecto particular a evaluar en las respuestas enviadas y su número dependerá del tamaño y complejidad del desafío propuesto. Los elementos tendrán las siguientes características:
<div align="justify">
  <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc.
      y pobre. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma "influencia" en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de una respuesta, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">Máxima Puntuación</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
  </OL>
<P align="justify">El sistema proporciona la posibilidad de que el conjunto de elementos de evaluación se personalice para cada desafío añadido en un mismo QUESTOURnament.
</div>';
$string['elementweight'] = 'Ponderación del elemento';
$string['emailaddsubmission'] = 'Hola, {$a->firstname}.

Se ha añadido un nuevo desafío en el servidor \'{$a->sitename} \' , en el QUESTOURnament \'{$a->name} \'. Se titula \'{$a->title} \'.

Para acceder a este nuevo desafío, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailaddsubmissionsubject'] = 'Moodle. Desafío añadido en módulo QUESTOURnament';
$string['emailansweradd'] = 'Hola, {$a->firstname}.
Ha sido recibida una nueva respuesta en el sitio \'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \', para el desafío \'{$a->title} \'. ISe titula \'{$a->secondname} \'.

Para acceder a esta respuesta, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailansweraddsubject'] = 'Moodle. Respuesta añadida en módulo QUESTOURnament';
$string['emailanswerdelete'] = 'Hola, {$a->firstname}.

Una respuesta ha sido eliminada en el sitio
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \', del desafío \'{$a->title} \', Se llamaba \'{$a->secondname} \'.

Para acceder a este desafío, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailanswerdeletesubject'] = 'Moodle. Respuesta eliminada en módulo QUESTOURnament';
$string['emailapprobe'] = 'Hola, {$a->firstname}.

Un nuevo desafío ha sido añadido en el servidor
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \'.Se llama  \'{$a->title} \'.

Para acceder a este nuevo desafío, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailapprobesubject'] = 'Moodle. Desafío añadido en móduilo QUESTOURnament';
$string['emailassessment'] = 'Hola, {$a->firstname}.

Ha sido valorada una respuesta en el sitio
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \', del desafío \'{$a->title} \', Se llamaba \'{$a->secondname} \'.

Para acceder a esta respuesta, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailassessmentautor'] = 'Hola, {$a->firstname}.

Un desafío ha sido evaluado en el servidor
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \'. Se llama \'{$a->title} \'.

Para acceder a este nuevo desafío, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailassessmentautorsubject'] = 'Moodle. Desafío evaluado en módulo QUESTOURnament';
$string['emailassessmentsubject'] = 'Moodle. Respuesta evaluada en módulo QUESTOURnament';
$string['emailchallenge_start'] = 'Hola, {$a->firstname}. El desafío <b>\'{$a->title}\'</b> ha iniciado en el QUESTOURnament \'{$a->name}\'. (En \'{$a->sitename}\'.)
Para acceder al sitio en donde está el desafío , por favor haga click aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailchallenge_startsubject'] = 'Moodle. Desafío QUESTOURnament Iniciado';
$string['emailchallengeupdate'] = 'Hola, {$a->firstname}.

Desafío modificado en el servidor
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \'. Se llama \'{$a->title} \'.

Para acceder al desafío, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailchallengeupdatesubject'] = 'Moodle. Desafío modificado en módulo QUESTOURnament';
$string['emaildeletesubmission'] = 'Hola, {$a->firstname}.

Un desafío ha sido eliminado en el servidor
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \'. Se llama \'{$a->title} \'.

Para acceder al QUESTOURnament, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emaildeletesubmissionsubject'] = 'Moodle. Desafío eliminado en módulo QUESTOURnament';
$string['emailevaluatecomment'] = 'Hola, {$a->firstname}.
Se ha iniciado mecanismo de queja para una evaluación en el sitio
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \', del desafío \'{$a->title} \', respuestar \'{$a->secondname} \'.

Para acceder a esta respuesta, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailevaluatecommentsubject'] = 'Moodle. Queja de evaluación en módulo QUESTOURnament';
$string['emailmodifanswer'] = 'Hola, {$a->firstname}.

Una respuesta ha sido modificado en el sitio
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \', del desafío \'{$a->title} \', se llamaba \'{$a->secondname} \'.

Para acceder a esta respuesta, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailmodifanswersubject'] = 'Moodle. Modificación de respuesta en QUESTOURnament';
$string['emailsave'] = 'Hola, {$a->firstname}.

Desafío modificado en servidor
\'{$a->sitename} \', en el QUESTOURnament \'{$a->name} \'. Se llama \'{$a->title} \'.

Para acceder al sitio en donde está el desafío, por favor haga click aquí:

<a href="{$a->link}">{$a->link}</a>';
$string['emailsavesubject'] = 'Moodle. Cambios en desafío en módulo QUESTOURnament';
$string['emailtagline'] = 'Este Email es una copia del mensaje que Usted envió en \\"{$a} \\"';
$string['enterpassword'] = 'Ingresar contraseña:';
$string['enterteam'] = 'Ingresar Equipo';
$string['evaluate'] = 'Evaluar';
$string['evaluation_pending'] = 'No evaluado';
$string['excellent'] = 'Excelente';
$string['exponential'] = 'Exponencial';
$string['feedback'] = 'Retroalimentación';
$string['feedbackgoeshere'] = 'Aquí va la retroalimentación';
$string['feedback_help'] = 'Introduce la retroalimentación para este elemento de la evaluación.';
$string['firstname'] = 'Nombre';
$string['firstname_help'] = '';
$string['fullactivitylisting'] = 'Listado completo de actividad';
$string['generalcomment'] = 'Comentario general';
$string['generalcomment_help'] = 'Esto es una retroalimentación sobre el trabajo evaluado. El comentario debe ser respetuoso y constructivo.';
$string['gettechnicallogs'] = 'Obtener bitácoras técnicas';
$string['globalranking'] = 'Clasificación Global';
$string['globalranking_help'] = '<P ALIGN=CENTER><strong>Ver Ranking (Individual) </strong></P>
<P align="justify">Esta opción muestra la clasificación de los participantes en el QUESTOURnament.</P>
<P>Por favor tenga en cuenta que los profesores tienen acceso a toda la información enlistada arriba, mientras que los estudiantes solamente pueden ver aquella información que su profesor ha definido en el  QUESTOURnament seleccionando la opción para "Mostrar Detalles de Autoría a los Estudiantes en las Clasificaciones". En cualquier otro caso, los estudiantes o tendrán acceso a estos datos parciales relacionados con los desafíos propuestos por otros estudiantes.</P>
<P>Por defecto el ranking es ordenado de acuerdo al puntaje individual total obtenido por cada estudiante, aunque este orden puede ser modificado al elegir otro parámetro para ordenamiento y presionar su nombre.</P>
<P>También es posible acceder al ranking por equipos a través de la opción Ver Resumen por Equipos.</P>
</div>';
$string['good'] = 'Buena';
$string['grade'] = 'Calificación';
$string['gradeassessment'] = 'Evaluación de calificación';
$string['gradeautor'] = 'Calificación del Autor';
$string['graded'] = 'Calificado';
$string['gradedbyteacher'] = 'Calificado por {$a}';
$string['gradeforassessments'] = 'Calificación por evaluaciones';
$string['gradeofsubmission'] = 'Calificación del envío: {$a}';
$string['grading'] = 'Evaluar Respuesta';
$string['gradingcharacteristics'] = 'Características de la calificación';
$string['grading_help'] = '<P align="justify">Esta página permite a los profesores evaluar una respuesta enviada. La calificación asignada deberá depender de cómo se ajuste la respuesta a lo exigido en el desafío correspondiente.</P>
<P align="justify">Para facilitar la valoración de la respuesta se utilizarán una serie de elementos de evaluación de forma que cada uno cubra un aspecto particular a valorar en la respuesta. Para cada elemento de evaluación será preciso:
<div align="justify">
  <OL>
<LI>Introducir una calificación haciendo clic en el radio botón apropiado o seleccionando un número en el menú desplegable que se presente, etc., lo cuál dependerá de la escala utilizada para ese elemento de evaluación.
<LI>Introducir una explicación de por qué se asigna esa calificación. Si considera que la razón es obvia, puede dejar esa casilla en blanco. Tenga en cuenta, sin embargo, que la persona cuyo trabajo está evaluando puede efectuar una reclamación sobre la calificación asignada.
  </OL>
</div>
<P align="justify">Asimismo es posible realizar un comentario general sobre el trabajo valorado. Éste comentario debe ser respetuoso y constructivo. Las calificaciones y comentarios realizados se mostrará al autor de la respuesta y a todos los alumnos una vez que el desafío se cierre.
<P align="justify">El profesor o el autor del desafío podrá modificar manualmente la calificación global, en caso de que desee hacer ajustes sobre la calculada de forma automática.
<P align="justify">La máxima calificación posible para el autor de la respuesta correcta será la puntuación alcanzada por el desafío en el instante en el que se envío dicha respuesta.';
$string['gradingstrategy'] = 'Estrategia de puntuación';
$string['gradingstrategyautor'] = 'Estrategia de puntuación para autores';
$string['gradingstrategyautor_help'] = '<P align="justify">La estrategia de evaluación utilizada para evaluar los desafíos planteados en un módulo QUESTOURnament es acumulativa.

<P align="justify">Esto significa que en la calificación de cada evaluación se utiliza un número de "elementos de evaluación", debiendo cada uno de ellos cubrir un aspecto particular de la tarea a evaluar. El número de elementos de evaluación dependerá del tamaño y complejidad de la tarea. Los elementos de evaluación tienen las siguientes características:
    <div align="justify">
      <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma "influencia" en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de una respuesta, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">Máxima Puntuación</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
      </OL>
    </div>';
$string['gradingstrategy_help'] = '<P align="justify">La estrategia de evaluación utilizada para evaluar las respuestas enviadas a los desafíos planteados en un módulo QUESTOURnament es acumulativa.

<P align="justify">Esto significa que en la calificación de cada evaluación se utiliza un número de "elementos de evaluación", debiendo cada uno de ellos cubrir un aspecto particular de la tarea a evaluar. El número de elementos de evaluación dependerá del tamaño y complejidad de la tarea. Los elementos de evaluación tienen las siguientes características:
    <div align="justify">
      <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma "influencia" en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de una respuesta, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">Máxima Puntuación</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
      </OL>
    </div>';
$string['groupmode'] = 'Modo de Grupo';
$string['groupmode_help'] = '<P align="justify">El modo de grupo puede escogerse entre las siguientes opciones:</P>
<div align="justify">
  <ul>
    <li><strong>Sin grupos</strong>: No hay grupos, todos los alumnos forman parte de un único gran grupo.</li>
      <li><strong>Grupos separados</strong>: Cada alumno sólo puede ver el grupo al que él pertenece, el resto de grupos y los alumnos que los componen son invisibles. </li>
      <li><strong>Grupos visibles</strong>: Cada alumno trabaja dentro de su grupo, pero también puede ver el resto de grupos y los alumnos que los componen. </li>
  </ul>
</div>
<P align="justify">El modo de agrupación puede definirse a dos niveles:</P>
<div align="justify">
  <ul>
    <li><strong>Nivel Curso</strong>: El modo de agrupación definido a nivel de curso prevalece por defecto para todas las actividades definidas dentro de ese curso.</li>
      <li><strong>Nivel Actividad</strong>: Para toda actividad que soporte grupos se puede definir su propio modo de agrupación. No obstante, si el curso está configurado como "forzar modo de grupo" entonces no se tendrá en cuenta la configuración del modo de agrupación realizada a nivel de actividad. </li>
  </ul>
</div>';
$string['incorrect'] = 'equivocado';
$string['individualcalification'] = 'puntuación individual';
$string['individualranking'] = 'Ver Ranking (Individual)';
$string['individualranking_help'] = '<P align="justify">Esta opciónmuestra la clasificación de los participantes en el QUESTOURnament que pertenece al mismo grupo.</P>
<P align="justify">Se muestran los parámetros siguientes:</P>
<div align="justify">
<ul>
<li><strong>Imagen</strong>: image of the student introduced by himself in his profile.</li>
<li><strong>Nombre/Apellido(s)</strong>: name and last name introduced by the student when he registered himself in the system.</li>
<li><strong>Respuestas</strong>: number of answers submitted by a student in this QUESTOURnament.</li>
<li><strong>Respuestas evaluadas</strong>: number of answers assessed of all the ones submitted by this student in the QUESTOURnament.</li>
<li><strong>Número de Desafíos</strong>: number of challenges proposed by a student in this QUESTOURnament.</li>
<li><strong>Desafíos evaluados</strong>: number of challenges assessed of all the ones proposed by this student in the QUESTOURnament.</li>
<li><strong>Puntaje de Desafíos</strong>: total score obtained by the student corresponding to the assessment made by the teachers of the challenges proposed by him.</li>
<li><strong>Puntaje de Respuestas</strong>: total score obtained by the student corresponding to the assessment of the answers submitted by him.</li>
<li><strong>Puntaje del Equipo</strong>: this parameter is only shown when the option <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos</a> is selected in the QUESTOURnament. It is the percentage, set by the option <a href="help.php?component=quest&identifier=teamporcent"">Porcentaje de Puntaje del Equipo</a>, of the total score obtained by the team to which the student belongs, that will be added to his individual score.</li>
<li><strong>Puntaje</strong>: It is the total individual score of the student, incorporating his challenges and answers scores and a percentage of his team score if it were necessary.</li>
</ul>
<p>It must be emphasized that the teachers have access to all the information listed above, while the students can only see that information if the teacher that defined the QUESTOURnament selected the option <a href="help.php?component=quest&identifier=showauthoringdetails"">Show Authoring Details to the Students in Classifications</a>. In any other case, students will not have access to these partial data related to the challenges proposed by other students.</p>
<p>By default, the ranking is ordered according to the total individual score obtained by each student, although this order can be modified by choosing another ordering parameter and pressing its name.</p>
<p>It is also possible to access the ranking by teams through the option <a href="help.php?component=quest&identifier=teams"">View Summary by Teams</a>.</p>
</div>';
$string['initialpoints'] = 'Puntuación inicial';
$string['initialpoints_help'] = '<P align="justify">Este parámetro permite establecer la puntuación inicial del desafío que se va a añadir. </P>
<P align="justify">No obstante, el profesor podrá modificar este valor desde la m$iacute;nima puntuación hasta la máxima puntuación fijada para este módulo QUESTOURnament. </P>
<P align="justify">Si al añadir o modificar un desafío en un módulo QUESTOURnament la puntuación inicial fuese superior a la <a href="help.php?component=quest&identifier=maxcalification">Máxima Puntuación</a> establecida para dicho módulo, se tomaría como valor de la puntuación inicial el de la máxima puntuación establecida.</P>
<P align="justify">Finalmente destacar que el valor de este parámetro puede variar de un desafío a otro en un mismo módulo QUESTOURnament.</P>';
$string['inserterror'] = 'No se pudo insertar registro en tabla {$a} en base de datos.';
$string['introattachments'] = 'Archivos adicionales';
$string['introattachments_help'] = 'Archivos adicionales  para usar en el questiournament, tales como plantillas de respuesta, pueden añadirse. Los enlaces de descarga para los archivos entonces serán mostrados en la búsqueda debajo de la descripción.';
$string['introductiontothechallenge'] = 'Descripción del desafío';
$string['invaliddates'] = 'Fechas inválidas. Debe estar entre {$a->questdatestart} y {$a->questdateend}';
$string['invalidtext'] = 'El campo de texto está vacío';
$string['lastname'] = 'Apellido(s)';
$string['lastname_help'] = '';
$string['legend'] = 'A (B) [C] {$a} <br>A: Respuestas. B: Respuestas Correctas. <br>C: Respuestas No Evaluadas. {$a} Contestado por mí.<br>';
$string['linear'] = 'Lineal';
$string['maxcalification'] = 'Puntuación más alta';
$string['maxcalification_help'] = 'P align="justify">Este parámetro permite fijar la máxima puntuación que podrá alcanzar cada uno de los desafíos propuestos, y por lo tanto la máxima calificación que se podrá obtener en un respuesta enviada.</P>
<P align="justify"> Este valor puede ser diferente para cada uno de los desafíos, no pudiendo sin embargo superar la puntuación establecida como máxima para el módulo QUESTOURnament al que pertenezcan. </P>';
$string['maximumsize'] = 'Tamaño máximo';
$string['mincalification'] = 'Puntuación más baja';
$string['mincalification_help'] = '<P align="justify">Este parámetro permite fijar la mínima puntuación que podrá alcanzar cada uno de los desafíos propuestos, y por lo tanto la mínima calificación que se podrá obtener en un respuesta enviada.</P>
<P align="justify"> Este valor puede ser diferente para cada uno de los desafíos, no pudiendo sin embargo ser inferior de la puntuación establecida como mínima para el módulo QUESTOURnament al que pertenezcan. </P>';
$string['modif'] = 'Modificar';
$string['modifanswersubmission'] = 'Modificar respuesta para desafío {$a}';
$string['modified'] = 'modificada';
$string['modifsubmission'] = 'Modificar desafío';
$string['modifsubmission_help'] = '<P align="justify">Esta opción permite a un profesor modificar un desafío propuesto por un alumno. Los alumnos podrán modificar los desafíos que hayan propuesto, siempre y cuando no hayan sido aprobados todavía por el profesor. </P>

<P align="justify">La información que se presenta sobre el desafío y que puede modificarse es la siguiente:</P>
<ul>
   <li><strong>Título</strong>: nombre con el se designa el desafío, se recomienda que no incluya el nombre del autor, para conservar el anonimato sobre la autoría del desafío, en caso contrario podrá ser rechazado o modificado por el profesor.</li>
      <li><strong>Descripción</strong>: es el cuerpo del desafío, donde se explica la problemática y los aspectos que debe incluir la respuesta. Debe ser clara y completa. </li>
      <li><strong>Puntuación Máxima</strong>: es la máxima puntuación que podrá alcanzar el desafío, viene limitada por la <a href="help.php?component=quest&identifier=maxcalification"">Máxima Puntuación</a> del módulo QUESTOURnament al que pertenece.</li>
      <li><strong>Puntuación Inicia</strong>l: es la puntuación con la que parte el desafío en el instante de su comienzo, la cuál irá evolucionando a medida que se desarrolle el concurso.</li>
      <li><strong>Fecha de Comienzo</strong>: establece la fecha en que se abre el desafío, este parámetro sólo es configurable por parte de los profesores. Cuando el desafío lo crea un alumno, se toma como fecha de comienzo el instante de creación del desafío.</li>
      <li><strong>Fecha de Cierre</strong>: establece la fecha en la que se cierra el desafío, a partir de esta fecha no se podrá responder al desafío, aunque los autores del desafío y los profesores sí que podrán evaluar las respuestas realizadas hasta la fecha. No puede ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> establecida para el módulo QUESTOURnament. </li>
      <li><strong>Anexos</strong>: se especificarán los anexos correspondientes en caso de haberse habilitado el envío de anexos al crear el módulo QUESTOURnament. También se permite eliminar los anexos incluídos en el desafío hasta este momento.</li>
  <li><strong>Comentarios para el Autor</strong>: en este campo se incluirán las sugerencias o los comentarios que el profesor quiera realizar al alumno, los cuáles sólo estarán visibles para el autor del desafío y para el resto de profesores.</li>
  <li><strong>Comentarios para los Alumnos</strong>: en este campo se incluirán los comentarios que el profesor quiera realizar a los alumnos acerca del desafío, estos comentarios estarán visibles para todos los participantes en el módulo QUESTOURnament. </li>
</ul>';
$string['modulehiddenerror'] = 'El módulo está oculto.';
$string['modulename'] = 'QUESTOURnament';
$string['modulename_help'] = 'Questournament es una actividad que permite desarrollar competencias. Los estudiantes pueden involucrarse en una competencia para contestar un conjunto de desafíos cuyos puntajes cambian con el tiempo. El desafío aumenta su recompensa conforme pasa el tiempo sin que haya una respuesta válida. Esta actividad le permite ponerle algo de presión y motivación al curso. El juego puede jugarse individualmente o en equipos. El tablero de puntajes da crédito a los mejores participantes.';
$string['modulenameplural'] = 'QUESTOURnaments';
$string['myanswers'] = 'Mis Respuestas';
$string['myanswers_help'] = '<strong>Myis Respuestass</strong>: muestra todas las respuestas enviadas por el usuario actual. Para cada respuesta, la fecha del envío, la acción que puede ser tomada (Ver Evaluación, etc), el puntaje obtenido y su título, son mostrados. Una respuesta puede ser modificada o eliminada por el profesor en cualquier momento, mientras que el estudiante solamente puede modificar o eliminar una respuesta que el mismo estudiante ha enviado hasta que haya sido evaluada.';
$string['mychallenges'] = 'Mis Desafíos';
$string['mychallenges_help'] = '<div align="justify"><strong>Mis Desafíos</strong>: muestra una lista con todos los desafíos que han sido añadidos por el usuario que ve esta página. Para cada desafío, el puntaje actual (puntaje máximo que será posible obtener por una respuesta enviada en este momento), la fase o estado en la que está el desafío, el número de respuestas enviadas y el número de respuestas que estuvieron correctas, las fechas de apertura y cierre y su título, son mostrados. El presionar su título da acceso a la descripción completa de un desafío. El profesor podrá modificar o  eliminar un desafío en cualquier momento, mientras que el autor, si fuera un estudiante, solamente podrá hacerlo hasta que el desafío que ha añadido sea aprobado por el profesor.</div>';
$string['myplace'] = 'Mi posición para este Questournament';
$string['myplace_help'] = '<P align="justify">Esta página muestra la información correspondiente a la actividad desarrollada por cada participante en el QUESTOURnament.</P>';
$string['myranking'] = 'Mi Ranking';
$string['myranking_help'] = '<strong>Mi Raking</strong>: muestra los diferentes puntajes obtenidos por un estudiante en el QUESTOURnament, tanto los puntajes correspondientes a las respuestas evaluadas y los de los desafíos propuestos. Esta sección no se mostrará si el usuario que lve esta página es un profesor.';
$string['myrankingteam'] = 'Mi Ranking por equipos';
$string['myrankingteam_help'] = '<strong>Mi Ranking por Equipos</strong>: muestra los puntajes obtenidos por el equipo al cual pertenece el estudiante que ve esta página. Esta opción solamente será mostrada si el QUESTOURnament tiene seleccionada la opción para <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos</a>. Esta sección no se mostrará si el usuario que lve esta página es un profesor.';
$string['nanswers'] = 'Respuestas';
$string['nanswersassessment'] = 'Respuestas Valoradas';
$string['nanswersassessment_help'] = '<strong>Respuestas evaluadas</strong>: número de respuestas evaluadas de entre todas las enviadas por este estudiante en el  QUESTOURnament.';
$string['nanswerscorrect'] = 'Respuestas Correctas';
$string['nanswerscorrectshort'] = 'Correctas';
$string['nanswers_help'] = '<strong>Respuestas</strong>: número de respuestas enviadas por un estudiante en este QUESTOURnament.';
$string['nanswersshort'] = 'Respuestas';
$string['nanswerswhithoutassess'] = 'No valoradas';
$string['ncomponents'] = 'Número de miembros';
$string['ncomponents_help'] = '<P align="justify">Este parámetro configura el número máximo de miembros que puede tener cada equipo.</P>
<P align="justify">Si un estudiante trata de volverse miembro de un equipo que ya está lleno, el sistema le informará de este hecho y el estudiante tendrá que volverse miembro de otro equipo.</P>';
$string['ncomponentsteam'] = 'Miembros máximos en equipo';
$string['need_to_be_editor'] = '(Necesita ser un editor para añadir desafíos. Pídale permiso a su profesor).';
$string['nelements'] = 'Número de Elementos de Evaluación';
$string['nelementsautor'] = 'Número de Elementos de Evaluación para Autores';
$string['nelementsautor_help'] = '<P align="justify">Este número indica la cantidad de elementos de evaluación que se utilizarán para evaluar la tarea realizada por los autores de desafíos. Dicho número dependerá del tamaño y complejidad de la tarea. Existe además un campo para realizar comentarios generales sobre la evaluación realizada. </P>';
$string['nelements_help'] = '<P align="justify">Este número indica la cantidad de elementos de evaluación que se utilizarán para evaluar las respuestas enviadas a los desafíos planteados. Dicho número dependerá del tamaño y complejidad del desafío. Existe además un campo para realizar comentarios generales sobre la evaluación realizada. </P>';
$string['newattachment'] = 'nuevo anexo';
$string['newcalification'] = 'Nueva calificación';
$string['newteam'] = 'Nuevo equipo';
$string['nmaxanswers'] = 'Número máximo de respuestas correctas';
$string['nmaxanswers_help'] = '<P>Este parámetro establece el número máximo de respuestas correctas que se admiten en un desafío antes de que el mismo se cierre. </P>
<P>Una vez alcanzado dicho número de respuestas calificadas como correctas, el desafío se cerrará, de manera que no se admitirán más respuestas a dicho desafío independientemente de la puntuación actual del desafío o de que haya llegado o no su <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a></P>';
$string['noanswers'] = 'Sin respuestas';
$string['noassessments'] = 'Sin Evaluaciones';
$string['noassessmentsdone'] = 'Sin evaluaciones';
$string['noattachments'] = 'Sin Anexos';
$string['nocapabilityaddchallenge'] = 'Usted no tiene permisos suficientes para añadir un desafío';
$string['nograde'] = 'Sin Calificación';
$string['nopermissionassessment'] = 'Usted no tiene permisos para ver esta evaluación. Usted debería ser profesor o autor del desafío.';
$string['notavailable'] = 'no disponible';
$string['noteonassessmentelements'] = 'Tenga en cuenta que la calificación se divide en varios \'Elementos de evaluación\'\'.<br />
Esto hace que el calificar sea más fácil y consistente. Un evaluador debe añadir estos <br />
Elementos antes de hacer el  Questournament disponible para estudiantes. Esto se hace al <br />
hacer clic en el  Questournament en el curso; si no hubiera elementos presentes se le pedirá<br />
que los añada. Usted puede cambiar el número de elementos usando la pantalla para Editar Evaluación del Autor,<br />
los elementos mismos pueden ser corregidos desde la pantalla para  "Editar Evaluaciones del Autor ".';
$string['notgraded'] = 'No Calificada';
$string['notpermissionsubmission'] = 'Usted no tiene permisos para ver este desafío.';
$string['notsubmittedyet'] = 'Aun no se han hecho envíos';
$string['nsubmissions'] = 'Número de desafíos';
$string['nsubmissionsassessment'] = 'Desafíos evaluados';
$string['nsubmissionsassessment_help'] = '<strong>Desafíos Evaluados</strong>: número de desafíos evaluados de entre todos los propuestos por este estudiante en el QUESTOURnament.';
$string['nsubmissions_help'] = '<strong>Número de Desafíos</strong>: número de desafíos propuestos por un estudiante en este QUESTOURnament.';
$string['numbermaxofanswers'] = 'Número máximo de respuestas correctas';
$string['numberofattachments'] = 'Número de Anexos esperados en Envíos';
$string['numberofattachments_help'] = '<P align="justify">El número introducido aquí determina cuántas cajas para la de subida de archivos se mostrarán cuando un estudiante o profesor realice un envío. Este número puede oscilar entre 0 y 5. Normalmente este número será 0 ó 1, pero en ciertos casos puede ser necesario permitir el envío de más de un anexo. Si el valor especificado es 0, que es además el valor por defecto para este parámetro, esto indica que no se permite adjuntar anexos en los envíos.</p>
<P align="justify">Si, por ejemplo, el número especificado es 3, y sólo se adjuntan 2 archivos al envío, dicho envío se realiza sin que se muestre ningún mensaje de advertencia. Es decir que, cuando se envía un trabajo se puede adjuntar cualquier número de archivos hasta el máximo permitido.</p>';
$string['of'] = 'de';
$string['oldteam'] = 'Equipo actual';
$string['password'] = 'Contraseña';
$string['password_help'] = '<P align="justify">Este campo permite introducir la contraseña de acceso para este módulo QUESTOURnament. La contraseña puede tener una longitud máxima de 10 caracteres, y puede modificarse en cualquier momento a lo largo del tiempo de vida de este QUESTOURnament. Seleccionando la opción " <a href="help.php?component=quest&identifier=usepassword"">Usar contraseña</a>" se puede garantizar que los estudiantes deban escribir esta contraseña para acceder a este	módulo QUESTOURnament.</p>';
$string['passwordprotectedquest'] = 'QUESTOURnament Protegido por Contraseña';
$string['perceiveddifficultyLevel'] = 'Dificultad';
$string['perceiveddifficultyLevelQuestion'] = '¿Qué tan difícil ha sido este desafío para Usted?';
$string['perceivedTeacherDifficultyLevel'] = 'Dificultad estimada';
$string['perceivedTeacherDifficultyLevel_help'] = 'Dificultad estimada del desafío. Este nivel es usado para categorizar los desafíos. Es usado para investigación pedagógica. Este es un parámetro opcional.';
$string['permitsubmit'] = 'Permitir re-envío';
$string['permitviewautors'] = 'Mostrar detalles de autoría a los estudiantes de desafíos cerrados';
$string['permitviewautors_help'] = '<P align="justify">Si se habilita esta opción, deshabilitada por defecto, se mostrarán los autores de los desafíos de un módulo QUESTOURnament cuando dichos desafíos se hayan cerrado y ya no sea posible enviar más respuestas. </P>
<P align="justify">En caso contrario, los alumnos no conocerán nunca la identidad de los autores de los desafíos independientemente de cuál sea el estado de los mismos. </P>';
$string['phase'] = 'Fase';
$string['phase1'] = 'QUESTOURnament Inactivo';
$string['phase1answer'] = 'No evaluado';
$string['phase1quest'] = 'Inicar pendiente';
$string['phase1short'] = 'Configurar';
$string['phase1submission'] = 'Pendiente de Aprobación';
$string['phase2'] = 'Abrir QUESTOURnament';
$string['phase2answer'] = 'Evaluado por Autor';
$string['phase2quest'] = 'En proceso';
$string['phase2short'] = 'Envíos';
$string['phase2submission'] = 'Iniciar pendientes';
$string['phase3'] = 'QUESTOURnament Cerrado';
$string['phase3answer'] = 'Evaluado por Profesor';
$string['phase3quest'] = 'Questournament terminado';
$string['phase3short'] = 'Ambos';
$string['phase3submission'] = 'Desafío en proceso';
$string['phase4'] = 'QUESTOURnament Cerrado.<br> Puntajes publicados';
$string['phase4answer'] = 'Evaluado como correcto por Autor';
$string['phase4short'] = 'Evaluaciones';
$string['phase4submission'] = 'Desafío cerrado';
$string['phase5'] = 'Cómputo de puntaje final.';
$string['phase5answer'] = 'Evaluado como correcto por Profesor';
$string['phase5short'] = 'Computar';
$string['phase5submission'] = 'Evaluado. Pendiente de Aprobación.';
$string['phase6'] = 'Mostrar puntaje final';
$string['phase6short'] = 'Mostrar puntajes finales';
$string['phase6submission'] = 'Evaluado. Desafío en proceso';
$string['phase7submission'] = 'Evaluado. Desafío cerrado';
$string['phase8submission'] = 'Evaluado. Pendiente de Aprobación';
$string['picture'] = 'Imagen';
$string['picture_help'] = '';
$string['pictureof'] = 'Imagen de';
$string['pluginadministration'] = 'Administración de Questournament';
$string['pluginname'] = 'Questournament';
$string['points'] = 'Puntaje';
$string['pointsanswers'] = 'Respuestas.Puntaje';
$string['pointsanswers_help'] = '<strong>Puntaje por Respuestas</strong>: puntaje total obtenido por el estudiante correspondiente a la evaluación de las respuestas enviadas por el estudiante';
$string['points_help'] = '<strong>Puntaje</strong>: es el puntaje individual total del estudiante (o del equipo), incorporando tanto sus puntajes por desafíos y por respuestas y un porcentaje del puntaje de su equipo si fuera necesario.';
$string['pointsmax'] = 'Puntaje Máximo';
$string['pointsmax_help'] = 'Este parámetro permite fijar la máxima puntuación que podrá alcanzar este desafío, y por lo tanto la máxima calificación que se podrá obtener en un respuesta enviada.
Este valor puede ser diferente para cada uno de los desafíos. Sin embargo no puede superar la puntuación establecida como máxima para el módulo QUESTOURnament al que pertenezcan.';
$string['pointsmaxsubmission'] = 'Puntaje máximo alcanzado';
$string['pointsmin'] = 'Puntaje Mínimo';
$string['pointsmin_help'] = 'Este parámetro permite fijar la mínima puntuación que podrá alcanzar este desafío, y por lo tanto la mínima calificación cobre la que se calculará la nota de una respuesta enviada.
Este valor puede ser diferente para cada uno de los desafíos. Sin embargo no puede ser inferior que la puntuación establecida como mínima para el módulo QUESTOURnament al que pertenezcan.';
$string['pointssubmission'] = 'Puntaje de Desafíos';
$string['pointssubmission_help'] = '<strong>Puntaje por Desafíos</strong>: puntaje total obtenido por el estudiante correspondiente a la evaluación hecha por el profesor de los desafíos propuestos por el estudiante.';
$string['pointsteam'] = 'Puntaje de Equipo';
$string['pointsteam_help'] = '<strong>Puntaje del Equipo</strong>: este parámetro solamente es mostrado cuando está seleccionada la opción para <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos</a> en el QUESTOURnament. Esto es el porcentaje , configurado por la opción de \'Porcentaje del Puntaje del Equipo\', del puntaje total obtenido por el equipo al que pertenece el estudiante, que será añadido a su puntaje individual del estudiante.';
$string['poor'] = 'Pobre';
$string['porcent'] = 'porcentaje';
$string['predictedDurationQuestion'] = 'Estimación del tiempo para contestar esta pregunta';
$string['predictedDurationQuestion_help'] = 'Estimación del tiempo para contestar esta pregunta. Este nivel es usado para categorizar los desafíos. Es usado para investigación pedagógica. Este es un parámetro opcional.';
$string['present'] = 'Presente';
$string['preview'] = 'Vista previa';
$string['processingquest'] = 'Procesando {$a}';
$string['quest:addchallenge'] = 'Añadir un nuevo desafío al torneo';
$string['quest:addinstance'] = 'Añadir una nueva instancia de un torneo (Obsoleto)';
$string['quest:approvechallenge'] = 'Aprobar un desafío propuesto.';
$string['quest:approvegrade'] = 'Aprobar una calificación pendiente';
$string['questapprovesubmission'] = 'Desafíos aprobados en QUESTOURnament';
$string['questassessments'] = 'Evaluaciones en QUESTOURnament';
$string['quest:attempt'] = 'Enviar una respuesta para un desafío';
$string['questcomments'] = 'Commentarios en QUESTOURnament';
$string['quest:deleteattempts'] = 'Eliminar respuesta propia y de otros';
$string['quest:deletechallengeall'] = 'Eliminar desafíos propios y de otros';
$string['quest:deletechallengemine'] = 'Eliminar desafíos propios';
$string['quest:downloadlogs'] = 'Descargar reportes crudos actuales de questournament';
$string['quest:editattempt'] = 'Editar respuesta enviada de cualquiera';
$string['quest:editattemptmine'] = 'Editar respuesta propia enviada';
$string['quest:editchallengeall'] = 'Editar desafío enviado de cualquiera';
$string['quest:editchallengemine'] = 'Editar desafío propio enviado';
$string['quest:emailconfirmchallenge'] = 'Recibir notificaciones por Email de desafíos de questournaments propios';
$string['quest:emailnotifychallenge'] = 'Recibir notificaciones por Email de desafíos de questournaments de otras personas';
$string['quest:generateActivityReport'] = 'Actividad';
$string['quest:generateCSVlogs'] = 'Generar reporte CSV para:';
$string['quest:generateIPAccessesReport'] = 'Direcciones IP de Accesos';
$string['quest:generateLogsReport'] = 'Bitácoras';
$string['quest:grade'] = 'Calificar y comentar manualmente en intentos de estudiantes en una pregunta, y re-calificar questournaments';
$string['quest:gradeownchallenge'] = 'Calificar desafío propio';
$string['questgraphtitle'] = 'Puntajes potenciales';
$string['questgraphYlegend'] = 'Puntaje';
$string['quest:ignoretimelimits'] = 'Ignorar limites de tiempo';
$string['quest:manage'] = 'Editar las configuraciones de questournament , añadir o quitar desafíos.';
$string['quest:manageownchallenge'] = 'Gestionar desafío propio';
$string['quest:notifyemptylogs'] = 'Última consulta sin resultados. Revise si la bitácora antigua está habilitada en este servidor.<br/>';
$string['quest:notifylocale'] = '<P>For your locale "<b>{$a->localelang}</b>"el separador decimal es "
<b>{$a->localeconfigdecimal}</b>".
Revise que su Hoja de Cálculo interpreta correctamente este caracter.</p>';
$string['quest:preview'] = 'Ver información extendida y enlaces de las diferentes partes del Questournament.';
$string['quests'] = 'BÚSQUEDAs';
$string['questsubmitanswer'] = 'Respuestas enviadas a QUESTOURnament';
$string['questsubmitsubmission'] = 'Desafíos enviados a QUESTOURnament';
$string['quest:view'] = 'ver un torneo';
$string['quest:viewotherattemptsowners'] = 'Ver propietarios de otros intentos';
$string['quest:viewreports'] = 'Ver los reportes de questournament';
$string['recalificationall'] = 'Re-evaluar todas las respuestas';
$string['reevaluate'] = 'Re-evaluar';
$string['removeelement'] = 'Quitar elemento';
$string['reply'] = 'Respuesta';
$string['resetchanges'] = 'Reiniciar cambios';
$string['resetquestallanswers'] = 'Borrar todas las respuestas y puntajes';
$string['responsetochallenge'] = 'Respuesta al desafío';
$string['resume24hours'] = 'Resumen de eventos para desafíos añadidos o modificados en el  QUESTOURnament {$a->name} en las últimas 24 horas';
$string['resumeindividual'] = 'Ver Resumen Individual';
$string['resumequest'] = 'Moodle. Resumen de actividad. QUESTOURnament {$a->name}';
$string['resumeteams'] = 'Ver Resumen por Equipos';
$string['returnto'] = 'Regresar a';
$string['rubric'] = 'Rúbrica';
$string['save'] = 'Guardar';
$string['savedok'] = 'Guardado OK';
$string['savemyassessment'] = 'Guardar mi Evaluación';
$string['savemycomment'] = 'Guardar mi Comentario';
$string['savemygrading'] = 'Guardar mi Calificación';
$string['savemysubmission'] = 'Guardar mi Desafío';
$string['scale10'] = 'Puntaje sobre 10';
$string['scale100'] = 'Puntaje sobre 100';
$string['scale20'] = 'Puntaje sobre 20';
$string['scalecorrect'] = 'Escala Correcto/Incorrecto de 2 puntos';
$string['scaleexcellent4'] = 'Escala Excelente/Muy Pobre de 4 puntos';
$string['scaleexcellent5'] = 'Escala Excelente/Muy Pobre de 5 puntos';
$string['scaleexcellent7'] = 'Escala Excelente/Muy Pobre de 7 puntos';
$string['scalegood3'] = 'Escala Buena/Pobre de 3 puntos';
$string['scalepresent'] = 'Escala Presente/Ausente de 2 puntos';
$string['scaleyes'] = 'Escala Si/No de 2 puntos';
$string['see'] = 'Ver';
$string['seeassessment'] = 'Ver Evaluación';
$string['seeassessmentautor'] = 'Ver evaluación de desafío';
$string['seeassessmentautor_help'] = '<P align="justify">Esta página muestra la evaluación de un desafío propuesto, de esta forma, si no se está de acuerdo con la misma se podrá reclamar al profesor para que la revise, siendo posible indicar el motivo del desacuerdo con la evaluación realizada.
Además de la calificación asignada por el autor del desafío, también se muestra, entre paréntesis, la máxima puntuación posible, siendo ésta la puntuación que se alcanzó con la primera respuesta correcta, o en caso de no haberse respondido aún correctamente, la puntuación inicial. </P>
<P align="justify">Los profesores podrán realizar una corrección manual de la calificación asignada para cubrir aquellos aspectos que haya podido no tener en cuenta el formato de evaluación automática. </P>';
$string['seeassessment_help'] = '<P align="justify">Esta página muestra la evaluación de una respuesta enviada, de esta forma, si no se está de acuerdo con la misma se podrá reclamar al profesor o al autor del desafío para que la revise, siendo posible indicar el motivo del desacuerdo con la evaluación realizada.
<P align="justify">Además de la calificación obtenida por el autor de la respuesta, también se muestra la máxima puntuación posible por dicha respuesta, que será la puntuación del desafío en el instante en que se envió la repuesta sobre la que se efectúa la reclamación. </P>
<P align="justify">Los profesores y autores de los desafíos podrán realizar una corrección manual de la calificación otorgada para considerar aquellos aspectos que haya podido no tener en cuenta el formato de evaluación automática. </P>';
$string['seevaluate'] = 'Ver evaluación';
$string['select'] = 'Seleccionar';
$string['selfassessment'] = 'Auto Evaluación';
$string['shouldSelectDifficultyLevel'] = 'Por favor, seleccione un nivel de dificultad';
$string['showanswer'] = 'Mostrar respuesta';
$string['showanswers'] = 'Mostrar respuestas';
$string['showanswersteam'] = 'Mostrar respuestas de equipo';
$string['showanswersuser'] = 'Mostrar respuestas individuales';
$string['showauthoringdetails'] = 'Mostrar detalles de autoría a los estudiantes en clasificaciones.';
$string['showauthoringdetails_help'] = '<P align="justify">Si se habilita esta opción, deshabilitada por defecto, la tabla de puntuaciones mostrará los datos parciales relativos al número de desafíos propuestos y evaluados por cada alumno y por cada equipo, además de la puntuación obtenida por las respuestas enviadas a desafíos propuestos. Debe tenerse en cuenta que esto hace que no se respete el anonimato de los autores de los desafíos, sobre todo si se trata de grupos pequeños y con escasa participación. </P>';
$string['showcalification'] = 'Mostrar puntajes';
$string['showclasifindividual'] = 'Mostrar Clasificación Individual';
$string['showclasifindividual_help'] = '<P align="justify">Esta opción está habilitada por defecto y permite que se muestre tanto la clasificación individual de los alumnos como la clasificación por equipos en caso de tener habilitada la opción de <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos.</a></P>
<P align="justify">Si la opción de Permitir Equipos no está habilitada, sólo tendría sentido el valor por defecto de esta opción que muestra la clasificación individual. </P>';
$string['showdescription'] = 'Mostrar descripción de QUESTOURnament';
$string['showgrades'] = 'Mostrar Calificaciones';
$string['showresultssection'] = 'Información a mostrarle a estudiantes';
$string['showsubmission'] = 'Mostrar Envío';
$string['showsubmissions'] = 'Mostrar Envíos';
$string['showsubmissionsteam'] = 'Mostrar Envíos de Equipo';
$string['showsubmissionsuser'] = 'Mostrar Envíos Individuales';
$string['specimenanswer'] = 'Formato de Evaluación para Respuestas';
$string['specimenanswer_help'] = '<P align="justify">Esta página muestra el formato de evaluación que es usado para valorar cada una de las respuestas enviadas a un desafío de este  QUESTOURnament.</P>';
$string['specimenassessmentform'] = 'Formato de Evaluación de Ejemplo';
$string['specimenassessmentformanswer'] = 'Formato de Evaluación de Ejemplo para respuestas';
$string['specimenassessmentformsubmission'] = 'Formato de Evaluación de Ejemplo para desafíos';
$string['specimensubmission'] = 'Formato de Evaluación para Desafíos';
$string['specimensubmission_help'] = '<P align="justify">Esta página muestra el formato de evaluación que es usado para valorar los desafíos propuestos por estudiantes en este  QUESTOURnament.</P>';
$string['studentassessments'] = '{$a} Evaluaciones';
$string['studentgrades'] = '{$a} Calificaciones';
$string['studentsubmissions'] = '{$a} Envíos';
$string['studentsubmissionsforassessment'] = '{$a} Envíos de Estudiante para evaluación';
$string['subject'] = 'Asunto:';
$string['submission'] = 'Desafío';
$string['submissionend'] = 'Fecha de cierre del Desafío';
$string['submissionend_help'] = '<P align="justify">Permite establecer la fecha en la que se cerrará un desafío. A partir de esta fecha no será posible enviar más respuestas al desafío. Sin embargo, los profesores sí podrán seguir evaluando al autor del desafío, tanto por la pregunta planteada como por la labor desarrollada como evaluador. Asimismo, los autores de los desafíos podrán continuar evaluando las respuestas enviadas por otros alumnos.</P>
<P align="justify">Una vez se cierre el desafío, todos los participantes podrán ver las respuestas enviadas por el resto, así como las evaluaciones y puntuaciones obtenidas. </P>
<P align="justify">Esta fecha no podrá ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> del módulo QUESTOURnament, ni anterior a la <a href="help.php?component=quest&identifier=submissionstart"">Fecha de Comienzo del Desafío </a>. </P>';
$string['submissions'] = 'Desafíos';
$string['submissionstart'] = 'Fecha de inicio del Desafío';
$string['submissionstart_help'] = '<P align="justify">Permite establecer la fecha en la que comenzará un desafío. Este parámetro sólo es configurable por un profesor.</P>
<P align="justify">Si el desafío lo crea un alumno se toma como fecha de comienzo la fecha de creación del desafío, pudiendo los profesores modificar este valor al aprobar el desafío o al realizar alguna modificación sobre él.</P>
<P align="justify">A partir de esta fecha los alumnos podrán visualizar el desafío y enviar sus respuestas. </P>
<P align="justify">Este fecha deberá ser anterior a la <a href="help.php?component=quest&identifier=submissionend"">Fecha de Cierre del Desafío </a>. </P>';
$string['submitchallenge'] = 'Enviar nuevo desafío';
$string['submitchallengeassignment'] = 'Añadir desafío';
$string['submitchallengeassignment_help'] = '<P>Para permitirle al estudiante enviar nuevos desafíos, debe otorgarse el permiso "mod/quest:addchallenge" .
Probablemente, su plataforma podría tener un rol con este permiso. Use la opción del menú para "Roles asignados localmente" o "Permisos" para añadir a los estudiantes que pueden ser autores de desafíos en este  QUESTOURNAMENT.</P>';
$string['submitted'] = 'Desafío Enviado';
$string['submittedanswer'] = 'Respuesta enviada';
$string['submittedby'] = 'Enviado por';
$string['suggestedgrade'] = 'Calificación sugerida';
$string['team'] = 'Equipo';
$string['teamcalification'] = 'Puntaje del equipo';
$string['teamforquest'] = 'Equipo de Trabajo para QUESTOURnament {$a}';
$string['team_help'] = '';
$string['teamname'] = 'Nombre del Equipo';
$string['teamporcent'] = 'Porcentaje de Puntaje del equipo';
$string['teamporcent_help'] = '<P align="justify">Este parámetro establece el tanto por ciento de la clasificación de los equipos que se añadirá a la clasificación individual, que es la que determina la nota final de un alumno en un módulo QUESTOURnament.</P>
<P align="justify">El porcentaje, establecido por este parámetro, de la puntuación obtenida por un equipo, se suma a la puntuación individual total de cada alumno que pertenezca a dicho equipo. </P>
<P align="justify">El objetivo es premiar el trabajo en equipo de forma que éste repercuta en la clasificación final de cada alumno. </P>';
$string['teams'] = 'Clasificación del Equipo';
$string['teams_help'] = '<P align="justify">Esta página muestra el puntaje obtenido por cada equipo que pertenece al mismo grupo en un QUESTOURnament. Un porcentaje de este puntaje, determinado por  el parámetro de  "<a href="help.php?component=quest&identifier=teamporcent"">Porcentaje del Puntaje del Equipo</a>" del QUESTOURnament contribuirá al puntaje individual de cada miembro del equipo.</P>
<P>Por defecto, el ranking está ordenado de acuerdo al puntaje total  obtenido por cada equipo, aunque este orden puede ser modificado al elegir otro parámetro de ordenamiento y presionar su nombre.</P>
<P>También es posible acceder al puntaje individual mediante la opción para <a href="help.php?component=quest&identifier=global"">Ver Clasificación Global</a>.</P>
</div>';
$string['thegradeis'] = 'La calificación es';
$string['timeassessment'] = 'Evaluado en';
$string['timemaxoflife'] = 'Tiempo Máximo de Vida para nuevos desafíos (días)';
$string['timemaxquestion'] = 'Tiempo de vida máximo';
$string['timemaxquestion_help'] = '<P align="justify">Este parámetro establece la duración en días de los desafíos añadidos en este módulo QUESTOURnament. </P>
<P align="justify">Los alumnos no podrán modificar la duración de los desafíos que añadan a este módulo. Sin embargo, los profesores sí podrán modificar las fechas de comienzo y de cierre de todos los desafíos del módulo, tanto de los planteados por los alumnos como de los planteados por ellos mismos.</P>';
$string['tinitial'] = 'Tiempo Inicial';
$string['tinitial_help'] = '<P align="justify">Este parámetro establece el tiempo, en días, que transcurrirá desde la fecha de comienzo de un desafío durante el cuál su puntuación no variará. Esto será así siempre y cuando no se haya enviado y evaluado una respuesta correcta a dicho desafío, ya que si esto ocurre, la puntuación comenzará a descender. </P>
<P align="justify">Se pretende de esta manera incentivar a los alumnos a que respondan lo antes posible para obtener la máxima puntuación posible.</P>';
$string['title'] = 'Título';
$string['today'] = 'Hoy';
$string['tothechallenge'] = 'al desafío';
$string['typecalification'] = 'Tipo de calificación';
$string['typecalification_help'] = '<P align="justify">Este parámetro permite establecer la forma en que variará la puntuación de un desafío. Cada desafío propuesto tendrá una puntuación inicial fijada mediante el parámetro <a href="help.php?component=quest&identifier=initialpoints"">Puntuación Inicial</a>, una calificación máxima posible fijada mediante el parámetro <a href="help.php?component=quest&identifier=maxcalification"">Máxima Puntuación</a> y un <a href="help.php?component=quest&identifier=tinitial"">Tiempo Inicial</a> que determina el tiempo, medido en días, desde la fecha de comienzo del desafío en el que su puntuación no varíará salvo que se envíe y califique una respuesta correcta. De esta forma y transcurrido el tiempo inicial establecido, o bien, a partir de que se envíe y califique una respuesta correcta, la puntuación del desafío empezará a variar a partir de la puntuación inicial de dos formas posibles, según el tipo de puntuación escogido:</P>
<P align="justify">LINEAL: la variación de la puntuación se produce linealmente, incrementándose hasta que llegue la fecha de finalización del desafío, alcanzando en este momento la máxima puntuación establecida, o bien hasta que se responda correctamente por vez primera y se califique dicha respuesta, momento a partir del cuál la puntuación comenzará a disminuir, de manera que se alcance el valor cero en la fecha de cierre del desafío, siempre y cuando antes no se hayan enviado y calificado el <a href="help.php?component=quest&identifier=nmaxanswers"">Número Máximo de Respuestas</a> admitidas para ese desafío.</P>
<P align="justify">EXPONENCIAL: la variación de la puntuación sigue las mismas pautas que en el tipo anterior, con la diferencia de que en este caso la variación no es lineal, sino exponencial, por lo que la variación es mayor a medida que transcurre el tiempo.</P>';
$string['typegrade'] = 'Obtener calificaciones a partir de';
$string['typegrade_help'] = '<P align="justify">Este parámetro establece en función de qué clasificación se va a calcular la nota final para cada uno de los alumnos. </P>
<P align="justify">Existen dos posibilidades: </P>
<div align="justify">
  <ul>
    <li><strong>Alumnos</strong>: la nota que se calcula para cada alumno se obtiene a partir de la clasificación individual. No obstante, si la opción de equipos está habilitada la puntuación del equipo de cada alumno contribuirá a su clasificación individual.</li>
      <li><strong>Equipos</strong>: para el cálculo de las notas de cada alumno únicamente se emplea la clasificación de los equipos. De esta forma, los alumnos que pertenezcan a un mismo equipo obtendrán la misma nota. Para que esta posibilidad tenga sentido, deberá estar habilitada la opción de <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos</a>. </li>
  </ul>
</div>';
$string['typeindividual'] = 'Estudiantes';
$string['typeofscale'] = 'Tipo de Escala';
$string['typeteam'] = 'Equipo';
$string['unknownauthor'] = 'Autor desconocido';
$string['unkownactionerror'] = 'Error fatal : Acción desconocida {$a}.';
$string['updatecomment'] = 'Comentario actualizado';
$string['usepassword'] = 'Usar contraseña';
$string['usepassword_help'] = '<P align="justify">Esta opción permite asociar una contraseña de acceso a este módulo QUESTOURnament. Proteger un módulo QUESTOURnament con contraseña puede resultar necesario, por ejemplo, cuando dicho módulo sea utilizado por varios grupos de estudiantes en un curso y se proponga a cada grupo en un periodo de tiempo diferente, en este caso, la contraseña de acceso impedirá que un grupo de estudiantes pueda acceder al módulo QUESTOURnament una vez que éste haya sido abierto para otro grupo de estudiantes diferente, pero no para ellos aún.</p>';
$string['user'] = 'Usuario';
$string['validateassessment'] = 'Validar Evaluaciones';
$string['validateassessment_help'] = '<P align="justify">Si se habilita esta opción, el profesor tendrá que validar todas las calificaciones otorgadas por los alumnos para que éstas tengan valor. Estas calificaciones se refieren a las realizadas por los alumnos autores de los desafíos planteados a las respuestas enviadas por otros alumnos a dichos desafíos. </P>
<P align="justify">Asimismo, la clasificación de los alumnos no se modificará hasta que el profesor haya validado las calificaciones otorgadas por los alumnos. El profesor podrá modificar el valor de dichas calificaciones, siendo la puntuación otorgada por el profesor, en caso de que sea diferente a la otorgada por el alumno autor del desafío, la que pase a formar parte de la nota final del alumno evaluado. </P>
<P align="justify">Si esta opción no se habilita, el profesor no tendrá la obligación de validar todas las calificaciones otorgadas por estudiantes, aunque sí podría hacerlo si así lo deseara. Igualmente, si el profesor modifica la calificación, será esta nueva puntuación la que pase a formar parte de la nota final del alumno. Si por el contrario, el profesor no realizase de nuevo la evaluación de la respuesta, se utilizaría la puntuación obtenida en la evaluación realizada por el alumno autor del desafío. </P>';
$string['verypoor'] = 'Muy Pobre';
$string['view'] = 'Ver';
$string['viewassessment'] = 'Ver Evaluación';
$string['viewassessmentautor'] = 'Ver Evaluación del desafío';
$string['viewclasification'] = 'Ver Ranking';
$string['viewclasificationglobal'] = 'Ver Clasificación Global';
$string['viewclasificationteams'] = 'Ver Clasificación del Equipo';
$string['warningonamendingelements'] = 'ADVERTENCIA: Hay evaluaciones enviadas <br />NO cambie el número de elementos, los tipos de escala o las ponderaciones de elementos.';
$string['weight'] = 'Ponderación';
$string['weights'] = 'Ponderaciones';
$string['wrongpassword'] = 'Contraseña incorrecta para este QUESTOURnament';
$string['yourfeedbackgoeshere'] = 'Su Retroalimentación va aquí';
