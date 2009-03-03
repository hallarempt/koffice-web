<?php
  $page_title ='KOffice 2.0 Beta 6 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

last = 2009-02-14 07:08 r925783

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Beta 5.
</p>
<ul>
<li><a href="#koffice_general">General</li>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kchart">KChart</a></li>
<!-- <li><a href="#kplato">KPlato</a></li> -->
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#plugins">Plugins</a></li>
</ul>

<h3 id="koffice_libs">General</h3>
<ul>
  <li> (<a href="http://bugs.kde.org/"></a>).</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>Fix: crash on double clicking a file in the open existing document pane.</li>
  <li>Fix: two fullscreen actions in the shortcut editor (<a href="http://bugs.kde.org/157383">157383</a>).</li>
  <li>Fix: activating the edit color dialog twice result in a crash.</li>
  <li>Fix: saving of "author-title" in document info.</li>
  <li>Change the active layer if we select a layer in the docker.</li>
  <li><em>Flake</em>
    <ul>
      <li>Fix: when changing stroke properties save them to the canvas resource provider so it can be used when drawing with the pencil tool or when creating paths (<a href="http://bugs.kde.org/183708">183708</a>).</li>
      <li>Fix drawing artefacts for really thick strokes with square caps (<a href="http://bugs.kde.org/184737">184737</a>).</li>
      <li>Fix a wrong bounding box is displayed (<a href="http://bugs.kde.org/184647">184647</a>).</li>
    </ul>
  </li>
  <li><em>KoText</em>
    <ul>
      <li>Fixes: having any tag in the body always adds a linefeed.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix: save and load of the connection shape.</li>
  <li>Fix: loading of frames that are anchored to a page.</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>The cell editor get a different layout wether on horizontal or vertical position.</li>
  <li>Fix: crash when trying to save an embedded chart.</li>
  <li>Fix: bug in formula dialog where the value of whatever parameter you've edited last is replaced by the name of the cell the formula is in.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Fix embedding in konqueror (<a href="http://bugs.kde.org/185429">185429</a>).</li>
  <li>Fix: allways update the shapes when the page is set.</li>
  <li>Fix: make sure the canvas shows the correct content after finishing presentation mode in kpresenter</li>
  <li>Set a style on the layouts so it will be used when using a layout.</li>
  <li>Use the format of the master page when using a layout.</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
  <li></li>
</ul>
<!--
<h3 id="kplato">KPlato</h3>
<ul>
  <li></li>
</ul>-->

<h3 id="krita">Krita</h3>
<ul>
  <li>Fix: make pasting undoable.</li>
  <li>Fix: crash when saving after merging two layers.</li>
  <li>Fix: moving a layer on top of himself make the layer disappear (<a href="http://bugs.kde.org/185200">185200</a>).</li>
  <li>Fix: recomposition of a group of layer with transparent bits.</li>
  <li>Fix: showing tools for loaded shape layers.</li>
  <li>Fix: Substract and Add now respect the selection, channels values aren't inverted when overloading (<a href="http://bugs.kde.org/176536">176536</a>).</li>
  <li>Fix: loading of XMP and IPTC metadata from a PNG file.</li>
  <li>Fix: crash when pasting again in an image created from "paste into a new image" (<a href="http://bugs.kde.org/182970">182970</a>).</li>
  <li>Fix: shapes disappearing when lower/raise, removing (and undoing removal), moving of shape layers (<a href="http://bugs.kde.org/184741">184741</a>).</li>
  <li>Fix: allow to remove image, spread and chart shape.</li>
  <li>Fix: loading/saving of chart and image shapes (<a href="http://bugs.kde.org/184685">184685</a>).</li>
  <li>Fix: crash in dynamic brush.</li>
  <li>Fix: undoing on a transparent image make artefact of the old drawing appears when drawing again (<a href="http://bugs.kde.org/184745">184745</a>).</li>
  <li>Fix: crash when inserting a filter mask.</li>
  <li>Fix: intial display of custom document with transparency inferior at 100%.</li>
  <li>Improve display of histogram.</li>
  <li>Fix: undo with layer below (<a href="http://bugs.kde.org/184747">184747</a>).</li>
  <li>Fix: crash when changing the color space of the image (<a href="http://bugs.kde.org/182108">182108</a>).</li>
  <li>Fix: refresh the canvas after chaning the colorspace of the image.</li>
  <li>Fix: crash in Brightness/Contrast filter (<a href="http://bugs.kde.org/182930">182930</a>).</li>
  <li>Fix: loading and saving metadata in a .kra file.</li>
  <li>Fix: crash when transforming a layer.</li>
  <li>Reenable progress info when scaling,rotating...</li>
  <li>Fix: artefact when scaling.</li>
  <li>Fix: scaling image adds extra transparent space (<a href="http://bugs.kde.org/169736">169736</a>).</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Fix: embedding in konqueror.</li>
  <li>Defaults shapes collection can be customized.</li>
  <li>Fix: generation of preview of ODG files.</li>
  <li>Fix: loading of elliptical quandrant path (<a href="http://bugs.kde.org/184546">184546</a>).</li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li></li>
  <li><em>Artistic Shape</em>
    <ul>
      <li>Fix handling of transformation when loading and svaing to odf (<a href="http://bugs.kde.org/184675">184675</a>).</li>
    </ul>
  </li>
</ul>



<?php
  include("footer.inc");
?>
