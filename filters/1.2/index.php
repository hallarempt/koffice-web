<?php
  $page_title="KOffice Filters Status";
  $location = '../../';
  include("koffice.inc");
  include("header.inc");
?>

 <h2>Which filters are there?</h2>
 <p>At the moment all KOffice applications support the filter architecture
 (i.e.: they are able to use filters for file conversion.) The filters are not perfect
 and some not even done. The status of the current filters is listed below, sorted per
 application.</p>
 <p>Note: this document is about <b>KOffice 1.2</b>.</p>


<h3>Generic (for all KOffice applications)</h3>

<table border="5" cellspacing="0" cellpadding="5" bordercolor="#800000" >

 <tr bgcolor="#FFEEAA">
 <td width="30%" align="left" valign="top"><h3>From/To</h3></td>
 <td width="50%" align="left" valign="top"><b>Notes</b></td>
 <td width="10%" align="left" valign="top"><b>Import</b></td>
 <td width="10%" align="left" valign="top"><b>Export</b></td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="generic/xslt.php">XSLT</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">*</td>
 <td width="10%" align="center" valign="top">**</td>
 </tr>

</table>

<h3>KWord</h3>

<table border="5" cellspacing="0" cellpadding="5" bordercolor="#800000" >

 <tr bgcolor="#FFEEAA">
 <td width="30%" align="left" valign="top"><h3>From/To</h3></td>
 <td width="50%" align="left" valign="top"><b>Notes</b></td>
 <td width="10%" align="left" valign="top"><b>Import</b></td>
 <td width="10%" align="left" valign="top"><b>Export</b></td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/abiword.php">AbiWord</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">***</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/amipro.php">AmiPro</a></td>
 <td width="50%" align="left" valign="top">Lotus word processor</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">***</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/applixword.php">Applix Word</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/docbook.php">DocBook</a></td>
 <td width="50%" align="left" valign="top">SGML DocBook only</td>
 <td width="10%" align="center" valign="top">-</td>
 <td width="10%" align="center" valign="top">**</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/html.php">HTML</a></td>
 <td width="50%" align="left" valign="top">HTML 4.01 / XHTML 1.0</td>
 <td width="10%" align="center" valign="top">*</td>
 <td width="10%" align="center" valign="top">***</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/hancomword.php">HancomWord</a></td>
 <td width="50%" align="left" valign="top">for version 2.0, text only</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/latex.php">LaTeX</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">*</td>
 <td width="10%" align="center" valign="top">**</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/mif.php">MIF</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">?</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/msword97.php">MS Word</a></td>
 <td width="50%" align="left" valign="top">Microsoft Word 97/2000</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/mswrite.php">MS Write</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/palmdoc.php">Palmdoc</a></td>
 <td width="50%" align="left" valign="top">Palm documents</td>
 <td width="10%" align="center" valign="top">*****</td>
 <td width="10%" align="center" valign="top">*****</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/plaintext.php">Plain text</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">*****</td>
 <td width="10%" align="center" valign="top">*****</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/rtf.php">RTF</a></td>
 <td width="50%" align="left" valign="top">Rich Text Format</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">*</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/starwriter.php">StarWriter</a></td>
 <td width="50%" align="left" valign="top">Contact: <a href="mailto:ariya@kde.org">Ariya Hidayat</a><br/>Contact: <a href="mailto:info@marcozanon.com">Marco Zanon</a><br/></td>
 <td width="10%" align="center" valign="top">+</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/wml.php">WML</a></td>
 <td width="50%" align="left" valign="top">Wireless markup language</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">***</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kword/wp.php">WordPerfect</a></td>
 <td width="50%" align="left" valign="top">WP 5.x and WP 6/7/8 documents, text only</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">***</td>
 </tr>

</table>

<h3>KSpread</h3>

<table border="5" cellspacing="0" cellpadding="5" bordercolor="#800000" >

 <tr bgcolor="#FFEEAA">
 <td width="30%" align="left" valign="top"><h3>From/To</h3></td>
 <td width="50%" align="left" valign="top"><b>Notes</b></td>
 <td width="10%" align="left" valign="top"><b>Import</b></td>
 <td width="10%" align="left" valign="top"><b>Export</b></td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/applix.php">Applix Spreadsheet</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/csv.php">CSV</a></td>
 <td width="50%" align="left" valign="top">Comma Separated Values</td>
 <td width="10%" align="center" valign="top">*****</td>
 <td width="10%" align="center" valign="top">*****</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/dbase.php">dBase</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/excel.php">Excel</a></td>
 <td width="50%" align="left" valign="top">Microsoft Excel 97/2000</td>
 <td width="10%" align="center" valign="top">***</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/gnumeric.php">Gnumeric</a></td>
 <td width="50%" align="left" valign="top">Part of GNOME Office</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">**</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/html.php">HTML</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">-</td>
 <td width="10%" align="center" valign="top">**</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top">OpenCalc</td>
 <td width="50%" align="left" valign="top">Contact: <a href="mailto:nandres@web.de">Norbert Andres</a></td>
 <td width="10%" align="center" valign="top">+</td>
 <td width="10%" align="center" valign="top">+</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kspread/quattro.php">Quattro Pro</a></td>
 <td width="50%" align="left" valign="top">&#160;</td>
 <td width="10%" align="center" valign="top">**</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

