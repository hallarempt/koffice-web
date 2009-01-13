<?php
  $page_title ='KOffice 2.0 Beta 5 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Beta 4.
</p>
<ul>
<li><a href="#koffice_general">General</li>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<!-- <li><a href="#kexi">Kexi</a></li> -->
<!-- <li><a href="#kchart">KChart</a></li> -->
<li><a href="#kplato">KPlato</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#plugins">Plugins</a></li>
</ul>

<h3 id="koffice_general">General</h3>
<ul>
  <li>First change.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>First change.</li>
  <li>Second change..</li>
  <li><em>KoPageApp</em>
    <ul>
      <li>foo.</li>
    </ul>
  </li>
  <li><em>Flake</em>
    <ul>
      <li>bar</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix numero uno</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>fuuuuum.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Fix is described here.</li>
</ul>

<!--<h3 id="kchart">KChart</h3>
<ul>
  <li></li>
</ul>-->

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Fix!!1!lol.</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Fixes to the convolution code (which helps with many filters)</li>
  <li>Show a preview of the current brush stroke definition</li>
  <li>Fix handling of buildup and wash modes (and other settings in brush presets)</li>
  <li>Improvements to flatten image</li>
  <li>Fix cloning of image hose brushes; painting with image brushes works again now</li>
  <li>Do not use shaders if use of shaders is disabled, not even for HDR preview (fixes a crash on intel gma graphics)</li>
  <li>Fix merging of layers</li>
  <li>Fix building with newer versions of exiv2</li>
  <li>Finish porting the chalk paintop</li>
  <li>Fix opacity handling in the gradient dialog</li>
  <li>Improve performance when painting freehand</li>
  <li>Fix crash when painting with the sumi-e brush using a tablet (17755)</li>
  <li>Make the cubism filter work in any colorspace</li>
  <li>Fix crash on autosave (<a href="http://bugs.kde.org/178235">178235</a>)</li>
  <li>Fix saving and loading in .kra file format: everything is now saved and loaded except for metadata and vector selections. Unfortunately, there is still a bug when loading vector layers.</li>
  <li>Fix display of layers with a transparency mask</li>
  <li>Fix startup crashes caused by a bug in the small color docker</li>
  <li>Fix wave filter</li>
  <li>Fix blur filter display when used in a filter mask</li>
  <li>Fix crash on shear layer</li>
  <li>Fixing Crash on clicking on category name (<a href="http://bugs.kde.org/177164">177164</a>)</li>
  <li>Show progress for Scale, Rotate and Shear (<a href="http://bugs.kde.org/176808">176808</a>)</li>
  <li>Crash on startup when compiling with -march=core2 (<a href="http://bugs.kde.org/177133">177133</a>)</li>
  <li>Fix painting on a filter mask</li>
  <li>Fix locking/unlocking and showing/hiding masks</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>El Karbon est la fixed.</li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li>Fixxx.</li>
  <li><em>Text Shape</em>
    <ul>
      <li>Die Fixen, ja?.</li>
    </ul>
  </li>
</ul>



<?php
  include("footer.inc");
?>
