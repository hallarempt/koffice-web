<?php
  $page_title ='KOffice 1.6.3 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarises the major changes to the KOffice suite since the
  release of KOffice 1.6.3 (latest stable version). This is mainly a bug fix 
  release, but some <a href="#newfeatures">new features</a> were added to Krita
   and Kexi.
</p>
<ul>
<li><a href="#koffice_general">General changes to KOffice</a></li>
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
<!-- <li><a href="#filters">Filters</a></li> -->
</ul>

<h3 id="newfeatures">New Features</h3>
    <em>Kexi</em>
        <ul>
           <li>Edit-&gt;Find action added, works within table, query and form views as a global, context-dependent window.</li>
           <li>Simple Printouts: added support for printing and previewing images</li>
        </ul>

<h3 id="koffice_general">General changes to KOffice</h3>
<ul>
    <li>make the documentation and all translations of koffice's docbook visible
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>improvements in the html import filter</li>
</ul>

<h3 id="koshell">KOffice Workspace (koshell)</h3>
<p>No changes in KOShell</p>

<h3 id="kspread">KSpread</h3>
<p>No changes in KSpread</p>

<h3 id="kpresenter">KPresenter</h3>

<ul>
  <li>Fix copy and paste of images between different KPresenter instances</li>
  <li>Fix a bug which prevented KPresenter to deactivate the Disappear effect (<a href="http://bugs.kde.org/145431">bug 145431</a>)</li>
</ul>

<h3 id="kivio">Kivio</h3>
<p>No changes in Kivio</p>

<h3 id="kexi">Kexi</h3>
    <em>Main Window</em>
    <ul>
      <li>main window is activated after closing "Insert image" file dialog </li>
      <li>"find" action: restart searching from start for "Search all rows" mode if the user has changed the value to find since previous searching, or the user has recently changed direction to "Search all rows"</li>
      <li>searching is performed within lookup values as well</li>
      <li>fixed a bug in "Do you want to permanently delete..." message</li>
    </ul>
    <em>Database Support Library (KexiDB)</em>
    <ul>
      <li>SQL parser can work recursively now (needed when multiple parsers are used in the same thread, removed possible crash)</li>
      <li>fixed missing kexidb/parser.h file, initially reported as <a href="https://bugs.gentoo.org/show_bug.cgi?id=171290">Gentoo bug #171290</a> and <a href="http://bugs.kde.org/143960">KDE bug #143960</a></li>
      <li>remove usage of older API function: <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=420477">Debian bug #420477</a></li>
      <li>Queries like "SELECT * FROM TABLE" did not work as expected in data/design/SQL view. The problem appeared in application that is compiled using GCC compiler.</li>
    </ul>
    <em>Table view</em>
    <ul>
    <li>usability: within cells of type "Image" pressing Tab, Shift+Tab, Left
      or Right keys now closes the popup and moves the cursor</li>
    <li>make column readonly if query-based data source itself is stored
      (i.e. has connection) and lookup column is defined</li>

    </ul>
    <em>Table Designer</em>
    <ul>
      <li>clear command history after successful saving of the design</li>
      <li>on switching to data view, do not warn about removing data, if the data will stay untouched</li>
    </li>
    </ul>
    <em>Query Designer</em>
    <ul>
      <li>fixed table sizes in the Design View</li>
      <li>fixed displaying relation connection lines when connected field is not visible</li>
      <li>fixed mouse drop position when target points on a field of table with scrolled-down contents</li>
      <li>do not show internal relationships for visible lookup fields (JOINs) in SQL view</li>
      <li>removed possible crash in data view</li>
    </ul>
    <em>Forms</em>
    <ul>
      <li>fields dragging and dropping works for containers (tab widgets, frames and group boxes)</li>
      <li>fixed displaying margins for image boxes</li>
      <li>fixed assigning static images to image boxes without saving form's design;
        the images can now be saved also in data view mode</li>
      <li>fixed handling tab key for image boxes</li>
      <li><em>automatic tab order:</em>
        <ul>
          <li>fixed ordering for widgets within containers (e.g. a group box)</li>
          <li>widgets within tab widget pages are ordered by page number</li>
          <li>widgets inside tab widget that are not visible are skipped when moving 
            focus using Tab/Shift+Tab key</li>
        </ul>
      </li>
      <li>Ctrl+Tab shortcut (for switching between tabs) works on windows
        if multiline text editor is focused</li>
      <li>for buttons, left/up and right/down keys act like tab/backtab</li>
      <li>hide popup in combo box or image box as soon as it loses focus</li>
      <li>changes made to combo box selection is cancelled if the popup 
        loses focus without accepting</li>
      <li>hide popup in combo box or image box as soon as user moves 
        to other record (usually with a shortcut)</li>
      <li>fixed handling page down/page up keys within combo box popups
        (previously it moved to other record)</li>
      <li>forms having parameter query as data source now ask for parameters</li>
    </ul>
    <em>Simple Printouts</em>
    <ul>
     <li>fixed problem with records printed between page boundaries</li>
     <li>fixed problem with updating print preview's page navigator when number of pages differs compared to previous preview</li>
     <li>improved previewing quality</li>
     <li>fixed landscape mode</li>
     <li>fixed refreshing print preview after table data or query results changed</li>
    </ul>
    
<h3 id="krita">Krita</h3>

<ul>
    <li>Improvement to the filter preview dialog: the whole image is filtered in the background, and is updated squares by squares during the progression of the filtering</li>
    <li>Improvement in the configuration dialog of the bumpmap filter</li>
    <li>Fix rotation of the image caused by reading exif tag</li>
    <li>Fix for the line-looks-like-greater-intestine problem when painting with pressure without size variation</li>
</ul>
<em>Rotation and scaling</em>
<ul>
  <li>fix scaling with a selection <a href="http://bugs.kde.org/141390">bug 141390</a></li>
  <li>Fix scale of image so it leaves no transparent borders <a href="http://bugs.kde.org/143029">bug 143029</a></li>
</ul>

<h3 id="karbon">Karbon</h3>
<p>No changes in Karbon</p>

<h3 id="kplato">KPlato</h3>
<p>No changes in KPlato</p>

<h3 id="kchart">KChart</h3>
<ul>
  <li>fixed invalid include for 3rdparty apps using kchart lib initially reported by <a href="https://bugs.gentoo.org/show_bug.cgi?id=173697">Gentoo bug #173697</a> and <a href="http://bugs.kde.org/143960">KDE bug #143960</a>
</ul>

<h3 id="kformula">KFormula</h3>
<p>No changes in KFormula</p>

<h3 id="kugar">Kugar</h3>

<p>No changes in Kugar</p>

<?php
  include("footer.inc");
?>
