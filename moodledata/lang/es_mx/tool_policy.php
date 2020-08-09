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
 * Strings for component 'tool_policy', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_policy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Yo reconozco que he recibido una solicitud para otorgar consentimiento a nombre y en representación de usuario(s) de arriba.';
$string['acceptancenote'] = 'Comentarios';
$string['acceptancepolicies'] = 'Políticas';
$string['acceptancessavedsucessfully'] = 'Los acuerdos han sido guardados exitosamente.';
$string['acceptancestatusaccepted'] = 'Aceptado';
$string['acceptancestatusacceptedbehalf'] = 'Aceptado a nombre y en representación del usuario';
$string['acceptancestatusdeclined'] = 'Declinado';
$string['acceptancestatusdeclinedbehalf'] = 'Declinado a nombre y en representación del usuario';
$string['acceptancestatusoverall'] = 'Global';
$string['acceptancestatuspartial'] = 'Parcialmente aceptado';
$string['acceptancestatuspending'] = 'Pendiente';
$string['acceptanceusers'] = 'Usuarios';
$string['actions'] = 'Acciones';
$string['activate'] = 'Configurar estatus a "Activo"';
$string['activateconfirm'] = '<p>Usted está a punto de activar la política <em>\'{$a->name}\'</em> y hacer a la versión <em>\'{$a->revision}\'</em> la versión actual.</p><p>A todos los usuarios se les pedirá que estén de acuerdo con esta nueva versión de política para poder usar el sitio.</p>';
$string['activateconfirmyes'] = 'Activar';
$string['activating'] = 'Activando una política';
$string['agreepolicies'] = 'Por favor otorgue su acuerdo a las siguientes políticas';
$string['backtoprevious'] = 'Regresar a la página anterior';
$string['backtotop'] = 'Regresar a superior';
$string['cachedef_policy_optional'] = 'Caché de la señalización opcional/obligatoria para versiones de política';
$string['consentbulk'] = 'Consentimiento';
$string['consentpagetitle'] = 'Consentir';
$string['contactdpo'] = 'Para preguntas acerca de las políticas, por favor contacte al Oficial de Privacidad.';
$string['dataproc'] = 'Procesando datos personales';
$string['declineacknowledgement'] = 'Yo reconozco que he recibido una solicitud para declinar el consentimiento a nombre y en representación del usuario(s) arriba mencionado(s).';
$string['declinethepolicy'] = 'Declinar consentimiento del usuario';
$string['deleteconfirm'] = '<p>¿Esta Usted seguro de querer eliminar la política <em>\'{$a->name}\'</em>?</p><p>Esta operación no puede deshacerse.</p>';
$string['deleting'] = 'Eliminando una versión';
$string['editingpolicydocument'] = 'Editando política';
$string['errorpolicyversioncompulsory'] = '¡Las políticas obligatorias no pueden ser declinadas!';
$string['errorpolicyversionnotfound'] = 'No hay ninguna versión de política con este identificador.';
$string['errorsaveasdraft'] = 'Cambio menor no puede ser guardado como borrador';
$string['errorusercantviewpolicyversion'] = 'El usuario no tiene acceso a esta versión de política.';
$string['event_acceptance_created'] = 'Acuerdo de política creado';
$string['event_acceptance_updated'] = 'Acuerdo de política actualizado';
$string['filtercapabilityno'] = 'Permiso: No puede acordar';
$string['filtercapabilityyes'] = 'Permiso: Puede acordar';
$string['filterplaceholder'] = 'Palabra_clave a buscar o filtro';
$string['filterpolicy'] = 'Política: {$a}';
$string['filterrevision'] = 'Versión: {$a}';
$string['filterrevisionstatus'] = 'Versión: {$a->name} ({$a->status})';
$string['filterrole'] = 'Rol: {$a}';
$string['filters'] = 'Filtros';
$string['filterstatusdeclined'] = 'Estado: Declinada';
$string['filterstatuspending'] = 'Estado: Pendiente';
$string['filterstatusyes'] = 'Estatus: Acordado';
$string['guestconsent:continue'] = 'Continuar';
$string['guestconsentmessage'] = 'Si Usted continúa navegando en este sitio web, Usted está de acuerdo con nuestras políticas:';
$string['iagree'] = 'Yo estoy de acuerdo con la {$a}';
$string['iagreetothepolicy'] = 'Otorgar consentimiento';
$string['idontagree'] = 'No gracias, yo declino {$a}';
$string['inactivate'] = 'Configurar estatus a "inactivo"';
$string['inactivating'] = 'Inactivando una política';
$string['inactivatingconfirm'] = '<p>Usted está a punto de inactivar la política <em>\'{$a->name}\'</em> versión <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Inactivar';
$string['invalidversionid'] = '¡No hay política con este identificador!';
$string['irevokethepolicy'] = 'Retirar consentimiento del usuario';
$string['listactivepolicies'] = 'Lista de políticas activas';
$string['managepolicies'] = 'Gestionar políticas';
$string['minorchange'] = 'Cambio menor';
$string['minorchangeinfo'] = 'Un cambio menor no altera el significado de la política. Los usuarios no necesitan reotorgar su consentimiento a la política nuevamente si la edición está marcada como un cambio menor.';
$string['movedown'] = 'Mover abajo';
$string['moveup'] = 'Mover arriba';
$string['mustagreetocontinue'] = 'Antes de continuar, Usted debe de estar de acuerdo con todas estas políticas.';
$string['newpolicy'] = 'Nueva política';
$string['newversion'] = 'Nueva versión';
$string['noactivepolicies'] = 'No hay políticas con una versión activa.';
$string['nofiltersapplied'] = 'Sin filtros aplicados';
$string['nopermissiontoagreedocs'] = 'Sin permiso para estar de acuerdo con las políticas';
$string['nopermissiontoagreedocsbehalf'] = 'Sin permiso para estar de acuerdo con las políticas a nombre de este usuario';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Lo sentimos; Usted no tiene el permiso necesario para estar de acuerdo con las políticas siguientes a nombre de  {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Para mayor asistencia, por favor contacte a';
$string['nopermissiontoagreedocs_desc'] = 'Lo sentimos; Usted no tiene los permisos requeridos para acordar a las políticas.<br />Usted no podrá usar este sitio hasta que haya acordado a las siguientes políticas:';
$string['nopermissiontoviewpolicyversion'] = 'Usted no tiene permisos para ver esta versión de política.';
$string['nopolicies'] = 'No hay políticas para usuarios registrados con  una versión activa.';
$string['pluginname'] = 'Políticas';
$string['policiesagreements'] = 'Políticas y acuerdos';
$string['policy:accept'] = 'Acordar las políticas';
$string['policy:acceptbehalf'] = 'Otorgar consentimiento a las políticas  a nombre y en representación de alguien más';
$string['policydocaudience'] = 'Consentimiento del usuario';
$string['policydocaudience0'] = 'Todos los usuarios';
$string['policydocaudience1'] = 'Usuarios autenticados';
$string['policydocaudience2'] = 'Invitados';
$string['policydoccontent'] = 'Política completa';
$string['policydochdrpolicy'] = 'Política';
$string['policydochdrversion'] = 'Versión del documento';
$string['policydocname'] = 'Nombre';
$string['policydocoptional'] = 'Acuerdo opcional';
$string['policydocoptionalno'] = 'Obligatorio';
$string['policydocoptionalyes'] = 'Opcional';
$string['policydocrevision'] = 'Versión';
$string['policydocsummary'] = 'Resumen';
$string['policydocsummary_help'] = 'Este texto debería de proporcionar un resumen de la política, potencialmente en un formato simplificado y fácilmente accesible, usando una redacción clara y llana.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Política del sitio';
$string['policydoctype1'] = 'Política de privacidad';
$string['policydoctype2'] = 'Política para terceros';
$string['policydoctype99'] = 'Otra política';
$string['policydocuments'] = 'Documentos de política';
$string['policy:managedocs'] = 'Gestionar políticas';
$string['policynamedversion'] = 'Política {$a->name} (versión {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Mostrar política antes de mostrar otras políticas';
$string['policyversionacceptedinbehalf'] = 'El consentimiento para esta política ha sido otorgado  en representación suya.';
$string['policyversionacceptedinotherlang'] = 'El consentimiento para esta versión de política ha sido otorgado en un idioma diferente.';
$string['policy:viewacceptances'] = 'Ver reportes de acuerdo del usuario';
$string['previousversions'] = '{$a} versiones anteriores';
$string['privacy:metadata:acceptances'] = 'Información acerca de los acuerdos con políticas hechos por usuarios.';
$string['privacy:metadata:acceptances:lang'] = 'El idioma usado para mostrar la política cuando fue se otorgó el consentimiento.';
$string['privacy:metadata:acceptances:note'] = 'Cualquier comentario añadido por un usuario al otorgar consentimiento a nombre y en representación de otro usuario.';
$string['privacy:metadata:acceptances:policyversionid'] = 'La  versión de la política para la cual se otorgó consentimiento.';
$string['privacy:metadata:acceptances:status'] = 'El estado del acuerdo';
$string['privacy:metadata:acceptances:timecreated'] = 'La hora de  cuando el usuario otorgó su acuerdo a la política.';
$string['privacy:metadata:acceptances:timemodified'] = 'La hora de  cuando el usuario actualizó su acuerdo con la política.';
$string['privacy:metadata:acceptances:userid'] = 'El usuario para  conquien se relaciona esta política.';
$string['privacy:metadata:acceptances:usermodified'] = 'El usuario que otorgó consentimiento para la política, si se hizo a nombre y en representación de otro usuario.';
$string['privacy:metadata:subsystem:corefiles'] = 'La herramienta de política almacena archivos incluidos en el resumen y la política completa.';
$string['privacy:metadata:versions'] = 'Información de versión de política.';
$string['privacy:metadata:versions:archived'] = 'El estado de la política (activo o inactivo).';
$string['privacy:metadata:versions:audience'] = 'El tipo de usuarios a quienes se les pide otorgar su consentimiento.';
$string['privacy:metadata:versions:content'] = 'El contenido de esta versión de la política.';
$string['privacy:metadata:versions:contentformat'] = 'El formato del campo de contenido';
$string['privacy:metadata:versions:name'] = 'El nombre de la política.';
$string['privacy:metadata:versions:policyid'] = 'La política con la cual esta versión está asociada.';
$string['privacy:metadata:versions:revision'] = 'El nombre de revisión de esta versión de la política.';
$string['privacy:metadata:versions:summary'] = 'El resumen de esta versión de la políica.';
$string['privacy:metadata:versions:summaryformat'] = 'El formato del campo del resumen.';
$string['privacy:metadata:versions:timecreated'] = 'La hora a la cual esta versión de la política fue creada.';
$string['privacy:metadata:versions:timemodified'] = 'La hora a la cual esta versión de la política fue actualizada.';
$string['privacy:metadata:versions:type'] = 'El tipo de política.';
$string['privacy:metadata:versions:usermodified'] = 'El usuario que modificó la política';
$string['privacysettings'] = 'Configuraciones de privacidad';
$string['readpolicy'] = 'Por favor lea nuestra {$a}';
$string['refertofullpolicytext'] = 'Por favor refiérase al texto completo de {$a} si quisiera revisar el texto.';
$string['response'] = 'Respuesta';
$string['responseby'] = 'Respondente';
$string['responseon'] = 'Fecha';
$string['revokeacknowledgement'] = 'Yo reconozco que he recibido una solicitud  para retirar el consentimiento  a nombre de y en representación de usuario(s) de arriba.';
$string['save'] = 'Guardar';
$string['saveasdraft'] = 'Guardar como borrador';
$string['selectpolicyandversion'] = 'Usar el filtro de arriba para seleccionar política o versión';
$string['selectuser'] = 'Seleccionar usuario {$a}';
$string['selectusersforconsent'] = 'Seleccionar usuarios para otorgar consentimiento a su nombre y en su representación';
$string['settodraft'] = 'Crear un nuevo borrador';
$string['status'] = 'Estatus de política';
$string['status0'] = 'Borrador';
$string['status1'] = 'Activo';
$string['status2'] = 'Inactivo';
$string['statusformtitleaccept'] = 'Aceptando política';
$string['statusformtitledecline'] = 'Declinando política';
$string['statusformtitlerevoke'] = 'Retirando política';
$string['statusinfo'] = 'Una política con estado de \'Activa\'  requiere que los usuarios otorguen su  consentimiento , ya sea cuando ingresen por primera vez , o en el caso de usuarios existentes en su próximo ingreso.';
$string['steppolicies'] = 'Política {$a->numpolicy} de {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = 'Aceptar';
$string['useracceptanceactionacceptone'] = 'Aceptar {$a}';
$string['useracceptanceactionacceptpending'] = 'Aceptar políticas pendientes';
$string['useracceptanceactiondecline'] = 'Declinar';
$string['useracceptanceactiondeclineone'] = 'Declinar {$a}';
$string['useracceptanceactiondeclinepending'] = 'Declinar plíticas pendientes';
$string['useracceptanceactiondetails'] = 'Detalles';
$string['useracceptanceactionrevoke'] = 'Retirada';
$string['useracceptanceactionrevokeall'] = 'Retirar políticas aceptadas';
$string['useracceptanceactionrevokeone'] = 'Retirar aceptación de {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} de {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/D';
$string['useracceptances'] = 'Acuerdos del usuario';
$string['userpolicysettings'] = 'Políticas';
$string['usersaccepted'] = 'Acuerdos';
$string['viewarchived'] = 'Ver versiones anteriores';
$string['viewconsentpageforuser'] = 'Viendo esta página en representación de {$a}';
