<?php
  $page_title ='KOffice 1.2 Beta2 Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  DATELINE JUNE 26, 2002<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Ships Second Beta Test Release of Free Integrated Office Suite
</h2>
<p> 
  <strong>
  KWord Footnotes, KSpread Database Connectivity
  Highlight KOffice Beta Release for Linux and Other UNIXes</strong>
</p>
<p>
  June 26, 2002 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  immediate release of
  <a href="http://www.koffice.org/">KOffice</a> 1.2beta2, the second
  beta preview release for KOffice 1.2,
  <a href="http://developer.kde.org/development-versions/koffice-1.2-release-plan.html">scheduled</a> for release this August.
  KOffice is an integrated office suite for KDE, the leading desktop for
  Linux.  KOffice utilizes free and open standards for its document formats,
  component communication and component embedding.
  This release is principally a public testing and developer solicitation
  release (more help is welcome!).
</p>
<p>
  This release, which is available in
  <a href="http://i18n.kde.org/teams/distributed.html"><strong>56</strong></a>
  languages, includes
  a frame-based, full-featured word processor
    (<a href="http://www.koffice.org/kword/">KWord</a>);
  a presentation application;
    (<a href="http://www.koffice.org/kpresenter/">KPresenter</a>);
  a spreadsheet application;
    (<a href="http://www.koffice.org/kspread/">KSpread</a>);
  a flowchart application; 
    (<a href="http://www.thekompany.com/projects/kivio/">Kivio</a>);
  business quality reporting software;
    (<a href="http://www.thekompany.com/projects/kugar/">Kugar</a>);
  and two vector-drawing applications (<em>alpha</em>)
    (<a href="http://www.koffice.org/kontour/">Kontour</a> and
     <a href="http://www.koffice.org/karbon/">Karbon14</a>).
  Additionally, KOffice includes robust embeddable charts
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  and formulas
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  as well as a built-in thesaurus (KThesaurus)
  and numerous import and export
    <a href="http://www.koffice.org/filters/">filters</a>.
</p>
<p>
  KOffice 1.2beta2 complements the release of
  <a href="http://www.kde.org/announcements/announce-3.0.1.html">KDE 3.01,</a>
  last month.  KDE is an international, powerful and easy-to-use
  Internet-enabled desktop for Linux and other UNIXes, and together with
  KOffice constitutes the only Open Source project to provide a complete
  desktop and productivity environment for Linux/UNIX.
</p>
<p>
  "With this release we are starting to build from the mature and stable
  framework we have been building over a long period of time," stated
  <a href="mailto:zander_AT_kde_DOT_org">Thomas Zander</a>, a core KOffice
  developer.  "The effort put into this framework is now really starting to
  pay off, as new features can be added to KOffice components with incredible
  ease.  The maturity and simplicity of the KOffice framework also makes
  this an ideal juncture for new developers to join the most promising office
  suite for UNIX."
</p>
<p>
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
<!--
  and can also be obtained on
  <a href="http://www.kde.org/cdrom.html">CD-ROM</a>.
-->
</p>
<h4>
  Principal Improvements
</h4>
<p>
  The principal improvements over KOffice 1.2beta1 are as follows:
</p>

<h5><a name="text_widget_changelog">Text Widget</a></h5>
<p>
  Both <a href="#kword_changelog">KWord</a> and
  <a href="#kpresenter_changelog">KPresenter</a> share the same text widget.
  Thus, the following improvements apply to both of those components:
</p>

<ul>
  <li>
      The find / replace function now has support for searching
      for formatting text and replace matches with formatted text
      (bold, Times font, etc.).
  </li>
  <li>
      A new "apply auto-correction" feature for applying the auto-correction
      settings (spelling, symbols, etc.) to the entire document, rather than
      just when data is being entered.
      Auto-correction rules can also be changed (e.g., to use a different
      spoken language).
  </li>
  <li>
      The current selection's text and paragraph formatting can now be
      directly saved as a style.
  </li>
</ul>


