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
 * Strings for component 'editor_marklar', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   editor_marklar
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Insertar imagen';
$string['insertlink'] = 'Insertar archivo';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Preferencias del editor Marklar';
$string['preferencesformat'] = 'Formatos adicionales de texto  a ser editados también con Marklar';
$string['preferencesformat_help'] = 'Marklar suporta nativamente textos formateados en \'\'Markdown\'\'. También puede usarse para editar textos en otros formatos. Seleccione todos los formatos adicionales de texto que Usted desea editar también con Marklar.

Por defecto, Marklar es usado para el auto-formato de Moodle y los campos foormateados a texto simple (plano). Para editar HTML, se usará otro editor de texto enriquecido (como Atto o TinyMCE).';
$string['previewloading'] = 'Cargando vista previa...';
$string['previewoff'] = 'Editar';
$string['previewon'] = 'Previsualizar';
$string['privacy:export:preferences:format'] = 'Si es que Usted prefiere o no usar Marklar para editar textos con sintaxis {$a->format}.';
$string['syntax-format0'] = '<p>Auto-formato Moodle  le permite escribir texto normalmente, como si Usted estuviera enviando un Email de texto simple. Los saltos de línea serán retenidos. Usted puede incrustar un código HTML si Usted quisiera añadirlo y será aplicado.</p>';
$string['syntax-format1'] = '<dl>
<dt>Enlaces</dt>
<dd><code>&lt;a href="https://ejemplo.com"&gt;Link text&lt;/a&gt;</code></dd>
<dt>Importancia y énfasis</dt>
<dd><code>&lt;em&gt;Texto enfatizado&lt;/em&gt;</code></dd>
<dd><code>&lt;strong&gt;Texto fuertemente importante&lt;/strong&gt;</code></dd>
<dt>Encabezados</dt>
<dd><code>&lt;h2&gt;Level 2&lt;/h2&gt;</code></dd>
<dd><code>&lt;h3&gt;Level 3&lt;/h2&gt;</code></dd>
<dt>Párrafos y saltos de línea</dt>
<dd><code>&lt;p&gt;Texto del párrafo&lt;/p&gt;</code></dd>
<dd><code>Line&lt;br&gt;break</code></dd>
</dl>';
$string['syntax-format2'] = '<p>Este formato es útil cuando Usted necesita incluir mucho código o HTML que Usted quiere que se muestre exactamente como Usted lo escribió. Traduce espacios y línes-nuevas, pero por lo demás no se toca su texto.</p>';
$string['syntax-format4'] = '<dl>
<dt>Enlaces</dt>
<dd><code>[link text](https://example.com)</code></dd>
<dd><code>[link text](https://example.com "Link title")</code></dd>
<dt>´Importancia y énfasis</dt>
<dd><code>_Texto enfatizado_</code></dd>
<dd><code>*Texto enfatizado*</code></dd>
<dd><code>__Texto fuertemente importante__</code></dd>
<dd><code>**Texto fuertemente importante**</code></dd>
<dt>Headings</dt>
<dd><code>## Nivel 2 ##</code></dd>
<dd><code>### Nivel 3 ###</code></dd>
<dt>Párrafos y saltos de línea</dt>
<dd>Los párrafos están separados por una línea vacía. Para un salto de línea, termine la línea con uno o dos espacios.</dd>
<dt>Blockquotes</dt>
<dd><code>&gt; Email-style of blockquoting</code></dd>
<dt>Listas</dt>
<dd><code>* Ítem de lista con viñetas</code></dd>
<dd><code>1. Ítem de lista numerada</code></dd>
<dt>Preformateado</dt>
<dd><code>`function_name()`</code> (inline)</dd>
<dd><code>&nbsp;&nbsp;&nbsp;code_block()</code> (indentado con cuatro espacios)</dd>
<dt>Regla horizontal</dt>
<dd><code>---</code></dd>
<dd><code>***</code></dd>
<dt>HTML</dt>
<dd>Para cualquier markup que no esté cubierto por la sintaxis Markdown, simplemente use HTML crudo.</dd>
<dd><code>&lt;span class="label label-info"&gt;Notice&lt;/span&gt;</code></dd>
<dd><code>&lt;img class="img-responsive" src="…" alt="…" /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Documentación completa sobre sintaxis Markdown</a></p>';
$string['syntaxloading'] = 'Cargando ayuda sobre sintaxis...';
$string['syntaxoff'] = 'Ocultar sintaxis';
$string['syntaxon'] = 'Mostrar sintaxis';
