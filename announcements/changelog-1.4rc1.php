<?php
  $page_title ='KOffice 1.4-rc1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.4beta1 release.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
 <li>Support for OASIS OpenDocument templates</li>
 <li>Template dialog now has a default template preselected for first time use</li>
 <li>Template dialog uses now a tristate checkbox to let the user choose which template to use for the next application startup (<a href="http://bugs.kde.org/show_bug.cgi?id=77542">#77542</a>)</li>
 <li>Make sure every template name has a unique file name</li>
 <li>Really delete "removed" templates (<a href="http://bugs.kde.org/show_bug.cgi?id=76297">#76297</a>)</li>
 <li>Show error message when trying to load a template that doesn't exist</li>
 <li>Fixed "closing with embedded doc asks save/discard twice" (<a href="http://bugs.kde.org/show_bug.cgi?id=105879">#105879</a>)</li>
 <li>Fixed "embedded kword document leads to main document being marked as modified right after loading"</li>
 <li>Hide "Save As KOffice 1.1" from applications that didn't exist in 1.1.</li>
 <li>Don't insert the OASIS OpenDocument mimetypes twice in the filedialog's filter combo (when saving).</li>
 <li>OASIS OpenDocument format support: support for metadata (document and author information)</li>
 <li>Load remote svg pictures which begin with "&lt;?xml" (and not only "&lt;?XML").</li>
 <li>Compilation fixes for gcc4</li>
</ul>

<h3><a name="koshell">KOffice Workspace (koshell)</a></h3>
<em>Changes:</em>
<ul>
 <li>Always hide the button group in order to make the sidebar thinner</li>
 <li>Added a close-button (like in Konqueror)</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Fixed some selection bugs in the sidebar</li>
 <li>Fix the width problem with the sidebar</li>
</ul>

<h3><a name="kotext">KoText library features (shared between KWord and KPresenter)</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Autocorrection fixes:
 <ul>
  <li>redundant-space-removal shouldn't remove tabs</li>
  <li>capitalize-first-letter-correction didn't work at beginning of line (<a href="http://bugs.kde.org/show_bug.cgi?id=105064">#105064</a>)</li>
  <li>fixed "autoformat URL in autocorrection causing text editing problem" (<a href="http://bugs.kde.org/show_bug.cgi?id=105871">#105871</a>)</li>
  <li>URL detection: URLs beginning with "ftp." are now valid links</li>
  <li>load all week days, from 1 to 7 (not 0 to 6)</li>
  <li>capitalize name of days after a punctuation too</li>
 </ul></li>
 <li>Fixed "completion doesn't show any tooltip for autocompletion" (<a href="http://bugs.kde.org/show_bug.cgi?id=105065">#105065</a>)</li>
 <li>Do not always save a document in OASIS format with striked-out and underlined text (<a href="http://bugs.kde.org/show_bug.cgi?id=92654">#92654</a>)</li>
 <li>Fixed missing color for highlighted match during search-n-replace (<a href="http://bugs.kde.org/show_bug.cgi?id=103787">#103787</a>)</li>
 <li>Fixed wrong layouting of "char-aligned" tabs when opening a document</li>
 <li>Fixed background spellchecking bug which made it stop after a mispelled word</li>
 <li>Hungarian hyphenation dictionary updated</li>
</ul>


<h3><a name="kword">KWord</a></h3>
<em>Changes:</em>
<ul>
 <li>Added "Apply" button to the frame and "resize column" dialogs</li>
 <li>Added "Reset" to the "resize column" dialog</li>
 <li>Resize column dialog: the maximum width for a cell is the width of the table's parent frame if the table is floating</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>OASIS OpenDocument format support: tables, chained text frames, default tab width, embedded objects, DTP documents, page-anchored frames</li>
 <li>Added better error message when loading pre-OASIS-1.0 documents, like those produced by OOo 1.9.79.2.3 (as shipped by SuSE 9.3) (<a href="http://bugs.kde.org/show_bug.cgi?id=105083">#105083</a>)</li>
 <li>Broken non-inline tables feature disabled; simply put the table into a text frame to achieve the same.</li>
 <li>Fixed bug in configuration dialog, tab stop width was set to a random value</li>
 <li>Fixed crash when editing a cell on loading (<a href="http://bugs.kde.org/show_bug.cgi?id=104982">#104982</a>)</li>
 <li>Disable the formula toolbar from start if no formula frame is activated</li>
 <li>"Cordially" duplicated in the expression list (<a href="http://bugs.kde.org/show_bug.cgi?id=104853">#104853</a>)</li>
 <li>Fixed crash during spell-checking</li>
 <li>Fixed crash when un-chaining text frames</li>
 <li>Fixed wrong unit calculation for "runaround" setting (<a href="http://bugs.kde.org/show_bug.cgi?id=106005">#106005</a>)</li>
 <li>Fixed setting a background color from the frame dialog (<a href="http://bugs.kde.org/show_bug.cgi?id=106029">#106029</a>)</li>
 <li>Avoid two frames with the same z-order after loading</li>
 <li>Fix for "can't scroll to bottom of KWord document after saving".</li>
 <li>Many fixes for footnotes (<a href="http://bugs.kde.org/show_bug.cgi?id=72506">#72506</a>, <a href="http://bugs.kde.org/show_bug.cgi?id=57298">#57298</a>, <a href="http://bugs.kde.org/show_bug.cgi?id=62360">#62360</a>, <a href="http://bugs.kde.org/show_bug.cgi?id=84678">#84678</a>, <a href="http://bugs.kde.org/show_bug.cgi?id=85148">#85148</a>)</li>
 <li>Show the content of the footnote/endnote in the status barwhen the mouse cursor is placed over a footnote/endnote reference (part of feature <a href="http://bugs.kde.org/show_bug.cgi?id=48794">#48794</a>)</li>
 <li>Ensure that text runs around frames upon loading, was broken for DTP documents (<a href="http://bugs.kde.org/show_bug.cgi?id=106187">#106187</a>)</li>
 <li>Many improvements to the documentation</li>
</ul>


<!--
<em>Crashes:</em>
<ul>
</ul>
-->

<h3><a name="kpresenter">KPresenter</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>"Arrange Objects" now works as expected</li>
 <li>"Raise/lower object" now works as expected, including undo/redo</li>
 <li>Insert the picture with the corrent size and not dependend on the current zoom level</li>
 <li>Fixed saving/loading of encoding in webpresentation settings</li>
 <li>Fixed crashes during spell-checking</li>
 <li>Fixed "embedded object always on top after reload" (<a href="http://bugs.kde.org/show_bug.cgi?id=105171">#105171</a>)</li>
 <li>Fixed "scaling image to original size broken" (<a href="http://bugs.kde.org/show_bug.cgi?id=99698">#99698</a>)</li>
 <li>Added dialog to go to the master slide if the user tries to select an object of the master slide and is currently not editing the master slide.</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Rename "different from" to "outside range" since that's what it does (<a href="http://bugs.kde.org/show_bug.cgi?id=105317">#105317</a>)</li>
 <li>Fixed strange text wrapping behaviour (<a href="http://bugs.kde.org/show_bug.cgi?id=77842">#77842</a>)</li>
 <li>Fixed vertical text alignment problem (<a href="http://bugs.kde.org/show_bug.cgi?id=77843">#77843</a>)</li>
 <li>Fixed "ugly postscript rendering of cell borders" (<a href="http://bugs.kde.org/show_bug.cgi?id=87367">#87367</a>)</li>
 <li>Fixed "empty document generates 2 printed pages" (<a href="http://bugs.kde.org/show_bug.cgi?id=68190">#68190</a>)</li>
 <li>Fixed "printing with kspread gives big black areas" (<a href="http://bugs.kde.org/show_bug.cgi?id=70073">#70073</a>)</li>
 <li>Fixed "charts are really small when printed from KSpread" (<a href="http://bugs.kde.org/show_bug.cgi?id=101074">#101074</a>)</li>
 <li>Fixed painting of obscured cells in RTL sheets</li>
 <li>Fixed printing of embedded kspread documents (<a href="http://bugs.kde.org/show_bug.cgi?id=68977">#68977</a>)</li>
 <li>Fixed drawing problem when text overflow the right border (<a href="http://bugs.kde.org/show_bug.cgi?id=61452">#61452</a>)</li>
 <li>Fixed wrong delimiters used in function description (<a href="http://bugs.kde.org/show_bug.cgi?id=105695">#105695</a>)</li>
 <li>Fixed diagonal lines appearing on printout of RTL sheets in cells which have left or right borders.</li>
 <li>Fixed crash on exit when having an embedded chart (<a href="http://bugs.kde.org/show_bug.cgi?id=101915">#101915</a>)</li>
 <li>Paint the embedded document after it has been inserted</li>
</ul>


<h3><a name="kchart">KChart</a></h3>
<em>Changes:</em>
<ul>
 <li>Make the Data Format config page accessible from the Edit menu and the context menu</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>CSV import finished (<a href="http://bugs.kde.org/show_bug.cgi?id=99995">#99995</a>)</li>
 <li>Fixed "lines in a line chart are all black" (<a href="http://bugs.kde.org/show_bug.cgi?id=105356">#105356</a>)</li>
 <li>Only use logaritmic scales for the line chart, doesn't work for other kinds of chart (<a href="http://bugs.kde.org/show_bug.cgi?id=101490">#101490</a>)</li>
 <li>Fix the drawing of the legend title</li>
 <li>Improved documentation</li>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Fixed bounding rect for polyline connectors, and printing of selected stencils (<a href="http://bugs.kde.org/show_bug.cgi?id=104646">#104646</a>)</li>
 <li>Disable Edit text for objects not having textboxes (<a href="http://bugs.kde.org/show_bug.cgi?id=104647">#104647</a>)</li>
 <li>Fixed grid alignment (<a href="http://bugs.kde.org/show_bug.cgi?id=82157">#82157</a>)</li>
 <li>Change font attributes back to defaults when pressing CTRL (<a href="http://bugs.kde.org/show_bug.cgi?id=98932">#98932</a>)</li>
 <li>Fixed crash when canceling the startup dialog</li>
</ul>


<h3><a name="kexi">Kexi</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Form Designer:
 <ul>
  <li>all known property and enum names are translated; names are simplified</li>
  <li>more properties turned to advanced set and thus made invisible in Kexi</li>
  <li>kexiproperty object is created only once for on propbuffer creation 
   for every QWidget's property. This fixes problems like 
  'toggleButton' property being added twice to propeditor</li>
  <li>looking for i18n'd property description or enum value description: 
   on failure, we're also asking parent widget factory for this, if one exists</li>
  <li>fixed many crashes appearing when a widget name was changed</li>
  <li>setting duplicated or invalid widget name is now impossible</li>
  <li>row deleting and inserting implemented</li>
  <li>"+ button" code shared with table view</li>
  <li>fixed problems with data in subforms: data provider only sets data
   for own items, not inside subforms (data-awarness is disabled in subforms for now)</li>
 </ul></li>
 <li>KexiDB:
  <ul>
    <li>magic data is now defined for application/x-sqliteX, not for
     application/x-kexiproject-sqliteX (X == 2 or 3)</li>
    <li>file-based drivers can now define a list of supported mimetypes, not just
     one mime type (added all known mimetypes thee, including Knoda's mimes, for
     compatibility)</li>
   <li>we're handling application/x-sqlite2 and application/x-sqlite3</li>
  </ul></li>
</ul>

<h3><a name="krita">Krita</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Fixed incompatibilities between versions of ImageMagick</li>
 <li>Load and save EXIF annotations for .jpg files.</li>
 <li>Load and save ICC profiles to file formats that support icc (.png, .jpg, .tiff)</li>
 <li>Krita documents can now contain only one image; simplified user interface accordingly</li>
 <li>Re-arranged and fixed composite operations for RGB and GRAY</li>
 <li>New, more efficient floodfill algorithm</li>
 <li>Fix contiguous area select</li>
 <li>Allow subtracting from existing selections</li>
 <li>Fix undo and selections</li>
 <li>Fix merging of layers when all layers are visible</li>
 <li>Krita now correctly recognizes most graphics file formats</li>
 <li>Fix rotating, shearing and mirroring</li>
 <li>Translate resources (palettes, gradients, brushes)</li>
 <li>Make paintbox docker shadable.</li>
 <li>Improve hsv color selector behaviour (<a href="http://bugs.kde.org/show_bug.cgi?id=105073">#105073</a>)</li>
 <li>Fix conversion between color spaces</li>
 <li>Add transform tool for moving and rotating layers</li>
 <li>Fix convolution and filter painting tool</li>
 <li>Add custom convolution filter</li>
 <li>Add fill options for all shape tools</li>
 <li>Fix gamma correction adjustment filter</li>
 <li>If there is a selection present, crop will start with the selection extent</li>
 <li>Add polygonal, elliptical and freehand selection tools</li>
 <li>Use better icons for the select tools</li>
 <li>Add feather selection tool</li>
 <li>Fix selecting a new mask color for selections</li>
 <li>Many fixes for crashes.</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Improved TeX output</li>
 <li>Remember the state of the syntaxHighlighting action at exit</li>
 <li>Disable the matrix actions when the cursor isn't in a matrix element</li>
 <li>Fixed crash when exporting to PNG</li>
 <li>Updated documentation</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<ul>
 <li>Fixed crash in gradient widget (<a href="http://bugs.kde.org/show_bug.cgi?id=92976">#92976</a>)</li>
 <li>Fixed crash if the pattern doesn't have an image (<a href="http://bugs.kde.org/show_bug.cgi?id=77476">#77476</a>)</li>
 <li>Fixed "add pattern"</li>
 <li>Don't crash when creating a new layer if any layer contains group objects (<a href="http://bugs.kde.org/show_bug.cgi?id=93903">#93903</a>)</li>
 <li>Update the list according to the z order of the layer (<a href="http://bugs.kde.org/show_bug.cgi?id=68060">#68060</a>)</li>
</ul>


<h3><a name="filters">Filters</a></h3>

<em>KSpread:</em>
<ul>
 <li>Many improvements to the Excel importer</li>
</ul>


<?php
  include("footer.inc");
?>