<h5><a name="kword_changelog">KWord</a></h5>
<ul>
  <li>
      KWord now has footnotes!  Configurable numbering and main frame / footnote
      separator are included.
  </li>
  <li>
      Improved header and footer grouping allows different formats for both
      the first and other pages as well as for the even and odd pages.
  </li>
  <li>
      Paragraphs can be selected by clicking on the left of the text frame.
  </li>
  <li>
      Default tab widths are adjustable.
  </li>
  <li>
      KWord filters have improved.
  </li>
  <li>
      Frames now have their own styles (borders, margins (new!),
      background color,
      etc.).  A new style can be created based on the formatting of the
      selected frame.
  </li>
  <li>
      Tables also have their own styles and templates.  Table styles
      are based on a combination of frame and paragraph styles.
      Table templates are based on a combination of table styles
      (for example, a different style can be applied to the table
      header row, or columns can have alternating colors.)
  </li>
  <li>
      Frame contents, sizes and positions can be "locked" to prevent
      inadvertent changes.
      Frame, table and text / paragraph styles can be imported from other
      documents.
  </li>
  <li>
      Text can be set to flow to the left, right or largest side of a frame.
  </li>
  <li>
      Images can be saved directly to disk.
  </li>
  <li>
      Other KWord documents can be loaded into the current document.
  </li>
  <li>
      Embedded documents and KOffice-1.0 images are handled better.
  </li>
  <li>
      The cursor position is now restored when a document is loaded.
  </li>
</ul>



<h5><a name="kspread_changelog">KSpread</a></h5>
<ul>
  <li>
      KSpread now has templates!
  </li>
  <li>
      Headers and footers can be defined separately for each sheet in the
      workbook.
      A <code>&lt;pages&gt;</code> code can be inserted in the header or footer
      for printing the page number.
  </li>
  <li>
      Data can now be loaded directly from an SQL database or read from a
      text file.
  </li>
  <li>
      Ranges can be defined for printing.
      Selected rows and/or columns can be repeated after page breaks
      (for headings and descriptions).
      The page layout can be set separately for each sheet in the workbook.
  </li>
  <li>
      The range for a named area can now be changed, effectively converting
      such names into variables (cells which reference the named areas will
      reference the new range rather than the range defined when the named
      area was added to the cell).
  </li>
  <li>
      A spreadsheet can now have Multiple views, with each view able to
      select or modify different portions of the same sheet independently.
  </li>
  <li>
      Preliminary zoom support.
  </li>
  <li>
      Formatted data can be pasted from the clipboard. 
  </li>
  <li>
      A new "formula indicator" indicates when a cell contains a formula
      (a small blue rectangle is placed in a corner of the cell).
  </li>
  <li>
      Up to three rows or columns can be sorted together.
      The sorted results can be stored somewhere else to keep the original
      data intact.  The layout / formatting of the data can optionally be
      applied to the new location, and a row header outside the sort range
      may also be copied to the new location.
  </li>
  <li>
      Many new functions and "Goal Seek" have been added.
      And more functions are compatible with the Excel&reg; equivalents.
  </li>
</ul>



<h5><a name="kpresenter_changelog">KPresenter</a></h5>
<ul>
  <li>
      The popular "Snap to Grid" feature is now implemented.
      In addition, holding the <code>Shift</code> key while creating a
      line object snaps to the vertical or horizontal planes.
  </li>
  <li>
      Objects can be aligned vertically.  They can also have a new
      "keep ratio" property.
  </li>
  <li>
      Polyline objects can be flipped.
  </li>
  <li>
      Images (including the background images) can be saved directly to disk.
  </li>
</ul>

<h5><a name="kugar_changelog">Kugar</a></h5>
<ul>
  <li>Kugar comes with a GUI Report Designer.</li>
  <li>Users can add as many detail bands to the report as needed,
      this can be useful if we print report with data, arranged according
      the master-detail relationship.</li>
</ul>


<p>
  A more complete
  <a href="http://www.koffice.org/announcements/changelog-1.2beta2.php">list
  of changes</a> and <a href="http://www.koffice.org/releases/">notes about
  the release</a> are available at the KOffice
  <a href="http://www.koffice.org/">web site</a>.
</p>
<h4>
  Installing KOffice 1.2beta2 Binary Packages
</h4>
<p>
  <u>Binary Packages</u>.
  Some Linux/UNIX OS vendors have kindly provided binary packages of
  KDE 3.0 for some versions of their distribution, and in other cases
  community volunteers have done so.
  Some of these binary packages are available for free download from KDE's
  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/">http</a> or
  <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additional binary packages, as well as updates to the packages now
  available, may become available over the coming weeks.
