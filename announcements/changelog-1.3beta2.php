<?php
  $page_title ='KOffice 1.3-beta2 Changelog';
  $site_root = '../';
  include("koffice.inc");
  include("header.inc");
?>

<p>
  The following summarizes the major changes to the KOffice Suite since the
  release of KOffice 1.3 beta1 one month ago.
</p>

<h3><a name="koffice_libs">KOffice Libraries</a></h3>
<ul>
<li>Support for opening backup files (e.g. foo.kwd~)</li>
<li>Page Layout Dialog: validate user input to prevent nonsense
(e.g. margins wider than page)</li>
</ul>

<h4>KoText library features (shared between KWord and KPresenter):</h4>
<em>Formatting:</em>
<ul>
<li>Fixed drawing of word-by-word underline and strikeout</li>
<li>Repainting fixes (in multiline paragraphs)</li>
<li>Linespacing fixes (at-least and multiple work as advertised, added "fixed")</li>
<li>Major reduction of the memory usage per paragraph</li>
<li>Hyphenation fixes (support for breaking the same words more than once)</li>
<li>Shadow is now a character property (instead of a paragraph property)</li>
<li>More precise painting of paragraph borders</li>
</ul>

<h3><a name="kword">KWord</a></h3>
<em>New features:</em>
<ul>
<li>PDF import filter</li>
</ul>

<em>Bugfixes:</em>
<ul>
<li>Frames default to "auto-resize" mode instead of "auto-create-new-page"</li>
<li>Better handing of "auto-resize" mode (manually-set size acts as minimum size)</li>
<li>Make the find dialog avoid the area where the match is
    (requires kdelibs-CVS, will be in kde-3.2)</li>
</ul>

<h3><a name="kpresenter">KPresenter</a></h3>
<em>New features:</em>
<ul>
<li>flip groups horizontally/vertically (#45561)</li>
</ul>

<em>Bug fixes:</em>
<ul>
<li>fixed loading of old documents with invalid paragraph indents</li>
<li>paste image gives tiny initial object (#59058)</li>
<li>setting the font size in the toolbar doesn't work (#39786)</li>
<li>objects disappears on the rightside of a dinA0 presentation (#37370)</li>
<li>large unwanted offset in print preview and printing (#56123)</li>
</ul>


<h3><a name="kspread">KSpread</a></h3>
<ul>
<li>adjust print zoom to limit printout to m x n pages</li>
<li>new functions: GETPIVOTDATA, BESSELI, BESSELJ, BESSELK, BESSELY,
  ERF, ERFC, CONVERT</li>
<li>new templates: Balance Sheet, Price Quotation, Packing Slip</li>
</ul>

<h3><a name="kugar">Kugar</a></h3>
<ul>
  <li>Kugar and Kugar Designer are now pure KOffice applications.
  Partification was made and KOffice zipped xml format is used</li>
  <li>Undo/Redo functionality in Kugar Designer</li>
  <li>Direct database support in Kugar</li>
</ul>

<h3><a name="kivio">Kivio</a></h3>
<ul>
<li>Fixed embeding of kivio in other KOffice app</li>
<li>Implemented real clipboard support</li>
<li>Added more stencils</li>
<li>Improved diastencil support</li>
<li>Added template support</li>
</ul>

<!--
<h3><a name="kformula">KFormula</a></h3>
<ul>

</ul>
-->

<h3><a name="karbon">Karbon</a></h3>
<ul>
<li>new tool controller</li>
<li>refactoring flattenpath commmand after WMF filter changes</li>
<li>zooming fix</li>
<li>svg exporting uses document dimension, not dimension of the active selection</li>
<li>new style docker introduced, with dragable cliparts</li>
<li>added aspect-ratio keeping way of scaling for select tool</li>
<li>various ui tweaks, including new icons</li>
<li>improved behaviour for strokefill preview widget</li>
<li>speedups on large documents for the document tree widget</li>
</ul>


<h3><a name="filters">Filters</a></h3>
<em>KWord:</em>
<ul>
<li>new OpenOffice.org Writer export filter</li>
</ul>

<em>KPresenter:</em>
<ul>
<li>new OpenOffice.org Impress export filter</li>
</ul>

<!--
<em>KSpread:</em>
<ul>

</ul>
-->

<em>Karbon:</em>
<ul>
<li>OpenOffice.org Draw import filter with limited functionality</li>
<li>Improvements on SVG import/export</li>
<li>Improvements on Kontour import filter</li>
</ul>


<?php
  include("footer.inc");
?>
