<?php
  $page_title ='KOffice 1.5.2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.5.1 (latest stable version).
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
<ul>
  <li><em>KoProperty Library</em>
   <ul>
   <li>Clear all properties and group names when using operator =</li>
   <li>Delayed deleting of editors on setting a new property set</li>
   </ul>
  </li>
</ul>

<h3 id="kword">KWord</h3>
<ul>
</ul>

<h3 id="koshell">KOffice Workspace (koshell)</h3>
<p>No changes in KOShell</p>

<h3 id="kspread">KSpread</h3>
<ul>
</ul>

<h3 id="kpresenter">KPresenter</h3>
<ul>
</ul>

<h3 id="kivio">Kivio</h3>
<ul>
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
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
</ul>

<h3 id="kchart">KChart</h3>
<p>No changes in KChart</p>

<h3 id="kformula">KFormula</h3>
<ul>
</ul>

<h3 id="kugar">Kugar</h3>
<p>No changes in Kugar</p>

<h3 id="filters">Filters</h3>


<?php
  include("footer.inc");
?>