</p>
<p>
  Please note that the KDE Project makes these packages available from the
  KDE web site as a convenience to KDE users.  The KDE Project is not
  responsible for these packages as they are provided by third
  parties - typically, but not always, the distributor of the relevant
  distribution - using tools, compilers, library versions and quality
  assurance procedures over which KDE exercises no control. If you
  cannot find a binary package for your OS, or you are displeased with
  the quality of binary packages available for your system, please read
  the <a href="http://www.kde.org/packagepolicy.html">KDE Binary Package
  Policy</a> and/or contact your OS vendor.
</p>
<p>
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
<p>
  <a name="package_locations"><u>Package Locations</u></a>.
  At the time of this release, pre-compiled packages are available for:
</p>
<ul>
<!--
  <li><a href="http://www.caldera.com/">Caldera Systems OpenLinux</a> (<a href="http://download.kde.org/unstable/koffice-1.2-beta2/Caldera/OpenLinux-3.1/README">README</a>):
  <ul>
    <li>OpenLinux 3.1:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Caldera/OpenLinux-3.1/RPMS/kde2.2.1/koffice1.2beta2/">Intel i386 - kdelibs 2.2.1</a></li>
  </ul></li>
  <li><a href="http://www.conectiva.com/">Conectiva Linux</a> (<a href="http://download.kde.org/unstable/koffice-1.2-beta2/Conectiva/README">README</a>)
  <ul>
    <li>
      8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Conectiva/CL_8/RPMS/">Intel i386</a>
    </li>
    <li>
      7.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Conectiva/CL_7/RPMS/">Intel i386</a>
    </li>
  </ul>
  </li>
-->
  <li><a href="http://www.mandrakelinux.com/en/">Mandrake Linux</a>
  <ul>
    <li>8.2:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Mandrake/8.2/">Intel i586</a></li>
    <li>8.1:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Mandrake/8.1/">Intel i586</a></li>
    <li>8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Mandrake/8.0/">Intel i586</a></li>
  </ul>
  Download the appropriate translation(s) from the <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Mandrake/noarch/">noarch</a> directory.
  </li>
<!--
  <li><a href="http://www.redhat.com/">RedHat Linux</a>:
  <ul>
    <li>7.2:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/RedHat/7.2/i386/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.2beta2/RedHat/7.2/ia64/">HP/Intel IA-64</a> and <a href="http://download.kde.org/stable/koffice-1.2beta2/RedHat/7.2/alpha/">Compaq Alpha</a> (see also the <a href="http://download.kde.org/stable/koffice-1.2beta2/RedHat/7.2/noarch/">noarch</a> directory)</li>
  </ul></li>
-->
  <li><a href="http://www.suse.com/">SuSE Linux</a>:
  <ul>
    <li>8.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/i386/8.0/">Intel i386</a></li>
    <li>7.3:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/i386/7.3/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.2beta2/SuSE/ppc/7.3/">PowerPC</a> and <a href="http://download.kde.org/stable/koffice-1.2beta2/SuSE/sparc/7.3/">Sun Sparc</a></li>
    <li>7.2:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/i386/7.2/">Intel i386</a></li>
    <li>7.1:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/i386/7.1/">Intel i386</a></li>
    <li>7.0:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/i386/7.0/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.2beta2/SuSE/s390/7.0/">IBM S390</a></li>
  </ul>
  Download the appropriate translation(s) from the <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/noarch/">noarch</a> directory.
</li>
<!--
  <li><a href="http://www.tru64unix.compaq.com/">Tru64 Systems</a> (<a href="http://download.kde.org/unstable/koffice-1.2-beta2/Tru64/README.Tru64">README</a>)
  <ul>
    <li>Tru64 4.0d, e, f and g and 5.x:  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Tru64/">Compaq Alpha</a></li>
  </ul></li>
-->
</ul>
<p>
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages will become available over the
coming days and weeks.
</p>
<h4>
  Compiling KOffice 1.2beta2
</h4>
<p>
  <a name="source_code-library_requirements"></a><u>Library
  Requirements</u>.
  KOffice 1.2beta2 requires the following libraries:
