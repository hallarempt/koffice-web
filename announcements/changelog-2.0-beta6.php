<?php
  $page_title ='KOffice 2.0 Beta 6 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

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
  <li>Prevent an error message to appear when a KOffice application is launched by clicking on a file in a filemanager for instance (<a href="http://bugs.kde.org/156339">156339</a>).</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>Fix: Dialog for inserting fixed variable has wrong title (<a href="http://bugs.kde.org/180947">180947</a>).</li>
  <li><em>Flake</em>
    <ul>
      <li>Implemented saving of connections.</li>
      <li>Fix: load images that are not embedded inside the odf file but provided as links to e.g. a website.</li>
      <li>Fix: Update the rulers correctly.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix: showing a non-functional menu option "Formatting Characters".</li>
  <li>Fix: crash when opening .ODF file (<a href="http://bugs.kde.org/180759">180759</a>).</li>
  <li>Fix: image looks ugly when scaled (<a href="http://bugs.kde.org/180888">180888</a>).</li>
  <li>Fix: when opening a .DOC file (<a href="http://bugs.kde.org/173673">173673</a>).</li>
  <li>Fix: KWord showing wide dockers at startup.</li>
  <li>Fix: crash when saving (<a href="http://bugs.kde.org/180238">180238</a>).</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Fix: when navigating, with the keyboard, to a non-top cell of a merged area, editing would happen on the wrong cell.</li>
  <li>Fix: crash when using KSpread as spreadsheet shape (<a href="http://bugs.kde.org/178173">178173</a>).</li>
  <li>Merging and dissociating cells now properly refreshes the selection (<a href="http://bugs.kde.org/115949">115949</a>).</li>
  <li>Fix: remove border around cells (<a href="http://bugs.kde.org/173734">173734</a>).</li>
  <li>Fix: some errors and typos in some function descriptions (<a href="http://bugs.kde.org/161423">161423</a>).</li>
  <li>Fix: single quotes being stripped out while saving (<a href="http://bugs.kde.org/138006">138006</a>).</li>
  <li>Use a more sane default column width when importing .xls files (<a href="http://bugs.kde.org/128269">128269</a>).</li>
  <li>Fix: saving of cells formatted explicitly as text really as text, even if the content is numeric (<a href="http://bugs.kde.org/143840">143840</a>).</li>
  <li>Draw the comment-marker in the corner of the cell it is in, even if the text in that cell doesn't fit and continues in the next cell (<a href="http://bugs.kde.org/120863">120863</a>).</li>
  <li>Fix: some errors in the documentation and/or implementation of some of KSpread's functions (<a href="http://bugs.kde.org/150066">150066</a>).</li>
  <li>Fix: saving dates and times from an ods document produces with KSpread 1.6 (<a href="http://bugs.kde.org/115273">115273</a>).</li>
  <li>Fix: the font tab of the layout dialog when an unknown font is selected.</li>
  <li>Fix: export numbers when exporting to latex (<a href="http://bugs.kde.org/72878">72878</a>).</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Fix: Background image should fit the slide/page size (<a href="http://bugs.kde.org/181866">181866</a>).</li>
  <li>Fix: in Detailed / Minimal Mode, if we select one shape from another page, the shape will be selected for a moment before it gets deselected and the page that contains the shape gets selected.</li>
  <li>Fix: active page is not selected after starting or after loading a document.</li>
  <li>Fix: active page is not selected after going back to Thumbnail Mode from Minimal / Detailed mode and the object selected was not a page (e.g. a layer or a shape).</li>
  <li>Fix: Crash on inserting an image into a page layout (<a href="http://bugs.kde.org/181373">181373</a>).</li>
  <li>Add default page layouts when there are not available in the document.</li>
  <li>Fix: crash when loading an invalid ODP document, with no style.</li>
  <li>Fix: avoid duplicate layout in the docker when copying a slide.</li>
  <li>Fix: make it possible to select a shape in the document docker.</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
  <li>Fix: line/area charts must not have an offset on left and right side if not combined with bar chart.</li>
</ul>
<!--
<h3 id="kplato">KPlato</h3>
<ul>
  <li></li>
</ul>-->

<h3 id="krita">Krita</h3>
<ul>
  <li>Fix: the blur filter always having the same vertical and horizontal radius.</li>
  <li>Fix: hidding of selection</li>
  <li>Fix: update the canvas when the resolution of an image is changed.</li>
  <li>Fix: crash when selecting all.</li>
  <li>Fix: path creation tool, correctly reinitialize the tool after closing a path, this fix path always starting from the same point.</li>
  <li>Fix: crash when using tools when there is no layer in layer stack.</li>
  <li>Fix: misreading some exiv array because endianess information is wrong.</li>
  <li>Fix: saving metadata to XMP.</li>
  <li>Fix: loading of CFA values from Exif.</li>
  <li>Fix: loading of image resolution and of shape layers.</li>
  <li>Fix: loading and saving of OpenRaster (long-term) Archiving file.</li>
  <li>Fix: undo commands for most stack operation (add, remove, lower, raise, move, copy...).</li>
  <li>Fix: setting spacing for Pixel Brush crashes (<a href="http://bugs.kde.org/180649">180649</a>).</li>
  <li>Fix: crash after undoing flatten image (<a href="http://bugs.kde.org/179605">179605</a>).</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Fix: preserve the transformation so that canceling a boolean operation doesn't affect the gradient and pattern fill.</li>
  <li>Fix: resizing of groups and artistic text shapes.</li>
  <li>Fix: ouline painting using a custom border model.</li>
  <li>Fix: exporting stroke dashes.</li>
  <li>Fix: parsing of x and y attribute of the use tag (<a href="http://bugs.kde.org/119150">119150</a>).</li>
  <li>Fix: saving of the stroke width.</li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li>Fix: aligning with selected groups.</li>
  <li><em>Artistic Shape</em>
    <ul>
      <li>Fix: when there is no text, prevent the shape to have a null size.</li>
      <li>Fix: text cursor placement when shape is inside a group.</li>
    </ul>
  </li>
</ul>



<?php
  include("footer.inc");
?>
