<?php
  $page_title="Useful Links";
  $site_root = '../../';
  include("koffice.inc");
  include("header.inc");
?>

    <p>During all the hours on the net searching for information on file
    formats and stuff like that, we came across some very interesting
    homepages:</p>

    <h2>File Formats</h2>

    <h3>General</h3>
    
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
      <tr>
        <td><a href="http://www.wotsit.org">Wotsit</a></td>
        <td>Information on various file formats</td>
      </tr>
    </table>

    <h3>MS Office</h3>
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
    
        <tr>
        <td rowspan="9" valign="top"><b>MS Office</b></td>
        <td><a href="http://msdn.microsoft.com">msdn</a></td>
        <td>The MS Developer's Network Library</td>
        </tr>

        <tr>
        <td><a href="http://snake.cs.tu-berlin.de:8081/~schwartz/pmh/index.html">LAOLA</a></td>
        <td>The famous LAOLA homepage (OLE)</td>
        </tr>

        <tr>
        <td><a href="http://www.btinternet.com/~shaheedhaque/">Word 97</a></td>
        <td>Information to Word Filters (by Shaheed Haque)</td>
        </tr>

<?php
  /* FIXME Broken URL

        <tr>
        <td><a href="http://www.xlhtml.org">Excel95, ppt</a></td>
        <td><table border="0">
                <tr>
                <td>Excel 95 and later file converter</td>
                <td>:</td>
                <td>xlHtml</td>
                </tr>
                <tr>
                <td>Powerpoint converter</td>
                <td>:</td>
                <td>pptHtml</td>
                </tr>
            </table>
        </td>
        </tr>
    */
?>

        <tr>
        <td><a href="http://www.mlib.unibel.by/pub/pub/qqq/office/MSWordView.html">Word 8</a></td>
        <td>MSWord 8 converter for unix: MSWordView</td>
        </tr>

        <tr>
        <td><a href="http://www.wvware.com/wvInfo.html">File formats</a></td>
        <td>MS Office File Formats Information and Converters </td>
        </tr>

        <tr>
        <td><a href="http://arturo.directmail.org/filtersweb/">Filtersweb</a></td>
        <td>libole2(GNOME), xls2xml, cole (r+w ole2 structured storage files)</td>
        </tr>

        <tr>
        <td><a href="http://sourceforge.net/projects/wvware">wv-library</a></td>
        <td>The wv-library (by Caolan McNamara (new link))</td>
        </tr>

        <tr>
        <td><a href="http://skynet.csn.ul.ie/~caolan">wv-library</a></td>
        <td>The wv-library (by Caolan McNamara (old link))</td>
        </tr>

        <tr>
        <td><a href="http://sc.openoffice.org/excelfileformat.pdf">MS Excel</a></td>
        <td>OpenOffice commentary on the Excel file format</td>
        </tr>
    </table>

    <h3>Star/Open Office</h3>
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
        <tr>
        <td><a href="http://xml.openoffice.org/">XML</a></td>
        <td>File format of Open Office</td>
        </tr>

        <tr>
        <td><a href="http://www.openoffice.org/source/browse/sw/sw/source/filter/">
            Filter</a></td>
        <td>StarOffice filters (incl. Starword 6.x) via webcvs: <br />
            sw6 (StarWord 6), ww8 (WinWord8), ascii, excel, html, lotus, rtf,
            xml, ...
        </td>
        </tr>

        <tr>
        <td><a href="http://www.openoffice.org/source/browse/sw/sw/source/core/sw3io/">
            Version 3-5.x</a></td>
        <td>StarOffice old formats (version 3->5.x) via webcvs: <br />
            sw3io means StarWriter 3 I/O. It works for 3->5.x version
        </td>
        </tr>

        <tr>
        <td><a href="http://www.abisource.com/lxr/source/abiword-plugins/wp/impexp/sdw/docs/StarWrite_File_Format.html">
            SDW file format</a></td>
        <td>Description of the SDW file format, by an Abiword developer, who sent us this link
        </td>
        </tr>

        <tr>
        <td><a href="http://www.marcozanon.com/download/swfile.html">
            Starwriter 5.x</a></td>
        <td>Another description of the Starwriter 5.x file format
        </td>
        </tr>
    </table>

    <h3>Adobe</h3>
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
        <tr>
        <td><a href="http://partners.adobe.com/asn/tech/pdf/specifications.jsp">PDF</a></td>
        <td>PDF specification</td>
        </tr>

        <tr>
        <td><a href="http://www.adobe.com/support/downloads/865e.htm">
            MIF &amp; MML</a></td>
        <td>MIF &amp; MML format documentation. (MML=Maker Markup Language; MIF=Marker Interchange Format.)</td>
        </tr>
    </table>

    <h3>Corel</h3>
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
        <tr>
        <td><a href="http://www.corel.com/partners_developers/ds/wpsdks.htm">
            Version 7.0</a></td>
        <td>Fileformat description for WordPerfect, Presentations, Quattro Pro... (Version 7.0) </td>
        </tr>
    </table>


    <h3>AbiSource</h3>
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
        <tr>
        <td><a href="http://www.abisource.com/awml.dtd">
            DTD</a></td>
        <td>Fileformat description of AbiWord: DTD</td>
        </tr>

        <tr>
        <td><a href="http://www.abisource.com/lxr/source/abi/docs/AbiWord_DocumentFormat.abw">
            abw</a></td>
        <td>Fileformat description: AbiWord_DocumentFormat.abw </td>
        </tr>
    </table>

<?php /*
	
    <h3>Lotus</h3>
    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#000000" >
        <tr>
        <td><a href="ftp://www.thekompany.com/pub/KOffice/filters/">
            WordPro</a></td>
        <td>API of WordPro (ftp)</td>
        </tr>
    </table>
*/ ?>

    <h2>Home Pages</h2>
    
    <p>The following links are home pages without file format information.</p>

    <ul>
        <li>
            Gnumeric:
            <a href="http://www.gnome.org/projects/gnumeric/">Gnumeric Homepage</a>
        </li>

        <li>
            Dia:
            <a href="http://www.lysator.liu.se/~alla/dia/dia.html">Dia Homepage</a>
        </li>

        <li>
            Visio:
            <a href="http://www.microsoft.com/office/visio/">Visio Homepage (MS)</a>
        </li>

        <li>
            CPT:
            <a href="http://www.corel.com/">Corel Homepage</a>
            (CPT=Corel Photo painT)
        </li>

        <li>
            Canvas:
            <a href="http://www.deneba.com/">Deneba Homepage</a>
            (illustrations)
        </li>
    </ul>

<?php include("footer.inc"); ?>
