<?php
  $page_title ='KOffice 1.6 Release Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE October 16, 2006<br />
  EMBARGO - DO NOT RELEASE OR PUBLISH
</p>
<p align="justify">
    Also available in:
    <table border="0">
      <tr>
        <td>
          <a href="http://cat.kde.org/index.php/Notes_de_premsa/KOffice_1.6"><img src="flag_spain_catalunya.png"></img></a>
        </td>
        <td>
          <a href="announce-1.6-de.php"><img src="flag_germany.png"></img></a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="http://cat.kde.org/index.php/Notes_de_premsa/KOffice_1.6">Catalan</a>
        </td>
        <td>
          <a href="announce-1.6-de.php">German</a>
        </td>
      </tr>
    </table>
</p>
<h2>
  KDE Ships New Release of Free Integrated Office Suite
</h2>
<p align="justify">October 16, 2006 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  release of
  <a href="http://www.koffice.org/">KOffice</a> version 1.6, the 
  <a href="http://developer.kde.org/development-versions/koffice-1.6-release-plan.html">long awaited</a>
  version with major improvements in a number of areas.
</p>

<h2>Highlights</h2>
<p align="justify">
  The main energy of the KOffice team is currently focused
  on the revolutionary 2.0 version that will be based on KDE 4 and Qt 4.
  The 1.6 release is intended mainly as a feature release for the two
  fastest developed components: Krita and Kexi.  However, other 
  components are being actively developed too, in some cases with astonishing results.
  Here are the highlights of this release:
</p>

<h3>Krita Steps Up Into the Realms of Professional Image Editing</h3>
<p align="justify">
  With this release <a href="http://www.koffice.org/krita/">Krita</a> steps up and becomes usable for professional image editing.
  Krita and its maintainer won the prize for "Best Application" in 
  this years KDE conference in Dublin.  With features such as magnetic selection, 
  effect layers, color model independency, and full scriptability it has risen to
  become what is probably the best free image editing program today.

  For more details look in the Principal Improvements below, or

  <a href="http://www.koffice.org/announcements/changelog-1.6-final.php">the complete changelog</a>.
</p>
<h3>Kexi Adds Many New Features</h3>
<p align="justify">
    Kexi, the desktop database application competing with MS Access,
    is the other application in KOffice that already is best of its kind.
    Kexi has received over 270 improvements since 
    version 1.0 (KOffice 1.5). With this release, Kexi gains such features as
    the ability to <a href="http://www.kdedevelopers.org/node/2163">handle images</a>, 
    <a href="http://www.kexi.pl/media/en/compact_db/">compact the database</a>, automatic datatype recognition
    and Kross scripting tools.  Other parts have also been
    much developed with both new features and ease of use in mind.
</p>

<h3>KFormula Goes to OpenDocument and MathML</h3>
<p align="justify">
  The formula editor of KOffice now supports OpenDocument and MathML and uses it
  as its default file format.  It also surpasses the equivalent component in
  OpenOffice.org scoring 70% on the
      <a href="http://www.w3.org/Math/testsuite">W3C MathML test suite</a>, 
  compared to 22% for OpenOffice.org Formula.
  The KOffice team sees this as the first example where the
  work to provide a very well-structured code base of KOffice pays off to create
  a superior support for the existing standard.
</p>

<h3>Scripting Support in KSpread, Krita and Kexi</h3>
<p align="justify">
    KOffice 1.6 brings scripting to a new level with scripting implemented in 
    KSpread, Krita and Kexi.  Scripting is provided through the cross-language
    script bridge <a href="http://dot.kde.org/1152490640/">Kross</a>,
    which enables KOffice to be scripted in Python, Ruby with possible future
    extensions of Javascript and Java.  With this release, KOffice also introduces
    GUI-less scripting where e.g. spreadsheet documents can be automatically 
    manipulated with scripts to create 
    <a href="http://www.robweir.com/blog/2006/09/odf-twenty-patterns-of-use.html">many new usecases</a>.
</p>

<h2>
  Principal Improvements
</h2>
<p align="justify">
  The principal improvements in KOffice 1.6 over KOffice 1.5 are:
