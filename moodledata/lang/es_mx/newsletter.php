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
 * Strings for component 'newsletter', language 'es_mx', branch 'MOODLE_35_STABLE'
 *
 * @package   newsletter
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_already_confirmed'] = 'Su cuenta ya ha sido habilitada. Para seguir al boletín, elija {$a->newsletterlink}.';
$string['account_confirmed'] = 'Bienvenido a {$a->sitename}, {$a->fullname}!
Su cuenta {$a->username} ha sido habilitada.
Para editar detalles de su cuenta elija {$a->editlink}.
Para continuar al boletín, elija {$a->newsletterlink}.';
$string['allowguestusersubscriptions'] = 'Permitir suscripción a usuario invitado';
$string['allowguestusersubscriptions_help'] = 'Habilitar el permitirle a usuarios invitados que se suscriban a boletines en este sitio. Esto necesitará que se les creen cuentas de usuarios.';
$string['allusers'] = 'Usuarios (incluyendo no-suscritos):';
$string['already_published'] = 'Este ejemplar ha sido publicado';
$string['attachments'] = 'Anexos';
$string['attachments_help'] = 'Suba archivos que quiera enviar como anexos con este ejemplar.';
$string['attachments_no'] = 'No se actualizaron Anexos.';
$string['cohortmanagement'] = 'Suscribir/Des-suscribir cohortes';
$string['cohortsavailable'] = 'Cohortes disponibles';
$string['config_activation_timeout_desc'] = 'Seleccione para cuantos días será válido el enlace de activación enviado por Email.';
$string['config_activation_timeout_label'] = 'Tiempo de caducidad de enlaces para activación';
$string['config_bounce_email'] = 'Dirección Email que deberá recibir los correos rechazados. Asegúrese de que esta dirección solamente sea usada para manejar Emails rechazados.';
$string['config_bounce_enable'] = 'Habilitar procesamiento de correos rechazados para el módulo del boletín';
$string['config_bounceinfo'] = 'Use manejo de correos rechazados para el boletín solamente si Usted no pudiera configurar las configuraciones de rechazados de Moodle VERP tal y como se describe en la página: https://docs.moodle.org/dev/Email_processing No puede emplearse el método de Moodle VERP en todos los sistemas y es bastante difícil de configurar. Ésta es una alternativa más sencilla, pero solamente funciona para el módulo del boletín. Después de guardar las configuraciones, pruébelas en {$a}';
$string['config_bounceprocessing'] = 'Configuraciones para el manejo de correos rechazados. Proporcione los datos para ingresar al buzón para la dirección de Email para rechazados';
$string['config_debug_desc'] = 'Elija esta caja para habilitar la salida de depuración para el trabajo cron del boletín.';
$string['config_debug_label'] = 'Modo depuración CRON';
$string['config_host'] = 'Host del Servidor de Correo (por ejemplo: mail.suservidor.com)';
$string['config_password'] = 'Contraseña del buzón';
$string['config_port'] = 'El puerto para acceder a su buzón de correo: por defecto es 143, otras opciones comunes son 110 (pop3), 995 (gmail)';
$string['config_sendinglimit'] = 'Limitar E-mails por ejecución';
$string['config_sendinglimit_desc'] = 'Limita cuantos Emails son mandados cada vez que el cron ejecuta para evitar SPAM.';
$string['config_send_notifications_desc'] = 'Elija esta caja para habilitar notificaciones relacionadas con la suscripción a los suscriptores.';
$string['config_send_notifications_label'] = 'Enviar notificaciones';
$string['config_service'] = 'El servicio a utilizar (imap o pop3)';
$string['config_service_option'] = 'LAs opciones de servicio (ninguno, tls, notls, ssl)';
$string['config_username'] = 'Nombre_de_usuario del buzón';
$string['create_new_issue'] = 'Crear nuevo ejemplar';
$string['default_stylesheet'] = 'Hoja de estilo por defecto';
$string['delete_all_subscriptions'] = 'Eliminar todas las suscripciones';
$string['delete_issue'] = 'Eliminar este ejemplar';
$string['delete_issue_question'] = '¿Esta Usted seguro de querer eliminar este ejemplar?';
$string['delete_subscription_question'] = '¿Esta Usted seguro de querer eliminar esta suscripción?';
$string['edit_issue'] = 'Editar este ejemplar';
$string['edit_issue_title'] = 'Editar ejemplar del boletín';
$string['edit_subscription_title'] = 'Editar suscripción';
$string['emailexists'] = 'Ya existe una cuenta de usuario con esta dirección de Email. Por favor ingrese al sitio para suscribirse al boletín. Si olvidó sus claves para ingresar, use el enlace {$a} en la página para ingresar al sitio para recuperar sus contraseña.';
$string['entries_per_page'] = 'Entradas por página';
$string['eventissuecreated'] = 'Ejemplar de boletín creado';
$string['eventissueviewed'] = 'Ejemplar de boletín visto';
$string['eventsubscriptioncreated'] = 'Nueva suscripción de boletín';
$string['eventsubscriptiondeleted'] = 'Suscripción de boletín eliminada';
$string['eventsubscriptionresubscribed'] = 'Re-suscripción a boletín';
$string['eventsubscriptionsviewed'] = 'Suscripciones de boletín vistas';
$string['eventsubscriptionunsubscribed'] = 'Suscripción de boletín  des-suscrita';
$string['filteredusers'] = 'Usuarios filtrados:';
$string['groupby'] = 'Agrupar asuntos  por:';
$string['guestsubscribe'] = '¡Suscribirse ahorita!';
$string['guestsubscriptionsuccess'] = 'Su email fue registrado exitosamente. <br /> Para activar la suscripión, por favor revise en su bozón de entrada de su cuenta de correos ({$a}) y haga click en el enlace para confirmación';
$string['header_actions'] = 'Acciones';
$string['header_bounceratio'] = 'Proporción de rebotes';
$string['header_content'] = 'Contenido del ejemplar';
$string['header_email'] = 'E-mail';
$string['header_health'] = 'Status (Entregado / Rebotado)';
$string['header_name'] = 'Nombre';
$string['header_publish'] = 'Opciones de publicación';
$string['header_publishinfo'] = 'Después de que haya comenzado la entrega del ejemplar del boletín, no será posible cambiar ya la fecha de publicación';
$string['header_subscriberid'] = 'Suscrito por';
$string['header_timestatuschanged'] = 'Último cambio de estatus';
$string['header_timesubscribed'] = 'Fecha de suscripción';
$string['header_unsubscriberid'] = 'Des-suscrito por';
$string['health_0'] = 'Activo';
$string['health_1'] = 'Problemático';
$string['health_2'] = 'Lista-negra';
$string['health_4'] = 'Sin suscripción';
$string['issue_htmlcontent'] = 'Contenido HTML';
$string['issue_stylesheet'] = 'Archivo de hoja de estilo para contenido HTML';
$string['issue_title'] = 'Título del ejemplar';
$string['issue_title_help'] = 'Escriba el título de este ejemplar. Obligatorio.';
$string['manage_subscriptions'] = 'Gestionar suscripciones';
$string['mode_group_by_month'] = 'Agrupar ejemplares por mes';
$string['mode_group_by_week'] = 'Agrupar ejemplares por semana';
$string['mode_group_by_year'] = 'Agrupar ejemplares por año';
$string['modulename'] = 'Boletín (newsletter)';
$string['modulename_help'] = 'El módulo de boletín (newsletter) permite publicar boletines en Email.';
$string['modulenameplural'] = 'Boletines';
$string['newsletter'] = 'Boletín';
$string['newsletter:addinstance'] = 'Añadir un boletín';
$string['newsletter:createissue'] = 'Crear un ejemplar del boletín';
$string['newsletter:deleteissue'] = 'Eliminar un ejemplar del boletín';
$string['newsletter:deletesubscription'] = 'Eliminar suscripciones del boletín';
$string['newsletter:editissue'] = 'Editar un ejemplar del boletín';
$string['newsletter:editsubscription'] = 'Editar suscripciones del boletín';
$string['newsletterintro'] = 'Descripción';
$string['newsletter:manageownsubscription'] = 'Gestionar mi suscripción al boletín';
$string['newsletter:managesubscriptions'] = 'Gestionar suscripciones al boletín';
$string['newslettername'] = 'Nombre';
$string['newslettername_help'] = 'Este es el contenido de la ayuda asociada con el campo del boletín. Se soporta la sintaxis Markdown.';
$string['newsletter:publishissue'] = 'Publicar un ejemplar del boletín';
$string['newsletter:readissue'] = 'Leer un ejemplar del boletín';
$string['newsletter:subscribecohort'] = 'Suscribir una cohorte al boletín';
$string['newsletter:subscribeuser'] = 'Suscribir usuarios al boletín';
$string['newsletter:unsubscribecohort'] = 'Des-suscribir una cohorte al boletín';
$string['newsletter:viewnewsletter'] = 'Ver una instancia del boletín';
$string['new_user_subscribe_message'] = 'Hola {$a->fullname},
Usted ha solicitado suscribirse al boletín
\'{$a->newslettername}\'  en \'{$a->sitename}\'
usando esta dirección de correo. Se le ha creado una cuenta nueva :