</p>
<ul>
  <li>
    kdelibs 3.0, though kdelibs 3.0.1 is recommend.  Both release can be
    downloaded following the instructions in the respective press releases
    (<a href="http://www.kde.org/announcements/announce-3.0.html#package_locations">3.0</a>,
    <a href="http://www.kde.org/announcements/announce-3.0.1.html">3.0.1</a>)
    at the KDE website.  For more information on these kdelibs releases, please
    see the <a href="http://www.kde.org/announcements/announce-3.0.html">KDE
    3.0 press release</a>.
  </li>
  <li>
    Qt-3.0.3, which is available in source code from Trolltech as
    <a href="ftp://ftp.trolltech.com/qt/source/qt-x11-3.0.3.tar.gz">qt-x11-3.0.3.tar.gz</a>.
    and
  </li>
  <li>
    For reading help pages and other KOffice documentation,
    <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
    <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.
  </li>
</ul>
<p>
  <u>Compiler Requirements</u>.
  Please note that some components of
  KOffice 1.2beta2 (such as the Quattro Pro import filter
  and <a href="http://www.koffice.org/kchart/">KChart</a>) will not
  compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
  such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</p>
<p>
  <a name="source_code"></a><u>Source Code/SRPMs</u>.
  The complete source code for KOffice 1.2beta2 is available for free download
  via one of the KDE
  <a href="http://download.kde.org/unstable/koffice-1.2-beta2/src/">http</a>
  or <a href="http://www.kde.org/ftpmirrors.html">ftp</a> mirrors.
  Additionally, source rpms are available for the following distributions:
</p>
<!--
<ul>
  <li>
    Conectiva <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Conectiva/CL_7/SRPMS/">7.0</a>, <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Conectiva/CL_8/SRPMS/">8.0</a>
  </li>
  <li>
    Mandrake Linux <a href="http://download.kde.org/unstable/koffice-1.2-beta2/Mandrake/SRPMS/">8.x</a>
  </li>
  <li>
    <a href="http://download.kde.org/unstable/koffice-1.2-beta2/RedHat/7.2/SRPMS/">RedHat Linux</a>
  </li>
  <li>
    <a href="http://download.kde.org/unstable/koffice-1.2-beta2/SuSE/SRPMS/">SuSE Linux</a>
  </li>
</ul>
-->
<p>
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
<p>
  Besides the valuable and excellent efforts by the
  <a href="http://www.koffice.org/people.php">KOffice developers</a>
  themselves, significant support for KOffice development has been provided by
  <a href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
  KOffice developers <a href="http://people.mandrakesoft.com/~david/">David
  Faure</a> and Laurent Montel),
  <a href="http://www.thekompany.com/">theKompany.com</a> (which has
  contributed Kivio and Kugar to KOffice), and
  <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
  Datakonsult AB</a> (which has contributed KChart to KOffice).  In addition,
  the members of the <a href="http://www.kdeleague.org/">KDE League</a>,
  as well as <a href="http://www.kde.org/donations.html">individual
  sponsors</a> (<a href="http://www.kde.org/support.html">donate</a>),
  provide significant support for KDE and KOffice.  Thanks!
</p>
<h4>
  About KOffice/KDE
</h4>
<p>
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
<p>
  Please visit the KDE family of web sites for the
  <a href="http://www.kde.org/faq.html">KDE FAQ</a>,
  <a href="http://www.kde.org/screenshots/kde3shots.html">screenshots</a>,
  <a href="http://www.koffice.org/">KOffice information</a> and
  <a href="http://developer.kde.org/">developer
  information</a>.
  Much more <a href="http://www.kde.org/whatiskde/">information</a>
  about KDE is available from KDE's
  <a href="http://www.kde.org/family.html">family of web sites</a>.
</p>
<hr/>
<p>
  <font size="2">
  <em>Release Coordinator</em>:  Thanks to
  <a href="http://people.mandrakesoft.com/~david/">David Faure</a> for
  his excellent services as release coordinator.
  </font>
</p>
<p>
  <font size="2">
  <em>Press Release</em>: 
  Written by <a href="mailto:pour AT kdeleague DOT org">Andreas
  Pour</a> from the <a href="http://www.kdeleague.org/">KDE League</a>, with the
  invaluable assistance of numerous gifted volunteers from the KDE Project.
  </font>
</p>
<p>
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
<hr/>
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
  <tr valign="top">
    <td align="right" nowrap="nowrap">
      Southeast Asia (English and Indonesian):
    </td>
    <td nowrap="nowrap">
      Ariya Hidayat<br />
      ariya@kde.org<br />
      (62) 815 8703177
    </td>
  </tr>
</table>

<?php
  include("footer.inc");
?>
