<?php
  $page_title ='KOffice 1.4-rc1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  vn checkout https://zachmann@svn.kde.org/home/kde/branches/koffice/1.4/koffisvn checkout https://zachmann@svn.kde.org/home/kde/branches/koffice/1.4/koffielease of KOffice 1.4-beta1.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
 <li>Document information dialog: Added keywords and subject for the document, as well as
        position, company, and telephone (home/work) for the author</li>
 <li>Make the default unit be inch or cm depending on the KDE-wide measure system (imperial or metric)</li>
 <li>Synchronous DCOP interface for scripting load and save</li>
 <li>-dpi command line option to override the DPI detected by X. You can set one value for x and y, or use -dpi x,y</li>
 <li>Improve filter chains to avoid absurd chains (e.g. kword -&gt; plain text -&gt; kspread)</li>
 <li>Startup dialog: themeable icons, correct initial tab, hide non-existent recent local files</li>
 <li>Page layout dialog: better preview, new GUI for margins</li>
 <li>Rulers: made more readable at all resolutions, added tooltips</li>
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
<ul>
<em>Bugfixes:</em>
 <li>Autocorrection fixes:</li>
 <ul>
  <li>redundant-space-removal shouldn't remove tabs</li>
  <li>capitalize-first-letter-correction didn't work at beginning of line (#105064)</li>
  <li>fixed "autoformat URL in autocorrection causing text editing problem" (#105871)</li>
  <li>URL detection: URLs beginning with "ftp." are now valid links</li>
  <li>load all week days, from 1 to 7 (not 0 to 6)</li>
  <li>capitalize name of days after a punctuation too</li>
 </ul> 
 <li>Fixed "completion doesn't show any tooltip for autocompletion" (#105065)</li>
 <li>Do not always save a document in OASIS format with striked-out and underlined text (#92654)</li>
 <li>Fixed missing color for highlighted match during search-n-replace (#103787)</li>
 <li>Fixed wrong layouting of "char-aligned" tabs when opening a document</li>
 <li>Fixed background spellchecking bug which made it stop after a mispelled word</li>
 <li>Hungarian hyphenation dictionary updated</li>
</ul>


<h3><a name="kword">KWord</a></h3>
<em>New features:</em>
<ul>
</ul>

<em>Changes:</em>
<ul>
 <li>Added "Apply" button to the frame and "resize column" dialogs</li>
 <li>Added "Reset" to the "resize column" dialog</li>
 <li>Resize column dialog: the maximum width for a cell is the width of the table's parent frame if the table is floating</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>OASIS OpenDocument format support: tables, chained text frames, default tab width, embedded objects, DTP documents, page-anchored frames</li>
 <li>Added better error message when loading pre-OASIS-1.0 documents, like those produced by OOo 1.9.79.2.3 (as shipped by SuSE 9.3) (#105083)</li>
 <li>Broken non-inline tables feature disabled; simply put the table into a text frame to achieve the same.</li>
 <li>Fixed bug in configuration dialog, tab stop width was set to a random value</li>
 <li>Fixed crash when editing a cell on loading (#104982)</li>
 <li>Disable the formula toolbar from start if no formula frame is activated</li>
 <li>"Cordially" duplicated in the expression list (#104853)</li>
 <li>Fixed crash during spell-checking</li>
 <li>Fixed crash when un-chaining text frames</li>
 <li>Fixed wrong unit calculation for "runaround" setting (#106005)</li>
 <li>Fixed setting a background color from the frame dialog (#106029)</li>
 <li>Avoid two frames with the same z-order after loading</li>
 <li>Fix for "can't scroll to bottom of KWord document after saving".</li>
 <li>Many fixes for footnotes (#72506, #57298, #62360, #84678, #85148)</li>
 <li>Show the content of the footnote/endnote in the status barwhen the mouse cursor is placed over a footnote/endnote reference (part of feature #48794)</li>
 <li>Ensure that text runs around frames upon loading, was broken for DTP documents (#106187)</li>
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
 <li>Fixed "embedded object always on top after reload" (#105171)</li>
 <li>Fixed "scaling image to original size broken" (#99698)</li>
 <li>Added dialog to go to the master slide if the user tries to select an object of the master slide and is currently not editing the master slide.</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Rename "different from" to "outside range" since that's what it does (#105317)</li>
 <li>Fixed strange text wrapping behaviour (#77842)</li>
 <li>Fixed vertical text alignment problem (#77843)</li>
 <li>Fixed "ugly postscript rendering of cell borders" (#87367)</li>
 <li>Fixed "empty document generates 2 printed pages" (#68190)</li>
 <li>Fixed "printing with kspread gives big black areas" (#70073)</li>
 <li>Fixed "charts are really small when printed from KSpread" (#101074)</li>
 <li>Fixed painting of obscured cells in RTL sheets</li>
 <li>Fixed printing of embedded kspread documents (#68977)</li>
 <li>Fixed drawing problem when text overflow the right border (#61452)</li>
 <li>Fixed wrong delimiters used in function description (#105695)</li>
 <li>Fixed diagonal lines appearing on printout of RTL sheets in cells which have left or right borders.</li>
 <li>Fixed crash on exit when having an embedded chart (#101915)</li>
 <li>Paint the embedded document after it has been inserted</li>
</ul>


<h3><a name="kchart">KChart</a></h3>
<em>Changes:</em>
<ul>
 <li>Make the Data Format config page accessible from the Edit menu and the context menu</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>CSV import finished (#99995)</li>
 <li>Fixed "lines in a line chart are all black" (#105356)</li>
 <li>Only use logaritmic scales for the line chart, doesn't work for other kinds of chart (#101490)</li>
 <li>Fix the drawing of the legend title</li>
 <li>Improved documentation</li>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Fixed bounding rect for polyline connectors, and printing of selected stencils (#104646)</li>
 <li>Disable Edit text for objects not having textboxes (#104647)</li>
 <li>Fixed grid alignment (#82157)</li>
 <li>Change font attributes back to defaults when pressing CTRL (#98932)</li>
 <li>Fixed crash when canceling the startup dialog</li>
</ul>


<h3><a name="kexi">Kexi</a></h3>
<em>Bugfixes:</em>
<ul>
 <li>Form Designer:</li>
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
  <li>fixed problems with data in subforms: data provider only sets data</li>
   for own items, not inside subforms (data-awarness is disabled in subforms for now)</li>
 </ul>
 <li>KexiDB:</li> 
  <ul>
    <li>magic data is now defined for application/x-sqliteX, not for
     application/x-kexiproject-sqliteX (X == 2 or 3)</li>
    <li>file-based drivers can now define a list of supported mimetypes, not just
     one mime type (added all known mimetypes thee, including Knoda's mimes, for
     compatibility)</li>
   <li>we're handling application/x-sqlite2 and application/x-sqlite3</li>
  </ul>
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
 <li>Improve hsv color selector behaviour (#105073)</li>
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
 <li>Fixed crash in gradient widget (#92976)</li>
 <li>Fixed crash if the pattern doesn't have an image (#77476)</li>
 <li>Fixed "add pattern"</li>
 <li>Don't crash when creating a new layer if any layer contains group objects (#93903)</li>
 <li>Update the list according to the z order of the layer (#68060)</li>
</ul>


<h3><a name="filters">Filters</a></h3>

<em>KSpread:</em>
<ul>
 <li>Many improvements to the Excel importer</li>
</ul>


<?php
  include("footer.inc");
?>
