<?php
  $page_title ='KOffice 1.3.4 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p style="border:solid red;color:red;text-align:center">
    This document is <em>under construction</em>.<br />
    KOffice 1.3.4 has <strong>not</strong> been released yet!
</p>


<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3.3.
</p>

<?php /*
<h3><a name="i18n">Languages</a></h3>
<ul>
</ul>
*/ ?>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<h4>KOfficeCore</h4>
<ul>
</ul>

<h4>KOfficeUI</h4>
<ul>
  <li>
    Compile again with Qt 3.1
    (<a href="http://bugs.kde.org/show_bug.cgi?id=83972">Part of bug #89372</a>)
  </li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter)</h4>
<ul>
</ul>

<h3><a name="allapps">All Applications</a></h3>
<ul>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
</ul>


<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
  <li>
    Compile again with KDE 3.1
    (<a href="http://bugs.kde.org/show_bug.cgi?id=83972">Part of bug #89372</a>)
  </li>
  <li>
    Fix crash in history of group/ungroup commands
  </li>
  <li>
    Fix loading and saving of picture objects marked "sticky"
  </li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
  <li>
    Make the Control-C key work again
    (<a href="http://bugs.kde.org/show_bug.cgi?id=87369">#87369</a>)
  </li>
  <li>
    Make columns and rows that are not on the top-left side of a sheet sizable again.
    (Bugs <a href="http://bugs.kde.org/show_bug.cgi?id=84495">#84495</a> and
    <a href="http://bugs.kde.org/show_bug.cgi?id=89782">#89782</a>)
  </li>
  <li>Fix painting of the gridlines, when a row or column is resized.</li>
</ul>

<h3><a name="kchart">KChart</a></h3>
<ul>
  <li>
    Fix pressing Enter in the Data Editor
    (<a href="http://bugs.kde.org/show_bug.cgi?id=55603">#55603</a>)
  </li>
</ul>

<?php /*
<h3><a name="kugar">Kugar</a></h3>
<ul>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<ul>
</ul>

<h3><a name="kformula">KFormula</a></h3>
<ul>
</ul>

<h3><a name="karbon">Karbon</a></h3>
<ul>
</ul>

*/ ?>

<h3><a name="filters">Filters</a></h3>

<h4>KWord's OpenOffice.org Writer Export Filter</h4>
<ul>
  <li>Fix auto-justification</li>
</ul>

<h4>KWord's RTF Import Filter</h4>
<ul>
  <li>
    Temporaray fix to avoid empty font names
    (<a href="http://bugs.kde.org/show_bug.cgi?id=90057">#90057</a>)
  </li>
</ul>

<h4>KPresenter's OpenOffice.org Impress Import Filter</h4>
<ul>
</ul>

<h4>KPresenter's OpenOffice.org Impress Export Filter</h4>
<ul>
</ul>

<?php /*
<h4>KSpread's OpenOffice.org Calc Import Filter</h4>
<ul>
</ul>
*/ ?>

<h4>KSpread's OpenOffice.org Calc Export Filter</h4>
<ul>
</ul>

<h4>KSpread's GNUmeric Export Filter</h4>
<ul>
</ul>

<h4>KSpread's MS Excel Import Filter</h4>
<ul>
</ul>

<h4>KSpread's CSV Export Filter</h4>
<ul>
</ul>

<h4>KFormula's MathML Import Filter</h4>
<ul>
  <li>
    Make the import filter work again
    (<a href="http://bugs.kde.org/show_bug.cgi?id=70209">#70209</a>)
  </li>
</ul>

<h4>KFormula's MathML Export Filter</h4>
<ul>
  <li>
    Fix the invisible multiply operator
    (<a href="http://bugs.kde.org/show_bug.cgi?id=89401">Part of bug #89401</a>)
  </li>
</ul>

<h3>Previous changelogs</h3>
<a href="changelog-1.3.3.php">1.3.3</a> |
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
