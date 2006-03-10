<?php
  $page_title ='KOffice 1.5-beta2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.5 beta1.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kivio">Kivio</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kugar">Kugar</a></li>
<li><a href="#filters">Filters</a></li>
</ul>


<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
 <li><em>KOText:</em>
 <ul>
  <li>Fix problem with right-aligned tabs</li>
  <li>Fix footnote numbering</li>
  <li>Fix strange red and blue lines appearing for people who use --enable-debug</li>
 </ul></li>

 <li><em>KRoss</em>
 <ul>
  <li>Fix deleting of ruby wrapped objects</li>
  <li>Handle Python unicode strings</li>
 </ul></li>
</ul>

<h3 id="kword">KWord</h3>

<ul>
 <li><em>OASIS OpenDocument</em>
 <ul>
  <li>Reworked loading of master page layout for the case where a non standard master page is used.</li>
  <li>Saving bookmarks</li>
  <li>In general OASIS support improvements.</li>
 </ul></li>
 <li>Don't change textframes to be the minimum size when user set it to protect size.</li>
 <li>Improve mouse handling</li>
 <li>Fix crash due to missing table cell (122807)</li>
 <li>Enable pasting objects from KSpread</li>
 <li>Saner margins</li>
 <li>Fixes for pasting</li>
 <li>Autoscrolling when resizing the insertion rectangle</li>
 <li>Fixes for selecting text with mouse in textmode</li>
 <li>Fix copy &amp; pasting of embedded documents</li>
 <li>Many crash fixes</li>
</ul>

<h3 id="kspread">KSpread</h3>

<ul>
 <li>Prevent crash when problems with temp files arise</li>
 <li>Don't save background of cell if not set. Huge improvement in speed</li>
 <li>Prevent the embedded object from being scrolled out of view after double-clicking on it</li>
 <li>Fix creation of emtpy charts</li>
 <li>Fixes for printing</li>
 <li>Fix crash bug 122239</li>
 <li>Cells can have longer text than 5000 character</li>
 <li>Fix problem with recalculation not working in saved .ksp files</li>
 <li>OASIS OpenDocument improvements</li>
 <li>Multi-select for objects, object handling is now conform to the KOffice standards</li>
 <li>Fix link to local file</li>
 <li>Fixed bug 122237, empty cells get displayed correctly.</li>
 <li>Brace highlighting in the formula editor</li>
 <li>Several crash fixes</li>
 <li>Selection optimization speed</li>
 <li>Painting improvements</li>
 <li>Many performance fixes</li>
 <li>Fix BUG:121104 - Automatic Recalculation sheeting in Sheet Properties dialog is now respected.</li>
 <li>BUG:109797: Protect quote characters in cells by replacing each quote character by two consecutive quote characters.  Produce CSV files with the same number of columns in every row.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
 <li>Updated icons</li>
 <li>Fix bug 122623: Vertically aligned texts in presentation are displaced first</li>
 <li>Fix for Bug 121414: KPresenter Krashed when I attempted to open a .ppt file from with the program.</li>
 <li>Optimize insertion of many objects</li>
 <li>Fix custom slideshow</li>
 <li>Fix Bug 120702 crash when opening odp-file created in OOImpress2.</li>
 <li>Fix Bug 120893: Crash when quitting an text box in edit mode.</li>
 <li>Save/load animations on the master slide in OASIS format</li>
</ul>

<h3 id="kivio">Kivio</h3>
<ul>
 <li>Fix CellPhone stencil</li>
 <li>Improvements in connector handling</li>
</ul>

<h3 id="kexi">Kexi</h3>

<ul>
 <li><em>Forms:</em>
 <ul>
  <li> Fixed saving images within forms for MySQL and PostgreSQL databases. </li>
 </ul></li>
 <li><em>Database Drivers</em>
 <ul>
  <li>MySQL: non-latin1 text data (UTF8 encoded) was not properly retrieved.</li>
  <li>MySQL, PostgreSQL: entering special characters like ', \, ", \n did not work.</li>
 </ul></li>
 <li><em>CSV Import Dialog </em>
 <ul>
  <li>Fixed crash when importing CSV files smaller than 200 bytes. </li>
  <li>Fixed CSV importing for MySQL and PostgreSQL databases. </li>
 </ul></li>
 <li><em>Command-line Options</em>
 <ul>
 <li>Fixed support for -print-preview option. </li>
 </ul></li>
</ul>


