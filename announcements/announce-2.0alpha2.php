<?php
  $page_title ='KOffice 2.0 Alpha 2 Release Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE Aug 2, 2007<br />
  FOR IMMEDIATE RELEASE
</p>
<!-- <?php  include("languages-1.6.inc"); ?>  -->
<h2>
  KDE Releases Technology Preview of KOffice
</h2>
<p align="justify">Aug 2, 2007 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  release of
  <a href="http://www.koffice.org/">KOffice</a> version 2.0 Alpha 2, a technology
  preview of the upcoming version 2.0.
</p>

<h2>Highlights</h2>
<p align="justify">
  This is mainly a technology preview for those that are interested in the new ideas
  and technologies of the KOffice 2 series.  KOffice 2.0 is currently under heavy 
  development. It is not meant as something to be used for any real work and can crash
  at any point.  However, here are some of the highlights of the upcoming KOffice 2 series.
  Note that not all of the new technologies will be fully implemented in the first release,
  2.0.  Also note that KOffice
</p>

<h3>Better Integration Through Flake Shapes</h3>
<p align="justify">
The core of the new improvements is the revolutionary Flake library
which will allow KOffice to use any shape in any application.  A Flake
shape can be something as simple as a circle or something as complex
as a complete spreadsheet.  It is also extremely simple to create new
shapes, something that is demonstrated by the <a href="
http://code.google.com/soc/kde/appinfo.html?csaid=9B5F3C70D02AA396">Google-sponsored</a>
Summer of Code project <a
href="http://www.valdyas.org/fading/index.cgi/hacking/musicflake1.html
">Music Notation flake</a>, in which a student creates a music
notation plugin in just 6 weeks.
</p>
<p>
All Flake shapes are plugins, so the user can install new shapes independently of 
the installed KOffice.  This makes KOffice one of the most extenslible office 
suites.  We expect many third-party extensions to appear, leading to same situation
as with mozilla plugins.
</p>

    
<h3>Uses Qt4 and KDE 4 technologies </h3>
<p align="justify">
The infrastructural changes are enormous, with most of the
internals rewritten or changed. KOffice version 2 series will take
full advantage of the improved Qt 4 and kdelibs 4 technologies, giving it
new features like <a
href="http://www.kdedevelopers.org/node/2882">text directionality</a>
and improved <a href="http://www.kdedevelopers.org/node/2812">layouting</a>.
The text rendering is also much improved, giving it a professional quality text
layout if the fonts support it.
</p>
<p>
Other KDE4 technologies that KOffice 2 will eventually take advantage of are
Phonon for multimedia, Telepathy for instant messaging and collaboration and
Sonnet for automatic language recognition.
</p>

<h3>Ports to Windows and MacOS X </h3>
<p align="justify">
Since Qt4 and kdelibs4 are portable to Windows and MacOS X, KOffice 2 will
be too. Due to Qt4, KOffice will have a native look and feel on all 
platforms, making it a well-behaved citizen everywhere.
</p>

<h3>Scripting for all components</h3>
<p align="justify">
KOffice will be scriptable in at least Python, Ruby, Javascript and Java 
through the KDE wide Kross solution.  In this alpha release, this is implemented
for KWord, KSpread and Krita.
</p>

<h2>About KOffice</h2>
  <p align="justify">
    KOffice is an integrated office suite, today mostly for KDE, which utilizes
    free and open standards like
    <a href="http://en.wikipedia.org/wiki/OpenDocument">OpenDocument</a>
    for its document formats, component communication and component embedding.
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
    (<a href="http://www.koffice.org/kivio/">Kivio</a>);
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
  Additionally, KOffice includes the following helper applications:
</p>
<ul>
  <li>business quality reporting software
    (<a href="http://www.koffice.org/kugar/">Kugar</a>)
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
  <a href="http://download.kde.org/stable/koffice-2.0 Alpha 2/">http and ftp</a> mirrors.
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
  Datakonsult AB</a> (which has contributed KDChart to KOffice),
  <a href="http://www.openoffice.com.pl/en/">OpenOffice Polska</a> which 
    employs Kexi developer Jaros&#322;aw Staniek and sponsored the
    <a href="http://wiki.kde.org/tiki-index.php?page=KDElibs+for+win32">KDElibs for win32</a>
    project which enabled the porting of KOffice applications to MS Windows,
  <a href="http://code.google.com">Google</a> which through the &quot;Summer of Code&quot; program supports Alfredo Beaumont to work on OpenDocument and MathML support for KFormula and Emmanuele Tamponi to work on a framework for curves in Krita.
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
  <font size="-2">
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
