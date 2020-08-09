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
 * Strings for component 'enrol_imsenterprise', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Una vez que haya guardado sus ajustes, quizás quiera';
$string['allowunenrol'] = 'Permitir a los datos IMS <strong>des-inscribir (dar de baja)</strong> a estudiantes/profesores';
$string['allowunenrol_desc'] = 'Si se habilita, las inscripciones al curso serán removidas cuando así se especifique en los datos empresariales (Enterprise)';
$string['basicsettings'] = 'Ajustes básicos';
$string['categoryidnumber'] = 'Permitir idnumber de categoría';
$string['categoryidnumber_desc'] = 'Si se habilita, IMS Enterprise creará categoría con idnumber';
$string['categoryseparator'] = 'Caracter Separador de Categoría';
$string['categoryseparator_desc'] = 'Requerido cuando se habilita "idnumber de categoría". Caracter usado para separar el idnumber del nombre de la categoría.';
$string['coursesettings'] = 'Opciones de datos del curso';
$string['createnewcategories'] = 'Crear categorías nuevas (ocultas) de curso si no se encuentran en Moodle';
$string['createnewcategories_desc'] = 'Si el elemento  &lt;org&gt;&lt;orgunit&gt; está presente en los datos de entrada de un curso, su contenido se usará para especificar una categoría en el caso de que el curso haya sido creado desde cero. El \'plugin\' NO re-categorizará cursos ya existentes.

Si no existe ninguna categoría con el nombre deseado, se creará una categoría oculta.';
$string['createnewcourses'] = 'Crear cursos nuevos (ocultos) si no se encuentran en Moodle';
$string['createnewcourses_desc'] = 'Si se habilita, el plugin de inscripción de IMS Enterprise puede crear nuevos cursos para cualquiera que encuentre en los datos IMS, pero no en la base de datos de Moodle.
 Los cursos recién creados están ocultos inicialmente.';
$string['createnewusers'] = 'Crear cuentas de usuario para usuarios que aún no se hayan registrado en Moodle';
$string['createnewusers_desc'] = 'Los datos de inscripción de IMS Enterprise típicamente describen a un conjunto de usuarios. Si esta opción está activada, pueden crearse cuentas para cualquier usuario que no se encuentre en la base de datos de Moodle. Los usuarios se buscan en primer lugar por su "idnumber", y en segundo lugar por su nombre_de_usuario en Moodle. Las contraseñas no son importadas por el \'plugin\' de IMS Enterprise. Recomendamos utilizar un plugin de autenticación de Moodle para autenticar a los usuarios.';
$string['cronfrequency'] = 'Frecuencia de procesamiento';
$string['deleteusers'] = 'Eliminar cuentas de usuario cuando se especifique en los datos IMS';
$string['deleteusers_desc'] = '<p>Los datos de inscripción de IMS Enterprise pueden especificar la eliminación de cuentas de usuario (si el ajuste de "recstatus" es 3, lo que indica la eliminación de una cuenta), en el caso de que tal opción esté activada.</p> <p>Como sucede de modo estándar en Moodle, el registro del usuario no es realmente eliminado de la base de datos de Moodle, pero se introduce un indicador de que la cuenta está eliminada.</p>';
$string['doitnow'] = 'ejecutar ahorita una importación IMS Enterprise';
$string['emptyattribute'] = 'Dejarlo vacío';
$string['filelockedmail'] = 'El texto que usted está utilizando para las inscripciones basadas en archivo IMS ({$a}) no pueden ser eliminadas por el proceso del cron. Esto normalmente significa que los permisos son erróneos. Por favor, repare los permisos de modo que Moodle pueda eliminar el archivo (de otro modo, podría ser procesado una y otra vez).';
$string['filelockedmailsubject'] = 'Error importante. Archivo de inscripción';
$string['fixcasepersonalnames'] = 'Cambie los nombres personales a Mayúscula Inicial Cada Palabra';
$string['fixcaseusernames'] = 'Cambie los nombres_de_usuarios a minúsculas';
$string['ignore'] = 'Ignorar';
$string['importimsfile'] = 'Importar archivo IMS Enterprise';
$string['imsenterprise:config'] = 'Configurar instancias de inscripción IMS Enterprise';
$string['imsenterprisecrontask'] = 'Procesamiento de archivo para inscripción';
$string['imsrolesdescription'] = 'La especificación IMS Enterprise incluye 8 distintos tipos de rol. Por favor, seleccione cómo quiere que se le asignen en Moodle, incluyendo si alguno debe ser omitido.';
$string['location'] = 'Ubicación del archivo';
$string['logtolocation'] = 'Ubicación del archivo \'log\' de salida (déjelo en blanco si no hay registro)';
$string['mailadmins'] = 'Notificar al administrador por email';
$string['mailusers'] = 'Notificar a los usuarios por email';
$string['messageprovider:imsenterprise_enrolment'] = 'Mensajes de inscripción por IMS Enterprise';
$string['miscsettings'] = 'Misceláneo';
$string['nestedcategories'] = 'Permitir categorías anidadas';
$string['nestedcategories_desc'] = 'Si se habilita, IMS Enterprise creará categorías anidadas';
$string['pluginname'] = 'Archivo IMS Enterprise';
$string['pluginname_desc'] = 'Este método revisará repetidamente y procesará un archivo de texto formateado-especialmente en el lugar que Usted especifique. El archivo debe seguir las especificaciones de IMS Enterprise que contienen elementos XML de persona, grupo y membresía.';
$string['privacy:metadata'] = 'El plugin de Inscripción por Archivo IMS Enterprise no almacena ningún dato personal.';
$string['processphoto'] = 'Agregar foto de usuario al perfil';
$string['processphotowarning'] = 'Advertencia: El procesamiento de imágenes probablemente agregará una carga significativa al servidor. Se recomienda no activar esta opción si se espera procesar un número elevado de estudiantes.';
$string['restricttarget'] = 'Procesar los datos sólo si es especificada la meta siguiente';
$string['restricttarget_desc'] = 'Podría pensarse en un archivo de datos IMS Enterprise como dirigido a múltiples objetivos ("targets"), como por ejemplo, diferentes LMS, o diferentes sistemas dentro de una universidad u otra instirución. Es posible especificar en el archivo Enterprise que los datos se refieren a uno o más sistemas dándoles una denominación en la marca <target> contenida en la marca <properties>.

