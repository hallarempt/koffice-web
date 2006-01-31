<?php
  $page_title ='KOffice 1.5-beta1 Changelog';
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


<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<em>Changes:</em>
<ul>
 <li>Sheet/Page tab bar in KSpread/Kivio can now be controlled via mouse wheel.</li>
 <li>KexiProperty library moved to KOffice libraries as more generic <em>KoProperty library</em>.
  <ul>
  <li>Properties are now better sorted in editor.</li>
  <li>Better display for composed editors for types like Rect.</li>
  <li>Expand/collapse boxes painted using styles; more whitespace added.</li>
  <li>Possible crashes fixed.</li>
  <li>Fixed entering text. Repaint and focusing fixed.</li>
  <li>Better support for multiline property captions.</li>
  </ul>
 <li><em>Scripting library</em> (Kross, in beta stage) moved to from Kexi to KOffice libraries for reuse in other KOffice applications.
  <ul>
  <li>Let everything, interpreters and wrappers, be a plugin; load plugins only on demand.</li>
  <li>Added bindings for GUI-toolkits like TKinter or PyQt.</li>
  <li>Integrated Zope RestrictedPython to provide a restricted python environment to execute Python scripting code in a secure sandbox.</li>
  <li>Added Python bindings.</li>
  </ul>
</ul>

<!--
<h3><a name="koshell">KOffice Workspace (koshell)</a></h3>
<ul>
</ul>
-->

<h3><a name="kword">KWord</a></h3>

<em>New features:</em>
<ul>
 <li>The status bar now shows the page number, overwrite mode, zoom, unit etc.</li>
 <li>Ability to show the object grid and to switch the grid on/off</li>
 <li>Make it possible to stop moving and resizing frames with the Escape key.</li>
 <li>Paragraphs may have a background color (configurable via <em>Format->Paragraph</em> 
     or style manager).</li>
 <li><em>Accessibility improvements</em>
  <ul>
   <li>"Menu" key shows RMB pop-up in document structure</li>
   <li>Ctrl+Menu activates frame/border menu.</li>
   <li>Go to Document Structure (Alt+1) and Go to Document (Alt+2) shortcuts.</li>
   <li>Inserting frames can now also be done by pressing Return</li>
   <li>A "Select Frame" shortcut can now be configured</li>
   <li>Single, 1.5, and double line spacing shortcuts can now be configured</li>
   <li>Text-to-speech integration
  </ul>
 </li>
 <li>Overwrite mode (activated with the "Insert" key)</li>
 <li>Center page in window</li>
</ul>

<em>Changes:</em>
<ul>
 <li>Much improved documentation</li>
 <li>Many improvements of the document structure area, including pop-up menus, better refreshing...</li>
 <li>Resizing table rows and columns with the mouse is disabled for this release, for the benefit of easier cell selection</li>
</ul>

