<?php
  $page_title ='KOffice 1.3 RC 1 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3 beta4 one month ago.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>Restart autosave timer when saving</li>
<li>Fixes for remote documents (authentication dialog not on top, error handling)</li>
<li>Restore ability to detect documents without extension (was broken by KDE-3.2-alpha's KZip)</li>
<li>Many stability fixes in spell checking</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Fixed missed hit during search-replace backwards with a single paragraph</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fix for frames extending beyond the page getting the wrong size in 'preview mode'</li>
<li>Fixed wrong layouting of inline frames (e.g. pictures)</li>
<li>Don't select inline frame after pasting text containing it (only select non-inline frames)</li>
<li>Improved "create style from selection": use format at cursor if no selection,  
  allow to type the name of an existing style to update it, and select the style  
  for the current paragraph after creating it.</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Resizing a frame it does not snap to the grid (#63032)</li>
<li>Fixed when after resize/undo size of object is not the same</li>
<li>Fixed when after move/undo position of object is not the same</li>
<li>Fixed resizing of poly line objects</li>
<li>Fixed after reload of some objects moved up a little bit</li>
<li>Fixed moving with key left used y grid</li>
<li>Fixed header/footer moved in undo</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>kspread problem with calculating dates (#64794)</li>
<li>cell border does not work with merged cells (#61570)</li>
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>Fixed copying text in other codecs then latin1</li>
<li>Fixed the size of the stencilbar when loading stencils at start up</li>
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>

</ul>
-->

<!--
<h3><a name="karbon">Karbon</a></h3>
<ul>

</ul>
-->


<h3><a name="filters">Filters</a></h3>
<em>KWord's MSWord import filter (requiring wv2-0.1.9):</em>
<ul>
<li>Support for Word 6 and Word 7 (aka Word 95) files added</li>
<li>Fixed the list handling for weird corner cases</li>
<li>wv2 isn't so noisy anymore, when compiled with --disable-debug. Packagers 
are highly encouraged to use that flag.</li>
</ul>

<em>KWord RTF export filter:</em>
<ul>
<li>new: headers and lists (fixes a regression from KOffice 1.2.x.)</li>
<li>declare fonts better (especially not Western European ones.)</li>
<li>fix table generation (better compatibility to RTF specification)</li>
<li>better date and time fields (except locale dates/times.)</li>
<li>fix word-by-word underline.</li>
</ul>

<em>KWord's RTF import filter:</em>
<ul>
<li>make a better and faster fix for Qt 3.2</li>
<li>speed up importing files with many Unicode characters.</li>
<li>support for the field-like keywords for date, time and page number.</li>
</ul>

<em>KSpread HTML export filter:</em>
<ul>
<li>fixed RTL problems with sheet and cell direction</li>
</ul>

<h3>Previous changelogs</h3>
<a href="changelog-1.3beta4.php">1.3beta4</a> |
<a href="changelog-1.3beta3.php">1.3beta3</a> |
<a href="changelog-1.3beta2.php">1.3beta2</a> |
<a href="changelog-1.3beta1.php">1.3beta1</a>

<?php
  include("footer.inc");
?>
