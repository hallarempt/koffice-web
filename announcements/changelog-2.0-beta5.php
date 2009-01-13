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
  <li>Fix placement of the popup of the color combo box.</li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li>Fix autosave doesn't work when opening an (odf) template.</li>
  <li>Fix print preview.</li>
  <li>Fix crashes on closing a doc and opening a new doc in the same window.</li>
  <li>Fix make it possible to undo the resize of a path shape to null.</li>
  <li>Fix crash on closing and re-opening a document.</li>
  <li><em>KoPageApp</em>
    <ul>
      <li>foo.</li>
    </ul>
  </li>
  <li><em>Flake</em>
    <ul>
      <li>Fix weird behavior with columns: it's possible to click and show the cursor in a column where the flow of text hasn't arrived at all yet.</li>
      <li>Fix crash when activating tool with no option widget.</li>
      <li>Allow to undo/redo renaming of a shape.</li>
      <li>Fix snapping to extension lines, to also snap on intersection.</li>
      <li>Allow to easily add repeadely multiple points.</li>
      <li>Fix drawing and splitting quadratic bezier curve segments.</li>
      <li>Fix save/load and copy/paste to keep the type of the points.</li>
    </ul>
  </li>
  <li><em>Text</em>
    <ul>
      <li>Fix Loading a frame with a presentation style set on it is forgotten after the first block.</li>
      <li>Fix autocorrection enabling/disabling.</li>
      <li>Fix adding a list item not re-aligning the other list items.</li>
      <li>Fix undo/redo for editing text list.</li>
    </ul>
  </li>
  <li><em>Pigment</em>
  <li>
    <ul>
      <li>Fix convolution computation of the alpha channel.</li>
    </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>Fix crash on loading a table shape (<a href="http://bugs.kde.org/179572">179572</a>).</li>
  <li>Fix creating a new page for each paragraph (<a href="http://bugs.kde.org/177728">177728</a>).</li>
  <li>Fix crash when cancelling print dialog (<a href="http://bugs.kde.org/175226">175226</a>).</li>
  <li>Fix the "show status bar" not correctly initialised at startup (<a href="http://bugs.kde.org/166996">166996</a>).</li>
  <li>Fix changing page size in print dialog has no effect (<a href="http://bugs.kde.org/132415">132415</a>).</li>
  <li>Fix printing to A5, the first page was always A4.</li>
  <li>Fix loading of footnotes and endnotes from the old kword format.</li>
  <li>Fix starting kword with a non-existing filename shows a useless empty doc.</li>
  <li>Fix crash on opening a view on an empty document.</li>
  <li>Add default styles when creating a document with the Custom Document dialog.</li>
  <li>Fix paste not pasting.</li>
  <li>Fix crash on loading doc with embedded frame (<a href="http://bugs.kde.org/159107">159107</a>).</li>
  <li>Fix crash on doing layout on a 2 page document with a header (<a href="http://bugs.kde.org/177949">177949</a>).</li>
  <li>Fix removing all text from a page removes the main-text frame, but not the headers.</li>
  <li>Fix crash when inserting a text reference when there is no references.</li>
  <li>Fix making Inline twice gives infinite loop (<a href="http://bugs.kde.org/172167">172167</a>).</li>
  <li>Fix the text of page 3 appearing on page 1 in some cases.</li>
  <li>Fix printing (<a href="http://bugs.kde.org/175227">175227</a>).</li>
  <li>Fix saving of headers/footers.</li>
  <li>Fix removing of a page when there is no more content on that page.</li>
</ul>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>Fix: Crash on inserting a table shape via the create shape tool.</li>
  <li>Fix: crash on exit when used as a flake-shape.</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
  <li>Fix making the list of layouts wider to show more items.</li>
  <li>Fix dockers of default tool not showing up.</li>
  <li>Correctly leave the presentation mode when pressing Alt+F4.</li>
  <li>Sort transition effects by name.</li>
  <li>Fix remove deleted slides also from custom slide show.</li>
  <li>Fix display of commands name.</li>
  <li>Add a command when the custom slide show is edited.</li>
  <li>Fix repaint a bit more to not get artefacts.</li>
  <li>Fix the preview of page effects was not drawn in some cases.</li>
</ul>

<!--<h3 id="kchart">KChart</h3>
<ul>
  <li></li>
</ul>-->

<h3 id="kplato">KPlato</h3>
<ul>
  <li>Fix translations of scripts.</li>
  <li>Improve scheduling with time constraints.</li>
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
  <li>Show progress for Scale, Rotate and Shear (<a href="http://bugs.kde.org/176808">176808</a>)</li>
  <li>Fix crash on startup when compiling with -march=core2 (<a href="http://bugs.kde.org/177133">177133</a>)</li>
  <li>Fix painting on a filter mask</li>
  <li>Fix locking/unlocking and showing/hiding masks</li>
  <li>Fix loading of masks.</li>
  <li>Fix cubism filter with selection.</li>
  <li>Fix shortcuts can be changed by the user via the shortcuts dialog.</li>
  <li>Fix crash when switching between preset brushes (<a href="http://bugs.kde.org/179236">179236</a>)</li>
  <li>Fix redisplay when painting on a layer.</li>
  <li>Fix image pipe brushes (<a href="http://bugs.kde.org/178599">178599</a>)</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>Use current background color when creating calligraphy shapes (<a href="http://bugs.kde.org/164627">164627</a>).</li>
  <li>Combine multiple color changes into one command.</li>
  <li>Fix automatically selecting gradient if only one shape is selected.</li>
  <li>Fix make it possible to switch from a gradient border to a color border.</li>
  <li>Fix only change the color and keep the line width and style as it is.</li>
</ul>

<h3 id="plugins">Plug-ins</h3>
<ul>
  <li>Disable height and width spinboxes when there is no selection in the default tool.</li>
  <li>Fix the page number variable being wrong by a offset of one.</li>
  <li>Fix number of path points when star is convex.</li>
  <li>Fix loading of star shape.</li>
  <li><em>Text Shape</em>
    <ul>
      <li>Fix footnotes appearing on two pages, if referenced from the last line of a page.</li>
      <li>Fix repaint of selection spanning multiple frames / columns.</li>
      <li>Fix repaint issues in textshape when shrinking the text area.</li>
      <li>Fix blinking cursor blinks even when canvas doesn't have focus (or when the window is minimized).</li>
      <li>Fix deleting a bit of text that spans two frames causes a crash.</li>
      <li>Fix crash on loading document with large embedded images (<a href="http://bugs.kde.org/171449">171449</a>).</li>
      <li>Fix when rotating a shape the cursor and selection were not painted properly.</li>
      <li>Fix normal text layouted in a way that there is only one paragraph per page.</li>
      <li>Fix crash when using the text tool on a selection without a text shape.</li>
    </ul>
  </li>
</ul>



<?php
  include("footer.inc");
?>