En general esto no debería preocuparle. Deje en blanco el ajuste config y Moodle procesará siempre el archivo de datos, sin que importe que un objetivo (\'target\') esté o no especificado. En caso contrario, escriba el nombre exacto que será devuelto dentro de la marca <target>.';
$string['roles'] = 'Roles';
$string['settingfullname'] = 'Marca descriptiva IMS para el nombre completo del curso';
$string['settingfullnamedescription'] = 'El nombre completo es un campo requerido del curso, por lo que Usted tiene que definir la marca seleccionada en su archivo de IMS Enterprise';
$string['settingshortname'] = 'Marca descriptiva IMS para el nombre corto del curso';
$string['settingshortnamedescription'] = 'El nombre corto es un campo requerido del curso, por lo que Usted tiene que definir la marca seleccionada en su archivo de IMS Enterprise';
$string['settingsummary'] = 'Marca descriptiva IMS para el resumen del curso';
$string['settingsummarydescription'] = 'Es un campo opcional, seleccione \'Dejarlo vacío\' si no quiere especificar un resumen del curso';
$string['sourcedidfallback'] = 'Usar el "sourcedid" para el userid de una persona si no se encuentra el campo "userid"';
$string['sourcedidfallback_desc'] = 'En los datos de IMS, el campo <sourcedid> representa el código ID persistente para una persona, que se emplea como sistema fuente. El campo  <userid> es un campo separado que debería de contener el código ID usado por el usuario cuando entra al sistema. En muchos casos ambos códigos pueden ser el mismo - pero no siempre.

Algunos sistemas de información de estudiantes fallan al proporcionar el campo de <userid>. Si este fuera el caso, Usted debería de habilitar esta configuración para usar el  <sourcedid> como el ID de usuario de Moodle. de otra forma, deje esta configuración deshabilitada.';
$string['truncatecoursecodes'] = 'Truncar los códigos del curso a esta longitud';
$string['truncatecoursecodes_desc'] = '<p>En determinadas situaciones usted tendrá códigos de curso que desee truncar a una determinada longitud antes de su procesamiento. Si este fuera el caso, escriba el número de caracteres en esta caja. En caso contrario, déjela <strong>en blanco</strong>.</p>';
$string['updatecourses'] = 'Actualizar curso';
$string['updatecourses_desc'] = 'Si se habilita, el plugin de inscripción de IMS Enterprise puede actualizar los nombres cortos y completos del curso (si la bandera señalizadora "recstatus" está configurada en 2, lo que representa una actualización).';
$string['updateusers'] = 'Actualizar cuentas de usuario cuando se especificó en datos de IMS';
$string['updateusers_desc'] = 'Si se habilita, el plugin de inscripción de IMS Enterprise puede especificar cambios a cuentas de usuarios (si la bandera señalizadora "recstatus" está configurada en 2, lo que representa una actualización).';
$string['usecapitafix'] = 'Marcar esta caja si se usa "Capita" (ya que su formato XML es ligeramente diferente)';
$string['usecapitafix_desc'] = '<p>Se ha encontrado un ligero error en la salida XML del sistema de datos de estudiantes producido por Capita. Si utiliza Capita deberá activar esta opción. En caso contrario, déjela desactivada.</p>';
$string['usersettings'] = 'Opciones de datos del usuario';
$string['zeroisnotruncation'] = '0 indica que no se truncan los códigos';
