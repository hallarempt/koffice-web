<?php
  $page_title ='KOffice 1.1 announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<P>DATELINE AUGUST 28, 2001</P>
<P>FOR IMMEDIATE RELEASE</P>
<H3 ALIGN="center">KDE's Free, Integrated Office Suite Available for Linux/Unix</H3>
<P><STRONG>Leading Linux Desktop Ships Free Stable Release of KOffice</STRONG></P>
<P>August 28, 2001 (The INTERNET).
The <A HREF="http://www.kde.org/">KDE
Project</A> today announced the release of
<A HREF="http://www.koffice.org/">KOffice</A> 1.1.
KOffice is a free, integrated office suite for KDE which utilizes open
standards for component communication and component embedding.
KOffice 1.1 constitutes the most stable and feature-complete release
of KOffice to date.  The KOffice team encourages all users of earlier
KOffice releases to upgrade to KOffice 1.1.
</P>
<P>
"KOffice is undergoing rapid development and its future looks very
bright," stated Eugene Clement, Product Manager for
<A HREF="http://www.mandrakesoft.com/">Mandrakesoft</A>.
"Currently KOffice
has functionality well-suited for home and SOHO users, who generally
write letters, faxes, memos and similar documents.  As the import
filters for proprietary document formats continue to improve and the
suite's features continue to evolve, we expect that in the near future
KOffice will be ready to meet the needs of all but the most demanding
areas of the enterprise."
</P>
<P>
"With this release the KOffice team has delivered a very stable and complete 
office package," said KDE and <A HREF="http://www.suse.com/">SuSE</A>
developer <A HREF="http://www.kde.org/people/waldo.html">Waldo Bastian</A>.
"KOffice
takes full advantage of the new printing support offered by KDE 2.2.  For
example, each KOffice component allows you to email your documents in the
PDF format to your colleagues, or simply to fax them. KOffice is tightly
integrated with the rest of KDE, which makes it friendly on system
resources.  And thanks to the powerful KParts component technology,
it is very flexible and extensible."
</P>
<P>
This release includes the following components:
<A HREF="#kword">KWord</A>
(a frame-based, full-featured word processor);
<A HREF="#kpresenter">KPresenter</A>
(a presentation application);
<A HREF="#kspread">KSpread</A>
(a spreadsheet application);
<A HREF="#kontour">Kontour</A>
(a vector-drawing application);
<A HREF="#kivio">Kivio</A>
(a flowchart application);
<A HREF="#kchart">KChart</A>
(a chart drawing application);
<A HREF="#kformula">KFormula</A>
(a formula editor); and
<A HREF="#filters">filters</A>
(for importing documents created by, or exporting documents for use with,
other office suites or office programs).
</P>
<P>
KOffice and all its components are available for free under
Open Source licenses from the KDE
<A HREF="http://master.kde.org/stable/koffice-1.1/">server</A>
and its <A HREF="http://www.kde.org/mirrors.html">mirrors</A>.
As a result of the dedicated efforts of hundreds of translators,
KOffice 1.1 is available in 28 languages</A>.
</P>
<P>
More information about KOffice, including
<A HREF="http://www.koffice.org/releases/1.1-release.phtml">Release Notes</A>,
a <A HREF="http://www.koffice.org/announcements/changelog-1.1.phtml">list of
changes</A> since the KOffice 1.0 release, and a
<A HREF="http://www.koffice.org/faq/">KOffice FAQ</A>, are
available at the <A HREF="http://www.koffice.org/">KOffice website</A>.
</P>
<P>
<H4>Index</H4>
<UL>
<LI><A HREF="#inbinpack">Installing Binary Packages</A></LI>
<UL>
<LI><A HREF="#binlibreq">Library Requirements</A></LI>
<LI><A HREF="#binpackloc">Binary Package Locations</A></LI>
</UL>
<LI><A HREF="#compile">Downloading and Compiling KOffice</A></LI>
<UL>
<LI><A HREF="#Source_Code">Source Packages</A></LI>
<LI><A HREF="#Source_Code-Library_Requirements">Library Requirements</A></LI>
<LI><A HREF="#compilereq">Compiler Requirements</A></LI>
<LI><A HREF="#furinstr">Further Instructions</A></LI>
</UL>
<LI><A HREF="#appdes">Application Descriptions</A></LI>
<UL>
<LI><A HREF="#kword">KWord</A></LI>
<LI><A HREF="#kpresenter">KPresenter</A></LI>
<LI><A HREF="#kspread">KSpread</A></LI>
<LI><A HREF="#kontour">Kontour</A></LI>
<LI><A HREF="#kivio">Kivio</A></LI>
<LI><A HREF="#kchart">KChart</A></LI>
<LI><A HREF="#kformula">KFormula</A></LI>
<LI><A HREF="#filters">filters</A></LI>
</UL>
<LI><A HREF="#about">About KOffice</A></LI>
<LI><A HREF="#sponsers">Corporate KOffice Sponsors</A></LI>
<LI><A HREF="#press">Press Contacts</A></LI>
</UL>
</P>
<P>
<H4>Installing Binary Packages</H4>
</P>
<P>
<A NAME="inbinpack"><EM><STRONG>Binary Packages</STRONG></EM>.</A>
Some distributors choose to provide binary packages of KOffice for certain
versions of their distribution.  Some of these binary packages for
KOffice 1.1 will be available for free download under
<A HREF="http://master.kde.org/stable/koffice-1.1/">http://master.kde.org/stable/koffice-1.1/</A>
or under the equivalent directory at one of the many KDE ftp server
<A HREF="http://www.kde.org/mirrors.html">mirrors</A>. Please note that the
KDE team is not responsible for these packages as they are provided by third
parties -- typically, but not always, the distributor of the relevant
distribution (if you cannot find a binary package for your distribution,
please read the <A HREF="http://dot.kde.org/986933826/">KDE Binary Package
Policy</A>).
<P>
<A NAME="binlibreq"><EM><STRONG>Library Requirements</STRONG></EM>.</A>
The library requirements for a particular binary package varies with the
system on which the package was compiled.  Please bear in mind that
some binary packages may require a newer version of Qt and/or KDE
than was distributed with the distribution version for which the binary
package is listed below.  For general library requirements for KOffice,
please see the text at <A HREF="#Source_Code-Library_Requirements">Source Code -
Library Requirements</A>.
</P>
<P>
<A NAME="binpackloc"><EM><STRONG>Package Locations</STRONG></EM>.</A>
At the time of this release, pre-compiled packages are available for:
</P>
<P>
<UL>
<LI><A HREF="http://www.caldera.com/">Caldera Systems</A> (<A HREF="http://master.kde.org/stable/koffice-1.1/Caldera/OpenLinux-3.1/README">README</A>)</LI>
<UL>
<LI>OpenLinux-3.1
<UL>
<LI>kdelibs 2.2:  <A HREF="http://master.kde.org/stable/koffice-1.1/Caldera/OpenLinux-3.1/RPMS/kde2.2/">Intel x86 (i386)</A></LI>
<LI>kdelibs 2.1.2:  <A HREF="http://master.kde.org/stable/koffice-1.1/Caldera/OpenLinux-3.1/RPMS/kde2.1/">Intel x86 (i386)</A></LI>
</UL>
</UL>
<LI><A HREF="http://www.conectiva.com/">Conectiva Linux</A> (<A HREF="http://master.kde.org/stable/koffice-1.1/Conectiva/7.0/README">README</A>)</LI>
<UL>
<LI>7.0:  <A HREF="http://master.kde.org/stable/koffice-1.1/Conectiva/7.0/i386/RPMS.main/">Intel x86 (i386)</A></LI>
</UL>
<LI><A HREF="http://www.debian.org/">Debian GNU/Linux</A> (package "koffice"):</LI>
<UL>
<LI><A HREF="ftp://ftp.debian.org/">ftp.debian.org</A>:  sid (devel)</LI>
<LI><A HREF="ftp://kde.debian.net/">kde.debian.net</A>:  potato (2.2)</LI>
</UL>
<LI><A HREF="http://www.linux-mandrake.com/en/">Linux Mandrake</A>:
<UL>
<LI>Cooker: <A HREF="http://master.kde.org/stable/koffice-1.1/Mandrake/cooker/">Intel x86 (i586)</A></LI> 
<LI>8.0:  <A HREF="http://master.kde.org/stable/koffice-1.1/Mandrake/8.0/">Intel x86 (i586)</A>, <A HREF="http://master.kde.org/stable/koffice-1.1/Mandrake/ppc/">PowerPC (ppc)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/Mandrake/ia64/">HP/Intel IA-64 (ia64)</A></LI>
</UL>
<LI><A HREF="http://www.redhat.com/">RedHat Linux</A> (<A HREF="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/README">README</A>):
<UL>
<LI>7.x:  <A HREF="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/i386/">Intel x86 (i386)</A>; <A HREF="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/ia64/">HP/Intel IA-64 (ia64)</A>; <A HREF="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/alpha/">Alpha (alpha)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/s390/">IBM S390 (s390)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/RedHat/7.x/noarch/">noarch</A> directory for common files</LI>
</UL>
<LI><A HREF="http://www.suse.com/">SuSE Linux</A> (<A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/README">README</A>):
<UL>
<LI>kdelibs 2.2</LI>
<UL>
<LI>7.2:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/7.2/">Intel x86 (i386)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/ia64/7.2/">HP/Intel IA-64 (ia64)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
<LI>7.1:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/7.1/">Intel x86 (i386)</A>, <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/ppc/7.1/">PowerPC (ppc)</A>; <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/axp/7.1/">Alpha (alpha)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/sparc/7.1/">Sun Sparc (sparc)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
<LI>7.0:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/7.0/">Intel x86 (i386)</A>, <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/ppc/7.0/">PowerPC (ppc)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/s390/7.0/">IBM S390 (s390)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
<LI>6.4:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/i386/6.4/">Intel x86 (i386)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.2/noarch/">noarch</A> directory for common files</LI>
</UL>
<LI>kdelibs 2.1.2 and kdesupport 2.1.1</LI>
<UL>
<LI>7.2:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/7.2/">Intel x86 (i386)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/ia64/7.2/">HP/Intel IA-64 (ia64)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</A> directory for common files</LI>
<LI>7.1:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/7.1/">Intel x86 (i386)</A>, <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/ppc/7.1/">PowerPC (ppc)</A>, <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/axp/7.1/">Alpha (alpha)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/sparc/7.1/">Sun Sparc (sparc)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</A> directory for common files</LI>
<LI>7.0:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/7.0/">Intel x86 (i386)</A>, <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/ppc/7.0/">PowerPC (ppc)</A>; and <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/s390/7.0/">IBM S390 (s390)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</A> directory for common files</LI>
<LI>6.4:  <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/i386/6.4/">Intel x86 (i386)</A>; please see the <A HREF="http://master.kde.org/stable/koffice-1.1/SuSE/KDE-2.1/noarch/">noarch</A> directory for common files</LI>
</UL>
</UL>
<LI>Tru64 Systems:  <A HREF="http://master.kde.org/stable/koffice-1.1/Tru64/">4.0e,f,g, or 5.x</A> (<A HREF="http://master.kde.org/stable/koffice-1.1/Tru64/README.Tru64">README.Tru64</A>)</LI>
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
<A NAME="compile"><H4>Downloading and Compiling KOffice</H4></A>
</P>
<P>
<A NAME="Source_Code"></A><EM><STRONG>Source Packages</STRONG></EM>.
The source packages for KOffice 1.1 are available for free download at
<A HREF="http://master.kde.org/stable/koffice-1.1/src/">http://master.kde.org/stable/koffice-1.1/src/</A> or in the
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
<LI><EM>Required</EM>:  KOffice 1.1 requires
<A HREF="ftp://ftp.trolltech.com/qt/source/qt-x11-2.2.4.tar.gz">qt-x11-2.2.4</A>
or greater, kdesupport-2.1.x (not needed if using KDE 2.2), and
kdelibs-2.1.2 or greater.  The KDE packages are available from the KDE
ftp servers at
<A HREF="http://master.kde.org/stable/2.1.1/distribution/">http://master.kde.org/stable/2.1.1/distribution/</A>
and <A HREF="http://master.kde.org/stable/2.1.2/distribution/">http://master.kde.org/stable/2.1.2/distribution/</A>.
Please note, however, that kdelibs-2.1.1 will cause some crashes and
anti-aliased font problems.  Moreover, both kdelibs-2.1.1 and kdelibs-2.1.2
will not properly accept .doc documents in the file selection dialog (see the
<A HREF="http://www.koffice.org/releases/1.1-release.phtml">release
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
<A HREF="ftp://ftp.trolltech.com/pub/qt/source/qt-x11-2.3.1.tar.gz">qt-x11-2.3.1</A>
and kdelibs-2.2.  Kdelibs-2.2 provide a few additional features, such
as improved printing support (kdeprint), a scanner plugin, and proper
recognition of .doc files in the file selector dialog.
KDE 2.2 is available from
<A HREF="http://www.kde.org/stable/2.2/">http://www.kde.org/stable/2.2/</A>.
Please note that the kdesupport package has been discontinued for KDE 2.2.x
due to the fact that most distributions already provide the libraries
and programs, which were included in that package.  If you still require
this package, you may use one of the
<A HREF="http://ftp.sourceforge.net/pub/mirrors/kde/snapshots/current/">snapshots</A>.
<BR>&nbsp;<BR>
For more information on the kdelibs-2.2 release, please see the
<A HREF="http://www.kde.org/announcements/announce-2.2.html">release
announcement</A>.
</LI>
</UL>
KOffice 1.1 will not work with versions of Qt older than 2.2.4 or
versions of kdelibs older than 2.1.1.
</P>
<P>
<A NAME="compilereq"><EM><STRONG>Compiler Requirements</STRONG></EM>.</A>
Please note that some components of
KOffice 1.1 (such as the Quattro Pro<SUP>&reg;</SUP> import filter
and the new <A HREF="http://www.koffice.org/kchart/">KChart</A>) will not
compile with older versions of <A HREF="http://gcc.gnu.org/">gcc/egcs</A>,
such as egcs-1.1.2 or gcc-2.7.2.  At a minimum gcc-2.95-* is required.
</P>
<P>
<A NAME="furinstr"><EM><STRONG>Further Instructions</STRONG></EM>.</A>
For further instructions on compiling and installing KOffice, please consult
the <A HREF="http://www.koffice.org/install-source.phtml">installation
instructions</A>.
</P>
<H4><A NAME="appdes">Application Descriptions</A></H4>
</P>
<P>
In addition to the features described below for each application, each
KOffice applications provides embedding of other KOffice documents/components
(e.g., a spreadsheet can be embedded in a word processing document and
accessed/edited from inside KWord), a modern print dialog (including
numerous predefined page sizes, configurable margins, etc.) and print preview,
import of images and clip-art (.wmf format), scanning support and
scripting via KDE's
<A HREF="http://developer.kde.org/documentation/library/dcop.html">DCOP</A>
mechanism.
</P>
<P>
<H5><A NAME="kword">KWord</A></H5>
</P>
<P>
KWord is a FrameMaker-like word-processing and desktop publishing application. KWord's features include:</P>
<UL>
<LI>paragraph style sheets (borders, alignment, spacing, indentation,
bullet points, tab stops, page breaks, and font type, style, color and
size), together with a stylist to edit, add, remove and update
styles (a number of predefined styles are provided);</LI>
<LI>a frame orientation, suitable for simple desktop publishing (DTP);</LI>
<LI>numerous preset as well as custom page sizes;</LI>
<LI>multiple columns per page;</LI>
<LI>headers and footers (including different first page headers/footers);</LI>
<LI>variables, such as page number, company name, user name, document summary,
date and time or a custom variable;</LI>
<LI>tables;</LI>
<LI>embedding of text frames, images and clip-art (.wmf files);</LI>
<LI>chapter numbering;</LI>
<LI>auto-generation of table of contents;</LI>
<LI>auto-correction and spell checking; and</LI>
<LI>templates.</LI>
</UL>
</P>
<P>
More information about KWord
<A HREF="http://www.koffice.org/kword/features.phtml">features</A>, as well as
many <A HREF="http://www.koffice.org/kword/screenshots.phtml">screenshots</A>,
are available at the <A HREF="http://www.koffice.org/kword/">KWord website</A>.
</P>
<P>
<H5><A NAME="kpresenter">KPresenter</A></H5>
</P>
<P>
KPresenter is a presentation application.  Its features include:
<UL>
<LI>inserting and editing rich text (with bullet points, indentation, spacing,
colors, fonts, etc.);</LI>
<LI>embedding images and clip-art (.wmf files);</LI>
<LI>inserting auto-forms;</LI>
<LI>setting many object properties (background, many types of gradients,
pen, shadow, rotation, object specific settings, etc.);</LI>
<LI>working with objects (resizing, moving, lowering, raising, etc.);</LI>
<LI>grouping/ungrouping objects;</LI>
<LI>headers/footers;</LI>
<LI>advanced undo/redo;</LI>
<LI>setting background (color, gradients, pictures, clip-arts, etc.);</LI>
<LI>assigning effects for animating objects and defining effects for
changing slides;</LI>
<LI>playing screen presentations with effects;</LI>
<LI>print as PostScript;</LI>
<LI>creating HTML slideshows with a few mouse clicks;</LI>
<LI>templates (pre- and user-defined);</LI>
<LI>using XML as the document format; and</LI>
<LI>a Presentations Structure Viewer.</LI>
</UL>
</P>
<P>
More information about KPresenter, including some
<A HREF="http://www.koffice.org/kpresenter/screenshots.phtml">screenshots</A>,
is available at the <A HREF="http://www.koffice.org/kpresenter/">KPresenter
website</A>.
</P>
<P>
<H5><A NAME="kspread">KSpread</A></H5>
</P>
<P>
KSpread is a scriptable spreadsheet program which provides both
table-oriented sheets and support for complex mathematical formulas
and statistics.  KSpread features include:
<UL>
<LI>multiple tables/sheets per document;</LI>
<LI>templates;</LI>
<LI>multiple chart formats for displaying data graphically;</LI>
<LI>headers and footers;</LI>
<LI>over 100 formulas, including standard deviation, variance, present value
of annuities and much more;</LI>
<LI>sorting;</LI>
<LI>scripting;</LI>
<LI>lists;</LI>
<LI>cell data validity checking with configurable warnings/actions;</LI>
<LI>comments;</LI>
<LI>series (days of week, months of year, numbers, etc.);</LI>
<LI>conditional coloring of cells;</LI>
<LI>hyperlinks;</LI>
<LI>row and column customization (size, show/hide, font type, style and size,
etc.); and</LI>
<LI>cell customization (data/number format, precision, border, alignment,
rotation, background color and pattern, font type, style and size, etc.).</LI>
</UL>
</P>
<P>
More information about KSpread, including some
<A HREF="http://www.koffice.org/kspread/screenshots.phtml">screenshots</A>,
is available at the <A HREF="http://www.koffice.org/kspread/">KSpread
website</A>.
</P>
<P>
<H5><A NAME="kontour">Kontour</A></H5>
</P>
<P>
Kontour is a vector drawing program which aims to provide similar
functionality to
<A HREF="http://www3.corel.com/cgi-bin/gx.cgi/AppLogic+FTContentServer?pagename=Corel/Product/Details&id=CC1IOY1YKCC">Corel Draw</A><SUP>TM</SUP>
or <A HREF="http://www.adobe.com/products/illustrator/main.html">Adobe
Illustrator</A><SUP>TM</SUP>.  Kontour's features currently include:
<UL>
<LI>many tools (points, line, freehand, bezier, rectangle, polygon,
ellipse/circle);</LI>
<LI>layers and grids;</LI>
<LI>to front/back;</LI>
<LI>visible grids/align to grid;</LI>
<LI>group/ungroup;</LI>
<LI>export as image or EPS;</LI>
<LI>split views and multiple views of the same document;</LI>
<LI>object properties (such as fill, color, line patter, line width
and rounded corners for a rectangle);</LI>
<LI>mirror and rotate;</LI>
<LI>text along object; and</LI>
<LI>align/distribute.</LI>
</UL>
</P>
<P>
More information about Kontour, including some
<A HREF="http://www.koffice.org/kontour/screenshots.phtml">screenshots</A>,
is available at the <A HREF="http://www.koffice.org/kontour/">Kontour
website</A>.
</P>
<P>
<H5><A NAME="kivio">Kivio</A></H5>
</P>
<P>
Kivio is a flowcharting program which offers advanced flowcharting
abilities. Objects are scriptable, and a backend plugin system will
provide objects with unlimited abilities.  For example, an object
could convert a directory of C++ header files and into a graphical
class map, or an object could explore and map out a specified network.
The selected scripting language chosen is
<A HREF="http://www.python.org/">Python</A>, though knowledge of Python
or programming is not required to use Kivio.  Kivio's features include:
<UL>
<LI>dynamically loadable stencils with support for various attributes,
 such as border width, foreground color and fill style (gradient, solid
 pattern, pixmap, arrow heads and text);</LI>
<LI>a built-in stencil builder, which permits you to create your own
stencils without doing any programming;</LI>
<LI>layers for stencil layout (for example, if you are laying out a
floor plan, one layer can contain furniture, while walls and structural
shapes go on another, and wiring on yet another);</LI>
<LI>multiple pages per document;</LI>
<LI>grouping/ungrouping;</LI>
<LI>clipboard history for pasting previously copied stencils;</LI>
<LI>customizable helper lines for easy alignment;</LI>
<LI>sub-selections (for stencils which are made up of numerous small
shapes); and</LI>
<LI>a dynamically resizing grid (the grid scale becomes finer as you
zoom in).</LI>
</UL>
</P>
<P>
More information about Kivio, including a
<A HREF="http://www.thekompany.com/projects/kivio/kivio_tut/">tutorial</A>,
<A HREF="http://www.thekompany.com/projects/kivio/screenshots.php3">screenshots</A>, and
information on obtaining additional
<A HREF="https://www.thekompany.com/products/order/stencils.php3">stencils</A>,
is available at the <A HREF="http://www.thekompany.com/projects/kivio/">Kivio
website</A>.
</P>
<P>
<H5><A NAME="kchart">KChart</A></H5>
</P>
<P>
KChart is a chart drawing application which can be used to embed charts
into your KOffice documents, such as a report written with KWord.  Besides
providing the usual charting capabilities, KChart is both easy to use
and highly configurable.  It provides:
<UL>
<LI>default values for all parameter settings, all of which may be changed
at any time after initializing/drawing the chart;</LI>
<LI>automatic computation or easy configuration of axis values; and</LI>
<LI>specification of size values (axis/grid line width, font sizes,
bar width, dataset gap, pie chart radius, etc.) in either absolute pixels or
relative to the window size (this makes your chart independent of the
window size).</LI>
</UL>
</P>
<P>
More information about KChart, including some
<A HREF="http://www.koffice.org/kchart/screenshots.phtml">screenshots</A>,
is available at the <A HREF="http://www.koffice.org/kchart/">KChart
website</A>.
</P>
<P>
<H5><A NAME="kformula">KFormula</A></H5>
</P>
<P>
KFormula is an easy-to-use formula editor which provides basic input
facilities and support functionality.  Features include:
<UL>
<LI>numerous predefined symbols, including delimiters, matrices, indices,
roots, fractions, integrals and brackets;</LI>
<LI>easy Greek symbol insertion;</LI>
<LI>intelligent cursor movement;</LI>
<LI>advanced syntax highlighting; and</LI>
<LI>multi-level undo support.</LI>
</UL>
</P>
<P>
More information about KFormula, including some
<A HREF="http://www.koffice.org/kformula/screenshots.phtml">screenshots</A>,
is available at the <A HREF="http://www.koffice.org/kformula/">KFormula
website</A>.
</P>
<P>
<H5><A NAME="filters">KOffice filters</A></H5>
</P>
<P>
KOffice includes a number of filters for importing MS Office and Corel
Office documents as well as documents in other formats.  The current
status of these filters is
<A HREF="http://www.koffice.org/filters/status.phtml">available</A> at
the <A HREF="http://www.koffice.org/filters/">KOffice filters website</A>.
</P>
<P>
<A NAME="about"><H4>About KOffice/KDE</H4></A>
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
<A NAME="sponsers"><H4>Corporate KOffice Sponsors</H4></A>
</P>
<P>
Besides the valuable and excellent efforts by the
<A HREF="http://www.koffice.org/developers.phtml">KOffice developers</A>
themselves, significant support for KOffice development has been provided by
<A HREF="http://www.mandrakesoft.com/">MandrakeSoft</A> (which sponsors
KOffice developers <A HREF="http://perso.mandrakesoft.com/~david/">David
Faure</A> and Laurent Montel),
<A HREF="http://www.thekompany.com/">theKompany.com</A> (which
contributed Kivio to KOffice),
and
<A HREF="http://www.klaralvdalens-datakonsult.se/">Klar&auml;lvdalens
Datakonsult AB</A> (which contributed the new KChart to KOffice).  Thanks!
</P>
<HR NOSHADE SIZE=1 WIDTH="90%" ALIGN="center">
<FONT SIZE=2>
<EM>Trademarks Notices.</EM>
KDE, K Desktop Environment, KChart, KFormula, Kontour, KOffice,
KPresenter, Krayon, KSpread and KWord are trademarks of KDE e.V.
Kivio is a trademark of theKompany.com.
PostScript is a registered trademark of Adobe Systems
Incorporated.
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
<A NAME="press">Press Contacts:</A>
</TH></TR>
<TR VALIGN="top"><TD ALIGN="right" NOWRAP>
United&nbsp;States:
</TD><TD NOWRAP>
Eunice Kim<BR>
The Terpin Group<BR>
ekim@terpin.com<BR>
(1) 650 344 4944 ext. 105<BR>&nbsp;<BR>
Kurt Granroth<BR>
granroth@kde.org<BR>
(1) 480 732 1752<BR>&nbsp;<BR>
Andreas Pour<BR>
Chairman<BR>
KDE League, Inc.<BR>
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
Ralf Nolden<BR>
nolden@kde.org<BR>
(49) 2421 502758
</TD></TR>
</TABLE>
<?php
  include("footer.inc");
?>
