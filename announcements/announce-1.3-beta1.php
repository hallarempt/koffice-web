<?php
  $page_title ='KOffice 1.3 Beta1 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE APRIL 23, 2003<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Beta Test Release of Major Enhancements to Free Integrated Office Suite
</h2>
<p align="justify">
  <strong>Hyphenation, New Database Client, Scriptability and Filters Highlight KOffice
  Beta Release for Linux and Other UNIXes</strong></p>
  <p align="justify">April 23, 2003 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of
  <a href="http://www.koffice.org/">KOffice</a> 1.3beta1, the first preview
  release for KOffice 1.3,
  <a href="http://developer.kde.org/development-versions/koffice-1.3-release-plan.html">scheduled</a>
  for release this September.
  KOffice is an integrated office suite for KDE which utilizes free and
  open standards for its document formats, component communication and
  component embedding.
  This release is principally a public testing and developer solicitation
  release (more help is welcome!).
</p>
<p align="justify">
  This release, which is available in
  <a href="http://i18n.kde.org/teams/index.php?action=distributed"><strong>40</strong></a>
  languages, includes
  a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  a presentation application
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  a spreadsheet application
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  a flowchart application
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  business quality reporting software
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>);
  an integrated database client (<em>alpha</em>)
    (<a href="http://www.koffice.org/kexi/">Kexi</a>);
  and a vector-drawing application (<em>alpha</em>)
    (<a href="http://www.koffice.org/karbon/">Karbon14</a>).
  Additionally, KOffice includes robust embeddable charts
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  and formulas
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  as well as a built-in thesaurus (KThesaurus)
  and numerous import and export
    <a href="http://www.koffice.org/filters/">filters</a>.
</p>
<p align="justify">
  KOffice 1.3beta1 complements the release of
  <a href="http://www.kde.org/announcements/announce-3.1.1.php">KDE 3.1.1</a>
  last month.  KDE is a powerful and easy-to-use Internet-enabled
  desktop for Linux and other UNIXes, and together with KOffice constitutes the
  only Open Source project to provide a complete desktop and productivity
  environment for Linux/UNIX.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2.90/src/">http</a>
  or <a href="http://www.kde.org/mirrors/ftp.php">ftp</a> mirrors.
<!--
  and can also be obtained on
  <a href="http://www.kde.org/cdrom.html">CD-ROM</a>.
-->
</p>
<h4>
  Principal Improvements
</h4>
<p align="justify">
  The principal improvements over KOffice 1.2 are:
</p>
    <u>General</u>.
    <ul type="disc">
      <li>
        <div align="justify">
        <em>Integrated Database Environment</em>.
        A new database frontend, Kexi, has joined the KOffice suite.
        It can be used with various database backends, though
        currently only <a href="http://www.mysql.com/">MySQL</a>
        is recommended and CQL++ has some support.
        Kexi integrates smoothly into both KOffice and KDE.
        For example, it supports report generation using the
        Kugar component, and can be used as a data provider
        for mail merges in KWord.  Kexi also provides a
        scripting engine based on Qt's QSA as well as
        user-defined forms for data input and presentation.
        </div>
      </li>
      <li>
        <div align="justify">
        <em>Hyphenation</em>.
        KWord and KPresenter now support automatic hyphenation.
        </div>
      </li>
    </ul>
  <p />
    <u>KWord (Word Processor)</u>.
    <ul type="disc">
      <li>
        <div align="justify">
        a new MS Word import filter;
        </div>
      </li>
      <li>
        <div align="justify">
        support for pictures, tables and footnotes in the
        RTF export filter (which has been re-written);
        </div>
      </li>
      <li>
        <div align="justify">
        support for pictures and footnotes in the
        LaTeX export filter;
        </div>
      </li>
      <li>
        <div align="justify">
        a new MS Write export filter and a re-written
        MS Write import filter;
        </div>
      </li>
      <li>
        <div align="justify">
        support for bookmarks;
        </div>
      </li>
      <li>
        <div align="justify">
        text sorting;
        </div>
      </li>
      <li>
        <div align="justify">
        new character attributes, such as word-by-word
        underlining and relative font sizes; and
        </div>
      </li>
      <li>
        <div align="justify">
        improved spell checking (selection only; ignore
        words; etc.).
        </div>
      </li>
    </ul>
  <p />
    <u>KPresenter (Presentation Tool)</u>.
    <ul type="disc">
      <li>
        <div align="justify">
        an improved slide transition dialog, featuring a
        preview of the slide effect;
        </div>
      </li>
      <li>
        <div align="justify">
        drawing images with alpha channels;
        </div>
      </li>
      <li>
        <div align="justify">
        customizable printing of slide notes; and
        </div>
      </li>
      <li>
        <div align="justify">
        improved HTML export as well as usability
        enhancements to the HTML export wizard.
        </div>
      </li>
    </ul>
  <p />
    <u>KSpread (Spreadsheet)</u>.
    <ul type="disc">
      <li>
        <div align="justify">
        over 100 new formulas (date/time, math, statistical,
        financial and more);
        </div>
      </li>
      <li>
        <div align="justify">
        an OpenCalc import and export filter;
        </div>
      </li>
      <li>
        <div align="justify">
        a new LaTeX export filter;
        </div>
      </li>
      <li>
        <div align="justify">
        enhancements to the CSV import and export options;
        </div>
      </li>
      <li>
        <div align="justify">
        new date and time formats;
        </div>
      </li>
      <li>
        <div align="justify">
        a subtotal dialog and formula; and
        </div>
      </li>
      <li>
        <div align="justify">
        default cell styles.
        </div>
      </li>
    </ul>
  <p />
    <u>Kugar / Kugar Designer (Business Reporting)</u>.
    <ul type="disc">
      <li>
        <div align="justify">
        redesigned to better integrate into the
        KOffice environment;
        </div>
      </li>
      <li>
        <div align="justify">
        enhanced handling of items in the designer
        (cut / copy / paste; undo / redo; manual
        z-ordering; etc.);
        </div>
      </li>
      <li>
        <div align="justify">
        support for printing reports from the
        command line / scripts; and
        </div>
      </li>
      <li>
        <div align="justify">
        a DCOP interface.
        </div>
      </li>
    </ul>
