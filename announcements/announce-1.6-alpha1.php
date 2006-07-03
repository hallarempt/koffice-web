<?php
  $page_title ='KOffice 1.6 Alpha1 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<h1>THIS PAGE IS UNDER EMBARGO ! PLEASE DO NOT PUBLISH IT !</h1>

<p align="justify">
  DATELINE JULY 7, 2006<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Alpha Release of Major Enhancements to Free Integrated Office Suite
</h2>
<p align="justify">
  <p align="justify">July 7, 2006 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of
  <a href="http://www.koffice.org/">KOffice</a> 1.6-alpha1, the first preview
  release for KOffice 1.6,
  <a href="http://developer.kde.org/development-versions/koffice-1.6-release-plan.html">scheduled</a>
  for release this October.</p>

  <p align="justify">
  KOffice is an integrated office suite for KDE which utilizes free and
  open standards for its document formats, component communication and
  component embedding.
  This release is principally a public testing and developer solicitation
  release, and his definitively not intented for anything but testing.
  Help is welcome!
</p>
  <p align="justify">
  The goal of this release is to get feedback for the feature allready available,
  wether it is bug, enhencement or new idea, we will need that to make sure the 1.6
  release reach a high quality level and matches the need of our users.
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
    <a href="http://www.koffice.org/filters/1.5/">file formats</a>.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.6-alpha1/src/">http and ftp</a> mirrors.
</p>
<h4>
  Principal Improvements
</h4>
<p align="justify">
  The principal improvements over KOffice 1.5 are:
