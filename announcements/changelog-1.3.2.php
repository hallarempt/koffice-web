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
<li>### TODO</li>
</ul>

<h4>KOfficeUI:</h4>
<ul>
<li>### TODO</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>### TODO</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>### TODO</li>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Fixed crash in infinite loop presentation mode when first slide is not shown</li>
<li>Fixed show the duration for the correct page if not all slides are shown</li>
<li>Fixes for vertical alignment of text inside text objects.</li>
<li>Fixed bug #76286 export web presentation into network</li>
<li></li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>Fix condition cell attribute (multi condition)</li>
<li>Fix #69798 (kspread sexdec parse error)</li>
<li>Fix enable/disable action into validation dialogbox<li>
<li>Fix disable/enable "show table" menu item</li>
</ul>

<h3><a name="kchart">KChart</a></h3>
<ul>
<li>Fix crash bug#82149</li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>### TODO</li>
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>


<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>
-->

<h3><a name="filters">Filters</a></h3>
<em>KPresenter's OOImpress import filter:</em>
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

<em>KPresenter's OOImpress export filter:</em>
<ul>
<li>Export polygone/polyline object</li>
<li>Export pie/chord/arc object</li>
<li>Export rotate object</li>
<li>Export object name</li>
</ul>


<em>KSpread's OOCalc import filter:</em>
<ul>
<li>Import support for protect document</li>
<li>Fix #67087 import template document</li>
<li>Import load print attribute</li>
<li>Import validation attribute</li>
<li>Import column width</li>
<li>Import text indent</li>
<li>Fix import note with multiline</li>
</ul>

<em>KSpread's OOCalc export filter:</em>
<ul>
<li>Fix export header/footer</li>
<li>Export print range</li>
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
