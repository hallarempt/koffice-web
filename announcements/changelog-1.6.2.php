<?php
  $page_title ='KOffice 1.6.2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice suite since the
  release of KOffice 1.6.2 (latest stable version). This is mainly a bug fix 
  release, but some <a href="#newfeatures">new feature</a> were added to krita
   and kexi.
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

<h3 id="security">Security Fixes</h3>
    <em>KWord Import Filter for PDF</em>
        <ul>
	<li>There is a security issue in the import filter for PDF, that is fixed with this release.
        Every KOffice user should upgrade to 1.6.2 for this reason alone. </li>
        </ul>

<h3 id="newfeatures">New Features</h3>
    <em>Kexi</em>
        <ul>
            <li>in Table Designer, some changes do not require removing data from tables now: e.g. field's caption, description, text width, default value, visible decimal places</li>
            <li>external &quot;Add column&quot; tool for adding empty table column in a .kexi (SQLite 3) database file without removing data from the table</li>
            <li>external &quot;Delete column&quot; tool for deleting table columns without removing data</li>
            <li>&quot;User Mode&quot; implemented: <a href="http://kexi-project.org/wiki/wikiview/index.php?UserMode">command line option --final-mode replaced with --user-mode</a>, then all actions related to design are hidden as well as the Property Editor and Navigator panes</li>
            <li>support for multiple visible columns in the combo box widget</li>
            <li>Kexi allows to assign much more types of actions to form buttons</li>
        </ul>
    <em>Krita</em>
        <ul>
            <li>Halftonnig filter</li>
            <li>Smudge painting operation</li>
            <li>add a new colorify filter, this filter allow to apply to a black and white image a new color</li>
            <li>add a tool for moving the selection</li>
        </ul>

<h3 id="koffice_general">General changes to KOffice</h3>
<ul>
  <li>install menu files into XDG menu location</li>
  <li>fix loading as uncompressed xml and don't show a "allready exists" dialog when saving (<a href="http://bugs.kde.org/130980">bug 130980</a>).
  <li>set LC_NUMERIC again to C so that decimal seperators are always points (and, for instance, never comma)</li>
  <li>fix crash when autocorrect-urls replaces a url with a link: replaceSelectionCommand wants no placeholder command but insert assumed there was one at some point (<a href="http://bugs.kde.org/139890">bug 139890</a>)
</ul>

<h3 id="kword">KWord</h3>
<ul>
  <li>KFormula uses MathML for copy and paste, reflect it in KWord (<a href="http://bugs.kde.org/136711">bug 136711</a>)</li>
  <li>security fix in the pdf import filter related to the MOAB-06-01-2007 issue</li>
  <li>frames with AutoExtendFrame need to have a min height superior to 0, otherwise the loading code won't say "min-height&gt;0 -&gt; AutoExtendFrame"</li>
  <li>fix crash when footnote/endnote was removed and we tried to change foot/end note setting</li>
  <li>fix the ul tags in html import</ul>
</ul>

<h3 id="koshell">KOffice Workspace (koshell)</h3>
<p>No changes in KOShell</p>

<h3 id="kspread">KSpread</h3>
<ul>
  <li>formula use 'long' in all integer related places (<a href="http://bugs.kde.org/127599">bug 127599</a>)</li>
  <li>fhe time-value was correct parsed+evaluated but didn't got transfered back what made times not working for all AM/PM definitions (if 12h clock was enabled) (<a href="http://bugs.kde.org/140336">bug 140336</a>). </li>
  <li>remember settings (<a href="http://bugs.kde.org/132462">bug 132462</a>). </li>
  <li>don't convert already converted document to utf8 (<a href="http://bugs.kde.org/132462">bug 132462</a>)</li>
  <li>don't ignore newline settings on export. </li>
  <li>on 1st of January 2007 Slovenia changed its national currency from Slovenian Tolar (SIT) to Euro (EUR)</li>
  <li>conditions: use the value, not the input string (may be a formula), for comparison.</li>
  <li>fix crash when the chart couldn't be loaded and we get KoUnavailPart instead (<a href="http://bugs.kde.org/138294">bug 138294</a>)</li>
  <li>fix function datevalue of a cell shows date, not value of date (<a href="http://bugs.kde.org/137752">bug 137752</a>)</li>
  <li>the AND, OR, NAND, NOR and XOR functions are optional accepting arrays now (<a href="http://bugs.kde.org/138165">bug 138165</a>)</li>
  <li>fix loading of the formats of date and time cells</li>
</ul>

<h3 id="kpresenter">KPresenter</h3>

<ul>
  <li>save the same font faces in both content.xml and styles.xml and in the right place</li>
  <li>force to recalc all variable after loading otherwise link and custom was not resized very well</li>
</ul>

<h3 id="kivio">Kivio</h3>
<ul>
  <li>change the dialog to use dpi instead of width and height</li>
  <li>limit the filter to the formats that work</li>