<h3 id="krita">Krita</h3>
<ul>
 <li>Improved transform tool (the results still aren't good quality, but crashes and funny leaps have been removed)</li>
 <li>Fix crash after executing a script</li>
 <li>Improve rendering of adjustment layers</li>
 <li>Initial image size is set to size of clipboard image if present (bug 122815)</li>
 <li>Fix crash in computing adjustment layers</li>
 <li>Load scripts if Krita is loaded from KOShell</li>
 <li>Fix layout of tool option widgets</li>
 <li>Fix ui problem with opacity slider</li>
 <li>Save images with .rgb extension as SGI</li>
 <li>Enable scrollwheel and pan in preview widget</li>
 <li>Fix saving bmp -- use .bmp3 extension to save in the most widely compatible bmp format.</li>
 <li>Fix undo of layer colorspace schange</li>
 <li>Improve rendering performance if zoom < 1.0</li>
 <li>Fix layer name counter staying incremented after cancelling a new layer</li>
 <li>Disable apply filter again menu entry initially</li>
 <li>Reorganize filter menu to not include empty items</li>
 <li>Add support of YCbCr tiff images</li>
 <li>Load deflated tiff images</li>
 <li>Fix birdeye panel</li>
 <li>Fix implementation and improve speed of resize, scale, rotate, shear, mirror </li>
 <li>Fix crash with big images and minimum swappiness</li>
 <li>Fix loading and saving of adjustment layers (please test!)</li>
 <li>Add progress dialog for raw import</li>
 <li>Speedup rendering of lab histograms for histogram docker. Also speeds up conversion to lab colorspace</li>
 <li>Many fixes in embedded part creation, handling, rendering, loading and saving</li>
 <li>Improve performance of histogram docker</li>
 <li>Make wetness, size and hardness when painting wet dependent on pressure</li>
 <li>Add preview for part layers to layerbox</li>
 <li>Fix pressure adjustment checkboxes for opacity, darken and size</li>
 <li>Created pipe brushes should work now</li>
 <li>Fix edges of adjustment layers</li>
 <li>Make moving a group layer move all containing layers</li>
 <li>Fix opening of jpegs and tiffs with unidirectional profiles</li>
 <li>Add CREATE resource compliance</li>
 <li>Sppedup loading of images greatly</li>
 <li>Speedup gradient rendering a lot</li>
 <li>Implement mixcolors for cmyk (fill &amp; select contiguous should work now)</li>
 <li>Fix flatten image</li>
 <li>Improved speed of filters gallery dialog</li>
 <li>Add REPEAD option to convolution painter</li>
 <li>Fix bugs 120988, 121341, 108919,</li>
 <li>Improve convolution painter with 25%</li>
 <li>Fix tablet and popup menu interaction bug</li>
 <li>Fix bumpmap filter</li>
 <li>Fix poly tools: double-click or shift-click to end the poly</li>
 <li>Fix autobrush for circle</li>
 <li>Better tool cursors</li>
 <li>Add palettes and brushes submitted by Natalie.</li>
 <li>Implement grow/shrink/smooth/erode/dilate/border  selection function</li>
 <li>Fix rendering on ppc</li>
 <li>Fix RAW import filter</li>
 <li>Fix simple noise reducer for cmyk</li>
 <li>Fix for colorspaces where the default pixel color isn't all 0</li>
 <li>When resizing an image to the size of a layer, move the layer to 0,0</li>
 <li>Enable loading remote images from recent files widget</li>
 <li>Don't crash when out of memory for a wavelet transform</li>
 <li>Add show selection toggle shortcut</li>
 <li>Filters config widgets with sliders should now be much more responsive</li>
 <li>Improved speed of filter preview widget lots</li>
 <li>Fix loading images with different profiles for layers</li>
 <li>UI fixes for layerbox</li>
 <li>Fix merge with layer below</li>
 <li>Display grid in opengl mode</li>
 <li>Don't crash when per-channel adjusting cmyk</li>
 <li>Better colors for cmyk in histogram</li>
 <li>Make it possible to change the current profile without converitng pixel values</li>
 <li>Fix feather selection (crash fix)</li>
 <li>Fix loading profiles fomr color/icc, .color/icc</li>
 <li>Add support for exif in jpeg</li>
 <li>Speedup on creating a selection</li>
 <li>Don't set the image dirty when clicking on the gray borders</li>
 <li>Optimize rendering for images with only one layer</li>
 <li>Allow moving a layer outside its group by pressing up</li>
 <li>Fix separations plugin</li>
 <li>Fix colorchoosers flicker &amp; background color bug</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
 <li>Fixes to gradient widget</li>
 <li>Improved OASIS support</li>
 <li>Fix for printing (bugs 119452, 99927)</li>
 <li>Fix crash with gradients</li>
 <li>Fix bug crash when Karbon is embedded in koshell</li>
 <li>properly update the objects bounding box when moving bezier points</li>
 <li>Fix Bug 120374 -- crash in AI export</li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
 <li>Put back project name in printout</li>
 <li>Clip printout of gantt chart</li>
 <li>Nicer icons</li>
 <li>Much improved calculations</li>
 <li>Fix status representation</li>
 <li>Zoom for gantt charts</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
 <li>Add start of OASIS OpenDocument support</li>
 <li>Replace charting engine with new version from KDab</li>
 <li>Fix for display flicker</li>
 <li>Fix bug 41612</li>
</ul>

<h3 id="kugar">Kugar</h3>
<ul>
 <li>Kugar is no longer accessible from koshell</li>
 <li>Fix crash when changing pages on reloaded report</li>
</ul>

<h3 id="filters">Filters</h3>

<em>KWord:</em>
<ul>
 <li>Many fixes and improvements in the html import filter</li>
</ul>

<?php
  include("footer.inc");
?>
