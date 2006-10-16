<?php
  $page_title ='KOffice 1.6 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.5.2 (latest stable version).
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kformula">KFormula</a></li>
<li><a href="#kugar">Kugar</a></li>
</ul>


<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li><em>KoProperty Library</em>
  <ul>
  <li>Possible fix for crash, maybe a definitive fix for <a href="http://bugs.kde.org/124917">bug #124917</a></li>
  <li>Group items now have rather pretty appearance styled with KDE style; fixed groups order, API changed: now it's possible to get order of groups; sorting disabled when groups are present; icons can be defined and displayed within the group items</li>
  <li>Added a container widget that can be used to split information into hideable sections</li>
  <li>Clear all properties and group names when using operator =; delayed deleting of editors on setting a new property</li>
  <li>Properties are not changed when new and old value are both null</li>
  <li>Spin boxes for integer and double values: deleting the contents
  now sets null value</li>
  <li>added a method for clearing "modified" class</li>
  </ul>
  </li>
  <li><em>Kross Scripting Library</em>
  <ul>
  <li>Improvements in performance</li>
  <li>Possible crash fixed</li>
  <li>Support for python 2.5</li>
  <li>Using krossrunner+krosskspreadmodule with kspread works.</li>
  </ul>
  </li>
  <li>various fixed to the handling of opendocument files in KoText</li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
    <li>crash in style manager (<a href="http://bugs.kde.org/127555">bug #127555</a>)
    <li>KWord can still crash on loading MS Word documents (<a href="http://bugs.kde.org/67216">bug #67216</a>)
    <li>MS Word document crashs kword (<a href="http://bugs.kde.org/84547">bug #84547</a>)
    <li>kword crashes while updating th e table of contents (<a href="http://bugs.kde.org/131122">bug #131122</a>)
    <li>merging 2 cells already merged with others 2 cells already merged crashes kword (<a href="http://bugs.kde.org/132642">bug #132642</a>)
    <li>Kword crashes when I use "save as open office document" or "select all" and "copy" (<a href="http://bugs.kde.org/126007">bug #126007</a>)
    <li>crash deleting second empty page (<a href="http://bugs.kde.org/125998">bug #125998</a>)
    <li>crash after editing/selecting table rows (<a href="http://bugs.kde.org/129315">bug #129315</a>)
    <li>deleting page from rmb menu deletes wrong page (parts of <a href="http://bugs.kde.org/132338">bug #132338</a>)
    <li>Lookup function only returns last value (parts of <a href="http://bugs.kde.org/127411">bug #127411</a>)
    <li>Update zoom when doc struct size changes and fit width is used (<a href="http://bugs.kde.org/134311">bug #134311</a>)
</ul>

<h3 id="kspread">KSpread</h3>
<em>Features</em>
<ul>
  <li> KSpread supports scripting with python and ruby now.
  <li> Make the default column width and row height configurable via Style Manager -> "Default" -> Position. (WISH 125749)
  <li> Allow whitespaces in named areas.
  <li> KSpread can import databases created in Kexi 
  <li> Speed improvement in loading and saving files
  <li> Improvements in styles saving/loading in opendocument
</ul>

<em>Bugfixes</em>
<ul>
  <li> Formula engine / functions:
    <ul>
      <li> Two-array functions now correctly use both arrays, instead of only one.  (<a href="http://bugs.kde.org/130681">bug #130681</a>)
      <li> Function EVEN rounds up to the next nearest even integer.
      <li> Funciton ODD rounds up to the next nearest odd integer.
      <li> Fix the formula tokenizer. LOG2 and LOG10 are cell references and  function identifiers. We have to interpret it depending on the context.
      <li> Fix references to sheets with names beginning with a number (<a href="http://bugs.kde.org/124549">bug #124549</a>)
      <li> Fixes for various database functions
      <li>Fix "LOOKUP function only returns last value". (<a href="http://bugs.kde.org/127411">bug #127411</a>)

    </ul>

  <li> OpenDocument
    <ul>
      <li> Fix "Table borders are gone after saving a document as ods file" (<a href="http://bugs.kde.org/128123">bug #128123</a>)
      <li> Fix error in saving of custom cell styles.
      <li> Fix loading of column width.
      <li> Load/save the default column/row style.
      <li> Don't create non-default col/row formats on loading, if it's not necessary.
      <li> Fix loading of column and row formats.
      <li> Saving speedup
      <li> Fix the loading after first save of text properties (bold, ...)
      <li> Fix "Zeros all over after opening an OpenDocument file" (BUG 131508)
      <li> Fix loading of system date formatting. (BUG 118331)
      <li> Fix saving of prefix/suffix (not for dates, times and strings). (<a href="http://bugs.kde.org/131052">bug #131052</a>)
      <li> Removed invalid attributes/elements to produce fully valid documents.
      <li> Fix loading of named ranges.
      <li> Fix loading of cell values. Don't overwrite loaded formulas!
      <li> Don't create non-default row and column formats for the visited area.  This led to big files.
    </ul>
<li> UI:
    <ul>
        <li> Don't jump to chosen cell (range) on entering the formula (<a href="http://bugs.kde.org/134276">bug #134276</a>)
    </ul>
</ul>

  <li>Other
    <ul>
      <li> Fix "Border is not drawn properly" (<a href="http://bugs.kde.org/128477">bug #128477</a>)
      <li> Fix crash in the series operation.
      <li> Fix "some operations ignore arbitrary cells of a selection" (<a href="http://bugs.kde.org/130559">bug #130559</a>)
      <li> Fix crash on copying embedded documents. (<a href="http://bugs.kde.org/120395">bug #120395</a>)
    </ul>
  </ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
    <li>kpresenter can be built stand-alone</li>
    <li>add a dcop call to end a presentation</li>
    <li>Disable DPMS during presentations. Not via dcop to kdesktop, since kdesktop might not be running.</li>
    <li>Links are not saved in OpenDocument (<a href="http://bugs.kde.org/134481">bug #134481</a>)</li>
</ul>

<h3 id="kexi">Kexi</h3>

<em>Main new features</em>
<ul>
 <li>Object data type and data-aware image form widget (<a href="http://www.kdedevelopers.org/node/2163" target="_blank">details</a>)</li>
 <li>New: Support for macros (this is technology preview only, read <a href="http://kexi-project.org/wiki/wikiview/index.php?Macros">details</a>)</li>
 <li>Table design altering without removing the existing data (this is technology preview only, read <a href="http://www.kdedevelopers.org/node/2075" target="_blank">details</a>); 
  Undo and Redo commands are available.</li>
 <li>Support for Data-aware combo boxes in the Table View, i.e. lookup columns (<a href="http://kexi-project.org/pics/1.1/combobox.png" target="_blank">screenshot</a>, <a href="http://kexi-project.org/wiki/wikiview/index.php?KexiDBLookupColumns#Introduction">details</a>). Note that there is no user interface for designing the lookup columns. You can try the feature by downloading a <a href="http://kexi-project.org/wiki/wikiview/index.php?KexiDBLookupColumns#Current_State">specially prepared database</a>.</li>
 <li>Improvements in Auto Field form widget</li>
 <li>Improvements in Table View, including support for default values and tooltips for content that is too large for its cell size</li>
</ul>

<em>Table Designer</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Undo/redo actions introduced; deleting and redoing actions improved
  in the table-altering machinery of KexiDB</li>
  <li>Clear primary key when selecting non-integer type</li>
  <li>Added title to the context menu</li>
  <li>Changing field's description is supported by undo/redo commands 
  and by alter table actions</li>
  <li>Internal Debugger added with "Real alter table" button, 
  for convenience, "save" action now uses the old alter table code (<a href="http://kexi-project.org/pics/1.1/internal_debugger.png" target="_blank">screenshot</a>)</li>
  <li>Renaming table fields works, table schema is recreated when needed,
  and just altered in-place when it's enough to do so</li>
  <li><em>Beta 1:</em></li>
  <li>Fixed setting types and subtypes</li>
  <li>Fixed a crash when there are more than 50 actions perfomred in the Table Designer's undo/redo stack</li>
  <li>Fixed saving "indexed" and "type" field properties of a table design</li>
  <li>Support for default values</li>
  <li>Fields of type yes/no have default value set to false (by default)</li>
</ul>

<em>Query Designer</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Possible crash fixed when new design is saved in the data view: rebuild schema only when needed</li>
</ul>

<em>Forms</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Fixed saving data changes for db-aware checkboxes
  (by setting StrongFocus policy as default)</li>
  <li>Set the data source readonly if it comes from query</li>
  <li>"Read only" property is now supported by all data-aware widgets, 
  and form itself</li>
  <li>Background color of the line edit in read-only mode is blended with white
  to get lighter gray</li>
  <li>Accessibility+usability: read only line edit widget now shows the caret</li>
  <li>Display field caption as title for editor's context menu</li>
  <li>Data source pane splitted vertically into two sections for clarity</li>
  <li>AutoField widget: added support for Image (Object) type,
  fixed handling color properties, internal editor's properties are 
  automatically inherited by the AutoField widget as so-called subproperties. 
  Changing value of "Widget Type" property reloads the entire 
  property set, so new properties can appear and unused properties can be hidden 
  in the Property Editor.</li>
  <li>Image Box widget: now supports saving data in the database. 
  Fixed filling duplicated data widgets; fixed editing;
  "Drop-Down Button Visible" property added. Drop-down button moved to bottom-right, 
  usability improved (e.g. keyboard handling for popup), db-awareness added, 
  frame-related properties added, tab/backtab handling fixed,
  fixed updating position of image when the frame changes</li>
  <li>Removed flickering of the Property Pane after dropping a new field 
  onto the form</li>
  <li><em>Beta 1:</em></li>
  <li>Display default values in the new row; 
  default text is displayed with a special style (italic blue) as in table view;
  cancelling changes in a widget reverts its contents to default value 
  (if available); the special style is removed as soon as the editing starts</li>
  <li>"redo" action removed from the data-aware widgets' context menu 
  (to avoid problems with data handling)</li>
</ul>

<em>Startup</em>
<ul>
  <li><em>Beta 1:</em></li>
  <li>--skip-startup-dialog startup option added: skips displaying Kexi startup dialog window</li>
</ul>

<em>Data and Project Migration Wizard</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Improved usability for selecting type of destination database
  (no mention of SQLite for now)</li>
</ul>

<em>CSV Data Import and Export</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Fixed recursion when importing clipboard data </li>
  <li>Allow to change the delimiter when importing clipboard data </li>
  <li>Parsing data improved: values without leading zeros, like 1/2/2006 work;
 Since apps like MS Access in the USA creates csv files with date 
 format month/day/year, (and without leading zeros), text with "/" 
 inside is assumed to be in this format.</li>
  <li><em>Beta 1:</em></li>
  <li>Time and Object values: fixed exporting to file or copying to clipboard</li>
  <li>Fixed crash on exporting to clipboard</li>
  <li>Delimiter detection is now even more clever, allowing to import more complex data: 
  characters outside quotes have higher priority; number of candidates for delimiters 
  is counted too.</li>
</ul>

<!-- em>MS Access Database Import</em>
<ul>
  <li></li>
</ul -->

<em>Data Table View</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Spreadsheet mode: fixed inserting empty rows and deleting rows</li>
  <li>Cell editor: the contents are marked as changed only when the original 
  value differs from the current</li>
  <li><em>Beta 1:</em></li>
  <li>Current row and column are marked as selection on the vertical 
   and horizontal header sections</li>
  <li>Display tooltip with row number when the vertical scrollbar is dragged</li>
</ul>

<em>Database Support Library (KexiDB)</em>
<ul>
  <li><em>Alpha 1:</em></li>
  <li>Improved operations related to <i>table design altering</i></li> 
  <li>Fixed setting database filename when relative path has been provided</li>
  <li>Optimization: "rename table" action now uses "ALTER TABLE RENAME TO" 
  SQL statement, O(1).</li>
  <li>X-Kexi-DoNotAllowProjectImportingTo KexiDB driver property added, false by defaut</li>
  <li><em>Beta 1:</em></li>
  <li>Server version information is retrieved (usable for future extensions)</li>
  <li>Added unicode->latin1 mappings for Czech characters</li>
</ul>

 <em>Database Drivers</em>
 <ul>
  <li><em>Alpha 1:</em></li>
  <li>SQLite library upgraded from 3.0.7 to 3.2.8 (backward compatible),
  to get "table renaming" function.</li>
  <li>Table altering improved for SQLite: changing data types will be possible soon</li>
  <li><em>Beta 1:</em></li>
  <lI>PostgreSQL: use TIMESTAMP, not DATETIME for date/time data type</li>
 </ul>
 
 
 <em>Bug fixes</em>
 <ul>
 <li><em>Core</em>
 <ul>
 <li>enabling/disabling of actions in query editor (<a href="http://bugs.kde.org/134977">bug #134977</a>)
 </ul>
 <li><em>Table Designer</em>
    <ul>
    <li>Set "false" as default value for columns with Yes/No types</li>
 <li>When column type changes, default value is updated to match the new type
  (e.g. casted from integer to text; incompatible values are removed)</li>
 <li>Fixed inserting fields of type "Object"</li>
</ul>
<li><em>Query Designer</em>
<ul>
<li> invalid input (e.g. criteria or sorting) now displays a message box with "Correct" and "Discard Changes" buttons
<li> added support for setting order of columns in Design and SQL views (ORDER BY)
<li> fields were sometimes added twice
<li>fixed displaying visible flag (without ? mark)
</ul>
<li><em>Forms</em>
<ul>
  <li>Hide unused radio button widget</li>
  <li>Fixed tab/backtab key handling</li>
  <li>Fixed displaying custom label text when "Auto Label" property is off</li>
  <li>Handling of global shortcuts like CTRL+PgDown is now shared with 
   Table View (accesibility: it is now possible to move to next/previous 
   record using keyboard)</li>
  <li>Moving to new row sets the focus in the first data-aware widget 
   (in tab order)</li>
  <li>Fixed leaving from "editing" state on "accept row changes" or moving 
   to other record</li>
  <li>Custom widget factories can be now loaded properly</li>
  <li>Yes/No field default value does not work properly
  (for required field: if you add a checkbox that points to a Yes/No 
  field that has a default value the default value is not accepted) (Bug:134976 )
  <li>fixed updating property values of enum type
  <li>hide "Editor type" property for auto fields (<a href="http://bugs.kde.org/134773">bug #134773</a>)
  <li>The first widget of a given kind should be named "widget" by default, the second - "widget2" and so on.</li>
  </ul>

<li><em>Data Table View</em>
<ul>
 <li>More shortcuts added, shortcuts are now usable and a bit MSAcces-like</li>
   <ul>
   <li>CTRL+End now moves to the last field in the last record 
    (previously: the last record)</li>
   <li>CTRL+Home now moves to the first field in the first record 
    (previously: the first record)</li>
   <li>CTRL+PgDown now moves to the next record</li>
   <li>CTRL+PgUp now moves to the previous record</li>
   <li>CTRL+Plus or CTRL+= now moves to the new record</li>
  </ul>
  <li>Fixed repainting after "Edit->Clear Table Contents" action</li>
  <li>fixed problem with editing floating-point values when there's default value set to 0.0</li>
  <li>fixed displaying values for combobox fields</li>
  <li>it is now possible to have empty combobox item: selecting it clears 
  the value of combobox</li>
</ul>

<li><em>Database Support Library (KexiDB)</em>
<ul>
 <li>Do not try to insert default values into a column with unique 
  flag declared (or even primary key)</li>
 <li>fixed constructing ORDER BY part of SQL statements (ambiguous fields)</li>
 <li>when creating "columns by name" cache, also remeber "table.alias" 
   identifiers</li>
 <li>QuerySchema: retrieving infromation about columns much improved
  (needed by the parser and designer) and fixes for handling ordering information in design mode when there're asterisks in the query</li>
  <li>fixed just introduced possible crash for expression columns</li>
  <li>fixed handling information about columns ordering</li>
  <li>support for ORDER BY while generating SQL statements</li>
  <li>use COUNT(*), not COUNT()</li>
  <li>added support for ORDER BY clause</li>
</ul>

<li><em>Main window</em>
<ul>
<li> "Data actions do not appear on first open" workaround used before Kexi 2.0: the Data toolbar is always visible (<a href="http://bugs.kde.org/134975">bug #134975</a>)
</ul>

<li><em>Documentation</em>
<ul>
 <li>Added chapter about forms translated to english.</li>
</ul>
</ul>

<h3 id="krita">Krita</h3>
<em>Core libray</em>
<ul>
  <li> perspective grid: this is a grid that is defined by two vanishing points</li>
  <li> improvements of the memory management, krita can handle more than 4Gb of cache on hard drive on 32bits system and doesn't crash anymore if the system run out of memory before krita reach it's maximum amount of allowed memory</li>
  <li> a lot of fixes in the adjustement layers</li>
  <li> support for layer mask</li>
  <li> improved indirect painting</li>
</ul>
<em>File filters</em>
<ul>
  <li> you can import and convert to bitmap pdf files</li>
  <li> improvement in the png filter to allow the opening of big files</li>
</ul>
<em>Effects/filters plugins</em>
<ul>
 <li> adjustable blur: a blur effect with control over the height, width and orientation of the effect</li>
 <li> colors filters: some simple transformations on the colors channels (minimum, maximum, transformation to alpha)</li>
 <li> fast color transfer: this effect allows you to give to your image the same tones and colors as the reference image</li>
 <li> lens correction: this filter correct the distortion of the lens of a camera, this filter will also adjust the brightness on the corner of the image</li>
 <li> noise filter: add noise to your image</li>
 <li> random pick filter: this filter will randomly change the value of a pixel by taking the pixel value in the neighborhood</li>
 <li> unsharp mask: this filter is a digital adaptation of an old silver film technique to enhance the quality of a picture</li>
</ul>
<em>Tools</em>
<ul>
  <li> a bezier curve: you can create and edit a curve, and affect it a brush and a paint operation</li>
  <li> two new selection tools: magnetic outline selection and bezier curve</li>
  <li> a tool to manipulate the perspective grid</li>
  <li> a tool for correcting the perspective</li>
  <li> the duplicate tool get to new options: healing and perspective correction</li>
</ul>

<em>Bugfixes</em>
<ul>
    <li> Fix some specific rendering artefacts
    <li> Fix some non-artefact rendering errors
    <li> Fix changing the adjustment of brightness-contrast adjustment layers
    <li> Fix resizing images
    <li> Fix undo of rotate 180 (<a href="http://bugs.kde.org/135165">bug #135165</a>)
    <li> autoclose/add the screenshot after taking it, remove the print and save buttons (BUG:134527)
    <li>UI:
    <ul>
        <li>Simplify acquiring screen shots (Bug:134527)
        <li>Remember opacity setting in Drop Shadow (Bug:134563)
        <li>Fix so that the rightly marked filters got displayed in the filters gallery dialog
        <li>New icons set for the too
        <li>Fix display of masks (<a href="http://bugs.kde.org/134770">bug #134770</a>)
        <li>remember configuration of drop shadow (<a href="http://bugs.kde.org/134563">bug #134563</a>)
        <li>Fix a crash where the histogram docker would try to fetch selectedness outside of the consecutive area of the selection
    </ul>
    <li>Selections:
    <ul>
        <li> Fix problems with selection extent with some selection tools
        <li> Krita crashes in select contiguous area (Bug:134497)
        <li> Remove the configwidget for selection brush and selection eraser tools
        <li> Display the mask layer's selection when the mask has one
    </ul>
    <li>Drawing:
    <ul>
        <li> Grey8 colorspace also works antialiased when opacity<100% on adjustment 
    layers
        <li> Add alpha darken to all colorspaces that still didn't have it (fixes 
    painting indirectly on them)
        <li> Honor the selection with paint indirectly
    </ul>
    <li>Adjustement layers:
    <ul>
        <li> Fix crash on loading adjustment layers
        <li> Some changes in selection actions concerning adjustment layers
        <li> Fix loading of brightness-contrast adjustment layers
        <li> Fix execution of adjustment layer changes undo information in general
        <li> Remove lots of non-working filters as adjustment layer
    </ul>
    <li>Tools:
    <ul>
        <li>Better interraction with the perspective transform tool
        <li>Bezier tools don't work in openGL mode (Bug: 134477)
        <li>Optimization of the duplicate tool, and fix healing and perspective
        <li>Fix the tool crop behaviour
        <li>fix perspective transformation and non square selection
        <li>Bezier curves tool works in OpenGL mode (<a href="http://bugs.kde.org/134477">bug #134477</a>)
    </ul>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
    <li>Added PERT calculation for estimated value based on optimistic, expected and pessimistic value.</li>
    <li>The distribution used is dependent on the setting of Risk.</li>
    <li>List overbooked resources in the task tooltip.</li>
    <li>Fix the calendar table dialog when the first day of the week is not Monday. (BUG:129889)</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
  <li>Improve data editor. <a href="http://bugs.kde.org/129553">bug #129553</a>.</li>
  <li>Fix: Pie charts use only the Y axis, not only the X axis.</li>
  <li>ODF: Create support for data in rows or columns (<a href="http://bugs.kde.org/134195">bug #134195</a>)</li>
</ul>

<h3 id="kformula">KFormula</h3>
<em>New Features</em>
<ul>
  <li>OpenDocument and MathML supported natively.</li>
  <li>OpenDocument as default file format.</li>
  <li>New font management, Unicode fonts fully supported.</li>
  <li>Arev Sans font included.</li>
  <li>Improved UI for better OpenDocument capabilities support.</li>
  <li>Added a new kcommand to allow insertion of a token element inside another token element of another kind. Now we just need undo working properly.</li>
</ul>
<em>OpenDocument / MathML</em>
<ul>
  <li>Supported elements:</li>
    <ul>
      <li>mi</li>
      <li>mn</li>
      <li>mo (partial)</li>
      <li>mtext</li>
      <li>mspace</li>
      <li>ms</li>
      <li>mglyph</li>
      <li>mrow</li>
      <li>mfrac</li>
      <li>msqrt</li>
      <li>mroot</li>
      <li>mstyle</li>
      <li>merror</li>
      <li>mpadded</li>
      <li>mphantom</li>
      <li>mfenced</li>
      <li>menclose (partial)</li>
      <li>msub</li>
      <li>msup</li>
      <li>msubsup</li>
      <li>munder (partial)</li>
      <li>mover (partial)</li>
      <li>munderover (partial)</li>
      <li>mtable (partial)</li>
      <li>mtr (partial)</li>
      <li>mtd (partial)</li>
      <li>maction (partial)</li>
    </ul>
  <li>Supported style attributes:</li>
    <ul>
      <li>mathcolor</li>
      <li>mathbackground</li>
      <li>mathsize</li>
      <li>mathvariant</li>
      <li>fontsize</li>
      <li>fontweight</li>
      <li>fontstyle</li>
      <li>fontstyle</li>
      <li>fontfamily</li>
      <li>color</li>
      <li>background</li>
      <li>scriptlevel</li>
      <li>scriptsizemultiplier</li>
      <li>scriptminsize</li>
      <li>veryverythinmathspace</li>
      <li>verythinmathspace</li>
      <li>thinmathspace</li>
      <li>mediummathspace</li>
      <li>thickmathspace</li>
      <li>verythickmathspace</li>
      <li>veryverythickmathspace</li>
    </ul>
  <li>Other:</li>
    <ul>
      <li>Full support of MathML entities.</li>
      <li>Support for Operator Dictionary.</li>
    </ul>
</ul>
<em>Bugfixes</em>
<ul>
    <li>UI:
        <ul>
            <li>Fix character insertion that requires new token elements</li>
            <li>Reenable cut, copy and paste</li>
            <li>Fix a crash when moving to left in selection mode.</li>
            <li>Fix a crash when changing token element in selection mode</li>
            <li>Fix KFCRemoveEnclosing undo code, check that there's really an element to reinsert.</li>
            <li>Fix unexecution of KFCSplitCommand so that it really does what is supposed to do</li>
            <li>Remove autodeleting that caused a crash when destructor was called.</li>
            <li>Fix undo in AddToken commmand. Now token element itself is also removed and cursor positioned in last position of previous elemenet, as it should be.</li>
            <li>Add only one token for all the text elements, instead of just one token for each.</li>
        </ul>
    <li>MathML / OpenDocument:
        <ul>
            <li>Insert &lt;mrow&gt; element after &lt;semantics&gt; element, since it does not infer mrows. Fixes bug 134044</li>
            <li>Fix loading, messed up mn and mtext elements</li>
            <li>Fix saving of upper index that caused invalid output</li>
            <li>Support for token splitting added to identifier, operator and insertion elements</li>
            <li>Add support for TextCharRequest in number elements too</li>
        </ul>
</ul>

<h3 id="kugar">Kugar</h3>
<ul>
  <li>kugar display a list of templates when started
</ul>
<?php
  include("footer.inc");
?>
