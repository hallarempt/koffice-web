<?php
  $page_title ='KOffice 1.3 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.2
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>New command line option: --print. Prints the document(s) passed on the command
    line, without showing a window. Useful for scripts and servicemenus.</li>
<li>Support for opening backup files (e.g. foo.kwd~)</li>
<li>Page Layout Dialog: validate user input to prevent nonsense
(e.g. margins wider than page)</li>
<li>Support for EPS images: works again for gs interpreters without the png16m device</li>
<li>Cache the configuration object around kofficerc,
  to improve startup performance</li>
</ul>
<em>Fixes:</em>
<ul>
<li>Restart autosave timer when saving</li>
<li>Fixed saving of the window size when closing</li>
<li>Fixes for remote documents (authentication dialog not on top, error handling)</li>
<li>Many stability fixes in spell checking</li>
<li>Fixed doc/window association which led to closing all windows when closing only one</li>
<li>Fixed bug where the dialog wouldn't show the spell client from the config file</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Paragraph borders now support variable width (e.g. being inside
DTP frames of different widths)</li>
<li>Improve hierarchical numbering  - doesn't require using a suffix of '.' anymore,
  and doesn't copy over the prefix and suffix from parent levels anymore (#40911)</li>
<li>PgUp/PgDown works better than before when "move the caret" is enabled (#45246)</li>
<li>Implemented painting of non-breakable-spaces when "draw formatting characters" is on</li>
<li>Added more default formats for date variables</li>
<li>Added time/date variable offset (new)</li>
<li>Added new variables: Next page number, Previous page number (new)</li>
</ul>
<em>Formatting:</em>
<ul>
<li>Text formats now include language information (new)</li>
<li>New line spacing types: at least / exactly / multiple of (new)</li>
<li>New font attributes: small caps, uppercase, lowercase (new)</li>
<li>New underline and strikethru type: word by word</li>
<li>Repainting fixes (in multiline paragraphs)</li>
<li>Linespacing fixes (at-least and multiple work as advertised, added "fixed")</li>
<li>Major reduction of the memory usage per paragraph</li>
<li>Hyphenation fixes (support for breaking the same words more than once)</li>
<li>Shadow is now a character property (instead of a paragraph property)</li>
<li>More precise painting of paragraph borders</li>
</ul>
<em>Fixes:</em>
<ul>
<li>Fixed painting of non-breakable-spaces (could show up as a visible square)</li>
<li>Fixed crash (e.g. happening with 'section title' variable, #61735)</li>
<li>Fixed pasting of plain text (so that it creates new pages if necessary, #58651)</li>
<li>Fixed insert dialog for date and time variables</li>
<li>Fixed missed hit during search-replace backwards with a single paragraph</li>
<li>Fixed rare crash when applying a format to a selection</li>
<li>Fixed painting bug in text view mode (the right side was being erased)</li>
<li>Fixed saving of left-to-right direction in RTL paragraphs</li>
<li>Created/modified/printed document date (bug #24242)</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Language added as a new character property</li>
<li>Possibility to copy/remove links</li>
<li>Added support for converting table to text</li>
<li>Horizontal line</li>
<li>Sorting of text</li>
<li>Improved statistics dialogbox : count number of lines</li>
<li>Hyphenation support. Configurable as a character property
    (to disable hyphenation on specific words)</li>
<li>PDF import filter</li>
<li>Right-click on a selected frame shouldn't unselect it</li>
<li>Esc to deselect all frames</li>
<li>Don't select inline frame after pasting text containing it (only select non-inline frames)</li>
<li>Improved "create style from selection": use format at cursor if no selection,
  allow to type the name of an existing style to update it, and select the style
  for the current paragraph after creating it</li>
<li>Frames default to "auto-resize" mode instead of "auto-create-new-page"</li>
<li>Better handing of "auto-resize" mode (manually-set size acts as minimum size)</li>
<li>Make the find dialog avoid the area where the match is
    (requires kde-3.2)</li>
</ul>
<em>Fixes:</em>
<ul>
<li>Fixed Paragraph numbering: simple lists are not restarted by simple text in between</li>
<li>Fixed line-height bug due to hyphenation</li>
<li>Fixed handling of part frames (clicking didn't select it anymore, #63041)</li>
<li>Fixed cursor shape when pressing Ctrl</li>
<li>Fixed cursor in text view mode (#57554)</li>
<li>Added fix for frames extending beyond the page getting the wrong size in 'preview mode'</li>
<li>Fixed wrong layouting of inline frames (e.g. pictures)</li>
<li>Fixed crash in table operations (#66349)</li>
<li>Fixed crash in table iterator</li>
<li>Fixed "edit frameset" for tables in doc structure panel (#67084)</li>
<li>Save "no underline" explicitly if the paragraph layout says "underline" but the user removed the underline (#67735)</li>
<li>Fixed successive image DnD</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<em>Text boxes:</em>
<ul>
<li>Can spellcheck in selection only (new)</li>
<li>Shadow is a text property now (bugfix)</li>
<li>Link manipulation (add/copy/remove) (new)</li>
<li>Access to spellcheck result via context menu</li>
</ul>
<em>Images:</em>
<ul>
<li>Properly draw images with alpha channels (bugfix)</li>
<li>Better loading of background pictures; especially for remote files (new)</li>
</ul>
<em>Configurability:</em>
<ul>
<li>Whether and where to create backup files (new)</li>
<li>Path to pictures (new)</li>
<li>Personal dictionary (new)</li>
<li>List of ignored words when spellchecking (new)</li>
<li>Go with a per-slide default when inserting a new one (wish #22629)</li>
<li>Printing of slide notes (wish #56120)</li>
</ul>
<em>Misc:</em>
<ul>
<li>Web presentation: better HTML generation, usability improvement of the wizard (new)</li>
<li>Comment text can be copied now (bugfix)</li>
<li>Undo/redo shows history of commands (new)</li>
<li>Objects use "forbidden" cursor when they're protected (new)</li>
<li>Display an "End of presentation"-slide at end of presentation; configurable
    (new)</li>
<li>Transition effect dialog with preview (new)</li>
<li>Grid, snap to grid are on now by default, with a finer step of 5mm
  (#60011 and #60013)</li>
</ul>
<em>Fixes:</em>
<ul>
<li>Fixed copy/paste of images/embedded objects between different instances</li>
<li>Fixed flipping groups horizontally/vertically (#45561)</li>
<li>Fixed loading of old documents with invalid paragraph indents</li>
<li>Fixed initial size of pasted images (#59058)</li>
<li>Fixed adjusting of font size in the toolbar (#39786)</li>
<li>Fixed problem with disappearing objects on dinA0 presentations (#37370)</li>
<li>Fixed large offset in print preview and printing (#56123)</li>
<li>Fixed KPR 'forgetting' solid line attribute of text frames (#61343)</li>
<li>Fixed pasting text objects with UTF-8 text</li>
<li>Snap to Grid function aligns relatively, not absolutely (#56181)</li>
<li>Fixed problem with cutting&pasting a vertically centred text frame (#61330)</li>
<li>Fixed cursor not blinking in some cases</li>
<li>Fixed "blinking cursor erases formatting characters" bug</li>
<li>"Adjust object to contents" works as intended now</li>
<li>Clearified purpose of the 'Notebar' (#63037)</li>
<li>Fixed crashed when inserting the variable
  "section title" (#61735)</li>
<li>Fixed embedded KSpread object getting  wrong size (#33233)</li>
<li>Fixed hang when inserted text wraps to newline (#56946)</li>
<li>Fixed layer lowering (#53277)</li>
<li>Fixed problem with zoomed out resize handles (#61602)</li>
<li>Fixed painting garbage at a side of the screen in the presentation mode (on
  weird DPIs)</li>
<li>Fixed snap to grid when resizing a frame (#63032)</li>
<li>Fixed when after resize/undo size of object is not the same</li>
<li>Fixed when after move/undo position of object is not the same</li>
<li>Fixed resizing of poly line objects</li>
<li>Fixed after reload of some objects moved up a little bit</li>
<li>Fixed moving with key left used in grid</li>
<li>Fixed header/footer moved in undo</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>Real more than one currency support</li>
<li>New date and time formats</li>
<li>Enhanced the "Text to Columns", "Insert from file"
  and "Insert from clipboard" dialog to support "ignore double delimiters"</li>
<li>"Insert from file" now also adjusts the column width depending on imported
  cell content</li>
<li>Enhanced the CSV import dlg</li>
  <ul>
    <li>to support "ignore double delimiters"</li>
    <li>to adjust cell width to imported cell content</li>
    <li>you can specify the column and row range for import</li>
  </ul>
<li>Enhanced the CSV export dialog so that you can choose</li>
 <ul>
   <li>table to export</li>
   <li>delimiters between tables</li>
   <li>delimiter between cells</li>
   <li>character for quotes</li>
   <li>export selection only</li>
 </ul>
<li>Goal Seek message fixes + you can select the cells with the mouse now</li>
<li>Enhanced Gnumeric import filter to support</li>
  <ul>
    <li>background (color + patterns), borders (colors + style)</li>
    <li>font formating, text alignment</li>
    <li>format parsing (date, time, numbers,...), cell height, width</li>
    <li>print range, page setup, hidden columns/row, comments</li>
  </ul>
<li>New OpenCalc export and import filter</li>
<li>Added subtotal dialog and formula</li>
<li>Paper layout can now be applied to all sheets</li>
<li>Now you can define the default cell style</li>
<li>Autoscroll while selecting now also available for columns and row headers</li>
<li>When cell is too short, then the content is now available in the tooltip</li>
<li>Drag 'n' Drop of selections</li>
<li>Protection of sheets or of the document structure (with or without password)</li>
<li>Protection tab in layout dialog: you unprotect certain cells, hide their
  contents, hide the formulas, or select them for not being printed</li>
<li>FindNext, FindPrevious cell enhancement for find</li>
<li>Fill: Fill area from right to left, left to right, bottom to top, top to bottom</li>
<li>Full zoom support</li>
<li>Printing:</li>
  <ul>
    <li>High resolution printing (600dpi)</li>
    <li>Improved WYSIWYG</li>
    <li>Zoom support on printout</li>
  </ul>
<li>New direction mode when pressing Enter: you can jump now to the first cell of the next row</li>
<li>Hierachical style support</li>
  <ul>
    <li>builtin styles</li>
    <li>creation of custom styles</li>
    <li>creation of custom styles using a cell as template</li>
  </ul>
<li>Insert special characters</li>
<li>Smaller, more efficent file format</li>
<li>Many performance enhancements</li>
<li>More powerful conditional cell attributes (you can assign a whole style if condition matches)</li>
<li>Conditions can be used for text and numbers now (was numbers only before)</li>
<li>Adjust print zoom to limit printout to m x n pages</li>
<li>New templates: Balance Sheet, Price Quotation, Packing Slip</li>
<li>Improved speed of text to column conversion (#59999)</li>
</ul>
<em>New functions:</em><br>
<i>GETPIVOTDATA, BESSELI, BESSELJ, BESSELK, BESSELY,
  ERF, ERFC, CONVERT <!--Which categories are these??--></i>
<p><em>Date/Time (16):</em>
  EDATE, EOMONTH, DAYS360, WEEKDAY, TIMEVALUE, DATEVALUE, YEAR,
  MONTH, DAY, HOUR, MINUTE, SECOND, DAYNAME, MONTHNAME, EASTERSUNDAY,
  ISOWEEKNUM
</p>

<p><em>Math (16):</em>
  SUBTOTAL, POWER, TRUNC, CEILING, PRODUCT (now Excel compatible),
  KPRODUCT, RANDEXP, RANDBINOM, RANDNEGBINOM, RANDBERNOULLI,
  RANDPOISSON, MROUND, COUNTA, MINA, MAXA, SUMA
</p>

<p><em>Statistical (24):</em>
  VARP, STDEV, VAR, STDEVP, GEOMEAN, HARMEAN,
  KURT, LOGINV, DEVSQ, STANDARDIZE, HYPGEOMDIST,
  NEGBINOMDIST, KURTP, CORREL, COVAR, SMALL, LARGE
  STDEVA, STDEVPA, VARA, VARPA, SKEW, SKEWP, MODE
</p>

<p><em>Financial (19):</em>
  PPMT, DDB, DURATION, PMT, NPER,
  ISPMT, IPMT, TBILLEQ, TBILLPRICE, TBILLYIELD,
  ACCRINT, ACCRINTM, COUPNUM, DOLLARDE, DOLLARFR,
  DISC, EFFECT, INTRATE, RECEIVED
</p>

<p><em>Database (12):</em>
  DAVERAGE, DCOUNT, DCOUNTA, DGET, DMAX, DMIN,
  DPRODUCT, DSTDEV, DSTDEVP, DSUM, DVAR, DVARP
</p>

<p><em>Reference & Lookup (8):</em>
  ADDRESS, AREAS, CHOOSE, COLUMN, COLUMNS, 
  INDIRECT, ROW, ROWS
</p>

<p><em>Engineering (2):</em>
DELTA, GESTEP
</p>

<p><em>Logical (2):</em>
FALSE, TRUE
</p>

<p><em>Information (2):</em>
ISNONTEXT, ISNUMBER
</p>

<em>Obsolete formulas:</em>
<ul>
<li>stddev (was stddevp in fact)</li>
<li>day (is dayname now)</li>
<li>month (is monthname now)</li>
</ul>

<p><em>Obsolete (does no longer show up in dialog) but still usable formulas:</em>
variance, pow, isnottext, isnum, effective</p>
<em>Fixes:</em>
<ul>
<li>Fixed KSpread redrawing problem during and after 'Print Preview' (#60147)</li>
<li>Fixed KSpread crash when changing paper orientation (#60279)</li>
<li>Fix problem cycling absolute cell reference with F4 key (#46959)</li>
<li>The calculator plugin saves its configuration now (#49954)</li>
<li>Fixed problem with calculating dates (#64794)</li>
<li>Fixed cell border of merged cells (#61570)</li>
<li>Fixed display of text starting with a single quote</li>
<li>Fixed  problem formatting the whole row (#65504)</li>
<li>Made the top/middle/bottom alignment buttons work</li>
<li>Fixed problem with reference from another sheet (bug #60455)</li>
<li>Show indicator of chosen/selected cells (bug #58098)</li>
<li>Hide in-place cell editing when choosing other sheet</li>
<li>Proper zoom and display of formatted hyperlink (#66214)</li>
<li>Fixed flickering problem with many hyperlinks (#65501)</li>
<li>Don't crash when leaving the preview in Konq (#65928)</li>
<li>Fixed redraw problem with Print Preview (#60147)</li>
<li>Support only one zoom for two or more views</li>
<li>Fixed painting problem with multiple views</li>
<li>Prevent possible crash with conditional formatting (#58713)</li>
<li>Fixed dependency problem with automatic recalculation (#58097)</li>
<li>Better adjustment of cell references on cut &amp; paste</li>
<li>Fix crash on csv import (#66047)</li>
<li>Fix problem for cells copy/cut to clipboard (#58712)</li>
<li>Show frame when embedded object is selected (#37152)</li>
<li>Better handling of "nothing to print" warning (#60147)</li>
<li>When embedded, use real zoom instead of scaling (#45503)</li>
<li>Fixed data sorting (#63317)</li>
</ul>

<h3><a name="kugar">Kugar</a></h3>
<ul>
  <li>Kugar and Kugar Designer are now pure KOffice applications.
  Partification was made and KOffice zipped xml format is used</li>
  <li>Create reports with data and template stored in one file</li>
  <li>Print reports from command line</li>
  <li>Support for fields list in detail sections</li>
  <li>DCOP interface</li>
  <li>Integration with Kexi</li>
  <li>Undo/Redo functionality in Kugar Designer</li>
  <li>Direct database support in Kugar</li>
</ul>

<h3><a name="kugar_designer">Kugar Designer</a></h3>
<ul>
  <li>Redesign for the KOffice architecture</li>
  <li>New user-friendly interface</li>
  <li>Flexible property editing for report elements and multiple selections of elements</li>
  <li>Flexible placing and resizing report elements</li>
  <li>Cut, copy and paste for report items</li>
  <li>Undo/redo operations</li>
  <li>Manual z-ordering for report items</li>
  <li>DCOP interface</li>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>GUI cleanup</li>
<li>Better KOffice intergation</li>
<li>Implemented real clipboard support</li>
<li>Added more stencils</li>
<li>Improved diastencil support</li>
<li>Added template support</li>
<li>The connector tool now snaps to targets before the grid/help lines</li>
<li>The select tool now snaps to targets before the grid when resizing connectors</li>
</ul>
<em>Fixes:</em>
<ul>
<li>Fixed embeding of kivio in other KOffice app</li>
<li>Fixed layout problem at start up when using a template</li>
<li>Fixed deletion of connected connectors</li>
<li>Fixed copying text in other codecs then latin1</li>
<li>Fixed the size of the stencilbar when loading stencils at start up</li>
<li>Lots of other bugfixes</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
  <li>Support for multi-line formulae including element alignment</li>
  <li>Changeable char attributes</li>
  <li>New over- and underlines</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<ul>
<li>Improvements on layer/document tree</li>
<li>Added document preview</li>
<li>Changes to move karbon file format towards svg/OO Draw formats</li>
<li>Extended star tool with 6 new types</li>
<li>Extended ellipses with 3 new types</li>
<li>Extended spirals so it can have rectangular structure</li>
<li>Added aligning options</li>
<li>Made plugin structure</li>
<li>Added new zoom tool and zoom options</li>
<li>Added menu option to import drawings into current document</li>
<li>Improved cut/copy/paste</li>
<li>Added option to perform transformations on cloned shapes
    while leaving original intact</li>
<li>New tool controller</li>
<li>Refactoring flattenpath commmand after WMF filter changes</li>
<li>Zooming fix</li>
<li>SVG exporting uses document dimension, not dimension of the active selection</li>
<li>New style docker introduced, with dragable cliparts</li>
<li>Added aspect-ratio keeping way of scaling for select tool</li>
<li>Various ui tweaks, including new icons</li>
<li>Improved behaviour for strokefill preview widget</li>
<li>Speedups on large documents for the document tree widget</li>
<li>Make imported SVG's visible by default</li>
<li>Update statusbar info while moving the selection using arrow keys</li>
<li>Delete key now deletes selected object (#68062)</li>
</ul>
<em>Fixes:</em>
<ul>
<li>Fixed freeze when opening certain karbon files (#68499)</li>
<li>Fixed loading recent files</li>
<li>Fixed zooming into rectangular areas (#60842)</li>
<li>Fixed crash with polyline tool drawing + Ctrl key (#63981)</li>
</ul>

<h3><a name="filters">Filters</a></h3>

<em>KWord MSWord import filter (requiring wv2-0.1.9):</em>
<ul>
<li>Support for Word 6 and Word 7 (aka Word 95) files added</li>
<li>Fixed the list handling for weird corner cases</li>
<li>wv2 isn't so noisy anymore, when compiled with --disable-debug. Packagers
are highly encouraged to use that flag</li>
</ul>

<em>KWord RTF export filter:</em>
<ul>
<li>Re-written filter</li>
<li>Improved table support</li>
<li>Better conformity to RTF specification</li>
<li>Better export for other RTF readers</li>
<li>Better document information</li>
<li>Declare fonts better (especially not Western European ones.)</li>
<li>Better date and time fields (except locale dates/times.)</li>
<li>Fix word-by-word underline</li>
</ul>

<em>KWord RTF import filter:</em>
<ul>
<li>Import non-7-bit-clean files</li>
<li>Fix underline import</li>
<li>Better picture support (all forms except "picture in shapes")</li>
<li>Speed up importing files with many Unicode characters</li>
<li>Support for the field-like keywords for date, time and page number</li>
<li>Allow non-ASCII style and font names</li>
<li>Fix header/footer when they are the same for all pages</li>
<li>Allow all combinations of first, odd, even page headers/footers</li>
</ul>

<em>KWord OpenOffice.org Writer export filter:</em>
<ul>
<li><em>New!</em></li>
</ul>

<em>KWord OpenOffice.org Writer import filter:</em>
<ul>
<li><em>New!</em></li>
</ul>

<em>KSpread CSV import filter:</em>
<ul>
<li>Be careful when the first column is declared as numeric by the user but in 
  reality it is not a number. (#66047)</li>
</ul>

<em>KSpread HTML export filter:</em>
<ul>
<li>Fixed RTL problems with sheet and cell direction</li>
</ul>

<em>KSpread OpenOffice.org Calc import filter:</em>
<ul>
<li><em>New!</em></li>
</ul>

<em>KSpread OpenOffice.org Calc export filter:</em>
<ul>
<li><em>New!</em></li>
</ul>

<em>KPresenter OpenOffice.org Impress export filter:</em>
<ul>
<li><em>New!</em></li>
</ul>

<em>KPresenter Magicpoint import filter:</em>
<ul>
<li><em>New!</em></li>
</ul>

<em>Karbon filters:</em>
<ul>
<li>OpenOffice.org Draw import filter with limited functionality</li>
<li>Improvements on SVG import/export</li>
<li>Improvements on Kontour import filter</li>
</ul>

<?php
  include("footer.inc");
?>
