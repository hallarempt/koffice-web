<?php
  $page_title ='KOffice 1.5 Beta Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE JANUARY 31, 2006<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Beta Release of Major Enhancements to Free Integrated Office Suite
</h2>
<p align="justify">
    <strong>OpenDocument as Default File Format, New Project Planning Tool, 
    Professional Color Support in Krita and New MS Access Import Tool Highlight
    KOffice Beta Release for Linux and Other UNIXes 
    </strong></p> 

  <p align="justify">January 31, 2006 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of
  <a href="http://www.koffice.org/">KOffice</a> 1.5beta, the first preview
  release for KOffice 1.5,
  <a href="http://developer.kde.org/development-versions/koffice-1.5-release-plan.html">scheduled</a>
  for release this March.</p>

  <p align="justify">
  KOffice is an integrated office suite for KDE which utilizes free and
  open standards for its document formats, component communication and
  component embedding.
  This release is principally a public testing and developer solicitation
  release. More help is welcome!
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
  Additionally, KOffice includes robust embeddable charts
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
  and numerous import and export
    <a href="http://www.koffice.org/filters/">filters</a>.
</p>
<p align="justify">
  KOffice 1.5beta complements the release of
  <a href="http://www.kde.org/announcements/announce-3.5.php">KDE 3.5</a>
  last year.  KDE is a powerful and easy-to-use Internet-enabled
  desktop for Linux and other UNIXes, and together with KOffice constitutes the
  only Free Software project to provide a complete desktop and productivity
  environment for Linux/UNIX.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.4-beta1/src/">http and ftp</a> mirrors
  and can also be obtained as a
  <a href="http://ktown.kde.org/~binner/klax/koffice.html">x86 Live CD</a>.
</p>
<h4>
  Principal Improvements
</h4>
<p align="justify">
  The principal improvements over KOffice 1.4 are:
</p>
    <strong>General</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        <strong>OASIS OpenDocument as the Default File Format</strong>:

<p>
KOffice now uses OASIS OpenDocument as the default file format for the productivity applications KWord, KSpread, and KPresenter.  In the final 1.5 release, the charting application KChart will also use OpenDocument as the default format.</p>
<p>
The spreading of the OpenDocument file format is widely regarded one of the most important developments in the whole computer industry right now. It will give users world-wide the possibility to control their own documents and also ensure that all documents will always be possible to read at any time in the future.
</p>
<p>
KOffice was the first office suite that announced support for OpenDocument and now the second to announce it as the default file format after OpenOffice.org.  This makes KOffice a member of a very select group and will lead to new deployment opportunities.  Great care has been taken to insure interoperability with other office software that also uses OpenDocument.
</p>
        </div>
      </li>
      <li>
        <div align="justify">
        <strong>Project Management Application KPlato</strong>:
<p>
KOffice 1.5 is the first official release to include KPlato. KPlato is a project management application that lets the user control project schedules and resource use.
</p>
<p>
FIXME: Write much more here
</p>
<p>
For a list of features supported by KPlato, see
 <a href="http://www.koffice.org/announcements/changelog-1.5-beta.php">the changelog</a>.
</p>
        </div>
      </li>
      <li>
        <div align="justify">
        <strong>OASIS OpenDocument support</strong>:
