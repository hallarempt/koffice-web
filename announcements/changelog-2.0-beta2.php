<?php
  $page_title ='KOffice 2.0 Beta 2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Beta 1. There are many changes and refactorings in
  the libraries that are not user-visible.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a>.</li>
<li><a href="#kword">KWord</a>.</li>
<li><a href="#kpresenter">KPresenter</a>.</li>
<li><a href="#kplato">KPlato</a>.</li>
<li><a href="#krita">Krita</a>.</li>
<li><a href="#karbon">Karbon</a>.</li>
<li><a href="#kchart">KChart</a>.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li><em>Flake</em>
    <ul>
      <li>Tab and Backtab should be offered to the active tool.</li>
      <li>Fix painting the selection decoration of single shapes.</li>
      <li>Fix painting of path point handles when path shape is transformed.</li>
      <li>Fix parsing ODF transformations.</li>
    </ul>
  </li>
  <li><em>GUI</em>
    <ul>
      <li>In the layer box, activate the item when one of the property buttons is pressed.</li>
      <li>Add categories and names below items to the shape collection docker.</li>
      <li>Make sure the shape collection stays within screen boundaries when popping up.</li>
      <li>Optimization in the triangle color selector.</li>
    </ul>
  </li>
  <li><em>ODF</em>
    <ul>
      <li>Choose different prefix characters for different automatic styles.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Add a "Blank character" list style.</il>
  <li><em>List editing</em>
    <ul>
      <li>Merge only with level one paragraphs.</li>
      <li>When adding a new block to a list, make sure it is not unnumbered.</li>
      <li>Tab increases the level. Shift+Tab decreases the level.</li>
      <li>Improve backspace behavior on list items.</li>
      <li>Add support for creating unnumbered list items.</li>
      <li>Changing the style of a block will now change the style of the entire list.</li>
    </ul>
  </li>
  <li>Make two different lists that follow the same style to behave as if they are one list.</li>
  <li>Add support for saving numbered-paragraph.</li>
  <li>Make the default page style a bit more consistent in usage.</li>
  <li>Fix loading and editing of list headers with multiple paragraphs.</li>
  <li>Fix crash when an unnumbered paragraph appears as the first item of a list.</li>
  <li>Add support for space-after for lists.</li>
  <li>Add support for fo:text-align in lists.</li>
  <li>Fix loading of multi level lists.</li>
  <li>Save more legend attributes to ODF and make use of new OdfAttribute enum values.</li>
  <li>Set HTML and text representations in the clipboard.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li><em>KPR file loader</em>
    <ul>
      <li>Fix the rotation of Arrow.</li>
      <li>Export the animation of Arrows.</li>
    </ul>
  </li>
  <li><em>Placeholders</em>
    <ul>
      <li>Don't display the placeholders from master pages when normal pages are shown.</li>
      <li>Don't show placeholders in presentation mode.</li>
      <li>Save the placeholders.</li>
      <li>Create the correct shape when double clicking a placeholder.</li>
    </ul>
  </li>
  <li>Add the SVG from which the presentation page layout thumbnails are generated from.</li>
  <li>Better support different placeholder types.</li>
  <li>Make it possible to copy and paste pages with layouts and use the same layout instead adding a new layout every.</li>
  <li>Update the Delete Page menu entry when changing to the master view.</li>
  <li>Fix crash when closing and opening a document.</li>
  <li>Fix crash when inserting a layer in the document docker.</li>
  <li>Fix naming of first page.</li>
  <li>Save document styles when saving the page. This fixes a crash when copying a page with a layout in kpresenter.</li>
  <li>Fix saving of textbox placeholder which produced unvalid XML.</li>
  <li>Fix crash when inserting a page into the document.</li>
  <li>Make changing of the layout undoable.</li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
  <li>UI polishing</li>
  <li>Double treeview: stay where pointer is, when focus is changed due to mouse click.</li>
  <li>Improve view creation dialog.</li>
  <li><em>Cost breakdown view</em>
    <ul>
      <li>Refresh view when data changes.</li>
      <li>Add period week and make it configurable.</li>
      <li>Add printing.</li>
      <li>Add actual cost and deviation, and load/save context.</li>
    </ul>
  </li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Fix the display when the bottom layer is partially transparent.</li>
  <li>Fix the popup position.</li>
  <li>Don't need an opacity for the solid-color generator, it's redundant with layer opacity.</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Fix painting gradient and pattern tool decorations.</li>
  <li>Force a white background on the canvas.</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
  <li>Start saving grid to ODF.</li>
  <li>Save more legend attributes to ODF and make use of new OdfAttribute enum values.</li>
  <li><em>Axis and grid</em>
    <ul>
      <li>Separate axis dimension and position.</li>
      <li>Load and save z axis, but don't show it.</li>
      <li>Relayout KDChart plane after switch between logarithmic and linear scaling.</li>
      <li>Load axis style.</li>
      <li>Load axis font from ODF.</li>
    </ul>
  </li>
  <li>Axis scaling dialog: get initial properties from axis.</li>
  <li>Save plot area and legend position and size manually.</li>
  <li>Save chart style with "chart" as family, and load chart title,subtitle and footer position, size and style name.</li>
  <li>Save axis title, and generate unique axis name.</li>
  <li>Use same default font sizes in legend as in OOo.</li>
  <li>Use more approriate default font sizes for title, subtitle and footer.</li>
</ul>




<?php
  include("footer.inc");
?>