</p>
    <strong>KSpread</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Added scripting with Kross.
        </div>
      </li>
    </ul>
  <p />
    <strong>Kexi (Desktop Database application)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Further enhancements and optimizations in the database connectivity library.
        </div>
      </li>
      <li>
        <div align="justify">
      Further improvements in Table Designer: "Image" data type,
      undo and redo commands,
      support for default values,
      and tooltips.
        </div>
      </li>
      <li>
        <div align="justify">
       Improvements in Query Designer: 
       defining sort order for column in both visual and SQL view
        </div>
      </li>
      <li>
        <div align="justify">
        Data-aware &quot;Image Box&quot; widget in Forms and Table View,
        major improvements in the Auto Field form widget
        </div>
      </li>
      <li>
        <div align="justify">
        Support for macros
        </div>
      </li>
    </ul>
  <p />
    <strong>Krita (Pixel based image editor)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Support for handling perspective in drawings, including perspective transformation, perspective grid and perspective clone
        </div>
      </li>
      <li>
        <div align="justify">
        Added support for layer masks
        </div>
      </li>
      <li>
        <div align="justify">
        A new magnetic selection tool has been created.
        </div>
      </li>
	
      <li>
        <div align="justify">
        Many new filters have been added: 
        random noise, random pick, lens correction, filters from krita-plugins
        </div>
      </li>
      <li>
        <div align="justify">
        Krita can open PDF files and transform them into a bitmap
        </div>
      </li>
      <li>
        <div align="justify">
        New tool for drawing bezier curves has been added
        </div>
      </li>
    </ul>
  <p />
    <strong>KPlato (Project management tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Added PERT calculation for estimated value based on optimistic, expected and pessimistic value
        </div>
      </li>
      <li>
        <div align="justify">
        The distribution used is dependent on the setting of Risk.
        </div>
      </li>
    </ul>
  <p />
    <strong>KFormula (Mathematical formula editor)</strong>
    <ul type="disc">
      <li>
        <div align="justify">
        OpenDocument and MathML are now native format with OpenDocument as the default
        </div>
      </li>
      <li>
        <div align="justify">
        The list of supported elements: mi, mn, mtext, ms, mstyle, msqrt, mroot, mfrac, mrow (others might work)
        </div>
      </li>
      <li>
        <div align="justify">
        The list of supported styles: mathcolor, mathbackground, mathsize, mathvariant
        </div>
      </li>
    </ul>
  <p />
    <strong>Kugar (Reporting tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Kugar's templates are now visible in the startup dialog.
        </div>
      </li>
    </ul>
  <p />
<p align="justify">
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.6.php">list
  of changes</a> is available at the KOffice <a href="http://www.koffice.org/">web site</a>.
</p>

<h2>About KOffice</h2>
  <p align="justify">
    KOffice is an integrated office suite, today mostly for KDE, which utilizes
    free and open standards for its document formats, component communication and
    component embedding.
  </p>
  <p align="justify">
    This release includes:
</p>
<ul>
  <li>a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  </li>
  <li>a spreadsheet application
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  </li>
  <li>a presentation application
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  </li>
  <li>a flowchart application
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  </li>
  <li>an integrated database application
    (<a href="http://www.koffice.org/kexi/">Kexi</a>);
  </li>
  <li>a new project management application
    (<a href="http://www.koffice.org/kplato/">KPlato</a>).
  </li>
  <li>a pixel based image editing and paint application
    (<a href="http://www.koffice.org/krita/">Krita</a>);
  </li>
  <li>a vector-drawing application
    (<a href="http://www.koffice.org/karbon/">Karbon14</a>).
  </li>
</ul>
<p>
  Additionally, KOffice includes robust embeddable objects:
</p>
<ul>
  <li>business quality reporting software
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>)
  </li>
  <li>full-featured charting engine
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  </li>
  <li>mathematical formula handling
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  </li>
</ul>
<p>
  as well as a built-in thesaurus (KThesaurus)
  and support for many different 
    <a href="http://www.koffice.org/filters/1.6/">file formats</a>.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.6/">http and ftp</a> mirrors.
</p>
<hr />

<h3>
  Corporate KOffice Sponsors
</h3>
<p align="justify">
  Besides the valuable and excellent efforts by the
  <a href="http://www.koffice.org/people.php">KOffice developers</a>
  themselves, significant support for KOffice development has been provided by
  <a href="http://www.mandriva.com/">Mandriva</a> (which sponsors
  KOffice developer Laurent Montel),
  <a href="http://www.trolltech.com/">Trolltech</a> (which sponsors
  KOffice developer David Faure),
  <a href="http://www.thekompany.com/">theKompany.com</a> (which has
  contributed Kivio and Kugar to KOffice),
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (which has contributed KChart to KOffice),
  <a href="http://www.openoffice.com.pl/en/">OpenOffice Polska</a> which 
    employs Kexi developer Jaros&#322;aw Staniek and sponsored the
    <a href="http://wiki.kde.org/tiki-index.php?page=KDElibs+for+win32">KDElibs for win32</a>
    project which enabled the porting of KOffice applications to MS Windows,
  <a href="http://code.google.com">Google</a> which through the "Summer of Code" program supports Alfredo Beaumont to work on OpenDocument and MathML support for KFormula and Emmanuele Tamponi to work on a framework for curves in Krita.
  In addition, <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support/">donate</a>),
  provide significant support for KDE and KOffice. Thanks!
</p>

<p align="justify">
  <font size="2">
  <em>Press Release</em>:  Written by Inge Wallin
<!--  [Translated into _____________ by ______________ .] -->
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.

  Linux is a registered trademark of Linus Torvalds.

  Trolltech and Qt are trademarks of Trolltech AS.

  UNIX is a registered trademark of The Open Group.

  All other trademarks and copyrights referred to in this announcement are
  the property of their respective owners.
  </font>
</p>
<hr />


<h2>Press Contacts</h2>
<table cellpadding="10"><tr valign="top">
<td>

<b>Africa</b><br />
Uwe Thiem<br />
P.P.Box 30955<br />
Windhoek<br />
Namibia<br />
Phone: +264 - 61 - 24 92 49<br />
<a href="&#109;a&#105;l&#116;o:&#105;&#110;fo-&#0097;&#0102;r&#105;&#99;a&#x40;k&#100;e.&#111;&#x72;g">info-africa kde.org</a><br />
</td>

<td>
<b>Asia and India</b><br />
     Pradeepto Bhattacharya<br/>
     A-4 Sonal Coop. Hsg. Society<br/>
     Plot-4, Sector-3,<br/>
     New Panvel,<br/>
     Maharashtra.<br/>
     India 410206<br/>
     Phone : +91-9821033168<br/>
<a href="ma&#0105;&#108;to&#00058;inf&#00111;-&#97;&#115;&#x69;a&#x40;kde.or&#x67;">info-asia kde.org</a>
</td>
</tr>
<tr valign="top">

<td>
<b>Europe</b><br />
Inge Wallin<br />
Adamstorpsvägen 3<br />
SE-590 71 Ljungsbro<br />
Sweden<br />
Phone: +46-13-290853<br />
Fax: +46-13-214700<br />
<a href="m&#x61;il&#0116;o&#x3a;i&#x6e;fo-&#00101;&#00117;rope&#64;k&#x64;&#x65;&#00046;o&#x72;&#00103;">info-europe kde.org</a>
</td>

<td>
<b>North America</b><br />
George Staikos <br />
889 Bay St. #205 <br />
Toronto, ON, M5S 3K5 <br />
Canada<br />
Phone: (416)-925-4030 <br />
<a href="&#109;ai&#x6c;&#x74;&#x6f;&#0058;i&#x6e;&#0102;o&#0045;no&#0114;t&#104;&#0097;m&#x65;&#x72;i&#x63;&#x61;&#x40;k&#x64;e&#46;&#0111;&#x72;&#x67;">info-northamerica kde.org</a><br />
</td>

</tr>

<tr>
<td>
<b>Oceania</b><br />
Hamish Rodda<br />
11 Eucalyptus Road<br />
Eltham VIC 3095<br />
Australia<br />
Phone: (+61)402 346684<br />
<a href="&#109;&#x61;&#x69;&#x6c;&#x74;o:&#105;&#x6e;fo&#45;&#x6f;c&#101;&#x61;&#110;ia&#064;kde&#00046;org">info-oceania kde.org</a><br />
</td>

<td>
<b>South America</b><br />
Helio Chissini de Castro<br />
R. Jos&eacute; de Alencar 120, apto 1906<br />
Curitiba, PR 80050-240<br />
Brazil<br />
Phone: +55(41)262-0782 / +55(41)360-2670<br />
<a href="ma&#105;&#x6c;&#116;&#x6f;&#x3a;&#0105;&#110;&#102;&#x6f;-&#00115;&#111;ut&#104;&#97;&#x6d;e&#0114;&#x69;ca&#0064;&#107;d&#x65;.&#111;r&#x67;">info-southamerica kde.org</a><br />
</td>

</tr></table>

<?php
  include("footer.inc");
?>
