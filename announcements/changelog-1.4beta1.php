<?php
  $page_title ='KOffice 1.4-beta1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.3.5 (latest stable version).
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
<ul>
 <li>New icon sidebar</li>
 <li>Support for tabs</li>
</ul>

<h3><a name="kotext">KoText library features (shared between KWord and KPresenter)</a></h3>
<ul>
 <li>Rewritten spell-checking support (based on kspell2, the main reason for the kdelibs &gt;= 3.3 requirement) which is much faster and solves many problems (e.g. the hanging contextual menu in KOffice-1.3). With aspell, spell-checking is available in more than 70 languages</li>
 <li>Word completion with tooltip</li>
 <li>Open links by clicking on them, use hand pointer, show link target in statusbar</li>
 <li>Tab/Shift+Tab for changing indentation in lists</li>
 <li>Improved autocorrection (better URL detection among other things)</li>
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
</ul>

<em>Bugfixes:</em>
<ul>
 <li>Make it possible to select entire paragraphs from the left margin again</li>
 <li>Removed non-working feature "Type anywhere cursor"</li>
 <li>Rewritten "convert to text box" and "convert table to text" features so that they do not use the clipboard anymore</li>
 <li>Many other bugfixes</li>
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


<h3><a name="kspread">KSpread</a></h3>
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
</ul>

<em>New functions:</em><br />

<p><em>Engineering (2):</em>
ACOT,
RANDNORM (gaussian random numbers),
REGEXP,
REGEXPRE (regexp replace),
SUMIF (conditional sum)
</p>

<h3><a name="kchart">KChart</a></h3>
<ul>
 <li>New maintainer. Many, bugfixes.</li>
 <li>Removed a lot of old non-working stuff. It will reappear, working, in future versions.</li>
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

<h3><a name="kivio">Kivio</a></h3>
<ul>
 <li>Non blocking stencilset loading</li>
 <li>Added Nassi Schneiderman stencils</li>
 <li>Moving selected stencils with the keyboard</li>
 <li>Added a docker for adding stencils to the document</li>
 <li>Added a tool for adding connector targets to stencils</li>
 <li>Added a polyline connector</li>
</ul>


<h3><a name="kexi">Kexi</a></h3>
KOffice 1.4 is the first official release to include <a href="http://www.kexi-project.org/wiki/wikiview/index.php?AnnouncementForKOffice1.4">Kexi</a>.
Kexi is an integrated environment for creating and managing databases. It can be used for creating database schemas; inserting data; performing queries, and processing data. Forms can be created to provide a custom interface to your data. All database objects - tables, queries and forms - are stored in the database, making it easy to share databases.

Kexi is considered as a long awaited Open Source competitor for MS Access, Filemaker and Oracle Forms. Its development is motivated by the lack of Rapid Application Development (RAD) tools for database systems that are sufficiently powerful, inexpensive, open standards driven and portable across many OSes and hardware platforms.

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

<h3><a name="krita">Krita</a></h3>
Krita is an image editor and paint application with a wide range of
applications, from photo editing to the creation of original artwork.
Sporting a clear and uncluttered interface (for a paint app...) it makes the
features it delivers accessible and intuitive to use.

This is the first public release of Krita and while it provides a coherent set
of features, it is only the first stepping stone towards a flexible paint
application for artists and image editors.

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

<em>Caveats:</em>
<ul>
 <li>In this beta version exif data embedded in jpeg images is not preserved.</li>
 <li>Some tools and menu options do not yet function completely correctly.</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
 <li>Support for multi-line formulae including element alignment</li>
 <li>Changeable char attributes</li>
 <li>New over- and underlines</li>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<ul>
 <li>OASIS file format support (incomplete)</li>
 <li>New color dialog</li>
 <li>Small preview widget</li>
 <li>ZoomIn/ZoomOut actions</li>
 <li>Build system fixes</li>
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
