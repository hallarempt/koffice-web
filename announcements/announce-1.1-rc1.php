<?php
  $page_title ='KOffice 1.1 RC 1 announcement';
  $site_root = '../';
  include("header.inc");
  include("koffice.inc");
?>
<P>DATELINE JULY 30, 2001</P>
<P>FOR IMMEDIATE RELEASE</P>
<H3 ALIGN="center">KOffice Suite Release Candidate Available for Linux/Unix</H3>
<P><STRONG>KDE, the Leading Linux Desktop, Ships First Release Candidate of KOffice Suite</STRONG></P>
<P>July 30, 2001 (The INTERNET).
The <A HREF="http://www.kde.org/">KDE
Project</A> today announced the release of
<A HREF="http://www.koffice.org/">KOffice</A> 1.1 Release Candidate 1 (RC1).
KOffice is an integrated office suite for KDE which utilizes open
standards for component communication and component embedding.
The primary goals of this release are to provide a preview of
KOffice&nbsp;1.1 and to involve users and developers who wish to
request/implement missing features or identify problems.
Code development is currently focused on stabilizing KOffice 1.1,
<A HREF="http://developer.kde.org/development-versions/koffice-1.1-release-plan.html">scheduled</A>
for final release in mid-August, 2001.
</P>
<P>
Although a release candidate, KOffice 1.1RC1 constitutes the most stable and
feature-complete release of KOffice to date.  The KOffice team encourages
all users of earlier KOffice releases to upgrade to KOffice 1.1RC1.
In particular, this release is substantially more stable and
feature-complete than KOffice 1.0, which was released together with KDE 2.0
in October 2000.  Changes to individual KOffice components since the last
beta release are <A HREF="#changelog">enumerated below</A>.  In addition
<A HREF="http://www.koffice.org/releases/1.1rc1-release.php">Release
Notes</A>, a
<A HREF="http://www.koffice.org/announcements/changelog-1.1.php">list of
changes</A> since the KOffice 1.0 release, and a
<A HREF="http://www.koffice.org/faq/">KOffice FAQ</A>, are
available at the <A HREF="http://www.koffice.org/">KOffice website</A>.
</P>
<P>
This release includes the following components:
<A HREF="http://www.koffice.org/kword/">KWord</A>
(a frame-based, full-featured word processor);
<A HREF="http://www.koffice.org/kpresenter/">KPresenter</A>
(a presentation application);
<A HREF="http://www.koffice.org/kspread/">KSpread</A>
(a spreadsheet application);
<A HREF="http://www.koffice.org/kontour/">Kontour</A>
(a vector-drawing application f/k/a KIllustrator);
<A HREF="http://www.thekompany.com/projects/kivio/">Kivio</A>
(a flowchart application);
<A HREF="http://www.koffice.org/kchart/">KChart</A>
(a chart drawing application);
<A HREF="http://www.koffice.org/kformula/">KFormula</A>
(a formula editor);
<A HREF="http://www.thekompany.com/projects/kugar/">Kugar</A>
(a tool for generating business quality reports); and
<A HREF="http://www.koffice.org/filters/">filters</A>
(for importing documents created by, or exporting documents for use with,
other office suites or office programs).
</P>
<P>
The most significant improvements since KOffice 1.1beta3, the last
KOffice beta release which was announced last month, occurred in
KWord.  These improvements
include: support for Asian languages with
<A HREF="http://www.xfree86.org/current/XOpenIM.3.html">XIM</A>;
drop'n'paste of images; and
copy/paste of tables.  KWord also benefited from numerous bug-fixes,
particularly in the auto-sizing and auto-scrolling features.
For a further list of improvements to KOffice since the last beta release,
please refer to the <A HREF="#changelog">incremental changelog</A> below.
</P>
<P>
KOffice and all its components are available for free under
Open Source licenses from the KDE
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/">server</A>
and its <A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
As a result of the dedicated efforts of hundreds of translators,
KOffice 1.1RC1 is available in 27 languages</A>.
</P>
<P>
<A NAME="changelog"></A><H4>Incremental Changelog</H4>
</P>
<P>
The following are the major improvements, enhancements and fixes since the
KOffice-1.1beta3 release last month:
<UL>
<LI><EM><STRONG>All suite applications (KOffice libs)</STRONG></EM></LI>
<UL>
<LI><EM>New Features and Improvements</EM>:</LI>
<UL>
<LI>added a submenu for selecting a type of embedded document to insert;</LI>
<LI>improved useability of template creation dialog;</LI>
<LI>improved template names to permit special characters, like '(';</LI>
<LI>improved the select-color actions with color palette;</LI>
<LI>improved the WMF-loader to parse the DPI of WMF files; and</LI>
<LI>replaced the filters' embedded dialog into the file chooser with normal dialogs; and</LI>
</UL>
<LI><EM>Bug Fixes</EM>:</LI>
<UL>
<LI>fixed the automatic naming of DCOP interfaces;</LI>
<LI>fixed the recent files list (some ways of opening documents didn't add to that list);</LI>
<LI>fixed the autosave feature to only save if the document was changed since the last autosave;</LI>
<LI>fixed "Configure keys" to list all the available actions; and</LI>
<LI>fixed problems with embedded documents and zooming.</LI>
</UL>
</UL>
<LI><EM><STRONG>KWord</STRONG></EM></LI>
<UL>
<LI><EM>New Features</EM>:</LI>
<UL>
<LI>added XIM support (for Asian languages);</LI>
<LI>added save/restore UI settings (formatting characters, frame borders, zoom);</LI>
<LI>added "keep aspect ratio" option when inserting/resizing images;</LI>
<LI>added support for dropping and pasting images;</LI>
<LI>added frame dialog for headers and footers;</LI>
<LI>enabled changing the charset for selected characters (helps non-AA displays and when printing);</LI>
<LI>enabled disabling the grid by pressing shift while moving/resizing a frame; and</LI>
<LI>implemented copy/paste of tables;</LI>
</UL>
<LI><EM>Improvements</EM>:</LI>
<UL>
<LI>improved paragraph borders to span the entire frame/page width;</LI>
<LI>improved auto-resizing when inserting very large images;</LI>
<LI>improved auto-scrolling (also applies when moving a frame, etc.);</LI>
<LI>improved cell auto-sizing in tables;</LI>
<LI>improved preview in style dialog;</LI>
<LI>improved calculation of floating tables size and placement;</LI>
<LI>optimized speed when typing;</LI>
<LI>made the "insert special character" dialog non-modal;</LI>
<LI>increased the number of settings saved to/loaded from the KPresenter configuration file;</LI>
<LI>revised class design for future code sharing with other KOffice applications; and</LI>
<LI>made coordinates relative to page corner in frame dialog; and</LI>
</UL>
<LI><EM>Bug fixes</EM>:</LI>
<UL>
<LI>fixed text-flow bugs;</LI>
<LI>fixed frame selection in case of overlapping frames;</LI>
<LI>fixed many undo/redo bugs (especially for tables) and grouping of commands;</LI>
<LI>fixed inline items in headers/footers/copied frames;</LI>
<LI>fixed copying frames (with inline frames);</LI>
<LI>fixed table of content (regeneration and page numbers);</LI>
<LI>fixed typographical quotes (never triggered in beta3);</LI>
<LI>fixed undo/redo when applying a new format to a variable, and when pasting text with inline items;</LI>
<LI>fixed loading of multi-columns documents, and loading of cliparts;</LI>
<LI>fixed saving of copied frames; and</LI>
<LI>fixed KPart objects, zooming, and preview mode.</LI>
</UL>
</UL>
<LI><EM><STRONG>KPresenter</STRONG></EM></LI>
<UL>
<LI>increased the number of settings saved to/loaded from the KPresenter configuration file;</LI>
<LI>reduced size of file saved;</LI>
<LI>switched to menu XML for all actions;</LI>
<LI>fixed web presentation (author, email information); and</LI>
<LI>fixed icon names.</LI>
</UL>
<LI><EM><STRONG>KSpread</STRONG></EM></LI>
<UL>
<LI>fixed autofill bugs;</LI>
<LI>fixed crash when displaying an area (table name was not translated);</LI>
<LI>fixed GUI problems with the dialogbox;</LI>
<LI>closed some memory leaks (formula dialogbox and consolidate dialogbox were not deleted);</LI>
<LI>fixed "list sort" to not delete predefined lists (month, day);</LI>
<LI>fixed tags in header/footer (<TT>&lt;name&gt; &lt;file&gt; &lt;author&gt;</TT>); and</LI>
<LI>fixed print setup.</LI>
</UL>
<LI><EM><STRONG>Kontour</STRONG></EM></LI>
<UL>
<LI>renamed application from KIllustrator to Kontour;</LI>
<LI>added ability to delete objects with the backspace key;</LI>
<LI>added ability to use the delete key in a text object;</LI>
<LI>switched to KPrinter for printing (provides users with much greater control over layout/formatting of printed pages);</LI>
<LI>fixed helpline (the helpline is not moved and the cursor is not changed when the helplines are hidden);</LI>
<LI>fixed XIM positioning;</LI>
<LI>fixed undo/redo/cut actions;</LI>
<LI>fixed undo/redo change fill parameters;</LI>
<LI>fixed GUI to ensure tool is always checked;</LI>
<LI>fixed layerPanel (enable/disable button and other fixes); and</LI>
<LI>fixed crash when deleting a table.</LI>
</UL>
</UL>
</P>
<P>
For a list of major changes since the KOffice 1.0 release last October, please
visit the
<A HREF="http://www.koffice.org/announcements/changelog-1.1.php">KOffice
website</A>.
</P>
<P>
<H4>Downloading and Compiling KOffice</H4>
</P>
<P>
<A NAME="Source_Code"></A><EM><STRONG>Source Packages</STRONG></EM>.
The source packages for KOffice 1.1RC1 are available for free download at
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/src/">http://ftp.kde.org/unstable/koffice-1.1-rc1/src/</A> or in the
equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
</P>
<P>
<A NAME="Source_Code-Library_Requirements"></A><EM><STRONG>Library
Requirements</STRONG></EM>.
KOffice requires recent versions of Qt and kdelibs, and even more recent
versions are recommended.
</P>
<UL>
<LI><EM>Required</EM>:  KOffice 1.1rc1 requires
<A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4</A>
or greater, kdesupport-2.1.x or greater, and kdelibs-2.1.2 or greater.  The
KDE packages are available from the KDE ftp servers at
<A HREF="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</A>
and <A HREF="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</A>.
Please note, however, that kdelibs-2.1.1 will cause some crashes and
anti-aliased font problems.  Moreover, both kdelibs-2.1.1 and kdelibs-2.1.2
will not properly accept .doc documents in the file selection dialog (see the
<A HREF="http://www.koffice.org/releases/1.1rc1-release.php">release
notes</A> for a workaround).
<BR>&nbsp;<BR>For more information on these kdelibs
releases, please see the
<A HREF="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</A> and the
<A HREF="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
press release</A>.
</LI>
<BR>&nbsp;<BR>
<LI><EM>Recommended</EM>:  The KOffice team recommends the use of
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">qt-x11-2.3.1</A> and kdelibs-2.2beta.  Kdelibs-2.2beta (and the pending kdelibs-2.2RC1)
provide a few additional features, such as improved printing support
(kdeprint), a scanner plugin, and proper recognition of
.doc files in the file selector dialog.
KDE 2.2beta1 is available from
<A HREF="http://www.kde.org/unstable/2.2beta1/">http://www.kde.org/unstable/2.2beta1/</A>
and KDE 2.2RC1 should be available shortly from
<A HREF="http://www.kde.org/unstable/2.2rc1/">http://www.kde.org/unstable/2.2rc1/</A>.
Please note that the kdesupport package has been discontinued for KDE 2.2.x
due to the fact that most distributions already provide the libraries
and programs which were included in that package.  If you still require
this package, you may use one of the
<A HREF="http://ftp.sourceforge.net/pub/mirrors/kde/snapshots/current/">snapshots</A>.
<BR>&nbsp;<BR>
For more information on the kdelibs-2.2beta1 release, please see the
<A HREF="http://www.kde.org/announcements/announce-2.2-beta1.html">release
announcement</A>.
</LI>
</UL>
KOffice 1.1rc1 will not work with versions of Qt older than 2.2.4 or
versions of kdelibs older than 2.1.1.
</P>
<P>
<EM><STRONG>Compiler Requirements</STRONG></EM>.
Please note that some components of
KOffice 1.1RC1 (such as the Quattro Pro<SUP>&reg;</SUP> import filter
and the new <A HREF="http://www.koffice.org/kchart/">KChart</A>) will not
compile with older versions of <A HREF="http://gcc.gnu.org/">gcc/egcs</A>,
such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</P>
<P>
<EM><STRONG>Further Instructions</STRONG></EM>.
For further instructions on compiling and installing KOffice, please consult
the <A HREF="http://www.koffice.org/download/source.php">installation
instructions</A>.
</P>
<P>
<H4>Installing Binary Packages</H4>
</P>
<P>
<EM><STRONG>Binary Packages</STRONG></EM>.
Some distributors choose to provide binary packages of KOffice for certain
versions of their distribution.  Some of these binary packages for
KOffice 1.1RC1 will be available for free download under
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/">http://ftp.kde.org/unstable/koffice-1.1-rc1/</A>
or under the equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>. Please note that the
KDE team is not responsible for these packages as they are provided by third
parties -- typically, but not always, the distributor of the relevant
distribution (if you cannot find a binary package for your distribution,
please read the <A HREF="http://dot.kde.org/986933826/">KDE Binary Package
Policy</A>).
<P>
<EM><STRONG>Library Requirements</STRONG></EM>.
The library requirements for a particular binary package varies with the
system on which the package was compiled.  Please bear in mind that
some binary packages may require a newer version of Qt and/or KDE
than was distributed with the distribution version for which the binary
package is listed below.  For general library requirements for KOffice,
please see the text at <A HREF="#Source_Code-Library_Requirements">Source Code -
Library Requirements</A>.
</P>
<P>
<EM><STRONG>Package Locations</STRONG></EM>.
At the time of this release, pre-compiled packages are available for:
</P>
<P>
<UL>
<!-- DEBIAN STATUS UNKNOWN
<LI><A HREF="http://www.debian.org/">Debian GNU/Linux</A> (package "koffice"):</LI>
<UL>
<LI><A HREF="ftp://ftp.debian.org/">ftp.debian.org</A>:  sid (devel)</LI>
<LI><A HREF="ftp://kde.debian.net/">kde.debian.net</A>:  potato (2.2)</LI>
</UL>
-->
<LI><A HREF="http://www.linux-mandrake.com/en/">Linux Mandrake</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/README">README</A>):
<UL>
<LI>Cooker: <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/cooker/i586/">i586</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/cooker/ia64/">ia64</A></LI> 
<LI>8.0:  for kdelibs 2.1.2, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/8.0/i586/kde-2.1.2/">i586</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/8.0/ppc/">PPC</A>; for kdelibs 2.2beta1, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Mandrake/8.0/i586/kde-2.2beta1/">i586</A></LI>
</UL>
<LI><A HREF="http://www.suse.com/">SuSE Linux</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/README">README</A> - requires Qt-2.3.x):
<UL>
<LI>kdelibs 2.2beta1</LI>
<UL>
<LI>7.2:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/7.2/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
<LI>7.1:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/7.1/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/ppc/7.1/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/axp/7.1/">Sparc</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
<LI>7.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/7.0/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/ppc/7.0/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/s390/7.0/">S390</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
<LI>6.4:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/i386/6.4/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
</UL>
<LI>kdelibs 2.1.2 and kdesupport 2.1.1</LI>
<UL>
<LI>7.2:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/7.2/">i386</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/ia64/7.2/">IA64</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</A> directory for common files</LI>
<LI>7.1:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/7.1/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/ppc/7.1/">PPC</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/axp/7.1/">Alpha</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/sparc/7.1/">Sparc</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</A> directory for common files</LI>
<LI>7.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/7.0/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/ppc/7.0/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/s390/7.0/">S390</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</A> directory for common files</LI>
<LI>6.4:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/i386/6.4/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/SuSE/noarch/">noarch</A> directory for common files</LI>
</UL>
</UL>
<!-- Tru64 not ready yet
<LI>Tru64 Systems:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Tru64/">4.0e,f,g, or 5.x</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-rc1/Tru64/README.Tru64">README</A>)</LI>
-->
</UL>
</P>
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages may become available over the
coming days and weeks; in particular,
<A HREF="http://www.redhat.com/">RedHat</A> packages are expected tomorrow and
<A HREF="http://www.debian.org/">Debian</A> packages are expected late
this or early next week.
</P>
<P>
<H4>About KOffice/KDE</H4>
</P>
<P>
KOffice is part of the KDE project.
KDE is an independent, collaborative project by hundreds of developers
worldwide to create a sophisticated, customizable and stable desktop environment
employing a component-based, network-transparent architecture.
KDE is working proof of the power of the Open Source "Bazaar-style" software
development model to create first-rate technologies on par with
and superior to even the most complex commercial software.
</P>
<P>
For more information about KDE, please visit KDE's
<A HREF="http://www.kde.org/whatiskde/">web site</A>.
For more information about KOffice, please visit KOffice's
<A HREF="http://www.koffice.org/info/">web site</A> where you can find,
among other things, information on
<A HREF="http://www.koffice.org/getinvolved/">contributing to KOffice</A>.
</P>
<P>
<H4>Corporate KOffice Sponsors</H4>
</P>
<P>
Besides the valuable and excellent efforts by the
<A HREF="http://www.koffice.org/people.php">KOffice developers</A>
themselves, significant support for KOffice development has been provided by
<A HREF="http://www.mandrakesoft.com/">MandrakeSoft</A> (which sponsors
KOffice developers <A HREF="http://perso.mandrakesoft.com/~david/">David
Faure</A> and Laurent Montel),
<A HREF="http://www.thekompany.com/">theKompany.com</A> (which
contributed Kivio and Kugar to KOffice),
and
<A HREF="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
Datakonsult AB</A> (which contributed the new KChart to KOffice).  Thanks!
</P>
<HR NOSHADE SIZE=1 WIDTH="90%" ALIGN="center">
<FONT SIZE=2>
<EM>Trademarks Notices.</EM>
KDE, K Desktop Environment, KChart, KFormula, Kontour, KOffice,
KPresenter, KSpread and KWord are trademarks of KDE e.V.
Kivio and Kugar are trademarks of thekompany.com.
<!--Adobe Illustrator is a registered trademark of Adobe Systems
Incorporated.-->
Quattro Pro is a registered trademark of Corel Corporation or Corel Corporation Limited.
<!--MS WinWord 97 and MS Excel are registered trademarks of Microsoft
Corporation.-->
Linux is a registered trademark of Linus Torvalds.
Unix is a registered trademark of The Open Group.
Trolltech and Qt are trademarks of Trolltech AS.
All other trademarks and copyrights referred to in this announcement are
the property of their respective owners.
<BR>
<HR NOSHADE SIZE=1 WIDTH="90%" ALIGN="center">
<TABLE BORDER=0 CELLPADDING=8 CELLSPACING=0>
<TR><TH COLSPAN=2 ALIGN="left">
Press Contacts:
</TH></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
United&nbsp;States:
</TD><TD NOWRAP>
Kurt Granroth<BR>
granroth@kde.org<BR>
(1) 480 732 1752<BR>&nbsp;<BR>
Andreas Pour<BR>
pour@kde.org<BR>
(1) 917 312 3122
</TD></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
Europe (French and English):
</TD><TD NOWRAP>
David Faure<BR>
faure@kde.org<BR>
(44) 1225 837409
</TD></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
Europe (English and German):
</TD><TD NOWRAP>
Martin Konold<BR>
konold@kde.org<BR>
(49) 179 2252249
</TD></TR>
</TABLE>
<?php
  include("footer.inc");
?>
