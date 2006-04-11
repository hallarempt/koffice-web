<?php
  $page_title='Release Highlights: KOffice 1.5 Tour';
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE APRIL 11, 2006<br />
  <!-- FOR IMMEDIATE RELEASE -->
  EMBARGO - DO NOT PUBLISH
</p>

 <p>
 This tour accompanies the KOffice 1.5 release and shows its most important highlights
 and gorgeous features. It is a comprehensive and easy to read tour through the major
 changes since the release of KOffice 1.4.
 </p>
 <p>
 You can find the <a href="/announcements/announce-1.5.php">full announcement of KOffice 1.5 here</a>.
 </p>

 <h2>Diving into KOffice</h2>

 <p>
 With recent releases KOffice has established its status as the most comprehensive office suite in existence.
 No other office suite provides as many integrated and diverse components as KOffice. At the same time, KOffice
 requires only little memory and provides good performance, making it suitable even for old hardware and avoiding
 the need for expensive upgrades.
 </p>
 <p>
 The list of stunning improvements for the 1.5 release is simply huge, and all of them were implemented
 just within a couple of months. KOffice is picking up momentum, quite a lot as well. This tour gives a
 comprehensive overview of recent highlights. Make yourself comfortable, and enjoy the KOffice Tour.
 </p>

 <!-- the following is by no means complete, just a skeleton, will be improved later -->

 <h2>Core Technology Highlights</h2>

 <h3>Starting up - It's all new</h3>

 <p>Usability experts worked together on a complete new design of the KOffice startup dialog. It is now
 easier to use, more powerful and flexible. And above all, it's nice as well:</p>

 <img src="startup.png">

 <h3>Native OASIS OpenDocument Format support</h3>

 <p>Finally, OASIS OpenDocument is the default native format for all major KOffice applications.
 This is a major step towards interoperability of major office suites on the basis of an open
 industry standard. OpenOffice.org also uses OpenDocument as native file format, other office suites
 support it as well. Supporting the OASIS OpenDocument thus contributes to the open and free global standard
 for office files.</p>

 <h3>Enhanced Accessibility</h3>

<p>
KWord, KSpread, and KPresenter include some enhancements for near blind users 
to have the text spoken of widgets under the mouse pointer and/or widgets 
that have the focus. It also adds a <b>Speak Text</b> option in the context menu 
of the KWord Document Structure Area, which is useful for speaking a 
document.
</p>

<img src="tts.png">

<p>
In addition, all KOffice programs were enhanced for mouseless operation with 
additional shortcuts and keyboard extensions.  For instance, you can press 
Alt+F8 (customizable) and up pops a dialog which you can use to place focus 
on any widget that can receive focus.
</p>

<img src="kbd-focus-ext.png">

<p>
See <b>For Users with Disabilities</b> in the KWord, KSpread, or KPresenter 
handbooks for additional information.
</p>

 <h3>Unified Scripting Support</h3>

 <p>KOffice finally provides an unified scripting approach called KROSS. With KROSS you can write
 Python and Ruby scripts for your KOffice documents.</p>


 <h2>KWord</h2>
    <ul type="disc">
      <li>
        <div align="justify">
         Text selecting greatly optimized.
<!--
- we made the textview indented and you can now select left of the text 
to select the left most char
  - we made the frames easier to click on (larger hit-area)
  - we made the frame-borders clickable which will move the caret if the 
caret was inside the frame already.
-->
        </div>
      </li>
      <li>
        <div align="justify">
        Fit to width zoom mode is saved between sessions and resizing the window 
will mean that the zoom is automatically changed now.
        </div>
      </li>
      <li>
        <div align="justify">
	 KWord makes selecting/moving/resizing frames easier.
        </div>
      </li>
      <li>
        <div align="justify">
	 Center page on screen.
        </div>
      </li>
    </ul>

 <h2>KSpread</h2>

    <ul>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2006/01/percent-featurelet.html">Percent in the formula.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2006/01/last-minute-function-tip.html">Function tip when editing formula.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2005/10/function-autocomplete.html">Autocomplete for function name.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 <a href="http://ariya.blogspot.com/2005/10/highlight-is-cool-dragging-is-sweet.html">Range highlighting.</a>
        </div>
      </li>
      <li>
        <div align="justify">
	 Directly convert Excel files to OpenDocument Spreadsheets on the command line without even starting KSpread:
         <b>koconverter report.xls report.ods</b>
        </div>
      </li>
    </ul>

 <h2>KPresenter</h2>

    <ul>
      <li>
        <div align="justify">
	 Snapping guide lines (if you move an object to the guide line, the objects 
will snap to the guide line).
        </div>
      </li>
      <li>
        <div align="justify">
	 Auto guide lines (automatically have guides to snap an object during moving 
to other objects boarders).<br/>
         <img src="guide.png">
        </div>
      </li>
      <li>
        <div align="justify">
	 As KWord also make selecting/moving/resizing objects easier by implementing 
most features from <a href="http://www.koffice.org/developer/keyboardmodifiers.php">http://www.koffice.org/developer/keyboardmodifiers.php</a>.
        </div>
      </li>
      <li>
        <div align="justify">
	 
        </div>
      </li>
    </ul>


 <h2>Kexi</h2>

 <h2>Kivio</h2>

 <h2>Karbon14</h2>

 <h2>Krita</h2>

 <h2>KPlato</h2>

 <h2>KChart</h2>

 <p>
 KChart is the charting component of KOffice. It can be embedded into almost 
 any other KOffice application, such as KWord or KSpread. It supports 8 
 different types of charts, among them bar, line, area, pie, ring and polar 
 charts.  Almost every aspect of the chart can be customized after the chart 
 is created, such as colors, fonts and placement of different entities like 
 the legend.
 </p>

<!--

 <h2>KFormula</h2>

 <h2>Kugar</h2>

-->

<!-- UP TO HERE -->


<h2>About KOffice and KDE</h2>
  <p align="justify">
  KOffice is an integrated office suite for KDE which utilizes free and
  open standards for its document formats, component communication and
  component embedding.
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
  <li>a pixel based image editing and painting application
    (<a href="http://www.koffice.org/krita/">Krita</a>);
  </li>
  <li>a vector-drawing application
    (<a href="http://www.koffice.org/karbon/">Karbon14</a>).
  </li>
  <li>a technology preview of a new project management application
    (<a href="http://www.koffice.org/kplato/">KPlato</a>).
  </li>
</ul>
<p>
  Additionally, KOffice includes robust embeddable objects:
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
  and support for many different
    <a href="http://www.koffice.org/filters/1.5/">file formats</a>.
</p>
<p align="justify">
  KOffice 1.5 is a subproject within KDE, a powerful and easy-to-use Internet-enabled
    desktop for Linux and other UNIXes.  Together, KDE and KOffice constitute the
  only Free Software project to provide a complete desktop and productivity
  environment for Linux/UNIX.
</p>
<p align="justify">
  KOffice and all its components (including KDE) are available
  <em><strong>for free</strong></em> under Open Source licenses from the KDE
  <a href="http://download.kde.org/stable/koffice-1.5.0/src/">http and ftp</a> mirrors.
</p>

<?php include("footer.inc"); ?>