<p align="justify">
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.3beta1.php">list
  of changes</a> is available at the KOffice <a href="http://www.koffice.org/">web site</a>.
</p>
<h4>
  Installing KOffice 1.3beta1 Binary Packages
</h4>
<p align="justify">
  <u>Binary Packages</u>.
  Some Linux/UNIX OS vendors have kindly provided binary packages of
  KOffice 1.3 beta1 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/unstable/koffice-1.2.90/">http</a> or
  <a href="http://www.kde.org/mirrors/ftp.php">ftp</a> mirrors.
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
  <u>Library Requirements / Options</u>.
  The library requirements for a particular binary package vary with the
  system on which the package was compiled.  Please bear in mind that
  some binary packages may require a newer version of Qt and other libraries
  than was shipped with the system (e.g., LinuxDistro X.Y
  may have shipped with Qt-3.0.0 but the packages below may require
  Qt-3.0.3).  For general library requirements for KDE, please see the text at
  <a href="#source_code-library_requirements">Source Code - Library
  Requirements</a> below.
</p>
<p align="justify">
  <a name="package_locations"><u>Package Locations</u></a>.
  At the time of this release, pre-compiled packages are available for:
</p>

<ul>
  <li><a href="http://download.kde.org/unstable/koffice-1.2.90/SuSE/">SuSE Linux</a></li>
  <li><a href="http://download.kde.org/unstable/koffice-1.2.90/contrib/Slackware/">Slackware Linux</a></li>
</ul>

<p align="justify">
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages will become available over the
coming days and weeks.
</p>
<h4>
  Compiling KOffice 1.3beta1
</h4>
<p align="justify">
  <a name="source_code-library_requirements"></a><u>Library
  Requirements</u>.
  KOffice 1.3beta1 requires the following libraries:
</p>
<ul>
  <li>
    <div align="justify">
    kdelibs 3.1, which can be downloaded following the
    <a href="http://www.kde.org/info/3.1.1.php">instructions</a>
    at the KDE website (for more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.1.1.php">KDE
    3.1.1 press release</a>);
    </div>
  </li>
  <li>
    <div align="justify">
    Qt-3.1, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.1.0.tar.gz">qt-x11-free-3.1.0.tar.gz</a>
    (<a href="ftp://ftp.trolltech.com/qt/source/qt-x11-free-3.1.2.tar.gz">qt-x11-free-3.1.2.tar.gz</a>
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
  <u>Compiler Requirements</u>.
  Please note that some components of
  KOffice 1.3beta1 (such as the Quattro Pro import filter
  and <a href="http://www.koffice.org/kchart/">KChart</a>) will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p align="justify">
  <a name="source_code"></a><u>Source Code</u>.
  The complete source code for KOffice 1.3beta1 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2.90/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  <!--Additionally, source rpms are available for the following distributions:-->
</p>
<!-- INCLUDE PHP FILE HERE -->
<p align="justify">
  <u>Further Information</u>.
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
  <a href="http://www.thekompany.com/">theKompany.com</a> (which has
  contributed Kivio and Kugar to KOffice)
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (which partially sponsors KOffice developer
  David Faure and has contributed KChart to KOffice) and <a href="http://www.suse.com">SuSE AG</a>
  which employs Luk&aacute;&scaron; Tinkl, the current KOffice release manager.
  In addition,
  the members of the <a href="http://www.kdeleague.org/">KDE League</a>,
  as well as <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support/">donate</a>),
  provide significant support for KDE and KOffice.  Thanks!
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
  <a href="http://www.kde.org/screenshots/kde310shots.php">screenshots</a>,
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
  <em>Release Coordinator</em>:  Thanks to Luk&aacute;&scaron;
  Tinkl for his excellent services as release coordinator.
  </font>
</p>
<p align="justify">
  <font size="2">
  <em>Press Release</em>:  Written by <a href="mailto:pour AT kdeleague DOT org">Andreas
  Pour</a> for the <a href="http://www.kdeleague.org/">KDE League</a>, with the
  invaluable assistance of numerous gifted volunteers from the KDE Project.
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
<table border="0" cellpadding="8" cellspacing="0">
  <tr>
    <th colspan="2" align="left">
      Press Contacts:
    </th>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      United&nbsp;States:
    </td>
    <td nowrap="nowrap">
      Andreas Pour<br />
      KDE League, Inc.<br />
      pour AT kdeleague DOT org<br />
      (1) 917 312 3122
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Europe (French and English):
    </td>
    <td nowrap="nowrap">
      David Faure<br />
      faure@kde.org<br />
      (33) 4 3250 1445
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Europe (German and English):
    </td>
    <td nowrap="nowrap">
      Ralf Nolden<br />
      nolden@kde.org<br />
      (49) 2421 502758
    </td>
  </tr>
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Europe (English):
    </td>
    <td nowrap="nowrap">
      Jono Bacon<br />
      jono@kde.org
    </td>
  </tr>
</table>

<?php
  include("footer.inc");
?>
