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
 * Strings for component 'block_facility_to_moodle', language 'es_mx', branch 'MOODLE_25_STABLE'
 *
 * @package   block_facility_to_moodle
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Microsoft Access';
$string['ad'] = 'Dirección';
$string['add'] = 'Añadir BDN';
$string['addstu'] = 'Añadir Grupos';
$string['ag'] = 'Acuerdo de Política';
$string['back'] = 'Regresar a Configuraciones del Bloque';
$string['bdn'] = 'BDN<br /><span class="babytxt">(eg: <i>ou=2011, ou=Pupils, ou=Ossett School Users, dc=ossettschool, dc=co, dc=uk</i>)</span>';
$string['bdnname'] = 'BDN Name<br /><span class="babytxt">(reference only)</span>';
$string['blockmenutitle'] = 'Facility a Moodle';
$string['blockname'] = 'Facility a Moodle';
$string['ch'] = 'Niños';
$string['clgr'] = 'Grupo Clase';
$string['del'] = 'Eliminar';
$string['descconfig'] = '<p>Usted necesita definir todos sus BDNs para sus usuarios en el enlace inferior, después regresar aquí para escribir el resto de sus onfiguraciones.</p>';
$string['descdbpass'] = 'Se requiere contraseña por su tipo de servidor para acceder a su BasedeDatos Facility';
$string['descdbq'] = 'Sólamente es necesario/usado si el tipo de BasedeDatos se configura a Access. Ésta es la ruta hacia su archivo MS Access mdb';
$string['descdbtype'] = 'Elija su tipo de servidor Basededatos facility... Sea MS Access o MS SQL';
$string['descdbuser'] = 'Se requiere nombredeusuario por su tupo de servidor para acceder a su Basededatos facility';
$string['descdefaults'] = 'Las siguientes configuraciones definen valores por defecto para los campos restantes del perfil.';
$string['descdset'] = 'Ésta debería de ser su conjuntodedatos (dataset) actual, por ejemplo 2011/2012, y necesitará cambiarla cada verano (cuando inicia un nuevo año escolar)';
$string['descdsn'] = 'Éste es el DSN configurado dentro de /etc/odbc.ini como parte de su instalación del servidor web unixODBC';
$string['descfacdet'] = 'Las siguientes configuraciones definen su BasedeDatos Facility.';
$string['descfauth'] = 'Forza el tipo de autenticación por defecto al especificado. Nota: Este bloque esta diseñado para usarse con el plugin de LDAPCapture, por lo tanto, éste campo generalmente debería de configurarse a \'ldapcapture\'. Esta configuración se aplica para las cuentas del staff y de los estudiantes. Sin embargo, las cuentas de los padres permanecen en autenticación \'manual\'.';
$string['descfirstyr'] = 'El primer añogrupo inscrito en su escuela (usualmente 7 en Estados Unidos)';
$string['desciaml'] = 'Permite la habilidad para exportar archivos CSV apropiados para subir a <a href="https://www.iamlearning.co.uk/" target="_blank">I Am Learning</a>';
$string['desclastyr'] = 'El último añogrupo inscrito en su escuela (usualmente 13 en Estados Unidos)';
$string['descmanage'] = '<p>El bloque de Facility a Moodle necesita saber la localización de sus usuarios dentro de ActiveDirectory. Por ejemplo...</p><ul><li>BDN Nombre: Año 7</li><li>BDN: ou=2007, ou=Pupilos, ou=Usuarios de Escuela, dc=escuela, dc=co, dc=mexico</li><li>Tipo: Estudiante</li></ul>';
$string['descmisc'] = 'Las siguientes configuraciones caen en la categoría de \'Misc\'';
$string['descparaccs'] = 'Las siguientes configuraciones le permiten especificar prefijos y sufijos para los campos de nombres de los Padres dentro de Moodle. Ésto puede hacer la identificación más simple al realizar tareas de gestión de usuarios.';
$string['descparforce'] = 'Forza a los Padres a que cambien su contraseña generada por defecto en su primer ingreso [RECOMENDADO]';
$string['descparfpref'] = 'Se añade al principio del nombre del padre en sus cuentas en Moodle';
$string['descparlpref'] = 'Prefijo para el ingreso. Por defecto es "p-", por lo tanto, todos los nombresdeusuario de las cuentas de Padres comenzarán con "p-"';
$string['descparspref'] = 'Se añade al principio del apellido del padre en sus cuentas en Moodle';
$string['descscou'] = 'Éste valor se vuelve el valor por defecto para el campo de País dentro de Moodle';
$string['descsdomain'] = 'El DOMINIO en donde residen sus estudiantes (ejemplo: curriculum)';
$string['descsdomainsrv'] = 'El nombre de máquina del servidor de dominio de sus estudiantes (ejemplo: server1). Éste necesita poderse resolver en línea de comando por su servidor web, de lo contrario use Dirección IP.';
$string['descslang'] = 'Éste valor se vuelve el valor por defecto para el campo de Idioma dentro de Moodle';
$string['descstaaccs'] = 'Las siguientes configuraciones le permiten especificar prefijos y sufijos para los campos de nombres de sus miembros del Staff dentro de Moodle. Ésto puede hacer la identificación más simple al realizar tareas de gestión de usuarios.';
$string['descstafai'] = 'Remplaza el nombre del miembro del Staff con su inicial.';
$string['descstaffad'] = 'Las siguientes configuraciones definen el dominio y servidor (controlador de dominio) en donde residen las cuentas de su Staff, junto con las credenciales para leer esos detalles.';
$string['descstaffdom'] = 'El DOMINIO  en donde residen sus miembros del Staff (ejemplo: curriculum)';
$string['descstaffdserv'] = 'El nombre de máquina del servidor de dominio de su Staff (ejemplo: server1). Éste necesita poderse resolver en línea de comando por su servidor web, de lo contrario use Dirección IP.';
$string['descstaffeml'] = 'Presumiendo que las cuentas de Email de su Staff estén en el formato [ADUsername]@algun_sitio.com.mx, ésta configuración define lo que aparece DESPUÉS del  ADUsername (eg: @miescuela.com.mx)';
$string['descstaffldpass'] = 'Contraseña para el nombredeusuario superior';
$string['descstafflduser'] = 'Una cuenta basada en LDAP / AD con acceso de LECTURA a sus OUs de estudiantes';
$string['descstaffmatch'] = '<b>Cualquier campo que Usted especifique arriba, debe de contener el código de Staff (staffcode) de Facility.</b>';
$string['descstafpref'] = 'Se añade al principio del nombre del miembro del Staff en sus cuentas en Moodle';
$string['descstafsuff'] = 'Se añade al final del nombre del miembro del Staff en sus cuentas en Moodle';
$string['descstaspref'] = 'Se añade al principio del apellido del miembro del Staff en sus cuentas en Moodle';
$string['descstassuff'] = 'Se añade al final del apellido del miembro del Staff en sus cuentas en Moodle';
$string['descstown'] = 'Éste valor se convierte en el valor por defecto para el campo de Ciudad dentro de Moodle';
$string['descstuaccs'] = 'Las siguientes configuraciones le permiten especificar prefijos y sufijos en los campos de nombres de sus estudiantes dentro de Moodle. Ésto puede hacer la identificación más simple al realizar tareas de gestión de usuarios.';
$string['descstuads'] = 'Las siguientes configuraciones definen el dominio y el servidor (controlador dedominio) en donde residen sus cuentas de estudiantes, junto con las credenciales para leer esos detalles. <b> Por favor tenga en cuenta que el campo de descripción dentro de AD necesita estar pre-poblado con el número de Administración del estudiante (student\'s Admin number) de Facility';
$string['descstufpref'] = 'Se añade al principio del nombre del estudiante en sus cuentas en Moodle';
$string['descstufsuff'] = 'Se añade al final del nombre del estudiante en sus cuentas en Moodle';
$string['descstulpwd'] = 'Contraseña para el nombredeusuario superior';
$string['descstuluser'] = 'Una cuenta basada en LDAP /AD con acceso de lectura apara los OUs de sus estudiantes';
$string['descstuspref'] = 'Se añade al principio del apellido del estudiante en sus cuentas de Moodle';
$string['descstussuff'] = 'Se añade al final del apellido del estudiante en sus cuentas de Moodle';
$string['dob'] = 'Fecha de Nacimiento';
$string['edit'] = 'Editar';
$string['erroradminsonly'] = 'Usted debe ser un administrador para hacer ésto';
$string['fa'] = 'Primer Acceso';
$string['Facility'] = 'Facility a Moodle';
$string['facility_to_moodle:listparentaccounts'] = 'Mostrar Padres';
$string['facility_to_moodle:validateparentdata'] = 'Validar Padres';
$string['fn'] = 'Nombre';
$string['headerconfig'] = 'BDNs / OUs delActiveDirectory del Usuario';
$string['headermanage'] = '<h2>Facility a Moodle > Configurar BDNs</h2>';
$string['iOS'] = '<p style="text-align:center"><b>Nota: Si Usted es un usuario de iOS, Usted está viendo ésto debido a un conflicto entre jQuery Mobile y la biblioteca YUI de Moodle. ¡No se preocupe! ¡Aún así, todo debería de funcionar!</p>';
$string['la'] = 'Último Acceso';
$string['labeldbpass'] = 'Contraseña para BasedeDatos';
$string['labeldbq'] = 'Nombre de OrígendeDatos (DataSource) de MS Access';
$string['labeldbtype'] = 'Tipo/Servidor de BasedeDatos';
$string['labeldbuser'] = 'NombredeUsuario de BasedeDatos';
$string['labeldefaults'] = 'Configuraciones por defecto de la Cuenta';
$string['labeldset'] = 'OrígendeDatos (DataSource) de Facility';
$string['labeldsn'] = 'OrígendeDatos (DataSource) de MSSQL';
$string['labelfacdet'] = 'Detalles de BasedeDatos de Facility';
$string['labelfauth'] = 'Forzar Tipo de Autenticación';
$string['labelfirstyr'] = 'Primer Añogrupo';
$string['labeliaml'] = '¿ Habilitar exportaciones \'I am Learning\' (Estoy Aprendiendo) ?';
$string['labellastyr'] = 'Último Añogrupo';
$string['labelmisc'] = 'Opciones misceláneas';
$string['labelparaccs'] = 'Creación de Cuenta de Moodle Paterna';
$string['labelparforce'] = 'Forzar Cambio de Contraseña';
$string['labelparfpref'] = 'Prefijo para Nombre del Padre';
$string['labelparlpref'] = 'Prefijo para Ingreso del Padre';
$string['labelparspref'] = 'Prefijo del Apellido del Padre';
$string['labelscou'] = 'País por defecto';
$string['labelsdomain'] = 'Servidor LDAP del Estudiante';
$string['labelsdomainsrv'] = 'Servidor de DOMINIO del Estudiante';
$string['labelslang'] = 'Idioma por defecto';
$string['labelstaaccs'] = 'Creación de Cuenta de Staff Moodle';
$string['labelstafai'] = 'Remplazar Nombre del Staff por Inicial';
$string['labelstaffad'] = 'Detalles del ActiveDirectory del Staff';
$string['labelstaffdom'] = 'SOMINIO LDAP del Staff';
$string['labelstaffdserv'] = 'Servidor deDOMINIO del Staff';
$string['labelstaffeml'] = 'Dominio del Email del Staff';
$string['labelstaffldpass'] = 'LEER contraseña de AS';
$string['labelstafflduser'] = 'LEER Nombredeusuario de AS';
$string['labelstaffmatch'] = 'Campo AD para coincidir';
$string['labelstafpref'] = 'Prefijo del Nombre del Staff';
$string['labelstafsuff'] = 'Prefijo Nombre Staff';
$string['labelstaspref'] = 'Prefijo Apellido Staff';
$string['labelstassuff'] = 'Sufijo Apellido Staff';
$string['labelstown'] = 'Ciudad por defecto';
$string['labelstuaccs'] = 'Creación de Cuenta Moodle Estudiante';
$string['labelstuads'] = 'Detalles de ActiveDirectory del Estudiante';
$string['labelstufpref'] = 'Prefijo de Nombre de Estudiante';
$string['labelstufsuff'] = 'Sufijo de Nombre de Estudiante';
$string['labelstulpwd'] = 'Leer Contraseña de AD';
$string['labelstuluser'] = 'Leer Nombredeusuario de AD';
$string['labelstuspref'] = 'Prefijo de Apellido de Estudiante';
$string['labelstussuff'] = 'Sufijo de Apellido de Estudiante';
$string['listparent'] = 'Mostrar Padres';
$string['ll'] = 'Último ingreso';
$string['managebdns'] = 'Configurar BDNs';
$string['mf'] = 'Nombre en Moodle';
$string['ml'] = 'Apellidos en Moodle';
$string['mssql'] = 'Microsoft SQL Server';
$string['ngts'] = 'Sin grupos a sincronizar...';
$string['noaccess'] = 'Usted no tiene acceso a ésta área';
$string['nogtlib'] = 'Usted necesita instalar la biblioteca (library) GT';
$string['NoJavaScript'] = '<p style="text-align:center">Tristemente, ésta característica depende de JavaScript y el suyo actualmente está deshabilitado.</p>';
$string['nosession'] = 'Su clave de sesión es inválida. Por favor regrese a la página principal e inténtelo de nuevo. (Usted necesitará salir del sitio y regresar de nuevo para re-establecer su sesión).';
$string['noslc'] = 'No pudo encontrarse curso a nivel-sitio';
$string['nypc'] = 'Proceso de AñoNuevo Cancelado';
$string['nypcpw'] = '<h1 class="main">Por favor espere, ésto tomará un cierto tiempo...</h1>';
$string['nyproc'] = 'Proceso de AñoNuevo';
$string['pa'] = 'Contraseña';
$string['parent'] = 'Padre';
$string['parent_transfer'] = 'Sincronizar Padres';
$string['pc'] = 'Código Postal';
$string['pluginname'] = 'Facility a Moodle';
$string['pu'] = 'Contraseña desconocida';
$string['readdocs'] = 'Por favor, refiérase a la documentacióndel bloque';
$string['remestu'] = 'Remover Ex-Estudiantes';
$string['remstu'] = 'Remover Grupos';
$string['si'] = 'ID del estudiante';
$string['sn'] = 'Apellido(s)';
$string['sorry'] = '¡Lo sentimos!';
$string['staff'] = 'Staff';
$string['staff_transfer'] = 'Sincronizar staff';
$string['staiala'] = 'IALA del Staff';
$string['stid'] = 'ID del Staff';
$string['student'] = 'Estudiante';
$string['student_transfer'] = 'Sincronizar estudiantes';
$string['stuiala'] = 'IALA del Estudiante';
$string['sx'] = 'Género';
$string['syncgro'] = 'Sincronización de grupo';
$string['tegr'] = 'Grupo de Enseñanza';
$string['transgro'] = 'Grupo de Transferencia';
$string['tt'] = 'Título';
$string['type'] = 'Tipo de usuario';
$string['un'] = 'Nombre del Usuario';
$string['upn'] = 'UPN';
$string['validateparent'] = 'Validar Padres';
$string['yg'] = 'Grupos Años';
$string['yrgr'] = 'Grupo Año';