Most KOffice applications now support the <a href="http://www.oasis-open.org/committees/tc_home.php?wg_abbrev=office">OASIS OpenDocument</a> file format. KOffice developer David Faure is part of
the OASIS technical committee and was able to participate in the discussions that
led to the creation of this standard file format.
        </div>
      </li>
    </ul>
  <p />
    <strong>KWord (Word Processor)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         rewritten spell-checking support which is much faster and solves many problems
         (e.g. KOffice-1.3's right-click-menu sometimes hanging); with aspell,
         spell-checking is available in more than 70 languages.
        </div>
      </li>
      <li>
        <div align="justify">
         word completion with tooltip;
        </div>
      </li>
      <li>
        <div align="justify">
         a new WordPerfect import filter, based on an external library, libwpd;
        </div>
      </li>
    </ul>
  <p />
    <strong>KPresenter (Presentation Tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        a master page concept;
        </div>
      </li>
      <li>
        <div align="justify">
        reworked dialogs (property editor, object and page effects); and
        </div>
      </li>
      <li>
        <div align="justify">
        customizable slide order and selection for slide show.
        </div>
      </li>
    </ul>
  <p />
    <strong>KSpread (Spreadsheet)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         Support for right-to-left spreadsheets;
        </div>
      </li>
      <li>
        <div align="justify">
        much improved value parsing and formatting;
        </div>
      </li>
      <li>
        <div align="justify">
        a calendar plug-in;
        </div>
      </li>
      <li>
        <div align="justify">
        additional options for cell validity, 5 new functions, and
        </div>
      </li>
      <li>
        <div align="justify">
        a new Microsoft Excel import filter.
        </div>
      </li>
    </ul>
  <p />
    <strong>KChart (Graph and chart drawing tool)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
        New, much improved, data editor;
        </div>
      </li>
      <li>
        <div align="justify">
        linear or logarithmic scale;
        </div>
      </li>
      <li>
        <div align="justify">
        printing support;
        </div>
      </li>
      <li>
        <div align="justify">
        support for data as rows or columns; and
        </div>
      </li>
      <li>
        <div align="justify">
        export to PNG and SVG formats.
        </div>
      </li>
    </ul>
  <p />
    <strong>Kivio (Flow-charting application)</strong>:
    <ul type="disc">
      <li>
        <div align="justify">
         New stencils: Nassi Schneiderman;
        </div>
      </li>
      <li>
        <div align="justify">
        a docker for adding stencils to the document;
        </div>
      </li>
      <li>
        <div align="justify">
        a tool for adding connector targets to stencils; and
        </div>
      </li>
      <li>
        <div align="justify">
        a poly-line connector.
        </div>
      </li>
    </ul>
<p align="justify">
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.4beta1.php">list
  of changes</a> is available at the KOffice <a href="http://www.koffice.org/">web site</a>.
</p>
<h4>
  Installing KOffice 1.4beta1 Binary Packages
</h4>
<p align="justify">
  <strong>Binary Packages</strong>:
  Some Linux/UNIX OS vendors have kindly provided binary packages of
  KOffice 1.4 beta1 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/unstable/koffice-1.4-beta1/">http and ftp</a> mirrors.
  Additional binary packages, as well as updates to the packages now
  available, may become available over the coming weeks.
</p>
<p align="justify">
  Please note that the KDE Project makes these packages available from the
  KDE web site as a convenience to KDE users.  The KDE Project is not
  responsible for these packages as they are provided by third
  parties - typically, but not always, the distributor of the relevant
  distribution - using tools, compilers, library versions and quality
  assurance procedures over which KDE exercises no control. If you
  cannot find a binary package for your OS, or you are displeased with
  the quality of binary packages available for your system, please read
  the <a href="http://www.kde.org/download/packagepolicy.php">KDE Binary Package
  Policy</a> and/or contact your OS vendor.
</p>
<p align="justify">
  <strong>Library Requirements / Options</strong>:
  The library requirements for a particular binary package vary with the
  system on which the package was compiled.  Please bear in mind that
  some binary packages may require a newer version of Qt and other libraries
  than was shipped with the system (e.g., LinuxDistro X.Y
  may have shipped with Qt-3.3.0 but the packages below may require
  Qt-3.3.2).  For general library requirements for KDE, please see the text at
  <a href="#source_code-library_requirements">Source Code - Library
  Requirements</a> below.
</p>
<p align="justify">
  <a name="package_locations"><strong>Package Locations</strong></a>:
  At the time of this release, pre-compiled packages are available for:
</p>

<ul>
  <li><a href="http://download.kde.org/unstable/koffice-1.4-beta1/Mandriva/">Mandriva Linux 10.2</a></li>
  <li><a href="http://download.kde.org/unstable/koffice-1.4-beta1/SuSE/">SuSE Linux 9.2 and 9.3</a></li>
  <li><a href="http://download.kde.org/unstable/koffice-1.4-beta1/kubuntu/">Kubuntu</a></li>
  <li><a href="http://download.kde.org/unstable/koffice-1.4-beta1/contrib/Slackware/">Slackware Linux 10.1</a></li>
</ul>

<p align="justify">
Please check the servers periodically for pre-compiled packages for other
distributions. More binary packages might become available over the
coming days and weeks.
</p>
<h4>
  Compiling KOffice 1.4beta1
</h4>
<p align="justify">
  <a name="source_code-library_requirements"></a><strong>Library
  Requirements</strong>:
  KOffice 1.4beta1 requires the following libraries:
</p>
<ul>
  <li>
    <div align="justify">
    kdelibs 3.3 or 3.4, which can be downloaded following the
    <a href="http://www.kde.org/info/3.4.php">instructions</a>
    at the KDE website (for more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.4.php">KDE
    3.4 press release</a>);
    </div>
  </li>
  <li>
    <div align="justify">
    Qt-3.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.3.0.tar.gz">qt-x11-free-3.3.0.tar.gz</a>
    (<a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.3.4.tar.gz">qt-x11-free-3.3.4.tar.gz</a>
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
  Please note that KOffice 1.4beta1 will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><strong>Source Code</strong>:
  The complete source code for KOffice 1.4beta1 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.4-beta1/src/">http</a>
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
  <a href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
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
    project which enabled porting KOffice applications to MS Windows.
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
  <a href="http://www.kde.org/screenshots/kde330shots.php">screenshots</a>,
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
  <em>Press Release</em>:  Written by <a href="mailto:faure AT kde DOT org">David
  Faure</a>.
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
Matthias Kalle Dalheimer<br />
Rysktorp<br />
S-683 92 Hagfors<br />
Sweden<br />
Phone: +46-563-540023<br />
Fax: +46-563-540028<br />
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
