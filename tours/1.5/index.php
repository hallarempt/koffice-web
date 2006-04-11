<?php
  $page_title='Release Highlights: KOffice 1.5 Tour';
  $site_root='../../';
  include("koffice.inc");
  include("header.inc");
?>

<p align="justify">
  DATELINE APRIL 11, 2006<br />
  FOR IMMEDIATE RELEASE
  <!-- EMBARGO - DO NOT PUBLISH -->
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

 <p>KOffice finally provides an unified scripting approach called Kross. With Kross you can write
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
    </ul>


 <h2>Kexi</h2>

<p>
KOffice 1.5 contains the much expected final 1.0 version of Kexi - data 
management application that is the KOffice counterpart to MS Access or 
FileMaker. It is designed from the ground up as a standard KDE database 
application.
Kexi can store it's data and design in a single database on a database server 
of file. This version focuses on the data exchangeability and server support.
</p>

<img src="http://kexi-project.org/pics/1.0/simple_printouts_m.png">
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/simple_printouts.png">
-->

<p>
Simple printouts allow you to quickly get high quality without a need of 
exporting data to external tools. Tabular layout is currently supported, with 
several printing options and fast print preview. The latter, unlike standard 
print preview in KDE, does not require to preprocess all the data before 
showing the result!
</p>

<p><b>Example printout:</b></p>
<img src="http://kexi-project.org/pics/1.0/example_printout_m.png">
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/example_printout.png">
-->

<p>
The feature takse advantage of KDE printing system, what means export to PDF 
is available as well.
</p>

<p>
CSV import and export makes your Kexi database interoperable with any 
application supporting CSV format (Comma-separated values). Thanks to unique 
format autodetection, Kexi automatically recognizes delimiters, text quote 
characters and even data types including date or time. All the options can be 
changed by user before data importing or exporting.
</p>

<img src="http://kexi-project.org/pics/1.0/csv_import_m.png">
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/csv_import.png">
-->

<p>
Forms are getting richer with every Kexi release. This time forms are fully 
data-aware, handle read-only and read-write data. Special right-hand Data 
Source Pane has been added to ease assigning data source to inserted text 
boxes. Images can be now inserted from file onto the form or pasted from 
clipboard and then saved within the single database losslessly.
</p>

<img src="http://kexi-project.org/pics/1.0/image_box_m.png">
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/image_box.png">
-->

<p>
As Kexi Team listens what are users' needs, MS Access (MDB, MDE) files 
support has been greatly improved. Files can be just clicked and then Kexi 
will propose importing using special Database Importing Wizard. MS Access 
database tables can be now imported with more accurately converted data types.
</p>

<p>
<b>Importing Northwind sample Microsoft Access (.mdb) database using Kexi on Linux:</b>
</p>
<img src="northwind_mdb_import_sm.png">
<!--
<br/>
<img src="http://kexi-project.org/pics/1.0/northwind_mdb_import/northwind_mdb_import.png">
-->

<p>
In addition to the new features, Kexi contains hundreds of small 
improvements and fixes making everyday use easier. Table, Query and Form 
designer are now smoother in usage. Numerous features do not prevent the app 
from starting fast, as only needed functionality is loaded.
</p>

<p>
Unlike other database envirinments, the application communicates with users 
very verbosely when needed (it contains over translated 1500 messages), 
without cryptic warnings or error numbers. Kexi is already translated to 20 
languages and another about 40 translations are in progress. This makes it as 
ideal also for educational purposes.
</p>

<p>
Kexi provides extensive scripting support. You can find more information on
scripting Kexi here: <a href="http://kross.dipe.org/kexiscriptingoverview/">http://kross.dipe.org/kexiscriptingoverview/</a>
</p>

