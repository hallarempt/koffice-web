<?php
  $page_title ='Future KOffice 1.3.2 Changelog'; ### TODO
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p style="border:solid red;color:red;text-align:center">
    This document is <em>under construction</em>.<br />
    KOffice 1.3.2 has <strong>not</strong> been released yet!
</p>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3.1.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<h4>KOfficeCore:</h4>
<ul>
<li>Give the backup file the same permissions as the original file (#54459)</li>
<li>Save window settings also when using File/Close</li>
<li>Fix #83972 (koffice compiles fine under qt3.1/kde3.1) </li>
</ul>

<h4>KOfficeUI:</h4>
<ul>
<li>Improved unit widgets</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>
  Changing a style in the style manager remembered a wrong "following style",
  so later changes in the style manager wouldn't propagate correctly (#47377)
</li>
<li>
  Fixed wrong position of suffix in numbered right-to-left paragraphs (#47178)
</li>
<li>
  Fixed formatting bug, where an inline formula or any other big character after
  the paragraph counter, would make the paragraph counter disappear (#82609).
</li>
<li>
  Fixed wrong alignment when using numbered paragraphs and a tab as first character (#83489)
</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fixed wrong printing of frame borders due to excessive clipping (#81222)</li>
<li>Turning off the "Create backup file" option now works.</li>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fixed crash in infinite loop presentation mode when first slide is not shown</li>
<li>Fixed show the duration for the correct page if not all slides are shown</li>
<li>Fixes for vertical alignment of text inside text objects.</li>
<li>Fixed bug #76286 export web presentation into network</li>
<li>Turning off the "Create backup file" option now works.</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>Fix condition cell attribute (multi condition)</li>
<li>Fix #69798 (kspread sexdec parse error)</li>
<li>Fix enable/disable action into validation dialogbox</li>
<li>Fix disable/enable "show table" menu item</li>
</ul>

<h3><a name="kchart">KChart</a></h3>
<ul>
<li>Fix crash bug#82149</li>
<li>Fix #83465</li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>### TODO</li>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>


<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>
-->

<h3><a name="filters">Filters</a></h3>

<h4>KWord's RTF import filter:</h4>
<ul>
<li>
    Avoid crashing if more cells are defined than declared on a row 
    (partially #82905 and #83923)
</li>
<li>Allow ampersands in font names (partially #82905)</li>
</ul>

<h4>KPresenter's OOImpress import filter:</h4>
<ul>
<li>Import rotate object</li>
<li>Fix load end/start line</li>
<li>Import hide/show slide</li>
<li>Import randow page effect</li>
<li>Import duration slide transition</li>
<li>Import sticky objects</li>
<li>Fix #67087, allow to load template file</li>
<li>Fix import background style</li>
</ul>

<h4>KPresenter's OOImpress export filter:</h4>
<ul>
<li>Export polygone/polyline object</li>
<li>Export pie/chord/arc object</li>
<li>Export rotate object</li>
<li>Export object name</li>
<li>Export picture object</li>
</ul>


<h4>KSpread's OOCalc import filter:</h4>
<ul>
<li>Import support for protect document</li>
<li>Fix #67087 import template document</li>
<li>Import load print attribute</li>
<li>Import validation attribute</li>
<li>Import column width</li>
<li>Import text indent</li>
<li>Fix import note with multiline</li>
</ul>

<h4>KSpread's OOCalc export filter:</h4>
<ul>
<li>Fix export header/footer</li>
<li>Export print range</li>
<li>Fix export don't print cell</li>
</ul>

<h4>Karbon's EPS filter:</h4>
<ul>
<li>Fix #82964 (Fix parsing of boundingbox in the presence of "%ALDBoundingBox")</li>
</ul>

<h3>Previous changelogs</h3>
<a href="changelog-1.3.1.php">1.3.1</a> |
<a href="changelog-1.3.php">1.3</a> |
<a href="changelog-1.3rc1.php">1.3rc1</a> |
<a href="changelog-1.3beta4.php">1.3beta4</a> |
<a href="changelog-1.3beta3.php">1.3beta3</a> |
<a href="changelog-1.3beta2.php">1.3beta2</a> |
<a href="changelog-1.3beta1.php">1.3beta1</a>

<?php
  include("footer.inc");
?>