</p>
    <strong>Kexi (Database application)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Further enhancements in the database connectivity library.
        </div>
      </li>
      <li>
        <div align="justify">
        Further improvements in Table Designer (schema altering without removing table contents, "Image" data type)
        </div>
      </li>
      <li>
        <div align="justify">
        Data aware combo boxes (drop down lists)
        </div>
      </li>
      <li>
        <div align="justify">
        Further improvements in Query Designer
        </div>
      </li>
      <li>
        <div align="justify">
        Make "Image Box" widget Data-aware in Kexi Forms
        </div>
      </li>
      <li>
        <div align="justify">
        Kexi supports now macros
        </div>
      </li>
    </ul>
  <p />
    <strong>Krita (Pixel based graphics editor)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Krita is now able to open huge PNG files (with a size of at least 30000 by 30000, note it only works yet on 64bits architecture, on 32bits the maximum size of a file is smaller).
        </div>
      </li>
      <li>
        <div align="justify">
        New filters has been added (random noise, random pick, lens correction, filters from krita-plugins...)
        </div>
      </li>
      <li>
        <div align="justify">
        Krita can open PDF files and transform them into a bitmap
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
    <strong>KPlato (Project management tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        Added PERT calculation for estimated value based on optimistic, expected and pessimistic value.
        </div>
      </li>
      <li>
        <div align="justify">
        The distribution used is dependent on the setting of Risk.
        </div>
      </li>
    </ul>
  <p />
    <strong>KFormula (Mathematical formula editor)</strong>'s new features:
    <ul type="disc">
      <li>
        <div align="justify">
        OpenDocument and MathML are now native format. And OpenDocument is now the default file format
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
    KForumal 1.6-alpha1 has know problems with operators, scripts, tables and content notation, and it has visual glitches with styled elements. And it has problems when saving (if you load a file, and save with another name, files 
won't match).
  <p />
<p align="justify">
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.6alpha1.php">list
  of changes</a> is available at the KOffice <a href="http://www.koffice.org/">web site</a>.
</p>
<a name="compiling"></a><h4>
  Compiling KOffice 1.6-alpha1
</h4>
<p align="justify">
  <a name="source_code-library_requirements"></a><strong>Library
  Requirements</strong>:
  KOffice 1.6-alpha1 requires the following libraries:
</p>
<ul>
  <li>
    <div align="justify">
    kdelibs 3.3, 3.4 or 3.5, which can be downloaded following the
    <a href="http://www.kde.org/info/3.5.php">instructions</a>
    at the KDE website (for more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.5.php">KDE
    3.5 press release</a>);
    </div>
  </li>
  <li>
    <div align="justify">
    Qt-3.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.3.0.tar.gz">qt-x11-free-3.3.0.tar.gz</a>
    (<a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.3.5.tar.gz">qt-x11-free-3.3.5.tar.gz</a>
    is recommended);
    and
    </div>
  </li>
  <li>
    <div align="justify">
    for reading help pages and other KOffice documentation,
    <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
    <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.
    </div>
  </li>
</ul>
<p align="justify">
  <strong>Compiler Requirements</strong>:
  Please note that KOffice 1.6-alpha1 will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><strong>Source Code</strong>:
  The complete source code for KOffice 1.6-alpha1 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.6-alpha1/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  <!--Additionally, source rpms are available for the following distributions:-->
</p>
<!-- INCLUDE PHP FILE HERE -->
<p align="justify">
  <strong>Further Information</strong>:
  For further instructions on compiling and installing KOffice, please consult
  the KOffice <a href="http://www.koffice.org/download/source.php">installation
  instructions</a>.  For
  problems with SRPMs, please contact the person listed in the applicable
  .spec file.
</p>
<h4>
  Corporate KOffice Sponsors
</h4>
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
  <a href="http://www.openoffice.com.pl/en/">OpenOffice Polska</a> which employs Kexi
    developer Jaros&#322;aw Staniek and sponsored
    <a href="http://wiki.kde.org/tiki-index.php?page=KDElibs+for+win32">KDElibs for win32</a>
    project which enabled porting KOffice applications to MS Windows,
  <a href="http://code.google.com">Google</a> which through the "Summer of Code" program supports Alfredo Beaumont to work on OpenDocument and MathML support for kformula.
  In addition, <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support/">donate</a>),
  provide significant support for KDE and KOffice. Thanks!
</p>
<h4>
  About KOffice/KDE
</h4>
<p align="justify">
  KOffice is part of the KDE Project.
  KDE is an independent project of hundreds of developers, translators,
  artists and professionals worldwide collaborating over the Internet
  to create and freely distribute a sophisticated, customizable and stable
  desktop and office environment employing a flexible, component-based,
  network-transparent architecture and offering an outstanding development
  platform.  KDE provides a stable, mature desktop, a full, component-based
  office suite (<a href="http://www.koffice.org/">KOffice</a>), a large
  set of networking and administration tools and utilities, and an
  efficient, intuitive development environment featuring the excellent IDE
  <a href="http://www.kdevelop.org/">KDevelop</a>.  KDE is working proof
  that the Open Source "Bazaar-style" software development model can yield
  first-rate technologies on par with and superior to even the most complex
  commercial software.
</p>
<p align="justify">
  Please visit the KDE family of web sites for the
  <a href="http://www.kde.org/info/faq.php">KDE FAQ</a>,
  <a href="http://www.kde.org/announcements/visualguide-3.5.php">screenshots</a>,
  <a href="http://www.koffice.org/">KOffice information</a> and
  <a href="http://developer.kde.org/documentation/">developer
  information</a>.
  Much more <a href="http://www.kde.org/whatiskde/">information</a>
  about KDE is available from KDE's
  <a href="http://www.kde.org/family/">family of web sites</a>.
</p>
<hr />
<p align="justify">
  <font size="2">
  <em>Press Release</em>:  Written by <a href="mailto:cyb AT lepi DOT org">Cyrille Berger</a>.
<!--  [Translated into _____________ by ______________ .] -->
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.
  Incorporated.

  Adobe Illustrator and PostScript are registered trademarks of Adobe Systems

  dBASE is a registered trademark of dBASE Inc.

  Corel, Quattro Pro and WordPerfect are registered trademarks of Corel
  Corporation or Corel Corporation Limited.

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
<b>Asia</b><br />
Sirtaj S. Kang <br />
C-324 Defence Colony <br />
New Delhi <br />
India 110024 <br />
Phone: +91-981807-8372 <br />
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
