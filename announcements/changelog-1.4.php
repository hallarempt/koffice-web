<?php
  $page_title ='KOffice 1.4 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes of KOffice since the
  release of KOffice 1.3.
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
 <li>New icon sidebar</li>
 <li>Support for tabs</li>
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
 <li>Autocorrection fixes:</li>
 <ul>
  <li>redundant-space-removal shouldn't remove tabs</li>
  <li>capitalize-first-letter-correction didn't work at beginning of line (<a href="http://bugs.kde.org/show_bug.cgi?id=105064">#105064</a>)</li>
  <li>fixed "autoformat URL in autocorrection causing text editing problem" (<a href="http://bugs.kde.org/show_bug.cgi?id=105871">#105871</a>)</li>
  <li>URL detection: URLs beginning with "ftp." are now valid links</li>
  <li>load all week days, from 1 to 7 (not 0 to 6)</li>
  <li>capitalize name of days after a punctuation too</li>
 </ul>
 <li>Rewritten spell-checking support (based on kspell2, the main reason for the kdelibs &gt;= 3.3 requirement) which is much faster and solves many problems (e.g. the hanging contextual menu in KOffice-1.3). With aspell, spell-checking is available in more than 70 languages</li>
 <li>Word completion with tooltip</li>
 <li>Open links by clicking on them, use hand pointer, show link target in statusbar</li>
 <li>Tab/Shift+Tab for changing indentation in lists</li>
 <li>Improved autocorrection (better URL detection among other things)</li>
 <li>Fixed "completion doesn't show any tooltip for autocompletion" (<a href="http://bugs.kde.org/show_bug.cgi?id=105065">#105065</a>)</li>
 <li>Do not always save a document in OASIS format with striked-out and underlined text (<a href="http://bugs.kde.org/show_bug.cgi?id=92654">#92654</a>)</li>
 <li>Fixed missing color for highlighted match during search-n-replace (<a href="http://bugs.kde.org/show_bug.cgi?id=103787">#103787</a>)</li>
 <li>Fixed wrong layouting of "char-aligned" tabs when opening a document</li>
 <li>Fixed background spellchecking bug which made it stop after a mispelled word</li>
 <li>Hungarian hyphenation dictionary updated</li>
</ul>


<h3><a name="kword">KWord</a></h3>
<em>New features:</em>
<ul>
 <li>OASIS file format support (almost complete)</li>
 <li>Copy/Paste and Drag-n-drop use the OASIS format</li>
 <li>Inline text frames can be navigated into using Left and Right keys</li>
 <li>New "statistic" variables (number of words, number of lines etc.)</li>
 <li>"Select All Frames" features</li>
 <li>Non-breaking hyphen, which can be inserted with Ctrl+Shift+Minus</li>
 <li>Alt+Right and Alt+Left shortcuts for increasing/decreasing the numbering level</li>
 <li>When dropping a link to an image, let the user choose between inserting a URL and the image</li>
 <li>When saving a new document, suggest a file name based on the beginning of the document</li>
 <li>Support for "protect content" in all types of framesets</li>
 <li>Support for different run-around-gaps on every side of the frame</li>
</ul>

<em>Changes:</em>
<ul>
 <li>PageUp/PageDown now moves the caret by default (still configurable)</li>
 <li>Reorganized and simplified GUI of the configuration dialog</li>
 <li>Added "Apply" button to the frame and "resize column" dialogs</li>
 <li>Added "Reset" to the "resize column" dialog</li>
 <li>Resize column dialog: the maximum width for a cell is the width of the table's parent frame if the table is floating</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Make it possible to select entire paragraphs from the left margin again</li>
 <li>Removed non-working feature "Type anywhere cursor"</li>
 <li>Rewritten "convert to text box" and "convert table to text" features so that they do not use the clipboard anymore</li>
 <li>Many other bugfixes</li>
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
<em>Features:</em>
<ul>
 <li>Master page feature</li>
 <li>Reworked property editor</li>
 <li>Reworked object/page effects</li>
 <li>Footer and headers can be shown/hidden in each page</li>
 <li>Custom Slide Show</li>
 <li>OASIS file format support (incomplete)</li>
 <li>New "statistic" variables (number of words, number of lines etc.)</li>
 <li>Per-page presentation speed and per-object effect (animation) speed</li>
</ul>

<em>Changes:</em>
<ul>
 <li>Flip now works as in Gimp. Horizontal flip flips on y-axis, vertical flip on x-axis</li>
 <li>Group objects: The grouped object is now in the z-order of the upperst object grouped and no longer on the top</li>
 <li>Ungroup object: The objects are now in the z-order where the group object was and no longer on top</li>
 <li>If a page is shown more than once during a presentation add the time for the duration instead of showing only the last duration</li>
 <li>PageUp/PageDown during presentation now goes to beginning of the next/previous slide</li>
</ul>

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
<em>Features:</em>
<ul>
 <li>OASIS file format support (incomplete)</li>
 <li>Support for right-to-left spreadsheets</li>
 <li>Calendar plug-in</li>
 <li>Dependencies are handled correctly</li>
 <li>Much improved value parsing and formatting</li>
 <li>Generic format support (the cell format remains 'generic' until explicitely set)</li>
 <li>Cell validity
  <ul>
    <li>new type added: list</li>
    <li>new data added: differentto</li>
    <li>Add Input help (allow to display help)</li>
    <li>Allow blanks cell</li>
  </ul>
 </li>
 <li>Conditional cell attribute: new data "differentto"</li>
 <li>Multiple steps undo and redo</li>
 <li>Improved handling of hyperlinks</li>
 <li>Better icons for toolbar and templates</li>
 <li>Support repeated rows and columns that do not start at first row or column</li>
</ul>

<em>New functions:</em><br />

<p>ACOT, RANDNORM (gaussian random numbers), REGEXP, REGEXPRE (regexp replace), SUMIF (conditional sum)</p>

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
<em>Features:</em>
<ul>
 <li>New maintainer.</li>
 <li>New, much improved, data editor</li>
 <li>Same startup dialog as the rest of KOffice</li>
 <li>Templates (only one so far)</li>
 <li>Data as rows or columns</li>
 <li>Linear or logarithmic scale</li>
 <li>Export to PNG format</li>
 <li>Export to SVG format</li>
 <li>Import data from text files (not finished in the beta)</li>
 <li>Much improved manual</li>
 <li>Print support</li>
</ul>

<em>Changes:</em>
<ul>
 <li>Removed a lot of old non-working stuff. It will reappear, working, in future versions.</li>
 <li>Make the Data Format config page accessible from the Edit menu and the context menu</li>
 <li>Much improved documentation to reflect all updates to KChart.</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Many bugfixes.</li>
 <li>CSV import finished (<a href="http://bugs.kde.org/show_bug.cgi?id=99995">#99995</a>)</li>
 <li>Fixed "lines in a line chart are all black" (<a href="http://bugs.kde.org/show_bug.cgi?id=105356">#105356</a>)</li>
 <li>Only use logaritmic scales for the line chart, doesn't work for other kinds of chart (<a href="http://bugs.kde.org/show_bug.cgi?id=101490">#101490</a>)</li>
 <li>Fix the drawing of the legend title</li>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<em>Features:</em>
<ul>
 <li>Non blocking stencilset loading</li>
 <li>Added Nassi Schneiderman stencils</li>
 <li>Moving selected stencils with the keyboard</li>
 <li>Added a docker for adding stencils to the document</li>
 <li>Added a tool for adding connector targets to stencils</li>
 <li>Added a polyline connector</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Fixed bounding rect for polyline connectors, and printing of selected stencils (<a href="http://bugs.kde.org/show_bug.cgi?id=104646">#104646</a>)</li>
 <li>Disable Edit text for objects not having textboxes (<a href="http://bugs.kde.org/show_bug.cgi?id=104647">#104647</a>)</li>
 <li>Fixed grid alignment (<a href="http://bugs.kde.org/show_bug.cgi?id=82157">#82157</a>)</li>
 <li>Change font attributes back to defaults when pressing CTRL (<a href="http://bugs.kde.org/show_bug.cgi?id=98932">#98932</a>)</li>
 <li>Fixed crash when canceling the startup dialog</li>
</ul>


<h3><a name="kexi">Kexi</a></h3>
<p>KOffice 1.4 is the first official release to include Kexi.
Kexi is an integrated environment for creating and managing databases. It can be used for creating database schemas; inserting data; performing queries, and processing data. Forms can be created to provide a custom interface to your data. All database objects - tables, queries and forms - are stored in the database, making it easy to share databases.</p>

<p>Kexi is considered as a long awaited Open Source competitor for MS Access, Filemaker and Oracle Forms. Its development is motivated by the lack of Rapid Application Development (RAD) tools for database systems that are sufficiently powerful, inexpensive, open standards driven and portable across many OSes and hardware platforms.</p>

<em>Overview</em>
<ul>
 <li>Supports database storage in files and on database servers. </li>
 <li>Graphical interface for creating and altering table structures. </li>
 <li>Form entry, with visual form designer. </li>
 <li>Advanced tabular data view. </li>
 <li>Intuitive query designer - no knowledge of SQL required! </li>
 <li>Integrated SQL Editor available for advanced users.</li>
</ul>

<em>Data Processing and Access</em>
<ul>
 <li>Data migration from MySQL, PostgreSQL and MS Access databases (MS Access available as an external plugin). </li>
 <li>KexiDB API available for developers for integration with other applications. </li>
 <li>Scripting support with Python language - hidden for 0.1 version. </li>
 <li>(JavaScript/ECMA-Script support is planned) </li>
 <li>Easy data report generation (planned). </li>
</ul>

<em>Database Storage</em>
<ul>
 <li>Kexi can store databases in files and on database servers, while providing a common user interface. Database drivers for the following database engines are available:
  <ul>
   <li>SQLite (Native file format: version 2 and 3) </li>
   <li>PostgreSQL </li>
   <li>MySQL </li>
  </ul>
 </li>
 <li>Support for other database systems is planned for future versions, including the ODBC interface, for simpler and more flexible integration in corporate environments.</li>
</ul>

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
<p>KOffice 1.4 is the first official release to include Krita.
Krita is an image editor and paint application with a wide range of
applications, from photo editing to the creation of original artwork.
Sporting a clear and uncluttered interface (for a paint app...) it makes the
features it delivers accessible and intuitive to use.</p>

<p>This is the first public release of Krita and while it provides a coherent set
of features, it is only the first stepping stone towards a flexible paint
application for artists and image editors.</p>

<em>Krita offers:</em>
<ul>
 <li>Layers (without fixed boundaries).</li>
 <li>A familiar set of tools -- brushes, selection tools and shape tools.</li>
 <li>Painting with filters.</li>
 <li>An extensible system for the addition of new color and paint models.</li>
 <li>Support for pressure sensitive tablets.</li>
 <li>The ability to read most graphics file formats, including gimp and photoshop files.</li>
 <li>Exporting to many graphics file formats (but not gimp or photoshop)</li>
 <li>A complete colour management system based on lcms.</li>
 <li>A useful set of filters (implemented as plugins, so the set of filters is extensible) including a CImg based image restoration plugin.</li>
 <li>The ability to use Gimp palettes, brushes, patterns and gradients</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Added true hard paint mode for pen tool</li>
 <li>Fixed importing photoshop files some (layer location, name and opacity is now respected)</li>
 <li>Fix wildly changing color button but</li>
 <li>Much improved rotation and shearing</li>
 <li>Fixes for inserting Krita objects in other KOffices apps (scaling, mime type recognition)</li>
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

<em>Caveats:</em>
<ul>
 <li>Some tools and menu options do not yet function completely correctly.</li>
 <li>Printing is not well supported, yet. It is suggested to export as PNG and use KWord for
 printing.</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<em>Features:</em>
<ul>
 <li>OASIS file format support (incomplete)</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Improved TeX output</li>
 <li>Remember the state of the syntaxHighlighting action at exit</li>
 <li>Disable the matrix actions when the cursor isn't in a matrix element</li>
 <li>Fixed crash when exporting to PNG</li>
 <li>Updated documentation</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<em>Features:</em>
<ul>
 <li>OASIS file format support (incomplete)</li>
 <li>New color dialog</li>
 <li>Small preview widget</li>
 <li>ZoomIn/ZoomOut actions</li>
 <li>Build system fixes</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Fixed crash in gradient widget (<a href="http://bugs.kde.org/show_bug.cgi?id=92976">#92976</a>)</li>
 <li>Fixed crash if the pattern doesn't have an image (<a href="http://bugs.kde.org/show_bug.cgi?id=77476">#77476</a>)</li>
 <li>Fixed "add pattern"</li>
 <li>Don't crash when creating a new layer if any layer contains group objects (<a href="http://bugs.kde.org/show_bug.cgi?id=93903">#93903</a>)</li>
 <li>Update the list according to the z order of the layer (<a href="http://bugs.kde.org/show_bug.cgi?id=68060">#68060</a>)</li>
</ul>


<h3><a name="filters">Filters</a></h3>

<em>KWord:</em>
<ul>
 <li>new WordPerfect import filter for KWord, based on libwpd</li>
 <li>HTML export filter: ability to link an external stylesheet to a HTML page</li>
</ul>

<em>KPresenter:</em>
<ul>
 <li>OoImpress import/export filter: custom slide show</li>
</ul>

<em>KSpread:</em>
<ul>
 <li>new Microsoft Excel import filter for KSpread</li>
 <li>Gnumeric import/export: now supports
  <ul>
    <li>Text rotation</li>
    <li>Cell validation</li>
    <li>Print repeated columns</li>
    <li>Document information</li>
    <li>Area name</li>
  </ul>
 </li>
 <li>KSpread HTML export
  <ul>
    <li>Sheets can be exported to separate HTML pages</li>
    <li>Sheets are browsable by a table of contents</li>
    <li>User can define which sheets to export</li>
    <li>Ability to link an external stylesheet to a HTML page</li>
    <li>The encoding of the HTML page is configurable</li>
    <li>Borders are optional</li>
    <li>The cell spacing is configurable</li>
  </ul>
 </li>
</ul>

<?php
  include("footer.inc");
?>
