<?php 
  $site_root="../../";
  include("./kofficeversion.inc"); // Defines also $page_title
  include("koffice.inc");
  include("header.inc");
?><div>
<!--Do not modify! This file was generated -->
  <h2>Which filters are there?</h2>
  <p>Many KOffice applications support the filter architecture
 (i.e.: they are able to use filters for file conversion.) The filters are not perfect
 and some not even done. The status of the current filters is listed below, sorted per
 application.</p>
  <p>Note: this document is about <strong><?php print $kofficeversiondescription;?></strong>.</p>
  <hr/>
  <h3>Generic (for all KOffice applications)</h3>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">XSLT</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
  </table>
  <h3>KWord</h3>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/abiword.php">AbiWord</a>
      </td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">***</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/amipro.php">AmiPro</a>
      </td>
      <td width="50%" align="left" valign="top">Lotus word processor</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">***</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/applixword.php">Applix Word</a>
      </td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">**</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/docbook.php">DocBook</a>
      </td>
      <td width="50%" align="left" valign="top">SGML DocBook only</td>
      <td width="10%" align="center" valign="top">-</td>
      <td width="10%" align="center" valign="top">?</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/html.php">HTML</a>
      </td>
      <td width="50%" align="left" valign="top">HTML 4.01 / XHTML 1.0</td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">***</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/hancomword.php">HancomWord</a>
      </td>
      <td width="50%" align="left" valign="top">for version 2.0, text only</td>
      <td width="10%" align="center" valign="top">**</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/latex.php">LaTeX</a>
      </td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/msword97.php">MS Word</a>
      </td>
      <td width="50%" align="left" valign="top">Microsoft Word 97/2000</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/mswrite.php">MS Write</a>
      </td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">***</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/oowriter.php">OpenOffice.org Writer</a>
      </td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/pdf.php">PDF</a>
      </td>
      <td width="50%" align="left" valign="top">Portable Document Format</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/palmdoc.php">Palmdoc</a>
      </td>
      <td width="50%" align="left" valign="top">Palm documents</td>
      <td width="10%" align="center" valign="top">*****</td>
      <td width="10%" align="center" valign="top">*****</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/plaintext.php">Plain text</a>
      </td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">*****</td>
      <td width="10%" align="center" valign="top">*****</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/rtf.php">RTF</a>
      </td>
      <td width="50%" align="left" valign="top">Rich Text Format</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">***</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/starwriter.php">StarWriter</a>
      </td>
      <td width="50%" align="left" valign="top">
            Contacts: <a href="mailto:ariya@kde.org">Ariya Hidayat</a>,
            <a href="mailto:info@marcozanon.com">Marco Zanon</a></td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/wml.php">WML</a>
      </td>
      <td width="50%" align="left" valign="top">Wireless markup language</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">***</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">
        <a href="kword/wordperfect.php">WordPerfect</a>
      </td>
      <td width="50%" align="left" valign="top">WP 5.x and WP 6/7/8 documents, text only</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
  </table>
  <h3>KSpread</h3>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Applix Spreadsheet</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">**</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">CSV</td>
      <td width="50%" align="left" valign="top">Comma Separated Values</td>
      <td width="10%" align="center" valign="top">*****</td>
      <td width="10%" align="center" valign="top">*****</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Excel</td>
      <td width="50%" align="left" valign="top">Microsoft Excel 97/2000</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Gnumeric</td>
      <td width="50%" align="left" valign="top">Part of GNOME Office</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">HTML</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">-</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">LaTeX</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">-</td>
      <td width="10%" align="center" valign="top">*</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">OpenOffice.org Calc</td>
      <td width="50%" align="left" valign="top">
            Contact: <a href="mailto:nandres@web.de">Norbert Andres</a></td>
      <td width="10%" align="center" valign="top">**</td>
      <td width="10%" align="center" valign="top">*</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Quattro Pro</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">**</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">dBase</td>
      <td width="50%" align="left" valign="top">dBase 3 only</td>
      <td width="10%" align="center" valign="top">**</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
  </table>
  <h3>KPresenter</h3>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">KWord</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">-</td>
      <td width="10%" align="center" valign="top">*****</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Magicpoint</td>
      <td width="50%" align="left" valign="top">
            Contact: <a href="mailto:lukas@kde.org">Lukas Tinkl</a></td>
      <td width="10%" align="center" valign="top">****</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">OpenOffice.org Impress</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">****</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">PowerPoint 97</td>
      <td width="50%" align="left" valign="top">Microsoft PowerPoint 97</td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
  </table>
  <h3>Karbon 14</h3>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Adobe Illustrator</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Applix Graphics</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">+</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">EPS</td>
      <td width="50%" align="left" valign="top">Encapsulated PostScript</td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">*</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Kontour</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">LaTeX</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">-</td>
      <td width="10%" align="center" valign="top">+</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">MSOD</td>
      <td width="50%" align="left" valign="top">Microsoft Office Drawing</td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">OpenOffice.org Draw</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">PNG</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">-</td>
      <td width="10%" align="center" valign="top">*</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">SVG</td>
      <td width="50%" align="left" valign="top">Scalable Vector Graphics (W3C)</td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">WMF</td>
      <td width="50%" align="left" valign="top">Windows MetaFile</td>
      <td width="10%" align="center" valign="top">*</td>
      <td width="10%" align="center" valign="top">*</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Xfig</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">+</td>
      <td width="10%" align="center" valign="top">-</td>
    </tr>
  </table>
  <hr/>
  <h2>Key</h2>
  <table>
    <tr>
      <td valign="top">
        <strong>*****</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">The filter is stable and works well.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>****</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">The filter generally works well.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>***</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">The filter generally works well, however some features might be missing or might not work correctly yet.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>**</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">The filter generally works although it is not finished, and it may suffer from some instability.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>*</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">Work has begun on the filter although the code is still at an early stage of development, and does not work properly.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>+</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">An author has volunteered to work on the filter, although the code does not actually exist yet, or is at a very early stage of development.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>-</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">The filter does not currently exist, and nobody is working on it.</td>
    </tr>
    <tr>
      <td valign="top">
        <strong>?</strong>
      </td>
      <td valign="top"> -- </td>
      <td valign="top">The status of this filter is unknown, as its development has been abandoned.</td>
    </tr>
  </table>
  <h2>Joining the developers</h2>
  <p>There are many filters that we would like and many filters that need improvement, although sadly we do not have enough developers working on KOffice.</p>
  <p>Would <em>you</em> like to <a href="mailto:koffice@kde.org">join the development team</a> and help us?</p>
  <p>Please <a href="mailto:koffice@kde.org">contact us</a> if you are interested in helping.</p>
</div><?php 
  include("footer.inc");
?>
