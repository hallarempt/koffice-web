<?php
  $page_title ='KOffice 2.0 RC 1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Beta 7.
</p>
<ul>
<li><a href="#koffice_general">General</li>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#plugins">Plugins</a></li>
</ul>

<h3 id="koffice_libs">General</h3>
<ul>
  <li>Fix: Print preview doesn't work for anything but the first page.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>Fix: focus problems when using the mouse wheel.</li>
  <li>Fix: progress report.</li>
  <li>Fix: setting the unit on the spinbox causes it to emit one incorrect value.</li>
  <li>Fix: crash when zooming out too far, don't draw measurements if the ruler is too small anyway (<a href="http://bugs.kde.org/186484">186484</a>).</li>
  <li>Fix: Crash if right click in a split view (<a href="http://bugs.kde.org/185336">185336</a>).</li>
  <li><em>Flake</em>
    <ul>
      <li>Add workaround for bug in OpenOffice.org that saves a line with the width of 0 when saving a cosmetic line.</li>
      <li>Fix: saving of connections when not connected to another shape.</li>
      <li>Fix: saving and loading gradient stroke to ODG using koffice namespace (<a href="http://bugs.kde.org/174876">174876</a>).</li>
      <li>Fix: odf compatibility with simpler readers.</li>
      <li>Fix: saving and loading conical gradients to ODF using koffice namespace (<a href="http://bugs.kde.org/187454">187454</a>).</li>
      <li>Fix: z-order changing always adjust zindex even if there is no shape above/below it.</li>
      <li>Fix: text shape has different stroke and fill in OpenOffice (<a href="http://bugs.kde.org/186292">186292</a>).</li>
      <li>Fix: shadow does not take stroke width into account.</li>
    </ul>
  </li>
  <li><em>KoPageApp</em>
    <ul>
      <li>Fix: deselect selected objects so that background can be modified.</li>
      <li>Printing support.</li>
      <li>Save/load some settings.</li>
      <li>Fix updating the position of the mouse in the ruler no matter what the zoom or scroll position is.</li>
    </ul>
  </li>
  <li><em>KoText</em>
    <ul>
      <li>Fix: crash during loading.</li>
      <li>Fix: loading of paragraph styles and linking them to their parents.</li>
      <li>Fix: saving/loading the property 'next style' for paragraph styles.</li>
      <li>Fix: saving anchored-frames sometimes got duplicated and ate text behind it.</li>
    </ul>
  </li>
  <li><em>ODF</em>
    <ul>
      <li>Fix: work around bug in OO (&lt; 3.0) saving a draw:custom-shape without a path for type ellipse.</li>
      <li>Fix: saving stroke miterlimit.</li>
      <li>Fix: loading of inserting a presentation.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix: crash on loading some documents.</li>
  <li>Fix: printing from the command line only prints the first page.</li>
  <li>Fix: Custom Outline doesn't cause the text to be run around it.</li>
  <li>Fix: Create "Custom Outline" doesn't seem to do anything.</li>
  <li>Fix: Page orientation not saved (<a href="http://bugs.kde.org/184858">184858</a>).</li>
  <li>Save the sequence of all pages at all times.</li>
  <li>Insert a link to the master page in the first paragraph of the document so we actually properly save the page setup (<a href="http://bugs.kde.org/184858">184858</a>).</li>
  <li>Correctly handle the case when there is no main text frame.</li>
  <li>Explicitly add a master page style and give it the proper name taken from the master page.</li>
  <li>Fix: saving multiple frames into one frameset.</li>
  <li>Fix: KWord doesn't save core frame properties to ODF.</li>
  <li>Fix: loading anchores shapes.</li>
  <li>Fix: loading of text frames.</li>
  <li>Fix: crash when an anchor moves from one page to the next.</li>
  <li>Fix: crash on typing after removing image (<a href="http://bugs.kde.org/186581">186581</a>).</li>
  <li>Fix: crash on embedding (<a href="http://bugs.kde.org/181369">181369</a>).</li>
  <li>Fix: crash on close document (<a href="http://bugs.kde.org/185217">185217</a>).</li>
  <li>Fix: the auto-generated frames always have to be behind all the rest to make loading and saving predictable.</li>
  <li>Fix: KWord doesn't allow you to start typing immediately.</li>
  <li>Fix: Loading headers/footers so they will be handled and saved properly.</li>
  <li>Fix: Header doesn't resize until you press enter once.</li>
  <li>Fix: editing headers/footers should update the size as requird.</li>
  <li>Fix: text running around non-existing shapes at the top left of the doc.</li>
  <li>Fix: infinite loop when there are two anchored shapes on one line.</li>
  <li>Fix: Changing size using keep-aspect does weird things (<a href="http://bugs.kde.org/186023">186023</a>).</li>
  <li>Remove menus that are not backed by code anymore (<a href="http://bugs.kde.org/186029">186029</a>).</li>
  <li>Fix: drawing of the grid (<a href="http://bugs.kde.org/185341">185341</a>).</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Fix: embedding in konqueror (<a href="http://bugs.kde.org/181369">181369</a>).</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Make it possible to assign a gradient to the background of kpresenter (<a href="http://bugs.kde.org/187836">187836</a>).</li>
  <li>Fix: crash on clicking into the notes textbox (<a href="http://bugs.kde.org/186459">186459</a>).</li>
  <li>Have different kind of layouts.</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
  <li>Fix: add/remove rows/columns in data editor.</li>
  <li>Use data set color for lines in a line diagram, instead of just black.</li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Fix: issues in the treeview editors: make sure expand is in sync when adding items, always select newly inserted item, keep the moved item selected.</li>
  <li>Fix: loading of KPlato files.</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Improve the results of the random number generator.</li>
  <li>Fix: different brush behaviour if the layer is transparent.</li>
  <li>Fix: random crash when drawing on a layer with an effect mask.</li>
  <li>Fix: the chosen brush reverting to a gbr brush.</li>
  <li>Fix: loading of .kra file which use a different color space as sRGB 8bits (<a href="http://bugs.kde.org/187956">187956</a>).</li>
  <li>Fix: crash in the drop shadow effect.</li>
  <li>Fix: painting on a layer after changing its color space.</li>
  <li>Fix: drawing with "build up" looks like opacity is half what the user set.</li>
  <li>Fix: filter preview.</li>
  <li>New icons set for tools.</li>
  <li>Various fix of the dynamic brush.</li>
  <li>Fix: use of Krita with large images.</li>
  <li>Fix: RAW filter to work with KDE >= 4.2.0.</li>
  <li>Fix: problem saving/loading filter bookmarks.</li>
  <li>Fix: translations of filter categories not appearing in the menu.</li>
  <li>Don't reapply the filters if the config of a filter layer hasn't changed.</li>
  <li>Fix: export to EXR.</li>
  <li>Fix: crash when selecting a profile that doesn't fit in the combobox (<a href="http://bugs.kde.org/185644">185644</a>).</li>
  <li>Fix: transform with selection.</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Fix: drawing single gradient stop.</li>
  <li>Fix: gradient lines in karbon deleted when dragged over each other (<a href="http://bugs.kde.org/185951">185951</a>).</li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li>
    <em>Default tool</em>
    <ul>
      <li>Fix: changing the size via the docker looses 'keep aspect' option set on shape.</li>
      <li>Fix: crash when trying to resize shapes with zero width or height.</li>
      <li>Make it possible to move very small or thin (horizontal/vertical lines) shapes with the mouse (<a href="http://bugs.kde.org/185957">185957</a>).</li>
    </ul>
  </li>
  <li>
    <em>Artistic text shape</em>
    <ul>
      <li>Fix: the path of Artistic text shape isn't saved (<a href="http://bugs.kde.org/186284">186284</a>).</li>
      <li>Fix: loading of artistic text shape position when not put on path.</li>
    </ul>
  </li>
  <li>
    <em>Text shape</em>
    <ul>
      <li>Fix: bug on unnumbered heading (<a href="http://bugs.kde.org/130825">130825</a>).</li>
      <li>Fix: preview showed the active unit (mm) as points so things were far to big.</li>
      <li>Don't save the demo text.</li>
      <li>Fix: Text on multiple pages gets sometimes painted outside the textshape (<a href="http://bugs.kde.org/186365">186365</a>).</li>
    </ul>
  </li>
</ul>



<?php
  include("footer.inc");
?>
