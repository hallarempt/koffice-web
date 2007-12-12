<?php
  $page_title ='KOffice 2.0 Alpha 5 Release Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE Nov 21, 2007<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Releases Technology Preview of KOffice
</h2>
<p align="justify">Nov 21, 2007 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  release of
  <a href="http://www.koffice.org/">KOffice</a> version 2.0 Alpha 5, a technology
  preview of the upcoming version 2.0.
</p>

<h2>Highlights</h2>
<p align="justify">
  This is mainly a technology preview for those that are interested in the new 
  ideas and technologies of the KOffice 2 series.

  The Alpha 5 release is a work in progress.  This 
  release introduces improvements in almost all the components as well
  as in the common infrastructure.  One such change is that more 
  resources like gradients and strokes are now shared between all the 
  applications. All the applications saw big changes, both bugfixes and
  new features. At the <a href="http://lists.kde.org/?l=koffice-devel&m=119349867222306&w=2">KDab and KDE e.V. sponsored sprint
  in Berlin, many important decisions were made.</a> and a release schedule
  was agreed upon.
</p>
<p align="justify">
  KOffice 2 is currently under heavy development. It is not meant as something
  to be used for any real work and can crash at any point.  However, here are
  some of the highlights of the upcoming KOffice 2 series. Note that not all
  of the new technologies will be fully implemented in the first release, 2.0.
</p>
<p>
Also note that although KOffice is included in KDE 4.0 RC 1, it has its own
release cycle, and the first version of the KOffice version 2 series
is expected <a
href="http://wiki.koffice.org/index.php?title=KOffice2/Schedule">around
late Q1 2008</a>.
</p>


<h3>More Shared Infrastructure</h3>
<p align="justify">

  The general libraries saw several enhancements.  First, there is improved
  sharing by making resources like gradients and strokes shared.  All
  applications are now using the same implementation of these features, 
  something that will reduce bugs and heighten the users feeling of a
  unified application suite.  Another change is that the basic routines
  for handling the OpenDocument Format have been broken out into its own
  library.  This is not a user-visible change, but important nonetheless
  because it is this library that was suggested will be made <a href="http://dot.kde.org/1179144063/">available for other KDE
  developers in kdelibs 4.1.</a>

</p>

<p align="justify">

  Other new features are improved rulers, a central docker for the document
  structure and a new connector feature for shapes.  This is good news for
  Kivio, the flowchart and network editor, that has so far not seen much
  work is now easier to make work.

</p>


<h3>Simplified Word Processor: Kids Office</h3>
<p align="justify">

 Over a year ago, <a href="http://ingwa2.blogspot.com/2005/09/koffice-kids-office.html">Inge Wallin proposed a simplified word processor</a> to be used
 in school for kids.  Thomas Zander, the KWord lead developer, 
 <a href="http://labs.trolltech.com/blogs/2007/11/10/koffice-in-educational-settings/">made a proof of concept of this using the infrastructure of KOffice 2</a>.  This proved simpler
 than even Thomas would have believed, and KOffice 2.0 Alpha5 now contains a
 first version of the KOffice for kids.  Note that only the GUI is simplified, and that 
 it still contains the full power of KOffice. This means that it can save and load
 the OpenDocment Format, which will make it easy to interact with other
 users of OpenOffice.org or the full KOffice suite.

</p>

<h3>New Drawing Tools in Krita</h3>
<p align="justify">

  The Krita team is working hard to make Krita the best free pixel based
  image editor in the world.  This version introduces so called <a href="http://www.valdyas.org/fading/index.cgi/hacking/krita/wacoms.comments">Chinese
  Brushes</a> and a new Path Tool.  It also now has all the filters that 
  Krita 1.6 had again, as well as a <a href="http://www.valdyas.org/fading/index.cgi/hacking/krita/livepreview.comments">first-cut implementation of on-canvas
  filter previews</a>.

</p>


<p>More information about new KOffice2 technology can be found in the <a href="announce-2.0alpha4.php">Alpha4-announcement</a> and earlier or in the <a href="http://www.koffice.org/releases/2.0alpha5-release.php">release notes</a>.</p>

<h2>About KOffice</h2>
  <p align="justify">
    KOffice is an integrated office suite built on the KDE platform, and
    utilizes free and open standards like
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
<!--  <li>business quality reporting software
    (<a href="http://www.koffice.org/kugar/">Kugar</a>)
  </li>
-->
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
  <a href="http://download.kde.org/unstable/koffice-1.9.95/src/">http and ftp</a> mirrors.
</p>
<hr />

<p align="justify">
  <font size="2">
  <em>Announcement</em>:  Written by Inge Wallin
<!--  [Translated into _____________ by ______________ .] -->
  </font>
</p>
<p align="justify">
  <font size="-2">
  <em>Trademarks Notices.</em>

  KDE, K Desktop Environment and KOffice are trademarks of KDE e.V.

  Linux is a registered trademark of Linus Torvalds.

  Trolltech and Qt are trademarks of Trolltech ASA.

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
P.O.Box 30955<br />
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
