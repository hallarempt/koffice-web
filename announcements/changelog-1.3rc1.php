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
<li>Restart autosave timer when saving
<li>Fixes for remote documents (authentication dialog not on top, error handling)
<li>Restore ability to detect documents without extension (was broken by KDE-3.2-alpha's KZip)
<li>Many stability fixes in spell checking
<li>Fixed missed hit during search-replace backwards with a single paragraph
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fix for frames extending beyond the page getting the wrong size in 'preview mode'
<li>Fixed wrong layouting of inline frames (e.g. pictures)
<li>Don't select inline frame after pasting text containing it (only select non-inline frames)
<li>Improved "create style from selection": use format at cursor if no selection,  
  allow to type the name of an existing style to update it, and select the style  
  for the current paragraph after creating it.
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<ul>
<li>Resizing a frame it does not snap to the grid (#63032)
<li>Fixed when after resize/undo size of object is not the same
<li>Fixed when after move/undo position of object is not the same
<li>Fixed resizing of poly line objects
<li>Fixed after reload of some objects moved up a little bit
<li>Fixed moving with key left used y grid
<li>Fixed header/footer moved in undo
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>kspread problem with calculating dates (#64794)
<li>cell border does not work with merged cells (#61570)
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>Fixed copying text in other codecs then latin1
<li>Fixed the size of the stencilbar when loading stencils at start up
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
<li>new: headers and lists (fixes a regression from KOffice 1.2.x.)
<li>declare fonts better (especially not Western European ones.)
<li>fix table generation (better compatibility to RTF specification)
<li>better date and time fields (except locale dates/times.)
<li>fix word-by-word underline.
</ul>

<em>KWord's RTF import filter:</em>
<ul>
<li>make a better and faster fix for Qt 3.2
<li>speed up importing files with many Unicode characters.
<li>support for the field-like keywords for date, time and page number.
</ul>

<em>KSpread HTML export filter:</em>
<ul>
<li>fixed RTL problems with sheet and cell direction
</ul>

<?php
  include("footer.inc");
?>
