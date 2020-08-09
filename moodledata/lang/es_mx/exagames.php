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
 * Strings for component 'exagames', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   exagames
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure_questions'] = 'Configurar Preguntas';
$string['configure_quiz'] = 'Configurar examen';
$string['exagamesintro'] = 'Introducción';
$string['exagamesname'] = 'Nombre';
$string['game_braingame'] = 'juegocerebro';
$string['game_gamelabs'] = 'gamelabs.at';
$string['game_tiles'] = 'exaclick';
$string['game_tiles_rules'] = '¿Está listo para el reto exaclick?
Try to recognize what you see on these pictures and answer the questions. Here is what you need to do:<br />1. Click “Start” and a hidden image will appear. Tiles will gradually drop revealing more and more of the image/clip.<br />2. If you think you know enough, click “Stop”, the earlier you click “Stop” the higher your score will be. – But watch out!  If you click too early you might not yet see enough to answer the question!<br />3. Answer the pertaining question before time runs out.  You have 40 seconds to answer each question. You will get a higher score for more difficult questions and the faster you answer. Give a wrong answer and you will lose a life.<br />4. Keep on going until the end of the game<br />The questions will get more and more difficult. Be careful, you only have three lives. Only the most courageous and clever learners will be able to break the high-score. May the force be with you!';
$string['gametype'] = 'Tipo-de-Juego';
$string['gametype_help'] = 'Exabis-Games actualmente contiene 2 juegos:

* braingame: aquí es donde se admiten pruebas con animaciones flash. ¡El objetivo es ayudar al científico con las respuestas correctas para volar al espacio!
* exaclick - Aquí una imagen se vuelve más visible con el tiempo, lo cual es importante para responder la pregunta respectiva. Cuando hace clic en una de las soluciones alternativas, el tiempo se detiene y se evalúa la respuesta. Las preguntas para este juego deben configurarse de antemano en la pestaña "Configurar preguntas". <br /> <br /> NOTA: Solo esas imágenes (jpg, png, gif) se enumeran en el configurador que están en el mismo curso que un recurso o se almacenan en una carpeta en la que también tiene lugar la actividad Exagames.';
$string['modulename'] = 'Juegos Exabis';
$string['modulename_help'] = 'El módulo de juegos exabis importa exámens del tipo "opción múltiple" y "falso  /verdadero" a los juegos para apoyar la ejecución de estas tareas con animaciones dentro del contexto del juego.

Hay 2 juegos para elegir actualmente:

* BrainGame: ¡El objetivo es responder preguntas correctamente y ayudar al científico a alcanzar su objetivo de volar al espacio!

* Exaclicks: a medida que pasa el tiempo, una imagen se vuelve más y más visible y ayuda al alumno a elegir las respuestas correctas a las preguntas.

NOTA: El tipo de juego Exaclicks se configura dentro de la actividad del juego exabis. Cualquier imagen cargada en este curso (como recursos o carpetas internas) se puede utilizar para la configuración de las preguntas.';
$string['modulenameplural'] = 'Juegos Exabis';
$string['noquizzesincourse'] = 'Favor de crear  {$a->linkTag} un nuevo examen</a> primero, ¡antes de añadir un Juego Exabis!!';
$string['pluginadministration'] = 'Administración de Juegos Exabis';
$string['pluginname'] = 'Juegos Exabis';
$string['question'] = 'Pregunta:';
$string['question_configured'] = 'Pregunta configurada';
$string['question_not_configured'] = 'Pregunta no configurada';
$string['quizid'] = 'examen';
$string['quizid_help'] = 'Seleccione una prueba para usar para esta instancia de juego de exagames.';
$string['savingdata'] = 'Guardando datos...';
$string['url'] = 'URL';
$string['url_help'] = 'pegue su juego de aventuras de gamelabs.at-aquí para incrustarlo.<br /><br />esta opción únicamente trabajará con una liga-a-juego-gamelabs y no requiere de preguntas de Moodle.';
$string['version_5.2.0_needed'] = 'Exajuegos requiere al menos PHP-Versión 5.2.0';
