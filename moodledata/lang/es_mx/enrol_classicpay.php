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
 * Strings for component 'enrol_classicpay', language 'es_mx', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_classicpay
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin:page:legal'] = '<p>Classic Pay and Classic Pay Plus have been developed by Sebsoft.</p>
<p>However, Sebsoft can <i>not</i>, in any way, be held responsible or liable for processing transactions through the use of this system.<br/>
All liability claims will get rejected a priori.</p>
<p>You as merchant (or website owner) will be bound to Pay.nl by means of a (lawful) contract for the purpose of obtaining your collected funds (i.e. the payments done).<br/>
The payout will be provided by "Stichting Derdengelden Pay.nl", the legal company that\'s responsible for managing your funds.<br/>
Sebsoft will send you an invoice for all transactions made and/or generated invoices (applicable for ClassicPay Plus).</p>';
$string['api:notconfigured'] = 'You do not have a PAYNL Merchant token configured yet.<br/>
Please configure your settings to include a PAYNL Merchant token or <a href="{$a}">apply here</a>';
$string['apply:addsignee'] = 'Add a signee';
$string['apply:addsignee_help'] = 'If you want to add a signee, complete the following fields.';
$string['apply:alreadyconfigured'] = 'You already have a PAYNL Merchant token configured.';
$string['apply:authorizedtosign'] = 'Authorized to sign';
$string['apply:authorizedtosign_help'] = 'Indicates if you are authorised to sign. If unknown, leave option to NO';
$string['apply:authorizedtosign:no'] = 'No';
$string['apply:authorizedtosign:shared'] = 'Shared authorized to sign';
$string['apply:authorizedtosign:yes'] = 'Authorized to sign independently';
$string['apply:bankaccountnumber'] = 'Bankaccount Number (IBAN)';
$string['apply:bankaccountnumber_help'] = 'Bank account number. This should be an IBAN number for Europe.';
$string['apply:bankaccountowner'] = 'Bankaccount Owner';
$string['apply:bankaccountowner_help'] = 'Owner\'s name of the bank account';
$string['apply:bankcity'] = 'Bank city';
$string['apply:bankcity_help'] = 'Name of the city your bank is located.';
$string['apply:bankdocument'] = 'Copy bankaccount balance';
$string['apply:bankdocument_help'] = 'Latest copy of your bankaccount balance. We need this for validation purposes.<br/>
Any payment details are allowed to be made unreadable, as long as the account details are visible.';
$string['apply:bankname'] = 'Nombre del banco';
$string['apply:bankname_help'] = 'Name of your bank, e.g. Rabobank, ING, ...';
$string['apply:bic'] = 'BIC / Swift';
$string['apply:bic_help'] = 'BIC or SWIFT code';
$string['apply:button:addsignee'] = 'Add {no} signee(s) to the form';
$string['apply:city'] = 'Ciudad';
$string['apply:city_help'] = 'Ciudad donde está localizada la organización';
$string['apply:cocdocument'] = 'COC Excerpt';
$string['apply:cocdocument_help'] = 'Excerpt of your Chamber of Commerce registration. We need this for validation purposes.';
$string['apply:cocnumber'] = 'COC Number';
$string['apply:cocnumber_help'] = 'Your Chamber of Commerce registration number';
$string['apply:companyname'] = 'Nombre de Organización';
$string['apply:companyname_help'] = 'El nombre de su organización';
$string['apply:countrycode'] = 'Código de País';
$string['apply:countrycode_help'] = 'País donde está localizada la organización';
$string['apply:cpp:error'] = 'Error toggling Classic Pay plus: {$a}';
$string['apply:cpp:fail'] = 'Failure toggling Classic Pay plus';
$string['apply:cpp:success'] = 'Successfully toggled Classic Pay plus';
$string['apply:email'] = 'Dirección Email';
$string['apply:email_help'] = 'Dirección Email. Esto es necesario para solicitar que PAYNL se ponga en contacto con Usted respecto a su solicitud.';
$string['apply:fail'] = '<div><p>Registration failure:</p><p>{$a->errcode}: {$a->error}</p><p>{$a->info}</p></div>';
$string['apply:firstname'] = 'Nombre(s)';
$string['apply:firstname_help'] = 'Su(s) nombre';
$string['apply:gender'] = 'Género';
$string['apply:gender:female'] = 'Femenina';
$string['apply:gender_help'] = 'Su género';
$string['apply:gender:male'] = 'Masculino';
$string['apply:header:details'] = 'Registration information';
$string['apply:header:paymentprofiles'] = 'Applicable payment methods for the application';
$string['apply:header:signees'] = 'Optional extra signees for the application';
$string['apply:housenumber'] = 'Housenumber';
$string['apply:housenumber_help'] = 'house number of the organisation';
$string['apply:iddocument'] = 'Documento de identificación';
$string['apply:iddocument_help'] = 'Copia más reciente de su ID (pasaporte o tarjeta de identidad), o una copia de su licencia de manejo.';
$string['apply:information'] = '<div class="enrol-classicpay-info"><strong>Important application information.</strong><br/>
Please be careful to read the instructions very well before proceeding to apply.<br/>
<ul>
<li>Make sure to fill out this form to your best knowledge and honesty.</li>
<li>Double check this form before submitting.</li>
<li>Take note of the fact <b>all</b> documents are in fact required for your application.</li>
<li>Uploading every required document will speed up your application.</li>
<li>Your application will not be halted when you do not upload the required documents.<br/>
You will be able to start immediately, provided your application is successful<br/>
However, we will get in contact with you regarding the required documents and you will still have to provide them.<br/>
Failing to do so, or any type of abuse will lead to suspension of your account.</li>
<li>Any abuse or misuse will be reported to the authorities and can lead to your account being discontinued or blacklisted, either by us or by the payment service provider.</li>
<li>Any indication of forgery in or falsification of required documents will lead to you being reported to the authorities, either by us or by the payment service provider.</li>
<li><b><i>Unless all documents have been approved, your funds will not be released by the payment service provider.</i></b></li>
</ul></div>';
$string['apply:invoiceinterval_help'] = '¿Qué tan frecuente desea que se procesen sus facturas para cobro?';
$string['apply:languageid'] = 'ID del idioma';
$string['apply:languageid_help'] = 'Idioma preferido para su cuenta';
$string['apply:lastname'] = 'Apellido(s)';
$string['apply:lastname_help'] = 'Su(s) apellido(s)';
$string['apply:nav'] = 'PAYNL Merchant application.';
$string['apply:page:heading'] = 'Apply for a PAYNL Merchant token.';
$string['apply:paymentprofile'] = 'Método(s) de pago';
$string['apply:phone'] = 'Número de teléfono';
$string['apply:phone2'] = 'Número de teléfono alterno';
$string['apply:phone2_help'] = 'Número de teléfono secundario. Si no se necesita, puede dejarlo vacío.';
$string['apply:phone_help'] = 'Phone number where you can be reached. We will try and contact you if there are any problems regarding the application';
$string['apply:sendemail_help'] = 'Indicates if you want to receive a registration email and what type.';
$string['apply:settlebalance_help'] = '??';
$string['apply:sitename'] = 'Nombre del sitio';
$string['apply:sitename_help'] = 'Nombre del sitio. Necesitamos esto para fines del registro del programa.';
$string['apply:siteurl'] = 'URL del sitio';
$string['apply:siteurl_help'] = 'URL del sitio. Necesitamos esto para fines del registro del programa.';
$string['apply:street'] = 'Calle';
$string['apply:street_help'] = 'Street address of the organisation';
$string['apply:submit'] = 'Apply';
$string['apply:success'] = '<div><p>Registration successfully received and processed</p><p>{$a->info}</p>';
$string['apply:ubo'] = 'UBO';
$string['apply:ubo_help'] = 'UBO';
$string['apply:usecompanyauth_help'] = 'Use organisation authentication?';
$string['apply:vatnumber'] = 'Número de IVA';
$string['apply:vatnumber_help'] = 'Posible número de registro de IVA para la organización';
$string['apply:zipcode'] = 'Código Postal';
$string['apply:zipcode_help'] = 'Código Postal de la organización';
$string['assignrole'] = 'Assign role';
$string['button:cppo:update'] = 'Update payment methods';
$string['button:pay'] = 'Pagar';
$string['checkcode'] = 'Check coupon code';
$string['classicpay:config'] = 'Configurar classicpay';
$string['classicpay:createcoupon'] = 'Crear cupones';
$string['classicpay:deletecoupon'] = 'Eliminar cupones';
$string['classicpay:editcoupon'] = 'Editar cupones';
$string['classicpay:manage'] = 'Gestionar classicpay';
$string['classicpay:plus:description'] = '<div class="enrol-classicpay-info">When requesting a Classicpay Plus account, it effectively means you\'re applying to create / request invoices.<br/>
This does bring a few extra costs, but it has the advantage both you and the enduser will automatically receive an invoice from our service when a course has been purchased.<br/>
By enabling Classicpay Plus you automatically agree with us billing you 10 cent, on top of the transactions costs, per transaction.<br/>
These will periodically be billed to you by us. You will receive an invoice for the number of generated invoices.<br/>
The first date of generating an invoice is leading. It isn\'t necessarily the case the number of transactions within a certain period is the same as the number of billed generated invoices.</div>';
$string['classicpay:plus:status:error'] = 'Error while checking classicpay plus account: {$a}';
$string['classicpay:plus:status:invalid'] = 'You do not have a classicpay plus account';
$string['classicpay:plus:status:valid'] = 'You have a classicpay plus account';
$string['classicpay:unenrol'] = 'Des-inscribir usuarios';
$string['classicpay:unenrolself'] = 'Des-inscribirse Usted mismo';
$string['cost'] = 'Costo de inscripción';
$string['couponcode'] = 'Couponcode';
$string['couponcodeexists'] = 'El código del cupón ya existe';
$string['couponcodemissing'] = 'Couponcode must be set';
$string['coupon:delete'] = 'Eliminar Cupón';
$string['coupon:deleted'] = 'Cupón eliminado exitosamente';
$string['coupon:delete:warn'] = '<p>You are about to remove a coupon with the following details.</p>
<p>Course: <i>{$a->course}</i><br/>Couponcode: <i>{$a->code}</i><br/>Validity: <i>{$a->validfrom} - {$a->validto}</i></p>
<p>Are you sure you want to do this?</p>';
$string['coupon:details'] = 'Detalles del cupón';
$string['coupon:edit'] = 'Editar cupón existente';
$string['coupon:expired'] = 'El código del cupón ha expirado';
$string['coupon:invalid'] = 'Código de cupón inválido';
$string['coupon:invoice'] = 'Re-request invoice';
$string['coupon:new'] = 'Añadir un nuevo cupón';
$string['coupon:newprice'] = 'Descuento: {$a->percentage}<br/>Descuento: {$a->currency} {$a->discount}<br/>Nuevo precio: <b>{$a->currency} {$a->newprice}</b>';
$string['coupon:saved'] = 'Cupón insertado exitosamente';
$string['coupons:backtooverview'] = 'Regresar a lista de cupones';
$string['coupon:status:active'] = 'ACTIVO';
$string['coupon:status:expired'] = 'EXPIRADO';
$string['coupon:status:impending'] = 'IMPENDING';
$string['coupon:status:maxused'] = 'MAXUSED';
$string['coupontype'] = 'Tipo';
$string['coupontype:percentage'] = 'Porcentaje';
$string['coupontype:value'] = 'Valor';
$string['coupon:updated'] = 'Coupon data successfully updated';
$string['cp:apply'] = 'Merchant Application';
$string['cp:coupons'] = 'Gestionar cupones';
$string['cp:legal'] = 'Liability information';
$string['cppapply:disable'] = 'Deshabilitar Classicpay Plus';
$string['cppapply:enable'] = 'HabilitarClassicpay Plus';
$string['cppapply:header'] = 'Estado de cuenta Classicpay Plus';
$string['cp:paynlconnection'] = 'Classicpay Service Info';
$string['cppoapply:header:paymentprofiles'] = 'Sus métodos de pago configurados';
$string['cppoapply:paymentprofiles:setting'] = '<div class="enrol-classicpay-info"><span style="color:red">*&nbsp;</span>The following methods require you to supply extra account information.<br/>
Upon selecting these you will receive a confirmation email that should tell you we\'ll get in touch with you regarding the details.<br/></div>';
$string['cppoapply:paymentprofiles:simple'] = '<div class="enrol-classicpay-info">Freely available methods.<br/>
These methods can be switched on or off without need for extra details.</div>';
$string['cp:subscriptions'] = 'Inscripciones';
$string['cp:transactions'] = 'Transacciones';
$string['currency'] = 'Divisa';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccionar rol por defecto que debería ser asignado a usuarios durante inscripciones ClassicPay';
$string['enablecoupon'] = '¿Habilitar cupones?';
$string['enablecoupon_help'] = 'Seleccione esta opción para permitir el ingreso de cupones por defecto en la pantalla de pago.
Usted puede habilitar o deshabilitar esto a nivel de cada instancia de inscripción.';
$string['enabled'] = 'Habilitado';
$string['enabled_desc'] = 'Status of the gateway if this can be used to create a transaction';
$string['enrol:already'] = 'You have already been enrolled for course: {$a->fullname}';
$string['enrolenddate'] = 'Fecha de terminación';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrol:fail'] = 'Usted no ha sido inscrito en este curso.';
$string['enrol:fail:tx'] = 'El estado de su transacción es: {$a->statusname}.';
$string['enrol:ok'] = 'Gracias por su compra.<br> Usted ha sido inscrito para el curso: {$a->fullname}';
$string['enrolperiod'] = 'Duración de inscripción';
$string['enrolperiod_desc'] = 'Lapso de tiempo por defecto por el cual es válida la inscripción. Si se ajusta a cero, la duración de la inscripción será ilimitada por defecto.';
$string['enrolperiod_help'] = 'Lapso de tiempo por defecto por el cual es válida la inscripción, empezando con el momento en que el usuario es inscrito. Si se deshabilita, la duración de la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha deinicio';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['entiresite'] = 'Todo el sitio / cualquier curso';
$string['err:getserviceprofiles'] = 'Error loading Payment options: {$a->error}';
$string['err:percentage-exceed'] = 'El porcentaje de descuento no puede exceder del100%';
$string['err:percentage-negative'] = 'Discount percentage can\'t be negative';
$string['err:setserviceprofiles'] = 'Error updating Payment options: {$a->error}';
$string['err:value-negative'] = 'Discount can\'t be negative';
$string['event:payment:complete'] = 'Classicpay payment completed';
$string['event:payment:started'] = 'Classicpay payment started';
$string['expiredaction'] = 'Acción cuando expire la inscripción';
$string['expiredaction_help'] = 'Seleccionar acción a realizar cuando expire la inscripción. Por favor tenga en cuenta que algunas configuraciones y datos del usuario son purgadas del curso durante la des-inscripción del curso.';
$string['expirymessageenrolledbody'] = 'Dear {$a->user},

