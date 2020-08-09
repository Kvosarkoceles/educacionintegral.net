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
 * Strings for component 'theme_boost_campus', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   theme_boost_campus
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addablockpositionsetting'] = 'Posición del widget "Añadir un bloque"';
$string['addablockwidgetheadingsetting'] = 'Posición del widget "Añadir un bloque"';
$string['additionallayoutsettings'] = 'Config Diseño Adic';
$string['additionalresourcesheadingsetting'] = 'Recursos adicionales';
$string['additionalresourcessetting'] = 'Añadir recursos adicionales';
$string['additionalresourcessetting_desc'] = 'Con esta configuración Usted puede subir recursos adicionales al tema. Usted puede referenciar estos recursos al usar un enlace. La URL se verá así: "/pluginfile.php/1/theme_boost_campus/additionalresources/0/sunombredearchivo.unaextension"<br/>
La ventaja de subir archivos a esta área de archivos es que esos archivos pueden ser proporcionados sin revisar si es que el usuario está ingresado en el sitio. Esto es también la razón por la cual Usted solamente debería añadir archivos que no sean críticos y para los cuales todos tengan permitido el acceso y que no necesiten ser protegidos con un ingreso al sitio válido. <br/>
Un ejemplo para un caso de empleo puede ser encontrado en el archivo README.md.';
$string['backgroundimage_desc_note'] = '<br/> Por favor tenga en cuenta que: Esto no anulará la configuración de "theme_boost_campus | loginbackgroundimage" , lo que significa que las imágenes subidas al fondo de la página para ingresar serán mostradas de cualquier manera.';
$string['backtotop'] = 'Regresar a Superior';
$string['blockcolumnwidthdashboardsetting'] = 'Ancho de columna de bloque en Tablero';
$string['blockcolumnwidthdashboardsetting_desc'] = 'Con esta configuración Usted puede cambiar el ancho (en pixeles) de la columna del bloque en el Tablero.';
$string['blockcolumnwidthdefault'] = 'El ancho predeterminado a partir de Moodle 3.6 es de 360 pixeles. Hasta Moodle 3.5 el ancho era  250 pixeles.';
$string['blockcolumnwidthsetting'] = 'Ancho de columna de bloque en otras páginas';
$string['blockcolumnwidthsetting_desc'] = 'Con esta configuración Usted puede cambiar el ancho (en pixeles) de la columna del bloque en todas las otras páginas exceptuando el Tablero.';
$string['blockdesignheadingsetting'] = 'Bloques';
$string['blockiconsetting'] = 'Ícono del bloque';
$string['blockiconsetting_desc'] = 'Con esta configuración Usted puede añadir un ícono del Font Awesome por defecto al frente del título del bloque. Si se activa, nosotros proporcionamos adicionalmente remplazos de íconos individuales para muchos bloques del núcleo de Moodle y también para algunos bloques ampliamente utilizados. Usted también puede cambiar los íconos fácilmente para cada bloque individualmente en su SCSS crudo vía el cambio del contenido del Font Awesome. Para ver todos los íconos disponibles, por favor visite  http://fontawesome.io/icons/ y use el valor Unicode del ícono para remplazar el ícono por defecto. <br/> El código para cambiar el ícono se parece a este ejemplo para cambiar el bloque de  "People (Gente)": <br/>';
$string['blockiconsetting_desc_code'] = '.block_people .card-block .card-title::before { content: \'\\f0c0\' ; }';
$string['brandcolorheadingsetting'] = 'Colores de la marca';
$string['branddangercolorsetting'] = 'Color de peligro de la marca';
$string['branddangercolorsetting_desc'] = 'Este color es usado por ejemplo, para validaciones de formatos.';
$string['brandinfocolorsetting'] = 'Color de información de la marca';
$string['brandinfocolorsetting_desc'] = 'Este color es usado por ejemplo, para información sobre disponibilidad de actividades o recursos del curso.';
$string['brandsuccesscolorsetting'] = 'Color de éxito de la marca';
$string['brandsuccesscolorsetting_desc'] = 'Este color es usado por ejemplo, para  validaciones de formatos.';
$string['brandwarningcolorsetting'] = 'Color de advertencia de la marca';
$string['brandwarningcolorsetting_desc'] = 'Este color es usado por ejemplo, para textos de advertencias.';
$string['breakpointheadingsetting'] = 'Punto de quiebre';
$string['breakpointsetting'] = 'Cambiar punto de quiebre';
$string['breakpointsetting_desc'] = 'En el tema Boost, la columna del bloque derecho se partirá inclusive en dispositivos con un ancho de hasta 1200 pixeles (por ejemplo, la resolución de pantalla ancha del iPad es 1024 pixeles).
Esto es porque el punto de quiebre está configurado a  <a href="https://getbootstrap.com/docs/4.0/layout/overview/#responsive-breakpoints">media-breakpoint-down(lg)</a>. <br/>
Si Usted piensa que hay espacio suficiente para mostrar el contenido además de la columna de bloques lado a lado en una pantalla con ancho de 992 pixeles y superiores, entonces habilite esta configuración. Cambiará el punto de quiebre a media-breakpoint-down(md). Esto partirá la columna de bloques en pantallas con anchos menores a 992 pixeles.';
$string['cachedef_imagearea'] = 'Caché para ítems del área_de_imágenes';
$string['catchcmdarrowdownsetting'] = 'Atajo CMD + Flecha abajo';
$string['catchcmdarrowdownsetting_desc'] = 'Esta configuración capturará el atajo "CMD + Flecha abajo" en una Mac.';
$string['catchctrlarrowdownsetting'] = 'Atajo Ctrl + Flecha abajo';
$string['catchctrlarrowdownsetting_desc'] = 'Esta configuración capturará el atajo "Ctrl + Flecha abajo" en Windows';
$string['catchendkeysetting'] = 'Tecla Fin';
$string['catchendkeysetting_desc'] = 'Esta configuración capturará la tecla "Fin" (debería de funcionar en todos los navegadores y sistemas operativos).';
$string['catchkeyboardcommandsheadingsetting'] = 'Capturar comandos del teclado';
$string['catchkeyboardcommandsheadingsetting_desc'] = 'Las configuraciones siguientes están dirigidas hacia las necesidades de los usuarios avanzados; especialmente si su instancia de Moodle tiene un pie de página muy grande. Los usuarios avanzados tienen tendencia a usar atajos del teclado para navegar en los sitios. Ellos podrían usar estos atajos para alcanzar el final de la página con la intención de llegar más rápido al tópico más reciente en el curso (para añadirle contenido o para calificar las actividades más recientes). Si el pie de página no fuera chico, tendrían entonces la necesidad de desplazarse de nuevo hacia arriba. Con estas configuraciones, Usted puede habilitar que los siguiente atajos sean capturados y que solamente se desplaze el cusor hasta el fondo del contenido principal del curso.';
$string['catchkeys_desc_addition'] = 'Impide el desplazamiento del curso al fondo de la página web y cambia el comportamiento para desplazarse solamente hacia el fondo del contenido principal del curso.';
$string['choosereadme'] = 'El Tema Boost Campus es un tema hijo para usarse en campus universitarios.';
$string['configtitle'] = 'Configuraciones de Boost Campus';
$string['courseeditbuttonsetting'] = 'Botón para editar curso';
$string['courseeditbuttonsetting_desc'] = 'Con esta configuración, Usted puede añadir un botón adicional para activar / desactivar la edición, en el encabezado del curso, para una más rápida accesibilidad de esta función tan frecuentemente usada.';
$string['coursehintsheadingsetting'] = 'Pistas relacionadas con el curso.';
$string['courselayoutsettings'] = 'Config Diseño Curso';
$string['coursesettingsheadingsetting'] = 'Configuraciones del Curso';
$string['darknavbarsetting'] = 'Barra_de_Navegación Oscura';
$string['darknavbarsetting_desc'] = 'Al activar esta configuración, Usted puede invertir la Barra_de_Navegación, que es clara por defecto, hacia una barra oscura con enlaces blancos.';
$string['dashboardontopsetting'] = 'Ítem del menú del Tablero en la parte superior';
$string['dashboardontopsetting_desc'] = 'Al activar esta configuración, el ítem del menú del Tablero siempre estará localizado en la parte superior del cajón de navegación. Por defecto, esto ya es el caso para todas las páginas de Moodle excepto para páginas de curso. Allí, el curso actual y sus contenidos están puestos en la parte superior. Esto podría romper las expectativas para la ubicación del enlace hacia la página inicial por defecto.';
$string['defaulthomepageontopsetting'] = 'Página inicial por defecto en la parte superior';
$string['defaulthomepageontopsetting_desc'] = 'Al activar esta configuración, el enlace hacia la página inicial por defecto (Teclado o Página inicial del sitio) siempre estará localizado en la parte más superior del cajón de navegación. Por defecto, esto ya es el caso en todas las páginas de Moodle escepto las páginas de curso. Allí, el curso actual y sus contenidos están localizados en la parte superior. Esto podría romper las expectativas del usuario para la ubicación del enlace hacia la página inicial por defecto.';
$string['designsettings'] = 'Config Diseño';
$string['faviconheadingsetting'] = 'Favicon';
$string['faviconsetting'] = 'Favicon';
$string['faviconsetting_desc'] = 'Usted puede subir una imagen (formato .ico o .png) que el navegador mostrará como el favicon (ícono favorito) de su sitio web Moodle.';
$string['fontdesignheadingsetting'] = 'Fonts';
$string['fontfilessetting'] = 'Archivos de fonts';
$string['fontfilessetting_desc'] = 'Con este diálogo, Usted puede subir sus propios archivos de font. La subida está restringida a los archivos de fonts de los tipos .eot, .woff, .woff2, .ttf y .svg. <br/>
Importante: Para poder usar los fonts subidos con este tema, Usted tiene que añadir código relacionado a su área de "SCSS crudo" en la pestaña de "Configuraciones avanzadas". Se puede encontrar un ejemplo completo para esto en el archivo README.md.';
$string['footerblocks0columnssetting'] = 'Sin bloques en el pie de página';
$string['footerblocks1columnssetting'] = 'Columnas de un bloque en pie de página';
$string['footerblocks2columnssetting'] = 'Columnas de dos bloques en pie de página';
$string['footerblocks3columnssetting'] = 'Columnas de tres bloques en pie de página';
$string['footerblocksheadingsetting'] = 'Bloques en pie de página';
$string['footerblockssetting'] = 'Bloques en pie de página';
$string['footerblockssetting_desc'] = 'Usted puede elegir si quiere habilitar la posibilidad de colocar bloques adentro del pie de página. Si se habilita, Usted puede elegir entre una, dos o tres columnas de bloques. Estas columnas solamente son mostradas en pantallas grandes. En pantallas pequeñas, las columnas serán reducidas automáticamente a una columna para una mejor legibilidad y diseño.';
$string['footerhidehelplinksetting'] = 'Ocultar enlace hacia Moodle Docs';
$string['footerhidehomelinksetting'] = 'Ocultar enlace hacia la página web de inicio';
$string['footerhidelogininfosetting'] = 'Ocultar información para ingresar';
$string['footerhideusertourslinksetting'] = 'Ocultar enlace para reiniciar tour para usuarios';
$string['footerlayoutsettings'] = 'Config Pie_Pág';
$string['footerlinks_desc'] = 'Si se activa, el enlace no será mostrado en el pie de página. Si no se activa (valor por defecto), sí será mostrado.';
$string['footerlinksheadingsetting'] = 'Enlaces del pie de página por defecto';
$string['footerlinksheadingsetting_desc'] = 'Moodle proporciona algunos enlaces por defecto en el pie de página: Enlace hacia \'Moodle Docs para esta página\', información para ingresar al sitio, y un enlace hacia el inicio de la página web. <br/>  Con las tres configuraciones siguientes, Usted puede decidir si Usted quiere ocultar enlaces específicos porque Usted piensa que sus usuarios no los necesitan en su instancia de Moodle.';
$string['footnoteheadingsetting'] = 'Nota al pie';
$string['footnoteheadingsetting_desc'] = 'La siguiente configuración permite añadir una región adicional para mostrar una nota al pie.';
$string['footnotesetting'] = 'Nota al pie';
$string['footnotesetting_desc'] = 'Todo lo que Usted añada a esta área_de_texto será mostrado al final del pie de página para todas las páginas que muestren el pie de página estándar del tema (para los diseños "2 columnas" e "ingreso"). El contenido de esta área podría ser, por ejemplo, el aviso de copyright, las condiciones de uso del sitio y el nombre de su organización. <br/> Si Usted quisiera quitar el pie de página después, simplemente vacíe el área_de_texto.';
$string['helptextheadingsetting'] = 'Textos de ayuda';
$string['helptextmodalsetting'] = 'Mostrar textos de ayuda en un diálogo modal';
$string['helptextmodalsetting_desc'] = 'La solución por defecto para mostrar textos de ayuda en \'popover\' causa diferentes probelmas. Por ejemplo, a los \'popovers\' no se les puede desplazar el cursor mediante barras y pueden desparramarse de la ventana gráfica.<br/>
Por esta razón, con esta configuración Usted puede decidir que los textos de ayuda deberían de ser mostrados en una caja de texto dedicada (diálogo modal), que aparece a la mitad de la página, con suficiente espacio para contener inclusive textos de ayuda largos.';
$string['hidefooterheadingsetting'] = 'Ocultando el pie de página';
$string['hidefooteronloginpagesetting'] = 'Ocultando el pie de página en la página para ingresar';
$string['hidefooteronloginpagesetting_desc'] = 'Al habilitar esta configuración, Usted puede ocultar el pie de página en la página para ingresar al sitio. Por favor tenga en cuenta que esto solamente ocultará la sección del pie de página, pero no la sección de la nota al pie (si se usara).';
$string['imageareaheadingsetting'] = 'Área de imágenes';
$string['imageareaheadingsetting_desc'] = 'Las configuraciones siguientes le permiten añadir una región adicional para mostrar imágenes, como por ejemplo, logos. Esta región será añadida debajo del pie de página estándar y arriba de la región del pie de página opcional. Si las imágenes son subidas a esta área, serán mostradas en todos los sitios que usen el diseño de dos columnas.';
$string['imageareaitemsattributessetting'] = 'Atributos adicionales de ítem de área de imagen';
$string['imageareaitemsmaxheightsetting'] = 'Altura máxima de ítems del área de imágenes';
$string['imageareaitemsmaxheightsetting_desc'] = 'Con esta configuración Usted puede cambiar la altura en pixeles para sus imágenes subidas. Todas las imágenes tendrán la misma altura máxima y sus anchos serán re-escalados proporcionalmente. El valor por defecto está configurado a 100 pixeles.';
$string['imageareaitemssetting'] = 'Ítems del área de imágenes';
$string['imageareaitemssetting_desc'] = 'Con este widget Usted puede subir sus imágenes que serán mostradas en la región del área de imágenes adicionales. Las imágenes serán ordenadas y mostradas alfabéticamente según el nombre del archivo. Para quitar esta región, simplemente elimine todas las imágenes subidas.';
$string['incoursesettingsswitchtorolepositionsetting'] = '"Cambiar rol s ..." ubicación(es)';
$string['incoursesettingsswitchtorolepositionsetting_desc'] = 'Con esta configuración, Usted puede elegir el lugar en donde es mostrada la información acerca de a cual rol ha cambiado un usuario. Si se configura a "solamente en el menú del usuario" (valor por defecto), la información del rol se mostrará justo debajo del nombre del usuario en el menú del usuario (como en el tema Boost). Si se configura a "Solamente en las configuraciones del curso", esta información, junto con un enlace para regresarlo a como estaba antes -  se mostrará debajo del curso, ya que esta funcionalidad está relacionada con el curso. Si se configura a "En ambos lados: en el menú del usuario y en las configuraciones del curso", será mostrada en ambos lados.';
$string['incoursesettingsswitchtorolesettingboth'] = 'En ambos lados: en el menú del usuario y en las configuraciones del curso';
$string['incoursesettingsswitchtorolesettingjustcourse'] = 'Solamente en las configuraciones del curso';
$string['incoursesettingsswitchtorolesettingjustmenu'] = 'Solamente en el menú del usuario';
$string['loginbackgroundimagesetting'] = 'Imágenes de fondo de página de ingreso';
$string['loginbackgroundimagesetting_desc'] = 'Las imágenes subidas en esta configuración serán mostradas aleatoriamente en la página de ingreso como imágenes de fondo.';
$string['loginbackgroundimagetextsetting'] = 'Mostrar texto para imágenes del fondo para ingresar';
$string['loginform'] = 'Formato para ingresar';
$string['loginform_desc'] = 'Con esta configuración, Usted puede optimizar el formato para ingreso, para que se ajuste a una mayor variedad de imágenes de fondo (si se activa). Esto significa que el formato para ingresar será movido hacia la izquierda de la página para ingresar, se volverá más angosto y tendrá un fondo que permita que resalte la imagen del fondo. El formato para ingreso será colocado a la izquierda, porque muchas imágenes tienen su contenido principal bastante centrado y por esto es que queremos mantener visible este contenido. Tenga en cuenta que Usted también pude desactivar esta configuración si no se han subido imágenes de fondo, por supuesto.';
$string['loginpagedesignheadingsetting'] = 'Página para ingresar';
$string['navbardesignheadingsetting'] = 'Barra de Navegación';
$string['navdrawerfullwidthsetting'] = 'Cajón de navegación de ancho completo en pantallas pequeñas';
$string['navdrawerfullwidthsettings_desc'] = 'Al activar esta configuración Usted puede aumentar el menú del cajón de navegación abierto hasta el ancho de la página completa en pantallas pequeñas. Esto podría ser deseable porque en pantallas pequeñas solamente es visible un poco del área del contenido principal en el fondo. Y un menú de ancho completo sirve a las expectativas del usuario sobre como deben mostrarse los menúes en pantallas pequeñas.';
$string['navdrawerheadingsetting'] = 'Menú del cajón de navegación';
$string['pluginname'] = 'Boost Campus';
$string['presetheadingsetting'] = 'Pre_configuraciones del tema';
$string['privacy:metadata'] = 'El tema Boost Campus no almacena ningún dato personal acerca de ningún usuario.';
$string['region-footer-left'] = 'Pie de página (izquierdo)';
$string['region-footer-middle'] = 'Pie de página (enmedio)';
$string['region-footer-right'] = 'Pie de página (derecho)';
$string['region-side-pre'] = 'Derecha';
$string['section0titlesetting'] = 'Título de Sección 0';
$string['section0titlesetting_desc'] = 'Esta configuración puede cambiar el comportamiento de como Moodle muestra el título para la primera sección del curso. Moodle no lo muestra cuando se configuró el título por defecto para esta sección. Tan pronto como un usuario cambia el título, aparecerá. Con esta configuración (la opción activada), Usted puede lograr un comportamiento consistente al siempre mostrar el título para la sección 0.';
$string['settingsaddablockpositionbottomblockregion'] = 'Al fondo de la región de bloque predeterminado';
$string['settingsaddablockpositionbottomnavdrawer'] = 'Al fondo del cajón de navegación';
$string['showhintcourseguestaccessgeneral'] = 'Actualmente Usted está viendo este curso como <strong>{$a->role}</strong>.';
$string['showhintcourseguestaccesslink'] = 'Para tener acceso completo al curso, Usted puede <a href="{$a->url}">auto-inscribirse en este curso</a>.';
$string['showhintcourseguestaccesssetting_desc'] = 'Dentro de esta configuración, aparecerá una pista en el encabezado del curso cuando un usuario esté accediéndolo con la característica de acceso de invitados. Si el curso proporciona una auto-inscripción activa, también es presentado al usuario un enlace hacia esa página.';
$string['showhintcoursehiddengeneral'] = 'Este curso actualmente está  <strong>oculto</strong>. Solamente los profesores inscritos en él pueden acceder a este curso cuando está oculto.';
$string['showhintcoursehiddensetting'] = 'Mostrar pista en cursos ocultos';
$string['showhintcoursehiddensetting_desc'] = 'Con esta configuración, aparecerá una pista en el encabezado del curso cuando  la visibilidad del curso esté oculta. Esto ayuda a identificar el estado de visibilidad de un curso de un vistazo sin la necesidad de revisar las configuraciones del curso.';
$string['showhintcoursehiddensettingslink'] = 'Usted puede cambiar la visibilidad en las <a href="{$a->url}">configuraciones del curso</a>.';
$string['showhintcoursguestaccesssetting'] = 'Mostrar pista para acceso de invitado';
$string['showsettingsincoursesetting'] = 'Menú de configuraciones en el curso';
$string['showsettingsincoursesetting_desc'] = 'Con esta configuración, Usted puede cambiar como se muestra el menú contextual del curso. En Boost, existe un menú contextual emergente juntito al ícono del engrane y el hacer clic en el ítem del menú para "Más..." conducirá al usuario hacia otra página con todas las configuraciones del curso. Al habilitar esta configuración, la configuración ocurrirá directamente debajo del encabezado del curso.<br/>
Por favor tenga en cuenta que este cambio no afecta a los usuarios que hayan desactivado el JavaScript en su navegador - ellos seguirán teniendo el comportamiento del núcleo de Moodle con un menú contextual del curso emergente.';
$string['showswitchedroleincoursesetting'] = 'Posición de información de cambiar rol';
$string['showswitchedroleincoursesetting_desc'] = 'Con esta configuración, Usted puede elegir el lugar en donde sea mostrada la información sobre a cual rol se ha cambiado un usuario. Si no se activa (valor por defecto), la información del rol será mostrada exactamente debajo del nombre del usuario en el menú del usuario (similar al tema Boost). Si se activa, esta información - junto con un enlace para cambiar de regreso  - será mostrada debajo del curso, ya que esta funcionalidad está relacionada con el curso.';
$string['sitehomeontopsetting'] = 'Ítem de menú inicial del sitio en la parte superior';
$string['sitehomeontopsetting_desc'] = 'Al activar esta configuración, el ítem del menú de la página inicial del sitio siempre estará localizado en la parte superior del cajón de navegación. Por defecto, esto ya es el caso para todas las páginas de Moodle excepto para páginas del curso. Allí, el curso actual y sus contenidos están localizados en la parte superior. Esto podría romper las expectativas del usuario para la colocación del enlace hacia la página inicial por defecto.';
$string['switchedroleto'] = 'Usted está viendo este curso actualmente con el rol de :';
$string['switchroleto'] = 'Cambiar rol hacia';
$string['userdefinedontopsetting'] = 'Página inicial definida por el usuario en parte superior';
$string['userdefinedontopsetting_desc'] = 'Al activar esta configuración, el Tablero, o el ìtem del menú de la página inicial del sitio (dependiendo de las preferencias del usuario) siempre estará localizado en la parte superior del cajón de navegación. Por defecto, este ya es el caso para todas las páginas de Moodle excepto para páginas del curso. Allí, el curso actual y sus contenidos son posicionados en la parte superior. Esto podría romper las expectativas del usuario para la colocación del enlace hacia la página inicial por defecto.';
