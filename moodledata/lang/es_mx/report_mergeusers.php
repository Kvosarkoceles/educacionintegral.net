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
 * Strings for component 'report_mergeusers', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   report_mergeusers
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dbko'] = '<h1 style="color:#f00;">¡FALLÓ la combinación!</h1><p>Si su motor de base de datos soporta transacciones, toda la transacción actual completa se ha revertido y no se han hecho modificaciones a sus registros de la base de datos.</p>';
$string['dbok'] = '<h1 style="color:#0c0;">Combinación exitosa</h1>';
$string['dbqueries'] = '<h2>Aquí están las transacciones que se han enviado a la Base de Datos</h2><p style="color: #f00;">Por favor, guarde esta página para referencias posteriores.</p>';
$string['description'] = '<h1>Combinar a dos usuarios en una sola cuenta.</h1>
<p>Con una ID de usuario que será eliminada y una ID de usuario para conservar, ésto combinará los datos del usuario asociados con la ID anterior del usuario dentro de la ID más reciente del usuario. Note que deben existir ambas IDs de usuario previamente y que en realidad no se eliminará ninguna cuenta. Ésta eliminación se le deja al administrador, para que la realice manualmente.</p>
<p>Este proceso involucra algunas funciones dependientes de la base de datos y posiblemente no haya sido completamente probado en su tipo de base de datos particular. <strong>¡Sólamente haga esta combinación si Usted realmente sabe lo que está haciendo, porque no es reversible!</strong></p>';
$string['errordatabase'] = 'Tipo de BasedeDatos no soportado:: {$a}';
$string['errornouserid'] = 'No se puede recuperar la ID del usuario';
$string['into'] = 'adentro de';
$string['mergeusers'] = 'Combinar cuentas de usuarios';
$string['mergeusers:view'] = 'Combinar Cuentas de Usuarios';
$string['merging'] = 'Combinando';
$string['newuserid'] = 'Se conservará la ID del usuario';
$string['olduserid'] = 'Se removerá la ID del usuario';
$string['pluginname'] = 'Combinar cuentas de usuario';
$string['tableko'] = 'Tabla {$a} : actualización NO estuvo OK!';
$string['tableok'] = 'Tabla {$a} : actualización OK';
$string['tableskipped'] = 'Por razones de ingreso o de seguridad, estamos saltándonos a <strong>{$a}</strong>.<br />Para quitar estas entradas, elimine al usuario antiguo después de que este script haya ejecutado exitosamente.';
$string['useridnotexist'] = 'La ID del usuario no existe';
