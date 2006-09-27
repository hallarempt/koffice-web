<?php
  $page_title ='KOffice 1.6-rc1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>
<p>
  The following summarizes the major changes to the KOffice Suite since the
  <a href="changelog-1.6beta1.php">release of KOffice 1.6.0 Beta 1</a>.
</p>
<ul>
<li><a href="#koffice_libs">KOffice Libraries</a></li>
<li><a href="#kspread">KSpread</a></li>
<li><a href="#kexi">Kexi</a></li>
<li><a href="#krita">Krita</a></li>
<li><a href="#kformula">KFormula</a></li>
</ul>

<h3 id="koffice_libs">KOffice Libraries</h3>
<ul>
  <li><em>KoProperty Library</em>
  <ul>
  <li>Properties are not changed when new and old value are both null</li>
  <li>Spin boxes for integer and double values: deleting the contents
  now sets null value</li>
  </ul>
  </li>
  <!-- li><em>Kross Scripting Library</em>
  <ul>
  <li></li>
  </ul>
  </li -->
</ul>

<h3 id="kspread">KSpread</h3>
<em>Bugfixes</em>
<ul>
    <li> Formula engine / functions:
    <ul>
        <li> Fix references to sheets with names beginning with a number (bug:124549)
        <li> Fixes for various database functions
    </ul>

<li> UI:
    <ul>
        <li> Don't jump to chosen cell (range) on entering the formula (bug:134276)
    </ul>
</ul>


<h3 id="kexi">Kexi</h3>

<em>Table Designer</em>
<ul>
 <li>Set "false" as default value for columns with Yes/No types</li>
 <li>When column type changes, default value is updated to match the new type
  (e.g. casted from integer to text; incompatible values are removed)</li>
 <li>Fixed inserting fields of type "Object"</li>
</ul>

<em>Forms</em>
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
</ul>

<em>Data Table View</em>
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
</ul>

<em>Database Support Library (KexiDB)</em>
<ul>
 <li>Do not try to insert default values into a column with unique 
  flag declared (or even primary key)</li>
</ul>

<em>Documentation</em>
<ul>
 <li>Added chapter about forms translated to english.</li>
</ul>


<h3 id="krita">Krita</h3>
<em>Bugfixes</em>
<ul>
    <li> Fix some specific rendering artefacts
    <li> Fix some non-artefact rendering errors
    <li> Fix changing the adjustment of brightness-contrast adjustment layers
    <li>UI:
    <ul>
        <li>Simplify acquiring screen shots (Bug:134527)
        <li>Remember opacity setting in Drop Shadow (Bug:134563)
        <li>Fix so that the rightly marked filters got displayed in the filters gallery dialog
        <li>New icons set for the too
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
    </ul>
</ul>

<h3 id="kformula">KFormula</h3>
<em>Bugfixes</em>
<ul>
    <li>UI:
        <ul>
            <li>Fix character insertion that requires new token elements</li>
            <li>Reenable cut, copy and paste</li>
        </ul>
    <li>MathML / OpenDocument:
        <ul>
            <li>Insert &lt;mrow&gt; element after &lt;semantics&gt; element, since it does not infer mrows. Fixes bug 134044</li>
        </ul>
</ul>

<?php
  include("footer.inc");
?>
