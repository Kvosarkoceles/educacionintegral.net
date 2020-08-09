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
 * Strings for component 'ipal', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   ipal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anonymousmess'] = 'Su respuesta es grabada anónimamente';
$string['attendancequestion'] = '¿Estás hoy aquí?';
$string['attendancequestion2'] = 'Si es así, por favor ingresa el código de asistencia anunciado en la caja de texto y envíalo, para que así te contemos como presente.';
$string['basicideasofipal'] = 'Las ideas básicas sobre seleccionar preguntas para encuestas en clase';
$string['editingipal'] = 'Añadiendo (seleccionando) preguntas ipal';
$string['editingipal_ex'] = 'Editando ipal: {$a}';
$string['editingipal_help'] = 'Al seleccionar preguntas para ipal, los conceptos principales son:

* Seleccione preguntas que Usted querría usar del Banco de Preguntas, de ComPADRE, o cree preguntas nuevas.
* El orden de las preguntas no es importante, porque Usted las puede enviar en cualquier orden.
* Al encuestar Usted puede enviar la misma pregunta más de una vez.';
$string['eventeditpageviewed'] = 'Página de edición ipal vista';
$string['introduction'] = 'Descripción';
$string['ipal'] = 'ipal';
$string['ipal:addinstance'] = 'Añadir un nuevo ipal';
$string['ipal_analytics'] = 'mejorar análisis';
$string['ipal_analytics_help'] = 'Si esto es seleccionado, los datos del encuestamiento de estudiantes, solamente identificados por la ID_del_usuario de Moodle del estudiante, se enviarán al sitio de ComPADRE, para que pueda hacerse un análisis de los datos.
Solamente las personas autorizadas de su institución pueden acceder a los datos y pueden identificar los nombres de usuario o los nombres reales de cualquier estudiante.
Y solamente estas personas autorizadas pueden ver los resultados del análisis para toda su escuela.
  <br />Si no se selecciona esto, no se enviarán datos al sitio de ComPADRE.';
$string['ipal_autocreate_generic'] = 'Auto-crear preguntas genéricas';
$string['ipal_autocreate_generic_help'] = 'Si se selecciona esto, se crearán automáticamente preguntas de opción múltiple genéricas y preguntas de ensayo cuando el profesor elija primero seleccionar preguntas para una instancia IPAL.';
$string['ipal_enable_compadre'] = 'Habilitar recuperar preguntas de ComPADRE';
$string['ipal_enable_compadre_help'] = 'Si se selecciona esto, el profesor puede elegir importar preguntas revisadas-por-pares listas-para-usarse.
El conjunto inicial de preguntas incluye cientos de preguntas (en idioma inglés) de introducción a la Física de ConcepTest, escritas por el profesor de Física Eric Mazur y su grupo de la Universidad de Harvard. Estas preguntas están alojadas en <a href="http://www.compadre.org/" target="_blank">ComPADRE</a>, una Biblioteca Nacional Digital de Física y Astronomía.';
$string['ipalfieldset'] = 'Conjunto_de_campo de ejemplo personalizado';
$string['ipal:manage'] = 'Gestionar ipals';
$string['ipalmobile'] = 'Habilitar clickers (Mobile Apps)';
$string['ipalmobile_error'] = 'Usted debe elegir entre No y Mobile App';
$string['ipalmobile_help'] = 'Elija Mobile App para permitirles a los estudiantes responder usando una Mobile App. Esto muestra el código de acceso IPAL para el profesor en la página de encuestamiento IPAL.';
$string['ipalname'] = 'Nombre IPAL';
$string['ipalname_help'] = 'Este es el contenido de la herramientita de ayuda asociada con el campo ipalname. La sintaxis Markdown está soportada.';
$string['ipal:preview'] = 'Vista previa ipal';
$string['ipalsettings'] = 'Configuraciones ipal';
$string['ipaltype'] = 'Tipo IPAL';
$string['ipaltype_error'] = 'Usted debe elegir entre anónimo y no-anónimo';
$string['ipaltype_help'] = 'Elija grabar la ID del estudiante en hoja de cálculo con respuestas (no-anónima) o no hacerlo. El tipo ipal no puede modificarse después de que se haya grabado una respuesta.';
$string['ipal:view'] = 'Ver información ipal';
$string['ipal:viewreports'] = 'Ver reportes ipal';
$string['modulename'] = 'ipal';
$string['modulename_help'] = 'El módulo de actividad ipal (\'\'In-class Polling for All Learners\'\')  le permite a un profesor diseñar y configurar sesiones de encuestamiento, que consisten en preguntas de los tipos de opción múltiple, falso-verdadero y ensayo. Las preguntas IPAL pueden usarse en un módulo de examen y viceversa. Se pueden obtener preguntas listas para usarse (en idioma inglés) de la BasedeDatos de ComPADRE.

Las gráficas dinámicas mostradas debajo de las preguntas pueden cambiarse de vista de hoja de cálculo (que incluye nombres de estudiantes) a una vista anónima de las respuestas para una pregunta activa - un histograma para preguntas de opción múltiple y vista de una-línea para preguntas de ensayo. Mientras esté desarrollándose una encuesta, una pregunta puede contestarse varias veces, hasta que se mande una segunda pregunta o se desactive la encuesta.

Una pregunta puede enviarse más de una vez. La vista de hoja de cálculo muestra la respuesta más recientemente enviada en cualquier momento.

El encuestamiento puede usarse :
* Para aumentar el involucramiento y la participación del estudiante.
*Para evaluar la comprensión del estudiante y guiar el ritmo de la clase.
* Para promover una mayor discusión verbal en la clase.

<a href="http://www.compadre.org/ipal/webdocs/Guide.cfm">más</a>';
$string['modulenameplural'] = 'ipals';
$string['nonanonymousmess'] = '** empty field **';
$string['pluginadministration'] = 'administración ipal';
$string['pluginname'] = 'ipal';
