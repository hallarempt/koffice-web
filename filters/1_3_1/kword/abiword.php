<?php
  $page_title="AbiWord Filter";
  $location = '../';
  include("koffice.inc");
  include("header.inc");
?>

<h2>KWord Features</h2>
<table border="4" cellspacing="0" cellpadding="5" >

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Character Formatting</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text (ASCII)</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">All text is imported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">All text is exported</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text (Unicode/foreign encoding)</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported, as long as the encoding is correctly defined in the file</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Always exported as UTF-8</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Special Characters </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Boldface </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Italics</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Underline</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Advanced Underline</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Strikethrough</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Advanced Strikethrough</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Subscript</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Superscript</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Font Type </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Font Size </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Font Color</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Background Color</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Shadow Text</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Paragraph Formatting</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Tabulators</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported, however known problems with default tabulators.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Forced Line Break</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Numbered List</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Bulleted List</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Margins </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Line Spacing </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Paragraph Borders </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Frame Properties</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Frames </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Forced Frame/Page Break</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Document Properties</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Bookmarks</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Links</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported, except links to bookmarks</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Footnotes</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Table of Contents </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Document Variables </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported, however not all can be converted</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported, however not all can be converted</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Paper Size </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Formula</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">KWord's DTP modus</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Images</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Pictures</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">
  PNG is supported.<br />SVG status is unknown.<br />WMF is not supported.<br />Any other image type is converted to PNG.
 </td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Tables</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Tables</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h2>Styles</h2></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>KWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text Style </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Table Styles </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Frame Style </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in AbiWord</td>
</tr>

</table>

<h2>AbiWord Specific Features</h2>

<table border="5" cellspacing="0" cellpadding="5" >
<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h3>AbiWord Feature</h3></td>
 <td align="left" valign="top"><h3>Import Status</h3></td>
 <td align="left" valign="top"><h3>Export Status</h3></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Ignored Word List</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Forced Column Break</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Transformed in a forced frame/page break</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Not in KWord</td>
</tr>

</table>

<?php
   include("footer.inc");
?>





