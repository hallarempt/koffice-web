<?php 
  $page_title="KOffice Filters Status (Development)";
  $site_root = "../../";
  include("koffice.inc");
  include("header.inc");
?><div>
<!--
    Do not modify! This file was generated
    -->
  <h2>Which filters are there?</h2>
  <p>At the moment all parts of KOffice support the filter architecture
 (e.g.: the parts are able to use filters for file conversion), the filters are not perfect
 and some not even done. The status of the current filters is listed here, sorted per
 application.</p>
  <p>Note: this document is about <strong>KOffice SVN</strong> (the developer version).</p>
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
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/xsltfilter/status.html?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/xsltfilter/status.html?content-type=text/html">**</a>
      </td>
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
      <td width="30%" align="left" valign="top">AbiWord</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/abiword/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/abiword/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">AmiPro</td>
      <td width="50%" align="left" valign="top">Lotus word processor</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/amipro/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/amipro/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Applix Word</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/applixword/status.html#import?content-type=text/html">**</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/applixword/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">DocBook</td>
      <td width="50%" align="left" valign="top">SGML DocBook only</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/docbook/status.html#import?content-type=text/html">-</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/docbook/status.html#export?content-type=text/html">?</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">HTML</td>
      <td width="50%" align="left" valign="top">HTML 4.01 / XHTML 1.0</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/html/status.html#import?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/html/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">HancomWord</td>
      <td width="50%" align="left" valign="top">for version 2.0, text only</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/hancomword/status.html#import?content-type=text/html">**</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/hancomword/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">LaTeX</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/latex/status.html#import?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/latex/status.html#export?content-type=text/html">**</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">MS Word</td>
      <td width="50%" align="left" valign="top">Microsoft Word 97/2000</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/winword97/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/winword97/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">MS Write</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/mswrite/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/mswrite/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">OpenOffice.org Writer</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">***</td>
      <td width="10%" align="center" valign="top">**</td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">PDF</td>
      <td width="50%" align="left" valign="top">Portable Document Format</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/pdf/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/pdf/status.html?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Palmdoc</td>
      <td width="50%" align="left" valign="top">Palm documents</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/palmdoc/status.html#import?content-type=text/html">*****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/palmdoc/status.html#export?content-type=text/html">*****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Plain text</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/ascii/status.html#import?content-type=text/html">*****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/ascii/status.html#export?content-type=text/html">*****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">RTF</td>
      <td width="50%" align="left" valign="top">Rich Text Format</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/rtf/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/rtf/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">StarWriter</td>
      <td width="50%" align="left" valign="top">
            Contacts: <a href="mailto:ariya@kde.org">Ariya Hidayat</a>,
            <a href="mailto:info@marcozanon.com">Marco Zanon</a></td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/starwriter/status.html?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/starwriter/status.html?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">WML</td>
      <td width="50%" align="left" valign="top">Wireless markup language</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/wml/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/wml/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">WordPerfect</td>
      <td width="50%" align="left" valign="top">WP 5.x and WP 6/7/8 documents, text only</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/wordperfect/status.html?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kword/wordperfect/status.html?content-type=text/html">**</a>
      </td>
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
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/applixspread/status.html#import?content-type=text/html">**</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/applixspread/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">CSV</td>
      <td width="50%" align="left" valign="top">Comma Separated Values</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/csv/status.html#import?content-type=text/html">*****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/csv/status.html#export?content-type=text/html">*****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Excel</td>
      <td width="50%" align="left" valign="top">Microsoft Excel 97/2000</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/excel97/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/excel97/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Gnumeric</td>
      <td width="50%" align="left" valign="top">Part of GNOME Office</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/gnumeric/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/gnumeric/status.html#export?content-type=text/html">**</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">HTML</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/html/status.html#import?content-type=text/html">-</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/html/status.html#export?content-type=text/html">**</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">LaTeX</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/latex/status.html#import?content-type=text/html">-</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/latex/status.html#export?content-type=text/html">*</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">OpenOffice.org Calc</td>
      <td width="50%" align="left" valign="top">
            Contact: <a href="mailto:nandres@web.de">Norbert Andres</a></td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/opencalc/status.html#import?content-type=text/html">**</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/opencalc/status.html#export?content-type=text/html">*</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Quattro Pro</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/qpro/status.html#import?content-type=text/html">**</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/qpro/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">dBase</td>
      <td width="50%" align="left" valign="top">dBase 3 only</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/dbase/status.html#import?content-type=text/html">**</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kspread/dbase/status.html#export?content-type=text/html">-</a>
      </td>
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
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kpresenter/kword/status.html?content-type=text/html">-</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kpresenter/kword/status.html#export?content-type=text/html">*****</a>
      </td>
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
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kpresenter/ooimpress/status.html#import?content-type=text/html">****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kpresenter/ooimpress/status.html#export?content-type=text/html">**</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">PowerPoint 97</td>
      <td width="50%" align="left" valign="top">Microsoft PowerPoint 97</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/powerpoint97/status.html#import?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/olefilters/powerpoint97/status.html#export?content-type=text/html">-</a>
      </td>
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
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/karbon/msod/status.html#import?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/karbon/msod/status.html#export?content-type=text/html">-</a>
      </td>
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
  <h3>Krita</h3>
  <p>Krita can use <a href="http://imagemagick.org/">ImageMagick</a> for importing and exporting images. This means that, in addition to the file formats listed below, Krita can work with all images that your installation of ImageMagick supports. This includes all common image file formats, including the native formats of Photoshop and the Gimp. <br /> <a href="http://imagemagick.org/script/formats.php">More information on file formats supported by ImageMagick.</a></p>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Gimp (XCF)</td>
      <td width="50%" align="left" valign="top">Native file format of the 
                    <a href="http://www.gimp.org/">Gimp</a></td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/xcf/status.html#import?content-type=text/html">+</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/xcf/status.html#export?content-type=text/html">+</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">JPEG</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/jpeg/status.html#import?content-type=text/html">****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/jpeg/status.html#export?content-type=text/html">****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">OpenEXR</td>
      <td width="50%" align="left" valign="top">
                <a href="http://www.openexr.com/">OpenEXR</a> is a high dynamic-range (HDR) format <br /> 
                developed by <a href="http://www.ilm.com">Industrial Light & Magic</a>
                </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/openexr/status.html#import?content-type=text/html">****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/openexr/status.html#export?content-type=text/html">****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">PNG</td>
      <td width="50%" align="left" valign="top">Portable Network Graphics</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/png/status.html#import?content-type=text/html">****</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/png/status.html#export?content-type=text/html">****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">RAW</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/raw/status.html#import?content-type=text/html">*</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/raw/status.html#export?content-type=text/html">-</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">TIFF</td>
      <td width="50%" align="left" valign="top"> </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/tiff/status.html#import?content-type=text/html">***</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/krita/tiff/status.html#export?content-type=text/html">***</a>
      </td>
    </tr>
  </table>
  <h3>KChart</h3>
  <table border="5" cellspacing="0" cellpadding="5">
    <tr bgcolor="#FFEEAA">
      <th width="30%" align="left" valign="top">From/To</th>
      <th width="50%" align="left" valign="top">Notes</th>
      <th width="10%" align="left" valign="top">Import</th>
      <th width="10%" align="left" valign="top">Export</th>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">PNG</td>
      <td width="50%" align="left" valign="top">Portable Network Graphics (most graphics programs)</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kchart/png/status.html#import?content-type=text/html">-</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kchart/png/status.html#export?content-type=text/html">****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">SVG</td>
      <td width="50%" align="left" valign="top">Scalable Vector Graphics (W3C)</td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kchart/svg/status.html#import?content-type=text/html">-</a>
      </td>
      <td width="10%" align="center" valign="top">
        <a href="http://websvn.kde.org/*checkout*/trunk/koffice/filters/kchart/svg/status.html#export?content-type=text/html">****</a>
      </td>
    </tr>
    <tr>
      <td width="30%" align="left" valign="top">Text</td>
      <td width="50%" align="left" valign="top">Text file (e.g. CSV or tab-delimited)</td>
      <td width="10%" align="center" valign="top">****</td>
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
  <h2>Further Information</h2>
  <p>Simply click on the status of the relevant filter to find out more information about it.</p>
  <h2>Joining the developers</h2>
  <p>There are many filters that we would like and many filters that need improvement, although sadly we do not have enough developers working on KOffice.</p>
  <p>Would <em>you</em> like to <a href="mailto:koffice@kde.org">join the development team</a> and help us?</p>
  <p>Please <a href="mailto:koffice@kde.org">contact us</a> if you are interested in helping.</p>
</div><?php 
  include("footer.inc");
?>
