<?php
  $page_title ='KOffice 1.1 Beta3 announcement';
  $site_root = '../';
  include("header.inc");
  include("koffice.inc");
?>
<P>DATELINE JUNE 25, 2001</P>
<P>FOR IMMEDIATE RELEASE</P>
<H3 ALIGN="center">KOffice Suite Beta Released for Linux/Unix</H3>
<P><STRONG>KDE, the Leading Linux Desktop, Ships Third Beta of KOffice Suite</STRONG></P>
<P>June 25, 2001 (The INTERNET).
The <A HREF="http://www.kde.org/">KDE
Project</A> today announced the release of
<A HREF="http://www.koffice.org/">KOffice</A> 1.1beta3.
KOffice is an integrated office suite for KDE which utilizes open
standards for component communication and component embedding.
The primary goals of this release, which follows one month after the release
of KOffice 1.1beta2, are to provide a preview of KOffice&nbsp;1.1 and
to involve users and developers who wish to request/implement missing
features or identify problems.

Code development is currently focused on stabilizing KOffice 1.1,
<A HREF="http://developer.kde.org/development-versions/koffice-1.1-release-plan.html">scheduled</A>
for final release late next quarter.
</P>
<P>
Though this release is a beta, it constitutes the most stable and
feature-complete release of KOffice to date.  The KOffice team encourages
all users of earlier KOffice releases to upgrade to KOffice 1.1beta3.
In particular, this release is substantially more stable and
feature-complete than KOffice 1.0, which was released together with KDE 2.0
in October 2000.  Changes to individual KOffice components since the last
beta release are <A HREF="#changelog">enumerated below</A>.  In addition, a
<A HREF="http://www.koffice.org/announcements/changelog-1.1.php">list of
changes</A> since the KOffice 1.0 release, and a
<A HREF="http://www.koffice.org/faq/">FAQ about KOffice</A>, are
available at the KOffice <A HREF="http://www.koffice.org/">website</A>.
</P>
<P>
The most significant improvements since the last beta release occurred in
<A HREF="http://www.koffice.org/kword/">KWord</A>, particularly in the
implementation of new features
in respect of inline pictures, tables, frames, line spacing, auto-correction
and page breaks, as well as a host of usability improvements, such as
automatic switching between modes, improved menus and more pop-up menus.
For a further list of improvements to KOffice since the last release,
please refer to the <A HREF="#changelog">incremental changelog</A> below.
</P>
<P>
This release includes the following components:
KWord (a frame-based, full-featured word processor);
<A HREF="http://www.koffice.org/kpresenter/">KPresenter</A>
(a presentation application);
<A HREF="http://www.koffice.org/kspread/">KSpread</A>
(a spreadsheet application);
<A HREF="http://www.koffice.org/kontour">KIllustrator</A>
(a vector-drawing application);
<A HREF="http://www.koffice.org/krayon/">Krayon</A>
(a bitmap image editor f/k/a KImageShop);
<A HREF="http://www.thekompany.com/projects/kivio/">Kivio</A>
(a flowchart application);
<A HREF="http://www.koffice.org/kchart/">KChart</A>
(a chart drawing application);
<A HREF="http://www.koffice.org/kformula/">KFormula</A>
(a formula editor);
<A HREF="http://www.thekompany.com/projects/kugar/">Kugar</A>
(a tool for generating business quality reports); and
<A HREF="http://www.koffice.org/filters/">filters</A>
(for importing/exporting documents).
</P>
<P>
KOffice and all its components are available for free under
Open Source licenses from the KDE
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/">server</A>
and its <A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
As a result of the dedicated efforts of hundreds of translators,
KOffice 1.1beta3 is available in
<A HREF="http://i18n.kde.org/teams/distributed.html">27</A>
languages</A>.
</P>
<P>
<A NAME="changelog"></A><H4>Incremental Changelog</H4>
</P>
<P>
The following are the major improvements, enhancements and fixes since the
KOffice-1.1beta2 release last month:
<UL>
<LI><EM>All suite applications</EM></LI>
<UL>
<LI>added many page formats;</LI>
<LI>extended general DCOP facilities (for scripting suite applications);</LI>
<LI>switched to <A HREF="http://apps.kde.com/nfinfo.php?id=497">KGhostview</A>
for print previews (requires kdelibs-2.2.x);</LI>
<LI>added a warning if a file is saved in a non-native file format;</LI>
<LI>improved language and grammar (no more typos);</LI>
<LI>fixed auto-addition of file extensions; and</LI>
<LI>fixed crash on loading remote documents.</LI>
</UL>
<LI><EM>KWord</EM></LI>
<UL>
<LI>added a new preview mode (multiple pages per row);</LI>
<LI>improved drawing of inline elements (variables, images, frames)
when selected;</LI>
<LI>added ability to toggle objects between inline and non-inline;</LI>
<LI>improved read-only mode (when KWord is embedded in
<A HREF="http://konqueror.kde.org/">Konqueror</A> text can now be selected
and copied);</LI>
<LI>implemented Insert Frame and Insert Page Break (also as part
of styles);</LI>
<LI>implemented "1.5" and "double" line-spacing (also as part of styles);</LI>
<LI>added an Apply button to the stylist;</LI>
<LI>implement arbitrary zoom values;</LI>
<LI>added auto-correction, typographical quotes;</LI>
<LI>added a "View Formatting Characters" feature for displaying the format codes in the document;</LI>
<LI>implemented insertion of (configurable) predefined expressions;</LI>
<LI>implemented auto-switching between text editing and frame editing;</LI>
<LI>added ability to set all frame types as "copy";</LI>
<LI>added the Flesch reading ease score as well as the enhanced layout to the statistics dialog;</LI>
<LI>added support for importing WMF clip-art;</LI>
<LI>increased spell-checking options (requires kdelibs &gt;= 2.2-alpha2);</LI>
<LI>implemented auto-adjusting frame size;</LI>
<LI>added undo-redo availability to many actions;</LI>
<LI>added new bullets-numbering dialog (visible in the stylist and the paragraph editor);</LI>
<LI>enhanced context-menus (RMB popup);</LI>
<LI>added changing the case (capitals) of a text selection;</LI>
<LI>improved usability with better mouse selection and some new
key bindings;</LI>
<LI>achieved major speedups for large documents (improvements in paragraph formatting, loading and painting fixes);</LI>
<LI>added a submenu for custom variables;</LI>
<LI>fixed recalculation of "page number" variable in header and footer;</LI>
<LI>fixed painting and run-around-frame (e.g., in multi-columns mode);</LI>
<LI>fixed the creation and removal of pages;</LI>
<LI>fixed crash when embedding into Konqueror;</LI>
<LI>fixed Table Of Contents creation and updates;</LI>
<LI>fixed placement and drawing of tables; and</LI>
<LI>fixed many other things, this list is far from complete.</LI>
</UL>
<LI><EM>KPresenter</EM></LI>
<UL>
<LI>decreased size of saved documents;</LI>
<LI>added mouse wheel navigation between pages during presentations;</LI>
<LI>added the ability to move objects with the arrow keys;</LI>
<LI>improved many UI elements (enabling/disabling of actions);</LI>
<LI>improved the appearance (same page drawing as in KWord); and</LI>
<LI>added a new configuration dialog.</LI>
</UL>
<LI><EM>KSpread</EM></LI>
<UL>
<LI>added CSV Import-Filter dialog; and</LI>
<LI>fixed drawing when embedded (no active cell).</LI>
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
<A NAME="Source_Code"></A><EM>Source Packages</EM>.
The source packages for KOffice 1.1beta3 are available for free download at
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/src/">http://ftp.kde.org/unstable/koffice-1.1-beta3/src/</A> or in the
equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
</P>
<P>
<A NAME="Source_Code-Library_Requirements"></A><EM>Library Requirements.</EM>
KOffice 1.1beta3 requires qt-x11-2.2.4 or greater, which is available from
<A HREF="http://www.trolltech.com/">Trolltech</A> at
<A HREF="ftp://ftp.trolltech.com/qt/source/">ftp://ftp.trolltech.com/qt/source/</A>
under the name <A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4.tar.gz</A>, although
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">qt-x11-2.3.1</A>
is recommended, as well as kdesupport-2.1.x and kdelibs-2.1.2
(kdelibs-2.1.1 will work but will cause some crashes and anti-aliased
font problems), which are available from the KDE ftp servers at
<A HREF="http://ftp.kde.org/stable/2.1.1/distribution/">http://ftp.kde.org/stable/2.1.1/distribution/</A>
and <A HREF="http://ftp.kde.org/stable/2.1.2/distribution/">http://ftp.kde.org/stable/2.1.2/distribution/</A>
(<EM>see also</EM> the
<A HREF="http://www.kde.org/announcements/announce-2.1.1.html">KDE 2.1.1
press release</A> and the
<A HREF="http://www.kde.org/announcements/announce-2.1.2.html">KDE 2.1.2
press release</A> for more information).  However, KDE 2.2alpha2, available at
<A HREF="http://www.kde.org/unstable/2.2alpha2/">http://www.kde.org/unstable/2.2alpha2/</A>,
is recommended, as it provides a few additional features, such as improved
printing support (kdeprint), a scanner plugin, and an improved file selector.
KOffice 1.1beta3 will not work with versions of Qt older than 2.2.4 or
versions of kdelibs older than 2.1.x.
</P>
<P>
<EM>Compiler Requirements</EM>.  Please note that some components of
KOffice 1.1beta3 (the Quattro Pro&reg; import filter and the new
<A HREF="http://www.koffice.org/kchart/">KChart</A>) will not
compile with older versions of <A HREF="http://gcc.gnu.org/">gcc/egcs</A>,
such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</P>
<P>
<EM>Further Instructions</EM>.
A patch which fixes crashes in KIllustrator, particularly when embedded in
<A HREF="http://www.koffice.org/kword/">KWord</A>, is available separately
<A HREF="ftp://ftp.kde.org/pub/kde/unstable/koffice-1.1-beta3/src/killustrator-1.1-beta3-fix.patch">here</A>.
If you compile from source please apply the patch as described in the
<A HREF="ftp://ftp.kde.org/pub/kde/unstable/koffice-1.1-beta3/src/README">README</A>.
For further instructions on compiling and installing KOffice, please consult
the <A HREF="http://www.koffice.org/download/source.php">installation
instructions</A>.
</P>
<P>
<H4>Installing Binary Packages</H4>
</P>
<P>
<EM>Binary Packages</EM>.
Some distributors choose to provide binary packages of KOffice for certain
versions of their distribution.  Some of these binary packages for
KOffice 1.1beta3 will be available for free download under
<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/">http://ftp.kde.org/unstable/koffice-1.1-beta3/</A>
or under the equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>. Please note that the
KDE team is not responsible for these packages as they are provided by third
parties -- typically, but not always, the distributor of the relevant
distribution (if you cannot find a binary package for your distribution,
please read the <A HREF="http://dot.kde.org/986933826/">KDE Binary Package
Policy</A>).
<P>
<EM>Library Requirements</EM>.
The library requirements for a particular binary package varies with the
system on which the package was compiled.  Please bear in mind that
some binary packages may require a newer version of Qt and/or KDE
than was distributed with the distribution version for which the binary
package is listed below.  For general library requirements for KOffice,
please see the text at <A HREF="#Source_Code-Library_Requirements">Source Code -
Library Requirements</A>.
</P>
<P>
<EM>Package Locations</EM>.
At the time of this release, pre-compiled packages are available for:
</P>
<P>
<UL>
<LI><A HREF="http://www.debian.org/">Debian GNU/Linux</A> (package "koffice"):</LI>
<UL>
<LI><A HREF="ftp://ftp.debian.org/">ftp.debian.org</A>:  sid (devel)</LI>
<LI><A HREF="ftp://kde.debian.net/">kde.debian.net</A>:  potato (2.2)</LI>
</UL>
<LI><A HREF="http://www.linux-mandrake.com/en/">Linux Mandrake</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/Mandrake/README">README</A> - requires kdelibs-2.1.2):
<UL>
<LI>8.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/Mandrake/8.0/i586/">i586</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/Mandrake/8.0/ppc/">PPC</A></LI>
</UL>
<LI><A HREF="http://www.suse.com/">SuSE Linux</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/README.SuSE">README.SuSE</A> - requires Qt-2.3.x):
<UL>
<LI>7.2:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/7.2/">i386</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/ia64/7.2/">IA64</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</A> directory for common files</LI>
<LI>7.1:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/7.1/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/ppc/7.1/">PPC</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/sparc/7.1/">Sparc</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/axp/7.1/">AXP</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</A> directory for common files</LI>
<LI>7.0:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/7.0/">i386</A>, <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/ppc/7.0/">PPC</A> and <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/s390/7.0/">S390</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</A> directory for common files</LI>
<LI>6.4:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/i386/6.4/">i386</A>; please see the <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/SuSE/NOARCH/">noarch</A> directory for common files</LI>
</UL>
<LI>Tru64 Systems:  <A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/Tru64/">4.0e,f,g, or 5.x</A> (<A HREF="http://ftp.kde.org/unstable/koffice-1.1-beta3/Tru64/README.Tru64">README</A>)</LI>
</UL>
</P>
Please check the servers periodically for pre-compiled packages for other
distributions.  More binary packages will become available over the
coming days and weeks.
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
KDE, K Desktop Environment, KChart, KFormula, KIllustrator, KOffice,
KPresenter, Krayon, KSpread and KWord are trademarks of KDE e.V.
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