</table>

<h3>KPresenter</h3>

<table border="5" cellspacing="0" cellpadding="5" bordercolor="#800000" >

 <tr bgcolor="#FFEEAA">
 <td width="30%" align="left" valign="top"><h3>From/To</h3></td>
 <td width="50%" align="left" valign="top"><b>Notes</b></td>
 <td width="10%" align="left" valign="top"><b>Import</b></td>
 <td width="10%" align="left" valign="top"><b>Export</b></td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kpresenter/kword.php">KWord</a></td>
 <td width="50%" align="left" valign="top">Text export only</td>
 <td width="10%" align="center" valign="top">-</td>
 <td width="10%" align="center" valign="top">*****</td>
 </tr>

 <tr>
 <td width="30%" align="left" valign="top"><a href="kpresenter/powerpoint.php">PowerPoint 97</a></td>
 <td width="50%" align="left" valign="top">Microsoft PowerPoint 97</td>
 <td width="10%" align="center" valign="top">*</td>
 <td width="10%" align="center" valign="top">-</td>
 </tr>

</table>

<h3>Krita</h3>

<table border="5" cellspacing="0" cellpadding="5" bordercolor="#800000" >

 <tr bgcolor="#FFEEAA">
 <td width="30%" align="left" valign="top"><h3>From/To</h3></td>
 <td width="50%" align="left" valign="top"><b>Notes</b></td>
 <td width="10%" align="left" valign="top"><b>Import</b></td>
 <td width="10%" align="left" valign="top"><b>Export</b></td>
 </tr>

</table>

<h3>Kivio</h3>

<table border="5" cellspacing="0" cellpadding="5" bordercolor="#800000" >

 <tr bgcolor="#FFEEAA">
 <td width="30%" align="left" valign="top"><h3>From/To</h3></td>
 <td width="50%" align="left" valign="top"><b>Notes</b></td>
 <td width="10%" align="left" valign="top"><b>Import</b></td>
 <td width="10%" align="left" valign="top"><b>Export</b></td>
 </tr>

</table>



<h2>Key</h2>
<table>

 <tr>
   <td valign="top"><b>*****</b></td>
   <td valign="top"> -- </td>
   <td valign="top">The filter is stable and works well.</td>
 </tr>

 <tr>
   <td valign="top"><b>****</b></td>
   <td valign="top"> -- </td>
   <td valign="top">The filter generally works well.</td>
 </tr>

 <tr>
   <td valign="top"><b>***</b></td>
   <td valign="top"> -- </td>
   <td valign="top">The filter generally works well, however some features might be missing or might not work correctly yet.</td>
 </tr>

 <tr>
   <td valign="top"><b>**</b></td>
   <td valign="top"> -- </td>
   <td valign="top">The filter generally works although it is not finished, and it may suffer from some unstability.</td>
 </tr>

 <tr>
   <td valign="top"><b>*</b></td>
   <td valign="top"> -- </td>
   <td valign="top">Work has begun on the filter although the code is still at an early stage of development, and may not work properly.</td>
 </tr>

 <tr>
   <td valign="top"><b>+</b></td>
   <td valign="top"> -- </td>
   <td valign="top">An author has volunteered to work on the filter, although the code does not actually exist yet, or is at a very early stage of development.</td>
 </tr>

 <tr>
   <td valign="top"><b>-</b></td>
   <td valign="top"> -- </td>
   <td valign="top">The filter does not currently exist, and nobody is working on it.</td>
 </tr>

 <tr>
   <td valign="top"><b>?</b></td>
   <td valign="top"> -- </td>
   <td valign="top">The status of this filter is unknown, as its development has been abandoned.</td>
 </tr>

</table>

<h2>Further Information</h2>

<p>Simply click on the name of the relevant filter to find out more information about it.</p>

<h2>Joining the developers</h2>
<p>There are many filters that we would like and many filters that need improvement, although sadly we do not have enough developers working on KOffice.</p>
<p>Would <i>you</i> like to join the development team and help us?</p>
<p>Please <a href="mailto:koffice@kde.org">contact us</a> if you are interested in helping.</p>


<?php
  include("footer.inc");
?>
