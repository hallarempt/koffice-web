<?php
  $page_title ='KOffice 2.0 Alpha 7 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Alpha 6. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
<li>Improved document structure docker</li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Restore frame loading, improve frame saving</li>
  <li>Start working on anchors support</li>
  <li>Imageshape loading/and saving working</li>
  <li>Click action that starts playing a sound (loading and saving in document not yet implemented)</li>
  <li>Load and save headers</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Fix font scaling</li>
  <li>Load shapes anchored in cells</li>
</ul>


<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Notes support added.</li>
  <li>Beautify the pixmaps used for thumbnails.</li>
  <li>Effect preview</li>
</ul>

<h3 id="kexi">Kexi</h3>
<ul>
  <li>CSV Import Dialog
    <ul>
      <li>Fix setting data types for columns, previously text type was used instead</li>
      <li>Fix autodetecting and importing of floating-point values in "E scientific notation"</li>
      <li>Output null values to fields if value coversion failed (e.g. text-to-date); without this subsequent values are written into the wrong columns</li>
      <li>Added "Date format" import option with possible values: auto, DMY, YMD, MDY (<a href="http://bugs.kde.org/147809">bug #147809</a> and <a href="http://bugs.kde.org/151478">bug #151478</a>)</li>
    </ul>
  </li>
</ul>

<li>Kexi reports module
<ul></ul></li>
<li></li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Gantt chart:
  <ul>
    <li>Fix crash when deleting dependency</li>
    <li>Added dependency types StartStart and FinishFinsh (FinishStart already implemented)</li>
    <li>Added timescale unit Week</li>
  </ul></li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Fix tablet support for NVidia-twinview setups</li>
  <li>Fix crash when doing select-all</li>
  <li>Fix crash when choosing more complex paintop brush engines</li>
  <li>Port bumpmap filter</li>
  <li>Re-enable adjustment layers</li>
  <li>Don't hide the krita tools in the toolbox if a shape layer is selected but 
  disable them</li>
  <li>Fix memory leak on removing layers</li>
  <li>Fix order of tools in toolbox</li>
  <li>Improve the scale image dialog (still needed: keep aspect ratio)</li>
  <li>Use XML for illuminant profiles instead of binary blobs, leading to improved stability</li>
  <li>Fix crash in the unsharp mask filter</li>
  <li>Fix first stroke of painting mapped to the bottom right (when using a tablet)</li>
  <li>Fix blur filter</li>
  <li>Optimize convolution</li>
  <li>Fix crash when duplicating layers</li>
  <li>Fix the middle button switching fg/bg colors</li>
  <li>Remove non-OpenCTL based 16 and 32 bits float colorspaces</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Boundbox snapping of gradient handles when moving</li>
  <li>Fixed loading and saving of images (using boemanns work)</li>
  <li>Start of calligraphy tool as part of GSoC</li>
  <li>Filters:
    <ul>
      <li>Export options dialog for png export filter</li>
      <li>Various improvements to the svg import and export filter (image export, text import)</li>
    </ul>
  </li>
</ul>

<?php
  include("footer.inc");
?>