</li>
</ul>

<h3 id="kexi">Kexi</h3>
    <ul>
      <li>projects created with older Kexi versions can be now opened in read-only mode too</li>
    </ul>
    </ul>
    <em>Main Window</em>
    <ul>
      <li>command line option "--show-navigator" added - shows the Project Navigator side pane even if Kexi runs in User Mode</li>
      <li>project manager: double/single clicking on executable objects (macro, script) executes them</li>
    </ul>
    <em>Database Support Library (KexiDB)</em>
    <ul>
      <li>fixed possible crash when running a query without primary key included (encountered e.g. when a form contain static images)</li>
      <li>queries are supported as row source for lookup fields</li>
      <li>added support for multiple visible columns in lookup fields</li>
      <li>improved saving table extended schema data for lookup fields</li>
      <li>sort query results by primary key fields if there is no explicit sorting specified (especially useful when there are complex joins)</li>
      <li>install all needed headers</li>
      <li>fixed problem with constructing SQL statements: for multi-table queries "ORDER BY column" prepends "table" only if "column" is not a name of alias</li>
    </ul>
    <em>Widgets, Utilities</em>
    <ul>
      <li>queries are supported as row source for lookup fields</li>
      <li>fixed crash related to QtCurve widget style (<a href="http://bugs.kde.org/139753">bug 139753</a>)</li>
      <li>use transliteration table generated by a shell script to generate identifiers out of Unicode characters (<a href="http://bugs.kde.org/133170">bug 133170</a>)</li>
    </ul>
    <em>Table Designer</em>
    <ul>
      <li>fixed altering table schema when lookup column has been changed</li>
      <li>added support for multiple visible columns in the combo box editor (the same for forms)</li>
      <li>on altering table, remove old lookup field schema objects and make sure you do not save empty type/name fields to XML</li>
      <li>fixed updating &quot;lookup column&quot; tab's contents</li>
      <li>fixed crash on saving design with lookup columns defined</li>
      <li>fixed updating default value when field type changes</li>
    </li>
    </ul>
    <em>Query Designer</em>
    <ul>
      <li>fixed crash if column being removed has sorting set up</li>
      <li>display &quot;(All Columns)&quot; near the &quot;*&quot;</li>
      <li>SQL editor on Unix: initially, clear undo/redo buffer (otherwise Ctrl+Z clears the contents)</li>
    </ul>
    <em>Forms</em>
    <ul>
      <li>fixed handling &quot;align&quot; property for image boxes when scaling is off</li>
      <li>align autofield's label to left if it is on the top</li>
      <li>do not show popup after clicking on combo box</li>
      <li>fixed popup position of combo boxes inside a container</li>
      <li>fixed saving property values of type "enum" for subwidgets</li>
      <li>&quot;Assign Action&quot; dialog:
        <ul>
          <li>added &quot;create new&quot; and &quot;close view&quot; actions with a given context</li>
          <li>&quot;Current form&quot; actions category added with actions like &quot;go to next record&quot;, &quot;go to new record&quot;</li>
          <li>more design actions like &quot;undo&quot; moved to the global category</li>
        </ul>
      </li>
      <li>&quot;Action Selection&quot; dialog:
        <ul>
          <li>the list of menu commands now contains tooltips instead of action texts to improve readability and is displayed with full width</li>
          <li>actions are now categorized, so actions that have no practical use are hidden</li>
          <li>moved &quot;Macros&quot; and &quot;Scriptsv to &quot;category&quot; list, which also supports opening tables/queries/forms, running macros/scripts</li>
          <li>added &quot;Action type&quot; column so it is possible to assign printing and opening in objects design view</li>
          <li>added &quot;Execute form's action&quot; category</li>
        </ul>
      </li>
    </ul>
    <em>Tools</em>
    <ul>
      <li>fixes for &quot;Add column&quot; tool</li>
      <li>added &quot;Delete column&quot; tool</li>
    </ul>
    <em>Project Migration</em>
    <ul>
      <li>fixed copying existing objects to the destination database</li>
      <li>MySQL and PostgreSQL:
        <ul>
          <li>fixed importing Unicode text and static images if present in the source database (BLOBs)</li>
          <li>data types are better handled for import</li>
        </ul>
      </li>
    </ul>


<h3 id="krita">Krita</h3>

