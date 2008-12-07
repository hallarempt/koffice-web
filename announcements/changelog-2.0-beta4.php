<?php
  $page_title ='KOffice 2.0 Beta 4 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 2.0 Beta 3.
</p>
<ul>
<li><a href="#koffice_general">General</li>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#plugins">Plugins</a></li>
</ul>

<h3 id="koffice_general">General</h3>
<ul>
  <li>Make the scripts messages translatable.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li> (<a href="http://bugs.kde.org/"></a>).</li>
  <li>Make sure the color chooser popup is not drawn outside the screen area.</li>
  <li>Fix crash happening with stop gradients where the last color stops position was lower than 1.0 (<a href="http://bugs.kde.org/175675">175675</a>).</li>
  <li>Fix crash in drawing when there is no stroke width.</li>
  <li><em>KoPageApp</em>
    <ul>
      <li>Differenciate between slides and pages.</li>
    </ul>
  </li>
  <li><em>Flake</em>
    <ul>
      <li>Fix saving of path shapes where a controlpoint was not used in a curve.</li>
      <li>Fix toolbox did not switch tools.</li>
      <li>Fix ctrl-click when using default tool changes tool.</li>
      <li>Fix the selection rectangle when two shapes are selected, and one get deselected.</li>
      <li>When clicking on a shape, if the current tool doesn't work with that shape, change the tool to default tool of the shape.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix zoom level not set at startup.</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Fixed the display of the range markup when editing cells in either editor (<a href="http://bugs.kde.org/175373">175373</a>).</li>
  <li>Improve the external editor.</li>
  <li>Adjust bessel* functions to not accept out-of-range parameters.</li>
  <li>Fix Find/Replace (<a href="http://bugs.kde.org/172861">172861</a>).</li>
  <li>Do not display small values as 0. Use scientific format for value smaller than 1e-10 (<a href="http://bugs.kde.org/124527">124527</a>).</li>
  <li>Fix crash when double clicking on a cell after using the calendar tool (<a href="http://bugs.kde.org/173282">173282</a>).</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Fix converting of gradients and loading of rounded rectangles while importing legacy ".kpr" files.</li>
</ul>

<!--<h3 id="kchart">KChart</h3>
<ul>
  <li></li>
</ul>-->

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Fix translation issues.</li>
  <li>Don't offer progress dialog if task is not scheduled.</li>
  <li>Fix crash in task view.</li>
  <li>Don't allow editing of baselined schedules.</li>
  <li>Hide probability stuff when there is no distribution.</li>
  <li>Fix bug in probability lookup.</li>
  <li>Fix savin/loading of scheduling error.</li>
  <li>Indicate scheduling error when when project target times cannot be met.</li>
  <li>Fix scheduling of task with estimate type length.</li>
  <li>Fix crash in gantt view.</li>
  <li>Fix computation of gantt chart start/end.</li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
  <li>Improvement of the loading and saving.</li>
  <li>Fix display of the image after removing a vector layer.</li>
  <li>Fix Sobel filter.</li>
  <li>The last painting assistant to be edited is set to be the active one.</li>
  <li>Fix fill bucket tool: also fill outside the rect that was allready drawin in the layer</li>
  <li>Fix crash when clicking on filter category in the filter dialog (<a href="http://bugs.kde.org/175795">175795</a>).</li>
  <li>Fix crash when clicking edit preset and no filter is selected (<a href="http://bugs.kde.org/175795">175795</a>).</li>
  <li>Fix merging of layers: merge with the layer below, and enable the menu when there is a layer below the current one (<a href="http://bugs.kde.org/175797">175797</a>).</li>
  <li>Fix selecting color in new image crashes Krita (<a href="http://bugs.kde.org/174579">174579</a>).</li>
  <li>Make it possible to clone shape sleections (which makes it possible to create a filter layer with a shape selection).</li>
  <li>Improvement in loading/saving of .kra files.</li>
  <li>Fix filter paintop.</li>
  <li>Fix crash when clicking on a mask.</li>
  <li>Fix remembering settings when choosing a paintop preset.</li>
  <li>Fix crash on shutdown.</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Update preview when selection content has changed.</li>
  <li>Fix crash in the small style preview.</li>
  <li>Make it possible to assign a pattern to the background.</li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li>Fix settings of width/height in the geometry panel affects the canvas and hide shapes (<a href="http://bugs.kde.org/174879">174879</a>).</li>
  <li><em>Text Shape</em>
    <ul>
      <li>Fix undo command: text insertion, new paragraph</li>
      <li>Fix loading of text styles for presentations generated by OpenOffice.</li>
    </ul>
  </li>
  <li>In artistic text shape, made attaching text to path and detaching text from path undo-able.</li>
  <li>Inserting an image now open a dialog to select an image.</li>
</ul>



<?php
  include("footer.inc");
?>
