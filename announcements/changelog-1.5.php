<?php
  $page_title ='KOffice 1.5.0 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.4.2 (latest stable version).
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kword">KWord</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kpresenter">KPresenter</a></li>
<li><a href="#kivio">Kivio</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#karbon">Karbon</a></li>
<li><a href="#kplato">KPlato</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kformula">KFormula</a></li>
<li><a href="#filters">Filters</a></li>
</ul>


<h3 id="koffice_libs">KOffice Libraries</h3>
<em>Changes:</em>
<ul>
 <li>Sheet/Page tab bar in KSpread/Kivio can now be controlled via mouse wheel.</li>

 <li>KoText 
 <ul>
   <li>Fix problem with right-aligned tabs</li>
   <li>Fix footnote numbering</li>
   <li>Fix strange red and blue lines appearing for people who use --enable-debug</li>
  </ul></li>
 <li>KexiProperty library moved to KOffice libraries as more generic <em>KoProperty library</em>.
  <ul>
  <li>Properties are now better sorted in editor.</li>
  <li>Better display for composed editors for types like Rect.</li>
  <li>Expand/collapse boxes painted using styles; more whitespace added.</li>
  <li>Possible crashes fixed.</li>
  <li>Fixed entering text. Repaint and focusing fixed.</li>
  <li>Better support for multiline property captions.</li>
  <li>Fix editor refreshing after contents loading</li>
  <li>Fix for read-only mode: support it also globally at property set level</li>
  <li>Disable editing for read-only widgets</li>
  <li>Fix for displaying double (floating-point) values for the current locale</li>
 
  </ul>
 </li>
 <li><em>Scripting library</em> (Kross, in beta stage) moved to from Kexi to KOffice libraries for reuse in other KOffice applications.
  <ul>
  <li>Let everything, interpreters and wrappers, be a plugin; load plugins only on demand.</li>
  <li>Added bindings for GUI-toolkits like TKinter or PyQt.</li>
  <li>Integrated Zope RestrictedPython to provide a restricted python environment to execute Python scripting code in a secure sandbox.</li>
  <li>Added bindings for Python and <a href="http://www.ruby-lang.org">Ruby</a> programming languages.</li>
  <li>Fix deleting of ruby wrapped objects</li>
  <li>Handle Python unicode strings</li>
  <li>Fix crash cause of unhandled exception</li> 
  <li>Fix untranslatable error messages</li>
  <li>Fix layout when using ugly style</li>
  <li>Ruby: fix c++ shouldn't propagate inside c</li>
  <li>Python: fix wrong error-message</li>
  </ul>
 </li>
 
</ul>


