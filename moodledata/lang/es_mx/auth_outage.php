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
 * Strings for component 'auth_outage', language 'es_mx', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_outage
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Cuando la lista de IPs permitidas está vacía, nosotros no bloquearemos a nadie. Usted puede añadir su propia dirección  IP  (<i>{$a->ip}</i>) y bloquear las demás direcciones IP.';
$string['allowedipshasmyip'] = 'Su IP (<i>{$a->ip}</i>) está en la lista y Usted no será bloqueado durante un Corte.';
$string['allowedipshasntmyip'] = 'Su IP (<i>{$a->ip}</i>) no está en la lista y Usted si será bloqueado durante un Corte.';
$string['allowedipsnoconfig'] = 'Su archivo config.php no tiene la configuración extra para permitir bloquear vía IP.<br />Por favor refiérase a nuestro archivo <a href="https://github.com/catalyst/moodle-auth_outage#installation" target="_blank">README.md</a> para más información.';
$string['auth_outagedescription'] = 'Plugin auxiliar que le advierte a los usuarios sobre un corte futuro e impide que ingresen al sitio una vez que inicia el corte.';
$string['autostart'] = 'Auto iniciar modo de mantenimiento.';
$string['autostart_help'] = 'Si se selecciona, cuando inicie el corte se activará automáticamente el modo de Mantenimiento de Moodle.';
$string['clicreatehelp'] = 'Crear un nuevo corte.';
$string['clicreateparamautostart'] = 'debe ser S o N, configura si es que el corte automáticamente dispara el modo de mantenimiento.';
$string['clicreateparamblock'] = 'bloquear hasta que inicie el corte.';
$string['clicreateparamclone'] = 'clonar otro corte a excepción de la hora de inicio.';
$string['clicreateparamdescription'] = 'la descripción del corte.';
$string['clicreateparamduration'] = 'por cuantos segundos debería durar el corte.';
$string['clicreateparamhelp'] = 'Mostrar ayuda de parámetros.';
$string['clicreateparamonlyid'] = 'solamente sacar la ID del corte, útil para scripts.';
$string['clicreateparamstart'] = 'en cuantos segunndos debería iniciar el corte. Obligatorio.';
$string['clicreateparamtitle'] = 'el título del corte.';
$string['clicreateparamwarn'] = 'cuantos segundos antes de iniciar debería de mostrar una advertencia.';
$string['clierrorinvalidvalue'] = 'Valor inválido para parámetro: {$a->param}';
$string['clierrormissingparamaters'] = 'Usted debe especificar la hora de inicio, use - help para obtener más información.';
$string['clierroroutagechanged'] = 'El corte fue cambiado mientras esperaba.';
$string['clierroroutageended'] = 'El corte ya ha terminado.';
$string['clierroroutagenotfound'] = 'Corte no encontrado.';
$string['clifinishhelp'] = 'Termina un corte en progreso.';
$string['clifinishnotongoing'] = 'El corte no está en progreso.';
$string['clifinishparamactive'] = 'termina el corte actualmente activo.';
$string['clifinishparamhelp'] = 'Mostrar ayuda de parámetros.';
$string['clifinishparamoutageid'] = 'la Id del corte a terminar.';
$string['cliinmaintenancemode'] = 'Está activado el modo de mantenimiento de Moodle. Use "php admin/cli/maintenance.php --disable" para deshabilitarlo antes de terminar el corte.';
$string['clioutagecreated'] = 'Corte creado, id: {$a->id}';
$string['cliwaitforiterroridxoractive'] = 'Usted debe usar parámetro  --outageid=#    o    --active pero no ambos.';
$string['cliwaitforithelp'] = 'Espera hasta que inicie un corte.';
$string['cliwaitforitoutagestarted'] = '¡Inició el corte!';
$string['cliwaitforitoutagestartingin'] = 'Corte comenzando en {$a->countdown}.';
$string['cliwaitforitparamactive'] = 'esperar para el corte actualmente activo.';
$string['cliwaitforitparamhelp'] = 'Mostrar ayuda de parámetros.';
$string['cliwaitforitparamoutageid'] = 'la ID del corte a esperar hasta que inicie.';
$string['cliwaitforitparamsleep'] = 'máxima cantidad de segundos antes de salida del estatus.';
$string['cliwaitforitparamverbose'] = 'habilitar modo verboso.';
$string['clone'] = 'Clonar';
$string['configurationdisabled'] = 'El plugin de autenticación \'Outage\' está deshabilitado. Por favor habilítelo en la administración del sitio e inténtelo nuevamente.';
$string['configurationinaccessiblewwwroot'] = 'No se pudo acceder a <b>{$a->wwwroot}</b> desde el servidor; podría fallar la creación de cortes.';
$string['configurationwarning'] = 'El plugin outage (corte) no está configurado apropiadamente; por favor refiérase a <a href="https://github.com/catalyst/moodle-auth_outage/blob/master/README.md#installation" target="_blank">README.md</a> para más información.';
$string['datetimeformat'] = '%a %d %h %Y at %I:%M%P %Z';
$string['defaultdescription'] = 'Descripción';
$string['defaultdescriptiondescription'] = 'Mensaje de advertencia por defecto para los cortes. Use los remplazables {{start}} y {{stop}} como se requieran.';
$string['defaultdescriptionvalue'] = 'Hay un mantenimiento agendado desde {{start}} hasta {{stop}} y nuestro sistema no estará disponible durante ese tiempo.';
$string['defaultlayoutcss'] = 'CSS del diseño';
$string['defaultlayoutcssdescription'] = 'Este código CSS no puede ser usado para anular el CSS de la Barra de Advertencia de Corte.';
$string['defaultoutageautostart'] = 'Auto inicio de Corte';
$string['defaultoutageautostartdescription'] = 'Si es que el corte debería de disparar automáticamente el modo de mantenimiento una vez que inicie, bloqueando a todo el sitio.';
$string['defaultoutageduration'] = 'Duración del corte';
$string['defaultoutagedurationdescription'] = 'Duración (en minutos) por defecto de un corte.';
$string['defaulttitle'] = 'Título';
$string['defaulttitledescription'] = 'Título por defecto para cortes. Use los remplazables  {{start}} y {{stop}} como se requieran.';
$string['defaulttitlevalue'] = 'Sistema caído a partir de {{start}} por {{duration}}.';
$string['defaultwarningduration'] = 'Duración de la advertencia';
$string['defaultwarningdurationdescription'] = 'Tiempo (en minutos) de advertencia por defecto para cortes.';
$string['description'] = 'Descripción Pública';
$string['description_help'] = 'Una descripción completa del corte, visible públicamente por todos los usuarios.';
$string['finish'] = 'Terminar';
$string['info15secondsbefore'] = '15 segundos de anticipación';
$string['infoendofoutage'] = 'fin del corte';
$string['infofrom'] = 'A partir de:';
$string['infohidewarning'] = 'sin barra de advertencia';
$string['infopagestaticgenerated'] = 'Esta advertencia fue genrada en {$a->time}.';
$string['infostart'] = 'iniciar';
$string['infostartofwarning'] = 'inicio de advertencia';
$string['infostaticpage'] = 'página estática';
$string['infountil'] = 'Hasta:';
$string['menumanage'] = 'Gestionar cortes';
$string['menusettings'] = 'Configuraciones';
$string['messageoutagebackonline'] = '¡Hemos regresado a estar en línea!';
$string['messageoutagebackonlinedescription'] = 'Usted puede reanudar su navegación con seguridad.';
$string['messageoutageongoing'] = 'Regresaremos en-línea en {$a->stop}.';
$string['messageoutagewarning'] = 'Se apagará en {{countdown}}';
$string['na'] = 'n/d';
$string['notfound'] = 'No se encontraron cortes.';
$string['outageclone'] = 'Clonar corte';
$string['outageclonecrumb'] = 'Clonar';
$string['outagecreate'] = 'Crear corte';
$string['outagecreatecrumb'] = 'Crear';
$string['outagedelete'] = 'Eliminar corte';
$string['outagedeletewarning'] = 'Usted está a punto de eliminar permanentemente el corte inferior. Esto no puee deshacerse.';
$string['outageduration'] = 'Duración del corte';
$string['outagedurationerrorinvalid'] = 'La duración del corte debe ser positiva.';
$string['outageduration_help'] = 'Cuanto tiempo dura el corte después de que inicia.';
$string['outageedit'] = 'Editar corte';
$string['outageeditcrumb'] = 'Editar';
$string['outagefinish'] = 'Terminar corte';
$string['outagefinishwarning'] = 'Usted está a punto de marcar este corte como terminado. El sistema regresará a estar en-línea inmediatamente.';
$string['outageslistfuture'] = 'Cortes planeados';
$string['outageslistpast'] = 'Historia de cortes';
$string['pluginname'] = 'Gestor de cortes';
$string['privacy:no_data_reason'] = 'El plugin de autenticación Outage (Cortes) no almacena ningún dato personal.';
$string['removeselectors'] = 'Quitar selectores';
$string['removeselectorsdescription'] = 'Selectores CSS para quitar cuando se renderice una página estática de mantenimiento del tema. Un selector por página.';
$string['settingssectiondefaults'] = 'Parámetro de Corte por defecto';
$string['settingssectiondefaultsdescription'] = 'Configurar los valores por defecto usados al crear nuevos cortes.';
$string['settingssectionplugin'] = 'Configuración del Plugin';
$string['settingssectionplugindescription'] = 'Configuraciones generales del plugin para gestión de cortes';
$string['starttime'] = 'Fecha y hora de inicio';
$string['starttime_help'] = 'En que fecha y hora inicia el corte, impidiendo el acceso general al sistema.';
$string['tableheaderduration'] = 'Duración';
$string['tableheaderdurationactual'] = 'Duración real';
$string['tableheaderdurationplanned'] = 'Duración planeada';
$string['tableheaderstartedtime'] = 'Iniciado en';
$string['tableheaderstarttime'] = 'Comienza en';
$string['tableheadertitle'] = 'Título';
$string['tableheaderwarnbefore'] = 'Advertencia antes de';
$string['tablestarttimefutureformat'] = '{$a->absolute}<br />En {$a->relative}';
$string['tablestarttimepastformat'] = '{$a->absolute}<br />{$a->relative} atrás';
$string['taskupdatestaticpage'] = 'Actualizar página de falla estática';
$string['textplaceholdershint'] = 'Usted puede usar {{start}}, {{stop}} y {{duration}} como remplazables en el título y en la descripción.';
$string['title'] = 'Título';
$string['titleerrorinvalid'] = 'El título no puede estar vacío.';
$string['titleerrortoolong'] = 'El título no puede tener más de {$a} caracteres.';
$string['title_help'] = 'Un título corto para este corte. Será mostrado en la barra de advertencia y en el calendario.';
$string['warningduration'] = 'Duración de la advertencia';
$string['warningdurationerrorinvalid'] = 'La duración de la advertencia debe ser positiva.';
$string['warningduration_help'] = '¿Cuanto tiempo antes del inicio del corte debería de mostrarse el mensaje de advertencia?';
