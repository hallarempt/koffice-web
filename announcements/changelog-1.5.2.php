<?php
  $page_title ='KOffice 1.5.2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice <a href="changelog-1.5.1.php">1.5.1</a> (latest stable version).
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


<h3 id="koffice_libs">General</h3>
<ul>
<li>Alter behavior of revision number to not increase on every save but only increase one time for a start of the app and when it is saved.</li>
<li>Fix bug where half the templates were not shown in 'Emperial' measurement based countries (with Letter instead of A4 sized pages)</li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
<li>Fix crash that occurred sometimes when search/replacing text</li>
<li>128126 Fix "Insert Page Break" not breaking the paragraph correctly (it was inserting a newline instead)</li>
<li>Fix regression where hyphenation sometimes did not pick the right language.</li>
<li>Fix dialog that can set 'tab proprties' so the the thickness of the tab-line is shown properly</li>
<li>129481 Don't run the background spellchecker on the current word when pressing Shift while typing a word.</li>
<li>128951 Fix bug where Whole page-viewmode only worked for pages higher than wide</li>
<li>129585 Fix handling of documents with multiple master pages</li>

</ul>

<h3 id="koshell">KOffice Workspace (koshell)</h3>
<p>No changes in KOShell</p>

<h3 id="kspread">KSpread</h3>
<ul>
<li>127899 (OpenDocument) Fix loading of repeated cells, which don't have an assigned style.</li>
<li>Functions ROUND, ROUNDDOWN, ROUNDUP<br>
Fix the parameter count. The second parameter is optional.</li>
<li>125535 Fix crash occuring on the frequently used 'content replacement' of line beginnings with nothing.</li>
<li>126492 Fix crash on closing KSpread('s views).</li>
<li>127670 Fix lost precision when importing numbers</li>
<li>improved speed on heavily formatted worksheets</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
</ul>

<h3 id="kivio">Kivio</h3>
<ul>
<li>Fix crash when we have a group object and we double click on a line (which have not a text)</li>
</ul>

<h3 id="kexi">Kexi</h3>
<ul>
 <li><em>CSV Import Dialog</em>
  <ul>
  <li>Fixed recursion when importing clipboard data</li>
  <li>Allow to change the delimiter when importing clipboard data </li>
  <li>Parsing data improved: values without leading zeros, like 1/2/2006 work;
 Since apps like MS Access in the USA creates csv files with date 
 format month/day/year, (and without leading zeros), text with "/" 
 inside is assumed to be in this format.</li>
  <li><em>KoProperty Library</em>
   <ul>
   <li>Clear all properties and group names when using operator =</li>
   <li>Delayed deleting of editors on setting a new property set</li>
   </ul>
  </li>
  </ul>
 </li>

 <li><em>Table View</em>
  <ul>
  <li>Spreadsheet mode: fixed inserting empty rows and deleting rows</li>
  <li>Cell editor: the contents are marked as changed only when the original 
  value differs from the current</li>
  </ul>
 </li>

 <li><em>KexiDB</em>
  <ul>
  <li>Fixed setting database filename when relative path has been provided</li>
  </ul>
 </li>

 <li><em>Forms</em>
  <ul>
  <li>Fixed problem with loading form plugin. Affected were probably any environments where --disable-rpath and --enable-new-ldflags are used</li>
  <li>Set the data source readonly if it comes from query</li>
  <li>Fixed saving data changes for db-aware checkboxes
  (by setting StrongFocus policy as default)</li>
  </ul>
 </li>
</ul>

<h3 id="krita">Krita</h3>
<ul>
<li>127992 fix saving cmyk tiff</li>
<li>127992 warn user when the colorspace can't be used for export instead of silently failing</li>
<li>125944 PPC displaying fixes</li>
<li>Fix a bug regarding layer being duplicated when transforming a second layer.</li>
<li>Fix simply clicking in the transform tool being interpreted as a drag which required the transform to be recalculated</li>
<li>127655 reset the tool-handles as soon as the transform tool is left</li>
<li>129537 Diable Lanczos3 scaling filter as it doesn't work and cannot be fixed in the 1.5 series</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
<li>125508 fix selection of nodes and fix bezier point editing</li>
<li>fix loading rounded rectangle from svg files</li>
<li>improve raising/lowering layers and objects</li>
<li>moving of objects is more predictable now</li>
<li>124691 crash when adding pattern</li>
<li>126006 Duplicated "Snap to grid" in "View" menu</li>
<li>126095 deleted objects saved in in odg</li>
<li>125957 l10n for Russian: different "width" for stroke and other ...</li>
<li>102860 karbon crashes when pasting text</li>
<li>126341 Can't undo after using whirl/pinch effect</li>
<li>129039 Reordering layer elements reorders layers themselves</li>
<li>126094 polyline tool does not work as expected</li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
<li>129275 Fix crash during load due to corrupted xml file.</li>
<li>Fix various crashes in undo/redo commands</li>
</ul>

<h3 id="kchart">KChart</h3>
<p>No changes in KChart</p>

<h3 id="kformula">KFormula</h3>
<ul>
Don't show the "I just installed some fonts please restart" on some installation on every startup
Fix mi (math italic) element's style handling
</ul>

<h3 id="kugar">Kugar</h3>
<p>No changes in Kugar</p>

<h3 id="filters">Filters</h3>


<?php
  include("footer.inc");
?>
