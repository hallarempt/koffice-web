<?php
  $page_title="HTML Filter";
  $location = '../../../';
  include("koffice.inc");
  include("header.inc");
?>

<p>Note: the export filter has three modes: "light", "basic" and "enhanced".
</p>

<p>An entry marked "Bug" means that the function does not work or is
otherwise restricted due to a bug.</p>

<h2>KWord Features</h2>
<table border="5" cellspacing="0" cellpadding="5" >
<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Character Formatting</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text (ASCII)</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">All text is imported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">All text is exported. (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text (Unicode/foreign encoding)</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported, as long as the encoding is correctly defined in the file</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported. Encoding can be chosen in the dialog. (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Special Characters </td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Boldface </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported. (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Italics</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Underline</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Advanced Underline</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Strikethrough</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes only)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Advanced Strikethrough</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Subscript</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Superscript</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Font Type </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Font Size </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Exact size only in enhanced mode)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Font Color</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Background Color</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic mode) and
  <span bgcolor="#CECECE">Bug (Enhanced mode)</span></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Shadow Text</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Enhanced mode only).</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Paragraph Formatting</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text Justification </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Tabulators</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Forced Line Break</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Numbered List</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Bulleted List</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Margins </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Bug (Enhanced mode only)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Line Spacing </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Bug (Enhanced mode only)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Paragraph Borders </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Enhanced mode only)</td>
</tr>


<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Frame Properties</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Frames </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Forced Frame/Page Break</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Document Properties</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Bookmarks</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Links</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Light, Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Footnotes</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Table of Contents </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Unsupported</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Document Variables </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Paper Size </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Enhanced mode only)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Formula</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">KWord's DTP modus</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Images</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Pictures</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Bug</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Tables</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Tables</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Basic and Enhanced modes)</td>
</tr>

<tr bgcolor="#FFFFFF">
<td colspan="3" align="left" valign="top"><br /><h3>Styles</h3></td>
</tr>

<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>KWord Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Text Style </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported (Enhanced mode only)</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Table Styles </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">Frame Style </td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not in HTML</td>
</tr>

</table>

<h2>HTML Specific Features</h2>
<table border="5" cellspacing="0" cellpadding="5" >
<tr bgcolor="#FFEEAA">
 <td align="left" valign="top"><h4>HTML Feature</h4></td>
 <td align="left" valign="top"><h4>Import Status</h4></td>
 <td align="left" valign="top"><h4>Export Status</h4></td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">HTML 4.01</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Can be chosen in dialog</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">XHTML 1.0</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Not directly supported, only as HTML.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Can be chosen in dialog</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">XHTML 1.1</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Not directly supported, only as HTML.</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not supported</td>
</tr>

<tr bgcolor="#FFFFFF"><td align="left" valign="top">CSS 2</td>
 <td bgcolor="#CECECE" align="left" valign="top">Not Supported.</td>
 <td bgcolor="#FFFFFF" align="left" valign="top">Enhanced mode only</td>
</tr>

</table>

<?php
   include("footer.inc");
?>