<!-- TODO copy some content on kexi scripting, the above target is subject to changes... -->

 <h2>Kivio</h2>

    <ul>
      <li>
        <div align="justify">
	 New improved dockers which is shared with Krita and Karbon14.
        </div>
      </li>
      <li>
        <div align="justify">
	 A more powerful text edit dialog.
        </div>
      </li>
      <li>
        <div align="justify">
	 New docker that shows all objects on the page.
        </div>
      </li>
      <li>
        <div align="justify">
	 Automatic guide lines which is shared with KPresenter.
        </div>
      </li>
    </ul>

 <h2>Karbon14</h2>

    <ul>
      <li>
        <div align="justify">
	 Tight selection of objects.
        </div>
      </li>
      <li>
        <div align="justify">
	 Gradient and pattern fill can be edited directly on the canvas.
        </div>
      </li>
      <li>
        <div align="justify">
	 Much improved dockers by using the KoPalette library.
        </div>
      </li>
      <li>
        <div align="justify">
	 Major svg improvements and basic odf support.
        </div>
      </li>
      <li>
        <div align="justify">
	 User interface polishing all around.
        </div>
      </li>
      <li>
        <div align="justify">
	 Printing fixes.
        </div>
      </li>
    </ul>

 <h2>Krita</h2>

<p>
Krita 1.5.0 has a host of features unique in the free software graphical
application arena. Let's begin with the beginning:
</p>

<img src="colorspaces.png">

<p>
As you can see, Krita offers you a choice of colorspaces: 8 and 16 bit cmyk,
8 and 16 bit integer RGB, 16 and 32 bit floating point RGB, 8 and 16 bit grayscale,
16 bit L*a*b -- and even some more exotic colorspaces like LMS cone space or
a watercolor simulation (the latter is still experimental). In future versions
of Krita we will ad YCbCr (already used in the tiff file format filter)
and more artistic colorspaces. All colorspaces (except watercolor and LMS)
are color corrected using [http://www.littlecms.com|lcms]. All tools, from painting
to gradients and almost all filters are usable in all colorspaces. Read about
your colorspace choices in the Krita manual, completely new in Krita 1.5.
</p>

<img src="histogram_layertooltips.png">

<p>
As you can see, Krita's palettes have been expanded and now include an Overview
palette with zoom and panning control, a permanently updated Histogram palette
and the brand new layers palette. Here, you can see a thumbnail of each layer,
and if you let your mouse hover over the layer, you get an informative tooltip
with a larger icon.
</p>

<img src="adjustment_layers.png">

<p>
Non destructive effects have finally arrived: Krita makes it easy for you by
allowing you to use nearly all filters in the new adjustment layer feature.
From artistic to color correction -- and note the new curve widget.
</p>

<img src="layergroups.png">

<p>
Organize your complex layered images using layer groups for performance and
easy handling. This image has a basic layer, and artistic oilpaint filter
adjustment layer grouped together, with two more layers on top. We offer a grid
in several sizes for easy placement of layers.
</p>

<p>
Krita is fully integrated with KOffice, and that means that you can create object
layers that embed documents you can create in any KOffice application. Here we
add a small text to our Krita image:
</p>

<img src="embedding.png">

<p>
And here is how it looks when the embedded KWord is no longer active. You can
even apply adjustment layers over embedded layers!
</p>

<img src="embedding1.png">

<p>
Using the innovative and flexible Kross scripting technology, first featured in Kexi,
Krita is fully scriptable in Python and Ruby. A number of example scripts are provided:
</p>

<img src="scripting.png">

<p>
And when all is said and done, you can save your image using the new png, tiff and jpeg
export filters. Krita now can load raw, png, tiff, jpeg, photoshop (limited to version
6), gimp (limited) and many other file types. Krita can save in png, tiff, jpeg, bmp, gif
and many other file formats.
</p>

 <h2>KPlato</h2>

<img src="/kplato/pics/gantt_small_2006_01.png">

<p>
KOffice 1.5 is the first version to include KPlato, the KOffice Planning Tool.
Please look at <a href="/kplato/">http://www.koffice.org/kplato/</a> for some details.
</p>

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
