<?php
  $page_title ='KOffice 1.3 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes and bugfixes to the KOffice Suite since the
  release of KOffice 1.3 RC1 one month ago.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>Fixed doc/window association which led to closing all windows when closing only one
<li>Fixed bug where the dialog wouldn't show the spell client from the config file
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<ul>
<li>Fixed rare crash when applying a format to a selection
<li>Fixed painting bug in text view mode (the right side was being erased)
<li>Fixed saving of left-to-right direction in RTL paragraphs
</ul>

<h3><a name="kword">KWord</a></h3>
<ul>
<li>Fixed crash in table operations (#66349)
<li>Fixed crash in table iterator
<li>Fixed "edit frameset" for tables in doc structure panel (#67084)
<li>Save "no underline" explicitely if the paraglayout says "underline" but the user removed the underline (#67735)
<li>Fixed successive image DnD
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
<li>fix display of text starting with a single quote
<li>fix problem formatting the whole row (#65504)
<li>make the top/middle/bottom alignment buttons work
<li>fix problem with reference from another sheet (bug #60455)
<li>show indicator of chosen/selected cells (bug #58098)
<li>hide in-place cell editing when choosing other sheet
<li>proper zoom and display of formatted hyperlink (#66214)
<li>fix flickering problem with many hyperlinks (#65501)
<li>don't crash when leaving the preview in Konq (#65928)
<li>fix redraw problem with Print Preview (#60147)
<li>support only one zoom for two or more views
<li>fix painting problem with multiple views
<li>prevent possible crash with conditional formatting (#58713)
<li>fix dependency problem with automatic recalculation (#58097)
<li>better adjustment of cell references on cut&paste
<li>fix crash on csv import (#66047)
<li>fix problem for cells copy/cut to clipboard (#58712)
<li>show frame when embedded object is selected (#37152)
<li>better handling of "nothing to print" warning (#60147)
<li>when embedded, use real zoom instead of scaling (#45503)
<li>fix data sorting (#63317)
</ul>

<!--
<h3><a name="kugar">Kugar</a></h3>
<ul>

</ul>
-->

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>Made the connector tool snap to targets before the grid/help lines
<li>Made the select tool snap to targets before the grid when resizing connectors
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>

</ul>
-->

<h3><a name="karbon">Karbon</a></h3>
<ul>
- make imported SVG's visible by default
- Karbon freezes when opening karbon file (#68499)
- fixed loading recent files
- update statusbar info while moving the selection using arrow keys
- delete key deletes selected object (#68062)
- fixed zooming into rectangular areas (#60842)
- fixed crash with polyline tool drawing + Ctrl key (#63981)
</ul>

<h3><a name="filters">Filters</a></h3>

<em>KWord RTF export filter:</em>
<ul>
<li>be careful with font names containing spaces.
</ul>

<em>KWord's RTF import filter:</em>
<ul>
<li>allow non-ASCII style names
<li>fix header/footer when they are the same for all pages
<li>allow all combinaisons of first, odd, even page headers/footers
</ul>

<em>KWord's OOWriter import filter:</em>
<ul>
<li>basic table support
<li>better field support
<li>fix lists
</ul>

<em>KSpread's CSV import filter:</em>
<ul>
<li>be careful when the first column is declared as numeric by the user but in 
  reality it is not a number. (#66047)
</ul>


<h3>Previous changelogs</h3>
<a href="changelog-1.3rc1.php">1.3rc1</a> |
<a href="changelog-1.3beta4.php">1.3beta4</a> |
<a href="changelog-1.3beta3.php">1.3beta3</a> |
<a href="changelog-1.3beta2.php">1.3beta2</a> |
<a href="changelog-1.3beta1.php">1.3beta1</a>

<?php
  include("footer.inc");
?>