<h3 id="koshell">KOffice Workspace (koshell)</h3>
<ul>
    <li>Add tabs for documents</li>
    <li>Remove Kudesigner from koshell (kugar is deprecated in this release and
      will be replaced for 2.0</li>
</ul>

<h3 id="kword">KWord</h3>

<em>New features:</em>
<ul>
 <li>The status bar now shows the page number, overwrite mode, zoom, unit etc.</li>
 <li>Ability to show the object grid and to switch the grid on/off</li>
 <li>Make it possible to stop moving and resizing frames with the Escape key.</li>
 <li>Paragraphs may have a background color (configurable via <em>Format->Paragraph</em> 
     or style manager).</li>
 <li>Don't change textframes to be the minimum size when user set it to protect size.</li>
 <li>Autoscrolling when resizing the insertion rectangle</li>
 <li>Fixes for selecting text with mouse in textmode</li>
 <li>Fix copy &amp; pasting of embedded documents</li>

 <li><em>Accessibility improvements</em>
  <ul>
   <li>"Menu" key shows RMB pop-up in document structure</li>
   <li>Ctrl+Menu activates frame/border menu.</li>
   <li>Go to Document Structure (Alt+1) and Go to Document (Alt+2) shortcuts.</li>
   <li>Inserting frames can now also be done by pressing Return</li>
   <li>A "Select Frame" shortcut can now be configured</li>
   <li>Single, 1.5, and double line spacing shortcuts can now be configured</li>
   <li>Text-to-speech integration</li>
  </ul>
 </li>
 <li>Overwrite mode (activated with the "Insert" key)</li>
 <li>Center page in window</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li><em>OASIS OpenDocument support</em>
  <ul>
   <li>Fixed loading of headers and footers (<a href="bugs.kde.org/107424">bug #107424</a>)</li>
   <li>Implemented saving of headers and footers</li>
   <li>Fix for text:h without outline-level</li>
   <li>Simplified the XML by removing spurious &lt;span&gt; tags due to misspelled words</li>
   <li>Save office:font-face-decls tag so that OOo loads the fonts</li>
   <li>Fixed loading of font sizes specified as a percentage</li>
   <li>Implemented loading of list indentation (space-before) (<a href="bugs.kde.org/109223">bug #109223</a>)</li>
   <li>Improved OOo compatibility when saving page breaks</li>
   <li>Save first page number the right way so that OOo can load it</li>
   <li>Save bookmarks</li>
   <li>Load and save frame styles, and table styles.</li>
  </ul>
 </li>
 <li>Many fixes to the text view mode</li>
 <li>Fixed updating of "statistics" variable (e.g. word count) when loading/saving.</li>
 <li>The Zoom levels "Fit to Width" and "Fit To Page" now keep up when resizing the window</li>
 <li>Fixed background spell-checking issues</li>
 <li>Text layouting: fix for formatting of multi-frame paragraphs <a href="bugs.kde.org/65059">(bug #65059)</a></li>
 <li>Many crash fixes</li>
 <li>Much improved documentation</li>
 <li>Many improvements of the document structure area, including pop-up menus, better refreshing...</li>
 <li>Resizing table rows with the mouse is disabled for this release, for the benefit of easier cell selection. Resizing columns works as before</li>
 <li>Improve mouse handling</li>
 <li>Fix crash due to missing table cell (<a href="bugs.kde.org/122807">#122807</a>)</li>
 <li>Enable pasting objects from KSpread</li>
 <li>Saner margins</li>
 <li>Fixes for pasting</li>
</ul>

<em>Known problems:</em>
<ul>
 <li>Some table bugs still remain. </li>
</ul>

<h3 id="kspread">KSpread</h3>
<em>New features:</em>
<ul>
 <li>OpenDocument is now the default file format</li>
 <li>support for non-contiguous selections</li>
 <li>a new faster and better formula engine</li>
 <li>a much improved Microsoft Excel import filter.</li>
 <li>Formula highlighting</li>
 <li>First steps towards <a href="http://www.dwheeler.com/openformula/">OpenFormula</a> compliance</li>
 <li>Much polishing of dialog windows</li>
 <li>Tooltips when writing formula's by hand</li>
 <li>Support for percent operator</li>
 <li>Function autocomplete</li>
 <li>Range-setting by dragging</li>
 <li>Prevent crash when problems with temp files arise</li>
 <li>Don't save background of cell if not set. Huge improvement in speed</li>
 <li>Prevent the embedded object from being scrolled out of view after double-clicking on it</li>
</ul>

<em>Fixes</em>
<ul>

 <li>Fix creation of emtpy charts</li>
 <li>Fixes for printing</li>
 <li>Fix crash bug <a href="bugs.kde.org/122239">#122239</a></li>
 <li>Cells can have longer text than 5000 character</li>
 <li>Fix problem with recalculation not working in saved .ksp files</li>
 <li>Multi-select for objects, object handling is now conform to the KOffice standards</li>
 <li>Fix link to local file</li>
 <li>Bug <a href="bugs.kde.org/122237">#122237</a>: empty cells get displayed correctly.</li>
 <li>Brace highlighting in the formula editor</li>
 <li>Several crash fixes</li>
 <li>Selection optimization speed</li>
 <li>Painting improvements</li>
 <li>Many performance fixes</li>
 <li>Bug 121104: Automatic Recalculation sheeting in Sheet Properties dialog is now respected.</li>
 <li>Bug 109797: Protect quote characters in cells by replacing each quote character by two consecutive quote characters.  Produce CSV files with the same number of columns in every row.</li>
 <li>Bug 118112: Numbers are correctly copy and pasted</li>
 <li>Bug 121771: COUNTIF(range, "0") function doesn't count blank cells anymore</li>
<li>KSpread can't input content in another sheet with keyboard</li>
<li>Paste global mouse selection on middle mouse click instead of global clipboard content.</li>
<li>Use nicer f(x) icon for the function button supplied by Aurelien Gateau.</li>
<li>Fix CSV export of times and dates.</li>
<li>Don't localize the name of the default cell style.</li>
<li>Localize the decimal separator in formulas on loading OpenDocument files</li>
<li>Fix value calculation in some functions, like PRODUCT or GCD.</li>
<li>OpenDocument Loading speedup and reduction of memory usage.</li>
<li>Fix loading of merged cells in OpenDocument files.</li>
<li>Reduce memory consumption of the style engine.</li>
<li>Try parsing values as numbers first, rather than as boolean.</li>
<li>Speedup in the painting engine.</li>
<li>Protected objects can't be resized anymore.</li>
<li>Start the choice using the arrow keys at the selection marker.</li>
<li>Scrolling in choose mode works again.</li>
<li>Dependency recalculation speedup.</li>
<li>Set cell text correctly when auto-filling times and dates.</li>
<li>Application loading speedup: Delay creation of KSpell config until spellchecking facilities are actually used.</li>
<li>Make the autofill behavior more consistent with Gnumeric / OpenOffice / Excel when a single cell is selected.
<ul>
    <li>If the cell contains a number, the number is just duplicated to fill the selection.</li>
    <li>If the cell contains a date it produces a series of 1-day increments.</li>
    <li>If the cellcontains a time it produces a series of 1-hour increments.</li>
</ul></li>
<li>Fix Insert Series dialog not updating the display text in the affected cells.</li>
<li>Fix preferences dialog so that current date/time are used to demonstrate locale after clicking on 'Update To Locale' button.</li>
</ul>

<em>Known issues</em>
<ul>
    <li>Insertion of columns and rows is slow; undo and redo of these operations is broken.
     This will be fixed in 1.5.1</li>
</ul>

<!-- 
<em>New functions:</em><br />
-->


<h3 id="kpresenter">KPresenter</h3>
<em>New features:</em>
<ul>
 <li>very much improved OpenDocument support</li>
 <li>print multiple pages per page (in printing dialog options)</li>
 <li>objects of master slide are now behind the objects of the slide</li>
 <li>reworked property editor</li>
 <li>improved guide lines</li>
 <li>added auto guide lines</li>
 <li>snapping to grid/guides during insert, improved snapping code</li>
 <li>improved many dialogs</li>
 <li>use default key modifier</li>
 <li>added autoscroll</li>
 <li>added object pop-up to outline</li>
 <li>Updated icons</li>
</ul>

<em>Fixes</em>
<ul>
 <li>updated the icons so that they look more like crystal</li>
 <li>Fix loading when the view is shown before the doc is fully loaded BUG:122641</li> 
 <li>Fix: Make it possible to resize objects around the center. BUG: 112310</li>
 <li>Fix problems with embedding</li>
 <li>Fix saving of stripe slide transition when saving to oasis. As they are not supported in OpenDocument I use koffice:additional-transition-style for saving them. In transition-style we use something similar so that OO can open it.</li>
 <li>Fix a bug when there was an object on the masterpage at the position of the header or footer and the footer was not shown.</li>
 <li>Fix saving of styles for text objects on the master page</li>
 <li>Fix loading of draw:frame when there where additional images</li>
 <li>Fix bug 122623: Vertically aligned texts in presentation are displaced first</li>
 <li>Fix for Bug 121414: KPresenter Krashed when I attempted to open a .ppt file from with the program.</li>
 <li>Optimize insertion of many objects</li>
 <li>Fix custom slideshow</li>
 <li>Fix Bug 120702 crash when opening odp-file created in OOImpress2.</li>
 <li>Fix Bug 120893: Crash when quitting an text box in edit mode.</li>
 <li>Save/load animations on the master slide in OASIS format</li>
</ul>


<h3 id="kivio">Kivio</h3>
<em>New features:</em>
<ul>
 <li>Automatic guidelines</li>
 <li>New dockers, shared with Krita and Karbon (now called palettes)</li>
 <li>New object list that can be used to mark objects on the page</li>
 <li>New stencils for ER diagrams</li>
</ul>

<em>Fixes</em>
<ul>
 <li>Fix CellPhone stencil</li>
 <li>Improvements in connector handling</li>
</ul>



<h3 id="kexi">Kexi</h3>

<em>Main new features:</em>
<ul>
 <li>Data-aware forms</li>
 <li>Form Designer's Data Source Pane for assigning data source to forms and widgets. Object tree view for easier navigating within widgets hierarchy</li>
 <li>Import from CSV files and pasting tabular data from clipboard. Export data to CSV files and copying tabular data to clipboard. Automatic detection of delimiters and column types</li>
 <li>Improved server connection dialog. Stored connection data</li>
 <li>Support for images in forms (stored as BLOBs)</li>
 <li>New widgets: multiline editor</li>
 <li>Improved MS Access (MDB) file import (optional plugin)</li>
 <li>Improved import of server databases to a file-based projects. Entire Kexi projects (not only tables) can be imported too</li>
 <li>Scripting plugins (Python and Ruby) to extend functionality (including example script for HTML export)</li>
 <li>Simple printouts, print settings and print preview for table and query data</li>
 <li>Handbook added (incomplete).</li>
 <li>More than two hundreds of overall improvements and bug fixes.</li>
</ul>

<em>Core</em>
<ul>
  <li>Fixed possible crash when an object has beed saved with a different name than proposed.</li>
  <li>Improved reaction on object creation/deletion/renaming.</li>
  <li>Fixed autogenerating object names (e.g. tables, queries) based on caption.</li>
  <li>use local sockets by default for local server connections, if possible</li>
  <li>added simple encryption for stored passwords</li>
  <li>allow to save empty password in .kexis and .kexic files</li>
  <li>ask for password (without storing it) for connection data without stored password</li>
</ul>

<em>Table Designer</em>
<ul>
  <li>Fixes for Designer's table grid and Property Editor pane.</li>
  <li>Field captions can be now entered by users instead of names. Field names are then automatically generated.</li>
  <li>Do not ask twice for saving changes to the design on window closing.</li>
  <li>Find unique name for autogenerated primary key fields.</li>
</ul>

<em>Query Designer</em>
<ul>
  <li>Various fixes for Visual Query Designer and SQL Editor; graphical representation of joins is generated back from SQL statement.</li>
  <li>A few bugs for relationships creation fixed; redrawing fixed.</li>
  <li>Ambiguous expressions fixed for criterias.</li>
  <li>Usability: file dialogs now store recent directory paths in the config file, and this is now used everywhere in Kexi.</li>
</ul>

<em>Form Designer</em>
<ul>
  <li>"format_font" action added; it's now possible setting font for one or multiple widget's standard using font dialog.</li>
  <li>Data aware 'multiline text editor' widget added.</li>
  <li>Added possibility of inserting autofields using 'Insert fields' button from Data Source tab.</li>
  <li>Data-aware image box widget": "insertFromFile", "saveAs", "cut", "copy", "paste", "delete", "properties" popup actions added.</li>
  <li>"readOnly" property added for image, spinboxes and dbfield widgets.</li>
  <li>More properties added for various widgets.</li>
  <li>Data source and Widgets tabs in the Property Pane implemented.</li>
  <li>"(autonumber)" label (identical to the one in tableview) is displayed in lineedit and label widgets assigned to autonumbered fields.</li>
  <li>Record's data is properly fetching.</li>
  <li>Copy common properties from an editing widget to an inline editor (e.g. "margin").</li>
  <li>Record navigator is now hidden if there's no data source assigned for a form.</li>
  <li>Better handling multiple widget selection.</li>
  <li>Support for Auto Fields, including drag&amp;drop. Editor inside Auto Field is visible at design time. Inserting Auto Fields is atomic command supporting undo/redo. Update label for font/palette change, display "Unbounded Auto Field" text when no data source is set (in design time, like for image box); improved behaviour in design time (setting caption/type/label position).</li>
  <li>Avoid adding accelerators.</li>
  <li>Added support for static and data-aware images boxes; properties implemented: scaling (aspect ration can be kept), horizontal/vertical alignment. </li>
  <li>Application-wide buffer for local (static) BLOB data like pixmaps. For now only pixmaps are supported. Used on design time before objects are stored. This allows to copy multimegabyte pixmaps within Kexi without unnecessary memory loss. Only one copy of each image is stored in memory.</li>
  <li>Memory for data is now properly freed before closing a form.</li>
</ul>

<em>Scripting (Kross)</em>
<ul>
  <li>KexiDB has been wrapped to access the whole database-functionality Kexi provides.</li>
  <li>Kexi application has been wrapped to access Kexi's runtime elements, like the Main Window.</li>
  <li>Added example scripts to demonstrate how scripting could be used to extend Kexi.</li>
  <li>Script Editor: Open, edit, save and execute scripting code; allow to configure interpreter-dependend options via the Property Editor.</li>
</ul>

<em>Data and Project Migration Wizard</em>
<ul>
  <li>Usability: after successful import, the project is opened.</li>
  <li>Speedup: table creation and data copying is performed within transactions.</li>
  <li>Added possibility of migrating Kexi projects from one backend to another.</li>
  <li>Implemented moving kexi projects from database servers to database files. </li>
  <li>Many GUI improvements.</li>
  <li>Added "Advanced options" button and dialog, currently with "Encoding" parameter for source database. Currently used by MDB driver for MSJet3 files.</li>
  <li>Import Wizard's GUI: improved messages, added real Finish page.</li>
</ul>

<em>CSV Data Import and Export</em>
<ul>
  <li>Added support for setting primary key (including autodetection).</li>
  <li>Added support for 'first row contains column names' flag (including autodetection).</li>
  <li>Column types and delimiting character are autodetected. Empty cells are supported.</li>
  <li>Different encoding can be selected.</li>
  <li>Added clipboard as target for data exporting.</li>
  <li>Added "Always use this encoding when importing CSV data files" option to "CSV Import Options" dialog.</li>
  <li>CSV Export dialog added (also for copying to clipboard) with storable export options.</li>
  <li>Optimization for large data: only about 100 rows are loaded for preview. Progress dialog added on dialog creation (opening can be cancelled). Importing can be cancelled as well.</li>
</ul>

<em>MS Access Database Import</em>
<ul>
  <li>Text data is properly decoded (object names and data).</li>
  <li>Fixed  handling for non-latin1 filenames.</li>
  <li>Fixed date, date/time types handling (including Y2k problem for years &gt;=1930) and currency type.</li>
</ul>

<em>Data Table Widget</em>
<ul>
  <li>Fixes for data updating and redrawing.</li>
  <li>Combo box popup behaves more like a normal combo box (highlighting, selecting).</li>
  <li>Fixed possible crashes, invalid repainting, added more keyboard shortcuts.</li>
  <li>Fixed switching sort order.</li>
  <li>Fixed entering row number in the row navigator (the same within forms).</li>
  <li>Usability: Date, Date/Time and Time cell editors completely reimplemented.</li>
  <li>Data for large table view is destroyed without blocking GUI (the same within forms).</li>
  <li>Date, time and date/time values are displayed using KDE settings.</li>
</ul>

<em>Main Window</em>
<ul>
  <li>Internal BLOB storage framework added.</li>
  <li>"All Supported Files" filter added to Kexi file dialogs.</li>
  <li>Missing icons added: small icons cleaned up; new query/form/report/script icons.</li>
  <li>Toplevel (buggy) and Tabbed (redundant) KMDI modes hidden in Window menu.</li>
  <li>Usability fixes in the Project Navigator.</li>
  <li>Many i18n'd messages fixed.</li>
  <li>"File-&gt;Export-&gt;Data Table" and "Edit-&gt;Copy Special-&gt;As Data Table" actions added.</li>
  <li>Usability: for IDEAl mode tabs are also visible when one window is opened; added "close" button to the tab widget for IDEAl mode.</li>
  <li>'hover close button' is now turned off by default for IDEAl mode (added appriopriate setting to kexirc for changing this).</li>
  <li>Do not allow to open the same dialog twice - it was possible for slowly loading dialogs with large data.</li>
  <li>Disable actions that require write access to the db if it's opened as readonly</li>
  <li>Closing dialog is now marked as 'pending job', the same as for opening</li>
  <li>When there are pending jobs, 'quit' and 'close project' actions are
  delayed and executed after last pending job finishes. This removed possible
  crashes when user closed application's main window (or closed project)
  when there are pending jobs.</li>
  <li>When query design has been changed and saved, subsequent openings of a form using
  it will reload its definition. The same for 'page setup' dialogs.</li>
  <li>Disabled complex and redundant action 'View -> Tool Docks' menu</li>
</ul>

<em>Simple Printouts</em>
<ul>
  <li>Added Simple Printouts with Print Preview and Page Setup windows.</li>
  <li>Pages to print can be selected; number of copies can be entered; pages collation switch on or off</li>
  <li>"Page Setup" action added; now it's window is only presented when user really wants this.</li>
</ul>

<em>Database Support Library (KexiDB)</em>
<ul>
  <li>More verbose error messages: Error messages and result numbers can be now inherited, so less information will be lost while displaying message e.g. on failed cursor opening.</li>
  <li>Generate cleaner query statements.</li>
  <li>Database Drivers: Fixed possible crashes.  Update for the current KexiDB API.</li>
</ul>

<em>Application Startup</em>
<ul>
  <li>Connection data editor improved; connection data is now storable; added support for adding/deleting/editing connection data.</li>
  <li>"-type connection" command line arg added (i.e. support for applications/x-kexi-connectiondata mime type)</li>
  <li>Files like MS Access .mdb can be clicked and then Import Wizard will pop up with preselected parameters. This also works using the command line options.</li>
  <li>Added --print and --print-preview command line options.</li>
  <li>Project Migration Wizard is proposed if a server-based database is incompatible with Kexi and cannot be opened.</li>
  <li>"--skip-dialog" command line option added. Skips displaying connection dialog and connects directly. Available when opening .kexic or .kexis shortcut files.</li>
  <li>opening server-based projects works in File-&gt;Open when there's already project opened.</li>
  <li>"--connection &lt;shortcut_filename&gt;" command line option added. Specifies a database connection shortcut .kexic file containing connection data. Can be used with --createdb or --create-opendb for convenience instead of using options like --user, --host or --port. Note: Options like --user, --host have precedence over settings defined in the shortcut file.</li>
</ul>

 <em>Database Drivers</em>
 <ul>
  <li>MySQL: non-latin1 text data (UTF8 encoded) was not properly retrieved.</li>
  <li>MySQL, PostgreSQL: entering special characters like ', \, ", \n did not work.</li>
  <li>PostgreSQL: fix for displaying unicode error messages</li>
 </ul>

<em>See also:</em>
<ul>
 <li><a href="http://kexi-project.org/wiki/wikiview/index.php?DetailedChanges1.0">Detailed Changes in Kexi</a></li>
 <li><a href="http://kexi-project.org/wiki/wikiview/index.php?UnsupportedFeatures1.0">Known Problems &amp; Unsupported Features in Kexi</a></li>
</ul>

<!--
<em>Data Processing and Access</em>
<ul>
</ul>

<em>Database Storage</em>
<ul>
</ul>
-->

<h3 id="krita">Krita</h3>
<em>New features:</em>
<ul>
 <li>Support for a number of colorspaces (of which many are under color management using lcms):
  <ul>
   <li>cmyk8</li>
   <li>cmyk16</li>
   <li>rgb16</li>
   <li>gray16</li>
   <li>rgb-half</li>
   <li>rgb-float16</li>
   <li>rgb-float32</li>
   <li>lab16</li>
   <li>lms16</li>
  </ul>
 </li>
 <li>use KOffice documents as layers</li>
 <li>adjustment layers</li>
 <li>fix drag & drop of images into Krita</li>
 <li>histogram docker</li>
 <li>group layers in folders</li>
 <li>much, much nicer layerbox with previews and tooltips</li>
 <li>complete tablet configuration page in settings</li>
 <li>scripting using Kross with Python and Ruby</li>
 <li>dedicated png, tiff and jpeg filters that load much more files correctly</li>
 <li>filters gallery</li>
 <li>nice curve widget for changing brightness/contrast</li>
 <li>plugin architecture that enables colorspaces, tools, paint operations,
   filters and much else to be implemented as plugins</li>
 <li><em>New filters:</em>
  <ul>
   <li>sobel</li>
   <li>smalltiles</li>
   <li>roundcorner</li>
   <li>dropshadow</li>
   <li>wavelet-image enhancements</li>
   <li>bumpmap</li>
  </ul>
 </li>
 <li>image separations plugin that allows separation to 16 bit grayscale images</li>
 <li>OpenGL mode for speedups</li>
 <li>load and save palettes, patterns and brushes.</li>
 <li>Krita now compiles on NetBSD</li>
 <li>When "Select Similar Colors" a transparent area, add only transparent areas instead of the entire image to the selection.</li>
 <li>Fix loading and saving of grayscale images</li>
 <li>Fix ImageMagick 16/8 bit image confusion when loading and saving.</li>
 <li>Warn when applying a filter that will convert the layer data</li>
 <li>create and save new brushes</li>
 <li>show image in center of window</li>
</ul>

<em>Fixes</em>
<ul>
 <li>Improved transform tool (the results still aren't good quality, but crashes and funny leaps have been removed)</li>
 <li>Fix crash after executing a script</li>
 <li>Improve rendering of adjustment layers</li>
 <li>Initial image size is set to size of clipboard image if present (bug 122815)</li>
 <li>Fix crash in computing adjustment layers</li>
 <li>Load scripts if Krita is loaded from KOShell</li>
 <li>Fix layout of tool option widgets</li>
 <li>Fix ui problem with opacity slider</li>
 <li>Save images with .rgb extension as SGI</li>
 <li>Enable scrollwheel and pan in preview widget</li>
 <li>Fix saving bmp -- use .bmp3 extension to save in the most widely compatible bmp format.</li>
 <li>Fix undo of layer colorspace schange</li>
 <li>Improve rendering performance if zoom &lt; 1.0</li>
 <li>Fix layer name counter staying incremented after cancelling a new layer</li>
 <li>Disable apply filter again menu entry initially</li>
 <li>Reorganize filter menu to not include empty items</li>
 <li>Add support of YCbCr tiff images</li>
 <li>Load deflated tiff images</li>
 <li>Fix birdeye panel</li>
 <li>Fix implementation and improve speed of resize, scale, rotate, shear, mirror </li>
 <li>Fix crash with big images and minimum swappiness</li>
 <li>Fix loading and saving of adjustment layers (please test!)</li>
 <li>Add progress dialog for raw import</li>
 <li>Speedup rendering of lab histograms for histogram docker. Also speeds up conversion to lab colorspace</li>
 <li>Many fixes in embedded part creation, handling, rendering, loading and saving</li>
 <li>Improve performance of histogram docker</li>
 <li>Make wetness, size and hardness when painting wet dependent on pressure</li>
 <li>Add preview for part layers to layerbox</li>
 <li>Fix pressure adjustment checkboxes for opacity, darken and size</li>
 <li>Created pipe brushes should work now</li>
 <li>Fix edges of adjustment layers</li>
 <li>Make moving a group layer move all containing layers</li>
 <li>Fix opening of jpegs and tiffs with unidirectional profiles</li>
 <li>Add CREATE resource compliance</li>
 <li>Sppedup loading of images greatly</li>
 <li>Speedup gradient rendering a lot</li>
 <li>Implement mixcolors for cmyk (fill &amp; select contiguous should work now)</li>
 <li>Fix flatten image</li>
 <li>Improved speed of filters gallery dialog</li>
 <li>Add REPEAD option to convolution painter</li>
 <li>Fix bugs 120988, 121341, 108919,</li>
 <li>Improve convolution painter with 25%</li>
 <li>Fix tablet and popup menu interaction bug</li>
 <li>Fix bumpmap filter</li>
 <li>Fix poly tools: double-click or shift-click to end the poly</li>
 <li>Fix autobrush for circle</li>
 <li>Better tool cursors</li>
 <li>Add palettes and brushes submitted by Natalie.</li>
 <li>Implement grow/shrink/smooth/erode/dilate/border  selection function</li>
 <li>Fix rendering on ppc</li>
 <li>Fix RAW import filter</li>
 <li>Fix simple noise reducer for cmyk</li>
 <li>Fix for colorspaces where the default pixel color isn't all 0</li>
 <li>When resizing an image to the size of a layer, move the layer to 0,0</li>
 <li>Enable loading remote images from recent files widget</li>
 <li>Don't crash when out of memory for a wavelet transform</li>
 <li>Add show selection toggle shortcut</li>
 <li>Filters config widgets with sliders should now be much more responsive</li>
 <li>Improved speed of filter preview widget lots</li>
 <li>Fix loading images with different profiles for layers</li>
 <li>UI fixes for layerbox</li>
 <li>Fix merge with layer below</li>
 <li>Display grid in opengl mode</li>
 <li>Don't crash when per-channel adjusting cmyk</li>
 <li>Better colors for cmyk in histogram</li>
 <li>Make it possible to change the current profile without converitng pixel values</li>
 <li>Fix feather selection (crash fix)</li>
 <li>Fix loading profiles fomr color/icc, .color/icc</li>
 <li>Add support for exif in jpeg</li>
 <li>Speedup on creating a selection</li>
 <li>Don't set the image dirty when clicking on the gray borders</li>
 <li>Optimize rendering for images with only one layer</li>
 <li>Allow moving a layer outside its group by pressing up</li>
 <li>Fix separations plugin</li>
 <li>Fix colorchoosers flicker &amp; background color bug</li>
<li> Fix update problems associated with adjustment layers</li>
<li> Faster selection rendering</li>
<li> Fix selection/invert</li>
<li> Use squeezed combobox/label for profiles</li>
<li> Fix Text tool</li>
<li> Fix saving of per-channel and brightness/contrast adjustment layers</li>
<li> Improve performance of filling rectangles</li>
<li> Improve scaling and rotation quality (BUG: 123160)</li>
<li> Fix radius-based colorpicking</li>
<li> Embedding KWord now works</li>
<li> Make convolve, darken, intensity8 and invert colorspace-independent and
optimized</li>
<li> Show filter name in reapply last filter</li>
<li> Fix composition with 8 it cmyk</li>
<li> Make it possible to change the colorspace of an image without converting
all layers</li>
<li> Many crash fixes and stability improvements</li>
<li> Fix polyline tools not getting reset between invocations</li>
<li> Make the rulers use sane step sizes for the number shown</li>
<li> Don't show exposure slider if the image is not HDR</li>
<li> Enable the screenshot plugin again</li>
<li> Fix separate image</li>
<li> Many fixes to tiff filter: add support for YCbCr colorspaces in tiff</li>
<li> Fix loading of images with utf8 characters in the name (BUG:123495)</li>
<li> Fix crash when creating very small images</li>
<li> Fix memory leaks in painting with filters.</li>
<li> Disable the Cubism filter</li>
<li> Fix painting in Lab mode</li>
</ul>

<em>Known Issues</em>

<ul>
    <li>Paint with the sharpen filter is broken</li>
    <li>Rotating large images is broken</li>
</ul>

<h3 id="karbon">Karbon</h3>

<em>New features:</em>
<ul>
 <li>improved OASIS file format support</li>
 <li>new color selectors</li>
 <li>improved selection handling</li>
 <li>improved stability and rendering</li>
 <li>improved SVG compatibility</li>
 <li>better toolbox</li>
 <li>Duplicate object</li>
 <li>Load SVG and Gimp gradients</li>
 <li>Support for changing gradient or pattern fills on the canvas</li>
</ul>
<em>Fixes</em>
<ul>
 <li>Fix sorting of layer list view</li>
 <li>Fix drawing and orientation of vertical ruler</li>
 <li>Fixes to gradient widget</li>
 <li>Improved OASIS support</li>
 <li>Fix for printing (bugs 119452, 99927)</li>
 <li>Fix crash with gradients</li>
 <li>Fix bug crash when Karbon is embedded in koshell</li>
 <li>properly update the objects bounding box when moving bezier points</li>
 <li>Fix Bug 120374 -- crash in AI export</li>
</ul>

<h3 id="kplato">KPlato</h3>
<em>New features:</em>
<ul>
 <li>Resource management</li>
 <li>Hierarchical calendars</li>
 <li>Tasks with dependencies and subtasks.</li>
 <li><em>Various charts for visualization, like:</em>
  <ul>
   <li>Gantt</li>
   <li>Pert</li>
  </ul>
 </li>
 <li>Reports generation</li>
 <li><em>Project scheduling</em>
  <ul>
   <li>Pessimistic,</li>
   <li>Expected,</li>
   <li>Optimistic.</li>
  </ul>
 </li>
 <li>Work breakdown structure (WBS).</li>
 <li>Critical path and resources.</li>
 <li>Put back project name in printout</li>
 <li>Clip printout of gantt chart</li>
 <li>Nicer icons</li>
 <li>Much improved calculations</li>
 <li>Fix status representation</li>
 <li>Zoom for gantt charts</li>
</ul>

<em>Fixes</em>
<ul>
 <li>Add menu option to show/hide task-/resource allocation views.</li>
 <li><a href="http://bugs.kde.org/121828">Bug 121828</a>: Save/load resource cost and units.</li>
</ul>

<h3 id="kchart">KChart</h3>
<em>Features:</em>
<ul>
 <li>OpenDocument is now the default file format</li>
 <li>new chart type: combined bars and lines</li>
 <li>support for first row or column as labels</li>
 <li>support for changing area when charting data from KSpread</li>
 <li>Add start of OASIS OpenDocument support</li>
 <li>Replace charting engine with new version from KDab</li>
 <li>Fix for display flicker</li>
 <li>Fix <a href="bugs.kde.org/41612">bug #41612</a></li>
</ul>

<em>Fixes:</em>
<ul>
<li>All the graphics related bugs in <a href="http://bugs.kde.org">bugs.kde.org</a> have been fixed</li>
</ul>

<h3 id="kformula">KFormula</h3>

<p>Excellent news: KFormula got a new maintainer: Alfredo Beaumont.</p>

<em>Fixes</em>

<ul>
 <li>Fix a rendering rect check that caused special symbols not to be shown
properly when kformula was embedded inside another app. Bugs: 47660, 70773.</li>

 <li>BaKoMa TeX fonts are packaged and installed with KFormula. This should resolve
the formula font rendering problems if users select TeX fonts. (this was probably
the most important problem in kformula) Bugs 50939, 106909, 112994.</li>

<li>Cursor changes: make it more thick, blinking and only shown when focus is in
formula. This improves accessibility.</li>
</ul>



<h3 id="kugar">Kugar</h3>
<ul>
 <li>Kugar is no longer accessible from koshell</li>
 <li>Fix crash when changing pages on reloaded report</li>
</ul>

<h3 id="filters">Filters</h3>

<em>KWord:</em>
<ul>
 <li>Many fixes and improvements in the html import filter</li>
</ul>

<em>KPresenter:</em>
<ul>
 <li>New PowerPoint import filter</li>
</ul>

<em>KSpread:</em>
<ul>
 <li>a much improved Microsoft Excel import filter.</li>
</ul>

<em>Kexi:</em>
<ul>
 <li>much improved <a href="http://en.wikipedia.org/wiki/Comma-separated_values">CSV</a> files support.</li>
 <li>improved Microsoft Access files support.</li>
</ul>

<em>Krita:</em>
<ul>
    <li>New tiff import/export filter with support for many colorspaces</li>
    <li>New jpeg import/export filter wit support for cmyk and rgb</li>
    <li>New png import/export filter with support for many colorspaces</li>
    <li>Improved magic import filter with support for layers and lab colorspace</li>
    <li>load LAB photoshop images</li>
    <li>New RAW import filter (needs dcraw installed)</li>
</ul>

<?php
  include("footer.inc");
?>