<ul>
  <li>copy the selection if we copy the paint device</li>
  <li>search recursively for icc profiles and setup the directory at earlier stage in the loading of krita</li>
  <li>crashes when removing an object layer (<a href="http://bugs.kde.org/139461">bug 139461</a>)</li>
  <li>fix strange Behaviour wih Select All and adjustement layer (<a href="http://bugs.kde.org/137638">bug 137638</a>)</li>
  <li>show watch cursor when pasting</li>
  <li>fix adding text to picture after calling cancel (<a href="http://bugs.kde.org/138429">bug 138429</a>) </li>
  <li>fix duplicate S shortcut for the menu bar</li>
  <li>optimize emboss filter</li>
  <li>update the selection status when using the color range dialog</li>
  <li>remove the 10000 pixel limitation</li>
  <li>improve loading of palettes (<a href="http://bugs.kde.org/138524">bug 138524</a>)</li>
  <li>fix crash when closing Krita while drying not crash</li>
  <li>enable add, substract, plus and minus composite operation</li>
  <li>fix crash when calling the layer property of an adjustement layer which has been moved to the bottom of the stack (<a href="http://bugs.kde.org/138425">bug 138425</a>)</li>
  <li>fix dying of watercolor images</li>
  <li>layers and selection now get their exact bounds in the size box instead of the size of the image</li>
  <li>fix update of image when scaling a single layer down</li>
  <li>fix histogram calculation when there is no selection</li>
</ul>
<em>Rotation and scaling</em>
<ul>
  <li>lets rotate image and rotate layer dialogs accept 0.1 degree precision (<a href="http://bugs.kde.org/140120">bug 140120</a>)</li>
  <li>let scale layer work with selections</li>
  <li>make sure the layer -rotate rotates around the center of the layer and when a selection is present around the center of the selection</li>
  <li>fix for rotatelayer menu items not remembering the selection in undo buffer</li>
  <li>fix some regressions in transform code</li>
  <li>improve progress reporting: the initial right-angle rotations are now also progress reported. So now the user gets feedback imidiately</li>
  <li>fix bug resulting in filters being applies when doing right angle rotations</li>
  <li>also fixes filters being applied when just moving</li>
  <li>also fixes bug in svn of no x-coord translation</li>
  <li>fix crashes when clicking with the righ mouse button on an unactivated splitview (<a href="http://bugs.kde.org/123500">bug 123500</a>)</li>
</ul>
<em>File import/export</em>
<ul>
  <li>fix crashing when saving twice an image throught graphicsmagick filter (<a href="http://bugs.kde.org/137847">bug 137847</a>)</li>
  <li>doesn't crash when trying to open a void image from graphics magick (<a href="http://bugs.kde.org/139800">bug 139800</a>)</li>
  <li>fix loading lab tiff file</li>
</ul>

<h3 id="karbon">Karbon</h3>
<ul>
  <li>fix the png export by using the vcomputeboundingbox visitor to calculate the documents bounding box</li>
  <li>do not consider deleted objects when computing the bounding box</li>
  <li>fix export to tiff (<a href="http://bugs.kde.org/140790">bug 140790</a>)
  <li>make it optional to export hidden layers to eps: this works only with layers as the hidden/visible state of objects is not preserved when saving (<a href="http://bugs.kde.org/137452">bug 137452</a>)</li>
  <li>introduced a new visitor which calculates bounding boxes configurable to use hidden objects or not (<a href="http://bugs.kde.org/137457">bug 137457</a>)</li>
  <li>add missing initialisation of member variable in VSelectObjects visitor which fixes selection of all objects ()</li>

</li>
</ul>

<h3 id="kplato">KPlato</h3>
<ul>
  <li>make the docs visible in khelpcenter (<a href="http://bugs.kde.org/141243">bug 141243</a>)</li>
  <li>fix scheduling failure if more than 8 consecutive days are defined as non-working</li>
  <li>fix incorrect effort/cost calculations when calendar has multiple work intervals pr day (<a href="http://bugs.kde.org/138805">bug 138805</a>)</li>
</ul>

<h3 id="kchart">KChart</h3>
<ul>
      <li>fix compile error on Solaris 8 (<a href="http://bugs.kde.org/138148">bug 138148</a>)</li>
</ul>

<h3 id="kformula">KFormula</h3>
<ul>
  <li>fix deletion of symbol elements (<a href="http://bugs.kde.org/138314">bug 138314</a>)</li>
  <li>don't let the cursor move left when it's already at leftmost position (<a href="http://bugs.kde.org/138313">bug 138313</a>)</li>
  <li>change content size when zoom is changed. This caused problem with embedded formulas. Still has some issues, but it works now (<a href="http://bugs.kde.org/136636">bug 136636</a>)</li>
  <li>OpenDocument / MathML support: Fix loading code to remove garbage text nodes</li>
  <li>fix parsing of mlabeledtr elements (<a href="http://bugs.kde.org/138760">bug 138760</a>)</li>
  <li>add shortcuts for more toolbar actions (<a href="http://bugs.kde.org/139254">bug 139254</a>)</li>
  <li>fix Greek symbols psi and omega (<a href="http://bugs.kde.org/138545">bug 138545</a>)</li>
</ul>

<h3 id="kugar">Kugar</h3>

<p>No changes in Kugar</p>

<?php
  include("footer.inc");
?>
