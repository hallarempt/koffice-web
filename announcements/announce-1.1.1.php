<?php
   $page_title ='KOffice 1.1.1 Announcement';
   $site_root = '../';
   include("koffice.inc");
   include("header.inc");
 ?>

 <h4>DATELINE DECEMBER 17, 2001<br />
 FOR IMMEDIATE RELEASE</h4>
 <h2>KDE Ships Stability Release of Free Integrated Office Suite</h2>
 <p><strong>Improved Printing, Performance and Stability Highlight KOffice
 Release for Linux and Other UNIXes</strong></p>
 <p>December 17, 2001 (The INTERNET).
 The <a href="http://www.kde.org/">KDE
 Project</a> today announced the immediate release of
 <a href="http://www.koffice.org/">KOffice</a> 1.1.1.
 KOffice is an integrated office suite for KDE which utilizes open standards
 for component communication and component embedding.
 KOffice 1.1.1 constitutes the most stable and feature-complete release
 of KOffice to date, and the KOffice team encourages all users of earlier
 KOffice releases to upgrade to KOffice 1.1.1.
 </p>
 <p>
 This release, which is available in
 <a href="http://i18n.kde.org/teams/distributed.html"><strong>29</strong></a>
 languages, includes the following components:
 <a href="http://www.koffice.org/kword/">KWord</a>
 (a frame-based, full-featured word processor);
 <a href="http://www.koffice.org/kpresenter/">KPresenter</a>
 (a presentation application);
 <a href="http://www.koffice.org/kspread/">KSpread</a>
 (a spreadsheet application);
 <a href="http://www.koffice.org/kontour/">Kontour</a>
 (a vector-drawing application f/k/a KIllustrator);
 <a href="http://www.thekompany.com/projects/kivio/">Kivio</a>
 (a flowchart application);
 <a href="http://www.koffice.org/kchart/">KChart</a>
 (a chart drawing application);
 <a href="http://www.koffice.org/kformula/">KFormula</a>
 (a formula editor);
 <a href="http://www.thekompany.com/projects/kugar/">Kugar</a>
 (a tool for generating business quality reports); and
 <a href="http://www.koffice.org/filters/">filters</a>
 (for importing documents created by, or exporting documents for use with,
 other office suites or office programs).
 </p>
 <p>
 KOffice 1.1.1 is principally a stability release.  The principal
 improvements over KOffice 1.1, released in August, include:
 </p>
 <ul type="disc">
 <li>General: prevent loading embedded documents with remote URLs (<em>e.g.</em>,
 <code>http://</code>) for security reasons;</li>
 <li>KWord
   <ol type="1">
     <li>added support for inserting GIF images;</li>
     <li>fixed "all letters squashed together when printing" bug;</li>
     <li>fixed printing from preview mode;</li>
     <li>fixed clipboard-related performance problems (<em>e.g.</em>, when pasting text); and</li>
     <li>fixed some crashes (<code>Ctrl-K</code> at end of paragraph; undoing a format change in some circumstances; and hiding certain headers/footers);</li>
   </ol>
 </li>
 <li>KSpread: improved search/replace search order and highlighting;</li>
 <li>KChart:  added a Polar chart and reactivated many features which were
 not fully working in KOffice 1.1;</li>
 <li>Filters:  internationalized many dialogs and error messages.</li>
 </ul>
 <p>
 A more complete
 <a href="http://www.koffice.org/announcements/changelog-1.1.1.php">list of
 changes</a> and <a href="http://www.koffice.org/releases/">notes about
 the release</a> are available at the KOffice
 <a href="http://www.koffice.org/">web site</a>.
 </p>
 <p>
 KOffice 1.1.1 complements the release of
 <a href="http://www.kde.org/announcements/announce-2.2.2.html">KDE 2.2.2</a>
 late last month.  KDE is a powerful and easy-to-use Internet-enabled
 desktop for Linux and other UNIXes, and together with KOffice constitutes the
 only Open Source project to provide a complete desktop and productivity
 environment for Linux/UNIX.
 </p>
 <p>
 KOffice and all its components (including KDE) are available
 <em><strong>for free</strong></em> under Open Source licenses from the KDE
 <a href="http://download.kde.org/stable/koffice-1.1.1/src/">server</a>
 and its <a href="http://www.kde.org/ftpmirrors.html">mirrors</a> and can
 also be obtained on <a href="http://www.kde.org/cdrom.html">CD-ROM</a>.
 </p>
 <h4><a name="inbinpack">Installing KOffice 1.1.1 Binary Packages</a></h4>
 <p>
 <em>Binary Packages</em>.
 Some Linux and Unix distributors have provided binary packages of
 KOffice 1.1.1 for recent versions of their distribution.  Some
 of these binary packages are available for free download under
 <a
  href="http://download.kde.org/stable/koffice-1.1.1/">http://download.kde.org/stable/koffice-1.1.1/</a>
 or under the equivalent directory at one of the many KDE ftp server
 <a href="http://www.kde.org/ftpmirrors.html">mirrors</a>, and additional
 binary packages, as well as updates to the packages now available, will
 likely become available over the next few weeks.
 </p>
 <p>
 Please note that the KDE Project makes these packages available from the
 KDE web site as a convenience to KDE users.  The KDE Project is not
 responsible for these packages as they are provided by third
 parties -- typically, but not always, the distributor of the relevant
 distribution.  If you cannot find a binary package for your distribution,
 please read the KDE
 <a href="http://www.kde.org/packagepolicy.html">Binary Package Policy</a>.
 </p>
 <p>
 <em>Library Requirements</em>.
 The library requirements for a particular binary package vary with the
 system on which the package was compiled.  Please bear in mind that
 some binary packages may require a newer version of Qt and other libraries
 than was included with the applicable distribution (e.g., LinuxDistro 8.0
 may have shipped with Qt-2.2.3 but the packages below may require
 Qt-2.3.x).  For general library requirements for KDE, please see the text at
 <a href="#source_code-library_requirements">Source Code - Library
 Requirements</a> below.
 </p>
 <p>
 <a name="package_locations"><em>Package Locations</em></a>.
 At the time of this release, pre-compiled packages are available for:
 </p>
 
<ul>
   <li><a href="http://www.caldera.com/">Caldera Systems OpenLinux</a> (<a href="http://download.kde.org/stable/koffice-1.1.1/Caldera/OpenLinux-3.1/README">README</a>):
     <ul>
       <li>OpenLinux 3.1:  <a href="http://download.kde.org/stable/koffice-1.1.1/Caldera/OpenLinux-3.1/RPMS/kde2.2.1/koffice1.1.1/">Intel i386 - kdelibs 2.2.1</a></li>
     </ul>
   </li>
   <li><a href="http://www.conectiva.com/">Conectiva Linux</a> (<a href="http://download.kde.org/stable/koffice-1.1.1/Conectiva/README">README</a>):
     <ul>
     <li>7.0:  <a href="http://download.kde.org/stable/koffice-1.1.1/Conectiva/Conectiva/7.0/RPMS.koffice/">Intel i386</a> </li>
     </ul>
   </li>
   <li><a href="http://www.linux-mandrake.com/en/">Mandrake Linux</a>
     <ul>
       <li>8.1:  <a href="http://download.kde.org/stable/koffice-1.1.1/Mandrake/8.1/2.2.2/">Intel i586 - kdelibs 2.2.2</a>, <a href="http://download.kde.org/stable/koffice-1.1.1/Mandrake/8.1/2.2.1/">Intel i586 - kdelibs 2.2.1</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/Mandrake/ia64/2.2.1/">HP/Intel IA-64 - kdelibs 2.2.1</a></li>
       <li>8.0:  <a href="http://download.kde.org/stable/koffice-1.1.1/Mandrake/8.0/2.2.2/">Intel i586 - kdelibs 2.2.2</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/Mandrake/ppc/">PowerPC</a></li>
     </ul>
   </li>
   <li><a href="http://www.redhat.com/">RedHat Linux</a>:
     <ul>
       <li>7.2:  <a href="http://download.kde.org/stable/koffice-1.1.1/RedHat/7.2/i386/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.1.1/RedHat/7.2/ia64/">HP/Intel IA-64</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/RedHat/7.2/alpha/">Compaq Alpha</a> (see also the <a href="http://download.kde.org/stable/koffice-1.1.1/RedHat/7.2/noarch/">noarch</a> directory)</li>
     </ul>
   </li>
   <li><a href="http://www.suse.com/">SuSE Linux</a> (<a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/README">README</a>):
     <ul>
       <li>7.3:  <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/i386/7.3/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/ppc/7.3/">PowerPC</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/sparc/7.3/">Sun Sparc</a> (see also the <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/noarch/">noarch</a> directory)</li>
       <li>7.2:  <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/i386/7.2/">Intel i386</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/ia64/7.2/">HP/Intel IA-64</a> (see also the <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/noarch/">noarch</a> directory)</li>
       <li>7.1:  <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/i386/7.1/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/ppc/7.1/">PowerPC</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/axp/7.1/">Compaq Alpha</a> (see also the <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/noarch/">noarch</a> directory)</li>
       <li>7.0:  <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/i386/7.0/">Intel i386</a>, <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/ppc/7.0/">PowerPC</a> and <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/s390/7.0/">IBM S390</a> (see also the <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/noarch/">noarch</a> directory)</li>
       <li>6.4:  <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/i386/6.4/">Intel i386</a> (see also the <a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/noarch/">noarch</a> directory)</li>
     </ul>
   </li>
   <li><a href="http://www.tru64unix.compaq.com/">Tru64 Systems</a> (<a href="http://download.kde.org/stable/koffice-1.1.1/Tru64/README.Tru64">README</a>)
     <ul>
       <li>Tru64 4.0d, e, f and g and 5.x:  <a href="http://download.kde.org/stable/koffice-1.1.1/Tru64/">Compaq Alpha</a></li>
     </ul>
   </li>
 </ul>
 
<p>
 Please check the servers periodically for pre-compiled packages for other
 distributions.  More binary packages will become available over the
 coming days and weeks.
 </p>
 <h4>Downloading and Compiling KOffice 1.1.1</h4>
 <p>
 <a name="source_code-library_requirements"></a><em>Library
 Requirements</em>.
 KOffice 1.1.1 requires the following libraries:
 </p>
 <ul>
 <li>kdelibs 2.1.x, which can be downloaded following
 the <a href="http://www.kde.org/download.html">instructions</a> at the
 KDE website.  Please note, however, that kdelibs-2.1.1 will cause some
 crashes and anti-aliased font problems; moreover, both kdelibs-2.1.1
 and kdelibs-2.1.2 will not properly accept .doc documents in the file
 selection dialog (see the KOffice 1.1rc1
 <a href="http://www.koffice.org/releases/1.1rc1-release.php">release notes</a>
 for a workaround).  For more information on these kdelibs releases, please
 see the <a href="http://www.kde.org/announcements/announce-2.1.1.html">KDE
 2.1.1 press release</a> and the
 <a href="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
 press release</a>;</li>
 <li>kdesupport 2.1.x (not needed if using KDE 2.2.x);</li>
 <li>Qt-2.2.4, which is available in source code from Trolltech as
 <a
  href="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.g
 z</a>; and</li>
 <li>for reading help pages and other KOffice documentation,
 <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
 <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.</li>
 </ul>
 <p>
 <em>Library Recommendations</em>.
 The KOffice team recommends the use of the following libraries:
 </p>
 <ul>
 <li><a href="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">Qt
 2.3.1</a> (<em>not</em> Qt 2.3.2);</li>
 <li>kdelibs 2.2.2, which can be downloaded following the instructions in
 the <a href="http://www.kde.org/announcements/announce-2.2.2.html">KDE 2.2.2
 press release</a>; and</li>
 <li>for reading help pages and other KOffice documentation,
 <a href="http://xmlsoft.org/">libxml2</a> &gt;= 2.4.9 and
 <a href="http://xmlsoft.org/XSLT/">libxslt</a> &gt;= 1.0.7.</li>
 </ul>
 <p>
 <em>Compiler Requirements</em>.
 Please note that some components of
 KOffice 1.1.1 (such as the Quattro Pro<sup>&reg;</sup> import filter
 and <a href="http://www.koffice.org/kchart/">KChart</a>) will not
 compile with older versions of <a href="http://gcc.gnu.org/">gcc/egcs</a>,
 such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
 <!-- seems not to apply anymore l. . .
 [ ?? In addition, some components of KOffice 1.1.1 (such as ???)
 will not compile with <a href="http://gcc.gnu.org/gcc-3.0/gcc-3.0.html">gcc
 3.0.x</a> (the problems are being corrected by the KDE and GCC teams
 and should be resolved by the first stable release of KOffice 1.2) ?? ].
 -->
 </p>
 <p>
 <a name="source_code"></a><em>Source Code/SRPMs</em>.
 The complete source code for KOffice 1.1.1 is available for free download at
 <a
  href="http://download.kde.org/stable/koffice-1.1.1/src/">http://download.kde.or
 g/stable/koffice-1.1.1/src/</a>
 or in the equivalent directory at one of the many KDE ftp server
 <a href="http://www.kde.org/ftpmirrors.html">mirrors</a>.
 Additionally, source rpms are available for the following distributions:
 </p>
 <ul>
   <li><a
  href="http://download.kde.org/stable/koffice-1.1.1/Caldera/OpenLinux-3.1/SRPMS/
 ">Caldera Systems OpenLinux</a></li>
   <li><a
  href="http://download.kde.org/stable/koffice-1.1.1/Mandrake/SRPMS/">Mandrake
  Linux</a></li>
   <li><a
  href="http://download.kde.org/stable/koffice-1.1.1/RedHat/7.2/SRPMS/">RedHat
  Linux</a></li>
   <li><a href="http://download.kde.org/stable/koffice-1.1.1/SuSE/SRPMS/">SuSE
  Linux</a></li>
 </ul>
 <p>
 <em>Further Information</em>.  For further
 For further instructions on compiling and installing KOffice, please consult
 the KOffice <a href="http://www.koffice.org/download/source.php">installation
 instructions</a>.  For
 problems with SRPMs, please contact the person listed in the applicable
 .spec file.
 </p>
 <h4>About KOffice</h4>
 <p>
 KOffice is part of the KDE Project.
 KDE is an independent project by hundreds of developers worldwide
 collaborating over the Internet to create a sophisticated,
 customizable and stable desktop environment employing a component-based,
 network-transparent architecture.  KDE is working proof of the power of
 the Open Source "Bazaar-style" software development model to create
 first-rate technologies on par with and superior to even the most complex
 commercial software.
 </p>
 <p>
 Please visit the KDE family of web sites for the
 <a href="http://www.kde.org/faq.html">KDE FAQ</a>,
 <a href="http://www.kde.org/screenshots/kde2shots.html">screenshots</a>,
 <a href="http://www.koffice.org/">KOffice information</a> and
 <a href="http://developer.kde.org">developer
 information</a>.
 Much more <a href="http://www.kde.org/whatiskde/">information</a>
 about KDE is available from KDE's
 <a href="http://www.kde.org/family.html">family of web sites</a>.
 </p>
 <h4>Corporate KOffice Sponsors</h4>
 <p>
 Besides the valuable and excellent efforts by the
 <a href="http://www.koffice.org/people.php">KOffice developers</a>
 themselves, significant support for KOffice development has been provided by
 <a href="http://www.mandrakesoft.com/">MandrakeSoft</a> (which sponsors
 KOffice developers David Faure and Laurent Montel),
 <a href="http://www.thekompany.com/">theKompany.com</a> (which has
 contributed Kivio and Kugar to KOffice), and
 <a href="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
 Datakonsult AB</a> (which has contributed KChart to KOffice).  In addition,
 the members of the <a href="http://www.kdeleague.org/">KDE League</a> provide
 significant support for promoting KDE and KOffice.  Thanks!
 </p>
 <hr />
 <p class="tm-notice">
 <em>Trademarks Notices.</em>
 KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.
 Linux is a registered trademark of Linus Torvalds.
 UNIX are registered trademarks of The Open Group.
 Trolltech and Qt are trademarks of Trolltech AS.
 Quattro Pro is a registered trademark of Corel Corporation or Corel Corporation
  Limited.
 All other trademarks and copyrights referred to in this announcement are
 the property of their respective owners.
 </p>
 <br />
 <hr />
 <table style="border: 0; padding: 8px; border-spacing: 0;">
 <tr><th style="text-align: left;" colspan="2">
 Press Contacts:
 </th></tr>
 <tr><td class="contactinfo">
 United&nbsp;States:
 </td><td class="contacts">
 Eunice Kim<br />
 The Terpin Group<br />
 ekim@terpin.com<br />
 (1) 650 344 4944 ext. 105<br />&nbsp;<br />
 Kurt Granroth<br />
 granroth@kde.org<br />
 (1) 480 732 1752<br />&nbsp;<br />
 Andreas Pour<br />
 KDE League, Inc.<br />
 pour@kde.org<br />
 (1) 917 312 3122
 </td></tr>
 <tr><td class="contactinfo">
 Europe (French and English):
 </td><td class="contacts">
 David Faure<br />
 faure@kde.org<br />
 (33) 4 3250 1445
 </td></tr>
 <tr><td class="contactinfo">
 Europe (English and German):
 </td><td class="contacts">
 Ralf Nolden<br />
 nolden@kde.org<br />
 (49) 2421 502758
 <br />
 <br />
 </td></tr>
 </table>
 </td></tr>
 </table>

 <? include("footer.php") ?>
