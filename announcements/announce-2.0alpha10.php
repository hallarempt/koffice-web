<?php
  $page_title ='KOffice 2.0 Alpha 10 Release Announcement';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE August 27, 2008<br />
  FOR IMMEDIATE RELEASE
</p>
<h2>
  KDE Releases Technology Preview of KOffice
</h2>
<p align="justify">August, 2008 (The INTERNET).
  The <a href="http://www.kde.org/">KDE Project</a> today announced the
  release of
  <a href="http://www.koffice.org/">KOffice</a> version 2.0 Alpha 10, a technology
  preview of the upcoming version 2.0.
</p>
<p align="justify">
    Like the previous alpha releases, this is mainly a technology preview
    for those that are interested in the new
    ideas and technologies of the KOffice 2 series. Note that KOffice 2.0
    is only the beginning: not all features we are laying down the foundations
    for today will already be available in our 2.0 release.
</p>

<h2>Highlights</h2>

<p align="justify">
  KOffice 2 is currently under heavy development. It is not meant
  to be used for any real work and can crash at any point.
    The Alpha 10 release is a work in progress.  This
    release introduces improvements in almost all the components as well
    as in the common infrastructure. All the applications saw big changes,
    both bugfixes and new features.  However, we would still like to mention
    some things especially:
</p>


<h3>KPresenter Presenter View</h3>
<p align="justify">
Fredy Yanardi and Thorsten Zachmann have worked on making KPresenter a presentation application again and have implemented different ways of viewing a set of slides.
</p>
<p>
<center><a href="pics/2008_08_26_presenter_view_main.png"><img src="pics/2008_08_26_presenter_view_main_400x300.png" width="400" height="300" /></a></center>
</p>

<h3>KWord is about styles</h3>
<p align="justify">
Much work has been done on page, paragraph and character styles in KWord. There is a new, hierarchical style docker that makes selecting a style for your text a snap. And KWord, as well as all other KOffice applications, profits from the shape style docker that makes it easy select the foreground and background style of all shapes.
</p>
<p>
<center><img src="pics/2008_08_26_styles_treeview_400_216.png" width="400" height="216" /></center>
</p>

<h3>Ultimate drawing experience in Krita and Karbon </h3>
<p align="justify">
Lukas Tvrdy, helped by Boudewijn Rempt and a host of academic papers, has implemented a new brush engine for Krita, meant to simulate Chinese brush painting, but which turns out to be a great basis for all bristly painting materials. We were ourselves surprised when the French artist and Krita tester Enkhitan turned up with this work, entirely painted with the new brush engine:
</p>
<p><center><a href="pics/2008_08_26_sumi-e_coolness.jpg"><img src="pics/2008_08_26_sumi-e_coolness_400x300.jpg" width="400" height="300" /></a></center>
</p>

<h2>More Information</h2>
<p align="justify">
    More information about new KOffice2 technology can be found in the
    <a href="changelog-2.0-alpha10.php">changelog</a>, or in the <a href="visual-changelog-2.0-alpha10.php">visual changelog</a> and earlier announcements or in the <a href="http://www.koffice.org/releases/2.0alpha10-release.php">release notes</a>.
</p>

<h2>(Bug Reports and User Feedback )</h2>
<p align="justify">
      While for most KOffice applications, bugs reports on the KDE bugzilla
    <a href="http://bugs.kde.org">bugs.kde.org</a> are not yet needed since
    there are too many visible problems, applications are more ready,
and would like to receive user feedbacks on bugs:
<ul>
  <li>Karbon</li>
  <li>KPlato</li>
  <li>Krita (Note: filters are broken in this release. This problem is already solved and the fix will be in the first beta release of KOffice 2.0)</li>
  <li>KSpread</li>
  <li>The report component of Kexi</li>
</ul>

This list will be expanded as soon as the developers of other application think
their application is ready for a more wider testing.
</p>


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
<!--  <li>a flowchart application
    (<a href="http://www.koffice.org/kivio/">Kivio</a>);
  </li>
  <li>an integrated database application
    (<a href="http://www.koffice.org/kexi/">Kexi</a>);
  </li>-->
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
  <li>full-featured charting engine
    (<a href="http://www.koffice.org/kchart/">KChart</a>)
  </li>
<!--  <li>mathematical formula handling
    (<a href="http://www.koffice.org/kformula/">KFormula</a>)
  </li>-->
</ul>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/unstable/koffice-1.9.95.4/src/">http and ftp</a> mirrors.
</p>
<hr />

<p align="justify">
  <font size="2">
  <em>Announcement</em>:  Written by Cyrille Berger and Boudewijn Rempt
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
  AJ Venter<br />
  Unit 7B Beauvallon Village<br />
  13 Sandown Road<br />
  West Beach<br />
  Cape Town<br />
  7441<br />
  South-Africa<br />
  Phone: +27-83-455-9978<br />
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
