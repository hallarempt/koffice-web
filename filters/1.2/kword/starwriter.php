<?php
  $page_title="StarWriter Filter";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

  <p>Author: <a href="mailto:info@marcozanon.com">Marco Zanon</a></p>
  <p>Last updated on: 2002-10-10</p>
  <pThis page describes the status of this filter, which is under heavy development (only few import features will be implemented for the moment). Please report any bug to me or to the koffice mailing list.</p>

  <h2>Feature matrix</h2>
  <p>Legend: green = "works well", yellow = "planned or works partly", red = "not ready"</p>
  <table BORDER="1">
    <TH>Feature</TH><TH>Import</TH><TH>Export</TH>
    <tr><td colspan="3"><strong>Document properties</strong></td></tr>
    <tr><td>Generic information</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td colspan="3"><strong>Page properties</strong></td></tr>
    <tr><td>Size</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Margins</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Page breaks</td><td bgcolor="#ffff00"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td colspan="3"><strong>Basic features</strong></td></tr>
    <tr><td>Text</td><td bgcolor="#00ff00"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Tables</td><td bgcolor="#ffff00"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Graphics</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Embedded objects</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Headers</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Footers</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Frames</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Hypertext</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td colspan="3"><strong>Character properties</strong></td></tr>
    <tr><td>Font type</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Font size</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Bold</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Italic</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Underline</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Double underline</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Strikethrough</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Superscript</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Subscript</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Foreground color</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Background color</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td colspan="3"><strong>Paragraph properties</strong></td></tr>
    <tr><td>Styles</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Whole-line character properties</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Alignment</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Margins</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Spacing</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Tabulators</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
    <tr><td>Borders</td><td bgcolor="#ff0000"></td><td bgcolor="#ff0000"></td></tr>
  </table>

<?php
   include("footer.inc");
?>





