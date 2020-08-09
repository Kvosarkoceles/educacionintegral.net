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
 * Strings for component 'theme_zebra', language 'es_mx', branch 'MOODLE_27_STABLE'
 *
 * @package   theme_zebra
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundurl'] = 'URL del fondo';
$string['backgroundurldesc'] = '<p>Escriba la URL para la imágen del fondo del cuerpo.</p><p>Esta dirección puede ser en el formato de salida de Moodle (Moodle Output format) (relativa al tema), ruta completa, o ruta relativa.</p>';
$string['bodybgcolor'] = 'Color del fondo del cuerpo';
$string['bodybgcolordesc'] = '<p>Color de fondo principal de la página.</p><p>Este se aplica a la marca <code><body></code> .</p>';
$string['branding'] = 'Ocultar logos del pie de página';
$string['brandingdesc'] = '<p>Ocultar los logos de marca/patrocinio en el pie de página.</p><p>Estos son enlaces a sitios que patrocinaron o contribuyeron directamente al desarrollo de este tema. Se pueden encontrar los créditos completos en el apartado LEAME al seleccionar el tema.</p>';
$string['calcourse'] = 'Eventos del curso en el calendario';
$string['calcoursedesc'] = '<p>Configura el color usado para representar los eventos del curso en el calendario.</p>';
$string['calglobal'] = 'Eventos globales en el calendario';
$string['calglobaldesc'] = '<p>Configura el color usado para representar los eventos globales en el calendario.</p>';
$string['calgroup'] = 'Eventos del grupo en el calendario';
$string['calgroupdesc'] = '<p>Configura el color usado para representar los eventos del grupo en el calendario.</p>';
$string['callink'] = 'Enlace a calendario';
$string['callinkdesc'] = '<p>Muestra la fecha con un enlace al calendario al final del menú personalizado.</p>';
$string['caluser'] = 'Eventos del usuario en el calendario';
$string['caluserdesc'] = '<p>Configura el color usado para representar los eventos del usuario en el calendario.</p>';
$string['calweekend'] = 'Color del fin de semana en el calendario';
$string['calweekenddesc'] = '<p>Configura el color usado para los fines de semana en el calendario.</p>';
$string['cfmaxversion'] = 'Versión IE máxima';
$string['cfmaxversiondesc'] = '<p>Nota: <a href="#admin-usecf"><code>usecf</code></a> debe habilitarse para que esto funcione.</p><p>Esta es la versión máxima del Internet Explorer que les pide a los usuarios que instalen Chrome Frame. Con versiones mayores a esta no se les pedirá.</p>';
$string['choosereadme'] = '<div class="clearfix"> <h1>Zebra</h1> <hr> <div style="float:right;margin-left:4px;"> <img src="zebra/pix/screenshot.jpg" /> </div> <div> <p><span class="warning">Advertencia:</span> Cebra (Zebra) 2.0+ depende fuertemente de CSS3 y <u>NO SE RECOMIENDA</u> PARA IE6 o inferiores; aunque tampoco Moodle 2.0+.</p> <br /> <h2>Acerca de</h2> <p>Zebra usa solicitudes de CSS3 <code>@media</code> para reformular dinámicamente el diseño de la página basado en el ancho de la pantalla. Este diseño personalizado 2-1-3 (enmedio, izq, derecho) puede mostrar 1, 2, o 3 columnas dependiendo del ancho de la pantalla. También es compatible con las clases de cuerpo <code>.side-pre-only</code>, <code>.side-post-only</code>, y <code>.content-only</code> en los tres diseños.</p> <br /> <p>Cebra también proporciona personalizaciones extensivas mediante su página de configuraciones, incluyendo colores, logos, configuraciones de reacomodo, configuraciones para móviles, y un campo para CSS personalizado.</p> <h2>Padres</h2> <p>Este tema está construído sobre Base y además integra las características de pagelayout y dock del tema Rebase.</p> <h2>Creditos</h2> <p>Cebra 2.0 está basado en el tema Aardvark 1.2 (1.9) por Shaun Daubney @ Newbury-College, Cebra 1.4 (1.9) por mí (Danny Wahl) @ iyWare, Aardvark_makeover (2.0) por Mary Evans @ Visible-Expressions, y los demás temas en que están basados estos temas.</p> <h2>Licencia</h2> <p>Este, y todos los temas incluidos en el núcleo de Moodle están licenciados bajo <a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>.</p> <br /> <p>El diseño subyacente de la página, diseñado en forma independiente de Moodle 2.0 por mí (Danny Wahl) @ iyWare, y capaz de ser empleado independientemente, tiene licencia de GNU General Public License.</p> <h2>Foro de Discusión del Tema:</h2> <p><a href="http://moodle.org/mod/forum/discuss.php?d=211918">http://moodle.org/mod/forum/discuss.php?d=211918</a></p> <h2>URL del plugin del Tema:</h2> <p><a href="http://moodle.org/plugins/view.php?plugin=theme_zebra">http://moodle.org/plugins/view.php?plugin=theme_zebra</a></p> <h2>Créditos del Tema</h2> <p><a href="http://iyware.com">Danny Wahl</a></p> <h2>¡No se olvide de personalizar sus configuraciones!</h2> <a href="../admin/settings.php?section=themesettingzebra">Configuraciones del Tema Cebra</a> </div> </div>';
$string['colorscheme'] = 'Esquema de colores';
$string['colorschemedesc'] = '<p>Gradientes y resaltados.</p><p>Nota: Safari 4 no acepta un gradiente de altura fija, por lo que siempre se mostrará como "Ninguno" o "Nada".</p>';
$string['colorsinfo'] = 'Configuraciones generales de colores';
$string['colorsinfodesc'] = '<p>Cambie las configuraciones para los colores de la página.</p><p>Usted puede usar cualquier tipo de color (en inglés)  válido como <code>red</code>, <code>#FF0000</code>, <code>rgb(0, 255, 255)</code>, o <code>rgba(0, 255, 255, 1.0)</code>.</p>';
$string['columnbgcolor'] = 'Color de fondo de columnas';
$string['columnbgcolordesc'] = '<p>Color de fondo de columna(s).</p><p>Este se aplica para diferentes elementos dependiendo de la vista actual (por favor vea la página pagelayout.css para mayores detalles) pero generalmente esta es la region-pre (región-pre) y region-post (región-post)  (también conocidas como áreas de bloque).</p>';
$string['columninfo'] = 'Configuraciones del diseño';
$string['columninfodesc'] = '<p>Cambiar las configuraciones para el diseño de la página. Para probar sus configuraciones, simplemente cambie el tamaño de su ventana del navegador o rote la orientación de su teléfono o tableta.</p><figure style="float: left;"><img src="../theme/image.php?theme=zebra&image=core/one_column&component=theme"/><figcaption><ul><li>arriba: <code>region-main</code></li><li>enmedio: <code>region-pre</code></li><li>fondo: <code>region-post</code></li></ul></figcaption></figure><figure style="float: left;"><img src="../theme/image.php?theme=zebra&image=core/two_columns&component=theme"/><figcaption><ul><li>ariba izq: <code>region-pre</code></li><li>fondo izq: <code>region-post</code></li><li>derecha: <code>region-main</code></li></ul></figcaption></figure><figure style="float: left;"><img src="../theme/image.php?theme=zebra&image=core/three_columns&component=theme"/><figcaption><ul><li>izquierda: <code>region-pre</code></li><li>centro: <code>region-main</code></li><li>derecha: <code>region-post</code></li></ul></figcaption></figure><br style="clear: left;" />';
$string['colwidth'] = 'Ancho de columna';
$string['colwidthdesc'] = '<p>Ancho de columnas. Esta es <code>region-pre</code> y <code>region-post</code>.</p>';
$string['compatinfo'] = 'Configuraciones de compatibilidad con navegadores';
$string['compatinfodesc'] = '<p>Configuraciones varias para intentar mejorar la compatibilidad del navegador con este tema gráfico, para una experiencia del usuario más consistente</p>';
$string['contentbgcolor'] = 'Color de fondo de página';
$string['contentbgcolordesc'] = '<p>Color de fondo del contenido.</p><p>Este se aplica para diferentes elementos dependiendo de la vista actual (por favor vea pagelayout.css para mayores detalles) pero generalmente este es el contenido de la página. Esto también aplica para el color de los enlaces de custommenu (menú personalizado).</p>';
$string['criticalfontcolor'] = 'Color de letra crítica';
$string['criticalfontcolordesc'] = '<p>Configura el color para cosas que generan un anuncio crítico. Generalmente este es <code>.statuscritical</code>, <code>.red</code>, y <code>.notifyproblem</code>.</p>';
$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = '<p>Escriba su CSS personalizado aquí.</p><p>El CSS que escriba aquí es la última cosa llamada en la página y no deberá ser sobre-escrito por ninguna otra regla. Si sus reglas no se están mostrando, por favor intente lo siguiente:<ol><li>revise su sintaxis</li><li>añada <code> !important</code> a su regla</li><li>añada manualmente la regla a extra.css</li></ol></p>';
$string['customjs'] = 'JavaScript Personalizado';
$string['customjsdesc'] = '<p>Escriba aquí su código JavaScript personalizado.</p><p>El JS escrito aquí se llamará en el pie de página . Cualquier texto escrito aquí se envolverá en marcas <code>script</code>.</p>';
$string['dateformat'] = 'Formato de fecha';
$string['dateformatdesc'] = '<p>Nota: Esto requiere que esté habilitado <a href="#admin-callink"><code>callink</code></a>.</p><p>Configurar un formato para mostrar la fecha en el menú personalizado. Para mayor información sobre la función de fecha date() por favor vea los documentos de  php.net  <a href="http://php.net/manual/en/function.date.php" title="PHP: date - Manual">aquí</a>.</p>';
$string['donate'] = 'Donar con PayPal';
$string['donatedesc'] = '<p style="text-align:center;">Si Usted piensa que este tema y sus características ameritan unos pesos, por favor haga un donativo para contribuir a su desarrollo continuado.<br/><br/><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=danny%40iywahl%2ecom&lc=US&item_name=iyWare&item_number=Zebra%202%20&currency_code=USD" style="background: url(data:image/png;base64,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) no-repeat scroll 8px 4px #234B6F; padding: 8px 22px 12px 54px; color:#fff; border-radius:4px;box-shadow:1px 1px 1px rgba(0, 0, 0, 0.2), 0 1px 0 rgba(255, 255, 255, 0.2) inset;text-align:center;text-shadow:0 1px 1px rgba(0, 0, 0, 0.3);text-decoration:none;">Donar</a></p>';
$string['fontcolor'] = 'Color del tipo de letra';
$string['fontcolordesc'] = '<p>Color primario de letra y etiqueta.</p><p>Este se aplica para todas las etiquetas y tipos de letra que no tengan una clase específica que anule el color como por ejemplo  <code>.warning</code> or <code>.notifysuccess</code>. Este también se aplica al color de fondo de la "fecha" en el custommenu.</p>';
$string['footerbgcolor'] = 'Color del fondo del pie de página';
$string['footerbgcolordesc'] = '<p>Color de fondo de pie de página.</p><p>Usar <code>transparent</code> causará que el pie de página muestre el valor de <code>contentbgcolor</code> pero no el valor de <code>bodybgcolor</code>. Este color  debe configurarse al mismo valor que <code>bodybgcolor</code> para tener un efecto de transparencia.</p>';
$string['headeralt'] = 'Texto alterno';
$string['headeraltdesc'] = '<p>Texto a usar en lugar del Nombre del Sitio .</p><p>Sugerencia: Use un espacio (<code>&amp;nbsp;</code>) para no mostrar nada.</p>';
$string['headerbgcolor'] = 'Color del fondo del encabezado';
$string['headerbgcolordesc'] = '<p>Color del fondo del encabezado.</p>';
$string['headerinfo'] = 'Configuraciones del encabezado';
$string['headerinfodesc'] = '<p>Cambiar las configuraciones para la región del encabezado.</p>';
$string['homeicon'] = 'Mostrar ícono de Home (Hogar)';
$string['homeicondesc'] = '<p>Mostrar el ícono de home (hogar) al principio del menú personalizado.</p>';
$string['hovercolor'] = 'Color al flotar';
$string['hovercolordesc'] = '<p>Color al flotar.</p><p>Este se aplica para todos los enlaces (dentro y fuera del contenido de la página) y el custommenu (menú personalizado).</p>';
$string['linkcolor'] = 'Color de enlaces';
$string['linkcolordesc'] = '<p>Color de enlacesy menú.</p><p>Este se aplica para todos los enlaces (dentro y fuera del contenido de la página) exceptuando el custommenu y el fondo del custommenu con la excepción de la "fecha".</p>';
$string['logourl'] = 'URL del logo';
$string['logourldesc'] = '<p>Escriba la URL hacia su logo. Déjela vacía para no poner imagen.</p><p>Esta URL puede ser de uno de los tres tipos de protocolo:<ul><li><p>Salida Moodle (relativa al tema):</p><p><code>logo/nuestrologo</code></p></li><li><p>Ruta completa:</p><p><code>http://dominio.com.mx/theme/image.php?theme=zebra&image=logo&rev=1&component=theme</code><br /><code>http://dominio.com.mx/ruta/ala/imagen.jpg</code></p></li><li><p>Ruta Relativa:</p><p><code>/ruta/al/archivode/logodenosotros.png</code></p></li></ul></p>';
$string['menucolorscheme'] = 'Esquema de colores del menú';
$string['menucolorschemedesc'] = '<p>Gradiente del menú.</p>';
$string['menuhome'] = 'Home (Hogar)';
$string['menumyhome'] = 'Mi hogar';
$string['menutoday'] = 'Fecha de hoy';
$string['miscinfo'] = 'Configuraciones misceláneas';
$string['miscinfodesc'] = '<p>Cambiar las configuraciones misceláneas.</p>';
$string['moodlecolorsinfo'] = 'Configuraciones de colores de Moodle';
$string['moodlecolorsinfodesc'] = '<p>Cambia colores específicos que están definidos en el núcleo de Moodle y están fuera de los colores generales definidos arriba. Estos incluyen cosas como <code>.notifysuccess</code> y colores para tipos de evento del calendario. Probablemente estos no necesitan ser ajustados a menos que Usted tuviera un conflicto específico con las configuraciones de colores generales de arriba.</p>';
$string['notes'] = 'Notas del tema';
$string['notesdesc'] = '<p>Para aplicar cualquier configuración simplemente presione "Guardar cambios" al fondo de la página.</p><p>Si no tiene habilitado el modo de Diseñador de Temas, Usted puede necesitar visitar la página de administración para <a href="purgecaches.php">Purgar todas las Cachés</a> y así forzar a que se refresque.</p>';
$string['okfontcolor'] = 'OK/Buen color de letra';
$string['okfontcolordesc'] = '<p>Configura el color de letra usado para cosas que trabajaban tales como guardar configuraciones... Ejemplos específicos son <code>.green</code> andy <code>.notifysuccess</code>.</p>';
$string['pagemaxwidth'] = 'Ancho máx de página';
$string['pagemaxwidthdesc'] = '<p>Máx ancho para contenido de página.</p>';
$string['pluginname'] = 'Cebra (zebra)';
$string['region-side-post'] = 'Derecha';
$string['region-side-pre'] = 'Izquierda';
$string['schemedark'] = 'Oscuro';
$string['schemeinfo'] = 'Configuraciones del esquema de colores';
$string['schemeinfodesc'] = '<p>Cambia las configuraciones para el esquema de colores de la página.</p>';
$string['schemelight'] = 'Claro';
$string['schemenone'] = 'Ninguno';
$string['seriousfontcolor'] = 'Color de letra seria';
$string['seriousfontcolordesc'] = '<p>Configura el color de letra para cosas que generan un aviso serio. Generalmente esto es <code>.statusserious</code>.</p>';
$string['simplelogin'] = 'Usar un formato de entrada básico';
$string['simplelogindesc'] = '<p>Al habilitar esta opción, se simplificará el diseño de la página de entrada al sitio, que ya no mostrará el encabezado ni pie de página, barra de navegación, menú de idiomas ni custommenu. Esta opción puede usarse para sitios que requieren autenticación antes de permitir acceder a estos items.</p>';
$string['threecolmin'] = 'Ancho mínimo para tres columnas';
$string['threecolmindesc'] = '<p>Ancho mínimo para diseño a tres columnas. El órden de vista es:</p>';
$string['twocolmin'] = 'Ancho mínimo para dos columnas';
$string['twocolmindesc'] = '<p>Ancho mínimo para diseño a dos columnas.</p>';
$string['useautohide'] = 'Incluir Autoocultar CSS';
$string['useautohidedesc'] = '<p>Incluye las reglas de Autoocultar para usuarios en Modo de Edición.</p><p>Lea más sobre esta característica en <a href="http://moodle.org/mod/forum/discuss.php?d=197470">aquí</a> o <a href="http://www.moodlenews.com/2012/a-moodle-administrators-dream-come-true-autohide-for-moodle-2-2/">aquí</a>.</p>';
$string['usecf'] = 'Pedirle a los usuarios que instalen Google Chrome Frame';
$string['usecfdesc'] = '<p>Google <a href="http://code.google.com/chrome/chromeframe/">Chrome Frame</a> es un plugin de explorador que instala el motor de representación de Chromium para navegadores muy antiguos y les permite usar tecnologías web modernas.</p>';
$string['userespond'] = 'Incluir respond.js en pie de página';
$string['useresponddesc'] = '<p><a href="https://github.com/scottjehl/Respond#readme">Respond.js</a> intentará procesar las solicitudes de  <code>@media</code> en el CSS y servir la apropiada a navegadores que no las soportan de forma nativa (como IE8 e inferiores).</p>';
$string['userpic'] = 'Mostrar imagen de usuario';
$string['userpicdesc'] = '<p>Mostrar la imagen del perfil del usuario en el encabezado</p>';
$string['warningfontcolor'] = 'Color de letra de advertencia';
$string['warningfontcolordesc'] = '<p>Configura el color de letra para cosas que generan una advertencia. Generalmente este es <code>.statuswarning</code>.</p>';