This is a notification that your enrolment in the course \'{$a->course}\' is due to expire on {$a->timeend}.

If you need help, please contact {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Enrolment expiry notification';
$string['expirymessageenrollerbody'] = 'Enrolment in the course \'{$a->course}\' will expire within the next {$a->threshold} for the following users:

{$a->users}

To extend their enrolment, go to {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Enrolment expiry notification';
$string['gettokentime'] = 'Time on remote API: {$a}';
$string['invoice:requested'] = 'Your request to process the invoice has succesfully been processed';
$string['mailadmins'] = 'Notificar a administradores';
$string['mailstudents'] = 'Notificar a estudiantes';
$string['mailteachers'] = 'Notificar a profesores';
$string['maximum'] = 'Máximo';
$string['maxusage'] = 'Maximum usage';
$string['maxusage_help'] = 'Maximum number of times this coupon code can be used.<br/>
If 0 is entered, it means unlimited usage.';
$string['minimum'] = 'Mínimo';
$string['name'] = 'ombreName';
$string['nocost'] = '¡No hay costo asociado con inscribirse a este curso!';
$string['page:title:spapply'] = 'Apply for a PAYNL Merchant';
$string['paylogin'] = 'Ingresar a PAYNL';
$string['payment:cancelled'] = 'Usted ha cancelado su pago para el curso: {$a->fullname}';
$string['paynlapitoken'] = 'Token PAYNL API';
$string['paynlapitoken_desc'] = 'El token es necesario para comunicarse con el PAYNL API';
$string['paynlconn:remote:error'] = 'Error while calling remote PAY API: {$a}';
$string['paynlmerchantid'] = 'PAYNL Merchant ID';
$string['paynlmerchantid_desc'] = 'La ID del Comerciante (Merchant ID) es necesaria  para identificar al comerciante en la  PAYNL API';
$string['paynlserviceid'] = 'PAYNL Service ID';
$string['paynlserviceid_desc'] = 'La ID del servicio ( Service ID) es necesaria para identificar el servicio en la PAYNL API';
$string['paynlsettings'] = 'PAYNL Account merchant settings';
$string['paynlsettings_apply'] = '<a href="">Apply for PAYNL</a>';
$string['paynlsettings_desc'] = 'Below you will need to set the PAYNL merchant settings that wil enable you to initialize and utilize payments.';
$string['percentage'] = 'Porcentaje';
$string['percentagemissing'] = 'Percentage must be given';
$string['pluginname'] = 'ClassicPay';
$string['pluginname_desc'] = 'Este plugin le permite comprar un curso con el PAYNL gateway';
$string['promo'] = 'Plugin de inscripción ClassicPay parar Moodle';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['purchase'] = 'Comprar curso';
$string['registrationcancelled'] = 'Registration cancelled. You are now being redirected to the homepage.';
$string['setserviceprofiles:success'] = 'Successfully updated Payment options:<br/>{$a}';
$string['settings'] = 'Configuraciones';
$string['status'] = 'Permitir inscripciones ClassicPay';
$string['status_desc'] = 'Permitirles a usuarios el usar ClassicPay para inscribirse a un curso por defecto.';
$string['task:process_pending_orders'] = 'Synchronises pending payment order status in case we missed exchange requests';
$string['task:request_invoices'] = 'Synchronise invoice request queue';
$string['task:sync_cpplus'] = 'Synchronise whether or not we have a classicpay PLUS account';
$string['th:action'] = 'Acción/(es)';
$string['th:code'] = 'Código';
$string['th:cost'] = 'Costo';
$string['th:courseid'] = 'Curso';
$string['th:discount'] = 'Descuento';
$string['th:maxusage'] = 'Uso máximo';
$string['th:numused'] = '#Used';
$string['th:paymentcreated'] = 'Transacción iniciada';
$string['th:paymentmodified'] = 'Última actualización';
$string['th:percentage'] = 'Porcentaje';
$string['th:rawcost'] = 'Precio del curso';
$string['th:status'] = 'Estado';
$string['th:txid'] = 'Transaction ID';
$string['th:type'] = 'Tipo';
$string['th:user'] = 'Usuario';
$string['th:validfrom'] = 'Válido desde';
$string['th:validto'] = 'Válido hasta';
$string['th:value'] = 'Valor';
$string['title:cancelpage'] = 'Pago cancelado';
$string['title:couponedit'] = 'ClassicPay - Edit coupon';
$string['title:couponmanager'] = 'Coupon management';
$string['title:couponmanager:delete'] = 'Coupon manager - removal';
$string['title:couponmanager:details'] = 'Coupon manager details';
$string['title:couponmanager:edit'] = 'Coupon manager - edit';
$string['title:enrolments'] = 'Classicpay - enrolments';
$string['title:legal'] = 'Classicpay - liability information';
$string['title:returnpage'] = 'Estado del Pago';
$string['title:service'] = 'Classicpay - account information';
$string['title:transactions'] = 'ClassicPay - Transactions';
$string['validfrom'] = 'Válido desde';
$string['validfromhigherthanvalidto'] = 'Validity from data is past validity to date';
$string['validfrommissing'] = 'Start date of validity must be set';
$string['validto'] = 'Válido hasta';
$string['validtomissing'] = 'End date for validity must be set';
$string['value'] = 'Valor';
$string['valuemissing'] = 'Debe darse un valor';
$string['vat'] = 'IVA';
$string['vat_help'] = 'Porcentaje de IVA del costo del curso (tenga en cuenta que el costo del curso está incluyendo el IVA).';
$string['warn:servicepage'] = '<div class="enrol-classicpay-warn">Every action you perform on this page will be performed on our classicpay service.<br/>
Be careful to read and fully understand the comments before proceeding.</div>';