Nombre_de_usuario: {$a->username}
Contraseña: {$a->password}

Usted puede cambiar los detalles de la cuanta después de confirmarse.
Para confirmar su nueva cuenta, por favor vaya a:

{$a->link}

En la mayoría de los programas de correo, esto debería de aparecer como un enlace de color azul; simplemente haga click sobre  él . Si esto no funciona, entonces corte la dirección y péguela en su navegador de Internet.

Si requiere ayuda, por favor contacte al administrador del sitio,
{$a->admin}';
$string['no_issues'] = 'Este boletín todavía no tiene ejemplares.';
$string['page_first'] = 'Primero';
$string['page_last'] = 'Último';
$string['page_next'] = 'Siguiente';
$string['page_previous'] = 'Anterior';
$string['pluginadministration'] = 'Administración del boletín';
$string['pluginname'] = 'Boletín';
$string['privacy:metadata:newsletter_bounces'] = 'Representa boletines que recibieron un rebote del servidor.';
$string['privacy:metadata:newsletter_bounces:issueid'] = 'Cual boletín fue rebotado';
$string['privacy:metadata:newsletter_bounces:statuscode'] = 'Código_de_estado que recibimos';
$string['privacy:metadata:newsletter_bounces:timecreated'] = 'Sello_de_tiempo de cuando creamos la entrada';
$string['privacy:metadata:newsletter_bounces:timereceived'] = 'Sello_de_tiempo de cuando recibimos el rebote';
$string['privacy:metadata:newsletter_bounces:type'] = 'Tipo que recibimos';
$string['privacy:metadata:newsletter_bounces:userid'] = 'Usuario que creó el registro';
$string['privacy:metadata:newsletter_deliveries'] = 'Representa boletines que hemos enviado a usuarios.';
$string['privacy:metadata:newsletter_deliveries:delivered'] = 'Sello de tiempo de la entrega de newsletter';
$string['privacy:metadata:newsletter_deliveries:issueid'] = 'ID del asunto que enviamos';
$string['privacy:metadata:newsletter_deliveries:newsletterid'] = 'ID del boletín que enviamos';
$string['privacy:metadata:newsletter_deliveries:userid'] = 'Usuario que recibió el boletín';
$string['privacy:metadata:newsletter_subscriptions'] = 'Representa una suscripción a un boletín.';
$string['privacy:metadata:newsletter_subscriptions:health'] = 'Salud de la suscripción para almacenar si se encontraron errores';
$string['privacy:metadata:newsletter_subscriptions:newsletterid'] = 'ID del boletín suscrito';
$string['privacy:metadata:newsletter_subscriptions:sentnewsletters'] = 'Número de boletines ya enviados';
$string['privacy:metadata:newsletter_subscriptions:subscriberid'] = 'ID del usuario que se suscribió';
$string['privacy:metadata:newsletter_subscriptions:timestatuschanged'] = 'Sello_de_tiempo del último cambio';
$string['privacy:metadata:newsletter_subscriptions:timesubscribed'] = 'Sello_de_tiempo de cuando se suscribió';
$string['privacy:metadata:newsletter_subscriptions:unsubscriberid'] = 'ID del usuario que des-inscribió';
$string['privacy:metadata:newsletter_subscriptions:userid'] = 'Usuario que creó el registro';
$string['process_bounces'] = 'Procesar EWmails rebotados';
$string['publish_in'] = 'Para ser publicado en {$a->days} días, {$a->hours} hrs, {$a->minutes} min, {$a->seconds} seg.';
$string['publishon'] = 'Publicar en';
$string['readonline'] = 'Ver versión web';
$string['resubscribe'] = 'Confirmar re-suscripción';
$string['resubscribe_btn'] = 'Confirmar';
$string['resubscribe_text'] = 'Usted ha sido des-sucrito de este boletín. ¿Realmente quiere re-suscribirse?';
$string['resubscriptionsuccess'] = 'Usted ha sido re-suscrito exitosamente.';
$string['send_newsletter'] = 'Enviar boletín';
$string['stylesheets'] = 'Subir hojas de estilo del boletín';
$string['stylesheets_help'] = 'Subir archivos CSS que servirán como hojas de estilo para estos ejemplares del boletín. Usted puede subir más de una, y Usted puede seleccionarlas al crear un nuevo ejemplar. El campo es opcional, dado que el módulo ya viene con al menos un archivo de hoja de estilo pre-incluido.';
$string['sub_mode_forced'] = 'forzado';
$string['sub_mode_opt_in'] = 'Entrada opcional';
$string['sub_mode_opt_out'] = 'Salida opcional';
$string['subscribe'] = 'Suscribir';
$string['subscribedusers'] = 'Usuarios suscritos';
$string['subscribedusersmatching'] = 'Usuarios suscritos coincidentes ({$a})';
$string['subscribe_question'] = '¿Le gustaría suscribirse al boletín "{$a->name}" usando la cuenta de correo "{$a->email}"?';
$string['subscribercandidates'] = 'Suscriptores potenciales';
$string['subscribercandidatesmatching'] = 'Apareadondo usuarios para ({$a})';
$string['subscription_mode'] = 'Modo de suscripción';
$string['subscription_mode_help'] = 'Selecciona si los usuarios inscritos estarán suscritos al boletín automáticamente (salida opcional) o tendrán que suscribirse manualmente (entrada opcional). ADVERTENCIA:  ¡La salida automática suscribirá automáticamente a todos los usuarios inscritos!';
$string['toc'] = 'Seleccionar como autogenerar la tabla de contenido';
$string['toc_header'] = 'Tabla de Contenido';
$string['toc_help'] = 'Este es el número de niveles de encabezados a incluir. Por ejemplo, si tiene un ejemplar del boletín con tres diferentes niveles de encabezados (h1, h2, h3), entonces Usted podría elegir usar solamente los encabezados más importantes para la Tabla de Contenidos; Entonces Usted elige seleccionar solamente 1 nivel de encabezado. Si Usted quisisera incluir también h2 en la Tabla de Contenidos, elija 2 niveles.';
$string['toc_no'] = 'NO autogenerar una tabla de contenido';
$string['toc_yes'] = 'Usar nivel(es) de encabezado {$a}';
$string['unsubscribe'] = 'Des-suscribir';
$string['unsubscribedinfo'] = 'Usuarios marcados con (!) están des-suscritos';
$string['unsubscribe_link_text'] = 'Elija aquí para des-suscribir';
$string['unsubscribe_mail_subj'] = 'Usted ha sido des-suscrito exitosamente del boletín';
$string['unsubscribe_mail_text'] = '<p>
Estimado/a {$a->firstname} {$a->lastname},
<br>
Usted fue exitosamente des-suscrito del boletín {$a->newslettertitle}. Si Usted hizo esto a propósito, no hay nada más que hacer. Si Usted se des-suscribió accidentalmente, Usted puede re-suscribirse bajo el enlace siguiente:
<br>
{$a->newsletterurl}</p>';
$string['unsubscribe_nounsub'] = 'Distribuidor';
$string['unsubscribe_nounsub_text'] = 'No enviar un enlace para des-suscribir.';
$string['unsubscribe_question'] = '¿Quiere Usted des-suscribir su dirección Email "{$a->email}" del boletín "{$a->name}"?';
$string['unsubscription_succesful'] = 'Su Email "{$a->email}" fue eliminado exitosamente del boletín siguiente: "{$a->name}".';
$string['welcomemessage'] = 'Mensaje de BienVenida';
$string['welcomemessageguestuser'] = 'Mensaje de BienVenida usuario invitado';
$string['welcomemessageguestuser_help'] = 'Este texto será mostrado a un nuevo usuario después de que se  haya suscrito exitosamente COMO UN USUARIO INVITADO para un boletín.';
$string['welcomemessage_help'] = 'Este texto será mostrado a un usuario después de que se  haya suscrito a un boletín.';
$string['welcomeredirect'] = '¡BienVenido! Usted será redirigido a la página para ingresar en poco tiempo.';
$string['welcometonewsletter'] = 'Bienvenido al boletín';
$string['welcometonewsletter_guestsubscription'] = 'Bienvenido al boletín!<br />Usted puede des-suscribirse en cualquier momento al hacer clic en el botón para des-suscribir después de ingresar, o en el enlace para des-inscribir en cada ejemplar del boletín.';