<em>Bugfixes:</em>
<ul>
 <li><em>OASIS OpenDocument support</em>
  <ul>
   <li>Fixed loading of headers and footers (#107424)
   <li>Implemented saving of headers and footers
   <li>Fix for text:h without outline-level
   <li>Simplified the XML by removing spurious <span> tags due to misspelled words
   <li>Save office:font-face-decls tag so that OOo loads the fonts
   <li>Fixed loading of font sizes specified as a percentage
   <li>Implemented loading of list indentation (space-before) (#109223)
   <li>Improved OOo compatibility when saving page breaks
   <li>Save first page number the right way so that OOo can load it
   <li>Save bookmarks
   <li>Load and save frame styles, and table styles.
  </ul>
 </li>
 <li>Many fixes to the text view mode</li>
 <li>Fixed updating of "statistics" variable (e.g. word count) when loading/saving.</li>
 <li>The Zoom levels "Fit to Width" and "Fit To Page" now keep up when resizing the window</li>
 <li>Fixed background spell-checking issues</li>
 <li>Text layouting: fix for formatting of multi-frame paragraphs (#65059)</li>
</ul>

<em>Caveats:</em>
<ul>
 <li>Some table bugs still remain. </li>
</ul>

<h3><a name="kspread">KSpread</a></h3>
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
</ul>

<!-- 
<em>New functions:</em><br />
-->


<h3><a name="kpresenter">KPresenter</a></h3>
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
</ul>

<em>Bugfixes:</em>
<ul>
 <li>too many bug fixes to list</li>
</ul>

<!--
<em>Changes:</em>
<ul>
</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<em>New features:</em>
<ul>
 <li>Automatic guidelines</li>
 <li>New dockers, shared with Krita and Karbon (now called palettes)</li>
 <li>New object list that can be used to mark objects on the page</li>
 <li>New stencils for ER diagrams</li>
</ul>


<h3><a name="kexi">Kexi</a></h3>

<p>Changes since the release of <a href="http://kexi-project.org/wiki/wikiview/index.php?0.9Announcement">Kexi 0.9</a>.</p>

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
 <li>Scripting plugin (Python) to extend functionality (including example script for HTML export)</li>
 <li>Simple printouts, print settings and print preview for table and query data</li>
 <li>Handbook added (incomplete).</li>
 <li>More than two hundreds of overall improvements and bug fixes.</li>
</ul>

<em>Core</em>
<ul>
  <li>Fixed possible crash when an object has beed saved with a different name than proposed.</li>
  <li>Improved reaction on object creation/deletion/renaming.</li>
  <li>Fixed autogenerating object names (e.g. tables, queries) based on caption.</li>
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
  <li>Added support for setting primary key (including autodetection).
  <li>Added support for 'first row contains column names' flag (including autodetection).
  <li>Column types and delimiting character are autodetected. Empty cells are supported.
  <li>Different encoding can be selected.
  <li>Added clipboard as target for data exporting.
  <li>Added "Always use this encoding when importing CSV data files" option to "CSV Import Options" dialog.
  <li>CSV Export dialog added (also for copying to clipboard) with storable export options.
  <li>Optimization for large data: only about 100 rows are loaded for preview. Progress dialog added on dialog creation (opening can be cancelled). Importing can be cancelled as well.
</ul>

<em>MS Access Database Import</em>
<ul>
  <li>Text data is properly decoded (object names and data).
  <li>Fixed  handling for non-latin1 filenames.
  <li>Fixed date, date/time types handling (including Y2k problem for years &gt;=1930) and currency type.
</ul>

<em>Data Table Widget</em>
<ul>
  <li>Fixes for data updating and redrawing.
  <li>Combo box popup behaves more like a normal combo box (highlighting, selecting).
  <li>Fixed possible crashes, invalid repainting, added more keyboard shortcuts.
  <li>Fixed switching sort order.
  <li>Fixed entering row number in the row navigator (the same within forms).
  <li>Usability: Date, Date/Time and Time cell editors completely reimplemented.
  <li>Data for large table view is destroyed without blocking GUI (the same within forms).
  <li>Date, time and date/time values are displayed using KDE settings.
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

<h3><a name="krita">Krita</a></h3>
<em>New features:</em>
<ul>
 <li>Support for a number of colorspaces (of which many are color-managed):
  <ul>
   <li>cmyk8
   <li>cmyk16
   <li>rgb16
   <li>gray16
   <li>rgb-half
   <li>rgb-float16
   <li>rgb-float32
   <li>lab16
   <li>lms16
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
 <li>load LAB photoshop images</li>
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

<em>Bugfixes:</em>
<ul>
 <li>117570   Allow image positioning anywhere on the working area</li>
 <li>108205   Implement paste as new</li>
 <li>108399   Allow Esc button to cancel a running operation</li>
 <li>108428   Usability: no brush preview at the pointer</li>
 <li>103603   Starting Krita with templates is broken.</li>
 <li>104192   Converting images or layers to another color model is broken</li>
 <li>105073   wish: colour panel should not always pick black, if user ...</li>
 <li>105274   wish: change behaviour of crop tool, to crop selection</li>
 <li>105276   wish: put Tools toolbar to the side and activate descript...</li>
 <li>105921   Toolbars cannot be redocked properly at top after being d...</li>
 <li>106284   crash upon loading any image file</li>
 <li>106731   Gimp pipe brushes randomness is not properly supported by...</li>
 <li>106891   Compile error in kis_painter.cc on Solaris 9/SPARC</li>
 <li>106919   Colour Manager sets colours wrong</li>
 <li>107066   Pen has soft edges</li>
 <li>107122   Layers box behaves strangely</li>
 <li>107127   Property boxes disappear on image load</li>
 <li>107128   Krita asks to save even if image is unchanged</li>
 <li>107131   Make the zoom tool a drop-down widget</li>
 <li>107132   Drop "tool" from the tooltips</li>
 <li>107348   Layerbox behaves badly when there are many layers</li>
 <li>107938   Select all and cut/copy makes Krita hang</li>
 <li>107939   Krita crashes on opening attached image</li>
 <li>107994   Moving a detached docker resizes it to a minimum</li>
 <li>108081   Kivio style dockers don't work</li>
 <li>108397   crashing on (external) clipboard change</li>
 <li>108398   rulers don't get repainted on creation.</li>
 <li>108704   Krita crashed by copying a part of an image via the short...</li>
 <li>109611   Krita now requires lcms 1.13</li>
 <li>109913   Crashes after drawing box, making selection then filling ...</li>
 <li>109968   dcop rotate should provide image rotate</li>
 <li>109969   mousewheel speed to slow</li>
 <li>109971   Crash trying to DND while krita is working</li>
 <li>110187   cancel in 'new image' dialog should quit krita</li>
 <li>110293   side panel "spinbox" focus prevents keyboard shortcuts fr...</li>
 <li>110296   Cancelling a transform destroys image</li>
 <li>110303   Toolbox does not work with 2 instances of krita</li>
 <li>110311   crash after selecting different templates</li>
 <li>110906   select similar colors tool does not work on transparent c...</li>
 <li>110907   Fill when there is a selection ignores underlying image</li>
 <li>111484   Krita : silent crash</li>
 <li>111629   Crash when Edit->Clear selected</li>
 <li>112029   Krita crashes when dragging selection tool beyond canvas</li>
 <li>112723   JPEG meta info comment lost on editing in krita</li>
 <li>112727   If present, change the 'Orientation' meta data on rotation</li>
 <li>112776   program crash on click at filter name "Mean Removal"</li>
 <li>112787   Add a Fill action</li>
 <li>112855   krita crashes when moving a selection</li>
 <li>113335   bug: when i use krita as an embedded bitmap editor more ...</li>
 <li>113521   Rotate image skews layers that have an offset</li>
 <li>113680   Closing one Krita-instance closes all of them</li>
 <li>114233   I can no way get an empty Krita workshop</li>
 <li>114981   missing shortcut for Change Image Size</li>
 <li>115437   crash at undo afer color-adjustment and save</li>
 <li>115840   krita crashes while doing copy/paste</li>
 <li>115873   color picker probs with selecting in a specific layer</li>
 <li>115876   Crashes when double clicking in crop selection</li>
 <li>118902   krita needs a right click menu</li>
 <li>119610   Crash when substract selection</li>
 <li>119930   Statusbar pops up for View > Show Rulers</li>
</ul>

<em>Caveats in the beta:</em>
<ul>
 <li>transforms/layer merge/flatting is broken</li>
 <li>saving adjustment layers does not work</li>
 <li>saving multi-layer images to .psd or .xcf will flatten your image (which doesn't work)</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>

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

<em>Bugfixes:</em>
<ul>
 <li>114421 Transform palette has a strange layout when it is tall</li>
 <li>114424 Stroke properties palette has a strange layout when it is...</li>
 <li>114425 Color palette has title "Fill color" even when it shows s...</li>
 <li>114428 The last created object should stay selected</li>
 <li>114577 The Document/Layers/History palette is not shown on start</li>
 <li>114579 Deleting polyline segment moves the mouse pointer to (0, 0)</li>
 <li>114580 JJ: The line thickness SpinBox has no tooltip</li>
 <li>112765 Selecting a polyline and running the "round corners" plug...</li>
 <li>60438 undo confusion between point and shape action</li>
 <li>92974 svg export creates useless svg file (from text tool)</li>
 <li>115752 Make paste operation undo:able</li>
 <li>116612 svg import/rendering bugs</li>
 <li>111372 karbon: KLibrary: Undefined symbol "init_libkarbonpart"</li>
 <li>114578 A polyline spline has a too big surrounding box</li>
 <li>89596 Switching between Karbon14 and KSVGPlugin view in Konquer...</li>
 <li>38555 segv when opening a file svg or kontour native</li>
 <li>116422 un-usable selecting behaviour multple moving</li>
 <li>116972 Transform palette is not updated when moving or scaling an object</li>
 <li>115213 The color and opacity bars in the color chooser palette are backwards.
        (thanks Marijn Kruisselbrink for the initial patch)</li>
 <li>96944 Wanted: good right-click actions for polyline tool, zoom ...</li>
 <li>111619 Page layout: size alias and margins doesn't get saved</li>
 <li>111717 How to bring back the overview window if you close it?</li>
 <li>111618 Rename plugins menu to "Effects"</li>
 <li>109520 Change Align Center (Vertical) to Align Middle and add some extra separators</li>
 <li>108789 Keybindings like krita, and other tweaks</li>
 <li>108755 Always use this document at startup, Karbon has no way to stop doing this. Add a basic karbon template.</li>
 <li>91376, 111207, 60844 Dockers now use the KoPalette library. This means a huge improvement when it comes to docker management</li>
 <li>112691 Usability: The tools should be grouped</li>
 <li>114429 The color picker is bad: Karbon now uses the Krita color choosers.</li>
</ul>

<h3><a name="kplato">KPlato</a></h3>
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
</ul>


<h3><a name="kchart">KChart</a></h3>
<em>Features:</em>
<ul>
 <li>OpenDocument is now the default file format (not working in the beta)</li>
 <li>new chart type: combined bars and lines (not working in the beta)</li>
 <li>support for first row or column as labels</li>
 <li>support for changing area when charting data from KSpread</li>
</ul>
<em>Bugfixes:</em>
<ul>
 <li>All the graphics related bugs in bugs.kde.org have been fixed</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
<li>Fix embedding
</ul>


<h3><a name="filters">Filters</a></h3>
<!--
<em>KWord:</em>
<ul>
</ul>
-->

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


<?php
  include("footer.inc");
?>
