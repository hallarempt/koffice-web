<?php
  $page_title ='KOffice 1.6-alpha Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.5 (latest stable version).
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#kchart">KChart</a></li>
<li><a href="#kformula">KFormula</a></li>
</ul>


<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li><em>KoProperty Library</em>
  <ul>
  <li>Possible fix for crash, maybe a definitive fix for <a href="http://bugs.kde.org/124917">bug #124917</a></li>
  <li>Group items now have rather pretty appearance styled with KDE style; fixed groups order, API changed: now it's possible to get order of groups; sorting disabled when groups are present; icons can be defined and displayed within the group items</li>
  <li>Added a container widget that can be used to split information into hideable sections</li>
  <li>Clear all properties and group names when using operator =; delayed deleting of editors on setting a new property </li>
 </li>
</ul>

<h3 id="kexi">Kexi</h3>

<em>Main new features:</em>
<ul>
 <li>Object data type and data-aware image form widget</li>
 <li>Improvements in Auto Field form widget</li>
 <li>Table design altering without removing the existing data</li>
</ul>

<em>Table Designer</em>
<ul>
  <li>Undo/redo actions introduced; deleting and redoing actions improved
  in the table-altering machinery of KexiDB</li>
  <li>Clear primary key when selecting non-integer type</li>
  <li>Added title to the context menu</li>
  <li>Changing field's description is supported by undo/redo commands 
  and by alter table actions.</li>
  <li>Internal Debugger added with "Real alter table" button, 
  for convenience, "save" action now uses the old alter table code (<a href="">details</a>)</li>
  <li>Renaming table fields works, table schema is recreated when needed,
  and just altered in-place when it's enough to do so</li>
</ul>

<!-- em>Query Designer</em>
<ul>
  <li></li>
</ul -->

<!-- em>Query Designer</em>
<ul>
  <li></li>
</ul -->

<em>Forms</em>
<ul>
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
</ul>

<!-- em>Scripting (Kross)</em>
<ul>
  <li></li>
</ul -->

<em>Data and Project Migration Wizard</em>
<ul>
  <li>Improved usability for selecting type of destination database
  (no mention of SQLite for now)</li>
</ul>

<em>CSV Data Import and Export</em>
<ul>
  <li>Fixed recursion when importing clipboard data </li>
  <li>Allow to change the delimiter when importing clipboard data </li>
  <li>Parsing data improved: values without leading zeros, like 1/2/2006 work;
 Since apps like MS Access in the USA creates csv files with date 
 format month/day/year, (and without leading zeros), text with "/" 
 inside is assumed to be in this format.</li>
</ul>

<!-- em>MS Access Database Import</em>
<ul>
  <li></li>
</ul -->

<em>Data Table View</em>
<ul>
  <li>Spreadsheet mode: fixed inserting empty rows and deleting rows</li>
  <li>Cell editor: the contents are marked as changed only when the original 
  value differs from the current</li>
</ul>

<em>Database Support Library (KexiDB)</em>
<ul>
  <li></li>
  <li>Improved operations related to <i>table design altering</i></li> 
  <li>Fixed setting database filename when relative path has been provided</li>
  <li>Optimization: "rename table" action now uses "ALTER TABLE RENAME TO" 
  SQL statement, O(1).</li>
  <li>X-Kexi-DoNotAllowProjectImportingTo KexiDB driver property added, false by defaut</li>
</ul>

 <em>Database Drivers</em>
 <ul>
  <li>SQLite library upgraded from 3.0.7 to 3.2.8 (backward compatible),
  to get "table renaming" function.</li>
  <li>Table altering improved for SQLite: changing data types will be possible soon</li>
 </ul>

<h3 id="krita">Krita</h3>

<h3 id="kchart">KChart</h3>

<h3 id="kformula">KFormula</h3>

<?php
  include("footer.inc");
?>