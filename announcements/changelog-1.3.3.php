<?php
  $page_title ='KOffice 1.3.3 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p style="border:solid red;color:red;text-align:center">
    This document is <em>under construction</em>.<br />
    KOffice 1.3.3 has <strong>not</strong> been released yet!
</p>


<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3.2.
</p>


<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<h4>KOfficeCore:</h4>
<ul>
</ul>

<h4>KOfficeUI:</h4>
<ul>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
  <li>
    Fix all 3 style menus for any translation
    (<a href="http://bugs.kde.org/show_bug.cgi?id=61007">#61007</a>)
  </li>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>
  Fix 
  <a href="http://bugs.kde.org/show_bug.cgi?id=74091">#74091</a>
  (Fix special paste from cell with formula)
</li>
  <li>
    Fix "Expense Report" template 
    (<a href="http://bugs.kde.org/show_bug.cgi?id=86732">#86732</a>)
  </li>
  <li>
    Fix untranslatable strings in function descriptions
    (<a href="http://bugs.kde.org/show_bug.cgi?id=69604">#69604</a>)
  </li>
</ul>

<h3><a name="kchart">KChart</a></h3>
<ul>
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
-->

<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>

<h3><a name="filters">Filters</a></h3>

<h4>KWord's OOWriter export filter:</h4>
<ul>
  <li>
    Fix generation of spaces (<a href="http://bugs.kde.org/show_bug.cgi?id=86561">Bug #86561</a>)
  </li>
</ul>

<h4>KPresenter's OOImpress import filter:</h4>
<ul>
<li>Fix crash when we load presentation background page</li>
<li>Import help line</li>
<li>Import animation order</li>
<li>Import setting</li>
<li>Import transparency for object</li>
</ul>

<h4>KPresenter's OOImpress export filter:</h4>
<ul>
<li>Export settings into settings.xml (Snap drawing line)</li>
<li>Fix generate list of picture</li>
<li>Export transparency attribute</li>
<li>Fix header into content.xml</li>
</ul>


<h4>KSpread's OOCalc import filter:</h4>
<ul>
</ul>

<h4>KSpread's OOCalc export filter:</h4>
<ul>
<li>Fix save manifest.xml into META-INF/</li>
<li>Implement save settings into settings.xml (active table, cursor position)</li>
</ul>

<h4>KSpread's GNUmeric export filter:</h4>
<ul>
<li>Fix writting 
  (<a href="http://bugs.kde.org/show_bug.cgi?id=66983">#66983</a>)</li>
<li>Generate UTF-8</li>
</ul>

<h4>KSpread's MS Excel import filter:</h4>
<ul>
<li>
  Fix generating numbers, especially if the decimal symbol is a comma
  (Bugs <a href="http://bugs.kde.org/show_bug.cgi?id=75783">#75783</a>
  and <a href="http://bugs.kde.org/show_bug.cgi?id=86216">#86216</a>)
</li>
</ul>

<h4>KSpread's CSV export filter:</h4>
<ul>
  <li>
    Fix export of sheets with more than 255 rows or columns
    (<a href="http://bugs.kde.org/show_bug.cgi?id=75781">Bug #75781</a>)
  </li>
</ul>

<h4>Karbon's EPS filter:</h4>
<ul>
</ul>

<h3>Previous changelogs</h3>
<a href="changelog-1.3.2.php">1.3.2</a> |
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
